<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SIGN UP</title>
        <link rel="stylesheet" href="css/signup.css" />
        

</head>

<body>
                <div class="homeee">
                                <div class="navigation">
                        
                        
                        
                                    <ul>
                                        <li><a href="index.html">HOME </a></li>
                                        <li><a href="login.html">LOGIN</a></li>
                                        <li><a href="signup.html">SIGNUP </a></li>
                                        <li><a href="about.html">ABOUT </a></li>
                                        <li><a href="contact.html">CONTACT</a></li>
                                    </ul>
                        
                                   
                        
                        
                        
                        
                        
                        
                        
                        
                        
                                </div>
                            </div>
                        



        
        <form name="f1" class="ff" action="signupp.php" method="POST" onsubmit="return Validate()">
                <div class="sign">
                First Name:<input type="line" name="t1" value=""><br>
                <br>
                Last Name:<input type="line" name="t2" value=""><br>
                <br>
                Address:<input type="line" name="t3" value=""><br>
                <br>
                City:<input type="line" name="t4" value=""><br>
                <br>
                State:<input type="line" name="t5" value=""><br>
                <br>
                Country:<input type="line" name="t6" value=""><br>
                <br>
                Pincode:<input type="line" name="t7" value="" maxlength="6"><br>
                <br>
                Username:<input type="line" name="t8" required value=""><br>
                <br>
                Password:<input type="line" name="t9" required value=""><br>
                <br>
                <input type="submit" name="t10" value="Register user">
                <input type="reset" name="t11" value="Reset">
                </div>
        </form>








</body>
        <script>
                function Validate() {
                        

                        var firstname = document.f1.t1.value;
                        var lastname = document.f1.t2.value;
                        var address = document.f1.t3.value;
                        var city = document.f1.t4.value;
                        var state = document.f1.t5.value;
                        var country = document.f1.t6.value;
                        var pincode = document.f1.t7.value;
                        var username = document.f1.t8.value;
                        var password = document.f1.t9.value;

                        if (firstname == "" || lastname == "" || address == "" || city == "" || state == "" ||
                                country == "" || pincode == "" || username == "" || password == "") {
                                alert("firstname/lastname/city/country/username/password must be filled");
                                return false;
                        }
                        if (pincode.length != 6) {
                                alert("pincode must be in 6 digit numeric value");
                                return false;
                        }

                        if (state.length != 2) {
                                alert("state must be in 2 characters");
                                return false;
                        }
                        var atpos = uname.indexOf("@");
                        var dotpos = uname.lastIndexOf(".");
                        if (uname.length < 6 || atpos != 0 || dotpos != 0) {
                                alert("not a valid username");
                                return false;
                        }
                        return true;
                }
        </script>


</html>