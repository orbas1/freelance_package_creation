import React, { useEffect, useRef, useState } from 'react';
import {
  View,
  Text,
  Pressable,
  StyleSheet,
  TextInput,
  SafeAreaView,
} from 'react-native';
import RBSheet from 'react-native-raw-bottom-sheet';
import Styles from '../../../../../styles/Styles';

const InvoiceFilterSheet = ({ isVisible, onClose, onFilterChange }) => {
  const bottomSheetRef = useRef(null);
  const [invoiceType, setInvoiceType] = useState([
    { id: 0, name: "All", slug: "all", active: true },
    { id: 1, name: "Completed", slug: "completed", active: false },
    { id: 2, name: "Ongoing", slug: 'processed', active: false },
    { id: 3, name: "Refunded", slug: 'refunded', active: false },
  ]);
  const [type, setType] = useState('');
  const [searchTerm, setSearchTerm] = useState('');

  useEffect(() => {
    if (isVisible) {
      bottomSheetRef.current.open();
    } else {
      bottomSheetRef.current.close();
    }
  }, [isVisible]);

  const handlePress = (index) => {
    const updatedInvoiceType = invoiceType.map((item, i) => ({
      ...item,
      active: i === index,
    }));
    setInvoiceType(updatedInvoiceType);
    const selectedFilter = updatedInvoiceType[index].slug;
    onFilterChange({ status: selectedFilter, type, searchTerm });
  };

  const handleTypeChange = (text) => {
    setType(text);
    const activeFilter = invoiceType.find(item => item.active);
    onFilterChange({ status: activeFilter.slug, type: text, searchTerm });
  };

  const handleClose = () => {
    onClose();
  };

  return (
    <RBSheet
      ref={bottomSheetRef}
      closeOnDragDown
      closeOnPressMask
      onClose={handleClose}
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
        <View style={[styles.sectionHeader, { marginBottom: 10 }]}>
          <Text style={styles.sectionTitle}>Select option below</Text>
        </View>
        <View style={[Styles.listParent, styles.listContainer]}>
          {invoiceType.map((item, index) => (
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
              {index < invoiceType.length - 1 && <View style={Styles.line} />}
            </View>
          ))}
        </View>
        <View style={styles.typeInputContainer}>
          <Text style={styles.sectionTitle}>Filter by Type:</Text>
          <TextInput
            style={styles.typeInput}
            placeholder="Enter type"
            value={type}
            onChangeText={handleTypeChange}
          />
        </View>
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
  typeInputContainer: {
    marginTop: 20,
  },
  typeInput: {
    backgroundColor: '#fff',
    borderRadius: 10,
    padding: 10,
    marginTop: 10,
  },
});

export default InvoiceFilterSheet;
