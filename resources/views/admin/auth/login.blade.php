<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        /* Genel Ayarlar */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Konteyneri */
        .login-container {
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
        }

        /* Form Başlığı */
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8em;
            color: #00bcd4;
        }

        /* Form Elemanları */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 0.9em;
            margin-bottom: 8px;
            color: #cccccc;
        }

        input {
            width: 378px;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #333333;
            border-radius: 5px;
            background-color: #252525;
            color: #ffffff;
        }

        input:focus {
            outline: none;
            border-color: #00bcd4;
        }

        /* Giriş Butonu */
        .btn {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            background-color: #00bcd4;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }

        .btn:hover {
            background-color: #0097a7;
        }

        /* Hata Mesajları */
        .error-messages {
            background-color: #ff5252;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .error-messages ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .error-messages li {
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>

        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
