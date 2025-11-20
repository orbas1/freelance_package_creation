import React, { useEffect, useRef, useState } from 'react';
import {
    View,
    Text,
    TouchableOpacity,
    StyleSheet,
    Dimensions,
    SafeAreaView,
    ScrollView,
    Pressable
} from 'react-native';
import RBSheet from 'react-native-raw-bottom-sheet';
import Icon from 'react-native-vector-icons/Feather';
import SelectListSheet from '../../../../components/baseComponents/SelectListSheet';
import Styles from '../../../../styles/Styles';
import { useSelector } from 'react-redux';
import * as Constant from "../../../../constants/GlobalConstants";
import Button from '../../../../components/baseComponents/Button';
import SearchInput from '../../../../components/baseComponents/SearchInput';

const ProjectFilterSheet = ({ isVisible, onClose, onApply, currentFilters }) => {
    const globalSlice = useSelector((state) => state.global);
    const updateGigCategory = globalSlice?.gigCategories?.data.map(obj => ({ ...obj, active: currentFilters?.category?.includes(obj.id) }));
    const updateLocationCategory = globalSlice?.countries?.data.map(obj => ({ ...obj, active: currentFilters?.selected_location?.includes(obj.id) }));
    const updateSkillsTaxnomies = globalSlice?.skills?.data.map(obj => ({ ...obj, active: currentFilters?.selected_skills?.includes(obj.id) }));
    const updateLanguagesTaxnomies = globalSlice?.languages?.data.map(obj => ({ ...obj, active: currentFilters?.selected_languages?.includes(obj.id) }));
    const updateExpertLevelTaxnomies = globalSlice?.sellerLevels?.data.map(obj => ({ ...obj, active: currentFilters?.selected_expertise_levels?.includes(obj.id) }));

    const bottomSheetRef = useRef(null);
    const [windowHeight, setWindowHeight] = useState(Dimensions.get('window').height);
    const [text, setText] = useState(currentFilters.keyword || '');
    const [isVisibleLanguagesSheet, setIsVisibleLanguagesSheet] = useState(false);
    const [isVisibleLocationSheet, setIsVisibleLocatinSheet] = useState(false);
    const [isVisibleSkillsSheet, setIsVisibleSkillsSheet] = useState(false);
    const [isVisibleExpertLevelSheet, setIsVisibleExpertLevelSheet] = useState(false);
    const [isVisibleCatSheet, setIsVisibleCatSheet] = useState(false);
    const [selectedOption, setSelectedOption] = useState('All');
    const [category, setCategory] = useState(updateGigCategory);
    const [location, setLocation] = useState(updateLocationCategory);
    const [skills, setSkills] = useState(updateSkillsTaxnomies);
    const [expertLevel, setExpertLevel] = useState(updateExpertLevelTaxnomies);
    const [languages, setLanguages] = useState(updateLanguagesTaxnomies);
    const isSelectedLanguages = languages.some(item => item.active === true)
    const isSelectedLocation = location.some(item => item.active === true);
    const isSelectedSkill = skills.some(item => item.active === true);
    const isSelectedExpert = location.some(item => item.active === true);
    const isSelectedCategory = category.some(item => item.active === true)
    const [visibleSkillsCount, setVisibleSkillsCount] = useState(5);
    const [projectType, setProjectType] = useState([
        {
            id: 1,
            name: "All",
            slug: "all",
            active: true

        },
        {
            id: 2,
            name: "Fixed",
            slug: 'Fixed',
            active: false
        },
        {
            id: 3,
            name: "Hourly",
            slug: 'Hourly',
            active: false
        },
    ])

    useEffect(() => {
        if (isVisible) {
            bottomSheetRef.current.open();
        } else {
            bottomSheetRef.current.close();
        }
    }, [isVisible]);

    const handleLangChange = (updatedLanguages) => {
        setLanguages(updatedLanguages);
    };

    const handleLocationChange = (updatedLocation) => {
        setLocation(updatedLocation);
    };

    const handleSelectSkills = (updatedSkills) => {
        setSkills(updatedSkills);
    };

    const handleCategoryChange = (updatedCategory) => {
        setCategory(updatedCategory);
    };

    const handleSliderChange = (values) => {
        setValues(values);
    };

    const handleLoadMoreSkills = () => {
        setVisibleSkillsCount(prevCount => prevCount + 5);
    };

    const handleClose = () => {
        onClose();
    };

    const handleRemovelanguage = (indexToRemove) => {
        setLanguages(prevCategory =>
            prevCategory.map((item, index) => ({
                ...item,
                active: index === indexToRemove ? false : item.active,
            }))
        );
    };

    const handleRemoveLocation = (indexToRemove) => {
        setLocation(prevLocation =>
            prevLocation.map((item, index) => ({
                ...item,
                active: index === indexToRemove ? false : item.active,
            }))
        );
    };

    const handleRemoveSkill = (indexToRemove) => {
        setSkills(prevLocation =>
            prevLocation.map((item, index) => ({
                ...item,
                active: index === indexToRemove ? false : item.active,
            }))
        );
    };

    const handleRemoveCategory = (indexToRemove) => {
        setCategory(prevCategory =>
            prevCategory.map((item, index) => ({
                ...item,
                active: index === indexToRemove ? false : item.active,
            }))
        );
    };

    const handlePress = (index) => {
        setProjectType(prevState => prevState.map((item, i) => ({
            ...item,
            active: i === index
        })));

    };


    const handleSelectExpertLevel = (index) => {
        setExpertLevel(prevState => prevState.map((item, i) => ({
            ...item,
            active: i === index ? !item.active : item.active
        })));

    };

    const handleTextChange = (newText) => {
        setText(newText);
    };

    const handleApplyFilters = () => {
        const selectedLanguages = languages.filter(item => item.active).map(item => item.id).join(',');
        const seletedSkills = skills.filter(item => item.active).map(item => item.id).join(',');
        const selectedLocations = location.filter(item => item.active).map(item => item.id).join(',');
        const selectedExpertLevel = expertLevel.filter(item => item.active).map(item => item.id).join(',')
        const selectedProjectType = projectType.filter(item => item.active).map(item => item.slug).join(',')
        const selectedCategory = category.filter(item => item.active).map(item => item.id).join(',')
        const filters = {
            keyword: text,
            selected_skills: seletedSkills.toString(),
            selected_languages: selectedLanguages.toString(),
            selected_expertise_levels: selectedExpertLevel.toString(),
            selected_location: selectedLocations.toString(),
            per_page: "10",
            project_min_price: "",
            project_max_price: "",
            category_name: selectedCategory.toString(),
            project_type: selectedProjectType.toString(),
            order_by: "",
        };
        onApply(filters);
        handleClose()
    };



    return (
        <RBSheet
            ref={bottomSheetRef}
            closeOnDragDown
            closeOnPressMask
            onClose={handleClose}
            height={windowHeight / 1.15}
            duration={250}
            customStyles={{
                container: {
                    borderTopLeftRadius: 20,
                    borderTopRightRadius: 20,
                    paddingHorizontal: 20,
                    paddingVertical: 30,
                    backgroundColor: '#F8F8F8',
                },
            }}
        >
            <View style={styles.dragIndicator} />
            <SafeAreaView style={styles.content}>
                <View style={styles.header}>
                    <Text style={styles.title}>Narrow your search</Text>
                    <Text onPress={onClose} style={styles.clearFilter}>Clear filter</Text>
                </View>
                <ScrollView showsVerticalScrollIndicator={false}>
                    <View style={styles.searchContainer}>
                        <SearchInput value={text} onChangeText={handleTextChange} />
                    </View>

                    <View style={[styles.sectionHeader, { marginBottom: 10 }]}>
                        <Text style={styles.sectionTitle}>Project type</Text>
                    </View>

                    <View style={[Styles.listParent, styles.listContainer]}>
                        {projectType.map((item, index) => (
                            <View key={index}>
                                <View style={Styles.menuItem}>
                                    <Pressable
                                        style={[styles.optionContainer, { flex: 1, justifyContent: "space-between", flexDirection: "row", paddingVertical: 10 }]}
                                        onPress={() => handlePress(index)}
                                    >
                                        <Text style={Styles.selectOptionText}>{item.name}</Text>
                                        <View
                                            style={
                                                item.active
                                                    ? Styles.payoutCheckActiveCircel
                                                    : Styles.payoutCheckCircel
                                            }
                                        />
                                    </Pressable>
                                </View>
                                {index < projectType.length - 1 && <View style={Styles.line} />}
                            </View>
                        ))}
                    </View>


                    <View style={[styles.sectionHeader, { marginBottom: 10, marginTop: 20 }]}>
                        <Text style={styles.sectionTitle}>Expertise level</Text>
                    </View>

                    <View style={[Styles.listParent, styles.listContainer]}>
                        {expertLevel.map((item, index) => (
                            <View key={index}>
                                <View style={Styles.menuItem}>
                                    <Pressable
                                        style={[styles.optionContainer, { flex: 1, justifyContent: "space-between", flexDirection: "row", paddingVertical: 10 }]}
                                        onPress={() => handleSelectExpertLevel(index)}
                                    >
                                        <Text style={Styles.selectOptionText}>{item.name}</Text>
                                        <View
                                            style={[
                                                styles.checkbox,
                                                {
                                                    backgroundColor: item.active ? '#000' : '#fff',
                                                    borderColor: item.active ? '#000' : '#EAEAEA',
                                                },
                                            ]}
                                        >
                                            {item.active && <Icon name="check" size={16} color="white" />}
                                        </View>
                                    </Pressable>
                                </View>
                                {index < expertLevel.length - 1 && <View style={Styles.line} />}
                            </View>
                        ))}
                    </View>

                    <View style={[styles.sectionHeader, { marginTop: 20 }]}>
                        <Text style={styles.sectionTitle}>Categories</Text>
                        {isSelectedCategory && (
                            <TouchableOpacity onPress={() => setIsVisibleCatSheet(true)}>
                                <Text style={styles.selectCategories}>Select categories</Text>
                            </TouchableOpacity>
                        )}
                    </View>
                    {
                        !isSelectedCategory && <View style={[styles.sliderContainer, { paddingHorizontal: 20, paddingVertical: 12, marginTop: 12 }]}>
                            <TouchableOpacity onPress={() => setIsVisibleCatSheet(true)}>
                                <Text style={{
                                    flex: 1,
                                    fontSize: 16,
                                    lineHeight: 24,
                                    fontWeight: "500",
                                    fontFamily: Constant.primaryFontMedium,
                                    color: "#1570ef",
                                    textAlign: "center"
                                }}>
                                    Select category from list
                                </Text>
                            </TouchableOpacity>
                        </View>
                    }

                    <View style={[Styles.listParent, styles.categoryList]}>
                        {category.map((option, index) =>
                            option.active && (
                                <View key={index}>
                                    <View style={Styles.menuItem}>
                                        <View style={styles.categoryItem}>
                                            <Text style={Styles.selectOptionText}>{option.name}</Text>
                                            <TouchableOpacity onPress={() => handleRemoveCategory(index)}>
                                                <Icon name="x" size={18} color="#F04438" />
                                            </TouchableOpacity>
                                        </View>
                                    </View>
                                    {index < category.length - 1 && <View style={Styles.line} />}
                                </View>
                            )
                        )}
                    </View>

                    <View style={[styles.sectionHeader]}>
                        <Text style={styles.sectionTitle}>Skills</Text>
                        {isSelectedSkill && (
                            <TouchableOpacity onPress={() => setIsVisibleSkillsSheet(true)}>
                                <Text style={styles.selectCategories}>Select Skills</Text>
                            </TouchableOpacity>
                        )}
                    </View>



                    {
                        !isSelectedSkill && <View style={[styles.sliderContainer, { paddingHorizontal: 20, paddingVertical: 12, marginTop: 12 }]}>
                            <TouchableOpacity onPress={() => setIsVisibleSkillsSheet(true)}>
                                <Text style={{
                                    flex: 1,
                                    fontSize: 16,
                                    lineHeight: 24,
                                    fontWeight: "500",
                                    fontFamily: Constant.primaryFontMedium,
                                    color: "#1570ef",
                                    textAlign: "center"
                                }}>
                                    Select Skills from list
                                </Text>
                            </TouchableOpacity>
                        </View>
                    }

                    <View style={[Styles.listParent, styles.categoryList]}>
                        {skills.filter((option, index) => option.active && index < visibleSkillsCount).map((option, index) =>
                            option.active && (
                                <View key={index}>
                                    <View style={Styles.menuItem}>
                                        <View style={styles.categoryItem}>
                                            <Text style={Styles.selectOptionText}>{option.name}</Text>
                                            <TouchableOpacity onPress={() => handleRemoveSkill(index)}>
                                                <Icon name="x" size={18} color="#F04438" />
                                            </TouchableOpacity>
                                        </View>
                                    </View>
                                    {index < category.length - 1 && <View style={Styles.line} />}
                                </View>
                            )
                        )}
                        {skills.filter(option => option.active).length > visibleSkillsCount && (
                            // <TouchableOpacity onPress={handleLoadMoreSkills} style={styles.loadMoreButton}>
                            //     <Text style={styles.loadMoreText}>Load More</Text>
                            // </TouchableOpacity>
                            <Button
                                backgroundColor="#FFFFFF10"
                                text="Load More"
                                onPress={handleLoadMoreSkills}
                                color={'#585858'}
                            />
                        )}
                    </View>

                    <View style={styles.sectionHeader}>
                        <Text style={styles.sectionTitle}>Languges</Text>
                        {isSelectedLanguages
                            && (
                                <TouchableOpacity onPress={() => setIsVisibleLanguagesSheet(true)}>
                                    <Text style={styles.selectCategories}>Select languages</Text>
                                </TouchableOpacity>
                            )}
                    </View>

                    {
                        !isSelectedLanguages
                        && <View style={[styles.sliderContainer, { paddingHorizontal: 20, paddingVertical: 12, marginTop: 12 }]}>
                            <TouchableOpacity onPress={() => setIsVisibleLanguagesSheet(true)}>
                                <Text style={{
                                    flex: 1,
                                    fontSize: 16,
                                    lineHeight: 24,
                                    fontWeight: "500",
                                    fontFamily: Constant.primaryFontMedium,
                                    color: "#1570ef",
                                    textAlign: "center"
                                }}>
                                    Select languages from list
                                </Text>
                            </TouchableOpacity>
                        </View>
                    }

                    <View style={[Styles.listParent, styles.categoryList]}>
                        {languages.map((option, index) =>
                            option.active && (
                                <View key={index}>
                                    <View style={Styles.menuItem}>
                                        <View style={styles.categoryItem}>
                                            <Text style={Styles.selectOptionText}>{option.name}</Text>
                                            <TouchableOpacity onPress={() => handleRemovelanguage(index)}>
                                                <Icon name="x" size={18} color="#F04438" />
                                            </TouchableOpacity>
                                        </View>
                                    </View>
                                    {index < languages.length - 1 && <View style={Styles.line} />}
                                </View>
                            )
                        )}
                    </View>

                    <View style={styles.sectionHeader}>
                        <Text style={styles.sectionTitle}>location</Text>
                        {isSelectedLocation && (
                            <TouchableOpacity onPress={() => setIsVisibleLocatinSheet(true)}>
                                <Text style={styles.selectCategories}>Select location</Text>
                            </TouchableOpacity>
                        )}
                    </View>

                    {
                        !isSelectedLocation && <View style={[styles.sliderContainer, { paddingHorizontal: 20, paddingVertical: 12, marginTop: 12 }]}>
                            <TouchableOpacity onPress={() => setIsVisibleLocatinSheet(true)}>
                                <Text style={{
                                    flex: 1,
                                    fontSize: 16,
                                    lineHeight: 24,
                                    fontWeight: "500",
                                    fontFamily: Constant.primaryFontMedium,
                                    color: "#1570ef",
                                    textAlign: "center"
                                }}>
                                    Select loaction from list
                                </Text>
                            </TouchableOpacity>
                        </View>
                    }

                    <View style={[Styles.listParent, styles.categoryList]}>
                        {location.map((option, index) =>
                            option.active && (
                                <View key={index}>
                                    <View style={Styles.menuItem}>
                                        <View style={styles.categoryItem}>
                                            <Text style={Styles.selectOptionText}>{option.name}</Text>
                                            <TouchableOpacity onPress={() => handleRemoveLocation(index)}>
                                                <Icon name="x" size={18} color="#F04438" />
                                            </TouchableOpacity>
                                        </View>
                                    </View>
                                    {index < location.length - 1 && <View style={Styles.line} />}
                                </View>
                            )
                        )}
                    </View>
                    {isVisibleSkillsSheet && (
                        <SelectListSheet
                            isVisible={isVisibleSkillsSheet}
                            onClose={() => setIsVisibleSkillsSheet(false)}
                            List={skills}
                            selectionType="multi"
                            sheetHeight="1.9"
                            searchInput
                            searchPlaceholder="Skills"
                            showButton
                            onItemChange={handleSelectSkills}
                        />
                    )}
                    {isVisibleLanguagesSheet && (
                        <SelectListSheet
                            isVisible={isVisibleLanguagesSheet}
                            onClose={() => setIsVisibleLanguagesSheet(false)}
                            List={languages}
                            selectionType="multi"
                            sheetHeight="1.9"
                            searchInput
                            searchPlaceholder="Category"
                            showButton
                            onItemChange={handleLangChange}
                        />
                    )}

                    {isVisibleLocationSheet && (
                        <SelectListSheet
                            isVisible={isVisibleLocationSheet}
                            onClose={() => setIsVisibleLocatinSheet(false)}
                            List={location}
                            selectionType="single"
                            sheetHeight="1.9"
                            searchInput
                            searchPlaceholder="Location"
                            showButton
                            onItemChange={handleLocationChange}
                        />
                    )}

                    {isVisibleExpertLevelSheet && (
                        <SelectListSheet
                            isVisible={isVisibleExpertLevelSheet}
                            onClose={() => setIsVisibleExpertLevelSheet(false)}
                            List={expertLevel}
                            selectionType="single"
                            sheetHeight="1.9"
                            searchPlaceholder="Expert Level"
                            showButton
                            onItemChange={handleLocationChange}
                        />
                    )}

                    {isVisibleCatSheet && (
                        <SelectListSheet
                            isVisible={isVisibleCatSheet}
                            onClose={() => setIsVisibleCatSheet(false)}
                            List={category}
                            selectionType="single"
                            sheetHeight="1.9"
                            searchInput
                            searchPlaceholder="Category"
                            showButton
                            onItemChange={handleCategoryChange}
                        />
                    )}

                </ScrollView>
                <Button
                    backgroundColor="#EE4710"
                    text="Apply filter"
                    onPress={handleApplyFilters}
                    color={'white'}
                />
            </SafeAreaView>
        </RBSheet>
    );
};

