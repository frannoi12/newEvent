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
                <a href="#">welcome</a>
            </li>
            <li>
                <a href={{ route("about") }}>about</a>
            </li>
            <li>
                <a href="{{ route("contact") }}t">contact</a>
            </li>
        </ul>
    </nav>
    <h1 style="margin-top: 12px;color: blue">Page: Welcome</h1>
</body>
</html>
