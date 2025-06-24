<?php
// api/index.php (DIAGNOSTIK - HANYA UNTUK UJI COBA)

// Ini adalah kode PHP paling sederhana yang hanya mencetak HTML.
// Tujuannya adalah untuk melihat apakah Vercel mengeksekusi PHP ini.

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '    <title>Hello from Vercel PHP Test!</title>';
echo '    <style>';
echo '        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; background-color: #f0f0f0; }';
echo '        .container { text-align: center; background-color: white; padding: 40px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }';
echo '        h1 { color: #333; }';
echo '        p { color: #666; }';
echo '    </style>';
echo '</head>';
echo '<body>';
echo '    <div class="container">';
echo '        <h1>Hello from Vercel PHP!</h1>';
echo '        <p>If you see this, PHP is executing correctly on Vercel.</p>';
echo '        <p>PHP Version: ' . phpversion() . '</p>';
echo '        <p>Next step: Revert to Laravel\'s api/index.php and check logs for database errors.</p>';
echo '    </div>';
echo '</body>';
echo '</html>';

// Pastikan tidak ada karakter lain setelah ?> jika Anda memilih untuk menutup tag PHP
?>