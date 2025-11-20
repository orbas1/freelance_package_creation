import { StyleSheet, Text, View } from 'react-native';
import React from 'react';
import * as Constant from "../../../../../constants/GlobalConstants";

const getStatusStyles = (status) => {
    switch (status) {
        case "Declined":
            return { backgroundColor: '#FEE4E2', color: "#912018" };
        case "Paid":
            return { backgroundColor: '#DCFAE6', color: "#085D3A" };
        case "Refunded":
            return { backgroundColor: '#EFF8FF', color: "#1570EF" };
        default:
            return { backgroundColor: '#FFF', color: "#000" };
    }
}

const DisputesCard = ({ name, date, amount, status }) => {
    const statusStyles = getStatusStyles(status);

    return (
        <View style={styles.disputeContainer}>
            <View style={styles.diputeMain}>
                <Text style={[styles.disputeText, styles.byFlexBox]}>{date}</Text>
                <View style={[styles.labels, { backgroundColor: statusStyles.backgroundColor }]}>
                    <Text style={[styles.disputeTypeText, { color: statusStyles.color }]}>{status}</Text>
                </View>
            </View>
            <View style={styles.frameParent}>
                <View style={[{ flex: 1 }, styles.diputeMain]}>
                    <Text style={[styles.by, styles.disputetextTypo]}>By:</Text>
                    <Text style={[, styles.disputetextTypo, { marginLeft: 6, color: "#000" }]} numberOfLines={1}>Dianne Russell</Text>
                </View>
                <View style={[styles.amountParent, styles.diputeMain]}>
                    <Text style={[styles.by, styles.disputetextTypo]}>Amount</Text>
                    <Text style={[styles.disputetextTypo, { marginLeft: 6, color: "#000" }]} numberOfLines={1}>{amount}</Text>
                </View>
            </View>
        </View>
    )
}

export default DisputesCard;

const styles = StyleSheet.create({
    diputeMain: {
        alignItems: "center",
        flexDirection: "row"
    },
    byFlexBox: {
        textAlign: "left",
        color: "#585858"
    },
    disputetextTypo: {
        fontSize: 14,
        fontFamily: Constant.primaryFontRegular,
        lineHeight: 20,
        color: "#585858"
    },
    disputeText: {
        fontFamily: Constant.primaryFontRegular,
        lineHeight: 20,
        fontSize: 13,
        color: "#585858"
    },
    disputeTypeText: {
        fontSize: 12,
        lineHeight: 14,
        fontWeight: "500",
        textAlign: "center",
        fontFamily: Constant.primaryFontRegular
    },
    labels: {
        borderRadius: 8,
        paddingHorizontal: 8,
        paddingVertical: 5,
        marginLeft: 10
    },
    by: {
        textAlign: "left",
        color: "#585858"
    },
    amountParent: {
        marginLeft: 10,
        flex: 1
    },
    frameParent: {
        marginTop: 10,
        flexDirection: "row",
        alignSelf: "stretch"
    },
    disputeContainer: {
        shadowColor: "rgba(16, 24, 40, 0.04)",
        shadowOffset: {
            width: 0,
            height: 4
        },
        shadowRadius: 6,
        elevation: 6,
        shadowOpacity: 1,
        borderRadius: 16,
        backgroundColor: "#fff",
        width: "100%",
        padding: 16,
        overflow: "hidden",
        flex: 1,
        alignSelf: "stretch",
        marginVertical: 5
    }
});
