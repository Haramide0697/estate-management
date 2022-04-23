<script>
  function del(iden,action){
    var dataString = "id="+iden+"&action="+action;
    var status = $("#status").val();
    var identity = $('#loading')+iden;
    var confirms = confirm("Clicking this will remove this property and all the records completely, are you sure you want to continue?");
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
                <h3>View Properties</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Properties</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>Picture</th>
                          <th>Rent or Sell</th>
                          <th>Price</th>
                          <th>Type of House</th>
                          <th>Category</th>
                          <th>Location (State)</th>
                          <th>Location (Country)</th>
                          <th>Location Details</th>
                          <th>Summary of House</th>
                          <th>Number of Rooms</th>
                          <th>Size</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

<?php
$query = $conn->query("SELECT * FROM properties WHERE status = 'not acquired' order by 'id' DESC");
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
$count = $query->rowCount();
$num = 1;
if ($count > 0) {
  foreach ($fetch as $key) {
    $id = $key->id;
    $pic = $key->pic;
    $ros = $key->rent_sell;
    $price = $key->price;
    $toh = $key->type_of_house;
    $cate = $key->category;
    $locations = $key->location_state;
    $locationc = $key->location_country;
    $locationd = $key->location_details;
    $soh = $key->summary_of_house;
    $nor = $key->number_room;
    $size = $key->size;
    $date = $key->date;
    
    ?>
 
                      
                        <tr>
                          <td><?php echo $num; ?></td>
                          <td><a data-toggle="modal" data-target="#accept<?php echo $id; ?>"><img src="../img/pro-img/<?php echo $pic ?>" height="50px"></a>
                          </td>
                          <td><?php echo $ros; ?></td>
                          <td><?php echo $price; ?></td>
                          <td><?php echo $toh; ?></td>
                          <td><?php echo $cate; ?></td>
                          <td><?php echo $locations; ?></td>
                          <td><?php echo $locationc; ?></td>
                          <td><?php echo $locationd; ?></td>
                          <td><?php echo $soh; ?></td>
                          <td><?php echo $nor; ?></td>
                          <td><?php echo $size; ?></td>
                          <td><?php echo $date; ?></td>
                          <td>
                            <a style="cursor:pointer" onclick= "del('<?php echo $id ?>', 'deleteprop')" title="Remove this student" id="del<?php echo $id?>"><i class="fa fa-trash"></i></a> <span id="loading<?php echo $id ?>" style="display:none"><img src="../img/core-img/loading.gif"></span>
                          </td>

                    <div class="modal fade" id="accept<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header" style="background: white;">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     <h4 class="modal-title" id="myModalLabel" style="color: black; text-transform: capitalize; font-weight: bolder;">(<?php echo $num; ?>) <?php echo $toh; ?> in <?php echo $locations; ?> <?php echo $locationc; ?> </h4>
                     </div>
                     <div class="modal-body">
                        <img src="../img/pro-img/<?php echo $pic ?>" width="100%">
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