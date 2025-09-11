<?php
namespace App\Task_2\controllers;

use App\Task_2\models\Characters\Character;
use App\Task_2\models\Decorators\HeroClassDecorator;
use App\Task_2\models\Items\Weapon;
use App\Task_2\models\Items\Armor;
use App\Task_2\models\Items\Artifact;
use App\Task_2\models\Decorators\ItemDecorator;
use App\Task_2\views\CharacterView;

class CharacterController
{
    public function handle(): void
    {
        $view = new CharacterView();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $heroClass = $_POST['heroClass'] ?? 'Character';
            $weaponType = $_POST['weapon'] ?? 'none';
            $armorType = $_POST['armor'] ?? 'none';
            $artifactType = $_POST['artifact'] ?? 'none';

            // Створюємо базового героя
            $hero = new Character();
            $hero->setName($heroClass);

            // Декоратор класу героя з бонусами
            $heroBonus = match($heroClass) {
                'Mage' => new HeroClassDecorator($hero, 30, 20, 10),
                'Warrior' => new HeroClassDecorator($hero, 50, 25, 20),
                'Paladin' => new HeroClassDecorator($hero, 70, 15, 40),
                default => new HeroClassDecorator($hero, 0, 0, 0),
            };

            // Предмети
            $weapon = match($weaponType) {
                'sword' => new ItemDecorator(new Weapon(15)),
                'axe' => new ItemDecorator(new Weapon(20)),
                'staff' => new ItemDecorator(new Weapon(10)),
                default => null,
            };

            $armor = match($armorType) {
                'plate' => new ItemDecorator(new Armor(40)),
                'leather' => new ItemDecorator(new Armor(15)),
                'chainmail' => new ItemDecorator(new Armor(25)),
                default => null,
            };

            $artifact = match($artifactType) {
                'ring' => new ItemDecorator(new Artifact(20)),
                'amulet' => new ItemDecorator(new Artifact(40)),
                'book' => new ItemDecorator(new Artifact(10)),
                default => null,
            };

            if ($weapon) {
                $heroBonus->applyWeapon($weapon);
            }
            if ($armor) {
                $heroBonus->applyArmor($armor);
            }
            if ($artifact) {
                $heroBonus->applyArtifact($artifact);
            }

            $view->renderResult($heroBonus);
            return;
        }

        $view->showForm();
    }
}
