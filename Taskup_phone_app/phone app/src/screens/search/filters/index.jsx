import React, { useEffect, useRef, useState } from 'react';
import {
  View,
  Text,
  TouchableOpacity,
  StyleSheet,
  Dimensions,
  SafeAreaView,
  ScrollView,
  Alert,
} from 'react-native';
import RBSheet from 'react-native-raw-bottom-sheet';
import CustomTextInput from '../../../components/baseComponents/TextInput';
import Icon from 'react-native-vector-icons/Feather';
import Button from '../../../components/baseComponents/Button';

const BottomSheet = ({ isVisible, onClose }) => {
  const bottomSheetRef = useRef(null);
  const [windowHeight, setWindowHeight] = useState(
    Dimensions.get('window').height,
  );
  const [text, setText] = useState('');
  const [selectedOption, setSelectedOption] = useState('All');

  const options = ['All', 'Fixed', 'Hourly'];

  const handleSelect = option => {
    setSelectedOption(option);
  };

  const [selectedOptions, setSelectedOptions] = useState([]);

  //   const options = ['Option 1', 'Option 2', 'Option 3'];

  const toggleOption = option => {
    const isSelected = selectedOptions.includes(option);
    const newSelectedOptions = isSelected
      ? selectedOptions.filter(item => item !== option)
      : [...selectedOptions, option];
    setSelectedOptions(newSelectedOptions);
  };

  const [values, setValues] = useState([0, 100]);

  const handleSliderChange = values => {
    setValues(values);
  };

  useEffect(() => {
    if (isVisible) {
      bottomSheetRef.current.open();
    } else {
      bottomSheetRef.current.close();
    }
  }, [isVisible]);

  const handleClose = () => {
    onClose();
  };

  return (
    <RBSheet
      ref={bottomSheetRef}
      closeOnDragDown={true}
      closeOnPressMask={true}
      onClose={handleClose}
      height={windowHeight / 1.2}
      duration={250}
      customStyles={{
        container: {
          borderTopLeftRadius: 20,
          borderTopRightRadius: 20,
          padding: 10,
          backgroundColor: '#F8F8F8',
          // marginTop:10,
        },
      }}
      isVisible={isVisible}>
      <SafeAreaView style={styles.content}>
        <View
          style={{
            flexDirection: 'row',
            justifyContent: 'space-between',
            alignItems: 'center',
            marginBottom: 10,
            // marginTop:10
          }}>
          <Text style={styles.title}>Narrow your search</Text>
          <Text
            onPress={onClose}
            style={{
              fontSize: 14,
              lineHeight: 20,
              fontWeight: '500',
              color: '#585858',
            }}>
            Clear filter
          </Text>
        </View>
        <ScrollView showsVerticalScrollIndicator={false}>
          <View style={{ marginVertical: 15 }}>
            <CustomTextInput
              value={text}
              onChangeText={e => setText(e)}
              placeholder="Start your search"
              type="text"
              Color={'#00000006'}
              iconRequired={true}
              iconName={'search'}
              iconColor={'#58585880'}
              iconSize={20}
            />
          </View>

          <Text
            style={{
              fontSize: 14,
              lineHeight: 20,
              fontWeight: 500,
              color: '#585858',
            }}>
            Project types
          </Text>
          <View
            style={{
              backgroundColor: '#fff',
              borderRadius: 10,
              marginTop: 10,
              padding: 10,
            }}>
            {options.map((option, index) => (
              <TouchableOpacity
                key={option}
                style={styles.option}
                onPress={() => handleSelect(option)}>
                <View
                  style={{
                    flexDirection: 'row',
                    borderBottomColor: '#EAEAEA60',
                    borderBottomWidth: index == options.length - 1 ? 0 : 1,
                    justifyContent: 'space-between',
                    width: '100%',
                    padding: 10,
                  }}>
                  <Text style={styles.optionText}>{option}</Text>
                  <View
                    style={[
                      styles.radioCircle,
                      {
                        borderColor:
                          selectedOption === option ? '#000' : '#EAEAEA',
                      },
                    ]}>
                    {selectedOption === option && (
                      <View style={styles.selectedRadioCircle} />
                    )}
                  </View>
                </View>
              </TouchableOpacity>
            ))}
          </View>

          <Text
            style={{
              fontSize: 14,
              lineHeight: 20,
              fontWeight: 500,
              color: '#585858',
              marginTop: 10,
            }}>
            Freelancer types
          </Text>
          <View
            style={{
              backgroundColor: '#fff',
              borderRadius: 10,
              marginTop: 10,
              padding: 10,
            }}>
            {options.map((option, index) => (
              <TouchableOpacity
                key={option}
                style={styles.option}
                onPress={() => toggleOption(option)}>
                <View
                  style={{
                    flexDirection: 'row',
                    borderBottomColor: '#EAEAEA60',
                    borderBottomWidth: index == options.length - 1 ? 0 : 1,
                    justifyContent: 'space-between',
                    width: '100%',
                    padding: 10,
                  }}>
                  <Text style={styles.optionText}>{option}</Text>

                  <View
                    style={[
                      styles.checkbox,
                      {
                        backgroundColor: selectedOptions.includes(option)
                          ? '#000'
                          : '#fff',
                        borderColor: selectedOptions.includes(option)
                          ? '#000'
                          : '#EAEAEA',
                        borderWidth: 1,
                      },
                    ]}>
                    {selectedOptions.includes(option) && (
                      <Icon name="check" size={20} color="white" />
                    )}
                  </View>
                </View>
              </TouchableOpacity>
            ))}
          </View>

          <View
            style={{
              flexDirection: 'row',
              justifyContent: 'space-between',
              alignItems: 'center',
              marginTop: 10,
            }}>
            <Text
              style={{
                fontSize: 14,
                lineHeight: 20,
                fontWeight: 500,
                color: '#585858',
              }}>
              Categories
            </Text>
            <Text
              style={{
                fontSize: 14,
                lineHeight: 20,
                fontWeight: '500',
                color: '#1570EF',
              }}>
              Select categories
            </Text>
          </View>

          <View
            style={{
              backgroundColor: '#fff',
              borderRadius: 15,
              padding: 10,
              marginTop: 10,
            }}>
            {options.map((option, index) => (
              <View
                style={{
                  flexDirection: 'row',
                  justifyContent: 'space-between',
                  alignItems: 'center',
                  padding: 15,
                  borderBottomColor: '#EAEAEA60',
                  borderBottomWidth: index === options.length - 1 ? 0 : 1,
                }}>
                <Text style={styles.optionText}>{option}</Text>
                <Icon name="x" size={20} color="#F04438" />
              </View>
            ))}
            <Button
              backgroundColor="#00000005"
              text="Load More"
              onPress={() => { }}
              color={'#58585890'}
              weight={'600'}
            />
          </View>

          <View
            style={{
              flexDirection: 'row',
              justifyContent: 'space-between',
              alignItems: 'center',
              marginTop: 10,
            }}>
            <Text
              style={{
                fontSize: 14,
                lineHeight: 20,
                fontWeight: 500,
                color: '#585858',
              }}>
              Price range
            </Text>
          </View>

          <View
            style={{
              backgroundColor: '#fff',
              borderRadius: 15,
              padding: 10,
              marginTop: 10,
            }}>
            <View style={styles.sliderContainer}>
              {/* <Text style={styles.value}>{values[0]}</Text> */}
              <Slider
                style={styles.slider}
                minimumValue={0}
                maximumValue={100}
                step={1}
                minimumTrackTintColor="#007bff"
                maximumTrackTintColor="#d3d3d3"
                thumbTintColor="#007bff"
                value={values}
                onValueChange={handleSliderChange}
              />
              {/* <Text style={styles.value}>{values[1]}</Text> */}
            </View>
          </View>
        </ScrollView>
      </SafeAreaView>
    </RBSheet>
  );
};

