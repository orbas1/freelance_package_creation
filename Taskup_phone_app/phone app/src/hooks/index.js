import { useQuery } from '@tanstack/react-query';
import { useDispatch } from 'react-redux';
import {
  fetchLanguages,
  fetchLocations,
  fetchSkills,
  fetchSellerLevels,
  fetchGigCategories,
  fetchTags,
  fetchGigDeliveryTimes,
  fetchProjectDurations,
  fetchProjectLocation,
  fetchBusinessTypes,
} from '../redux/slices/globalSlice';
import {
  RecentProjectsListing,
  ProjectsDetails,
  ProjectsListing,
  TopSeller,
  getSellersList,
  TopGigs,
  GigDetails,
  GigsListing,
  SellerDetails,
  InvoicesListing,
  getAccountStats,
  DisputeListing,
  sellerEducation,
  getSavedItem,
  getPaymentMethod,
  getBillingInformation,
  getCountryState
} from '../api/networkCalls'

export const useFetchProjectDetail = (params, token) => {
  return useQuery({
    queryKey: ['projectDetail', params],
    queryFn: () => ProjectsDetails(params, token),
    staleTime: 0,
    cacheTime: 0,
  });
};


export const useFetchRecentProjects = (params, token) => {
  return useQuery({
    queryKey: ['recentProjectsListing', params],
    queryFn: () => RecentProjectsListing(params, token),
    staleTime: 0,
    cacheTime: 0,
    refetchOnWindowFocus: true,
    refetchOnMount: true,
    refetchOnReconnect: true,
  });
};

export const useFetchProjectsListing = (params, token) => {
  return useQuery({
    queryKey: ['projectsListing', params],
    queryFn: () => ProjectsListing(params, token),
  });
};

export const useFetchTopSeller = (params, token) => {
  return useQuery({
    queryKey: ['seller', params],
    queryFn: () => TopSeller(params, token),
  });
};

export const useFetchSellersList = (params, token) => {
  return useQuery({
    queryKey: ['sellerList', params],
    queryFn: () => getSellersList(params, token),
  });
};

export const useFetchSellerDetails = (params, token) => {
  return useQuery({
    queryKey: ['sellerDetails', params],
    queryFn: () => SellerDetails(params, token),
    staleTime: 0,
    cacheTime: 0,
  });
};

export const useFetchTopGigs = (params, token) => {
  return useQuery({
    queryKey: ['topGigs', params],
    queryFn: () => TopGigs(params, token),
    staleTime: 0,
    cacheTime: 0,
    refetchOnWindowFocus: true,
    refetchOnMount: true,
    refetchOnReconnect: true,
  });
};

export const useFetchGigDetails = (params, token) => {
  return useQuery({
    queryKey: ['gigsDetails', params],
    queryFn: () => GigDetails(params, token),
    staleTime: 0,
    cacheTime: 0,
  });
};

export const useFetchGigsListing = (params, token) => {
  return useQuery({
    queryKey: ['gigsListing', params],
    queryFn: () => GigsListing(params, token),
  });
};

export const useFetchInvoiceListing = (params, token) => {
  return useQuery({
    queryKey: ['invoiceListing', params],
    queryFn: () => InvoicesListing(params, token),
  });
};

export const useFetchSellerEducationListing = (token) => {
  return useQuery({
    queryKey: ['sellerEducation'],
    queryFn: () => sellerEducation(token),
  });
};

export const useFetchDisputeListing = (params, token) => {
  return useQuery({
    queryKey: ['DisputeListing', params],
    queryFn: () => DisputeListing(params, token),
  });
};



export const useFetchAccountStatus = (token) => {
  return useQuery({
    queryKey: ['accountStatus'],
    queryFn: () => getAccountStats(token),
  });
};


export const useFetchFavouriteListing = (params, token) => {
  return useQuery({
    queryKey: ['FavouriteListing', params],
    queryFn: () => getSavedItem(params, token),
  });
};

export const useFetchPaymentMethod = (token) => {
  return useQuery({
    queryKey: ['PaymentMethod'],
    queryFn: () => getPaymentMethod(token),
  });
};

export const useFetchBillingInformation = (token) => {
  return useQuery({
    queryKey: ['BillingInformation'],
    queryFn: () => getBillingInformation(token),
  });
};

export const useFetchCountyrStateInfo = (param) => {
  return useQuery({
    queryKey: ['CountyrStateInfo'],
    queryFn: () => getCountryState(param),
  });
};

export const useFetchAllTaxonomies = () => {
  const dispatch = useDispatch();

  const fetchAll = () => {
    dispatch(fetchLanguages());
    dispatch(fetchLocations());
    dispatch(fetchSkills());
    dispatch(fetchSellerLevels());
    dispatch(fetchGigCategories());
    dispatch(fetchTags());
    dispatch(fetchGigDeliveryTimes());
    dispatch(fetchProjectDurations());
    dispatch(fetchProjectLocation());
    dispatch(fetchBusinessTypes());
  };

  return fetchAll;
};