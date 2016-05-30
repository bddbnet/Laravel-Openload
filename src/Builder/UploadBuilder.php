<?php
/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 19:25
 */

namespace fajardm\LaravelOpenload;


class UploadBuilder extends AbstractBuilder
{
    public static function buildUpload(array $data)
    {
        $upload = new Upload();
        $upload->setUrl($data['url']);
        $upload->setValidUntil(static::buildDate($data['valid_until']));

        return $upload;
    }

}
