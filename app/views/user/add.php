<?php 
$this->loadView('layouts/header');
?>
<form action="<?= url ?>user/add" method="post">
    <label for="">username</label>
    <input type="text" name="username">
    <label for="">password</label>
    <input type="password" name="password">
    <button type="submit">Submit</button>
</form>

<?php 
$this->loadView('layouts/footer');
?>