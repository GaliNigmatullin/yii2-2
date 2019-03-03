<?php

use yii\db\Migration;

/**
 * Class m190224_133359_create_fk
 */
class m190224_133359_create_fk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fx_task_user', 'task', ['executor_id'], 'user', ['id']);
        $this->addForeignKey('fx_task_user_2', 'task', ['creator_id'], 'user', ['id']);
        $this->addForeignKey('fx_task_user_3', 'task', ['updater_id'], 'user', ['id']);
        $this->addForeignKey('fx_project_user', 'project', ['creator_id'], 'user', ['id']);
        $this->addForeignKey('fx_project_user_2', 'project', ['updater_id'], 'user', ['id']);
        $this->addForeignKey('fx_projectuser_user', 'project_user', ['user_id'], 'user', ['id']);
        $this->addForeignKey('fx_projectuser_project', 'project_user', ['project_id'], 'project', ['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fx_task_user', 'task', ['executor_id'], 'user', ['id']);
        $this->dropForeignKey('fx_task_user_2', 'task', ['creator_id'], 'user', ['id']);
        $this->dropForeignKey('fx_task_user_3', 'task', ['updater_id'], 'user', ['id']);
        $this->dropForeignKey('fx_project_user', 'project', ['creator_id'], 'user', ['id']);
        $this->dropForeignKey('fx_project_user_2', 'project', ['updater_id'], 'user', ['id']);
        $this->dropForeignKey('fx_projectuser_user', 'project_user', ['user_id'], 'user', ['id']);
        $this->dropForeignKey('fx_projectuser_project', 'project_user', ['project_id'], 'project', ['id']);

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190224_133359_create_fk cannot be reverted.\n";

        return false;
    }
    */
}
