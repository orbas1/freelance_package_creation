import React, { useEffect, useState } from 'react'
import { StyleSheet, Text, View, SafeAreaView, ScrollView, Image, FlatList, TouchableOpacity, ActivityIndicator } from 'react-native'
import Styles from '../../../../styles/Styles';
import * as Constant from '../../../../constants/GlobalConstants';
import Feather from 'react-native-vector-icons/Feather';
import { useNavigation } from '@react-navigation/native';
import { Plus } from "../../../../constants/svgIcons/index"
import PrimaryTextInput from '../../../../components/baseComponents/PrimaryTextInput';
import Button from '../../../../components/baseComponents/Button';
import SelectInput from '../../../../components/baseComponents/SelectInput';
import CustomTextArea from '../../../../components/baseComponents/CustomTextArea';
import EducationCard from './components/EducationCard';
import UploadePhotoSheet from "./components/RbSheets/UploadePhotoSheet"
import SelectListSheet from "../../../../components/baseComponents/SelectListSheet"
import AddEducationSheet from "./components/RbSheets/AddEducationSheet"
import AddExperienceSheet from "./components/RbSheets/AddExperienceSheet"
import { useDispatch, useSelector } from 'react-redux';
import { launchImageLibrary } from 'react-native-image-picker';
import { useFetchSellerEducationListing } from '../../../../hooks';
import { updateProfile, updateProfilePhotoThunk } from '../../../../redux/slices/authSlice';
import AlertComponent from '../../../../components/AlertComponent';


