<!DOCTYPE html>
<html>
    <head>
        <title>रजिस्टर</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style class="css">
            @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Background Video or Image */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('https://wallpaperaccess.com/full/31201.jpg') no-repeat center center/cover;
    overflow: hidden;
    position: relative;
}

/* Zoom-in/Out Animation */
@keyframes zoomEffect {
    0% { transform: scale(1); }
    100% { transform: scale(1.1); }
}

/* Dynamic Form Box with Transparency */
.box {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 300px;
    min-height: 300px;
    background: rgba(48, 48, 48, 0.8); /* Slight transparency */
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    animation: fadeUp 1.5s ease-in-out, moveUp 1.5s ease-in-out;
    transition: box-shadow 0.3s ease-in-out;
}

/* Move Up Effect */
@keyframes moveUp {
    0% { transform: translateY(30px); opacity: 0; }
    100% { transform: translateY(0); opacity: 1; }
}

/* Thunder Effect on Hover */
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

/* Neon Text Effect */
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

/* Form Styling */
form {
    position: relative;
    z-index: 1000;
    width: 100%;
    padding: 20px;
}

/* Input Fields with Transparency */
.inputbx {
    position: relative;
    margin-bottom: 20px;
    width: 100%;
}

.inputbx input {
    width: 100%;
    padding: 10px;
    border: none;
    outline: none;
    background: rgba(41, 41, 41, 0.6); /* Slight transparency */
    color: #fff;
    border-radius: 5px;
    transition: 0.3s ease-in-out;
}

.inputbx input:focus {
    background: rgba(41, 41, 41, 0.8);
    box-shadow: 0 0 10px #01dbc2;
    border: 1px solid #01dbc2;
}

.inputbx input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

/* Submit Button */
.inputbx input[type="submit"] {
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

/* Links */
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
            <form name="form" onsubmit="return isvalid()" method="POST">
                <h2>रजिस्टर फॉर्म</h2>
                
                <div class="inputbx">
                    <span></span>
                    <input type="text" id="user" name="user" placeholder="उपयोगकर्ता नाम">
                </div>
                
                <div class="inputbx">
                    <span></span>
                    <input type="password" id="pass" name="pass" placeholder="पासवर्ड">
                </div>

                <div class="inputbx">
                    <span></span>
                    <input type="submit" id="btn" value="रजिस्टर" name="submit"/>
                </div>

            </form>
        </div>

        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;

                if(user.length == "" && pass.length == ""){
                    alert("उपयोगकर्ता नाम और पासवर्ड फ़ील्ड खाली हैं!");
                    return false;
                }
                else if(user.length == ""){
                    alert("उपयोगकर्ता नाम फ़ील्ड खाली है!");
                    return false;
                }
                else if(pass.length == ""){
                    alert("पासवर्ड फ़ील्ड खाली है!");
                    return false;
                }
                return true;
            }
        </script>
        <?php
            $con=mysqli_connect('localhost','root','','gdg-hackathon');
            if(isset($_POST['submit'])){
                $username=$_POST['user'];
                $password=$_POST['pass'];
                $query="INSERT INTO `list` (`username`, `password`) VALUES ('$username','$password')";
                $run=mysqli_query($con,$query);
            }
        ?>
    </body>
</html>