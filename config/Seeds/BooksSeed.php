<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Books seed.
 */
class BooksSeed extends AbstractSeed
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
                'title' => 'Book ' . $i,
                'author' => 'Author ' . $i,
                'description' => 'Description of Book ' . $i,
                'page_count' => rand(100, 500),
            ];
        }

        $table = $this->table('books');
        $table->insert($data)->save();
    }
}
