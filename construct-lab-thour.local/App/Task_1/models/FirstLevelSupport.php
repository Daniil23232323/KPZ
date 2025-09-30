<?php
namespace App\Task_1\models;

class FirstLevelSupport extends BaseHandler {
    public function handle(string $request): ?string {
        if ($request === "1") {
            return "✅ Ваш запит вирішено на 1 рівні підтримки!";
        }
        return parent::handle($request);
    }
}