const styles = StyleSheet.create({
    content: {
        flex: 1,
        margin: 5,
    },
    dragIndicator: {
        position: 'absolute',
        top: 0,
        left: '50%',
        marginLeft: 'auto',
        marginRight: 'auto',
        backgroundColor: 'rgba(60, 60, 67, 0.3)',
        height: 5,
        width: '10%',
        borderRadius: 2.5,
        justifyContent: 'center',
        alignItems: 'center',
        marginTop: 15,
    },
    header: {
        flexDirection: 'row',
        justifyContent: 'space-between',
        alignItems: 'center',
        marginBottom: 10,
    },
    title: {
        fontSize: 18,
        fontWeight: '500',
        lineHeight: 20,
        color: '#000',
        fontFamily: Constant.primaryFontMedium,
    },
    clearFilter: {
        fontSize: 14,
        lineHeight: 20,
        fontWeight: '500',
        color: '#585858',
    },
    searchContainer: {
        marginVertical: 20,
    },
    sectionHeader: {
        flexDirection: 'row',
        justifyContent: 'space-between',
        alignItems: 'center',
    },
    sectionTitle: {
        fontSize: 14,
        lineHeight: 20,
        fontWeight: '500',
        color: '#585858',
    },
    selectCategories: {
        fontSize: 14,
        lineHeight: 20,
        fontWeight: '500',
        color: '#1570EF',
    },
    selectCategoryContainer: {
        paddingHorizontal: 20,
        paddingVertical: 12,
        marginTop: 12,
    },
    selectCategoryText: {
        flex: 1,
        fontSize: 16,
        lineHeight: 24,
        fontWeight: "500",
        fontFamily: Constant.primaryFontMedium,
        color: "#1570ef",
        textAlign: "center",
    },
    categoryList: {
        paddingHorizontal: 20,
        marginTop: 15,
    },
    categoryItem: {
        flexDirection: "row",
        paddingVertical: 15,
        justifyContent: "space-between",
        width: "100%",
    },
    sliderContainer: {
        backgroundColor: '#fff',
        borderRadius: 15,
        padding: 10,
        marginTop: 10,
    },
    slider: {
        flex: 1,
        marginHorizontal: 10,
    },

    checkbox: {
        width: 22,
        height: 22,
        borderRadius: 5,
        alignItems: 'center',
        justifyContent: 'center',
        borderWidth: 1,
    },
});

export default ProjectFilterSheet;


