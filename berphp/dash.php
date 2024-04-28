<!DOCTYPE html>
<html lang="en">
<head class="header">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <title>Document</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

    body {
        display: flex;
        background-position: contain;
        background-size: cover;
        background-image: url('dash.jpg');
        background-repeat: no-repeat;
        height: 100vh;
        overflow: hidden; 
    }
    @media screen and (max-width: 768px) {
    body {
        background-size: contain;
    }
}

.dash {
    margin-top: 107px;
    background: rgb(255, 49, 49);
    background: linear-gradient(90deg, rgba(255, 49, 49, 1) 6%, rgba(255, 145, 77, 1) 89%);
    width: 20%;
    height: 893px;
    border: 4px solid black;
    margin-left: 9%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    position: relative;
    
}

.header {
    z-index: -1;
    border-end-end-radius: 50px;
    border-end-start-radius: 50px;
    margin-left: 10%;
    position: absolute;
    display: flex;
    width: 90%;
    height: 13%;
    background: rgb(255, 49, 49);
}

.side {
    border: 4px solid black;
    z-index: 2;
    position: absolute;
    display: flex;
    width: 10%;
    height: 100%;
    background: linear-gradient(90deg, rgba(255, 49, 49, 1) 6%, rgba(255, 145, 77, 1) 89%);
}

.ubos{
    z-index: -1;
    margin-top: 20%;
  

}



.me{
    
    justify-content: center;
    border: 1px solid black;

}
.lahi{
    background-color: white;
}

img {
    position: absolute;
    width: 150px;
    margin-top: 15%;
    transform: translateY(-50%);
    right: 120px; 
}
a{
    color: black;
    text-decoration: none;
}
.image{
    position: absolute;
    width: 280px;
    margin-top: 22%;
    transform: translateY(-50%);
    right: 235px; 

}
.image1{
    position: absolute;
    width: 150px;
    margin-top: 23%;
    transform: translateY(-50%);
    right: 25px; 
}
.h1{
    position: absolute;
    font-size: 20px;
    margin-top: 4%;
    margin-left: 50px;
}
.h11{
    position: absolute;
    font-size: 20px;
    margin-top: 4%;
    margin-left: 350px;

}
.p{
    font-size: 25px;
    gap:10px;
    text-align: center;
    justify-content: center;
    position: absolute;
    margin-top: 10%;
    border: 2px solid black;
    height:130px;
    width: 230px;
    padding: 15px;
    margin-left:  30%;
    background-color: white;
}
.pp{
    background: linear-gradient(90deg, rgba(255, 49, 49, 1) 6%, rgba(255, 145, 77, 1) 89%);
    font-size: 25px;
    gap:10px;
    text-align: center;
    justify-content: center;
    position: absolute;
    margin-top: 10%;
    border: 2px solid black;
    height:130px;
    width: 230px;
    padding: 15px;
    margin-left: 46%;
    background-color: white;
}
.ppp{
    font-size: 25px;
    gap:10px;
    text-align: center;
    justify-content: center;
    position: absolute;
    margin-top: 20%;
    border: 2px solid black;
    height:130px;
    width: 230px;
    padding: 15px;
    margin-left: 46%;
    background-color: white;
}

.pppp{
    background: linear-gradient(90deg, rgba(255, 49, 49, 1) 6%, rgba(255, 145, 77, 1) 89%);
    font-size: 25px;
    gap:10px;
    text-align: center;
    justify-content: center;
    position: absolute;
    margin-top: 20%;
    border: 2px solid black;
    height:130px;
    width: 230px;
    padding: 15px;
    margin-left:  30%;
    background-color: white;
}

.imgg{
    height:38%;
    width: 65%;
    margin-top: 39%;
    right: 2.5%;
    text-align: center;
    position: absolute;
    
}


.first {
    
    margin-top: 15%;
    position: relative;
    margin-left: 120px; 
}

.first h2 {
    
    margin-left: 12%;
}

.first {
    position: relative; 
}

.first h2{
    font-size: 25px;
   
}
.ha{
    display: flex;
    margin-top: 5%;
}
.ha1{
    
    display: flex;
    margin-top: 15%;
}

.box1{
    position: absolute;
    background: linear-gradient(90deg, rgba(255, 49, 49, 1) 6%, rgba(255, 145, 77, 1) 89%);
    font-size: 50px;
    width: 550px;
    background-color: white;
    margin-top: 10%;
    height:300px;
    border: 2px  black;
    justify-content: center;
    text-align: center;
    margin-left: 63%;
    padding: 15px;
}

p{
    font-size: 20px;
}
.wa{
    color: white;
    position: absolute;
    margin-left: 40%;
    margin-top: 60%;
    word-spacing: 129px;
    
    
}
.wa1{
    color: white;
    margin-top: 30.5%;
    position: absolute;
    margin-left: 33%;
}
.wa2{
    color: white;
    margin-top: 36.5%;
    position: absolute;
    margin-left: 33%;
}
.wa3{
    color: white;
    margin-top: 42%;
    position: absolute;
    margin-left: 33%;
}
.wa4{
    color: white;
    margin-top: 47.5%;
    position: absolute;
    margin-left: 34%;
}
.btn{
    text-decoration: underline;
    font-size: 25px;
    background: rgb(255, 49, 49);
    height: 47px;
    width: 200px;
    margin-left: 13%;
    margin-top: 40%;
    position: absolute;
    border: 5px solid black;
}
.my{
    width: 50px;
    margin-top: 20%;
    position: absolute;
    margin-left: 40%;
}

.m1{
    margin-top: 1.5%;
    margin-right: 15%;
    font-size: 30px;
}
</style>
<body>
    
    <div class="header"></div>
    <div class="side"></div>

    <div class="dash">
        <div class="first">
            <img src="dash.webp">
            <h2>AMA <br> ADMIN</h2>
         
        </div> 
  <div class="ubos">
    <div class="lahi">
        <h1 class="me">Dashboard</h1>
  
    </div>
            <a href="Product.php"><h1 class="me">Products</h1></a>
            <a href="sales.php"> <h1 class="me">Sales</h1></a>
            <a href="accounts.php"> <h1 class="me">Accounts</h1></a>
    </div>
</div>




<button class="btn"><a href="index.php">Sign Out</button></a>

<p class="p">8 <br> Weekly New Menu's</p>

<p class="pp">10,342<br> Today's Total Income</p>

<p class="ppp">16 <br> Today's Total Order</p>

<p class="pppp">16 <br> Total Order Received</p>





<div class="box1">
    <p>Best Sale</p>
    <h1 class="h1">Chocolate Dedication Cake</h1>
    <img class="image" src="dassh.webp">
    <h1 class="h11">EVERDAY BUNDLE 1</h1>
    <img class="image1" src="dasssh.webp">
    
</div>
  <img class="imgg" src="dash.png">
 

  <p class="wa">Day1 Day2 Day3 Day4 Day5 Day6 Day7</p>

  <p class="wa1">6000 </p>
  <p class="wa2">4000 </p>
  <p class="wa3"> 2000  </p>
  <p class="wa4"> 0</p>

  <div class="m1">
    <h1>Inventory Management System<h1>    
</div> 

</body>
</html>