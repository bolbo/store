<?php
namespace Bolbo\Component\Product\Model;

/**
 * Interface AuthorRepositoryInterface
 * @package Bolbo\Component\Product\Model
 */
interface AuthorRepositoryInterface
{
    /**
     * Add a new Author
     *
     * @param AuthorInterface $author
     */
    public function add(AuthorInterface $author);

    /**
     * Update an existing author
     *
     * @param AuthorInterface $author
     * @return void
     */
    public function update(AuthorInterface $author);

    /**
     * Find a author by their id
     *
     * @param int $id
     * @return AuthorInterface
     */
    public function authorById($id);

}
