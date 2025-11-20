import React, { useState } from 'react';
import { StyleSheet, TextInput, View, TouchableOpacity, Text } from 'react-native';
import Feather from 'react-native-vector-icons/Feather';
import * as Constant from "../../constants/GlobalConstants"
import { OpenEye, CloseEye } from '../../constants/svgIcons';

const CustomTextInput = (props) => {
  const { value, onChangeText, Color, iconRequired, iconName, iconColor, iconSize, width, borderColor, required } = props;
  const [isPasswordVisible, setIsPasswordVisible] = useState(false);

  const togglePasswordVisibility = () => {
    setIsPasswordVisible(!isPasswordVisible);
  }
  
  return (
    <View style={[styles.container, { backgroundColor: Color ? Color : 'white', borderColor: borderColor ? borderColor : 'white', borderWidth: 1, }]}>

      <TextInput
        {...props}
        value={value}
        onChangeText={onChangeText}
        style={[styles.input, props.style, { width: width ? width : '100%' }]}
        placeholderTextColor={props.placeholderTextColor || "#585858"}
        secureTextEntry={props.type === "password" && !isPasswordVisible}
      />
      {iconRequired &&
        <Feather
          name={iconName}
          color={iconColor}
          size={iconSize}
        />
      }
      <View style={{ justifyContent: "flex-end", flexDirection: "row", width: "20%", }}>
        {props.required && <Text style={[styles.requiredAsterisk, { marginRight: props.type === "password" ? 10 : 0 }]}>*</Text>}
        {props.type === "password" && (
          <TouchableOpacity onPress={togglePasswordVisibility} >
            {isPasswordVisible ? < OpenEye iconColor={'#585858'} height={20} width={20} /> : <CloseEye iconColor={'#585858'} height={20} width={20} />}
          </TouchableOpacity>
        )}
      </View>



    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    alignSelf: "stretch",
    shadowColor: "rgba(16, 24, 40, 0.03)",
    shadowOffset: {
      width: 0,
      height: 8
    },
    shadowRadius: 10,
    elevation: 10,
    shadowOpacity: 1,
    borderRadius: 16,
    backgroundColor: "#fff",
    width: "100%",
    flexDirection: "row",
    alignItems: "center",
    paddingHorizontal: 20,
    justifyContent: "space-between",
  },
  input: {
    fontSize: 16,
    fontSize: 16,
    lineHeight: 20,
    fontFamily: Constant.primaryFontRegular,
    color: "#585858",
    paddingVertical: 15,
  },
  requiredAsterisk: {
    color: '#F04438',
    fontSize: 20,
    lineHeight: 24,
  }
});

export default CustomTextInput;
