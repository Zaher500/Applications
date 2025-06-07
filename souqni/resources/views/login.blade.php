@vite('resources/css/login.css')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>

    <div class="container">
        <div class="left-panel">
            <h2><span>S</span>ouqni</h2>
            <p>We are very happy to have you join our family.🤗</p>
            <span>www.Souqni.com</span>
        </div>

        <div class="form-box">
            <!-- ✅ رسالة النجاح/الخطأ مع Animation -->
            @if (session('success'))
                <div class="alert-message success" id="alertMessage">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert-message error" id="alertMessage">
                    {{ session('error') }}
                </div>
            @endif

            <p style="margin-bottom: 10px;"><b>Login Your Account</b></p>

            <form method="POST" action="/login">
                @csrf
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>

                    <label for="role">Login as</label>
                    <select id="role" name="role" required>
                        <option value="" disabled selected>Select your role</option>
                        <option value="customer">Customer</option>
                        <option value="sales person">Sales person</option>
                    </select>
                </div>

                <div class="button-group">
                    <input type="submit" value="SUBMIT" class="btn">
                </div>

                <div class="signup-link">
                    <p>Don't have an account? <a href="/register">Create Account</a></p>
                </div>
            </form>

            @if ($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <!-- ✅ JavaScript لإظهار الرسالة وإخفائها -->
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const alert = document.getElementById('alertMessage');
            if (alert) {
                alert.classList.add('show');
                setTimeout(() => {
                    alert.classList.remove('show');
                    setTimeout(() => {
                        alert.style.display = 'none';
                    }, 500);
                }, 4000);
            }
        });
    </script>
</body>

</html>
