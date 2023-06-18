<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Login</title>
    <style>
        .container2 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        
        .login-section,
        .registration-section {
            background-color: #4ed9d6;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .login-section h2,
        .registration-section h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }
        
        .form-group label {
            font-size: 1.5rem;
        }
        
        .form-group input {
            width: 100%;
            padding: 0.5rem;
            font-size: 1.5rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        
        .checkbox {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 1.5rem;
        }
        
        .checkbox label {
            font-size: 1.5rem;
            margin-left: 0.5rem;
        }
        
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-size: 1.5rem;
            border-radius: 5px;
            background-color: #27ae60;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #219653;
        }
        
        p a {
            color: #27ae60;
            text-decoration: underline;
        }
        
        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 0.5rem 1rem;
            font-size: 1.5rem;
            background-color: #27ae60;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>

</head>
<body>

    <header>
        <button class="back-button" onclick="goBack()">Home</button>
    </header>
    

    <main class="container2">
        <section class="login-section" id="login-section">
            <h2>Login</h2>
            <form action="login.php" method="POST" id="login-form">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="" id="remember-me">
                    <label for="remember-me"> remember me</label>
                </div>
                <?php
                if (isset($_GET['error'])) {
                $errorMsg = $_GET['error'];
                echo '<p class="error-message">' . $errorMsg . '</p>';
                }
                ?>
                <button type="submit" class="btn">Login</button>

                <p>forget password ? <a href="#">click here</a></p>
                <p>don't have an account ? <a href="#" id="create-account-link">create one</a></p>

            </form>
        </section>

        <section class="registration-section" id="registration-section" style="display: none;">
            <div class="registration-form-container" id="registration-form-container">
                <h2>Create an Account</h2>
                <form action="register.php" method="POST" id="registration-form">
                    <div class="form-group">
                        <label for="first-name">First Name:</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name:</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" id="age" name="age" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone-number">Phone Number:</label>
                        <input type="tel" id="phone-number" name="phone-number" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password:</label>
                        <input type="password" id="confirm-password" name="confirm-password" required>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="agree-checkbox" required>
                        <label for="agree-checkbox">I agree to the terms and conditions</label>
                    </div>
                    <button type="submit" class="btn">Create</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <!-- Footer content here -->
    </footer>

    <script>
         function goBack() {
            window.location.href = "index.php";
        }
        // JavaScript code to handle form display
        const createAccountLink = document.getElementById('create-account-link');
        const loginSection = document.getElementById('login-section');
        const registrationSection = document.getElementById('registration-section');

        createAccountLink.addEventListener('click', function (event) {
            event.preventDefault();
            loginSection.style.display = 'none';
            registrationSection.style.display = 'block';
        });
    </script>

</body>
</html>