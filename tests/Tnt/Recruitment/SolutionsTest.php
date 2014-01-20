<?php

namespace Tnt\Recruitment;


class SolutionsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Solutions
     */
    private $target;

    public function setup()
    {
        $this->target = new Solutions();
    }

    /**
     * @test
     */
    public function question11ShouldReturnString()
    {
        // Fixture
        // Test
        $actual = $this->target->question11();

        // Assert
        $this->assertEquals('ABCDEFGHIJKLMNOPQRSTUVWXYZÅÄÖ0123456789', $actual);
    }

    /**
     * @test
     */
    public function question12SExecute()
    {
        // Fixture
        // Test
        $this->target->question12();

        // Assert
    }

    /**
     * @test
     */
    public function question13ShouldAcceptValidEmailAddress()
    {
        // Fixture

        // Test
        $actual = $this->target->question13("god@universe.com");

        // Assert
        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function question13ShouldRejectInvalidEmailAddress()
    {
        // Fixture

        // Test
        $actual = $this->target->question13("not an address");

        // Assert
        $this->assertFalse($actual);
    }

    /**
     * @test
     */
    public function question14ShouldSortByName()
    {
        // Fixture
        $values = [
            ['name' => 'Pluto', 'type' => 'Dog'],
            ['name' => 'Donal Duck', 'type' => 'Duck'],
            ['name' => 'Mickey Mouse', 'type' => 'Mouse']
        ];

        // Test
        $this->target->question14($values);

        // Assert
        $expected = [
            ['name' => 'Donal Duck', 'type' => 'Duck'],
            ['name' => 'Mickey Mouse', 'type' => 'Mouse'],
            ['name' => 'Pluto', 'type' => 'Dog']
        ];
        $this->assertEquals($expected, $values);
    }
}
 