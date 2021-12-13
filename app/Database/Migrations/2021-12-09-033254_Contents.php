<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ContentDetails extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'contraint' => 11,
                'unique' => true,
                'auto-increment' => true
            ],
            'id_content' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => false
            ],
            'desc' => [
                'type' => 'VARCHAR',
                'constraint' => 1000,
                'null' => false
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
            'update_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('contents');
    }

    public function down()
    {
        //
    }
}
