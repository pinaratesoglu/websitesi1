<?php
// Login formunun gönderildiği sayfa

// Kullanıcı adı ve şifre değişkenlerini POST isteğiyle al
$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcı adı ve şifre alanlarının boş olup olmadığını kontrol et
if (empty($username) || empty($password)) {
    // Eğer alanlardan biri boşsa, kullanıcıyı login sayfasına yönlendir
    header("Location: login.php");
    exit;
}

// Kullanıcı adının bir e-posta adresi olup olmadığını kontrol et
if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    // Eğer kullanıcı adı bir e-posta adresi değilse, kullanıcıyı login sayfasına yönlendir
    header("Location: login.php");
    exit;
}

// Kullanıcı adı ve şifre kontrolünü gerçekleştir
$studentNumber = substr($username, 0, strpos($username, 'b221210047@sakarya.edu.tr')); // Kullanıcı adından öğrenci numarasını çıkar
$expectedPassword = 'b221210047' . $studentNumber; // Beklenen şifre örneği

if ($password === $expectedPassword) {
    // Kontrol başarılı ise, kullanıcıya hoş geldin mesajını göster
    echo 'Hoşgeldiniz Pınar ' . $studentNumber;
} else {
    // Kontrol başarısız ise, kullanıcıyı login sayfasına yönlendir
    header("Location: login.php");
    exit;
}
?>
