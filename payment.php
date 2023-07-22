<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];

    // Perform any necessary validation on the form inputs

    // Process the payment
    $paymentResult = processPayment($phone, $amount);

    // Handle the payment result
    if ($paymentResult === true) {
        // Payment successful
        $message = "Payment successful! Thank you.";
    } else {
        // Payment failed
        $message = "Payment failed. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Mobile Money Payment</title>
  <link rel="stylesheet" type="text/css" href="stylepay.css">
</head>
<body>
  <div class="container">
    <h1>Mobile Money Payment</h1>
    <?php if (isset($message)): ?>
      <p><?php echo $message; ?></p>
    <?php else: ?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" placeholder="Enter payment amount" required>

        <button type="submit">Make Payment</button>
      </form>
    <?php endif; ?>
  </div>
</body>
</html>

<?php
// Simulate payment processing function
function processPayment($phone, $amount)
{
    // Add your payment processing logic here
    // This is a placeholder function, so modify it to interact with your chosen payment gateway or mobile money provider's API

    // In this example, the payment is considered successful if the phone number is not empty and the amount is numeric
    if (!empty($phone) && is_numeric($amount)) {
        return true;
    }

    return false;
}
?>