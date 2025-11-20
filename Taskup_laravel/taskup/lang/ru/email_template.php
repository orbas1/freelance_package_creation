<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Email templating languages Lines
    |--------------------------------------------------------------------------
    |
    */

    'email_title'                                   => 'Заголовок письма',
    'role_type'                                     => 'Тип роли',
    'all_templates'                                 => 'Шаблоны писем',
    'add_email_template'                            => 'Добавить новый шаблон',
    'update_email_template'                         => 'Обновить шаблон',
    'select_template'                               => 'Выберите шаблон',
    'registration_title'                            => 'Регистрационное письмо',
    'buyer'                                         => 'Покупатель',        
    'seller'                                        => 'Продавец',        
    'admin'                                         => 'Администратор',        
    'verfiy_email'                                  => 'Подтверждение адреса электронной почты',
    'login_url'                                     => '«Вход»',
    'ridirect_login'                                => 'Перенаправление на вход',
    'set_email_status'                              => 'Установить статус этого письма как',
    'reset_password_txt'                            => 'Сброс пароля',

    // =========== Email general translation ==================== \\ 
    'email_setting_variable'                        => 'Переменные настройки email',
    'greeting'                                      => 'Текст приветствия',
    'email_content'                                 => 'Содержание письма',
    'subject'                                       => 'Тема письма',


    // =========================== User Registration by admin notify user  =============== \\
    'user_created_title'            => 'Создан новый пользователь',

    'user_created_variables'        => '{{user_name}} — Для отображения имени пользователя.<br> {{site_name}} — Для отображения названия сайта. <br> {{user_email}} — Для отображения email пользователя. {{password}} — Для отображения пароля пользователя.',
    'user_created_subject'          => 'Создан новый аккаунт',
    'user_created_greeting'         => 'Привет, {{user_name}},',
    'user_created_content'          => 'Отличные новости! Ваш новый аккаунт был создан администратором {{site_name}} <br> Пожалуйста, войдите с использованием указанных ниже данных. <br>Адрес электронной почты:<br>{{user_email}}<br>Пароль:<br>{{password}}<br>С уважением,<br>{{admin_name}}',

    // ===========================User Registration Email =============== \\
    'buyer_registration_email_variable'     => '{{user_name}} — Для отображения имени пользователя.<br>{{user_email}} — Для отображения email пользователя.<br>{{user_password}} — Для отображения пароля пользователя.<br>{{site_name}} — Для отображения названия сайта.<br>{{verification_link}} — Для отображения ссылки на подтверждение',        
    'buyer_registration_subject'            => 'Спасибо за регистрацию на {{site_name}}',        
    'buyer_registration_greeting'           => 'Привет, {{user_name}}',        
    'buyer_registration_content'            => 'Спасибо за регистрацию на {{site_name}}. Пожалуйста, нажмите ниже, чтобы подтвердить ваш email <br> {{verification_link}}',


    'seller_registration_email_variable'    => '{{user_name}} — Для отображения имени пользователя.<br>{{user_email}} — Для отображения email пользователя.<br>{{user_password}} — Для отображения пароля пользователя.<br>{{site_name}} — Для отображения названия сайта.<br>{{verification_link}} — Для отображения ссылки на подтверждение',        
    'seller_registration_subject'           => 'Спасибо за регистрацию на {{site_name}}', 
    'seller_registration_greeting'          => 'Привет, {{user_name}}',
    'seller_registration_content'           => 'Спасибо за регистрацию на {{site_name}}. Пожалуйста, нажмите ниже, чтобы подтвердить ваш email <br> {{verification_link}}',


    'user_registerd_to_admin_variable'      => '{{user_name}} — Для отображения имени пользователя.<br>{{user_email}} — Для отображения email пользователя.',
    'user_registerd_to_admin_subject'       => 'Спасибо за регистрацию на {{site_name}}', 
    'user_registerd_to_admin_greeting'      => 'Привет,',
    'user_registerd_to_admin_content'       => 'На сайте зарегистрировался новый пользователь с именем <br> "{{user_name}}" и email-адресом "{{user_email}}"',


    //========================= Account approval request =========================\\
    'account_approval_title'                    => 'Запрос на подтверждение учетной записи',
    
    'buyer_account_approval_variables'          => '{{user_name}} — Для отображения имени пользователя.<br>{{user_email}} — Для отображения email пользователя.<br>{{user_password}} — Для отображения пароля пользователя.<br>{{site_name}} — Для отображения названия сайта.',
    'buyer_account_approval_subject'            => 'Спасибо за регистрацию на {{site_name}}',
    'buyer_account_approval_greeting'           => 'Привет, {{user_name}},',
    'buyer_account_approval_content'            => 'Спасибо за регистрацию на {{site_name}}. Ваша учетная запись будет подтверждена после проверки.',

    
    'seller_account_approval_variables'         => '{{user_name}} — Для отображения имени пользователя.<br>{{user_email}} — Для отображения email пользователя.<br>{{user_password}} — Для отображения пароля пользователя.<br>{{site_name}} — Для отображения названия сайта.',
    'seller_account_approval_subject'           => 'Спасибо за регистрацию на {{site_name}}',
    'seller_account_approval_greeting'          => 'Привет, {{user_name}},',
    'seller_account_approval_content'           => 'Спасибо за регистрацию на {{site_name}}. Ваша учетная запись будет подтверждена после проверки.',

    'admin_account_approval_variables'          => '{{user_email}} — Для отображения email пользователя.<br>{{user_password}} — Для отображения пароля пользователя.<br>{{site_name}} — Для отображения названия сайта.<br>{{login_url}} — URL для входа пользователя.',
    'admin_account_approval_subject'            => 'Спасибо за регистрацию на {{site_name}}',
    'admin_account_approval_greeting'           => 'Привет,',
    'admin_account_approval_content'            => 'На сайте зарегистрировался новый пользователь с именем {{user_name}} и email-адресом {{user_email}}. <br> Регистрация ожидает подтверждения. Вы можете войти по ссылке {{login_url}} в админ-панель для подтверждения учетной записи.',

    
    //========================= Account approved =========================\\ (done)
    'account_approved_title'                    => 'Учетная запись подтверждена',

    'buyer_account_approved_variables'          => '{{user_name}} — Для отображения имени пользователя.<br>{{user_email}} — Для отображения email пользователя.<br>{{site_name}} — Для отображения названия сайта.',
    'buyer_account_approved_subject'            => 'Учетная запись подтверждена.',
    'buyer_account_approved_greeting'           => 'Привет, {{user_name}},',
    'buyer_account_approved_content'            => 'Поздравляем! Ваша учетная запись была подтверждена администратором.',


    'seller_account_approved_variables'         => '{{user_name}} — Для отображения имени пользователя.<br>{{user_email}} — Для отображения email пользователя.<br>{{site_name}} — Для отображения названия сайта.',
    'seller_account_approved_subject'           => 'Учетная запись подтверждена.',
    'seller_account_approved_greeting'          => 'Привет, {{user_name}},',
    'seller_account_approved_content'           => 'Поздравляем! Ваша учетная запись была подтверждена администратором.',


    //=========================== Reset password ================================\\ (Done)

    'reset_password'                                => 'Сброс пароля',

    'buyer_reset_password_variables'                => '{{account_email}} — Для отображения email пользователя. <br> {{reset_link}} — Для отображения ссылки на сброс пароля.',
    'buyer_reset_password_subject'                  => 'Сброс пароля.',
    'buyer_reset_password_greeting'                 => 'Привет,',
    'buyer_reset_password_content'                  => 'Кто-то запросил сброс пароля для следующей учетной записи: <br> Адрес электронной почты: {{account_email}} <br>Если это была ошибка, просто проигнорируйте это письмо и ничего не произойдет.<br>Чтобы сбросить пароль, нажмите на ссылку ниже:<br>{{reset_link}}',


    'seller_reset_password_variables'               => '{{account_email}} — Для отображения email пользователя. <br> {{reset_link}} — Для отображения ссылки на сброс пароля.',
    'seller_reset_password_subject'                 => 'Сброс пароля.',
    'seller_reset_password_greeting'                => 'Привет,',
    'seller_reset_password_content'                 => 'Кто-то запросил сброс пароля для следующей учетной записи: <br> Адрес электронной почты: {{account_email}} <br>Если это была ошибка, просто проигнорируйте это письмо и ничего не произойдет.<br>Чтобы сбросить пароль, нажмите на ссылку ниже:<br>{{reset_link}}',

    //===================================== Account identity request to Admin - for admin ====================\\ (done)
    'accout_identity_verification'                  => 'Проверка подлинности учетной записи',

    'identity_verification_variables'               => '{{user_name}} — Для отображения имени пользователя.<br> {{login_url}} — URL для входа пользователя',
    'identity_verification_subject'                 => 'Новый запрос на проверку подлинности учетной записи',
    'identity_verification_greeting'                => 'Привет,',
    'identity_verification_content'                 => '{{user_name}} загрузил документ для проверки подлинности учетной записи. Проверка учетной записи ожидает подтверждения. Вы можете перейти по ссылке {{login_url}}, чтобы подтвердить проверку подлинности.',

    //===================================== Account identity rejection ====================\\ (done)
    'accout_identity_rejection'                     => 'Отказ в проверке подлинности учетной записи',

    'buyer_identity_rejection_variables'            => '{{user_name}} — Для отображения имени пользователя.<br>{{user_link}} — Для отображения ссылки пользователя, отправившего запрос на проверку подлинности.<br>{{admin_message}} — Для отображения сообщения администратора о причине отказа.<br>{{user_email}} — Для отображения email пользователя, отправившего запрос на проверку подлинности.',
    'buyer_identity_rejection_subject'              => 'Ваш запрос на проверку подлинности учетной записи был отклонен',
    'buyer_identity_rejection_greeting'             => 'Привет, {{user_name}},',
    'buyer_identity_rejection_content'              => 'Ваш загруженный документ для проверки подлинности учетной записи был отклонен.<br>{{admin_message}}',


    'seller_identity_rejection_variables'           => '{{user_name}} — Для отображения имени пользователя.<br>{{user_link}} — Для отображения ссылки пользователя, отправившего запрос на проверку подлинности.<br>{{admin_message}} — Для отображения сообщения администратора о причине отказа.<br>{{user_email}} — Для отображения email пользователя, отправившего запрос на проверку подлинности.',
    'seller_identity_rejection_subject'             => 'Ваш запрос на проверку подлинности учетной записи был отклонен',
    'seller_identity_rejection_greeting'            => 'Привет, {{user_name}},',
    'seller_identity_rejection_content'             => 'Ваш загруженный документ для проверки подлинности учетной записи был отклонен.<br>{{admin_message}}',

    
    //====================================== Account identity approved ========================= \\ (Done)
    'account_identity_approved'                     => 'Подтверждение подлинности учетной записи',

    'buyer_identity_approved_variables'             => '{{user_name}} — Для отображения имени пользователя.<br>{{user_link}} — Для отображения ссылки пользователя, отправившего запрос на проверку подлинности.<br>{{user_email}} — Для отображения email пользователя, отправившего запрос на проверку подлинности.',
    'buyer_identity_approved_subject'               => 'Ваш запрос на проверку подлинности учетной записи был одобрен',
    'buyer_identity_approved_greeting'              => 'Привет, {{user_name}},',
    'buyer_identity_approved_content'               => 'Поздравляем!<br>Ваши предоставленные документы для проверки подлинности учетной записи были одобрены.',

    'seller_identity_approved_variables'            => '{{user_name}} — Для отображения имени пользователя.<br>{{user_link}} — Для отображения ссылки пользователя, отправившего запрос на проверку подлинности.<br>{{user_email}} — Для отображения email пользователя, отправившего запрос на проверку подлинности.',
    'seller_identity_approved_subject'              => 'Ваш запрос на проверку подлинности учетной записи был одобрен',
    'seller_identity_approved_greeting'             => 'Привет, {{user_name}},',
    'seller_identity_approved_content'              => 'Поздравляем!<br>Ваши предоставленные документы для проверки подлинности учетной записи были одобрены.',


    // ============================ When new dispute is created by buyer to seller ============ \\ (Done)
    'seller_dispute_received'                       => 'Спор создан покупателем для продавца',

    'seller_dispute_received_variables'             => '{{user_name}} — Для отображения имени продавца.<br> {{buyer_name}} — Для отображения имени покупателя.<br> {{project_title}} — Для отображения названия проекта.<br> {{buyer_comments}} — Для отображения комментариев покупателя. <br/> {{login_url}} — URL для входа пользователя',
    'seller_dispute_received_subject'               => 'Получен новый запрос на возврат средств',
    'seller_dispute_received_greeting'              => 'Привет, {{user_name}}',
    'seller_dispute_received_content'               => 'Вы получили запрос на возврат средств от {{buyer_name}} по проекту {{project_title}}. <br>{{buyer_comments}} </br> Вы можете одобрить или отклонить з',

    // ============================ When dispute approved by seller to buyer ============ \\ (Done)
    'seller_approved_dispute_req'                   => 'Возврат средств одобрен продавцом',

    'seller_approved_dispute_req_variables'         => '{{user_name}} — Для отображения имени пользователя. <br> {{sender_name}} — Для отображения имени продавца.<br> {{project_title}} — Для отображения названия проекта.',
    'seller_approved_dispute_req_subject'           => 'Возврат средств одобрен',
    'seller_approved_dispute_req_greeting'          => 'Привет, {{user_name}},',
    'seller_approved_dispute_req_content'           => "Поздравляем! <br> Ваш запрос на возврат средств был одобрен {{sender_name}} для проекта “{{project_title}}”",

    // ============================ When dispute declined by seller to buyer ============ \\ (Done)
    'seller_decline_dispute'                        => 'Отказ возврата средств от продавца',

    'seller_decline_dispute_variables'              => '{{user_name}} — Для отображения имени пользователя.<br> {{sender_name}} — Для отображения имени отправителя.<br> {{project_title}} — Для отображения названия проекта. <br/> {{login_url}} — URL для входа пользователя',
    'seller_decline_dispute_subject'                => 'Отказ возврата средств',
    'seller_decline_dispute_greeting'               => 'Привет, {{user_name}}',
    'seller_decline_dispute_content'                => "Ваш запрос на возврат средств был отклонен {{sender_name}} для проекта “{{project_title}}”<br>Если вы считаете, что это был обоснованный запрос, вы можете подать жалобу на странице активности текущего проекта. <br> {{login_url}}",

    // ============================ comment on refund request ============ \\ (Done)
    'comment_on_dispute'                            => 'Комментарии к возврату средств',

    'seller_dispute_comment_variables'              => '{{user_name}} — Для отображения имени пользователя.<br> {{sender_name}} — Для отображения имени отправителя.<br> {{project_title}} — Для отображения названия проекта. <br> {{sender_comments}} — Для отображения комментария. <br> {{login_url}} — URL для входа пользователя.',
    'seller_dispute_comment_subject'                => 'Новый комментарий к запросу на возврат средств',
    'seller_dispute_comment_greeting'               => 'Привет, {{user_name}}',
    'seller_dispute_comment_content'                => "Пользователь «{{sender_name}}» оставил комментарий к запросу на возврат средств для проекта «{{project_title}}»<br>{{sender_comments}} <br> {{login_url}}",

    'buyer_dispute_comment_variables'               => '{{user_name}} — Для отображения имени пользователя.<br> {{sender_name}} — Для отображения имени отправителя.<br> {{project_title}} — Для отображения названия проекта. <br> {{sender_comments}} — Для отображения комментария. <br> {{login_url}} — URL для входа пользователя.',
    'buyer_dispute_comment_subject'                 => 'Новый комментарий к запросу на возврат средств',
    'buyer_dispute_comment_greeting'                => 'Привет, {{user_name}}',
    'buyer_dispute_comment_content'                 => "Пользователь «{{sender_name}}» оставил комментарий к запросу на возврат средств для проекта «{{project_title}}»<br>{{sender_comments}} <br> {{login_url}}",

