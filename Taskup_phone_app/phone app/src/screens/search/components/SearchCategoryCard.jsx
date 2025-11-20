import { View, Text, Image, TouchableOpacity } from 'react-native';
import React from 'react';
import * as Constant from '../../../constants/GlobalConstants';
import Feather from 'react-native-vector-icons/Feather';
import { useNavigation } from '@react-navigation/native';

const SearchCategoryCard = ({ item, moveTo }) => {
  const navigation = useNavigation();

  return (
    <TouchableOpacity
      style={{
        backgroundColor: Constant.whiteColor,
        borderRadius: 16,
        padding: 15,
        marginTop: 15,
      }}
      onPress={() => navigation.navigate(moveTo)}
    >

      <View
        style={{
          flexDirection: 'row',
          justifyContent: 'space-between',
          alignItems: 'center',
        }}>
        <Image
          style={{
            width: 44,
            height: 55,
          }}
          source={item.img}
          resizeMode="cover"
        />
        <View style={{ width: '70%' }}>
          <Text
            style={{ color: Constant.fontColor, fontSize: 14, lineHeight: 20 }}>
            {item.desc}
          </Text>
          <Text
            style={{ color: Constant.blackColor, fontSize: 15, lineHeight: 21, fontFamily: "SF-Pro-Text-RegularItalic" }}>
            {item.title}
          </Text>
        </View>

        <Feather name="chevron-right" color={Constant.iconColor} size={20} />
      </View>
    </TouchableOpacity>
  );
};

export default SearchCategoryCard;
