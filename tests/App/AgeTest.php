<?php 

namespace testes\App;

use \PHPUnit\Framework\TestCase;

class AgeTest extends TestCase
{

    public function testCalculateAge() 
    {

        $today = new \DateTime();
        $dob = new \DateTime();
        $dob->setDate(1991, 9, 25);

        $age = new \App\Age($dob, $today);

        $this->assertEquals($age->calculate(), 29);
    }

}
