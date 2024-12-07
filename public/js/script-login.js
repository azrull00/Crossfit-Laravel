
function togglePassword() {
    var passwordInput = document.getElementById('password');
    var toggleIcon = document.querySelector('.toggle-password');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    }
}

// Function to show snackbar
function showSnackbar(message) {
    const snackbar = document.getElementById("snackbar");
    snackbar.textContent = message;
    snackbar.className = "show";
    
    // After 3 seconds, remove the show class from snackbar
    setTimeout(function() { 
        snackbar.className = snackbar.className.replace("show", ""); 
    }, 3000);
}

// Function to handle login (fake login handler for demonstration)
function login() {
    // You can add real authentication here, for demo we just show snackbar
    showSnackbar("Login Sukses Bang ..");
}

function showSnackbar() {
    var snackbar = document.getElementById("snackbar");
    snackbar.className = "show";
    setTimeout(function() {
        snackbar.className = snackbar.className.replace("show", "");
    }, 3000); // Durasi 3 detik untuk menampilkan snackbar
}


// document.querySelector(".btn-signin").addEventListener("click", function(e) {
//     e.preventDefault();
    
//     // Validasi form login 
//     var email = document.getElementById("email").value;
//     var password = document.getElementById("password").value;
    
//     if (email === "azrull@test.com" && password === "password") {
//         showSnackbar();  // Memunculkan snackbar saat login sukses
//     } else {
//         alert("Email atau password salah!");
//     }
// });


