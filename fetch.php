<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch</title>
</head>
<body>
    <?php
    include 'connect.php';
    $queryS= "SELECT * FROM `info`";
    $result= mysqli_query($con,$queryS);
    echo "<table border='1' width=30%>
            <tr>
            <th>Id</th>
            <th>username</th>
            <th>Password</th>";

    while($user= mysqli_fetch_assoc($result))
    {
        echo"<tr>";
        echo "<td>".$user['id']."</td>";
        echo "<td>".$user['username']."</td>";
        echo "<td>".$user['password']."</td>";
        echo"</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>
</html>