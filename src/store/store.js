import { defineStore } from "pinia";
// import Location from "../service/geo";
// import AuthService from "../service/auth";

export const useStoreData = defineStore("dataStore", {
  state: () => {
    return {
      user: null,
      isLoading: false,
      modeData: false,
      error: null,
      isLogedIn: false,
      
    };
  },
  actions: {
    mode(mode) {
       this.modeData = mode;   
    },   
  },
});

