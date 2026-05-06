<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>404 - NOT FOUND </title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        /* VIDEO BACKGROUND */
        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        /* OVERLAY */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            z-index: -1;
        }

        /* CONTENT */
        .content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
        }

        h1 {
            font-size: 80px;
            letter-spacing: 5px;
        }

        p {
            font-size: 20px;
            margin: 10px 0;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: white;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        a:hover {
            background: black;
            color: white;
        }
    </style>
</head>
<body>

    <!-- VIDEO BACKGROUND -->
    <video autoplay muted loop playsinline class="video-bg">
        <source src="{{ asset('video/bg.mp4') }}" type="video/mp4">
    </video>

    <!-- OVERLAY -->
    <div class="overlay"></div>

    <!-- CONTENT -->
    <div class="content">
        <h1>404</h1>
        <p>NOT FOUND </p>
        <p>The URL you are trying to access is not available</p>
        <a href="/">Back To Home</a>
    </div>

</body>
</html>