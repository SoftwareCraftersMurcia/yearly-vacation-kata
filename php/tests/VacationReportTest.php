<?php declare(strict_types=1);

namespace KataTests;

use Kata\VacationReport;
use PHPUnit\Framework\TestCase;

class VacationReportTest extends TestCase
{
    public function test_vacation_report(): void
    {
        $report = new VacationReport();

        $result = $report->createTotalDays([
            [
                'name' => 'Marco Gil',
                'birth_date' => '26.01.2001',
                'start_date' => '01.01.2024',
                'special_contract_days' => null,
            ],
            [
                'name' => 'Marco Sanchez',
                'birth_date' => '12.07.1999',
                'start_date' => '01.01.2024',
                'special_contract_days' => null,
            ],
            [
                'name' => 'Juan Perez',
                'birth_date' => '30.12.1997',
                'start_date' => '01.01.2025',
                'special_contract_days' => null,
            ],
            [
                'name' => 'Laura Martinez',
                'birth_date' => '09.06.1989',
                'start_date' => '01.01.2018',
                'special_contract_days' => null,
            ],
            [
                'name' => 'Ana Gonzalez',
                'birth_date' => '26.01.1966',
                'start_date' => '01.01.2014',
                'special_contract_days' => null,
            ],
        ]);

        $expected = [
            [
                'name' => 'Marco Gil',
                'total' => 24,
            ]
        ];
        self::assertEquals($expected, $result);
    }
}
