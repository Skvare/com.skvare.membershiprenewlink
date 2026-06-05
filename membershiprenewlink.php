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
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function membershiprenewlink_civicrm_install() {
  _membershiprenewlink_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function membershiprenewlink_civicrm_enable() {
  _membershiprenewlink_civix_civicrm_enable();
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
      $isRleated = CRM_Core_DAO::getFieldValue('CRM_Member_DAO_Membership', $objectId, 'owner_membership_id');
      if ($isRleated) {
        return;
      }
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
