<?php
namespace app\models;
use yii\db\ActiveRecord;
class Test extends ActiveRecord{
    /**
     * @return string 返回该模型操作的数据表名称
     */
    public static function tableName()
    {
        return "{{%test}}";
    }
}