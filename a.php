?php

$logFile = 'user_activity.log';
$currentUrl = $_POST['url'] ?? '';


$logMessage = "URL: $currentUrl\n";
file_put_contents($logFile, $logMessage, FILE_APPEND);
?>
