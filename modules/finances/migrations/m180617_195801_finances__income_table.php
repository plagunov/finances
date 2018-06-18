<?php

use yii\db\Migration;

/**
 * Class m180617_195801_finances__income_table
 */
class m180617_195801_finances__income_table extends Migration
{
    private $tableName = '{{%finances_income}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'date' => $this->integer(),
            'card_id' => $this->integer(),
            'description' => $this->string(),
            'sum' => $this->float(2),
        ]);

        $this->createIndex('income_date_index', $this->tableName, 'date');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('income_date_index', $this->tableName);
        $this->dropTable($this->tableName);
    }
}
