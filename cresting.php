<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>HOME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <script src="js/home.js" type="text/javascript"></script>
        
         
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    </head>
    <body >

<div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="display: none;">
  <div class="modal-body">
    <p>Would you like to continue with some arbitrary task?</p>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
    <button type="button" data-dismiss="modal" class="btn btn-primary">Continue Task</button>
  </div>
</div>

<script>
$('#btnUploadCancel').click(function(){
	$('#upload-avatar').modal('toggle');
});
</script>
    </body>