<?php

class BattleResult
{
    private $usedJediPowers;
    private $winningShip;
    private $losingShip;

    /**
     * @param Ship $winningShip
     * @param Ship $losingShip
     * @param boolean $usedJediPowers
     */
    public function __construct($usedJediPowers, Ship $winningShip = null, Ship $losingShip = null)
    {
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * @return bool
     */
    public function wereJediPowersUsed():bool
    {
        return $this->usedJediPowers;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip():?Ship
    {
        return $this->winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip():?Ship
    {
        return $this->losingShip;
    }

    /**
     * Was there a winner? Or did everybody die :(
     *
     * @return bool
     */
    public function isThereAWinner():bool
    {
        return $this->getWinningShip() !== null;
    }
}
