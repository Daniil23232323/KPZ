<?php
namespace App\models;
use App\interfaces\{IMoney, IProduct, IReport, IWarehouse};


class Reporting implements IReport
{
    private IWarehouse $warehouse;

    public function __construct(IWarehouse $warehouse) {
        $this->warehouse = $warehouse;
    }

    public function generateIncomeReport(): string {
        return "Income report generated.";
    }

    public function generateInventoryReport(): string {
        return "Inventory report generated.";
    }
}
