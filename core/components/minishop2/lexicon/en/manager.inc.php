<?php
/**
 * Manager English Lexicon Entries for miniShop2
 *
 * @package minishop2
 * @subpackage lexicon
 */
$_lang['ms2_menu_create'] = 'Create';
$_lang['ms2_menu_add'] = 'Add';
$_lang['ms2_menu_update'] = 'Update';
$_lang['ms2_menu_remove'] = 'Remove';
$_lang['ms2_menu_remove_multiple'] = 'Remove selected';
$_lang['ms2_menu_remove_confirm'] = 'Are you sure you want to remove this entry?';
$_lang['ms2_menu_remove_multiple_confirm'] = 'Are you sure you want to remove all selected entries?';

$_lang['ms2_combo_select'] = 'Click to select';
$_lang['ms2_combo_select_status'] = 'Filter by status';

$_lang['ms2_id'] = 'Id';
$_lang['ms2_name'] = 'Name';
$_lang['ms2_color'] = 'Color';
$_lang['ms2_country'] = 'Country';
$_lang['ms2_logo'] = 'Logo';
$_lang['ms2_address'] = 'Address';
$_lang['ms2_phone'] = 'Phone';
$_lang['ms2_fax'] = 'Fax';
$_lang['ms2_email'] = 'Email';
$_lang['ms2_active'] = 'Active';
$_lang['ms2_class'] = 'Handler class';
$_lang['ms2_description'] = 'Description';
$_lang['ms2_num'] = 'Number';
$_lang['ms2_status'] = 'Status';
$_lang['ms2_count'] = 'Count';
$_lang['ms2_cost'] = 'Cost';
$_lang['ms2_order_cost'] = 'Cost of order';
$_lang['ms2_cart_cost'] = 'Cost of products';
$_lang['ms2_delivery_cost'] = 'Cost of delivery';
$_lang['ms2_weight'] = 'Weight';
$_lang['ms2_createdon'] = 'Created on';
$_lang['ms2_updatedon'] = 'Updated on';
$_lang['ms2_user'] = 'User';
$_lang['ms2_timestamp'] = 'Timestamp';
$_lang['ms2_order_log'] = 'Order log';
$_lang['ms2_order_products'] = 'Products';
$_lang['ms2_action'] = 'Action';
$_lang['ms2_entry'] = 'Entry';
$_lang['ms2_username'] = 'Username';
$_lang['ms2_fullname'] = 'Fullname';
$_lang['ms2_resource'] = 'Resource';

$_lang['ms2_receiver'] = 'Receiver';
$_lang['ms2_index'] = 'Zip/Postal code';
$_lang['ms2_region'] = 'Region';
$_lang['ms2_city'] = 'City';
$_lang['ms2_metro'] = 'Metro';
$_lang['ms2_street'] = 'Street';
$_lang['ms2_building'] = 'Building';
$_lang['ms2_room'] = 'Room';
$_lang['ms2_comment'] = 'Comment';

$_lang['ms2_email_user'] = 'Email user';
$_lang['ms2_email_manager'] = 'Email manager';
$_lang['ms2_subject_user'] = 'Subject of email to user';
$_lang['ms2_subject_manager'] = 'Subject of email to maanger';
$_lang['ms2_body_user'] = 'Chunk of email to user';
$_lang['ms2_body_manager'] = 'Chunk of email to manager';
$_lang['ms2_status_final'] = 'Final';
$_lang['ms2_status_final_help'] = '';
$_lang['ms2_status_fixed'] = 'Fixed';
$_lang['ms2_status_fixed_help'] = '';
$_lang['ms2_options'] = 'Options';
$_lang['ms2_add_cost'] = 'Add cost';
$_lang['ms2_add_cost_help'] = 'The additional cost of delivery or payment. Can be negative, you can specify a percentage.';
$_lang['ms2_weight_price'] = 'Price for 1 u/w';
$_lang['ms2_weight_price_help'] = 'Additional cost per unit of weight.<br/>Can be used in custom classes.';
$_lang['ms2_distance_price'] = 'Price for 1 u/d';
$_lang['ms2_distance_price_help'] = 'Additional cost per unit of distance.<br/>Can be used in custom classes.';
$_lang['ms2_order_requires'] = 'Required fields';
$_lang['ms2_order_requires_help'] = 'When ordering, custom class can require the filling of these fields';

$_lang['ms2_orders_selected_status'] = 'Change status of selected orders';

$_lang['ms2_link_name'] = 'Name of link';
$_lang['ms2_link_one_to_one'] = 'One to one';
$_lang['ms2_link_one_to_one_desc'] = 'Equal union of two goods. If you want to connect more than 2 product, you need to use the "many-to-many".';
$_lang['ms2_link_one_to_many'] = 'One to many';
$_lang['ms2_link_one_to_many_desc'] = 'The connection of the master of the goods with slaves. For example, the product is a set of other goods. Well suited for the specifying recommended goods.';
$_lang['ms2_link_many_to_one'] = 'Many to one';
$_lang['ms2_link_many_to_one_desc'] = 'Link slaves with the master and slaves has no connection with each other. For example, goods are included in a set.';
$_lang['ms2_link_many_to_many'] = 'Many to many';
$_lang['ms2_link_many_to_many_desc'] = 'Equal union of many goods. All the goods of the group are connected with each other and with the addition of a new connection to one product, all other will have the same. Typical applications: link by one parameter, such as color, size, language, version, etc.';
$_lang['ms2_link_master'] = 'Master product';
$_lang['ms2_link_slave'] = 'Slave product';