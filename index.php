<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>❤️ 1 năm bên nhau ❤️</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            background: linear-gradient(to right, #ffdde1, #ee9ca7);
            color: #fff;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .container {
            padding: 40px;
            position: relative;
            z-index: 1;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2em;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .slideshow {
            margin: 20px auto;
            width: 300px;
            height: 400px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .slideshow img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .message {
            margin: 20px auto;
            max-width: 400px;
            font-size: 18px;
            font-style: italic;
            background: rgba(0, 0, 0, 0.3);
            padding: 15px;
            border-radius: 10px;
        }

        button {
            background: #ff4b5c;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            color: #fff;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #e63946;
        }

        /* Hiệu ứng trái tim */
        .heart {
            position: fixed;
            top: -10px;
            color: red;
            font-size: 20px;
            animation: fall linear forwards;
        }

        @keyframes fall {
            to {
                transform: translateY(100vh);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Chúc mừng 1 năm yêu nhau ❤️</h1>
        <div class="slideshow">
            <img id="photo" src="images/img1.jpg" alt="Kỷ niệm">
        </div>
        <div id="message" class="message">
            Đây là lời nhắn cho bức ảnh đầu tiên 💌
        </div>
        <button onclick="nextImage()">Next ➡️</button>
    </div>

    <!-- Nhạc -->
    <audio id="bg-music" autoplay loop>
        <source src="music.mp3" type="audio/mpeg">
    </audio>

    <script>
        // Danh sách ảnh + lời nhắn (8 ảnh)
        let slides = [
            { img: "images/img1.jpg", msg: "Ngày đầu tiên chúng ta gặp nhau, anh đã biết em là định mệnh 💖" },
            { img: "images/img2.jpg", msg: "Mỗi khoảnh khắc bên em đều là hạnh phúc vô giá 🥰" },
            { img: "images/img3.jpg", msg: "Cảm ơn em đã luôn ở bên cạnh, cùng anh vượt qua mọi khó khăn 💕" },
            { img: "images/img4.jpg", msg: "1 năm qua chỉ là khởi đầu, chúng ta sẽ còn nhiều năm tháng hạnh phúc nữa ❤️" },
            { img: "images/img5.jpg", msg: "Nụ cười của em là ánh sáng đẹp nhất trong cuộc đời anh 🌸" },
            { img: "images/img6.jpg", msg: "Anh mong mỗi ngày đều được cùng em viết nên kỷ niệm ✨" },
            { img: "images/img7.jpg", msg: "Cảm ơn tình yêu ngọt ngào mà em mang đến cho anh 💞" },
            { img: "images/img8.jpg", msg: "Mãi mãi bên nhau, nhé em! ❤️🌹" }
        ];

        let current = 0;

        function nextImage() {
            current = (current + 1) % slides.length;
            document.getElementById("photo").src = slides[current].img;
            document.getElementById("message").innerText = slides[current].msg;
        }

        // Hiệu ứng trái tim rơi
        function createHeart() {
            const heart = document.createElement("div");
            heart.classList.add("heart");
            heart.style.left = Math.random() * 100 + "vw";
            heart.style.animationDuration = (Math.random() * 3 + 2) + "s";
            heart.innerText = "❤️";
            document.body.appendChild(heart);
            setTimeout(() => {
                heart.remove();
            }, 5000);
        }
        setInterval(createHeart, 300);
    </script>
</body>

</html>