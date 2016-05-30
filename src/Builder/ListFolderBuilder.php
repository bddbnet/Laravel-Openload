<?php
/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 19:01
 */

namespace fajardm\LaravelOpenload;


class ListFolderBuilder extends AbstractBuilder
{

    /**
     * @param array $data
     * @return Folder
     */
    public static function buildFolder(array $data)
    {
        $folder = new Folder();
        $folder->setId($data['id']);
        $folder->setName($data['name']);

        return $folder;
    }

    /**
     * @param array $data
     * @return FileInfo
     */
    public static function buildFile(array $data)
    {
        $file = new File;
        $file->setLinkextId($data['linkextid']);
        $file->setName($data['name']);
        $file->setSha1($data['sha1']);
        $file->setFolderId($data['folderid']);
        $file->setUploadAt(static::buildDate($data['upload_at']));
        $file->status($data['status']);
        $file->setSize($data['size']);
        $file->setContentType($data['content_type']);
        $file->setDownloadCount($data['download_count']);
        $file->setCstatus($data['cstatus']);
        $file->setLink($data['link']);

        return $file;
    }
}
