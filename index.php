<!DOCTYPE html>

<html lang="pl">

<head>

    <meta charset="UTF-8">
    <title>Pierwsze podejście</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    

</head>

<body>
    <div class="grid-container">

        <div class="grid-item">komórka 1 - to jest pierwsza komórka</div>
        <div class="grid-item">komórka 2 - to jest druga komórka</div>
        <div class="grid-item">komórka 3 - to jest trzecia komórka</div>
        <div class="grid-item">komórka 4 - to jest czwarta komórka</div>
        <div class="grid-item">komórka 5 - to jest piąta komórka</div>
        <div class="grid-item">komórka 6 - to jest szóśta komórka</div>
        <div class="grid-item">komórka 7 - to jest siódma komórka</div>
        <div class="grid-item">komórka 8 - to jest ósma komórka</div>
        <div class="grid-item">komórka 9 - to jest dziewiąta komórka</div>

    </div>

    
    <?php

        $date=getdate();
        echo "Mamy rok $date[year]";

    ?>

</body>

</html>