<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Appointment System - Login</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background: linear-gradient(135deg, #0b3338 0%, #e0f7fa 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 32px 8px 32px 8px;
            box-shadow: 0 8px 32px rgba(0, 123, 255, 0.18), 0 1.5px 8px rgba(0,0,0,0.10);
            padding: 2.5rem 2.5rem 2rem 2.5rem;
            max-width: 480px;
            width: 100%;
            position: relative;
            overflow: hidden;
            z-index: 2;
        }
        .login-container::before {
            content: '';
            position: absolute;
            top: -70px;
            right: -70px;
            width: 160px;
            height: 160px;
            background: linear-gradient(135deg, #1976d2 60%, #00bcd4 100%);
            border-radius: 50%;
            opacity: 0.18;
            z-index: 0;
        }
        .login-container::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: -50px;
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #1976d2 60%, #00bcd4 100%);
            border-radius: 50%;
            opacity: 0.22;
            z-index: 0;
        }
        .login-image {
            width: 110px;
            display: block;
            margin: 0 auto 1.5rem auto;
            z-index: 1;
            position: relative;
            filter: drop-shadow(0 2px 12px rgba(0,123,255,0.13));
            transition: transform 0.3s;
        }
        .login-image:hover {
            transform: scale(1.08) rotate(-8deg);
        }
        .login-container h3 {
            font-family: 'Segoe UI', 'Arial', sans-serif;
            font-weight: 700;
            color: #1976d2;
            letter-spacing: 1.5px;
            z-index: 2;
            position: relative;
            margin-bottom: 1.2rem;
        }
        .form-label {
            color: #1976d2;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .form-control {
            border-radius: 14px;
            border: 1.5px solid #b2ebf2;
            box-shadow: 0 1px 4px rgba(33,150,210,0.04);
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .form-control:focus {
            border-color: #1976d2;
            box-shadow: 0 0 0 2px #b2ebf2;
        }
        .btn-primary {
            background: linear-gradient(90deg, #00bcd4 0%, #1976d2 100%);
            border: none;
            border-radius: 14px;
            font-weight: 700;
            letter-spacing: 0.7px;
            box-shadow: 0 2px 12px rgba(33,150,210,0.13);
            font-size: 1.1rem;
            padding: 0.7rem 0;
        }
        .btn-primary:hover, .btn-primary:focus {
            background: linear-gradient(90deg, #1976d2 0%, #00bcd4 100%);
            transform: translateY(-2px) scale(1.03);
        }
        .text-center small a {
            color: #00bcd4;
            text-decoration: underline;
            font-weight: 600;
        }
        .login-container .text-center {
            z-index: 2;
            position: relative;
        }
        .login-container .divider {
            border-top: 1.5px dashed #b2ebf2;
            margin: 2rem 0 1.2rem 0;
        }
        .login-footer {
            font-size: 0.98rem;
            color: #1976d2;
            opacity: 0.7;
            margin-top: 2.5rem;
            text-align: center;
        }
        @media (max-width: 600px) {
            .login-container {
                padding: 1.5rem 0.7rem 1.2rem 0.7rem;
                max-width: 98vw;
            }
            .login-image {
                width: 70px;
            }
        }
    </style>
</head>
<body>
    <?php
    session_start();
    $error = '';
    $login_success = false;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include 'db_connect.php';
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);
        $sql = "SELECT * FROM tbl_systemuser WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);
        if ($result && $result->num_rows === 1) {
            $user = $result->fetch_assoc();
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['systemrole'] = $user['systemrole'];
            $_SESSION['username'] = $user['username'];
            $login_success = true;
            $redirect_url = '';
            if ($user['systemrole'] === 'Admin') {
                $redirect_url = 'admin/admin_dashboard.php';
            } elseif ($user['systemrole'] === 'Doctor') {
                $redirect_url = 'doctor/doctor_dashboard.php';
            } elseif ($user['systemrole'] === 'Patient') {
                $redirect_url = 'patient/patient_dashboard.php';
            }
        } else {
            $error = 'Invalid username or password.';
        }
        $conn->close();
    }
    ?>
    <div class="login-container">
        <img src="images/tooth.png" alt="Dental Logo" class="login-image">
        <h3 class="text-center mb-4">Tooth Station Dental Clinic Login</h3>
        <form method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <div class="divider"></div>
        <div class="text-center mt-3">
            <small> Life is short. Smile while you still have teeth. </small>
        </div>
        <div class="login-footer">
            &copy; <?php echo date('Y'); ?> Tooth Station Dental Clinic
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    <?php if (isset($login_success) && $login_success && isset($redirect_url)): ?>
        Swal.fire({
            icon: 'success',
            title: 'Login Successful!',
            text: 'Redirecting to your dashboard...',
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            window.location.href = '<?php echo $redirect_url; ?>';
        });
    <?php elseif (!empty($error)): ?>
        Swal.fire({
            icon: 'error',
            title: 'Login Failed',
            text: '<?php echo $error; ?>',
            confirmButtonColor: '#1976d2'
        });
    <?php endif; ?>
    </script>
</body>
</html>