// ============================ new dispute received to admin ============ \\ (Done)
    'admin_received_dispute'                        => 'Спор получен администратором',

    'admin_received_dispute_variables'              => "{{project_title}} — Для отображения названия проекта.<br> {{type}} — Для отображения типа, например 'project' или 'gig'",
    'admin_received_dispute_subject'                => 'Получен новый спор',
    'admin_received_dispute_greeting'               => 'Привет,',
    'admin_received_dispute_content'                => "Был создан новый спор против {{type}} «{{project_title}}»",


// ============================ dispute refunded in hourly project by admin to winner  ============ \\ (Done)
    'admin_refund_hourly_dispute_to_winner'         => 'Спор по почасовому проекту в пользу победителя',

    'hourly_dispute_favour_in_seller_variables'     => '{{user_name}} — Для отображения имени продавца.',
    'hourly_dispute_favour_in_seller_subject'       => 'Спор разрешен',
    'hourly_dispute_favour_in_seller_greeting'      => 'Привет, {{user_name}},',
    'hourly_dispute_favour_in_seller_content'       => "Поздравляем! <br> Мы рассмотрели вопрос возврата средств и спор и разрешили спор в вашу пользу. Мы спорили проект.",

    'hourly_dispute_favour_in_buyer_variables'      => '{{user_name}} — Для отображения имени покупателя.',
    'hourly_dispute_favour_in_buyer_subject'        => 'Спор разрешен',
    'hourly_dispute_favour_in_buyer_greeting'       => 'Привет, {{user_name}},',
    'hourly_dispute_favour_in_buyer_content'        => "Поздравляем! <br> Мы рассмотрели вопрос возврата средств и спор и разрешили спор в вашу пользу. Мы спорили проект.",

