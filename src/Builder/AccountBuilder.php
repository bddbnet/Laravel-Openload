<?php

/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 18:28
 */

namespace fajarmawan\LaravelOpenload;

class AccountBuilder extends AbstractBuilder
{
    /**
     * @param array $data
     * @return AccountInfo
     */
    public static function buildAccountInfo(array $data)
    {
        $account = new AccountInfo();
        $account->setExtId($data['extid']);
        $account->setEmail($data['email']);
        $account->setSignupAt(static::buildDate($data['signup_at']));
        $account->setStorageLeft($data['storage_left']);
        $account->setStorageUsed($data['storage_used']);
        $account->setTrafficLeft($data['traffic']['left']);
        $account->setTrafficUsed24h($data['traffic']['used_24h']);
        $account->setBalance($data['balance']);

        return $account;
    }
}