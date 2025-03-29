<!DOCTYPE html>
<html>
    <head>
        <title>உள்நுழைவு</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style class="css">
            @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* பின்னணி வீடியோ அல்லது படம் */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('https://wallpaperaccess.com/full/31201.jpg') no-repeat center center/cover;
    overflow: hidden;
    position: relative;
}

/* ஜூம்-இன்/ஆவுட் அனிமேஷன் */
@keyframes zoomEffect {
    0% { transform: scale(1); }
    100% { transform: scale(1.1); }
}

/* தற்காலிகத்துடன் கூடிய டைனமிக் ஃபார்ம் பெட்டி */
.box {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 300px;
    min-height: 300px;
    background: rgba(48, 48, 48, 0.8); /* சிறிய தற்காலிகம் */
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    animation: fadeUp 1.5s ease-in-out, moveUp 1.5s ease-in-out;
    transition: box-shadow 0.3s ease-in-out;
}

/* மேலே நகரும் விளைவுகள் */
@keyframes moveUp {
    0% { transform: translateY(30px); opacity: 0; }
    100% { transform: translateY(0); opacity: 1; }
}

/* மின்னல் விளைவு மிதக்கும் போது */
.box:hover {
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
    animation: thunderFlash 0.2s infinite alternate;
    background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(0,0,0,0.8) 100%);
    border: 2px solid #01dbc2;
}

@keyframes thunderFlash {
    0% { box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); }
    100% { box-shadow: 0 0 30px rgba(255, 255, 255, 1); }
}

/* நியான் உரை விளைவு */
form h2 {
    color: #fff;
    font-weight: 500;
    margin-bottom: 20px;
    text-align: center;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    text-shadow: 0 0 5px #01dbc2, 0 0 10px #01dbc2, 0 0 20px #00b8a2;
    animation: glowEffect 1.5s infinite alternate;
}

@keyframes glowEffect {
    0% { text-shadow: 0 0 5px #01dbc2, 0 0 10px #01dbc2, 0 0 20px #00b8a2; }
    100% { text-shadow: 0 0 10px #01dbc2, 0 0 20px #01dbc2, 0 0 30px #00b8a2; }
}

/* ஃபார்ம் வடிவமைப்பு */
form {
    position: relative;
    z-index: 1000;
    width: 100%;
    padding: 20px;
}

/* தற்காலிகத்துடன் கூடிய உள்ளீட்டு புலங்கள் */
.inputbx {
    position: relative;
    margin-bottom: 20px;
    width: 100%;
}
.registerbox {
    position: relative;
    margin-bottom: 20px;
    width: 100%;
}

.inputbx input {
    width: 100%;
    padding: 10px;
    border: none;
    outline: none;
    background: rgba(41, 41, 41, 0.6); /* சிறிய தற்காலிகம் */
    color: #fff;
    border-radius: 5px;
    transition: 0.3s ease-in-out;
}
.registerbox input {
    width: 100%;
    padding: 10px;
    border: none;
    outline: none;
    background: rgba(41, 41, 41, 0.6); /* சிறிய தற்காலிகம் */
    color: #fff;
    border-radius: 5px;
    transition: 0.3s ease-in-out;
}

.inputbx input:focus {
    background: rgba(41, 41, 41, 0.8);
    box-shadow: 0 0 10px #01dbc2;
    border: 1px solid #01dbc2;
}
.registerbox input:focus {
    background: rgba(41, 41, 41, 0.8);
    box-shadow: 0 0 10px #01dbc2;
    border: 1px solid #01dbc2;
}

.inputbx input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}
.registerbox input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

/* சமர்ப்பிப்பு பொத்தான் */
.inputbx input[type="submit"] {
    cursor: pointer;
    background: #01dbc2;
    color: #292929;
    font-weight: bold;
    transition: 0.3s;
    box-shadow: 0 0 5px #01dbc2;
}
.registerbox input[type="submit"] {
    cursor: pointer;
    background: #01dbc2;
    color: #292929;
    font-weight: bold;
    transition: 0.3s;
    box-shadow: 0 0 5px #01dbc2;
}

.inputbx input[type="submit"]:hover {
    background: #00b8a2;
    box-shadow: 0 0 10px #01dbc2;
}
.registerbox input[type="submit"]:hover {
    background: #00b8a2;
    box-shadow: 0 0 10px #01dbc2;
}

/* இணைப்புகள் */
.group {
    display: flex;
    justify-content: space-between;
}

.group a {
    color: #01dbc2;
    text-decoration: none;
    font-size: 0.75em;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    transition: 0.3s;
}

.group a:hover {
    filter: drop-shadow(0 0 5px #01dbc2);
    text-shadow: 0 0 5px #01dbc2;
}
        </style>
    </head>
    <body>
        <div class="box">
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <h2>உள்நுழைவு படிவம்</h2>
                
                <div class="inputbx">
                    <span></span>
                    <input type="text" id="user" name="user" placeholder="பயனர் பெயர்">
                </div>
                
                <div class="inputbx">
                    <span></span>
                    <input type="password" id="pass" name="pass" placeholder="கடவுச்சொல்">
                </div>

                <div class="inputbx">
                    <span></span>
                    <input type="submit" id="btn" value="உள்நுழைவு" name="submit"/>
                </div>

            </form>
            <form action="register.php" method="post">
                <div class="registerbox">
                    <span></span>
                    <input type="submit" id="reg" name="reg" value="பதிவு செய்யவும்">
                    <h2>குறிப்பு: பதிவு செய்யாதவர்கள் முதலில் பதிவு செய்யவும்!!!</h2>
                </div>
            </form>
        </div>

        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;

                if(user.length == "" && pass.length == ""){
                    alert("பயனர் பெயர் மற்றும் பதிவு எண் புலங்கள் காலியாக உள்ளன!");
                    return false;
                }
                else if(user.length == ""){
                    alert("பயனர் பெயர் புலம் காலியாக உள்ளது!");
                    return false;
                }
                else if(pass.length == ""){
                    alert("பதிவு எண் புலம் காலியாக உள்ளது!");
                    return false;
                }
                return true;
            }
        </script>
    </body>
</html>