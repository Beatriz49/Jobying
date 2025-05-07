<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
</head>
<body>
    <main>
        <?php if (!empty($notifications) && is_array($notifications)): ?>
            <ul>
                <?php foreach ($notifications as $notification): ?>
                    <li>
                        <strong><?= htmlspecialchars($notification['title']) ?></strong><br>
                        <span><?= htmlspecialchars($notification['message']) ?></span><br>
                        <small><?= htmlspecialchars($notification['date']) ?></small>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No notifications available.</p>
        <?php endif; ?>
    </main>
</body>
</html>
