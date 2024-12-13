<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Petugas Login | SmartVentory</title>
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #6366f1;
            --secondary-color: #818cf8;
            --dark-color: #1e293b;
            --light-color: #f8fafc;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --gradient: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }

        body {
            background: linear-gradient(135deg, #f6f8ff 0%, #e9ecf9 100%);
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            padding: 40px;
            width: 100%;
            max-width: 450px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }

        .login-container:hover {
            transform: translateY(-5px);
        }

        .login-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .login-header h2 {
            color: var(--dark-color);
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 10px;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .login-header p {
            color: #64748b;
            font-size: 1rem;
            font-weight: 500;
        }

        .form-control {
            height: 50px;
            border-radius: 12px;
            padding: 12px 20px;
            font-size: 0.95rem;
            border: 2px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }

        .input-group-text {
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            background-color: #f8fafc;
            color: #64748b;
            width: 50px;
            justify-content: center;
        }

        .input-group .form-control {
            border-left: none;
        }

        .btn {
            height: 48px;
            padding: 0 24px;
            font-size: 0.95rem;
            font-weight: 600;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .btn-custom-primary {
            background: var(--gradient);
            border: none;
            color: white;
        }

        .btn-custom-primary:hover {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.2);
        }

        .btn-custom-danger {
            background: #fef2f2;
            color: var(--danger-color);
            border: none;
        }

        .btn-custom-danger:hover {
            background: #fee2e2;
            transform: translateY(-2px);
        }

        .input-group {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            border-radius: 12px;
            margin-bottom: 20px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-container {
            animation: fadeIn 0.6s ease-out;
        }

        .form-floating {
            position: relative;
        }

        .form-floating label {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            transition: all 0.2s ease;
            pointer-events: none;
            color: #64748b;
        }

        .form-floating input:focus ~ label,
        .form-floating input:not(:placeholder-shown) ~ label {
            top: 0;
            font-size: 0.85rem;
            background-color: white;
            padding: 0 6px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="login-header">
                <h2>SmartVentory</h2>
                <p>Welcome back, please login as a Petugas</p>
            </div>
            
            <form action="pro_login_petugas.php" method="post">
                <div class="input-group mb-4">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                    <div class="form-floating flex-grow-1">
                        <input 
                            type="text" 
                            class="form-control border-start-0" 
                            name="user" 
                            id="username"
                            placeholder="Username"
                            required
                        >
                        <label for="username">Username</label>
                    </div>
                </div>

                <div class="input-group mb-4">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                    <div class="form-floating flex-grow-1">
                        <input 
                            type="password" 
                            class="form-control border-start-0" 
                            name="pass" 
                            id="password"
                            placeholder="Password"
                            required
                        >
                        <label for="password">Password</label>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <a href="../index.php" class="btn btn-custom-danger">
                        <i class="fas fa-arrow-left me-2"></i>Back
                    </a>
                    <button 
                        type="submit" 
                        name="daftar" 
                        class="btn btn-custom-primary"
                    >
                        Login<i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
