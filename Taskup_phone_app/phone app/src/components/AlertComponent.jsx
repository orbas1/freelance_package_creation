
import React from 'react';
import { View, Text, StyleSheet, Platform } from 'react-native';
import Dialog, { DialogContent, SlideAnimation } from 'react-native-popup-dialog';
import { CrossWithCircleOOPS, Success } from '../constants/svgIcons';
import * as Constant from '../constants/GlobalConstants';
import Button from './baseComponents/Button';

const AlertComponent = ({ type, message, onPress, visible }) => {
    let iconComponent = null;
    let backgroundColor = '';

    if (type === "Congratulations!") {
        iconComponent = <Success IconColor={'#085D3A'} height={40} width={40} />;
        backgroundColor = '#F6FEF9';
    } else {
        iconComponent = <CrossWithCircleOOPS IconColor={'#B42318'} height={40} width={40} />;
        backgroundColor = '#FEF3F2';
    }

    return (
        <Dialog
            visible={visible}
            dialogAnimation={new SlideAnimation({
                slideFrom: 'bottom',
            })}
            onTouchOutside={onPress}
            overlayBackgroundColor="rgba(0, 0, 0, 0.5)"
        >
            <DialogContent style={styles.dialogContent}>
                <View style={styles.container}>
                    <View style={[styles.iconContainer, { backgroundColor }]}>
                        {iconComponent}
                    </View>
                    <Text style={styles.typemessage}>{type}</Text>
                    <Text style={styles.message}>{message}</Text>
                </View>
                <View style={styles.buttonWrapper}>
                    <Button
                        backgroundColor="#EE4710"
                        text="Ok"
                        onPress={onPress}
                        color={'#FFFFFF'}
                    />
                </View>
            </DialogContent>
        </Dialog>
    );
};

const styles = StyleSheet.create({
    container: {
        padding: 20,
        backgroundColor: 'white',
        alignItems: 'center',
    },
    dialogContent: {
        width: Platform.OS === 'ios' ? '95%' : '90%',
        borderRadius: 25,
        paddingHorizontal: 15,
        zIndex: 9999
    },
    iconContainer: {
        borderRadius: 30,
        width: 60,
        height: 60,
        alignItems: 'center',
        justifyContent: 'center',
    },
    message: {
        fontWeight: '500',
        fontFamily: Constant.primaryFontMedium,
        fontSize: 16,
        color: '#585858',
        textAlign: 'center',
        lineHeight: 24,
    },
    typemessage: {
        fontWeight: '600',
        fontFamily: Constant.primaryFontSemiBold,
        fontSize: 18,
        color: '#000000',
        textAlign: 'center',
        marginVertical: 10,
        lineHeight: 24,
    },
    buttonWrapper: {
        alignItems: 'center',
    },
});

export default AlertComponent;