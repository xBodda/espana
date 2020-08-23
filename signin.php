<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="layout/css/master.css">
  <script src="https://kit.fontawesome.com/b1361fb5d5.js" crossorigin="anonymous"></script>
  <title>تسجيل الدخول | اسبانا</title>
</head>

<body id="signinn">
  <div class="container">

  </div>
  <div class="signin-form-container">
    <h1 class="heading mb-30">تسجيل الدخول</h1>
    <form action="signup.php" method="POST">
      <div class="group-input">
        <input type="email" class="bda-input" required>
        <span class="highlight"></span><span class="bar"></span>
        <label> <i class="fas fa-envelope"></i> البريد الإلكتروني </label>
      </div>

      <div class="group-input">
        <input type="password" class="bda-input" required>
        <span class="highlight"></span><span class="bar"></span>
        <label> <i class="fas fa-lock"></i> كلمة المرور </label>
      </div>

      <div class="group-buttons flex-1 mb-10">
        <input type="submit" class="xbutton p" value="تسجيل الدخول">
      </div>

      <div class="group-buttons flex-1">
        <input type="button" class="xbuttonx p" value=" مستخدم جديد ؟" onClick="(function(){window.location='signup.php';return false;})();return false;">
      </div>

    </form>
  </div>
</body>

</html>