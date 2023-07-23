<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateBooksRentedByCustomers extends AbstractMigration
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
        $table = $this->table('books_rented_by_customers', ['id' => false, 'primary_key' => 'id']); // Definindo o nome da tabela e a coluna id como primary key
        $table
            ->addColumn('id', 'integer', ['autoIncrement' => true, 'signed' => false, 'identity' => true]) // Adicionando a coluna id
            ->addColumn('customer_id', 'integer', ['null' => false]) // Adicionando a coluna customer_id
            ->addColumn('book_id', 'integer', ['null' => false]) // Adicionando a coluna book_id
            ->addColumn('rental_date', 'date', ['null' => false]) // Adicionando a coluna rental_date
            ->addColumn('due_date', 'date', ['null' => false]) // Adicionando a coluna due_date
            ->addColumn('created_at', 'timestamp', ['null' => false, 'default' => 'CURRENT_TIMESTAMP']) // Adicionando a coluna created_at
            ->addColumn('updated_at', 'timestamp', ['null' => false, 'default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP']) // Adicionando a coluna updated_at
            ->addIndex(['customer_id', 'book_id']) // Adicionando índice único nas colunas customer_id e book_id
            ->addForeignKey('customer_id', 'customers', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']) // Adicionando a chave estrangeira para a tabela customers
            ->addForeignKey('book_id', 'books', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']) // Adicionando a chave estrangeira para a tabela books
            ->create(); // Criando a tabela
    }
}
