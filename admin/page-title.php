<?php if(!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if($notice->have() && in_array($notice->noticeType, array('success', 'notice', 'error'))): ?>
<div class="col-group message <?php $notice->noticeType(); ?> popup">
<ul>
    <?php $notice->lists(); ?>
</ul>
</div>
<?php endif; ?>
<div class="col-group typecho-page-title">
    <div class="col-12">
        <h2><?php echo $menu->title; ?><?php 
        if (!empty($menu->addLink)) {
            echo "<a href=\"{$menu->addLink}\">" . _t("新增") . "</a>";
        }
        ?></h2>
        <p><a href="<?php $options->siteUrl(); ?>"><?php _e('查看我的站点'); ?></a></p>
    </div>
</div>
