<script>
  function del(iden,action){
    var dataString = "id="+iden+"&action="+action;
    var status = $("#status").val();
    var identity = $('#loading')+iden;
    var confirms = confirm("Clicking this will remove this staff permanently, are you sure you want to continue?");
    if (confirms == true) {
    $.ajax({
        type: "POST",
        url: "control.php",
        cache : false,
        data : dataString,
        beforeSend : function(){
            $('#del'+iden).hide();
            $('#loading'+iden).show();
        },
        success : function(response){
            $('#loading'+iden).hide();
            alert(response);
            window.location.reload(1);
        }
    });
}
}
</script>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>View Users</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Users</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>Passport</th>
                          <th>Surname</th>
                          <th>Other Names</th>
                          <th>Gender</th>
                          <th>Country</th>
                          <th>Email</th>
                          <th>Number</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

<?php
$query = $conn->query("SELECT * FROM staff order by 'id' DESC");
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
$count = $query->rowCount();
$num = 1;
if ($count > 0) {
  foreach ($fetch as $key) {
    $id = $key->id;
    $passport = $key->passport;
    $surname = $key->surname;
    $othernames = $key->othernames;
    $gender = $key->gender;
    $country = $key->country;
    $email = $key->email;
    $number = $key->number;
    $date = $key->dates;
    
    ?>
 
                      
                        <tr>
                          <td><?php echo $num; ?></td>
                          <td><a data-toggle="modal" data-target="#accept<?php echo $id; ?>"><img src="../img/userimg/<?php echo $passport ?>" height="10%"></a>
                          </td>
                          <td><?php echo $surname; ?></td>
                          <td><?php echo $othernames; ?></td>
                          <td><?php echo $gender; ?></td>
                          <td><?php echo $country; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $number; ?></td>
                          <td><?php echo $date; ?></td>
                          <td>
                            <a style="cursor:pointer" onclick= "del('<?php echo $id ?>', 'removestaff')" title="Remove this staff" id="del<?php echo $id?>"><i class="fa fa-trash"></i></a> <span id="loading<?php echo $id ?>" style="display:none"><img src="../img/core-img/loading.gif"></span>
                          </td>

                    <div class="modal fade" id="accept<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header" style="background: white;">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     <h4 class="modal-title" id="myModalLabel" style="color: black; text-transform: capitalize; font-weight: bolder;">(<?php echo $email; ?>) <?php echo $surname; ?> <?php echo $othernames; ?></h4>
                     </div>
                     <div class="modal-body">
                        <img src="../img/userimg/<?php echo $passport ?>" width="100%">
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>
                        </tr>
                     </tbody>

      <?php
      $num++;
   }
   
}
?>
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->