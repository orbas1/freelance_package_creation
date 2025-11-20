
import React, { useEffect, useRef, useState } from 'react';
import {
    View,
    Text,
    StyleSheet,
    Dimensions,
    ScrollView,
    Pressable
} from 'react-native';
import RBSheet from 'react-native-raw-bottom-sheet';
import Styles from '../../styles/Styles';
import Icon from 'react-native-vector-icons/Feather';
import SearchInput from './SearchInput';

const SelectListSheet = ({
    isVisible,
    onClose,
    onItemChange,
    List: initialList,
    selectionType,
    sheetHeight,
    searchPlaceholder
}) => {
    const [text, setText] = useState('');
    const bottomSheetRef = useRef(null);
    const [windowHeight, setWindowHeight] = useState(Dimensions.get('window').height);
    const [List, setList] = useState(initialList);

    useEffect(() => {
        if (isVisible) {
            bottomSheetRef.current.open();
        } else {
            bottomSheetRef.current.close();
        }
    }, [isVisible]);

    useEffect(() => {
        if (text === '') {
            setList(initialList);
        } else {
            const filteredList = initialList.filter(item =>
                item.name.toLowerCase().includes(text.toLowerCase())
            );
            setList(filteredList);
        }
    }, [text, initialList]);

    const handlePress = (index) => {
        const selectedItem = List[index];
        const updatedCategory = initialList.map((item) => {
            if (selectionType === 'single') {
                return { ...item, active: item.name === selectedItem.name };
            } else if (selectionType === 'multi') {
                return item.name === selectedItem.name ? { ...item, active: !item.active } : item;
            }
            return item;
        });
        onItemChange(updatedCategory);
        setList(updatedCategory);

        if (selectionType === 'single') {
            handleClose();
        }
    };


    const handleClose = () => {
        onClose();
    };

    const handleTextChange = (text) => {
        setText(text);
    };

    return (
        <RBSheet
            ref={bottomSheetRef}
            closeOnDragDown
            closeOnPressMask
            onClose={handleClose}
            height={windowHeight / sheetHeight}
            duration={250}
            customStyles={{
                container: {
                    borderTopLeftRadius: 20,
                    borderTopRightRadius: 20,
                    paddingHorizontal: 20,
                    paddingVertical: 10,
                    backgroundColor: '#F8F8F8',
                },
            }}
        >
            <View style={styles.dragIndicator} />
            <ScrollView showsVerticalScrollIndicator={false}>
                <Text style={[Styles.proposalHeading, styles.heading]}>Select option below</Text>
                <SearchInput value={text} onChangeText={handleTextChange} placeholder={searchPlaceholder} />
                <View style={[Styles.listParent, styles.listContainer]}>
                    {List?.map((item, index) => (
                        <View key={index}>
                            <View style={Styles.menuItem}>
                                <Pressable
                                    style={styles.optionContainer}
                                    onPress={() => handlePress(index)}
                                >
                                    <Text style={Styles.selectOptionText}>{item.name}</Text>
                                    {selectionType === 'multi' ? (
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
                                    ) : (
                                        <View
                                            style={
                                                item.active
                                                    ? Styles.payoutCheckActiveCircel
                                                    : Styles.payoutCheckCircel
                                            }
                                        />
                                    )}
                                </Pressable>
                            </View>
                            {index < List.length - 1 && <View style={Styles.line} />}
                        </View>
                    ))}
                </View>
            </ScrollView>
        </RBSheet>
    );
};

const styles = StyleSheet.create({
    dragIndicator: {
        position: 'absolute',
        top: 0,
        left: '50%',
        right: 0,
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
    heading: {
        paddingVertical: 20,
    },
    listContainer: {
        paddingHorizontal: 20,
        marginBottom: 20,
        marginTop: 15,
    },
    optionContainer: {
        flexDirection: 'row',
        paddingVertical: 15,
        justifyContent: 'space-between',
        width: '100%',
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

export default SelectListSheet;
