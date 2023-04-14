<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <section class="forms-section">
        <h1 class="section-title">Animated Forms</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Login
                    <span class="underline"></span>
                </button>
                <form class="form form-login">
                    <h1>look for a job?</h1>


                    <div class="circle">
                        <img src="default-profile-picture.jpg" alt="Profile picture">
                        <input type="file" id="profile-picture" name="profile-picture" accept=".jpg,.jpeg,.png"
                            style="display: none;">
                        <button class="upload-btn" type="button"
                            onclick="document.getElementById('profile-picture').click()">Upload</button>
                    </div>
                    <fieldset>
                        <div class="input-block"><label for="username">Username:</label><br>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="input-block"><label for="email">Email:</label><br>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="input-block"><label for="password">Password:</label><br>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="input-block"><label for="confirm_password">Confirm Password:</label><br>
                            <input type="password" id="confirm_password" name="confirm_password" required>
                        </div>
                        <div class="input-block"><label for="cv">CV:</label><br>
                            <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-login">Register</button>
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    Sign Up
                    <span class="underline"></span>
                </button>
                <form class="form form-signup">
                    <fieldset>
                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                        <div class="input-block">
                            <label for="signup-email">E-mail</label>
                            <input id="signup-email" type="email" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password">Password</label>
                            <input id="signup-password" type="password" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password-confirm">Confirm password</label>
                            <input id="signup-password-confirm" type="password" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-signup">Continue</button>
                </form>
            </div>
        </div>
    </section>











</body>

</html>
