import React, { useState, useEffect } from 'react';
import { View, Text, SafeAreaView, ScrollView, Switch } from 'react-native';
import Styles from '../../styles/Styles';
import PrimaryTextInput from "../../components/baseComponents/PrimaryTextInput"
import Button from '../../components/baseComponents/Button';
import SelectListSheet from "../../components/baseComponents/SelectListSheet";
import { useSelector } from 'react-redux';
import { updatePassword, updatePrivacyInfo } from '../../api/networkCalls';
import AlertComponent from '../../components/AlertComponent';

const SettingsScreen = () => {
  const [currentPassword, setCurrentPassword] = useState('');
  const [newPassword, setNewPassword] = useState('');
  const [retypePassword, setRetypePassword] = useState('');
  const [isVisibleReasonSheet, setIsVisibleReasonSheet] = useState(false);
  const Token = useSelector(state => state.auth.token);
  const User = useSelector(state => state.auth.user);
  const [isEnabled, setIsEnabled] = useState(User?.show_image === 1);
  const [loading, setLoading] = useState(false);
  const [loadingPrivacy, setLoadingPrivacy] = useState(false)
  const [alert, setAlert] = useState({ visible: false, type: '', message: '' });


  useEffect(() => {
    setIsEnabled(User?.show_image === 1);
  }, [User]);

  const toggleSwitch = async () => {
    const newValue = !isEnabled;
    setIsEnabled(newValue);
  };

  const handleUpdatePrivacy = async () => {
    const formData = new FormData();
    formData.append('show_image', isEnabled ? 1 : 0);
    try {
      setLoadingPrivacy(true);
      const response = await updatePrivacyInfo(formData, Token);
      if (response.status == 200) {
        setAlert({ visible: true, type: 'Congratulations!', message: response?.message });
        setLoadingPrivacy(false);
      } else {
        throw new Error(response?.data?.message || 'Failed to update privacy info');
        setLoadingPrivacy(false);
      }
    } catch (error) { 
      setLoadingPrivacy(false);
      setAlert({
        visible: true, type: 'Oops!', message: error.message || 'An error occurred while updating the privacy info.'
      });

    }
  };

  const handleUpdatePassword = async () => {
    if (newPassword.length < 8) {
      setAlert({ visible: true, type: 'Oops!', message: 'New password must be at least 8 characters long.' });
      return;
    }
    if (newPassword !== retypePassword) {
      setAlert({ visible: true, type: 'Oops!', message: 'New password and Retype password do not match.' });
      return;
    }
    if (currentPassword === newPassword) {
      setAlert({ visible: true, type: 'Oops!', message: 'Current password and New password must be different.' });
      return;
    }

    try {
      const userData = {
        current_password: currentPassword,
        new_password: newPassword,
        retype_password: retypePassword,
      };
      setLoading(true);
      const response = await updatePassword(userData, Token);
      if (response.status === 200) {
        setAlert({ visible: true, type: 'Congratulations!', message: response?.message });
        setCurrentPassword('');
        setNewPassword('');
        setRetypePassword('');
      } else {
        setAlert({ visible: true, type: 'Oops!', message: response?.message || 'Something went wrong.' });
      }
      setLoading(false);
    } catch (error) {
      setLoading(false);
      setAlert({ visible: true, type: 'Oops!', message: error?.response?.data?.message || error.message || 'An error occurred while updating the password.' });
    }
  };

  const handleAlertPress = () => {
    setAlert({ ...alert, visible: false });
  };


  const Reasons = [
    { text: 'Switching to full-time employment', backgroundColor: '#FEF0C7', type: "Switching to full-time employment", active: false },
    { text: 'Not enough project availability', backgroundColor: '#EFF8FF', type: "India", active: true },
    { text: 'Relocating to a different country', backgroundColor: '#FEE4E2', type: "Nepal", active: false },
    { text: 'Aiming to work with a variety ', backgroundColor: '#E4F9F5', type: "Bangladesh", active: false },
    { text: 'Change in professional direction', backgroundColor: '#F9F3E4', type: "Sri Lanka", active: false },
    { text: 'Technical issues with the platform', backgroundColor: '#F0E4F9', type: "Bhutan", active: false },
    { text: 'Transitioning to another field', backgroundColor: '#E4F9EC', type: "Maldives", active: false },
    { text: 'Poor customer support experience', backgroundColor: '#F9E4E4', type: "Afghanistan", active: false },
  ];

  return (
    <SafeAreaView style={{ flex: 1 }}>
      <ScrollView style={[Styles.settingScreenContainer]} showsVerticalScrollIndicator={false}>
        <Text style={[Styles.projectDetailJobHeading, { paddingVertical: 20 }]}>Account Settings</Text>
        <Text style={[Styles.proposalDetailText, { color: "#585858", paddingBottom: 12 }]}>Change Password</Text>
        <View style={{ borderRadius: 20, backgroundColor: '#FFFFFF', padding: 20, marginBottom: 10 }}>
          <PrimaryTextInput
            value={currentPassword}
            onChangeText={e => setCurrentPassword(e)}
            placeholder="Current password"
            type="password"
            showBorderBottom={true}
            iconRequired={true}
            marginBottom={10}
          />
          <PrimaryTextInput
            value={newPassword}
            onChangeText={e => setNewPassword(e)}
            placeholder="New password"
            type="password"
            showBorderBottom={true}
            iconRequired={true}
            marginBottom={10}
          />
          <PrimaryTextInput
            value={retypePassword}
            onChangeText={e => setRetypePassword(e)}
            placeholder="Retype password"
            type="password"
            showBorderBottom={false}
            iconRequired={true}
            marginBottom={10}
          />
          <Button
            backgroundColor="#EE4710"
            text="Update Now"
            onPress={handleUpdatePassword}
            color={'white'}
            loading={loading}
          />
        </View>
        <Text style={[Styles.proposalDetailText, { color: "#585858", paddingVertical: 12 }]}>Privacy & Notification</Text>
        <View style={{ borderRadius: 20, backgroundColor: '#FFFFFF', padding: 20, marginBottom: 10 }}>
          <View style={[Styles.PrivacyContainer]}>
            <Text style={[Styles.proposalDetailText, { width: "75%", color: "#585858" }]}>
              Make my profile photo visible to friends and everyone.
            </Text>
            <Switch
              ios_backgroundColor="#3e3e3e"
              style={{ transform: [{ scaleX: 0.6 }, { scaleY: 0.6 }] }}
              onValueChange={toggleSwitch}
              value={isEnabled}
            />
          </View>
          <View style={{ marginTop: 20 }}>
            <Button
              backgroundColor="#EE4710"
              text="Update Now"
              onPress={handleUpdatePrivacy}
              color={'white'}
              loading={loadingPrivacy}
            />
          </View>
        </View>
        {isVisibleReasonSheet && (
          <SelectListSheet
            isVisible={isVisibleReasonSheet}
            onClose={() => setIsVisibleReasonSheet(false)}
            List={Reasons}
            selectionType="single"
            sheetHeight={'1.5'}
            searchInput={false}
          />
        )}
      </ScrollView>
      <AlertComponent
        type={alert.type}
        message={alert.message}
        onPress={handleAlertPress}
        visible={alert.visible}

      />
    </SafeAreaView>
  );
};

export default SettingsScreen;

