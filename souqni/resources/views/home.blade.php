@vite('resources/css/home.css')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Main Page</title>
</head>

<body>
  <!-- قائمة الزاوية اليسرى -->
  <div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">☰ Menu</button>
    <div class="dropdown-content">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-link">Log out</button>
      </form>
    </div>
  </div>
</div>

{{-- رسائل الترحيب و الخطأ --}}
@if (session('success'))
    <div class="toast-message success" id="toastMessage">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="toast-message error" id="toastMessage">
        {{ session('error') }}
    </div>
@endif

  <!-- محتوى الصفحة الرئيسي -->
  <h1>Welcome!</h1>
  <button onclick="window.location.href='/payment'">Go to payment page</button>

  <script>
    window.addEventListener('DOMContentLoaded', () => {
        const toast = document.getElementById('toastMessage');
        if (toast) {
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => {
                    toast.style.display = 'none';
                }, 500);
            }, 4000);
        }
    });
</script>

</body>

</html>