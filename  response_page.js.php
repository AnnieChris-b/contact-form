<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Response</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Form Submission Successful</h2>
        <link rel="stylesheet" href="styles.css">
        <p>Thank you for your submission. Here is the information you provided:</p>
        <hr>
        <div class="form-data">
        <?php
        foreach($_POST as $key => $value){
            echo "<p><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</p>";
        }
        foreach($_GET as $key => $value){
            echo "<p><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</p>";
        }
        ?>
        </div>
    </div>
</body>
</html>
