<?php

namespace humhub\core\tour;

use Yii;
use humhub\core\tour\widgets\Dashboard;
use humhub\models\Setting;

/**
 * This module shows an introduction tour for new users
 *
 * @package humhub.modules_core.like
 * @since 0.5
 */
class Module extends \yii\base\Module
{

    public $isCoreModule = true;

    public static function onDashboardSidebarInit($event)
    {
        if (Yii::$app->user->isGuest)
            return;

        if (Setting::Get('enable', 'tour') == 1 && Yii::$app->user->getIdentity()->getSetting("hideTourPanel", "tour") != 1) {
            $event->sender->addWidget(Dashboard::className(), array(), array('sortOrder' => 0));
        }
    }

}