// ============================ dispute refunded in fixed and milestone project by admin to winner  ============ \\ (Done)
    'admin_refund_dispute_to_winner'                => 'Спор по проекту в пользу победителя',

    'dispute_favour_in_seller_variables'            => '{{user_name}} — Для отображения имени продавца.',
    'dispute_favour_in_seller_subject'              => 'Спор разрешен',
    'dispute_favour_in_seller_greeting'             => 'Привет, {{user_name}},',
    'dispute_favour_in_seller_content'              => "Поздравляем! <br> Мы рассмотрели вопрос возврата средств и спор и разрешили спор в вашу пользу. Мы спорили проект и сумма была добавлена на ваш счет.",

    'dispute_favour_in_buyer_variables'             => '{{user_name}} — Для отображения имени покупателя.',
    'dispute_favour_in_buyer_subject'               => 'Спор разрешен',
    'dispute_favour_in_buyer_greeting'              => 'Привет, {{user_name}},',
    'dispute_favour_in_buyer_content'               => "Поздравляем! <br> Мы рассмотрели вопрос возврата средств и спор и разрешили спор в вашу пользу. Мы спорили проект и сумма была добавлена на ваш счет",

    // ============================ dispute refunded by admin to not in favour  ============ \\ (Done)
    'admin_dispute_not_in_favour'                   => 'Спор по проекту не в вашу пользу',

    'dispute_not_in_favour_seller_variables'        => '{{user_name}} — Для отображения имени покупателя. <br> {{dispute_link}} — Ссылка на спор',
    'dispute_not_in_favour_seller_subject'          => 'Спор разрешен',
    'dispute_not_in_favour_seller_greeting'         => 'Привет, {{user_name}},',
    'dispute_not_in_favour_seller_content'          => "Ого! Мы не одобрили запрос на возврат средств по спору в вашу пользу.<br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть детали спора.<br>{{dispute_link}}",

    'dispute_not_in_favour_buyer_variables'         => '{{user_name}} — Для отображения имени покупателя. <br> {{dispute_link}} — Ссылка на спор',
    'dispute_not_in_favour_buyer_subject'           => 'Спор разрешен',
    'dispute_not_in_favour_buyer_greeting'          => 'Привет, {{user_name}},',
    'dispute_not_in_favour_buyer_content'           => "Ого! Мы не одобрили запрос на возврат средств по спору в вашу пользу.<br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть детали спора.<br>{{dispute_link}}",


    // ============================ package purchase - for seller and buyer ============ \\ (Done)
    'package_purchase'                              => 'Покупка пакета услуг',

    'package_purchase_by_seller_variables'          => '{{user_name}} — Для отображения имени пользователя.<br>{{package_name}} — Для отображения названия пакета.',
    'package_purchase_by_seller_subject'            => 'Спасибо за покупку пакета',
    'package_purchase_by_seller_greeting'           => 'Привет, {{user_name}},',
    'package_purchase_by_seller_content'            => 'Спасибо за покупку пакета “{{package_name}}”<br>Теперь вы можете размещать услуги и получать заказы.',

    'package_purchase_by_buyer_variables'           => '{{user_name}} — Для отображения имени пользователя.<br>{{package_name}} — Для отображения названия пакета.',
    'package_purchase_by_buyer_subject'             => 'Спасибо за покупку пакета',
    'package_purchase_by_buyer_greeting'            => 'Привет, {{user_name}},',
    'package_purchase_by_buyer_content'             => 'Спасибо за покупку пакета “{{package_name}}”<br>Теперь вы можете создавать задания.',

    'package_purchase_to_admin_variables'           => '{{user_name}} — Для отображения имени пользователя.<br>{{package_name}} — Для отображения названия пакета.<br>{{purchaser_name}} — Для отображения имени покупателя.<br>{{current_date}} — Для отображения даты покупки.',
    'package_purchase_to_admin_subject'             => 'Новая покупка пакета “{{package_name}}” от пользователя “{{purchaser_name}}”',
    'package_purchase_to_admin_greeting'            => 'Привет,',
    'package_purchase_to_admin_content'             => 'Пользователь “{{purchaser_name}}” приобрел новый пакет “{{package_name}}” {{current_date}}',


    // ============================ send message on project conversation ============ \\ (Done)
    'project_conversation'                          => 'Переписка по проекту',

    'seller_project_conv_var'                       => '{{user_name}} — Для отображения имени пользователя.<br>{{sender_name}} — Для отображения имени отправителя.<br>{{project_title}} — Для отображения названия проекта. <br>{{login_url}} — URL для входа пользователя.',
    'seller_project_conv_subj'                      => 'Получено новое сообщение',
    'seller_project_conv_greeting'                  => 'Привет, {{user_name}}',
    'seller_project_conv_cont'                      => "{{sender_name}} отправил вам новое сообщение по проекту “{{project_title}}”.<br>Нажмите на ссылку ниже, чтобы прочитать сообщение.<br>{{login_url}}",

    'buyer_project_conv_var'                        => '{{user_name}} — Для отображения имени пользователя.<br>{{sender_name}} — Для отображения имени отправителя.<br>{{project_title}} — Для отображения названия проекта. <br>{{login_url}} — URL для входа пользователя.',
    'buyer_project_conv_subj'                       => 'Получено новое сообщение',
    'buyer_project_conv_greeting'                   => 'Привет, {{user_name}}',
    'buyer_project_conv_cont'                       => "{{sender_name}} отправил вам новое сообщение по проекту “{{project_title}}”.<br>Нажмите на ссылку ниже, чтобы прочитать сообщение.<br>{{login_url}}",
     
    // ============================ Project submission when verification by admin and sent to buyer - for buyer and admin(Done) ============ \\ (Done)
    'project_posted'                                => 'Подача проекта',

    'project_posted_by_buyer_variables'             => '{{user_name}} — Для отображения имени пользователя.',
    'project_posted_by_buyer_subject'               => 'Подача проекта',
    'project_posted_by_buyer_greeting'              => 'Привет, {{user_name}},',
    'project_posted_by_buyer_content'               => 'Спасибо за подачу проекта, мы рассмотрим и утвердим его после проверки.',

    'project_posted_to_admin_variables'             => '{{user_name}} — Для отображения имени пользователя.<br>{{project_link}} — URL предварительного просмотра проекта.',
    'project_posted_to_admin_subject'               => 'Новая подача проекта',
    'project_posted_to_admin_greeting'              => 'Привет,',
    'project_posted_to_admin_content'               => 'Новый проект подан пользователем “{{user_name}}” и ожидает утверждения. Пожалуйста, перейдите по ссылке ниже для получения дополнительной информации.<br>{{project_link}}',

    // ============================ Project invite request from buyer to seller - for seller ============ \\ (Done)
    'project_invite_request'                        => 'Отправлен запрос на приглашение в проект',

    'project_invite_request_variables'              => '{{user_name}} — Для отображения имени пользователя. <br> {{project_title}} — Для отображения названия проекта.',
    'project_invite_request_subject'                => 'Вы получили приглашение в проект',
    'project_invite_request_greeting'               => 'Привет, {{user_name}},',
    'project_invite_request_content'                => 'Поздравляем! Вы получили новое приглашение в проект “{{project_title}}”.',

    // ============================ Project approved acknowledgement to buyer - for buyer ============ \\ (Done)
    'project_approved'                              => 'Проект утвержден',

    'project_approved_to_buyer_variables'           => '{{user_name}} — Для отображения имени пользователя.<br> {{project_title}} — Для отображения названия проекта.<br>{{project_link}} — Для отображения ссылки на проект.',
    'project_approved_to_buyer_subject'             => 'Проект утвержден',
    'project_approved_to_buyer_greeting'            => 'Привет, {{user_name}},',
    'project_approved_to_buyer_content'             => 'Ура! Ваш проект “{{project_title}}” был утвержден.<br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть проект.<br>{{project_link}}',

    // ============================ proposal submit request - for buyer ============ \\ (Doen)
    'proposal_approve_request'                      => 'Подать предложение',

    'proposal_approve_request_variables'            => '{{user_name}} — Для отображения имени пользователя.<br> {{seller_name}} — Для отображения имени продавца.<br> {{project_title}} — Для отображения названия проекта.<br>{{proposal_link}} — Для отображения ссылки на предложение.',
    'proposal_approve_request_subject'              => 'Подать предложение',
    'proposal_approve_request_greeting'             => 'Привет, {{user_name}},',
    'proposal_approve_request_content'              => '{{seller_name}} подал новое предложение на "{{project_title}}". <br> Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть предложение. <br> {{proposal_link}}',


    // ============================ seller complete project contract request to buyer - for buyer ============ \\ (Doen)
    'project_complete_request'                  => 'Завершение проекта',

    'project_complete_request_variables'        => '{{user_name}} — Для отображения имени пользователя.<br> {{seller_name}} — Для отображения имени продавца.<br> {{project_title}} — Для отображения названия проекта.<br>{{project_activity_link}} — Для отображения ссылки на активность проекта.',
    'project_complete_request_subject'          => 'Запрос на завершение проекта',
    'project_complete_request_greeting'         => 'Привет, {{user_name}},',
    'project_complete_request_content'          => '{{seller_name}} подал запрос на завершение контракта по проекту "{{project_title}}". <br> Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть активность проекта. <br> {{project_activity_link}}',


    // ============================ seller complete project contract request declined from buyer - for seller ============ \\ (Doen)
    'project_complete_req_declined'                 => 'Запрос на завершение проекта отклонен',

    'proj_complete_req_declined_variables'          => '{{user_name}} — Для отображения имени пользователя.<br>{{project_title}} — Для отображения названия проекта.<br>{{declined_reason}} - Для отображения причины отказа.<br>{{project_activity_link}} — Для отображения ссылки на активность проекта.',
    'proj_complete_req_declined_subject'            => 'Отказано в запросе на завершение проекта',
    'proj_complete_req_declined_greeting'           => 'Привет, {{user_name}},',
    'proj_complete_req_declined_content'            => 'Ваш запрос на завершение контракта по проекту "{{project_title}}" был отклонен.<br>{{declined_reason}}<br> Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть активность проекта.<br>{{project_activity_link}}',


    // ============================ Milestone project complete from buyer - for seller ============ \\ (Doen)
    'milestone_project_complete'                   => 'Завершение этапа проекта',

    'milestone_project_comp_var'                   => '{{user_name}} — Для отображения имени пользователя.<br>{{project_title}} — Для отображения названия проекта.<br>{{project_activity_link}} — Для отображения ссылки на активность проекта.',
    'milestone_project_comp_subj'                  => 'Завершение этапа проекта',
    'milestone_project_comp_greeting'              => 'Привет, {{user_name}},',
    'milestone_project_comp_cont'                  => 'Проект "{{project_title}}" завершен.<br>{{project_activity_link}}',
 
    // ============================ seller complete project contract request accepter from buyer - for seller ============ \\ (Doen)
    'project_complete_request_accepted'             => 'Запрос на завершение проекта одобрен',

    'proj_comp_req_accept_var'                      => '{{user_name}} — Для отображения имени пользователя.<br>{{project_title}} — Для отображения названия проекта.<br>{{project_activity_link}} — Для отображения ссылки на активность проекта.',
    'proj_comp_req_accept_sub'                      => 'Запрос на завершение проекта одобрен',
    'proj_comp_req_accept_greeting'                 => 'Привет, {{user_name}},',
    'proj_comp_req_accept_cont'                     => 'Ваш запрос на завершение контракта по проекту "{{project_title}}" одобрен.<br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть активность проекта.<br>{{project_activity_link}}',

    // ============================ proposal submit request declined from buyer  - for seller ============ \\ (Done)
    'proposal_request_declined'                     => 'Отклонение предложения',

    'proposal_request_declined_variables'           => '{{user_name}} — Для отображения имени пользователя.<br>{{project_title}} — Для отображения названия проекта.<br>{{decline_reason}} — Для отображения причины отклонения.',
    'proposal_request_declined_subject'             => 'Отклонение предложения',
    'proposal_request_declined_greeting'            => 'Привет, {{user_name}},',
    'proposal_request_declined_content'             => 'Ой! Ваше предложение было отклонено для проекта "{{project_title}}"<br>{{decline_reason}}',

    // ============================ proposal submit accpeted from buyer  - for seller ============ \\ (done)
    'proposal_request_accepted'                     => 'Предложение принято',

    'proposal_request_accepted_variables'           => '{{user_name}} — Для отображения имени пользователя.<br>{{project_title}} — Для отображения названия проекта.<br>{{project_activity_link}} — Для отображения активности проекта.',
    'proposal_request_accepted_subject'             => 'Предложение принято',
    'proposal_request_accepted_greeting'            => 'Привет, {{user_name}},',
    'proposal_request_accepted_content'             => 'Ура! Ваше предложение для проекта “{{project_title}}” было принято.<br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть активность проекта.<br>{{project_activity_link}}',


    // ============================ proposal milestone approval request from seller - for buyer ============ \\ (done)
    'milestone_approve_request'                     => 'Запрос на утверждение этапа',

    'milestone_approve_request_variables'           => '{{user_name}} — Для отображения имени пользователя.<br>{{milestone_title}} — Для отображения названия этапа. <br>{{project_title}} — Для отображения названия проекта.<br>{{seller_name}} — Для отображения имени продавца <br>{{project_activity_link}} — Для отображения активности проекта.',
    'milestone_approve_request_subject'             => 'Запрос на утверждение этапа',
    'milestone_approve_request_greeting'            => 'Привет, {{user_name}},',
    'milestone_approve_request_content'             => 'Получен запрос на утверждение нового этапа “{{milestone_title}}” проекта “{{project_title}}” от продавца “{{seller_name}}” <br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть этап.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request declined from buyer - for seller ============ \\ (Done)
    'milestone_declined'                            => 'Отклонение предложения о вехе',

    'milestone_declined_variables'                  => '{{user_name}} — Для отображения имени пользователя.<br>{{milestone_title}} — Для отображения названия вехи. <br>{{project_title}} — Для отображения названия проекта.<br>{{project_activity_link}} — Для отображения активности проекта.',
    'milestone_declined_subject'                    => 'Отклонение предложения о вехе',
    'milestone_declined_greeting'                   => 'Привет, {{user_name}},',
    'milestone_declined_content'                    => 'Ох! Ваше предложение о вехе “{{milestone_title}}” для проекта “{{project_title}}” было отклонено.<br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть веху.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request accepted from buyer - for seller ============ \\
    'milestone_accepted'                            => 'Принято предложение о вехе',

    'milestone_accepted_variables'                  => '{{user_name}} — Для отображения имени пользователя.<br>{{milestone_title}} — Для отображения названия вехи. <br>{{project_title}} — Для отображения названия проекта.<br>{{project_activity_link}} — Для отображения активности проекта.',
    'milestone_accepted_subject'                    => 'Принято предложение о вехе',
    'milestone_accepted_greeting'                   => 'Привет, {{user_name}},',
    'milestone_accepted_content'                    => 'Ура! Ваше предложение о вехе “{{milestone_title}}” для проекта “{{project_title}}” было принято.<br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть веху.<br>{{project_activity_link}}',


     // ============================ proposal milestone escrow from buyer - for seller ============ \\
    'escrow_milestone'                             => 'Эскроу вехи',

    'escrow_milestone_variables'                   => '{{user_name}} — Для отображения имени пользователя.<br>{{milestone_title}} — Для отображения названия вехи. <br>{{project_title}} — Для отображения названия проекта.<br>{{project_activity_link}} — Для отображения активности проекта.',
    'escrow_milestone_subject'                     => 'Эскроу вехи отправлен',
    'escrow_milestone_greeting'                    => 'Привет, {{user_name}},',
    'escrow_milestone_content'                     => 'Веха “{{milestone_title}}” для проекта “{{project_title}}” была отправлена в эскроу.<br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть веху.<br>{{project_activity_link}}',

    // ============================ proposal timecard submit request to buyer - for buyer ============ \\
    'timecard_approval_request'                     => 'Запрос на утверждение табеля учета рабочего времени',

    'timecard_approval_request_variables'           => '{{user_name}} — Для отображения имени пользователя.<br> {{timecard_title}} — Для отображения названия табеля учета рабочего времени. <br> {{project_title}} — Для отображения названия проекта.<br> {{project_activity_link}} — Для отображения активности проекта.<br>{{seller_name}} — Для отображения имени продавца.',
    'timecard_approval_request_subject'             => 'Новый запрос на утверждение табеля учета рабочего времени',
    'timecard_approval_request_greeting'            => 'Привет, {{user_name}},',
    'timecard_approval_request_content'             => 'Получен новый запрос на утверждение табеля учета рабочего времени “{{timecard_title}}” для проекта “{{project_title}}” от “{{seller_name}}” <br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть подробности табеля учета.<br>{{project_activity_link}}',

    // ============================ proposal timecard approval request declined from buyer - for seller ============ \\ (Done)
    'timecard_declined'                           => 'Отклонение табеля учета рабочего времени',

    'timecard_declined_variables'                 => '{{user_name}} — Для отображения имени пользователя.<br> {{timecard_title}} — Для отображения названия табеля учета рабочего времени. <br> {{project_title}} — Для отображения названия проекта.<br>{{decline_reason}} — Для отображения причины отклонения табеля учета рабочего времени. <br> {{project_activity_link}} — Для отображения активности проекта.',
    'timecard_declined_subject'                   => 'Отклонение табеля учета рабочего времени',
    'timecard_declined_greeting'                  => 'Привет, {{user_name}},',
    'timecard_declined_content'                   => 'Ого! Ваш табель учета рабочего времени “{{timecard_title}}” для проекта “{{project_title}}” был отклонен.<br>{{decline_reason}}<br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть детали табеля учета.<br>{{project_activity_link}}',

    // ============================ proposal timecard approval request accepted from buyer - for seller ============ \\
    'timecard_accepted'                             => 'Табель учета рабочего времени принят',

    'timecard_accepted_variables'                   => '{{user_name}} — Для отображения имени пользователя.<br> {{timecard_title}} — Для отображения названия табеля учета рабочего времени. <br> {{project_title}} — Для отображения названия проекта. {{project_activity_link}} — Для отображения активности проекта.',
    'timecard_accepted_subject'                     => 'Табель учета рабочего времени принят',
    'timecard_accepted_greeting'                    => 'Привет, {{user_name}},',
    'timecard_accepted_content'                     => 'Ура! Ваш табель учета рабочего времени “{{timecard_title}}” для проекта “{{project_title}}” был принят.<br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть детали табеля учета.<br>{{project_activity_link}}',

    // ============================ send question to admin - for admin ============ \\
    'send_qeustion'                                 => 'Отправить вопрос',

    'send_qeustion_variables'                       => '{{user_name}} — Для отображения имени пользователя.<br> {{user_email}} — Для отображения email пользователя. <br> {{question_title}} — Для отображения заголовка вопроса.<br> {{description}} — Для отображения описания вопроса.<br>{{login_url}} — Для отображения кнопки входа.',
    'send_qeustion_subject'                         => 'Вы получили вопрос',
    'send_qeustion_greeting'                        => 'Здравствуйте,',
    'send_qeustion_content'                         => '{{user_name}} задал вопрос/запрос на поддержку с указанными ниже деталями. <br> Имя: {{user_name}} <br> Email: {{user_email}}<br>Тема:<br>{{question_title}}<br>Описание:<br>{{description}}<br>Пожалуйста, войдите по ссылке ниже, чтобы просмотреть детали.<br>{{login_url}}',

    // ============================ post gig order - for seller ============ \\ done
    'post_gig_order'                                => 'Опубликовать новый заказ',

    'post_gig_order_variables'                      => '{{user_name}} — Для отображения имени продавца.<br> {{gig_title}} — Для отображения заголовка услуги.',
    'post_gig_order_subject'                        => 'Новый заказ на услугу',
    'post_gig_order_greeting'                       => 'Здравствуйте, {{user_name}},',
    'post_gig_order_content'                        => 'Вы получили новый заказ на услугу “{{gig_title}}”',

    'buyer_publish_order_variables'                 => '{{user_name}} — Для отображения имени покупателя.',
    'buyer_publish_order_subject'                   => 'Новый заказ',
    'buyer_publish_order_greeting'                  => 'Здравствуйте, {{user_name}},',
    'buyer_publish_order_content'                   => 'Большое спасибо за заказ моей услуги. Я свяжусь с вами в ближайшее время',

    // ============================ Order Complete request - for buyer ============ \\ done
    'seller_order_complete'                         => 'Запрос на завершение заказа',

    'seller_order_complete_variables'               => '{{user_name}} — Для отображения имени покупателя.<br>{{seller_name}} — Для отображения имени продавца.<br>{{order_id}} — Для отображения номера заказа.<br>{{login_url}} — Для отображения ссылки для входа.<br>{{activity_link}} — Для отображения ссылки на действие',
    'seller_order_complete_subject'                 => 'Запрос на завершение заказа',
    'seller_order_complete_greeting'                => 'Здравствуйте, {{user_name}},',
    'seller_order_complete_content'                 => 'Продавец “{{seller_name}}” отправил вам окончательную доставку для заказа №{{order_id}}.<br>Вы можете принять или отклонить её. Пожалуйста, выполните вход на сайт {{login_url}} и примите необходимые меры по этому действию {{activity_link}}',

    // ============================ Order Complete delcined request - for seller ============ \\ done
    'order_declined'                                => 'Отказ от завершения заказа',

    'order_declined_variables'                      => '{{user_name}} — Для отображения имени продавца.<br>{{buyer_name}} — Для отображения имени покупателя.<br>{{order_id}} — Для отображения номера заказа.<br>{{buyer_comments}} — Для отображения комментариев покупателя.',
    'order_declined_subject'                        => 'Отказ от завершения заказа',
    'order_declined_greeting'                       => 'Здравствуйте, {{user_name}},',
    'order_declined_content'                        => 'Покупатель “{{buyer_name}}” отказался от окончательной версии и оставил комментарии к заказу №{{order_id}}<br>{{buyer_comments}}<br>',

