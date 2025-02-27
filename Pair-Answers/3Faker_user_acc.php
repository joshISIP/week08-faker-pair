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
$password = hash('sha256', $faker->password);
$account_created = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now')->format('Y-m-d H:i:s');
echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake User Accounts with System</title>
</head>
<body>
    
</body>
</html>
';
?>