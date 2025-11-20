import React, { useState, useEffect } from 'react';
import { StyleSheet, Text, View, SafeAreaView, FlatList, TouchableOpacity, Alert, Dimensions, Image, ActivityIndicator } from 'react-native';
import * as Constant from '../../../../constants/GlobalConstants';
import Feather from 'react-native-vector-icons/Feather';
import { useNavigation } from '@react-navigation/native';
import { SearchFilter } from "../../../../constants/svgIcons";
import { useSelector } from 'react-redux';
import { useFetchFavouriteListing } from '../../../../hooks';
import GigsListCard from '../../../gigs/components/GigsListCard';
import SavedItemFilterSheet from './savedItemFilterSheet';
import FreelancerCard from '../../../freelancers/components/FreelancerCard';
import ProjectsListCard from '../../../projects/components/ProjectsListCard';
import Styles from '../../../../styles/Styles';

const index = () => {
    const token = useSelector((state) => state.auth.token);
    const user = useSelector((state) => state.auth.user);
    const [isVisible, setIsVisible] = useState(false);
    const [favouriteItemParam, setFavouriteItemParam] = useState(user?.user_type == "buyer" ? 'gig' : "project");

    const { data: favouriteListing, error: favouriteListingError, isLoading: favouriteListingLoading, refetch } = useFetchFavouriteListing(favouriteItemParam, token);

    useEffect(() => {
        if (favouriteListingError) {
            Alert.alert('Error', 'An error occurred while fetching favourites. Please try again.');
        }
    }, [favouriteListingError]);

    useEffect(() => {
        refetch();
    }, [favouriteItemParam]);

    const navigation = useNavigation();

    const handleGoBack = () => {
        navigation.goBack();
    }

    const handleFilterChange = (val) => {
        setFavouriteItemParam(val);
    };

    const toggleFilterSheet = () => {
        setIsVisible(!isVisible);
    };

    const renderGigsList = ({ item }) => <GigsListCard gigDetails={item} refetch={refetch} />;
    const renderSellerList = ({ item }) => <FreelancerCard sellerDetails={item} refetch={refetch} />;
    const renderProjectsList = ({ item }) => <ProjectsListCard jobDetails={item} refetch={refetch} />;


    const renderEmptyProject = () => (
        <View style={{
            justifyContent: 'center',
            alignItems: 'center',
            height: Dimensions.get('window').height,
            backgroundColor: Constant.bgColor,
            marginTop: -80

        }}>
            <Image
                style={{
                    alignSelf: 'center',
                    resizeMode: 'cover'
                }}

                source={require('../../../../assets/images/EmptyGig.png')}
            />
            <View style={Styles.noProjectsToShowParent}>
                <Text style={[styles.noProjectsTo, styles.noProjectsToTypo]} numberOfLines={2}>No favourite projects to Show!</Text>

            </View>
        </View>
    );

    const renderEmptyTalentComponent = () => (
        <View style={{
            justifyContent: 'center',
            alignItems: 'center',
            height: Dimensions.get('window').height,
            backgroundColor: Constant.bgColor,
            marginTop: -80

        }}>
            <Image
                style={{
                    alignSelf: 'center',
                    resizeMode: 'cover'
                }}

                source={require('../../../../assets/images/EmptyTalent.png')}
            />
            <View style={Styles.noProjectsToShowParent}>
                <Text style={[styles.noProjectsTo, styles.noProjectsToTypo]} numberOfLines={2}>No favourite talent to Show!</Text>

            </View>
        </View>
    );

    const renderEmptyGigsComponent = () => (
        <View style={{
            justifyContent: 'center',
            alignItems: 'center',
            alignSelf: 'center',
            alignContent: 'center',
            height: Dimensions.get('window').height,
            backgroundColor: Constant.bgColor,
            marginTop: -80

        }}>
            <Image
                style={{
                    alignSelf: 'center',
                    resizeMode: 'cover'
                }}

                source={require('../../../../assets/images/EmptyGig.png')}

            />
            <View style={Styles.noProjectsToShowParent}>
                <Text style={[styles.noProjectsTo, styles.noProjectsToTypo]} numberOfLines={2}>No favourite gig to Show!</Text>

            </View>
        </View>
    );

    return (
        <SafeAreaView style={styles.container}>
            <View style={styles.header}>
                <View style={styles.headerLeft}>
                    <Feather
                        onPress={handleGoBack}
                        name="chevron-left"
                        color={Constant.iconColor}
                        size={20}
                    />
                    <View style={styles.headerTitle}>
                        <Text style={[styles.headerText, {
                            color: Constant.blackColor,
                            fontWeight: '700', fontFamily: Constant.primaryFontSemiBold
                        }]}>Favourite {favouriteItemParam}s </Text>
                    </View>
                </View>
                {user?.user_type == "buyer" && (
                    <TouchableOpacity
                        onPress={toggleFilterSheet}
                        style={styles.filterButton}>
                        <SearchFilter IconColor={'#585858'} strokeWidht={1.3} height={18} width={20} />
                    </TouchableOpacity>
                )}
            </View>
            {favouriteListingLoading ? (
                <View style={styles.loaderView}>
                    <ActivityIndicator size="large" color="#EE4710" />
                </View>
            ) : (
                user?.user_type == "buyer" ? (
                    favouriteItemParam === 'gig' ? (
                        <FlatList
                            data={favouriteListing?.data?.list}
                            showsVerticalScrollIndicator={false}
                            keyExtractor={item => item?.id}
                            renderItem={renderGigsList}
                            ListEmptyComponent={renderEmptyGigsComponent}
                        />
                    ) : (
                        <FlatList
                            data={favouriteListing?.data?.list}
                            showsVerticalScrollIndicator={false}
                            keyExtractor={item => item?.id}
                            renderItem={renderSellerList}
                            ListEmptyComponent={renderEmptyTalentComponent}
                        />
                    )
                ) : (
                    <FlatList
                        data={favouriteListing?.data?.list}
                        showsVerticalScrollIndicator={false}
                        keyExtractor={item => item?.id}
                        renderItem={renderProjectsList}
                        ListEmptyComponent={renderEmptyProject}
                    />
                )
            )}
            <SavedItemFilterSheet
                isVisible={isVisible}
                onClose={() => setIsVisible(false)}
                onFilterChange={handleFilterChange}
            />
        </SafeAreaView>
    )
}

