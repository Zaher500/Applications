<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    {{-- <link rel="stylesheet" href="css/loginStyle"> --}}
</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1>Login</h1>
            <form method="POST" action="/welcome_page">
                @csrf
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                </div>
                <div class="button-group">
                    <input type="submit" value="Login" class="btn blue">
                    <p>you don't have account yet?</p><a href="/register" title="Sign up"><br>Sign up</a>
                </div>

            </form>
        </div>
    </div>
</body>


<style>
/* خلفية الموقع */
body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: url("background.png") no-repeat center center fixed;
    background-size: cover;
    animation: fadeIn 1.5s ease-in;
}

/* حاوية النموذج */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* صندوق النموذج */
.form-box {
    background-color: rgba(255, 255, 255, 0.85);
    padding: 40px 30px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(1, 1, 1, 1);
    width: 100%;
    max-width: 400px;
    animation: slideUp 0.8s ease-out;
}

/* العنوان */
h1 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
    color: #333;
    animation: fadeIn 1.2s ease;
}

/* كل مدخل */
.input-group {
    margin-bottom: 20px;
    opacity: 0;
    animation: fadeInUp 0.6s ease forwards;
}

.input-group:nth-child(2) { animation-delay: 0.3s; }
.input-group:nth-child(3) { animation-delay: 0.5s; }
.input-group:nth-child(4) { animation-delay: 0.7s; }

.input-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

.input-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    font-size: 15px;
    transition: all 0.3s ease;
}

.input-group input:focus {
    border-color: #007bff;
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
}

/* الأزرار */
.button-group {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 10px;
}

.btn {
    flex: 1;
    padding: 12px;
    font-size: 15px;
    font-weight: bold;
    border: none;
    border-radius: 10px;
    color: #fff;
    cursor: pointer;
    transition: transform 0.3s ease, background 0.3s;
}

.btn:hover {
    transform: scale(1.05);
    opacity: 0.95;
}

.btn.blue {
    background-color: #007bff;
}

.btn.green {
    background-color: #28a745;
}

/* الحركات */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from {
        transform: translateY(30px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes fadeInUp {
    from {
        transform: translateY(10px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}
    </style>

    
</html>