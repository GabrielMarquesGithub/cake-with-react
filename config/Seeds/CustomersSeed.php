<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Customers seed.
 */
class CustomersSeed extends AbstractSeed
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
                'name' => 'Customer ' . $i,
                'email' => 'customer' . $i . '@example.com',
            ];
        }

        $table = $this->table('customers');
        $table->insert($data)->save();
    }
}
