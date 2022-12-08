<?php

?>

    <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
        <ul class="list-unstyled">
          <li>Name: <?php  echo $model['name'] ?? null ?></li>
          <li>Code: <?php  echo $model['code'] ?? null ?></li>
          <li class='text-center'>Number <?php  echo $model['count'] ?? null ?> </li>
        </ul>
    </a>

