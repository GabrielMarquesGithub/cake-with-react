<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BooksRentedByCustomer> $booksRentedByCustomers
 */
?>
<div class="booksRentedByCustomers index content">
    <?= $this->Html->link(__('New Books Rented By Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Books Rented By Customers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('book_id') ?></th>
                    <th><?= $this->Paginator->sort('rental_date') ?></th>
                    <th><?= $this->Paginator->sort('due_date') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($booksRentedByCustomers as $booksRentedByCustomer): ?>
                <tr>
                    <td><?= $this->Number->format($booksRentedByCustomer->id) ?></td>
                    <td><?= $booksRentedByCustomer->has('customer') ? $this->Html->link($booksRentedByCustomer->customer->name, ['controller' => 'Customers', 'action' => 'view', $booksRentedByCustomer->customer->id]) : '' ?></td>
                    <td><?= $booksRentedByCustomer->has('book') ? $this->Html->link($booksRentedByCustomer->book->title, ['controller' => 'Books', 'action' => 'view', $booksRentedByCustomer->book->id]) : '' ?></td>
                    <td><?= h($booksRentedByCustomer->rental_date) ?></td>
                    <td><?= h($booksRentedByCustomer->due_date) ?></td>
                    <td><?= h($booksRentedByCustomer->created_at) ?></td>
                    <td><?= h($booksRentedByCustomer->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $booksRentedByCustomer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $booksRentedByCustomer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booksRentedByCustomer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booksRentedByCustomer->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
