<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BooksRentedByCustomers Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\BooksTable&\Cake\ORM\Association\BelongsTo $Books
 *
 * @method \App\Model\Entity\BooksRentedByCustomer newEmptyEntity()
 * @method \App\Model\Entity\BooksRentedByCustomer newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BooksRentedByCustomer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BooksRentedByCustomer get($primaryKey, $options = [])
 * @method \App\Model\Entity\BooksRentedByCustomer findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BooksRentedByCustomer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BooksRentedByCustomer[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BooksRentedByCustomer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BooksRentedByCustomer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BooksRentedByCustomer[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BooksRentedByCustomer[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BooksRentedByCustomer[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BooksRentedByCustomer[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BooksRentedByCustomersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('books_rented_by_customers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Books', [
            'foreignKey' => 'book_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('customer_id')
            ->notEmptyString('customer_id');

        $validator
            ->integer('book_id')
            ->notEmptyString('book_id');

        $validator
            ->date('rental_date')
            ->requirePresence('rental_date', 'create')
            ->notEmptyDate('rental_date');

        $validator
            ->date('due_date')
            ->requirePresence('due_date', 'create')
            ->notEmptyDate('due_date');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->notEmptyDateTime('updated_at');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('customer_id', 'Customers'), ['errorField' => 'customer_id']);
        $rules->add($rules->existsIn('book_id', 'Books'), ['errorField' => 'book_id']);

        return $rules;
    }
}
