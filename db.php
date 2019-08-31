<?php
require_once 'config.php';

function showUsers()
{
    $db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_TABLE) or die(mysqli_connect_error());

    $query = "
    SELECT * FROM users
    ";

    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    echo "Ilość  rekordów: " . mysqli_num_rows($result);
    breakLine(2);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "
            <div class=\"record\">
                id: " . $row['id'] . "<br />
                login " . $row['login'] . "<br />
                hasło: " . $row['password'] . "<br />
                opis: " . $row['description'] . "<br />
                utworzony: " . $row['creation_time'] . "
            </div>
        ";
    }

    // breakLine(2);
    // $result = mysqli_query($db, $query) or die(mysqli_error($db));
    // while($row = mysqli_fetch_assoc($result)){
    //     echo print_r($row);
    //     breakLine();
    // }

    mysqli_close($db);
}
