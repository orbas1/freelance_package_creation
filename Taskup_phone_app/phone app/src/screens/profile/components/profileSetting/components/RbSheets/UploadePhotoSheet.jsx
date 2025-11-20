import React, { useEffect, useRef, useState } from 'react';
import {
    View,
    Text,
    StyleSheet,
    Dimensions,
    ScrollView,
    TouchableOpacity,
} from 'react-native';
import RBSheet from 'react-native-raw-bottom-sheet';
import { UploadePhoto, OpenEye } from "../../../../../../constants/svgIcons";

const icons = {
    UploadePhoto,
    OpenEye,
};

const UploadPhotoSheet = ({ isVisible, onClose, title, items, handleSelectImage }) => {
    const bottomSheetRef = useRef(null);
    const [windowHeight, setWindowHeight] = useState(Dimensions.get('window').height);

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
            height={windowHeight / 5}
            duration={250}
            customStyles={{
                container: {
                    borderTopLeftRadius: 20,
                    borderTopRightRadius: 20,
                    padding: 10,
                    backgroundColor: '#F8F8F8',
                },
            }}
            isVisible={isVisible}
        >
            <View style={styles.dragIndicator} />
            <ScrollView showsVerticalScrollIndicator={false}>
                <Text style={styles.proposalHeading}>
                    {title}
                </Text>
                <View style={styles.content}>
                    <View style={styles.list}>
                        {items.map((item, index) => {
                            const IconComponent = icons[item.icon];
                            return (
                                <TouchableOpacity
                                    key={index}
                                    style={styles.item}
                                    onPress={() => {
                                        if (item.text === 'Upload profile photos') {
                                            handleSelectImage();
                                        }
                                    }}
                                >
                                    <View style={[styles.itemRow, styles.lineSpaceBlock]}>
                                        {IconComponent && <IconComponent />}
                                        <Text style={styles.itemText}>{item.text}</Text>
                                        <View style={[styles.cross, styles.crossLayout]} />
                                    </View>
                                    {index < items.length - 1 && (
                                        <View style={[styles.line, styles.lineSpaceBlock]}>
                                            <View style={styles.lineSeparator} />
                                        </View>
                                    )}
                                </TouchableOpacity>
                            );
                        })}
                    </View>

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
    proposalHeading: {
        paddingTop: 20,
        paddingLeft: 10,
        fontWeight: 'bold',
        fontSize: 20
    },
    content: {
        width: '100%',
        paddingTop: 20,
        paddingBottom: 40,
        paddingHorizontal: 10,
        flex: 1,
    },
    list: {
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
        alignSelf: 'stretch',
    },
    item: {
        alignItems: 'center',
        alignSelf: 'stretch',
    },
    itemRow: {
        height: 50,
        flexDirection: 'row',
    },
    lineSpaceBlock: {
        paddingVertical: 0,
        alignItems: 'center',
        paddingHorizontal: 20,
        alignSelf: 'stretch',
    },
    itemText: {
        fontSize: 16,
        lineHeight: 24,
        color: '#585858',
        textAlign: 'left',
        marginLeft: 10,
        flex: 1,
        fontWeight: '400',
    },
    crossLayout: {
        height: 18,
        width: 18,
    },
    cross: {
        overflow: 'hidden',
        display: 'none',
        opacity: 0.7,
        marginLeft: 10,
    },
    line: {
        justifyContent: 'center',
    },
    lineSeparator: {
        backgroundColor: 'rgba(234, 234, 234, 0.6)',
        height: 1,
        alignSelf: 'stretch',
    },
    loaderContainer: {
        justifyContent: 'center',
        alignItems: 'center',
        marginTop: 20,
    },
});

export default UploadPhotoSheet;