<?php

use bbn\Mvc;
/** @var bbn\Mvc\Model $model The current model */

return [
  'status' => [
    'content' => Mvc::getInstance()->subpluginView('app-ui/button', 'html', [], 'appui-clipboard', 'appui-core'),
    'script' => Mvc::getInstance()->subpluginView('app-ui/button', 'js', [], 'appui-clipboard', 'appui-core'),
  ],
  'after' => [
    'content' => Mvc::getInstance()->subpluginView('app-ui/main', 'html', [], 'appui-clipboard', 'appui-core'),
    'script' => Mvc::getInstance()->subpluginView('app-ui/main', 'js', [], 'appui-clipboard', 'appui-core'),
  ]
];


