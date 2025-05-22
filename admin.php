<?php
include 'config.php';

$stmt = $pdo->query("SELECT * FROM contacts ORDER BY created_at DESC");
$contacts = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Contact Messages</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Contact Messages</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
        <?php foreach($contacts as $contact): ?>
        <tr>
            <td><?= $contact['id'] ?></td>
            <td><?= htmlspecialchars($contact['name']) ?></td>
            <td><?= htmlspecialchars($contact['email']) ?></td>
            <td><?= htmlspecialchars($contact['subject']) ?></td>
            <td><?= substr(htmlspecialchars($contact['message']), 0, 100) ?>...</td>
            <td><?= $contact['created_at'] ?></td>
            <td><?= $contact['status'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>