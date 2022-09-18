function ajax(str)
{
    if(str.length==0)
    {
        return;
    }
    else if(str.lengh==5)
    {
    eq=new XMLHttpRequest();
    eq.open("GET","ajax2.php?value="+str,true);
    eq.send();
    eq.onload=function(){
        if(eq.readyState==4&&eq.status==200)
        {
            // document.getElementById("span").style.visibility="visible";
         
               document.getElementById("span").innerHTML=eq.responseText;
            
        }
    }
}
}