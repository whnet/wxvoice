<?php

namespace backend\models;

use Yii;
use backend\models\Members;

/**
 * This is the model class for table "bdtconcerns".
 *
 * @property int $id
 * @property int $concern_id 粉丝
 * @property int $to_concern_id 关注者
 * @property string $created 关注时间
 */
class Concerns extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bdtconcerns';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mid', 'to_mid'], 'integer'],
            [['created'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'mid' => '粉丝',
            'to_mid' => '关注者',
            'created' => '关注时间',
        ];
    }
    public function getUser()
    {
        return $this->hasOne(Members::className(), ['id' => 'mid']);
    }
    public function getExpert()
    {
        return $this->hasOne(Members::className(), ['id' => 'to_mid']);
    }



}
