
// $(function () {
    // Lắng nghe sự kiện click vào nút đóng
    document.addEventListener('DOMContentLoaded', function() {
        let closeButton = document.querySelector('#success-alert .X-close');
        let errorCloseButton = document.querySelector('#error-alert .X-close');

        if (closeButton) {
            closeButton.addEventListener('click', function() {
                let successAlert = document.querySelector('#success-alert');
                if (successAlert) {
                    successAlert.style.display = 'none'; // Ẩn thông báo khi người dùng nhấp vào nút "Close"
                }
            });
        }
        if (errorCloseButton) {
            errorCloseButton.addEventListener('click', function() {
                let errorAlert = document.querySelector('#error-alert');
                if (errorAlert) {
                    errorAlert.style.display = 'none'; // Ẩn thông báo lỗi khi người dùng nhấp vào nút "Close"
                }
            });
        }
    });
// })
