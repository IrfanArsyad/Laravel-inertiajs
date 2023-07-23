import axios from 'axios'

const http = axios.create()

http.defaults.headers.common['Content-type'] = 'application/json; charset=utf-8'
http.defaults.headers.common['Accept'] = 'application/json'

export default http
