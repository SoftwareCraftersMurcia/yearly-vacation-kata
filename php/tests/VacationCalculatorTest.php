<?php
declare(strict_types=1);

namespace KataTests;

use DateTimeImmutable;
use Kata\Employee;
use Kata\EmployeeVacation;
use Kata\VacationCalculator;
use Kata\VacationCalculatorInterface;
use PHPUnit\Framework\TestCase;

final class VacationCalculatorTest extends TestCase
{
    public function test_calculate_total_days_case_2(): void
    {
        $calculator = new VacationCalculator();

        $actual = $calculator->calculateTotalDays(
            new Employee(
                'Marco Sanchez',
                '12.07.1999',
                '01.01.2024',
                26,
            ),
        );

        self::assertEquals(26, $actual);
    }
}
