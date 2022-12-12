<a  
  class="list-group-item list-group-item-action <?php if($key==0) echo 'active'?>"
  id=<?php echo "list-{$id}-list" ?? null ?> 
  data-toggle="list" 
  data-id=<?php echo $id ?>
  href=<?php echo "#list-{$id}" ?> 
  role="tab" 
  aria-controls=<?php echo $id ?? null ?>
>
  <ul class="list-unstyled">
    <li>Name: <?php  echo $client['name'] ?? null ?></li>
    <li>Code: <?php  echo $client['code'] ?? null ?></li>
    <li class='text-center'><?php  echo $client['count'] ?? null ?> </li>
  </ul>
</a>  
