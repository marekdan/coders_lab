<?php

namespace CodersLabBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name = "posts")
 */
class Post {

    /**
     * @ORM\Id
     * @ORM\Column(type = "integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type = "string", length = 100)
     */
    private $title;

    /**
     * @ORM\Column(type = "decimal", precision=4, scale=2)
     */
    private $rating;

    /**
     * @ORM\Column(type = "text")
     */
    private $postText;

    /**
     * @ORM\ManyToOne( targetEntity = "User", inversedBy = "posts" )
     * @ORM\JoinColumn(name = "user_id", referencedColumnName = "id")
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity = "Tag", inversedBy = "posts")
     * @ORM\JoinTable(name = "post_tag")
     */
    private $tags;

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
     * @return Post
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
     * @param string $rating
     * @return Post
     */
    public function setRating($rating) {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string
     */
    public function getRating() {
        return $this->rating;
    }

    /**
     * Set postText
     *
     * @param string $postText
     * @return Post
     */
    public function setPostText($postText) {
        $this->postText = $postText;

        return $this;
    }

    /**
     * Get postText
     *
     * @return string
     */
    public function getPostText() {
        return $this->postText;
    }


    /**
     * Set user
     *
     * @param \CodersLabBundle\Entity\User $user
     * @return Post
     */
    public function setUser(\CodersLabBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CodersLabBundle\Entity\User
     */
    public function getUser() {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tags
     *
     * @param \CodersLabBundle\Entity\Tag $tags
     * @return Post
     */
    public function addTag(\CodersLabBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \CodersLabBundle\Entity\Tag $tags
     */
    public function removeTag(\CodersLabBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
}
