<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
    </head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $password = "";

        $connet = mysqli_connect($host, $user, $password);
        $base = mysqli_select_db($connet, "szkola");

        $sql = "SELECT id, imie, nazwisko, klasa, pesel FROM ucznowie WHERE id = 1";
        $result = $connet->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo  "<h1>". "id: " . $row["id"]. " - Name: " . $row["imie"]. " ". $row["nazwisko"]. "<br></h1>";
            }
        } else {
            echo "0 results";
        }
    ?>
</body>
</html>