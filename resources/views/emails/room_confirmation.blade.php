<!-- resources/views/emails/room_confirmation.blade.php -->
<h1>Room Booking Confirmation</h1>
<p>Dear {{ $name }},</p>
<p>Your room has been booked successfully. Here are the details:</p>
<ul>
    <li>Room Code: {{ $room_code }}</li>
    <li>Price: {{ $price }}</li>
    <li>Email: {{ $email }}</li>
    <li>Name: {{ $name }}</li>
    <li>Number: {{ $number }}</li>
    <li>Check-in: {{ $check_in }}</li>
    <li>Check-out: {{ $check_out }}</li>
    <li>Payment Method: {{ $payment_method }}</li>
    <li>Booking Status: {{ $booking_status }}</li>
</ul>
<p>Thank you for choosing our service!</p>
