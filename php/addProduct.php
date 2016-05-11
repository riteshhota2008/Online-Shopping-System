<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>SRMKart | Add Products</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</head>
<body>

<h1 style="text-align: center;">Add Products</h1>
<div class="row">
    <form class="col s12"  method="post">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Product Name" name="product_name" id="product_name" type="text" class="validate">
                <label for="product_name"></label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Pattern" name="Pattern" id="Pattern" type="text" class="validate">
                <label for="Pattern"></label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Occasion" name="Occasion" id="Occasion" type="text" class="validate">
                <label for="Occasion"></label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Ideal For" name="Ideal_For" id="Ideal_For" type="text" class="validate">
                <label for="Ideal_For"></label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Sleeve" name="Sleeve" id="Sleeve" type="text" class="validate">
                <label for="Sleeve"></label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Brand Fit" name="Brand_Fit" id="Brand_Fit" type="text" class="validate">
                <label for="Brand_Fit"></label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Fabric" name="Fabric" id="Fabric" type="text" class="validate">
                <label for="Fabric"></label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Fit" name="Fit" id="Fit" type="text" class="validate">
                <label for="Fit"></label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Style Code" name="Style_Code" id="Style_Code" type="text" class="validate">
                <label for="Style_Code"></label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Price" name="price" id="price" type="text" class="validate">
                <label for="price"></label>
            </div>

        </div>
        <br>
        <button class="btn waves-effect waves-light" type="submit" name="submit" style="margin-left: 44%">Submit
            <i class="material-icons right">send</i>
        </button>

    </form>
</div>


<?php
require("config.php");
if(isset($_POST["submit"])){


    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=databasename",$username,$password);//replace dbname with databasename

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO products(product_name,Pattern,Occasion,Ideal_For,Sleeve,Brand_Fit,Fabric,Fit,Style_Code,price)
VALUES ('".$_POST["product_name"]."','".$_POST["Pattern"]."','".$_POST["Occasion"]."','".$_POST["Ideal_For"]."','".$_POST["Sleeve"]."','".$_POST["Brand_Fit"]."','".$_POST["Fabric"]."','".$_POST["Fit"]."','".$_POST["Style_Code"]."','".$_POST["price"]."')";
if ($dbh->query($sql)) {
header("Location: ../index.html");
}
else{
header("Location: ../index.html");
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>



</body>
</html>