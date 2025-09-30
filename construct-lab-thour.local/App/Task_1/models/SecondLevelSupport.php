<?php
namespace App\Task_1\models;

class SecondLevelSupport extends BaseHandler {
    public function handle(string $request): ?string {
        if ($request === "2") {
            return "✅ Ваш запит вирішено на 2 рівні підтримки!";
        }
        return parent::handle($request);
    }
}
