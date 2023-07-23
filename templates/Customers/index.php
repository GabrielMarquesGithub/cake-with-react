<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Customer> $customers
 */
?>
<div class="customers index content">
    <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th class="my-text my-text-bold"><?= $this->Paginator->sort('name') ?></th>
                    <th class="my-text my-text-bold"><?= $this->Paginator->sort('email') ?></th>
                    <th class="my-text my-text-bold"><?= $this->Paginator->sort('updated_at') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer) : ?>
                    <tr>
                        <td class="my-text"><?= h($customer->name) ?></td>
                        <td class="my-text"><?= h($customer->email) ?></td>
                        <td class="my-text"><?= h($customer->updated_at) ?></td>
                        <td class="my-text">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
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