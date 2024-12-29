<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wingex</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/home/style.css') }}">
</head>

<body>
    <div class="container">
        <!-- Left Side: GIF -->
        <div class="left-side">
            <img src="{{ asset('assets/home/banner.gif') }}" alt="banner" class="gif">
        </div>

        <!-- Right Side: Title and Buttons -->
        <div class="right-side">
            <h1 class="title">Wingex</h1>
            <div class="buttons">
                <a href="/login" class="btn">Login</a>
                <a href="/register" class="btn btn-signup">Sign Up</a>
            </div>
        </div>
    </div>
</body>

</html>
