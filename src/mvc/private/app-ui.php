<?php

/** @var bbn\Controller $ctrl The current controller */

use bbn\X;

$root = $ctrl->pluginUrl('appui-clipboard');
$clipboardButton = $ctrl->add($root . '/app-ui/button', [], true);
$clipboardCp = $ctrl->add($root . '/app-ui/main', [], true);
$ctrl->obj->data = [
  'status' => $clipboardButton->obj,
  'after' => $clipboardCp->obj
];


