<?php

use humhub\core\dashboard\widgets\Sidebar;
use humhub\core\tour\Module;

Yii::$app->moduleManager->register(array(
    'id' => 'tour',
    'class' => Module::className(),
    'isCoreModule' => true,
    'events' => array(
        array('class' => Sidebar::className(), 'event' => Sidebar::EVENT_INIT, 'callback' => array(Module::className(), 'onDashboardSidebarInit')),
    ),
));
?>