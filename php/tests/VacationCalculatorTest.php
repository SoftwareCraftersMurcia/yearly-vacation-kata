<?php
declare(strict_types=1);

namespace KataTests;

use DateTimeImmutable;
use Kata\Employee;
use Kata\VacationCalculator;
use PHPUnit\Framework\TestCase;

final class VacationCalculatorTest extends TestCase
{
    private VacationCalculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new VacationCalculator(
            DateTimeImmutable::createFromFormat('Y-m-d','2025-06-01')
        );
    }

    public function test_calculate_total_days_case_1(): void
    {
        $actual = $this->calculator->calculateTotalDays(
            new Employee(
                'Marco Sanchez',
                '12.07.1999',
                '01.01.2024',
                null,
            ),
        );

        self::assertEquals(24, $actual);
    }

    public function test_calculate_total_days_case_2(): void
    {
        $actual = $this->calculator->calculateTotalDays(
            new Employee(
                'Marco Sanchez',
                '12.07.1999',
                '01.01.2024',
                26,
            ),
        );

        self::assertEquals(26, $actual);
    }

    public function test_calculate_total_days_case_3(): void
    {
        $actual = $this->calculator->calculateTotalDays(
            new Employee(
                'Juan Perez',
                '30.12.1997',
                '01.01.2025',
                null,
            ),
        );

        self::assertEquals(12, $actual);
    }
}
