<?php

function validateAge($age) {
    if (!is_numeric($age)) {
        throw new InvalidArgumentException("Umur harus berupa angka");
    }
    if ($age < 0) {
        throw new InvalidArgumentException("Umur tidak boleh negatif");
    }
    return true;
}

function validateName($name) {
    if (!is_string($name)) {
        throw new InvalidArgumentException("Nama harus berupa karakter");
    }
    if (trim($name) === "") {
        throw new InvalidArgumentException("Nama harus diisi");
    }
    if ($name !== "Dheo Abriliant") {
        throw new InvalidArgumentException("Nama tidak sesuai");
    }

    return true;
}

?>