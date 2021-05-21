<?php

return [
  'priceset_renewal_link_contribution_page' => [
    'group_name' => 'Member Preferences',
    'group' => 'member',
    'name' => 'priceset_renewal_link_contribution_page',
    'type' => 'Integer',
    'html_type' => 'select',
    'default' => NULL,
    'pseudoconstant' => [
      'callback' => 'CRM_Contribute_PseudoConstant::contributionPage',
    ],
    'add' => '5.27',
    'title' => ts('Online membership renewal page using price set like form'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('If you select a online contribution page for self-service membership renewals, a "Renew Online" link pointing to that page will be displayed on the Membership Tab, Membership Search. You will need to ensure that the membership block for the selected online contribution page includes any currently available memberships.'),
    'help_text' => NULL,
  ],
];
