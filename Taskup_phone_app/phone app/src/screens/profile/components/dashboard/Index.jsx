import React, { useState, useEffect } from 'react';
import { StyleSheet, Text, View, SafeAreaView, ScrollView, Image, FlatList, Pressable, Alert, ActivityIndicator } from 'react-native';
import Styles from '../../../../styles/Styles';
import { PresentationIcon, BrifeCaseIcon, MoneyCartIcon, HourglassIcon, CrossWithCircle, Cross, Plus } from '../../../../constants/svgIcons/index';
import * as Constant from '../../../../constants/GlobalConstants';
import PaymentSheet from './components/paymentSheet';
import { useFetchAccountStatus, useFetchPaymentMethod } from '../../../../hooks';
import { useSelector } from 'react-redux';


const Dashboard = () => {
    const [isVisiblePaymentSheet, setIsVisiblePaymentSheet] = useState(false);
    const [isVisiblePaymentHistorySheet, setIsVisiblePaymentHistorySheet] = useState(false);
    const [paymentType, setPaymentType] = useState('')
    const [paymentMethods, setPaymentMethods] = useState([
        { icon: <Plus IconColor={"#585858"} />, text: 'PayPal Account', data: '27,696', backgroundColor: '#FEF0C7', ImageName: require('../../../../assets/images/paypal.png'), type: "paypal", active: false },
        { icon: <Plus IconColor={"#585858"} />, text: 'Payoneer Account', data: '27,696', backgroundColor: '#EFF8FF', ImageName: require('../../../../assets/images/payoneer.png'), type: "payoneer", active: false },
        { icon: <Plus IconColor={"#585858"} />, text: 'Bank Account', data: '27,696', backgroundColor: '#FEE4E2', ImageName: require('../../../../assets/images/Bank.png'), type: "bank", active: false }
    ]);

    const token = useSelector((state) => state.auth.token);
    const user = useSelector((state) => state.auth.user);

    const { data: accountStatus, error: accountStatusError, isLoading: accountStatusLoading } = useFetchAccountStatus(token);

    const { data: paymentMethod, error: paymentMethodError, isLoading: paymentMethodLoading, refetch } = useFetchPaymentMethod(token);


    useEffect(() => {
        if (paymentMethod && paymentMethod.data && paymentMethod.data.default_selected) {
            const selectedPaymentType = paymentMethod.data.default_selected;
            setPaymentType(selectedPaymentType);

            const updatedPaymentMethods = paymentMethods.map(method => ({
                ...method,
                active: method.type === selectedPaymentType
            }));
            setPaymentMethods(updatedPaymentMethods);
        }
    }, [paymentMethod]);

    useEffect(() => {
        if (accountStatusError) {
            Alert.alert('Error', 'An error occurred while fetching projects. Please try again.');
        }
    }, [accountStatusError]);

    if (accountStatusLoading) {
        return (
            <SafeAreaView style={{ flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#F4F4FB' }}>
                <ActivityIndicator size="large" color="#EE4710" />
            </SafeAreaView>
        );
    }

    const togglePaymentSheet = (val) => {
        setPaymentType(val)
        setIsVisiblePaymentSheet(!isVisiblePaymentSheet);
    };

    const togglePaymentHistorySheet = () => {
        setIsVisiblePaymentHistorySheet(!isVisiblePaymentHistorySheet);
    };

    const data = [
        { id: '1', amount: `${user?.user_type === "buyer" ? accountStatus?.total_earning : accountStatus?.total_earning}`, description: `${user?.user_type === "buyer" ? "Total amount spent on projects" : "Total earned Income"}`, backgroundColor: '#f2f962', svgIcon: <PresentationIcon IconColor={"#585858"} /> },
        { id: '2', amount: `${user?.user_type === "buyer" ? accountStatus?.gig_spend_amount : accountStatus?.withdraw_amount}`, description: `${user?.user_type === "buyer" ? "Total amount spent on ongoing orders" : 'Funds withdraw'}`, backgroundColor: '#cccefd', svgIcon: <BrifeCaseIcon strokeWidth={1.3} height={20} width={21} iconColor={'#585858'} /> },
        { id: '3', amount: `${user?.user_type === "buyer" ? accountStatus?.ongoing_amount : accountStatus?.pending_income}`, description: `${user?.user_type === "buyer" ? "Total amount spent on purchased gigs" : 'Ongoing orders amount'}`, backgroundColor: '#dafdcc', svgIcon: <HourglassIcon IconColor={"#585858"} /> },
        { id: '4', amount: `${user?.user_type === "buyer" ? accountStatus?.available_balance : accountStatus?.available_balance}`, description: 'Funds available in wallet', backgroundColor: '#ffbfb5', svgIcon: <MoneyCartIcon IconColor={"#585858"} /> }
    ];

    const menuItems = [
        user?.user_type === "buyer"
            ? { icon: <CrossWithCircle IconColor={"#585858"} />, text: 'Posted projects', data: accountStatus?.projects, backgroundColor: '#F7F7F8' } : null,
        { icon: <PresentationIcon IconColor={"#F79009"} />, text: 'Completed Projects', data: accountStatus?.completed_projects, backgroundColor: '#FEF0C7' },
        { icon: <HourglassIcon IconColor={"#1570EF"} />, text: 'Ongoing Projects', data: accountStatus?.ongoing_projects, backgroundColor: '#EFF8FF' },
        { icon: <Cross IconColor={"#D92D20"} />, text: 'Cancelled Projects', data: accountStatus?.cancelled_projects, backgroundColor: '#FEE4E2' },
        { icon: <BrifeCaseIcon strokeWidth={1.3} height={16} width={16} iconColor={'#7A50EC'} />, text: `${user?.user_type === "buyer" ? "Purchased gigs" : 'Gigs Sold'}`, data: user?.user_type === "buyer" ? accountStatus.gig_orders : accountStatus.sold_gigs, backgroundColor: '#F2EEFA' },
        { icon: <HourglassIcon IconColor={"#079455"} />, text: 'Ongoing gigs', data: accountStatus?.ongoing_gigs, backgroundColor: '#DCFAE6' },
        user?.user_type === "seller" ? { icon: <CrossWithCircle IconColor={"#585858"} />, text: 'Cancelled gigs', data: accountStatus?.cancelled_gigs, backgroundColor: '#F7F7F8' } : null,
    ].filter(item => item !== null);


    const paymentHistory = [
        { refNo: 'Ref# AZC32485', date: 'Jun 27, 2024', backgroundColor: '#FEE4E2', color: "#912018", Amount: 10, paymentMethod: "Bank Transfer", status: "Declined" },
        { refNo: 'Ref# AZC32485', date: 'Jun 27, 2024', backgroundColor: '#FEE4E2', color: "#912018", Amount: 10, paymentMethod: "Bank Transfer", status: "Paid" },
        { refNo: 'Ref# AZC32485', date: 'Jun 27, 2024', backgroundColor: '#FEE4E2', color: "#912018", Amount: 10, paymentMethod: "Bank Transfer", status: "Declined" },
        { refNo: 'Ref# AZC32485', date: 'Jun 27, 2024', backgroundColor: '#FEE4E2', color: "#912018", Amount: 10, paymentMethod: "Bank Transfer", status: "Refund" },
    ];

    const renderItem = ({ item }) => (
        <View style={[styles.view, { backgroundColor: item.backgroundColor }]}>
            <View style={styles.presentationLineWrapper}>
                {item.svgIcon}
            </View>
            <View style={styles.parent}>
                <Text style={[styles.text, styles.textTypo]} numberOfLines={1}>{item.amount}</Text>
                <Text style={[styles.totalIncome, styles.textTypo]}>{item.description}</Text>
            </View>
        </View>
    );

    return (
        <SafeAreaView style={Styles.safeAreaView}>
            <ScrollView
                showsVerticalScrollIndicator={false}
            >
                <View style={Styles.profileHeader}>
                    <Image
                        resizeMode="center"
                        style={Styles.profileImage}
                        source={{ uri: user?.image }}
                    />
                    <View>
                        <Text style={Styles.profileName}>{user?.short_name}</Text>
                        <Text style={Styles.profileAccount}>{user?.user_type} Account</Text>
                    </View>
                </View>
                <FlatList
                    horizontal
                    data={data}
                    renderItem={renderItem}
                    keyExtractor={item => item.id}
                    style={styles.flatList}
                    contentContainerStyle={styles.flatListContent}
                    showsHorizontalScrollIndicator={false}
                />
                <Text style={Styles.dasBoardSubHeadingText}>Useful Stats</Text>
                <View style={[Styles.listParent, { paddingHorizontal: 14, marginTop: 15, paddingVertical: 10, marginBottom: 20 }]}>
                    {menuItems.map((item, index) => (
                        <View key={index}>
                            <Pressable style={[Styles.menuItem,
                            ]}>
                                <View style={[Styles.menuItemDashboard, { paddingVertical: 12 }]}>
                                    <View
                                        style={{
                                            backgroundColor: item.backgroundColor,
                                            padding: 10,
                                            borderRadius: 7.5,
                                        }}>
                                        {item.icon}
                                    </View>
                                    <View>
                                        <Text style={Styles.infoText}>{item.text}</Text>
                                        <Text style={[Styles.infoText, { color: '#000000' }]}>{item.data}</Text>
                                    </View>

                                </View>
                            </Pressable>
                            {index < menuItems.length - 1 && <View style={Styles.line} />}
                        </View>
                    ))}
                </View>
                {
                    user?.user_type === "seller" && <>
                        <Text style={Styles.dasBoardSubHeadingText}>Payouts Method</Text>
                        <View style={[Styles.listParent, { paddingHorizontal: 14, marginTop: 15, paddingVertical: 10, marginBottom: 20 }]}>
                            {paymentMethods.map((item, index) => (
                                <View key={index}>
                                    <View style={[Styles.menuItem,
                                    ]}
                                    >
                                        <Pressable style={[Styles.menuItemDashboard,
                                        {
                                            paddingVertical: 12,
                                            justifyContent: "space-between",
                                            paddingHorizontal: 10,
                                            width: "100%"
                                        }]}
                                            onPress={() => togglePaymentSheet(item.type)}
                                        >
                                            <View style={{
                                                flexDirection: "row",
                                                alignItems: "center",
                                            }}>
                                                {/* <View style={Styles.payoutCheckBox}> */}
                                                <View style={[item.active ? Styles.payoutCheckActiveCircel : Styles.payoutCheckCircel]} />
                                                {/* </View> */}
                                                <View
                                                    style={{
                                                        // backgroundColor: item.backgroundColor,
                                                        borderColor: "#EAEAEA",
                                                        padding: 10,
                                                        borderRadius: 7.5,
                                                        borderWidth: 1,
                                                        marginLeft: 15
                                                    }}>
                                                    <Image
                                                        style={{ height: 30, width: 30 }}
                                                        source={item.ImageName}
                                                    />
                                                </View>
                                                <View style={{ marginLeft: 10 }}>
                                                    <Text style={Styles.infoText}>{item.text}</Text>
                                                    <Text style={[Styles.infoText, { color: '#000000' }]}>{item.data}</Text>
                                                </View>
                                            </View>
                                            <View>
                                                {item.icon}
                                            </View>

                                        </Pressable>
                                    </View>
                                    {index < menuItems.length - 1 && <View style={Styles.line} />}


                                </View>
                            ))}
                            <View style={{ padding: 20 }}>
                                <Text style={[Styles.infoText, { textAlign: "center" }]}>
                                    Choose any payment method to receive your earned amount direct to your desired account. Leaving this empty or unchecked will cause delay or no payments. For further info read our details
                                    <Text style={[Styles.infoText, { textAlign: "left", color: "#2e90fa", textDecoration: "underline", }]}>
                                        Terms and Condition
                                    </Text>
                                    <Text style={[Styles.infoText, { gap: 10 }]}>
                                        and
                                    </Text>
                                    <Text style={[Styles.infoText, { textAlign: "left", color: "#2e90fa", textDecoration: "underline", }]}>
                                        Privacy Policy
                                    </Text>
                                </Text>

                            </View>

                        </View>
                    </>
                }

            </ScrollView>
        </SafeAreaView>
    );
};

const styles = StyleSheet.create({
    viewFlexBox: {
        justifyContent: "space-between",
        alignItems: "center"
    },
    textTypo: {
        textAlign: "center",
        fontFamily: "SF Pro Text"
    },
    presentationLineWrapper: {
        justifyContent: "center",
        alignItems: "center",
        borderRadius: 40,
        backgroundColor: "#fff",
        width: 50,
        height: 50,
        marginBottom: 10
    },
    text: {
        fontSize: 15,
        lineHeight: 21,
        fontWeight: "500",
        color: "#000",
        alignSelf: "stretch",
        overflow: "hidden",
        fontFamily: Constant.primaryFontMedium
    },
    totalIncome: {
        fontSize: 12,
        lineHeight: 18,
        color: "#585858",
        fontFamily: Constant.primaryFontRegular

    },
    parent: {
        justifyContent: "center",
        alignItems: "center"
    },
    view: {
        borderRadius: 20,
        flex: 1,
        paddingHorizontal: 14,
        paddingVertical: 20,
        overflow: "hidden",
        marginRight: 14,
        justifyContent: "center",
        alignItems: "center",
        width: 150,
    },
    flatList: {
        marginTop: 20
    },
    flatListContent: {
        // paddingHorizontal: 10,
        paddingBottom: 20
    }
});

export default Dashboard;
