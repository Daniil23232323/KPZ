<?php
namespace App\Task_1\models;

class FourthLevelSupport extends BaseHandler {
    public function handle(string $request): ?string {
        if ($request === "4") {
            return "✅ Ваш запит вирішено на 4 рівні підтримки!";
        }
        return parent::handle($request);
    }
}
