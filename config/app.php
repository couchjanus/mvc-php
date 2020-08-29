<?php 

define('ROOT', realpath(__DIR__.'/../'));

const CONTROLLERS = ROOT.'/app/Controllers';
const CONFIG = ROOT.'/config';

define('ROUTES', require CONFIG.'/routes.php');