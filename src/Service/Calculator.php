<?php

namespace App\Service;

/**
 * Calculator service.
 */
class Calculator {

    /**
     * @param $var_first
     * @param $var_second
     *
     * @return mixed
     */
    public function addition($var_first, $var_second) {
        return $var_first + $var_second;
    }

    /**
     * @param $var_first
     * @param $var_second
     *
     * @return mixed
     */
    public function subtraction($var_first, $var_second) {
        return $var_first - $var_second;
    }

    /**
     * @param $var_first
     * @param $var_second
     *
     * @return float|int
     */
    public function multiplication($var_first, $var_second) {
        return $var_first * $var_second;
    }

    /**
     * @param $var_first
     * @param $var_second
     *
     * @return float|int
     */
    public function division($var_first, $var_second) {
        return $var_first / ($var_second ?: 1);
    }
}