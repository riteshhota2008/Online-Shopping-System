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

<h1 style="text-align: center">Delete Products</h1>

<?php
include('config.php');
$result = $db->prepare("SELECT * FROM tablename ORDER BY id ASC");
$result->execute();
for($i=0; $row = $result->fetch(); $i++) {
    echo '<form method="get"> <ul class="collection with-header">
    <li class="collection-header"><h4>ID - #'.$row['id'] . '</h4></li>
    <li class="collection-item">Name -
      '.$row['product_name'].'
    </li>
    <li class="collection-item">Pattern - '.$row['Pattern'].' </li>
    <li class="collection-item">Occasion - '.$row['Occasion'].' </li>
    <li class="collection-item">Ideal For - '.$row['Ideal_For'].'</li>
    <li class="collection-item">Sleeve - '.$row['Sleeve'].'

 </li>
    <li class="collection-item">Brand Fit - '.$row['Brand_Fit'].' </li>
    <li class="collection-item">Fabric - '.$row['Fabric'].'</li>
    <li class="collection-item">Fit - '.$row['Fit'].'</li>
    <li class="collection-item">Style Code - '.$row['Style_Code'].'</li>
    <li class="collection-item">Price - Rs '.$row['price'].'</li>
    <li class="collection-item"> <button class="btn waves-effect waves-light" type="submit" name="delete" style="margin-left: 44%">Delete
        <i class="material-icons right">delete</i>
    </button> </li>
</ul></form><br><br>';
}
?>

<?php
include('config.php');
if(isset($_GET['delete'])){
    $sqlInsert = 'DELETE from products where id=:id';
    $preparedStatement = $conn->prepare($sqlInsert);
    $preparedStatement->execute(array(':id' => 1));
}
?>


</body>
</html>