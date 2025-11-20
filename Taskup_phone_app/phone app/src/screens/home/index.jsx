import React, { useEffect, useCallback } from 'react';
import {
  Text,
  View,
  ImageBackground,
  SafeAreaView,
  Image,
  FlatList,
  ScrollView,
  TouchableOpacity,
  Alert,
} from 'react-native';
import styles from '../../styles/Styles';
import CategoriesCard from './components/CategoriesCard';
import JobCard from './components/JobCard';
import TalentCard from './components/TalentCard';
import Button from '../../components/baseComponents/Button';
import { useNavigation, useFocusEffect } from '@react-navigation/native';
import Search from './search';
import * as Constant from '../../constants/GlobalConstants';
import { useFetchTopGigs, useFetchRecentProjects, useFetchTopSeller } from "../../hooks/index";
import { useSelector } from 'react-redux';
import GigCard from './components/GigCard';
import GigSkeleton from '../gigs/components/GigSkeleton';
import FreelancerSkeleton from '../freelancers/components/FreelancerSkeleton';
import JobSkeleton from './components/JobSkeleton';
import Styles from '../../styles/Styles';

const Home = () => {
  const navigation = useNavigation();

  const token = useSelector((state) => state.auth.token);
  const user = useSelector((state) => state.auth.user);

  const data = [
    { id: '1', text: 'Item 1' },
    { id: '2', text: 'Item 2' },
    { id: '3', text: 'Item 3' },
    { id: '4', text: 'Item 4' },
    { id: '5', text: 'Item 5' },
  ];

  const RecentProjectsparams = {
    per_page: "5"
  };

  const { data: projectsData, error: projectsError, isLoading: isLoadingProjects, refetch: jobRefetch } = useFetchRecentProjects(RecentProjectsparams, token);
  const { data: topSellerList, error: TopSellerListError, isLoading: isLoadingTopSellerList, refetch: sellerRefetch } = useFetchTopSeller(RecentProjectsparams, token);
  const { data: TopGigList, error: TopGigListError, isLoading: isLoadingTopGigList, refetch: gigRefetch } = useFetchTopGigs(RecentProjectsparams, token);
  useEffect(() => {
    if (projectsError || TopSellerListError || TopGigListError) {
      Alert.alert('Error', 'An error occurred while fetching data. Please try again.');
    }
  }, [projectsError, TopSellerListError, TopGigListError]);

  useFocusEffect(
    useCallback(() => {

      if (user === null || user?.user_type !== 'seller') {
        sellerRefetch();
        gigRefetch();
      }
      jobRefetch();
    }, [jobRefetch, sellerRefetch, gigRefetch])
  );

  const renderItem = ({ item }) => <CategoriesCard item={item} />;
  const renderTopGigs = ({ item }) => <GigCard gigDetails={item} refetch={gigRefetch} />;
  const renderJobs = ({ item, index }) => <JobCard jobDetails={item} refetch={jobRefetch} />;
  const renderTalents = ({ item }) => <TalentCard talentDetails={item} refetch={sellerRefetch} />;
  const renderItemGigSkeleton = () => <GigSkeleton />;
  const renderItemJobSkeleton = () => <JobSkeleton />;
  const renderItemTopTalentSkeleton = () => <FreelancerSkeleton />;


  const renderEmptyGigComponent = () => (
    <View style={Styles.emptyContainer}>
      <Image
        style={{
          alignSelf: 'center',
          resizeMode: 'cover'
        }}

        source={require('../../assets/images/EmptyGig.png')}
      />

      <View style={Styles.noProjectsToShowParent}>
        <Text style={[Styles.noProjectsTo, Styles.noProjectsToTypo]} numberOfLines={2}>No gig to Show!</Text>
        <Text style={[Styles.yourProjectList, Styles.noProjectsToTypo]} numberOfLines={2}>Your gig list is empty. Create a gig to begin.</Text>
      </View>
    </View>
  );


  const renderEmptyJobComponent = () => (
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
        <Text style={[Styles.yourProjectList, Styles.noProjectsToTypo]} numberOfLines={2}>Your project list is empty. Create a project to begin.</Text>
      </View>
    </View>
  );

  const renderEmptyTopTalentComponent = () => (
    <View style={Styles.emptyContainer}>
      <Image
        style={{
          alignSelf: 'center',
          resizeMode: 'cover'
        }}

        source={require('../../assets/images/EmptyTalent.png')}
      />

      <View style={Styles.noProjectsToShowParent}>
        <Text style={[Styles.noProjectsTo, Styles.noProjectsToTypo]} numberOfLines={2}>No Talent to Show!</Text>
        <Text style={[Styles.yourProjectList, Styles.noProjectsToTypo]} numberOfLines={2}>Your talent list is empty. Add a new talent to begin.</Text>
      </View>
    </View>
  );

  const renderContent = () => {
    if (user === null) {
      return (
        <>
          <View style={styles.headerContainer}>
            <Text style={styles.headerText}>Popular Services</Text>
            {TopGigList?.data ? (
              <TouchableOpacity onPress={() => navigation.navigate('Gigs')}>
                <Text style={styles.exploreText}>Explore all</Text>
              </TouchableOpacity>
            ) : null}

          </View>
          {isLoadingTopGigList ? (
            <FlatList
              data={data}
              renderItem={renderItemGigSkeleton}
              keyExtractor={(item, index) => index.toString()}
              horizontal={true}
              showsHorizontalScrollIndicator={false}
              contentContainerStyle={styles.list}
            />
          ) : (
            <FlatList
              showsHorizontalScrollIndicator={false}
              data={TopGigList?.data}
              renderItem={renderTopGigs}
              keyExtractor={item => item.id}
              horizontal={true}
              ListEmptyComponent={renderEmptyGigComponent}

            />
          )}

          <Text style={styles.headerText}>Recent Posted Jobs</Text>
          {isLoadingProjects ? (
            <FlatList
              data={data}
              renderItem={renderItemJobSkeleton}
              keyExtractor={(item, index) => index.toString()}
              showsHorizontalScrollIndicator={false}
              contentContainerStyle={{ marginTop: 10 }}
            />
          ) : (
            <FlatList
              showsHorizontalScrollIndicator={false}
              data={projectsData?.data}
              renderItem={renderJobs}
              keyExtractor={item => item.id}
              ListEmptyComponent={renderEmptyJobComponent}

            />
          )}
          {projectsData?.data && projectsData?.data?.length > 0 && (

            <View style={styles.buttonContainer}>
              <Button
                backgroundColor="white"
                text="Load More"
                onPress={() => navigation.navigate('Projects')}
                color={"#585858"}
              />
            </View>
          )}

          <View style={styles.headerContainer}>
            <Text style={styles.headerText}>Top Talents</Text>

            {topSellerList?.data ? (
              <TouchableOpacity onPress={() => navigation.navigate('Freelancers')}>
                <Text style={styles.exploreText}>Explore all</Text>
              </TouchableOpacity>
            ) : null}

          </View>
          {isLoadingTopSellerList ? (
            <FlatList
              data={data}
              renderItem={renderItemTopTalentSkeleton}
              keyExtractor={(item, index) => index.toString()}
              horizontal={true}
              showsHorizontalScrollIndicator={false}
              contentContainerStyle={styles.list}
            />
          ) : (
            <FlatList
              showsHorizontalScrollIndicator={false}
              data={topSellerList?.data}
              renderItem={renderTalents}
              keyExtractor={item => item.id}
              horizontal={true}
              ListEmptyComponent={renderEmptyTopTalentComponent}

            />
          )}
        </>
      );
    } else {
      return (
        <>
          {user?.user_type === 'buyer' && (
            <>
              <View style={styles.headerContainer}>
                <Text style={[styles.headerText, { color: Constant.blackColor, fontWeight: '700' }]}>Popular Services</Text>
                {TopGigList?.data ? (
                  <TouchableOpacity onPress={() => navigation.navigate('Gigs')}>
                    <Text style={styles.exploreText}>Explore all</Text>
                  </TouchableOpacity>
                ) : null}
              </View>
              {isLoadingTopGigList ? (
                <FlatList
                  data={data}
                  renderItem={renderItemGigSkeleton}
                  keyExtractor={(item, index) => index.toString()}
                  horizontal={true}
                  showsHorizontalScrollIndicator={false}
                  contentContainerStyle={styles.list}
                />
              ) : (
                <FlatList
                  showsHorizontalScrollIndicator={false}
                  data={TopGigList?.data}
                  renderItem={renderTopGigs}
                  keyExtractor={item => item.id}
                  horizontal={true}
                  ListEmptyComponent={renderEmptyGigComponent}

                />
              )}
            </>
          )}

          <>
            <Text style={[styles.headerText, { color: Constant.blackColor, fontWeight: '700' }]}>Recent Posted Jobs</Text>
            {isLoadingProjects ? (
              <FlatList
                data={data}
                renderItem={renderItemJobSkeleton}
                keyExtractor={(item, index) => index.toString()}
                showsHorizontalScrollIndicator={false}
                contentContainerStyle={{ marginTop: 10 }}
              />
            ) : (
              <FlatList
                showsHorizontalScrollIndicator={false}
                data={projectsData?.data}
                renderItem={renderJobs}
                keyExtractor={item => item.id}
                ListEmptyComponent={renderEmptyJobComponent}

              />
            )}

            {projectsData?.data ? (
              <View style={styles.buttonContainer}>
                <Button
                  backgroundColor="white"
                  text="Load More"
                  onPress={() => navigation.navigate('Projects')}
                  color={"#585858"}
                />
              </View>
            ) : null}

          </>

          {user?.user_type === 'buyer' && (
            <>
              <View style={styles.headerContainer}>
                <Text style={[styles.headerText, { color: Constant.blackColor, fontWeight: '700' }]}>Top Talents</Text>
                {topSellerList?.data ? (
                  <TouchableOpacity onPress={() => navigation.navigate('Freelancers')}>
                    <Text style={styles.exploreText}>Explore all</Text>
                  </TouchableOpacity>
                ) : null}

              </View>
              {isLoadingTopSellerList ? (
                <FlatList
                  data={data}
                  renderItem={renderItemTopTalentSkeleton}
                  keyExtractor={(item, index) => index.toString()}
                  horizontal={true}
                  showsHorizontalScrollIndicator={false}
                  contentContainerStyle={styles.list}
                />
              ) : (
                <FlatList
                  showsHorizontalScrollIndicator={false}
                  data={topSellerList?.data}
                  renderItem={renderTalents}
                  keyExtractor={item => item.id}
                  horizontal={true}
                  ListEmptyComponent={renderEmptyTopTalentComponent}

                />
              )}
            </>
          )}
        </>
      );
    }
  };

  return (
    <ImageBackground
      source={require('../../assets/images/background.png')}
      style={[
        styles.container,
        { height: '40%', resizeMode: 'contain', backgroundColor: '#F4F4FB' },
      ]}>
      <SafeAreaView style={{ flex: 1 }}>
        <ScrollView
          showsVerticalScrollIndicator={false}
          style={{ paddingHorizontal: 10 }}>
          <Image
            resizeMode="contain"
            style={{ alignSelf: 'center', width: 120, height: 60 }}
            source={require('../../assets/images/logo_name.png')}
          />
          <Search />
          {
            renderContent()
          }

          {/* {isLoadingProjects ? (
            <FlatList
              data={data}
              renderItem={renderItemGigSkeleton}
              keyExtractor={(item, index) => index.toString()}
              horizontal={true}
              showsHorizontalScrollIndicator={false}
              contentContainerStyle={styles.list}
            />
          ) : (
            renderContent()
          )} */}
        </ScrollView>
      </SafeAreaView>
    </ImageBackground>
  );
};

export default Home;


