<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Բաղադրիչներ';
$lang['admin_content'] = 'Բովանդակություն';
$lang['admin_database_backup'] = 'Տվյալների բազայի պահուստավորումներ';
$lang['admin_extensions'] = 'Ընդլայնումներ';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Օգնություն';
$lang['admin_languages'] = 'Լեզուներ';
$lang['admin_logs'] = 'Համակարգի մատյաններ';
$lang['admin_media'] = 'Մեդիա գրադարան';
$lang['admin_modules'] = 'Մոդուլներ';
$lang['admin_plugins'] = 'Plugin-ներ';
$lang['admin_reports'] = 'Գործունեության մատյան';
$lang['admin_settings'] = 'Համակարգի կարգավորումներ';
$lang['admin_sysinfo'] = 'Համակարգի տեղեկություններ';
$lang['admin_system'] = 'Համակարգ';
$lang['admin_system_firewall'] = 'Համակարգի Firewall';
$lang['admin_themes'] = 'Թեմաներ';
$lang['admin_updates'] = 'Համակարգի թարմացումներ';
$lang['admin_users'] = 'Օգտատերեր';
$lang['admin_view_site'] = 'Դիտել կայքը';
$lang['per_page'] = 'Մեկ էջում';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Շնորհակալություն <a href="%s">%s</a>-ով ստեղծելու համար։';
$lang['admin_items_active_count'] = '=0{Ակտիվ տարրեր չկան։} other{<b>%s</b>-ից <b>#</b> տարր ակտիվ է։}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Տեղադրել';
$lang['admin_install_error'] = 'Չհաջողվեց տեղադրել փաթեթը։';
$lang['admin_install_error_com'] = 'Տեղադրումը ձախողվեց՝ %s';
$lang['admin_install_location_app'] = 'Միայն այս հավելվածը';
$lang['admin_install_location_core'] = 'Բոլոր հավելվածները';
$lang['admin_install_location_select'] = '&#151; Ընտրեք տեղադրությունը &#151;';
$lang['admin_install_success'] = 'Փաթեթը հաջողությամբ տեղադրվեց։';
$lang['admin_install_upload'] = 'Վերբեռնել';
$lang['admin_install_upload_error'] = 'Չհաջողվեց վերբեռնել փաթեթը։';
$lang['admin_install_upload_success'] = 'Փաթեթը հաջողությամբ վերբեռնվեց։';
$lang['admin_install_upload_tip'] = 'Տեղադրեք փաթեթ՝ այստեղ վերբեռնելով դրա <b>.zip</b> ֆայլը։';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Չհաջողվեց մաքրել հին պահուստավորման ֆայլերը։';
$lang['admin_database_backup_clean_success'] = '%d պահուստավորման ֆայլ ջնջվեց։ Ազատվեց %d սկավառակային տարածք։';
$lang['admin_database_backup_create'] = 'Ստեղծել պահուստավորում';
$lang['admin_database_backup_create_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք հիմա ստեղծել պահուստավորում։';
$lang['admin_database_backup_create_error'] = 'Չհաջողվեց ստեղծել պահուստավորման ֆայլը։ Համոզվեք, որ <b>%s</b> պանակը գրելի է։';
$lang['admin_database_backup_create_success'] = 'Տվյալների բազայի պահուստավորման <b>%s</b> ֆայլը հաջողությամբ ստեղծվեց։';
$lang['admin_database_backup_delete_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ջնջել այս պահուստավորման ֆայլերը։';
$lang['admin_database_backup_delete_error'] = 'Չհաջողվեց ջնջել ընտրված պահուստավորման ֆայլերը։';
$lang['admin_database_backup_delete_success'] = 'Պահուստավորման ֆայլերը հաջողությամբ ջնջվեցին։';
$lang['admin_database_backup_download_error'] = 'Չհաջողվեց ներբեռնել ընտրված պահուստավորման ֆայլը։';
$lang['admin_database_backup_download_success'] = 'Պահուստավորման ֆայլը հաջողությամբ ներբեռնվեց։';
$lang['admin_database_backup_lock_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք կողպել այս պահուստավորման ֆայլերը։';
$lang['admin_database_backup_lock_error'] = 'Չհաջողվեց կողպել ընտրված պահուստավորման ֆայլերը։';
$lang['admin_database_backup_lock_success'] = 'Պահուստավորման ֆայլերը հաջողությամբ կողպվեցին։';
$lang['admin_database_backup_locked_error'] = 'Չհաջողվեց ջնջել կողպված պահուստավորման ֆայլերը։';
$lang['admin_database_backup_missing_error'] = 'Պահուստավորման ֆայլը չի գտնվել։';
$lang['admin_database_backup_unlock_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ապակողպել այս պահուստավորման ֆայլերը։';
$lang['admin_database_backup_unlock_error'] = 'Չհաջողվեց ապակողպել ընտրված պահուստավորման ֆայլերը։';
$lang['admin_database_backup_unlock_success'] = 'Պահուստավորման ֆայլերը հաջողությամբ ապակողպվեցին։';
$lang['admin_database_prune'] = 'Մաքրել';
$lang['admin_database_prune_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք մաքրել տվյալների բազան։ Կատարման ժամանակ կստեղծվի պահուստավորում։';
$lang['admin_database_prune_error'] = 'Չհաջողվեց մաքրել տվյալների բազան։';
$lang['admin_database_prune_next'] = 'Հաջորդ մաքրումը՝ <b>%s</b>';
$lang['admin_database_prune_success'] = 'Տվյալների բազան հաջողությամբ մաքրվեց։';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Ջնջել մատյանները';
$lang['admin_logs_delete_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ջնջել ընտրված մատյանի ֆայլերը։';
$lang['admin_logs_delete_error'] = 'Չհաջողվեց ջնջել մատյանի ֆայլերը։';
$lang['admin_logs_delete_success'] = 'Մատյանի ֆայլերը հաջողությամբ ջնջվեցին։';
$lang['admin_logs_error_disabled'] = 'Մատյանագրումը ներկայում միացված չէ։';
$lang['admin_logs_error_empty'] = 'Մատյաններ չեն գտնվել։';
$lang['admin_logs_error_missing'] = 'Մատյանի ֆայլը կամ չի գտնվել, կամ դատարկ էր։';
$lang['admin_logs_tip'] = 'Մատյանագրումը կարող է արագ ստեղծել շատ մեծ ֆայլեր։ Գործող կայքերի համար մտածեք հները ջնջելու մասին։';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ջնջել ընտրված էլ. նամակները։';
$lang['admin_emails_delete_error'] = 'Չհաջողվեց ջնջել ընտրված էլ. նամակները։';
$lang['admin_emails_delete_success'] = 'Ընտրված էլ. նամակները հաջողությամբ ջնջվեցին։';
$lang['admin_emails_email_from'] = 'Ուղարկված է';
$lang['admin_emails_mail_queue'] = 'Նամակների հերթ';
$lang['admin_emails_mailer'] = 'Զանգվածային նամակ';
$lang['admin_emails_search'] = 'Որոնել նամակները ըստ թեմայի կամ բովանդակության...';
$lang['admin_emails_send_error'] = 'Չհաջողվեց նամակը ավելացնել հերթում։ Խնդրում ենք կրկին փորձել։';
$lang['admin_emails_send_none'] = 'Ձեր ընտրված չափանիշներին համապատասխանող օգտատերեր չկան։';
$lang['admin_emails_send_success'] = 'Նամակը ավելացվել է հերթում և շուտով կուղարկվի։';
$lang['admin_emails_send_to_banned'] = 'Ուղարկել արգելափակված օգտատերերին։';
$lang['admin_emails_send_to_deleted'] = 'Ուղարկել ջնջված օգտատերերին։';
$lang['admin_emails_send_to_disabled'] = 'Ուղարկել ոչ ակտիվ օգտատերերին։';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Ավելացնել օգտատեր';
$lang['admin_users_all_users'] = 'Բոլոր օգտատերերը';
$lang['admin_users_ban_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք արգելափակել ընտրված օգտատերերին։';
$lang['admin_users_ban_error'] = 'Չհաջողվեց արգելափակել ընտրված օգտատերերին։';
$lang['admin_users_ban_success'] = 'Ընտրված օգտատերերը հաջողությամբ արգելափակվեցին։';
$lang['admin_users_delete_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ջնջել ընտրված օգտատերերին։';
$lang['admin_users_delete_error'] = 'Չհաջողվեց ջնջել ընտրված օգտատերերին։';
$lang['admin_users_delete_success'] = 'Ընտրված օգտատերերը հաջողությամբ ջնջվեցին։';
$lang['admin_users_disable_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք անջատել ընտրված օգտատերերին։';
$lang['admin_users_disable_error'] = 'Չհաջողվեց անջատել ընտրված օգտատերերին։';
$lang['admin_users_disable_success'] = 'Ընտրված օգտատերերը հաջողությամբ անջատվեցին։';
$lang['admin_users_edit'] = 'Խմբագրել օգտատիրոջը';
$lang['admin_users_edit_error'] = 'Չհաջողվեց թարմացնել օգտատիրոջը։';
$lang['admin_users_edit_success'] = 'Օգտատերը հաջողությամբ թարմացվեց։';
$lang['admin_users_enable_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք միացնել ընտրված օգտատերերին։';
$lang['admin_users_enable_error'] = 'Չհաջողվեց միացնել ընտրված օգտատերերին։';
$lang['admin_users_enable_success'] = 'Ընտրված օգտատերերը հաջողությամբ միացվեցին։';
$lang['admin_users_groups'] = 'Խմբեր';
$lang['admin_users_lock_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք կողպել ընտրված օգտատերերին։';
$lang['admin_users_lock_error'] = 'Չհաջողվեց կողպել ընտրված օգտատերերին։';
$lang['admin_users_lock_success'] = 'Ընտրված օգտատերերը հաջողությամբ կողպվեցին։';
$lang['admin_users_logged'] = 'Մուտք գործած օգտատերեր';
$lang['admin_users_manage'] = 'Կառավարել օգտատերերին';
$lang['admin_users_remove_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ընդմիշտ ջնջել ընտրված օգտատերերին և նրանց բոլոր տվյալները։';
$lang['admin_users_remove_error'] = 'Չհաջողվեց ընդմիշտ ջնջել ընտրված օգտատերերին և նրանց բոլոր տվյալները։';
$lang['admin_users_remove_success'] = 'Ընտրված օգտատերերը և նրանց բոլոր տվյալները հաջողությամբ ջնջվեցին։';
$lang['admin_users_restore_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք վերականգնել ընտրված օգտատերերին։';
$lang['admin_users_restore_error'] = 'Չհաջողվեց վերականգնել ընտրված օգտատերերին։';
$lang['admin_users_restore_success'] = 'Ընտրված օգտատերերը հաջողությամբ վերականգնվեցին։';
$lang['admin_users_search'] = 'Որոնել ըստ անվան, օգտանվան կամ էլ. հասցեի...';
$lang['admin_users_unban_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք հանել ընտրված օգտատերերի արգելափակումը։';
$lang['admin_users_unban_error'] = 'Չհաջողվեց հանել ընտրված օգտատերերի արգելափակումը։';
$lang['admin_users_unban_success'] = 'Ընտրված օգտատերերի արգելափակումը հաջողությամբ հանվեց։';
$lang['admin_users_unlock_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ապակողպել ընտրված օգտատերերին։';
$lang['admin_users_unlock_error'] = 'Չհաջողվեց ապակողպել ընտրված օգտատերերին։';
$lang['admin_users_unlock_success'] = 'Ընտրված օգտատերերը հաջողությամբ ապակողպվեցին։';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Մաքրել մատյանները';
$lang['admin_reports_clear_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք մաքրել գործողությունների մատյանը։';
$lang['admin_reports_clear_error'] = 'Չհաջողվեց մաքրել գործողությունների մատյանը։';
$lang['admin_reports_clear_success'] = 'Գործողությունների մատյանը հաջողությամբ մաքրվեց։';
$lang['admin_reports_latest_actions'] = 'Վերջին գործողությունները';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ջնջել ընտրված ֆայլերը։';
$lang['admin_media_delete_error'] = 'Չհաջողվեց ջնջել ֆայլերը։';
$lang['admin_media_delete_success'] = 'Ֆայլերը հաջողությամբ ջնջվեցին։';
$lang['admin_media_file_delete_error'] = 'Չհաջողվեց ջնջել ֆայլը։';
$lang['admin_media_file_delete_success'] = 'Ֆայլը հաջողությամբ ջնջվեց։';
$lang['admin_media_file_update_error'] = 'Չհաջողվեց թարմացնել ֆայլը։';
$lang['admin_media_file_update_success'] = 'Ֆայլը հաջողությամբ թարմացվեց։';
$lang['admin_media_search'] = 'Որոնել ըստ անվան, նկարագրության կամ ֆայլի անվան...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Ակտիվ մոդուլներ չկան։} other{<b>%s</b>-ից <b>#</b> մոդուլ ակտիվ է։}';
$lang['admin_modules_add'] = 'Ավելացնել մոդուլ';
$lang['admin_modules_delete_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ջնջել մոդուլը՝ <b>%s</b>։';
$lang['admin_modules_delete_error'] = 'Չհաջողվեց ջնջել մոդուլը։';
$lang['admin_modules_delete_success'] = 'Մոդուլը հաջողությամբ ջնջվեց։';
$lang['admin_modules_disable_all_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք անջատել բոլոր մոդուլները։';
$lang['admin_modules_disable_all_error'] = 'Չհաջողվեց անջատել բոլոր մոդուլները։';
$lang['admin_modules_disable_all_success'] = 'Բոլոր մոդուլները հաջողությամբ անջատվեցին։';
$lang['admin_modules_disable_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք անջատել մոդուլը՝ <b>%s</b>։';
$lang['admin_modules_disable_error'] = 'Չհաջողվեց ապաակտիվացնել մոդուլը։';
$lang['admin_modules_disable_success'] = 'Մոդուլը հաջողությամբ ապաակտիվացվեց։';
$lang['admin_modules_enable_all_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք միացնել բոլոր մոդուլները։';
$lang['admin_modules_enable_all_error'] = 'Չհաջողվեց միացնել բոլոր մոդուլները։';
$lang['admin_modules_enable_all_success'] = 'Բոլոր մոդուլները հաջողությամբ միացվեցին։';
$lang['admin_modules_enable_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք միացնել մոդուլը՝ <b>%s</b>։';
$lang['admin_modules_enable_error'] = 'Չհաջողվեց ակտիվացնել մոդուլը։';
$lang['admin_modules_enable_success'] = 'Մոդուլը հաջողությամբ ակտիվացվեց։';
$lang['admin_modules_install_confirm'] = 'Համոզվա՞ծ եք, որ ցանկանում եք տեղադրել այս մոդուլը։';
$lang['admin_modules_install_error'] = 'Մոդուլի տեղադրումը ձախողվեց։';
$lang['admin_modules_install_success'] = 'Մոդուլը հաջողությամբ տեղադրվեց։';
$lang['admin_modules_install_tip'] = 'Մոդուլները ձեր կայքին ավելացնում են նոր հնարավորություններ և գործառույթներ։ Դիտեք հասանելի մոդուլները <a href="%s" target="_blank" rel="noopener">մոդուլների գրացուցակում</a> կամ վերբեռնեք մեկը որպես <b>.zip</b> փաթեթ։';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Ակտիվ plugin-ներ չկան։} other{<b>%s</b>-ից <b>#</b> plugin ակտիվ է։}';
$lang['admin_plugins_add'] = 'Ավելացնել plugin';
$lang['admin_plugins_delete_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ջնջել plugin-ը՝ <b>%s</b>։';
$lang['admin_plugins_delete_error'] = 'Չհաջողվեց ջնջել plugin-ը։';
$lang['admin_plugins_delete_success'] = 'Plugin-ը հաջողությամբ ջնջվեց։';
$lang['admin_plugins_disable_all_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք անջատել բոլոր plugin-ները։';
$lang['admin_plugins_disable_all_error'] = 'Չհաջողվեց անջատել բոլոր plugin-ները։';
$lang['admin_plugins_disable_all_success'] = 'Բոլոր plugin-ները հաջողությամբ անջատվեցին։';
$lang['admin_plugins_disable_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք անջատել plugin-ը՝ <b>%s</b>։';
$lang['admin_plugins_disable_error'] = 'Չհաջողվեց ապաակտիվացնել plugin-ը։';
$lang['admin_plugins_disable_success'] = 'Plugin-ը հաջողությամբ ապաակտիվացվեց։';
$lang['admin_plugins_enable_all_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք միացնել բոլոր plugin-ները։';
$lang['admin_plugins_enable_all_error'] = 'Չհաջողվեց միացնել բոլոր plugin-ները։';
$lang['admin_plugins_enable_all_success'] = 'Բոլոր plugin-ները հաջողությամբ միացվեցին։';
$lang['admin_plugins_enable_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք միացնել plugin-ը՝ <b>%s</b>։';
$lang['admin_plugins_enable_error'] = 'Չհաջողվեց ակտիվացնել plugin-ը։';
$lang['admin_plugins_enable_success'] = 'Plugin-ը հաջողությամբ ակտիվացվեց։';
$lang['admin_plugins_install_confirm'] = 'Համոզվա՞ծ եք, որ ցանկանում եք տեղադրել այս պլագինը։';
$lang['admin_plugins_install_error'] = 'Պլագինի տեղադրումը ձախողվեց։';
$lang['admin_plugins_install_success'] = 'Պլագինը հաջողությամբ տեղադրվեց։';
$lang['admin_plugins_install_tip'] = 'Plugin-ները ընդլայնում են առկա հնարավորությունները լրացուցիչ ընտրանքներով կամ ինտեգրումներով։ Տեղադրեք <a href="%s" target="_blank" rel="noopener">plugin-ների գրացուցակից</a> կամ վերբեռնեք <b>.zip</b> ֆայլ։';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Ավելացնել թեմա';
$lang['admin_themes_delete_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ջնջել թեման՝ <b>%s</b>։';
$lang['admin_themes_delete_error'] = 'Չհաջողվեց ջնջել թեման։';
$lang['admin_themes_delete_error_active'] = 'Դուք չեք կարող ջնջել ներկայում ակտիվ թեման։';
$lang['admin_themes_delete_success'] = 'Թեման հաջողությամբ ջնջվեց։';
$lang['admin_themes_disable_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ապաակտիվացնել թեման՝ <b>%s</b>։';
$lang['admin_themes_disable_error'] = 'Չհաջողվեց ապաակտիվացնել թեման։';
$lang['admin_themes_disable_success'] = 'Թեման հաջողությամբ ապաակտիվացվեց։';
$lang['admin_themes_enable_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ակտիվացնել թեման՝ <b>%s</b>։';
$lang['admin_themes_enable_error'] = 'Չհաջողվեց ակտիվացնել թեման։';
$lang['admin_themes_enable_success'] = 'Թեման հաջողությամբ ակտիվացվեց։';
$lang['admin_themes_install_confirm'] = 'Համոզվա՞ծ եք, որ ցանկանում եք տեղադրել այս թեման։';
$lang['admin_themes_install_error'] = 'Թեմայի տեղադրումը ձախողվեց։';
$lang['admin_themes_install_success'] = 'Թեման հաջողությամբ տեղադրվեց։';
$lang['admin_themes_install_tip'] = 'Թեմաները փոխում են ձեր կայքի տեսքը և դասավորությունը։ Ընտրեք <a href="%s" target="_blank" rel="noopener">թեմաների գրադարանից</a> կամ վերբեռնեք <b>.zip</b> ֆայլ՝ ձեր սեփականը տեղադրելու համար։';
$lang['admin_themes_none_tip'] = 'Այս հավելվածը աշխատում է առանց թեմայի։ Տեղադրեք թեմա՝ հանրային ինտերֆեյսը հարմարեցնելու համար։';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Մենյուներ';
$lang['admin_menus_assign_error'] = 'Չհաջողվեց թարմացնել մենյուի դիրքերը։';
$lang['admin_menus_assign_success'] = 'Մենյուի դիրքերը հաջողությամբ թարմացվեցին։';
$lang['admin_menus_header'] = 'Հասանելի է մենյուի <b>%s</b> դիրք։';
$lang['admin_menus_location'] = 'Դիրք';
$lang['admin_menus_locations'] = 'Մենյուի դիրքեր';
$lang['admin_menus_manage'] = 'Կառավարել մենյուները';
$lang['admin_menus_menu'] = 'Նշանակված մենյու';
$lang['admin_menus_none'] = '&#151; Չկա &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Ավելացնել լեզու';
$lang['admin_languages_default_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք այս լեզուն դարձնել կայքի լռելյայն լեզու։';
$lang['admin_languages_default_error'] = 'Չհաջողվեց փոխել լռելյայն լեզուն։';
$lang['admin_languages_default_error_nochange'] = 'Այս լեզուն արդեն լռելյայն է։';
$lang['admin_languages_default_success'] = 'Լռելյայն լեզուն հաջողությամբ փոխվեց։';
$lang['admin_languages_disable_all_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք անջատել բոլոր լեզուները։';
$lang['admin_languages_disable_all_error'] = 'Չհաջողվեց անջատել բոլոր լեզուները։';
$lang['admin_languages_disable_all_success'] = 'Բոլոր լեզուները հաջողությամբ անջատվեցին։';
$lang['admin_languages_disable_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք անջատել լեզուն՝ <b>%s</b>։';
$lang['admin_languages_disable_error'] = 'Չհաջողվեց անջատել լեզուն։';
$lang['admin_languages_disable_error_default'] = 'Լռելյայն լեզուն հնարավոր չէ անջատել։';
$lang['admin_languages_disable_error_nochange'] = 'Այս լեզուն արդեն անջատված է։';
$lang['admin_languages_disable_success'] = 'Լեզուն հաջողությամբ անջատվեց։';
$lang['admin_languages_enable_all_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք միացնել բոլոր լեզուները։';
$lang['admin_languages_enable_all_error'] = 'Չհաջողվեց միացնել բոլոր լեզուները։';
$lang['admin_languages_enable_all_success'] = 'Բոլոր լեզուները հաջողությամբ միացվեցին։';
$lang['admin_languages_enable_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք միացնել լեզուն՝ <b>%s</b>։';
$lang['admin_languages_enable_error'] = 'Չհաջողվեց միացնել լեզուն։';
$lang['admin_languages_enable_error_nochange'] = 'Այս լեզուն արդեն միացված է։';
$lang['admin_languages_enable_success'] = 'Լեզուն հաջողությամբ միացվեց։';
$lang['admin_languages_install_confirm'] = 'Համոզվա՞ծ եք, որ ցանկանում եք տեղադրել այս լեզուն։';
$lang['admin_languages_install_error'] = 'Լեզվի տեղադրումը ձախողվեց։';
$lang['admin_languages_install_success'] = 'Լեզուն հաջողությամբ տեղադրվեց։';
$lang['admin_languages_install_tip'] = 'Լեզուները ավելացնում են թարգմանություններ ձեր կայքի միջերեսի և բովանդակության համար։ Դիտեք հասանելի լեզուները <a href="%s" target="_blank" rel="noopener">լեզուների գրացուցակում</a> կամ վերբեռնեք <b>.zip</b> փաթեթ՝ ձեր սեփականը տեղադրելու համար։';
$lang['admin_languages_tip'] = 'Միացրեք, անջատեք և սահմանեք կայքի լռելյայն լեզուն։ Միացված լեզուները հասանելի են կայքի այցելուներին։';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Փաթեթն արդեն գոյություն ունի։';
$lang['package_archive_download_failed'] = 'Չհաջողվեց ներբեռնել փաթեթի արխիվը։';
$lang['package_backup_create_error'] = 'Չհաջողվեց ստեղծել փաթեթի պահուստային պատճեն։';
$lang['package_backup_dir_failed'] = 'Չհաջողվեց ստեղծել պահուստային պանակը՝ %s';
$lang['package_backup_missing'] = 'Պահուստային ֆայլը գոյություն չունի։';
$lang['package_backup_path_error'] = 'Հնարավոր չէ որոշել պահուստային ֆայլի ուղին։';
$lang['package_backup_request_invalid'] = 'Անվավեր պահուստային հարցում։';
$lang['package_backup_restore_error'] = 'Չհաջողվեց վերականգնել փաթեթի պահուստային պատճենը։';
$lang['package_catalog_type_unknown'] = 'Կատալոգի անհայտ տեսակ։';
$lang['package_checksum_error'] = 'Փաթեթի ստուգաթերթի (checksum) ստուգումը ձախողվեց։';
$lang['package_copy_files_error'] = 'Չհաջողվեց պատճենել փաթեթի ֆայլերը նշանակման վայր։';
$lang['package_copy_updates_error'] = 'Չհաջողվեց պատճենել թարմացման ֆայլերը նշանակման վայր։';
$lang['package_dest_dir_failed'] = 'Չհաջողվեց ստեղծել նպատակային պանակը՝ %s';
$lang['package_destination_error'] = 'Հնարավոր չէ որոշել փաթեթի նշանակման վայրը։';
$lang['package_download_dir_failed'] = 'Չհաջողվեց ստեղծել ներբեռնման պանակը՝ %s';
$lang['package_download_empty'] = 'Փաթեթի ներբեռնումը վերադարձրել է դատարկ պատասխան։';
$lang['package_download_request_invalid'] = 'Փաթեթի ներբեռնման անվավեր հարցում։';
$lang['package_extract_failed'] = 'Չհաջողվեց բացել ZIP արխիվը՝ %s';
$lang['package_invalid_lang_files'] = 'Անվավեր լեզու. բացակայում են հավելվածի պահանջվող լեզվական ֆայլերը։';
$lang['package_invalid_lang_structure'] = 'Անվավեր լեզու. բացակայում են admin և/կամ ci3 գրացուցակները։';
$lang['package_invalid_missing_info'] = 'Անվավեր %s. բացակայում է "info.php" ֆայլը։';
$lang['package_invalid_module_structure'] = 'Անվավեր մոդուլ. բացակայում են config և/կամ controllers պահանջվող գրացուցակները։';
$lang['package_invalid_plugin_boot'] = 'Անվավեր հավելում (plugin). բացակայում է "boot.php"-ն։';
$lang['package_invalid_plugin_contents'] = 'Անվավեր հավելում (plugin). հավելումները չեն կարող պարունակել controllers կամ views։';
$lang['package_invalid_theme_boot'] = 'Անվավեր թեմա. բացակայում է "boot.php"-ն։';
$lang['package_invalid_theme_views'] = 'Անվավեր թեմա. views գրացուցակը բացակայում է։';
$lang['package_no_root_dir'] = 'Փաթեթը չունի արմատային գրացուցակ։';
$lang['package_not_downloadable'] = 'Փաթեթը հանրային ներբեռնման ենթակա չէ։';
$lang['package_not_in_registry'] = 'Փաթեթը հասանելի չէ հանրային գրանցամատյանում։';
$lang['package_request_invalid'] = 'Անվավեր փաթեթի հարցում։';
$lang['package_rollback_request_invalid'] = 'Վերարկման անվավեր հարցում։';
$lang['package_root_mismatch'] = 'Փաթեթի արխիվի արմատային գրացուցակը չի համապատասխանում %s-ին';
$lang['package_single_root_required'] = 'Փաթեթը պետք է պարունակի ακριβώς մեկ արմատային գրացուցակ։';
$lang['package_source_error'] = 'Հնարավոր չէ որոշել փաթեթի աղբյուրը։';
$lang['package_system_core_restricted'] = 'Համակարգային բաղադրիչները չեն կարող տեղադրվել որպես փաթեթներ։';
$lang['package_temp_dir_failed'] = 'Չհաջողվեց ստեղծել ժամանակավոր պանակը՝ %s';
$lang['package_type_unknown'] = 'Փաթեթի անհայտ տեսակ։';
$lang['package_update_request_invalid'] = 'Փաթեթի թարմացման անվավեր հարցում։';
$lang['package_update_root_mismatch'] = 'Թարմացման արխիվի արմատային գրացուցակը չի համապատասխանում %s-ին։';
$lang['package_upload_dir_failed'] = 'Չհաջողվեց ստեղծել վերբեռնման պանակը՝ %s';
$lang['package_url_invalid'] = 'Փաթեթի բաշխման անվավեր հղում։';
$lang['package_write_failed'] = 'Չհաջողվեց գրել փաթեթը հետևյալ հասցեով՝ %s';
$lang['package_zip_not_found'] = 'Փաթեթի ZIP ֆայլը գոյություն չունի՝ %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Հասանելի են նոր թարմացումներ։';
$lang['update_backup_error'] = 'Չհաջողվեց ստեղծել առկա փաթեթի պահուստավորում։ Թարմացումը չեղարկվեց։';
$lang['update_check_disabled'] = 'Թարմացումների ավտոմատ ստուգումները անջատված են։ Միացրեք դրանք՝ թարմացումները տեսնելու համար։';
$lang['update_check_error'] = 'Այս պահին չհաջողվեց գործարկել թարմացումների ստուգումը։';
$lang['update_check_success'] = 'Թարմացումների ստուգումը հաջողությամբ ավարտվեց։';
$lang['update_install_error'] = 'Փաթեթը հնարավոր չեղավ տեղադրել։ Պահպանվեց ընթացիկ տարբերակը։';
$lang['update_install_success'] = 'Փաթեթը հաջողությամբ թարմացվեց ամենավերջին տարբերակին։';
$lang['update_interval_3days'] = 'Յուրաքանչյուր 3 օրը մեկ';
$lang['update_interval_biweekly'] = 'Յուրաքանչյուր 2 շաբաթը մեկ';
$lang['update_interval_daily'] = 'Ամեն օր';
$lang['update_interval_monthly'] = 'Ամիսը մեկ';
$lang['update_interval_weekly'] = 'Շաբաթը մեկ';
$lang['update_not_available'] = 'Ձեր կայքը արդիական է։';
$lang['update_rollback_error'] = 'Չհաջողվեց վերականգնել նախորդ տարբերակը։ Կարող է պահանջվել ձեռքով միջամտություն։';
$lang['update_rollback_success'] = 'Նախորդ տարբերակը հաջողությամբ վերականգնվեց։';
$lang['updates_available'] = 'Հասանելի թարմացումներ';
$lang['updates_check_now'] = 'Ստուգել հիմա';
$lang['updates_check_now_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք հիմա ստուգել թարմացումները։';
$lang['updates_current_version'] = 'Ընթացիկ տարբերակ';
$lang['updates_enable'] = 'Միացնել թարմացումները';
$lang['updates_last_check'] = 'Վերջին ստուգումը՝ %s';
$lang['updates_latest_version'] = 'Վերջին տարբերակ';
$lang['updates_next_check'] = 'Հաջորդ պլանավորված ստուգումը՝ %s';
$lang['updates_previous_version'] = 'Նախորդ տարբերակ';
$lang['updates_recent'] = 'Վերջերս թարմացված';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Չհաջողվեց արգելափակել նշված IP հասցեն։';
$lang['admin_firewall_ban_success'] = 'IP հասցեն հաջողությամբ արգելափակվեց։';
$lang['admin_firewall_block_ip'] = 'Արգելափակել IP հասցեն';
$lang['admin_firewall_delete_confirm'] = 'Վստա՞հ եք, որ ցանկանում եք ապաշրջափակել ընտրված IP հասցեները։';
$lang['admin_firewall_delete_error'] = 'Չհաջողվեց ապաշրջափակել ընտրված IP հասցեները։';
$lang['admin_firewall_delete_success'] = 'Ընտրված IP հասցեները հաջողությամբ ապաշրջափակվեցին։';
$lang['admin_firewall_duration'] = 'Արգելափակման տևողություն';
$lang['admin_firewall_permanent'] = 'Մշտական';
$lang['admin_firewall_reason'] = 'Արգելափակման պատճառ';
$lang['admin_firewall_tip'] = 'Դիտեք և կառավարեք firewall-ի կողմից կրկնվող խախտումների կամ կասկածելի ակտիվության պատճառով արգելափակված IP հասցեները։';

// Settings
$lang['404_ban_duration'] = '404 արգելափակման տևողություն';
$lang['404_threshold'] = '404 խախտումների սահմանաչափ';
$lang['uri_ban_duration'] = 'URI արգելափակման տևողություն';
$lang['uri_strike_threshold'] = 'URI խախտումների սահմանաչափ';
