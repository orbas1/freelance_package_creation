import { View, Text, ActivityIndicator, Platform } from 'react-native';
import React, { useState } from 'react';
import LinearGradient from 'react-native-linear-gradient';
import Feather from 'react-native-vector-icons/Feather';
import * as Constant from '../../constants/GlobalConstants';
import { useNavigation } from '@react-navigation/native';
import { Heart } from '../../constants/svgIcons';
import { TouchableOpacity } from 'react-native-gesture-handler';
import { updateSavedItem } from '../../api/networkCalls';
import { useSelector } from 'react-redux';
import AlertComponent from '../AlertComponent';

const DetailPageHeader = ({ typeProject, isFavourite, id, type, refetch }) => {
  const token = useSelector((state) => state.auth.token);
  const user = useSelector((state) => state.auth.user);
  const navigation = useNavigation();
  const [isLoading, setIsLoading] = useState(false);
  const [alert, setAlert] = useState({ visible: false, type: '', message: '' });

  const handleGoBack = () => {
    navigation.goBack();
  };

  const handleCloseAlert = () => {
    setAlert({ visible: false, type: '', message: '' });
  };

  const handleSavedItem = async () => {
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
          setAlert({
            visible: true,
            type: 'Congratulations!',
            message: response.data
          });
          setIsLoading(false);
        }
      } catch (error) {
        setIsLoading(false);
      }
    } else {
      setAlert({
        visible: true,
        type: 'Oops!',
        message: "You need to login to perform this action."
      });
    }

  };

  const shouldHideHeartButton = () => {
    if (user?.user_type === 'buyer' && type === 'project') {
      return true;
    }
    if (user?.user_type === 'seller' && (type === 'gig' || type === 'seller')) {
      return true;
    }
    return false;
  };

  return (
    <LinearGradient
      colors={['rgba(244, 244, 251, 0)', 'rgba(244, 244, 251, 0)']}
      start={{ x: 0, y: 0 }}
      end={{ x: 0, y: 1 }}
      style={{
        padding: 10,
        flexDirection: 'row',
        justifyContent: 'space-between',
        alignItems: 'center',
        backgroundColor: 'transparent',
        position: 'absolute',
        top: Platform.OS === 'android' ? 10 : 50,
        left: 0,
        right: 0,
        zIndex: 100,
      }}>
      <View
        style={{
          padding: 10,
          backgroundColor: '#fff',
          borderRadius: 10,
        }}>
        <Feather
          onPress={() => handleGoBack()}
          name="chevron-left"
          color={Constant.iconColor}
          size={22}
        />
      </View>
      {
        typeProject &&
        <View
          style={{
            borderRadius: 10,
            backgroundColor: '#fee4e2',
            flexDirection: 'row',
            alignItems: 'center',
            justifyContent: 'center',
            paddingHorizontal: 14,
            paddingVertical: 8,
          }}>
          <Text
            style={{
              fontSize: 12,
              lineHeight: 18,
              fontWeight: '700',
              fontFamily: Constant.primaryFontBold,
              color: '#f04438',
            }}>
            Fixed price project
          </Text>
        </View>
      }
      {
        !shouldHideHeartButton() && (
          <TouchableOpacity
            style={{
              padding: 10,
              backgroundColor: '#fff',
              borderRadius: 10,
            }}
            onPress={handleSavedItem}
          >
            {isLoading ? (
              <ActivityIndicator size="small" color={Constant.primaryColor} />
            ) : (
              isFavourite !== 1 ? (
                <Heart strokeWidth={1.3} height={14} width={14} iconColor={'#585858'} />
              ) : (
                <Heart strokeWidth={1.3} height={14} width={14} iconColor={'red'} />
              )
            )}
          </TouchableOpacity>
        )

      }

      <AlertComponent
        type={alert?.type}
        message={alert?.message}
        onPress={handleCloseAlert}
        visible={alert?.visible}
      />
    </LinearGradient>
  );
};

export default DetailPageHeader;

