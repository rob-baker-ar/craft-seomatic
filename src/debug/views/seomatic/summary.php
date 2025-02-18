<?php
/**
 * @var \nystudio107\seomatic\debug\panels\SeomaticPanel $panel
 */

use craft\helpers\Html;

?>
<style>

    .seomatic-icon-wrapper {
        height: 22px;
        width: 22px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
    }

    div.seomatic-icon-wrapper svg {
        height: 22px;
        left: 0;
        position: absolute;
        top: 0;
        width: 22px;
    }
</style>
<div class="yii-debug-toolbar__block">
    <a href="<?= $panel->getUrl() ?>">
        SEOmatic
        <div class="seomatic-icon-wrapper"><?= Html::svg("@nystudio107/seomatic/icon.svg") ?></div>
    </a>
</div>