const index = () => {
    const [firstName, setFirstName] = useState('')
    const [lastName, setLastName] = useState('')
    const [tagline, setTagline] = useState('')
    const [hourlyRate, setHourlyRate] = useState('')
    const [description, setDescription] = useState('')
    const [country, setCountry] = useState('');
    const [image, setImage] = useState('');
    const [zipcode, setZipcode] = useState('');
    const [freelancertype, setFreelancertype] = useState([]);
    const [skill, setSkill] = useState([]);
    const [language, setLanguage] = useState([]);
    const [elevel, setELevel] = useState('');
    const [isVisibleListSheet, setIsVisibleListSheet] = useState(false);
    const [isVisibleFreelancerTypeSheet, setIsVisibleFreelancerTypeSheet] = useState(false);
    const [isVisibleEngLevelSheet, setIsVisibleEngLevelSheet] = useState(false);
    const [isVisibleSkillsSheet, setIsVisibleSkillsSheet] = useState(false);
    const [isVisiblePhotoSheet, setIsVisiblePhotoSheet] = useState(false);
    const [isVisibleEducationSheet, setIsVisibleEducationSheet] = useState(false);
    const [isVisibleExperienceSheet, setIsVisibleExperienceSheet] = useState(false);
    const [isVisibleLanguageSheet, setIsVisibleLanguageSheet] = useState(false);
    const userListing = useSelector((state) => state.auth.user);
    const [education, setEducationData] = useState([]);
    const county = useSelector((state) => state?.global?.countries?.data);
    const [updateLocationCategory, setUpdateLocationCategory] = useState([]);
    const [updateSkills, setUpdatedSkills] = useState([]);
    const skillSet = useSelector((state) => state?.global?.skills?.data);
    const languagesss = useSelector((state) => state?.global?.languages?.data);
    const [updateLanguages, setUpdatedLanguages] = useState([]);
    const token = useSelector((state) => state.auth.token);
    const businessType = useSelector((state) => state?.global?.businessTypes?.data);
    const [businesstype, setBusinessType] = useState([]);
    const { data: sellerEducationDetail, error: sellerEducationDetailError, isLoading: sellerEducationDetailLoading, refetch } = useFetchSellerEducationListing(token);
    const dispatch = useDispatch();
    const [loading, setLoading] = useState(false);
    const [alert, setAlert] = useState({ visible: false, type: '', message: '' });
    const [isEditState, setIsEditState] = useState('');

    const handleSelectImage = () => {
        launchImageLibrary({ mediaType: 'photo', includeBase64: true }, (response) => {
            if (!response.didCancel && !response.error && response.assets && response.assets.length > 0) {
                const selectedImage = response.assets[0];
                const base64Image = `data:${selectedImage.type};base64,${selectedImage.base64}`;
                setLoading(true);
                setIsVisiblePhotoSheet(false);

                dispatch(updateProfilePhotoThunk({ base64Image, token }))
                    .then(() => {
                        setLoading(false);
                        setAlert({
                            visible: true,
                            type: 'Congratulations!',
                            message: 'Profile photo updated successfully'
                        });

                    })
                    .catch((error) => {
                        setLoading(false);
                        setAlert({
                            visible: true, type: 'Oops!', message: 'Failed to update profile photo'
                        });

                    });
            }
        });
    };


    const handleCloseAlert = () => {
        setAlert({ visible: false, type: '', message: '' });
    };

    useEffect(() => {
        if (alert.visible) {
            const timer = setTimeout(() => {
                handleCloseAlert

            }, 3000);
            return () => clearTimeout(timer);
        }
    }, [alert]);

    useEffect(() => {
        if (userListing?.user_type === "seller" && sellerEducationDetailError) {
            setAlert({
                visible: true, type: 'Oops!', message: 'An error occurred while fetching Edu. Please try again.'
            });
        }
    }, [userListing.user_type, sellerEducationDetailError]);

    useEffect(() => {
        if (sellerEducationDetail?.data?.list) {
            setFilteredInvoices(sellerEducationDetail?.data?.list);
        }
    }, [sellerEducationDetail]);

    const [eglishLevel, setEnglishLevel] = useState([{
        id: 1,
        name: "Basic",
        active: false

    },
    {
        id: 2,
        name: "Conversational",
        active: false
    },
    {
        id: 3,
        name: "Fluent",
        active: false
    },
    {
        id: 4,
        name: "Native",
        active: false
    },
    {
        id: 5,
        name: "Professional",
        active: false
    }
    ]);


    const handleSaveAndUpdate = async () => {
        try {
            const formData = new FormData();
            formData.append('first_name', firstName);
            formData.append('last_name', lastName);
            formData.append('description', description);
            formData.append('tagline', tagline);
            formData.append('zipcode', zipcode);
            formData.append('country', country);

            if (userListing?.user_type !== 'buyer') {
                const activeLanguageIds = updateLanguages.filter(language => language.active).map(language => language.id);
                activeLanguageIds.forEach(LanguageId => {
                    formData.append('languages[]', LanguageId);
                });

                const hourlyRateNumber = hourlyRate.replace(/[^\d.-]/g, '');
                formData.append('hourly_rate', hourlyRateNumber);
                formData.append('seller_type', freelancertype);

                const activeSkillIds = updateSkills.filter(skill => skill.active).map(skill => skill.id);
                activeSkillIds.forEach(skillId => {
                    formData.append('skills[]', skillId);
                });

                formData.append('english_level', elevel);
            }

            const resultAction = await dispatch(updateProfile({ formData, token }));

            if (updateProfile?.fulfilled.match(resultAction)) {
                setAlert({ visible: true, type: 'Congratulations!', message: 'Profile Updated Successfully' });
            } else if (updateProfile?.rejected.match(resultAction)) {
                const errors = resultAction?.payload?.errors;

                if (errors) {
                    Object.keys(errors).forEach(field => {
                        // console.error(`${field} error:`, errors[field]);
                    });
                    const firstErrorField = Object.keys(errors)[0];
                    const errorMessage = errors[firstErrorField];
                    setAlert({ visible: true, type: 'Oops!', message: `${errorMessage}` });
                } else {
                    setAlert({ visible: true, type: 'Oops!', message: 'Unknown error occurred' });
                }
            }
        } catch (error) {
            setAlert({ visible: true, type: 'Oops!', message: 'Error updating profile' });
            if (error.response) {
                setAlert({ visible: true, type: 'Oops!', message: 'Something went wrong. Please try again' });
            }
        }
    };


    useEffect(() => {
        if (userListing?.skills && skillSet) {
            const updatedSkills = skillSet?.map(updatedSkills => ({
                ...updatedSkills,
                active: userListing?.skills.includes(updatedSkills?.name)
            }));
            setUpdatedSkills(updatedSkills);
        }
    }, [skillSet, userListing?.updatedSkills]);

    useEffect(() => {
        if (county) {
            const updatedCategory = county.map(country => ({
                ...country,
                active: country?.name === userListing?.country
            }));
            setUpdateLocationCategory(updatedCategory);
        }
    }, [county, userListing?.country]);


    useEffect(() => {
        if (userListing?.languages && languagesss) {
            const updatedLangugaes = languagesss.map(country => ({
                ...country,
                active: userListing?.languages.includes(country?.name)
            }));
            setUpdatedLanguages(updatedLangugaes);
        }
    }, [languagesss, userListing?.languages]);


    useEffect(() => {
        if (businessType) {
            const updatedCategory = businessType.map(country => ({
                ...country,
                active: userListing?.seller_type ? userListing.seller_type.includes(country?.name) : false
            }));
            setBusinessType(updatedCategory);
        }
    }, [businessType, userListing?.seller_type]);


    useEffect(() => {
        if (userListing?.english_level) {
            const updatedLevels = eglishLevel.map(level => ({
                ...level,
                active: userListing?.english_level?.toLowerCase() === level?.name?.toLowerCase()
            }));

            setEnglishLevel(updatedLevels);
        }
    }, [userListing?.english_level]);


    const capitalizeFirstLetter = (string) => {
        return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
    };

    useEffect(() => {
        if (userListing) {
            setFirstName(userListing?.first_name || '');
            setLastName(userListing?.last_name || '');
            setTagline(userListing?.tagline || '');
            setCountry(userListing?.country || '');
            setImage(userListing?.image || '');
            setZipcode(userListing?.zipcode || '');
            setFreelancertype(userListing?.seller_type || '');
            setDescription(userListing?.description || '');
            setSkill(userListing?.skills || '');
            setLanguage(userListing?.languages || '');
            setHourlyRate(userListing?.hourly_rate || '');
            setELevel(capitalizeFirstLetter(userListing?.english_level || 'Select English Level'));

        }
    }, [userListing]);

    const openSheet = (val) => {
        switch (val) {
            case 'country':
                setIsVisibleListSheet(!isVisibleListSheet);
                break;
            case 'freelancerType':
                setIsVisibleFreelancerTypeSheet(!isVisibleFreelancerTypeSheet);
                break;
            case 'engLevel':
                setIsVisibleEngLevelSheet(!isVisibleFreelancerTypeSheet);
                break;
            case 'skill':
                setIsVisibleSkillsSheet(!isVisibleSkillsSheet);
                break;
            case 'language':
                setIsVisibleLanguageSheet(!isVisibleLanguageSheet);
                break;
            case 'photo':
                setIsVisiblePhotoSheet(!isVisiblePhotoSheet);
                break;
            case 'education':
                setIsVisibleEducationSheet(!isVisibleEducationSheet);
                break;
            case 'experience':
                setIsVisibleExperienceSheet(!isVisibleExperienceSheet);
                break;

            default:
                console.warn(`Unhandled sheet type: ${val}`);
                break;
        }
    };


    const navigation = useNavigation();

    const handleGoBack = () => {
        navigation.goBack();
    }

    const experinceData = [
        {
            id: '1',
            university: 'University of Science and Technology',
            degree: 'Bachelor in Computer Science',
            dateRange: 'April 1, 2016 - April 1, 2020'
        },
        {
            id: '2',
            university: 'Institute of Technology',
            degree: 'Master in Information Technology',
            dateRange: 'September 1, 2020 - August 1, 2022'
        },
        {
            id: '3',
            university: 'College of Engineering',
            degree: 'Diploma in Software Engineering',
            dateRange: 'June 1, 2014 - June 1, 2016'
        }
    ];

    const items = [
        { icon: 'UploadePhoto', text: 'Upload profile photos' },
    ];

    const isEducationListEmpty = sellerEducationDetail?.data?.length === 0;

    const handleSelectSkills = (updatedSkills) => {
        setUpdatedSkills(updatedSkills);

        const activeSkillIds = updatedSkills
            .filter(skill => skill.active)
            .map(skill => skill.id);

    };

    const handleLangugageId = (languageId) => {
        setUpdatedLanguages(languageId);

        const activeLanguagesIds = languageId
            .filter(language => language.active)
            .map(language => language.id);
        const activeLanguage = languageId?.find(language => language.active === true);
        setLanguage(activeLanguage.name)
    };


    const handleCountry = (updatedCountry) => {
        setUpdateLocationCategory(updatedCountry);
        const handleCountryId = updatedCountry
            .filter(country => country.active)
            .map(country => country.id);
        const activeCountry = updatedCountry?.find(country => country.active === true);
        setCountry(activeCountry.name)
    };


    const handleEnglishLevel = (updatedElevel) => {
        setELevel(updatedElevel);
        const handleCountryId = updatedElevel
            .filter(ElevelId => ElevelId.active)
            .map(ElevelId => ElevelId.id);
        const Elevel = updatedElevel?.find(ElevelId => ElevelId.active === true);
        setELevel(Elevel.name)
    };

    const handleBusinessType = (businessType) => {
        // setFreelancertype(businessType);
        setBusinessType(businessType);

        const activeSkillIds = businessType
            .filter(business => business.active)
            .map(business => business.id);
        setFreelancertype(activeSkillIds);
    };


    const handleAlert = ({ visible, type, message }) => {
        setAlert({
            visible: true,
            type: 'Congratulations!',
            message: 'Profile photo updated successfully'
        })


    };

    const handleEdit = (data) => {
        setIsEditState(data);
    };

    const handleAddEducation = () => {
        openSheet('education')
        setIsEditState(
            { address: "", dateRange: new Date(), degree: "", educationId: "", isEdit: false, university: "", description: "" }
        )
    }

    return (
        <SafeAreaView
            style={{
                marginHorizontal: 10,
                backgroundColor: Constant.bgColor,
                flex: 1,
            }}>

            <View
                style={{
                    flexDirection: 'row',
                    alignItems: 'center',
                    justifyContent: 'space-between',
                    marginBottom: 10,
                    marginTop: 10
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
                                fontWeight: 600,
                                fontFamily: Constant.primaryFontSemiBold
                            }}
                            onPress={() => handleAlert({ visible: true, type: 'Congratulations!', message: 'Education added successfully' })}>
                            Profile Settings
                        </Text>
                    </View>
                </View>
            </View>
            <ScrollView
                showsVerticalScrollIndicator={false}>
                <View style={{ paddingVertical: 20 }}>
                    <Text style={[Styles.userName, { color: "#585858", paddingBottom: 10 }]}>
                        Personal details
                    </Text>
                    <View style={Styles.profilePhotoContainer}>
                        <TouchableOpacity
                            onPress={() => openSheet('photo')}
                        >
                            {loading ? (
                                <View style={{ height: 60, width: 60, borderRadius: 30 / 2, borderColor: "#EAEAEA", borderWidth: 2, paddingTop: 17 }}>
                                    <ActivityIndicator size="small" color={Constant.primaryColor} />
                                </View>
                            ) : <Image
                                resizeMode="cover"
                                style={{ height: 60, width: 60, borderRadius: 30 / 2, borderColor: "#EAEAEA", borderWidth: 2 }}
                                source={{ uri: image }}
                            />}

                        </TouchableOpacity>
                        <TouchableOpacity style={Styles.profilePhotoIcon}
                            onPress={() => openSheet('photo')}
                        >
                            <Plus IconColor={'#FFFFFF'} />
                        </TouchableOpacity>
                        <View style={{ width: "80%" }}>
                            <Text style={[Styles.infoValue, { fontFamily: Constant.primaryFontRegular }]}>
                                Upload profile photo
                            </Text>
                            <Text style={[Styles.packagesDaysText, { color: "#585858", lineHeight: 18 }]}>
                                Profile image should have jpg, jpeg, gif, png
                            </Text>
                        </View>
                    </View>
                </View>

                <View
                    style={{ borderRadius: 20, backgroundColor: '#FFFFFF', paddingHorizontal: 20, marginBottom: 10, paddingBottom: 20 }}>
                    <View style={{ paddingTop: 15 }}>
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

                    <PrimaryTextInput
                        value={lastName}
                        onChangeText={e => setLastName(e)}
                        placeholder="Last Name"
                        type="text"
                        showBorderBottom={true}
                        iconRequired={false}
                        marginBottom={10}
                    />
                    <PrimaryTextInput
                        value={tagline}
                        onChangeText={e => setTagline(e)}
                        placeholder="Your tagline"
                        type="text"
                        showBorderBottom={true}
                        iconRequired={false}
                        marginBottom={10}
                    />
                    <PrimaryTextInput
                        value={zipcode}
                        onChangeText={e => setZipcode(e)}
                        placeholder="Zip code"
                        type="text"
                        showBorderBottom={true}
                        iconRequired={false}
                    />
                    <SelectInput
                        value={country ? country : 'Select Country'}
                        iconName={'chevron-down'}
                        showBorderBottom={true}
                        iconRequired={true}
                        iconColor={"#585858"}
                        iconSize={18}
                        onPress={() => openSheet('country')}
                    />
                    {userListing?.user_type !== 'buyer' && (
                        <>
                            <SelectInput
                                value={freelancertype ? freelancertype : 'Select Type'}
                                iconName={'chevron-down'}
                                showBorderBottom={true}
                                iconRequired={true}
                                iconColor={"#585858"}
                                iconSize={18}
                                onPress={() => openSheet('freelancerType')}
                            />
                            <SelectInput
                                value={elevel}
                                iconName={'chevron-down'}
                                showBorderBottom={true}
                                iconRequired={true}
                                iconColor={"#585858"}
                                iconSize={18}
                                onPress={() => openSheet('engLevel')}
                            />
                            <SelectInput
                                value={"Skills"}
                                iconName={'chevron-down'}
                                showBorderBottom={true}
                                iconRequired={true}
                                iconColor={"#585858"}
                                iconSize={18}
                                onPress={() => openSheet('skill')}
                            />

                            <PrimaryTextInput
                                value={hourlyRate}
                                onChangeText={e => setHourlyRate(e)}
                                placeholder="Hourly Rate"
                                type="text"
                                showBorderBottom={true}
                                marginTop={15}
                                marginBottom={5}
                                iconName={'dollar-sign'}
                            />

                            <SelectInput
                                value={"Search language"}
                                iconName={'chevron-down'}
                                showBorderBottom={true}
                                iconRequired={true}
                                marginBottom={15}
                                iconColor={"#585858"}
                                iconSize={18}
                                onPress={() => openSheet('language')}
                            />
                        </>
                    )}

                    <CustomTextArea
                        value={description}
                        onChangeText={e => setDescription(e)}
                        placeholder="Description"
                        type="text"
                    />

                    <View style={{ marginTop: 20 }}>
                        <Button
                            backgroundColor="#ee4710"
                            text="Save & Update"
                            onPress={handleSaveAndUpdate}
                            color={'#fff'}
                            borderColor="#f04438"
                            borderRequired={true}
                        />
                    </View>
                    <Text style={[Styles.infoText, { textAlign: "center", paddingTop: 10 }]}>
                        Click “Save & Update” to update the latest changes
                    </Text>
                </View>

                {userListing?.user_type === "seller" && (
                    <View>
                        {isEducationListEmpty ? (
                            <View style={[styles.educationContainer, { paddingHorizontal: 20, paddingVertical: 12, marginTop: 12 }]}>
                                <TouchableOpacity onPress={handleAddEducation}>
                                    <Text style={styles.selectEducationText}>
                                        Add Education
                                    </Text>
                                </TouchableOpacity>
                            </View>
                        ) : (
                            <View>
                                <View style={{ flexDirection: "row", justifyContent: "space-between", paddingTop: 10 }}>
                                    <Text style={[styles.educationDetails, { color: "#585858", paddingBottom: 10 }]}>
                                        Education Details
                                    </Text>
                                    <TouchableOpacity onPress={handleAddEducation}>
                                        <Text style={[styles.educationDetails, { color: "#1570EF", paddingBottom: 10 }]}>
                                            Add new
                                        </Text>
                                    </TouchableOpacity>
                                </View>

                                <FlatList
                                    data={sellerEducationDetail?.data}
                                    renderItem={({ item }) => (
                                        <EducationCard
                                            university={item?.deg_institue_name}
                                            degree={item?.deg_title}
                                            // address={item?.address}
                                            description={item?.deg_description}
                                            dateRange={`${item?.deg_start_date} - ${item?.deg_end_date}`}
                                            openSheet={() => openSheet('education')}
                                            educationId={item?.id}
                                            refetch={refetch}
                                            handleEdit={handleEdit}
                                            onAlertDeleteEducation={setAlert}

                                        />

                                    )}
                                    keyExtractor={item => item.id.toString()}


                                />
                            </View>
                        )}
                    </View>
                )}
                <AlertComponent
                    type={alert?.type}
                    message={alert?.message}
                    onPress={handleCloseAlert}
                    visible={alert?.visible}
                />
            </ScrollView>

            {isVisiblePhotoSheet && (
                <UploadePhotoSheet
                    isVisible={isVisiblePhotoSheet}
                    onClose={() => setIsVisiblePhotoSheet(false)}
                    title="Uplaod Photo"
                    items={items}
                    handleSelectImage={handleSelectImage}
                />

            )}

            {isVisibleListSheet && (
                <SelectListSheet
                    isVisible={isVisibleListSheet}
                    onClose={() => setIsVisibleListSheet(false)}
                    List={updateLocationCategory}
                    selectionType="single"
                    sheetHeight={'1.5'}
                    searchInput={true}
                    searchPlaceholder={"Search location"}
                    onItemChange={handleCountry}

                />
            )}

            {isVisibleFreelancerTypeSheet && (
                <SelectListSheet
                    isVisible={isVisibleFreelancerTypeSheet}
                    onClose={() => setIsVisibleFreelancerTypeSheet(false)}
                    List={businesstype}
                    selectionType="single"
                    sheetHeight={'3'}
                    searchInput={false}
                    onItemChange={handleBusinessType}

                />
            )}

            {isVisibleEngLevelSheet && (
                <SelectListSheet
                    isVisible={isVisibleEngLevelSheet}
                    onClose={() => setIsVisibleEngLevelSheet(false)}
                    List={eglishLevel}
                    selectionType="single"
                    sheetHeight={'3'}
                    searchInput={false}
                    onItemChange={handleEnglishLevel}

                />
            )}

            {isVisibleSkillsSheet && (
                <SelectListSheet
                    isVisible={isVisibleSkillsSheet}
                    onClose={() => setIsVisibleSkillsSheet(false)}
                    List={updateSkills}
                    selectionType="multi"
                    sheetHeight={'1.9'}
                    searchInput={true}
                    searchPlaceholder={"Search skills"}
                    onItemChange={handleSelectSkills}

                />
            )}

            {isVisibleLanguageSheet && (
                <SelectListSheet
                    isVisible={isVisibleLanguageSheet}
                    onClose={() => setIsVisibleLanguageSheet(false)}
                    List={updateLanguages}
                    selectionType="multi"
                    sheetHeight={'1.5'}
                    searchInput={true}
                    searchPlaceholder={"Search language"}
                    onItemChange={handleLangugageId}

                />
            )}

            {isVisibleEducationSheet && (
                <AddEducationSheet isVisible={isVisibleEducationSheet}
                    onClose={() => setIsVisibleEducationSheet(false)}
                    refetch={refetch}
                    onAlert={handleAlert}
                    isEdit={isEditState}
                    onAlertAddEducation={setAlert}

                />
            )}

            {isVisibleExperienceSheet && (
                <AddExperienceSheet isVisible={isVisibleExperienceSheet}
                    onClose={() => setIsVisibleExperienceSheet(false)}
                />
            )}


        </SafeAreaView>
    )
}

const styles = StyleSheet.create({
    educationContainer: {
        paddingHorizontal: 20,
        paddingVertical: 10,
        height: 50,
        marginTop: 12,
        backgroundColor: '#FFFFFF',
        marginBottom: 50,
        borderRadius: 15
    },
    selectEducationText: {
        fontSize: 16,
        lineHeight: 24,
        fontWeight: "500",
        fontFamily: 'Constant.primaryFontMedium',
        color: "#1570EF",
        textAlign: "center",
    },
    educationDetails: {
        fontSize: 16,
        fontWeight: "600",
        fontFamily: 'Constant.primaryFontMedium',
    },
    loaderContainer: {
        justifyContent: 'center',
        alignItems: 'center',
        marginTop: 20,
        zIndex: 999,
        position: 'absolute',
        top: 0,
        left: 0,
        bottom: 0,
        right: 0
    },
});

export default index

