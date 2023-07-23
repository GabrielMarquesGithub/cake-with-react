<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\BooksRentedByCustomersController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\BooksRentedByCustomersController Test Case
 *
 * @uses \App\Controller\BooksRentedByCustomersController
 */
class BooksRentedByCustomersControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\BooksRentedByCustomersController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\BooksRentedByCustomersController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\BooksRentedByCustomersController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\BooksRentedByCustomersController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\BooksRentedByCustomersController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
