<?php

$insert = false;
if(isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aggarbatti";
    $con = mysqli_connect($server, $username, $password, $dbname);

    if(!$con){
        die("failed to connect to database" + mysqli_connect_error());
    }
    $name = $_POST["name"];
    $Product = $_POST["product"];
    $phoneNo = $_POST["phone"];
    $address = $_POST["address"];
    $sql= "INSERT INTO orders (productname, name, phone , address) VALUES ('$Product', '$name', '$phoneNo', '$address')";
  

    if($con->query($sql)==true){
        $insert=true;
    }
    else{
        echo "ERROR: $sql $con->error";
    }
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rs 50 Aggarbatti</title>
  </head>
  <style media="screen">

  body{
    background: #F6FFF1;
  }
  .buyingsection{
    margin:2rem;
  }
    .About{
      display:flex;

    }
    .text p{
      margin-left:1rem;
    }

    .details{

      display:flex;

    }
    .muthya{

      display: flex;
      justify-content: space-between;


      overflow-x: hidden;
      overflow-x: auto;
    }
    .product1{
      display: flex;


      margin:2px;
    text-align: center;



    }
    .Pouches{

      display: flex;
      justify-content: space-between;


      overflow-x: hidden;
      overflow-x: auto;
    }

    .product1 img{
      border: solid 2px black;
    }
    table{
      border:solid 2px black;
      display:flex;
      width:100%;

    }
    form{
      display: flex;
      justify-content:center;

    }
    .sectioninfo2{
      margin: 0 2rem;
    }
    td{
      width:50vw;
      border:collapse;
    }
    .More-items{
      margin-top:5rem;
      margin-bottom:5rem;
    }
    .Related-products{
      margin-top:5rem;
      margin-bottom:5rem;
    }

    .hoverimage{
      display: flex;
      flex-direction: column;
    }
    tr:nth-child(odd) {
  background-color: #dddddd;
}

#image1{
  margin-left:1rem;
  border: solid 2px black;
}
.Got-any-questions label{
  display: flex;
  justify-content: center;
  font-size:25px;

}
  </style>
  <body>
     
    <div class="About">
      <div class="hoverimage">
        <button type="button" id="img1" onmouseover="img1click()" onclick="img1click()">Hover over me </button>
        <br>
        <button type="button" id="img2" onmouseover="img2click()" onclick="img2click()">Hover over me</button>
        <br>
        <button type="button" id="img3" onmouseover="img3click()" onclick="img3click()">Hover over </button>
        <br>
        <button type="button" id="img4" onmouseover="img4click()" onclick="img4click()">Hover over me</button>

      </div>
      <div class="img">
        <img id="image1" src="WhatsApp Image 2020-10-22 at 2.20.49 PM.jpeg" alt="">
      <!--  <label id="2stimage"><img src="WhatsApp Image 2020-10-22 at 2.20.49 PM.jpeg" alt=""></label>
        <label id="3stimage"><img src="WhatsApp Image 2020-10-22 at 2.20.49 PM.jpeg" alt=""></label>
        <label id="4stimage"><img src="WhatsApp Image 2020-10-22 at 2.20.49 PM.jpeg" alt=""></label>
