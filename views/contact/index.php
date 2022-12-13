<?php

use suluuboi\phpmvc\form\Form;

$form = new Form();

?>

<h1>Contact Information</h1>

<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#general" data-toggle="tab" class="nav-link active">General</a>
        </li>
        <li class="nav-item" id="clientsBtn">
            <a href="#clients" data-toggle="tab" class="nav-link">Clients</a>
        </li>
    </ul>
    <div class="tab-content py-3">
        <div class="tab-pane active" id="general">
            <p>
            <?php $form = Form::begin('', 'post') ?>
                <?php echo $form->field($model, 'name') ?>
                <?php echo $form->field($model, 'surname')  ?>
                <?php echo $form->field($model, 'email')  ?>
                <button class="btn btn-success">Submit</button>
            <?php Form::end() ?>
            </p>
        </div>

        <div class="tab-pane" id="clients">

          <div class="spinner-border" role="status" id="loaderDiv">
            <span class="sr-only">Loading...</span>
          </div>

          <div id="data">
            
          </div>
          
        </div>
    </div>
</div>


<script>
  $(document).ready(function(){
    

    $("#clientsBtn").click(function(){

      
      $(".alert").remove()

      var id =  $('#clientList a:last-child').data("id")
      
      if(!id){

        console.log(id)

        $.ajax({
          url: '/contacts',
          type: 'GET',
          beforeSend: function() {
            $("#loaderDiv").show();
            console.log("start loading")
          },
          success: function (response) {
            
            $("#loaderDiv").hide();
            console.log(response)

            $("#data").append(response);

          }
        })

      }

      
    })


  });
    
</script>