import { View, Text, Image, ImageBackground, SafeAreaView, ScrollView, KeyboardAvoidingView } from 'react-native'
import React, { useState } from 'react'
import styles from '../../../styles/Styles';
import CustomTextInput from '../../../components/baseComponents/TextInput';
import Button from '../../../components/baseComponents/Button'
import * as Constant from "../../../constants/GlobalConstants"
import { sendResentEmailLink } from "../../../api/networkCalls"
import AlertComponent from '../../../components/AlertComponent';

const ForgetPassword = ({ navigation }) => {
    const [alert, setAlert] = useState({ visible: false, type: '', message: '' });
    const [email, setEmail] = useState('')
    const [loading, setLoading] = useState(false);

    const handleSendEmailLink = async () => {
        setLoading(true);
        try {
            const param = {
                email: email
            };
            const response = await sendResentEmailLink(param);
            setLoading(false);
            if (response.status == 200) {
                setAlert({ visible: true, type: 'Congratulations!', message: response?.data?.message });
                setEmail('')
            }
        } catch (error) {
            setLoading(false);
            setAlert({ visible: true, type: 'Oops!', message: 'Error sending email link, Please Try Again!' });
        }
    };

    const handleCloseAlert = () => {
        setAlert({ visible: false, type: '', message: '' });
    };

    return (
        <KeyboardAvoidingView behavior={Platform.OS === 'ios' ? 'padding' : 'height'}
            style={{ flex: 1 }}>
            <ImageBackground
                source={require('../../../assets/images/background.png')}
                style={[styles.container, { height: '40%', resizeMode: 'contain', backgroundColor: '#F4F4FB' }]}>
                <SafeAreaView>
                    <View style={{
                        height: '20%',
                        zIndex: 99
                    }}>
                    </View>
                    <View style={{
                        height: '80%',
                    }}>
                        <ScrollView showsVerticalScrollIndicator={false} style={{ paddingHorizontal: 10, marginTop: 200 }}>
                            <View style={{ width: '100%', alignItems: 'center', justifyContent: 'center' }}>
                                <Image
                                    resizeMode='contain'
                                    style={styles.tinyLogo}
                                    source={require('../../../assets/images/Logo.png')}
                                />
                            </View>
                            <View style={{ marginVertical: 30 }}>
                                <Text style={{
                                    fontWeight: '600',
                                    lineHeight: 32,
                                    textAlign: 'center',
                                    fontSize: 24,
                                    fontFamily: Constant.primaryFontSemiBold
                                }}>Reset Password</Text>
                                <Text style={{
                                    marginTop: 10,
                                    marginHorizontal: 20,
                                    fontWeight: '400',
                                    lineHeight: 28,
                                    fontSize: 18,
                                    textAlign: 'center',
                                    color: '#585858',
                                    fontFamily: Constant.primaryFontRegular
                                }}>Please enter your email to reset your account password</Text>
                            </View>

                            <View style={{ width: '100%', marginBottom: 30 }}>
                                <CustomTextInput
                                    value={email}
                                    onChangeText={(e) => setEmail(e)}
                                    placeholder="Email address"
                                    type="text"
                                />
                            </View>

                            <View style={{ width: '100%' }}>
                                <Button
                                    backgroundColor="#EE4710"
                                    text="Send reset link"
                                    onPress={handleSendEmailLink}
                                    color={"white"}
                                    loading={loading}

                                />
                            </View>

                            <View style={{ marginVertical: 20, width: '100%', }}>
                                <Text onPress={() => navigation.navigate("Signup")} style={{ fontWeight: '500', lineHeight: 24, textAlign: 'center', fontSize: 16, color: '#585858' }}>Don’t have an account?
                                    Signup</Text>
                            </View>
                        </ScrollView>
                    </View>
                    <AlertComponent
                        type={alert?.type}
                        message={alert?.message}
                        visible={alert?.visible}
                        onPress={handleCloseAlert}
                    />
                </SafeAreaView>
            </ImageBackground>
        </KeyboardAvoidingView>
    )
}

export default ForgetPassword