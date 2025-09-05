<?php declare(strict_types=1);

namespace Kata;

final class VacationReport
{
    public function __construct(
        private VacationCalculatorInterface $calculator
    ) {
    }

    /**
     * @return list<EmployeeVacation>
     */
    public function createTotalDays(Employee ...$employees): array
    {
        $result = [];
        foreach ($employees as $employee) {
            $days = $this->calculator->calculateTotalDays($employee);
            $result[] = new EmployeeVacation($employee->name, $days);
        }
        return $result;
    }
}
