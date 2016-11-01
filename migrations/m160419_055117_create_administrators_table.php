<?php

use yii\db\Migration;

class m160419_055117_create_administrators_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%admin}}', [
            'id'       => $this->primaryKey(),
            'username' => $this->string(50)->defaultValue('')->unique(),
            'email'    => $this->string(100)->defaultValue(''),
            'phone'    => $this->string(20)->defaultValue(''),
            'name'     => $this->string(20)->defaultValue(''),
            'password' => $this->string(60)->defaultValue(''),
            'c_t'      => $this->time()
        ]);
        $this->insert('{{%admin}}', [
            'username' => 'admin',
            'password' => Yii::$app->security->generatePasswordHash('admin'),
            'name'     => '管理员',
            'c_t'      => time()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%admin}}');
    }
}
