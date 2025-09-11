<?php
namespace App\Task_5\controllers;

use App\Task_5\models\Director;
use App\Task_5\models\HeroBuilder;
use App\Task_5\models\EnemyBuilder;
use App\Task_5\views\CharacterView;

class CharacterController
{
    public function handle(): void
    {
        $view = new CharacterView();

        if (!isset($_GET['build'])) {
            $view->showForm();
            return;
        }

        $build = $_GET['build'];
        $director = new Director();

        if ($build === 'hero') {
            $builder = new HeroBuilder();
            $character = $director->createHero($builder);
            $view->render($character, 'Герой');
        } elseif ($build === 'enemy') {
            $builder = new EnemyBuilder();
            $character = $director->createEnemy($builder);
            $view->render($character, 'Ворог');
        } else {
            $view->renderError("Невідомий тип персонажа.");
        }
    }
}
