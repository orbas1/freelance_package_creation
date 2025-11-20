import React, { useEffect, useRef, useState } from 'react';
import {
    View,
    Text,
    Dimensions,
    ScrollView,
} from 'react-native';
import RBSheet from 'react-native-raw-bottom-sheet';
import Styles from '../../../../../../styles/Styles';
import PrimaryTextInput from '../../../../../../components/baseComponents/PrimaryTextInput';
import Button from '../../../../../../components/baseComponents/Button';
import SelectInput from '../../../../../../components/baseComponents/SelectInput';
import CustomTextArea from '../../../../../../components/baseComponents/CustomTextArea';

const AddExperienceSheet = ({ isVisible, onClose }) => {
    const [firstName, setFirstName] = useState('')
    const [lastName, setLastName] = useState('')
    const [description, setDescription] = useState('')
    const bottomSheetRef = useRef(null);
    const [windowHeight, setWindowHeight] = useState(Dimensions.get('window').height);

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
                    Add/edit experience details
                </Text>
                <View
                    style={{ borderRadius: 20, backgroundColor: '#FFFFFF', paddingHorizontal: 20, marginBottom: 10, paddingBottom: 20 }}>
                    <View style={{ paddingTop: 15 }}>
                        <PrimaryTextInput
                            value={firstName}
                            onChangeText={e => setFirstName(e)}
                            placeholder="Add job title"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={10}
                        />
                    </View>

                    <PrimaryTextInput
                        value={lastName}
                        onChangeText={e => setLastName(e)}
                        placeholder="Add company name"
                        type="text"
                        showBorderBottom={true}
                        iconRequired={false}
                        marginBottom={0}
                    />

                    <SelectInput
                        value={"Search Company location"}
                        iconName={'chevron-down'}
                        showBorderBottom={true}
                        iconRequired={true}
                        iconColor={"#585858"}
                        iconSize={18}
                    />
                    <SelectInput
                        value={"Date from"}
                        iconName={'calendar'}
                        showBorderBottom={true}
                        iconRequired={true}
                        iconColor={"#585858"}
                        iconSize={16}
                        marginBottom={5}
                    />
                    <SelectInput
                        value={"Date to"}
                        iconName={'calendar'}
                        showBorderBottom={true}
                        iconRequired={true}
                        iconColor={"#585858"}
                        iconSize={16}
                        marginBottom={5}
                    />
                    <CustomTextArea
                        value={description}
                        onChangeText={e => setComment(e)}
                        placeholder="Description"
                        type="text"
                    />

                    <View style={{ marginTop: 20 }}>
                        <Button
                            backgroundColor="#ee4710"
                            text="Save & Update"
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
        </RBSheet>
    );
};

export default AddExperienceSheet;
