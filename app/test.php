<!DOCTYPE html>
<html>
<head>
    <title>Ramalan Jodoh Digital</title>
</head>
<body>
    <h2>🔮 Ramalan Jodoh Digital</h2>
    <form method="POST">
        Nama Kamu: <input type="text" name="nama1" required><br>
        Nama Doi : <input type="text" name="nama2" required><br>
        <input type="submit" value="Cek Kecocokan">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        function ramalJodoh($nama1, $nama2) {
            $gabungan = strtolower($nama1 . $nama2);
            $angkaCinta = crc32($gabungan) % 101;
            
            if ($angkaCinta >= 80) {
                $pesan = "🔥 Kalian ditakdirkan bersama selamanya!";
            } elseif ($angkaCinta >= 50) {
                $pesan = "💖 Bisa jadi, asalkan gak lupa bales chat.";
            } elseif ($angkaCinta >= 30) {
                $pesan = "😅 Hmmm... kayaknya butuh usaha ekstra.";
            } else {
                $pesan = "🚫 Jodohnya beda server, Sob.";
            }

            return "❤️ Kecocokan antara $nama1 dan $nama2: $angkaCinta% — $pesan";
        }

        echo "<p>" . ramalJodoh($_POST['nama1'], $_POST['nama2']) . "</p>";
    }
    ?>
</body>
</html>
