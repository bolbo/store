<?php
/**
 * This file has been automaticaly generated by Pomm's generator.
 * You MIGHT NOT edit this file as your changes will be lost at next
 * generation.
 */

namespace Bolbo\Component\Model\Database\PublicSchema\AutoStructure;

use PommProject\ModelManager\Model\RowStructure;

/**
 * Country
 *
 * Structure class for relation public.country.
 * 
 * Class and fields comments are inspected from table and fields comments.
 * Just add comments in your database and they will appear here.
 * @see http://www.postgresql.org/docs/9.0/static/sql-comment.html
 *
 *
 *
 * @see RowStructure
 */
class Country extends RowStructure
{
    /**
     * __construct
     *
     * Structure definition.
     *
     * @access public
     */
    public function __construct()
    {
        $this
            ->setRelation('public.country')
            ->setPrimaryKey(['country_id'])
            ->addField('country_id', 'int4')
            ->addField('created_at', 'timestamp')
            ->addField('updated_at', 'timestamp')
            ->addField('deleted_at', 'timestamp')
            ->addField('label', 'varchar')
            ;
    }
}
