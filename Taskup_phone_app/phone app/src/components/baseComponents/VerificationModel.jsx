import React, { useState, useEffect } from 'react';
import { Modal, StyleSheet, Text, Pressable, View, Animated, Image } from 'react-native';
import * as Constant from "../../constants/GlobalConstants"
import { useNavigation } from '@react-navigation/native';

const VerificationModal = ({ modalVisible, setModalVisible }) => {
    const [fadeAnim] = useState(new Animated.Value(0));
    const [textFadeAnim] = useState(new Animated.Value(0));
    const navigation = useNavigation();

    useEffect(() => {
        if (modalVisible) {
            Animated.parallel([
                Animated.timing(fadeAnim, {
                    toValue: 1,
                    duration: 300,
                    useNativeDriver: true,
                }),
                Animated.timing(textFadeAnim, {
                    toValue: 1,
                    duration: 600,
                    useNativeDriver: true,
                })
            ]).start();
        } else {
            Animated.parallel([
                Animated.timing(fadeAnim, {
                    toValue: 0,
                    duration: 300,
                    useNativeDriver: true,
                }),
                Animated.timing(textFadeAnim, {
                    toValue: 0,
                    duration: 300,
                    useNativeDriver: true,
                })
            ]).start();
        }
    }, [modalVisible]);

    const handelModel = () => {
        setModalVisible(false)
        navigation.navigate("Login")
    }

    return (
        <Modal
            animationType="none"
            transparent={true}
            visible={modalVisible}
            onRequestClose={() => {
                setModalVisible(!modalVisible);
            }}>
            <View style={styles.centeredView}>
                <Animated.View style={[styles.modalView, { opacity: fadeAnim }]}>
                    <View style={styles.frameParent}>
                        <Image
                            resizeMode='contain'
                            style={{height:50,width:50}}
                            source={require('../../assets/images/Logo.png')}
                        />
                        <Animated.View style={{ opacity: textFadeAnim }}>
                            <View style={styles.areYouSureParent}>
                                <Text style={styles.youreGoingTo}>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you</Text>
                            </View>
                        </Animated.View>
                    </View>
                    <View style={styles.buttonsbuttonParent}>
                        <Pressable onPress={handelModel}>
                            <View style={[styles.buttonsbutton, styles.buttonsbuttonFlexBox]}>
                                <View style={[styles.textPadding, styles.textPaddingFlexBox]}>
                                    <Text style={[styles.text, styles.textTypo]}>OK</Text>
                                </View>
                            </View>
                        </Pressable>
                    </View>
                </Animated.View>
            </View>
        </Modal>
    );
};

const styles = StyleSheet.create({
    centeredView: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
        backgroundColor: 'rgba(0, 0, 0, 0.5)',
    },
    modalView: {
        margin: 20,
        backgroundColor: 'white',
        borderRadius: 20,
        padding: 35,
        alignItems: 'center',
        shadowColor: '#000',
        shadowOffset: {
            width: 0,
            height: 2,
        },
        shadowOpacity: 0.25,
        shadowRadius: 4,
        elevation: 5,
    },
    textPaddingFlexBox: {
        flexDirection: "row",
        justifyContent: "center",
        alignItems: "center"
    },
    buttonsbuttonFlexBox: {
        minHeight: 36,
        borderWidth: 1,
        borderStyle: "solid",
        borderRadius: 12,
        flexDirection: "row",
        justifyContent: "center",
        alignSelf: "stretch",
        alignItems: "center",
        overflow: "hidden"
    },
    textTypo: {
        textAlign: "left",
        fontWeight: "500",
        fontFamily: Constant.primaryFontMedium
    },
    trashWrapper: {
        borderRadius: 100,
        width: 70,
        height: 70,
        backgroundColor: "#fef3f2"
    },
    youreGoingTo: {
        color: "#585858",
        fontWeight: "500",
        lineHeight: 20,
        fontSize: 14,
        textAlign: "center",
        fontFamily: Constant.primaryFontMedium,
        alignSelf: "stretch"
    },
    areYouSureParent: {
        marginTop: 14,
        alignSelf: "stretch"
    },
    frameParent: {
        justifyContent: "center",
        alignSelf: "stretch",
        alignItems: "center"
    },
    text: {
        color: "#f04438",
        lineHeight: 20,
        fontSize: 14,
        textAlign: "left"
    },
    textPadding: {
        paddingHorizontal: 2,
        paddingVertical: 0
    },
    buttonsbutton: {
        shadowColor: "rgba(16, 24, 40, 0.04)",
        shadowOffset: {
            width: 0,
            height: 4
        },
        shadowRadius: 6,
        elevation: 6,
        shadowOpacity: 1,
        borderColor: "#f04438",
        paddingHorizontal: 16,
        paddingVertical: 14,
        backgroundColor: "#fef3f2"
    },
    buttonsbuttonParent: {
        marginTop: 20,
        alignSelf: "stretch"
    },
    content: {
        paddingHorizontal: 20,
        paddingTop: 20,
        paddingBottom: 40,
        alignSelf: "stretch"
    },
    firstLevel: {
        borderTopLeftRadius: 16,
        borderTopRightRadius: 16,
        backgroundColor: "#fff",
        flex: 1,
        width: "100%",
        justifyContent: "flex-end",
        alignItems: "center",
        overflow: "hidden"
    }
});

export default VerificationModal;
