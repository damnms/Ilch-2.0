<legend><?=$this->getTrans('menuBackup') ?></legend>
<form class="form-horizontal" method="POST" action="<?=$this->getUrl(['action' => $this->getRequest()->getActionName()]) ?>">
    <?=$this->getTokenField() ?>
    <div class="form-group">
        <label for="backupStart" class="col-lg-2 control-label">
            <?=$this->getTrans('backupStart') ?>:
        </label>
        <div class="col-lg-8">
            
        </div>
    </div>
</form>
