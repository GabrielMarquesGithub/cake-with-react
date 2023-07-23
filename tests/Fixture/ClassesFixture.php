<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClassesFixture
 */
class ClassesFixture extends TestFixture
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
                'description' => 'Lorem ipsum dolor sit amet',
                'date' => '2023-07-22',
                'created_at' => 1690041228,
                'updated_at' => 1690041228,
            ],
        ];
        parent::init();
    }
}
