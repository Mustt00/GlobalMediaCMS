<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS İçerik Yönetim Sistemi Paneli</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #ffffff;
            background-color: #121212;
            /* Karanlık tema için temel arka plan */
            display: flex;
        }

        h1,
        h2,
        h3,
        p {
            margin: 0;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #1f1f1f;
            /* Admin login renkleri */
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
        }

        .sidebar h2 {
            color: #00bcd4;
            /* Vurgulu renk */
            margin-bottom: 20px;
            font-size: 24px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }

        .sidebar ul li a:hover {
            color: #00bcd4;
        }

        /* Ana İçerik */
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #1f1f1f;
            /* Admin login renkleri */
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .logout-btn {
            background-color: #00bcd4;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #00bcd4;
        }

        /* Dashboard Kartları */
        .dashboard {
            display: flex;
            gap: 20px;
        }

        .card {
            flex: 1;
            background-color: #1f1f1f;
            /* Admin login renkleri */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .card h3 {
            color: #00bcd4;
            /* Vurgulu renk */
            margin-bottom: 10px;
            font-size: 20px;
        }

        .card p {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Globalmedia CMS</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Kullanıcılar</a></li>
            <li><a href="#">İçerikler</a></li>
            <li><a href="#">Ayarlar</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h1>Hoş Geldiniz, Admin!</h1>
            <button class="logout-btn" onclick="window.location.href='/admin/login';">Çıkış Yap</button>
        </header>
        <section class="dashboard">
            <div class="card">
                <h3>Toplam Kullanıcı</h3>
                <p>120</p>
            </div>
            <div class="card">
                <h3>Yeni İçerikler</h3>
                <p>35</p>
            </div>
            <div class="card">
                <h3>Yorumlar</h3>
                <p>75</p>
            </div>
        </section>
    </div>
</body>

</html>
