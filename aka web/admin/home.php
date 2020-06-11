<?php
include('header.php');
include('sidebar.php');
?>  


<div id="page-wrapper">
  <div class="graphs">

  	<?php 

    if($_SESSION['user']=='admin')
      {

        ?>
        <h3>Welcome to Admin panel</h3>
<!----------------------------------admin end------------------------------------------->
          
<!----------------------------------corportae start------------------------------------------->
<?php
      }

      if($_SESSION['user']=='corporate')
        {
          ?>
          <h3>Welcome to corporate panel</h3>
<!-------------------------------------corporate end---------------------------------------->

<!-----------------------------------------dealer start------------------------------------>
<?php
        }

        if($_SESSION['user']=='dealer')
          {
            ?>
            <h3>Welcome to dealer panel</h3>

<?php
        }
      
        ?>
    
  </div>
  <!--body wrapper start-->
</div>
<!--body wrapper end-->
</div>

<?php
include('footer.php');
?>