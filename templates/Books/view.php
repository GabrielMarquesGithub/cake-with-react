<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Book'), ['action' => 'edit', $book->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Book'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Books'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Book'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="books view content">
            <h3><?= h($book->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($book->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Author') ?></th>
                    <td><?= h($book->author) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($book->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Page Count') ?></th>
                    <td><?= $book->page_count === null ? '' : $this->Number->format($book->page_count) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($book->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($book->updated_at) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($book->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Books Rented By Customers') ?></h4>
                <?php if (!empty($book->books_rented_by_customers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Book Id') ?></th>
                            <th><?= __('Rental Date') ?></th>
                            <th><?= __('Due Date') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($book->books_rented_by_customers as $booksRentedByCustomers) : ?>
                        <tr>
                            <td><?= h($booksRentedByCustomers->id) ?></td>
                            <td><?= h($booksRentedByCustomers->customer_id) ?></td>
                            <td><?= h($booksRentedByCustomers->book_id) ?></td>
                            <td><?= h($booksRentedByCustomers->rental_date) ?></td>
                            <td><?= h($booksRentedByCustomers->due_date) ?></td>
                            <td><?= h($booksRentedByCustomers->created_at) ?></td>
                            <td><?= h($booksRentedByCustomers->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'BooksRentedByCustomers', 'action' => 'view', $booksRentedByCustomers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'BooksRentedByCustomers', 'action' => 'edit', $booksRentedByCustomers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'BooksRentedByCustomers', 'action' => 'delete', $booksRentedByCustomers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booksRentedByCustomers->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
