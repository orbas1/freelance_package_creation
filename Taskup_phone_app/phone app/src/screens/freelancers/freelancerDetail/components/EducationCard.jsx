import React, { useState } from 'react';
import { View, Text, FlatList, TouchableOpacity } from 'react-native';
import Styles from '../../../../styles/Styles';
import * as Constant from '../../../../constants/GlobalConstants';
import { Calendar } from '../../../../constants/svgIcons';


const EducationCard = ({ item }) => {
    const [isExpanded, setIsExpanded] = useState(false);

    const toggleExpand = () => {
        setIsExpanded(!isExpanded);
    };

    const truncatedDescription = item.deg_description && item.deg_description.length > 100
        ? `${item.deg_description.substring(0, 100)}...`
        : item.deg_description;

    const formatDate = (dateString) => {
        const date = new Date(dateString);
        const month = date.toLocaleString('en-us', { month: 'short' });
        const day = String(date.getDate()).padStart(2, '0');
        const year = date.getFullYear();
        return `${month} ${day}, ${year}`;
    };


    const formattedStartDate = formatDate(item?.deg_start_date);
    const formattedEndDate = formatDate(item?.deg_end_date);
    return (
        <View
            style={{
                shadowColor: 'rgba(16, 24, 40, 0.04)',
                shadowOffset: {
                    width: 0,
                    height: 4,
                },
                shadowRadius: 6,
                elevation: 6,
                shadowOpacity: 1,
                borderRadius: 16,
                backgroundColor: '#fff',
                width: '100%',
                padding: 20,
                overflow: 'hidden',
                flex: 1,
                alignSelf: 'stretch',
                marginBottom: 10,
            }}>
            <Text style={{ fontWeight: '500', fontSize: 16, fontFamily: Constant.primaryFontSemiBold }}>{item.deg_title}</Text>
            <Text style={{ color: '#585858', marginBottom: 10, fontWeight: '400', fontSize: 14, fontFamily: Constant.primaryFontSemiBold }}>{item.deg_institue_name}</Text>
            <View style={[Styles.experienceLocationMain]}>
                <Calendar strokeWidth={1.3} height={14} width={15} iconColor={'#585858'} />
                <Text style={{ marginRight: 5, color: '#585858', fontWeight: '400', fontSize: 14, fontFamily: Constant.primaryFontRegular }}>{formattedStartDate}</Text>
                <Text style={{ fontWeight: 'bold' }}> - </Text>
                <Text style={{ marginLeft: 5, color: '#585858', fontWeight: '400', fontSize: 14, fontFamily: Constant.primaryFontRegular }}>{formattedEndDate}</Text>
            </View>
            <Text style={[Styles.userName, { marginTop: 5, color: '#585858', fontFamily: Constant.primaryFontRegular, fontWeight: '400', fontSize: 15, }]}>
                {isExpanded ? item.deg_description : truncatedDescription}
                {item.deg_description.length > 100 && (
                    <TouchableOpacity onPress={toggleExpand} style={{
                        marginTop: -3
                    }}>
                        <Text style={[Styles.userName,
                        {
                            color: '#1570EF',
                            fontFamily: Constant.primaryFontRegular,
                            paddingLeft: 5,
                            alignItems: "center",
                            textAlign: "center"
                        }]}>
                            {isExpanded ? 'Show less' : 'Show more'}
                        </Text>
                    </TouchableOpacity>
                )}
            </Text>
        </View >
    );
};

const EducationList = ({ educationData }) => {
    return (
        <FlatList
            data={educationData}
            keyExtractor={(item) => item.id.toString()}
            renderItem={({ item }) => <EducationCard item={item} />}
        />
    );
};

export default EducationList;