<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BooksRentedByCustomer Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property int $book_id
 * @property \Cake\I18n\FrozenDate $rental_date
 * @property \Cake\I18n\FrozenDate $due_date
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Book $book
 */
class BooksRentedByCustomer extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'customer_id' => true,
        'book_id' => true,
        'rental_date' => true,
        'due_date' => true,
        'created_at' => true,
        'updated_at' => true,
        'customer' => true,
        'book' => true,
    ];
}
