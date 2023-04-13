<?php 
$title = 'Inscription'; 
include('includes/head.php'); 
include('includes/header.php'); 
?>

<main>
        <?php if(isset($_GET['message']) && !empty($_GET['message'])){
                                    echo '<body onload="popup()">
<div id="myModal" class="modal" onload="popup()">
<div class="modal-content">
    <div class="modal-header">
      
      <h3>ANIPRO</h3>
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">
    <p>' . htmlspecialchars($_GET['message']) . '</p>
    </div>
    <div class="modal-footer">
    </div>
  </div>

</div>';
                                }?>

                        <img class="bannerl" src="images/bannerl.png" alt="Cook Master" width="100%">
       <img class="logofb" src="images/logofb.png">
       
        
        <form class="main_con" action="verification/verifinscription.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Username" name="username" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"  placeholder="E-mail" name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="mdp" placeholder="password" required>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Accept the <a class="a-label" href="">Terms of Service</a>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Accept the <a class="a-label" href="">Privacy Policy</a>
                        </label>
                    </div>
                </div>
        </form>
        
</main>


<?php include('includes/footer.php'); ?>



</body></html>
