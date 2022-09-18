setInterval(refresh,1000);
function refresh()
{
    req=new XMLHttpRequest();
    req.open("POST","fetchmsg.php",true);
    req.send();
    req.onload=function(){
        if(req.readyState==4&&req.status==200)
        {
            // alert("hello");
            document.getElementsByClassName("content")[0].innerHTML=req.responseText;
        }
        document.body.scrollBottom = 0;
        document.documentElement.scrollBottom = 0;
    }
}
