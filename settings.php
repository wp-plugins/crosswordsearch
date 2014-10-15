<?php // tab loading routes

if ( current_user_can(CRW_CAP_CONFIRMED) ) {
    $ref_active = '/review';
}
if ( current_user_can('edit_users') ) {
    $ref_active = '/editor';
}

?>
<div class="wrap" ng-controller="AdminController" ng-init="prepare('<?php echo $ref_active . "','" . wp_create_nonce(NONCE_SETTINGS) ?>')">
    <h2><?php _e('Crosswordsearch Administration', 'crw-text') ?></h2>
    <h3 class="nav-tab-wrapper" crw-help-follow>
<?php

if ( current_user_can('edit_users') ) {

?>
    <a class="nav-tab" ng-class="{'nav-tab-active':activeTab==='/capabilities'}" href="" ng-click="setActive('/capabilities')"><?php _e('Options', 'crw-text') ?></a>
    <a class="nav-tab" ng-class="{'nav-tab-active':activeTab==='/editor'}" href="" ng-click="setActive('/editor')"><?php _e('Assign projects and editors', 'crw-text') ?></a>
<?php

}

if ( current_user_can(CRW_CAP_CONFIRMED) ) {

?>
    <a class="nav-tab" ng-class="{'nav-tab-active':activeTab==='/review'}" href="" ng-click="setActive('/review')"><?php _e('Review riddles in projects', 'crw-text') ?></a>
<?php

}

?>
    </h3>
    <p class="crw-global-error" ng-if="globalError">{{globalError.error}}</p>
    <p class="crw-global-error" ng-repeat="msg in globalError.debug">{{msg}}</p>
    <div ng-view></div>
<?php

$mode = 'admin';
include 'immediate.php';

?>
</div>
