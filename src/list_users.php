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
    <table align = "center" border ="1">
      <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>E-mail</th>
            <th>Status</th>
            <th>Photo</th>
            <td>...</td>
      </tr>
     
      <?php
            //Here code
            $sql = "
                select
                    id,
                    firstname,
                    lastname,
                    email,
                    case when status = true then 'Active' else 'No Active' end as status 
                from
                    users
            ";
            $res = pg_query($conn, $sql);
            if(!$res){
                echo "Query error";
                exit;
            }

            while ($row = pg_fetch_assoc($res)){
                echo "<tr>";
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['lastname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td align = 'center'><img src = 'photo_users/Imagen_user.png' width = '20'></td>";
                echo "<td>";
                echo "<a href = 'http://127.0.0.1/schoolar/src/delete.php'><img src = 'icons/pencil.png' width ='15'></a>";
                echo "<a href = ''><img src = 'icons/technology.png' width ='15'></a>";
                echo "<a href = ''><img src = 'icons/search.png' width ='15'></a>";
                echo "</td>";
                echo "</tr>";

            }

      ?>
</body>
</html>