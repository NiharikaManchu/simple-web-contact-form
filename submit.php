<!DOCTYPE html>
<html>
<head>
    <title>Submitted Information</title>
</head>
<body>

<h2>Your Submitted Details</h2>

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];
    $comments = $_POST['comments'];
?>

<p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
<p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
<p><strong>Issue:</strong> <?php echo htmlspecialchars($issue); ?></p>
<p><strong>Comments:</strong> <?php echo nl2br(htmlspecialchars($comments)); ?></p>

</body>
</html>
