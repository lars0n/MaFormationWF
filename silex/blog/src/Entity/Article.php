<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 03/08/2017
 * Time: 16:29
 */

namespace Entity;


class Article
{
    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $title;

    /**
     * @var
     */
    private $header;

    /**
     * @var
     */
    private $content;

    /**
     * @var
     */
    private $category;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Article
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param mixed $header
     * @return Article
     */
    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     * @return Article
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCategoryId(){
        if(!is_null($this->category)){
            return $this->category->getId();
        }
    }

    /**
     * @return string
     */
    public function getCategoryName(){
        if(!is_null($this->category)){
            return $this->category->getName();
        }

        return '';
    }


}