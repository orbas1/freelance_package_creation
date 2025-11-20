import React, { useEffect, useRef } from 'react';
import { ImageBackground, StyleSheet, Animated, Image } from 'react-native';
import { CommonActions } from '@react-navigation/native';
import { useFetchAllTaxonomies } from '../../hooks';
import { useSelector } from 'react-redux';

const SplashScreen = ({ navigation }) => {
  const fetchAllTaxonomies = useFetchAllTaxonomies();
  const token = useSelector((state) => state.auth.token);
  useEffect(() => {
    fetchAllTaxonomies();
  }, [fetchAllTaxonomies]);

  useEffect(() => {
    const pathName = token != null ? "Tabs" : "Auth"
    const timer = setTimeout(() => {
      navigation.dispatch(
        CommonActions.reset({
          index: 0,
          routes: [{ name: pathName }],
        })
      );
    }, 2000);

    return () => clearTimeout(timer);
  }, [navigation]);

  const animatedValue1 = useRef(new Animated.Value(0)).current;
  const animatedValue2 = useRef(new Animated.Value(0)).current;
  const animatedValue3 = useRef(new Animated.Value(0)).current;

  useEffect(() => {
    animateColor(animatedValue1, 5000);
    animateColor(animatedValue2, 7000);
    animateColor(animatedValue3, 9000);
  }, []);

  const animateColor = (animatedValue, duration) => {
    Animated.loop(
      Animated.timing(animatedValue, {
        toValue: 1,
        duration: duration,
        useNativeDriver: true,
      })
    ).start();
  };

  return (
    <ImageBackground
      source={require('../../assets/images/background.png')}
      style={styles.container}>
      <Image
        resizeMode='contain'
        style={styles.tinyLogo}
        source={require('../../assets/images/Logo.png')}
      />
    </ImageBackground>
  );
};

const styles = StyleSheet.create({
  container: {
    width: '100%',
    height: '40%',
    resizeMode: 'contain',
    flex: 1,
    backgroundColor: '#F4F4FB',
    justifyContent: 'center',
    alignItems: 'center',
  },
  text: {
    color: 'white',
    fontSize: 24,
    fontWeight: 'bold',
    textAlign: 'center',
  },
  tinyLogo: {
    width: 50,
    height: 50,
  },
});

export default SplashScreen;
