<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateBooks extends AbstractMigration
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
        $table = $this->table('books', ['id' => false, 'primary_key' => 'id']); // Definindo o nome da tabela e a coluna id como primary key
        $table
            ->addColumn('id', 'integer', ['autoIncrement' => true, 'signed' => false, 'identity' => true]) // Adicionando a coluna id
            ->addColumn('title', 'string', ['limit' => 255, 'null' => false]) // Adicionando a coluna title
            ->addColumn('author', 'string', ['limit' => 100, 'null' => false]) // Adicionando a coluna author
            ->addColumn('description', 'text', ['null' => true]) // Adicionando a coluna description
            ->addColumn('page_count', 'integer', ['null' => true]) // Adicionando a coluna page_count
            ->addColumn('created_at', 'timestamp', ['null' => false, 'default' => 'CURRENT_TIMESTAMP']) // Adicionando a coluna created_at
            ->addColumn('updated_at', 'timestamp', ['null' => false, 'default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP']) // Adicionando a coluna updated_at
            ->create(); // Criando a tabela
    }
}
