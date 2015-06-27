<?php

namespace Bolbo\Component\Product\Model;

use Bolbo\Component\Model\Database\PublicSchema\Author;

class AuthorCollection
{

    /**
     * @var Author[]
     */
    public $authors;

    /**
     * @var integer
     */
    public $offset;

    /**
     * @var integer
     */
    public $limit;


    /**
     * @param Author[] $authors
     * @param integer $offset
     * @param integer $limit
     */
    public function __construct($authors = [], $offset = null, $limit = null)
    {
        $this->authors = $authors;
        $this->offset  = $offset;
        $this->limit   = $limit;
    }
}
