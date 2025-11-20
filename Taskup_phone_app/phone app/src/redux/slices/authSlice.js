// src/store/slices/authSlice.js
import { createSlice, createAsyncThunk } from '@reduxjs/toolkit';
import { loginUser, registerUser, logoutUser, uploadProfilePhoto, updateProfileInfo, switchRole } from '../../api/networkCalls';


export const login = createAsyncThunk('auth/login', async (credentials, thunkAPI) => {
    try {
        const response = await loginUser(credentials);
        return {
            user: response.data.user,
            token: response.data.token,
            message: response.data.message,
        };
    } catch (error) {
        return thunkAPI.rejectWithValue(error?.response?.data);
    }
});

export const register = createAsyncThunk('auth/register', async (userData, thunkAPI) => {
    try {
        const response = await registerUser(userData);
        return {
            user: response.data.user,
            token: response.data.token,
        };
    } catch (error) {
        return thunkAPI.rejectWithValue(error.response.data);
    }
});

export const logout = createAsyncThunk('auth/logout', async (token, thunkAPI) => {
    try {
        const response = await logoutUser(token);
        return response.data;
    } catch (error) {
        return thunkAPI.rejectWithValue(error.response.data);
    }
});


export const updateProfilePhotoThunk = createAsyncThunk(
    'auth/updateProfilePhoto',
    async ({ base64Image, token }, thunkAPI) => {
        try {
            const response = await uploadProfilePhoto(base64Image, token);
            return response.data;
        } catch (error) {
            return thunkAPI.rejectWithValue(error.response.data);
        }
    }
);

export const updateProfile = createAsyncThunk('auth/updateProfile', async ({ formData, token }, thunkAPI) => {
    try {
        const response = await updateProfileInfo(formData, token);

        return response?.data;
    } catch (error) {
        return thunkAPI.rejectWithValue(error.response.data);
    }
});

export const switchProfile = createAsyncThunk(
    'auth/switchProfile',
    async (_, { getState, rejectWithValue }) => {
        const state = getState();
        const token = state.auth.token;
        try {
            const response = await switchRole(token)
            return response.data;
        } catch (error) {
            return rejectWithValue(error.response ? error.response.data : error.message);
        }
    }
);

const authSlice = createSlice({
    name: 'auth',
    initialState: {
        user: null,
        token: null,
        loading: false,
        error: null,
    },
    // reducers: {},
    reducers: {
        clearToken: (state) => {
            state.token = null;
            state.user = null;
        },
    },
    extraReducers: (builder) => {
        builder
            .addCase(login.pending, (state) => {
                state.loading = true;
                state.error = null;
            })
            .addCase(login.fulfilled, (state, action) => {
                state.loading = false;
                state.user = action.payload.user;
                state.token = action.payload.token;
            })
            .addCase(login.rejected, (state, action) => {
                state.loading = false;
                state.token = action.payload.data.token;
                state.error = action.payload;
            })
            .addCase(register.pending, (state) => {
                state.loading = true;
                state.error = null;
            })
            .addCase(register.fulfilled, (state, action) => {
                state.loading = false;
                state.user = action.payload.user;
                state.token = action.payload.token;
            })
            .addCase(register.rejected, (state, action) => {
                state.loading = false;
                state.error = action.payload;
            })
            .addCase(logout.pending, (state) => {
                state.loading = true;
                state.error = null;
                state.user = null;
                state.token = null;
            })
            .addCase(logout.fulfilled, (state) => {
                state.loading = false;
                state.user = null;
                state.token = null;
            })
            .addCase(logout.rejected, (state, action) => {
                state.loading = false;
                state.token = null;
                state.user = null;
                state.error = action.payload;
            }).addCase(updateProfilePhotoThunk.pending, (state) => {
                state.loading = true;
                state.error = null;
            })
            .addCase(updateProfilePhotoThunk.fulfilled, (state, action) => {
                state.loading = false;
                state.user = {
                    ...state.user,
                    image: action.payload.image,
                };
            }).addCase(updateProfile.pending, (state) => {
                state.loading = true;
                state.error = null;
            })
            .addCase(updateProfile.fulfilled, (state, action) => {
                state.loading = false;
                state.user = {
                    ...state.user,
                    ...action.payload,
                };
                state.successMessage = "Profile updated successfully";
            })
            .addCase(updateProfile.rejected, (state, action) => {
                state.loading = false;
                state.error = action.payload;
                state.erorMessage = "An error occurred while updating the profile. Please try again.";
            })
            .addCase(switchProfile.pending, (state) => {
                state.loading = true;
                state.error = null;
            })
            .addCase(switchProfile.fulfilled, (state, action) => {
                state.loading = false;
                state.user = {
                    ...state.user,
                    ...action.payload,
                };
                state.successMessage = "Profile switched successfully";
            })
            .addCase(switchProfile.rejected, (state, action) => {
                state.loading = false;
                state.error = action.payload;
                state.errorMessage = "An error occurred while switching the profile. Please try again.";
            });;

    },
});

export const { clearToken } = authSlice.actions;

export default authSlice.reducer;