// ============================ Order Completed - for seller ============ \\ dpne
    'order_completed'                               => 'Заказ завершен',
            
    'order_completed_variables'                     => '{{user_name}} — Для отображения имени продавца.<br>{{buyer_name}} — Для отображения имени покупателя.<br>{{order_id}} — Для отображения номера заказа.<br>{{buyer_comments}} — Для отображения комментариев покупателя.<br>{{buyer_rating}} — Для отображения рейтинга покупателя.',
    'order_completed_subject'                       => 'Заказ завершен',
    'order_completed_greeting'                      => 'Здравствуйте, {{user_name}},',
    'order_completed_content'                       => 'Поздравляем!<br>Покупатель “{{buyer_name}}” завершил текущий заказ с номером #{{order_id}} и оставил некоторые комментарии:<br>{{buyer_comments}}<br>{{buyer_rating}}<br>',


// ============================ Order Activity - for seller & buyer ============ \\ done
    'order_activity'                                    => 'Активность заказа',
        
    'buyer_order_activity_variables'                    => '{{user_name}} — Для отображения имени получателя.<br>{{sender_name}} — Для отображения имени отправителя.<br>{{gig_title}} — Для отображения названия услуги.<br>{{order_id}} — Для отображения номера заказа.<br>{{sender_comments}} — Для отображения комментариев отправителя.<br>{{login_url}} — Для отображения ссылки для входа.',
    'buyer_order_activity_subject'                      => 'Активность заказа',
    'buyer_order_activity_greeting'                     => 'Здравствуйте, {{user_name}},',
    'buyer_order_activity_content'                      => 'Вы получили сообщение от "{{sender_name}}" по текущему заказу "{{gig_title}}" с номером #{{order_id}}<br>{{sender_comments}}<br>Вы можете войти в систему, чтобы быстро принять меры.<br>{{login_url}}',

    'seller_order_activity_variables'                   => '{{user_name}} — Для отображения имени получателя.<br>{{sender_name}} — Для отображения имени отправителя.<br>{{gig_title}} — Для отображения названия услуги.<br>{{order_id}} — Для отображения номера заказа.<br>{{sender_comments}} — Для отображения комментариев отправителя.<br>{{login_url}} — Для отображения ссылки для входа.',
    'seller_order_activity_subject'                     => 'Активность заказа',
    'seller_order_activity_greeting'                    => 'Здравствуйте, {{user_name}},',
    'seller_order_activity_content'                     => 'Вы получили сообщение от "{{sender_name}}" по текущему заказу "{{gig_title}}" с номером #{{order_id}}<br>{{sender_comments}}<br>Вы можете войти в систему, чтобы быстро принять меры.<br>{{login_url}}',

