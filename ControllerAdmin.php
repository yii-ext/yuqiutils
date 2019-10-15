<?php

namespace yiiapps\yuqiutils;

class ControllerAdmin extends Controller
{
    public function render($tpl, $data = [])
    {
        if ($userId = \Yii::$app->user->getId()) {
            $data['menus'] = \mdm\admin\components\MenuHelper::getAssignedMenu(\Yii::$app->user->id);
        }
        return parent::render($tpl, $data);
    }
}
