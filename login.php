<?php
    $errors = [];
    $successMessage = "";
    $email = $password = "";

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    if (empty($email)) {
      $errors['email'] = "Vui lòng nhập email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "Email không hợp lệ.";
    }

    if (empty($password)) {
      $errors['password'] = "Vui lòng nhập mật khẩu.";
    } elseif ((strlen($password) < 6)) {
      $errors['password'] = "Mật khẩu phải ít nhất 6 ký tự.";
    }

    if (empty($errors)) {

      if(isset($_COOKIE["email"]) && isset($_COOKIE["password"])) {
        if($_COOKIE["email"] == $email && $_COOKIE["password"] == $password) {
          $successMessage = "Đăng nhập thành công! Chào mừng bạn $email đến với hệ thống.";
          header("location: dashboard.php");
        } else {
            if ($_COOKIE["email"] !== $email && $_COOKIE["password"] !== $password) {
              $errors[""] = "email va password khong dung";
            }
           elseif($_COOKIE["email"] !== $email)  {
            $errors["email"] = "email khong dung";
          } elseif($_COOKIE["password"] !== $password)  {
            $errors["password"] = "password khong dung";
          }
        }
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Header với Logo và Thanh điều hướng -->
    <header>
        <div class="logo">
            <img src="pngtree-wolf-logo-png-image_2306634.jpg" alt="Logo" width="100">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="#">Giới Thiệu</a></li>
                <li><a href="contact.html">Liên Hệ</a></li>
                <li><a href="register.php">Đăng Ký</a></li>
                <li><a href="login.php">Đăng Nhập</a></li>
                <li><a href="#">Đăng Xuất</a></li>
            </ul>
        </nav>
    </header>

    <!-- Phần nội dung chính -->
    <main>
        <section class="login">
            <h1>Đăng Nhập</h1>
            <p>Vui lòng nhập thông tin để đăng nhập vào tài khoản của bạn.</p>
            <form action="login.php" method="POST">
                <div class="form-group">
                <?php
                    if (!empty($errors)) {
                        echo "<div style='color: red;'>";
                        foreach ($errors as $error) {
                        echo "<p> $error </p>";
                        }
                        echo "</div>";
                    }

                    if (!empty($successMessage)) {
                        echo "<div style='color: green;'><p> $successMessage </p></div>";
                    } 
                ?>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <?php if ($email_error): ?>
                        <p class="error"><?php echo $email_error; ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" id="password" name="password" required>
                    <?php if ($password_error): ?>
                        <p class="error"><?php echo $password_error; ?></p>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn submit">Đăng Nhập</button>
                <p id="status-message"></p> <!-- Thông báo trạng thái -->
            </form>
            <div class="links">
                <p>Chưa có tài khoản? <a href="register.php">Đăng Ký</a></p>
                <p>Quên mật khẩu? <a href="reset-password.php">Reset Mật Khẩu</a></p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>2025 Bản quyền thuộc về THÀNH.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