// ============================New order refund - for seller & admin ============ \\ done
    'order_refund_request'                              => 'Запрос на возврат средств заказа',
        
    'seller_received_order_dispute_variables'           => '{{user_name}} — Для отображения имени продавца.<br>{{buyer_name}} — Для отображения имени покупателя.<br>{{order_id}} — Для отображения номера заказа.<br>{{buyer_comments}} — Для отображения комментариев покупателя.<br>{{login_url}} — Для отображения ссылки для входа.',
    'seller_received_order_dispute_subject'             => 'Получен новый запрос на возврат средств',
    'seller_received_order_dispute_greeting'            => 'Здравствуйте, {{user_name}},',
    'seller_received_order_dispute_content'             => "Вы получили запрос на возврат средств от {{buyer_name}} по заказу №{{order_id}}<br>{{buyer_comments}}<br>Вы можете одобрить или отклонить запрос на возврат.<br>{{login_url}}<br>",

    'admin_received_order_dispute_variables'            => '{{order_id}} — Для отображения номера заказа.',
    'admin_received_order_dispute_subject'              => 'Получен новый спор',
    'admin_received_order_dispute_greeting'             => 'Здравствуйте',
    'admin_received_order_dispute_content'              => "По заказу №{{order_id}} был создан новый спор<br>",


