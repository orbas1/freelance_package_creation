<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Email templating languages Lines
    |--------------------------------------------------------------------------
    |
    */

    'email_title'                     => 'Título del correo electrónico',
    'role_type'                       => 'Tipo de rol',
    'all_templates'                   => 'Plantillas de correo electrónico',
    'add_email_template'              => 'Agregar nueva plantilla',
    'update_email_template'           => 'Actualizar plantilla',
    'select_template'                 => 'Seleccionar plantilla',
    'registration_title'              => 'Correo electrónico de registro',
    'buyer'                           => 'Comprador',
    'seller'                          => 'Vendedor',
    'admin'                           => 'Admin',
    'verfiy_email'                    => 'Verificar dirección de correo electrónico',
    'login_url'                       => '“Iniciar sesión”',
    'ridirect_login'                  => 'Redirigir a iniciar sesión',
    'set_email_status'                => 'Establecer estado de este correo electrónico como',
    'reset_password_txt'              => 'Restablecer contraseña',

    // =========== Email general translation ==================== \\ 
    'email_setting_variable'    => 'Variables de configuración de correo electrónico',
    'greeting'                  => 'Texto de saludo',
    'email_content'             => 'Contenido del correo electrónico',
    'subject'                   => 'Asunto del correo electrónico',


    // =========================== User Registration by admin notify user  =============== \\
    'user_created_title'          => 'Nuevo usuario creado',
    'user_created_variables'      => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{site_name}} — Para mostrar el nombre del sitio.<br>{{user_email}} — Para mostrar el correo electrónico del usuario.<br>{{password}} — Para mostrar la contraseña del usuario.',
    'user_created_subject'        => 'Se ha creado una nueva cuenta',
    'user_created_greeting'       => 'Hola {{user_name}},',
    'user_created_content'        => '¡Excelentes noticias! Tu nueva cuenta ha sido creada por el administrador de {{site_name}}.<br>Por favor, inicia sesión con los detalles mencionados a continuación.<br>Dirección de correo electrónico:<br>{{user_email}}<br>Contraseña:<br>{{password}}<br>Gracias,<br>{{admin_name}}',

    // ===========================User Registration Email =============== \\
    'buyer_registration_email_variable'       => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{user_email}} — Para mostrar el correo electrónico del usuario.<br>{{user_password}} — Para mostrar la contraseña del usuario.<br>{{site_name}} — Para mostrar el nombre del sitio.<br>{{verification_link}} — Para mostrar el enlace de verificación',        
    'buyer_registration_subject'              => 'Gracias por registrarte en {{site_name}}',        
    'buyer_registration_greeting'             => 'Hola {{user_name}}',        
    'buyer_registration_content'              => 'Gracias por registrarte en {{site_name}}. Por favor, haz clic abajo para verificar tu correo electrónico <br>{{verification_link}}',


    'seller_registration_email_variable'      => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{user_email}} — Para mostrar el correo electrónico del usuario.<br>{{user_password}} — Para mostrar la contraseña del usuario.<br>{{site_name}} — Para mostrar el nombre del sitio.<br>{{verification_link}} — Para mostrar el enlace de verificación',        
    'seller_registration_subject'             => 'Gracias por registrarte en {{site_name}}', 
    'seller_registration_greeting'            => 'Hola {{user_name}}',
    'seller_registration_content'             => 'Gracias por registrarte en {{site_name}}. Por favor, haz clic abajo para verificar tu correo electrónico <br>{{verification_link}}',


    'user_registerd_to_admin_variable'        => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{user_email}} — Para mostrar el correo electrónico del usuario.',
    'user_registerd_to_admin_subject'         => 'Gracias por registrarte en {{site_name}}', 
    'user_registerd_to_admin_greeting'        => 'Hola,',
    'user_registerd_to_admin_content'         => 'Un nuevo usuario se ha registrado en el sitio con el nombre <br> "{{user_name}}" y la dirección de correo electrónico "{{user_email}}"',


    //========================= Account approval request =========================\\
    'account_approval_title' => 'Solicitud de aprobación de cuenta',
    
    'buyer_account_approval_variables'       => '{{user_name}} — Para mostrar el nombre de usuario.<br> {{user_email}} — Para mostrar el correo electrónico del usuario.<br>{{user_password}} — Para mostrar la contraseña del usuario.<br>{{site_name}} — Para mostrar el nombre del sitio.',
    'buyer_account_approval_subject'         => 'Gracias por registrarte en {{site_name}}',
    'buyer_account_approval_greeting'        => 'Hola {{user_name}},',
    'buyer_account_approval_content'         => 'Gracias por registrarte en {{site_name}}. Tu cuenta será aprobada después de la verificación.',
    
    'seller_account_approval_variables'      => '{{user_name}} — Para mostrar el nombre de usuario.<br> {{user_email}} — Para mostrar el correo electrónico del usuario.<br>{{user_password}} — Para mostrar la contraseña del usuario.<br>{{site_name}} — Para mostrar el nombre del sitio.',
    'seller_account_approval_subject'        => 'Gracias por registrarte en {{site_name}}',
    'seller_account_approval_greeting'       => 'Hola {{user_name}},',
    'seller_account_approval_content'        => 'Gracias por registrarte en {{site_name}}. Tu cuenta será aprobada después de la verificación.',

    'admin_account_approval_variables'       => '{{user_email}} — Para mostrar el correo electrónico del usuario.<br>{{user_password}} — Para mostrar la contraseña del usuario.<br>{{site_name}} — Para mostrar el nombre del sitio.<br>{{login_url}} — URL de inicio de sesión del usuario.',
    'admin_account_approval_subject'         => 'Gracias por registrarte en {{site_name}}',
    'admin_account_approval_greeting'        => 'Hola,',
    'admin_account_approval_content'         => 'Un nuevo usuario se ha registrado en el sitio con el nombre {{user_name}} y la dirección de correo electrónico {{user_email}}. <br> El registro está pendiente de aprobación, puedes iniciar sesión en {{login_url}} para aprobar la cuenta.',

    //========================= Account approved =========================\\ (done)
    'buyer_account_approved_variables'       => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{user_email}} — Para mostrar el correo electrónico del usuario.<br>{{site_name}} — Para mostrar el nombre del sitio.',
    
    'buyer_account_approved_subject'         => 'Cuenta aprobada.',
    'buyer_account_approved_greeting'        => 'Hola {{user_name}},',
    'buyer_account_approved_content'         => '¡Felicidades! Tu cuenta ha sido aprobada por el administrador.',


    'seller_account_approved_variables'      => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{user_email}} — Para mostrar el correo electrónico del usuario.<br>{{site_name}} — Para mostrar el nombre del sitio.',
    'seller_account_approved_subject'        => 'Cuenta aprobada.',
    'seller_account_approved_greeting'       => 'Hola {{user_name}},',
    'seller_account_approved_content'        => '¡Felicidades! Tu cuenta ha sido aprobada por el administrador.',


    //=========================== Reset password ================================\\ (Done)

    'reset_password'                        => 'Restablecer contraseña',

    'buyer_reset_password_variables'        => '{{account_email}} — Para mostrar el correo electrónico del usuario. <br> {{reset_link}} — Para mostrar el enlace URL de restablecimiento de contraseña.',
    'buyer_reset_password_subject'          => 'Restablecimiento de contraseña.',
    'buyer_reset_password_greeting'         => 'Hola,',
    'buyer_reset_password_content'          => 'Alguien solicitó restablecer la contraseña de la siguiente cuenta: <br> Dirección de correo electrónico: {{account_email}} <br> Si esto fue un error, simplemente ignora este correo electrónico y no sucederá nada.<br> Para restablecer tu contraseña, haz clic en el siguiente enlace:<br>{{reset_link}}',

    'seller_reset_password_variables'       => '{{account_email}} — Para mostrar el correo electrónico del usuario. <br> {{reset_link}} — Para mostrar el enlace URL de restablecimiento de contraseña.',
    'seller_reset_password_subject'         => 'Restablecimiento de contraseña.',
    'seller_reset_password_greeting'        => 'Hola,',
    'seller_reset_password_content'         => 'Alguien solicitó restablecer la contraseña de la siguiente cuenta: <br> Dirección de correo electrónico: {{account_email}} <br> Si esto fue un error, simplemente ignora este correo electrónico y no sucederá nada.<br> Para restablecer tu contraseña, haz clic en el siguiente enlace:<br>{{reset_link}}',

    //===================================== Account identity request to Admin - for admin ====================\\ (done)
    'accout_identity_verification'          => 'Verificación de identidad de cuenta',


    'identity_verification_variables'       => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{login_url}} — URL de inicio de sesión del usuario',
    'identity_verification_subject'         => 'Nueva solicitud recibida para verificación de identidad',
    'identity_verification_greeting'        => 'Hola,',
    'identity_verification_content'         => '{{user_name}} ha subido un documento para la verificación de identidad. La verificación de la cuenta está pendiente de aprobación, puedes {{login_url}} para ingresar al administrador y aprobar la verificación de identidad.',

    //===================================== Account identity rejection ====================\\ (done)
    'accout_identity_rejection'             => 'Rechazo de identidad de cuenta',


    'buyer_identity_rejection_variables'    => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{user_link}} — Para mostrar el enlace del usuario que envió la verificación de identidad.<br>{{admin_message}} — Para mostrar el mensaje del administrador de rechazo.<br>{{user_email}} — Para mostrar la dirección de correo electrónico del usuario que envió la solicitud de verificación de identidad.',
    'buyer_identity_rejection_subject'      => 'Tu solicitud de verificación de identidad ha sido rechazada',
    'buyer_identity_rejection_greeting'     => 'Hola {{user_name}},',
    'buyer_identity_rejection_content'      => 'Tu documento cargado para la verificación de identidad ha sido rechazado.<br>{{admin_message}}',

    'seller_identity_rejection_variables'   => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{user_link}} — Para mostrar el enlace del usuario que envió la verificación de identidad.<br>{{admin_message}} — Para mostrar el mensaje del administrador de rechazo.<br>{{user_email}} — Para mostrar la dirección de correo electrónico del usuario que envió la solicitud de verificación de identidad.',
    'seller_identity_rejection_subject'     => 'Tu solicitud de verificación de identidad ha sido rechazada',
    'seller_identity_rejection_greeting'    => 'Hola {{user_name}},',
    'seller_identity_rejection_content'     => 'Tu documento cargado para la verificación de identidad ha sido rechazado.<br>{{admin_message}}',

    
    //====================================== Account identity approved ========================= \\ (Done)
    'account_identity_approved'             => 'Identidad de cuenta aprobada',

    'buyer_identity_approved_variables'     => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{user_link}} — Para mostrar el enlace del usuario que envió la verificación de identidad.<br>{{user_email}} — Para mostrar la dirección de correo electrónico del usuario que envió la solicitud de verificación de identidad.',
    'buyer_identity_approved_subject'       => 'Tu solicitud de verificación de identidad ha sido aprobada',
    'buyer_identity_approved_greeting'      => 'Hola {{user_name}},',
    'buyer_identity_approved_content'       => '¡Felicidades!<br>Tus documentos enviados para la verificación de identidad han sido aprobados.',

    'seller_identity_approved_variables'    => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{user_link}} — Para mostrar el enlace del usuario que envió la verificación de identidad.<br>{{user_email}} — Para mostrar la dirección de correo electrónico del usuario que envió la solicitud de verificación de identidad.',
    'seller_identity_approved_subject'      => 'Tu solicitud de verificación de identidad ha sido aprobada',
    'seller_identity_approved_greeting'     => 'Hola {{user_name}},',
    'seller_identity_approved_content'      => '¡Felicidades!<br>Tus documentos enviados para la verificación de identidad han sido aprobados.',


    // ============================ When new dispute is created by buyer to seller ============ \\ (Done)
    'seller_dispute_received'               => 'Disputa creada por el comprador hacia el vendedor',

    'seller_dispute_received_variables'     => '{{user_name}} — Para mostrar el nombre del vendedor.<br> {{buyer_name}} — Para mostrar el nombre del comprador.<br> {{project_title}} — Para mostrar el título del proyecto.<br> {{buyer_comments}} — Para mostrar los comentarios del comprador.<br> {{login_url}} — URL de inicio de sesión del usuario',
    'seller_dispute_received_subject'       => 'Se ha recibido una nueva solicitud de reembolso',
    'seller_dispute_received_greeting'      => 'Hola {{user_name}}',
    'seller_dispute_received_content'       => "Has recibido una solicitud de reembolso de parte de {{buyer_name}} para el proyecto “{{project_title}}”.<br>{{buyer_comments}} </br> Puedes aprobar o rechazar la solicitud de reembolso. <br> {{login_url}}",

    // ============================ When dispute approved by seller to buyer ============ \\ (Done)
    'seller_approved_dispute_req'           => 'Reembolso aprobado por el vendedor',

    'seller_approved_dispute_req_variables' => '{{user_name}} — Para mostrar el nombre del usuario. <br> {{sender_name}} — Para mostrar el nombre del vendedor.<br> {{project_title}} — Para mostrar el título del proyecto.',
    'seller_approved_dispute_req_subject'   => 'Reembolso aprobado',
    'seller_approved_dispute_req_greeting'  => 'Hola {{user_name}},',
    'seller_approved_dispute_req_content'   => "¡Felicidades! <br> Tu solicitud de reembolso ha sido aprobada por {{sender_name}} para el proyecto “{{project_title}}”",

    // ============================ When dispute declined by seller to buyer ============ \\ (Done)
    'seller_decline_dispute'                => 'Reembolso rechazado por el vendedor',

    'seller_decline_dispute_variables'      => '{{user_name}} — Para mostrar el nombre del usuario.<br> {{sender_name}} — Para mostrar el nombre del remitente.<br> {{project_title}} — Para mostrar el título del proyecto. <br/> {{login_url}} — URL de inicio de sesión del usuario',
    'seller_decline_dispute_subject'        => 'Reembolso rechazado',
    'seller_decline_dispute_greeting'       => 'Hola {{user_name}}',
    'seller_decline_dispute_content'        => "Tu solicitud de reembolso ha sido rechazada por {{sender_name}} para el proyecto “{{project_title}}”<br>Si consideras que esta solicitud fue válida, puedes iniciar una disputa desde la página de actividad del proyecto en curso. <br> {{login_url}}",

    // ============================ comment on refund request ============ \\ (Done)
    'comment_on_dispute'                    => 'Comentarios sobre reembolso',

    'seller_dispute_comment_variables'      => '{{user_name}} — Para mostrar el nombre del usuario.<br> {{sender_name}} — Para mostrar el nombre del remitente.<br> {{project_title}} — Para mostrar el título del proyecto. <br> {{sender_comments}} — Para mostrar el comentario. <br> {{login_url}} — URL de inicio de sesión del usuario.',
    'seller_dispute_comment_subject'        => 'Nuevo comentario en solicitud de reembolso',
    'seller_dispute_comment_greeting'       => 'Hola {{user_name}}',
    'seller_dispute_comment_content'        => "El usuario “{{sender_name}}” ha dejado algunos comentarios en la solicitud de reembolso para el proyecto “{{project_title}}”<br>{{sender_comments}} <br> {{login_url}}",

    'buyer_dispute_comment_variables'       => '{{user_name}} — Para mostrar el nombre del usuario.<br> {{sender_name}} — Para mostrar el nombre del remitente.<br> {{project_title}} — Para mostrar el título del proyecto. <br> {{sender_comments}} — Para mostrar el comentario. <br> {{login_url}} — URL de inicio de sesión del usuario.',
    'buyer_dispute_comment_subject'         => 'Nuevo comentario en solicitud de reembolso',
    'buyer_dispute_comment_greeting'        => 'Hola {{user_name}}',
    'buyer_dispute_comment_content'         => "El usuario “{{sender_name}}” ha dejado algunos comentarios en la solicitud de reembolso para el proyecto “{{project_title}}”<br>{{sender_comments}} <br> {{login_url}}",
 
