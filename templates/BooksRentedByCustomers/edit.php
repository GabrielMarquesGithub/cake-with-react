<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BooksRentedByCustomer $booksRentedByCustomer
 * @var string[]|\Cake\Collection\CollectionInterface $customers
 * @var string[]|\Cake\Collection\CollectionInterface $books
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $booksRentedByCustomer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $booksRentedByCustomer->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Books Rented By Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="booksRentedByCustomers form content">
            <?= $this->Form->create($booksRentedByCustomer) ?>
            <fieldset>
                <legend><?= __('Edit Books Rented By Customer') ?></legend>
                <?php
                    echo $this->Form->control('customer_id', ['options' => $customers]);
                    echo $this->Form->control('book_id', ['options' => $books]);
                    echo $this->Form->control('rental_date');
                    echo $this->Form->control('due_date');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
