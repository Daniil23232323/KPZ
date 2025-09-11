<?php
namespace App\Task_1\models\subscriptions;



use App\Task_1\interfaces\Subscription;

class Domestic implements Subscription
{
    public function getMonthlyFee(): float
    {
       return 12.50;
    }
    public function getMinPeriod(): int
    {
        return 1;
    }
    public function getAdditionalFeatures(): array
    {
        return ['FullHD Streaming', 'Basic Support'];
    }
    public function getAvailableChannels(): array
    {
        return ['Channel 1', 'Channel 2', 'Channel 3'];
    }

}