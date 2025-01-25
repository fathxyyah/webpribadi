<?php
    // Daftar catatan diary (bisa diganti dengan database di masa depan)
    $diary_entries = [
        [
            "title" => "Hari yang Menyenangkan",
            "date" => "25 Januari 2025",
            "text" => "Hari ini aku ngerjain tugas sama teman-temanku sampe malam!"
        ],
        [
            "title" => "Hujan Sepanjang Hari",
            "date" => "23 Januari 2025",
            "text" => "Pulang dari kampus hujannya deres PAKE BANGET... dingin brr"
        ],
        [
            "title" => "Pekerjaan yang Sibuk",
            "date" => "22 Januari 2025",
            "text" => "Huhuhuhu seharian aku cuma fokus ngerjain tugas"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Catatan Diary</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: url('https://source.unsplash.com/1920x1080/?notebook,diary') no-repeat center center/cover;
            background-color: #332763;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            backdrop-filter: blur(5px);
        }

        h1 {
            color: #fceb28;
            font-size: 32px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
        }

        .diary-container {
            width: 80%;
            max-width: 600px;
        }

        .diary-entry {
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .diary-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .diary-date {
            font-size: 14px;
            color: gray;
            margin-bottom: 10px;
        }

        .diary-text {
            font-size: 16px;
            line-height: 1.5;
        }

    </style>
</head>
<body>

    <h1>📜 Fath's Diary </h1>

    <div class="diary-container">
        <?php foreach ($diary_entries as $entry): ?>
            <div class="diary-entry">
                <div class="diary-title"><?= $entry["title"]; ?></div>
                <div class="diary-date"><?= $entry["date"]; ?></div>
                <div class="diary-text"><?= $entry["text"]; ?></div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