const styles = StyleSheet.create({
  content: {
    flex: 1,
    margin: 5,
  },
  title: {
    fontSize: 18,
    fontWeight: '500',
    lineHeight: 20,
    color: '#000',
  },
  button: {
    backgroundColor: '#000',
    padding: 10,
    borderRadius: 10,
    alignItems: 'center',
  },
  buttonText: {
    color: 'white',
    fontSize: 16,
  },
  label: {
    fontSize: 20,
    marginBottom: 10,
  },
  option: {
    flexDirection: 'row',
    alignItems: 'center',
    marginVertical: 5,
  },
  radioCircle: {
    width: 24,
    height: 24,
    borderRadius: 12,
    borderWidth: 2,
    borderColor: '#000',
    alignItems: 'center',
    justifyContent: 'center',
    marginRight: 10,
  },
  selectedRadioCircle: {
    width: 12,
    height: 12,
    borderRadius: 6,
    backgroundColor: '#000',
  },
  optionText: {
    fontSize: 16,
    color: '#585858',
    lineHeight: 24,
    fontWeight: '400',
  },
  checkbox: {
    width: 24,
    height: 24,
    borderRadius: 5,
    backgroundColor: 'black',
    alignItems: 'center',
    justifyContent: 'center',
    marginRight: 10,
  },
  checkboxInner: {
    width: 12,
    height: 12,
    backgroundColor: '#000',
  },
  sliderContainer: {
    width: '100%',
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
  },
  slider: {
    flex: 1,
    marginHorizontal: 10,
  },
  value: {
    fontSize: 16,
  },
});

export default BottomSheet;
