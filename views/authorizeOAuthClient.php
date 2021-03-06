<?php declare(strict_types=1);
$this->layout('base'); ?>
<?php $this->start('content'); ?>
    <h2><?=$this->t('Approve Application'); ?></h2>
    
    <?php if (null === $display_name): ?>
        <?php $display_name = $client_id; ?>
    <?php endif; ?>

    <p>
        <?=$this->t('<strong title="%client_id%">%display_name%</strong> wants to manage your VPN configurations.'); ?>
    </p>

    <form method="post">
        <button type="submit" name="approve" value="no"><?=$this->t('Reject'); ?></button>
        <button type="submit" name="approve" value="yes"><?=$this->t('Approve'); ?></button>
    </form>
<?php $this->stop(); ?>
