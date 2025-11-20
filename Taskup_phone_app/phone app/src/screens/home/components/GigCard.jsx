import { View, Text, ImageBackground, Image, TouchableOpacity, ActivityIndicator, SafeAreaView } from 'react-native';
import React, { useState } from 'react';
import Ionicons from 'react-native-vector-icons/Ionicons';
import { useNavigation } from '@react-navigation/native';
import { Heart, Reviews, Location } from '../../../constants/svgIcons';
import { useSelector } from 'react-redux';
import { updateSavedItem } from '../../../api/networkCalls';
import * as Constant from '../../../constants/GlobalConstants';
import AlertComponent from '../../../components/AlertComponent';


const GigCard = ({ gigDetails, refetch }) => {
  const user = useSelector((state) => state.auth.user);
  const token = useSelector((state) => state.auth.token);
  const [isLoading, setIsLoading] = useState(false)
  const navigation = useNavigation();
  const [visible, setIsVisible] = useState(false)
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
    <SafeAreaView style={{
      backgroundColor: Constant.bgColor,
    }}>
      <TouchableOpacity
        style={{
          backgroundColor: '#fff',
          padding: 5,
          borderRadius: 15,
          marginRight: 5,
          width: 250,
        }}
        onPress={() => navigation.navigate('GigsDetail', { id: gigDetails?.id })}
      >
        <ImageBackground
          imageStyle={{ borderRadius: 15 }}
          source={{ uri: gigDetails?.attachments?.files[0]?.file_path }}
          style={{
            height: 150,
            width: 240,
            borderRadius: 15,
            resizeMode: 'contain',
            padding: 5,
          }}>
          <TouchableOpacity
            style={{
              backgroundColor: '#fff',
              borderRadius: 5,
              width: 30,
              height: 30,
              alignSelf: 'flex-end',
              alignItems: 'center',
              justifyContent: 'center',
              shadowColor: '#ddd',
              shadowOffset: {
                width: 0,
                height: 2,
              },
              top: 5,
              right: 5,
              shadowOpacity: 0.25,
              shadowRadius: 1.84,
              elevation: 3,
            }}
            onPress={() => handleSavedItem(gigDetails?.id, "gig")}
          >
            {isLoading ? <ActivityIndicator size="small" color={Constant.primaryColor} /> :
              gigDetails?.is_favourite != 1 ? <Heart strokeWidth={1.3} height={14} width={14} iconColor={'#585858'} /> : <Heart strokeWidth={1.3} height={14} width={14} iconColor={'red'} />
            }

          </TouchableOpacity>
          {/* } */}

        </ImageBackground>
        <View style={{
          flexDirection: 'row',
          justifyContent: 'space-between',
          marginTop: 10
        }}>
          <View style={{ flexDirection: 'row', alignItems: 'center', paddingHorizontal: 5 }}>
            <Image
              resizeMode='center'
              style={{ height: 24, width: 24, borderRadius: 24 / 2 }}
              source={{ uri: gigDetails?.user_avatar }}
            />
            <Text style={{ fontWeight: '500', lineHeight: 20, fontSize: 14, textAlign: 'center', color: '#1E1E1E', marginLeft: 5 }}>{gigDetails?.auther}</Text>
          </View>
          <View style={{
            backgroundColor: '#EE471020',
            paddingHorizontal: 4,
            borderRadius: 5,
            flexDirection: 'row',
            alignItems: 'center',
          }}>
            <Ionicons name="flash" size={11} color="#EE4710" />
            <Text style={{ fontWeight: '700', lineHeight: 24, fontSize: 10, textAlign: 'center', color: '#EE4710', marginLeft: 2 }}>PRO</Text>
          </View>
        </View>
        <Text style={{ fontWeight: '500', lineHeight: 21, fontSize: 15, marginTop: 10, color: '#1E1E1E', marginLeft: 5 }}>{gigDetails?.title}</Text>
        <View style={{
          flexDirection: 'row',
          alignItems: 'center',
          paddingHorizontal: 5,
          marginTop: 10
        }}>
          <Reviews strokeWidth={1.3} height={12} width={12} iconColor={'#585858'} />
          <Text style={{ fontWeight: '500', lineHeight: 18, fontSize: 12, color: '#585858', marginLeft: 5 }}>({gigDetails?.ratings_count} reviews)</Text>
        </View>
        <View style={{
          flexDirection: 'row',
          alignItems: 'center',
          paddingHorizontal: 5,
          marginTop: 5
        }}>
          <Location strokeWidth={1.3} height={12} width={12} iconColor={'#585858'} />
          <Text style={{ fontWeight: '500', lineHeight: 18, fontSize: 12, color: '#585858', marginLeft: 5 }}>{gigDetails?.address}</Text>
        </View>
        <View style={{
          flexDirection: 'row',
          alignItems: 'center',
          justifyContent: 'space-between',
          marginTop: 5,
          backgroundColor: "#F7F7F8",
          padding: 10,
          borderRadius: 10
        }}>
          <Text style={{ fontWeight: '400', lineHeight: 18, fontSize: 12, color: '#1E1E1E', marginLeft: 5 }}>Starting From</Text>
          <Text style={{ fontWeight: '600', lineHeight: 21, fontSize: 15, color: '#1E1E1E', marginLeft: 5 }}>
            <Text style={{
              lineHeight: 18,
              fontSize: 12,
              color: '#1E1E1E',
            }}>
              {" "}${" "}
            </Text>
            {gigDetails?.minimum_price} /hr</Text>
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

export default GigCard;
