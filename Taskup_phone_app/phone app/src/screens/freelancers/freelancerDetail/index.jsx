import React, { useEffect, useRef, useState, } from 'react';
import {
	StyleSheet,
	Text,
	View,
	FlatList,
	Image,
	TouchableOpacity,
	SafeAreaView,
	ScrollView,
	ActivityIndicator,
} from 'react-native';
import Styles from '../../../styles/Styles';
import FontAwesome from 'react-native-vector-icons/FontAwesome5';
import DetailPageHeader from '../../../components/baseComponents/DetailPageHeader';
import * as Constant from '../../../constants/GlobalConstants';
import EducationCard from './components/EducationCard';
import PortfolioCard from './components/PortfolioCard';
import { OpenEye, Reviews, Location, SingleUser, Planet, Flag } from "../../../constants/svgIcons/index"
import GigsListCard from '../../gigs/components/GigsListCard';
import { useRoute } from '@react-navigation/native';
import { useFetchSellerDetails } from '../../../hooks'
import { useSelector } from 'react-redux';


const FreelancerDetail = () => {
	const [isVisible, setIsVisible] = useState(false);
	const token = useSelector((state) => state.auth.token);
	const route = useRoute();
	const { id } = route.params;

	const { data: sellerDetails, error: sellerError, isLoading: isLoadingSellerDetails, refetch } = useFetchSellerDetails(id, token);
	if (isLoadingSellerDetails) {
		return (
			<SafeAreaView style={{ flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#F4F4FB' }}>
				<ActivityIndicator size="large" color="#EE4710" />
			</SafeAreaView>
		);
	}

	const renderGigsList = ({ item }) => <GigsListCard gigDetails={item} />;

	return (
		<SafeAreaView style={{ backgroundColor: '#F4F4FB', flex: 1, }}>
			<DetailPageHeader typeProject={false} isFavourite={sellerDetails?.data?.is_favourite} id={id} type={"profile"} refetch={refetch} />
			<ScrollView
				style={{ marginHorizontal: 10, }}
				showsVerticalScrollIndicator={false}>
				<View
					style={{
						padding: 20,
						backgroundColor: '#fff',
						borderRadius: 20,
						marginTop: 70
					}}>
					<View
						style={{
							flexDirection: 'row',
							justifyContent: 'space-between',
							alignItems: 'center',
						}}>
						<View
							style={{
								flexDirection: 'row',
								alignItems: 'center',
							}}>
							<Image
								resizeMode="center"
								style={{ height: 60, width: 60, borderRadius: 60 / 2 }}
								source={{ uri: sellerDetails?.data?.image }}
							/>
							<View style={{ marginLeft: 10, width: '80%' }}>
								<Text
									style={{
										fontWeight: '400',
										lineHeight: 20,
										fontSize: 14,
										textAlign: 'auto',
										fontFamily: Constant.primaryFontRegular,
										color: '#1E1E1E',
										flexWrap: 'wrap',

									}}>
									{sellerDetails?.data?.tagline}
								</Text>
								<View style={{ flexDirection: 'row', alignItems: 'center' }}>
									<Text
										style={{
											fontWeight: '500',
											lineHeight: 30,
											fontSize: 20,
											//   textAlign: 'center',
											color: '#1E1E1E',
										}}>
										{sellerDetails?.data?.full_name}
									</Text>
									<View
										style={{
											backgroundColor: '#17b26a',
											borderRadius: 18 / 2,
											marginLeft: 10,
											padding: 3,
											alignItems: 'center',
											justifyContent: 'center',
										}}>
										<FontAwesome name="check" size={9} color="#FFF" />
									</View>
								</View>
								<View style={{ flexDirection: 'row', alignItems: 'center' }}>
									<Text style={[Styles.userName, { color: '#585858' }]}>
										Starting from
									</Text>
									<Text
										style={[
											Styles.userName,
											{ fontFamily: Constant.primaryFontSemiBold, marginLeft: 5 },
										]}>
										${sellerDetails?.data?.starting_from}.00

									</Text>
								</View>
							</View>
						</View>
					</View>

					{sellerDetails?.data?.reviews ? (
						<View
							style={{
								flexDirection: 'row',
								alignItems: 'center',
								marginTop: 8,
								justifyContent: 'space-between',
							}}>
							<View style={{ flexDirection: 'row', alignItems: 'center' }}>
								<View
									style={{
										backgroundColor: '#FEF0C7',
										padding: 10,
										borderRadius: 7.5,
									}}>
									<Reviews strokeWidth={1.3} height={16} width={16} iconColor={'#DC6803'} />
								</View>

								<Text
									style={{
										fontWeight: '400',
										lineHeight: 20,
										fontSize: 14,
										color: '#585858',
										marginLeft: 10,
									}}>
									Reviews
								</Text>
							</View>

							<Text
								style={{
									fontWeight: '500',
									lineHeight: 20,
									fontSize: 14,
									color: '#000000',
								}}>
								{sellerDetails?.data?.rating} ({sellerDetails?.data?.reviews.toString()} reviews)
							</Text>
						</View>

					) : null}

					{sellerDetails?.data?.views ? (
						<View
							style={{
								flexDirection: 'row',
								alignItems: 'center',
								marginTop: 8,
								justifyContent: 'space-between',
							}}>
							<View style={{ flexDirection: 'row', alignItems: 'center' }}>
								<View
									style={{
										backgroundColor: '#EFF8FF',
										padding: 10,
										borderRadius: 7.5,
									}}>
									{/* <Feather name="eye" size={15} color="#1570EF" /> */}
									<OpenEye iconColor={'#2E90FA'} height={16} width={16} />
								</View>

								<Text
									style={{
										fontWeight: '400',
										lineHeight: 20,
										fontSize: 14,
										color: '#585858',
										marginLeft: 10,
									}}>
									Views
								</Text>
							</View>

							<Text
								style={{
									fontWeight: '500',
									lineHeight: 20,
									fontSize: 14,
									color: '#000000',
								}}>
								{sellerDetails?.data?.views.toString()}
							</Text>
						</View>

					) : null}

					{sellerDetails?.data?.address ? (
						<View
							style={{
								flexDirection: 'row',
								alignItems: 'center',
								marginTop: 8,
								justifyContent: 'space-between',
							}}>
							<View style={{ flexDirection: 'row', alignItems: 'center' }}>
								<View
									style={{
										backgroundColor: '#F2EEFA',
										padding: 10,
										borderRadius: 7.5,
									}}>
									<Location iconColor={'#7A50EC'} height={16} width={16} />
								</View>

								<Text
									style={{
										fontWeight: '400',
										lineHeight: 20,
										fontSize: 14,
										color: '#585858',
										marginLeft: 10,
									}}>
									Location
								</Text>
							</View>

							<Text
								style={{
									fontWeight: '500',
									lineHeight: 20,
									fontSize: 14,
									color: '#000000',
								}}>
								{sellerDetails?.data?.address}
							</Text>
						</View>

					) : null}

					{sellerDetails?.data?.seller_type ? (
						<View
							style={{
								flexDirection: 'row',
								alignItems: 'center',
								marginTop: 8,
								justifyContent: 'space-between',
							}}>

							<View style={{ flexDirection: 'row', alignItems: 'center' }}>
								<View
									style={{
										backgroundColor: '#FEE4E2',
										padding: 10,
										borderRadius: 7.5,
									}}>

									<SingleUser iconColor={'#F04438'} height={16} width={16} />
								</View>

								<Text
									style={{
										fontWeight: '400',
										lineHeight: 20,
										fontSize: 14,
										color: '#585858',
										marginLeft: 10,
									}}>
									Business type
								</Text>
							</View>
							<Text
								style={{
									fontWeight: '500',
									lineHeight: 20,
									fontSize: 14,
									color: '#000000',
								}}>
								{sellerDetails?.data?.seller_type}
							</Text>
						</View>

					) : null}

					{sellerDetails?.data?.languages.length != 0 ? (
						<View
							style={{
								flexDirection: 'row',
								alignItems: 'center',
								marginTop: 8,
								justifyContent: 'space-between',
								flexWrap: 'wrap',
							}}>
							<View style={{ flexDirection: 'row', alignItems: 'center' }}>
								<View
									style={{
										backgroundColor: '#dcfae6',
										padding: 10,
										borderRadius: 7.5,
									}}>
									<Planet iconColor={'#17B26A'} height={16} width={16} />
								</View>

								<Text
									style={{
										fontWeight: '400',
										lineHeight: 20,
										fontSize: 14,
										color: '#585858',
										marginLeft: 10,
									}}>
									Languages
								</Text>
							</View>
							<Text
								style={{
									fontWeight: '500',
									lineHeight: 20,
									fontSize: 14,
									color: '#000000',
									flexWrap: 'wrap',
								}}>
								{sellerDetails?.data?.languages.join(" , ")}

							</Text>
						</View>
					) : null}

					{sellerDetails?.data?.english_level ? (
						<View
							style={{
								flexDirection: 'row',
								alignItems: 'center',
								marginTop: 8,
								justifyContent: 'space-between',
							}}>
							<View style={{ flexDirection: 'row', alignItems: 'center' }}>
								<View
									style={{
										backgroundColor: '#f7f7f8',
										padding: 10,
										borderRadius: 7.5,
									}}>
									<Flag iconColor={'#585858'} height={16} width={16} />
								</View>

								<Text
									style={{
										fontWeight: '400',
										lineHeight: 20,
										fontSize: 14,
										color: '#585858',
										marginLeft: 10,
									}}>
									English level
								</Text>
							</View>
							<Text
								style={{
									fontWeight: '500',
									lineHeight: 20,
									fontSize: 14,
									color: '#000000',
									flexWrap: 'wrap',
								}}>
								{sellerDetails?.data?.english_level}
							</Text>
						</View>
					) : null}

				</View>

				{sellerDetails?.data?.description ? (
					<>
						<Text style={[Styles.projectDetailJobHeading, { paddingVertical: 20 }]}>
							About
						</Text>
						<Text
							style={{
								fontWeight: '400',
								lineHeight: 20,
								fontSize: 14,
								textAlign: 'auto',
								fontFamily: Constant.primaryFontRegular,
								color: '#1E1E1E',
								flexWrap: 'wrap',
							}}>
							{sellerDetails?.data?.description}
						</Text>
					</>
				) : null}

				{/* <HtmlRender /> */}

				{sellerDetails?.data?.skills?.length != 0 ? (
					<>
						<View style={Styles.separator} />
						<FlatList
							showsVerticalScrollIndicator={false}
							data={sellerDetails?.data?.skills}
							style={[Styles.tagList]}
							columnWrapperStyle={Styles.tagColumnWrapper}
							numColumns={20}
							keyExtractor={(x, i) => i.toString()}
							ListHeaderComponent={<Text style={Styles.sectionTitle}>Skills</Text>}
							renderItem={({ item, index }) => (
								<View style={Styles.tagItem}>
									<View style={Styles.tagBadge}>
										<Text style={Styles.tagText}>{item}</Text>
									</View>
								</View>
							)}
						/>
					</>
				) : null}

				{sellerDetails?.data?.portfolio?.length != 0 ? (
					<>
						<View style={Styles.separator} />
						<Text style={[Styles.projectDetailJobHeading, { paddingVertical: 20 }]}>
							Portfolio
						</Text>

						<PortfolioCard portfolioData={sellerDetails?.data?.portfolio} />

					</>
				) : null}

				{sellerDetails?.data?.education?.length != 0 ? (
					<>
						<View style={[Styles.separator, { marginTop: 20 }]} />
						<Text style={[Styles.projectDetailJobHeading, { paddingVertical: 20 }]}>
							Education
						</Text>
						<EducationCard educationData={sellerDetails?.data?.education} />
					</>
				) : null}
				{sellerDetails?.data?.gigs?.length != 0 ? (
					<>
						<View style={[Styles.separator, { marginTop: 20 }]} />
						<Text style={[Styles.projectDetailJobHeading, { paddingVertical: 20 }]}>
							Gigs
						</Text>

						<FlatList
							data={sellerDetails?.data?.gigs}
							showsVerticalScrollIndicator={false}
							keyExtractor={item => item.id}
							renderItem={renderGigsList}
						/>
					</>
				) : null}
			</ScrollView>
		</SafeAreaView>
	);
};

export default FreelancerDetail;
