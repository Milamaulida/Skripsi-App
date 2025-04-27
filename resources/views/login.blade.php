<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Technnoor</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <div class="container">
        {{-- Kiri: Form Login --}}
        <div class="left-side">

            <div class="login-box">
                <img src="/images/Logo.png" alt="Logo" class="logo-login"> 
                <div style="width: 100%; height: 100%; color: #3C3C3C; font-size: 25px; font-family: Poppins; font-weight: 600; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(255, 255, 255, 0.25)">LOGIN</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-group">
                        <input 
                            type="text" 
                            name="nis" 
                            placeholder="NIS" 
                            required
                        >
                    </div>

                    <div class="input-group">
                        <input 
                            type="password" 
                            name="password" 
                            placeholder="Password" 
                            required
                        >
                    </div>
                   
                    <div class="input-group">
                        <button type="submit" class="btn-login">
                        <div style="width: 100%; height: 100%; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">LOGIN</div>
                        </button>
                    </div>
                </form>

            </div>
        </div>

        {{-- Kanan: Welcome Card --}}
        <div class="right-side">
    <div class="welcome-card">
        <img src="/images/Logo.png" alt="Logo" class="logo">
        <div style="color: #F5C400; font-size: 24px; font-family: Poppins; font-weight: 700; word-wrap: break-word">SELAMAT DATANG</div>
        <div style="width: 100%; color: #F5C400; font-size: 12px; font-family: Poppins; font-weight: 600; word-wrap: break-word">DI APLIKASI PEMBELAJARAN INFORMATIKA NUR ROHMAH</div>
<br>
        {{-- Carousel --}}
        <div class="carousel">
            <img src="/images/foto1.jpg" alt="" class="student-photo active">
            <img src="/images/foto2.jpg" alt="" class="student-photo">
            <img src="/images/foto3.jpg" alt="" class="student-photo">
            <img src="/images/foto4.jpg" alt="" class="student-photo">
            <img src="/images/foto10.jpg" alt="" class="student-photo">
        </div>

        <div class="dots">
            <span class="dot active" onclick="showSlide(0)"></span>
            <span class="dot" onclick="showSlide(1)"></span>
            <span class="dot" onclick="showSlide(2)"></span>
            <span class="dot" onclick="showSlide(3)"></span>
            <span class="dot" onclick="showSlide(4)"></span>
        </div>
    </div>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel .student-photo');
    const dots = document.querySelectorAll('.dots .dot');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
            dots[i].classList.toggle('active', i === index);
        });
        currentSlide = index;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 3000);
</script>

    </body>
</html>
