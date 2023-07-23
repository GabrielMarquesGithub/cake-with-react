<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BooksRentedByCustomer $booksRentedByCustomer
 * @var \Cake\Collection\CollectionInterface|string[] $customers
 * @var \Cake\Collection\CollectionInterface|string[] $books
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Books Rented By Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="booksRentedByCustomers form content">
            <?= $this->Form->create($booksRentedByCustomer) ?>
            <fieldset>
                <legend><?= __('Add Books Rented By Customer') ?></legend>
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
