<?php if($model) : ?>

    <?php foreach($model as $key => $contact ){  
        $id = $contact["id"]  ?? null
    ?>

        <li class="list-group-item">
            <div class="row">
                <div class="col"><?php echo $contact['name'].' '.$contact['surname'] ?></div>
                <div class="col"><button>add</button></div>
            </div>
        </li>

    <?php } ?>

<?php else : ?>

<div class="row">
  <p>No Contacts Found.</p>
</div>

<?php endif; ?>