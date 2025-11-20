import { createSlice, createAsyncThunk } from '@reduxjs/toolkit';
import { fetchTaxonomies } from '../../api/networkCalls';

const createFetchThunk = (name, type) => {
  return createAsyncThunk(`global/fetch${name}`, async () => {

    const response = await fetchTaxonomies(`taxonomies?type=${type}`);
    return response;
  });
};

const fetchLanguages = createFetchThunk('Languages', 'languages');
const fetchLocations = createFetchThunk('Countries', 'countries');
const fetchSkills = createFetchThunk('Skills', 'skills');
const fetchSellerLevels = createFetchThunk('SellerLevels', 'expert_levels');
const fetchGigCategories = createFetchThunk('GigCategories', 'gig_categories');
const fetchTags = createFetchThunk('Tags', 'tags');
const fetchGigDeliveryTimes = createFetchThunk('GigDeliveryTimes', 'gig_delivery_time');
const fetchProjectDurations = createFetchThunk('ProjectDurations', 'project_durations');
const fetchProjectLocation = createFetchThunk('ProjectLocation', 'project_locations');
const fetchBusinessTypes = createFetchThunk('BusinessTypes', 'business_types');

const initialState = {
  languages: [],
  countries: [],
  skills: [],
  sellerLevels: [],
  gigCategories: [],
  tags: [],
  gigDeliveryTimes: [],
  projectDurations: [],
  projectLocation: [],
  businessTypes: [],
  status: 'idle',
  error: null,
};

const globalSlice = createSlice({
  name: 'global',
  initialState,
  reducers: {},
  extraReducers: (builder) => {
    const handleFetch = (state, action, key) => {
      const { type } = action;
      if (type.endsWith('/pending')) {
        state.status = 'loading';
      } else if (type.endsWith('/fulfilled')) {
        state.status = 'succeeded';
        state[key] = action.payload;
      } else if (type.endsWith('/rejected')) {
        state.status = 'failed';
        state.error = action.error.message;
      }
    };

    const keys = {
      fetchLanguages: 'languages',
      fetchCountries: 'countries',
      fetchSkills: 'skills',
      fetchSellerLevels: 'sellerLevels',
      fetchGigCategories: 'gigCategories',
      fetchTags: 'tags',
      fetchGigDeliveryTimes: 'gigDeliveryTimes',
      fetchProjectDurations: 'projectDurations',
      fetchProjectLocation: 'projectLocation',
      fetchBusinessTypes: 'businessTypes'
    };

    Object.keys(keys).forEach((fetchThunk) => {
      builder.addMatcher(
        (action) => action.type.startsWith(`global/${fetchThunk}`),
        (state, action) => handleFetch(state, action, keys[fetchThunk])
      );
    });
  },
});

export {
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
};

export default globalSlice.reducer;
