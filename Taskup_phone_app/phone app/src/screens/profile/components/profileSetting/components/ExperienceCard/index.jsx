import React, { useState } from 'react';
import { Text, View, Pressable } from 'react-native';
import { Calendar } from '../../../../../../constants/svgIcons/index';
import Styles from '../../../../../../styles/Styles';
import ConfirmationSheet from '../RbSheets/ConfirmationSheet';

const ExperienceCard = ({ openSheet }) => {
    const [isVisibleConfirmationSheet, setisVisibleConfirmationSheet] = useState(false);
    return (
        <View style={[Styles.profileEduContainer, Styles.flexContainer]}>
            <View style={Styles.cardContent}>
                <Text style={Styles.EduUniversityNameText}>School of Visual Arts</Text>
                <View style={[Styles.EduInfoWrapper, {
                    alignItems: "center",
                    flexDirection: "row"
                }]}>
                    <View style={[Styles.infoContainer, {
                        alignItems: "center",
                        flexDirection: "row"
                    }]}>
                        <Text style={Styles.degreeText}>Bachelor in Computer Science</Text>
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
                        <Text style={[Styles.dateText, Styles.EduUniversityNameText]}>April 1, 2022 - April 1, 2024</Text>
                    </View>
                </View>
            </View>
            <View style={[Styles.EduButtonGroup]}>
                <Pressable style={[Styles.EditButton, Styles.buttonFlex]} onPress={() => openSheet()}>
                    <View style={Styles.buttonPadding}>
                        <Text style={[Styles.buttonText, Styles.textCommon]}>Edit</Text>
                    </View>
                </Pressable>
                <Pressable style={[Styles.buttonDelete, Styles.buttonFlex]} onPress={() => setisVisibleConfirmationSheet(true)}>
                    <View style={Styles.buttonPadding}>
                        <Text style={[Styles.buttonDeleteText, Styles.textCommon]}>Delete</Text>
                    </View>
                </Pressable>
            </View>
            {isVisibleConfirmationSheet && (
                <ConfirmationSheet isVisible={isVisibleConfirmationSheet}
                    onClose={() => setisVisibleConfirmationSheet(false)}
                />
            )}
        </View>
    )
};
export default ExperienceCard;
