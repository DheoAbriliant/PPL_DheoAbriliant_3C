<?php

require_once "Validator.php";

try {
    $result = validateName("Dheo Abriliant");
    echo "FAIL: . Error: " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "PASS: Nama sesuai\n";
}

try {
    $result = validateName("Dheo Abriliant1212");
    echo "PASS: Nama sesuai\n";
} catch (Exception $e) {
    echo "FAIL: . Error: " . $e->getMessage() . "\n";
}

try {
    $result = validateName("");
    echo "PASS: Nama sesuai\n";
} catch (Exception $e) {
    echo "FAIL: . Error: " . $e->getMessage() . "\n";
}

?>