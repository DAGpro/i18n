<?php


namespace Yii\I18n;


interface MessageWriter
{
    public function write(array $messages): void;
}