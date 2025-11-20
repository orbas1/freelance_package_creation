import { View } from "react-native";
import React from "react";
import SkeletonPlaceholder from 'react-native-skeleton-placeholder';

const FreelancerSkeleton = () => {
    return (
        <View
            style={{
                backgroundColor: '#fff',
                padding: 5,
                borderRadius: 15,
                marginRight: 5,
                width: 250,
                height: 350
            }}
        >
            <SkeletonPlaceholder>
                <View
                    style={{
                        borderRadius: 15,
                        alignItems: 'center',
                        justifyContent: 'center',
                        height: 150,
                        width: 240,
                    }}
                />
            </SkeletonPlaceholder>
            <View style={{ flexDirection: 'row', justifyContent: 'space-between', marginTop: 10 }}>
                <View style={{ flexDirection: 'row', alignItems: 'center', paddingHorizontal: 5 }}>
                    <SkeletonPlaceholder>
                        <View style={{ height: 15, width: 100, marginRight: 10, marginTop: 5 }} />
                    </SkeletonPlaceholder>
                </View>
                <View>
                    <SkeletonPlaceholder>
                        <View style={{ height: 20, width: 40, marginLeft: 10, marginTop: 5 }} />
                    </SkeletonPlaceholder>
                </View>
            </View>

            <SkeletonPlaceholder>
                <View style={{ flexDirection: 'row', justifyContent: 'space-between', marginTop: 3 }}>
                    <View style={{ flexDirection: 'row', alignItems: 'center', paddingHorizontal: 5 }}>
                        <SkeletonPlaceholder>
                            <View style={{ height: 15, width: 40, marginRight: 10, marginTop: 5 }} />
                        </SkeletonPlaceholder>
                    </View>
                    <View>
                        <SkeletonPlaceholder>
                            <View style={{ height: 15, width: 100, marginLeft: 10, marginTop: 5 }} />
                        </SkeletonPlaceholder>
                    </View>
                </View>
            </SkeletonPlaceholder>
            <View style={{ marginTop: 5 }}>
                <SkeletonPlaceholder>
                    <View style={{ flexDirection: 'row', justifyContent: 'space-between' }}>
                        <View style={{ flexDirection: 'row', alignItems: 'center', paddingHorizontal: 5 }}>
                            <SkeletonPlaceholder>
                                <View style={{ height: 15, width: 60, marginRight: 10, }} />
                            </SkeletonPlaceholder>
                        </View>
                        <View>
                            <SkeletonPlaceholder>
                                <View style={{ height: 15, width: 80, marginLeft: 10, }} />
                            </SkeletonPlaceholder>
                        </View>
                    </View>
                </SkeletonPlaceholder>
            </View>
            <View style={{ marginTop: 5 }}>
                <SkeletonPlaceholder >
                    <View style={{ flexDirection: 'row', justifyContent: 'space-between' }}>
                        <View style={{ flexDirection: 'row', alignItems: 'center', paddingHorizontal: 5, }}>
                            <SkeletonPlaceholder>
                                <View style={{ height: 15, width: 80, marginRight: 10, }} />
                            </SkeletonPlaceholder>
                        </View>
                        <View>
                            <SkeletonPlaceholder>
                                <View style={{ height: 15, width: 60, marginLeft: 10, }} />
                            </SkeletonPlaceholder>
                        </View>
                    </View>
                </SkeletonPlaceholder>
            </View>
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
            <View style={{ flexDirection: 'row', justifyContent: 'space-between', width: '100%' }}>
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
                    alignSelf: 'center',
                    height: 20,
                    marginTop: 10,
                    width: "30%",
                    backgroundColor: "#F7F7F8",
                    borderRadius: 10,
                }}>
                </View>
            </View>
        </View>
    );
};

export default FreelancerSkeleton;