// ============================ new dispute received to admin ============ \\ (Done)
    'admin_received_dispute'                => 'Disputa recibida por el administrador',
    'admin_received_dispute_variables'      => "{{project_title}} — Para mostrar el título del proyecto.<br> {{type}} — Para mostrar el tipo como 'proyecto' o 'servicio'",
    'admin_received_dispute_subject'        => 'Nueva disputa recibida',
    'admin_received_dispute_greeting'       => 'Hola',
    'admin_received_dispute_content'        => "Se ha creado una nueva disputa contra el {{type}} “{{project_title}}”",


// ============================ dispute refunded in hourly project by admin to winner  ============ \\ (Done)
    'admin_refund_hourly_dispute_to_winner'     => 'Disputa de proyecto por hora a favor del ganador',

    'hourly_dispute_favour_in_seller_variables' => '{{user_name}} — Para mostrar el nombre del vendedor.',
    'hourly_dispute_favour_in_seller_subject'   => 'Disputa resuelta',
    'hourly_dispute_favour_in_seller_greeting'  => 'Hola {{user_name}},',
    'hourly_dispute_favour_in_seller_content'   => "¡Felicidades! <br> Hemos revisado el reembolso y la disputa y hemos resuelto la disputa a tu favor. Se ha disputado el proyecto.",

    'hourly_dispute_favour_in_buyer_variables'  => '{{user_name}} — Para mostrar el nombre del comprador.',
    'hourly_dispute_favour_in_buyer_subject'    => 'Disputa resuelta',
    'hourly_dispute_favour_in_buyer_greeting'   => 'Hola {{user_name}},',
    'hourly_dispute_favour_in_buyer_content'    => "¡Felicidades! <br> Hemos revisado el reembolso y la disputa y hemos resuelto la disputa a tu favor. Se ha disputado el proyecto.",

