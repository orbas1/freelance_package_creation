import axios from 'axios';

const api = axios.create({
    baseURL: 'https://BASE_URL.com/api/',
});

// GET Requests

// Fetch global taxonomies
export const fetchTaxonomies = async (endpoint) => {
    try {
        const response = await api.get(endpoint);
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Resend email
export const resendEmail = async (token) => {
    try {
        let config = {};
        if (token) {
            config.headers = {
                Authorization: `Bearer ${token}`
            };
        }
        const response = await api.get('resend-email', config);
        return response.data;
    } catch (error) {
        throw error;
    }
};

export const RecentProjectsListing = async (params, token) => {
    try {
        const config = {
            params: params,
        };

        if (token) {
            config.headers = {
                Authorization: `Bearer ${token}`
            };
        }
        const response = await api.get('recent-projects', config);
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Projects listing
export const ProjectsListing = async (params, token) => {
    try {
        const config = {
            params: params
        };

        if (token) {
            config.headers = {
                Authorization: `Bearer ${token}`
            };
        }
        const response = await api.get('projects', config);
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Project details
export const ProjectsDetails = async (params, token) => {
    try {
        const config = {
            headers: {}
        };

        if (token) {
            config.headers.Authorization = `Bearer ${token}`;
        }
        const response = await api.get(`project/${params}`, config);
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Top seller
export const TopSeller = async (params, token) => {
    try {
        const config = {
            params: params
        };

        if (token) {
            config.headers = {
                Authorization: `Bearer ${token}`
            };
        }
        const response = await api.get('top-sellers', config);
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Sellers list
export const getSellersList = async (params, token) => {
    try {
        const config = {
            params: params
        };

        if (token) {
            config.headers = {
                Authorization: `Bearer ${token}`
            };
        }
        const response = await api.get('sellers', config);
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Country states list
export const getCountryState = async (param) => {
    if (param) {
        try {
            const response = await api.get(`country-states/${param}`);
            return response.data;
        } catch (error) {
            throw error;
        }
    }
};

// Seller details
export const SellerDetails = async (params, token) => {
    try {
        const config = {
            headers: {}
        };

        if (token) {
            config.headers.Authorization = `Bearer ${token}`;
        }
        const response = await api.get(`seller/${params}`, config);
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Top gigs
export const TopGigs = async (params, token) => {
    try {
        const config = {
            params: params
        };

        if (token) {
            config.headers = {
                Authorization: `Bearer ${token}`
            };
        }
        const response = await api.get('popular-gigs', config);
        return response.data;
    } catch (error) {
        throw error;
    }
};

export const GigDetails = async (params, token) => {
    try {
        const config = {
            headers: {}
        };

        if (token) {
            config.headers.Authorization = `Bearer ${token}`;
        }

        const response = await api.get(`gig/${params}`, config);
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Gigs listing
export const GigsListing = async (params, token) => {
    try {
        const config = {
            params: params
        };

        if (token) {
            config.headers = {
                Authorization: `Bearer ${token}`
            };
        }
        const response = await api.get('gigs', config);
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Invoices listing
export const InvoicesListing = async (params, token) => {
    try {
        const response = await api.get(`invoices?per_page=${params}`, {
            headers: {
                Authorization: `Bearer ${token}`
            }
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Dispute Listing 
export const DisputeListing = async (params, token) => {
    try {
        const response = await api.get(`disputes?per_page=${params}`, {
            headers: {
                Authorization: `Bearer ${token}`
            }
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Account Stats
export const getAccountStats = async (token) => {
    try {
        const response = await api.get(`account-stats`, {
            headers: {
                Authorization: `Bearer ${token}`
            }
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Saved Items
export const getSavedItem = async (params, token) => {
    try {
        const response = await api.get(`saved-items?type=${params}`, {
            headers: {
                Authorization: `Bearer ${token}`
            }
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Payment method 
export const getPaymentMethod = async (token) => {
    try {
        const response = await api.get(`payout-method`, {
            headers: {
                Authorization: `Bearer ${token}`
            }
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};

export const getBillingInformation = async (token) => {
    try {
        const response = await api.get(`billing-information`, {
            headers: {
                Authorization: `Bearer ${token}`
            }
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};

//sellerEducation
export const sellerEducation = async (token) => {
    try {
        const response = await api.get('educations', {
            headers: {
                Authorization: `Bearer ${token}`,
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};


//sellerEducation
export const getIdentifyVerification = async (token) => {
    try {
        const response = await api.get('identity-information', {
            headers: {
                Authorization: `Bearer ${token}`,
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};


// POST Requests

// Auth API - login
export const loginUser = async (userData) => {
    try {
        const response = await api.post('login', userData, {
            headers: {
                'Content-Type': 'application/json',
            },
        });

        return response.data;
    } catch (error) {
        throw error;
    }
};

// Auth API - register
export const registerUser = async (userData) => {
    try {
        const response = await api.post('register', userData);
        return response.data;
    } catch (error) {
        throw error;
    }
};

// Update password API
export const updatePassword = async (userData, token) => {
    try {
        const response = await api.post('change-password', userData, {

            headers: {
                Authorization: `Bearer ${token}`,
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};


// Update profile information
export const updateProfileInfo = async (profileData, token) => {
    try {
        const response = await api.post('update-profile-info', profileData, {
            headers: {
                'Content-Type': 'multipart/form-data',
                Authorization: `Bearer ${token}`,
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};


export const addNewEducationDetail = async (educationData, token) => {
    try {
        const response = await api.post('education', educationData, {
            headers: {
                Authorization: `Bearer ${token}`,
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};


// Delete Seller Education
export const deleteSellerEducation = async (id, token) => {
    try {
        const response = await api.delete(`delete-education/${id}`, {
            headers: {
                Authorization: `Bearer ${token}`,
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            }
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};


// Updated Seller Education
export const updateEducationDetails = async (id, educationData, token) => {
    try {
        const response = await api.post(`update-education/${id}`, educationData, {
            headers: {
                Authorization: `Bearer ${token}`,
            },
        });
        return response;
    } catch (error) {
        throw error;
    }
};


// Upload profile photo
export const uploadProfilePhoto = async (fileData, token) => {
    try {
        const response = await api.post('update-profile-photo', { file: fileData }, {
            headers: {
                Authorization: `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};


// Logout user
export const logoutUser = async (token) => {
    try {
        const response = await api.post('logout', {}, {
            headers: {
                Authorization: `Bearer ${token}`,
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};


export const updateBillingInformation = async (billingInfoData, token) => {
    try {
        const response = await api.post('billing-information', billingInfoData, {
            headers: {
                Authorization: `Bearer ${token}`,
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};

//Update saved item
export const updateSavedItem = async (param, token) => {
    try {
        const response = await api.post('favourite-item', param, {
            headers: {
                Authorization: `Bearer ${token}`,
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};

export const upDatePaymentMethod = async (param, token) => {
    try {
        const response = await api.post('setup-payout-method', param, {
            headers: {
                Authorization: `Bearer ${token}`,
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};


export const updatePrivacyInfo = async (param, token) => {
    try {
        const response = await api.post('update-privacy-info', param, {
            headers: {
                Authorization: `Bearer ${token}`,
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};


export const sendResentEmailLink = async (param) => {
    try {
        const response = await api.post('forget-password', param);
        return response.data;
    } catch (error) {
        throw error;
    }
};

export const switchRole = async (token) => {
    try {
        const response = await api.post('switch-profile', {}, {
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`,
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};

//upload Identification
export const uploadIdentification = async (formData, token) => {

    try {
        const response = await api.post('identity-information', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
                Authorization: `Bearer ${token}`,
            },
        });
        return response.data;
    } catch (error) {
        throw error;
    }
};
