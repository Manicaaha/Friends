<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friend List</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div class="baner"><h1>Portal Społecznościowy- moje konto</h1></div>
    <div class="glowny"><h2>Moje zainteresowania</h2>
    <ul>
        <li>muzyka</li>
        <li>film</li>
        <li>kukurydza</li>
    </ul>
    <h2>Moi znajomi</h2>
<?php
$lacz = mysqli_connect('localhost', 'root', '', 'dane');
$zap = "SELECT `imie`, `nazwisko`, `opis`, `zdjecie` FROM `osoby` WHERE `Hobby_id` IN (1, 2, 6);";
$wyn = mysqli_query($lacz, $zap);

while ($pyt = mysqli_fetch_assoc($wyn)) {
    echo '<div class="container">';
        echo '<div class="zdjecie"><img src="' . $pyt['zdjecie'] . '" alt="Przyjaciel"></div>';
        echo '<div class="opis">';
        echo '<h3>'. $pyt['imie'].' '.$pyt['nazwisko'].'</h3>';
        echo '<p>Ostatni wpis: ' . $pyt['opis'] . '</p>';
        echo '</div>';
    echo '</div>';
    echo '<div class="linia"><hr></div>';
}

mysqli_close($lacz);
?>

    </div>
    <div class="stopka">Stronę Wykonał: Martyna Borowska</div>
    <div class="stopka"><a href="ja@portal.pl">Napisz do mnie</a></div>
</body>
</html>