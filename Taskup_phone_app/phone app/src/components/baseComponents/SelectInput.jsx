import { StyleSheet, Text, TouchableOpacity } from 'react-native';
import React from 'react';
import Icon from 'react-native-vector-icons/Feather';
import * as Constant from '../../constants/GlobalConstants';

const SelectInput = (props) => {
    const { value, showBorderBottom, iconRequired, iconName, marginBottom, iconColor, iconSize, onPress } = props;
    return (
        <TouchableOpacity
            onPress={onPress}
            style={[
                styles.view,
                {
                    borderBottomWidth: showBorderBottom ? 1 : 0,
                    borderBottomColor: showBorderBottom ? 'rgba(234, 234, 234, 0.6)' : 'transparent',
                    marginBottom: marginBottom || 0,
                }
            ]}
        >
            <Text style={styles.freelancerType}>{value}</Text>
            {iconRequired && (
                <Icon
                    name={iconName}
                    size={iconSize}
                    color={iconColor}
                />
            )}
        </TouchableOpacity>
    );
};

export default SelectInput;

const styles = StyleSheet.create({
    freelancerType: {
        fontSize: 16,
        lineHeight: 24,
        fontFamily: Constant.primaryFontRegular,
        color: "#585858",
        flex: 1
    },
    view: {
        alignSelf: "stretch",
        width: "100%",
        paddingBottom: 15,
        flexDirection: "row",
        paddingVertical: 15,
        alignItems: "center",
        borderBottomWidth: 1,
        borderBottomColor: 'rgba(234, 234, 234, 0.6)'
    }
});
