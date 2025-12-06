<!DOCTYPE html>
<html>
<head>
    <title>Simple Contact Form</title>
</head>
<body>

<h2>Contact Form</h2>

<form action="submit.php" method="POST">
    
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Issue Type:</label><br>
    <select name="issue">
        <option value="Query">Query</option>
        <option value="Feedback">Feedback</option>
        <option value="Complaint">Complaint</option>
        <option value="Other">Other</option>
    </select><br><br>

    <label>Comments:</label><br>
    <textarea name="comments" rows="5" cols="40" required></textarea><br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>
