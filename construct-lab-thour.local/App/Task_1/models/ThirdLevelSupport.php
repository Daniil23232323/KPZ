<?php
namespace App\Task_1\models;

class ThirdLevelSupport extends BaseHandler {
    public function handle(string $request): ?string {
        if ($request === "3") {
            return "✅ Ваш запит вирішено на 3 рівні підтримки!";
        }
        return parent::handle($request);
    }
}
