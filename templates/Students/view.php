<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students view content">
            <h3><?= h($student->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($student->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($student->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($student->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($student->updated_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Student Attendance') ?></h4>
                <?php if (!empty($student->student_attendance)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Class Id') ?></th>
                            <th><?= __('Present') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($student->student_attendance as $studentAttendance) : ?>
                        <tr>
                            <td><?= h($studentAttendance->id) ?></td>
                            <td><?= h($studentAttendance->student_id) ?></td>
                            <td><?= h($studentAttendance->class_id) ?></td>
                            <td><?= h($studentAttendance->present) ?></td>
                            <td><?= h($studentAttendance->created_at) ?></td>
                            <td><?= h($studentAttendance->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'StudentAttendance', 'action' => 'view', $studentAttendance->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'StudentAttendance', 'action' => 'edit', $studentAttendance->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StudentAttendance', 'action' => 'delete', $studentAttendance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentAttendance->id)]) ?>
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
