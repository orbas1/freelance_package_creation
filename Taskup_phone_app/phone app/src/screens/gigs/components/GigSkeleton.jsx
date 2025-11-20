import { View } from "react-native";
import React from "react";
import SkeletonPlaceholder from 'react-native-skeleton-placeholder';

const GigSkeleton = () => {
    return (
        <>
            <View
                style={{
                    backgroundColor: '#fff',
                    padding: 5,
                    borderRadius: 15,
                    marginRight: 5,
                    width: 250,
                }}
            >
                <SkeletonPlaceholder>
                    <View
                        style={{
                            borderRadius: 10,
                            borderRadius: 15,
                            alignItems: 'center',
                            justifyContent: 'center',
                            height: 150
                        }}
                    >
                    </View>
                </SkeletonPlaceholder>
                <View style={{
                    flexDirection: 'row',
                    justifyContent: 'space-between',
                    marginTop: 10
                }}>
                    <View style={{ flexDirection: 'row', alignItems: 'center', paddingHorizontal: 5, justifyContent: "center" }}>
                        <SkeletonPlaceholder>
                            <View
                                style={{ height: 24, width: 24, borderRadius: 24 / 2 }}
                            >
                            </View>
                        </SkeletonPlaceholder>
                        <SkeletonPlaceholder>
                            <View
                                style={{ height: 15, width: 100, marginLeft: 10, marginTop: 5 }}
                            >
                            </View>
                        </SkeletonPlaceholder>
                    </View>
                    <View>
                        <SkeletonPlaceholder>
                            <View
                                style={{ height: 20, width: 40, marginLeft: 10, marginTop: 5 }}
                            >
                            </View>
                        </SkeletonPlaceholder>
                    </View>
                </View>
                <SkeletonPlaceholder>
                    <View
                        style={{ height: 10, width: 210, marginLeft: 10, marginTop: 10 }}
                    >
                    </View>
                </SkeletonPlaceholder>
                <SkeletonPlaceholder>
                    <View
                        style={{ height: 10, width: 230, marginLeft: 10, marginTop: 5 }}
                    >
                    </View>
                </SkeletonPlaceholder>
                <SkeletonPlaceholder>
                    <View
                        style={{ height: 10, width: 150, marginLeft: 10, marginTop: 5 }}
                    >
                    </View>
                </SkeletonPlaceholder>
                <SkeletonPlaceholder >
                    <View
                        style={{ height: 10, width: 100, marginLeft: 10, marginTop: 5 }}
                    >
                    </View>
                </SkeletonPlaceholder>
                <View style={{
                    flexDirection: 'row',
                    alignItems: 'center',
                    justifyContent: 'space-between',
                    marginTop: 5,
                    backgroundColor: "#F7F7F8",
                    padding: 10,
                    borderRadius: 10
                }}>
                    <SkeletonPlaceholder>
                        <View
                            style={{ height: 10, width: 50, marginLeft: 10, marginTop: 5 }}
                        >
                        </View>
                    </SkeletonPlaceholder>
                    <SkeletonPlaceholder>
                        <View
                            style={{ height: 10, width: 50, marginLeft: 10, marginTop: 5 }}
                        >
                        </View>
                    </SkeletonPlaceholder>
                </View>
            </View>
        </>
    );
};

export default GigSkeleton;
