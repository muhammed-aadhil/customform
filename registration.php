<?php


use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Learning_CustomForm',
    isset($file) ? realpath(dirname($file)) : __DIR__
);
