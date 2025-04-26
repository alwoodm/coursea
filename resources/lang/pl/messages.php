<?php

/*
 * This file is kept for backward compatibility
 * It loads translations from the new structured files
 */

$translations = [];

// Safely include files that might not exist yet
$files = ['general.php', 'features.php', 'contact.php', 'notifications.php'];

foreach ($files as $file) {
    $filePath = __DIR__ . '/' . $file;
    if (file_exists($filePath)) {
        $translations = array_merge($translations, require $filePath);
    }
}

return $translations;
