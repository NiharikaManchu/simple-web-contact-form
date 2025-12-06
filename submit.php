<!DOCTYPE html>
<html>
<head>
    <title>Form Submitted</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f093fb, #f5576c);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result-box {
            background: #fff;
            padding: 30px 35px;
            width: 380px;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0,0,0,0.2);
            text-align: left;
        }

        h2 {
            text-align: center;
            color: #6c5ce7;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 12px;
            font-size: 15px;
            color: #555;
        }

        .back-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background: #6c5ce7;
            color: white;
            padding: 12px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: #5741c2;
        }
    </style>
</head>
<body>

<div class="result-box">
    <h2>Form Submitted</h2>

    <div class="info"><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></div>
    <div class="info"><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></div>
    <div class="info"><strong>Issue:</strong> <?php echo htmlspecialchars($_POST['issue']); ?></div>
    <div class="info"><strong>Comment:</strong> <?php echo nl2br(htmlspecialchars($_POST['comment'])); ?></div>

    <a class="back-btn" href="index.php">Back to Form</a>
</div>

</body>
</html>