// ============================ dispute refunded in fixed and milestone project by admin to winner  ============ \\ (Done)
    'admin_refund_dispute_to_winner'            => 'Disputa del proyecto a favor del ganador',

    'dispute_favour_in_seller_variables'        => '{{user_name}} — Para mostrar el nombre del vendedor.',
    'dispute_favour_in_seller_subject'          => 'Disputa resuelta',
    'dispute_favour_in_seller_greeting'         => 'Hola {{user_name}},',
    'dispute_favour_in_seller_content'          => "¡Felicidades! <br> Hemos revisado el reembolso y la disputa y hemos resuelto la disputa a tu favor. Hemos disputado el proyecto y el monto ha sido añadido a tu cuenta.",

    'dispute_favour_in_buyer_variables'         => '{{user_name}} — Para mostrar el nombre del comprador.',
    'dispute_favour_in_buyer_subject'           => 'Disputa resuelta',
    'dispute_favour_in_buyer_greeting'          => 'Hola {{user_name}},',
    'dispute_favour_in_buyer_content'           => "¡Felicidades! <br> Hemos revisado el reembolso y la disputa y hemos resuelto la disputa a tu favor. Hemos disputado el proyecto y el monto ha sido añadido a tu cuenta.",

    // ============================ dispute refunded by admin to not in favour  ============ \\ (Done)
    'admin_dispute_not_in_favour'               => 'Disputa del proyecto no a favor',

    'dispute_not_in_favour_seller_variables'    => '{{user_name}} — Para mostrar el nombre del comprador. <br> {{dispute_link}} — Enlace URL de la disputa',
    'dispute_not_in_favour_seller_subject'      => 'Disputa resuelta',
    'dispute_not_in_favour_seller_greeting'     => 'Hola {{user_name}},',
    'dispute_not_in_favour_seller_content'      => "¡Vaya! No aprobamos la solicitud de reembolso de disputa a tu favor.<br>Por favor, haz clic en el botón abajo para ver los detalles de la disputa.<br>{{dispute_link}}",

    'dispute_not_in_favour_buyer_variables'     => '{{user_name}} — Para mostrar el nombre del comprador. <br> {{dispute_link}} — Enlace URL de la disputa',
    'dispute_not_in_favour_buyer_subject'       => 'Disputa resuelta',
    'dispute_not_in_favour_buyer_greeting'      => 'Hola {{user_name}},',
    'dispute_not_in_favour_buyer_content'       => "¡Vaya! No aprobamos la solicitud de reembolso de disputa a tu favor.<br>Por favor, haz clic en el botón abajo para ver los detalles de la disputa.<br>{{dispute_link}}",
    // ============================ package purchase - for seller and buyer ============ \\ (Done)
    'package_purchase'                          => 'Compra de paquete',

    'package_purchase_by_seller_variables'      => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{package_name}} — Para mostrar el nombre del paquete.',
    'package_purchase_by_seller_subject'        => 'Gracias por comprar el paquete',
    'package_purchase_by_seller_greeting'       => 'Hola {{user_name}},',
    'package_purchase_by_seller_content'        => 'Gracias por comprar el paquete “{{package_name}}”<br>Ahora puedes publicar un servicio y recibir pedidos.',

    'package_purchase_by_buyer_variables'       => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{package_name}} — Para mostrar el nombre del paquete.',
    'package_purchase_by_buyer_subject'         => 'Gracias por comprar el paquete',
    'package_purchase_by_buyer_greeting'        => 'Hola {{user_name}},',
    'package_purchase_by_buyer_content'         => 'Gracias por comprar el paquete “{{package_name}}”<br>Ahora puedes crear trabajos.',

    'package_purchase_to_admin_variables'       => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{package_name}} — Para mostrar el nombre del paquete.<br>{{purchaser_name}} — Para mostrar el nombre del comprador.<br>{{current_date}} — Para mostrar la fecha de compra.',
    'package_purchase_to_admin_subject'         => 'Nuevo paquete comprado por “{{purchaser_name}}”',
    'package_purchase_to_admin_greeting'        => 'Hola,',
    'package_purchase_to_admin_content'         => 'Se ha realizado una nueva compra del paquete “{{package_name}}” por “{{purchaser_name}}” el “{{current_date}}”',

    // ============================ send message on project conversation ============ \\ (Done)
    'project_conversation'                          => 'Conversación del proyecto',

    'seller_project_conv_var'                       => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{sender_name}} — Para mostrar el nombre del remitente.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{login_url}} — URL de inicio de sesión del usuario.',
    'seller_project_conv_subj'                      => 'Nuevo mensaje recibido',
    'seller_project_conv_greeting'                  => 'Hola {{user_name}}',
    'seller_project_conv_cont'                      => "{{sender_name}} te ha enviado un nuevo mensaje sobre el proyecto “{{project_title}}”.<br>Haz clic en el enlace de abajo para leer el mensaje.<br>{{login_url}}",

    'buyer_project_conv_var'                        => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{sender_name}} — Para mostrar el nombre del remitente.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{login_url}} — URL de inicio de sesión del usuario.',
    'buyer_project_conv_subj'                       => 'Nuevo mensaje recibido',
    'buyer_project_conv_greeting'                   => 'Hola {{user_name}}',
    'buyer_project_conv_cont'                       => "{{sender_name}} te ha enviado un nuevo mensaje sobre el proyecto “{{project_title}}”.<br>Haz clic en el enlace de abajo para leer el mensaje.<br>{{login_url}}",
     
    // ============================ Project submission when verification by admin and sent to buyer - for buyer and admin(Done) ============ \\ (Done)
    'project_posted'                                => 'Envío de proyecto',

    'project_posted_by_buyer_variables'             => '{{user_name}} — Para mostrar el nombre de usuario.',
    'project_posted_by_buyer_subject'               => 'Envío de proyecto',
    'project_posted_by_buyer_greeting'              => 'Hola {{user_name}},',
    'project_posted_by_buyer_content'               => 'Gracias por enviar el proyecto. Revisaremos y aprobaremos el proyecto después de la revisión.',

    'project_posted_to_admin_variables'             => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{project_link}} — URL de vista previa del proyecto.',
    'project_posted_to_admin_subject'               => 'Nuevo envío de proyecto',
    'project_posted_to_admin_greeting'              => 'Hola,',
    'project_posted_to_admin_content'               => 'Nuevo proyecto enviado por “{{user_name}}” y esperando aprobación. Por favor, haz clic en el siguiente enlace para más detalles.<br>{{project_link}}',

    // ============================ Project invite request from buyer to seller - for seller ============ \\ (Done)
    'project_invite_request'                        => 'Invitación enviada al proyecto',

    'project_invite_request_variables'              => '{{user_name}} — Para mostrar el nombre de usuario. <br>{{project_title}} — Para mostrar el título del proyecto.',
    'project_invite_request_subject'                => 'Has recibido una invitación a un proyecto',
    'project_invite_request_greeting'               => 'Hola {{user_name}},',
    'project_invite_request_content'                => '¡Felicidades! Has recibido una nueva invitación para el proyecto “{{project_title}}”.',


    // ============================ Project approved acknowledgement to buyer - for buyer ============ \\ (Done)
    'project_approved'                              => 'Proyecto aprobado',

    'project_approved_to_buyer_variables'           => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{project_link}} — Para mostrar el enlace del proyecto.',
    'project_approved_to_buyer_subject'             => 'Envío de proyecto',
    'project_approved_to_buyer_greeting'            => 'Hola {{user_name}},',
    'project_approved_to_buyer_content'             => '¡Hurra! Tu proyecto "{{project_title}}" ha sido aprobado.<br>Por favor, haz clic en el botón de abajo para ver el proyecto.<br>{{project_link}}',

    // ============================ proposal submit request - for buyer ============ \\ (Doen)
    'proposal_approve_request'                      => 'Enviar propuesta',

    'proposal_approve_request_variables'            => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{seller_name}} — Para mostrar el nombre del vendedor.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{proposal_link}} — Para mostrar el enlace de la propuesta.',
    'proposal_approve_request_subject'              => 'Enviar propuesta',
    'proposal_approve_request_greeting'             => 'Hola {{user_name}},',
    'proposal_approve_request_content'              => '{{seller_name}} ha enviado una nueva propuesta para "{{project_title}}".<br>Por favor, haz clic en el botón de abajo para ver la propuesta.<br>{{proposal_link}}',

    // ============================ seller complete project contract request to buyer - for buyer ============ \\ (Doen)
    'project_complete_request'                  => 'Solicitud de contrato de proyecto completo',

    'project_complete_request_variables'        => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{seller_name}} — Para mostrar el nombre del vendedor.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{project_activity_link}} — Para mostrar el enlace de actividad del proyecto.',
    'project_complete_request_subject'          => 'Enviar solicitud de proyecto completo',
    'project_complete_request_greeting'         => 'Hola {{user_name}},',
    'project_complete_request_content'          => '{{seller_name}} ha enviado una solicitud de contrato completo para el proyecto "{{project_title}}".<br>Por favor, haz clic en el botón de abajo para ver la actividad del proyecto.<br>{{project_activity_link}}',
    

    // ============================ seller complete project contract request declined from buyer - for seller ============ \\ (Doen)
    'project_complete_req_declined'                 => 'Solicitud de contrato de proyecto completo rechazada',

    'proj_complete_req_declined_variables'          => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{declined_reason}} — Para mostrar el motivo del rechazo.<br>{{project_activity_link}} — Para mostrar el enlace de actividad del proyecto.',
    'proj_complete_req_declined_subject'            => 'Solicitud de proyecto completo rechazada',
    'proj_complete_req_declined_greeting'           => 'Hola {{user_name}},',
    'proj_complete_req_declined_content'            => 'Tu solicitud de contrato completo para el proyecto "{{project_title}}" ha sido rechazada.<br>{{declined_reason}}<br>Por favor, haz clic en el botón de abajo para ver la actividad del proyecto.<br>{{project_activity_link}}',
    

    // ============================ Milestone project complete from buyer - for seller ============ \\ (Doen)
    'milestone_project_complete'                   => 'Contrato completo del hito del proyecto',

    'milestone_project_comp_var'                   => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{project_activity_link}} — Para mostrar el enlace de actividad del proyecto.',
    'milestone_project_comp_subj'                  => 'Contrato completo del hito del proyecto',
    'milestone_project_comp_greeting'              => 'Hola {{user_name}},',
    'milestone_project_comp_cont'                  => 'El proyecto "{{project_title}}" ha sido completado.<br>{{project_activity_link}}',

    
    // ============================ seller complete project contract request accepter from buyer - for seller ============ \\ (Doen)
    'project_complete_request_accepted'             => 'Solicitud de contrato de proyecto completo aprobada',

    'proj_comp_req_accept_var'                      => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{project_activity_link}} — Para mostrar el enlace de actividad del proyecto.',
    'proj_comp_req_accept_sub'                      => 'Solicitud de proyecto completo aprobada',
    'proj_comp_req_accept_greeting'                 => 'Hola {{user_name}},',
    'proj_comp_req_accept_cont'                     => 'Tu solicitud de contrato completo para el proyecto "{{project_title}}" ha sido aprobada.<br>Por favor, haz clic en el botón de abajo para ver la actividad del proyecto.<br>{{project_activity_link}}',

    // ============================ proposal submit request declined from buyer  - for seller ============ \\ (Done)
    'proposal_request_declined'                     => 'Propuesta enviada rechazada',

    'proposal_request_declined_variables'           => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{decline_reason}} — Para mostrar el motivo del rechazo.',
    'proposal_request_declined_subject'             => 'Propuesta enviada rechazada',
    'proposal_request_declined_greeting'            => 'Hola {{user_name}},',
    'proposal_request_declined_content'             => '¡Oh no! Tu propuesta enviada ha sido rechazada para el proyecto "{{project_title}}".<br>{{decline_reason}}',


    // ============================ proposal submit accpeted from buyer  - for seller ============ \\ (done)
    'proposal_request_accepted'                     => 'Propuesta enviada aceptada', 

    'proposal_request_accepted_variables'           => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{project_activity_link}} — Para mostrar la actividad del proyecto.',
    'proposal_request_accepted_subject'             => 'Propuesta enviada aceptada',
    'proposal_request_accepted_greeting'            => 'Hola {{user_name}},',
    'proposal_request_accepted_content'             => '¡Woohoo! Tu propuesta enviada para "{{project_title}}" ha sido aceptada.<br>Por favor, haz clic en el botón de abajo para ver la actividad del proyecto.<br>{{project_activity_link}}',


    // ============================ proposal milestone approval request from seller - for buyer ============ \\ (done)
    'milestone_approve_request'                     => 'Solicitud de aprobación de hito',
    'milestone_approve_request_variables'           => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{milestone_title}} — Para mostrar el título del hito.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{seller_name}} — Para mostrar el nombre del vendedor.<br>{{project_activity_link}} — Para mostrar la actividad del proyecto.',
    'milestone_approve_request_subject'             => 'Solicitud de aprobación de hito',
    'milestone_approve_request_greeting'            => 'Hola {{user_name}},',
    'milestone_approve_request_content'             => 'Se ha recibido una nueva solicitud de aprobación del hito "{{milestone_title}}" del proyecto "{{project_title}}" por parte de "{{seller_name}}".<br>Por favor, haz clic en el botón de abajo para ver el hito.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request declined from buyer - for seller ============ \\ (Done)
    'milestone_declined'                            => 'Hito enviado rechazado',
    
    'milestone_declined_variables'                  => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{milestone_title}} — Para mostrar el título del hito.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{project_activity_link}} — Para mostrar la actividad del proyecto.',
    'milestone_declined_subject'                    => 'Hito enviado rechazado',
    'milestone_declined_greeting'                   => 'Hola {{user_name}},',
    'milestone_declined_content'                    => '¡Oh no! Tu hito enviado "{{milestone_title}}" de "{{project_title}}" ha sido rechazado.<br>Por favor, haz clic en el botón de abajo para ver el hito.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request accepted from buyer - for seller ============ \\
    'milestone_accepted'                            => 'Hito enviado aceptado',
    
    'milestone_accepted_variables'                  => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{milestone_title}} — Para mostrar el título del hito.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{project_activity_link}} — Para mostrar la actividad del proyecto.',
    'milestone_accepted_subject'                    => 'Hito enviado aceptado',
    'milestone_accepted_greeting'                   => 'Hola {{user_name}},',
    'milestone_accepted_content'                    => '¡Woohoo! Tu hito enviado "{{milestone_title}}" para "{{project_title}}" ha sido aprobado.<br>Por favor, haz clic en el botón de abajo para ver el hito.<br>{{project_activity_link}}',


     // ============================ proposal milestone escrow from buyer - for seller ============ \\
     'escrow_milestone'                             => 'Fondo de garantía para hito',
    
    'escrow_milestone_variables'                    => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{milestone_title}} — Para mostrar el título del hito.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{project_activity_link}} — Para mostrar la actividad del proyecto.',
    'escrow_milestone_subject'                      => 'Hito enviado para fondo de garantía',
    'escrow_milestone_greeting'                     => 'Hola {{user_name}},',
    'escrow_milestone_content'                      => 'El hito "{{milestone_title}}" del proyecto "{{project_title}}" ha sido enviado para el fondo de garantía.<br>Por favor, haz clic en el botón de abajo para ver el hito.<br>{{project_activity_link}}',

     
    // ============================ proposal timecard submit request to buyer - for buyer ============ \\
    'timecard_approval_request'                     => 'Enviar solicitud de aprobación de tarjeta de tiempo',
    
    'timecard_approval_request_variables'           => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{timecard_title}} — Para mostrar el título de la tarjeta de tiempo.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{project_activity_link}} — Para mostrar la actividad del proyecto.<br>{{seller_name}} — Para mostrar el nombre del vendedor.',
    'timecard_approval_request_subject'             => 'Nueva solicitud de aprobación de tarjeta de tiempo',
    'timecard_approval_request_greeting'            => 'Hola {{user_name}},',
    'timecard_approval_request_content'             => 'Se ha recibido una nueva solicitud de aprobación para la tarjeta de tiempo "{{timecard_title}}" del proyecto "{{project_title}}" enviada por "{{seller_name}}".<br>Por favor, haz clic en el botón de abajo para ver los detalles de la tarjeta de tiempo.<br>{{project_activity_link}}',

    // ============================ proposal timecard approval request declined from buyer - for seller ============ \\ (Done)
      'timecard_declined'                           => 'Solicitud de tarjeta de tiempo rechazada',
    
    'timecard_declined_variables'                   => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{timecard_title}} — Para mostrar el título de la tarjeta de tiempo.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{decline_reason}} — Para mostrar la razón del rechazo de la tarjeta de tiempo.<br>{{project_activity_link}} — Para mostrar la actividad del proyecto.',
    'timecard_declined_subject'                     => 'Solicitud de tarjeta de tiempo rechazada',
    'timecard_declined_greeting'                    => 'Hola {{user_name}},',
    'timecard_declined_content'                     => '¡Oho! Tu solicitud de tarjeta de tiempo "{{timecard_title}}" del proyecto "{{project_title}}" ha sido rechazada.<br>{{decline_reason}}<br>Por favor, haz clic en el botón de abajo para ver los detalles de la tarjeta de tiempo.<br>{{project_activity_link}}',

    // ============================ proposal timecard approval request accepted from buyer - for seller ============ \\
    'timecard_accepted'                             => 'Solicitud de tarjeta de tiempo aceptada',
    
    'timecard_accepted_variables'                   => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{timecard_title}} — Para mostrar el título de la tarjeta de tiempo.<br>{{project_title}} — Para mostrar el título del proyecto.<br>{{project_activity_link}} — Para mostrar la actividad del proyecto.',
    'timecard_accepted_subject'                     => 'Solicitud de tarjeta de tiempo aceptada',
    'timecard_accepted_greeting'                    => 'Hola {{user_name}},',
    'timecard_accepted_content'                     => '¡Woohoo! Tu solicitud de tarjeta de tiempo "{{timecard_title}}" contra el proyecto "{{project_title}}" ha sido aceptada.<br>Por favor, haz clic en el botón de abajo para ver los detalles de la tarjeta de tiempo.<br>{{project_activity_link}}',

    // ============================ send question to admin - for admin ============ \\
    'send_qeustion'                                 => 'Enviar pregunta',

    'send_qeustion_variables'                       => '{{user_name}} — Para mostrar el nombre de usuario.<br> {{user_email}} — Para mostrar el correo electrónico del usuario. <br> {{question_title}} — Para mostrar el título de la pregunta.<br> {{description}} — Para mostrar la descripción de la pregunta.<br>{{login_url}} — Para mostrar el enlace de inicio de sesión.',
    'send_qeustion_subject'                         => 'Has recibido una pregunta',
    'send_qeustion_greeting'                        => 'Hola,',
    'send_qeustion_content'                         => '{{user_name}} ha hecho una pregunta o solicitud con los siguientes detalles:<br> Nombre: {{user_name}} <br> Correo electrónico: {{user_email}}<br>Título del tema:<br>{{question_title}}<br>Descripción:<br>{{description}}<br>Por favor, inicia sesión con el siguiente enlace para ver los detalles.<br>{{login_url}}',


    // ============================ post gig order - for seller ============ \\ done
    'post_gig_order'                                => 'Publicar un nuevo pedido',

    'post_gig_order_variables'                      => '{{user_name}} — Para mostrar el nombre del vendedor.<br> {{gig_title}} — Para mostrar el título del servicio.',
    'post_gig_order_subject'                        => 'Nuevo pedido de servicio',
    'post_gig_order_greeting'                       => 'Hola {{user_name}},',
    'post_gig_order_content'                        => 'Has recibido un nuevo pedido para el servicio "{{gig_title}}"',

    'buyer_publish_order_variables'                 => '{{user_name}} — Para mostrar el nombre del comprador.',
    'buyer_publish_order_subject'                   => 'Nuevo pedido',
    'buyer_publish_order_greeting'                  => 'Hola {{user_name}},',
    'buyer_publish_order_content'                   => '¡Muchas gracias por ordenar mi servicio! Me pondré en contacto contigo pronto.',


    // ============================ Order Complete request - for buyer ============ \\ done
    'seller_order_complete'                         => 'Solicitud de finalización del pedido',

    'seller_order_complete_variables'               => '{{user_name}} — Para mostrar el nombre del comprador.<br>{{seller_name}} — Para mostrar el nombre del vendedor.<br>{{order_id}} — Para mostrar el número de secuencia del pedido.<br>{{login_url}} — Para mostrar el URL de inicio de sesión.<br>{{activity_link}} — Para mostrar el URL de la actividad.',
    'seller_order_complete_subject'                 => 'Solicitud de finalización del pedido',
    'seller_order_complete_greeting'                => 'Hola {{user_name}},',
    'seller_order_complete_content'                 => 'El vendedor “{{seller_name}}” te ha enviado la entrega final para el pedido #{{order_id}}.<br>Puedes aceptar o rechazar esto. Por favor, inicia sesión en el sitio {{login_url}} y toma una rápida acción en esta actividad {{activity_link}}',

    // ============================ Order Complete delcined request - for seller ============ \\ done
    'order_declined'                                => 'Solicitud de finalización del pedido rechazada',

    'order_declined_variables'                      => '{{user_name}} — Para mostrar el nombre del vendedor.<br>{{buyer_name}} — Para mostrar el nombre del comprador.<br>{{order_id}} — Para mostrar el número de secuencia del pedido.<br>{{buyer_comments}} — Para mostrar los comentarios del comprador.',
    'order_declined_subject'                        => 'Solicitud de finalización del pedido rechazada',
    'order_declined_greeting'                       => 'Hola {{user_name}},',
    'order_declined_content'                        => 'El comprador “{{buyer_name}}” ha rechazado la revisión final y ha dejado algunos comentarios en contra del pedido #{{order_id}}<br>{{buyer_comments}}<br>',

