// CustomTextArea.js

import React from 'react';
import { TextInput, StyleSheet } from 'react-native';

const CustomTextArea = (props) => {
  return (
    <TextInput
      style={styles.textArea}
      multiline={true}
      numberOfLines={4}
      textAlignVertical="top"
      placeholderTextColor="#585858"
      {...props}
    />
  );
};

const styles = StyleSheet.create({
  textArea: {
    fontSize: 16,
    lineHeight: 24,
    color: "#585858",
    height: 100,
  },
});

export default CustomTextArea;
