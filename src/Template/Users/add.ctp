<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('loginid');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('temp_pass');
            echo $this->Form->input('temp_limit_time', ['empty' => true]);
            echo $this->Form->input('last_change_pass_time', ['empty' => true]);
            echo $this->Form->input('last_login_time', ['empty' => true]);
            echo $this->Form->input('salt');
            echo $this->Form->input('reset');
         #   echo $this->Form->input('group_id');
            echo $this->Form->input('status');
            echo $this->Form->input('create_at');
            echo $this->Form->input('update_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
