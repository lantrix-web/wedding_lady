<?php



$routes = [
    'main' => 'main/index',
    'profile/edit/([0-9]+)' => 'profile/editUserProfile/$1',
    'admin' => 'admin/index',
    'ladies' => 'user/register',
    'my' => 'my/index',
    '404' => 'main/404',
    'profile/([0-9]+)' => 'profile/index/$1',
    'logout' => 'user/logout',
    'login' => 'user/login',
    'chat/([0-9]+)' => 'chat/dialog/$1',
    'server' => 'server/responce'

];

//'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',