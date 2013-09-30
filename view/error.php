<div class="sidebar1">  
    <p> <?php if(isset($_SESSION['login'])){$this->get_controller("account");} else { $this->get_controller("login");}?></p>
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1>404 ERROR</h1>
   <p><?php echo $views[0]; ?></p>
    <!-- end .content --></div>