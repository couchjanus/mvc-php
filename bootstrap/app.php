<?php
require_once realpath(__DIR__.'/../config/app.php');
require_once realpath(__DIR__.'/../core/Router.php');

(new Router())->parse();
