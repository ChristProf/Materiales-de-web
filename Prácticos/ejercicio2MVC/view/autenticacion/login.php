<!-- /view/autenticacion/login.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <h1>Login</h1>
    <form action="/login" method="POST">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="contra" name="contra" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        <?php if (isset($error)): ?>
            <p><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
    </form>
</body>
</html>
