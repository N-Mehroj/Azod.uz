import axios from "./axios";

const CommentService = {
    pushCom(data){
        return axios.post('comment', {data})
    },
    getCom(data){
        return axios.get('commentGet?data='+`${data}`)
    },
}

export default CommentService