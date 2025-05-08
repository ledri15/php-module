<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border: 1px solid black;
            border-collapse: collapse;
        }

        td,th{
            padding: 10px 20px;
        }

    </style>
</head>
<body>
    <?php

    $users = $getusers -> FetchAll 

    ?>

    <table>
    <th>id</th>
    <th>name</th>
    <th>surname</th>
    <th>email</th>

<tbody>
    <?php
    foreach($user as $users){
    ?>


       <table>
        
        
       </table>


<?php

    }

?>

        
</tbody>
    </table>
</body>
</html>