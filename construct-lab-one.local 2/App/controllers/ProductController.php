<?php
namespace App\controllers;

use App\Models\Product;
use App\Models\Money;
use App\Models\Warehouse;
use App\Models\Reporting;
use App\Models\Logger;

class ProductController
{
    protected Reporting $report;
    protected Money $money;
    protected Warehouse $warehouse;
    protected Product $product;
    protected Logger $logger;

    public function __construct()
    {
        $this->logger = new Logger();
        $this->money = new Money(0, 0); // базова ініціалізація
        $this->warehouse = new Warehouse();
        $this->report = new Reporting($this->warehouse);
    }

    public function index(): void
    {
        $log = fn($msg) => $this->logger->log($msg);

        $log("Створюємо об'єкт Money (10.50)");
        $money = new Money(10, 50);
        $log("[Money] Об'єкт Money створено. Whole: 10, Fraction: 50");
        $log("Поточна сума грошей: " . $money->getAmount());

        $log("Створюємо товар 'Laptop' за 10.50");
        $product = new Product("Laptop", $money);
        $log("[Product] Об'єкт Product створено. Name: Laptop, Price: " . $product->getPrice()->getAmount());

        $log("Створюємо склад");
        $warehouse = new Warehouse();
        $log("[Warehouse] Об'єкт Warehouse створено");

        $log("Додаємо 5 одиниць товару 'Laptop' на склад");
        $warehouse->addProduct($product, 5);
        $log("[Warehouse] Додано продукт 'Laptop'. Кількість: 5");

        // Формування звіту по складу
        $formatStock = function(array $stock): string {
            $output = "Складські залишки:\n";
            foreach ($stock as $item) {
                $p = $item['product'];
                $q = $item['quantity'];
                $output .= "Товар: {$p->getName()}, Кількість: $q, Ціна: " . $p->getPrice()->getAmount() . "\n";
            }
            return $output;
        };

        $stockReport = $formatStock($warehouse->getStock());
        $log($stockReport);

        $log("Створюємо модуль звітності");
        $reporting = new Reporting($warehouse);
        $log("[Reporting] Об'єкт Reporting створено");

        $inventoryReport = $reporting->generateInventoryReport();
        $log("[Reporting] Звіт про склад згенеровано");


        $money->writeReport($this->logger->getLogs(), $this->logger);


        $log("Тестування завершено успішно!");

        $logsHtml = nl2br(htmlspecialchars($this->logger->getLogs()));

        include __DIR__ . '/../views/product_view.php';
    }
}
