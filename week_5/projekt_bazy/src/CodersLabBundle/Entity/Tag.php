<?php

namespace CodersLabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass = "CodersLabBundle\Entity\TagRepository")
 */
class Tag
{
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
     * @ORM\Column(name="TagText", type="string", length=50)
     */
    private $tagText;

    /**
     * @ORM\ManyToMany(targetEntity = "Post", mappedBy = "tags")
     */
    private $posts;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tagText
     *
     * @param string $tagText
     * @return Tag
     */
    public function setTagText($tagText)
    {
        $this->tagText = $tagText;

        return $this;
    }

    /**
     * Get tagText
     *
     * @return string 
     */
    public function getTagText()
    {
        return $this->tagText;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add posts
     *
     * @param \CodersLabBundle\Entity\Post $posts
     * @return Tag
     */
    public function addPost(\CodersLabBundle\Entity\Post $posts)
    {
        $this->posts[] = $posts;

        return $this;
    }

    /**
     * Remove posts
     *
     * @param \CodersLabBundle\Entity\Post $posts
     */
    public function removePost(\CodersLabBundle\Entity\Post $posts)
    {
        $this->posts->removeElement($posts);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
