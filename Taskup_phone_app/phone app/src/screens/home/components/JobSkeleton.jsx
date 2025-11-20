import { View } from "react-native";
import React from "react";
import SkeletonPlaceholder from 'react-native-skeleton-placeholder';

const JobSkeleton = () => {
    return (
        <>
            <View
                style={{
                    backgroundColor: '#fff',
                    padding: 5,
                    borderRadius: 15,
                    marginRight: 5,
                    marginTop: 5,
                    marginBottom: 10
                }}
            >
                <View style={{
                    flexDirection: 'row',
                    justifyContent: 'space-between',
                    marginTop: 10
                }}>
                    <View style={{ flexDirection: 'row', alignItems: 'center', paddingHorizontal: 5, justifyContent: "center" }}>
                        <SkeletonPlaceholder>
                            <View
                                style={{ height: 24, width: 24, borderRadius: 24 / 2 }}>
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
                                style={{ height: 24, width: 24, borderRadius: 24 / 5, marginLeft: 15 }}>
                            </View>
                        </SkeletonPlaceholder>
                    </View>
                </View>

                <SkeletonPlaceholder>
                    <View
                        style={{ height: 10, width: 320, marginLeft: 10, marginTop: 10 }}
                    >
                    </View>
                </SkeletonPlaceholder>
                <SkeletonPlaceholder>
                    <View
                        style={{ height: 10, width: 90, marginLeft: 10, marginTop: 5 }}
                    >
                    </View>
                </SkeletonPlaceholder>

                <View style={{ flexDirection: 'row', justifyContent: 'space-between', width: "100%" }}>
                    <View style={{
                        alignItems: 'center',
                        height: 30,
                        width: "30%",
                        marginTop: 15,
                        backgroundColor: "#F7F7F8",
                        paddingVertical: 10,
                        borderRadius: 10,
                    }}>
                        <SkeletonPlaceholder>
                            <View style={{ height: 10, width: 50, }} />
                        </SkeletonPlaceholder>


                    </View>
                    <View style={{
                        alignItems: 'center',
                        height: 30,
                        width: "30%",
                        marginTop: 15,
                        backgroundColor: "#F7F7F8",
                        paddingVertical: 10,
                        borderRadius: 10,
                    }}>
                        <SkeletonPlaceholder>
                            <View style={{ height: 10, width: 50, }} />
                        </SkeletonPlaceholder>


                    </View>

                    <View style={{
                        alignItems: 'center',
                        height: 30,
                        width: "30%",
                        marginTop: 15,
                        backgroundColor: "#F7F7F8",
                        paddingVertical: 10,
                        borderRadius: 10,
                    }}>
                        <SkeletonPlaceholder>
                            <View style={{ height: 10, width: 50, }} />
                        </SkeletonPlaceholder>
                    </View>
                </View>
                <View style={{
                    backgroundColor: '#F7F7F8',
                    marginTop: 10,
                    borderRadius: 20,
                    alignSelf: 'center',
                    height: 40,
                    flexDirection: 'row',
                    alignItems: 'center',
                    justifyContent: 'space-between',
                    marginTop: 5,
                    backgroundColor: "#F7F7F8",
                    padding: 10,
                    width: '100%'
                }}>
                    <SkeletonPlaceholder >
                        <View style={{
                            flexDirection: 'row',
                            alignItems: 'center',
                            justifyContent: 'space-between',
                            marginTop: 5,
                            backgroundColor: "#F7F7F8",
                            padding: 10,
                            width: '100%'
                        }}>
                            <SkeletonPlaceholder>
                                <View
                                    style={{ height: 10, width: 130, marginTop: 3 }}
                                >
                                </View>
                            </SkeletonPlaceholder>
                            <SkeletonPlaceholder>
                                <View
                                    style={{ height: 15, width: 90, marginRight: 15, marginTop: 3 }}
                                >
                                </View>
                            </SkeletonPlaceholder>
                        </View>
                    </SkeletonPlaceholder>
                </View>
            </View>
        </>
    );
};

export default JobSkeleton;
