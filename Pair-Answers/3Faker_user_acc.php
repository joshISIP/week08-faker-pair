<?php
/* 
Develop a User Accounts Table for a System.
Instead of using an integer for the User ID,
The Syste will use a UUID. Additionally,
user passwords should be securely stored using SHA-256 Encryption.

Each User Account Should Include:
1. User ID (Generated as UUID)
2. Full Name
3. Email Address
4. Username(lowercase version fo the first part of the email address)
5. Password (Randomly generated, SHA-256 Encrypted)
6. Account Created (Random Datetime in the past 2 years)
*/

require 'vendor/autoload.php';
$faker = Faker\Factory::create();
$uuid = $faker->uuid;
$fullname = $faker->name;
$email = $faker->email;
$username = explode('@', $email)[0];
$randomPassword = $faker->password;
$password = hash('sha256', $randomPassword);
$account_created = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now')->format('Y-m-d H:i:s');
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake User Accounts with System</title>
     <title>Fake User Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <body>
    <h1 class="text-center">Fake Book Records</h1>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Date Account Created</th>
            </tr>
        </thead>
        <tbody>';
for ($i = 0; $i < 10; $i++){
    echo
    '<tr>
        <td>' . $uuid . '</td>
        <td>' . $fullname . '</td>
        <td>' . $email . '</td>
        <td>' . $username . '</td>
        <td>' . $password . '</td>
        <td>' . $account_created . '</td>
    </tr>';
}
echo
        '</tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>';
?>