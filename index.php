<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #f3f4f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            background: white;
            padding: 30px;
            width: 360px;
            border-radius: 14px;
            box-shadow: 0 5px 18px rgba(0,0,0,0.12);
        }

        .form-box h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 16px;
        }

        .input-group label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        .input-group input,
        .input-group select,
        .input-group textarea {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
        }

        .input-group input:focus,
        .input-group select:focus,
        .input-group textarea:focus {
            border-color: #6c5ce7;
            box-shadow: 0 0 6px rgba(108,92,231,0.3);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #6c5ce7;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
            margin-top: 5px;
            transition: 0.25s;
        }

        button:hover {
            background: #5a4bd6;
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
                <option>Login Issue</option>
                <option>Payment Problem</option>
                <option>Account Error</option>
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