// ============================ Order Completed - for seller ============ \\ dpne
    'order_completed'                                   => 'Pedido completado',

    'order_completed_variables'                         => '{{user_name}} — Para mostrar el nombre del vendedor.<br>{{buyer_name}} — Para mostrar el nombre del comprador.<br>{{order_id}} — Para mostrar el número de secuencia del pedido.<br>{{buyer_comments}} — Para mostrar los comentarios del comprador.,{{buyer_rating}} — Para mostrar la calificación del comprador.',
    'order_completed_subject'                           => 'Pedido completado',
    'order_completed_greeting'                          => 'Hola {{user_name}},',
    'order_completed_content'                           => '¡Felicidades!<br>El comprador “{{buyer_name}}” ha completado el gig en curso con el pedido #{{order_id}} y ha dejado algunos comentarios<br>{{buyer_comments}}<br>{{buyer_rating}}<br>',


// ============================ Order Activity - for seller & buyer ============ \\ done
    'order_activity'                                    => 'Actividad del pedido',
        
    'buyer_order_activity_variables'                    => '{{user_name}} — Para mostrar el nombre del receptor.<br>{{sender_name}} — Para mostrar el nombre del remitente.<br>{{gig_title}} — Para mostrar el título del servicio.<br>{{order_id}} — Para mostrar el número de secuencia del pedido.<br>{{sender_comments}} — Para mostrar los comentarios del remitente.<br>{{login_url}} — Para mostrar el enlace de inicio de sesión.',
    'buyer_order_activity_subject'                      => 'Actividad del pedido',
    'buyer_order_activity_greeting'                     => 'Hola {{user_name}},',
    'buyer_order_activity_content'                      => 'Has recibido una nota de “{{sender_name}}” sobre el servicio en curso “{{gig_title}}” con respecto al pedido #{{order_id}}<br>{{sender_comments}}<br>Puedes iniciar sesión para tomar una acción rápida.<br>{{login_url}}',

    'seller_order_activity_variables'                   => '{{user_name}} — Para mostrar el nombre del receptor.<br>{{sender_name}} — Para mostrar el nombre del remitente.<br>{{gig_title}} — Para mostrar el título del servicio.<br>{{order_id}} — Para mostrar el número de secuencia del pedido.<br>{{sender_comments}} — Para mostrar los comentarios del remitente.<br>{{login_url}} — Para mostrar el enlace de inicio de sesión.',
    'seller_order_activity_subject'                     => 'Actividad del pedido',
    'seller_order_activity_greeting'                    => 'Hola {{user_name}},',
    'seller_order_activity_content'                     => 'Has recibido una nota de “{{sender_name}}” sobre el servicio en curso “{{gig_title}}” con respecto al pedido #{{order_id}}<br>{{sender_comments}}<br>Puedes iniciar sesión para tomar una acción rápida.<br>{{login_url}}',


