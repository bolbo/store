<?php
namespace Bolbo\Component\Product\Model;

interface ReferenceSpecification
{
    /**
     * Check to see if the specification is satisfied
     *
     * @param Reference $reference
     * @return bool
     */
    public function isSatisfiedBy(Reference $reference);
}
