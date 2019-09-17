<?php


namespace App\Support\Controller;


class ParseSelectFromQueryString
{
    public function __invoke($query)
    {
        if (is_null($query)) {
            return '*';
        }
        $selects = explode(',', $query);

        if (!isset($selects['id'])) {
            array_push($selects, 'id');
        }
        return $selects;
    }

}
