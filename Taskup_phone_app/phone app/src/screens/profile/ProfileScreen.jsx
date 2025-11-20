import React from 'react';
import { View, Text, SafeAreaView, Pressable, ScrollView } from 'react-native';
import Styles from '../../styles/Styles';
import { useNavigation } from '@react-navigation/native';
import { useDispatch, useSelector } from 'react-redux';
import { DashBoard, Profile, Balance, Refresh, Invoice, Heart, Logout } from '../../constants/svgIcons';
import { clearToken } from '../../redux/slices/authSlice';
import SwipeButton from '../../components/baseComponents/SwipeButton';

const ProfileScreen = () => {
  const navigation = useNavigation();
  const dispatch = useDispatch();
  const user = useSelector((state) => state.auth.user);

  const handleLogout = () => {
    dispatch(clearToken());
    navigation.navigate('Splash');
  };

  const menuItems = [
    { icon: <DashBoard IconColor={'#585858'} />, text: 'Dashboard', slug: "Dashboard" },
    { icon: <Profile IconColor={'#585858'} />, text: 'Profile Settings', slug: "ProfileSettings" },
    { icon: <Balance IconColor={'#585858'} />, text: 'Billing Information', slug: "BillingInformation" },
    { icon: <Refresh IconColor={'#585858'} />, text: 'Disputes', slug: "Disputes" },
    { icon: <Invoice IconColor={'#585858'} />, text: 'Invoices', slug: "Invoices" },
    { icon: <Heart iconColor={'#585858'} height={18} width={19} />, text: 'Saved Items', slug: "SavedItems" },
    { icon: <Logout IconColor={'#585858'} />, text: 'Logout', action: handleLogout },
  ];
  const capitalizeFirstLetter = (string) => {
    if (!string) return '';
    return string.charAt(0).toUpperCase() + string.slice(1);
  };

  return (
    <>
      <SwipeButton />
      <SafeAreaView style={Styles.safeAreaView}>
        <ScrollView showsVerticalScrollIndicator={false}>
          <View style={Styles.profileBalanceContainer}>
            <View style={Styles.balanceContainer}>
              <Balance IconColor="#585858" />
              <Text style={Styles.balanceText}>Account Balance</Text>
            </View>
            <Text style={Styles.balanceAmount}>{user?.wallet_amount}</Text>
          </View>
          <View style={Styles.listParent}>
            {menuItems.map((item, index) => (
              <View key={index}>
                <Pressable
                  style={Styles.menuItem}
                  onPress={() => item.action ? item.action() : navigation.navigate(item.slug)}
                >
                  <View style={[Styles.menuItemContent, { paddingVertical: 15 }]}>
                    <View style={{ flexDirection: "row", gap: 10, alignItems: "center" }}>
                      {item.icon}
                      <Text style={[Styles.menuItemText]}>{item.text}</Text>
                    </View>
                    <View>
                      {item.extraIcon}
                    </View>
                  </View>
                </Pressable>
                {index < menuItems.length - 1 && <View style={Styles.line} />}
              </View>
            ))}
          </View>
        </ScrollView>
      </SafeAreaView>
    </>
  );
};

export default ProfileScreen;

