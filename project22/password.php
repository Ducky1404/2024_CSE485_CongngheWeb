<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
</head>
<body>
<h1>Account Settings</h1>
<a href="index.php"   > <h2>Profile</h2></a>
<a href="password.php"   > <h2>Password</h2></a>
<a href="intergrations.php"   > <h2>Intergrations</h2></a>
<a href="billing.php"   > <h2>Billing</h2></a>
<style>
    a {
        color: black;
        text-decoration: none;
    }

    a:hover {
        color: red;
    }
</style>
<form action="update_account.php" method="post">

    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            width: 200px;
            margin-bottom: 10px;
        }
    </style>

    <form>

        <div>
            <br>
            <label for="current_password" style="text-align: left; margin-bottom: 5px;">Current Password:</label>
            <input type="password" name="current_password" id="current_password">
            <br>
            <label for="new_password" style="text-align: left; margin-bottom: 5px;">New Password:</label>
            <input type="password" name="new_password" id="new_password">
            <br>
            <label for="confirm_password" style="text-align: left; margin-bottom: 5px;">Confirm New Password:</label>
            <input type="password" name="confirm_password" id="confirm_password">
            <br>
        </div>

    </form>
    <button type="submit">Save Changes</button>
</form>

</body>
</html>