<?php

declare(strict_types=1);

return [
    'GET|/' => \Mix\Mvc\Controller\VideoListController::class,
    'GET|/novo-video' => \Mix\Mvc\Controller\VideoFormController::class,
    'POST|/novo-video' => \Mix\Mvc\Controller\NewVideoController::class,
    'GET|/editar-video' => \Mix\Mvc\Controller\VideoFormController::class,
    'POST|/editar-video' => \Mix\Mvc\Controller\EditVideoController::class,
    'GET|/remover-video' => \Mix\Mvc\Controller\DeleteVideoController::class,
    'GET|/login' => \Mix\Mvc\Controller\LoginFormController::class,
    'POST|/login' => \Mix\Mvc\Controller\LoginController::class,
    'GET|/logout' => \Mix\Mvc\Controller\LogoutController::class,
];
