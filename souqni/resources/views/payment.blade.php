@vite('resources/css/payment.css')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>صفحة الدفع</title>
  <link rel="stylesheet" href="payment_Style.css">
</head>

<body>

  <h2>Choose payment method</h2>

  <form action="/payment" method="POST">
    @csrf
    <input type="number" name="user_id" placeholder="Enter your user ID" required>
    <input type="number" name="amount" placeholder="Insert the amount" required>
    <input type="hidden" name="method" value="1">
    <button type="submit" class="card">Pay with Credit Card</button>
  </form>

  <form action="/payment" method="POST">
    @csrf
    <input type="number" name="user_id" placeholder="Enter your user ID" required>
    <input type="number" name="amount" placeholder="Insert the amount" required>
    <input type="hidden" name="method" value="2">
    <button type="submit" class="paypal">Pay with PayPal</button>
  </form>

  <button class="return_to_home" onclick="window.location.href='/home'">Return to Home Page</button>
  {{-- <script>
    function pay(method) {
      const amount = document.getElementById('amount').value;
      if (!amount) {
        alert("Enter the amount please");
        return;
      }

      alert(`سيتم الدفع بقيمة ${amount} عبر ${method === 'card' ? 'البطاقة' : 'PayPal'}`);

    }
  </script> --}}

</body>

</html>