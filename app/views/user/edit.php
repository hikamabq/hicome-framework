<?php 
$this->layout('header');
?>
<form action="<?= url ?>user/edit/<?= $user->id ?>" method="post">
    <label for="">username</label>
    <input type="text" name="username" value="<?= $user->username ?>">
    <label for="">password</label>
    <input type="password" name="password" value="<?= $user->password ?>">
    <button type="submit">Submit</button>
</form>

<?php 
$this->layout('footer');
?>