// ============================ Refund comment - for buyer & seller ============ \\ done
    'order_refund_reply'                                => 'Комментарии по запросу на возврат средств заказа',

    'buyer_order_refund_reply_variables'                => '{{user_name}} — Для отображения имени получателя.<br>{{sender_name}} — Для отображения имени отправителя.<br>{{order_id}} — Для отображения номера заказа.<br>{{sender_comments}} — Для отображения комментариев отправителя.<br>{{login_url}} — Для отображения ссылки для входа.',
    'buyer_order_refund_reply_subject'                  => 'Новый комментарий к запросу на возврат средств',
    'buyer_order_refund_reply_greeting'                 => 'Здравствуйте, {{user_name}},',
    'buyer_order_refund_reply_content'                  => "“{{sender_name}}” оставил(а) комментарии по запросу на возврат средств по заказу №{{order_id}}<br>{{sender_comments}}<br>{{login_url}}<br>",

    'seller_order_refund_reply_variables'               => '{{user_name}} — Для отображения имени получателя.<br>{{sender_name}} — Для отображения имени отправителя.<br>{{order_id}} — Для отображения номера заказа.<br>{{sender_comments}} — Для отображения комментариев отправителя.<br>{{login_url}} — Для отображения ссылки для входа.',
    'seller_order_refund_reply_subject'                 => 'Новый комментарий к запросу на возврат средств',
    'seller_order_refund_reply_greeting'                => 'Здравствуйте, {{user_name}},',
    'seller_order_refund_reply_content'                 => "“{{sender_name}}” оставил(а) комментарии по запросу на возврат средств по заказу №{{order_id}}<br>{{sender_comments}}<br>{{login_url}}<br>",


