import React, { useEffect, useRef, useState } from 'react';
import {
    View,
    Text,
    Alert,
    Dimensions,
    ScrollView,
} from 'react-native';
import RBSheet from 'react-native-raw-bottom-sheet';
import Styles from '../../../../../styles/Styles';
import PrimaryTextInput from '../../../../../components/baseComponents/PrimaryTextInput';
import Button from '../../../../../components/baseComponents/Button';
import { upDatePaymentMethod } from '../../../../../api/networkCalls';
import { useSelector } from 'react-redux';

const PaymentSheet = ({ isVisible, onClose, paymentType, refetch }) => {
    const token = useSelector((state) => state.auth.token);
    const bottomSheetRef = useRef(null);
    const [emailAddress, setEmailAddress] = useState('');
    const [accountTitle, setAccountTitle] = useState('');
    const [accountNumber, setAccountNumber] = useState('');
    const [bankName, setBankName] = useState('');
    const [routingNumber, setRoutingNumber] = useState('');
    const [bankIBAN, setBankIBAN] = useState('');
    const [bankBICSwift, setBankBICSwift] = useState('');
    const [windowHeight, setWindowHeight] = useState(Dimensions.get('window').height);
    const [loading, setLoading] = useState(false);

    useEffect(() => {
        if (isVisible) {
            bottomSheetRef.current.open();
        } else {
            bottomSheetRef.current.close();
        }
    }, [isVisible]);

    const validateFields = () => {
        if (paymentType === 'bank') {
            return accountTitle && accountNumber && bankName && routingNumber && bankIBAN && bankBICSwift;
        }
        return emailAddress;
    };

    const handleSetPaymentMethod = async () => {
        if (!validateFields()) {
            Alert.alert('Error', 'Please fill all required fields.');
            return;
        }

        setLoading(true);
        let bankData = {};

        if (paymentType === 'bank') {
            bankData = {
                title: accountTitle,
                type: 'bank',
                account_number: accountNumber,
                bank_name: bankName,
                routing_number: routingNumber,
                bank_iban: bankIBAN,
                bank_bic_swift: bankBICSwift,
            };
        } else if (paymentType === 'paypal') {
            bankData = {
                type: 'paypal',
                paypal_email: emailAddress,
            };
        } else if (paymentType === 'payoneer') {
            bankData = {
                type: 'payoneer',
                payoneer_email: emailAddress,
            };
        }

        try {
            const response = await upDatePaymentMethod(bankData, token);
            setEmailAddress('');
            setAccountTitle('');
            setAccountNumber('');
            setBankName('');
            setRoutingNumber('');
            setBankIBAN('');
            setBankBICSwift('');
            bottomSheetRef.current.close();
            onClose();

            setLoading(false);
            Alert.alert(response.message);
            refetch()
        } catch (error) {
            setLoading(false);
        }
    };

    return (
        <RBSheet
            ref={bottomSheetRef}
            closeOnDragDown={true}
            closeOnPressMask={true}
            height={windowHeight / (paymentType === 'payoneer' || paymentType === 'paypal' ? 2.7 : 1.6)}
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
            isVisible={isVisible}
        >
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
                <Text style={[Styles.proposalHeading, { paddingVertical: 20 }]}>
                    {paymentType === 'payoneer' ? 'Add Payoneer details' : paymentType === 'paypal' ? 'Add PayPal details' : 'Add bank details'}
                </Text>
                {paymentType === 'payoneer' || paymentType === 'paypal' ? (
                    <View style={{ borderRadius: 20, backgroundColor: '#FFFFFF', paddingHorizontal: 20, paddingTop: 20 }}>
                        <PrimaryTextInput
                            value={emailAddress}
                            onChangeText={setEmailAddress}
                            placeholder={`Add ${paymentType} email address`}
                            type="text"
                            showBorderBottom={false}
                            iconRequired={false}
                            marginBottom={10}
                        />
                        <Button
                            backgroundColor="#EE4710"
                            text="Submit"
                            onPress={handleSetPaymentMethod}
                            color="white"
                        />
                    </View>
                ) : (
                    <View style={{ borderRadius: 20, backgroundColor: '#FFFFFF', paddingHorizontal: 20, paddingTop: 20 }}>
                        <PrimaryTextInput
                            value={accountTitle}
                            onChangeText={setAccountTitle}
                            placeholder="Bank account title"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={10}
                        />
                        <PrimaryTextInput
                            value={accountNumber}
                            onChangeText={setAccountNumber}
                            placeholder="Bank account number"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={10}
                        />
                        <PrimaryTextInput
                            value={bankName}
                            onChangeText={setBankName}
                            placeholder="Bank name"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={10}
                        />
                        <PrimaryTextInput
                            value={routingNumber}
                            onChangeText={setRoutingNumber}
                            placeholder="Bank routing number"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={10}
                        />
                        <PrimaryTextInput
                            value={bankIBAN}
                            onChangeText={setBankIBAN}
                            placeholder="Bank IBAN"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={10}
                        />
                        <PrimaryTextInput
                            value={bankBICSwift}
                            onChangeText={setBankBICSwift}
                            placeholder="Bank BIC/SWIFT"
                            type="text"
                            showBorderBottom={false}
                            iconRequired={false}
                            marginBottom={10}
                        />
                        <Button
                            backgroundColor="#EE4710"
                            text="Submit"
                            onPress={handleSetPaymentMethod}
                            color="white"
                            loading={loading}
                        />
                    </View>
                )}
            </ScrollView>
        </RBSheet>
    );
};

export default PaymentSheet;
