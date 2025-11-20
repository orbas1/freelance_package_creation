// navigation/StackNavigator.js
import React from 'react';
import { createStackNavigator } from '@react-navigation/stack';
import Freelancers from '../../screens/freelancers/index';
import SplashScreen from '../../screens/splash/SplashScreen';
import AuthStack from '../authStack';
import TabNavigator from '../tabNavigator/index'; 
import Projects from '../../screens/projects';
import ProjectDetail from '../../screens/projects/projectDetail/index';
import FreelancerDetail from "../../screens/freelancers/freelancerDetail/index"
import Dashboard from '../../screens/profile/components/dashboard/Index';
import SearchScreen from '../../screens/search/index';
import GigsDetail from '../../screens/gigs/gigsDetail';
import Gigs from '../../screens/gigs';

const Stack = createStackNavigator();

const StackNavigator = () => {
  return (
    <Stack.Navigator
    initialRouteName="Splash"
    screenOptions={{
      headerShown: false,
    }}>
    <Stack.Screen name="Splash" component={SplashScreen} />
    <Stack.Screen name="Auth" component={AuthStack} />
    <Stack.Screen name="Tabs" component={TabNavigator} />
    <Stack.Screen name="Freelancers" component={Freelancers} />
    <Stack.Screen name="Gigs" component={Gigs} />
    <Stack.Screen name="Projects" component={Projects} />
    <Stack.Screen name="ProjectDetail" component={ProjectDetail} />
    <Stack.Screen name="GigsDetail" component={GigsDetail} />
    <Stack.Screen name="FreelancerDetail" component={FreelancerDetail} />
    <Stack.Screen name="Dashboard" component={Dashboard} />
    <Stack.Screen name="Search" component={SearchScreen} />
    
     
  </Stack.Navigator>
  );
};

export default StackNavigator;
