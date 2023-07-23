<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCustomers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('customers', ['id' => false, 'primary_key' => 'id']); // Definindo o nome da tabela e a coluna id como primary key
        $table
            ->addColumn('id', 'integer', ['autoIncrement' => true, 'signed' => false, 'identity' => true]) // Adicionando a coluna id
            ->addColumn('name', 'string', ['limit' => 100, 'null' => false]) // Adicionando a coluna name
            ->addColumn('email', 'string', ['limit' => 255, 'null' => false]) // Adicionando a coluna email
            ->addColumn('created_at', 'timestamp', ['null' => false, 'default' => 'CURRENT_TIMESTAMP']) // Adicionando a coluna created_at
            ->addColumn('updated_at', 'timestamp', ['null' => false, 'default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP']) // Adicionando a coluna updated_at
            ->addIndex(['email'], ['unique' => true]) // Adicionando índice único na coluna email
            ->create(); // Criando a tabela
    }
}
