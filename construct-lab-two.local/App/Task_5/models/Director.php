<?php
namespace App\Task_5\models;

class Director {
    public function createHero(HeroBuilder $builder) {
        // Створення героя за допомогою будівельника
        return $builder->buildHeight('180 cm')
            ->buildBodyType('Athletic')
            ->buildHairColor('Blonde')
            ->buildEyeColor('Blue')
            ->buildClothes('Armor')
            ->buildInventory(['Sword', 'Shield'])
            ->getResult();
    }

    public function createEnemy(EnemyBuilder $builder) {
        // Створення ворога за допомогою будівельника
        return $builder->buildHeight('190 cm')
            ->buildBodyType('Muscular')
            ->buildHairColor('Black')
            ->buildEyeColor('Red')
            ->buildClothes('Dark Armor')
            ->buildInventory(['Dark Sword'])
            ->setEvilActions(['Steal', 'Destroy'])
            ->getResult();
    }
}
?>
