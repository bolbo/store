<?php
namespace Bolbo\Component\Product\Model;

use Bolbo\Component\Product\Model\Author;
use Bolbo\Component\Core\AbstractRepository;

//use Bolbo\Component\Model\Database\PublicSchema\Author;
//use Bolbo\Component\Model\Database\PublicSchema\AuthorModel;
use PommProject\Foundation\Pomm;
use PommProject\Foundation\Where;

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
    public function __construct(Pomm $pomm, $databaseConnexion = 'database', $modelClass, AuthorHydrator $authorHydrator)
    {
        $this->authorHydrator    = $authorHydrator;
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
        $list = $this->getPommModel()->findAll();

        $collection = new AuthorCollection();
        foreach ($list as $element) {
            $author = new Author();
            $collection->addItem($this->authorHydrator->hydrate($element->extract(), $author));
        }
        return $collection;
    }

    /**
     * Add a new Author
     *
     * @param AuthorInterface $author
     *
     * @return \PommProject\ModelManager\Model\Model
     */
    public function add(AuthorInterface $author)
    {
        /*$element = new Author([
            '' => '',
        ]);
        var_dump($element);
        exit;*/
        //return $this->getPommModel()->insertOne($element);
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
        $element = $this->getPommModel()->findByPK(['author_id' => $id]);
        if (!$element) {
            return null;
        }
        $author = new Author();
        return $this->authorHydrator->hydrate($element->extract(), $author);
    }

}