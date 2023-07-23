<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BooksRentedByCustomersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BooksRentedByCustomersTable Test Case
 */
class BooksRentedByCustomersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BooksRentedByCustomersTable
     */
    protected $BooksRentedByCustomers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BooksRentedByCustomers',
        'app.Customers',
        'app.Books',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BooksRentedByCustomers') ? [] : ['className' => BooksRentedByCustomersTable::class];
        $this->BooksRentedByCustomers = $this->getTableLocator()->get('BooksRentedByCustomers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BooksRentedByCustomers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BooksRentedByCustomersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BooksRentedByCustomersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
