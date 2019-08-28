<html>

<head>
    <meta charset="UTF-8">
    <title>DB testowa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$db = mysqli_connect("localhost", "pecix", "123qwe!@#QWE", "test") or die(mysqli_connect_error());

$query = "
    SELECT * FROM users
";

$result = mysqli_query($db, $query) or die(mysqli_error($db));

echo "Ilość  rekordów: ".mysqli_num_rows($result)."<br /><br />\n\n";

while($row = mysqli_fetch_assoc($result)){
    echo "<div class=\"record\">\n";
    echo "id: ".$row[id]."<br />\n";
    echo "login ".$row[login]."<br />\n";
    echo "hasło: ".$row[password]."<br />\n";
    echo "opis: ".$row[description]."<br />";
    echo "utworzony: ".$row[creation_time]."\n";
    echo "</div>\n\n";
}

// echo "<br /><br />";
// $result = mysqli_query($db, $query) or die(mysqli_error($db));
// while($row = mysqli_fetch_assoc($result)){
//     echo print_r($row)."<br />";
// }

mysqli_close($db);
?>
</body>
</html>