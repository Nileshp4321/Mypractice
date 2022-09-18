
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Regestration Form</title>
    <link rel="stylesheet" href="Home.css" />
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        header h1 {
            color: white;
            background-color: rgb(86, 119, 211);
            border: none;
            width: 100%;
            height: 35px;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
        }

        #hone {
            text-align: center;
            font-size: 30px;
            background-color: rgb(177, 99, 250);
            border-radius: 6px;
            padding: 8px;
        }
        #hone:hover
        {
            transform: scale(1.01);
        }

        .container {
            display: flex;
            justify-content: center;
        }

        .inputmain {
            border-radius: 20px;
            border: none;
            border: 2px solid black;
            width: 200px;
            padding: 6px;
            margin-left: 120px;
            outline: none;
            width: 350px;
            margin-left: 100px;
            outline: none;
            width: 350px;
         }
         .inputmain:hover
         {
             transform:scale(1.03);
         }

        #input1 {
            position: relative;
            left: 38px;
        }

        #input3 {
            position: relative;
            right: 4px;
        }

        #input4 {
            position: relative;
            right: 10px;
        }

        #input5 {
            position: relative;
            left: 46px;
        }

        #input6 {
            position: relative;
            right: 18px;
        }

        #input7 {
            position: relative;
            left: 42px;
        }
        #input8
        {
          position:relative;
          right:25px; 
        }


        .container1 {
            display: flex;
            justify-content: center;
        }

        .container2 {
            display: flex;
            justify-content: center;
        }

        .con {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        button {
            color: white;
            font-size: 18px;
            border-radius: 40px;
            background-color: blueviolet;
            border: none;
            margin-left: 5px;
            margin-top: 50px;
            width: 130px;
            border: 2px solid black;
            padding: 5px;
            outline: none;
        }

        #b2 {
            font-size: 18px;
            border-radius: 40px;
            background-color: white;
            margin-left: 5px;
            margin-top: 50px;
            border: none;
            width: 130px;
            border: 2px solid black;
            background-color: white;
            color: blueviolet;
            padding: 5px;
            outline: none;
        }

        #b1:hover {
            cursor: pointer;
            background-color: rgb(167, 100, 230);
        }

        #b2:hover {
            cursor: pointer;
            background-color: rgb(248, 241, 241);
        }

        .cbtn {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .item1 {
            50
        }
    </style>
</head>

<body>
    <header>
        <h1>Goverment Engineering Boys Hostel, Ajmer</h1>
        <nav>
            <ul>
                <li><a id="a1" href="new.html">Home</a></li>
                <li><a id="a2" href="FillForm.php">Fill Form</a></li>
                <li><a id="a3" href="List.php">Total List</a></li>
                <li><a id="a4" href="contactus.html" name="Contact">About Us</a></li>
            </ul>
        </nav>
    </header><br>
    
    <h1 id="hone">Hostel Regestration Form</h1>
    <form action="Form.php" method="POST">
        <div class="con">
            <div class="container">
                <h3 class="h21">Name<input name="name" class="inputmain" id="input1" type="text"
                        placeholder="Enter Your Name" required /> </h3>
            </div>
            <div class="container1">
                <h3 class="h22">Father Name<input name="fname" class="inputmain" id="input2" type="text"
                        placeholder="Enter Father Name" required /> </h3>
            </div>
            <div class="container2">
                <h3 class="h23">Mother Name<input name="mname" class="inputmain" id="input3" type="text"
                        placeholder="Enter Mother Name" required /> </h3>
            </div>
            <div class="container2">
                <h3 class="h24">Mobile Number<input name="mob" class="inputmain" id="input4" type="digit" maxlength="10"
                        placeholder="Enter Mobile Number" required /> </h3>
            </div>
            <div class="container2">
                <h3 class="h24">Email<input name="email" class="inputmain" id="input7" type="email" placeholder="Enter Email" required /> </h3>
            </div>
            <div class="container2">
                <h3 class="h25">D.o.b<input name="dob" type="date" class="inputmain" id="input5"
                        placeholder="Enter your Dob" required /> </h3>
            </div>
            <div class="container2">
                <h3 class="h26">Registration Date<input name="registration" type="date" class="inputmain" id="input6"
                        placeholder="Enter Today Date" required /> </h3>
            </div>
            <div class="container2">
                <h3 class="h27">Allocated Room No.<input name="Roomno" class="inputmain" type="digit" maxlength="3" id="input8"
                        placeholder="Enter Room Number" required /> </h3>
            </div>
        </div>
        <div class="cbtan">
            <button class="item1" id="b1" type="submit">Submit</button>
            <button class="item1" id="b2" type="reset">Reset</button>
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <a href="#"><img src="fbicon.png" width="50px" height="45px" /></a>
        <a href="#"><img src="igicon.png" width="50px" height="45px" /></a>
        <a href="#"><img src="tw.png" width="50px" height="45px" /></a>
    </footer>
</body>

</html>

