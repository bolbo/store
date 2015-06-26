<?php

namespace Bolbo\Component\Model\Database\PublicSchema;

use PommProject\ModelManager\Model\Model;
use PommProject\ModelManager\Model\Projection;
use PommProject\ModelManager\Model\ModelTrait\WriteQueries;

use PommProject\Foundation\Where;

use Bolbo\Component\Model\Database\PublicSchema\AutoStructure\Author as AuthorStructure;
use Bolbo\Component\Model\Database\PublicSchema\Author;

/**
 * AuthorModel
 *
 * Model class for table author.
 *
 * @see Model
 */
class AuthorModel extends Model
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
        $this->structure = new AuthorStructure;
        $this->flexible_entity_class = '\Bolbo\Component\Model\Database\PublicSchema\Author';
    }
}
