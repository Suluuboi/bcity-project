<?php

use suluuboi\phpmvc\form\Form;
use suluuboi\phpmvc\Router;

$form = new Form();



?>

<h1>Client Information</h1>

<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#general" data-toggle="tab" class="nav-link active">General</a>
        </li>
        <li class="nav-item" id="contactsBtn">
            <a href="#contacts" data-toggle="tab" class="nav-link">Contacts</a>
        </li>
    </ul>
    <div class="tab-content py-3">
        <div class="tab-pane active" id="general">
            <p>
            <?php $form = Form::begin('', 'post') ?>
                <?php echo $form->field($model, 'name') ?>
                <?php echo $form->field($model, 'code')  ?>
                <button class="btn btn-success">Submit</button>
            <?php Form::end() ?>
            </p>
        </div>

        <div class="tab-pane" id="contacts">

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
    

    $("#contactsBtn").click(function(){


      $(".alert").remove()

      var id =  $('#clientList a:last-child').data("id")
      if(!id){

        $.ajax({
          url: '/clients',
          type: 'GET',
          beforeSend: function() {
            $("#loaderDiv").show();
            console.log("start loading")
          },
          success: function (response) {
            
            $("#loaderDiv").hide();

            $("#data").append(response);

          },
          error: function(err){
            console.log(err)
          }
        })

      }

      

      
    })
    
    $("#name").keyup(function(e){
      
      var length = $("#name").val().length

      disableButton(length);

      if(length > 0){
        delayGetingName ();
      }
      
    })


    function loadContacts(){

      $.ajax({
          url: '/contacts',
          type: 'GET',
          beforeSend: function() {
            $("#loadContactsDiv").show();
          },
          success: function (response) {
            
            $("#loadContactsDiv").hide();

            $("#data").append(response);

          //addContactsButtonHandeler();

        }
      })

    }


    function getName(){
      var name = $("#name").val()
      /*

      $.ajax({
        url: 'http://www.yourwebsite.com/file_name.php',
        type: 'POST',
        data: {action: 'delItem',item: item},
        success: function (response) {}
      })
      
      */
      $("#code").val(nameToCode(name)+pad(10,3));


    }

    function debounce(func, timeout = 600){
      let timer;
      return (...args) => {
        clearTimeout(timer);
        timer = setTimeout(() => { func.apply(this, args); }, timeout);
      };
    }
      
    const delayGetingName = debounce(()=> getName())

    function pad(num, size, padding = 'pre' ,paddingVale = '0') {
      num = num.toString();
      if(padding = 'pre') 
        while (num.length < size) num = paddingVale + num 
      else
          while (num.length < size) num = num + paddingVale;

      return num;
    }

    function disableButton(length){
      if(length <= 0){
        $(".btn").attr("disabled",true)
      }else{
        $(".btn").attr("disabled") ? $(".btn").removeAttr("disabled") : null;
      }
    }

    function nameToCode(str){
      const result = str.trim().split(/\s+/);

      var code = '';
      
      for(let i = 0; result.length > i;  i++ ){
        
        (result.length > 1)?
          code = code + result[i].charAt(0):
          code += result[i]
        
        

        console.log(i);

        if(i >= 3){
          break;
        }

        //if the last one
        if((i+1) === result.length ){
          code = code + pad(code,3,'post',"ABC")
        }
        

      }

      var last3 = code.slice(0,3)
      var final = last3.toUpperCase();

      return final
    }


  });
    
</script>