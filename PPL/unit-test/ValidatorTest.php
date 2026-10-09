<?php

use PHPUnit\Framework\Testcase;

require_once "Validator.php";

class ValidatorTest extends Testcase {

    // === Test Age ===
    public function testValidAge() {
        $this->assertTrue(validateAge(30));
        $this->assertTrue(validateAge(-30));
    }
    public function testEmptyAgeThrowException() {
        $this->expectException(InvalidArgumentException::class);
        validateAge("");
    }
}

?>