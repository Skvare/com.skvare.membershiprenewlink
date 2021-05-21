<?php

require_once 'membershiprenewlink.civix.php';
// phpcs:disable
use CRM_Membershiprenewlink_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function membershiprenewlink_civicrm_config(&$config) {
  _membershiprenewlink_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function membershiprenewlink_civicrm_xmlMenu(&$files) {
  _membershiprenewlink_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function membershiprenewlink_civicrm_install() {
  _membershiprenewlink_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function membershiprenewlink_civicrm_postInstall() {
  _membershiprenewlink_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function membershiprenewlink_civicrm_uninstall() {
  _membershiprenewlink_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function membershiprenewlink_civicrm_enable() {
  _membershiprenewlink_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function membershiprenewlink_civicrm_disable() {
  _membershiprenewlink_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function membershiprenewlink_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _membershiprenewlink_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function membershiprenewlink_civicrm_managed(&$entities) {
  _membershiprenewlink_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function membershiprenewlink_civicrm_caseTypes(&$caseTypes) {
  _membershiprenewlink_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function membershiprenewlink_civicrm_angularModules(&$angularModules) {
  _membershiprenewlink_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function membershiprenewlink_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _membershiprenewlink_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function membershiprenewlink_civicrm_entityTypes(&$entityTypes) {
  _membershiprenewlink_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function membershiprenewlink_civicrm_themes(&$themes) {
  _membershiprenewlink_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function membershiprenewlink_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function membershiprenewlink_civicrm_navigationMenu(&$menu) {
//  _membershiprenewlink_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _membershiprenewlink_civix_navigationMenu($menu);
//}


/**
 * Implements hook_civicrm_alterMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterMenu
 */
function membershiprenewlink_civicrm_alterMenu(&$items) {
  $items['civicrm/admin/setting/preferences/member']['page_callback'] = 'CRM_Membershiprenewlink_Form_Renewlink';
}

/**
 * Implementation of hook_civicrm_links
 */
function membershiprenewlink_civicrm_links($op, $objectName, $objectId, &$links, &$mask, &$values) {
  if ($objectName == 'Membership' && in_array($op, ['membership.selector.row', 'membership.tab.row'])) {
    $priceset_renewal_link_contribution_page = civicrm_api3('Setting', 'getvalue', ['name' => 'priceset_renewal_link_contribution_page']);
    if ($priceset_renewal_link_contribution_page) {
      $values['page_id'] = $priceset_renewal_link_contribution_page;
      $links[] = [
        'name' => ts('Renew Online'),
        'url' => 'civicrm/contribute/transact',
        'qs' => 'reset=1&id=%%page_id%%&cid=%%cid%%',
        'title' => ts('Renew Online'),
        'extra' => "target='_blank'",
        'class' => ['online_renew_link', 'no-popup'],
      ];
    }
  }
}