 <?php
// Öffnet ein Unterverzeichnis mit dem Namen "daten"
$verzeichnis = openDir("scripts");
// Verzeichnis lesen
while ($file = readDir($verzeichnis)) {
 // Höhere Verzeichnisse nicht anzeigen!
 if ($file != "." && $file != "..") {
 // Link erstellen
  echo "<a href=\"daten/$file\">$file</a><br>\n";
 }
}
 // Verzeichnis schließen
closeDir($verzeichnis);
?> 