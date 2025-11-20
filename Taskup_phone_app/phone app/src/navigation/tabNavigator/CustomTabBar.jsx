// export default CustomTabBar;
import React from 'react';
import { View, TouchableOpacity, Text, StyleSheet, Platform, Image } from 'react-native';
import Icon from 'react-native-vector-icons/Feather';
import { useSelector } from 'react-redux';

const CustomTabBar = ({ state, descriptors, navigation }) => {
  const focusedOptions = descriptors[state.routes[state.index].key].options;
  if (focusedOptions.tabBarVisible === false) {
    return null;
  }
  const user = useSelector((state) => state.auth.user);

  return (
    <View style={[styles.tabContainer, Platform.OS === 'android' ? styles.androidShadow : styles.iosShadow]}>
      {state.routes.map((route, index) => {
        const { options } = descriptors[route.key];
        const label = options.tabBarLabel !== undefined
          ? options.tabBarLabel
          : options.title !== undefined
            ? options.title
            : route.name;

        const isFocused = state.index === index;

        const IconComponent = isFocused ? options.iconComponentFocused : options.iconComponent;

        const onPress = () => {
          const event = navigation.emit({
            type: 'tabPress',
            target: route.key,
            canPreventDefault: true,
          });

          if (!isFocused && !event.defaultPrevented) {
            navigation.navigate(route.name);
          }
        };

        return (
          <TouchableOpacity
            key={index}
            onPress={onPress}
            style={styles.tabItem}
          >
            {
              label === "Profile" ?
                <View style={{ marginTop: 10 }}>
                  <Image
                    resizeMode="cover"
                    style={{ height: 24, width: 24, borderRadius: 26 / 2 }}
                    source={user ? { uri: user?.image } : require('../../assets/images/guestuser.png')}
                  />
                </View> :
                <View style={{ marginTop: 10 }}>
                  {IconComponent ? <IconComponent /> : null}
                </View>
            }

            <Text style={{ color: '#585858', marginTop: 5, marginBottom: 15, fontWeight: '500' }}>
              {label}
            </Text>
          </TouchableOpacity>
        );
      })}
    </View>
  );
};

const styles = StyleSheet.create({
  tabContainer: {
    flexDirection: 'row',
    borderTopWidth: 1,
    borderTopColor: '#fff',
    backgroundColor: '#fff',
    zIndex: 1,
  },
  tabItem: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  androidShadow: {
    elevation: 4,
  },
  iosShadow: {
    shadowColor: '#000',
    shadowOpacity: 0.25,
    shadowRadius: 3.84,
    shadowOffset: {
      width: 0,
      height: 2,
    },
  },
});

export default CustomTabBar;


