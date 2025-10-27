<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="hehe.css"> -->
    <link rel="icon" type="image/png" href="upnlogo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    overflow: hidden;
}

.login{
    position: absolute;
    width: 100%;
    /* padding: 80px 0px; */
    padding-top: 90px;
    height: 100%;
    background: linear-gradient(135deg,rgba(0,0,0,0.8),rgba(0,0,0,0.4)),url("bglagi.png");
    background-size: cover;
    background-repeat: no-repeat;
}

.loginmenu{
    /* position: fixed; */
    width: 600px;
    
    margin: 0 auto;
    background-color: white;
    border-radius: 20px;
    padding: 30px;
    filter: drop-shadow(1px 1px 10px rgba(88, 88, 88, 0.19));
}
.title{
    padding-bottom: 20px;
    text-align: center;
}


.user{
    color: black;
    font-size: 14px;
    margin-bottom: 15px;
}

.password{
    color: black;
    font-size: 14px;
}

.fill{
    margin: 8px 0;
    color: grey;
    align-items: center;
    border: solid 1px black;
    padding: 8px;
    border-radius: 10px;

}

.fill i{
    transform: translateY(2px);
    margin-right: 6px;
    margin-left: 2px;
    font-size: 14px;
}

.fill input{
    width: 90%;
    border: none;
    outline: none;
}

.fill input::placeholder{
    font-size: 12px;
}


.extra{
    padding-top: 20px;
    margin: 0 10px;
    margin-bottom: 10px;
    display: flex;
    justify-content: space-between;
    color: black;
    font-size: 12px;
}

.rememberme input{
    transform: translateY(2px);
}

.forget a{
    color: black;
}

.log-button{
    text-align: center;
}
.log-button a{
    color: white;
    text-decoration: none;
}

.log-button button{
    background-color: black;
    text-align: center;
    border-radius: 20px;
    width: 100%;
    padding: 10px;
    transition: 0.2s;
    border: none;
}

.log-button button:hover{
    background-color: rgb(41, 41, 41);
    transition: 0.2s;
    border-radius: 20px;
}

.log a{
    text-decoration: none;
    color: white;
    font-size: 16px;
}

.guest{
    margin-top: 20px;
    text-align: center;
    margin-bottom: 20px;
    font-size: 12px;
}

.guest a{
    color: black;
}

    </style>
    <title>Spada Wimaya</title>
</head>
<body>
    <div class="all">

        <div class="login">
            <form method="GET" action="home.php" autocomplete="off">
            <div class="loginmenu">
                <div class="title">
                    <img src="upnlogo.png" alt="" width="100">
                    <h2>SPADA WIMAYA</h2>
                    <p>E-Learning UPN Veteran Yogyakarta</p>
                </div>
                
                    <div class="user">
                        <span>Username</span>
                        <div class="fill">
                            <i class='bx bxs-user'></i>
                            <input type="text" name="username" required placeholder="Type Your Username">
                        </div>
                    </div>
                    <div class="password">
                        <span>Password</span>
                        <div class="fill">
                            <i class='bx bxs-lock-alt' id="lock"></i>
                            <input type="password" id="password" name="password" required placeholder="Type Your Password">
                        </div>
                    </div>
    
    
                <div class="extra">
                    <div class="rememberme">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me?</label>
                    </div>
                    <div class="forget">
                        <a href="">Forget Username or Password?</a>
                    </div>
                </div>
                <div class="log-button">
                    <button type="submit" >
                        <a href="home.html" target="_self"><div class="log">Log In</div></a>
                    </button>
                </div>
                <div class="guest">
                    <span>Don't have an account? </span>
                    <a href="">Log In as a Guest</a>
                </div>
            </div>
        </form>

        </div>
    </div>
</body>

<script src="hehe.js"></script>
</html>