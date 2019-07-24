<?php
use yii\db\Migration;

/**
 * Class m190723_200522_addUserTable
 */
class m190723_200522_addUserTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(11),
            'login' => $this->string(64)->notNull()->unique(),
            'password' =>  $this->text()->notNull(),
            'name' => $this->string(64)->notNull(),
            'surname' => $this->string(128)->notNull(),
            'sex' => $this->string(64)->notNull(),
            'date_add' =>$this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'email' => $this->string(128)->notNull()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
