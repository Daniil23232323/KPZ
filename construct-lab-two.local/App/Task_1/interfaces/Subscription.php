<?php


namespace App\Task_1\interfaces;


interface Subscription
{
    public function getMonthlyFee(): float;
    public function getMinPeriod(): int;
    public function getAdditionalFeatures(): array;
    public function getAvailableChannels(): array;
}