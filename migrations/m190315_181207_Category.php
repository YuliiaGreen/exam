<?php

use yii\db\Migration;

/**
 * Class m190315_181207_Category
 */
class m190315_181207_Category extends Migration
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
        $this->createTable('{{%categorys}}', [
            'id' => $this->primaryKey(),
            'category_name' => $this->text()->notNull(),
            'date_created' => $this->timestamp()->defaultValue(null),
        ], $tableOptions);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categorys}}');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190315_181207_Category cannot be reverted.\n";

        return false;
    }
    */
}
