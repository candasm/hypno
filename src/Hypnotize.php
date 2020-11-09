<?php

namespace Candasm\Hypno;

interface Hypnotize
{
    /**
     * Delay execution
     *
     * @param int $seconds
     * @return int|bool
     */
    public function sleep($seconds);

    /**
     * Delay execution in microseconds
     *
     * @param int $microSeconds
     * @return void
     */
    public function usleep($microSeconds);

    /**
     * Delay for a number of seconds and nanoseconds
     *
     * @param int $seconds
     * @param int $nanoseconds
     * @return bool|array
     */
    public function nanosleep($seconds, $nanoseconds);

    /**
     * Make the script sleep until the specified time
     *
     * @param float $timestamp
     * @return bool
     */
    public function sleepUntil($timestamp);
}
