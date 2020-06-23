<?php
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek username dan password
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        // jika benar redirect
        header("Location: Pertemuan7-Admin.php");
        exit;
    } else {
        // jika salah tampilkan
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">username/password salah!</p>
    <?php endif; ?>

    <ul>
        <form method="post">
            <li>
                <label>
                    Username
                    <input type="text" name="username">
                </label>
            </li>
            <li>
                <label>
                    Password
                    <input type="password" name="password">
                </label>
            </li>
            <li>
                <button type="submit" name="submit">Masuk!</button>
            </li>
        </form>
    </ul>
</body>

</html>