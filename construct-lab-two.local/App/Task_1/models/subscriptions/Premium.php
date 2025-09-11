<?php

namespace App\Task_1\models\subscriptions;

use App\Task_1\interfaces\Subscription;

class Premium implements Subscription
{
    public function getMonthlyFee(): float
    {
        return 19.99;
    }

    public function getMinPeriod(): int
    {
        return 1;
    }

    public function getAvailableChannels(): array
    {
        return ['Premium Channel 1', 'Premium Channel 2', 'Premium Channel 3'];
    }

    public function getAdditionalFeatures(): array
    {
        return ['4K Streaming', 'Premium Support', 'Exclusive Content'];
    }
}
