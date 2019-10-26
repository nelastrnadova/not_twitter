<?php
namespace controllers;

include "../kernel.php";

namespace controllers;


class Login
{

    public function __construct()
    {
        $this->render();
    }

    function render() {
        $loginView = new \views\Login();
        $loginRender = $loginView->render();
        echo $loginRender;
    }

}

new Login();