<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
    $name_error = $email_error = $password_error = $confirm_password_error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $confirm_password = htmlspecialchars($_POST['confirm_password']);
        
        if (strlen($password) < 6) {
            $password_error = "Vui lòng nhập mật khẩu lớn hơn 6 ký tự";
        }

        if ($password != $confirm_password) {
            $confirm_password_error = "Nhập mật khẩu cho trùng nhau";
        }

        if (empty($password_error) && empty($confirm_password_error)) {
            setcookie("username", $name, time() + (86400 * 30), "/");
            setcookie("email", $email, time() + (86400 * 30), "/");
            setcookie("password", $password, time() + (86400 * 30), "/");
        }
    }
?>
<body>
    <header>
        <div class="logo">
            <img src="pngtree-wolf-logo-png-image_2306634.jpg" alt="Logo" width="100">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="#">Giới Thiệu</a></li>
                <li><a href="contact.php">Liên Hệ</a></li>
                <li><a href="login.php">Đăng Nhập</a></li>
                <li><a href="#">Đăng xuất</a></li>
            </ul>
        </nav>
    </header>

    <!-- Phần nội dung chính -->
    <main>
        <section class="register">
            <h1>Đăng Ký Tài Khoản</h1>
            <p>Vui lòng điền thông tin để tạo tài khoản mới.</p>
            <form action="register.php" method="POST">
                <div class="form-group">
                    <label for="name">Họ tên:</label>
                    <input type="text" id="name" name="name" required>
                    <?php if ($name_error): ?>
                        <p class="error"><?php echo $name_error; ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
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
                <div class="form-group">
                    <label for="confirm-password">Xác nhận mật khẩu:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <?php if ($confirm_password_error): ?>
                        <p class="error"><?php echo $confirm_password_error; ?></p>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn submit">Đăng Ký</button>
            </form>
            <div class="links">
                <p>Đã có tài khoản? <a href="login.php">Đăng Nhập</a></p>
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
