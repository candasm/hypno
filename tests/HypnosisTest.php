<?php

namespace Candasm\Hypno\Tests;

use Candasm\Hypno\Hypnosis;
use PHPUnit\Framework\TestCase;

class HypnosisTest extends TestCase
{
    /** @var int */
    private $time;
    /** @var Hypnosis */
    private $hypnos;

    /** @before */
    public function prepare()
    {
        $this->time = time();
        $this->hypnos = new Hypnosis();
    }

    /** @test */
    public function it_should_delay_one_seconds()
    {
        $this->hypnos->sleep(1);
        $this->assertTime($this->time + 1);
    }

    /** @test */
    public function it_should_delay_two_seconds()
    {
        $this->hypnos->usleep(2000000);
        $this->assertTime($this->time + 2);
    }

    /** @test */
    public function it_should_delay_half_second()
    {
        $time = microtime();
        $this->hypnos->nanosleep(0, 500000000);
        $after = microtime();
        $time = number_format(explode(' ', $time)[0], 1);
        $after = number_format(explode(' ', $after)[0], 1);
        $this->assertEquals(0.5, $time - $after);
    }

    /** @test */
    public function it_should_sleep_three_seconds()
    {
        $this->hypnos->sleepUntil($this->time + 3);
        $this->assertTime($this->time + 3);
    }

    /**
     * Assert Time
     *
     * @param int $expectedTime
     */
    private function assertTime($expectedTime)
    {
        $this->assertEquals($expectedTime, time());
    }
}
