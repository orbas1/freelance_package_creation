import React from 'react';
import * as Constant from '../../constants/GlobalConstants';
import { ActivityIndicator, StyleSheet, Text, TouchableOpacity, } from 'react-native';

const Button = ({ backgroundColor, text, onPress, borderRequired = false, borderColor, color, loaderColor, weight = 500, loading = false }) => {
    return (
        <TouchableOpacity
            style={[styles.button, {
                backgroundColor, flexDirection: "row", borderWidth: borderRequired ? 1 : 0,
                borderColor: borderColor,
                borderRadius: 10
            }]}
            onPress={onPress}
        >
            <Text style={[styles.text, { color: color, fontWeight: weight }]}>{text}</Text>
            {loading && <ActivityIndicator style={{ marginLeft: 20 }} size="small" color={loaderColor ? loaderColor : "#fff"}
            />}
        </TouchableOpacity>
    );
};

const styles = StyleSheet.create({
    button: {
        width: '100%',
        borderRadius: 10,
        paddingVertical: 15,
        paddingHorizontal: 20,
        alignItems: 'center',
        justifyContent: 'center',
    },
    text: {
        fontSize: 16,
        fontFamily: Constant.primaryFontMedium

    },
});

export default Button;
