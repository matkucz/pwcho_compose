<?php
echo "<ul>";
$dane = file_get_contents("http://10.0.11.3:8080");
$dane = json_decode($dane);
foreach($dane as $rekord) {
    echo "<li>" . "id: " . $rekord->id . "imie: " . $rekord->imie . "nazwisko: " . $rekord->nazwisko . "</li>";
}
echo "</ul>";
?>
