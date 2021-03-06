//Este archivo va a tener la soperaciones tipicas para comunicarse con el controlador

//getConsolas
const getConsolas = async ()=>{
    let resp = await axios.get("api/consolas/get");
    return resp.data;
};
//crearConsolas

const crearConsola = async(consola)=>{
    let resp = await axios.post("api/consolas/post", consola, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};