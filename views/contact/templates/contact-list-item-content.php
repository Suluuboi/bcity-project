<div 
    class="tab-pane fade show <?php if($key==0) echo 'active'?>" 
    id="list-<?php  echo $id ?? null ?>" role="tabpanel" 
    aria-labelledby="list-<?php  echo $id ?? null ?>-list"
>
    <h4><?php  echo $contactContent['name'] ?> Contacts</h4>

          <button id="btnAdd" data=<?php echo $id ?> type="button" class="btn btn-primary btnAdd" onclick="add(<?php echo $id ?>)">
            Show/Hide
          </button>

    <div id="contactsToAdd<?php echo $id ?>" hidden>
            <br/>
            <ul id="clientContacts" class="list-group" style="max-height: 150px; overflow-y: scroll;" >

              <!--<?php include 'contact-list-item.php' ?>-->
          
            </ul>
            <p>Click on one of the contacts to add them to this client.</p>
    </div>
</div>


<script>

    function add(id){
        toggleDiv(id)
    }
    
    function toggleDiv(id){
      var hidden = $(`#contactsToAdd${id}`).attr('hidden')

      if(hidden){
        $(`#contactsToAdd${id}`).removeAttr('hidden')
      }else{
        $(`#contactsToAdd${id}`).slideToggle();
        //loadContacts()
      }
           
    }

</script>