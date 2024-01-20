<?php
// Load constants
$files = glob(__DIR__ . '/Constants/*.php');
if ($files === false) throw new RuntimeException("Failed to fetch constant files");
foreach ($files as $file) require_once $file;
// Load functions
$files = glob(__DIR__ . '/Functions/*.php');
if ($files === false) throw new RuntimeException("Failed to fetch function files");
foreach ($files as $file) require_once $file;
// Clean up
unset($file);
unset($files);
