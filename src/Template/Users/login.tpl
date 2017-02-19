{*
bootstrap-ui 参考サイト
https://github.com/FriendsOfCake/bootstrap-ui
https://ennui-style.blogspot.jp/2016/02/cakephp3bootstrapwindows.html
https://coodip.com/articles/3489
*}
<div style="width:70%;margin: 0 auto;">
<div class="panel panel-default">
<div class="panel-heading"><h3 class="panel-title"><strong>Sign In </strong></h3></div>
<div class="panel-body">
{$this->Flash->render()}
{$this->Form->create($user)}
<div class="form-group">
{$this->Form->input('email', ['type' => 'text', 'label' => 'Username or Email', 'class' => 'form-control','id' => 'exampleInputEmal1', 'placeholder' => 'Enter email'])}
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password <a href="/sessions/forgot_password">(forgot password)</a></label>
{$this->Form->input('password', ['type' => 'password', 'label' => false, 'class' => 'form-control', 'id' => 'exampleInputPassword1', 'placeholder' => 'Password'])}
</div>
{$this->Form->button('Login', ['class' => 'btn btn-sm btn-default'])}
{$this->Form->end()}
</div>
</div>
</div>