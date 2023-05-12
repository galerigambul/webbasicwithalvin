<?php

$host = "localhost";
$user = "root";
$pass = ""
$dbs  = databasemahasiswa

$conn = new mysqli($host, $user, $pass, $dbs);

if ($conn->connect_error) {
    die("No Connection to Database");
}

$sql = "SELECT * FROM table_databasemahasiswa";

if ($conn->query($sql)) {
    $hasil = $conn->query($sql);

    if(hasil->num_rows > 0) {
?>   


        <table border ="1" cellpadding="10" cellspacing="0">
        <?php
        while ($row = $hasil->fetch_assoc()) {
        ?>
        <tr>
        <?php
            echo "<td>".$row['NIM']."</td><td>"
            .$row['Nama']."</td><td>"
            .$row['NIM']."</td><td>"
            .$row['Jenis_Kelamin']."</td><td>"
            .$row['TPT_Lahir']."</td><td>"
            .$row['Alamat']."</td><td>"
        ?>
        </tr>
        <?php
        }
        ?>
        </table>
        <?php

    }
} else {
    echo "perintah gagal dijalankan";
}