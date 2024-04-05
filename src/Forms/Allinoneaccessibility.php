<?php

namespace Skynettechnologies\Allinoneaccessibility\Forms;

use Litepie\Form\FormInterpreter;

class Allinoneaccessibility extends FormInterpreter
{

    /**
     * Sets the form and form elements.
     * @return null.
     */
    public static function setAttributes()
    {

        self::$urls = config('skynettechnologies.allinoneaccessibility.allinoneaccessibility.urls');

        self::$search = config('skynettechnologies.allinoneaccessibility.allinoneaccessibility.search');

        self::$orderBy = config('skynettechnologies.allinoneaccessibility.allinoneaccessibility.order');

        self::$groups =  config('skynettechnologies.allinoneaccessibility.allinoneaccessibility.groups');

        self::$list =  config('skynettechnologies.allinoneaccessibility.allinoneaccessibility.list');

        self::$fields = config('skynettechnologies.allinoneaccessibility.allinoneaccessibility.form');

        return new static();
    }
}
