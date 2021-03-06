<?php

class m140602_111327_create_key_storage_item_table extends \yii\db\Migration
{

    const TABLE_NAME = '{{%key_storage_item}}'

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable(self::TABLE_NAME, [
            'key' => $this->string(128)->notNull(),
            'value' => $this->text(),
            'comment' => $this->text(),
            'updated_at' => $this->integer(11),
            'created_at' => $this->integer(11),
            'PRIMARY KEY (key)',
            'UNIQUE KEY (key)',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
