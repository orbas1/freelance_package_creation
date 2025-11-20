import { View, Text, SafeAreaView, ImageBackground, Image, TouchableOpacity, Alert, ActivityIndicator } from 'react-native';
import React, { useState } from 'react';
import Ionicons from 'react-native-vector-icons/Ionicons';
import * as Constant from '../../../constants/GlobalConstants';
import { useNavigation } from '@react-navigation/native';
import { Heart, Location, Reviews } from '../../../constants/svgIcons';
import { useSelector } from 'react-redux';
import { updateSavedItem } from '../../../api/networkCalls';
import AlertComponent from '../../../components/AlertComponent';

const GigsListCard = ({ gigDetails, refetch }) => {
  const navigation = useNavigation();
  const user = useSelector((state) => state.auth.user);
  const token = useSelector((state) => state.auth.token);
  const [isLoading, setIsLoading] = useState(false)
  const [alert, setAlert] = useState({ visible: false, type: '', message: '' });
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
          flexDirection: 'row',
          alignItems: 'center',
          backgroundColor: '#fff',
          padding: 5,
          borderRadius: 15,
          marginRight: 5,
          marginBottom: 5,
        }}
        onPress={() => navigation.navigate('GigsDetail', { id: gigDetails.id })}
      >
        <ImageBackground
          imageStyle={{ borderRadius: 15, resizeMode: 'cover' }}
          source={{ uri: gigDetails?.attachments?.files[0]?.file_path }}
          style={{
            height: '100%',
            width: 150,
            borderRadius: 15,
          }}>
          {
            user?.user_type === "buyer" &&
            <TouchableOpacity
              style={{
                backgroundColor: '#fff',
                borderRadius: 5,
                width: 25,
                height: 25,
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
                margin: 5
              }}
              onPress={() => handleSavedItem(gigDetails?.id, "gig")}
            >
              {isLoading ? <ActivityIndicator size="small" color={Constant.primaryColor} /> :
                gigDetails?.is_favourite != 1 ? <Heart strokeWidth={1.3} height={14} width={14} iconColor={'#585858'} /> : <Heart strokeWidth={1.3} height={14} width={14} iconColor={'red'} />
              }
            </TouchableOpacity>
          }
        </ImageBackground>
        <View style={{ flex: 1, margin: 5 }}>
          <View
            style={{
              flexDirection: 'row',
              justifyContent: 'space-between',
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
                source={{ uri: gigDetails?.user_avatar }}
              />
              <Text
                style={{
                  fontWeight: '500',
                  lineHeight: 20,
                  fontSize: 14,
                  textAlign: 'center',
                  color: '#1E1E1E',
                  marginLeft: 5,
                }}>
                {gigDetails?.auther}
              </Text>
            </View>
            <View
              style={{
                backgroundColor: '#EE471020',
                paddingHorizontal: 4,
                borderRadius: 5,
                flexDirection: 'row',
                alignItems: 'center',
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
          <Text
            style={{
              fontWeight: '500',
              lineHeight: 21,
              fontSize: 15,
              marginTop: 5,
              color: '#1E1E1E',
              marginLeft: 5,
              fontFamily: Constant.primaryFontMedium
            }}>
            {gigDetails?.title}
          </Text>
          <View
            style={{
              flexDirection: 'row',
              alignItems: 'center',
              paddingHorizontal: 5,
              marginTop: 5,
            }}>
            <Reviews iconColor={'#585858'} height={12} width={13} />
            <Text
              style={{
                fontWeight: '400',
                lineHeight: 18,
                fontSize: 12,
                color: '#585858',
                marginLeft: 5,
                fontFamily: Constant.primaryFontRegular
              }}> {gigDetails?.ratings_count} reviews
            </Text>
          </View>
          {
            gigDetails?.address && <View
              style={{
                flexDirection: 'row',
                alignItems: 'center',
                paddingHorizontal: 5,
                marginTop: 5,
              }}>
              <Location iconColor={'#585858'} height={12} width={13} />
              <Text
                style={{
                  fontWeight: '400',
                  lineHeight: 18,
                  fontSize: 12,
                  color: '#585858',
                  marginLeft: 5,
                  fontFamily: Constant.primaryFontRegular
                }}>
                {gigDetails?.address}
              </Text>
            </View>
          }

          <>
            {gigDetails?.minimum_price && (
              <View style={{
                flexDirection: 'row',
                alignItems: 'center',
                justifyContent: 'space-between',
                marginTop: 5,
                backgroundColor: '#F7F7F8',
                padding: 10,
                borderRadius: 10,
                marginLeft: 5
              }}>
                <Text style={{
                  fontWeight: '400',
                  lineHeight: 18,
                  fontSize: 12,
                  color: '#1E1E1E',
                  marginLeft: 5,
                  fontFamily: Constant.primaryFontRegular
                }}>Starting From</Text>
                <Text style={{
                  fontWeight: '600',
                  lineHeight: 21,
                  fontSize: 15,
                  color: '#1E1E1E',
                  marginLeft: 5,
                }}>${gigDetails?.minimum_price}/hr</Text>
              </View>
            )}
          </>
        </View>
      </TouchableOpacity>
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

export default GigsListCard;
