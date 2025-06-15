$(document).ready(function() {
    // Toggle mật khẩu hiện tại
    $('#toggle-current-password').on('click', function() {
        const currentPasswordField = $('input[name="CurrentPassword"]');
        const currentPasswordFieldType = currentPasswordField.attr('type') === 'password' ? 'text' : 'password';
        currentPasswordField.attr('type', currentPasswordFieldType);
        $(this).find('i').toggleClass('icon-eye icon-eye-off');
    });

    // Toggle mật khẩu mới
    $('#toggle-password').on('click', function() {
        const passwordField = $('input[name="Password"]');
        const passwordFieldType = passwordField.attr('type') === 'password' ? 'text' : 'password';
        passwordField.attr('type', passwordFieldType);
        $(this).find('i').toggleClass('icon-eye icon-eye-off');
    });

    // Toggle xác nhận mật khẩu mới
    $('#toggle-confirm-password').on('click', function() {
        const confirmPasswordField = $('input[name="Password_confirmation"]');
        const confirmPasswordFieldType = confirmPasswordField.attr('type') === 'password' ? 'text' : 'password';
        confirmPasswordField.attr('type', confirmPasswordFieldType);
        $(this).find('i').toggleClass('icon-eye icon-eye-off');
    });
});

function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('previewImage');

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block'; // Hiện ảnh
        }

        reader.readAsDataURL(input.files[0]); // Đọc tệp tin
    }
}
