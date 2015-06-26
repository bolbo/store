<?php
namespace Bolbo\Component\Product\Model;

/**
 * Class ReferenceIsUnique
 * @package Bolbo\Component\Product\Model
 */
class ReferenceIsUnique implements ReferenceSpecification
{
    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * Create a new instance of the ReferenceIsUnique specification
     *
     * @param ProductRepositoryInterface $repository
     */
    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Check to see if the specification is satisfied
     *
     * @param  Reference $reference
     * @return bool
     */
    public function isSatisfiedBy(Reference $reference)
    {
        if (!$this->repository->productByReference($reference)) {
            return true;
        }

        return false;
    }
}
