<?php
if (!defined('EQDKP_INC')){
	die('You cannot access this file directly.');
}
$system_def = array (
  'base_layout' => 'normal',
  'data' => 
  array (
    'description' => 'Default EQdkp-Plus layout.',
    'point_direction' => 'asc',
  ),
  'aliases' => 
  array (
    'earned' => 'earned',
    'spent' => 'spent',
    'adjustment' => 'adjustment',
    'current' => 'current',
    'current_all' => 'all_current',
    'rvalue' => 'rvalue',
    'ivalue' => 'ivalue',
  ),
  'defaults' => 
  array (
    'ival' => 1,
    'rval' => 1,
  ),
  'options' => 
  array (
  ),
  'substitutions' => 
  array (
  ),
  'pages' => 
  array (
    'listraids' => 
    array (
      'hptt_listraids_raidlist' => 
      array (
        'name' => 'hptt_listraids_raidlist',
        'table_main_sub' => '%raid_id%',
        'table_subs' => 
        array (
          0 => '%raid_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
        ),
        'page_ref' => 'listraids.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'desc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'rdate',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'rlink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'rnote',
            'sort' => true,
            'th_add' => 'width="50%" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          3 => 
          array (
            'name' => 'rattcount',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          4 => 
          array (
            'name' => 'ritemcount',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'rvalue',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
      ),
    ),
    'viewmember' => 
    array (
      'hptt_viewmember_points' => 
      array (
        'name' => 'hptt_viewmember_points',
        'table_main_sub' => '%dkp_id%',
        'table_subs' => 
        array (
          0 => '%dkp_id%',
          1 => '%member_id%',
          2 => '%with_twink%',
        ),
        'page_ref' => 'viewcharacter.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => true,
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'mdkpname',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'earned',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'spent',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'adjustment',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'current',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          5 => 
          array (
            'name' => 'attendance_30',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          6 => 
          array (
            'name' => 'attendance_60',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          7 => 
          array (
            'name' => 'attendance_90',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          8 => 
          array (
            'name' => 'attendance_lt',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
        'table_sort_dir' => 'desc',
        'table_sort_col' => 0,
      ),
      'hptt_viewmember_memberlist' => 
      array (
        'name' => 'hptt_viewmember_memberlist',
        'table_main_sub' => '%member_id%',
        'table_subs' => 
        array (
          0 => '%member_id%',
          1 => '%with_twink%',
        ),
        'page_ref' => 'viewcharacter.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'asc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'mlink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'mlevel',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'mrank',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'mactive',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'mcname',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          5 => 
          array (
            'name' => 'mtwink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          6 => 
          array (
            'name' => 'current_all',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
      ),
      'hptt_viewmember_raidlist' => 
      array (
        'name' => 'hptt_viewmember_raidlist',
        'table_main_sub' => '%raid_id%',
        'table_subs' => 
        array (
          0 => '%raid_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
        ),
        'page_ref' => 'viewcharacter.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'desc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'rdate',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'rlink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'rnote',
            'sort' => true,
            'th_add' => 'width="70%"',
            'td_add' => 'nowrap="nowrap"',
          ),
          3 => 
          array (
            'name' => 'rvalue',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
      ),
      'hptt_viewmember_adjlist' => 
      array (
        'name' => 'hptt_viewmember_adjlist',
        'table_main_sub' => '%adjustment_id%',
        'table_subs' => 
        array (
          0 => '%adjustment_id%',
          1 => '%raid_link_url%',
          2 => '%raid_link_url_suffix%',
        ),
        'page_ref' => 'viewcharacter.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'desc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'adj_date',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'adj_reason',
            'sort' => true,
            'th_add' => 'width="70%"',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'adj_value',
            'sort' => true,
            'th_add' => '',
            'td_add' => 'nowrap="nowrap"',
          ),
        ),
      ),
      'hptt_viewmember_itemlist' => 
      array (
        'name' => 'hptt_viewmember_itemlist',
        'table_main_sub' => '%item_id%',
        'table_subs' => 
        array (
          0 => '%item_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
          3 => '%raid_link_url%',
          4 => '%raid_link_url_suffix%',
          5 => '%itt_lang%',
          6 => '%itt_direct%',
          7 => '%onlyicon%',
          8 => '%noicon%',
        ),
        'page_ref' => 'viewcharacter.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'desc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'idate',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'ibuyername',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'ilink_itt',
            'sort' => true,
            'th_add' => '',
            'td_add' => 'style="height:21px;"',
          ),
          3 => 
          array (
            'name' => 'iraidlink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'ipoolname',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'ivalue',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
      ),
      'hptt_viewmember_eventatt' => 
      array (
        'name' => 'hptt_viewmember_eventatt',
        'table_main_sub' => '%event_id%',
        'table_subs' => 
        array (
          0 => '%event_id%',
          1 => '%member_id%',
          2 => '%link_url%',
          3 => '%link_url_suffix%',
        ),
        'page_ref' => 'viewcharacter.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'desc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'eicon',
            'sort' => false,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'elink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'event_attendance',
            'sort' => true,
            'th_add' => '',
            'td_add' => 'width="80%"',
          ),
        ),
      ),
    ),
    'listitems' => 
    array (
      'hptt_listitems_itemlist' => 
      array (
        'name' => 'hptt_listitems_itemlist',
        'table_main_sub' => '%item_id%',
        'table_subs' => 
        array (
          0 => '%item_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
          3 => '%raid_link_url%',
          4 => '%raid_link_url_suffix%',
          5 => '%itt_lang%',
          6 => '%itt_direct%',
          7 => '%onlyicon%',
          8 => '%noicon%',
        ),
        'page_ref' => 'listitems.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'desc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'idate',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'ibuyername',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'ilink_itt',
            'sort' => true,
            'th_add' => '',
            'td_add' => 'style="height:21px;"',
          ),
          3 => 
          array (
            'name' => 'iraidlink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'ipoolname',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'ivalue',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
      ),
    ),
    'viewitem' => 
    array (
      'hptt_viewitem_buyerslist' => 
      array (
        'name' => 'hptt_viewitem_buyerslist',
        'table_main_sub' => '%item_id%',
        'table_subs' => 
        array (
          0 => '%item_id%',
          1 => '%raid_link_url%',
          2 => '%raid_link_url_suffix%',
        ),
        'page_ref' => 'viewitem.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'desc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'idate',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'ibuyername',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'iraidlink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'ipoolname',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'ivalue',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
      ),
    ),
    'listevents' => 
    array (
      'hptt_listevents_eventlist' => 
      array (
        'name' => 'hptt_listevents_eventlist',
        'table_main_sub' => '%event_id%',
        'table_subs' => 
        array (
          0 => '%event_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
        ),
        'page_ref' => 'listevents.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'asc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'elink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'emdkps',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          2 => 
          array (
            'name' => 'eipools',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          3 => 
          array (
            'name' => 'evalue',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
      ),
    ),
    'viewevent' => 
    array (
      'hptt_viewevent_raidlist' => 
      array (
        'name' => 'hptt_viewevent_raidlist',
        'table_main_sub' => '%raid_id%',
        'table_subs' => 
        array (
          0 => '%raid_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
        ),
        'page_ref' => 'viewevent.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'desc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'rdate',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'rlink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'rnote',
            'sort' => true,
            'th_add' => 'width="70%" class="hiddenSmartphone"',
            'td_add' => 'class="nowrap hiddenSmartphone"',
          ),
          3 => 
          array (
            'name' => 'rvalue',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
      ),
      'hptt_viewevent_itemlist' => 
      array (
        'name' => 'hptt_viewevent_itemlist',
        'table_main_sub' => '%item_id%',
        'table_subs' => 
        array (
          0 => '%item_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
          3 => '%raid_link_url%',
          4 => '%raid_link_url_suffix%',
          5 => '%itt_lang%',
          6 => '%itt_direct%',
          7 => '%onlyicon%',
          8 => '%noicon%',
        ),
        'page_ref' => 'viewevent.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'desc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'idate',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'ibuyername',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'ilink_itt',
            'sort' => true,
            'th_add' => '',
            'td_add' => 'style="height:21px;"',
          ),
          3 => 
          array (
            'name' => 'iraidlink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'ipoolname',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'ivalue',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
      ),
    ),
    'listusers' => 
    array (
      'hptt_listusers_userlist' => 
      array (
        'name' => 'hptt_listraids_raidlist',
        'table_main_sub' => '%user_id%',
        'table_subs' => 
        array (
          0 => '%user_id%',
          1 => '%member_id%',
          2 => '%link_url%',
          3 => '%link_url_suffix%',
          4 => '%use_controller%',
        ),
        'page_ref' => 'listusers.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'asc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'username',
            'sort' => true,
            'th_add' => '',
            'td_add' => 'nowrap="nowrap"',
          ),
          1 => 
          array (
            'name' => 'usercharnumber',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          2 => 
          array (
            'name' => 'usergroups',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'useremail',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'userregdate',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'userlastvisit',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
    'userprofile' => 
    array (
      'hptt_userprofile_memberlist_overview' => 
      array (
        'name' => 'hptt_userprofile_memberlist_overview',
        'table_main_sub' => '%member_id%',
        'table_subs' => 
        array (
          0 => '%member_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
          3 => '%with_twink%',
        ),
        'page_ref' => NULL,
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'perm_detail_twink' => true,
        'table_sort_col' => 0,
        'table_sort_dir' => 'asc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'mlink_decorated',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'mlevel',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'mrank',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'mtwink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'current_all',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          5 => 
          array (
            'name' => 'attendance_30_all',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          6 => 
          array (
            'name' => 'attendance_lt_all',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
      ),
    ),
    'teamlist' => 
    array (
      'hptt_team_list' => 
      array (
        'name' => 'hptt_team_list',
        'table_main_sub' => '%user_id%',
        'table_subs' => 
        array (
          0 => '%user_id%',
          1 => '%member_id%',
          2 => '%link_url%',
          3 => '%link_url_suffix%',
          4 => '%use_controller%',
        ),
        'page_ref' => 'listusers.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 2,
        'table_sort_dir' => 'asc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'useronlinestatus',
            'sort' => false,
            'th_add' => '',
            'td_add' => 'width="10" nowrap="nowrap"',
          ),
          1 => 
          array (
            'name' => 'useravatar',
            'sort' => false,
            'th_add' => '',
            'td_add' => 'nowrap="nowrap"',
          ),
          2 => 
          array (
            'name' => 'username',
            'sort' => true,
            'th_add' => '',
            'td_add' => 'nowrap="nowrap"',
          ),
          3 => 
          array (
            'name' => 'useremail',
            'sort' => true,
            'th_add' => '',
            'td_add' => 'nowrap="nowrap"',
          ),
          4 => 
          array (
            'name' => 'usercountry',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'userregdate',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
    'listmembers' => 
    array (
      'listmembers_leaderboard' => 
      array (
        'maxpercolumn' => 7,
        'maxperrow' => 5,
        'sort_direction' => 'desc',
        'column_type' => 'classid',
        'columns' => 
        array (
          0 => '1',
          1 => '2',
          2 => '3',
          3 => '15',
          4 => '16',
          5 => '4',
          6 => '5',
          7 => '6',
          8 => '7',
          9 => '8',
          10 => '9',
          11 => '10',
          12 => '11',
          13 => '12',
          14 => '13',
          15 => '14',
        ),
        'default_pool' => 1,
      ),
      'hptt_listmembers_memberlist_overview' => 
      array (
        'name' => 'hptt_listmembers_memberlist_overview',
        'table_main_sub' => '%member_id%',
        'table_subs' => 
        array (
          0 => '%member_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
          3 => '%with_twink%',
          4 => '%dkp_id%',
        ),
        'page_ref' => 'listcharacters.php',
        'show_numbers' => false,
        'show_select_boxes' => true,
        'show_detail_twink' => true,
        'table_sort_col' => 0,
        'table_sort_dir' => 'asc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'mlink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'mlevel',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          2 => 
          array (
            'name' => 'current_all',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'attendance_30',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'attendance_lt',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          5 => 
          array (
            'name' => 'last_raid',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
        'default_pool' => '0',
        'default_pool_ov' => '1',
      ),
      'hptt_listmembers_memberlist_detail' => 
      array (
        'name' => 'hptt_listmembers_memberlist_detail',
        'table_main_sub' => '%member_id%',
        'table_subs' => 
        array (
          0 => '%member_id%',
          1 => '%dkp_id%',
          2 => '%link_url%',
          3 => '%link_url_suffix%',
          4 => '%with_twink%',
        ),
        'page_ref' => 'listcharacters.php',
        'show_numbers' => false,
        'show_select_boxes' => true,
        'show_detail_twink' => true,
        'table_sort_col' => 0,
        'table_sort_dir' => 'asc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'mlink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'mcname',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          2 => 
          array (
            'name' => 'mrank',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          3 => 
          array (
            'name' => 'earned',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'spent',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          5 => 
          array (
            'name' => 'adjustment',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          6 => 
          array (
            'name' => 'current',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          7 => 
          array (
            'name' => 'attendance_30',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          8 => 
          array (
            'name' => 'attendance_lt',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          9 => 
          array (
            'name' => 'last_raid',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          10 => 
          array (
            'name' => 'profile_guild',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
    'calendar' => 
    array (
      'hptt_calendar_raidlist' => 
      array (
        'name' => 'hptt_calendar_raidlist',
        'table_main_sub' => '%calevent_id%',
        'table_subs' => 
        array (
          0 => '%calevent_id%',
          1 => '%member_id%',
        ),
        'page_ref' => 'calendar/index.php',
        'show_numbers' => false,
        'show_select_boxes' => 'signedin',
        'selectboxes_checkall' => true,
        'show_detail_twink' => false,
        'table_sort_col' => 1,
        'table_sort_dir' => 'asc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'calevents_weekday',
            'sort' => false,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          1 => 
          array (
            'name' => 'calevents_date',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'calevents_start_time',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'calevents_end_time',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          4 => 
          array (
            'name' => 'calevents_raid_event',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          5 => 
          array (
            'name' => 'calevents_note',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          6 => 
          array (
            'name' => 'raidattendees_status',
            'sort' => false,
            'th_add' => '',
            'td_add' => 'align="center"',
          ),
          7 => 
          array (
            'name' => 'calevents_detailslink',
            'sort' => false,
            'th_add' => '',
            'td_add' => 'align="center"',
          ),
        ),
      ),
    ),
    'manage_characters' => 
    array (
      'hptt_manage_characters' => 
      array (
        'name' => 'hptt_manage_characters',
        'table_main_sub' => '%member_id%',
        'table_subs' => 
        array (
          0 => '%member_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
        ),
        'page_ref' => 'characters.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_dir' => 'asc',
        'table_sort_col' => 1,
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'cmainchar',
            'sort' => false,
            'th_add' => 'width="20"',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'mlink_decorated',
            'sort' => true,
            'th_add' => 'width="100%"',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'mrank',
            'sort' => true,
            'th_add' => 'width="100" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          3 => 
          array (
            'name' => 'mlevel',
            'sort' => true,
            'th_add' => 'width="40" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          4 => 
          array (
            'name' => 'cdefrole',
            'sort' => false,
            'th_add' => 'width="70"',
            'td_add' => '',
          ),
          5 => 
          array (
            'name' => 'charmenu',
            'sort' => false,
            'th_add' => 'width="40"',
            'td_add' => '',
          ),
        ),
      ),
    ),
    'roster' => 
    array (
      'hptt_roster' => 
      array (
        'name' => 'roster',
        'table_main_sub' => '%member_id%',
        'table_subs' => 
        array (
          0 => '%member_id%',
        ),
        'page_ref' => 'roster.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_dir' => 'asc',
        'table_sort_col' => 0,
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'mlink',
            'sort' => true,
            'th_add' => 'width="30%"',
            'td_add' => 'width="30%"',
          ),
          1 => 
          array (
            'name' => 'mrank',
            'sort' => true,
            'th_add' => 'width="30%"',
            'td_add' => 'width="30%"',
          ),
          2 => 
          array (
            'name' => 'mlevel',
            'sort' => true,
            'th_add' => 'width="30%"',
            'td_add' => 'width="30%"',
          ),
        ),
      ),
    ),
    'admin_manage_members' => 
    array (
      'hptt_admin_manage_members_memberlist' => 
      array (
        'name' => 'hptt_admin_manage_members_memberlist',
        'table_main_sub' => '%member_id%',
        'table_subs' => 
        array (
          0 => '%member_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
        ),
        'page_ref' => 'manage_members.php',
        'show_numbers' => false,
        'show_select_boxes' => true,
        'selectboxes_checkall' => true,
        'show_detail_twink' => false,
        'table_sort_col' => 1,
        'table_sort_dir' => 'asc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'medit',
            'sort' => false,
            'th_add' => 'width="20"',
            'td_add' => 'nowrap="nowrap"',
          ),
          1 => 
          array (
            'name' => 'mname',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'mrank',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'mcname',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          4 => 
          array (
            'name' => 'mlevel',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'muser',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          6 => 
          array (
            'name' => 'profile_guild',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
    'admin_manage_items' => 
    array (
      'hptt_admin_manage_items_itemlist' => 
      array (
        'name' => 'hptt_admin_manage_items_itemlist',
        'table_main_sub' => '%item_id%',
        'table_subs' => 
        array (
          0 => '%item_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
          3 => '%raid_link_url%',
          4 => '%raid_link_url_suffix%',
          5 => '%itt_lang%',
          6 => '%itt_direct%',
          7 => '%onlyicon%',
          8 => '%noicon%',
        ),
        'page_ref' => 'manage_items.php',
        'show_numbers' => false,
        'show_select_boxes' => true,
        'selectboxes_checkall' => true,
        'show_detail_twink' => false,
        'table_sort_dir' => 'desc',
        'table_sort_col' => 1,
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'itemsedit',
            'sort' => false,
            'th_add' => '',
            'td_add' => 'nowrap="nowrap"',
          ),
          1 => 
          array (
            'name' => 'idate',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'ilink_itt',
            'sort' => true,
            'th_add' => '',
            'td_add' => 'style="height:21px;"',
          ),
          3 => 
          array (
            'name' => 'ibuyers',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          4 => 
          array (
            'name' => 'iraididlink',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'ivalue',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          6 => 
          array (
            'name' => 'ipoolname',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
    'admin_manage_adjustments' => 
    array (
      'hptt_admin_manage_adjustments_adjlist' => 
      array (
        'name' => 'hptt_admin_manage_adjustments_adjlist',
        'table_main_sub' => '%adjustment_id%',
        'table_subs' => 
        array (
          0 => '%adjustment_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
        ),
        'page_ref' => 'manage_adjustments.php',
        'show_numbers' => false,
        'show_select_boxes' => true,
        'selectboxes_checkall' => true,
        'show_detail_twink' => false,
        'table_sort_dir' => 'desc',
        'table_sort_col' => 1,
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'adjedit',
            'sort' => false,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'adj_date',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'adj_reason_link',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'adj_event',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          4 => 
          array (
            'name' => 'adj_members',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'adj_value',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          6 => 
          array (
            'name' => 'adj_raid',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
    'admin_manage_events' => 
    array (
      'hptt_admin_manage_events_eventlist' => 
      array (
        'name' => 'hptt_admin_manage_events_eventlist',
        'table_main_sub' => '%event_id%',
        'table_subs' => 
        array (
          0 => '%event_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
        ),
        'page_ref' => 'manage_events.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_dir' => 'asc',
        'table_sort_col' => 2,
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'eventedit',
            'sort' => false,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'eicon',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'elink',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'emdkps',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'eipools',
            'sort' => true,
            'th_add' => '',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'evalue',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
    'admin_manage_raids' => 
    array (
      'hptt_admin_manage_raids_raidlist' => 
      array (
        'name' => 'hptt_admin_manage_raids_raidlist',
        'table_main_sub' => '%raid_id%',
        'table_subs' => 
        array (
          0 => '%raid_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
        ),
        'page_ref' => 'manage_raids.php',
        'show_numbers' => false,
        'show_select_boxes' => true,
        'selectboxes_checkall' => true,
        'show_detail_twink' => false,
        'table_sort_col' => 1,
        'table_sort_dir' => 'desc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'raidedit',
            'sort' => false,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'rdate',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'rlink',
            'sort' => true,
            'th_add' => '',
            'td_add' => 'nowrap="nowrap"',
          ),
          3 => 
          array (
            'name' => 'rnote',
            'sort' => true,
            'th_add' => 'width="50%" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          4 => 
          array (
            'name' => 'rattcount',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'ritemcount',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          6 => 
          array (
            'name' => 'rvalue',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
    'admin_manage_logs' => 
    array (
      'hptt_managelogs_actions' => 
      array (
        'name' => 'hptt_managelogs_actions',
        'table_main_sub' => '%log_id%',
        'table_subs' => 
        array (
          0 => '%log_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
        ),
        'page_ref' => 'manage_logs.php',
        'show_numbers' => false,
        'show_select_boxes' => true,
        'selectboxes_checkall' => true,
        'show_detail_twink' => false,
        'table_sort_dir' => 'desc',
        'table_sort_col' => 0,
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'logdatetime',
            'sort' => true,
            'th_add' => '',
            'td_add' => 'class="nowrap desktopOnly"',
          ),
          1 => 
          array (
            'name' => 'logtype',
            'sort' => true,
            'th_add' => 'width="50%"',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'logrecordid',
            'sort' => true,
            'th_add' => 'width="20%" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          3 => 
          array (
            'name' => 'logrecord',
            'sort' => true,
            'th_add' => 'width="30%"',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'logplugin',
            'sort' => true,
            'th_add' => 'width="100" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'loguser',
            'sort' => true,
            'th_add' => 'width="100" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          6 => 
          array (
            'name' => 'logipaddress',
            'sort' => true,
            'th_add' => 'width="70" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          7 => 
          array (
            'name' => 'logresult',
            'sort' => true,
            'th_add' => 'width="70" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
    'admin_index' => 
    array (
      'hptt_latest_logs' => 
      array (
        'name' => 'hptt_latest_logs',
        'table_main_sub' => '%log_id%',
        'table_subs' => 
        array (
          0 => '%log_id%',
          1 => '%link_url%',
          2 => '%link_url_suffix%',
        ),
        'page_ref' => 'index.php',
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_dir' => 'desc',
        'table_sort_col' => 0,
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'viewlog',
            'sort' => false,
            'th_add' => 'width="30"',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'logdate',
            'sort' => false,
            'th_add' => 'width="150"',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'logtype',
            'sort' => false,
            'th_add' => 'width="100%"',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'logplugin',
            'sort' => false,
            'th_add' => 'width="100" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          4 => 
          array (
            'name' => 'loguser',
            'sort' => false,
            'th_add' => 'width="100"',
            'td_add' => '',
          ),
          5 => 
          array (
            'name' => 'logresult',
            'sort' => false,
            'th_add' => 'width="70" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
    'admin_manage_roles' => 
    array (
      'hptt_manageroles_actions' => 
      array (
        'name' => 'hptt_manageroles_actions',
        'table_main_sub' => '%role_id%',
        'table_subs' => 
        array (
          0 => '%role_id%',
        ),
        'page_ref' => 'manage_roles.php',
        'show_numbers' => false,
        'show_select_boxes' => true,
        'show_detail_twink' => false,
        'table_sort_dir' => 'asc',
        'table_sort_col' => 0,
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'roleid',
            'sort' => true,
            'th_add' => 'width="20"',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'roleedit',
            'sort' => false,
            'th_add' => 'width="20"',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'rolename',
            'sort' => true,
            'th_add' => 'width="30%"',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'roleicon',
            'sort' => true,
            'th_add' => 'width="30%"',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'roleclasses',
            'sort' => false,
            'th_add' => 'width="70%"',
            'td_add' => '',
          ),
        ),
      ),
    ),
    'admin_manage_calevents' => 
    array (
      'hptt_managecalevents_actions' => 
      array (
        'name' => 'hptt_managecaleventss_actions',
        'table_main_sub' => '%calevent_id%',
        'table_subs' => 
        array (
          0 => '%calevent_id%',
        ),
        'page_ref' => 'manage_calevents.php',
        'show_numbers' => false,
        'show_select_boxes' => true,
        'selectboxes_checkall' => true,
        'show_detail_twink' => false,
        'table_sort_dir' => 'desc',
        'table_sort_col' => 1,
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'calevents_edit',
            'sort' => false,
            'th_add' => 'width="20"',
            'td_add' => 'width="20"',
          ),
          1 => 
          array (
            'name' => 'calevents_date',
            'sort' => true,
            'th_add' => 'width="14%"',
            'td_add' => 'width="14%"',
          ),
          2 => 
          array (
            'name' => 'calevents_duration',
            'sort' => true,
            'th_add' => 'width="6%" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          3 => 
          array (
            'name' => 'calevents_name',
            'sort' => true,
            'th_add' => 'width="40%"',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'calevents_creator',
            'sort' => true,
            'th_add' => 'width="20%" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'calevents_calendar',
            'sort' => true,
            'th_add' => 'width="20%" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
    'admin_manage_article_categories' => 
    array (
      'hptt_admin_manage_article_categories_categorylist' => 
      array (
        'name' => 'hptt_admin_manage_article_categories_categorylist',
        'table_main_sub' => '%category_id%',
        'table_subs' => 
        array (
          0 => '%category_id%',
          1 => '%article_id%',
        ),
        'page_ref' => 'manage_article_categories.php',
        'show_numbers' => false,
        'show_select_boxes' => true,
        'selectboxes_checkall' => true,
        'show_detail_twink' => false,
        'table_sort_dir' => 'asc',
        'table_sort_col' => 0,
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'category_sortable',
            'sort' => true,
            'th_add' => 'width="20" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          1 => 
          array (
            'name' => 'category_editicon',
            'sort' => false,
            'th_add' => 'width="20"',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'category_published',
            'sort' => true,
            'th_add' => 'width="20"',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'category_name',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'category_article_count',
            'sort' => true,
            'th_add' => 'width="20" class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          5 => 
          array (
            'name' => 'category_alias',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          6 => 
          array (
            'name' => 'category_portallayout',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
    'admin_manage_articles' => 
    array (
      'hptt_admin_manage_articles_list' => 
      array (
        'name' => 'hptt_admin_manage_articles_list',
        'table_main_sub' => '%article_id%',
        'table_subs' => 
        array (
          0 => '%article_id%',
          1 => '%category_id%',
        ),
        'page_ref' => 'manage_articles.php',
        'show_numbers' => false,
        'show_select_boxes' => true,
        'selectboxes_checkall' => true,
        'show_detail_twink' => false,
        'table_sort_dir' => 'desc',
        'table_sort_col' => 7,
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'article_editicon',
            'sort' => false,
            'th_add' => 'width="20"',
            'td_add' => 'class="nowrap"',
          ),
          1 => 
          array (
            'name' => 'article_published',
            'sort' => true,
            'th_add' => 'width="20"',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'article_featured',
            'sort' => true,
            'th_add' => 'width="20"',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'article_index_cb',
            'sort' => true,
            'th_add' => 'width="20"',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'article_title',
            'sort' => true,
            'th_add' => '',
            'td_add' => '',
          ),
          5 => 
          array (
            'name' => 'article_alias',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          6 => 
          array (
            'name' => 'article_user',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          7 => 
          array (
            'name' => 'article_date',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
          8 => 
          array (
            'name' => 'article_last_edited',
            'sort' => true,
            'th_add' => 'class="hiddenSmartphone"',
            'td_add' => 'class="hiddenSmartphone"',
          ),
        ),
      ),
    ),
  ),
  'subs' => 
  array (
  ),
  'config' => 
  array (
  ),
)
?>