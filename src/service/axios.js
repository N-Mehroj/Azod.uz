import axios from "axios";

axios.defaults.baseURL = "https://u12149.xvest5.ru/api/"
// axios.defaults.baseURL = "http://127.0.0.1:8000/api/"

axios.interceptors.request.use(config => {
    const token = localStorage.getItem('token')
    const authorization = token ? `Token ${token}` : ''
    config.headers.Authorization = authorization
    return config
})
export default axios