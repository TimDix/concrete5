<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="ccm-header-search-form ccm-ui" data-header="file-manager">
    <?php if ($includeBreadcrumb) { ?>
        <div class="ccm-search-results-breadcrumb">
        </div>
    <?php } ?>

    <form method="get" action="<?php echo URL::to('/ccm/system/search/files/basic')?>">

        <div class="input-group">

            <div class="ccm-header-search-form-input">
                <a class="ccm-header-reset-search" href="#" data-button-action-url="<?=URL::to('/ccm/system/search/users/clear')?>" data-button-action="clear-search"><?=t('Reset Search')?></a>
                <a class="ccm-header-launch-advanced-search" href="<?php echo URL::to('/ccm/system/dialogs/user/advanced_search')?>" data-launch-dialog="advanced-search"><?=t('Advanced')?></a>
                <input type="text" class="form-control" autocomplete="off" name="fKeywords" placeholder="<?=t('Search')?>">
            </div>

              <span class="input-group-btn">'
                <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
              </span>
        </div><!-- /input-group -->
        <ul class="ccm-header-search-navigation">
            <li><a href="#" data-launch-dialog="add-file-manager-folder"><i class="fa fa-folder-o"></i> <?=t('New Folder')?></a></li>
            <li><a data-dialog="add-files" href="#" id="ccm-file-manager-upload">
                    <i class="fa fa-upload"></i> <?=t('Upload Files')?>
                </a>
            </li>
        </ul>
    </form>
</div>
<div class="clearfix"></div>
<div style="display: none">
    <div data-dialog="add-file-manager-folder" class="ccm-ui">
        <form data-dialog-form="add-folder" method="post" action="<?=$addFolderAction?>">
            <?=$token->output('add_folder')?>
            <?=$form->hidden('currentFolder', $currentFolder);?>
            <div class="form-group">
                <?=$form->label('folderName', t('Folder Name'))?>
                <?=$form->text('folderName')?>
            </div>
        </form>
        <div class="dialog-buttons">
            <button class="btn btn-default pull-left" data-dialog-action="cancel"><?=t('Cancel')?></button>
            <button class="btn btn-primary pull-right" data-dialog-action="submit"><?=t('Add Folder')?></button>
        </div>
    </div>

</div>