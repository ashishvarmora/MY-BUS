<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .payment-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>Payment Details</h2>
        <form id="payment-form">
            <input type="text" id="card-number" placeholder="Card Number" required>
            <input type="text" id="expiry" placeholder="MM/YY" required>
            <input type="text" id="cvv" placeholder="CVV" required>
            <button type="submit">Pay Now</button>
        </form>
    </div>
    
    <script>
        document.getElementById('payment-form').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Payment processed successfully!');
        });

        // Seat selection limit
        document.addEventListener("DOMContentLoaded", function() {
            let selectedSeats = 0;
            const maxSeats = 1;
            
            document.querySelectorAll('.seat').forEach(seat => {
                seat.addEventListener('change', function() {
                    if (this.checked) {
                        if (selectedSeats >= maxSeats) {
                            this.checked = false;
                            alert("You can only select up to " + maxSeats + " seat.");
                        } else {
                            selectedSeats++;
                        }
                    } else {
                        selectedSeats--;
                    }
                });
            });
        });
    </script>
</body>
</html>
