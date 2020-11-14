<?php
require "db.php";

$data = $_POST;
if( isset($data['do_signup']) ) {
     
	 $errors = array();
	 
	 if (trim( $data['login']) == '') {
	 $errors[] = 'Введите Логин!';
	 }
	 
	 if (trim( $data['email']) == '') {
	 $errors[] = 'Введите Email!';
	 }
	 
	 if ( trim( $data['password']) == '') {
	 $errors[] = 'Введите пароль!';
	 }
	 
	 if ( R::count('users', "email = ?", array($data[email])) > 0 )
     {
	 $errors[] = 'Пользователь с таким Email уже существует!';
	 }
	 
	 if ( R::count('users', "login = ?", array($data[login])) > 0 )
     {
	 $errors[] = 'Пользователь с таким логином уже существует!';
	 }
	 
	 if( empty($errors) ) 
	 {
	 
	 // Все хорошо 
	 $user = R::dispense('users');
	 $user->login = $data['login'];
	 $user->email = $data['email'];
	 $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
	 R::store($user);
	 echo '<div style="color: green;">Вы успешно зарегистрировались!</div><hr>';
	 } 
	 else {
	 echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	 }
	 
}
?>



<form method="POST" action="/signup.php">

<p>
 <p><strong>Логин</strong>:</p>
 <input type="text" name="login" value="<?php echo @$data['login']; ?>">
 </p>
 
 <p>
 <p><strong>Электронная почта</strong>:</p>
 <input type="email" name="email" value="<?php echo @$data['email']; ?>">
 </p>
 
 <p>
 <p><strong>Пароль</strong>:</p>
 <input type="password" name="password" value="<?php echo @$data['password']; ?>">
 </p>
 
 <p>
 <button type="submit" name="do_signup">Зарегистрироваться</button>
 </p>
  
</form>