// ============================ Dispute order resolved from seller - for buyer ============ \\ done
    'seller_appr_order_dispute_req'                     => 'Запрос на возврат средств, одобренный продавцом',

    'seller_appr_order_dispute_req_variables'           => '{{user_name}} — Для отображения имени пользователя. <br> {{sender_name}} — Для отображения имени продавца.<br> {{gig_title}} — Для отображения заголовка услуги.',
    'seller_appr_order_dispute_req_subject'             => 'Возврат средств одобрен',
    'seller_appr_order_dispute_req_greeting'            => 'Здравствуйте, {{user_name}},',
    'seller_appr_order_dispute_req_content'             => "Поздравляем! <br> Ваш запрос на возврат средств был одобрен {{sender_name}} по услуге «{{gig_title}}»",


// ============================ When order dispute declined by seller to buyer - for buyer ============ \\ (Done)
    'seller_decline_dispute_order'                      => 'Запрос на возврат средств отклонен продавцом',

    'seller_decline_dispute_order_variables'            => '{{user_name}} — Для отображения имени пользователя.<br> {{sender_name}} — Для отображения имени отправителя.<br> {{gig_title}} — Для отображения заголовка услуги. <br/> {{login_url}} — URL для входа пользователя',
    'seller_decline_dispute_order_subject'              => 'Возврат средств отклонен',
    'seller_decline_dispute_order_greeting'             => 'Здравствуйте, {{user_name}}',
    'seller_decline_dispute_order_content'              => "Ваш запрос на возврат средств был отклонен {{sender_name}} по услуге «{{gig_title}}» <br> Если вы считаете, что запрос был обоснованным, вы можете подать жалобу на странице активности текущего заказа услуги. <br> {{login_url}}",

