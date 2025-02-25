<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: 'Segoe UI';
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
            position: relative;
        }

        .form-container h2 {
            margin-bottom: 30px;
            color: #333;
        }

        .input-group {
            margin-bottom: 25px;
            text-align: left;
            position: relative;
        }

        .input-group label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-weight: bold;
        }

        .input-group input {
            width: calc(100% - 27px);
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .input-group input:focus {
            border-color: #3498db;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        button:hover {
            background-color: #2980b9;
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo-img {
            max-width: 100px;
            margin-right: 15px;
        }

        .bar {
            height: 80px;
            width: 3px;
            background-color: #3498db;
            margin-right: 15px;
        }

        .university-info {
            text-align: left;
        }

        .university-name {
            font-weight: bold;
            font-size: 18px;
            color: #3498db;
            margin-bottom: 5px;
        }

        .tagline {
            font-size: 14px;
            color: #777;
        }

        .note {
            font-size: 14px;
            color: #777;
            margin-top: 20px;
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }

        .success-message {
            color: green;
            margin-top: 10px;
        }
         .show-password-icon {
            position: absolute;
            top: 70%;
            right: 20px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #777;
        }
    </style>
</head>
<body>
<div class="form-container">
    <div class="logo-container">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8c/American_International_University-Bangladesh_Monogram.svg/1200px-American_International_University-Bangladesh_Monogram.svg.png" alt="Logo" class="logo-img">
            <div class="bar"></div>
            <div class="university-info">
                <div class="university-name">American International University - Bangladesh</div>
                <div class="tagline">--Where leaders are created</div>
            </div>
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?users_id=<?php echo htmlspecialchars($users_id); ?>" method="POST">
            <div class="input-group">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" placeholder="Enter your new password">
                <span class="show-password-icon" onclick="togglePasswordVisibility(this)"><i class="fas fa-eye"></i></span>
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm New Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your new password">
                <span class="show-password-icon" onclick="togglePasswordVisibility(this)"><i class="fas fa-eye"></i></span>
            </div>
            <button type="submit">Reset Password</button>
            <?php if(!empty($error_message)): ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <?php if(!empty($success_message)): ?>
                <div class="success-message"><?php echo $success_message; ?></div>
            <?php endif; ?>
            <p class="note">Please enter your new password and confirm it to reset your password.</p>
        </form>
    </div>

    <script src="../View/index.js"></script>

</body>
</html>