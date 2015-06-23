<?php
namespace Bolbo\Component\Product\Model;

use Bolbo\Component\Store\Model\ProductInterface;

interface ProductRepository
{
    /**
     * Add a new Product
     *
     * @param ProductInterface $product
     */
    public function add(ProductInterface $product);

    /**
     * Update an existing product
     *
     * @param ProductInterface $product
     * @return void
     */
    public function update(ProductInterface $product);

    /**
     * Find a product by their id
     *
     * @param int $id
     * @return Product
     */
    public function productById($id);

    /**
     * Find a user by their email address
     *
     * @param Reference $reference
     * @return Reference
     */
    public function productByReference(Reference $reference);

}
