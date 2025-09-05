<?php
declare(strict_types=1);

namespace Kata;

final readonly class VacationCalculator implements VacationCalculatorInterface
{
    private const DEFAULT_VACATION_DAYS = 24;

    public function __construct(
        private \DateTimeImmutable $today
    ) {
    }

    public function calculateTotalDays(Employee $employee): int
    {
        $totalDays = self::DEFAULT_VACATION_DAYS;
        if ($employee->specialContractDays !== null) {
            $totalDays = $employee->specialContractDays;
        }

        if((int)$this->today->format('Y') === $employee->getStartYear()){
            $totalDays = ($this->today->format('n')) * ($totalDays/12);
        }

        return $totalDays;
    }
}
