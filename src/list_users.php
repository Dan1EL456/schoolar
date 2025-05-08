<?php
    include('../config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align = "center">
      <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>E-mail</th>
            <th>Status</th>
            <td>...</td>
      </tr>
      <tr>
            <td>Daniel</td>
            <td>Gomez</td>
            <td>danne@mail.com</td>
            <td>Active</td>
            <td>
                <img src = "icons/pencil.png" width ="15">
                <img src = "icons/search.png" width ="15">
                <img src = "icons/technology.png" width ="15">
                
            </td>
      </tr> 
      <?php
            //Here code
            $sql = "SELECT";
      ?>
</body>
</html>