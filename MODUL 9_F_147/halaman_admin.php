<html>
<head><title>Halaman Admin</title>
<body background='gambar2.jpg'>
<marquee>Assalamu'alaikum Warahmatullahi Wabarokatu</marquee>
    <br>
    <center>
    <?php
        session_start();
        echo "Anda berhasil login sebagai ".$_SESSION['username']." dan terdaftar sebagai ".$_SESSION['status'];
    ?>
    <br>
    <h1><font color='Green'>Selamat Datang Admin</font></h1>
    <p>Halaman ini merupakan halaman Admin. Hanya Admin yang dapat mengakses halaman ini. </p>
    Silahkan logout dengan menekan link <a href="logout.php"> logout </a>
</body>
</html>