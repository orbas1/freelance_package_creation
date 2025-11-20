import React, { useState, useEffect } from 'react'
import { Text, View, SafeAreaView, Image, FlatList, TouchableOpacity, Alert, ActivityIndicator } from 'react-native'
import Styles from '../../../../styles/Styles';
import * as Constant from '../../../../constants/GlobalConstants';
import Feather from 'react-native-vector-icons/Feather';
import { useNavigation } from '@react-navigation/native';
import { SearchFilter } from "../../../../constants/svgIcons";
import DisputesCard from './components/DisputesCard';
import { useFetchDisputeListing } from '../../../../hooks';
import { useSelector } from 'react-redux';
import SearchInput from '../../../../components/baseComponents/SearchInput';

const index = () => {
    const [text, setText] = useState('')
    const token = useSelector((state) => state.auth.token);

    const { data: disputeListing, error: disputeListingError, isLoading: disputeListingLoading } = useFetchDisputeListing(10, token);


    useEffect(() => {
        if (disputeListingError) {
            Alert.alert('Error', 'An error occurred while fetching disputes. Please try again.');
        }
    }, [disputeListingError]);

    const paymentHistory = [
        { refNo: 'Ref# AZC32485', date: 'Jun 27, 2024', backgroundColor: '#FEE4E2', color: "#912018", Amount: 10, paymentMethod: "Bank Transfer", status: "Declined" },
        { refNo: 'Ref# AZC32485', date: 'Jun 27, 2024', backgroundColor: '#FEE4E2', color: "#912018", Amount: 10, paymentMethod: "Bank Transfer", status: "Paid" },
        { refNo: 'Ref# AZC32485', date: 'Jun 27, 2024', backgroundColor: '#FEE4E2', color: "#912018", Amount: 10, paymentMethod: "Bank Transfer", status: "Declined" },
        { refNo: 'Ref# AZC32485', date: 'Jun 27, 2024', backgroundColor: '#FEE4E2', color: "#912018", Amount: 10, paymentMethod: "Bank Transfer", status: "Refund" },
        { refNo: 'Ref# AZC32485', date: 'Jun 27, 2024', backgroundColor: '#FEE4E2', color: "#912018", Amount: 10, paymentMethod: "Bank Transfer", status: "Declined" },
        { refNo: 'Ref# AZC32485', date: 'Jun 27, 2024', backgroundColor: '#FEE4E2', color: "#912018", Amount: 10, paymentMethod: "Bank Transfer", status: "Paid" },
        { refNo: 'Ref# AZC32485', date: 'Jun 27, 2024', backgroundColor: '#FEE4E2', color: "#912018", Amount: 10, paymentMethod: "Bank Transfer", status: "Declined" },
        { refNo: 'Ref# AZC32485', date: 'Jun 27, 2024', backgroundColor: '#FEE4E2', color: "#912018", Amount: 10, paymentMethod: "Bank Transfer", status: "Refund" },
    ];

    const navigation = useNavigation();

    const handleGoBack = () => {
        navigation.goBack();
    }

    if (disputeListingLoading) {
        return (
            <SafeAreaView style={{ flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#F4F4FB' }}>
                <ActivityIndicator size="large" color="#EE4710" />
            </SafeAreaView>
        );
    }

    const renderEmptyComponent = () => (
        <View style={[Styles.emptyContainer, { height: 500 }]}>
            <Image
                style={{
                    alignSelf: 'center',
                    resizeMode: 'cover',
                }}

                source={require('../../../../assets/images/Empty.png')}
            />

            <View style={Styles.noProjectsToShowParent}>
                <Text style={[Styles.noProjectsTo, Styles.noProjectsToTypo]} numberOfLines={2}>No Disputes to Show!</Text>
                <Text style={[Styles.yourProjectList, Styles.noProjectsToTypo]} numberOfLines={2}>Your Dispute is empty.</Text>
            </View>
        </View>
    );

    return (
        <SafeAreaView
            style={{
                marginHorizontal: 10,
                backgroundColor: Constant.bgColor,
                flex: 1,
            }}>

            <View
                style={{
                    flexDirection: 'row',
                    alignItems: 'center',
                    justifyContent: 'space-between',
                }}>
                <View style={{ flexDirection: 'row', alignItems: 'center', marginBottom: 10 }}>
                    <Feather
                        onPress={() => handleGoBack()}
                        name="chevron-left"
                        color={Constant.iconColor}
                        size={20}
                    />
                    <View style={{ marginHorizontal: 15 }}>
                        <Text
                            style={{
                                color: Constant.blackColor,
                                fontSize: 20,
                                lineHeight: 30,
                                fontWeight: 600,
                                fontFamily: Constant.primaryFontSemiBold
                            }}>
                            Disputes listings
                        </Text>
                    </View>
                </View>
            </View>

            <View style={Styles.dashPayoutHistoryContainer}>
                <View style={{ width: "85%", marginRight: 10 }}>
                    {/* <CustomTextInput
                        value={text}
                        onChangeText={e => setText(e)}
                        placeholder="Search withdrawn records here"
                        type="text"
                        Color={'#00000006'}
                        iconRequired={true}
                        iconName={'search'}
                        iconColor={'#58585880'}
                        iconSize={20}
                    // width={"80%"}
                    /> */}
                    <SearchInput />
                </View>
                <TouchableOpacity
                    // onPress={togglePaymentHistorySheet}
                    style={{
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
                    }}>
                    <SearchFilter IconColor={'#585858'} strokeWidht={1.3} height={18} width={20} />
                </TouchableOpacity>
            </View>
            <View style={{
                flex: 1,
            }}>
                <FlatList
                    data={disputeListing?.data?.list}
                    keyExtractor={(item, index) => index.toString()}
                    renderItem={({ item }) => (
                        <DisputesCard
                            date={item.data}
                            amount={item.price}
                            status={item.status}
                            name={item.name}
                        />
                    )}
                    ListEmptyComponent={renderEmptyComponent}

                />
            </View>
        </SafeAreaView>
    )
}

export default index
