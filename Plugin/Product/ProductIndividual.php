<?php

namespace Bluethink\KlevuProductSearch\Plugin\Product;

use Klevu\Search\Model\Product\ProductIndividual as Model;

/**
 * Class ProductIndividual
 */
class ProductIndividual
{
    /**
     * @param Model $subject
     * @param $result
     * @return mixed
     */
    public function afterGetProductIndividualTypeArray(Model $subject, $result)
    {
        array_push($result,'collection');
        return $result;
    }
}
