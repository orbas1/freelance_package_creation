import { View, Text, Image, ImageBackground, SafeAreaView, TouchableOpacity, ScrollView, KeyboardAvoidingView } from 'react-native'
import React, { useState } from 'react'
import styles from '../../../styles/Styles';
import CustomTextInput from '../../../components/baseComponents/TextInput';
import Button from '../../../components/baseComponents/Button'
import Icon from 'react-native-vector-icons/MaterialIcons';
import * as Constant from "../../../constants/GlobalConstants"
import { registerUser } from '../../../api/networkCalls';
import VerificationModal from '../../../components/baseComponents/VerificationModel';
import AlertComponent from '../../../components/AlertComponent';


const Signup = ({ navigation }) => {
    const [isChecked, setIsChecked] = useState(false);
    const [firstName, setFirstName] = useState('');
    const [lastName, setLastName] = useState('');
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [confirmPassword, setConfirmPassword] = useState('');
    const [role, setRole] = useState('buyer');
    const [errors, setErrors] = useState({});
    const [modalVisible, setModalVisible] = useState(false);
    const [loading, setLoading] = useState(false);
    const [alert, setAlert] = useState({ visible: false, type: '', message: '' });

    const validateInputs = () => {
        const newErrors = {};
        if (!firstName) newErrors.firstName = 'First name is required';
        if (!lastName) newErrors.lastName = 'Last name is required';
        if (!email) newErrors.email = 'Email address is required';
        if (!password) newErrors.password = 'Password is required';
        if (password.length < 8) newErrors.password = 'Password must be at least 8 characters';
        if (password !== confirmPassword) newErrors.confirmPassword = 'Passwords do not match';
        if (!isChecked) newErrors.isChecked = 'You must agree to the terms and conditions';
        setErrors(newErrors);
        return Object.keys(newErrors).length === 0;
    };

    const handleRegister = async () => {
        if (validateInputs()) {
            try {
                setLoading(true);
                const userData = {
                    first_name: firstName,
                    last_name: lastName,
                    email: email,
                    user_type: role,
                    user_terms_agree: isChecked.toString(),
                    password: password,
                    password_confirmation: confirmPassword,
                };

                const response = await registerUser(userData);
                setLoading(false);
                if (response.status == 200) {
                    setModalVisible(true);
                }
            } catch (error) {
                setAlert({
                    visible: true, type: 'Oops!', message: error?.response?.data?.message
                });
                setLoading(false);
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
                <SafeAreaView style={{ flex: 1 }}>
                    <ScrollView showsVerticalScrollIndicator={false} style={{ paddingHorizontal: 10, }}>
                        <View style={{
                            height: '100%',
                            paddingTop: '20%',
                        }}>
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

                                }}>Signup</Text>
                                <Text style={{
                                    marginHorizontal: 15,
                                    fontWeight: '400',
                                    lineHeight: 28,
                                    fontSize: 18,
                                    textAlign: 'center',
                                    color: '#585858',
                                    fontFamily: Constant.primaryFontRegular
                                }}>We are delighted to welcome you as a member of our community!</Text>
                            </View>


                            <View style={{ width: '100%' }}>
                                <CustomTextInput
                                    value={firstName}
                                    onChangeText={(e) => setFirstName(e)}
                                    placeholder="First name"
                                    type="text"
                                    borderColor={errors.firstName && "#FF6167"}
                                    width={"80%"}
                                    required={true}
                                />
                            </View>

                            <View style={{ marginTop: 10, width: '100%' }}>
                                <CustomTextInput
                                    value={lastName}
                                    onChangeText={(e) => setLastName(e)}
                                    placeholder="Last name"
                                    type="text"
                                    borderColor={errors.firstName && "#FF6167"}
                                    required={true}
                                    width={"80%"}
                                />
                            </View>

                            <View style={{ marginTop: 10, width: '100%' }}>
                                <CustomTextInput
                                    value={email}
                                    onChangeText={(e) => setEmail(e)}
                                    placeholder="Email address"
                                    type="text"
                                    borderColor={errors.firstName && "#FF6167"}
                                    required={true}
                                    width={"80%"}
                                />
                            </View>

                            <View style={{ marginTop: 10, width: '100%' }}>
                                <CustomTextInput
                                    value={password}
                                    onChangeText={(e) => setPassword(e)}
                                    placeholder="Your password"
                                    type="password"
                                    borderColor={errors.firstName && "#FF6167"}
                                    width={"80%"}
                                    required={true}
                                />
                                {errors.password && <Text style={{
                                    color: '#585858',
                                    fontSize: 16,
                                    lineHeight: 24,
                                    fontFamily: Constant.primaryFontRegular,
                                    paddingTop: 5
                                }}>{errors.password}</Text>}
                            </View>
                            <View style={{ marginTop: 10, width: '100%' }}>
                                <CustomTextInput
                                    value={confirmPassword}
                                    onChangeText={(e) => setConfirmPassword(e)}
                                    placeholder="Confirm  password"
                                    type="password"
                                    borderColor={errors.confirmPassword && "#FF6167"}
                                    required={true}
                                    width={"80%"}
                                />
                                {errors.confirmPassword && <Text style={{
                                    color: '#585858',
                                    fontSize: 16,
                                    lineHeight: 24,
                                    fontFamily: Constant.primaryFontRegular,
                                    paddingTop: 5
                                }}>{errors.confirmPassword}</Text>}
                            </View>

                            <View style={{ marginTop: 10, width: '100%', flexDirection: 'row', justifyContent: 'space-between' }}>
                                <TouchableOpacity activeOpacity={0.7} onPress={() => setRole("buyer")} style={{ width: '48%', backgroundColor: '#fff', padding: 15, borderRadius: 15, flexDirection: 'row' }}>
                                    <View style={{ height: 30, width: 30, borderRadius: 30 / 2, borderWidth: 1, borderColor: '#EAEAEA', backgroundColor: role == "buyer" ? '#EE4710' : "#fff", alignItems: 'center', justifyContent: 'center' }}>
                                        <View style={{ height: 12, width: 12, borderRadius: 12 / 2, backgroundColor: '#fff' }}></View>
                                    </View>
                                    <Text style={{ marginHorizontal: 15, fontWeight: '400', lineHeight: 28, fontSize: 18, textAlign: 'center', color: '#585858' }}>Buyer</Text>
                                </TouchableOpacity>
                                <TouchableOpacity activeOpacity={0.7} onPress={() => setRole("seller")} style={{ width: '48%', backgroundColor: '#fff', padding: 15, borderRadius: 15, flexDirection: 'row' }}>
                                    <View style={{ height: 30, width: 30, borderRadius: 30 / 2, borderWidth: 1, borderColor: '#EAEAEA', backgroundColor: role == "seller" ? '#EE4710' : "#fff", alignItems: 'center', justifyContent: 'center' }}>
                                        <View style={{ height: 12, width: 12, borderRadius: 12 / 2, backgroundColor: '#fff' }}></View>
                                    </View>
                                    <Text style={{ marginHorizontal: 15, fontWeight: '400', lineHeight: 28, fontSize: 18, textAlign: 'center', color: '#585858' }}>Seller</Text>
                                </TouchableOpacity>
                            </View>

                            <View style={{ marginTop: 30, width: '100%', flexDirection: 'row', }}>
                                <TouchableOpacity onPress={toggleCheckbox}>
                                    <View style={[styles.checkbox, isChecked && styles.checked]}>
                                        {isChecked && <Icon name="check" size={24} color="white" />}
                                    </View>
                                </TouchableOpacity>
                                <View style={{ width: "80%" }}>
                                    <Text style={{
                                        fontWeight: '400',
                                        lineHeight: 24,
                                        fontSize: 16,
                                        color: '#585858',
                                        fontFamily: Constant.primaryFontRegular
                                    }}>I have read and agree to all the </Text>
                                    <View style={{ flexDirection: "row", marginBottom: 0 }}>
                                        <Text style={{
                                            fontSize: 16,
                                            lineHeight: 24,
                                            fontWeight: "500",
                                            fontFamily: Constant.primaryFontMedium,
                                            color: "#1570ef",
                                            textAlign: "left"
                                        }}>{`Terms & conditions`}{' '}</Text><Text style={{
                                            fontSize: 16,
                                            lineHeight: 24,
                                            fontWeight: "500",
                                            fontFamily: Constant.primaryFontMedium,
                                            color: "#1570ef",
                                            textAlign: "left"
                                        }}>{`Privacy Policy`}{' '}</Text>

                                    </View>
                                    {errors.isChecked && <Text style={{
                                        color: '#FF6167',
                                        fontSize: 14,
                                        lineHeight: 18,
                                        fontFamily: Constant.primaryFontRegular,
                                        marginVertical: 5,
                                    }}>{errors.isChecked}</Text>}
                                </View>
                            </View>
                            <View style={{ width: '100%', marginTop: 15 }}>
                                <Button
                                    backgroundColor="#EE4710"
                                    text="Join now"
                                    onPress={handleRegister}
                                    color={"white"}
                                    loading={loading}
                                />
                            </View>
                            <View style={{ marginVertical: 20, width: '100%' }}>
                                <Text onPress={() => navigation.navigate("Login")} style={{ fontWeight: '500', lineHeight: 24, textAlign: 'center', fontSize: 16, color: '#585858' }}>Already have an account? Sign In Now</Text>
                            </View>
                        </View>
                        <VerificationModal modalVisible={modalVisible} setModalVisible={setModalVisible} />
                    </ScrollView>
                </SafeAreaView>
            </ImageBackground>
            <AlertComponent
                type={alert?.type}
                message={alert?.message}
                onPress={handleCloseAlert}
                visible={alert?.visible}
            />
        </KeyboardAvoidingView>
    )
}

export default Signup