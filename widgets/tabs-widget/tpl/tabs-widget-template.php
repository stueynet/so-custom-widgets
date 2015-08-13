<?php $tabs = $instance['tabs'];?>
<div class="nav-center">
    <ul class="nav nav-pills" role="tablist">
        <?php $first = true; foreach ( $tabs as $key => $tab ): ?>
        <li role="presentation" <?php echo $first == true ? 'class="active"' : ''; ?>>
            <a href="#tab-<?php echo $key; ?>" aria-controls="tab-<?php echo $key; ?>" role="tab" data-toggle="tab"><?php echo $tab['tab_title']; ?></a>
        </li>
        <?php $first = false; endforeach; ?>
    </ul>
</div>
<hr>
<div class="tab-content">
    <?php $first = true; foreach ( $tabs as $key => $tab ): ?>
    <div role="tabpanel" class="tab-pane <?php echo $first == true ? ' active' : ''; ?>" id="tab-<?php echo $key; ?>">
       <section>
           <?php echo $tab['tab_content']; ?>
       </section>
    </div>
    <?php $first = false; endforeach; ?>
</div>