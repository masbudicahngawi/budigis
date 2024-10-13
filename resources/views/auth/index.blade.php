<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BudiGIS :: Login Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

        body {
            font-family: 'Open Sans', sans-serif;
            background: #f9faff;
            color: #3a3c47;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-top: 48px;
        }

        form {
            background: #fff;
            max-width: 360px;
            width: 100%;
            padding: 58px 44px;
            border: 1px solid ##e1e2f0;
            border-radius: 4px;
            box-shadow: 0 0 5px 0 rgba(42, 45, 48, 0.12);
            transition: all 0.3s ease;
        }

        .row {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .row label {
            font-size: 13px;
            color: #8086a9;
        }

        .row input {
            flex: 1;
            padding: 13px;
            border: 1px solid #d6d8e6;
            border-radius: 4px;
            font-size: 16px;
            transition: all 0.2s ease-out;
        }

        .row input:focus {
            outline: none;
            box-shadow: inset 2px 2px 5px 0 rgba(42, 45, 48, 0.12);
        }

        .row input::placeholder {
            color: #C8CDDF;
        }

        button {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            background: #15C39A;
            color: hsl(256, 100%, 44%);
            border: none;
            border-radius: 100px;
            cursor: pointer;
            font-family: 'Open Sans', sans-serif;
            margin-top: 15px;
            transition: background 0.2s ease-out;
        }

        button:hover {
            background: rgb(248, 252, 49);
        }

        @media(max-width: 458px) {

            body {
                margin: 0 18px;
            }

            form {
                background: #f9faff;
                border: none;
                box-shadow: none;
                padding: 20px 0;
            }

        }
    </style>
    <!-- <link rel="stylesheet" href="{{ asset('assets/mystyles.css') }}"> -->
</head>

<body>
    <h1 class="text-2xl font-bold font-blue-500">BudiGIS</h1>
    <form method="post" action="{{ route('proses-login') }}">
        @csrf
        <div class="row">
            <label for="username">Username</label>
            <input type="username" name="name" autocomplete="off" placeholder="username Anda" required>
        </div>
        <div class="row">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>

</html>
