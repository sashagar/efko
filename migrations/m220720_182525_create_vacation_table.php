<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vacation}}`.
 */
class m220720_182525_create_vacation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vacation}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'started_at' => $this->date()->notNull(),
            'ended_at' => $this->date()->notNull(),
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'status' => $this->integer()->notNull()->defaultValue(0),
        ]);

        $this->addForeignKey('vacation_user_id', 'vacation', 'user_id', 'user', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vacation}}');
    }
}
