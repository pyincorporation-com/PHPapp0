<?php
// Check if form data is submitted
$name = $email = $message = ""; // Initialize variables

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve submitted data
    $name = htmlspecialchars($_POST["name"]); // Sanitize user input
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        h1, h2 {
            color: #555;
        }
        form {
            margin-bottom: 20px;
            padding: 15px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 400px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .result {
            background: #e9f9e9;
            border: 1px solid #c3e6c3;
            padding: 15px;
            border-radius: 5px;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <h1>PHP Form Example</h1>
    <h2>Submit Your Details</h2>

    <!-- HTML Form -->
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <!-- Display Submitted Data -->
    <?php if ($name || $email || $message): ?>
        <div class="result">
            <h2>Submitted Data:</h2>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Message:</strong> <?php echo $message; ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
