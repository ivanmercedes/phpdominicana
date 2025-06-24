<?php

$componentName = $_GET['component'] ?? 'DefaultComponent';

switch ($componentName) {
    case 'ProbandoEtaLoquera':
        include 'ProbandoEtaLoquera.php';
        break;
    case 'CurrentTime':
        echo "<p>Current server time: " . date('Y-m-d H:i:s') . "</p>";
        break;
    default:
        echo "<p>PHP Component: {$componentName} not found. Displaying default.</p>";
        echo "<p>This is a default message from a PHP component.</p>";
        break;
}
