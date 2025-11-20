import { View, Text, SafeAreaView, FlatList, TouchableOpacity, ActivityIndicator, Image } from 'react-native';
import React, { useEffect, useState } from 'react';
import Feather from 'react-native-vector-icons/Feather';
import * as Constant from '../../constants/GlobalConstants';
import ProjectsListCard from './components/ProjectsListCard';
import { useNavigation } from '@react-navigation/native';
import { SearchFilter } from '../../constants/svgIcons';
import { useFetchProjectsListing } from '../../hooks';
import ProjectFilterSheet from './projectDetail/components/ProjectFilterSheet';
import Styles from '../../styles/Styles';
import { useSelector } from 'react-redux';

const Projects = () => {
  const token = useSelector((state) => state.auth.token);
  const [isVisible, setIsVisible] = useState(false);
  const [projectsListparams, setProjectsListparams] = useState({
    keyword: "",
    selected_skills: "",
    selected_languages: "",
    selected_expertise_levels: "",
    selected_location: "",
    per_page: "10",
    project_min_price: "",
    project_max_price: "",
    category_name: "",
    project_type: "",
    order_by: "",
  })

  const { data: projectsList, error: projectsError, isLoading: isLoadingProjects, refetch } = useFetchProjectsListing(projectsListparams, token);

  useEffect(() => {
    if (projectsError) {
      Alert.alert('Error', 'An error occurred while fetching projects. Please try again.');
    }
  }, [projectsError]);

  if (isLoadingProjects) {
    return (
      <SafeAreaView style={{ flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#F4F4FB' }}>
        <ActivityIndicator size="large" color="#EE4710" />
      </SafeAreaView>
    );
  }

  const renderProjectsList = ({ item }) => <ProjectsListCard jobDetails={item} refetch={refetch} />
  const navigation = useNavigation();

  const handleGoBack = () => {
    navigation.goBack();
  }

  const toggleProjectFilterSheet = () => {
    setIsVisible(!isVisible);
  };

  const handleFilterApply = (filters) => {
    setProjectsListparams(filters);
  };

  return (
    <SafeAreaView
      style={{
        marginHorizontal: 10,
        backgroundColor: Constant.bgColor,
        // flex: 1,
        // width:"100%"
        height: "100%"
      }}>
      <View
        style={{
          flexDirection: 'row',
          alignItems: 'center',
          justifyContent: 'space-between',
          marginBottom: 10,
        }}>
        <View style={{ flexDirection: 'row', alignItems: 'center' }}>
          <Feather
            onPress={() => handleGoBack()}
            name="chevron-left"
            color={Constant.iconColor}
            size={20}
          />
          <View style={{ marginHorizontal: 15 }}>
            <Text
              style={{
                color: Constant.blackColor,
                fontSize: 20,
                lineHeight: 30,
                fontWeight: 600,
              }}>
              Projects
            </Text>
            <Text
              style={{
                color: Constant.fontColor,
                fontSize: 14,
                lineHeight: 20,
                fontFamily: 'SF-Pro-Text-RegularItalic',
              }}>
              {projectsList?.data?.pagination?.total} search result(s) found
            </Text>
          </View>
        </View>
        <TouchableOpacity
          onPress={toggleProjectFilterSheet}
          style={{
            backgroundColor: Constant.whiteColor,
            borderRadius: 10,
            width: 44,
            height: 44,
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
          }}>
          <SearchFilter IconColor={'#585858'} strokeWidht={1.3} height={18} width={20} />
        </TouchableOpacity>
      </View>
      <FlatList
        data={projectsList?.data?.list}
        showsVerticalScrollIndicator={false}
        keyExtractor={item => item.id}
        renderItem={renderProjectsList}
        ListEmptyComponent={
          <View style={Styles.emptyContainer}>
            <Image
              style={{
                alignSelf: 'center',
                resizeMode: 'cover'
              }}

              source={require('../../assets/images/EmptyProject.png')}
            />
            <View style={Styles.noProjectsToShowParent}>
              <Text style={[Styles.noProjectsTo, Styles.noProjectsToTypo]} numberOfLines={2}>No Projects to Show!</Text>
              <Text style={[Styles.yourProjectList, Styles.noProjectsToTypo]} numberOfLines={2}>Your project list is empty. Create a prject to begin.</Text>
            </View>
          </View>

        }
      />
      <ProjectFilterSheet isVisible={isVisible} onClose={() => setIsVisible(false)} onApply={handleFilterApply} currentFilters={projectsListparams} />
    </SafeAreaView>
  );
};

export default Projects;