// ============================New order refund - for seller & admin ============ \\ done
    'order_refund_request'                              => 'Solicitud de reembolso del pedido',
        
    'seller_received_order_dispute_variables'           => '{{user_name}} — Para mostrar el nombre del vendedor.<br>{{buyer_name}} — Para mostrar el nombre del comprador.<br>{{order_id}} — Para mostrar el número de secuencia del pedido.<br>{{buyer_comments}} — Para mostrar los comentarios del comprador.<br>{{login_url}} — Para mostrar el enlace de inicio de sesión.',
    'seller_received_order_dispute_subject'             => 'Se ha recibido una nueva solicitud de reembolso',
    'seller_received_order_dispute_greeting'            => 'Hola {{user_name}},',
    'seller_received_order_dispute_content'             => 'Has recibido una solicitud de reembolso de {{buyer_name}} contra el pedido #{{order_id}}<br>{{buyer_comments}}<br>Puedes aprobar o rechazar la solicitud de reembolso.<br>{{login_url}}',

    'admin_received_order_dispute_variables'            => '{{order_id}} — Para mostrar el número de secuencia del pedido.',
    'admin_received_order_dispute_subject'              => 'Se ha recibido una nueva disputa',
    'admin_received_order_dispute_greeting'             => 'Hola',
    'admin_received_order_dispute_content'              => 'Se ha creado una nueva disputa contra el pedido #{{order_id}}<br>',


