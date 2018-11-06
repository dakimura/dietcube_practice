<?php

namespace DietcubePractice\Controller;

use DateTime;
use Dietcube\Controller;
use DietcubePractice\Service\OmikujiService;

/**
 * Created by PhpStorm.
 * User: dakimura
 * Date: 2018/11/06
 * Time: 13:16
 */
class HelloController extends Controller
{
    public function index()
    {

        /** @var OmikujiService $service */
        $service = $this->get('service.omikuji');

        return $this->render('hello/hello_world', [
            'message' => 'hello world!',
            'message2' => '今日のあなたの運勢は' . $service->getResult(rand()) .'です.',
        ]);
    }
}