<?php

namespace App\Task_1\models\factories;

use App\Task_1\models\subscriptions\{Educational, Premium, Domestic};
class Manage
{
    public function create_Subscription(string $type)
    {
        switch ($type)
        {
            case 'Educational':
                return new Educational();
            case 'Premium':
                return new Premium();
            case 'Domestic':
                return new Domestic();
                default:
                    throw new \InvalidArgumentException("incorrect type");
        }
    }
}