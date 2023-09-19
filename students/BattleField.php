<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";


class BattleField extends BaseBattleField
{
    public static function createMyWarrior () {
        $guerrier=new MarvelWarrior($GLOBALS['warriorName']);
        $guerrier->imageUrl='https://i.kym-cdn.com/entries/icons/facebook/000/018/187/asdgagdsgg.jpg';
        $guerrier->weapon=new Weapon(1,200);
        $guerrier->weapon->imageUrl='https://cdn.thecoolist.com/wp-content/uploads/2016/07/Shuriken-weapon-of-history.jpg';
        $guerrier->saveNew();
    }
    public static function createOtherWarrior () {
        $adversaire=new PokemonWarrior('PU55Y5L4Y3Rsss');
        $adversaire->imageUrl='https://i.kym-cdn.com/entries/icons/facebook/000/018/187/asdgagdsgg.jpg';
        $adversaire->weapon=new Weapon(1,200);
        $adversaire->weapon->imageUrl='https://cdn.thecoolist.com/wp-content/uploads/2016/07/Shuriken-weapon-of-history.jpg';
        $adversaire->saveNew();
    }

}
