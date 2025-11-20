import React, { useEffect, useRef, useState } from 'react';
import {
    View,
    Text,
    Dimensions,
    ScrollView,
    Pressable
} from 'react-native';
import RBSheet from 'react-native-raw-bottom-sheet';
import Styles from '../../../../../styles/Styles';

const PaymentHistorySheet = ({ isVisible, onClose }) => {
    const bottomSheetRef = useRef(null);
    const [emailAddress, setEmailAddress] = useState('');
    const [windowHeight, setWindowHeight] = useState(
        Dimensions.get('window').height,
    );
    const [selectedPaymentMethod, setSelectedPaymentMethod] = useState("pending"); // Default selection

    useEffect(() => {
        if (isVisible) {
            bottomSheetRef.current.open();
        } else {
            bottomSheetRef.current.close();
        }
    }, [isVisible]);

    const paymentMethods = [
        { text: 'All', backgroundColor: '#FEF0C7', type: "all" },
        { text: 'Pending', backgroundColor: '#EFF8FF', type: "pending" },
        { text: 'Approved', backgroundColor: '#FEE4E2', type: "approved" },
    ];

    const handlePress = (type) => {
        setSelectedPaymentMethod(type);
    };

    return (
        <RBSheet
            ref={bottomSheetRef}
            closeOnDragDown={true}
            closeOnPressMask={true}
            height={windowHeight / 2.7}
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
                    borderRadius: 2.5, // Adjust this if needed
                    justifyContent: 'center',
                    alignItems: 'center',
                    marginTop: 15,
                }}
            />
            <ScrollView showsVerticalScrollIndicator={false}>
                <Text style={[Styles.proposalHeading, { paddingVertical: 20 }]}>
                    Select option below
                </Text>
                <View style={[Styles.listParent, { paddingHorizontal: 20, paddingVertical: 10, marginBottom: 20 }]}>
                    {paymentMethods.map((item, index) => (
                        <View key={index}>
                            <View style={[Styles.menuItem]}>
                                <Pressable
                                    style={[Styles.menuItemDashboard, {
                                        paddingVertical: 10,
                                        justifyContent: "space-between",
                                    }]}
                                    onPress={() => handlePress(item.type)}
                                >
                                    <View>
                                        <Text style={[Styles.selectOptionText]}>{item.text}</Text>
                                    </View>
                                    <View style={[item.type === selectedPaymentMethod ? Styles.payoutCheckActiveCircel : Styles.payoutCheckCircel]} />
                                </Pressable>
                            </View>
                            {index < paymentMethods.length - 1 && <View style={Styles.line} />}
                        </View>
                    ))}
                </View>
            </ScrollView>
        </RBSheet>
    );
};

export default PaymentHistorySheet;
