<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:20 PM
 */
class TennisGame
{
    const DEFAULT_SCORE_0 = 0;
    const DEFAULT_SCORE_1 = 1;
    const DEFAULT_CORE_2 = 2;
    const DEFAULT_CORE_3 = 3;
    public $score = '';
    public function setScore($pointsOfFirstPlayer, $pointOfSecondPlayer)
    {
        $tempScore= self::DEFAULT_SCORE_0;
        if ($pointsOfFirstPlayer==$pointOfSecondPlayer) {
            switch ($pointsOfFirstPlayer)
            {
                case self::DEFAULT_SCORE_0:
                    $this->score = "Love-All";
                    break;
                case self::DEFAULT_SCORE_1:
                    $this->score = "Fifteen-All";
                    break;
                case self::DEFAULT_CORE_2:
                    $this->score = "Thirty-All";
                    break;
                case self::DEFAULT_CORE_3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;
            }
        }
        else if ($pointsOfFirstPlayer>=4 || $pointOfSecondPlayer>=4)
        {
            $minusResult = $pointsOfFirstPlayer-$pointOfSecondPlayer;
            if ($minusResult== self::DEFAULT_SCORE_1) $this->score ="Advantage player1";
            else if ($minusResult ==-self::DEFAULT_SCORE_1) $this->score ="Advantage player2";
            else if ($minusResult>= self::DEFAULT_CORE_2) $this->score = "Win for player1";
            else $this->score ="Win for player2";
        }
        else
        {
            for ($i= self::DEFAULT_SCORE_1; $i< self::DEFAULT_CORE_3; $i++)
            {
                if ($i== self::DEFAULT_SCORE_1) $tempScore = $pointsOfFirstPlayer;
                else { $this->score.="-"; $tempScore = $pointOfSecondPlayer;}
                switch($tempScore)
                {
                    case self::DEFAULT_SCORE_0:
                        $this->score.="Love";
                        break;
                    case self::DEFAULT_SCORE_1:
                        $this->score.="Fifteen";
                        break;
                    case self::DEFAULT_CORE_2:
                        $this->score.="Thirty";
                        break;
                    case self::DEFAULT_CORE_3:
                        $this->score.="Forty";
                        break;
                }
            }
        }
    }
    public function __toString()
    {
        return $this->score;
    }
}