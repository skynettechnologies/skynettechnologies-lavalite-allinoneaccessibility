<?php

namespace Skynettechnologies\Allinoneaccessibility\Http\Controllers;

use Litepie\Http\Controllers\ResourceController as BaseController;
use Skynettechnologies\Allinoneaccessibility\Allinoneaccessibility;

class AssetsController extends BaseController
{
    public function getJs() {

        $theme = Allinoneaccessibility::get('app.theme');
        return file_get_contents($theme.'/custom-script.js');
    }
}
