
import React, { useState, useEffect, useRef } from 'react';
import {
  View,
  Text,
  SafeAreaView,
  Image,
  FlatList,
  Dimensions,
  TouchableOpacity,
  ScrollView,
  ActivityIndicator
} from 'react-native';
import Feather from 'react-native-vector-icons/Feather';
import Ionicons from 'react-native-vector-icons/Ionicons';
import { useNavigation } from '@react-navigation/native';
import DetailPageHeader from '../../../components/baseComponents/DetailPageHeader';
import * as Constant from '../../../constants/GlobalConstants';
import HtmlRender from '../../../components/baseComponents/HtmlRender';
import Styles from '../../../styles/Styles';
import { useRoute } from '@react-navigation/native';
import { BrifeCaseIcon, Location, OpenEye, Users } from '../../../constants/svgIcons';
import { useFetchGigDetails } from "../../../hooks/index"
import Carousel from 'react-native-reanimated-carousel';
import { useSelector } from 'react-redux';


const GigsDetail = () => {
  const token = useSelector((state) => state.auth.token);
  const [selectedQuestion, setselectedQuestion] = useState(null);
  const [isVisible, setIsVisible] = useState(false);
  const route = useRoute();
  const { id } = route.params;
  const carouselRef = useRef(null);
  const { width: screenWidth } = Dimensions.get('window');
  const [index, setIndex] = useState(0)
  const { data: gigDetails, error: gigError, isLoading: isLoadinggigDetails, refetch } = useFetchGigDetails(id, token);


  useEffect(() => {
    if (gigError) {
      console.error('Error fetching gig details:', gigError);
    }
  }, [gigError]);

  if (isLoadinggigDetails) {
    return (
      <SafeAreaView style={{ flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#F4F4FB' }}>
        <ActivityIndicator size="large" color="#EE4710" />
      </SafeAreaView>
    );
  }
  const renderItem = ({ item, index }) => (
    <View key={index} style={Styles.carouselItem}>
      <Image source={{ uri: item?.file_path }} style={Styles.carouselImage} />
    </View>
  );

  const images = gigDetails?.data?.attachments?.files || [];

  return (
    <SafeAreaView style={Styles.taskDetailsContainer}>
      <DetailPageHeader isFavourite={gigDetails?.data?.is_favourite} id={id} type={"gig"} refetch={refetch} />
      <ScrollView style={Styles.taskDetailsScrollView} showsVerticalScrollIndicator={false}>

        <View style={Styles.imageBackground}>
          <Carousel
            ref={carouselRef}
            width={screenWidth}
            height={200}
            style={{
              height: 800, alignSelf: "center",
              justifyContent: 'center',
            }}
            data={images}
            renderItem={renderItem}
            onSnapToItem={(index) => setIndex(index)}
            mode="parallax"
            modeConfig={{
              parallaxScrollingScale: 0.9,
              parallaxScrollingOffset: 50,
            }}
          />
        </View>
        <View style={Styles.detailsContainer}>
          <View style={Styles.userInfoContainer}>
            <View style={Styles.userInfo}>
              <Image
                resizeMode="center"
                style={Styles.userAvatar}
                source={{ uri: gigDetails?.data?.user_avatar }}
              />
              <Text style={[Styles.userName, { marginLeft: 10 }]}>
                {gigDetails?.data?.auther}
              </Text>
              <View style={Styles.userBadge}>
                <Ionicons name="flash" size={11} color="#EE4710" />
                <Text style={Styles.userBadgeText}>
                  PRO
                </Text>
              </View>
            </View>
          </View>
          <Text style={[{
            marginVertical: 5,
            fontFamily: Constant.primaryFontSemiBold,
            fontSize: 20,
            lineHeight: 30,
            fontWeight: "700",
            color: "#000",
            textAlign: "left"
          }]}>
            {gigDetails?.data?.title}
          </Text>
          <View style={Styles.infoSection}>
            <View style={Styles.infoItem}>
              <View style={[Styles.infoBadge, { backgroundColor: '#FEF0C7' }]}>
                {/* <Feather name="users" size={15} color="#F79009" /> */}
                <Users height={16} width={16} iconColor={'#F79009'} />
              </View>
              <Text style={[Styles.infoText, { marginLeft: 10, fontWeight: 400 }]}>
                Reviews
              </Text>
            </View>
            <Text style={[Styles.infoValue, { fontWeight: 500 }]}>
              {gigDetails?.data?.rating} ({gigDetails?.data?.reviews} reviews)
            </Text>
          </View>
          <View style={Styles.infoSection}>
            <View style={Styles.infoItem}>
              <View style={[Styles.infoBadge, { backgroundColor: '#EFF8FF' }]}>
                <BrifeCaseIcon height={16} width={16} iconColor={'#1570EF'} />
              </View>
              <Text style={[Styles.infoText, { marginLeft: 10 }]}>
                Sales
              </Text>
            </View>
            <Text style={Styles.infoValue}>
              {gigDetails?.data?.sales}
            </Text>
          </View>
          <View style={Styles.infoSection}>
            <View style={Styles.infoItem}>
              <View style={[Styles.infoBadge, { backgroundColor: '#F2EEFA' }]}>
                <Location height={16} width={16} iconColor={'#7A50EC'} />
              </View>
              <Text style={[Styles.infoText, { marginLeft: 10 }]}>
                location
              </Text>
            </View>
            <Text style={Styles.infoValue}>
              {gigDetails?.data?.address}
            </Text>
          </View>
          <View style={Styles.infoSection}>
            <View style={Styles.infoItem}>
              <View style={[Styles.infoBadge, { backgroundColor: '#FEE4E2' }]}>
                <OpenEye height={16} width={16} iconColor={'#D92D20'} />
              </View>
              <Text style={[Styles.infoText, { marginLeft: 10 }]}>
                Views
              </Text>
            </View>
            <Text style={Styles.infoValue}>
              {gigDetails?.data?.views}
            </Text>
          </View>
        </View>
        <View>
          <HtmlRender htmlContent={gigDetails?.data?.description} />
        </View>
        {gigDetails?.data?.faqs?.length > 0 && (
          <>
            <View style={[Styles.separator, { marginVertical: 20 }]} />
            <Text style={[Styles.sectionTitle, {
              color: '#1E1E1E',
              fontWeight: '700',
              fontFamily: Constant.primaryFontSemiBold,
            }]}>Frequently asked questions</Text>
            <FlatList
              showsVerticalScrollIndicator={false}
              data={gigDetails?.data?.faqs}
              keyExtractor={(x, i) => i.toString()}
              style={Styles.faqList}
              renderItem={({ item, index }) => (
                <View style={[Styles.faqItem, selectedQuestion === index && Styles.selectedQuestion]}>
                  <TouchableOpacity
                    onPress={() =>
                      setselectedQuestion(selectedQuestion === index ? null : index)
                    }
                    style={Styles.faqQuestionContainer}>
                    <Text style={{
                      fontSize: 16,
                      lineHeight: 24,
                      fontWeight: "700",
                      fontFamily: Constant.primaryFontSemiBold,
                      color: "#1e1e1e",
                      width: "90%"
                    }}>
                      {item.question}
                    </Text>
                    <Feather
                      name={selectedQuestion === index ? 'chevron-down' : 'chevron-right'}
                      color={Constant.fontColor}
                      size={20}
                    />
                  </TouchableOpacity>
                  {selectedQuestion === index && (
                    <View style={Styles.faqAnswerContainer}>
                      <Text style={Styles.faqAnswerText}>
                        {item.answer}
                      </Text>
                    </View>
                  )}
                  {(selectedQuestion - 1 === index || selectedQuestion === index) ? (
                    null
                  ) : <View style={Styles.separator} />}
                </View>
              )}
            />
          </>
        )}

      </ScrollView>

    </SafeAreaView>
  );
};


export default GigsDetail;

