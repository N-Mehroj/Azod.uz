import axios from "./axios";

const BlogService = {
    blogs(){
        return axios.get('blogs')
    },
    blogShow(id){
        return axios.post('blogShow', {id})
    },
}

export default BlogService