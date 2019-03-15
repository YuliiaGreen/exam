<?php

use yii\db\Migration;

/**
 * Class m190315_181222_Products
 */
class m190315_181222_Products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=INNODB';
        }
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'product_name' => $this->tinput()->notNull(),
            'date_created' => $this->timestamp()->defaultValue(null),
            'price'=>$this->integer()->notNull()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190315_181222_Products cannot be reverted.\n";

        return false;
    }
    */
}
