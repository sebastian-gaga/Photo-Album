<!DOCTYPE html>
<html>
<?php include 'includes/hlinks.php'; ?>
<style type="text/css">
	.container {

    width: 1320px;

}
#eventdate{
	line-height: 23px;
}
</style>
<head>
	<title>Images</title>
</head>
<body style="background: #8080803b;">
<?php include 'includes/nav.php'; ?>
<script>
    $(document).ready(function(){
        administrators();
        function administrators(){
            $.ajax({
                url: 'Events-ajax.php',
                type: 'POST',
                success: function(data){
                    $('#event_sheet').html(data);
                    $('#myTable').DataTable( {
                        responsive: true
                    } );
                }
            });
        }
    });
</script>
	<div class="container">
		<div class="row" style="background:white;border-radius:5px;padding: 2em;">
			<div class="col-sm-12">
	<table id="myTable" class="table-bordered table-striped">
  <thead style="background: #2688b5;color:white;">
    <tr>
      <th scope="col" class="text-center" >SR #</th>
      <th scope="col" class="text-center">IMAGE</th>
    </tr>
  </thead>
  <tbody id="event_sheet">
    
  </tbody>
</table>
</div>
		</div>
		</div>
 <div id="admin_edit" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:80%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style ="background:#3c8dbc;color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Form </h4>
      </div>
      <div class="modal-body" id="adm_edit">
    

      </div>
    </div>

  </div>
</div>

</body>
</html>