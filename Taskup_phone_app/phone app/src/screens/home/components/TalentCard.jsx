import { View, Text, ImageBackground, FlatList, TouchableOpacity, ActivityIndicator, SafeAreaView } from 'react-native';
import React, { useState } from 'react';
import Icon from 'react-native-vector-icons/FontAwesome6';
import Ionicons from 'react-native-vector-icons/Ionicons';
import * as Constant from '../../../constants/GlobalConstants';
import { useNavigation } from '@react-navigation/native';
import { Heart, Location, Dollar, Reviews } from '../../../constants/svgIcons';
import Styles from '../../../styles/Styles';
import { useSelector } from 'react-redux';
import { updateSavedItem } from '../../../api/networkCalls';
import AlertComponent from '../../../components/AlertComponent';

const TalentCard = ({ talentDetails, refetch }) => {
  const token = useSelector((state) => state.auth.token);
  const user = useSelector((state) => state.auth.user);
  const [isLoading, setIsLoading] = useState(false)
  const [alert, setAlert] = useState({ visible: false, type: '', message: '' });

  const MAX_VISIBLE_ITEMS = 4;
  const skills = talentDetails?.skills || [];
  const visibleSkills = skills.slice(0, MAX_VISIBLE_ITEMS);
  const remainingCount = skills.length - MAX_VISIBLE_ITEMS;
  const navigation = useNavigation();

  const handleSavedItem = async (id, type) => {
    const param = {
      corresponding_id: id,
      type: type,
    };

    if (user) {
      try {
        setIsLoading(true);
        const response = await updateSavedItem(param, token);
        if (response?.status === 200) {
          refetch();
          setIsLoading(false);
          setAlert({ visible: true, type: 'Congratulations!', message: response.data });
        }

      } catch (error) {
        setIsLoading(false);
      }
    } else {
      setAlert({ visible: true, type: 'Oops!', message: 'You need to lgoin to perform this action' });
    }
  };

  const renderItem = ({ item }) => (
    <View style={{
      backgroundColor: '#F7F7F8',
      borderRadius: 10,
      marginRight: 5,
      alignItems: 'center',
      justifyContent: 'center',
      paddingVertical: 5,
      paddingHorizontal: 10,
      marginBottom: 10,
    }}>
      <Text style={{
        fontWeight: '400',
        lineHeight: 14.4,
        fontSize: 12,
        textAlign: 'center',
        color: '#585858',
      }}>{item}</Text>
    </View>
  );

  const handleCloseAlert = () => {
    setAlert({ visible: false, type: '', message: '' });
  };
  return (
    <SafeAreaView style={{
      backgroundColor: Constant.bgColor,
    }}>
      <TouchableOpacity
        style={{
          backgroundColor: '#fff',
          padding: 5,
          borderRadius: 15,
          marginRight: 5,
          width: 250
        }}
        onPress={() => navigation.navigate('FreelancerDetail', { id: talentDetails.id })}

      >
        <ImageBackground
          imageStyle={{ borderRadius: 15, resizeMode: 'cover' }}
          source={talentDetails?.image ? { uri: talentDetails?.image } : require('../../../assets/images/noimage.png')}
          style={{
            height: 150,
            width: 240,
            borderRadius: 15,
            padding: 5,
          }}>
          {
            user?.user_type === "buyer" &&
            <TouchableOpacity
              style={{
                backgroundColor: '#fff',
                borderRadius: 5,
                width: 25,
                height: 25,
                alignSelf: 'flex-end',
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
              }}
              onPress={() => handleSavedItem(talentDetails.id, "profile")}
            >
              {isLoading ? <ActivityIndicator size="small" color={Constant.primaryColor} /> :
                talentDetails?.is_favourite != 1 ? <Heart strokeWidth={1.3} height={14} width={14} iconColor={'#585858'} /> : <Heart strokeWidth={1.3} height={14} width={14} iconColor={'red'} />
              }
            </TouchableOpacity>
          }

        </ImageBackground>
        <View
          style={{ marginVertical: 10, marginHorizontal: 10, flex: 1 }}>
          <View
            style={{
              flexDirection: 'row',
              alignItems: 'center',
              justifyContent: "space-between",
              marginBottom: 8
            }}>
            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
              <Text
                style={{
                  color: Constant.blackColor,
                  fontSize: 15,
                  lineHeight: 21,
                }}>
                {talentDetails.first_name}{" "}{talentDetails.last_name}
              </Text>
              <View style={{ borderRadius: 20, marginLeft: 5, backgroundColor: Constant.greenColor, padding: 3 }}>
                <Icon
                  name="check"
                  color={Constant.whiteColor}
                  size={10}
                />
              </View>

            </View>
            <View
              style={{
                backgroundColor: '#EE471010',
                paddingHorizontal: 10,
                paddingVertical: 5,
                borderRadius: 6,
                flexDirection: 'row',
                alignItems: 'center',
              }}>
              <Ionicons name="flash" size={11} color="#EE4710" />
              <Text
                style={{
                  fontWeight: '700',
                  lineHeight: 12.5,
                  fontSize: 8.93,
                  textAlign: 'center',
                  color: Constant.primaryColor,
                }}>
                PRO
              </Text>
            </View>
          </View>
          <View
            style={{
              flexDirection: 'row',
              alignItems: 'center',
              justifyContent: "space-between",
              marginBottom: 6
            }}>
            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
              <Reviews strokeWidth={1.3} height={12} width={12} iconColor={'#585858'} />
              <Text
                style={{
                  color: Constant.fontColor,
                  fontSize: 12,
                  lineHeight: 18,
                  fontFamily: Constant.primaryFontRegular,
                  fontWeight: 400,
                  marginLeft: 6
                }}>
                Review
              </Text>

            </View>
            <Text
              style={{
                color: Constant.secondaryfontColor,
                fontSize: 12,
                lineHeight: 18,
                fontWeight: 400,
                fontFamily: Constant.primaryFontRegular
              }}>
              {talentDetails.ratings_avg_rating == null ? 0 : talentDetails.ratings_avg_rating}({talentDetails.ratings_count} reviews)
            </Text>
          </View>
          <View
            style={{
              flexDirection: 'row',
              alignItems: 'center',
              justifyContent: "space-between",
              marginBottom: 6
            }}>
            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
              <Location strokeWidth={1.3} height={12} width={12} iconColor={'#585858'} />
              <Text
                style={{
                  color: Constant.fontColor,
                  fontSize: 12,
                  lineHeight: 18,
                  fontFamily: Constant.primaryFontRegular,
                  fontWeight: 400,
                  marginLeft: 6
                }}>
                Location
              </Text>

            </View>
            <Text
              style={{
                color: Constant.secondaryfontColor,
                fontSize: 12,
                lineHeight: 21,
                fontWeight: 400,
                fontFamily: Constant.primaryFontRegular
              }}>
              {talentDetails.address}
            </Text>
          </View>
          <View
            style={{
              flexDirection: 'row',
              alignItems: 'center',
              justifyContent: "space-between",
              marginBottom: 6
            }}>
            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
              <Dollar strokeWidth={1.3} height={11} width={8} iconColor={'#585858'} />
              <Text
                style={{
                  color: Constant.fontColor,
                  fontSize: 12,
                  lineHeight: 18,
                  fontFamily: Constant.primaryFontRegular,
                  fontWeight: 400,
                  marginLeft: 6
                }}>
                Hourly Rate
              </Text>

            </View>
            <View>

            </View>
            <View style={{ flexDirection: "row" }}>
              <Text style={{
                lineHeight: 18,
                fontSize: 12,
                color: '#1E1E1E',
              }}>
                $ {""}
              </Text>
              <Text
                style={{
                  color: Constant.secondaryfontColor,
                  fontSize: 15,
                  fontWeight: 700,
                  lineHeight: 21,
                }}>
                {talentDetails.hourly_rate}/hr
              </Text>
            </View>
          </View>
          <FlatList
            showsVerticalScrollIndicator={false}
            data={remainingCount > 0 ? [...visibleSkills, { isRemaining: true }] : visibleSkills}
            style={[Styles.tagList]}
            columnWrapperStyle={Styles.tagColumnWrapper}
            numColumns={20}
            keyExtractor={(x, i) => i.toString()}
            renderItem={({ item, index }) => {
              if (item.isRemaining) {
                return (
                  <View style={{ paddingTop: 10 }}>
                    <Text style={{
                      fontSize: 12,
                      lineHeight: 18,
                      fontFamily: Constant.primaryFontRegular,
                      color: "#1e1e1e",
                      textAlign: "left"
                    }}>+ {remainingCount} more</Text>
                  </View>
                );
              }
              return (
                <View style={Styles.tagItem}>
                  <View style={Styles.tagBadge}>
                    <Text style={Styles.tagText}>{item}</Text>
                  </View>
                </View>
              )
            }}
          />
        </View>
      </TouchableOpacity>
      <AlertComponent
        type={alert?.type}
        message={alert?.message}
        onPress={handleCloseAlert}
        visible={alert.visible}
      />
    </SafeAreaView>
  )
};

export default TalentCard;