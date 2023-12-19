<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?=base?>">
    <title>Quản Trị</title>
    <!-- Bootstrap -->
    <link href="public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="public/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link href="public/build/css/custom.min.css" rel="stylesheet">
  </head>
  <style>
      .save_account{
        margin-left: 30px;
      }
      /* Reset some default styles */
      body, html {
          margin: 0;
          padding: 0;
      }

      /* Main container styling */
      .login_wrapper {
          width: 100%;
          margin: auto;
      }

      /* Form styling */
      .login_form {
          max-width: 400px;
          margin: auto;
          background-color: #fff;
          padding: 20px;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .login_form h1 {
          text-align: center;
          color: #333;
      }

      .login_content {
          text-align: center;
      }

      /* Input styling */
      .form-control {
          margin-bottom: 15px;
          padding: 10px;
          width: 100%;
          border: 1px solid #ddd;
          border-radius: 3px;
          box-sizing: border-box;
      }

      /* Button styling */
      .btn-primary {
          background-color: #337ab7;
          color: #fff;
          padding: 10px 20px;
          border: none;
          border-radius: 3px;
          cursor: pointer;
      }

      /* Checkbox styling */
      #save_account {
          margin-left: 5px;
      }

      /* Container login styling */
      .container-login {
          display: flex;
          align-items: center;
          justify-content: space-between;
      }

      /* Separator styling */
      .separator {
          border-top: 1px solid #ccc;
          text-align: center;
          margin-top: 20px;
          padding-top: 20px;
      }

      /* Responsive styling */
      @media (max-width: 480px) {
          .login_form {
              width: 90%;
          }
      }

  </style>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="post">
              <h1>ĐĂNG NHẬP</h1>
              <div>
                <input value="<?=$data["user"]?>" type="text" class="form-control" placeholder="Tài Khoản" name="user" required="" />
              </div>
              <div>
                <input value="<?=$data["pass"]?>" type="password" class="form-control" placeholder="Mật Khẩu" name="pass" required="" />
              </div>
              <div class="container-login">
                <button class="btn  btn-primary" name="login">Đăng Nhập</button>
                <label class="save_account" for="">Lưu Tài Khoản</label>
                <input  type="checkbox" id="save_account">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <br />

                <div>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
