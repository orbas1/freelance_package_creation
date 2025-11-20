import React, { useEffect, useRef, useState } from 'react';
import {
    View,
    Text,
    StyleSheet,
    Dimensions,
    ScrollView,
} from 'react-native';
import RBSheet from 'react-native-raw-bottom-sheet';
import * as Constant from '../../../../../../constants/GlobalConstants';
import Button from '../../../../../../components/baseComponents/Button';
import { Trash } from "../../../../../../constants/svgIcons/index"
import { deleteSellerEducation } from '../../../../../../api/networkCalls';
import { useSelector } from 'react-redux';

const ConfirmationSheet = ({ isVisible, onClose, refetch, educationId, onAlertDeleteEducation }) => {
    const [isLoading, setIsLoading] = useState(false);
    const bottomSheetRef = useRef(null);
    const [windowHeight, setWindowHeight] = useState(Dimensions.get('window').height);
    const Token = useSelector(state => state.auth.token);
    const user = useSelector(state => state.auth.user);
    const [alert, setAlert] = useState({ visible: false, type: '', message: '' });

    useEffect(() => {
        if (isVisible) {
            bottomSheetRef.current.open();
        } else {
            bottomSheetRef.current.close();
        }
    }, []);

    const handleClose = () => {
        onClose();
    };

    const handleDeleteEducation = async (id) => {
        try {
            setIsLoading(true);
            const response = await deleteSellerEducation(id, Token);
            if (response.status === 200) {
                refetch();
                setIsLoading(false);
                onClose();
                onAlertDeleteEducation({
                    visible: true,
                    type: 'Congratulations!',
                    message: response.message
                });
            } else {
                setIsLoading(false);
                onAlertDeleteEducation({
                    visible: true,
                    type: 'Oops',
                    message: response.message || 'Something went wrong.'
                });
                onClose();
            }
        } catch (error) {
            onAlertDeleteEducation({
                visible: true,
                type: 'Oops',
                message: error?.response?.data?.message || error.message || 'An error occurred while deleting the education.'
            });
            onClose();

        } finally {
            setIsLoading(false);
        }
    };
    const handleCloseAlert = () => {
        if (alert?.type == "Congratulations!") {
            refetch();
        } else {
            onAlertDeleteEducation({ visible: false, type: '', message: '' });
        }

    };

    return (
        <RBSheet
            ref={bottomSheetRef}
            closeOnDragDown={true}
            closeOnPressMask={true}
            onClose={handleClose}
            height={windowHeight / 2.5}
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
        >
            <ScrollView showsVerticalScrollIndicator={false}>
                <View style={{ paddingVertical: 20 }}>
                    <View style={[styles.confirmationParent, styles.confirmationParentFlexBox]}>
                        <View style={[styles.trashWrapper, styles.confirmationParentFlexBox]}>
                            <Trash IconColor={'#F04438'} />
                        </View>
                        <View style={styles.textParent}>
                            <Text style={[styles.text, styles.textFlexBox, { fontFamily: Constant.primaryFontSemiBold }]} numberOfLines={1}>Are you sure?</Text>
                            <Text style={[styles.youreGoingTo, styles.textFlexBox, { fontFamily: Constant.primaryFontMedium }]}>You’re going to remove this item. This cannot be undone.</Text>
                        </View>
                    </View>
                    <View style={{ marginTop: 20, marginBottom: 10 }}>
                        <Button
                            backgroundColor="#fef3f2"
                            text="Delete"
                            onPress={() => handleDeleteEducation(educationId)}
                            color={'#f04438'}
                            borderColor="#f04438"
                            borderRequired={true}
                            loading={isLoading}
                            loaderColor={'#f04438'}
                        />
                    </View>
                    <Button
                        backgroundColor="#F8F8F8"
                        text="Cancel"
                        onPress={handleClose}
                        color={'#585858'}
                        borderColor="#eaeaea"
                        borderRequired={true}
                    />
                </View>
            </ScrollView>

        </RBSheet>
    );
};

const styles = StyleSheet.create({
    confirmationParentFlexBox: {
        justifyContent: "center",
        alignItems: "center"
    },
    textFlexBox: {
        textAlign: "center",
        fontFamily: "SF Pro Text",
        alignSelf: "stretch"
    },
    trashWrapper: {
        borderRadius: 100,
        backgroundColor: "#fef3f2",
        width: 70,
        height: 70,
        flexDirection: "row"
    },
    text: {
        fontSize: 20,
        lineHeight: 30,
        fontWeight: "600",
        color: "#000",
        overflow: "hidden"
    },
    youreGoingTo: {
        fontSize: 14,
        lineHeight: 20,
        fontWeight: "500",
        color: "#585858"
    },
    textParent: {
        marginTop: 14,
        alignSelf: "stretch"
    },
});

export default ConfirmationSheet;