<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        echo "Ini adalah Method index pada Controller Blog yang ada di Sub-Direktori Admin";
    }
}
