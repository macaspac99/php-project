<!DOCTYPE html> 
<html> 
    <head>
        <title> Admin Login </title>
        <link rel="stylesheet" type="text/css" href="CSS/adminlogin/AdminLoginCSS.css">

    </head> 

    <body class="background"> <br/> 
        <div class="Admin">         

            <div class="Intro"> Admin Login </div><br/>

            <form method="POST"> 
                <div class="label">
                ︎ ︎ ︎ ︎ ︎ ︎ ︎ Email <input type="text" id="email" name="Email" class="text"> <br/> <br>
                Password <input type="Password" id="password" name="Password" class="text1"><br/> <br><br>
                <input type="submit" name="login" id="login" value="Login" class="button"> <br/> <br><br>
                <a href="regadmin.php" >Not an admin yet? Register Here</a>
            </div>
            </form>
        </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript";></script>
        <script>
            $(function(){
                $('#login').click(function(e){

                    var valid = this.form.checkValidity();
                    if(valid){
                        var email = $('#email').val();
                        var password = $('#password').val();
                    }
                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'jsloginadmin.php',
                        data: {email: email, password: password},
                        success: function(data){
                            alert(data);
                            if($.trim(data) === "Login Sucess, redirecting..."){
                                setTimeout(' window.location.href = "hello.php"', 2000);
                            }

                        },
                        error: function(data){
                            alert('error');
                        }



                    })
                })
            })
    </script>
    </body>
</html>