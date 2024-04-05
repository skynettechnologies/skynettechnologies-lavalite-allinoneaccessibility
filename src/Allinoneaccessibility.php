<?php

namespace Skynettechnologies\Allinoneaccessibility;

use Skynettechnologies\Allinoneaccessibility\Models\Allinoneaccessibility;


class Allinoneaccessibility
{
    /**
     * $allinoneaccessibility object.
     */
    protected $allinoneaccessibility;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->allinoneaccessibility = app(Allinoneaccessibility::class);
    }

    /**
     * Returns count of allinoneaccessibility.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }

    /**
     * Find allinoneaccessibility by slug.
     *
     * @param array $filter
     *
     * @return int
     */
    public function allinoneaccessibility($slug)
    {
        return  $this->allinoneaccessibility
            ->findBySlug($slug)
            ->toArray();
    }
}
