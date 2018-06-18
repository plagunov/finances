<?php

use yii\db\Migration;

/**
 * Class m180617_195918_finances__consumption_table
 */
class m180617_195918_finances__consumption_table extends Migration
{
    private $tableName = '{{%finances_consumption}}';
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
            'tag_id' => $this->integer(),
        ]);

        $this->createIndex('consumption_date_index', $this->tableName, 'date');
        $this->createIndex('consumption_tag_index', $this->tableName, 'tag_id');
        $this->createIndex('consumption_date_tag_index', $this->tableName, ['tag_id', 'date']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('consumption_date_index', $this->tableName);
        $this->dropIndex('consumption_tag_index', $this->tableName);
        $this->dropIndex('consumption_date_tag_index', $this->tableName);
        $this->dropTable($this->tableName);
    }
}
