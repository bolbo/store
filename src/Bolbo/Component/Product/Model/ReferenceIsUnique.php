<?php
namespace Bolbo\Component\Product\Model;

class ReferenceIsUnique implements ReferenceSpecification
{
    /**
     * @var ReferenceRepository
     */
    private $repository;

    /**
     * Create a new instance of the ReferenceIsUnique specification
     *
     * @param ReferenceRepository $repository
     */
    public function __construct(ReferenceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Check to see if the specification is satisfied
     *
     * @param Reference $reference
     * @return bool
     */
    public function isSatisfiedBy(Reference $reference)
    {
        if (! $this->repository->userOfEmail($reference)) {
            return true;
        }

        return false;
    }
}
