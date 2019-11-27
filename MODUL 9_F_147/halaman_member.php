<html>
<head><title>Halaman Member</title> </head>
<body background='gambar3.jpg'>
<marquee>Assalamu'alaikum Warahmatullahi Wabarokatu</marquee>
    <center>
    <?php
        session_start();
        echo "Anda berhasil login sebagai ".$_SESSION['username']." dan terdaftar sebagai ".$_SESSION['status'];
    ?>
    <br>
    <h1><font color='red'>Assalamu'alaikum Selamat Datang Member<font></h1>
    Silahkan logout dengan menekan link <a href="logout.php"> logout </a>
</body>
</html>