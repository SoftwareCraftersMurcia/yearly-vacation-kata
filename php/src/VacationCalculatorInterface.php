<?php

namespace Kata;

interface VacationCalculatorInterface
{
    public function calculateTotalDays(Employee $employee): int;
}
