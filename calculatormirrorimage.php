<?php
$servername="localhost";
$username="nileshp";
$password="1234";
$dbname="History";
$first=$_POST['first'];
$second=$_POST['second'];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection Error".mysqli_connect_error());
}
else
{   
         if($_SERVER['REQUEST_METHOD']="POST")
         {
          
          $sql="INSERT into History(first,second,time) VALUES ('$first','$second',NOW())";
          mysqli_query($conn,$sql);   
         }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .maincon {
            display: flex;
            align-items: center;
            justify-content: center;
            
        }

        .container {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            width: 25rem;
            height: fit-content;
            background-image: linear-gradient(to right,rgb(245, 245, 245), rgb(67, 93, 196));
            border-radius: 0.5rem;
        }

        input {
            padding: 0.5rem;
            margin: 0.2rem;
            outline: none;
            border-radius: 0.2rem;
            background-image: linear-gradient(to right, rgb(245, 245, 245));
        }

        .logo {
            display: flex;
            flex-direction: row;
            padding: 1rem;
        }

        button {
            font-size: 2rem;
            text-align: center;
            margin-left: 0.1rem;
            margin-bottom: 0.3rem;
            opacity: 0.9;
            padding: 0.5rem;
            color: rgb(7, 7, 7);
            background-image: linear-gradient(to bottom, rgb(67, 93, 196), rgb(245, 247, 255));
            width: 4rem;
            border: 0.01rem solid black;
            border-radius: 0.5rem;
        }

        #res {
            visibility: hidden;
        }

        #divresult {
            display: flex;
            justify-content: center;
            visibility: hidden;
           
        }
        #result
        {
            padding: 0.5rem;
            outline: none;
            border-radius: 0.2rem;
            background-color: white;
            
        }

        #divresult h3 {
            visibility: visible;
        }

        #buttonr {
            display: flex;
            justify-content: center;
        }
        a
        {
            padding: 30px;
            overflow:visible
            background-image: linear-gradient(to bottom, rgb(67, 93, 196), rgb(245, 247, 255));
            text-decoration: none;
        }
    </style>
    <script>
        function add() {
            let first = document.getElementById('first').value;
            let second = document.getElementById('second').value;
            let result = parseFloat(first) + parseFloat(second);
            document.getElementById('result').style.visibility = 'visible';
            document.getElementById('result').value = result;
            document.getElementById('res').style.visibility = 'visible';

        }
        function sub() {
            let first = document.getElementById('first').value;
            let second = document.getElementById('second').value;
            let result = parseFloat(first) - parseFloat(second);
            document.getElementById('result').style.visibility = 'visible';
            document.getElementById('result').value = result;
            document.getElementById('res').style.visibility = 'visible';
        }
        function multi() {
            let first = document.getElementById('first').value;
            let second = document.getElementById('second').value;
            let result = parseFloat(first) * parseFloat(second);
            document.getElementById('result').style.visibility = 'visible';
            document.getElementById('result').value = result;
            document.getElementById('res').style.visibility = 'visible';
        }
        function div() {
            let first = document.getElementById('first').value;
            let second = document.getElementById('second').value;
            let result = parseFloat(first) / parseFloat(second);
            document.getElementById('result').style.visibility = 'visible';
            document.getElementById('result').value = result;
            document.getElementById('res').style.visibility = 'visible';
        }
        function currentResult() {
            let current = document.getElementById('result').value;
            current = parseFloat(current);
            document.getElementById('first').value = current;
            document.getElementById('second').value = 0;
            document.getElementById('res').style.visibility = 'visible'
        }

        function allclear() {
            let first = document.getElementById('first').value = null;
            let second = document.getElementById('second').value = null;
            document.getElementById('result').style.visibility = 'hidden';
            document.getElementById('result').value = null;
            document.getElementById('res').innerHTML = null;
        }

    </script>
</head>

<body>
    
      <form action="calculatormirrorimage.php" method="POST ">
      <div class="maincon">
        <div class="container">
            <h1 id="cal">Calculator</h1>
            <span id="flable">First Number</span>
            <input type="tel" id="first" name="first" />
            <span id="slable">Second Number</span>
            <input type="tel" id="second" name="second"/>
            <div id="divresult">
                <h3 id="res">Result:-</h3>
                <input id="result" type="tel" disabled />
            </div>

            <div class="logo">

                <div id="operation">
                    
                    <button type="submit" onclick="allclear()" >AC</button>
                    <button  onclick="add()" >+</button>
                    <button  onclick="sub()" >-</button>
                    <button  onclick="multi()" >*</button>
                    <button  onclick="div()" >/</button>
                    </form>
                    <?php $sql="SELECT*FROM History";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                echo"<h2>Calculator History</h2>";
                while($row=mysqli_fetch_row($result))
                {  
                    echo"  
                    <style>
                       th 
                       {
                        border:3px solid black;
                        padding:10px;
                       }
                       td
                       {
                        border:3px solid black;
                        padding:10px;
                       }
                       </style>
                       <table style='border: 1px solid black; border-collapse:collapse;'>
                <tr>
                
                <th>S.no</th>
                <th>First</th>
                <th>Second</th>
                <th>Time</th>
                </tr>        
                       <td>$row[0]</td>
                       <td>$row[1]</td><br>
                       <td>$row[2]</td>
                       <td>$row[3]</td>
                     </table>
                    
                    ";
                    
                }
                    
                }
                ?>
         
                </div>
               
            </div>
           
    </div>

    
           
    </div>
    <div>
        
        
    </div>
</body>

</html>


