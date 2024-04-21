<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/login.css">
  <title>Document</title>
</head>
<body>
 <script src="https://use.typekit.net/rjb4unc.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

<div class="container">
    <div class="logo"><img src="images/logo.png" alt=""></div>
    <div class="login-item">
      <form action="/login" method="post" class="form form-login">
    @csrf

        <div class="form-field">
          <label class="user" for="login-username"><span class="hidden">Email</span></label>
          <input id="login-username" type="email" name="email" class="form-input" placeholder="Email" required>
        </div>

        <div class="form-field">
          <label class="lock" for="login-password"><span class="hidden">Password</span></label>
          <input id="login-password" type="password" name="password" class="form-input" placeholder="Password" required>
        </div>

        <div class="form-field">
          <input type="submit" value="Log in">
        </div>
       
        <div class="form-field" id="registerbtn">
          <a href="/register" value="Register">Register</a>
        </div>
       
      </form>
    </div>
</div>  


<script>
  document.getElementsByClassName("logo")[0].onclick = function () {
        location.href = "/";
    };
</script>

</body>
</html>