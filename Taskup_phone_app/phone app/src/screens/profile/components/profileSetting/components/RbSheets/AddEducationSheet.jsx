import React, { useEffect, useRef, useState } from 'react';
import {
    View,
    Text,
    StyleSheet,
    Dimensions,
    ScrollView,
    Pressable
} from 'react-native';
import RBSheet from 'react-native-raw-bottom-sheet';
import DatePicker from 'react-native-date-picker';
import Styles from '../../../../../../styles/Styles';
import PrimaryTextInput from '../../../../../../components/baseComponents/PrimaryTextInput';
import Button from '../../../../../../components/baseComponents/Button';
import SelectInput from '../../../../../../components/baseComponents/SelectInput';
import CustomTextArea from '../../../../../../components/baseComponents/CustomTextArea';
import { useSelector } from 'react-redux';
import { addNewEducationDetail, updateEducationDetails } from '../../../../../../api/networkCalls';
import moment from 'moment';


const AddEducationSheet = ({ isVisible, onClose, refetch, onAlertAddEducation, isEdit }) => {
    const [alert, setAlert] = useState({ visible: false, type: '', message: '' });
    const [degreeTitle, setDegreeTitle] = useState('');
    const [instituteName, setInstituteName] = useState('');
    const [address, setAddress] = useState('');
    const [currentlyOngoing, setCurrentlyOngoing] = useState(false);
    const [loading, setLoading] = useState(false);
    const [description, setDescription] = useState('');
    const [dateFrom, setDateFrom] = useState(new Date());
    const [dateTo, setDateTo] = useState(new Date());
    const [openDateFromPicker, setOpenDateFromPicker] = useState(false);
    const [openDateToPicker, setOpenDateToPicker] = useState(false);
    const [submittedData, setSubmittedData] = useState(null);
    const bottomSheetRef = useRef(null);
    const [windowHeight, setWindowHeight] = useState(Dimensions.get('window').height);
    const token = useSelector((state) => state.auth.token);
    const user = useSelector((state) => state.auth.user);

    const [degreeTitleError, setDegreeTitleError] = useState('');
    const [addressError, setAddressError] = useState('');
    const [dateFromError, setDateFromError] = useState('');
    const [dateToError, setDateToError] = useState('');

    useEffect(() => {
        if (isEdit?.isEdit) {
            setDegreeTitle(isEdit.degree);
            setInstituteName(isEdit.university);
            const dates = isEdit.dateRange.split(' - ');
            setDateFrom(new Date(formatDateMoment(dates[0])));
            setDateTo(new Date(formatDateMoment(dates[1])));
            setAddress(isEdit.address || '');
            setCurrentlyOngoing(isEdit.isOngoing);
            setDescription(isEdit.description || '');
        } else {
            setDegreeTitle('');
            setInstituteName('');
            setAddress('');
            setCurrentlyOngoing(false);
            setDescription('');
            setDateFrom(new Date());
            setDateTo(new Date());
        }
    }, [isEdit]);

    const formatDateMoment = (dateString) => {
        const date = moment(dateString, 'MMMM DD, YYYY');
        return date.format('YYYY-MM-DD');
    }
    useEffect(() => {
        if (isVisible) {
            bottomSheetRef.current.open();
        } else {
            bottomSheetRef.current.close();
            onClose();
        }
    }, [isVisible]);

    const handleClose = () => {
        onClose();
    };

    const formatDate = (date) => {

        return `${date.getFullYear()}-${padZero(date.getMonth() + 1)}-${padZero(date.getDate())}`;
    };

    const padZero = (value) => {
        return value.toString().padStart(2, '0');
    };

    const validateFields = () => {
        let valid = true;

        if (!degreeTitle.trim()) {
            setDegreeTitleError('This field is required');
            valid = false;
        } else {
            setDegreeTitleError('');
        }

        if (!address.trim()) {
            setAddressError('This field is required');
            valid = false;
        } else {
            setAddressError('');
        }

        if (!dateFrom) {
            setDateFromError('This field is required');
            valid = false;
        } else {
            setDateFromError('');
        }

        if (!currentlyOngoing && !dateTo) {
            setDateToError('This field is required');
            valid = false;
        } else {
            setDateToError('');
        }

        return valid;
    };

    const handleCloseAlert = () => {
        if (alert.type == "Congratulations!") {
            bottomSheetRef.current.close();
        } else {
            bottomSheetRef.current.close();
            setAlert({ visible: false, type: '', message: '' });
        }

    };

    const addEducation = async () => {
        if (!validateFields()) {
            bottomSheetRef.current.close();
            onAlertAddEducation({ visible: true, type: 'Oops!', message: 'Please fill in all required fields.' });
            return;
        }

        const educationData = {
            profile_id: user?.profile_id,
            deg_title: degreeTitle,
            deg_institue_name: instituteName,
            address: address,
            deg_description: description,
            deg_start_date: formatDate(dateFrom),
            deg_end_date: formatDate(dateTo),
            is_ongoing: currentlyOngoing ? 1 : 0,
        };
        try {
            setLoading(true);
            const response = await addNewEducationDetail(educationData, token);
            if (response.status == 200) {
                refetch();
                setLoading(false);
                onAlertAddEducation({ visible: true, type: 'Congratulations!', message: response?.message });
                onClose();

            }
        } catch (error) {
            onClose();
            onAlertAddEducation({
                visible: true, type: 'Oops!', message: 'Error submitting education details.Please try again.'
            });

            setLoading(false);
        }
    };

    const updateEducation = async () => {
        const educationData = {
            profile_id: user?.profile_id,
            deg_title: degreeTitle,
            deg_institue_name: instituteName,
            address: address,
            deg_description: description,
            deg_start_date: formatDate(dateFrom),
            deg_end_date: formatDate(dateTo),
            is_ongoing: currentlyOngoing ? 1 : 0,
        }

        try {
            setLoading(true);
            const response = await updateEducationDetails(isEdit.educationId, educationData, token);
            if (response?.data?.status == 200) {
                refetch();
                onAlertAddEducation({ visible: true, type: 'Congratulations!', message: response.data.message });
                setLoading(false);
                onClose();
            } else {
                onAlertAddEducation({
                    visible: true, type: 'Oops!', message: 'Unexpected response format. Please try again.'
                });
                setLoading(false);
                onClose();
            }
        } catch (error) {
            onClose();
            onAlertAddEducation({
                visible: true, type: 'Oops!', message: 'Error updating education details. Please try again.'
            });
            setLoading(false);
        }
    };

    const handleSubmit = async () => {
        if (isEdit?.isEdit) {
            await updateEducation();
        } else {
            await addEducation();
        }
    };


    return (
        <RBSheet
            ref={bottomSheetRef}
            closeOnDragDown={true}
            closeOnPressMask={true}
            onClose={handleClose}
            height={windowHeight / 1.5}
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
                    Add/edit educational details
                </Text>
                <View
                    style={{ borderRadius: 20, backgroundColor: '#FFFFFF', paddingHorizontal: 20, marginBottom: 10, paddingBottom: 20 }}>
                    <View style={{ paddingTop: 15 }}>
                        <Text style={[styles.required, { alignSelf: "flex-end", marginTop: 20 }]}>*</Text>
                        <PrimaryTextInput
                            value={degreeTitle}
                            onChangeText={e => setDegreeTitle(e)}
                            placeholder="Add degree title"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={10}
                        />
                        {/* {degreeTitleError ? <Text style={styles.errorText}>{degreeTitleError}</Text> : null} */}

                    </View>

                    <PrimaryTextInput
                        value={instituteName}
                        onChangeText={setInstituteName}
                        placeholder="Add institute name"
                        type="text"
                        showBorderBottom={true}
                        iconRequired={false}
                        marginBottom={5}
                    />

                    <View >
                        <Text style={[styles.required, { alignSelf: "flex-end", marginTop: 10 }]}>*</Text>
                        <PrimaryTextInput
                            value={address}
                            onChangeText={setAddress}
                            placeholder="Address"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={0}
                        />
                        {/* {addressError ? <Text style={styles.errorText}>{addressError}</Text> : null} */}
                    </View>

                    <View >
                        <Text style={[styles.required, { alignSelf: "flex-end", marginTop: 20, right: 20 }]}>*</Text>
                        <SelectInput
                            value={formatDate(dateFrom)}
                            iconName={'calendar'}
                            showBorderBottom={true}
                            iconRequired={true}
                            iconColor={"#585858"}
                            iconSize={16}
                            onPress={() => setOpenDateFromPicker(true)}
                            marginBottom={5}
                        />
                        {/* {dateFromError ? <Text style={styles.errorText}>{dateFromError}</Text> : null} */}
                    </View>

                    <View >
                        <Text style={[styles.required, { alignSelf: "flex-end", marginTop: 20, right: 20 }]}>*</Text>
                        {!currentlyOngoing && (
                            <>
                                <SelectInput
                                    value={formatDate(dateTo)}
                                    iconName={'calendar'}
                                    showBorderBottom={true}
                                    iconRequired={true}
                                    iconColor={"#585858"}
                                    iconSize={16}
                                    onPress={() => setOpenDateToPicker(true)}
                                    marginBottom={5}
                                />
                                {/* {dateToError ? <Text style={styles.errorText}>{dateToError}</Text> : null} */}
                            </>
                        )}
                    </View>

                    <View style={Styles.menuItem}>
                        <Pressable
                            style={styles.optionContainer}
                            onPress={() => setCurrentlyOngoing(!currentlyOngoing)}
                        >
                            <Text style={Styles.selectOptionText}>This degree/course is currently ongoing</Text>

                            <View
                                style={
                                    currentlyOngoing
                                        ? Styles.payoutCheckActiveCircel
                                        : Styles.payoutCheckCircel
                                }
                            />
                        </Pressable>
                    </View>
                    <CustomTextArea
                        value={description}
                        onChangeText={setDescription}
                        placeholder="Description"
                        type="text"
                    />

                    <View style={{ marginTop: 20 }}>
                        <Button
                            loading={loading}
                            backgroundColor="#ee4710"
                            text="Save & Update"
                            onPress={handleSubmit}
                            color={'#fff'}
                            borderColor="#f04438"
                            borderRequired={true}
                        />
                    </View>
                    <View style={{ paddingHorizontal: 30, paddingTop: 5 }}>
                        <Text style={[Styles.infoText, { textAlign: "center", paddingTop: 10 }]}>
                            Click “Save & Update” to update the latest changes
                        </Text>
                    </View>
                </View>
            </ScrollView>

            <DatePicker
                modal
                open={openDateFromPicker}
                date={dateFrom}
                mode={"date"}
                onConfirm={(date) => {
                    setOpenDateFromPicker(false);
                    setDateFrom(date);

                }}
                onCancel={() => {
                    setOpenDateFromPicker(false);
                }}
            />

            <DatePicker
                modal
                open={openDateToPicker}
                date={dateTo}
                mode={"date"}
                onConfirm={(date) => {
                    setOpenDateToPicker(false);
                    setDateTo(date);
                }}
                onCancel={() => {
                    setOpenDateToPicker(false);
                }}
            />
            {/* <AlertComponent
                type={alert?.type}
                message={alert?.message}
                onPress={handleCloseAlert}
                visible={alert?.visible}

            /> */}
        </RBSheet>
    );
};


const styles = StyleSheet.create({
    dragIndicator: {
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
    },
    heading: {
        paddingVertical: 20,
    },
    listContainer: {
        paddingHorizontal: 20,
        marginBottom: 20,
        marginTop: 15,
    },
    optionContainer: {
        flexDirection: 'row',
        paddingVertical: 15,
        justifyContent: 'space-between',
        width: '100%',
    },
    checkbox: {
        width: 22,
        height: 22,
        borderRadius: 5,
        alignItems: 'center',
        justifyContent: 'center',
        borderWidth: 1,
    },
    errorText: {
        color: 'red',
        fontSize: 12,
        marginTop: 10,
        marginBottom: 15,
    },
    required: {
        color: 'red',
        position: "absolute",
        // marginLeft: 30
    },
});
export default AddEducationSheet;