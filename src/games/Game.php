<?php

namespace src\games;

class Game
{
    public static function play(): array
    {
        $points = mt_rand(0, 1000);
        $status = $points % 2 === 0 ? 1 : 0;
        if ($status) {
            $prize = self::getPrize($points);
        }

        return [
            'points' => $points,
            'prize' => $prize ?? 0,
        ];
    }

    public static function getPrize(int $points): int
    {
        switch (true) {
            case $points > 900:
                $persent = 70;
                break;

            case $points > 600:
                $persent = 50;
                break;

            case $points > 300:
                $persent = 30;
                break;

            default:
                $persent = 10;
                break;
        }

        return $points * ($persent / 100);
    }
}