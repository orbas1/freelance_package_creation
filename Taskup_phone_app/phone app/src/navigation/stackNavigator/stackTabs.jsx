// navigation/StackNavigator.js
import React from 'react';
import { createStackNavigator } from '@react-navigation/stack';
import Dashboard from '../../screens/profile/components/dashboard/Index';
import ProfileScreen from '../../screens/profile/ProfileScreen';
import ProfileSetting from '../../screens/profile/components/profileSetting/index';
import BillingInformation from '../../screens/profile/components/billingInformation/index';
import Disputes from '../../screens/profile/components/disputes/index';
import Invoices from '../../screens/profile/components/invoices/index';
import SavedItems from '../../screens/profile/components/saved/index';

const Stack = createStackNavigator();

const StackTabNavigator = () => {
  return (
    <Stack.Navigator
    initialRouteName="Profile"
    screenOptions={{
      headerShown: false,
    }}>
    <Stack.Screen name="Profile" component={ProfileScreen} />
    <Stack.Screen name="Dashboard" component={Dashboard} />
    <Stack.Screen name="ProfileSettings" component={ProfileSetting} />
    <Stack.Screen name="BillingInformation" component={BillingInformation} />
    <Stack.Screen name="Disputes" component={Disputes} />
    <Stack.Screen name="Invoices" component={Invoices} />
    <Stack.Screen name="SavedItems" component={SavedItems} />
  </Stack.Navigator>
  );
};

export default StackTabNavigator;
