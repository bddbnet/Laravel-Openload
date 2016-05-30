<?php
/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 19:11
 */

namespace fajardm\laravelopenload;


class File extends AbstractFile
{
    /**
     * @var string The file status
     */
    private $status;

    /**
     * @var int The folder id
     */
    private $folderId;

    /**
     * @var timestamp The file upload date time
     */
    private $uploadAt;

    /**
     * @var int The downloadn count
     */
    private $downloadCount;

    /**
     * @var string The status file
     */
    private $cstatus;

    /**
     * @var string The file link
     */
    private $link;

    /**
     * @var string The file id
     */
    private $linkextId;

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

    /**
     * @return int
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * @param int $folderId
     */
    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;
    }

    /**
     * @return timestamp
     */
    public function getUploadAt()
    {
        return $this->uploadAt;
    }

    /**
     * @param timestamp $uploadAt
     */
    public function setUploadAt($uploadAt)
    {
        $this->uploadAt = $uploadAt;
    }

    /**
     * @return int
     */
    public function getDownloadCount()
    {
        return $this->downloadCount;
    }

    /**
     * @param int $downloadCount
     */
    public function setDownloadCount($downloadCount)
    {
        $this->downloadCount = $downloadCount;
    }

    /**
     * @return string
     */
    public function getCstatus()
    {
        return $this->cstatus;
    }

    /**
     * @param string $cstatus
     */
    public function setCstatus($cstatus)
    {
        $this->cstatus = $cstatus;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getLinkextId()
    {
        return $this->linkextId;
    }

    /**
     * @param string $linkextId
     */
    public function setLinkextId($linkextId)
    {
        $this->linkextId = $linkextId;
    }

    
}
