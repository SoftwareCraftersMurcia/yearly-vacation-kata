<?php
declare(strict_types=1);

namespace Kata;

final readonly class EmployeeVacation
{
    public function __construct(
        public string $name,
        public int $days,
    ) {
    }
}
