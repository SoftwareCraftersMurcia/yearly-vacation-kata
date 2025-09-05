<?php
declare(strict_types=1);

namespace Kata;

final readonly class VacationCalculator implements VacationCalculatorInterface
{
    private const DEFAULT_VACATION_DAYS = 24;

    public function calculateTotalDays(Employee $employee): int
    {
        if ($employee->specialContractDays !== null) {
            return $employee->specialContractDays;
        }

        return self::DEFAULT_VACATION_DAYS;
    }
}
