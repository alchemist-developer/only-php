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
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $tarefa->id],
                ['confirm' => __('Tem certeza que quer deletar a tarefa {0}?', $tarefa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Tarefas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tarefas form content">
            <?= $this->Form->create($tarefa) ?>
            <fieldset>
                <legend><?= __('Editar Tarefa') ?></legend>
                <?php
                    echo $this->Form->control('tarefa');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Adicionar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
