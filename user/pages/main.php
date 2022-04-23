<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Main Page</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Main Page</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                 <div class="row">
                  <?php
                  $query = $conn->query("SELECT * FROM properties WHERE status = 'not acquired' order by 'id' DESC");
                  $fetch = $query->fetchAll(PDO::FETCH_OBJ);
                  $count = $query->rowCount();
                  $num = 1;
                  if ($count > 0) {
                    foreach ($fetch as $key) {
                  ?>   
               
                  <div class="col-md-3">
                <div class="tile-stats">

                  <img src="../img/pro-img/<?php echo $key->pic ?>" height="250px"; width="100%">
                  
                  
                </div>
              </div>
                <?php
                    }
                }else{
                  ?>
                  <div class="count">0</div>
                  <h3>Message(s)</h3>
                  <p>These are the direct message yoou have</p>
                  <?php
                }


                  ?>
              </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->