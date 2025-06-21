<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Orders</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 32px;
            font-weight: bold;
            color: #333;
        }
        .container {
            width: 1300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            padding: 20px;
        }
        .image-container {
            flex: 1;
            padding-right: 20px;
        }
        .image-container img {
            width: 100%;
            border-radius: 10px;
        }
        .details-container {
            flex: 1;
        }
        .details-container .details {
            margin-top: 250px;
        }
        .details-container .details p {
            font-size: 14px;
            margin-bottom: 10px;
        }
        .details-container .details span {
            font-weight: bold;
        }
        .details-container .button-container {
            text-align: left;
            margin-top: 20px;
        }
        .details-container .btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-block;
        }
        .details-container .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <!-- Centered Title -->
    <h1 class="title">My Orders</h1>

    <div class="container">
        <div class="image-container">
            <img src="img\delivery.gif" alt="Delivery Image">
        </div>
        <div class="details-container">
            <div class="details">
                <p><span>Name: </span>arun</p>
                <p><span>Phone No: </span>9500458458</p>
                <p><span>Date: </span>2023-02-28 10:58:22</p>
                <p><span>Pickup Address: </span>palanganatham</p>
                <p><span>Delivery Address: </span>Narmatha Nadhi 4th street, Mahatma Gandhi Nagar, Madurai 625014, Tamil Nadu</p>
            </div>
            <div class="button-container">
                <a href="takeorder.php" class="btn">Take Order</a>
            </div>
        </div>
    </div>

</body>
</html>

