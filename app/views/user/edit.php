<?php 
$this->loadView('layouts/header');
?>
<form action="<?= url ?>user/edit/<?= $user->id ?>" method="post">
    <input type="text" name="username" value="<?= $user->username ?>">
    <input type="password" name="password" value="<?= $user->password ?>">
    <button type="submit">Go</button>
</form>

<?php 
$this->loadView('layouts/footer');
?>