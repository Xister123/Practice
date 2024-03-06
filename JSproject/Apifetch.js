const catsAPI = 'https://api.thecatapi.com/v1/breeds';
let catheight=[];
const Fetchdata = async() =>{
    fetch(catsAPI)
    .then(response => {
        if(response != ok){
            console.log("error occure");
        }
        return response.json();
    })
    .then(data =>{
        catheight = data.map(cat =cat.height);
    })
    .catch(error =>{
        console.log("error");
    });
    setTimeout(() => {
        console.log('cat height',catheight);
    }, 2000);
} 