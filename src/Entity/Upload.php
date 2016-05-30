<?php
/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 17:32
 */

namespace fajardm\laravelopenload;


class Upload
{
    /**
     * @var string The upload url
     */
    private $url;

    /**
     * @var timestamp The upload valid date time
     */
    private $validUntil;

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
     * @return timestamp
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @param timestamp $validUntil
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;
    }
    

}
