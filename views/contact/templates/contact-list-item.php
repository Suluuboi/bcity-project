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
    <li>Name: <?php  echo $contact['name'] ?? null ?></li>
    <li>Code: <?php  echo $contact['code'] ?? null ?></li>
    <li class='text-center'><?php  echo $contact['count'] ?? null ?> </li>
  </ul>
</a>  