// ============================ Refund comment - for buyer & seller ============ \\ done
    'order_refund_reply'                                => 'Comentarios de reembolso del pedido',

    'buyer_order_refund_reply_variables'                => '{{user_name}} — Para mostrar el nombre del receptor.<br>{{sender_name}} — Para mostrar el nombre del remitente.<br>{{order_id}} — Para mostrar el número de secuencia del pedido.<br>{{sender_comments}} — Para mostrar los comentarios del remitente.<br>{{login_url}} — Para mostrar el enlace de inicio de sesión.',
    'buyer_order_refund_reply_subject'                  => 'Nuevo comentario en la solicitud de reembolso',
    'buyer_order_refund_reply_greeting'                 => 'Hola {{user_name}},',
    'buyer_order_refund_reply_content'                  => '“{{sender_name}}” ha dejado algunos comentarios sobre la solicitud de reembolso contra el pedido #{{order_id}}<br>{{sender_comments}}<br>{{login_url}}<br>',

    'seller_order_refund_reply_variables'               => '{{user_name}} — Para mostrar el nombre del receptor.<br>{{sender_name}} — Para mostrar el nombre del remitente.<br>{{order_id}} — Para mostrar el número de secuencia del pedido.<br>{{sender_comments}} — Para mostrar los comentarios del remitente.<br>{{login_url}} — Para mostrar el enlace de inicio de sesión.',
    'seller_order_refund_reply_subject'                 => 'Nuevo comentario en la solicitud de reembolso',
    'seller_order_refund_reply_greeting'                => 'Hola {{user_name}},',
    'seller_order_refund_reply_content'                 => '“{{sender_name}}” ha dejado algunos comentarios sobre la solicitud de reembolso contra el pedido #{{order_id}}<br>{{sender_comments}}<br>{{login_url}}<br>',
