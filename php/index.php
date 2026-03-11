<?php

$componentName = $_GET['component'] ?? 'DefaultComponent';

switch ($componentName) {
    case 'ProbandoEtaLoquera':
        include 'ProbandoEtaLoquera.php';
        break;
    case 'CurrentTime':
        echo "<p>Current server time: " . date('Y-m-d H:i:s') . "</p>";
        break;
    case 'Hero':
        include 'components/home/Hero.php';
        break;
    case 'Companies':
        include 'components/home/Companies.php';
        break;
    case 'Values':
        include 'components/home/Values.php';
        break;
    case 'Projects':
        include 'components/home/Projects.php';
        break;
    case 'LastBlogPosts':
        include 'components/home/LastBlogPosts.php';
        break;
    case 'Cta':
        include 'components/home/Cta.php';
        break;
    default:
        echo "<p>PHP Component: {$componentName} not found. Displaying default.</p>";
        echo "<p>This is a default message from a PHP component.</p>";
        break;
}
