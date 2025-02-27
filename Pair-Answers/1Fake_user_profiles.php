<?php
/*
Create PHP Script to Generate Fake User Profiles,
but this time localized data for the Philippines.
Each user profile should contain the following information:
1. Name
2. Email Address
3. Phone Number
4. Birthday
5. Job Title
6. Complete Address
*/
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH'); // Filipino locale
echo 
'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    < <title>Fake User Data (Philippines)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-4">
    <h1 class="text-center">Fake User Data (Philippines)</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Birthday</th>
                <th>Job Title</th>
                <th>Complete Address</th>
            </tr>
        </thead>
        <tbody>';
for ($i = 0; $i < 5; $i++) {
    
}
?>