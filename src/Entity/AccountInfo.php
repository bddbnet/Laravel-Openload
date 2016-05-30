<?php
/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 17:03
 */

namespace fajardm\laravelopenload;


class AccountInfo
{
    /**
     * @var int string The account id
     */
    private $extId;

    /**
     * @var string The acoount email
     */
    private $email;

    /**
     * @var timestamp The account signup date and time
     */
    private $signupAt;

    /**
     * @var int The account storage left
     */
    private $storageLeft;

    /**
     * @var int The account storage used
     */
    private $storageUsed;

    /**
     * @var int The account traffic left
     */
    private $trafficLeft;

    /**
     * @var int The account traffic used in 24 h
     */
    private $trafficUsed24h;

    /**
     * @var float The account balance
     */
    private $balance;

    /**
     * @return int
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * @param int $extId
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return timestamp
     */
    public function getSignupAt()
    {
        return $this->signupAt;
    }

    /**
     * @param timestamp $signupAt
     */
    public function setSignupAt($signupAt)
    {
        $this->signupAt = $signupAt;
    }

    /**
     * @return int
     */
    public function getStorageLeft()
    {
        return $this->storageLeft;
    }

    /**
     * @param int $storageLeft
     */
    public function setStorageLeft($storageLeft)
    {
        $this->storageLeft = $storageLeft;
    }

    /**
     * @return int
     */
    public function getStorageUsed()
    {
        return $this->storageUsed;
    }

    /**
     * @param int $storageUsed
     */
    public function setStorageUsed($storageUsed)
    {
        $this->storageUsed = $storageUsed;
    }

    /**
     * @return int
     */
    public function getTrafficLeft()
    {
        return $this->trafficLeft;
    }

    /**
     * @param int $trafficLeft
     */
    public function setTrafficLeft($trafficLeft)
    {
        $this->trafficLeft = $trafficLeft;
    }

    /**
     * @return int
     */
    public function getTrafficUsed24h()
    {
        return $this->trafficUsed24h;
    }

    /**
     * @param int $trafficUsed24h
     */
    public function setTrafficUsed24h($trafficUsed24h)
    {
        $this->trafficUsed24h = $trafficUsed24h;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

}
