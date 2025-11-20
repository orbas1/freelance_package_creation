import { View, Text, Image, ImageBackground, SafeAreaView, ScrollView, KeyboardAvoidingView } from 'react-native'
import React from 'react'
import styles from '../../../styles/Styles';
import Button from '../../../components/baseComponents/Button'
import * as Constant from "../../../constants/GlobalConstants"

const VerificationEmail = ({ navigation }) => {
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
                        <ScrollView showsVerticalScrollIndicator={false} style={{ paddingHorizontal: 10, marginTop: 100 }}>
                            <View style={{ width: '100%', alignItems: 'center', justifyContent: 'center' }}>
                                <Image
                                    resizeMode='contain'
                                    style={styles.tinyLogo}
                                    source={require('../../../assets/images/Logo.png')}
                                />
                            </View>
                            <Text style={{
                                marginTop: 10,
                                marginHorizontal: 20,
                                fontWeight: '400',
                                lineHeight: 28,
                                fontSize: 18,
                                textAlign: 'center',
                                color: '#585858',
                                fontFamily: Constant.primaryFontRegular
                            }}>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another</Text>
                            <View style={{ width: '100%', marginTop: 20 }}>
                                <Button
                                    backgroundColor="#EE4710"
                                    text="Resend Verification Email"
                                    onPress={() => { }}
                                    color={"white"}
                                />
                            </View>

                            <View style={{ width: '100%', marginTop: 20 }}>
                                <Button
                                    backgroundColor="#EE4710"
                                    text="Log out"
                                    onPress={() => { }}
                                    color={"white"}
                                />
                            </View>
                        </ScrollView>
                    </View>
                </SafeAreaView>
            </ImageBackground>
        </KeyboardAvoidingView>
    )
}

export default VerificationEmail