// ============================ Dispute order resolved from seller - for buyer ============ \\ done
    'seller_appr_order_dispute_req'                     => 'Reembolso aprobado por el vendedor',

    'seller_appr_order_dispute_req_variables'           => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{sender_name}} — Para mostrar el nombre del vendedor.<br>{{gig_title}} — Para mostrar el título del servicio.',
    'seller_appr_order_dispute_req_subject'             => 'Reembolso aprobado',
    'seller_appr_order_dispute_req_greeting'            => 'Hola {{user_name}},',
    'seller_appr_order_dispute_req_content'             => "¡Felicidades! <br> Tu solicitud de reembolso ha sido aprobada por {{sender_name}} en el servicio “{{gig_title}}”",


// ============================ When order dispute declined by seller to buyer - for buyer ============ \\ (Done)
    'seller_decline_dispute_order'                      => 'Reembolso rechazado por el vendedor',

    'seller_decline_dispute_order_variables'            => '{{user_name}} — Para mostrar el nombre de usuario.<br>{{sender_name}} — Para mostrar el nombre del vendedor.<br>{{gig_title}} — Para mostrar el título del servicio. <br/> {{login_url}} — URL de inicio de sesión del usuario',
    'seller_decline_dispute_order_subject'              => 'Reembolso rechazado',
    'seller_decline_dispute_order_greeting'             => 'Hola {{user_name}}',
    'seller_decline_dispute_order_content'              => "Tu solicitud de reembolso ha sido rechazada por {{sender_name}} en relación con el servicio “{{gig_title}}” <br> Si consideras que esta solicitud era válida, puedes iniciar una disputa desde la página de actividad del pedido de servicio en curso. <br> {{login_url}}",


