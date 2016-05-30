<?php
/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 17:27
 */

namespace fajardm\LaravelOpenload;


abstract class AbstractFile
{
    /**
     * @var string The file name
     */
    private $name;

    /**
     * @var int The file size
     */
    private $size;

    /**
     * @var string The file sha1 code
     */
    private $sha1;

    /**
     * @var string The file type
     */
    private $contentType;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getSha1()
    {
        return $this->sha1;
    }

    /**
     * @param string $sha1
     */
    public function setSha1($sha1)
    {
        $this->sha1 = $sha1;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

}
