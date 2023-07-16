<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @isset($doctitle)
            {{$doctitle}} | MBTI Test
        @else
            MBTI Test
        @endisset
        </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: right;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }



        .footer {
            background-color:  #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .footer p {
            margin: 0;
        }

    </style>
</head>
<body>
<header>
    <h1>MBTI Test</h1>
</header>

    {{$slot}}

<footer class="footer">
    <p>&copy; 2023 MBTI Test. All rights reserved.</p>
</footer>
</body>
</html>

