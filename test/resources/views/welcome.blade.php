<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Statements</title>
</head>
<body>
    @foreach($customers as $customer)
    <h1><em>Rentals for {{ $customer['name'] }}</em></h1>
    
    <ul>
        @foreach($customer['rentals'] as $rental)
        <li>{{ $rental['movie'] }}: {{ $rental['amount'] }}</li>
        @endforeach
    </ul>
    
    <p><em>Total Charge: ${{ $customer['totalAmount'] }}</em></p>
    <p><em>Total Frequent Renter Points: {{ $customer['frequentRenterPoints'] }}</em></p>
    
    @if (!$loop->last)
    <hr> <!-- Add a horizontal line between customers -->
    @endif
    @endforeach
</body>
</html>
