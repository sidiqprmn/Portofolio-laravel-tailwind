<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
  <link rel="stylesheet" href="css.css">
<style>
body {
  background: linear-gradient(130deg, rgb(248, 248, 248) 0%, rgb(37, 0, 250) 60%);
  font-family: "Roboto", sans-serif;      
}

.halaman-login {
    width: 430px;
    padding: 11% 0 0;
    margin: auto;
    border-radius: 10px;
  
  }
  .form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 30px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(56, 55, 55, 0.493), 0 5px 5px 0 rgba(0, 0, 0, 0.644);
  }
  .form input {
    font-family: "Roboto", sans-serif;
    background: #d6d5d5;
    width: 100%;
    border: 0;
    margin: 0 0 10px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
  }
  .form button {
    font-family: 'Times New Roman', Times, serif;
    text-transform: uppercase;
    outline: 0;
    background: rgb(52, 88, 207);
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.6 ease;
    transition: all 0.3 ease;
    cursor: pointer;
  }
  .form button:hover,.form button:active,.form button:focus {
    background: #2b08f5;
  }
  .form .pesan {
    margin: 15px 0 0;
    color: #978a8a;
    font-size: 12px;
  }
  .form .pesan a {
    color: #4CAF50;
    text-decoration: none;
  }
  
  .container {
    position: relative;
    z-index: 1;
    max-width: 300px;
    margin: 0 auto;
  }
  .container:before, .container:after {
    content: "";
    display: block;
    clear: both;
  }
  .container .info {
    margin: 50px auto;
    text-align: center;
  }
  .container .info h1 {
    margin: 0 0 15px;
    padding: 0;
    font-size: 36px;
    font-weight: 300;
    color: #1a1a1a;
  }
  .container .info span {
    color: #4d4d4d;
    font-size: 12px;
  }
  .container .info span a {
    color: #000000;
    text-decoration: none;
  }
  .container .info span .fa {
    color: #EF3B3A;
  }
  
  h1{
    font-size: 35px;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    color: black;
  }
  
  .forgot{
    text-align: left;
    font-size: 10px;
    margin: 10px;
  }

  img{
    height: 130px;
    width: 130px;
    align-items: center;
  }

</style>
</head>
<body style="background: linear-gradient(130deg, #000000, #FFFFFF)">
    <div class="halaman-login">
        <div class="form">
          <hr>
          <form id="login" class="login-form">
          <img src="https://www.pngkey.com/png/full/367-3670351_access-login-icon.png" alt="">
          <h1>LOGIN</h1>
          <hr><br>
            <input type="text" placeholder="Username"/>
            <input type="password" placeholder="Password"/>
            <input type="button" value="LOGIN">
            <p class="pesan">Tidak punya akun? <a href="register.html">Buat akun sekarang.</a></p>
          </form>
        </div>
      </div>
</body>
</html>
