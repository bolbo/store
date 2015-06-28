<?php

namespace Bolbo\Component\Product\Model;

class AuthorCollection
{
    /**
     * @var Author[]
     */
    public $authors = [];

    /**
     * @param Author[] $authors
     */
    public function __construct($authors = [])
    {
        $this->authors = $authors;
    }

    public function addItem(Author $author, $key = null)
    {
        if ($key == null) {
            $this->authors[] = $author;
        } else {
            if (isset($this->authors[$key])) {
                throw new \Exception("Key $key already in use.");
            } else {
                $this->authors[$key] = $author;
            }
        }
    }

    public function deleteItem($key)
    {
        if (isset($this->authors[$key])) {
            unset($this->authors[$key]);
        } else {
            throw new \Exception("Invalid key $key.");
        }
    }

    public function getItem($key)
    {
        if (isset($this->authors[$key])) {
            return $this->authors[$key];
        } else {
            throw new \Exception("Invalid key $key.");
        }
    }
}
