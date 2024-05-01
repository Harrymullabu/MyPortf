<?php
// Function to parse INI file with support for multi-dimensional keys
function parse_ini_file_multi($file, $process_sections = false, $scanner_mode = INI_SCANNER_NORMAL) {
    $explode_str = '.';
    $escape_char = "'";
    // load ini file the normal way
    $data = parse_ini_file($file, $process_sections, $scanner_mode);
    if (!$process_sections) {
        $data = array($data);
    }
    foreach ($data as $section_key => $section) {
        // loop inside the section
        foreach ($section as $key => $value) {
            if (strpos($key, $explode_str)) {
                if (substr($key, 0, 1) !== $escape_char) {
                    
                    $sub_keys = explode($explode_str, $key);
                    $subs =& $data[$section_key];
                    foreach ($sub_keys as $sub_key) {
                        if (!isset($subs[$sub_key])) {
                            $subs[$sub_key] = [];
                        }
                        $subs =& $subs[$sub_key];
                    }
                    // set the value at the right place
                    $subs = $value;
                    // unset the dotted key, we don't need it anymore
                    unset($data[$section_key][$key]);
                }
                // we have escaped the key, so we keep dots as they are
                else {
                    $new_key = trim($key, $escape_char);
                    $data[$section_key][$new_key] = $value;
                    unset($data[$section_key][$key]);
                }
            }
        }
    }
    if (!$process_sections) {
        $data = $data[0];
    }
    return $data;
}

// Load database credentials from config.ini
$config = parse_ini_file_multi("config.ini");
$db_config = $config['DB_NAME'];

// Extract database connection parameters
$DB_USER = $db_config['DB_USER'];
$DB_PASS = $db_config['DB_PASS'];
$DB_HOST = $db_config['DB_HOST'];
$DB_NAME = $db_config['DB_NAME'];

try {
    // Establish a connection to the database using PDO
    $conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
