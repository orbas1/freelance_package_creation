
import React, { useState, useEffect } from 'react';
import { StyleSheet, Text, View, SafeAreaView, FlatList, TouchableOpacity, Alert, ActivityIndicator, Image } from 'react-native';
import Styles from '../../../../styles/Styles';
import * as Constant from '../../../../constants/GlobalConstants';
import Feather from 'react-native-vector-icons/Feather';
import { useNavigation } from '@react-navigation/native';
import { useFetchInvoiceListing } from '../../../../hooks';
import { useSelector } from 'react-redux';
import SearchInput from '../../../../components/baseComponents/SearchInput';
import InvoiceCard from './components/invoiceCard';
import { SearchFilter } from "../../../../constants/svgIcons";
import InvoiceFilterSheet from './components/invoiceFilterSheet';

const Index = () => {
    const [searchTerm, setSearchTerm] = useState('');
    const [isVisible, setIsVisible] = useState(false);
    const token = useSelector((state) => state.auth.token);
    const { data: invoiceListing, error: invoiceListingError, isLoading: invoiceListingLoading } = useFetchInvoiceListing(10, token);

    const [filteredInvoices, setFilteredInvoices] = useState(invoiceListing?.data?.list || []);

    const handleFilterChange = ({ status, searchTerm }) => {
        const filtered = invoiceListing?.data?.list.filter(invoice => {
            const statusMatch = status === 'all' || invoice.status === status;
            const searchMatch = !searchTerm || invoice.type.toLowerCase().includes(searchTerm.toLowerCase());
            return statusMatch && searchMatch;
        });
        setFilteredInvoices(filtered);
    };

    useEffect(() => {
        if (invoiceListingError) {
            Alert.alert('Error', 'An error occurred while fetching invoices. Please try again.');
        }
    }, [invoiceListingError]);

    useEffect(() => {
        if (invoiceListing?.data?.list) {
            setFilteredInvoices(invoiceListing.data.list);
        }
    }, [invoiceListing]);

    const navigation = useNavigation();

    const handleGoBack = () => {
        navigation.goBack();
    };

    if (invoiceListingLoading) {
        return (
            <SafeAreaView style={{ flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#F4F4FB' }}>
                <ActivityIndicator size="large" color="#EE4710" />
            </SafeAreaView>
        );
    }

    const toggleInvoiceFilterSheet = () => {
        setIsVisible(!isVisible);
    };

    const handleSearchChange = (text) => {
        setSearchTerm(text);
        handleFilterChange({ status: "all", searchTerm: text });
    };


    const renderEmptyComponent = () => (
        <View style={[Styles.emptyContainer, { height: 500 }]}>
            <Image
                style={{
                    alignSelf: 'center',
                    resizeMode: 'cover'
                }}
                source={require('../../../../assets/images/Empty.png')}
            />
            <View style={Styles.noProjectsToShowParent}>
                <Text style={[Styles.noProjectsTo, Styles.noProjectsToTypo]} numberOfLines={2}>No invoice to Show!</Text>
                <Text style={[Styles.yourProjectList, Styles.noProjectsToTypo]} numberOfLines={2}>Your invoice list is empty.</Text>
            </View>
        </View>
    );

    return (
        <SafeAreaView style={styles.safeAreaView}>
            <View style={styles.headerContainer}>
                <View style={styles.headerInnerContainer}>
                    <Feather
                        onPress={handleGoBack}
                        name="chevron-left"
                        color={Constant.iconColor}
                        size={20}
                    />
                    <View style={styles.headerTextContainer}>
                        <Text style={styles.headerText}>Invoices listings</Text>
                    </View>
                </View>
            </View>

            <View style={Styles.dashPayoutHistoryContainer}>
                <View style={styles.searchInputContainer}>
                    <SearchInput value={searchTerm} onChangeText={handleSearchChange} />
                </View>
                <TouchableOpacity
                    style={styles.searchFilterButton}
                    onPress={toggleInvoiceFilterSheet}
                >
                    <SearchFilter IconColor={'#585858'} strokeWidht={1.3} height={18} width={20} />
                </TouchableOpacity>
            </View>

            <View style={styles.scrollViewContent}>
                <FlatList
                    data={filteredInvoices}
                    keyExtractor={(item) => item.invoiceNumber}
                    renderItem={({ item }) => (
                        <InvoiceCard
                            status={item?.status}
                            date={item?.data}
                            type={item?.type}
                            amount={item?.amount}
                        />
                    )}
                    ListEmptyComponent={renderEmptyComponent}
                />
            </View>
            <InvoiceFilterSheet
                isVisible={isVisible}
                onClose={() => setIsVisible(false)}
                onFilterChange={handleFilterChange}
            />
        </SafeAreaView>
    );
};

const styles = StyleSheet.create({
    safeAreaView: {
        marginHorizontal: 10,
        backgroundColor: Constant.bgColor,
        flex: 1,
    },
    headerContainer: {
        flexDirection: 'row',
        alignItems: 'center',
        justifyContent: 'space-between',
    },
    headerInnerContainer: {
        flexDirection: 'row',
        alignItems: 'center',
        marginBottom: 10,
    },
    headerTextContainer: {
        marginHorizontal: 15,
    },
    headerText: {
        color: Constant.blackColor,
        fontSize: 20,
        lineHeight: 30,
        fontWeight: '600',
        fontFamily: Constant.primaryFontSemiBold,
    },
    dashPayoutHistoryContainer: {
        flexDirection: 'row',
        alignItems: 'center',
        justifyContent: 'space-between',
    },
    searchInputContainer: {
        width: "85%",
        marginRight: 10,
    },
    searchFilterButton: {
        backgroundColor: Constant.whiteColor,
        borderRadius: 12,
        width: 52,
        height: 52,
        alignItems: 'center',
        justifyContent: 'center',
        shadowColor: '#ddd',
        shadowOffset: {
            width: 0,
            height: 2,
        },
        shadowOpacity: 0.25,
        shadowRadius: 1.84,
        elevation: 3,
    },
    scrollViewContent: {
        flex: 1,
        backgroundColor: "#f8f8f8",
    },
    loadingContainer: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
    },
    emptyContainer: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
        marginTop: 20,
    },
    emptyText: {
        fontSize: 16,
        color: '#585858',
    },
});

export default Index;

