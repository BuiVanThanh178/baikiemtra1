function handleLogin(event) {
    event.preventDefault(); // Ngăn chặn form gửi đi mặc định
    
    // Lấy giá trị từ input
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    // Giả lập xác thực (thay bằng logic backend thực tế nếu có)
    if (email === "example@example.com" && password === "123456") {
        alert("Đăng nhập thành công!");
        window.location.href = "dashboard.html"; // Chuyển hướng đến dashboard
    } else {
        alert("Email hoặc mật khẩu không chính xác. Vui lòng thử lại.");
    }
    
    return false; // Đảm bảo form không thực sự được gửi
}

function handleRegister(event) {
    event.preventDefault(); // Ngăn chặn form gửi đi mặc định
    
    // Giả lập đăng ký thành công
    alert("Đăng ký thành công! Bạn sẽ được chuyển hướng đến trang đăng nhập.");
    
    // Chuyển hướng sang trang đăng nhập
    window.location.href = "login.html";
    
    return false; // Để đảm bảo form không thực sự được gửi
}
