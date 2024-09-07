document.getElementById('form-message').addEventListener('submit', function(event) {


    var yourname = document.getElementById("yourname").value
    var email = document.getElementById("email").value
    var phone = document.getElementById("phone").value
    var company = document.getElementById("company").value
    var message = document.getElementById("message").value

    var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var errormodal = new bootstrap.Modal(document.getElementById('error-modal'));

    if (yourname == '' || email == '' || phone == '' || company == '' || message == '') {
        event.preventDefault();
        errormodal.show();
    } else if (!regexEmail.test(email)) {
        event.preventDefault();
        errormodal.show();
    }
})