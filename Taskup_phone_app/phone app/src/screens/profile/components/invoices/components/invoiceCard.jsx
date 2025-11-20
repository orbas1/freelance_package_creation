import * as React from "react";
import { Text, StyleSheet, View } from "react-native";
import * as Constant from "../../../../../constants/GlobalConstants.js";

const InvoiceDetail = ({ label, value }) => (
    <View style={styles.detailRow}>
        <Text style={styles.detailLabel}>{label}</Text>
        <Text style={styles.detailValue} numberOfLines={1}>{value}</Text>
    </View>
);

const Invoice = ({date, type, amount,status }) => {
    const getStatusStyles = (status) => {
        switch (status) {
            case "processed":
                return { backgroundColor: '#FEE4E2', color: "#912018" , name :"Ongoing" };
            case "completed":
                return { backgroundColor: '#DCFAE6', color: "#085D3A" ,name:"Completed" };
            case "refunded":
                return { backgroundColor: '#EFF8FF', color: "#1570EF",name:"Refunded" };
            default:
                return { backgroundColor: '#FFF', color: "#000" };
        }
    }

    const statusStyles = getStatusStyles(status);
    return (
        <View style={styles.invoiceContainer}>
            <View style={[styles.invoiceHeader, {width:"83%",justifyContent:"space-between"}]}>
                <Text style={styles.invoiceNumber}>{date}</Text>
                 <View style={[styles.labels, 
                    { backgroundColor: statusStyles.backgroundColor,paddingVertical:5,borderRadius:10 ,paddingHorizontal:10 }]}>
                    <Text style={[styles.disputeTypeText, { color: statusStyles.color }]}>{statusStyles.name}</Text>
                </View>
            </View>
            <View style={styles.invoiceDetails}>
                <InvoiceDetail label="Type:" value={type} />
                <InvoiceDetail label="Amount" value={`${amount}`} />
            </View>
        </View>
    );
};

const styles = StyleSheet.create({
    invoiceContainer: {
        shadowColor: "rgba(16, 24, 40, 0.04)",
        shadowOffset: { width: 0, height: 4 },
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
        marginBottom: 10,
    },
    invoiceHeader: {
        flexDirection: "row",
        alignItems: "center",
    },
    invoiceNumber: {
        textAlign: "left",
        color: "#585858",
        fontFamily: Constant.primaryFontRegular,
        fontSize: 13,
        lineHeight: 20,
    },
    separator: {
        opacity: 0.5,
        marginLeft: 10,
        textAlign: "left",
        color: "#585858",
    },
    invoiceDate: {
        marginLeft: 10,
        fontFamily: Constant.primaryFontRegular,
        fontSize: 13,
        lineHeight: 20,
        color: "#585858",
    },
    invoiceDetails: {
        marginTop: 10,
        flexDirection: "row",
        alignSelf: "stretch",
    },
    detailRow: {
        flex: 1,
        flexDirection: "row",
        alignItems: "center",
    },
    detailLabel: {
        fontSize: 14,
        fontFamily: Constant.primaryFontRegular,
        lineHeight: 20,
        color: "#585858",
    },
    detailValue: {
        fontSize: 14,
        fontFamily: Constant.primaryFontRegular,
        lineHeight: 20,
        color: "#000",
        marginLeft: 6,
    },
});

export default Invoice;
