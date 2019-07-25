<?php
use yii\db\Migration;

/**
 * Class m190723_201057_addAdressTable
 */
class m190723_201057_addAdressTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('adress', [
            'id' => $this->primaryKey(11),
            'user_id' => $this->integer(11),
            'post_code' => $this->integer(11)->notNull(),
            'country' => $this->string(2)->notNull(),
            'city' => $this->string(64)->notNull(),
            'street' => $this->string(64)->notNull(),
            'house_number' => $this->string(64)->notNull(),
            'flat_number' => $this->string(64)
        ]);
        $this->addForeignKey('adress_user_id','adress','user_id','users','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('adress');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190723_201057_addAdressTable cannot be reverted.\n";

        return false;
    }
    */
}
