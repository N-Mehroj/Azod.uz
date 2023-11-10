import { defineStore } from "pinia";
// import Location from "../service/geo";
import AuthService from "../service/auth";
import CommentService from "../service/comment";

export const useStoreData = defineStore("dataStore", {
  state: () => {
    return {
      user: null,
      isLoading: false,
      error: null,
      isLogedIn: false,
      
    };
  },
  actions: {
    users (user) {
      return new Promise((resolve, reject) => {
        this.isLoading = true;
        this.error = null;
        AuthService.user(user)
          .then((response) => {
            this.user = response.data.user;
            // console.log(response.data.jti);
            window.localStorage.setItem("token", response.data.jti);
            this.isLogedIn = true;
            resolve(response.data);
          })
          .catch((error) => {
            this.error = error;
            this.isLogedIn = false;
            reject(error.response.data);
          })
          .finally(() => {
            this.isLoading = false;
          });
      });
    },  
    getUsers() {
      return new Promise((resolve) => {
        this.isLoading = true;
        AuthService.getUser()
          .then((response) => {
            this.user = response.data;
            // window.localStorage.setItem("token", response.data.jti);
            this.isLogedIn = true;
            this.error = null;
            resolve(response.data);
          })
          .catch(() => {
            this.user = null;
            this.isLogedIn = false;
            this.isLoading = false;
          })
          .finally(() => {
            this.isLoading = false;
          });
      });
    }, 
    commentPush (data) {
      return new Promise((resolve, reject) => {
        this.isLoading = true;
        this.error = null;
        CommentService.pushCom(data)
          .then((response) => {
            // this.user = response.data.user;
            // console.log(response.data);
            this.isLogedIn = true;
            resolve(response.data);
          })
          .catch((error) => {
            this.error = error;
            this.isLogedIn = false;
            reject(error.response.data);
          })
          .finally(() => {
            this.isLoading = false;
          });
      });
    }, 
    commentPull (data) {
      return new Promise((resolve, reject) => {
        this.isLoading = true;
        this.error = null;
        CommentService.getCom(data)
          .then((response) => {
            // this.user = response.data.user;
            // console.log(response.data);
            this.isLogedIn = true;
            resolve(response.data);
          })
          .catch((error) => {
            this.error = error;
            this.isLogedIn = false;
            reject(error.response.data);
          })
          .finally(() => {
            this.isLoading = false;
          });
      });
    }, 
  },
});

