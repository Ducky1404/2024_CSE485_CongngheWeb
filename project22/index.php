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
            <label for="avatar">Avatar:</label>
            <input type="file" name="avatar" accept="image/*">
            <br>
            <label for="full_name" style="text-align: justify;">Full Name:</label>
            <input type="text" name="full_name" id="full_name" value="">
            <br>
            <label for="email" style="text-align: justify;">Email:</label>
            <input type="email" name="email" id="email" value="">
            <br>
            <label for="phone_number">Phone Number:</label>
            <input type="tel" name="phone_number" id="phone_number" value="">
            <br>
            <label for="company_name">Company Name:</label>
            <input type="text" name="company_name" id="company_name" value="">
            <br>
        </div>
    </form>
    <button type="submit">Save Changes</button>
</form>

</body>
</html>