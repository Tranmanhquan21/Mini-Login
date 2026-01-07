# Mini-Login
bài tập trên lớp
1. Tài khoản đăng nhập demo
- Email: admin@example.com
- Password: 123456
2. Mô tả chức năng
- login.php

+ Hiển thị form đăng nhập (email, password)

+ Form sử dụng method POST, gửi dữ liệu tới process_login.php

+ Hiển thị lỗi khi URL có ?err=1

+ Nếu tồn tại cookie remember_email thì tự điền email

+ Giao diện được căn giữa bằng CSS

- process_login.php

+ Nhận dữ liệu từ form

+ Kiểm tra email và password với tài khoản demo

+ Nếu đúng:

+ Tạo session $_SESSION['user']

+ Lưu thời điểm đăng nhập

- Redirect sang dashboard.php

+ Nếu sai:

+ Redirect về login.php?err=1

+ require_login.php

+ Kiểm tra trạng thái đăng nhập bằng session

+ Nếu chưa đăng nhập → chuyển về login.php

+ File này được include ở các trang cần bảo vệ

- dashboard.php

+ Chỉ truy cập được khi đã đăng nhập

+ Hiển thị email người dùng và thời điểm login

+ Có menu đơn giản và nút Logout

+ Giao diện căn giữa bằng CSS

- logout.php

+ Hủy toàn bộ session

+ Xóa cookie session

+ Chuyển về trang login

Sau khi logout, dùng nút Back không thể vào dashboard