const styles = StyleSheet.create({
    container: {
        marginHorizontal: 10,
        backgroundColor: Constant.bgColor,
        flex: 1,
        // height: "100%"
    },
    header: {
        flexDirection: 'row',
        alignItems: 'center',
        justifyContent: 'space-between',
        marginBottom: 20,
        marginTop: 10
    },
    headerLeft: {
        flexDirection: 'row',
        alignItems: 'center',
    },
    headerTitle: {
        marginHorizontal: 15,
    },
    headerText: {
        color: Constant.blackColor,
        fontSize: 20,
        lineHeight: 30,
        fontWeight: '600',
        fontFamily: Constant.primaryFontSemiBold,
    },
    filterButton: {
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
    emptyContainer: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
        marginTop: 20,
    },
    noProjectsToTypo: {
        overflow: "hidden",
        textAlign: "center",
        color: "#585858",
        fontFamily: "SF Pro Text",
        marginTop: 5
    },
    noProjectsTo: {
        fontSize: 14,
        lineHeight: 20,
        fontWeight: "600"
    },
    yourProjectList: {
        fontSize: 12,
        lineHeight: 18
    },
    noProjectsToShowParent: {
        flex: 1,
        width: "100%",
        alignItems: "center",
        justifyContent: "center"
    },

    loaderView: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
        backgroundColor: '#F4F4FB'
    }
});
export default index;


