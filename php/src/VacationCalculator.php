<?php
declare(strict_types=1);

namespace Kata;

final readonly class VacationCalculator implements VacationCalculatorInterface
{
    public function calculateTotalDays(Employee $employee): int
    {
        return 26;
    }
}
