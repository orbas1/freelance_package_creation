import { View, Text, SafeAreaView, Image, FlatList, TouchableOpacity, ActivityIndicator } from 'react-native';
import React, { useEffect, useState, useCallback } from 'react';
import Feather from 'react-native-vector-icons/Feather';
import * as Constant from '../../constants/GlobalConstants';
import { useNavigation, useFocusEffect } from '@react-navigation/native';
import { SearchFilter } from '../../constants/svgIcons';
import { useFetchSellersList } from '../../hooks';
import FreelancerCard from './components/FreelancerCard';
import FreelancerFilterSheet from './freelancerDetail/components/FreelancerFilterSheet';
import Styles from '../../styles/Styles';
import AlertComponent from '../../components/AlertComponent';
import { useSelector } from 'react-redux';

const Freelancers = () => {
  const navigation = useNavigation();
  const [isVisible, setIsVisible] = useState(false);
  const token = useSelector((state) => state.auth.token);
  const [alert, setAlert] = useState({ visible: false, type: '', message: '' });
  const [sellerListParams, setSellerListParams] = useState({
    selected_skills: [],
    keyword: "",
    languages: [],
    seller_min_hr_rate: "",
    seller_max_hr_rate: "",
    english_level: "",
    seller_type: [],
    selected_location: [],
    profile_id: "",
    per_page: 100,
    sort_by: "",
  })

  const { data: sellerListing, error: sellerListingError, isLoading: isLoadinSellerListing, refetch } = useFetchSellersList(sellerListParams, token);
  useFocusEffect(
    useCallback(() => {
      refetch();
    }, [refetch])
  )
  const toggleFreelancerFilterSheet = () => {
    setIsVisible(!isVisible);
  };

  useEffect(() => {
    if (sellerListingError) {
      setAlert({ visible: true, type: 'Oops!', message: 'An error occurred while fetching projects. Please try again.' });

    }
  }, [sellerListingError]);

  if (isLoadinSellerListing) {
    return (
      <SafeAreaView style={{ flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#F4F4FB' }}>
        <ActivityIndicator size="large" color="#EE4710" />
      </SafeAreaView>
    );
  }

  const handleGoBack = () => {
    navigation.goBack();
  };

  const handleFilterApply = (filters) => {
    setSellerListParams(filters);
  };

  const handleCloseAlert = () => {
    setAlert({ visible: false, type: '', message: '' });
  };


  const renderSellerList = ({ item }) => <FreelancerCard sellerDetails={item} refetch={refetch} />;

  const renderEmptyComponent = () => (
    <View style={Styles.emptyContainer}>
      <Image
        style={{
          alignSelf: 'center',
          resizeMode: 'cover'
        }}
        source={require('../../assets/images/EmptyTalent.png')}
      />
      <View style={Styles.noProjectsToShowParent}>
        <Text style={[Styles.noProjectsTo, Styles.noProjectsToTypo]} numberOfLines={2}>No Talent to Show!</Text>
        <Text style={[Styles.yourProjectList, Styles.noProjectsToTypo]} numberOfLines={2}>Your talent list is empty. Add a new talent to begin.</Text>
      </View>
    </View>
  );


  return (
    <SafeAreaView
      style={{
        marginHorizontal: 10,
        backgroundColor: Constant.bgColor,
        height: '100%'
      }}>
      <View
        style={{
          flexDirection: 'row',
          alignItems: 'center',
          justifyContent: 'space-between',
        }}>
        <View style={{ flexDirection: 'row', alignItems: 'center' }}>
          <Feather name="chevron-left" color={Constant.iconColor} size={20} onPress={() => handleGoBack()} />
          <View style={{ marginHorizontal: 15 }}>
            <Text
              style={{
                color: Constant.blackColor,
                fontSize: 20,
                lineHeight: 30,
                fontWeight: 600
              }}>
              Freelancers
            </Text>
            <Text
              style={{
                color: Constant.fontColor,
                fontSize: 14,
                lineHeight: 20,
                fontFamily: 'SF-Pro-Text-RegularItalic',
              }}>
              {sellerListing?.data?.pagination?.total} search result(s) found
            </Text>
          </View>
        </View>
        <TouchableOpacity
          onPress={toggleFreelancerFilterSheet}
          style={{
            backgroundColor: Constant.whiteColor,
            borderRadius: 10,
            width: 44,
            height: 44,
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
          <SearchFilter IconColor={"#585858"} strokeWidht={1.3} height={18} width={20} />
        </TouchableOpacity>
      </View>
      <FlatList
        data={sellerListing?.data?.list}
        showsVerticalScrollIndicator={false}
        keyExtractor={item => item.id}
        renderItem={renderSellerList}
        ListEmptyComponent={renderEmptyComponent}
      />
      <FreelancerFilterSheet isVisible={isVisible} onClose={() => setIsVisible(false)} onApply={handleFilterApply} currentFilters={sellerListParams} />

      {alert.visible && (
        <AlertComponent
          type={alert?.type}
          message={alert?.message}
          onPress={handleCloseAlert}
        />
      )}
    </SafeAreaView>
  );
};

export default Freelancers;
