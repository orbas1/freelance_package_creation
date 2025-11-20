import * as React from "react";
import { Text, StyleSheet, Image, View, Pressable } from "react-native";
import { SearchFilter } from "../../constants/svgIcons";
import * as Constant from '../../constants/GlobalConstants';
import { useNavigation } from '@react-navigation/native';

const Search = () => {
    const navigation = useNavigation();
    return (
        <Pressable style={[styles.search, styles.searchFlexBox, { marginTop: 10 }]} onPress={() => navigation.navigate('Search')}>
            <Text style={styles.searchWithKeyword}>Search with keyword</Text>
            <View style={[styles.slidersVertWrapper, styles.searchFlexBox]}>
                <SearchFilter IconColor={"#585858"} strokeWidht={1.3} height={18} width={20} />
            </View>
        </Pressable>);
};

const styles = StyleSheet.create({
    searchFlexBox: {
        alignItems: "center",
        flexDirection: "row"
    },
    searchWithKeyword: {
        fontSize: 16,
        lineHeight: 24,
        fontFamily: Constant.primaryFontRegular,
        color: "#585858",
        textAlign: "left",
        flex: 1
    },
    slidersVertIcon: {
        width: 20,
        height: 20,
        overflow: "hidden"
    },
    slidersVertWrapper: {
        borderRadius: 10,
        backgroundColor: "#f7f7f8",
        width: 44,
        height: 44,
        justifyContent: "center",
        marginLeft: 10
    },
    search: {
        alignSelf: "stretch",
        shadowColor: "rgba(16, 24, 40, 0.06)",
        shadowOffset: {
            width: 0,
            height: 12
        },
        shadowRadius: 20,
        elevation: 20,
        shadowOpacity: 1,
        borderRadius: 16,
        backgroundColor: "#fff",
        width: "100%",
        height: 56,
        paddingLeft: 20,
        paddingTop: 15,
        paddingRight: 6,
        paddingBottom: 15,
        overflow: "hidden",
        flex: 1
    }
});

export default Search;
