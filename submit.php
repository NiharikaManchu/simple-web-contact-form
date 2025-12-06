<!DOCTYPE html>
<html>
<head>
    <title>Submitted</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result-box {
            background: white;
            padding: 30px;
            width: 360px;
            border-radius: 14px;
            box-shadow: 0 5px 18px rgba(0,0,0,0.12);
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
            color: #333;
        }

        .info {
            margin-bottom: 10px;
            color: #555;
            font-size: 15px;
        }

        .back-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background: #6c5ce7;
            color: white;
            padding: 10px;
            border-radius: 8px;
        }

        .back-btn:hover {
            background: #5a4bd6;
        }
    </style>
</head>

<body>

<div class="result-box">
    <h2>Form Submitted</h2>

    <div class="info"><strong>Name:</strong> <?php echo $_POST['name']; ?></div>
    <div class="info"><strong>Email:</strong> <?php echo $_POST['email']; ?></div>
    <div class="info"><strong>Issue:</strong> <?php echo $_POST['issue']; ?></div>
    <div class="info"><strong>Comment:</strong> <?php echo $_POST['comment']; ?></div>

    <a class="back-btn" href="index.php">Back</a>
</div>

</body>
</html>
