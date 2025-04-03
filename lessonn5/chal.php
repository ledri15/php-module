<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chal.css">

    <title>Document</title>
</head>
<body>
    <table class="iphone-table">
        <tr>
            <th>Model</th>
            <th>In Stock</th>
            <th>Sold</th>
        </tr>
        <tr>
            <td>Iphone 14</td>
            <td>In Stock: 20</td>
            <td>Sold: 55</td>
        </tr>
        <tr>
            <td>Iphone 13</td>
            <td>In Stock: 14</td>
            <td>Sold: 104</td>
        </tr>
        <tr>
            <td>Iphone 12</td>
            <td>In Stock: 32</td>
            <td>Sold: 43</td>
        </tr>
        <tr>
            <td>Iphone 11</td>
            <td>In Stock: 40</td>
            <td>Sold: 11</td>
        </tr>
    </table>

    <?php

        $phone = array(
            array("Iphone 14", 20, 10),
            array("Iphone 13", 20, 10),
            array("Iphone 12", 20, 10),
            array("Iphone 11", 20, 10),
        );

        


        for ($row = 0; $row< 4; $row++){
            echo "<tr>";
            for($col = 0; $col< 3;$col++){
                echo "<td>" . $phone[$row][$col]. "</td>";
            }
            echo "</tr>"
        }.
        echo "</table>";
    
    
    
    
    ?>





</body>
</html>