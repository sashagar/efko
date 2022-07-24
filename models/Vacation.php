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
 * @property string $created_at
 * @property int $status
 * @property string $status_txt
 *
 * @property User $user
 */


class Vacation extends \yii\db\ActiveRecord
{
    const WAITING = 0;
    const APPROVED = 1;
    const CANCELED = 2;
    public static function tableName()
    {
        return 'vacation';
    }
    /**
     * {@inheritdoc}
     */

    public string $status_txt;
    public bool $is_owner;
    public bool $can_edit;
    public $user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['started_at', 'ended_at'], 'required'],
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
            'status' => 'Status'
        ];
    }

    public function afterFind()
    {
        $this->status_txt = $this->getStatus();
        $this->is_owner = $this->getIsOwner();
        $this->can_edit = $this->getCanEdit();
    }

    public function getStatus()
    {
        return match($this->status) {
            self::WAITING => 'waiting',
            self::APPROVED => 'approved',
            self::CANCELED => 'canceled',
            default => 'waiting'
        };
    }

    public function getCanEdit(): bool
    {
        return $this->status === self::WAITING
            && $this->is_owner;
    }

    public function getIsOwner(): bool
    {
        return $this->user_id == Yii::$app->user->getId();
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
