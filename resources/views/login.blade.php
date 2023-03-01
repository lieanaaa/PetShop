<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <!-- icons font awesome -->
    <link rel="stylesheet" href="style2.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  </head>
  <body>
    <form action="/proseslogin" method="POST">
      @csrf
  <img src="h.png">
      <div class="login">
          <div class="box-login">
            <i class="fa fa-user"></i>
            <input type="text" name="name" placeholder="Username">
          </div>

          <div class="box-login"> 
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
          <button type="submit" name="login" class="btn-login">Login</button>
      </div>
    </form>
  </body>
  </html>