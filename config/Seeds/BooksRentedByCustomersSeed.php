<?php

declare(strict_types=1);

use Migrations\AbstractSeed;
use Cake\I18n\FrozenTime;

/**
 * BooksRentedByCustomers seed.
 */
class BooksRentedByCustomersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 50; $i++) {
            $data[] = [
                'customer_id' => rand(1, 50),
                'book_id' => rand(1, 50),
                'rental_date' => FrozenTime::now()->format('Y-m-d'),
                'due_date' => FrozenTime::now()->addDays(rand(1, 30))->format('Y-m-d'),
            ];
        }

        $table = $this->table('books_rented_by_customers');
        $table->insert($data)->save();
    }
}
