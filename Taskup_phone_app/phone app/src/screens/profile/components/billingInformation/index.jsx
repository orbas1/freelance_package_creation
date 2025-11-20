import React, { useState, useEffect } from 'react';
import { StyleSheet, Text, View, SafeAreaView, ScrollView, ActivityIndicator } from 'react-native';
import Feather from 'react-native-vector-icons/Feather';
import { useNavigation } from '@react-navigation/native';
import { useSelector } from 'react-redux';
import PrimaryTextInput from '../../../../components/baseComponents/PrimaryTextInput';
import Button from '../../../../components/baseComponents/Button';
import SelectInput from '../../../../components/baseComponents/SelectInput';
import CustomTextArea from '../../../../components/baseComponents/CustomTextArea';
import SelectListSheet from '../../../../components/baseComponents/SelectListSheet';
import { useFetchBillingInformation, useFetchCountyrStateInfo } from '../../../../hooks';
import Styles from '../../../../styles/Styles';
import * as Constant from '../../../../constants/GlobalConstants';
import { updateBillingInformation } from '../../../../api/networkCalls';
import AlertComponent from '../../../../components/AlertComponent';

const Index = () => {
    const [firstName, setFirstName] = useState('');
    const [lastName, setLastName] = useState('');
    const [company, setCompany] = useState('');
    const [countryId, setCountryId] = useState('');
    const [city, setCity] = useState('');
    const [postalCode, setPostalCode] = useState('');
    const [email, setEmail] = useState('');
    const [phone, setPhone] = useState('');
    const [address, setAddress] = useState('');
    const [isVisibleCountrySheet, setIsVisibleCountrySheet] = useState(false);
    const [isVisibleStatesSheet, setIsVisibleStatesSheet] = useState(false);
    const [country, setCountry] = useState([]);
    const [countryName, setCountryName] = useState("")
    const [countryState, setCountryState] = useState([]);
    const [stateId, setStateId] = useState('');

    const [countryStateName, setCountryStateName] = useState('')

    const [errors, setErrors] = useState({});
    const [loading, setLoading] = useState(false);

    const token = useSelector((state) => state.auth.token);
    const globalTaxonmies = useSelector((state) => state.global);

    const { data: billingInfoData, error: billingInfoDataError, isLoading: billingInfoDataLoading, refetch } = useFetchBillingInformation(token);

    const { data: countryStateData, error: countryStateDataError, isLoading: countryStateDataLoading, refetch: refetchCountryState } = useFetchCountyrStateInfo(countryId);
    const [alert, setAlert] = useState({ visible: false, type: '', message: '' });


    useEffect(() => {
        refetch();
    }, []);

    useEffect(() => {
        if (billingInfoData) {
            setFirstName(billingInfoData.data.first_name || '');
            setLastName(billingInfoData.data.last_name || '');
            setCompany(billingInfoData.data.company || '');
            setCountryId(billingInfoData.data.country_id || '');
            setCity(billingInfoData.data.city || '');
            setPostalCode(billingInfoData.data.postal_code || '');
            setEmail(billingInfoData.data.email || '');
            setPhone(billingInfoData.data.phone || '');
            setAddress(billingInfoData.data.address || '');
            setStateId(billingInfoData.data.state_id || '');

            const updateLocationCategory = globalTaxonmies?.countries?.data?.map(obj => ({
                ...obj,
                active: billingInfoData.data.country_id === obj.id
            }));
            const activeCountry = updateLocationCategory?.find(country => country.active === true);
            setCountryName(activeCountry?.name)
            setCountry(updateLocationCategory);


            const updatedCountryState = countryStateData?.data?.map(obj => ({
                ...obj,
                active: billingInfoData.data.state_id === obj.id
            }));
            const activeCountryState = updatedCountryState?.find(country => country.active === true);
            setCountryStateName(activeCountryState?.name)
            setCountryState(updatedCountryState)
        }

        if (billingInfoDataError) {
            setAlert({ visible: true, type: 'Oops!', message: 'An error occurred while fetching billing information. Please try again.' });

        }
    }, [billingInfoData, billingInfoDataError]);

    useEffect(() => {
        if (countryStateData) {
            const updatedCountryState = countryStateData?.data?.map(obj => ({
                ...obj,
                active: billingInfoData.data.state_id === obj.id
            }));
            setCountryState(updatedCountryState);
        }
    }, [countryStateData]);

    useEffect(() => {
        if (countryId) {
            refetchCountryState();
        }
    }, [countryId]);

    if (billingInfoDataLoading) {
        return (
            <SafeAreaView style={{ flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#F4F4FB' }}>
                <ActivityIndicator size="large" color="#EE4710" />
            </SafeAreaView>
        );
    }

    const validateFields = () => {
        let valid = true;
        let errors = {};

        if (!firstName) {
            errors.firstName = 'First name is required';
            valid = false;
        }

        if (!lastName) {
            errors.lastName = 'Last name is required';
            valid = false;
        }

        if (!company) {
            errors.company = 'Company is required';
            valid = false;
        }

        if (!countryId) {
            errors.countryId = 'Country is required';
            valid = false;
        }

        if (!city) {
            errors.city = 'City is required';
            valid = false;
        }

        if (!postalCode) {
            errors.postalCode = 'Postal code is required';
            valid = false;
        }

        if (!email) {
            errors.email = 'Email is required';
            valid = false;
        } else if (!/\S+@\S+\.\S+/.test(email)) {
            errors.email = 'Email address is invalid';
            valid = false;
        }

        if (!phone) {
            errors.phone = 'Phone is required';
            valid = false;
        }

        if (!address) {
            errors.address = 'Address is required';
            valid = false;
        }

        setErrors(errors);
        return valid;
    };


    const handleCloseAlert = () => {
        setAlert({ visible: false, type: '', message: '' });
    };


    const handleBillingSubmit = async () => {
        if (!validateFields()) {
            setAlert({ visible: true, type: 'Oops!', message: 'Please fill all required fields.' });
            return;
        }
        setLoading(true);
        const billingData = {
            first_name: firstName,
            last_name: lastName,
            company: company,
            country_id: countryId,
            city: city,
            postal_code: postalCode,
            email: email,
            phone: phone,
            address: address,
            state_id: stateId
        };
        try {
            const response = await updateBillingInformation(billingData, token);
            refetch();
            setLoading(false);
            setAlert({ visible: true, type: 'Congratulations!', message: response.message });

        } catch (error) {
            setLoading(false);
        }
    };

    const navigation = useNavigation();
    const handleGoBack = () => {
        navigation.goBack();
    };

    const handleUpdateCountryChange = (updateCountry) => {
        const activeCountry = updateCountry.find(country => country.active === true);
        setCountryName(activeCountry?.name)
        setCountryId(activeCountry.id)
        setCountry(updateCountry);
    };

    const handleUpdateCountryStateChange = (updateCountry) => {
        const activeCountry = updateCountry.find(country => country.active === true);
        setCountryStateName(activeCountry?.name)
        setStateId(activeCountry.id)
        setCountryState(updateCountry);
    };

    return (
        <SafeAreaView
            style={{
                marginHorizontal: 10,
                backgroundColor: Constant.bgColor,
                flex: 1,
            }}>
            <ScrollView showsVerticalScrollIndicator={false}>
                <View
                    style={{
                        flexDirection: 'row',
                        alignItems: 'center',
                        justifyContent: 'space-between',
                    }}>
                    <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                        <Feather
                            onPress={() => handleGoBack()}
                            name="chevron-left"
                            color={Constant.iconColor}
                            size={20}
                        />
                        <View style={{ marginHorizontal: 15 }}>
                            <Text
                                style={{
                                    color: Constant.blackColor,
                                    fontSize: 20,
                                    lineHeight: 30,
                                    fontWeight: '600',
                                    fontFamily: Constant.primaryFontSemiBold
                                }}>
                                Billing information
                            </Text>
                        </View>
                    </View>
                </View>
                <View
                    style={{ borderRadius: 20, backgroundColor: '#FFFFFF', paddingHorizontal: 20, marginBottom: 10, paddingBottom: 20, marginTop: 20 }}>
                    <View style={{ paddingTop: 15 }}>
                        <View>
                            <Text style={[styles.required, { alignSelf: "flex-end" }]}>*</Text>
                            <PrimaryTextInput
                                value={firstName}
                                onChangeText={e => setFirstName(e)}
                                placeholder="First name"
                                type="text"
                                showBorderBottom={true}
                                iconRequired={false}
                                marginBottom={10}
                            />
                        </View>
                    </View>
                    <View style={{}}>
                        <Text style={[styles.required, { alignSelf: "flex-end" }]}>*</Text>
                        <PrimaryTextInput
                            value={lastName}
                            onChangeText={e => setLastName(e)}
                            placeholder="Last name"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={10}
                        />
                    </View>

                    <View>
                        <Text style={[styles.required, { alignSelf: "flex-end" }]}>*</Text>
                        <PrimaryTextInput
                            value={company}
                            onChangeText={e => setCompany(e)}
                            placeholder="Company title"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={0}
                        />
                    </View>

                    <View>
                        <Text style={[styles.required, { alignSelf: "flex-end", marginTop: 20, right: 20 }]}>*</Text>
                        <SelectInput
                            value={countryName || "Choose country"}
                            iconName={'chevron-down'}
                            showBorderBottom={true}
                            iconRequired={true}
                            iconColor={"#585858"}
                            iconSize={18}
                            onPress={() => setIsVisibleCountrySheet(true)}
                            marginBottom={15}
                        />
                    </View>
                    {
                        countryState?.length != 0 &&
                        <View>
                            <Text style={[styles.required, { alignSelf: "flex-end", marginTop: 20, right: 20 }]}>*</Text>
                            <SelectInput
                                value={countryStateName || "Select State"}
                                iconName={'chevron-down'}
                                showBorderBottom={true}
                                iconRequired={true}
                                iconColor={"#585858"}
                                iconSize={18}
                                onPress={() => setIsVisibleStatesSheet(true)}
                                marginBottom={15}
                            />
                        </View>
                    }

                    <View>
                        <Text style={[styles.required, { alignSelf: "flex-end" }]}>*</Text>
                        <PrimaryTextInput
                            value={city}
                            onChangeText={e => setCity(e)}
                            placeholder="City"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={10}
                        />
                    </View>

                    <View>
                        <Text style={[styles.required, { alignSelf: "flex-end" }]}>*</Text>
                        <PrimaryTextInput
                            value={postalCode}
                            onChangeText={e => setPostalCode(e)}
                            placeholder="Postal code"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={10}
                        />
                    </View>

                    <View>
                        <Text style={[styles.required, { alignSelf: "flex-end" }]}>*</Text>
                        <PrimaryTextInput
                            value={email}
                            onChangeText={e => setEmail(e)}
                            placeholder="Email"
                            type="text"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={10}
                        />
                    </View>
                    <View>
                        <Text style={[styles.required, { alignSelf: "flex-end" }]}>*</Text>
                        <PrimaryTextInput
                            value={phone}
                            onChangeText={e => setPhone(e)}
                            placeholder="Phone"
                            type="Number"
                            showBorderBottom={true}
                            iconRequired={false}
                            marginBottom={5}
                        />
                    </View>


                    <View>
                        <Text style={[styles.required, { alignSelf: "flex-end" }]}>*</Text>
                        <CustomTextArea
                            value={address}
                            onChangeText={e => setAddress(e)}
                            placeholder="Add address"
                            type="text"
                        />
                    </View>


                    <View style={{ marginTop: 20, alignItems: "center" }}>
                        <Button
                            backgroundColor="#ee4710"
                            text="Save & Update"
                            color={'#fff'}
                            borderColor="#f04438"
                            borderRequired={true}
                            onPress={handleBillingSubmit}
                            loading={loading}
                        />
                        <Text style={[Styles.infoText, { textAlign: "center", paddingTop: 10, width: "80%" }]}>
                            Click “Save & Update” to update the latest changes
                        </Text>
                    </View>
                </View>
            </ScrollView>
            {isVisibleCountrySheet && (
                <SelectListSheet
                    isVisible={isVisibleCountrySheet}
                    onClose={() => setIsVisibleCountrySheet(false)}
                    List={country}
                    selectionType="single"
                    sheetHeight={'1.5'}
                    searchInput={true}
                    searchPlaceholder={"Search location"}
                    onItemChange={handleUpdateCountryChange}
                />
            )}
            {isVisibleStatesSheet && (
                <SelectListSheet
                    isVisible={isVisibleStatesSheet}
                    onClose={() => setIsVisibleStatesSheet(false)}
                    List={countryState}
                    selectionType="single"
                    sheetHeight={'1.5'}
                    searchInput={true}
                    searchPlaceholder={"Search location"}
                    onItemChange={handleUpdateCountryStateChange}
                />
            )}
            <AlertComponent
                type={alert?.type}
                message={alert?.message}
                onPress={handleCloseAlert}
                visible={alert.visible}
            />
        </SafeAreaView>
    );
}

const styles = StyleSheet.create({
    label: {
        fontSize: 16,
        marginBottom: 5,
        color: '#333',
    },
    required: {
        color: 'red',
        position: "absolute",
    },
});

export default Index;



