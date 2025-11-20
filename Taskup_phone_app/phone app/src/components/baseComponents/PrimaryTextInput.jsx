import { StyleSheet, TextInput, View, TouchableOpacity } from 'react-native';
import React, { useState } from 'react';
import * as Constant from '../../constants/GlobalConstants';
import { OpenEye, CloseEye } from '../../constants/svgIcons';

const PrimaryTextInput = (props) => {
  const { value, onChangeText, type, showBorderBottom, iconRequired, marginBottom, iconName } = props;
  const [isPasswordVisible, setIsPasswordVisible] = useState(false);

  const togglePasswordVisibility = () => {
    setIsPasswordVisible(!isPasswordVisible);
  };

  return (
    <View style={[styles.container, { marginBottom: marginBottom, }]}>
      <TextInput
        {...props}
        value={value}
        onChangeText={onChangeText}
        style={[
          styles.textInput,
          {
            borderBottomWidth: showBorderBottom ? 1 : 0,
            borderBottomColor: showBorderBottom ? 'rgba(234, 234, 234, 0.6)' : 'transparent',
            paddingBottom: 15,
          }

        ]}
        placeholderTextColor={props.placeholderTextColor || "#585858"}
        secureTextEntry={type === "password" && !isPasswordVisible}
      />
      {
        iconRequired &&
        <TouchableOpacity style={styles.iconContainer} onPress={togglePasswordVisibility}>
          {isPasswordVisible ? < OpenEye iconColor={'#585858'} height={20} width={20} /> : <CloseEye iconColor={'#585858'} height={20} width={20} />}

        </TouchableOpacity>
      }
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flexDirection: 'row',
    alignItems: 'center',
    position: 'relative',
  },
  textInput: {
    flex: 1,
    fontSize: 16,
    color: "#585858",
    fontFamily: Constant.primaryFontRegular
  },
  iconContainer: {
    position: 'absolute',
    right: 0,
    justifyContent: 'center',
    height: '100%',
    paddingBottom: 10,

  },
});

export default PrimaryTextInput;
