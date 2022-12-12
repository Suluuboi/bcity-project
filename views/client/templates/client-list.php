<?php if($model) : ?>
<div class="row">
  <div class="col-4">
    <div class="list-group" id="clientList" id="list-tab" role="tablist">
      <?php foreach($model as $key => $client ){  
        $id = $client["id"]  ?? null
      ?>
        
        <?php include 'client-list-item.php' ?>

      <?php }?>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <?php foreach($model as $key => $clientContent ){  
        $id = $clientContent["id"]  ?? null
      ?>

        <?php include "client-list-item-content.php" ?>

      <?php } ?>
    </div>
  </div>
</div>

<?php else : ?>

<div class="row">
  <p>No Clients Found.</p>
</div>

<?php endif ?>

<script>
  
</script>