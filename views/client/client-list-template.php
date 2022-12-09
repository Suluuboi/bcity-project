<?php
  use suluuboi\phpmvc\Controller;
  $controller = new Controller();
  $obj=[
    'name'=>'Hans',
    'code'=>'200FVN'
  ];
  //echo '<pre>';
  //var_dump($obj);
  //echo '</pre>';
?>
</br>
<?php
  //echo '<pre>';
  //var_dump($model);
  //echo '</pre>';
?>

<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <?php 
        foreach($model as $key => $client ){
          //echo "{$key} ==> {$client['name']}";
          echo $client['name'];
          $a = $controller->renderTemplate('client/client-list-item-template',[ 'model' => $obj ]);
          echo $a;
          echo '</br>';
          //var_dump($client);
        } 
      ?>
      <?php echo $controller->renderTemplate('client/client-list-item-template',[ 'model' => $obj ]) ?>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <!--<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        Home Data
      </div>-->
      <?php echo $controller->renderTemplate('client/client-list-item-content-template',[ 'model' => [] ]) ?>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Profile Data</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Message Data</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Settings Data</div>
    </div>
  </div>
</div>