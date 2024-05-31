<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Chat Kuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #chatbox {
            height: 300px;
            overflow-y: scroll;
            border: 1px solid black;
            margin-bottom: 10px;
        }

        #chatbox p {
            margin: 0;
        }

        .message {
            margin-bottom: 5px;
        }

        .fixed-bottom-right {
            position: fixed;
            bottom: 80px;
            right: 15px;
        }

        #myVideo {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        .center-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: aliceblue;
            font-size: 115%;
        }

        body {
            background-image: url('foto_bg.png');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <!-- header -->
    <?php include 'template/headers.html'; ?>

    <!-- background video -->
    <div class="container-fluid p-0">
        <video autoplay muted loop id="myVideo">
            <source src="public/videos/bg.mp4" type="video/mp4">
        </video>
    </div>

    <!-- perkenalan kelompok -->
    <div class="center-text">
        <p>Selamat Datang Di Chat Kuy<br>
            aplikasi chat kelompok 10</p>
    </div>

    <!-- tombol untuk membuka moda -->
    <button class="btn btn-primary fixed-bottom-right" data-bs-toggle="modal" data-bs-target="#chatModal">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
            <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
        </svg>
    </button>

    <!-- Chat Modal -->
    <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chatModalLabel">Chat Kuy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="chatbox"></div>
                    <input type="text" id="username" class="form-control mb-2" placeholder="Enter your username...">
                    <input type="text" id="message" class="form-control mb-2" placeholder="Type your message here...">
                    <button onclick="sendMessage()" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'template/footers.html'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="public/js/chat.js"></script>
</body>

</html>