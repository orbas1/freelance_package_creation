import React, { useEffect, useRef, useState } from 'react';
import {
  View,
  Text,
  TouchableOpacity,
  StyleSheet,
  Dimensions,
  SafeAreaView,
  ScrollView,
} from 'react-native';
import RBSheet from 'react-native-raw-bottom-sheet';
import Icon from 'react-native-vector-icons/Feather';
import SelectListSheet from '../../../../components/baseComponents/SelectListSheet';
import Styles from '../../../../styles/Styles';
import { useSelector } from 'react-redux';
import * as Constant from "../../../../constants/GlobalConstants";
import Button from '../../../../components/baseComponents/Button';
import SearchInput from '../../../../components/baseComponents/SearchInput';

const GigsFilterSheet = ({ isVisible, onClose, onApply, currentFilters }) => {
  const globalSlice = useSelector((state) => state.global);
  const updateGigCategory = globalSlice?.gigCategories?.data.map(obj => ({ ...obj, active: currentFilters.category.includes(obj.id) }));
  const updateLocationCategory = globalSlice?.countries?.data.map(obj => ({ ...obj, active: currentFilters.location.includes(obj.id) }));
  const bottomSheetRef = useRef(null);
  const [windowHeight, setWindowHeight] = useState(Dimensions.get('window').height);
  const [text, setText] = useState(currentFilters.keyword || '');
  const [isVisibleCatSheet, setIsVisibleCatSheet] = useState(false);
  const [isVisibleLocationSheet, setIsVisibleLocatinSheet] = useState(false);
  const [selectedOption, setSelectedOption] = useState('All');
  const [category, setCategory] = useState(updateGigCategory);
  const [location, setLocation] = useState(updateLocationCategory);
  const isSelectedCategory = category.some(item => item.active === true)
  const isSelectedLocation = location.some(item => item.active === true);
  const [values, setValues] = useState([currentFilters.min_price || 100, currentFilters.max_price || 5500]);
  

  useEffect(() => {
    if (isVisible) {
      bottomSheetRef.current.open();
    } else {
      bottomSheetRef.current.close();
    }
  }, [isVisible]);

  const handleCategoryChange = (updatedCategory) => {
    setCategory(updatedCategory);
  };

  const handleLocationChange = (updatedLocation) => {
    setLocation(updatedLocation);
  };

  const handleSliderChange = (values) => {
    setValues(values);
  };

  const handleApplyFilters = () => {
    const selectedCategories = category.filter(item => item.active).map(item => item.id).join(',');
    const selectedLocations = location.filter(item => item.active).map(item => item.id).join(',');
    const filters = {
      keyword: text,
      min_price: "",
      max_price: "",
      location: selectedLocations,
      category: selectedCategories,
      per_page: 10,
      sort_by: ""
    };
    onApply(filters);
  };

  const handleClearFilters = () => {
    setText('');
    setCategory(updateGigCategory.map(item => ({ ...item, active: false })));
    setLocation(updateLocationCategory.map(item => ({ ...item, active: false })));
    setValues([100, 5500]);
    onApply({
      keyword: '',
      min_price: 100,
      max_price: 5500,
      location: '',
      category: '',
      per_page: 10,
      sort_by: ""
    });
    handleClose()
  };

  const handleClose = () => {
    onClose();
  };

  const handleRemoveCategory = (indexToRemove) => {
    setCategory(prevCategory =>
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

  const handleTextChange = (newText) => {
    setText(newText);
  };

  return (
    <RBSheet
      ref={bottomSheetRef}
      closeOnDragDown
      closeOnPressMask
      onClose={handleClose}
      height={windowHeight / 1.8}
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
          <Text onPress={handleClearFilters} style={styles.clearFilter}>Clear filter</Text>
        </View>
        <ScrollView showsVerticalScrollIndicator={false}>
          <View style={styles.searchContainer}>
            <SearchInput value={text} onChangeText={handleTextChange} />
          </View>

          <View style={styles.sectionHeader}>
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

          <View style={styles.sectionHeader}>
            <Text style={styles.sectionTitle}>Location</Text>
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
    marginBottom: 20,
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
});

export default GigsFilterSheet;


