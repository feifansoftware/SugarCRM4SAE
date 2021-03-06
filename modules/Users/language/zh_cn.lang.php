<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2007 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************

 * Description:	Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (

	'LBL_ASSIGN_PRIVATE_TEAM'			=> '(保存上的私有团队)',
	'LBL_ASSIGN_TEAM' => '指派给团队',
	'LBL_DEFAULT_TEAM_TEXT' => '新记录的默认团队',
	'LBL_DEFAULT_TEAM' => '默认团队',
	'LBL_LIST_DESCRIPTION' => '说明',
	'LBL_MY_TEAMS' => '我的团队',
	'LBL_PRIVATE_TEAM_FOR' => '私有团队',
	'LNK_EDIT_TABS' => '编辑标签',
	'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => '您确定要移除这个用户的成员关系吗?',
	'LBL_TEAMS' => '团队',
	'LBL_TEAM_UPLINE' => '成员汇报给',
	'LBL_TEAM_UPLINE_EXPLICIT' => '成员',



	'ERR_DELETE_RECORD' => '必须指定记录编号才能删除客户。',
	'ERR_EMAIL_NO_OPTS' => '不能找到收件箱的优化设置。',
	'ERR_ENTER_CONFIRMATION_PASSWORD' => '请输入确认密码。',
	'ERR_ENTER_NEW_PASSWORD' => '请输入新密码',
	'ERR_ENTER_OLD_PASSWORD' => '请输入旧密码',
	'ERR_IE_FAILURE1' => '[点击这儿返回]',
	'ERR_IE_FAILURE2' => '连接电子邮件帐户存在问题。请检查您的设置，再试一次。',
	'ERR_IE_MISSING_REQUIRED'			=> "内部邮件的设置丢失了需要的信息.\n  请查看您的设置后重试.\n\n如果您没有设置内部邮件, 请清除这个段的所有字段.",
	'ERR_INVALID_PASSWORD' => '您必须指定一个有效的用户名和密码。',
	'ERR_LAST_ADMIN_1' => '用户名“',
	'ERR_LAST_ADMIN_2' => '”是最后一个具有管理员权限的员工。至少有一个员工必须是管理员。',
	'ERR_PASSWORD_CHANGE_FAILED_1' => '用户密码更改失败',
	'ERR_PASSWORD_CHANGE_FAILED_2' => '失败。必须设置新密码。',
	'ERR_PASSWORD_INCORRECT_OLD_1' => '用户的旧密码不正确',
	'ERR_PASSWORD_INCORRECT_OLD_2' => '。重新输入密码信息。',
	'ERR_PASSWORD_MISMATCH' => '密码不匹配。',
	'ERR_REENTER_PASSWORDS' => '请重新输入密码。“新密码”和“确认密码”不匹配。',
	'ERR_REPORT_LOOP' => '系统检测到循环汇报。用户不可以自己汇报，用户的经理也不可以汇报给他们。',
	'ERR_USER_NAME_EXISTS_1' => '用户名',
	'ERR_USER_NAME_EXISTS_2' => '已存在。用户名不可以重复。用户名必须是唯一的。',

	'LBL_ADDRESS_CITY' => '城市',
	'LBL_ADDRESS_COUNTRY' => '国家',
	'LBL_ADDRESS_INFORMATION' => '地址信息',
	'LBL_ADDRESS_POSTALCODE' => '邮编',
	'LBL_ADDRESS_STATE' => '省份',
	'LBL_ADDRESS_STREET' => '街道',
	'LBL_ADDRESS' => '地址',
	'LBL_ADMIN_USER' => '系统管理员',
	//BEGIN SUGARCRM flav=com ONLY 
	'LBL_ADMIN_DESC' => '用户可以访问管理页面和所有的记录.',
	'LBL_REGULAR_DESC' => '用户根据角色权限访问模块和记录.',
	//END SUGARCRM flav=com ONLY 
	//BEGIN SUGARCRM flav=pro ONLY 
	'LBL_ADMIN_DESC' => '用户可以跳过团队安全和角色权限访问所有模块和记录.',
	'LBL_REGULAR_DESC' => '用户根据团队安全和角色权限访问模块和记录.',
	//END SUGARCRM flav=pro ONLY 
	'LBL_ADMIN_TEXT' => '给这个用户授予管理员权限',
	'LBL_ADMIN' => '管理员',
	'LBL_ANY_EMAIL' => '任何电子邮件',
	'LBL_ANY_PHONE' => '任何电话',
	'LBL_BUTTON_CREATE' => '新增',
	'LBL_BUTTON_EDIT' => '编辑',
	'LBL_CALENDAR_OPTIONS' => '日程安排选项',
	'LBL_CHANGE_SYSTEM_PASSWORD'		=> '请输入一个新密码.',
	'LBL_CHANGE_PASSWORD_TITLE'         => '更改密码',
	'LBL_CHANGE_PASSWORD_BUTTON_KEY'	=> 'P',
	'LBL_CHANGE_PASSWORD_BUTTON_LABEL' => '更改密码',
	'LBL_CHANGE_PASSWORD_BUTTON_TITLE' => '更改密码',
	'LBL_CHANGE_PASSWORD' => '更改密码',
	'LBL_CHOOSE_A_KEY' => '选择一个密钥来阻止未授权的人公布您的日程安排',
	'LBL_CHOOSE_WHICH' => '选择要显示的标签',
	'LBL_CITY' => '城市',

	'LBL_CLEAR_BUTTON_TITLE' => '清除',


	'LBL_CONFIRM_PASSWORD' => '确认密码',
	'LBL_COUNTRY' => '国家',
	'LBL_CURRENCY_TEXT' => '选择默认的货币',
	'LBL_CURRENCY' => '货币',
	'LBL_CURRENCY_EXAMPLE' => '货币显示实例',
	'LBL_CURRENCY_SIG_DIGITS' => '货币精确度',
	'LBL_CURRENCY_SIG_DIGITS_DESC' => '显示货币小数的个数',
	'LBL_NUMBER_GROUPING_SEP' => '千分符',
	'LBL_NUMBER_GROUPING_SEP_TEXT' => '分隔千位的字符',
	'LBL_DECIMAL_SEP' => '小数符号',
	'LBL_DECIMAL_SEP_TEXT' => '分隔小数部分的字符',
	'LBL_DATE_FORMAT_TEXT' => '设置日期戳的显示格式',
	'LBL_DATE_FORMAT' => '日期格式',
	'LBL_DEFAULT_SUBPANEL_TITLE' => '用户',
	'LBL_DEPARTMENT' => '部门',
	'LBL_DESCRIPTION' => '说明',
	'LBL_DISPLAY_TABS' => '显示标签',
	'LBL_DST_INSTRUCTIONS' => '(+DST)指示您遵循夏令时',
	'LBL_EDIT_TABS' => '编辑标签',
	'LBL_EDIT' => '编辑',
	'LBL_EMAIL_OTHER' => '电子邮件2',
	'LBL_EMAIL' => '电子邮件地址',
	'LBL_EMAIL_CHARSET' => '发件箱字符集',
	'LBL_EMAIL_EDITOR_OPTION' => '撰写格式',
	'LBL_EMAIL_GMAIL_DEFAULTS'			=> '预先填入Gmail默认值',
	'LBL_EMAIL_LINK_TYPE' => '电子邮件客户端',
	'LBL_EMAIL_SHOW_COUNTS' => '显示电子邮件总数?',
	'LBL_EMAIL_SIGNATURE_ERROR1' => '这个签名需要一个名字。',
	'LBL_EMAIL_SMTP_SSL'				=> '设置SMTP在SSL上有效',
	'LBL_EMPLOYEE_STATUS' => '员工状态',
	'LBL_ERROR' => '错误',
	'LBL_EXPORT_CHARSET' => '导入/导出字符集',
	'LBL_EXPORT_CHARSET_DESC' => '选择您所在地区使用的字符集。这个属性用于导入数据，发送电子邮件，导出.csv文件，生成PDF文件，和生成vCard文件。',
	'LBL_EXPORT_DELIMITER' => '导出分隔符',
	'LBL_EXPORT_DELIMITER_DESC' => '指定用于分隔导出数据的字符。',
	'LBL_FAX_PHONE' => '传真',
	'LBL_FAX' => '传真',
	'LBL_FIRST_NAME' => '名',
	'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD'     =>'系统生成密码',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => '重设密码',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => '重设密码',
    'LBL_GENERATE_PASSWORD'             => '重设密码',
	
	'LBL_GRIDLINE_TEXT' => '控制详细视图的网格线',
	'LBL_GRIDLINE' => '显示网格线',
	'LBL_GROUP_DESC' => '作为分组用户。这个用户不可以通过Sugar Suite网页登录。这个用户只能用于通过收件箱功能指派记录到分组。',
	'LBL_GROUP_USER_STATUS' => '组用户',
	'LBL_GROUP' => '组用户',
	'LBL_HIDE_TABS' => '隐藏标签',
	'LBL_HOME_PHONE' => '家庭电话',
	'LBL_INBOUND_TITLE' => '客户信息',
	'LBL_IS_ADMIN' => '是管理员',
	'LBL_LANGUAGE' => '语言',
	'LBL_LAST_NAME' => '姓',
	'LBL_LAYOUT_OPTIONS' => '布局选项',
	'LBL_LIST_ACCEPT_STATUS' => '接收状态',
	'LBL_LIST_ADMIN' => '管理员',
	'LBL_LIST_DEPARTMENT' => '部门',
	'LBL_LIST_EMAIL' => '电子邮件',
	'LBL_LIST_FORM_TITLE' => '用户',
	'LBL_LIST_GROUP' => '组',
	'LBL_LIST_LAST_NAME' => '姓',
	'LBL_LIST_MEMBERSHIP' => '成员关系',
	'LBL_LIST_NAME' => '姓名',
	'LBL_LIST_PRIMARY_PHONE' => '常用电话',
	'LBL_LIST_STATUS' => '状态',
	'LBL_LIST_TITLE' => '职称',
	'LBL_LIST_USER_NAME' => '用户名',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT' => '名字显示格式',
	'LBL_LOCALE_DESC_FIRST' => '[名]',
	'LBL_LOCALE_DESC_LAST' => '[姓]',
	'LBL_LOCALE_DESC_SALUTATION' => '[称谓]',
	'LBL_LOCALE_DESC_TITLE'				=> '[Title]',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => '实例',
	'LBL_LOCALE_NAME_FORMAT_DESC' => '设置如何显示名字。',
	'LBL_LOCALE_NAME_FORMAT_DESC_2' => '<i>“s”称谓<br>“f”名<br>“l”姓</i>',
    'LBL_SAVED_SEARCH'                  => '保存查找 & 布局',
	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'				=> 'L',
	'LBL_LOGIN_BUTTON_LABEL' => '登录',
	'LBL_LOGIN_BUTTON_TITLE' => '登录',
	'LBL_LOGIN_WELCOME_TO' => '欢迎来到',
	'LBL_LOGIN_OPTIONS' => '选项',
    'LBL_LOGIN_FORGOT_PASSWORD'         => '忘记密码?',
    'LBL_LOGIN_EMAIL_TEMP_PWD'          => '邮件暂时密码',
	// END LOGIN PAGE STRINGS
	'LBL_MAIL_FROMADDRESS' => '收件人地址',
	'LBL_MAIL_FROMNAME' => '收件人姓名',
	'LBL_MAIL_OPTIONS_TITLE' => '电子邮件选项',
	'LBL_MAIL_SENDTYPE' => '邮件传送代理',
	'LBL_MAIL_SMTPAUTH_REQ' => '使用SMTP认证?',
	'LBL_MAIL_SMTPPASS' => 'SMTP密码',
	'LBL_MAIL_SMTPPORT' => 'SMTP端口',
	'LBL_MAIL_SMTPSERVER' => 'SMTP服务器',
	'LBL_MAIL_SMTPUSER' => 'SMTP用户名',
	'LBL_MAILMERGE_TEXT' => '启用邮件合并(邮件合并必须由管理员在配置中启用)',
	'LBL_MAILMERGE' => '邮件合并',
	'LBL_MAX_TAB' => '标签的数量',
	'LBL_MAX_TAB_DESCRIPTION' => '显示在益出菜单前，页面上方的标签的数量。',
	'LBL_MAX_SUBTAB' => '子标签的数量',
	'LBL_MAX_SUBTAB_DESCRIPTION' => '显示在益出菜单前，每个标签中子标签的数量。',
	'LBL_MESSENGER_ID' => 'IM名称',
	'LBL_MESSENGER_TYPE' => 'IM类型',
	'LBL_MOBILE_PHONE' => '手机',
	'LBL_MODULE_NAME' => '用户',
	'LBL_MODULE_TITLE' => '用户:首页',
	'LBL_MODULE_FAVICON' => '使用模块图标作为浏览器图标',
	'LBL_MODULE_FAVICON_DESCRIPTION' => '如果您在使用的模块有图标,使用模块的图标代替主题的图标作为浏览器图标',
	'LBL_NAME' => '全名',
	'LBL_NAVIGATION_PARADIGM' => '导航范例',
	'LBL_NAVIGATION_PARADIGM_DESCRIPTION' => '使用分组标签来代替模块标签。',
	'LBL_NEW_FORM_TITLE' => '新增用户',
	'LBL_NEW_PASSWORD' => '新密码',
	'LBL_NEW_PASSWORD1' => '密码',
	'LBL_NEW_PASSWORD2' => '确认密码',
	'LBL_NEW_USER_BUTTON_KEY'			=> 'N',
	'LBL_NEW_USER_BUTTON_LABEL' => '新增用户',
	'LBL_NEW_USER_BUTTON_TITLE' => '新增用户',
	'LBL_NOTES' => '备忘录',
	'LBL_OFFICE_PHONE' => '办公电话',
	'LBL_OLD_PASSWORD' => '旧密码',
	'LBL_OTHER_EMAIL' => '其它电子邮件地址',
	'LBL_OTHER_PHONE' => '其它电话',
	'LBL_OTHER' => '其它',
	'LBL_PASSWORD' => '密码',
	'LBL_PSW_MODIFIED' => '密码最后更新时间',
	'LBL_PHONE' => '电话',
	'LBL_PICK_TZ_WELCOME' => '欢迎来到Sugar Suite。',
	'LBL_PICK_TZ_DESCRIPTION' => '在继续以前，请从下面的时区列表中确认您的时区。您可以通过访问“我的帐户”来修改您的时区。',
	'LBL_PORTAL_ONLY_TEXT' => '作为一个门户网站用户。这个用户不可以通过Sugar Suite网页登录。这个用户只能用于门户网站网络服务。一般用户不能用于门户网站网络服务。',
	'LBL_PORTAL_ONLY' => '只是门户网站用户',
	'LBL_POSTAL_CODE' => '邮编',
	'LBL_PRIMARY_ADDRESS' => '主要地址',
	'LBL_PROMPT_TIMEZONE_TEXT' => '检查并提示用户在登录时确认时区。',
	'LBL_PROMPT_TIMEZONE' => '时区提示',
	'LBL_PUBLISH_KEY' => '公布密钥',
	'LBL_RECEIVE_NOTIFICATIONS_TEXT' => '当有记录指派给您的时候，接收电子邮件通知。',
	'LBL_RECEIVE_NOTIFICATIONS' => '在指派的时候通知',
	'LBL_REMINDER_TEXT' => '为即将到来的电话或者会议，弹出提醒',
	'LBL_REMINDER' => '显示提醒?',
	'LBL_REMOVED_TABS' => '管理员移除的标签',
	'LBL_REPORTS_TO_NAME' => '经理',
	'LBL_REPORTS_TO' => '经理',
	'LBL_RESET_TO_DEFAULT'				=> '重设为默认值',
	'LBL_RESET_PREFERENCES' => '恢复默认值',
	'LBL_RESET_PREFERENCES_WARNING' => '您确定要重新设置您所有的参数?',
    'LBL_RESET_DASHBOARD'               => '统计图',    
    'LBL_RESET_DASHBOARD_WARNING'       => '您确定您想重新设置您的统计图吗?',    
	'LBL_ROLES_SUBPANEL_TITLE' => '角色',
	'LBL_SEARCH_FORM_TITLE' => '查找用户',
	'LBL_SEARCH_URL' => '查找数据单元',
	'LBL_SELECT_CHECKED_BUTTON_LABEL' => '选择打钩的用户',
	'LBL_SELECT_CHECKED_BUTTON_TITLE' => '选择打钩的用户',
	'LBL_SETTINGS_URL_DESC' => '当为Microsoft&reg;Outlook&reg;和Microsoft&reg;Word&reg;的Sugar插件建立登录设置时，使用这个网址。',
	'LBL_SETTINGS_URL' => '网址',
	'LBL_SIGNATURE' => '签名',
	'LBL_SIGNATURE_HTML' => 'HTML签名',
	'LBL_SIGNATURE_DEFAULT' => '使用签名?',
	'LBL_SIGNATURE_PREPEND' => '使用上面签名回复?',
	'LBL_SIGNATURES' => '签名',
	'LBL_STATE' => '省份',
	'LBL_STATUS' => '状态',
	'LBL_SUBPANEL_LINKS' => '面板链接',
	'LBL_SUBPANEL_LINKS_DESCRIPTION' => '在详细视图中，显示一行面板的快速链接。',
	'LBL_SUBPANEL_TABS' => '面板标签',
	'LBL_SUBPANEL_TABS_DESCRIPTION' => '在详细视图中，把面板分组到标签中，并且一次显示一个标签。',
	'LBL_SUGAR_LOGIN' => '是sugar用户',
	'LBL_SUPPORTED_THEME_ONLY' => '只有影响主题才支持这个选项。',
	'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => '如果选中，在边上显示最近查看栏。否则的话，它会在顶部显示。',
	'LBL_SWAP_SHORTCUT_DESCRIPTION' => '如果选中，在顶部显示快捷方式栏。否则的话，它会在边上显示。',
	'LBL_SWAP_LAST_VIEWED_POSITION' => '边上显示最近查看',
	'LBL_SWAP_SHORTCUT_POSITION' => '顶部显示快捷方式',
	'LBL_TAB_TITLE_EMAIL' => '电子邮件设置',
	'LBL_TAB_TITLE_USER' => '用户设置',
	'LBL_THEME' => '主题',
	'LBL_TIME_FORMAT_TEXT' => '设置时间戳的显示格式',
	'LBL_TIME_FORMAT' => '时间格式',
	'LBL_TIMEZONE_DST_TEXT' => '遵循夏令时',
	'LBL_TIMEZONE_DST' => '夏令时',
	'LBL_TIMEZONE_TEXT' => '设置当前的时区',
	'LBL_TIMEZONE' => '时区',
	'LBL_TITLE' => '职称',
	'LBL_USE_REAL_NAMES' => '显示全名',
	'LBL_USE_REAL_NAMES_DESC' => '显示用户全名来代替用户名',
	'LBL_USER_INFORMATION' => '用户信息',
	'LBL_USER_LOCALE' => '区域设置',
	'LBL_USER_NAME' => '用户名',
	'LBL_USER_SETTINGS' => '用户设置',
	'LBL_USER_TYPE' => '用户类型',
	'LBL_USER' => '用户',
	'LBL_WORK_PHONE' => '办公电话',
	'LBL_YOUR_PUBLISH_URL' => '公布我的存储单元',
	'LBL_YOUR_QUERY_URL' => '您的查询网站',
	'LNK_NEW_USER' => '新增用户',
	'LNK_USER_LIST' => '用户',
	'LNK_REASSIGN_RECORDS' => '重新分配记录',
    'LBL_PROSPECT_LIST' => '目标列表',
    'LBL_PROCESSING' => '正在处理',
    'LBL_UPDATE_FINISH'                 => '更新完成',
    'LBL_AFFECTED'                      => '条记录',
// MASS REASSIGNMENT SCRIPT STRINGS
	'LBL_REASS_SCRIPT_TITLE'			=> '记录重新分配',
	'LBL_REASS_DESC_PART1'				=> '这将发现所有记录（在选择的模块中）分配给一个用户，并允许你重新分配他们到另一个用户.',
	'LBL_REASS_STEP2_TITLE'				=> '团队重新分配',
	'LBL_REASS_STEP2_DESC'				=> '下面列示的是有效的在用户团队窗体，但是并不在用户团队。所有的纪录，在由用户团队将不会显示在用户的团队，除非团队价值的映射. ',
	'LBL_REASS_SELECT_USER'				=> '请从下列下拉栏选择用户窗口:',
	'LBL_REASS_USER_FROM_TEAM'			=> '从用户团队:',
	'LBL_REASS_USER_TO_TEAM'			=> '到用户团队:',
	'LBL_REASS_USER_FROM'				=> '从用户:',
	'LBL_REASS_USER_TO'					=> '到用户:',
	'LBL_REASS_TEAM_TO'					=> '设置团队:',
	'LBL_REASS_TEAMS_GOOD_MSG'			=> '该用户已访问到所有用户团队窗口. 没有映射的必要. 在5秒钟重定向到下页.',
	'LBL_REASS_TEAM_NO_CHANGE'			=> '-- 无改变 --',
	'LBL_REASS_NOT_PROCESSED' 			=> '不能被处理:',
	'LBL_REASS_MOD_REASSIGN' 			=> '模块包括在调动中:',
	'LBL_REASS_FILTERS'					=> '过滤器',
	'LBL_REASS_NOTES_TITLE'				=> '注释:',
	'LBL_REASS_NOTES_ONE'				=> '给自己分配记录将不触发分配通知.',
	'LBL_REASS_NOTES_TWO'				=> '在分配中包括工作流程，通知，跟踪审计会显著变慢的.',
	'LBL_REASS_NOTES_THREE'				=> '即使你不包含审计, 修改日期和修改人仍然会随着更新.',
	'LBL_REASS_VERBOSE_OUTPUT'			=> '冗长的输出(只应用在工作流中的调动任务)',
	'LBL_REASS_ASSESSING'				=> '正在评估',
	'LBL_REASS_RECORDS_FROM'			=> '条记录来源于',
	'LBL_REASS_WILL_BE_UPDATED'			=> '将被更新.',
	'LBL_REASS_WORK_NOTIF_AUDIT' => '包括工作流/通知/审计 (显著放慢)',
	'LBL_REASS_SUCCESS_ASSIGN'			=> '成功分配',
	'LBL_REASS_FROM'					=> '从',
	'LBL_REASS_TO'						=> '到',
	'LBL_REASS_TEAM_SET_TO'				=> '并且团队被设置为',
	'LBL_REASS_FAILED_SAVE'				=> '记录保存失败',
	'LBL_REASS_THE_FOLLOWING'			=> '',
	'LBL_REASS_HAVE_BEEN_UPDATED'		=> '已经被更新:',
    'LBL_REASS_CANNOT_PROCESS'		    => '不能处理:',
	'LBL_REASS_NONE'					=> '无',
	'LBL_REASS_UPDATE_COMPLETE'			=> '完全更新',
	'LBL_REASS_SUCCESSFUL'				=> '成功',
	'LBL_REASS_FAILED'					=> '失败',
	'LBL_REASS_BUTTON_SUBMIT' 			=> '提交',
	'LBL_REASS_BUTTON_CLEAR' 			=> '清除',
	'LBL_REASS_BUTTON_CONTINUE'			=> '继续',
	'LBL_REASS_BUTTON_GO_BACK' 			=> '退回',
	'LBL_REASS_BUTTON_RESTART' 			=> '重新开始',
	'LBL_REASS_BUTTON_RETURN' 			=> '返回',
	// js
	'LBL_REASS_CONFIRM_REASSIGN'		=> '您真要重新分配这个用户的所有记录吗?',
	// end js
	'ERR_REASS_SELECT_MODULE'			=> '请退回并至少选择一个模块.',
	'ERR_REASS_DIFF_USERS'				=> '请选择一个分配给的用户，与从用户中指派不同.',
// END MASS REASSIGNMENT SCRIPT STRINGS

// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS' => '提交最佳设置',
	'LBL_ASSIGN_TO_USER' => '指派给用户',
	'LBL_BASIC' => '收件箱设置',
	'LBL_CERT_DESC' => '强制验证邮件服务器的安全证书–如果是自我签署，请不要使用',
	'LBL_CERT' => '证书验证',
	'LBL_FIND_OPTIMUM_KEY'				=> 'f',
	'LBL_FIND_OPTIMUM_MSG' => '<br>寻找最佳连接变量。',
	'LBL_FIND_OPTIMUM_TITLE' => '寻找最佳配置',
	'LBL_FORCE' => '强制否定',
	'LBL_FORCE_DESC' => '一些IMAP/POP3服务器需要特殊的交换机。当连接失败的时候，请检查交换机(像/notls)',
	'LBL_FOUND_OPTIMUM_MSG' => '<br>发现优化设置。点击下面的按钮来提交他们到您的邮箱。',
	'LBL_EMAIL_INBOUND_TITLE' => '收件箱设置',
	'LBL_EMAIL_OUTBOUND_TITLE' => '发件箱设置',
	'LBL_LOGIN' => '用户名',
	'LBL_MAILBOX_DEFAULT' => '收件箱',
	'LBL_MAILBOX_SSL_DESC' => '连接时使用SSL。如果不能连接，请检查您在安装PHP的时候，配置项中是否包含了“--with-imap-ssl”。',
	'LBL_MAILBOX' => '已监视的文件夹',
	'LBL_MAILBOX_TYPE' => '可能的动作',
	'LBL_MARK_READ_NO' => '导入后删除标记过的电子邮件',
	'LBL_MARK_READ_YES' => '导入后在服务器上保留电子邮件',
	'LBL_MARK_READ_DESC' => '导入并标记邮件服务器上已读的消息；不要删除它们。',
	'LBL_MARK_READ' => '在服务器上保留消息',
	'LBL_ONLY_SINCE_NO' => '不。检查此邮件服务器上的所有邮件。',
	'LBL_ONLY_SINCE_YES' => '是。',
	'LBL_ONLY_SINCE_DESC' => '当使用POP3时，PHP将不能过滤新信息或未读信息。此标签可以核对上次收件箱里的信息。如果您的邮件服务器不支持IMAP，它将对此有很大改进。',
	'LBL_ONLY_SINCE' => '导入最后确认',
	'LBL_PORT' => '邮件服务器端口',
	'LBL_SERVER_OPTIONS' => '高级设置',
	'LBL_SERVER_TYPE' => '邮件服务器协议',
	'LBL_SERVER_URL' => '邮件服务器地址',
	'LBL_SSL' => '使用SSL',
	'LBL_SSL_DESC' => '连接到您的邮件服务器的时候，使用安全端口层。',
	'LBL_TEST_BUTTON_KEY'				=> 't',
	'LBL_TEST_BUTTON_TITLE' => '测试',
	'LBL_TEST_SETTINGS' => '测试设置',
	'LBL_TEST_SUCCESSFUL' => '连接完全成功。',
	'LBL_TLS_DESC' => '连接邮件服务器时使用传输层安全协议–如果您的邮件服务器支持这此协议，请只使用这一个。',
	'LBL_TLS' => '使用TLS',
	'LBL_TOGGLE_ADV' => '显示高级选项',
	'LBL_OWN_OPPS' => '没有商业机会',
	'LBL_OWN_OPPS_DESC' => '如果这个用户未给指派商业机会，设置它为真。您应该忽略这个用户标记，他不是经理，没有涉及销售活动。在销售预测模块中使用。',
// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR' => 'LDAP错误:请和管理员联系',
	'LBL_LDAP_EXTENSION_ERROR' => 'LDAP错误:服务未加载',

// PROJECT RESOURCES STRINGS	
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => '用户假期',
	'LBL_RESOURCE_NAME' => '名称',
	'LBL_RESOURCE_TYPE' => '类型',

	'ERR_NO_LOGIN_MOBILE' => '您第一次登录本系统必须使用非移动浏览器或者使用常规模式. 请使用全能浏览器或者点击下面的常规链接. 由此造成的不便我们深表歉意.',
	'LBL_MODIFIED_BY' => '修改人',
	'LBL_MODIFIED_BY_ID' => '修改人编号',
	'LBL_NORMAL_LOGIN' => '切换到常规视图',
	'LBL_REGISTER' => '新用户? 请注册',
	'LBL_REGULAR_USER' => '普通用户',
	'LBL_REPORTS_TO_ID' => '经理编号:',
	'LBL_SALUTATION' => '问候',
	'LBL_USER_DCEINST_FORM_TITLE' => '用户-实例:',
	'LBL_DCEINST_NAME' => '实例名称',
	'LBL_LIST_USER_ROLE' => '角色',
	'LBL_USER_ROLE' => '角色',
	'LBL_DCEINSTANCES' => '实例',
	'LBL_PDF_SETTINGS'  =>  'PDF设置',
	'LBL_PDF_PAGE_FORMAT'  =>  '页面格式',
	'LBL_PDF_PAGE_FORMAT_TEXT'  =>  '页面使用的格式',
	'LBL_PDF_PAGE_ORIENTATION'  =>  '以页面为基准',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'  =>  '',
	'LBL_PDF_PAGE_ORIENTATION_P'  =>  '纵向',
	'LBL_PDF_PAGE_ORIENTATION_L'  =>  '横向',
	'LBL_PDF_MARGIN_HEADER'  =>  '页眉',
	'LBL_PDF_MARGIN_HEADER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_FOOTER'  =>  '页脚',
	'LBL_PDF_MARGIN_FOOTER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_TOP'  =>  '上边距',
	'LBL_PDF_MARGIN_TOP_TEXT'  =>  '',
	'LBL_PDF_MARGIN_BOTTOM'  =>  '下边距',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'  =>  '',
	'LBL_PDF_MARGIN_LEFT'  =>  '左边距',
	'LBL_PDF_MARGIN_LEFT_TEXT'  =>  '',
	'LBL_PDF_MARGIN_RIGHT'  =>  '右边距',
	'LBL_PDF_MARGIN_RIGHT_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_MAIN'  =>  '主字体名称',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'  =>  '主字体一般用于标题和正文',
	'LBL_PDF_FONT_SIZE_MAIN'  =>  '主字体大小',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_DATA'  =>  '资料字体名称',
	'LBL_PDF_FONT_NAME_DATA_TEXT'  =>  '资料字体通常用于页脚',
	'LBL_PDF_FONT_SIZE_DATA'  =>  '资料字体大小',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'  =>  '',
// END STRINGS DEFS
	'ERR_EMAIL_INCORRECT'=>'请提供一个有效的电子邮件地址用以生成和发送密码.',
	'ERR_PASSWORD_USERNAME_MISSMATCH'=>'您必须指定一个有效的用户名和电子邮件地址.',
	'ERR_PASSWORD_LINK_EXPIRED'=>'您的链接已过期, 请生成一个新的链接',
	'ERR_RULES_NOT_MET'=>'您输入的密码不符合密码的要求. 请再试一遍.',
	'ERR_USER_INFO_NOT_FOUND'=>'未找到用户信息',
	'ERR_USER_IS_LOCKED_OUT'=>'当前用户已被锁定, 不能使用现有密码登录. 欲尝试再次登录Sugar, 请点击发送新密码按钮.',
	'ERR_EMAIL_NOT_SENT_ADMIN'=>'系统无法处理您的请求. 请检查:',
	'ERR_SMTP_URL_SMTP_PORT'=>'SMTP服务器地址与端口',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'=>'SMTP用户名与密码',
	'ERR_RECIPIENT_EMAIL'=>'收件人电子邮件地址',
	'ERR_SERVER_STATUS'=>'您的服务器状态',
	'ERR_SERVER_SMTP_EMPTY'=>'系统无法发送邮件到该用户. 请检查系统发信设置.',
	'LBL_CONFIRM_REGULAR_USER'=>'您已将该用户从系统管理员转换为普通用户. 保存修改之后, 该用户将没有系统管理权限.\n\n确认操作请点击 “确定” .\n取消操作请点击 “返回”.',
	'LBL_USER_HASH'=>'密码',
	'LBL_AUTHENTICATE_ID'=>'认证编号',
	'LBL_ACCOUNT_NAME'=>'客户名称',
	'LBL_USER_PREFERENCES'=>'用户首选项',
	'LBL_EXT_AUTHENTICATE'=>'外部认证',
	'LBL_EMAIL_LINK_TYPE_HELP'=>'系统默认邮件客户端 : 默认邮件客户端由系统管理员设置.	SugarCRM邮件客户端 : 该客户端在Sugar的电子邮件模块中.	外部邮件客户端 : 其他邮件客户端, 例如Microsoft Outlook.',
	'LBL_EMAIL_NOT_SENT'=>'系统无法处理您的请求. 请联系系统管理员.',
	'LBL_EMAIL_TEMPLATE_MISSING'=>'尚未选择邮件模板来发送包含密码的邮件给用户. 请在密码管理页面中选择一个邮件模板.',
	'LBL_GROUP_USER'=>'组用户',
	'LBL_LAST_NAME_SLASH_NAME'=>'姓/名',
	'LBL_LDAP'=>'LDAP',
	'LBL_LDAP_AUTHENTICATION'=>'LDAP认证',
	'LBL_LIST_PASSWORD'=>'密码',
	'LBL_LOGIN_SUBMIT'=>'提交',
	'LBL_LOGIN_ATTEMPTS_OVERRUN'=>'登录失败次数过多.',
	'LBL_LOGIN_LOGIN_TIME_ALLOWED'=>'请重新登录',
	'LBL_LOGIN_LOGIN_TIME_DAYS'=>'天.',
	'LBL_LOGIN_LOGIN_TIME_HOURS'=>'小时.',
	'LBL_LOGIN_LOGIN_TIME_MINUTES'=>'分钟.',
	'LBL_LOGIN_LOGIN_TIME_SECONDS'=>'秒.',
	'LBL_LOGIN_ADMIN_CALL'=>'请联系系统管理员或者使用找回密码.',
	'LBL_IE6COMPAT_CHECK'=>'系统检测到您正在使用Internet Explorer 6. 我们已自动为你选择兼容Internet Explorer 6的主题"Sugar IE6".',
	'LBL_THEME_PICKER_IE6COMPAT_CHECK'=>'警告: 本主题不支持Internet Explorer 6. 我们已自动为你选择兼容Internet Explorer 6的主题"Sugar IE6".',
	'LBL_NEW_USER_PASSWORD_1'=>'密码修改成功.',
	'LBL_NEW_USER_PASSWORD_2'=>'包含有系统生成链接的电子邮件已发送到该用户. 用户必须提供一个新的密码.',
	'LBL_NEW_USER_PASSWORD_3'=>'密码生成成功.',
	'LBL_PASSWORD_GENERATED'=>'已生成新密码',
	'LBL_PASSWORD_EXPIRATION_LOGIN'=>'您的密码已过期. 请提供一个新密码.',
	'LBL_PASSWORD_EXPIRATION_GENERATED'=>'您的密码为系统生成',
	'LBL_PASSWORD_EXPIRATION_TIME'=>'您的密码已过期. 请提供一个新密码.',
	'LBL_PORTAL_ONLY_DESC'=>'门户服务专用. 此类型不能用于Sugar的web界面登录.',
	'LBL_PORTAL_ONLY_USER'=>'门户专用用户',
	'LBL_PROVIDE_USERNAME_AND_EMAIL'=>'提供一个用户名和电子邮件地址.',
	'LBL_RECAPTCHA_NEW_CAPTCHA'=>'重新获取CAPTCHA',
	'LBL_RECAPTCHA_SOUND'=>'切换到声音',
	'LBL_RECAPTCHA_IMAGE'=>'切换到图像',
	'LBL_RECAPTCHA_INSTRUCTION'=>'输入下面的两个字',
	'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'=>'在右边输入两个字',
	'LBL_RECAPTCHA_FILL_FIELD'=>'输入图片中的文本.',
	'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'=>'无效的Recaptcha密钥',
	'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'=>'验证码不正确.',
	'LBL_RECAPTCHA_UNKNOWN'=>'未知的Recaptcha错误',
	'LBL_REQUEST_SUBMIT'=>'您的请求已提交.',
	'LNK_NEW_PORTAL_USER'=>'创建门户用户',
	'LNK_NEW_GROUP_USER'=>'创建组用户',
	'LBL_USER_NAME_FOR_ROLE'=>'用户/团队/角色',
	'LBL_EXTERNAL_AUTH_ONLY'=>'仅使该用户通过认证',
	'LBL_ONLY'=>'仅',
); 

?>
