<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <title>Vaibhav gupta</title>
    <style media="screen">

    .vaib{

    border-radius: 10px;
      margin: 15px;
        width: 50%;
        padding: 7px;
    }
    .manali{
      position:absolute;
      width: 1340px;

      z-index: -1;
    }
    .va{
      margin-top: 0px;
    }

    </style>

  </head>
  <body  >

    <div class="va" >
      <img src="manali.jpg" alt="manali" class="manali">
      <font color="red" size="5">
        <h1  align="center">Trip to Manali</h1>

        <h3 color="red" align="center">5 days trip by Vaibhav Gupta</h3>
        </font>


      <form align="center" class=""  method="POST" >
    <h3 align="center"> </h3>
     <input  type="text" name="name" placeholder="enter your Name" class="vaib">
      <input  type="text" name="age" placeholder="enter your Age" class="vaib">
       <input type="text" name="gender" value="" placeholder="enter your gender" class="vaib">
       <input type="text" name="email" value="" placeholder="enter your email" class="vaib">
       <input type="text" name="phone" value="" placeholder="enter your phone number" class="vaib">
       <input type="text" name="address" value="" placeholder="enter your address" class="vaib">
       <br>
       <input type="submit" name="submit" value="submit">
       <input type="reset" name="reset" value="reset">


      </form>

    </div>


  </body>
</html>
 <?php

include 'connection.php';
if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];


$insertquery=  " insert into registration( name, age, gender, email, phone, address)
 values ('$name','$age','$gender','$email','$phone','$address')";


$res = mysqli_query($con,$insertquery);
if($res){
  ?>
<script>
alert("data inserted properly");

</script>

  <?php
}else {
  ?>
<script>
alert("date not inserted properly");

</script>


  <?php
}


}

  ?>
