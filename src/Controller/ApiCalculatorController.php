<?php

namespace App\Controller;

use App\Service\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api-calculator", name="api_calculator")
 */
class ApiCalculatorController extends AbstractController
{

    /**
     * @var \App\Service\Calculator
     */
    protected Calculator $calculator;

    /**
     * @param \App\Service\Calculator $calculator
     */
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @Route("/addition/{var_first}/{var_second}", name="calculator_addition", methods={"GET"}, requirements={"var_first"="[+-]?([0-9]*[.])?[0-9]+", "var_second"="[+-]?([0-9]*[.])?[0-9]+"})
     */
    public function addition(float $var_first, float $var_second): JsonResponse
    {
        return $this->json([
            'result' => $this->calculator->addition($var_first, $var_second),
        ]);
    }

    /**
     * @Route("/subtraction/{var_first}/{var_second}", name="calculator_subtraction", methods={"GET"}, requirements={"var_first"="[+-]?([0-9]*[.])?[0-9]+", "var_second"="[+-]?([0-9]*[.])?[0-9]+"})
     */
    public function subtraction(float $var_first, float $var_second): JsonResponse
    {
        return $this->json([
            'result' => $this->calculator->subtraction($var_first, $var_second),
        ]);
    }

    /**
     * @Route("/multiplication/{var_first}/{var_second}", name="calculator_multiplication", methods={"GET"}, requirements={"var_first"="[+-]?([0-9]*[.])?[0-9]+", "var_second"="[+-]?([0-9]*[.])?[0-9]+"})
     */
    public function multiplication(float $var_first, float $var_second): JsonResponse
    {
        return $this->json([
            'result' => $this->calculator->multiplication($var_first, $var_second),
        ]);
    }

    /**
     * @Route("/division/{var_first}/{var_second}", name="calculator_division", methods={"GET"}, requirements={"var_first"="[+-]?([0-9]*[.])?[0-9]+", "var_second"="[+-]?([0-9]*[.])?[0-9]+"})
     */
    public function division(float $var_first, float $var_second): JsonResponse
    {
        return $this->json([
            'result' => $this->calculator->division($var_first, $var_second),
        ]);
    }
}
