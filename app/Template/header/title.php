<h1 class="w3-text-white">
    <span class="logo">
        <img src="assets/img/logo.png" class="w3-image w3-circle" style="width:30px">
    </span>
    <span class="title">
        <?php if (! empty($project) && ! empty($task)): ?>
            <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
        <?php else: ?>
            <?= $this->text->e($title) ?>
        <?php endif ?>
    </span>
    <?php if (! empty($description)): ?>
        <small class="tooltip" title="<?= $this->text->markdownAttribute($description) ?>">
            <i class="fa fa-info-circle w3-text-dark-grey"></i>
        </small>
    <?php endif ?>
</h1>
