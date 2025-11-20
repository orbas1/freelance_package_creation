
import React from 'react';
import { Animated, View, StyleSheet } from 'react-native';

const ColorMixingComponent = ({ color1, color2, color3, animatedValue1, animatedValue2, animatedValue3 }) => {
  // Interpolate animated values to translateX values
  const translateX1 = animatedValue1.interpolate({
    inputRange: [0, 1],
    outputRange: [-100, 100],
  });

  const translateX2 = animatedValue2.interpolate({
    inputRange: [0, 1],
    outputRange: [-100, 150],
  });

  const translateX3 = animatedValue3.interpolate({
    inputRange: [0, 1],
    outputRange: [-100, 200],
  });

  return (
    <View style={styles.container}>
      <Animated.View
        style={[
          styles.colorBox,
          { height: 100, backgroundColor: color1, transform: [{ translateX: translateX1 }] },
        ]}
      />
      <Animated.View
        style={[
          styles.colorBox,
          { height: 200, backgroundColor: color2, transform: [{ translateX: translateX2 }] },
        ]}
      />
      <Animated.View
        style={[
          styles.colorBox,
          { height: 50, borderRadius: 150, backgroundColor: color3, transform: [{ translateX: translateX3 }] },
        ]}
      />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flexDirection: 'row',
    margin: 0,
    padding: 0,
  },
  colorBox: {
    flex: 1,
    height: 200,
    borderBottomLeftRadius: 200,
    borderBottomRightRadius: 200,
  },
});

export default ColorMixingComponent;
