<?php
// Leer los datos enviados desde el formulario
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$guests = $_POST['guests'];
$roomType = $_POST['roomType'];
$signature = $_POST['signature'];
$total = $_POST['total'];
$paymentMethod = $_POST['paymentMethod'];

// Mostrar los datos recibidos
echo "<h1>Booking Confirmation</h1>";
echo "<p><strong>Name:</strong> $firstName $lastName</p>";
echo "<p><strong>Phone:</strong> $phone</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Check-in:</strong> $checkin</p>";
echo "<p><strong>Check-out:</strong> $checkout</p>";
echo "<p><strong>Number of Guests:</strong> $guests</p>";
echo "<p><strong>Room Type:</strong> $roomType</p>";
echo "<p><strong>Signature:</strong> $signature</p>";
echo "<p><strong>Total Cost:</strong> \$$total</p>";
echo "<p><strong>Payment Method:</strong> $paymentMethod</p>";

echo "<br><a href='hotel_booking.html'>Back to Form</a>";
?>
