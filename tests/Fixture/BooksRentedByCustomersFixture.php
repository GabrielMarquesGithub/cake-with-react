<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BooksRentedByCustomersFixture
 */
class BooksRentedByCustomersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'customer_id' => 1,
                'book_id' => 1,
                'rental_date' => '2023-07-22',
                'due_date' => '2023-07-22',
                'created_at' => 1690043149,
                'updated_at' => 1690043149,
            ],
        ];
        parent::init();
    }
}
