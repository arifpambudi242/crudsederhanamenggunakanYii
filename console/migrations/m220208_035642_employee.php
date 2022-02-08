<?php

use yii\db\Migration;

/**
 * Class m220208_035642_employee
 */
class m220208_035642_employee extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%employee}}', [
            'id'            => $this->primaryKey(),
            'nip'           => $this->string()->notNull()->unique(),
            'nama'          => $this->string(100)->notNull(),
            'jekel'         => $this->string(1)->notNull(),
            'tempat_lahir'  => $this->string(100)->notNull(),
            'tgl_lahir'     => $this->date()->notNull(),
            'telpon'        => $this->string(13)->notNull(),
            'agama'         => $this->string(10)->notNull(),
            'alamat'        => $this->string(128)->notNull(),
            'golongan'      => $this->string(1)->notNull()
            // 'password_hash' => $this->string()->notNull(),
            // 'password_reset_token' => $this->string()->unique(),
            // 'email' => $this->string()->notNull()->unique(),

            // 'status' => $this->smallInteger()->notNull()->defaultValue(10),
            // 'created_at' => $this->integer()->notNull(),
            // 'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%employee}}');
    }
}
