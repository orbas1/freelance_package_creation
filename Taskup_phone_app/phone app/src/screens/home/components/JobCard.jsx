import { View, Text, Image, TouchableOpacity, ActivityIndicator, SafeAreaView } from 'react-native';
import React, { useState } from 'react';
import { useNavigation } from '@react-navigation/native';
import { Heart, Location, BrifeCaseIcon, Users } from '../../../constants/svgIcons';
import * as Constant from "../../../constants/GlobalConstants"
import { useSelector } from 'react-redux';
import { updateSavedItem } from '../../../api/networkCalls';
import AlertComponent from '../../../components/AlertComponent';

const JobCard = ({ jobDetails, refetch }) => {
  const navigation = useNavigation();
  const [isLoading, setIsLoading] = useState(false)
  const user = useSelector((state) => state.auth.user);
  const token = useSelector((state) => state.auth.token);
  const [alert, setAlert] = useState({ visible: false, type: '', message: '' });

  const handleSavedItem = async (id, type) => {
    const param = {
      corresponding_id: id,
      type: type,
    };

    if (user) {
      setIsLoading(true);
      try {
        const response = await updateSavedItem(param, token);
        await refetch();
        setIsLoading(false);
        setAlert({ visible: true, type: 'Congratulations!', message: response.data });
      } catch (error) {
        setIsLoading(false);
      }
    } else {
      setAlert({ visible: true, type: 'Oops!', message: 'You need to lgoin to perform this action' });
    }
  };

  const handleCloseAlert = () => {
    setAlert({ visible: false, type: '', message: '' });
  };

  return (
    <SafeAreaView
      style={{
        backgroundColor: Constant.bgColor,
      }}>
      <TouchableOpacity
        style={{
          backgroundColor: '#fff',
          paddingHorizontal: 14,
          paddingTop: 14,
          borderRadius: 15,
          paddingBottom: 5,
          marginBottom: 5
        }}
        onPress={() => navigation.navigate('ProjectDetail', { id: jobDetails?.slug })}
      >
        <View
          style={{
            flexDirection: 'row',
            justifyContent: 'space-between',
          }}>
          <Text style={{
            fontWeight: '400',
            lineHeight: 18,
            fontSize: 12,
            color: '#585858',
            fontFamily: Constant.primaryFontRegular
          }}>
            {jobDetails?.posted_at}
          </Text>
          {
            user?.user_type != "buyer" &&
            <TouchableOpacity
              style={{
                backgroundColor: '#F7F7F8',
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
              onPress={() => handleSavedItem(jobDetails?.id, "project")}
            >

              {isLoading ? <ActivityIndicator size="small" color={Constant.primaryColor} /> : <Heart strokeWidth={1.3} height={14} width={14} iconColor={jobDetails?.is_favourite != 1 ? '#585858' : "red"} />}
            </TouchableOpacity>
          }

        </View>
        <Text style={{
          fontWeight: '500',
          lineHeight: 21,
          fontSize: 15,
          color: '#1E1E1E',
          fontFamily: Constant.primaryFontMedium
        }}>
          {jobDetails?.project_title}
        </Text>
        <View style={{
          flexDirection: 'row',
          alignItems: 'center',
          marginVertical: 10
        }}>
          <View style={{
            flexDirection: 'row',
            paddingVertical: 5,
            paddingHorizontal: 5,
            borderRadius: 8,
            backgroundColor: '#F2EEFA',
            marginRight: 5,
            alignItems: 'center'
          }}>
            <Location strokeWidth={1.3} height={12} width={12} iconColor={'#7A50EC'} />
            <Text style={{
              fontWeight: '500',
              lineHeight: 14,
              fontSize: 12,
              color: '#7A50EC',
              marginLeft: 5,
              fontFamily: Constant.primaryFontMedium
            }}>{jobDetails?.project_location}</Text>
          </View>

          <View style={{
            flexDirection: 'row',
            paddingVertical: 5,
            paddingHorizontal: 5,
            borderRadius: 8,
            backgroundColor: '#FEE4E2',
            alignItems: 'center',
            marginRight: 5
          }}>
            {/* <Ionicons name="location-outline" size={15} color="#912018" />
             */}
            <BrifeCaseIcon strokeWidth={1.3} height={12} width={12} iconColor={'#912018'} />
            <Text style={{
              fontWeight: '500',
              lineHeight: 14,
              fontSize: 12,
              color: '#912018',
              marginLeft: 5
            }}>{jobDetails.expertise_level}</Text>
          </View>
          <View style={{
            flexDirection: 'row',
            paddingVertical: 5,
            paddingHorizontal: 5,
            borderRadius: 8,
            backgroundColor: '#DCFAE6',
            alignItems: 'center'
          }}>
            <Users strokeWidth={1.3} height={12} width={12} iconColor={'#085D3A'} />
            <Text style={{
              fontWeight: '500',
              lineHeight: 14,
              fontSize: 12,
              color: '#085D3A',
              marginLeft: 5
            }}>{jobDetails?.project_hiring_seller} Freelancers</Text>
          </View>
        </View>
        <View style={{
          flexDirection: 'row',
          alignItems: 'center',
          justifyContent: 'space-between',
          backgroundColor: "#F7F7F8",
          paddingVertical: 8,
          paddingHorizontal: 5,
          borderRadius: 10
        }}>
          <View
            style={{
              flexDirection: 'row',
              alignItems: 'center',
              paddingHorizontal: 5,
            }}>
            <Image
              resizeMode="center"
              style={{ height: 24, width: 24, borderRadius: 24 / 2 }}
              source={{ uri: jobDetails?.project_author?.image }}
            />
            <View style={{ paddingLeft: 5 }}>
              <Text
                style={{
                  fontWeight: '400',
                  lineHeight: 18,
                  fontSize: 12,
                  color: '#1E1E1E',
                  fontFamily: Constant.primaryFontRegular
                }}>
                Author
              </Text>
              <Text
                style={{
                  fontWeight: '500',
                  lineHeight: 20,
                  fontSize: 14,
                  color: '#1E1E1E',
                  fontFamily: Constant.primaryFontMedium
                }}>
                {jobDetails?.project_author?.first_name}{""} {jobDetails?.project_author?.last_name}
              </Text>
            </View>

          </View>
          <View>
            <Text style={{
              fontWeight: '400',
              lineHeight: 18,
              fontSize: 12,
              color: '#1E1E1E',
              marginLeft: 5
            }}>{jobDetails?.project_type && "Fixed Price Project"}</Text>
            <View style={{ flexDirection: "row", alignSelf: "flex-end" }}>
              <Text style={{
                lineHeight: 18,
                fontSize: 12,
                color: '#1E1E1E',
              }}>
                $
              </Text>

              <Text style={{
                fontWeight: '600',
                lineHeight: 21,
                fontSize: 15,
                color: '#1E1E1E',
              }}> {jobDetails?.project_min_price}
              </Text>
              <Text style={{
                lineHeight: 18,
                fontSize: 12,
                color: '#1E1E1E',
              }}>
                {""} - {""}
              </Text>
              <Text style={{
                lineHeight: 18,
                fontSize: 12,
                color: '#1E1E1E',
              }}>
                {" "}${" "}
              </Text>

              <Text style={{
                fontWeight: '600',
                lineHeight: 21,
                fontSize: 15,
                color: '#1E1E1E',
              }}>
                {jobDetails?.project_max_price}</Text>
            </View>
          </View>
        </View>
      </TouchableOpacity>
      <AlertComponent
        type={alert?.type}
        message={alert?.message}
        onPress={handleCloseAlert}
        visible={alert.visible}
      />
    </SafeAreaView>
  );
};

export default JobCard;
