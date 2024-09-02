<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h1>Home Page</h1>
        <nav>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home-page') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about-page') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-page') }}">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>
