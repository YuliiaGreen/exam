<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products_categorys}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%products}}`
 * - `{{%categorys}}`
 */
class m190315_184825_create_junction_table_for_products_and_categorys_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products_categorys}}', [
            'products_id' => $this->integer(),
            'categorys_id' => $this->integer(),
            'PRIMARY KEY(products_id, categorys_id)',
        ]);

        // creates index for column `products_id`
        $this->createIndex(
            '{{%idx-products_categorys-products_id}}',
            '{{%products_categorys}}',
            'products_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-products_categorys-products_id}}',
            '{{%products_categorys}}',
            'products_id',
            '{{%products}}',
            'id',
            'CASCADE'
        );

        // creates index for column `categorys_id`
        $this->createIndex(
            '{{%idx-products_categorys-categorys_id}}',
            '{{%products_categorys}}',
            'categorys_id'
        );

        // add foreign key for table `{{%categorys}}`
        $this->addForeignKey(
            '{{%fk-products_categorys-categorys_id}}',
            '{{%products_categorys}}',
            'categorys_id',
            '{{%categorys}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%products}}`
        $this->dropForeignKey(
            '{{%fk-products_categorys-products_id}}',
            '{{%products_categorys}}'
        );

        // drops index for column `products_id`
        $this->dropIndex(
            '{{%idx-products_categorys-products_id}}',
            '{{%products_categorys}}'
        );

        // drops foreign key for table `{{%categorys}}`
        $this->dropForeignKey(
            '{{%fk-products_categorys-categorys_id}}',
            '{{%products_categorys}}'
        );

        // drops index for column `categorys_id`
        $this->dropIndex(
            '{{%idx-products_categorys-categorys_id}}',
            '{{%products_categorys}}'
        );

        $this->dropTable('{{%products_categorys}}');
    }
}