-->
      </div>

      <div class="text">
        <p>
          <label>Rs 50 Rose Franganance Aggarbatti</label>
          <br>
          <br>
          Lorem ipsum dolor sit amet, consectetur adipisicing el
          <br>it, sed do eiusmod te
          <br>mpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ve
          <br>niam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qu
          <br>i officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class="buyingsection">
      <form action="index.php" method="post">
        <div class="infosection1">
          <input type="text" placeholder="Product name " value="Rs 50 Rose Franganance Aggarbatti" name="product">
          <br>
           <br><input type="text" placeholder="Name" name="name">
         <br> 
         <br> <input type="phone" placeholder="phone number" name="phone"> 
        </div>
       <div class="sectioninfo2">
        <textarea name="address" id="adress" cols="30" rows="7" name="adress"></textarea>
        <br>
        <input type="submit"> 
       
       <br> <?php
      if($insert==true){
          echo "your order will be delivered in a week";
      }
      ?>
       </div>
       
       
      </form>
    </div>
    <div class="Related-products">
      <h3>Related Prodcts</h3>
      <section class="muthya">

      <div class="product1">
        <a href="#"><img src="WhatsApp Image 2020-10-22 at 2.20.49 PM.jpeg" alt=""></a>
      </div>
      <div class="product1">
        <a href="#"><img src="WhatsApp Image 2020-10-22 at 2.23.06 PM.jpeg" alt=""></a>
      </div>
      <div class="product1">
      <a href="#"><img src="WhatsApp Image 2020-10-22 at 2.24.00 PM.jpeg" alt=""></a>
      </div>
      <div class="product1">
      <a href="#"><img src="WhatsApp Image 2020-10-20 at 6.50.42 PM.jpeg" alt=""></a>
    </div>
    <div class="product1">
    <a href="#"><img src="WhatsApp Image 2020-10-22 at 2.31.33 PM.jpeg" alt=""></a>
  </div>
  <div class="product1">
  <a href="#"><img src="WhatsApp Image 2020-10-20 at 6.50.42 PM.jpeg" alt=""></a>
</div>
<div class="product1">
<a href="#"><img src="WhatsApp Image 2020-10-22 at 2.33.45 PM.jpeg" alt=""></a>
</div>
</div>
<div class="Got-any-questions">
<center>  <label>Got any Questions</label>
  <p>
    Ask Question to get More info
  </p>
  <input type="text" placeholder="Write in here">
  </center>
</div>
<div class="More-items">
  <h3>More items</h3>
  <section class="Pouches">

        <div class="product1">
          <a href="#"><img src="WhatsApp Image 2020-10-22 at 2.24.49 PM.jpeg" alt=""></a>
        </div>
        <div class="product1">
          <a href="#"><img src="WhatsApp Image 2020-10-22 at 2.25.14 PM.jpeg" alt=""></a>
        </div>
        <div class="product1">
        <a href="#"><img src="WhatsApp Image 2020-10-22 at 2.26.41 PM.jpeg" alt=""></a>
        </div>
        <div class="product1">
        <a href="#"><img src="WhatsApp Image 2020-10-22 at 2.28.43 PM.jpeg" alt=""></a>
      </div>
      <div class="product1">
      <a href="#"><img src="WhatsApp Image 2020-10-22 at 2.29.03 PM.jpeg" alt=""></a>
    </div>
    <div class="product1">
    <a href="#"><img src="WhatsApp Image 2020-10-20 at 6.50.42 PM.jpeg" alt=""></a>
  </div>
  <div class="product1">
  <a href="#"><img src="WhatsApp Image 2020-10-20 at 6.50.42 PM.jpeg" alt=""></a>
</div>
        </section>
</div>
    <div class="details">
    <table>

      <tr>
        <td>
            Name
          </td>
          <td>
            RedRose
          </td>
      </tr>
      <tr>
        <td>
          Weight

        </td>
        <td>
          300gms
        </td>
      </tr>
      <tr>
        <td>
          Franganance
        </td>
        <td>
          Rose
        </td>
      </tr>
      <tr>
        <td>
          Price
        </td>
        <td>
          RS 50
        </td>
      </tr>
      <tr>
        <td>
          Wholesale price:
        </td>
        <td>
          total price - 10%
        </td>
      </tr>
        <tr>
          <td>
            Wholesale Minimum qty
          </td>
          <td>
            25 packets
          </td>
        </tr>


    </table>
    </div>
  </body>
  <script type="text/javascript">
  var img2="WhatsApp Image 2020-10-20 at 6.50.42 PM.jpeg"
  var img3="WhatsApp Image 2020-10-22 at 2.29.03 PM.jpeg"
  var img4="WhatsApp Image 2020-10-22 at 2.26.41 PM.jpeg"
  var img1="WhatsApp Image 2020-10-22 at 2.20.49 PM.jpeg"

    document.getElementById('image1').src=img1;
    function img1click() {
      document.getElementById('image1').src=img1;

    }
    function img2click() {
      document.getElementById('image1').src=img2;

    }
    function img3click() {
      document.getElementById('image1').src=img3;

    }
    function img4click() {
      document.getElementById('image1').src=img4;

    }

  </script>
</html>


