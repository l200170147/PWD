<html>
    <head>
        <title>Program Penjumlahan</title>
    </head>

    <body>
        <form method="POST" action="tugas1.php">
        <p>Nilai A adalah : <input type="text" name="nilai1" size="3"></p>
        <p>Nilai B adalah : <input type="text" name="nilai2" size="3"></p>
        <p><input type="submit" name="submit" value="Proses"></p>
        </form>

        <?php
        error_reporting (E_ALL ^ E_NOTICE);
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $hasil = $nilai1 + $nilai2 ;
        echo "Nilai A adalah $nilai1</br>";
        echo "Nilai B adalah $nilai2</br>";
        echo "Nilai A ditambah Nilai B adalah $hasil";
        ?>
    </body>
</html>