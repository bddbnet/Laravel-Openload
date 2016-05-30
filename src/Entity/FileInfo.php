<?php
/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 17:24
 */

namespace fajardm\LaravelOpenload;


class FileInfo extends AbstractFile
{
    /**
     * @var int The file id
     */
    private $id;

    /**
     * @var string The file status
     */
    private $status;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    

}
