<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <style>
        /* Background */
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

        /* Form Container */
        .form-box {
            background: #fff;
            padding: 30px 35px;
            width: 380px;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0,0,0,0.2);
        }

        .form-box h2 {
            text-align: center;
            color: #6c5ce7;
            margin-bottom: 25px;
        }

        .input-group {
            margin-bottom: 18px;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        .input-group input,
        .input-group select,
        .input-group textarea {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ddd;
            outline: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .input-group input:focus,
        .input-group select:focus,
        .input-group textarea:focus {
            border-color: #6c5ce7;
            box-shadow: 0 0 8px rgba(108,92,231,0.3);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #6c5ce7;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #5741c2;
        }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Contact Us</h2>
    <form action="submit.php" method="post">
        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" required>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="input-group">
            <label>Issue</label>
            <select name="issue" required>
                <option value="">Select an issue</option>
                <option>Query</option>
                <option>Feedback</option>
                <option>Complaint</option>
                <option>Other</option>
            </select>
        </div>
        <div class="input-group">
            <label>Comments</label>
            <textarea name="comment" rows="4"></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
