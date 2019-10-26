<?php

spl_autoload_register(function ($className) {
    require_once $className.".php"; //todo: test if file exists
});