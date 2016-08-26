<style>
.has-error{color:#ff0000 !important;border:1px solid red !important; }
.has-success{color:#78b310 !important;border:1px solid #78b310 !important;}
</style>
<?php echo $this->Form->create('User', array('id'=>'login', 'role' => 'form', 'method'=> 'post', 'class' => 'form-signin') ); ?>
	<?php echo $this->Form->input('email', array( 'id' => 'email', 'type'=> 'email', 'class' =>'form-control', 'placeholder' => 'Email address', 'autofocus' => 'autofocus', 'div'=> false, 'label'=> false) ); ?>
	<?php echo $this->Form->input('senha', array( 'id' => 'password', 'type'=> 'password', 'class' =>'form-control', 'placeholder' => 'Password', 'div'=> false, 'label'=> false) ); ?>
	<?php echo $this->Form->button('Sign in', array( 'id' => 'login_btn', 'value'=> 'Sign in', 'type'=> 'submit', 'class' =>'btn btn-block bt-login') ); ?>
	<h4 class="text-center login-txt-center">Você pode fazer login usando :</h4> 
	<a class="btn btn-default facebook" href="<?php echo BASE_PATH.'fblogin'; ?>"> <i class="fa fa-facebook modal-icons"></i> Signin with Facebook </a>
	<a class="btn btn-default google" href="<?php echo BASE_PATH.'googlelogin'; ?>"> <i class="fa fa-google-plus modal-icons"></i> Signin with Google </a> 
<?php echo $this->Form->end(); ?>
<div class="form-footer">
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<i class="fa fa-lock"></i>
			<a href="<?php echo BASE_PATH.'forget_password'; ?>"> Recuperar senha? </a>
		
		</div>
		
		<div class="col-xs-6 col-sm-6 col-md-6">
			<i class="fa fa-check"></i>
			<a href="<?php echo BASE_PATH.'register'; ?>"> Cadastrar </a>
		</div>
	</div>
</div>

<?php echo $this->Html->script( array( 'login' )); ?>