// ============================ Gig order dispute refunded by admin to winner  ============ \\ (Done)
    'admin_refund_order_dispute_to_winner'              => 'Спор по заказу услуг в пользу победителя',

    'disp_order_fvr_in_seller_var'                     => '{{user_name}} — Для отображения имени продавца.',
    'disp_order_fvr_in_seller_sub'                     => 'Спор разрешен',
    'disp_order_fvr_in_seller_greeting'                => 'Здравствуйте, {{user_name}},',
    'disp_order_fvr_in_seller_cont'                    => "Поздравляем! <br>Мы рассмотрели вопрос возврата средств и разрешили спор в вашу пользу. Мы разбирали спор по заказу услуг и сумма была зачислена на ваш счет.",

    'disp_order_fvr_in_buyer_var'                      => '{{user_name}} — Для отображения имени продавца.',
    'disp_order_fvr_in_buyer_sub'                      => 'Спор разрешен',
    'disp_order_fvr_in_buyer_greeting'                 => 'Здравствуйте, {{user_name}},',
    'disp_order_fvr_in_buyer_cont'                     => "Поздравляем! <br>Мы рассмотрели вопрос возврата средств и разрешили спор в вашу пользу. Мы разбирали спор по заказу услуг и сумма была зачислена на ваш счет.",

// ============================ Gig order dispute refunded by admin to not in favour  ============ \\ (Done)
    'admin_order_dispute_not_in_favour'                 => 'Спор по заказу услуг не в вашу пользу',

    'disp_order_not_in_fvr_seller_var'                  => '{{user_name}} — Для отображения имени покупателя. <br> {{dispute_link}} — Ссылка на спор',
    'disp_order_not_in_fvr_seller_sub'                  => 'Спор разрешен',
    'disp_order_not_in_fvr_seller_greeting'             => 'Здравствуйте, {{user_name}},',
    'disp_order_not_in_fvr_seller_cont'                 => "Ого! Мы не утвердили запрос на возврат средств по спору в вашу пользу.<br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть детали спора.<br>{{dispute_link}}",

    'disp_order_not_in_fvr_buyer_var'                   => '{{user_name}} — Для отображения имени покупателя. <br> {{dispute_link}} — Ссылка на спор',
    'disp_order_not_in_fvr_buyer_sub'                   => 'Спор разрешен',
    'disp_order_not_in_fvr_buyer_greeting'              => 'Здравствуйте, {{user_name}},',
    'disp_order_not_in_fvr_buyer_cont'                  => "Ого! Мы не утвердили запрос на возврат средств по спору в вашу пользу.<br>Пожалуйста, нажмите на кнопку ниже, чтобы просмотреть детали спора.<br>{{dispute_link}}",

];
