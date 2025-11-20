// navigation/StackNavigator.js
import React from 'react';
import { createStackNavigator } from '@react-navigation/stack';
import Login from '../../screens/auth/login';
import Signup from '../../screens/auth/signup';
import ForgetPassword from '../../screens/auth/forgetPassword';
import Verification from '../../screens/auth/verification';

const Stack = createStackNavigator();

const AuthStack = () => {
  return (
    <Stack.Navigator
      screenOptions={{
        headerShown: false,
      }}
    >
      <Stack.Screen name="Login" component={Login} />
      <Stack.Screen name="Signup" component={Signup} />
      <Stack.Screen name="Forget" component={ForgetPassword} />
      <Stack.Screen name="Verification" component={Verification} />
    </Stack.Navigator>
  );
};

export default AuthStack;
