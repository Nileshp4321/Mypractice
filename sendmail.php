<?php
if(isset($_POST['verify']))
{

// $servername="localhost";
// $username="nileshp";
// $password="1234";
// $dbname="otp";
$email=$_POST['email'];
// $conn=mysqli_connect($servername,$username,$password,$dbname);
// if(!$conn)
// {
//    die("Connection failed due to:".mysqli_connect_error());
// }
$otp=rand(1000000,9000000);
// echo"<h1 style='color:red;'>".$otp.'</h1>';
$to=$email;
$subject="OTP";
$body="Your OTP is : ".$otp;
$header="From: nileshpushkarna12@gmail.com";
if(mail($to,$subject,$body,$header))
{
    echo"Email send successfully sent to ".$email;
}
else
{
    echo"email sending failed";
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
        .container
        {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            width: 50vw;
            height: 50vh;
            background-color: rgb(245, 196, 106);
            padding: 0.4rem;
        }
        input
        {
            border: 2px solid black;
            margin: 2%;
            border-radius: 0.4rem;
            outline: none;
            padding: 0.2rem;
        }
        button
        {
           padding:0.4rem 1.8rem;
           background-color: rgb(255, 255, 255);
           border-radius: 0.8rem;
        }
        button:hover
        {
            border: 2px solid black;
            background-color: rgb(118, 181, 240);
        }

    </style>
</head>
<body>
    <form action="sendmail.php" method="post">
    <div class="container">
      <lable>Email</lable>
      <input type="email" required  name="email" />
      <button type="submit" name="verify">Verify</button>
      <button type="reset" name="verify">Reset</button>
    </div>
</form>
</body>
</html> 





































































<!-- 
    function sendMail($email,$otp)
{
   
    $mail=new PHPMailer();
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='nileshpushkarna1234@gmail.com';
    $mail->Password='1234';
    $mail->SMTPSecure='t1s';
    $mail->Port=587;
    $mail->SetFrom('nileshpushkarna1234@gmail.com',"NILESH PUSHKARNA");
    $mail->AddReplayTo('nileshpushkarna1234@gmail.com','NILESH PUSHKARNA');
    $mail->AddAddrees($email);
    $mail->isHTML(true);
    $bodycontent="Your OTP is ".$otp;
    $mail->Body=$bodycontent;
    $result=$mail->send();
    if(!$result)
    {
        echo"Mail error".$mail->ErrorInfo();
    }
    else
    {
        return($result);

    }
   


 }

$sql="INSERT INTO OTP(Email,otp)values('$email','$otp')";
$r=sendMail($email,$otp);



   
 -->