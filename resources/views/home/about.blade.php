<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="{{ route("welcome") }}">welcome</a>
            </li>
            <li>
                <a href="#">about</a>
            </li>
            <li>
                <a href="{{ route("contact") }}">contact</a>
            </li>
        </ul>
    </nav>
    <h1 style="margin-top: 12px;color: orange">Page: about</h1>
</body>
</html>
