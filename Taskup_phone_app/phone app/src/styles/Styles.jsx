import { StyleSheet, I18nManager, Platform, Dimensions } from 'react-native';
import * as Constant from '../constants/GlobalConstants';
I18nManager.forceRTL(false);
const { width: screenWidth } = Dimensions.get('window');


export default StyleSheet.create({
  container: {
    flex: 1,
  },
  tinyLogo: {
    width: 50,
    height: 50,
  },
  checkbox: {
    width: 24,
    height: 24,
    borderRadius: 8,
    borderWidth: 1,
    borderColor: '#EAEAEA',
    justifyContent: 'center',
    alignItems: 'center',
    marginRight: 10,
    backgroundColor: '#fff',
  },

  checked: {
    backgroundColor: '#EE4710',
    borderColor: '#EE4710',
  },

  taskDetailsContainer: {
    flex: 1,
    backgroundColor: '#F4F4FB',
  },
  taskDetailsScrollView: {
    marginHorizontal: 10,
    paddingTop: 60,
  },
  imageStyle: {
    borderTopRightRadius: 10,
    borderTopLeftRadius: 10,
  },
  imageBackground: {
    height: 290
  },
  detailsContainer: {
    padding: 20,
    backgroundColor: '#fff',
    borderBottomLeftRadius: 20,
    borderBottomRightRadius: 20,
  },
  userInfoContainer: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
  },
  userInfo: {
    flexDirection: 'row',
    alignItems: 'center',
  },
  userAvatar: {
    height: 24,
    width: 24,
    borderRadius: 24 / 2,
  },
  userName: {
    lineHeight: 20,
    fontSize: 14,
    color: '#1E1E1E',
    fontFamily: Constant.primaryFontMedium,
  },
  userBadge: {
    backgroundColor: '#EE471020',
    paddingHorizontal: 4,
    borderRadius: 5,
    flexDirection: 'row',
    alignItems: 'center',
    marginLeft: 10,
  },
  userBadgeText: {
    fontWeight: '700',
    lineHeight: 24,
    fontSize: 10,
    textAlign: 'center',
    color: '#EE4710',
    marginLeft: 2,
  },
  title: {
    // fontWeight: '600',
    fontFamily: Constant.primaryFontSemiBold,
    lineHeight: 24,
    fontSize: 20,

    color: '#1E1E1E',
  },
  infoSection: {
    flexDirection: 'row',
    alignItems: 'center',
    marginTop: 8,
    justifyContent: 'space-between',
  },
  infoItem: {
    flexDirection: 'row',
    alignItems: 'center',
  },
  infoBadge: {
    padding: 10,
    borderRadius: 7.5,
  },
  infoText: {
    // fontWeight: '400',
    fontFamily: Constant.primaryFontRegular,
    lineHeight: 20,
    fontSize: 14,
    color: '#585858',
  },
  infoValue: {
    fontWeight: '500',
    lineHeight: 20,
    fontSize: 14,
    fontFamily: Constant.primaryFontMedium,
    color: '#000000',
  },
  separator: {
    height: 1,
    backgroundColor: '#CFCFCF',
    marginTop: 8
  },
  tagList: {
    marginBottom: 10,
  },
  tagColumnWrapper: {
    flexWrap: 'wrap',
  },
  tagItem: {
    flexDirection: 'row',
  },
  tagBadge: {
    paddingHorizontal: 10,
    paddingVertical: 5,
    marginRight: 10,
    marginVertical: 5,
    backgroundColor: '#0000000f',
    borderRadius: 5,
  },
  tagText: {
    fontWeight: '500',
    lineHeight: 20,
    fontSize: 14,
    color: '#585858',
    fontFamily: Constant.primaryFontMedium,
  },
  sectionTitle: {
    fontWeight: '600',
    lineHeight: 30,
    fontSize: 20,
    marginVertical: 8,
    color: '#1E1E1E',
    fontFamily: Constant.primaryFontSemiBold,
  },
  faqList: {
    paddingBottom: 80,
  },
  faqItem: {
    paddingHorizontal: 10,
    borderRadius: 10,
  },
  selectedQuestion: {
    backgroundColor: 'rgba(0, 0, 0, 0.04)',
  },
  faqQuestionContainer: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    paddingVertical: 14,
    alignItems: 'center',
    width: '100%',
  },
  faqQuestionText: {
    fontFamily: Constant.primaryFontSemiBold,
    lineHeight: 20,
    fontSize: 16,
    color: '#1E1E1E',
    width: '90%',
  },
  faqAnswerContainer: {
    paddingBottom: 14,
  },

  faqAnswerText: {
    fontFamily: Constant.primaryFontRegular,
    // fontWeight: '400',
    lineHeight: 24,
    fontSize: 16,
    color: '#000',
  },

  detailsButtonContainer: {
    marginHorizontal: 20,
    marginVertical: 10,
  },

  packageTabsHeading: {
    lineHeight: 20,
    fontSize: 14,
    color: '#585858',
    fontFamily: Constant.primaryFontSemiBold,
    fontWeight: '600',
  },
  packageUserInfoHeaderMain: {
    paddingVertical: 20,
  },
  packagesUserAvatar: {
    height: 50,
    width: 50,
    borderRadius: 50 / 2,
  },
  packagesTime: {
    borderRadius: 8,
    backgroundColor: '#dcfae6',
    alignItems: 'flex-end',
    justifyContent: 'center',
    paddingHorizontal: 12,
    paddingVertical: 8,
  },
  packagesTimeText: {
    fontSize: 12,
    lineHeight: 14,
    fontFamily: Constant.primaryFontRegular,
    color: '#085d3a',
    fontWeight: '400',
  },
  packagesDaysText: {
    fontSize: 12,
    lineHeight: 14,
    fontWeight: '500',
    // fontFamily: Constant.primaryFontMedium,
    color: '#085d3a',
  },
  packagesTitle: {
    fontFamily: Constant.primaryFontRegular,
    // fontWeight: '400',
    lineHeight: 20,
    fontSize: 16,
    color: '#1E1E1E',
  },

  packagesFeature: {
    fontFamily: Constant.primaryFontSemiBold,
    fontWeight: '600',
    lineHeight: 20,
    fontSize: 16,
    color: '#1E1E1E',
  },

  projectDetailJobHeading: {
    fontFamily: Constant.primaryFontSemiBold,
    fontWeight: '600',
    lineHeight: 20,
    fontSize: 20,
    color: '#1E1E1E',
  },

  proposalHeading: {
    fontFamily: Constant.primaryFontMedium,
    fontWeight: '500',
    lineHeight: 28,
    fontSize: 18,
    color: '#1E1E1E',
  },

  proposalDetailsContainer: {
    borderRadius: 20,
    backgroundColor: 'rgba(0, 0, 0, 0.03)',
    marginVertical: 20,
    padding: 20,
    flex: 1,
  },

  projectTotalFixedBudgetParent: {
    flexDirection: 'row',
    justifyContent: 'space-between',
  },

  proposalDetailText: {
    fontSize: 16,
    lineHeight: 24,
    fontFamily: Constant.primaryFontRegular,
    color: '#000',
  },
  proposalDetailsMain: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    flexWrap: 'wrap',
    gap: 3,
  },
  experienceLocationContainer: {
    flexDirection: "row",
    alignItems: "center",
    flexWrap: "wrap",
    gap: 10,
    paddingVertical: 5
  },
  experienceLocationMain: {
    flexDirection: 'row',
    alignItems: "center",
    gap: 5,
    flexWrap: "wrap"
  },

  portfolioContainer: {
    backgroundColor: "#fff",
    shadowOpacity: 1,
    shadowOffset: {
      width: 0,
      height: 10
    },
    shadowColor: "rgba(16, 24, 40, 0.06)",
    shadowRadius: 20,
    elevation: 20,
    borderRadius: 20,
    borderStyle: "solid",
    borderColor: "#eaeaea",
    borderWidth: 1,
    paddingHorizontal: 5,
    paddingTop: 5,
    paddingBottom: 14,
    width: 250,
    marginRight: 5
  },
  portfolioLinkContainer: {
    flexDirection: "row",
    justifyContent: "space-between",
    paddingTop: 14,
    paddingHorizontal: 10,
    alignItems: "center"
  },

  backgroundVideo: {
    position: 'absolute',
    top: 0,
    left: 0,
    bottom: 0,
    right: 0,
  },

  settingScreenContainer: {
    marginHorizontal: 10,
  },

  PrivacyContainer: {
    flexDirection: "row",
    width: "100%",
    justifyContent: "space-between"
  },
  profileBalanceContainer: {
    alignSelf: "stretch",
    shadowColor: "rgba(16, 24, 40, 0.04)",
    shadowOffset: {
      width: 0,
      height: 4
    },
    shadowRadius: 6,
    elevation: 6,
    shadowOpacity: 1,
    borderRadius: 16,
    backgroundColor: "#fff",
    width: "100%",
    paddingHorizontal: 20,
    paddingVertical: 14,
    flexDirection: "row",
    marginBottom: 20,
    justifyContent: "space-between",
    alignItems: "center"
  },

  safeAreaView: {
    flex: 1,
    marginHorizontal: 10,
    backgroundColor: '#F4F4FB'
  },
  profileHeader: {
    flexDirection: 'row',
    alignItems: 'center',
    gap: 10,
    paddingVertical: 20
  },
  profileImage: {
    height: 50,
    width: 50,
    borderRadius: 25
  },
  profileName: {
    fontWeight: '500',
    lineHeight: 30,
    fontSize: 20,
    color: '#1E1E1E'
  },
  profileAccount: {
    color: '#585858',
    fontFamily: Constant.primaryFontRegular
  },
  balanceContainer: {
    flexDirection: "row",
    gap: 10,
    alignItems: "center"
  },
  balanceText: {
    fontSize: 16,
    lineHeight: 24,
    color: "#585858",
    fontFamily: Constant.primaryFontRegular
  },

  dasBoardSubHeadingText:
  {
    fontSize: 16,
    lineHeight: 24,
    fontWeight: "500",
    fontFamily: Constant.primaryFontMedium,
    color: "#585858",
    // textAlign: "left",
  },

  dashPayoutHistoryContainer: {
    flexDirection: "row",
    width: "100%",
    justifyContent: "space-between",
    alignItems: "center",
    paddingVertical: 10,
  },

  balanceAmount: {
    fontSize: 18,
    lineHeight: 28,
    fontWeight: '600',
    color: '#000',
    fontFamily: Constant.primaryFontSemiBold,
    textAlign: 'center'
  },
  listParent: {
    shadowColor: "rgba(16, 24, 40, 0.04)",
    shadowRadius: 6,
    elevation: 6,
    backgroundColor: "#fff",
    borderRadius: 16,
    shadowOpacity: 1,
    shadowOffset: {
      width: 0,
      height: 4
    },
    paddingHorizontal: 20,
  },
  menuItem: {
    flexDirection: 'row',
    alignItems: 'center',
    // height: 54,
    justifyContent: 'space-between',
  },
  menuItemContent: {
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: "space-between",
    width: "100%"
    // gap: 10,
  },
  menuItemText: {
    fontSize: 16,
    lineHeight: 24,
    color: "#585858",
    fontFamily: Constant.primaryFontRegular
  },
  checkCircleIcon: {
    width: 24,
    height: 24,
    marginLeft: 10
  },
  line: {
    height: 1,
    backgroundColor: "rgba(234, 234, 234, 0.6)",
    alignSelf: "stretch"
  },
  menuItemDashboard: {
    flexDirection: 'row',
    alignItems: 'center',
    width: "100%",
    gap: 15,
    // paddingVertical:10,
    // backgroundColor:"red"
  },

  selectOptionText: {
    flex: 1,
    fontSize: 16,
    lineHeight: 24,
    fontFamily: Constant.primaryFontRegular,
    color: "#585858",
    textAlign: "left"
  },

  payoutCheckCircel: {
    borderRadius: 35 / 2,
    borderColor: "#eaeaea",
    borderWidth: 1,
    height: 20,
    width: 20,
  },

  payoutCheckActiveCircel: {
    borderRadius: 20 / 2,
    borderColor: "#000000",
    borderWidth: 6,
    height: 20,
    width: 20,
  },


  payoutCheckBox: {
    borderRadius: 8593,
    backgroundColor: "#000",
    flex: 1,
    // width: "100%",
    flexDirection: "row",
    alignItems: "center",
    justifyContent: "center",
    padding: 6,
    overflow: "hidden"
  },

  historyText: {
    fontSize: 13,
    lineHeight: 20,
    fontFamily: Constant.primaryFontRegular,
    color: "#585858",
    textAlign: "left"
  },

  StatusContainer: {
    borderRadius: 8,
    flexDirection: "row",
    // alignItems: "center",
    paddingHorizontal: 8,
    paddingVertical: 5
  },

  photoContainer: {
    width: 100,
    height: 100,
    borderRadius: 50,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#E0E0E0',
    marginBottom: 10,
  },
  profilePhotoContainer: {
    alignSelf: "stretch",
    shadowColor: "rgba(16, 24, 40, 0.04)",
    shadowOffset: {
      width: 0,
      height: 4
    },
    shadowRadius: 6,
    elevation: 6,
    shadowOpacity: 1,
    borderRadius: 16,
    backgroundColor: "#fff",
    width: "100%",
    paddingHorizontal: 20,
    paddingVertical: 20,
    flexDirection: "row",
    alignItems: "center",
    gap: 18,
    marginBottom: 5,
    marginTop: 5

  },
  profilePhotoIcon: {
    backgroundColor: "#585858",
    height: 30,
    width: 30,
    borderRadius: 30 / 2,
    alignItems: "center",
    justifyContent: "center",
    borderColor: "#FFF",
    borderWidth: 4,
    position: "absolute",
    top: 55,
    left: 65,
  },

  eduCardContainer: {
    backgroundColor: '#fff',
    borderRadius: 10,
    shadowColor: '#000',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 0.1,
    shadowRadius: 5,
    elevation: 5,
  },

  EduUniversityNameText: {
    textAlign: "left",
    fontFamily: Constant.primaryFontRegular,
    lineHeight: 18,
    fontSize: 12,
    color: "#585858"
  },

  EduDegreeNameText: {
    fontSize: 15,
    lineHeight: 21,
    fontFamily: Constant.primaryFontMedium,
    color: '#000',
    fontWeight: "500"
  },


  profileEduContainer: {
    borderRadius: 16,
    width: "100%",
    // overflow: "hidden",
    backgroundColor: "#fff",
    shadowOpacity: 1,
    elevation: 6,
    shadowRadius: 6,
    shadowOffset: {
      width: 0,
      height: 4
    },
    shadowColor: "rgba(16, 24, 40, 0.04)",
    marginBottom: 10,
  },

  flexContainer: {
    flex: 1,
    alignSelf: "stretch"
  },
  row: {
    alignItems: "center",
    flexDirection: "row"
  },

  buttonFlex: {
    // minHeight: 36,
    paddingVertical: 10,
    justifyContent: "center",
    alignItems: "center",
    flexDirection: "row",
    overflow: "hidden",
    flex: 1
  },
  textCommon: {
    lineHeight: 20,
    fontSize: 14,
    fontWeight: "500",
    textAlign: "left",
    fontFamily: "SF Pro Text"
  },
  degreeText: {
    fontSize: 15,
    lineHeight: 21,
    color: "#000",
    fontWeight: "500",
    textAlign: "left",
    fontFamily: Constant.primaryFontMedium
  },
  infoContainer: {
    flex: 1,
    alignSelf: "stretch"
  },
  EduInfoWrapper: {
    marginTop: 4,
    alignSelf: "stretch"
  },
  dateText: {
    marginLeft: 8
  },
  cardContent: {
    borderRadius: 16,
    padding: 16,
    backgroundColor: "#fff",
    alignSelf: "stretch"
  },
  buttonText: {
    opacity: 0.6,
    color: "#585858",
    lineHeight: 20,
    fontSize: 14
  },
  buttonPadding: {
    paddingHorizontal: 2,
    paddingVertical: 0,
    justifyContent: "center",
    alignItems: "center",
    flexDirection: "row"
  },
  EditButton: {
    borderBottomLeftRadius: 16,
    borderRightWidth: 1,
    paddingHorizontal: 12,
    borderColor: "#eaeaea",
    borderStyle: "solid",
    backgroundColor: "#fff"
  },
  buttonDeleteText: {
    color: "#f04438"
  },
  buttonDelete: {
    borderBottomRightRadius: 16,
    backgroundColor: "#fef3f2",
    paddingHorizontal: 16,
    shadowOpacity: 1,
    elevation: 6,
    shadowRadius: 6,
    shadowOffset: {
      width: 0,
      height: 4
    },
    shadowColor: "rgba(16, 24, 40, 0.04)"
  },
  EduButtonGroup: {
    borderTopWidth: 1,
    flexDirection: "row",
    borderStyle: "solid",
    overflow: "hidden",
    alignSelf: "stretch",
    borderColor: "#eaeaea",
    borderStyle: "solid"
  },
  carouselItem: {
    width: screenWidth,
  },
  carouselImage: {
    width: screenWidth,
    height: 320,
    resizeMode: 'cover',
    borderTopRightRadius: 15,
    borderTopLeftRadius: 15,
  },
  emptyContainer: {
    alignSelf: 'center',
    justifyContent: 'center',
    alignItems: 'center',
    // backgroundColor: "red"
  },
  noProjectsToTypo: {
    overflow: "hidden",
    textAlign: "center",
    color: "#585858",
    fontFamily: "SF Pro Text",
    fontWeight: 600,
  },
  noProjectsTo: {
    fontSize: 14,
    lineHeight: 20,
    fontWeight: "600"
  },
  yourProjectList: {
    fontSize: 12,
    lineHeight: 18
  },
  noProjectsToShowParent: {
    textAlign: 'center'
  },
  list: {
    justifyContent: 'space-between',
    alignItems: 'center',
    marginTop: 10,
  },
  header: {
    justifyContent: 'space-between',
    flexDirection: 'row',
    alignItems: 'center',
    marginTop: 10,
  },
  headerText: {
    fontWeight: '700',
    lineHeight: 24,
    fontSize: 16,
    textAlign: 'center',
    color: Constant.blackColor,
    marginVertical: 10,
  },
  buttonContainer: {
    marginTop: 5,
    width: '100%',
    marginBottom: 10,
    alignItems: 'center',
  },
  buttonSkeleton: {
    height: 30,
    width: '100%',
    borderRadius: 10,
    marginTop: 5,
    marginBottom: 10,
  },
  skeletonButton: {
    width: 100,
    height: 40,
    borderRadius: 20,
  },
  headerContainer: {
    justifyContent: 'space-between',
    flexDirection: 'row',
    alignItems: 'center',
    marginTop: 10,
  },
  headerText: {
    fontWeight: '600',
    lineHeight: 24,
    fontSize: 16,
    color: '#000000',
    fontFamily: Constant.primaryFontSemiBold,
    marginVertical: 10,
  },
  exploreText: {
    fontWeight: '500',
    lineHeight: 20,
    fontSize: 14,
    textAlign: 'center',
    color: '#585858',
    marginVertical: 10,
  },
  listContainers: {
    alignSelf: "stretch",
    shadowColor: "rgba(16, 24, 40, 0.04)",
    shadowOffset: {
      width: 0,
      height: 4
    },
    shadowRadius: 6,
    elevation: 6,
    shadowOpacity: 1,
    borderRadius: 10,
    width: "100%",
    gap: 18,
    marginBottom: 5,
    marginTop: 5,
    backgroundColor: '#fff',
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'space-around',
    // paddingHorizontal: 10,


  },

  emptyContainerGig: {
    alignSelf: 'center',
    height: 600,
    justifyContent: 'center',
    alignItems: 'center',
    // backgroundColor: "red"
  },

  emptyContainer: {
    alignSelf: 'center',
    height: 200,
    justifyContent: 'center',
    alignItems: 'center',
    alignContent: 'center',
    width: '100%',
    // backgroundColor: "red",
    marginHorizontal: 25
  },

  noProjectsToTypo: {
    overflow: "hidden",
    textAlign: "center",
    color: "#585858",
    fontFamily: "SF Pro Text",
    fontWeight: 600,
  },
  noProjectsTo: {
    fontSize: 14,
    lineHeight: 20,
    fontWeight: "600"
  },
  yourProjectList: {
    fontSize: 12,
    lineHeight: 18
  },
  noProjectsToShowParent: {
    textAlign: 'center'
  },
});
