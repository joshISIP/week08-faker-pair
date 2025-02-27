<?php
/*
Create a PHP Script to populate a Books Table using Faker.
Each book should have the following details:
1. Title
2. Author
3. Genre
4. Publication Year
5. ISBN (Random 13-digit number ISBN)
6. Summary
Predefined Genres: 
1. Fiction
2. Mystery
3. Thriller
4. Romance
5. Science Fiction
6. Fantasy
7. Horror
8. Historical
*/

require 'vendor/autoload.php';
$genres = ['Fiction', 'Mystery', 'Thriller', 'Romance', 'Science Fiction', 'Fantasy', 'Horror', 'Historical'];
$faker = Faker\Factory::create();


echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Book Records</title>
</head>
<body>
    <h1 class="text-center">Fake Book Records</h1>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Publication Year</th>
                <th>ISBN</th>
                <th>Summary</th>
            </tr>
        </thead>
        <tbody>';
    for ($i = 0; $i < 15; $i++) {
        echo 
        '<tr>
            <td>' . $faker->catchPhrase . '</td>
            <td>' . $faker->name . '</td>
            <td>' . $genres[array_rand($genres)] . '</td>
            <td>' . $faker->year($max = 'now') . '</td>
            <td>' . $faker->isbn13 . '</td>
            <td>' . $faker->realText($maxNbChars = 200, $indexSize = 2) . '</td>
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