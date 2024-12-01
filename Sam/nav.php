
<?php 
 include('checks.php');
 ini_set('display_errors', 0); 
if (!($_SESSION['auth_user']))
{ 
  ?>
  <nav>
<div class="content">
  <a href="home.php" <?php if($page=='home') {  ?> class="active" <?php  } ?> >Home</a>
  <a href="about.php" <?php if($page=='about') {  ?> class="active" <?php  } ?> >About</a>
  <a href="services.php" <?php if($page=='services') {  ?> class="active" <?php  } ?> >Services</a>
  <a href="contact.php" <?php if($page=='contact') {  ?> class="active" <?php  } ?> >Contact</a>
  <a href="signin.php" style="margin-left:500px;" <?php if($page=='signin') {  ?> class="active" <?php  } ?> >Sign in</a>
    </div>
<br>
</nav>
    
<?php } else {
?>

<nav>
    <div class="content">
      <a href="home.php" <?php if($page=='home') {  ?> class="active" <?php  } ?> >Home</a>
      <a href="about.php" <?php if($page=='about') {  ?> class="active" <?php  } ?> >About</a>
      <a href="services.php" <?php if($page=='services') {  ?> class="active" <?php  } ?> >Services</a>
      <a href="contact.php" <?php if($page=='contact') {  ?> class="active" <?php  } ?> >Contact</a>
      <a href="acc.php" style="margin-left:500px;" <?php if($page=='acc') {  ?> class="active" <?php  } ?> >My Account</a>
        </div>
    <br>
</nav>

<?php } ?>