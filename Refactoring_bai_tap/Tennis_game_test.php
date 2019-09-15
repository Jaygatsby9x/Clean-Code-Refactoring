<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:29 PM
 */
include ('Tennis_game.php');
$tennisGame = new TennisGame();
$tennisGame->setScore( 6, 8);
echo $tennisGame;