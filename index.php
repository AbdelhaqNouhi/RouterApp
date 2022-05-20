<?php
require_once 'loader.php';

$app = new Router();

$app->get('/', function () {
  $user = new User();
  $user->all();
});
