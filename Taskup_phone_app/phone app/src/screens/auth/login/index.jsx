import { View, Text, Image, ImageBackground, SafeAreaView, TouchableOpacity, ScrollView, KeyboardAvoidingView } from 'react-native'
import React, { useState, useRef } from 'react'
import styles from '../../../styles/Styles';
import CustomTextInput from '../../../components/baseComponents/TextInput';
import Button from '../../../components/baseComponents/Button'
import Icon from 'react-native-vector-icons/MaterialIcons';
import * as Constant from "../../../constants/GlobalConstants"
import { Arrowforward } from "../../../constants/svgIcons/index"
import VerificationSheet from '../../../components/baseComponents/VerificationSheet';
import { login } from '../../../redux/slices/authSlice';
import { useDispatch } from 'react-redux';
import { CommonActions } from '@react-navigation/native';
import AlertComponent from '../../../components/AlertComponent';

const Login = ({ navigation }) => {
    const [isChecked, setIsChecked] = useState(false);
    const [email, setEmail] = useState('')
    const [password, setPassword] = useState('')
    const [errors, setErrors] = useState({});
    const [isVisibleVerificationSheet, setIsVisibleVerificationSheet] = useState(false);
    const dispatch = useDispatch();
    const [loading, setLoading] = useState(false);
    const [alert, setAlert] = useState({ visible: false, type: '', message: '' });

    const validateInputs = () => {
        const newErrors = {};
        if (!email) newErrors.email = 'Email address is required';
        if (!password) newErrors.password = 'Password is required';

        setErrors(newErrors);

        return Object.keys(newErrors).length === 0;
    };


    const handleLogin = async () => {

        if (validateInputs()) {
            try {
                setLoading(true);
                const userData = {
                    email: email,
                    password: password,
                };
                const response = await dispatch(login(userData)).unwrap();
                setLoading(false);
                navigation.dispatch(
                    CommonActions.reset({
                        index: 0,
                        routes: [{ name: 'Tabs' }],
                    })
                );
                setEmail('')
                setPassword('')

            } catch (error) {
                setLoading(false);
                setEmail('')
                setPassword('')
                if (error.message == "not verified") {
                    setIsVisibleVerificationSheet(true)
                } else {
                    setAlert({ visible: true, type: 'Oops!', message: error?.message || 'An error occurred. Please try again.' });
                }

            }
        }

    };

    const toggleCheckbox = () => {
        setIsChecked(!isChecked);
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
                        <TouchableOpacity
                            style={{
                                marginHorizontal: 15,
                                flexDirection: 'row',
                                justifyContent: 'flex-end',
                                alignItems: 'center',
                                marginTop: 10
                            }}
                            activeOpacity={0.5}
                            onPress={() => navigation.dispatch(
                                CommonActions.reset({
                                    index: 0,
                                    routes: [{ name: 'Tabs' }],
                                })
                            )}
                        >
                            <Text

                                style={{
                                    fontSize: 16,
                                    lineHeight: 24,
                                    fontWeight: '500',
                                    marginRight: 5,
                                    color: '#585858',
                                    fontFamily: Constant.primaryFontMedium
                                }}>Skip</Text>
                            <Arrowforward IconColor={'#585858'} />
                        </TouchableOpacity>
                    </View>
                    <View style={{
                        height: '80%',
                    }}>
                        <ScrollView showsVerticalScrollIndicator={false} style={{ paddingHorizontal: 10 }}>
                            <View style={{ width: '100%', alignItems: 'center', justifyContent: 'center' }}>
                                <Image
                                    resizeMode='contain'
                                    style={styles.tinyLogo}
                                    source={require('../../../assets/images/Logo.png')}
                                />
                            </View>
                            <View style={{ marginVertical: 30 }}>
                                <Text style={{
                                    fontWeight: '700',
                                    lineHeight: 32,
                                    textAlign: 'center',
                                    fontSize: 24,
                                    color: Constant.blackColor,
                                    fontFamily: Constant.primaryFontSemiBold
                                }}>Sign In</Text>
                                <Text style={{
                                    marginTop: 10,
                                    marginHorizontal: 20,
                                    fontWeight: '400',
                                    lineHeight: 28,
                                    fontSize: 18,
                                    textAlign: 'center',
                                    color: '#585858',
                                    fontFamily: Constant.primaryFontRegular
                                }}>Please enter your email & password to access your account</Text>
                            </View>

                            <View style={{ width: '100%' }}>
                                <CustomTextInput
                                    value={email}
                                    onChangeText={(e) => setEmail(e)}
                                    placeholder="Enter email address"
                                    borderColor={errors.email && "#FF6167"}
                                    type="text"
                                    width={"80%"}
                                    required={true}

                                />
                            </View>

                            <View style={{ marginTop: 14, width: '100%' }}>
                                <CustomTextInput
                                    value={password}
                                    onChangeText={(e) => setPassword(e)}
                                    placeholder="Your password"
                                    type="password"
                                    borderColor={errors.password && "#FF6167"}
                                    width={"80%"}
                                    required={true}
                                />
                            </View>


                            <View style={{ marginVertical: 30, width: '100%', flexDirection: 'row', alignItems: 'center' }}>
                                <TouchableOpacity onPress={toggleCheckbox}>
                                    <View style={[styles.checkbox, isChecked && styles.checked]}>
                                        {isChecked && <Icon name="check" size={24} color="white" />}
                                    </View>
                                </TouchableOpacity>
                                <Text style={{ fontWeight: '400', lineHeight: 24, fontSize: 16, color: '#585858', fontFamily: Constant.primaryFontRegular }}>Remember me on this device</Text>
                            </View>

                            <View style={{ width: '100%' }}>
                                <Button
                                    backgroundColor="#EE4710"
                                    text="Sign In"
                                    onPress={handleLogin}
                                    color={"white"}
                                    loading={loading}
                                />
                            </View>

                            <View style={{ marginTop: 14, width: '100%' }}>
                                <Button
                                    backgroundColor="#F4F4FB"
                                    text="Don’t have an account?
                                    Sign up"
                                    //   onPress={toggleBottomSheet}
                                    color={'#585858'}
                                    borderColor="#eaeaea"
                                    borderRequired={true}
                                    onPress={() => navigation.navigate("Signup")}
                                />
                            </View>

                            <View style={{ marginVertical: 20, width: '100%', }}>
                                <Text onPress={() => navigation.navigate("Forget")} style={{ fontWeight: '500', lineHeight: 24, textAlign: 'center', fontSize: 16, color: '#585858' }}>Forget Password?</Text>
                            </View>
                        </ScrollView>
                    </View>
                    {isVisibleVerificationSheet && (
                        <VerificationSheet isVisible={isVisibleVerificationSheet}
                            onAlertResendEmail={setAlert}
                            onClose={() => setIsVisibleVerificationSheet(false)} />
                    )}
                    <AlertComponent
                        type={alert?.type}
                        message={alert?.message}
                        onPress={handleCloseAlert}
                        visible={alert?.visible}
                    />
                </SafeAreaView>
            </ImageBackground>
        </KeyboardAvoidingView>
    )
}

export default Login