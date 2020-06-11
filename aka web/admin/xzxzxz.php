<?php 

    if($_SESSION['user']=='admin')
      {

        ?>
        <div class="user-name">
                    <p>Admin
                      <span>Administrator</span>
                    </p>
                  </div>
<!----------------------------------admin end------------------------------------------->
          
<!----------------------------------corportae start------------------------------------------->
<?php
      }

      if($_SESSION['user']=='corporate')
        {
          ?>
          <div class="user-name">
                    <p>Corporate
                      <span>Panel</span>
                    </p>
                  </div>
<!-------------------------------------corporate end---------------------------------------->

<!-----------------------------------------dealer start------------------------------------>
<?php
        }

        if($_SESSION['user']=='dealer')
          {
            ?>
            <div class="user-name">
                    <p>Dealer
                      <span>Pannel</span>
                    </p>
                  </div>
<!-----------------------------------------dealer end------------------------------------>

<?php
        }
      
        ?>