<?php 

define('ROOT', realpath(__DIR__.'/../'));

const CONTROLLERS = ROOT.'/app/Controllers';
const VIEWS = ROOT.'/app/Views';
const MODELS = ROOT.'/app/Models';
const CONFIG = ROOT.'/config';
const CORE = ROOT.'/core';

define('ROUTES', require CONFIG.'/routes.php');