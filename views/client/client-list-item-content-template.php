<?php if ($model) : ?>
    <div 
        class="tab-pane fade show active" 
        id="list-<?php  echo $model['name'] ?? null ?>" role="tabpanel" 
        aria-labelledby="list-<?php  echo $model['name'] ?? null ?>-list"
    >
        <?php  echo $model['name'] ?? null ?>
    </div>
<?php  else: ?>

    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        No Model
    </div>

<?php endif; ?>