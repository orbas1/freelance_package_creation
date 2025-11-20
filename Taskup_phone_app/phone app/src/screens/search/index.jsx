import React, { useState } from 'react';
import {
  Text,
  View,
  ImageBackground,
  SafeAreaView,
  Image
} from 'react-native';
import styles from '../../styles/Styles';
import SearchCategoryCard from './components/SearchCategoryCard';
import * as Constant from '../../constants/GlobalConstants';
import { useSelector } from 'react-redux';

const SearchScreen = ({ navigation }) => {
  const user = useSelector((state) => state.auth.user);

  const [searchItems, setSearchItems] = useState([
    {
      type: 'freelancer',
      title: 'I need an experienced freelancer for my upcoming project.',
      desc: 'Over a million vetted freelancers',
      img: require('../../assets/images/freelancer.png'),
    },
    {
      type: 'project',
      title:
        'I am looking for a project where I can use my skills & make money.',
      desc: 'Explore all verified projects',
      img: require('../../assets/images/projects.png'),
    },
    {
      type: 'service',
      title: 'I am looking for freelancer in a specific service type.',
      desc: 'Browse freelancer by services',
      img: require('../../assets/images/service.png'),
    },
  ]);
  return (
    <ImageBackground
      source={require('../../assets/images/background.png')}
      style={[
        styles.container,
        { height: '40%', resizeMode: 'contain', backgroundColor: '#F4F4FB' },
      ]}>
      <SafeAreaView
        style={{
          flex: 1,
        }}>
        <Image
          style={{
            width: "100%",
            height: 300,
          }}
          source={require("../../assets/images/Brands.png")}
          resizeMode="cover"
        />
        <View style={{
          flex: 1,
          justifyContent: 'flex-end',
          marginHorizontal: 10,
        }}>
          <View
            style={{
              flexDirection: 'row',
              alignItems: 'center',
              alignSelf: 'center',
            }}>
            <Text
              style={{
                color: Constant.blackColor,
                fontSize: 24,
                lineHeight: 32,
                alignSelf: 'center',
              }}>
              Let’s Start a
            </Text>
            <View style={{ marginHorizontal: 5 }}>
              <Text
                style={{
                  color: Constant.blackColor,
                  fontSize: 24,
                  lineHeight: 32,
                  alignSelf: 'center',
                }}>
                Hassle Free
              </Text>
              <Image
                style={{
                  height: 4,
                  marginTop: -5,
                  width: '100%',
                }}
                resizeMode="center"
                source={require("../../assets/images/Bar.png")}
              />
            </View>
          </View>

          <Text
            style={{
              color: Constant.blackColor,
              fontSize: 24,
              lineHeight: 32,
              alignSelf: 'center',
            }}>
            Search Experience
          </Text>
          <View style={{ marginBottom: 10 }}>
              <SearchCategoryCard item={searchItems[0]} moveTo={"Freelancers"} />
              <SearchCategoryCard item={searchItems[2]} moveTo={"Gigs"} />
              <SearchCategoryCard item={searchItems[1]} moveTo={"Projects"} />
          </View>
        </View>

      </SafeAreaView>
    </ImageBackground>
  );
};

export default SearchScreen;
