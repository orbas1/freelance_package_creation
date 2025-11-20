import { StyleSheet, Text, View } from 'react-native'
import React from 'react'
import * as Constant from '../../../constants/GlobalConstants'
import SkeletonPlaceholder from 'react-native-skeleton-placeholder';


const CategoriesCard = ({ isLoading }) => {
    if (isLoading) {
        return (
            <SkeletonPlaceholder>
                <View style={{ width: "90%", height: 20, borderRadius: 10, }} />
                <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center' }}>
                </View>

            </SkeletonPlaceholder >
        );
    }
    return (
        <View style={styles.labels}>
            <Text style={styles.text}>Digital Marketing</Text>
        </View>
    );
};

const styles = StyleSheet.create({
    text: {
        fontSize: 14,
        lineHeight: 20,
        fontWeight: "500",
        fontFamily: Constant.primaryFontMedium,
        color: "#585858",
        textAlign: "center"
    },
    labels: {
        borderRadius: 10,
        backgroundColor: "#fff",
        flex: 1,
        width: "100%",
        flexDirection: "row",
        alignItems: "center",
        paddingHorizontal: 16,
        paddingVertical: 8,
        marginRight: 8,
    }
});

export default CategoriesCard