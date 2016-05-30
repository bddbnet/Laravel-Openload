<?php
/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 19:41
 */

namespace fajarmawan\LaravelOpenload;


class DownloadBuilder extends AbstractBuilder
{
    /**
     * @param array $data
     * @return DownloadTicket
     */
    public static function buildDownloadTicket(array $data)
    {
        $ticket = new DownloadTicket();
        $ticket->setTicket($data['ticekt']);
        $ticket->setCaptchaUrl($data['captcha_url']);
        $ticket->setCaptchaW($data['captcha_w']);
        $ticket->setCaptchaH($data['captcha_h']);
        $ticket->setWaitTime($data['wait_time']);
        $ticket->getValidUntil(static::buildDate($data['valid_until']));

        return $ticket;
    }

    /**
     * @param array $data
     * @return DownloadLink
     */
    public static function buildDownloadLink(array $data)
    {
        $link = new DownloadLink();
        $link->setName($data['name']);
        $link->setSize($data['size']);
        $link->setSha1($data['sha1']);
        $link->setContentType($data['content_type']);
        $link->setUploadAt(static::buildDate($data['upload_at']));
        $link->setUrl($data['url']);
        $link->setToken($data['token']);

        return $link;
    }

    /**
     * @param array $data
     * @return FileInfo
     */
    public static function buildFileInfo(array $data)
    {
        $file = new FileInfo();
        $file->setId($data['id']);
        $file->setStatus($data['status']);
        $file->setName($data['name']);
        $file->setSize($data['size']);
        $file->setSha1($data['sha1']);
        $file->setContentType($data['content_type']);

        return $file;
    }

}