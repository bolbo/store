<?php

namespace Bolbo\Component\Model\Database\PublicSchema;

use PommProject\ModelManager\Model\Model;
use PommProject\ModelManager\Model\Projection;
use PommProject\ModelManager\Model\ModelTrait\WriteQueries;

use PommProject\Foundation\Where;

use Bolbo\Component\Model\Database\PublicSchema\AutoStructure\Product as ProductStructure;
use Bolbo\Component\Model\Database\PublicSchema\Product;

/**
 * ProductModel
 *
 * Model class for table product.
 *
 * @see Model
 */
class ProductModel extends Model
{
    use WriteQueries;

    /**
     * __construct()
     *
     * Model constructor
     *
     * @access public
     */
    public function __construct()
    {
        $this->structure = new ProductStructure;
        $this->flexible_entity_class = '\Bolbo\Component\Model\Database\PublicSchema\Product';
    }
}
