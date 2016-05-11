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

<h1 style="text-align: center;">Products</h1>
<table class="striped">
    <thead>
    <tr>
        <th data-field="id">ID</th>
        <th data-field="name">Name</th>
        <th data-field="price">Pattern</th>
        <th data-field="price">Occasion</th>
        <th data-field="price">Ideal For</th>
        <th data-field="price">Sleeve</th>
        <th data-field="price">Brand Fit</th>
        <th data-field="price">Fabric</th>
        <th data-field="price">Fit</th>
        <th data-field="price">Style Code</th>
        <th data-field="price">Price</th>

    </tr>
    </thead>

    <tbody>

<?php
include('config.php');
$result = $db->prepare("SELECT * FROM tablename ORDER BY id ASC");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
    echo '<tr>
        <td>'.$row['id'] . '</td><td>
      '.$row['product_name'].'
    </td><td>'.$row['Pattern'].'</td><td>'.$row['Occasion'].'</td><td>'.$row['Ideal_For'].'</td><td>'.$row['Sleeve'].'

</td><td>'.$row['Brand_Fit'].'</td><td>'.$row['Fabric'].'</td><td>'.$row['Fit'].'</td><td>'.$row['Style_Code'].'</td><td>'.$row['price'].'</td></tr>';
}
?>
    </tr>

    </tbody>
</table>

</body>
</html>