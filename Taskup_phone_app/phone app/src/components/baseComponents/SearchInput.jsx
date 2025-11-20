import * as React from "react";
import { TextInput, StyleSheet, View } from "react-native";
import Feather from 'react-native-vector-icons/Feather';

const SearchInput = ({ value, onChangeText }) => {
    return (
        <View style={[styles.search, styles.searchFlexBox]}>
            <TextInput 
                style={styles.input}
                placeholder="Start your search"
                placeholderTextColor="#585858"
                value={value}
                onChangeText={onChangeText}
            />
            <View style={[styles.searchWrapper, styles.searchFlexBox]}>
                <Feather name="search" style={styles.searchIcon} />
            </View>
        </View>
    );
};

const styles = StyleSheet.create({
    searchFlexBox: {
        alignItems: "center",
        flexDirection: "row"
    },
    input: {
        fontSize: 16,
        lineHeight: 24,
        fontFamily: "SF Pro Text",
        color: "#000",
        flex: 1
    },
    searchIcon: {
        fontSize: 20,
        color: "#585858"
    },
    searchWrapper: {
        borderRadius: 10,
        width: 44,
        height: 44,
        justifyContent: "center",
        alignItems: "center",
        marginLeft: 10
    },
    search: {
        alignSelf: "stretch",
        borderRadius: 16,
        backgroundColor: "rgba(0, 0, 0, 0.03)",
        width: "100%",
        paddingLeft: 20,
        paddingVertical:5,
        paddingRight: 6,
        overflow: "hidden",
        flex: 1
    }
});

export default SearchInput;
