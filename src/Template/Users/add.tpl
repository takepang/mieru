<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
{$this->Form->create($user)}
{$this->Form->input('username')}
{$this->Form->input('loginid')}
{$this->Form->input('email')}
{$this->Form->input('temp_pass')}
{$this->Form->input('temp_limit_time', ['empty' => true])}
{$this->Form->input('last_change_pass_time', ['empty' => true])}
{$this->Form->input('last_login_time', ['empty' => true])}
{$this->Form->input('salt')}
{$this->Form->input('reset')}
{$this->Form->input('group_id')}
{$this->Form->input('status')}
{$this->Form->input('create_at')}
{$this->Form->input('update_at')}
{$this->Form->button(__('Submit'))}
{$this->Form->end()}
</body>
</html>