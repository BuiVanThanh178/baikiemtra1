<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <li><a href="contact.html;">Liên Hệ</a></li>
                <li><a href="products.php">Danh Sách Sản Phẩm</a></li>
                <li><a href="#">Đăng Xuất</a></li>
            </ul>
        </nav>
    </header>

    <!-- Phần nội dung chính -->
    <main>
        <section class="dashboard">
            <h1>Bảng Điều Khiển</h1>
            <p>Chào mừng bạn đến với Dashboard. Đây là tổng quan về hệ thống.</p>
            <div class="overview">
                <div class="card">
                    <h3>Sản Phẩm</h3>
                    <p class="number">150</p>
                </div>
                <div class="card">
                    <h3>Người Dùng</h3>
                    <p class="number">75</p>
                </div>
                <div class="card">
                    <h3>Đơn Hàng</h3>
                    <p class="number">220</p>
                </div>
            </div>
            <div class="actions">
                <a href="products.html" class="btn product-list">Xem Danh Sách Sản Phẩm</a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>© 2025 Bản quyền thuộc về Trang Web. Mọi quyền được bảo lưu.</p>
    </footer>
</body>
</html>
