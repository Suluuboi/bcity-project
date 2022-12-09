<?php
  $name = $model['id'];
?>
<li class="list-group-item">%CUSTOMER%<span class="label label-primary pull-right">SALES</span></li>
    <a  class="list-group-item list-group-item-action"  
        id=<?php echo "list-{$name}-list" ?? null ?> 
        data-toggle="list" 
        href=<?php echo "#list-{$name}" ?> 
        role="tab" 
        aria-controls=<?php echo $name ?? null ?>
    >
        <ul class="list-unstyled">
          <li>Name: <?php  echo $model['name'] ?? null ?></li>
          <li>Code: <?php  echo $model['code'] ?? null ?></li>
          <li class='text-center'>Number <?php  echo $model['count'] ?? null ?> </li>
        </ul>
    </a>
