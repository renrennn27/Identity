<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "<script>
                alert('All fields are required.');
                window.history.back();
              </script>";
        exit;
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $subject, $message]);

        echo "<script>
                alert('Message sent successfully!');
                window.location.href = 'index.php';
              </script>";
    } catch (PDOException $e) {
        echo "<script>
                alert('Error: " . addslashes($e->getMessage()) . "');
                window.history.back();
              </script>";
    }
}
?>
