const apiUrl= 'http://192.168.79.17:5000/';
const searchBox= document.getElementById('search-box');
const selectBox= document.getElementById('select-box');
const submitButton= document.getElementById('submit');
const display= document.getElementById('area');


const submitHandler=async(e)=>
{
    e.preventDefault;
    try{
        const res =await fetch(apiUrl + 'searchall');
        const data= await res.json();

        const homestayNames=data[0]['Homestay_name']
        display.innerHTML=`<p> ${homestayNames} </p>`;
    }
    catch(e){
        display.innerHTML=`<p> No data load </p>`;
    }
}
submitButton.onclick = submitHandler;
