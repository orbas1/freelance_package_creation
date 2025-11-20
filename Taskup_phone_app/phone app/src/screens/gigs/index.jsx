import { View, Text, SafeAreaView, FlatList, TouchableOpacity, Alert, ActivityIndicator, Image } from 'react-native'
import React, { useState, useEffect } from 'react'
import Feather from 'react-native-vector-icons/Feather';
import * as Constant from '../../constants/GlobalConstants';
import GigsListCard from './components/GigsListCard';
import { useNavigation } from '@react-navigation/native';
import GigsFilterSheet from './gigsDetail/components/GigsFilterSheet';
import { useFetchGigsListing } from '../../hooks';
import Styles from '../../styles/Styles';
import { SearchFilter } from '../../constants/svgIcons';
import { useSelector } from 'react-redux';

const Gigs = () => {
  const token = useSelector((state) => state.auth.token);

  const [isVisible, setIsVisible] = useState(false);
  const [gigsSearchListParams, setGigsSearchListParams] = useState({
    keyword: "",
    min_price: "",
    max_price: "",
    location: "",
    category: "",
    per_page: 100,
    sort_by: ""
  });

  const { data: gigsListing, error: gigsListingError, isLoading: isLoadinGigsListing, refetch } = useFetchGigsListing(gigsSearchListParams, token);


  useEffect(() => {
    if (gigsListingError) {
      Alert.alert('Error', 'An error occurred while fetching projects. Please try again.');
    }
  }, [gigsListingError]);

  if (isLoadinGigsListing) {
    return (
      <SafeAreaView style={{ flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#F4F4FB' }}>
        <ActivityIndicator size="large" color="#EE4710" />
      </SafeAreaView>
    );
  }

  const handleFilterApply = (filters) => {
    setGigsSearchListParams(filters);
    setIsVisible(false);
  };


  const toggleBottomSheet = () => {
    setIsVisible(!isVisible);
  };


  const renderGigsList = ({ item }) => <GigsListCard gigDetails={item} refetch={refetch} />;
  const navigation = useNavigation();

  const handleGoBack = () => {
    navigation.goBack();
  };

  const renderEmptyGigComponent = () => (
    <View style={Styles.emptyContainerGig}>
      <Image
        style={{
          alignSelf: 'center',
          resizeMode: 'cover'
        }}

        source={require('../../assets/images/EmptyGig.png')}
      />
      <View style={Styles.noProjectsToShowParent}>
        <Text style={[Styles.noProjectsTo, Styles.noProjectsToTypo]} numberOfLines={2}>No gig to Show!</Text>
        <Text style={[Styles.yourProjectList, Styles.noProjectsToTypo]} numberOfLines={2}>Your gig is empty. Create a gig to begin.</Text>
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
          marginBottom: 10
        }}>
        <View style={{ flexDirection: 'row', alignItems: 'center' }}>
          <Feather onPress={() => handleGoBack()} name="chevron-left" color={Constant.iconColor} size={20} />
          <View style={{ marginHorizontal: 15 }}>
            <Text
              style={{
                color: Constant.blackColor,
                fontSize: 20,
                lineHeight: 30,
                fontWeight: 600
              }}>
              Gigs
            </Text>
            <Text
              style={{
                color: Constant.fontColor,
                fontSize: 14,
                lineHeight: 20,
                fontFamily: 'SF-Pro-Text-RegularItalic',
              }}>
              {gigsListing?.data?.pagination?.total} search result(s) found
            </Text>
          </View>
        </View>
        <TouchableOpacity
          onPress={toggleBottomSheet}
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
        data={gigsListing?.data?.list}
        showsVerticalScrollIndicator={false}
        keyExtractor={item => item.id}
        renderItem={renderGigsList}
        ListEmptyComponent={renderEmptyGigComponent}
      />
      <GigsFilterSheet isVisible={isVisible} onClose={() => setIsVisible(false)} onApply={handleFilterApply}
        currentFilters={gigsSearchListParams} />
    </SafeAreaView>
  )
}



export default Gigs