    // function validatePassword() {
    //     var password = document.getElementById("password").value;
    //     var confirmPassword = document.getElementById("password_confirm").value;

    //     // Check if password meets the criteria for a strong password
    //     var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()])[a-zA-Z0-9!@#$%^&*()]{8,}$");
    //     if (!strongRegex.test(password)) {
    //         alert("Password must contain at least one lowercase letter, one uppercase letter, one numeric digit, one special character, and be at least 8 characters long.");
    //         return false;
    //     }

    //     // Check if password and confirm password fields match
    //     if (password !== confirmPassword) {
    //         alert("Passwords do not match.");
    //         return false;
    //     }

    //     return true;
    // }

    function validatePassword() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("password_confirm").value;
        var passwordStrength = document.getElementById("password-strength");

         // Check if password meets the criteria for a strong password
         var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()])[a-zA-Z0-9!@#$%^&*()]{8,}$");
         if (!strongRegex.test(password)) {
             passwordStrength.innerHTML = "Password must contain at least one lowercase letter, one uppercase letter, one numeric digit, one special character, and be at least 8 characters long.";
             passwordStrength.style.color = "red";
         } else {
             passwordStrength.innerHTML = "Strong password!";
             passwordStrength.style.color = "green";
         }
 
         // Check if password and confirm password fields match
         if (password !== confirmPassword) {
             passwordStrength.innerHTML = "Passwords do not match.";
             passwordStrength.style.color = "red";
             return false;
         }
         
     var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()])[a-zA-Z0-9!@#$%^&*()]{8,}$");
        if (!strongRegex.test(password)) {
            alert("Password must contain at least one lowercase letter, one uppercase letter, one numeric digit, one special character, and be at least 8 characters long.");
            return false;
        }

        // Check if password and confirm password fields match
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        return true;
    }
