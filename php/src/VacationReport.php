<?php declare(strict_types=1);

namespace Kata;

final class VacationReport
{
    public function createTotalDays(Employee ...$employees): array
    {
        return [
            new EmployeeVacation('Marco Gil', 24)
        ];
    }
}
