
<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
</head>
<body>
    <h1>Welcome to My Blog</h1>

    <p>This is my Laravel blog page.</p>

    <h2>About My Blog</h2>
    <p>Here you can read articles, learn new things, and watch videos.</p>

    <h2>My Video</h2>
    <video width="500" controls>
        <source src="{{ asset('videos/myvideo.mp4') }}" type="video/mp4">
    </video>
</body>
</html>
