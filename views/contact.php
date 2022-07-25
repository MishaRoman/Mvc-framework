<?php 
/** @var $this \app\core\View */

$this->title = 'Contact';
?>
<h1>Contact us</h1>
<form action="" method="post">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" name="subject">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name="body"></textarea>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>