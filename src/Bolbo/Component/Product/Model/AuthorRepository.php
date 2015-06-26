<?php
namespace Bolbo\Component\Product\Model;

use Bolbo\Component\Core\AbstractRepository;
use Bolbo\Component\Model\Database\PublicSchema\AuthorModel;
use PommProject\Foundation\Pomm;

/**
 * Class AuthorRepository
 * @package Bolbo\Component\Product\Model
 */
class AuthorRepository extends AbstractRepository implements AuthorRepositoryInterface
{
    /**
     * @var string
     */
    var $databaseConnexion;

    /**
     * @param Pomm $pomm
     * @param string $databaseConnexion
     * @param $modelClass
     */
    public function __construct(Pomm $pomm, $databaseConnexion = 'database', $modelClass)
    {
        $this->databaseConnexion = $databaseConnexion;
        parent::__construct($pomm, $modelClass);
    }

    /**
     * @return AuthorModel
     */
    public function getPommModel()
    {
        return $this->pomm->getDefaultSession()->getModel($this->modelClass);
    }

    /**
     *
     */
    public function all()
    {
        return $this->getPommModel()->findAll();
    }

    /**
     * Add a new Author
     *
     * @param AuthorInterface $author
     */
    public function add(AuthorInterface $author)
    {
        // TODO: Implement add() method.
    }

    /**
     * Update an existing product
     *
     * @param AuthorInterface $author
     * @return void
     */
    public function update(AuthorInterface $author)
    {
        // TODO: Implement update() method.
    }

    /**
     * Find a author by their id
     *
     * @param int $id
     * @return AuthorInterface
     */
    public function authorById($id)
    {
        // TODO: Implement productById() method.
    }

}