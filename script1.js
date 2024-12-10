$(document).ready(function () {
    $('#registrationForm').submit(function (event) {
        event.preventDefault(); // Prevent form from refreshing the page

        // Capture input values
        let name = $('#name').val();
        let usn =$('#usn').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let address = $('#address').val();
        let gender = $('#gender').val();

        // Display the success message
        $('#displayName').text(name);
        $('#displayUSN').text(usn);
        $('#displayEmail').text(email);
        $('#displayPhone').text(phone);
        $('#displayAddress').text(address);
        $('#displayGender').text(gender);

        $('#successMessage').show();
    });
});
