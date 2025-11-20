import React, { useState } from 'react';
import { Text, View, Pressable } from "react-native";
import { Calendar } from '../../../../../../constants/svgIcons/index';
import Styles from '../../../../../../styles/Styles';
import ConfirmationSheet from '../RbSheets/ConfirmationSheet';

const EducationCard = ({ university, degree, dateRange, openSheet, educationId, refetch, handleEdit, description, isEdit, onAlertDeleteEducation }) => {
    const [isVisibleConfirmationSheet, setIsVisibleConfirmationSheet] = useState(false);

    const handleopenSheet = () => {
        openSheet();
    }
    return (
        <>
            <View style={[Styles.profileEduContainer, Styles.flexContainer]}>
                <View style={Styles.cardContent}>
                    <Text style={Styles.EduUniversityNameText}>{university}</Text>
                    <View style={[Styles.EduInfoWrapper, {
                        alignItems: "center",
                        flexDirection: "row"
                    }]}>
                        <View style={[Styles.infoContainer, {
                            alignItems: "center",
                            flexDirection: "row"
                        }]}>
                            <Text style={Styles.degreeText}>{degree}</Text>
                        </View>
                    </View>
                    <View style={[Styles.EduInfoWrapper, {
                        alignItems: "center",
                        flexDirection: "row"
                    }]}>
                        <View style={{
                            alignItems: "center",
                            flexDirection: "row"
                        }}>
                            <Calendar height={14} width={15} iconColor={'#585858'} />
                            <Text style={[Styles.dateText, Styles.EduUniversityNameText]}>{dateRange}</Text>
                        </View>
                    </View>
                </View>

                <View style={[Styles.EduButtonGroup]}>
                    <Pressable style={[Styles.EditButton, Styles.buttonFlex]} onPress={() => { handleEdit({ university, degree, dateRange, educationId, address: "", description: description, isEdit: true }), handleopenSheet() }}>
                        <View style={Styles.buttonPadding}>
                            <Text style={[Styles.buttonText, Styles.textCommon]}>Edit</Text>
                        </View>
                    </Pressable>
                    <Pressable style={[Styles.buttonDelete, Styles.buttonFlex]} onPress={() => setIsVisibleConfirmationSheet(true)}>
                        <View style={Styles.buttonPadding}>
                            <Text style={[Styles.buttonDeleteText, Styles.textCommon]}>Delete</Text>
                        </View>
                    </Pressable>
                </View>

                {isVisibleConfirmationSheet && (
                    <ConfirmationSheet isVisible={isVisibleConfirmationSheet}
                        onClose={() => setIsVisibleConfirmationSheet(false)}
                        educationId={educationId}
                        refetch={refetch}
                        onAlertDeleteEducation={onAlertDeleteEducation}
                    />
                )}
            </View>
        </>
    );
};

export default EducationCard;