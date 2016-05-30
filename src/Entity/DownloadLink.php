<?php
/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 17:21
 */

namespace fajarmawan\LaravelOpenload;


class DownloadLink extends AbstractFile
{
    /**
     * @var timestamp The file upload date time
     */
    private $uploadAt;

    /**
     * @var string The file url
     */
    private $url;

    /**
     * @var string The link token
     */
    private $token;

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
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }


}