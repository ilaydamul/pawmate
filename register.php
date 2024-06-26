
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.3/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <title>PawMate | Kayıt Ol</title>

</head>

<body>

    <section class="form-container">
        <div class="form-box">
            <div class="logo">
               <a href="index.php"><img src="images/pawmate-logo.png" alt="PawMate Logo"></a> 
            </div>
            <div class="form-info">
                <h1>Kayıt Ol</h1>
                <div class="little-text">PawMate'e kayıt olun</div>
            </div>
            <form class="custom-form" name="register_form" onsubmit="return false;">
                <div class="half-input">
                    <input type="text" name="register_name" placeholder="Adınız">
                </div>
                <div class="half-input">
                    <input type="text" name="register_surname" placeholder="Soyadınız">
                </div>
                <div class="half-input">
                    <input type="text" name="register_username" placeholder="Kullanıcı Adınız">
                </div>
                <div class="half-input">
                    <input type="tel" name="register_phone-no" placeholder="Telefon No">
                </div>
                <div>
                    <input type="text" name="register_address" placeholder="Adres">
                </div>
                <div>
                    <input type="text" name="register_email" placeholder="E-Mail">
                </div>
                <div>
                    <input type="number" name="register_age" placeholder="Yaşınız">
                </div>
                <div>
                    <input type="password" name="register_password" placeholder="Şifre">
                </div>

                <button class="custom-btn" type="submit">Kayıt Ol</button>
            </form>
            <div class="little-text text-center mt-3">
                Zaten bir hesabınız var mı? <a href="login.php" title="Giriş Yap">Giriş Yap <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <!-- Swiper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.3/swiper-bundle.min.js"></script>

    <!-- JS -->
    <script src="js/script.js"></script>
    <script src="js/controller.js"></script>

</body>

</html>