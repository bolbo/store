<?php

namespace Bolbo\Component\Model\Database\PublicSchema;

use PommProject\ModelManager\Model\Model;
use PommProject\ModelManager\Model\Projection;
use PommProject\ModelManager\Model\ModelTrait\WriteQueries;

use PommProject\Foundation\Where;

use Bolbo\Component\Model\Database\PublicSchema\AutoStructure\Country as CountryStructure;
use Bolbo\Component\Model\Database\PublicSchema\Country;

/**
 * CountryModel
 *
 * Model class for table country.
 *
 * @see Model
 */
class CountryModel extends Model
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
        $this->structure = new CountryStructure;
        $this->flexible_entity_class = '\Bolbo\Component\Model\Database\PublicSchema\Country';
    }
}
