<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BooksRentedByCustomer $booksRentedByCustomer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Books Rented By Customer'), ['action' => 'edit', $booksRentedByCustomer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Books Rented By Customer'), ['action' => 'delete', $booksRentedByCustomer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booksRentedByCustomer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Books Rented By Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Books Rented By Customer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="booksRentedByCustomers view content">
            <h3><?= h($booksRentedByCustomer->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $booksRentedByCustomer->has('customer') ? $this->Html->link($booksRentedByCustomer->customer->name, ['controller' => 'Customers', 'action' => 'view', $booksRentedByCustomer->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Book') ?></th>
                    <td><?= $booksRentedByCustomer->has('book') ? $this->Html->link($booksRentedByCustomer->book->title, ['controller' => 'Books', 'action' => 'view', $booksRentedByCustomer->book->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($booksRentedByCustomer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rental Date') ?></th>
                    <td><?= h($booksRentedByCustomer->rental_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Due Date') ?></th>
                    <td><?= h($booksRentedByCustomer->due_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($booksRentedByCustomer->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($booksRentedByCustomer->updated_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
