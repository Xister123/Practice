const countriesAPI = 'https://restcountries.com/v2/all';
let country=[];
const fetchdata =async()=>{
    fetch(countriesAPI)
    .then(response=>{
        if(respone != null){
            console.log("error")
        }
        return response.json;
    })
    .then(data=>{
        countries
    }
}