<?php
    $nama = "Fathiyyah Nurul Afifah";
    $panggilan = "Fath / Fatiya";
    $jurusan = "Sistem Informasi";
    $semester = 4;
    $bio = "Gak terlalu suka ngoding, tapi sekalinya berhasil berasa engineer...";
    $instagram = "https://www.instagram.com/fathxyyah/";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard <?= $nama; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #E6E6FA;
            background-image: url('gifuburubur.gif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }
        .logout-btn {
            background-color: #d6ff66;
            color: rgb(94, 0, 0);
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            width: fit-content;
        }
        .logout-btn:hover {
            background-color: #fff;
        }
        .colorful-marquee {
            width: 100%;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 25px;
            font-weight: bold;
        }
        .biodata-container {
            display: flex;
            align-items: center;
            background-color: #ffffff38;
            padding: 40px;
            max-width: 800px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(70, 196, 255, 0.692);
        }
        .biodata-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fceb28;
            font-family: 'Poppins', sans-serif;
        }
        .biodata-text {
            max-width: 400px;
            text-align: justify;
            color: #fffffd;
        }
        .image-container {
            flex: 0 0 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        img {
            max-width: 100%;
            border-radius: 30px;
        }
        .social-link {
            display: flex;
            align-items: center;
            margin-top: 10px;
            text-decoration: none;
            color: #68a4e0;
        }
        .social-link i {
            margin-right: 10px;
            font-size: 24px;
        }
        .exercises-container {
            background-color: #ffffff49;
            padding: 40px;
            max-width: 800px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(110, 192, 255, 0.711);
            font-family: 'Poppins', sans-serif;
        }
        .exercises-title {
            text-align: center;
            margin-bottom: 20px;
            color: #fceb28;
        }
        .latihan-exercises {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
        .exercise-card {
            background-color: #1a3652;
            border: 1px solid #d6ff66;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .exercise-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .exercise-card a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="colorful-marquee">
        <marquee behavior="scroll" direction="left">
            <span>Now You're in <?= $nama; ?>'s Space</span>
        </marquee>
    </div>

    <div class="biodata-container">
        <div class="biodata-content">
            <h2> ★ Profile ★</h2>
            <div class="biodata-text">
                <p>Halo! Namaku <?= $nama; ?>, biasa dipanggil '<?= $panggilan; ?>'.  
                    Saat ini aku adalah mahasiswa semester <?= $semester; ?> di Jurusan <?= $jurusan; ?>.  
                    <?= $bio; ?>  

                    <br>Selamat menjelajah web singkat ini ya!<br>

                    Ayo temenan di Instagram:
                </p>
                <a href="<?= $instagram; ?>" target="_blank" class="social-link">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
            </div>
        </div>
        <div class="image-container">
            <img src="fath.jpg" alt="<?= $nama; ?>">
        </div>
    </div>

    <div class="exercises-container">
        <h2 class="exercises-title">Fath's Thingy</h2>
        <div class="latihan-exercises">
            <div class="exercise-card">
                <a href="diary.php">Diary of my daily</a>
            </div>
            <div class="exercise-card">
                <a href="spotify.php">Playlist</a>
            </div>
        </div>
        <a href="login.php" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>

</body>
</html>
