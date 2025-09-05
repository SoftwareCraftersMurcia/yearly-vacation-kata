<?php declare(strict_types=1);

namespace KataTests;

use Kata\Employee;
use Kata\VacationReport;
use PHPUnit\Framework\TestCase;

class VacationReportTest extends TestCase
{
    public function test_vacation_report(): void
    {
        $report = new VacationReport();

        $result = $report->createTotalDays(
            new Employee(
                'Marco Gil',
                '26.01.2001',
                '01.01.2024',
                null,
            ),
            new Employee(
                'Marco Sanchez',
                '12.07.1999',
                '01.01.2024',
                26,
            ),
            new Employee(
                'Juan Perez',
                '30.12.1997',
                '01.01.2025',
                null,
            ),
            new Employee(
                'Laura Martinez',
                '09.06.1989',
                '01.01.2018',
                null,
            ),
            new Employee(
                'Ana Gonzalez',
                '26.01.1966',
                '01.01.2014',
                null,
            ),
        );

        $expected = [
            [
                'name' => 'Marco Gil',
                'total' => 24,
            ]
        ];

        self::assertEquals($expected, $result);
    }
}
