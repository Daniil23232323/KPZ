<?php

namespace App\Task_1\models\subscriptions;

use App\Task_1\interfaces\Subscription;


class Educational implements Subscription
{
    public function getMonthlyFee(): float
    {
        return 1.5;
    }
    public function getMinPeriod(): int
    {
        return 4;
    }
    public function getAdditionalFeatures(): array
    {
        return ['FullHD Streaming', 'Online Courses', 'Study Materials'];
    }
    public function getAvailableChannels(): array
    {
        return ['Channel 1', 'Channel 2', 'Channel 3', 'Channel 4', 'Channel 5', 'Channel 6'];
    }
}