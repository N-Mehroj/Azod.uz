import axios from "./axios";

const AuthService = {
    user (user){
        return axios.post('user', {user})
    },
    getUser(){
        return axios.get('/userData')   
    },
}

export default AuthService