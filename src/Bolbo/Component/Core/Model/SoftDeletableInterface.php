<?php
/**
 * PersonInterface.php
 */
namespace Bolbo\Component\Core\Model;
/**
 * Interface SoftDeletableInterface
 * @package Bolbo\Component\Resource\Model
 * @author Joseph Bielawski <stloyd@gmail.com>
 *
 */
interface SoftDeletableInterface
{
    /**
     * Is item deleted?
     *
     * @return bool
     */
    public function isDeleted();

    /**
     * Get the time of deletion.
     *
     * @return \DateTime
     */
    public function getDeletedAt();

    /**
     * Set deletion time.
     *
     * @param \DateTime $deletedAt
     */
    public function setDeletedAt(\DateTime $deletedAt = null);
}
