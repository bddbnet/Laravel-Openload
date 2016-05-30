<?php
/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 17:12
 */

namespace fajardm\laravelopenload;


class DownloadTicket
{
    /**
     * @var string The ticket code
     */
    private $ticket;

    /**
     * @var string The ticket captcha url
     */
    private $captchaUrl;

    /**
     * @var int The captcha width
     */
    private $captchaW;

    /**
     * @var int The captcha height
     */
    private $captchaH;

    /**
     * @var int The ticket wait time
     */
    private $waitTime;

    /**
     * @var timestamp The ticket valid time
     */
    private $validUntil;

    /**
     * @return string
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * @param string $ticket
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * @return string
     */
    public function getCaptchaUrl()
    {
        return $this->captchaUrl;
    }

    /**
     * @param string $captchaUrl
     */
    public function setCaptchaUrl($captchaUrl)
    {
        $this->captchaUrl = $captchaUrl;
    }

    /**
     * @return int
     */
    public function getCaptchaW()
    {
        return $this->captchaW;
    }

    /**
     * @param int $captchaW
     */
    public function setCaptchaW($captchaW)
    {
        $this->captchaW = $captchaW;
    }

    /**
     * @return int
     */
    public function getCaptchaH()
    {
        return $this->captchaH;
    }

    /**
     * @param int $captchaH
     */
    public function setCaptchaH($captchaH)
    {
        $this->captchaH = $captchaH;
    }

    /**
     * @return int
     */
    public function getWaitTime()
    {
        return $this->waitTime;
    }

    /**
     * @param int $waitTime
     */
    public function setWaitTime($waitTime)
    {
        $this->waitTime = $waitTime;
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
