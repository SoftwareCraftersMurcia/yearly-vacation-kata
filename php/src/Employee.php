<?php
declare(strict_types=1);

namespace Kata;

final readonly class Employee
{
    public function __construct(
        public string $name,
        public string $birthDate,
        public string $startDate,
        public ?int $specialContractDays = null,
    ) {
    }

    public function getStartYear(): int
    {
        return (int) \date('Y', \strtotime($this->startDate));
    }
}
