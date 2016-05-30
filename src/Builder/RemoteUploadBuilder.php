<?php
/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 19:31
 */

namespace fajarmawan\LaravelOpenload;


class RemoteUploadBuilder extends AbstractBuilder
{
    public static function buildRemoteUpload(array $data)
    {
        $remoteUpload = new RemoteUpload();
        $remoteUpload->setId($data['id']);
        $remoteUpload->setFolderId($data['folderid']);

        return $remoteUpload;
    }

    public static function buildRemoteUploadStatus(array $data)
    {
        $uploadStatus = new RemoteUploadStatus();
        $uploadStatus->setId($data['id']);
        $uploadStatus->setFolderId($data['folderid']);
        $uploadStatus->setRemoteUrl($data['remoteurl']);
        $uploadStatus->setStatus($data['status']);
        $uploadStatus->setBytesLoaded($data['bytes_loaded']);
        $uploadStatus->setBytesTotal($data['bytes_total']);
        $uploadStatus->setAdded(static::buildDate($data['added']));
        $uploadStatus->setLastUpdate(static::buildDate($data['last_update']));
        $uploadStatus->setExtid($data['extid']);
        $uploadStatus->setUrl($data['url']);

        return $uploadStatus;
    }
}