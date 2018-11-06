<?php
/**
 * Created by PhpStorm.
 * User: dakimura
 * Date: 2018/11/06
 * Time: 14:15
 */

namespace DietcubePractice\Service;


use Dietcube\Components\LoggerAwareTrait;

class OmikujiService
{
    use LoggerAwareTrait;

    public function getResult($today)
    {
        if ($today % 3 === 0) {
            return "大吉";
        } elseif ($today % 11 === 0) {
            return "凶";
        }

        return "吉";
    }
}