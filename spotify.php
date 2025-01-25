<?php
    // Informasi Playlist
    $playlistTitle = "Let's listen to this playlist!";
    $playlistDescription = "Playlist yang Fathiyyah suka dengar 🎵";
    $spotifyEmbedURL = "https://open.spotify.com/embed/playlist/4s5Vl50mMSI5lGE2AoEzRp?utm_source=generator";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Fathiyyah</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'poppins', sans-serif;
            color: aliceblue;
            background-color: #100635;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            max-width: 800px;
            background: rgba(255, 255, 255, 0.264);
            padding: 20px;
            box-shadow: 0 5px 10px rgba(228, 200, 200, 0.1);
            border-radius: 20px;
            text-align: center;
        }

        .header {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            border-bottom: 3px solid #333;
            padding-bottom: 10px;
        }

        .spotify-container {
            margin-top: 20px;
        }

        iframe {
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header"><?= $playlistTitle; ?></div>
        <p style="margin-bottom: 20px; font-size: 18px;"><?= $playlistDescription; ?></p>
        <div class="spotify-container">
            <iframe style="border-radius:12px" src="<?= $spotifyEmbedURL; ?>" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
    </div>

</body>
</html>
