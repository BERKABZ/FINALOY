<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-image: url('product.png');
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
   height: 100vh;
}
@media screen and (max-width: 768px) {
    body {
        background-size: contain;
    }
}


h1 {
    margin-top: 0%;
    font-size: 80px;
    text-align: center;
    text-decoration: underline;
   
}

.h1{
    color: black;
    margin-top: 70px;
    background-color: rgb(201, 36, 36);
    text-align: center;
    height: 200px;
    width: 27%; 
    text-decoration: underline;
    font-size: 50px;
    border: 4px solid black;
    display: flex;
    align-items: center; 
    

}
 .h2{
    color: black;
    margin-top: 70px;
    background-color: rgb(201, 36, 36);
    text-align: center;
    height: 200px;
    width: 28%; 
    text-decoration: underline;
    font-size: 50px;
    border: 4px solid black;
    display: flex;
    align-items: center;  
    
 } 
 .h3{
    color: black;
    margin-top: 70px;
    background-color: rgb(201, 36, 36);
    text-align: center;
    height: 200px;
    width: 25%; 
    text-decoration: underline;
    font-size: 50px;
    border: 4px solid black;
    display: flex;
    align-items: center;  
    justify-content: center;
    
 }
 .bundle {
    color: black;
    margin-top: 70px;
    background-color: rgb(201, 36, 36);
    text-align: center;
    height: 200px;
    width: 30%; 
    text-decoration: underline;
    font-size: 50px;
    border: 4px solid black;
    display: flex;
    align-items: center;  
    
}
.tulo{
    color: black;
    margin-top: 70px;
    background-color: rgb(201, 36, 36);
    text-align: center;
    height: 200px;
    width: 33%; 
    text-decoration: underline;
    font-size: 50px;
    border: 4px solid black;
    display: flex;
    align-items: center;  

}

.box {
    text-align: center;
    margin-left: 230px;
    gap: 50px;
    display: flex;
}

.box1 {
    margin-left: 400px;
    gap: 50px;
    display: flex;
}
.bck img{
    margin-left: 10px;
    margin: 0;
    margin-top: 5px;
    width: 50px;
}
</style>
<body>
    <div class="bck">
        <a href="dash.php"> <img src="productB.png"></a>
     </div>
    <h1>CATEGORIES</h1>
    <div class="box">
        <a class= "h1" href="SPECIALITY CAKE.php"> SPECIALITY CAKE </a>
        <a class="h2" href="DEDICATION CAKE.php">DEDICATION CAKE</a>
        <a class="h3" href="ROLL CAKE.php">ROLL CAKE</a>
    </div>
    <div class="box1">
        <a class="tulo" href="PASTRIES.php">PASTRIES ,BREAD & DELICACIES</a>
        <a class="bundle" href="EVERYBUNDLE.php">EVERYDAY BUNDLE</a>
    </div>
</body>
</html>