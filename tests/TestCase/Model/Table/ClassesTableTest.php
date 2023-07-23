<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClassesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClassesTable Test Case
 */
class ClassesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClassesTable
     */
    protected $Classes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Classes',
        'app.StudentAttendance',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Classes') ? [] : ['className' => ClassesTable::class];
        $this->Classes = $this->getTableLocator()->get('Classes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Classes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ClassesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
