<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zjazd 5</title>
</head>
<body>
    <table>
    <tr>
    <td>Id</td>
    <td>Nazwa</td>
    <td>Gatunek</td>
    <td>Rok produkcji</td>
</tr>
    <?php
    $connection = mysqli_connect("localhost:3306","root","","PHPcw");

    if(!$connection){
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "SELECT * from movie";
    $result = mysqli_query($connection,$sql);

    while($row = mysqli_fetch_row($result)){
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "</tr>";

    }



    
    ?>
    </table>
    <br>
    <table>
    <tr>
    <td>Id</td>
    <td>Nazwa</td>
    <td>Gatunek</td>
    <td>Rok produkcji</td>
    <?php
    $resultArray = mysqli_query($connection, $sql);

    while($row = mysqli_fetch_array($resultArray)){
        echo "<tr>";
        echo "<td>". $row[0]. "</td>";
        echo "<td>". $row[1]. "</td>";
        echo "<td>". $row[2]. "</td>";
        echo "<td>". $row[3]. "</td>";
        echo "</tr>";
    }

    ?>
    </tr>
    </table>
    <br>

    <?php
    $resultCount = mysqli_query($connection, $sql);

    $rowCount=mysqli_num_rows($resultCount);

    echo "Liczba rzędów w zapytaniu: ". $rowCount;
    

    $insertSql="INSERT INTO movie (`name`,`genre`,`year`) VALUES ('Avengers','Action',2016)";

    $addResult = mysqli_query($connection, $insertSql);

    $resultCountAfter = mysqli_query($connection, $sql);

    $rowCountAfter = mysqli_num_rows($resultCountAfter);

    echo "<br>";
    echo "Liczba rzędów w zapytaniu: ". $rowCountAfter;
    
    mysqli_close($connection);
    ?>

    
</body>
</html>
