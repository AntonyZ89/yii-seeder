<?php


namespace antonyz89\seeder\helpers;

trait WeightedRandom
{
    /**
     * example $weightedValues
     *
     * [
     *    20 => true,
     *    80 => false
     * ]
     *
     * @param array $weightedValues
     * @return int|string
     */
    static function getRandomWeightedElement(array $weightedValues) {
        $rand = mt_rand(1, (int) array_sum($weightedValues));

        foreach ($weightedValues as $key => $value) {
            $rand -= $value;
            if ($rand <= 0) {
                return $key;
            }
        }
    }
}
