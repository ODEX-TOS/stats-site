<?php

namespace App\Request;

class StatisticsRangeRequest
{
    /** @var int */
    private $startMonth;

    /** @var int */
    private $endMonth;

    /**
     * @param int $startMonth
     * @param int $endMonth
     */
    public function __construct(int $startMonth, int $endMonth)
    {
        $this->startMonth = $startMonth;
        $this->endMonth = $endMonth;
    }

    /**
     * @return int
     */
    public function getStartMonth(): int
    {
        return $this->startMonth;
    }

    /**
     * The end month must be at least 1 bigger than the start month
     * @return int
     */
    public function getEndMonth(): int
    {
        return $this->endMonth + 1;
    }
}
