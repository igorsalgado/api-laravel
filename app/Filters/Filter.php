<?php

namespace App\Filters;

use DeepCopy\Exception\PropertyException;
use Illuminate\Http\Request;

class Filter
{

    protected array $allowedOperatorsFields = [];

    protected array $translateOperatorsFields = [
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '=<',
        'eq' => '=',
        'in' => 'in',
    ];

    public function filter(Request $request)
    {

        $where = [];
        $whereIn = [];

        if (empty($this->allowedOperatorsFields)) {
            throw new PropertyException("Property allowedOperatorsFields is empty");
        }

        foreach ($this->allowedOperatorsFields as $param => $operators) {
        }
    }
}
