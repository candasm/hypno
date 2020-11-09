<?php

namespace Candasm\Hypno;

class Hypnosis implements Hypnotize
{
    /**
     * Delay execution
     *
     * @link https://php.net/manual/en/function.sleep.php
     * @param int $seconds <p>
     * Halt time in seconds.
     * </p>
     * @return int zero on success, or false on errors. If the call was interrupted
     * by a signal, sleep returns the number of seconds left
     * to sleep.
     */
    public function sleep($seconds)
    {
        return sleep($seconds);
    }

    /**
     * Delay execution in microseconds
     *
     * @link https://php.net/manual/en/function.usleep.php
     * @param int $micro_seconds <p>
     * Halt time in micro seconds. A micro second is one millionth of a
     * second.
     * </p>
     * @return void
     */
    public function usleep($microSeconds)
    {
        return usleep($microSeconds);
    }

    /**
     * Delay for a number of seconds and nanoseconds
     *
     * @link https://php.net/manual/en/function.time-nanosleep.php
     * @param int $seconds <p>
     * Must be a positive integer.
     * </p>
     * @param int $nanoseconds <p>
     * Must be a positive integer less than 1 billion.
     * </p>
     * @return bool|array true on success or false on failure.
     * </p>
     * <p>
     * If the delay was interrupted by a signal, an associative array will be
     * returned with the components:
     * seconds - number of seconds remaining in
     * the delay
     * nanoseconds - number of nanoseconds
     * remaining in the delay
     */
    public function nanosleep($seconds, $nanoseconds)
    {
        return time_nanosleep($seconds, $nanoseconds);
    }

    /**
     * Make the script sleep until the specified time
     *
     * @link https://php.net/manual/en/function.time-sleep-until.php
     * @param float $timestamp <p>
     * The timestamp when the script should wake.
     * </p>
     * @return bool true on success or false on failure.
     */
    public function sleepUntil($timestamp)
    {
        return time_sleep_until($timestamp);
    }
}
