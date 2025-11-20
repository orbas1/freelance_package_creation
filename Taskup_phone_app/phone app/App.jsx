/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 *
 * @format
 */

import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import StackNavigator from './src/navigation/stackNavigator';
import { Provider } from 'react-redux';
import { QueryClientProvider } from '@tanstack/react-query';
import { store, persistor } from './src/redux/Store';
import { PersistGate } from 'redux-persist/integration/react';
import queryClient from './queryClient';

console.disableYellowBox = true;

const App = () => {
	return (
		<Provider store={store}>
			<PersistGate loading={null} persistor={persistor}>
				<QueryClientProvider client={queryClient}>
					<NavigationContainer>
						<StackNavigator />
					</NavigationContainer>
				</QueryClientProvider>
			</PersistGate>
		</Provider>
	);
};

export default App;
