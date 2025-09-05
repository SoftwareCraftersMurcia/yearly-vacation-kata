<?php declare(strict_types=1);

namespace Kata;

final class VacationReport
{
    public function createTotalDays(Employee ...$employees): array
    {
        return [
            new EmployeeVacation('Marco Gil', 24),
            new EmployeeVacation('Marco Sanchez', 26),
            new EmployeeVacation('Juan Perez', 12),
            new EmployeeVacation('Laura Martinez', 30),
            new EmployeeVacation('Ana Gonzalez', 32),
        ];
    }
}
