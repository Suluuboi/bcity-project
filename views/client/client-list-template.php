<?php if($model) : ?>
<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <?php foreach($model as $key => $client ){  
        $id = $client["id"]  ?? null
      ?>
        <a  
          class="list-group-item list-group-item-action <?php if($key==0) echo 'active'?>"
          class="hans"  
          id=<?php echo "list-{$id}-list" ?? null ?> 
          data-toggle="list" 
          href=<?php echo "#list-{$id}" ?> 
          role="tab" 
          aria-controls=<?php echo $id ?? null ?>
        >
          <ul class="list-unstyled">
            <li>Name: <?php  echo $client['name'] ?? null ?></li>
            <li>Code: <?php  echo $client['code'] ?? null ?></li>
            <li class='text-center'>Number <?php  echo $client['count'] ?? null ?> </li>
          </ul>
        </a>    
      <?php }?>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <?php foreach($model as $key => $clientContent ){  
        $id = $clientContent["id"]  ?? null
      ?>
        <div 
          class="tab-pane fade show <?php if($key==0) echo 'active'?>" 
          id="list-<?php  echo $id ?? null ?>" role="tabpanel" 
          aria-labelledby="list-<?php  echo $id ?? null ?>-list"
        >
          <h4><?php  echo $clientContent['name'] ?> Contacts</h4>
          <button>add new contacts</button>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php else : ?>

<div class="row">
  <p>No Clients Found.</p>
</div>

<?php endif ?>