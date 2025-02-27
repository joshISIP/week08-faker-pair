<?php
/*
Create PHP Script to Generate Fake User Profiles,
but this time localized data for the Philippines.
Each user profile should contain the following information:
1. Name
2.Email Address
3. Phone Number
4. Birthday
5. Job Title
6. Complete Address
*/
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH'); // Filipino locale
echo "
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
";
?>