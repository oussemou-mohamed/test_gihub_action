<?php
// Assurez-vous que le chemin d'accès et le nom du fichier correspondent à l'espace de noms et à la structure définis.
// Par exemple, si votre fichier de test est situé dans tests/CalculatorTest.php

namespace MonApp\Tests;

use MohamedOussemou\Hollo\Calculator;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
    }
}
