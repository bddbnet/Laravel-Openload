<?php
/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 17:37
 */

namespace fajarmawan\LaravelOpenload;


class RemoteUploadStatus extends AbstractRemoteUpload
{
    const NEW_STATUS = 'new';
    const DOWNLOADING_STATUS = 'downloading';
    const FINISHED_STATUS = 'finished';
    const ERROR_STATUS = 'error';
    
    /**
     * @var string The remote upload url
     */
    private $remoteUrl;

    /**
     * @var string The upload status
     */
    private $status;

    /**
     * @var int The upload bytes loaded
     */
    private $bytesLoaded;

    /**
     * @var int The upload bytes total
     */
    private $bytesTotal;

    /**
     * @var timestamp The upload date time
     */
    private $added;

    /**
     * @var timestamp The upload last update
     */
    private $lastUpdate;

    /**
     * @var boolean
     */
    private $extid;

    /**
     * @var boolean
     */
    private $url;

    /**
     * @return string
     */
    public function getRemoteUrl()
    {
        return $this->remoteUrl;
    }

    /**
     * @param string $remoteUrl
     */
    public function setRemoteUrl($remoteUrl)
    {
        $this->remoteUrl = $remoteUrl;
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

    /**
     * @return int
     */
    public function getBytesLoaded()
    {
        return $this->bytesLoaded;
    }

    /**
     * @param int $bytesLoaded
     */
    public function setBytesLoaded($bytesLoaded)
    {
        $this->bytesLoaded = $bytesLoaded;
    }

    /**
     * @return int
     */
    public function getBytesTotal()
    {
        return $this->bytesTotal;
    }

    /**
     * @param int $bytesTotal
     */
    public function setBytesTotal($bytesTotal)
    {
        $this->bytesTotal = $bytesTotal;
    }

    /**
     * @return timestamp
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * @param timestamp $added
     */
    public function setAdded($added)
    {
        $this->added = $added;
    }

    /**
     * @return timestamp
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * @param timestamp $lastUpdate
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
    }

    /**
     * @return boolean
     */
    public function isExtid()
    {
        return $this->extid;
    }

    /**
     * @param boolean $extid
     */
    public function setExtid($extid)
    {
        $this->extid = $extid;
    }

    /**
     * @return boolean
     */
    public function isUrl()
    {
        return $this->url;
    }

    /**
     * @param boolean $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

}