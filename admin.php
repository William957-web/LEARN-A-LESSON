<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'password') {
        header('Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ#FAKE{FAKE_FLAG}');
        exit();
    } else {
        $error = "登入錯誤，請檢查您的帳號和密碼。";
    }
}
?>

<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin 登入頁面</title>
</head>
<body>
    <h2>Admin 登入頁面</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form action="admin.php" method="post">
        <div>
            <label for="username">使用者名稱:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">密碼:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <input type="submit" name="submit" value="登入">
        </div>
    </form>
</body>
</html>
