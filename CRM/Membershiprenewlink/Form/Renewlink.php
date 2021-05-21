<?php

use CRM_Membershiprenewlink_ExtensionUtil as E;

/**
 * Form controller class
 *
 * @see https://docs.civicrm.org/dev/en/latest/framework/quickform/
 */
class CRM_Membershiprenewlink_Form_Renewlink extends CRM_Admin_Form_Preferences {

  protected $_settings = [
    'default_renewal_contribution_page' => CRM_Core_BAO_Setting::MEMBER_PREFERENCES_NAME,
    'priceset_renewal_link_contribution_page' => CRM_Core_BAO_Setting::MEMBER_PREFERENCES_NAME,
  ];

}
