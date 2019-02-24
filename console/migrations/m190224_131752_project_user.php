<?php

use yii\db\Migration;

/**
 * Class m190224_131752_project_user
 */
class m190224_131752_project_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project_user', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'role' => 'enum (\'manager\', \'developer\', \'tester\')',




        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project_user');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190224_131752_project_user cannot be reverted.\n";

        return false;
    }
    */
}
