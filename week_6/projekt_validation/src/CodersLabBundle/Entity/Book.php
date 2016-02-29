<?php

namespace CodersLabBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Book
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CodersLabBundle\Entity\BookRepository")
 */
class Book {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50)
     * @Assert\Length(min = 5)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="float")
     * @Assert\Range(min = 0, max = 10)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\Length(max = 600)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="pages", type="integer")
     * @Assert\Range(min = 0)
     */
    private $pages;

    /**
     * @ORM\ManyToOne(targetEntity = "Author", inversedBy = "books")
     * @ORM\JoinColumn(name = "book_id", referencedColumnName = "id")
     */
    private $author;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Book
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return Book
     */
    public function setRating($rating) {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating() {
        return $this->rating;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Book
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set pages
     *
     * @param integer $pages
     * @return Book
     */
    public function setPages($pages) {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return integer
     */
    public function getPages() {
        return $this->pages;
    }

    /**
     * Set author
     *
     * @param \CodersLabBundle\Entity\Author $author
     * @return Book
     */
    public function setAuthor(\CodersLabBundle\Entity\Author $author = null) {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \CodersLabBundle\Entity\Author
     */
    public function getAuthor() {
        return $this->author;
    }
}
