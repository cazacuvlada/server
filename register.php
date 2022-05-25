<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP  and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">


    <script type="text/javascript">
    function do_login()
    {
    var email=$("#emailid").val();
    var password =$("#password").val();
    if(email!="" && pass!="")
    {
    $("#loading_spinner").css({"display":"block"});
    $.ajax
    ({
    type:'post',
    url:'login.php',
    data:{
    do_login:"login",
    email:email,
    password:pass
    },
    success:function(response) {
    if(response=="success")
    {
    window.location.href="index.php";
    }
    else
    {
    $("#loading_spinner").css({"display":"none"});
    alert("Wrong Details");
    }
    }
    });
    }

    else
    {
    alert("Please Fill All The Details");
    }

    return false;
    }
    </script>
    <script type="text/javascript">
        function validate()
        {
            var email=$("#email").val();
            var password =$("#password").val();

            var email_regex=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var password_regex1=/([a-z].*[A-Z])|([A-Z].*[a-z])([0-9])+([!,%,&,@,#,$,^,*,?,_,~])/;
            var password_regex2=/([0-9])/;
            var password_regex3=/([!,%,&,@,#,$,^,*,?,_,~])/;

            if(email_regex.test(email)==false)
            {
                alert("Please Enter Correct Email");
                return false;
            }
            else if(pass.length<8 || password_regex1.test(pass)==false || password_regex2.test(pass)==false || password_regex3.test(pass)==false)
            {
                alert("Please Enter Strong Password");
                return false;
            }
            else
            {
                return true;
            }
        }
    </script>
</head>
<body>
<div class="header">
    <h2>Register</h2>
</div>
<form  class="frm"  method="post" action="register.php">
    <?php include('errors.php');
    $username = "";
     $email = "";
     $errors = array();
    ?>

    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>

    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>

    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>

    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>


</form>
<script type="text/javascript" src="jquery.js"></script>
<script src="js/form-validation.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
