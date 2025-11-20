import { Text, View, FlatList, Image, TouchableOpacity, ActivityIndicator } from 'react-native'
import React, { useState } from 'react'
import Icon from 'react-native-vector-icons/FontAwesome6';
import Ionicons from 'react-native-vector-icons/Ionicons';
import * as Constant from '../../../constants/GlobalConstants';
import { useNavigation } from '@react-navigation/native';
import { Reviews, Location, Dollar, Heart } from '../../../constants/svgIcons';
import Styles from '../../../styles/Styles';
import { updateSavedItem } from '../../../api/networkCalls';
import { useSelector } from 'react-redux';
import AlertComponent from '../../../components/AlertComponent';

const FreelancerCard = ({ sellerDetails, refetch }) => {
	const token = useSelector((state) => state.auth.token);
	const user = useSelector((state) => state.auth.user);
	const [isLoading, setIsLoading] = useState(false)
	const [alert, setAlert] = useState({ visible: false, type: '', message: '' });
	const MAX_VISIBLE_ITEMS = 3;
	const skills = sellerDetails?.skills || [];
	const visibleSkills = skills.slice(0, MAX_VISIBLE_ITEMS);
	const remainingCount = skills.length - MAX_VISIBLE_ITEMS;
	const navigation = useNavigation();

	const handleSavedItem = async (id, type) => {
		const param = {
			corresponding_id: id,
			type: type,
		};

		if (user) {
			try {
				setIsLoading(true);
				const response = await updateSavedItem(param, token);
				if (response?.status === 200) {
					refetch();
					setIsLoading(false);
					setAlert({ visible: true, type: 'Congratulations!', message: response.data });

				}

			} catch (error) {
				setIsLoading(false);
			}
		} else {
			setAlert({ visible: true, type: 'Oops!', message: 'You need to login to perform this action' });
		}
	};

	const handleCloseAlert = () => {
		setAlert({ visible: false, type: '', message: '' });
	};

	return (
		<TouchableOpacity
			style={{
				flexDirection: 'row',
				backgroundColor: Constant.whiteColor,
				padding: 5,
				borderRadius: 16,
				marginTop: 10,
			}}
			onPress={() => navigation.navigate('FreelancerDetail', { id: sellerDetails.id })}
		>
			<Image
				style={{
					width: 100,
					height: 152,
					borderRadius: 16,
				}}
				source={{ uri: sellerDetails?.image }}
				resizeMode="cover"
			/>
			<TouchableOpacity
				style={{
					position: 'absolute',
					bottom: 15,
					left: 20,
					backgroundColor: '#fff',
					borderRadius: 8,
					width: 28,
					height: 28,
					alignItems: 'center',
					justifyContent: 'center',
					shadowColor: '#ddd',
					shadowOffset: {
						width: 0,
						height: 2,
					},
					shadowOpacity: 0.25,
					shadowRadius: 1.84,
					elevation: 3,

				}}
				onPress={() => handleSavedItem(sellerDetails.id, "profile")}
			>
				{isLoading ? <ActivityIndicator size="small" color={Constant.primaryColor} /> :
					sellerDetails?.is_favourite != 1 ? <Heart strokeWidth={1.3} height={14} width={14} iconColor={'#585858'} /> : <Heart strokeWidth={1.3} height={14} width={14} iconColor={'red'} />
				}
			</TouchableOpacity>
			<View
				style={{ marginVertical: 10, marginHorizontal: 10, flex: 1 }}>
				<View
					style={{
						flexDirection: 'row',
						alignItems: 'center',
						justifyContent: "space-between",
						marginBottom: 8
					}}>
					<View style={{ flexDirection: 'row', alignItems: 'center' }}>
						<Text
							style={{
								color: Constant.blackColor,
								fontSize: 15,
								lineHeight: 21,
								fontWeight: 500,
								fontFamily: Constant.primaryFontMedium
							}}>
							{sellerDetails?.first_name}{" "}{sellerDetails?.last_name}
						</Text>
						<View style={{ borderRadius: 20, marginLeft: 5, backgroundColor: Constant.greenColor, padding: 3 }}>
							<Icon
								name="check"
								color={Constant.whiteColor}
								size={10}
							/>
						</View>

					</View>
					<View
						style={{
							backgroundColor: '#EE471010',
							paddingHorizontal: 10,
							paddingVertical: 5,
							borderRadius: 6,
							flexDirection: 'row',
							alignItems: 'center',
						}}>
						<Ionicons name="flash" size={11} color="#EE4710" />
						<Text
							style={{
								fontWeight: '700',
								lineHeight: 11,
								fontSize: 9,
								textAlign: 'center',
								color: Constant.primaryColor,
								fontFamily: Constant.primaryFontMedium
							}}>
							PRO
						</Text>
					</View>
				</View>
				<View
					style={{
						flexDirection: 'row',
						alignItems: 'center',
						justifyContent: "space-between",
						marginBottom: 6
					}}>
					<View style={{ flexDirection: 'row', alignItems: 'center' }}>
						<Reviews strokeWidth={1.3} height={12} width={12} iconColor={'#585858'} />
						<Text
							style={{
								color: Constant.fontColor,
								fontSize: 12,
								lineHeight: 18,
								fontFamily: Constant.primaryFontRegular,
								fontWeight: 400,
								marginLeft: 6
							}}>
							Review
						</Text>

					</View>
					<Text
						style={{
							color: Constant.secondaryfontColor,
							fontSize: 12,
							lineHeight: 18,
							fontFamily: Constant.primaryFontRegular,

						}}>
						({sellerDetails?.ratings_count} reviews)
					</Text>
				</View>
				<View
					style={{
						flexDirection: 'row',
						alignItems: 'center',
						justifyContent: "space-between",
						marginBottom: 6
					}}>
					<View style={{ flexDirection: 'row', alignItems: 'center' }}>
						<Location strokeWidth={1.3} height={12} width={12} iconColor={'#585858'} />
						<Text
							style={{
								color: Constant.fontColor,
								fontSize: 12,
								lineHeight: 18,
								fontFamily: Constant.primaryFontRegular,
								fontWeight: 400,
								marginLeft: 6,
							}}>
							Location
						</Text>

					</View>
					<Text
						style={{
							color: Constant.secondaryfontColor,
							fontSize: 12,
							lineHeight: 18,
							fontFamily: Constant.primaryFontRegular
						}}>
						{sellerDetails?.address}
					</Text>
				</View>
				<View
					style={{
						flexDirection: 'row',
						alignItems: 'center',
						justifyContent: "space-between",
						marginBottom: 6
					}}>
					<View style={{ flexDirection: 'row', alignItems: 'center' }}>
						<Dollar strokeWidth={1.3} height={12} width={12} iconColor={'#585858'} />
						<Text
							style={{
								color: Constant.fontColor,
								fontSize: 12,
								lineHeight: 18,
								fontFamily: Constant.primaryFontRegular,
								fontWeight: 400,
								marginLeft: 6
							}}>
							Hourly Rate
						</Text>

					</View>
					<Text
						style={{
							color: Constant.secondaryfontColor,
							fontSize: 15,
							fontWeight: 600,
							lineHeight: 21,
							fontFamily: Constant.primaryFontSemiBold
						}}>
						{sellerDetails?.hourly_rate}
						<Text
							style={{
								color: Constant.secondaryfontColor,
								fontSize: 15,
								fontWeight: 400,
								lineHeight: 21,
								fontFamily: Constant.primaryFontRegular
							}}>
							/hr
						</Text>
					</Text>
				</View>
				<FlatList
					showsVerticalScrollIndicator={false}
					data={remainingCount > 0 ? [...visibleSkills, { isRemaining: true }] : visibleSkills}
					style={[Styles.tagList]}
					columnWrapperStyle={Styles.tagColumnWrapper}
					numColumns={20}
					keyExtractor={(x, i) => i.toString()}
					renderItem={({ item, index }) => {
						if (item.isRemaining) {
							return (
								<View style={{ paddingTop: 2 }}>
									<Text style={{
										fontSize: 12,
										lineHeight: 18,
										fontFamily: Constant.primaryFontRegular,
										color: "#1e1e1e",
										textAlign: "left"
									}}>+ {remainingCount} more</Text>
								</View>
							);
						}
						return (
							<View style={{
								borderRadius: 8,
								backgroundColor: "#f7f7f8",
								flexDirection: "row",
								paddingHorizontal: 8,
								paddingVertical: 5,
								marginRight: 8,
							}}>
								<Text style={{
									fontSize: 12,
									lineHeight: 14,
									fontWeight: "500",
									fontFamily: Constant.primaryFontMedium,
									color: "#585858",
									textAlign: "center"
								}}>{item}</Text>
							</View>
						)
					}}
				/>
			</View>
			<AlertComponent
				type={alert?.type}
				message={alert?.message}
				onPress={handleCloseAlert}
				visible={alert.visible}
			/>
		</TouchableOpacity>
	)
}

export default FreelancerCard