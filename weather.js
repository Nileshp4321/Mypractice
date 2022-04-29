req=new XMLHttpRequest();
req.open("GET","https://api.openweathermap.org/data/2.5/weather?lat=13&lon=79&appid=acbdd35a4e01cb8681bcf09d0cbb02fe",true);

req.onreadystatechange=function(){
     if(req.readyState==4&&req.status==200)
     {
         let response=JSON.parse(req.responseText);
         console.log(response.weather);
         let weather=response.weather;
         weather.forEach(element => {
             let w=`<div id="title">${element["description"]}</div>`;
           document.getElementById("container").innerHTML=w;
            });
             
     }
     else
     {
         console.log("Some error is occured");
     }

}
req.send();
       