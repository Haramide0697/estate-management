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
                  <div class="col-md-6">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-male"></i></div>
                  <?php
                  $query = $conn->query("SELECT * FROM visitors order by 'id' DESC");
                  $fetch = $query->fetchAll(PDO::FETCH_OBJ);
                  $count = $query->rowCount();
                  $num = 1;
                  if ($count > 0) {
                  ?>
                  <div class="count"><?php echo "$count"; ?></div>
                  <h3>Visitor(s)</h3>
                  <p>These are the visitors that have viewed the website</p>
                  <?php
                }else{
                  ?>
                  <div class="count">0</div>
                  <h3>Visitor</h3>
                  <p>These are the visitors that have viewed the website</p>
                  <?php
                }


                  ?>
                  
                </div>
              </div>

                <div class="col-md-6">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <?php
                  $query = $conn->query("SELECT * FROM staff order by 'id' DESC");
                  $fetch = $query->fetchAll(PDO::FETCH_OBJ);
                  $count = $query->rowCount();
                  $num = 1;
                  if ($count > 0) {
                  ?>
                  <div class="count"><?php echo "$count"; ?></div>
                  <h3>Staff(s)</h3>
                  <p>These are the staff you have added</p>
                  <?php
                }else{
                  ?>
                  <div class="count">0</div>
                  <h3>Visitor</h3>
                  <p>These are the staff you have added</p>
                  <?php
                }


                  ?>
                  
                </div>
              </div>
              </div>

                <div class="row">
                  <div class="col-md-6">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-envelope"></i></div>
                  <?php
                  $query = $conn->query("SELECT * FROM message order by 'id' DESC");
                  $fetch = $query->fetchAll(PDO::FETCH_OBJ);
                  $count = $query->rowCount();
                  $num = 1;
                  if ($count > 0) {
                  ?>
                  <div class="count"><?php echo "$count"; ?></div>
                  <h3>Message(s)</h3>
                  <p>These are the direct message yoou have</p>
                  <?php
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

                <div class="col-md-6">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-reply"></i></div>
                  <?php
                  $query = $conn->query("SELECT * FROM reply_messages order by 'id' DESC");
                  $fetch = $query->fetchAll(PDO::FETCH_OBJ);
                  $count = $query->rowCount();
                  $num = 1;
                  if ($count > 0) {
                  ?>
                  <div class="count"><?php echo "$count"; ?></div>
                  <h3>Reply Messages(s)</h3>
                  <p>These are your replies for direct messages</p>
                  <?php
                }else{
                  ?>
                  <div class="count">0</div>
                  <h3>Reply Messages(s)</h3>
                  <p>These are your replies for direct messages</p>
                  <?php
                }


                  ?>
                  
                </div>
              </div>
              </div>

                <div class="row">
                  <div class="col-md-6">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-envelope-o"></i></div>
                  <?php
                  $query = $conn->query("SELECT * FROM property_message order by 'id' DESC");
                  $fetch = $query->fetchAll(PDO::FETCH_OBJ);
                  $count = $query->rowCount();
                  $num = 1;
                  if ($count > 0) {
                  ?>
                  <div class="count"><?php echo "$count"; ?></div>
                  <h3>Message(s)</h3>
                  <p>These are the property message yoou have</p>
                  <?php
                }else{
                  ?>
                  <div class="count">0</div>
                  <h3>Message(s)</h3>
                  <p>These are the property message yoou have</p>
                  <?php
                }


                  ?>
                  
                </div>
              </div>

                <div class="col-md-6">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-reply"></i></div>
                  <?php
                  $query = $conn->query("SELECT * FROM reply_pmessages order by 'id' DESC");
                  $fetch = $query->fetchAll(PDO::FETCH_OBJ);
                  $count = $query->rowCount();
                  $num = 1;
                  if ($count > 0) {
                  ?>
                  <div class="count"><?php echo "$count"; ?></div>
                  <h3>Reply Messages(s)</h3>
                  <p>These are your replies for property messages</p>
                  <?php
                }else{
                  ?>
                  <div class="count">0</div>
                  <h3>Reply Messages(s)</h3>
                  <p>These are your replies for property messages</p>
                  <?php
                }


                  ?>
                  
                </div>
              </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-building"></i></div>
                  <?php
                  $query = $conn->query("SELECT * FROM properties order by 'id' DESC");
                  $fetch = $query->fetchAll(PDO::FETCH_OBJ);
                  $count = $query->rowCount();
                  $num = 1;
                  if ($count > 0) {
                  ?>
                  <div class="count"><?php echo "$count"; ?></div>
                  <h3>Message(s)</h3>
                  <p>These are the property message yoou have</p>
                  <?php
                }else{
                  ?>
                  <div class="count">0</div>
                  <h3>Message(s)</h3>
                  <p>These are the property message yoou have</p>
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
          </div>
        </div>
        <!-- /page content -->