// ============================ Gig order dispute refunded by admin to winner  ============ \\ (Done)
    'admin_refund_order_dispute_to_winner'              => 'Disputa de orden de servicio a favor del ganador',
        
    'disp_order_fvr_in_seller_var'                      => '{{user_name}} — Para mostrar el nombre del vendedor.',
    'disp_order_fvr_in_seller_sub'                      => 'Disputa resuelta',
    'disp_order_fvr_in_seller_greeting'                 => 'Hola {{user_name}},',
    'disp_order_fvr_in_seller_cont'                     => "¡Felicitaciones! <br>Hemos revisado el reembolso y la disputa y hemos resuelto la disputa a tu favor. Hemos resuelto la disputa de la orden del servicio y el monto se ha agregado a tu cuenta.",

    'disp_order_fvr_in_buyer_var'                       => '{{user_name}} — Para mostrar el nombre del comprador.',
    'disp_order_fvr_in_buyer_sub'                       => 'Disputa resuelta',
    'disp_order_fvr_in_buyer_greeting'                  => 'Hola {{user_name}},',
    'disp_order_fvr_in_buyer_cont'                      => "¡Felicitaciones! <br>Hemos revisado el reembolso y la disputa y hemos resuelto la disputa a tu favor. Hemos resuelto la disputa de la orden del servicio y el monto se ha agregado a tu cuenta.",


// ============================ Gig order dispute refunded by admin to not in favour  ============ \\ (Done)
    'admin_order_dispute_not_in_favour'                 => 'Disputa de orden de servicio no a favor',

    'disp_order_not_in_fvr_seller_var'                  => '{{user_name}} — Para mostrar el nombre del comprador. <br> {{dispute_link}} — Enlace URL de la disputa',
    'disp_order_not_in_fvr_seller_sub'                  => 'Disputa resuelta',
    'disp_order_not_in_fvr_seller_greeting'             => 'Hola {{user_name}},',
    'disp_order_not_in_fvr_seller_cont'                 => "¡Oho! No aprobamos la solicitud de reembolso de la disputa a tu favor.<br>Por favor, haz clic en el botón de abajo para ver los detalles de la disputa.<br>{{dispute_link}}",

    'disp_order_not_in_fvr_buyer_var'                   => '{{user_name}} — Para mostrar el nombre del comprador. <br> {{dispute_link}} — Enlace URL de la disputa',
    'disp_order_not_in_fvr_buyer_sub'                   => 'Disputa resuelta',
    'disp_order_not_in_fvr_buyer_greeting'              => 'Hola {{user_name}},',
    'disp_order_not_in_fvr_buyer_cont'                  => "¡Oho! No aprobamos la solicitud de reembolso de la disputa a tu favor.<br>Por favor, haz clic en el botón de abajo para ver los detalles de la disputa.<br>{{dispute_link}}",

];
