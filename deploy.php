<?php
require 'recipe/laravel.php';
server('prod', '192.168.10.10', 22)
    ->user('vagrant')
    ->password('vagrant')
    ->stage('production')
    ->env('deploy_path', '/home/vagrant/app');