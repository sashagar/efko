<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vacation".
 *
 * @property int $id
 * @property int $user_id
 * @property string $started_at
 * @property string $ended_at
 * @property string|null $created_at
 * @property int $status
 *
 * @property User $user
 */
class Vacation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vacation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['started_at', 'ended_at'], 'required'],
            [['user_id'], 'integer'],
            [['started_at', 'ended_at'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'started_at' => 'Started At',
            'ended_at' => 'Ended At',
            'created_at' => 'Created At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
