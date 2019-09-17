<?php


namespace App\Support\Controller;


class ParseRelationsFromQueryString
{
    public function __invoke($query)
    {
        if (is_null($query)) {
            return [];
        }

        return explode('|', $query);
    }

}
