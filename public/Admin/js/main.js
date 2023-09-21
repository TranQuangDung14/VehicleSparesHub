
// $(function () {
    // Lắng nghe sự kiện click vào nút đóng
    document.addEventListener('DOMContentLoaded', function() {
        let closeButton = document.querySelector('#success-alert .X-close');
        if (closeButton) {
            closeButton.addEventListener('click', function() {
                let successAlert = document.querySelector('#success-alert');
                if (successAlert) {
                    successAlert.style.display = 'none'; // Ẩn thông báo khi người dùng nhấp vào nút "Close"
                }
            });
        }
    });
// })
