<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<script src="./public/js/jquery-3-7-1-min.js"></script>

<body>
    <div class="background"></div>
    <div class="container">
        <div class="content">
            <h2 class="ten"><i class='bx bxl-firefox'></i>The K&L Corner Coffee</h2>
            <div class="text-sci">
                <h2>Welcome <br> <span>To Our Website Coffee.</span> </h2>
                <p>Whether you're in the mood for a classic latte or something
                    more unique like a lavender honey cappuccino, we have a drink to suit your taste</p>
                <div class="social-icons">
                    <a href=""><i class='bx bxl-linkedin-square'></i></a>
                    <a href=""><i class='bx bxl-facebook-square'></i></a>
                    <a href=""><i class='bx bxl-instagram-alt'></i></a>
                    <a href=""><i class='bx bxl-gmail'></i></a>
                </div>
            </div>
        </div>
        <!-- Form login -->
        <div class="logreg-box">
            <div class="form-box login">
                <form class="form">
                    <h2>Log In</h2>
                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxl-gmail'></i>
                        </span>
                        <input id="email" name="email">
                        <label for="">Email</label>
                        <span class="form-message"></span>
                    </div>

                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxs-lock-alt'></i>
                        </span>
                        <input type="password" id="password" name="pass">
                        <label for="">Password</label>
                        <span id="password-error" class="error-message"></span>
                    </div>

                    <div class="remember-forgot">
                        <label> <input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password</a>
                    </div>

                    <button type="submit" onclick="login()">Log In</button>

                    <div class="login-register">
                        <p>Don't have an account? <a href="/register" class="login-link">Sign Up</a> </p>
                    </div>
                </form>
            </div>
            <!-- registist -->
        </div>
    </div>
</body>
<script>
    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function login() {
        $.ajax({
            url: '/login',
            type: 'POST',
            data: {
                username: $('#email').val(),
                password: $('#password').val()
            }
        }).then(data => {
            // console.log("ádasd");
            setCookie('token', data.token, 1);
            window.location.href = "/admin";
        }).catch(err => {
            if (err) {
                $('#password-error').text('Mật khẩu không đúng').addClass('show');
            }
        });
    }
</script>

</html>