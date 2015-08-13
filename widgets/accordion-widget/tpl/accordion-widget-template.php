<?php $tabs = $instance['tabs']; $rand = rand(12345,78956789)?>
<div class="panel-group" id="accordion_<?php echo $rand; ?>" role="tablist" aria-multiselectable="true">
    <?php $first = true; foreach ( $tabs as $key => $tab ) : ?>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-<?php echo $key; ?>">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion_<?php echo $rand; ?>" href="#tab-<?php echo $key; ?>" aria-expanded="true" aria-controls="tab-<?php echo $key; ?>" class="btn-block">
                    <?php echo $tab['tab_title']; ?>
                </a>
            </h4>
        </div>
        <div id="tab-<?php echo $key; ?>" class="panel-collapse collapse <?php echo $first == true ? ' in' : ''; ?>" role="tabpanel" aria-labelledby="heading-<?php echo $key; ?>">
            <div class="panel-body">
                <section>
                    <?php echo $tab['tab_content']; ?>
                </section>
            </div>
        </div>
    </div>
    <?php $first = false; endforeach; ?>
</div>