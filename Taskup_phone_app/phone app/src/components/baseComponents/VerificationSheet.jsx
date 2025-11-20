import React, { useEffect, useRef, useState } from 'react';
import {
    View,
    Text,
    Dimensions,
    ScrollView,
} from 'react-native';
import RBSheet from 'react-native-raw-bottom-sheet';
import * as Constant from '../../constants/GlobalConstants';
import Button from '../../components/baseComponents/Button';
import { resendEmail } from '../../api/networkCalls';
import { useSelector } from 'react-redux';

const VerificationSheet = ({ isVisible, onClose, onAlertResendEmail }) => {
    const bottomSheetRef = useRef(null);
    const [windowHeight, setWindowHeight] = useState(
        Dimensions.get('window').height,
    );
    const [isLoading, setIsLoading] = useState(false)
    const token = useSelector((state) => state?.auth?.token);

    useEffect(() => {
        if (isVisible) {
            bottomSheetRef.current.open();
        } else {
            bottomSheetRef.current.close();
        }
    }, [isVisible]);

    const handleClose = () => {
        onClose();
    };

    const handleResendEmail = async () => {
        setIsLoading(true)
        try {
            const response = await resendEmail(token);
            if (response?.status === 200) {
                onAlertResendEmail({ visible: true, type: 'Congratulations!', message: response.message });
                onClose();
                setIsLoading(false)
            }


        } catch (error) {
            onAlertResendEmail({ visible: true, type: 'Oops!', message: response.message || 'An error occurred. Please try again.' });
            onClose();
            setIsLoading(false)
        }
    };

    const handleCloseAlert = () => {
        onAlertResendEmail({ visible: false, type: '', message: '' });
    };

    return (
        <RBSheet
            ref={bottomSheetRef}
            closeOnDragDown={true}
            closeOnPressMask={true}
            onClose={handleClose}
            height={windowHeight / 2.9}
            duration={250}
            customStyles={{
                container: {
                    borderTopLeftRadius: 20,
                    borderTopRightRadius: 20,
                    paddingHorizontal: 20,
                    paddingVertical: 10,
                    backgroundColor: '#F8F8F8',
                },
            }}
            isVisible={isVisible}>
            <View
                style={{
                    position: 'absolute',
                    top: 0,
                    left: '50%',
                    right: 0,
                    marginLeft: 'auto',
                    marginRight: 'auto',
                    backgroundColor: 'rgba(60, 60, 67, 0.3)',
                    height: 5,
                    width: '10%',
                    borderRadius: 2.5,
                    justifyContent: 'center',
                    alignItems: 'center',
                    marginTop: 15,
                }}
            />
            <ScrollView showsVerticalScrollIndicator={false}>

                <Text style={{
                    paddingTop: 30,
                    fontWeight: '400',
                    lineHeight: 18,
                    fontSize: 14,
                    textAlign: 'center',
                    fontFamily: Constant.primaryFontRegular
                }}>
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another
                </Text>
                <View style={{ marginVertical: 20 }}>
                    <Button
                        backgroundColor="#EE4710"
                        text="Resend Verification Email"
                        onPress={handleResendEmail}
                        color={"white"}
                        loading={isLoading}
                    />
                </View>
            </ScrollView>
        </RBSheet>
    );
};


export default VerificationSheet;
