<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opções:') ?></h4>
            <?= $this->Html->link(__('Editar Tarefa'), ['action' => 'edit', $tarefa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Tarefa'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Tem certeza que quer deletar a tarefa {0}?', $tarefa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Tarefas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova Tarefa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tarefas view content">
            <h3><?= h($tarefa->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tarefa') ?></th>
                    <td><?= h($tarefa->tarefa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tarefa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tarefa->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tarefa->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
