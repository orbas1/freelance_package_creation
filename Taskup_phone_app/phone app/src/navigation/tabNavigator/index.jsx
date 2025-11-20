// navigation/TabNavigator.js
import React, { useState } from 'react';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import SearchScreen from '../../screens/search/index';
import SettingsScreen from '../../screens/settings/SettingsScreen';
import Home from '../../screens/home/index';
import CustomTabBar from './CustomTabBar';
import StackTabNavigator from '../stackNavigator/stackTabs';
import { useSelector } from 'react-redux';
import { CommonActions, useNavigation } from '@react-navigation/native';
import Projects from '../../screens/projects';
import AuthStackNavigator from '../authStack';
import AlertComponent from '../../components/AlertComponent';
import { HomeIcon, HomeIconFocused, SearchIcon, SearchIconFocused, SettingsIcon, SettingsIconFocused, guestUser } from '../../constants/svgIcons';

const Tab = createBottomTabNavigator();

const TabNavigator = () => {
  const navigation = useNavigation();
  const user = useSelector((state) => state.auth.user);
  const [alert, setAlert] = useState({ visible: false, type: '', message: '' });

  const handleCloseAlert = () => {
    setAlert((prevAlert) => ({
      ...prevAlert,
      visible: false,
    }));
    navigation.dispatch(
      CommonActions.reset({
        index: 0,
        routes: [{ name: "Auth" }],
      })
    );
  };

  const handleUnauthorizedAccess = (routeName) => {
    if (user === null) {
      setAlert({
        visible: true,
        type: 'Oops!',
        message: `You need to login to access the ${routeName} tab.`,
      });
      return true;
    }
    return false;
  };

  return (
    <>
      <Tab.Navigator
        screenOptions={{
          headerShown: false,
        }}
        tabBar={(props) => <CustomTabBar {...props} />}
      >
        <Tab.Screen
          name="Home"
          component={Home}
          options={{
            tabBarLabel: 'Home',
            iconComponent: HomeIcon,
            iconComponentFocused: HomeIconFocused
          }}
        />
        <Tab.Screen
          name="Search"
          component={user === null ? SearchScreen : (user?.user_type === 'seller' ? Projects : SearchScreen)}
          options={{ tabBarLabel: 'Search', iconComponent: SearchIcon, iconComponentFocused: SearchIconFocused }}
        />
        <Tab.Screen
          name="Settings"
          component={user === null ? AuthStackNavigator : SettingsScreen}
          options={{ tabBarLabel: 'Settings', iconComponent: SettingsIcon, iconComponentFocused: SettingsIconFocused }}
          listeners={{
            tabPress: (e) => {
              if (handleUnauthorizedAccess('Settings')) {
                e.preventDefault();
              }
            },
          }}
        />
        <Tab.Screen
          name={user === null ? "Guest" : "Profile"}
          component={user === null ? AuthStackNavigator : StackTabNavigator}
          // options={{ tabBarLabel: user === null ? "Guest" : "Profile", iconName: 'user' }}
          options={{ tabBarLabel: user === null ? "Guest" : "Profile", iconComponent: guestUser, iconComponentFocused: guestUser }}
          listeners={{
            tabPress: (e) => {
              if (handleUnauthorizedAccess('Profile')) {
                e.preventDefault();
              }
            },
          }}
        />
      </Tab.Navigator>
      <AlertComponent
        type={alert.type}
        message={alert.message}
        onPress={handleCloseAlert}
        visible={alert.visible}
      />
    </>
  );
};

export default TabNavigator;


