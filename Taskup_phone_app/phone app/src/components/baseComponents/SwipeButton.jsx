import React, { useRef, useState, useEffect } from 'react';
import {
    Animated, PanResponder, View, Text, StyleSheet, Dimensions,
    Image, SafeAreaView, ActivityIndicator
} from 'react-native';
import Styles from '../../styles/Styles';
import { useDispatch, useSelector } from 'react-redux';
import { SwithchUserIcon } from '../../constants/svgIcons';
import { switchProfile } from '../../redux/slices/authSlice';

const { width } = Dimensions.get('window');

export default function SwipeButton() {

    const user = useSelector((state) => state.auth.user);
    const token = useSelector((state) => state.auth.token);
    const pan = useRef(new Animated.ValueXY()).current;
    const leftContentPosition = useRef(new Animated.Value(0)).current;
    const [loading, setLoading] = useState(false);
    const dispatch = useDispatch()

    const panResponder = useRef(
        PanResponder.create({
            onStartShouldSetPanResponder: () => true,
            onPanResponderMove: Animated.event([null, { dx: pan.x }], {
                useNativeDriver: false
            }),
            onPanResponderRelease: (e, gestureState) => {
                if (gestureState.dx < -width * 0.5) {
                    // Slide to the left
                    setLoading(true);
                    Animated.timing(pan, {
                        toValue: { x: -width + 100, y: 0 },
                        duration: 300,
                        useNativeDriver: false,
                    }).start(() => {
                        dispatch(switchProfile())
                            .unwrap()
                            .then(() => {
                                setLoading(false);
                            })
                            .catch(() => {
                                setLoading(false);
                            });
                    });
                } else if (gestureState.dx > width * 0.5) {
                    Animated.timing(pan, {
                        toValue: { x: 0, y: 0 },
                        duration: 300,
                        useNativeDriver: false,
                    }).start();
                } else {
                    Animated.spring(pan, {
                        toValue: { x: 0, y: 0 },
                        useNativeDriver: false,
                    }).start();
                }
            },
        })
    ).current;
    Animated.spring(leftContentPosition, {
        toValue: pan.x.interpolate({
            inputRange: [-width + 100, 0],
            outputRange: [width - 90, 10], 
            extrapolate: 'clamp',
        }),
        useNativeDriver: false,
    }).start();

    useEffect(() => {
        if (!loading) {
            Animated.spring(pan, {
                toValue: { x: 0, y: 0 },
                useNativeDriver: false,
            }).start();
        }
    }, [loading]);

    const capitalizeFirstLetter = (string) => {
        if (!string) return '';
        return string.charAt(0).toUpperCase() + string.slice(1);
    };

    return (
        <SafeAreaView style={{ backgroundColor: "#F4F4FB" }}>
            <View style={styles.container}>
                <Animated.View
                    {...panResponder.panHandlers}
                    style={[styles.swipeable, { transform: [{ translateX: pan.x }] }]}
                >
                    {loading ? (
                        <ActivityIndicator size="small" color="#585858" />
                    ) : (
                        <SwithchUserIcon IconColor={'#585858'} />
                    )}
                    <View>
                    </View>
                </Animated.View>
                <Animated.View style={[styles.leftContent, { left: leftContentPosition }]}>
                    <View style={Styles.profileHeader}>
                        <Image
                            resizeMode="center"
                            style={Styles.profileImage}
                            source={{ uri: user?.image }}
                        />
                        <View>
                            <Text style={Styles.profileName}>{user?.full_name}</Text>
                            <Text style={Styles.profileAccount}>{capitalizeFirstLetter(user?.user_type)}</Text>
                        </View>
                    </View>
                </Animated.View>
            </View>
        </SafeAreaView>
    );
}

const styles = StyleSheet.create({
    container: {
        flexDirection: 'row',
        alignItems: 'center',
        justifyContent: 'flex-start',
        height: 60,
        width: width - 20,
        borderRadius: 30,
        padding: 10,
        overflow: 'hidden',
        margin: 10,
    },
    swipeable: {
        position: 'absolute',
        right: 0,
        width: 50,
        height: 50,
        backgroundColor: '#fcfcfc',
        borderRadius: 50 / 2,
        justifyContent: 'center',
        alignItems: 'center',
        zIndex: 1,
    },
    leftContent: {
        flexDirection: 'row',
        alignItems: 'center',
        position: 'absolute',
    },
    image: {
        width: 50,
        height: 50,
        borderRadius: 25,
    },
    text: {
        marginLeft: 10,
        fontSize: 16,
    },
    buttonText: {
        color: 'white',
        fontSize: 18,
        fontWeight: 'bold',
    },
});
