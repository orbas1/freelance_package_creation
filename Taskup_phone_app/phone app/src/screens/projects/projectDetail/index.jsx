import React, { useState } from 'react';
import {
  View,
  Text,
  SafeAreaView,
  Image,
  FlatList,
  ScrollView,
  ActivityIndicator,
  Platform,
} from 'react-native';
import Ionicons from 'react-native-vector-icons/Ionicons';
import { useNavigation } from '@react-navigation/native';
import DetailPageHeader from '../../../components/baseComponents/DetailPageHeader';
import * as Constant from '../../../constants/GlobalConstants';
import HtmlRender from '../../../components/baseComponents/HtmlRender';
import Styles from '../../../styles/Styles';
import { useRoute } from '@react-navigation/native';
import { BrifeCaseIcon, Calendar, Location, OpenEye, Planet, Users, Flag } from '../../../constants/svgIcons';
import { useFetchProjectDetail } from "../../../hooks/index"
import { useSelector } from 'react-redux';

const ProjectDetail = () => {
  const token = useSelector((state) => state.auth.token);
  const navigation = useNavigation();
  const route = useRoute();
  const { id } = route.params;

  const { data: projectsDetails, error: projectsError, isLoading: isLoadingProjectsDetails, refetch } = useFetchProjectDetail(id, token);

  if (isLoadingProjectsDetails) {
    return (
      <SafeAreaView style={{ flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#F4F4FB' }}>
        <ActivityIndicator size="large" color="#EE4710" />
      </SafeAreaView>
    );
  }

  const htmlContent = projectsDetails?.data?.project_description || '';

  return (
    <SafeAreaView style={{
      backgroundColor: '#F4F4FB', flex: 1, marginBottom: Platform.OS === 'android' ? 10 : 0,
    }}>
      <DetailPageHeader typeProject={true} isFavourite={projectsDetails?.data?.is_favourite} id={id} type={"project"} refetch={refetch} />

      <ScrollView
        style={{
          marginHorizontal: 10, paddingTop: Platform.OS === 'android' ? 80 : 70,
        }}
        showsVerticalScrollIndicator={false}>
        <View
          style={{
            padding: 20,
            backgroundColor: '#fff',
            borderRadius: 20,
          }}>
          <View
            style={{
              flexDirection: 'row',
              justifyContent: 'space-between',
              alignItems: 'center',
            }}>
            <View
              style={{
                flexDirection: 'row',
                alignItems: 'center',
              }}>
              <Image
                resizeMode="center"
                style={{ height: 24, width: 24, borderRadius: 24 / 2 }}
                source={{ uri: projectsDetails?.data?.project_author?.image }}
              />
              <Text
                style={{
                  fontWeight: '500',
                  lineHeight: 20,
                  fontSize: 14,
                  textAlign: 'center',
                  color: '#1E1E1E',
                  marginLeft: 10,
                  fontFamily: Constant.primaryFontMedium
                }}>
                {projectsDetails?.data?.project_author?.name}
              </Text>
              <View
                style={{
                  backgroundColor: '#EE471020',
                  paddingHorizontal: 4,
                  borderRadius: 5,
                  flexDirection: 'row',
                  alignItems: 'center',
                  marginLeft: 10,
                }}>
                <Ionicons name="flash" size={11} color="#EE4710" />
                <Text
                  style={{
                    fontWeight: '700',
                    lineHeight: 24,
                    fontSize: 10,
                    textAlign: 'center',
                    color: '#EE4710',
                    marginLeft: 2,
                  }}>
                  PRO
                </Text>
              </View>
            </View>
          </View>
          <Text
            style={{
              fontWeight: '600',
              lineHeight: 30,
              fontSize: 20,
              // marginVertical: 8,
              color: '#1E1E1E',
              fontFamily: Constant.primaryFontSemiBold
            }}>
            {projectsDetails?.data?.project_title}
          </Text>
          <View style={{ paddingBottom: 10, paddingTop: 2 }}>
            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
              <Calendar height={12} width={12} iconColor={'#585858'} />
              <Text
                style={{
                  fontSize: 14,
                  lineHeight: 20,
                  fontFamily: Constant.primaryFontRegular,
                  color: '#585858',
                  fontWeight: 400,
                  paddingHorizontal: 10,
                }}>
                {projectsDetails?.data?.posted_at}
              </Text>
              <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                <Location height={12} width={12} iconColor={'#585858'} />
                <Text
                  style={{
                    fontSize: 14,
                    lineHeight: 20,
                    fontFamily: Constant.primaryFontRegular,
                    color: '#585858',
                    fontWeight: 400,
                    paddingLeft: 10,
                  }}>
                  {projectsDetails?.data?.address}
                </Text>
              </View>
            </View>
          </View>
          <View
            style={{
              alignSelf: 'stretch',
              borderRadius: 10,
              backgroundColor: '#ecfdf3',
              width: '100%',
              alignItems: 'center',
              justifyContent: 'space-between',
              paddingHorizontal: 20,
              paddingVertical: 14,
              flexDirection: 'row',
              marginBottom: 20,
            }}>
            <Text
              style={{
                fontSize: 14,
                lineHeight: 20,
                fontFamily: Constant.primaryFontRegular,
                color: '#585858',
                textAlign: 'center',
                // fontWeight: 400,
              }}>
              Budget
            </Text>
            <View style={{ flexDirection: 'row' }}>
              <Text
                style={{
                  fontSize: 18,
                  lineHeight: 28,
                  fontWeight: '600',
                  fontFamily: Constant.primaryFontSemiBold,
                  color: '#000',
                  textAlign: 'center',
                }}>
                {projectsDetails?.data?.project_max_price}
              </Text>
              <Text
                style={{
                  fontSize: 18,
                  lineHeight: 28,
                  fontWeight: '600',
                  fontFamily: Constant.primaryFontSemiBold,
                  color: '#000',
                  textAlign: 'center',
                }}>
                -{" "}
              </Text>
              <Text
                style={{
                  fontSize: 18,
                  lineHeight: 28,
                  fontWeight: '600',
                  fontFamily: Constant.primaryFontSemiBold,
                  color: '#000',
                  textAlign: 'center',
                }}>
                {projectsDetails?.data?.project_min_price}
              </Text>
            </View>
          </View>
          <Text
            style={{
              fontSize: 16,
              lineHeight: 24,
              fontWeight: '500',
              fontFamily: Constant.primaryFontMedium,
              color: '#000',
            }}>
            Project requirements
          </Text>
          <View
            style={{
              flexDirection: 'row',
              alignItems: 'center',
              marginTop: 8,
              justifyContent: 'space-between',
            }}>
            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
              <View
                style={{
                  backgroundColor: '#FEF0C7',
                  padding: 10,
                  borderRadius: 7.5,
                }}>
                <Users height={16} width={16} iconColor={'#DC6803'} />
              </View>

              <Text
                style={{
                  fontWeight: '400',
                  lineHeight: 20,
                  fontSize: 14,
                  color: '#585858',
                  marginLeft: 10,
                  fontFamily: Constant.primaryFontRegular
                }}>
                Hiring capacity
              </Text>
            </View>

            <Text
              style={{
                fontWeight: '500',
                lineHeight: 20,
                fontSize: 14,
                color: '#000000',
                fontFamily: Constant.primaryFontMedium
              }}>
              {projectsDetails?.data?.project_hiring_seller} freelancers
            </Text>
          </View>
          <View
            style={{
              flexDirection: 'row',
              alignItems: 'center',
              marginTop: 8,
              justifyContent: 'space-between',
            }}>
            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
              <View
                style={{
                  backgroundColor: '#EFF8FF',
                  padding: 10,
                  borderRadius: 7.5,
                }}>
                <BrifeCaseIcon height={16} width={16} iconColor={'#2E90FA'} />
              </View>

              <Text
                style={{
                  fontWeight: '400',
                  lineHeight: 20,
                  fontSize: 14,
                  color: '#585858',
                  marginLeft: 10,
                  fontFamily: Constant.primaryFontRegular
                }}>
                Expertise
              </Text>
            </View>

            <Text
              style={{
                fontWeight: '500',
                lineHeight: 20,
                fontSize: 14,
                color: '#000000',
                fontFamily: Constant.primaryFontMedium
              }}>
              {projectsDetails?.data?.expertise_level}
            </Text>
          </View>
          <View
            style={{
              flexDirection: 'row',
              alignItems: 'flex-start',
              marginTop: 8,
              justifyContent: 'space-between',
              width: '100%',
            }}
          >

            <View style={{ flexDirection: 'row', alignItems: 'center', width: '50%' }}>
              <View
                style={{
                  backgroundColor: '#F2EEFA',
                  padding: 10,
                  borderRadius: 7.5,
                }}>
                <Planet height={16} width={16} iconColor={'#7A50EC'} />
              </View>

              <Text
                style={{
                  fontWeight: '400',
                  lineHeight: 20,
                  fontSize: 14,
                  color: '#585858',
                  marginLeft: 10,
                  fontFamily: Constant.primaryFontRegular
                }}>
                Languages
              </Text>
            </View>
            <View style={{ flexDirection: 'row', flexWrap: 'wrap', width: '60%', justifyContent: 'flex-end' }}>
              <View style={{ flexDirection: 'row', flexWrap: 'wrap', width: '100%' }}>
                {projectsDetails?.data?.language.map((item, index) => (
                  <View key={item.name} style={{ flexDirection: 'row', alignItems: 'center' }}>
                    <Text
                      style={{
                        fontWeight: '500',
                        lineHeight: 20,
                        fontSize: 14,
                        color: '#000000',
                        fontFamily: Constant.primaryFontMedium
                      }}
                    >
                      {item.name}
                    </Text>
                    {index < projectsDetails?.data?.language.length - 1 && (
                      <Text
                        style={{
                          fontWeight: '500',
                          lineHeight: 20,
                          fontSize: 14,
                          color: '#000000',
                          fontFamily: Constant.primaryFontMedium
                        }}
                      >
                        ,{' '}
                      </Text>
                    )}
                  </View>
                ))}
              </View>
            </View>

          </View>
          <View
            style={{
              flexDirection: 'row',
              alignItems: 'center',
              marginTop: 8,
              justifyContent: 'space-between',
            }}>
            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
              <View
                style={{
                  backgroundColor: '#FEE4E2',
                  padding: 10,
                  borderRadius: 7.5,
                }}>
                <Calendar height={16} width={16} iconColor={'#D92D20'} />
              </View>

              <Text
                style={{
                  fontWeight: '400',
                  lineHeight: 20,
                  fontSize: 14,
                  color: '#585858',
                  marginLeft: 10,
                  fontFamily: Constant.primaryFontRegular
                }}>
                Project duration
              </Text>
            </View>
            <Text
              style={{
                fontWeight: '500',
                lineHeight: 20,
                fontSize: 14,
                color: '#000000',
                fontFamily: Constant.primaryFontMedium
              }}>
              {projectsDetails?.data?.project_duration}
            </Text>
          </View>
          <View
            style={{
              flexDirection: 'row',
              alignItems: 'center',
              marginTop: 8,
              justifyContent: 'space-between',
            }}>
            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
              <View
                style={{
                  backgroundColor: '#f7f7f8',
                  padding: 10,
                  borderRadius: 7.5,
                }}>
                <Flag iconColor={'#585858'} height={16} width={16} />
              </View>

              <Text
                style={{
                  fontWeight: '400',
                  lineHeight: 20,
                  fontSize: 14,
                  color: '#585858',
                  marginLeft: 10,
                }}>
                Project category
              </Text>
            </View>
            <Text
              style={{
                fontWeight: '500',
                lineHeight: 20,
                fontSize: 14,
                color: '#000000',
              }}>
              {projectsDetails?.data?.category}
            </Text>
          </View>
        </View>
        {htmlContent ? (
          <>
            <Text style={[Styles.projectDetailJobHeading, { paddingVertical: 20 }]}>
              Job description
            </Text>
            <HtmlRender htmlContent={htmlContent} />
          </>
        ) : null}
        {projectsDetails?.data?.skills ? (
          <>
            <View style={[Styles.separator, { marginVertical: 15 }]} />

            <FlatList
              showsVerticalScrollIndicator={false}
              data={projectsDetails?.data?.skills}
              style={[Styles.tagList, { paddingBottom: 80 }]}
              columnWrapperStyle={Styles.tagColumnWrapper}
              numColumns={20}
              keyExtractor={(x, i) => i.toString()}
              ListHeaderComponent={
                <Text style={Styles.sectionTitle}>Skills required</Text>
              }
              renderItem={({ item, index }) => (
                <View style={Styles.tagItem}>
                  <View style={Styles.tagBadge}>
                    <Text style={Styles.tagText}>{item}</Text>
                  </View>
                </View>
              )}
            />
          </>
        ) : null}

      </ScrollView>
    </SafeAreaView>
  );
};

export default ProjectDetail;
