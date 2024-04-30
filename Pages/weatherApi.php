<?php
$con = parse_ini_file("config.ini", true);
$env = $con['ENVIRONMENT'];
$url = $con[$env]['URL_ROOT'];
$app = $con[$env]['APP_ROOT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Weather Data</title>
    <link rel="stylesheet" href="<?php echo $url . 'styles.css'; ?>">
</head>
<body>
    <div id="weatherData"></div>

    <script>
        
        var jsonResponse = '{"coord":{"lon":-89.1028,"lat":30.438},"weather":[{"id":800,"main":"Clear","description":"clear sky","icon":"01n"}],"base":"stations","main":{"temp":69.26,"feels_like":70.07,"temp_min":63.64,"temp_max":73.38,"pressure":1013,"humidity":89},"visibility":10000,"wind":{"speed":11.5,"deg":190},"clouds":{"all":0},"dt":1714453920,"sys":{"type":2,"id":2015175,"country":"US","sunrise":1714475594,"sunset":1714523621},"timezone":-18000,"id":4429197,"name":"Bemidji","cod":200}';

        var weatherData = JSON.parse(jsonResponse);

        var cityName = weatherData.name;
        var temperature = weatherData.main.temp;
        var weatherDescription = weatherData.weather[0].description;

        document.getElementById('weatherData').innerHTML = `
            <h2>Weather in ${cityName}</h2>
            <p>Temperature: ${temperature} &#8451;</p>
            <p>Description: ${weatherDescription}</p>
        `;
    </script>
</body>
</html>
