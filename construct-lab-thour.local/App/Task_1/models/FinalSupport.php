<?php
namespace App\Task_1\models;

class FinalSupport extends BaseHandler {
    public function handle(string $request): ?string {
        return "⛔ Ваш запит не вдалося вирішити. Спробуйте ще раз.";
    }
}
