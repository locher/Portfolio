<?php

// Include all files in /includes
foreach (glob(__DIR__ . '/core/*') as $file) {
    require_once $file;
}

require_once __DIR__ . '/blocks/blocks.php';

