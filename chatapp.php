<?php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="displaymsg.js"></script>
    <link rel="icon" href="chat.png"></lin>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        /* Button used to open the chat form - fixed at the bottom of the page */
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            bottom: 23px;
            right: 50px;
            width: 270px;
        }

        /* The popup chat - hidden by default */
        .chat-popup {
            /* display: none; */
            position: fixed;
            bottom: 0;
            right:200px;
            border: 50 px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width textarea */
        .form-container textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
            resize: none;
            min-height: 200px;
        }

        /* When the textarea gets focus, do something */
        .form-container textarea:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/send button */
        .form-container .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }

        body {
            margin: 0;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            position: fixed;
            top: 0;
            z-index: 1;
            width: 63.5%;
            background-color: #f1f1f1;
        }

        .header h2 {
            text-align: center;
        }

        .progress-container {
            width: 100%;
            height: 8px;
            background: #ccc;
        }

        .progress-bar {
            height: 8px;
            background: #04AA6D;
            width: 0%;
        }

        .content {
            padding: 50px 0;
            margin: 3px auto 0 50px;
            width: 60%;
            overflow-y: scroll;
        }

        .container {
            
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
            background-color:rgb(88, 86, 86);
        }

        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .container img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }
    </style>
</head>

<body >


    <div class="header">
       <img style="width:5%;float:right;" src="chat.png" /> <h2>Chat Now</h2>
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>

    <div class="content">
        <h3 id="room"></h3>
        <!-- <div class="container"> -->
          
            <!-- <p>Hello. How are you today?</p>
            <span id="msg" class="time-right"></span> -->
           
    </div>

    <script>
        // When the user scrolls the page, execute myFunction 
        window.onscroll = function () { myFunction() };

        function myFunction() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        }
    </script>
    <!-- <button class="open-button" onclick="openForm()">Chat</button> -->

    <div class="chat-popup" id="myForm">
        <form action="receive.php" method="post" class="form-container" >
            <h2>Chat</h2>
            <label for="name"><b>Name</b></label>
            <div class="form-group mx-sm-3 mb-3">
                <input type="text" class="form-control" name="names" placeholder="Name" required>
            </div>
            <label for="msg"><b>Message</b></label>
            <textarea placeholder="Type message.." class="form-control" name="msg" required></textarea>

            <button type="submit" class="btn" onsubmit="display()">Send</button>
            <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
        </form>
    </div>

    <script>
            // function openForm() {
            //     document.getElementById("myForm").style.display = "block";
            // }

    //     function closeForm() {
    //         document.getElementById("myForm").style.display = "none";
    //     }
    // </script>

</body>

</html>