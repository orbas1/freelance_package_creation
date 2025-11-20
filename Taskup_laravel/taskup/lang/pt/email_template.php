<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Email templating languages Lines
    |--------------------------------------------------------------------------
    |
    */

    'email_title'               => 'Título do email',
    'role_type'                 => 'Tipo de papel',
    'all_templates'             => 'Modelos de email',
    'add_email_template'        => 'Adicionar novo modelo',
    'update_email_template'     => 'Atualizar modelo',
    'select_template'           => 'Selecionar modelo',
    'registration_title'        => 'Email de registro',
    'buyer'                     => 'Comprador',        
    'seller'                    => 'Vendedor',        
    'admin'                     => 'Admin',        
    'verfiy_email'              => 'Verificar endereço de email',
    'login_url'                 => '“Login”',
    'ridirect_login'            => 'Redirecionar para login',
    'set_email_status'          => 'Definir status deste email como',
    'reset_password_txt'        => 'Redefinir senha',

    // =========== Email general translation ==================== \\ 
    'email_setting_variable'    => 'Variáveis de configuração de email',
    'greeting'                  => 'Texto de saudação',
    'email_content'             => 'Conteúdo do email',
    'subject'                   => 'Assunto do email',

    // =========================== User Registration by admin notify user  =============== \\
    'user_created_title'                            => 'Novo usuário criado',

    'user_created_variables'                        => '{{user_name}} — Para exibir o nome do usuário.<br> {{site_name}} — Para exibir o nome do site. <br> {{user_email}} — Para exibir o email do usuário. {{password}} — Para exibir a senha do usuário.',
    'user_created_subject'                          => 'Nova conta criada',
    'user_created_greeting'                         => 'Olá {{user_name}},',
    'user_created_content'                          => 'Ótimas notícias! Sua nova conta foi criada pelo administrador do {{site_name}} <br> Por favor, faça login com os detalhes abaixo. <br>Endereço de email:<br>{{user_email}}<br>Senha:<br>{{password}}<br>Obrigado,<br>{{admin_name}}',

    // ===========================User Registration Email =============== \\
    'buyer_registration_email_variable'             => '{{user_name}} — Para exibir o nome do usuário.<br>{{user_email}} — Para exibir o email do usuário.<br>{{user_password}} — Para exibir a senha do usuário.<br>{{site_name}} — Para exibir o nome do site.<br>{{verification_link}} — Para exibir o link de verificação',        
    'buyer_registration_subject'                    => 'Obrigado pelo registro no {{site_name}}',        
    'buyer_registration_greeting'                   => 'Olá {{user_name}}',        
    'buyer_registration_content'                    => 'Obrigado pelo registro no {{site_name}}. Por favor, clique abaixo para verificar seu email <br> {{verification_link}}',

    'seller_registration_email_variable'            => '{{user_name}} — Para exibir o nome do usuário.<br>{{user_email}} — Para exibir o email do usuário.<br>{{user_password}} — Para exibir a senha do usuário.<br>{{site_name}} — Para exibir o nome do site.<br>{{verification_link}} — Para exibir o link de verificação',        
    'seller_registration_subject'                   => 'Obrigado pelo registro no {{site_name}}', 
    'seller_registration_greeting'                  => 'Olá {{user_name}}',
    'seller_registration_content'                   => 'Obrigado pelo registro no {{site_name}}. Por favor, clique abaixo para verificar seu email <br> {{verification_link}}',

    'user_registerd_to_admin_variable'              => '{{user_name}} — Para exibir o nome do usuário.<br>{{user_email}} — Para exibir o email do usuário',
    'user_registerd_to_admin_subject'               => 'Obrigado pelo registro no {{site_name}}', 
    'user_registerd_to_admin_greeting'              => 'Olá',
    'user_registerd_to_admin_content'               => 'Um novo usuário se registrou no site com o nome <br> "{{user_name}}" e endereço de email "{{user_email}}"',

    //========================= Account approval request =========================\\
    'account_approval_title'                        => 'Pedido de aprovação de conta',

    'buyer_account_approval_variables'              => '{{user_name}} — Para exibir o nome do usuário.<br>{{user_email}} — Para exibir o email do usuário.<br>{{user_password}} — Para exibir a senha do usuário.<br>{{site_name}} — Para exibir o nome do site.',
    'buyer_account_approval_subject'                => 'Obrigado pelo registro no {{site_name}}',
    'buyer_account_approval_greeting'               => 'Olá {{user_name}},',
    'buyer_account_approval_content'                => 'Obrigado pelo registro no {{site_name}}. Sua conta será aprovada após a verificação.',

    'seller_account_approval_variables'             => '{{user_name}} — Para exibir o nome do usuário.<br>{{user_email}} — Para exibir o email do usuário.<br>{{user_password}} — Para exibir a senha do usuário.<br>{{site_name}} — Para exibir o nome do site.',
    'seller_account_approval_subject'               => 'Obrigado pelo registro no {{site_name}}',
    'seller_account_approval_greeting'              => 'Olá {{user_name}},',
    'seller_account_approval_content'               => 'Obrigado pelo registro no {{site_name}}. Sua conta será aprovada após a verificação.',

    'admin_account_approval_variables'              => '{{user_email}} — Para exibir o email do usuário.<br>{{user_password}} — Para exibir a senha do usuário.<br>{{site_name}} — Para exibir o nome do site.<br>{{login_url}} — URL de login do usuário.',
    'admin_account_approval_subject'                => 'Obrigado pelo registro no {{site_name}}',
    'admin_account_approval_greeting'               => 'Olá,',
    'admin_account_approval_content'                => 'Um novo usuário se registrou no site com o nome {{user_name}} e endereço de email {{user_email}}. <br> O registro está pendente de aprovação, você pode fazer login {{login_url}} no painel administrativo para aprovar a conta',
    
    //========================= Account approved =========================\\ (done)
    'account_approved_title'                        => 'Conta aprovada',

    'buyer_account_approved_variables'              => '{{user_name}} — Para exibir o nome do usuário.<br>{{user_email}} — Para exibir o email do usuário.<br>{{site_name}} — Para exibir o nome do site.',
    'buyer_account_approved_subject'                => 'Conta aprovada.',
    'buyer_account_approved_greeting'               => 'Olá {{user_name}},',
    'buyer_account_approved_content'                => 'Parabéns! Sua conta foi aprovada pelo administrador.',

    'seller_account_approved_variables'             => '{{user_name}} — Para exibir o nome do usuário.<br>{{user_email}} — Para exibir o email do usuário.<br>{{site_name}} — Para exibir o nome do site.',
    'seller_account_approved_subject'               => 'Conta aprovada.',
    'seller_account_approved_greeting'              => 'Olá {{user_name}},',
    'seller_account_approved_content'               => 'Parabéns! Sua conta foi aprovada pelo administrador.',

    //=========================== Reset password ================================\\ (Done)

    'reset_password'                                => 'Redefinir senha',

    'buyer_reset_password_variables'                => '{{account_email}} — Para exibir o email do usuário.<br>{{reset_link}} — Para exibir o link de redefinição de senha.',
    'buyer_reset_password_subject'                  => 'Redefinir senha.',
    'buyer_reset_password_greeting'                 => 'Olá,',
    'buyer_reset_password_content'                  => 'Alguém solicitou a redefinição da senha da seguinte conta: <br> Endereço de Email: {{account_email}} <br>Se isso foi um erro, basta ignorar este email e nada acontecerá.<br>Para redefinir sua senha, clique no link de redefinição abaixo:<br>{{reset_link}}',

    'seller_reset_password_variables'               => '{{account_email}} — Para exibir o email do usuário.<br>{{reset_link}} — Para exibir o link de redefinição de senha.',
    'seller_reset_password_subject'                 => 'Redefinir senha.',
    'seller_reset_password_greeting'                => 'Olá,',
    'seller_reset_password_content'                 => 'Alguém solicitou a redefinição da senha da seguinte conta: <br> Endereço de Email: {{account_email}} <br>Se isso foi um erro, basta ignorar este email e nada acontecerá.<br>Para redefinir sua senha, clique no link de redefinição abaixo:<br>{{reset_link}}',

    //===================================== Account identity request to Admin - for admin ====================\\ (done)
    'accout_identity_verification'                  => 'Verificação de identidade da conta',

    'identity_verification_variables'               => '{{user_name}} — Para exibir o nome do usuário.<br>{{login_url}} — URL de login do usuário',
    'identity_verification_subject'                 => 'Novo pedido recebido para verificação de identidade',
    'identity_verification_greeting'                => 'Olá,',
    'identity_verification_content'                 => '{{user_name}} enviou documento para verificação de identidade. A verificação da conta está pendente de aprovação, você pode fazer {{login_url}} no painel administrativo para aprovar a verificação de identidade.',

    //===================================== Account identity rejection ====================\\ (done)
    'accout_identity_rejection'                     => 'Rejeição de identidade da conta',

    'buyer_identity_rejection_variables'            => '{{user_name}} — Para exibir o nome do usuário.<br>{{user_link}} — Para exibir o link do usuário que enviou a verificação de identidade.<br>{{admin_message}} — Para exibir a mensagem do administrador de rejeição.<br>{{user_email}} — Para exibir o endereço de email do usuário que enviou a solicitação de verificação de identidade.',
    'buyer_identity_rejection_subject'              => 'Seu pedido de verificação de identidade foi rejeitado',
    'buyer_identity_rejection_greeting'             => 'Olá {{user_name}},',
    'buyer_identity_rejection_content'              => 'O documento que você enviou para verificação de identidade foi rejeitado.<br>{{admin_message}}',

    'seller_identity_rejection_variables'           => '{{user_name}} — Para exibir o nome do usuário.<br>{{user_link}} — Para exibir o link do usuário que enviou a verificação de identidade.<br>{{admin_message}} — Para exibir a mensagem do administrador de rejeição.<br>{{user_email}} — Para exibir o endereço de email do usuário que enviou a solicitação de verificação de identidade.',
    'seller_identity_rejection_subject'             => 'Seu pedido de verificação de identidade foi rejeitado',
    'seller_identity_rejection_greeting'            => 'Olá {{user_name}},',
    'seller_identity_rejection_content'             => 'O documento que você enviou para verificação de identidade foi rejeitado.<br>{{admin_message}}',

    //====================================== Account identity approved ========================= \\ (Done)
    'account_identity_approved'                     => 'Identidade da conta aprovada',

    'buyer_identity_approved_variables'             => '{{user_name}} — Para exibir o nome do usuário.<br>{{user_link}} — Para exibir o link do usuário que enviou a verificação de identidade.<br>{{user_email}} — Para exibir o endereço de email do usuário que enviou a solicitação de verificação de identidade.',
    'buyer_identity_approved_subject'               => 'Seu pedido de verificação de identidade foi aprovado',
    'buyer_identity_approved_greeting'              => 'Olá {{user_name}},',
    'buyer_identity_approved_content'               => 'Parabéns!<br>Seus documentos enviados para verificação de identidade foram aprovados.',

    'seller_identity_approved_variables'            => '{{user_name}} — Para exibir o nome do usuário.<br>{{user_link}} — Para exibir o link do usuário que enviou a verificação de identidade.<br>{{user_email}} — Para exibir o endereço de email do usuário que enviou a solicitação de verificação de identidade.',
    'seller_identity_approved_subject'              => 'Seu pedido de verificação de identidade foi aprovado',
    'seller_identity_approved_greeting'             => 'Olá {{user_name}},',
    'seller_identity_approved_content'              => 'Parabéns!<br>Seus documentos enviados para verificação de identidade foram aprovados.',

    // ============================ When new dispute is created by buyer to seller ============ \\ (Done)
    'seller_dispute_received'                       => 'Disputa criada pelo comprador para o vendedor',

    'seller_dispute_received_variables'             => '{{user_name}} — Para exibir o nome do vendedor.<br>{{buyer_name}} — Para exibir o nome do comprador.<br>{{project_title}} — Para exibir o título do projeto.<br>{{buyer_comments}} — Para exibir os comentários do comprador.<br>{{login_url}} — URL de login do usuário',
    'seller_dispute_received_subject'               => 'Recebido novo pedido de reembolso',
    'seller_dispute_received_greeting'              => 'Olá {{user_name}}',
    'seller_dispute_received_content'               => 'Você recebeu um pedido de reembolso de {{buyer_name}} para o projeto "{{project_title}}".<br>{{buyer_comments}} </br>Você pode aprovar ou recusar o pedido de reembolso.<br>{{login_url}}',

    // ============================ When dispute approved by seller to buyer ============ \\ (Done)
    'seller_approved_dispute_req'                   => 'Reembolso aprovado pelo vendedor',

    'seller_approved_dispute_req_variables'         => '{{user_name}} — Para exibir o nome do usuário.<br>{{sender_name}} — Para exibir o nome do vendedor.<br>{{project_title}} — Para exibir o título do projeto.',
    'seller_approved_dispute_req_subject'           => 'Reembolso aprovado',
    'seller_approved_dispute_req_greeting'          => 'Olá {{user_name}},',
    'seller_approved_dispute_req_content'           => 'Parabéns! <br> Seu pedido de reembolso foi aprovado pelo {{sender_name}} para o projeto "{{project_title}}"',

    // ============================ When dispute declined by seller to buyer ============ \\ (Done)
    'seller_decline_dispute'                        => 'Reembolso recusado pelo vendedor',

    'seller_decline_dispute_variables'              => '{{user_name}} — Para exibir o nome do usuário.<br>{{sender_name}} — Para exibir o nome do remetente.<br>{{project_title}} — Para exibir o título do projeto.<br>{{login_url}} — URL de login do usuário',
    'seller_decline_dispute_subject'                => 'Reembolso recusado',
    'seller_decline_dispute_greeting'               => 'Olá {{user_name}}',
    'seller_decline_dispute_content'                => 'Seu pedido de reembolso foi recusado pelo {{sender_name}} para o projeto "{{project_title}}"<br>Se você acredita que este pedido era válido, você pode abrir uma disputa na página de atividade do projeto em andamento.<br>{{login_url}}',

    // ============================ comment on refund request ============ \\ (Done)
    'comment_on_dispute'                            => 'Comentários sobre reembolso',

    'seller_dispute_comment_variables'              => '{{user_name}} — Para exibir o nome do usuário.<br>{{sender_name}} — Para exibir o nome do remetente.<br>{{project_title}} — Para exibir o título do projeto.<br>{{sender_comments}} — Para exibir o comentário.<br>{{login_url}} — URL de login do usuário.',
    'seller_dispute_comment_subject'                => 'Novo comentário sobre pedido de reembolso',
    'seller_dispute_comment_greeting'               => 'Olá {{user_name}}',
    'seller_dispute_comment_content'                => 'O “{{sender_name}}” deixou alguns comentários sobre o pedido de reembolso para o projeto “{{project_title}}”<br>{{sender_comments}} <br> {{login_url}}',

    'buyer_dispute_comment_variables'               => '{{user_name}} — Para exibir o nome do usuário.<br>{{sender_name}} — Para exibir o nome do remetente.<br>{{project_title}} — Para exibir o título do projeto.<br>{{sender_comments}} — Para exibir o comentário.<br>{{login_url}} — URL de login do usuário.',
    'buyer_dispute_comment_subject'                 => 'Novo comentário sobre pedido de reembolso',
    'buyer_dispute_comment_greeting'                => 'Olá {{user_name}}',
    'buyer_dispute_comment_content'                 => 'O “{{sender_name}}” deixou alguns comentários sobre o pedido de reembolso para o projeto “{{project_title}}”<br>{{sender_comments}} <br> {{login_url}}',

 
// ============================ new dispute received to admin ============ \\ (Done)
    'admin_received_dispute'                        => 'Disputa recebida pelo administrador',

    'admin_received_dispute_variables'              => "{{project_title}} — Para exibir o título do projeto.<br>{{type}} — Para exibir o tipo como 'projeto' ou 'gig'",
    'admin_received_dispute_subject'                => 'Nova disputa recebida',
    'admin_received_dispute_greeting'               => 'Olá',
    'admin_received_dispute_content'                => "Uma nova disputa foi criada contra o {{type}} “{{project_title}}”",
// ============================ dispute refunded in hourly project by admin to winner  ============ \\ (Done)
    'admin_refund_hourly_dispute_to_winner'         => 'Disputa de projeto por hora a favor do vencedor',

    'hourly_dispute_favour_in_seller_variables'     => '{{user_name}} — Para exibir o nome do vendedor.',
    'hourly_dispute_favour_in_seller_subject'       => 'Disputa resolvida',
    'hourly_dispute_favour_in_seller_greeting'      => 'Olá {{user_name}},',
    'hourly_dispute_favour_in_seller_content'       => "Parabéns! <br> Passamos pela devolução e pela disputa e resolvemos a disputa a seu favor. Nós disputamos o projeto.",

    'hourly_dispute_favour_in_buyer_variables'      => '{{user_name}} — Para exibir o nome do comprador.',
    'hourly_dispute_favour_in_buyer_subject'        => 'Disputa resolvida',
    'hourly_dispute_favour_in_buyer_greeting'       => 'Olá {{user_name}},',
    'hourly_dispute_favour_in_buyer_content'        => "Parabéns! <br> Passamos pela devolução e pela disputa e resolvemos a disputa a seu favor. Nós disputamos o projeto.",

// ============================ dispute refunded in fixed and milestone project by admin to winner  ============ \\ (Done)
    'admin_refund_dispute_to_winner'                => 'Disputa de projeto a favor do vencedor',

    'dispute_favour_in_seller_variables'            => '{{user_name}} — Para exibir o nome do vendedor.',
    'dispute_favour_in_seller_subject'              => 'Disputa resolvida',
    'dispute_favour_in_seller_greeting'             => 'Olá {{user_name}},',
    'dispute_favour_in_seller_content'              => "Parabéns! <br> Passamos pela devolução e pela disputa e resolvemos a disputa a seu favor. Nós disputamos o projeto e o valor foi adicionado à sua conta.",

    'dispute_favour_in_buyer_variables'             => '{{user_name}} — Para exibir o nome do comprador.',
    'dispute_favour_in_buyer_subject'               => 'Disputa resolvida',
    'dispute_favour_in_buyer_greeting'              => 'Olá {{user_name}},',
    'dispute_favour_in_buyer_content'               => "Parabéns! <br> Passamos pela devolução e pela disputa e resolvemos a disputa a seu favor. Nós disputamos o projeto e o valor foi adicionado à sua conta.",

    // ============================ dispute refunded by admin to not in favour  ============ \\ (Done)
    'admin_dispute_not_in_favour'                   => 'Disputa de projeto não a favor',

    'dispute_not_in_favour_seller_variables'        => '{{user_name}} — Para exibir o nome do comprador. <br> {{dispute_link}} — Link URL da disputa',
    'dispute_not_in_favour_seller_subject'          => 'Disputa resolvida',
    'dispute_not_in_favour_seller_greeting'         => 'Olá {{user_name}},',
    'dispute_not_in_favour_seller_content'          => "Opa! Não aprovamos o pedido de reembolso da disputa a seu favor.<br> Clique no botão abaixo para ver os detalhes da disputa.<br>{{dispute_link}}",

    'dispute_not_in_favour_buyer_variables'         => '{{user_name}} — Para exibir o nome do comprador. <br> {{dispute_link}} — Link URL da disputa',
    'dispute_not_in_favour_buyer_subject'           => 'Disputa resolvida',
    'dispute_not_in_favour_buyer_greeting'          => 'Olá {{user_name}},',
    'dispute_not_in_favour_buyer_content'           => "Opa! Não aprovamos o pedido de reembolso da disputa a seu favor.<br> Clique no botão abaixo para ver os detalhes da disputa.<br>{{dispute_link}}",

    // ============================ package purchase - for seller and buyer ============ \\ (Done)
    'package_purchase'                              => 'Compra de pacote',

    'package_purchase_by_seller_variables'          => '{{user_name}} — Para exibir o nome do usuário.<br>{{package_name}} — Para exibir o nome do pacote.',
    'package_purchase_by_seller_subject'            => 'Obrigado por comprar o pacote',
    'package_purchase_by_seller_greeting'           => 'Olá {{user_name}},',
    'package_purchase_by_seller_content'            => 'Obrigado por comprar o pacote “{{package_name}}”<br>Agora você pode publicar um serviço e receber pedidos.',

    'package_purchase_by_buyer_variables'           => '{{user_name}} — Para exibir o nome do usuário.<br>{{package_name}} — Para exibir o nome do pacote.',
    'package_purchase_by_buyer_subject'             => 'Obrigado por comprar o pacote',
    'package_purchase_by_buyer_greeting'            => 'Olá {{user_name}},',
    'package_purchase_by_buyer_content'             => 'Obrigado por comprar o pacote “{{package_name}}”<br>Agora você pode criar projetos.',

    'package_purchase_to_admin_variables'           => '{{user_name}} — Para exibir o nome do usuário.<br>{{package_name}} — Para exibir o nome do pacote.<br> {{purchaser_name}} — Para exibir o nome do comprador.<br>{{current_date}} — Para exibir a data da compra.',
    'package_purchase_to_admin_subject'             => 'Novo pacote comprado por “{{purchaser_name}}”',
    'package_purchase_to_admin_greeting'            => 'Olá,',
    'package_purchase_to_admin_content'             => 'Uma nova compra do pacote “{{package_name}}” foi feita por “{{purchaser_name}}” em “{{current_date}}”',

    // ============================ send message on project conversation ============ \\ (Done)
    'project_conversation'                          => 'Conversa do projeto',

    'seller_project_conv_var'                       => '{{user_name}} — Para exibir o nome do usuário.<br>{{sender_name}} — Para exibir o nome do remetente.<br> {{project_title}} — Para exibir o título do projeto. <br> {{login_url}} — URL de login do usuário.',
    'seller_project_conv_subj'                      => 'Nova mensagem recebida',
    'seller_project_conv_greeting'                  => 'Olá {{user_name}}',
    'seller_project_conv_cont'                      => "{{sender_name}} enviou uma nova mensagem em um projeto “{{project_title}}”.<br>Clique no link abaixo para ler a mensagem.<br>{{login_url}}",

    'buyer_project_conv_var'                        => '{{user_name}} — Para exibir o nome do usuário.<br> {{sender_name}} — Para exibir o nome do remetente.<br>{{project_title}} — Para exibir o título do projeto. <br> {{login_url}} — URL de login do usuário.',
    'buyer_project_conv_subj'                       => 'Nova mensagem recebida',
    'buyer_project_conv_greeting'                   => 'Olá {{user_name}}',
    'buyer_project_conv_cont'                       => "{{sender_name}} enviou uma nova mensagem em um projeto “{{project_title}}”.<br>Clique no link abaixo para ler a mensagem.<br>{{login_url}}",
     
    // ============================ Project submission when verification by admin and sent to buyer - for buyer and admin(Done) ============ \\ (Done)
    'project_posted'                                => 'Submissão de Projeto',

    'project_posted_by_buyer_variables'             => '{{user_name}} — Para exibir o nome do usuário.',
    'project_posted_by_buyer_subject'               => 'Submissão de Projeto',
    'project_posted_by_buyer_greeting'              => 'Olá {{user_name}},',
    'project_posted_by_buyer_content'               => 'Obrigado por submeter o projeto. Vamos revisar e aprovar o projeto após a análise.',

    'project_posted_to_admin_variables'             => '{{user_name}} — Para exibir o nome do usuário.<br>{{project_link}} — URL de visualização do projeto.',
    'project_posted_to_admin_subject'               => 'Nova submissão de projeto',
    'project_posted_to_admin_greeting'              => 'Olá,',
    'project_posted_to_admin_content'               => 'Novo projeto submetido por “{{user_name}}” e aguardando aprovação. Por favor, clique no link abaixo para mais detalhes.<br> {{project_link}}',

    // ============================ Project invite request from buyer to seller - for seller ============ \\ (Done)
    'project_invite_request'                        => 'Convite de Projeto Enviado',

    'project_invite_request_variables'              => '{{user_name}} — Para exibir o nome do usuário. <br> {{project_title}} — Para exibir o título do projeto.',
    'project_invite_request_subject'                => 'Você recebeu um convite para um projeto',
    'project_invite_request_greeting'               => 'Olá {{user_name}},',
    'project_invite_request_content'                => 'Parabéns! Você recebeu um novo convite para o projeto “{{project_title}}”.',

    // ============================ Project approved acknowledgement to buyer - for buyer ============ \\ (Done)
    'project_approved'                              => 'Projeto aprovado',

    'project_approved_to_buyer_variables'           => '{{user_name}} — Para exibir o nome do usuário.<br> {{project_title}} — Para exibir o título do projeto.<br>{{project_link}} — Para exibir o link do projeto.',
    'project_approved_to_buyer_subject'             => 'Submissão de projeto',
    'project_approved_to_buyer_greeting'            => 'Olá {{user_name}},',
    'project_approved_to_buyer_content'             => 'Uau! Seu projeto “{{project_title}}” foi aprovado.<br>Clique no botão abaixo para visualizar o projeto.<br>{{project_link}}',

    // ============================ proposal submit request - for buyer ============ \\ (Doen)
    'proposal_approve_request'                      => 'Submeter Proposta',

    'proposal_approve_request_variables'            => '{{user_name}} — Para exibir o nome do usuário.<br> {{seller_name}} — Para exibir o nome do vendedor <br> {{project_title}} — Para exibir o título do projeto.<br>{{proposal_link}} — Para exibir o link da proposta.',
    'proposal_approve_request_subject'              => 'Submissão de proposta',
    'proposal_approve_request_greeting'             => 'Olá {{user_name}},',
    'proposal_approve_request_content'              => '{{seller_name}} submeteu uma nova proposta para "{{project_title}}". <br> Clique no botão abaixo para visualizar a proposta. <br> {{proposal_link}}',

    // ============================ seller complete project contract request to buyer - for buyer ============ \\ (Doen)
    'project_complete_request'                  => 'Concluir Contrato do Projeto',

    'project_complete_request_variables'        => '{{user_name}} — Para exibir o nome do usuário.<br> {{seller_name}} — Para exibir o nome do vendedor <br> {{project_title}} — Para exibir o título do projeto.<br>{{project_activity_link}} — Para exibir o URL da atividade do projeto.',
    'project_complete_request_subject'          => 'Enviar solicitação de conclusão do projeto',
    'project_complete_request_greeting'         => 'Olá {{user_name}},',
    'project_complete_request_content'          => '{{seller_name}} enviou uma solicitação de conclusão de contrato para o projeto "{{project_title}}". <br> Clique no botão abaixo para visualizar a atividade do projeto. <br> {{project_activity_link}}',

    // ============================ seller complete project contract request declined from buyer - for seller ============ \\ (Doen)
    'project_complete_req_declined'                 => 'Pedido de conclusão de projeto recusado',

    'proj_complete_req_declined_variables'          => '{{user_name}} — Para exibir o nome do usuário.<br>{{project_title}} — Para exibir o título do projeto.<br>{{declined_reason}} - Para exibir o motivo da recusa.<br>{{project_activity_link}} — Para exibir o URL da atividade do projeto.',
    'proj_complete_req_declined_subject'            => 'Pedido de conclusão de projeto recusado',
    'proj_complete_req_declined_greeting'           => 'Olá {{user_name}},',
    'proj_complete_req_declined_content'            => 'Seu pedido de conclusão de contrato foi recusado para o projeto "{{project_title}}".<br>{{declined_reason}}<br> Clique no botão abaixo para visualizar a atividade do projeto.<br>{{project_activity_link}}',

    // ============================ Milestone project complete from buyer - for seller ============ \\ (Doen)
    'milestone_project_complete'                   => 'Conclusão do contrato do projeto por etapas',

    'milestone_project_comp_var'                   => '{{user_name}} — Para exibir o nome do usuário.<br>{{project_title}} — Para exibir o título do projeto.<br>{{project_activity_link}} — Para exibir o URL da atividade do projeto.',
    'milestone_project_comp_subj'                  => 'Conclusão do contrato do projeto por etapas',
    'milestone_project_comp_greeting'              => 'Olá {{user_name}},',
    'milestone_project_comp_cont'                  => 'O projeto "{{project_title}}" foi concluído.<br>{{project_activity_link}}',
    
    // ============================ seller complete project contract request accepter from buyer - for seller ============ \\ (Doen)
    'project_complete_request_accepted'             => 'Pedido de conclusão do projeto aprovado',

    'proj_comp_req_accept_var'                      => '{{user_name}} — Para exibir o nome do usuário.<br>{{project_title}} — Para exibir o título do projeto.<br>{{project_activity_link}} — Para exibir o URL da atividade do projeto.',
    'proj_comp_req_accept_sub'                      => 'Pedido de conclusão do projeto aprovado',
    'proj_comp_req_accept_greeting'                 => 'Olá {{user_name}},',
    'proj_comp_req_accept_cont'                     => 'Seu pedido de submissão de contrato completo foi aprovado para o projeto "{{project_title}}". <br> Clique no botão abaixo para visualizar a atividade do projeto. <br> {{project_activity_link}}',

    // ============================ proposal submit request declined from buyer  - for seller ============ \\ (Done)
    'proposal_request_declined'                     => 'Proposta enviada foi recusada',

    'proposal_request_declined_variables'           => '{{user_name}} — Para exibir o nome do usuário.<br> {{project_title}} — Para exibir o título do projeto.<br>{{decline_reason}} — Para exibir o motivo da recusa.',
    'proposal_request_declined_subject'             => 'Proposta enviada foi recusada',
    'proposal_request_declined_greeting'            => 'Olá {{user_name}},',
    'proposal_request_declined_content'             => 'Opa! Sua proposta enviada foi recusada para o projeto "{{project_title}}".<br>{{decline_reason}}',

    // ============================ proposal submit accpeted from buyer  - for seller ============ \\ (done)
    'proposal_request_accepted'                     => 'Proposta enviada foi aceita',

    'proposal_request_accepted_variables'           => '{{user_name}} — Para exibir o nome do usuário.<br> {{project_title}} — Para exibir o título do projeto.<br>{{project_activity_link}} — Para exibir a atividade do projeto.',
    'proposal_request_accepted_subject'             => 'Proposta enviada foi aceita',
    'proposal_request_accepted_greeting'            => 'Olá {{user_name}},',
    'proposal_request_accepted_content'             => 'Uhu! Sua proposta enviada para “{{project_title}}” foi aceita.<br>Por favor, clique no botão abaixo para visualizar a atividade do projeto.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request from seller - for buyer ============ \\ (done)
    'milestone_approve_request'                     => 'Pedido de aprovação de marco',
    'milestone_approve_request_variables'           => '{{user_name}} — Para exibir o nome do usuário.<br> {{milestone_title}} — Para exibir o título do marco. <br> {{project_title}} — Para exibir o título do projeto.<br> {{seller_name}} — Para exibir o nome do vendedor <br> {{project_activity_link}} — Para exibir a atividade do projeto.',
    'milestone_approve_request_subject'             => 'Pedido de aprovação de marco',
    'milestone_approve_request_greeting'            => 'Olá {{user_name}},',
    'milestone_approve_request_content'             => 'Um novo marco "{{milestone_title}}" do projeto "{{project_title}}" foi recebido para aprovação pelo "{{seller_name}}" <br> Por favor, clique no botão abaixo para visualizar o marco.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request declined from buyer - for seller ============ \\ (Done)
    'milestone_declined'                            => 'Envio de marco rejeitado',
        
    'milestone_declined_variables'                  => '{{user_name}} — Para exibir o nome do usuário.<br> {{milestone_title}} — Para exibir o título do marco. <br> {{project_title}} — Para exibir o título do projeto.<br>{{project_activity_link}} — Para exibir a atividade do projeto.',
    'milestone_declined_subject'                    => 'Envio de marco rejeitado',
    'milestone_declined_greeting'                   => 'Olá {{user_name}},',
    'milestone_declined_content'                    => 'Opa! Seu envio do marco "{{milestone_title}}" do projeto "{{project_title}}" foi rejeitado.<br>Por favor, clique no botão abaixo para visualizar o marco.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request accepted from buyer - for seller ============ \\
    'milestone_accepted'                            => 'Envio de marco aceito',
        
    'milestone_accepted_variables'                  => '{{user_name}} — Para exibir o nome do usuário.<br> {{milestone_title}} — Para exibir o título do marco. <br> {{project_title}} — Para exibir o título do projeto.<br>{{project_activity_link}} — Para exibir a atividade do projeto.',
    'milestone_accepted_subject'                    => 'Envio de marco aceito',
    'milestone_accepted_greeting'                   => 'Olá {{user_name}},',
    'milestone_accepted_content'                    => 'Uhuu! Seu envio do marco "{{milestone_title}}" do projeto "{{project_title}}" foi aprovado.<br>Por favor, clique no botão abaixo para visualizar o marco.<br>{{project_activity_link}}',

     // ============================ proposal milestone escrow from buyer - for seller ============ \\
    'escrow_milestone'                             => 'Pagamento em custódia do marco',
        
    'escrow_milestone_variables'                  => '{{user_name}} — Para exibir o nome do usuário.<br>{{milestone_title}} — Para exibir o título do marco. <br>{{project_title}} — Para exibir o título do projeto.<br>{{project_activity_link}} — Para exibir a atividade do projeto.',
    'escrow_milestone_subject'                    => 'Envio de pagamento em custódia do marco',
    'escrow_milestone_greeting'                   => 'Olá {{user_name}},',
    'escrow_milestone_content'                    => 'O pagamento em custódia foi feito para o marco "{{milestone_title}}" do projeto "{{project_title}}".<br>Clique no botão abaixo para visualizar o marco.<br>{{project_activity_link}}',
     
    // ============================ pedido de aprovação de cartão de ponto - para o comprador ============ \\
    'timecard_approval_request'                     => 'Enviar pedido de aprovação de cartão de ponto',

    'timecard_approval_request_variables'           => '{{user_name}} — Para exibir o nome do usuário.<br> {{timecard_title}} — Para exibir o título do cartão de ponto. <br> {{project_title}} — Para exibir o título do projeto.<br> {{project_activity_link}} — Para exibir a atividade do projeto.<br>{{seller_name}} — Para exibir o nome do vendedor',
    'timecard_approval_request_subject'             => 'Novo pedido de aprovação de cartão de ponto',
    'timecard_approval_request_greeting'            => 'Olá {{user_name}},',
    'timecard_approval_request_content'             => 'Recebemos um novo pedido de aprovação para o cartão de ponto "{{timecard_title}}" do projeto "{{project_title}}" de "{{seller_name}}".<br>Clique no botão abaixo para visualizar os detalhes do cartão de ponto.<br>{{project_activity_link}}',

    // ============================ pedido de aprovação de cartão de ponto recusado pelo comprador - para o vendedor ============ \\
    'timecard_declined'                           => 'Pedido de aprovação de cartão de ponto recusado',

    'timecard_declined_variables'                 => '{{user_name}} — Para exibir o nome do usuário.<br> {{timecard_title}} — Para exibir o título do cartão de ponto. <br> {{project_title}} — Para exibir o título do projeto.<br>{{decline_reason}} — Para exibir o motivo da recusa do cartão de ponto. <br> {{project_activity_link}} — Para exibir a atividade do projeto.',
    'timecard_declined_subject'                   => 'Pedido de aprovação de cartão de ponto recusado',
    'timecard_declined_greeting'                  => 'Olá {{user_name}},',
    'timecard_declined_content'                   => 'Opa! Seu pedido de aprovação do cartão de ponto "{{timecard_title}}" do projeto "{{project_title}}" foi recusado.<br>{{decline_reason}}<br>Clique no botão abaixo para visualizar os detalhes do cartão de ponto.<br>{{project_activity_link}}',

    // ============================ pedido de aprovação de cartão de ponto aceito pelo comprador - para o vendedor ============ \\
    'timecard_accepted'                             => 'Pedido de aprovação de cartão de ponto aceito',

    'timecard_accepted_variables'                   => '{{user_name}} — Para exibir o nome do usuário.<br> {{timecard_title}} — Para exibir o título do cartão de ponto. <br> {{project_title}} — Para exibir o título do projeto.<br>{{project_activity_link}} — Para exibir a atividade do projeto.',
    'timecard_accepted_subject'                     => 'Pedido de aprovação de cartão de ponto aceito',
    'timecard_accepted_greeting'                    => 'Olá {{user_name}},',
    'timecard_accepted_content'                     => 'Parabéns! Seu pedido de aprovação do cartão de ponto "{{timecard_title}}" contra o projeto "{{project_title}}" foi aceito.<br>Clique no botão abaixo para visualizar os detalhes do cartão de ponto.<br>{{project_activity_link}}',

    // ============================ enviar pergunta para o administrador - para o administrador ============ \\
    'send_qeustion'                                 => 'Enviar pergunta',

    'send_qeustion_variables'                       => '{{user_name}} — Para exibir o nome do usuário.<br> {{user_email}} — Para exibir o e-mail do usuário. <br> {{question_title}} — Para exibir o título da pergunta.<br> {{description}} — Para exibir a descrição da pergunta.<br>{{login_url}} — Para exibir o botão de login.',
    'send_qeustion_subject'                         => 'Você recebeu uma pergunta',
    'send_qeustion_greeting'                        => 'Olá,',
    'send_qeustion_content'                         => '{{user_name}} fez uma pergunta/solicitação com os seguintes detalhes. <br> Nome: {{user_name}} <br> Email: {{user_email}}<br>Título do Tópico:<br>{{question_title}}<br>Descrição:<br>{{description}}<br>Por favor, faça login no link abaixo para visualizar os detalhes.<br>{{login_url}}',

// ============================ postar pedido de serviço - para o vendedor ============ \\
'post_gig_order'                                => 'Publicar um novo pedido',

'post_gig_order_variables'                      => '{{user_name}} — Para exibir o nome do vendedor.<br> {{gig_title}} — Para exibir o título do serviço.',
'post_gig_order_subject'                        => 'Um novo pedido de serviço',
'post_gig_order_greeting'                       => 'Olá {{user_name}},',
'post_gig_order_content'                        => 'Você recebeu um novo pedido para o serviço "{{gig_title}}"',

'buyer_publish_order_variables'                 => '{{user_name}} — Para exibir o nome do comprador.',
'buyer_publish_order_subject'                   => 'Novo pedido',
'buyer_publish_order_greeting'                  => 'Olá {{user_name}},',
'buyer_publish_order_content'                   => 'Muito obrigado por encomendar meu serviço. Entrarei em contato em breve.',

// ============================ Pedido de conclusão do pedido - para o comprador ============ \\
'seller_order_complete'                         => 'Pedido de conclusão do pedido',
    
'seller_order_complete_variables'               => '{{user_name}} — Para exibir o nome do comprador.<br>{{seller_name}} — Para exibir o nome do vendedor.<br>{{order_id}} — Para exibir o número sequencial do pedido.<br>{{login_url}} — Para exibir o URL de login.<br>{{activity_link}} — Para exibir o URL da atividade',
'seller_order_complete_subject'                 => 'Pedido de conclusão do pedido',
'seller_order_complete_greeting'                => 'Olá {{user_name}},',
'seller_order_complete_content'                 => 'O vendedor "{{seller_name}}" enviou a entrega final para o seu pedido #{{order_id}}<br>Você pode aceitar ou recusar isso. Por favor, faça login no site {{login_url}} e tome uma ação rápida nesta atividade {{activity_link}}',

// ============================ Pedido de conclusão do pedido recusado - para o vendedor ============ \\
'order_declined'                                => 'Pedido de conclusão do pedido recusado',
    
'order_declined_variables'                      => '{{user_name}} — Para exibir o nome do vendedor.<br>{{buyer_name}} — Para exibir o nome do comprador.<br>{{order_id}} — Para exibir o número sequencial do pedido.<br>{{buyer_comments}} — Para exibir os comentários do comprador.',
'order_declined_subject'                        => 'Pedido de conclusão do pedido recusado',
'order_declined_greeting'                       => 'Olá {{user_name}},',
'order_declined_content'                        => 'O comprador "{{buyer_name}}" recusou a revisão final e deixou alguns comentários contra o pedido #{{order_id}}<br>{{buyer_comments}}<br>',

// ============================ Pedido concluído - para o vendedor ============ \\
'order_completed'                                   => 'Pedido concluído',
    
'order_completed_variables'                         => '{{user_name}} — Para exibir o nome do vendedor.<br>{{buyer_name}} — Para exibir o nome do comprador.<br>{{order_id}} — Para exibir o número sequencial do pedido.<br>{{buyer_comments}} — Para exibir os comentários do comprador.<br>{{buyer_rating}} — Para exibir a avaliação do comprador.',
'order_completed_subject'                           => 'Pedido concluído',
'order_completed_greeting'                          => 'Olá {{user_name}},',
'order_completed_content'                           => 'Parabéns!<br>O comprador "{{buyer_name}}" concluiu o serviço com o pedido #{{order_id}} e deixou alguns comentários<br>{{buyer_comments}}<br>{{buyer_rating}}<br>',

// ============================ Atividade do pedido - para vendedor e comprador ============ \\
'order_activity'                                    => 'Atividade do pedido',
    
'buyer_order_activity_variables'                    => '{{user_name}} — Para exibir o nome do destinatário.<br>{{sender_name}} — Para exibir o nome do remetente.<br>{{gig_title}} — Para exibir o título do serviço.<br>{{order_id}} — Para exibir o número sequencial do pedido.<br>{{sender_comments}} — Para exibir os comentários do remetente.<br>{{login_url}} — Para exibir o URL de login.',
'buyer_order_activity_subject'                      => 'Atividade do pedido',
'buyer_order_activity_greeting'                     => 'Olá {{user_name}},',
'buyer_order_activity_content'                      => 'Você recebeu uma nota de "{{sender_name}}" sobre o serviço em andamento "{{gig_title}}" no pedido #{{order_id}}<br>{{sender_comments}}<br>Você pode fazer login para tomar uma ação rápida.<br>{{login_url}}',

'seller_order_activity_variables'                   => '{{user_name}} — Para exibir o nome do destinatário.<br>{{sender_name}} — Para exibir o nome do remetente.<br>{{gig_title}} — Para exibir o título do serviço.<br>{{order_id}} — Para exibir o número sequencial do pedido.<br>{{sender_comments}} — Para exibir os comentários do remetente.<br>{{login_url}} — Para exibir o URL de login.',
'seller_order_activity_subject'                     => 'Atividade do pedido',
'seller_order_activity_greeting'                    => 'Olá {{user_name}},',
'seller_order_activity_content'                     => 'Você recebeu uma nota de "{{sender_name}}" sobre o serviço em andamento "{{gig_title}}" no pedido #{{order_id}}<br>{{sender_comments}}<br>Você pode fazer login para tomar uma ação rápida.<br>{{login_url}}',

// ============================ Novo reembolso de pedido - para vendedor e administrador ============ \\
'order_refund_request'                              => 'Pedido de reembolso',
    
'seller_received_order_dispute_variables'           => '{{user_name}} — Para exibir o nome do vendedor.<br>{{buyer_name}} — Para exibir o nome do comprador.<br>{{order_id}} — Para exibir o número sequencial do pedido.<br>{{buyer_comments}} — Para exibir os comentários do comprador.<br>{{login_url}} — Para exibir o URL de login.',
'seller_received_order_dispute_subject'             => 'Novo pedido de reembolso recebido',
'seller_received_order_dispute_greeting'            => 'Olá {{user_name}},',
'seller_received_order_dispute_content'             => "Você recebeu um pedido de reembolso de {{buyer_name}} para o pedido #{{order_id}}<br>{{buyer_comments}}<br>Você pode aprovar ou recusar o pedido de reembolso.<br>{{login_url}}<br>",

'admin_received_order_dispute_variables'            => '{{order_id}} — Para exibir o número sequencial do pedido.',
'admin_received_order_dispute_subject'              => 'Novo dispute recebido',
'admin_received_order_dispute_greeting'             => 'Olá',
'admin_received_order_dispute_content'              => "Um novo dispute foi criado para o pedido #{{order_id}}<br>",

// ============================ Comentário de reembolso - para comprador e vendedor ============ \\
'order_refund_reply'                                => 'Comentários sobre reembolso de pedido',

'buyer_order_refund_reply_variables'                => '{{user_name}} — Para exibir o nome do destinatário.<br>{{sender_name}} — Para exibir o nome do remetente.<br>{{order_id}} — Para exibir o número sequencial do pedido.<br>{{sender_comments}} — Para exibir os comentários do remetente.<br>{{login_url}} — Para exibir o URL de login.',
'buyer_order_refund_reply_subject'                  => 'Novo comentário sobre pedido de reembolso',
'buyer_order_refund_reply_greeting'                 => 'Olá {{user_name}},',
'buyer_order_refund_reply_content'                  => "O {{sender_name}} deixou alguns comentários sobre o pedido de reembolso do pedido #{{order_id}}<br>{{sender_comments}}<br>{{login_url}}<br>",

'seller_order_refund_reply_variables'               => '{{user_name}} — Para exibir o nome do destinatário.<br>{{sender_name}} — Para exibir o nome do remetente.<br>{{order_id}} — Para exibir o número sequencial do pedido.<br>{{sender_comments}} — Para exibir os comentários do remetente.<br>{{login_url}} — Para exibir o URL de login.',
'seller_order_refund_reply_subject'                 => 'Novo comentário sobre pedido de reembolso',
'seller_order_refund_reply_greeting'                => 'Olá {{user_name}},',
'seller_order_refund_reply_content'                 => "O {{sender_name}} deixou alguns comentários sobre o pedido de reembolso do pedido #{{order_id}}<br>{{sender_comments}}<br>{{login_url}}<br>",

// ============================ Pedido de disputa resolvido pelo vendedor - para comprador ============ \\
'seller_appr_order_dispute_req'                     => 'Pedido de reembolso aprovado pelo vendedor',

'seller_appr_order_dispute_req_variables'           => '{{user_name}} — Para exibir o nome do usuário. <br>{{sender_name}} — Para exibir o nome do vendedor.<br>{{gig_title}} — Para exibir o título do serviço.',
'seller_appr_order_dispute_req_subject'             => 'Reembolso aprovado',
'seller_appr_order_dispute_req_greeting'            => 'Olá {{user_name}},',
'seller_appr_order_dispute_req_content'             => "Parabéns! <br> Seu pedido de reembolso foi aprovado por {{sender_name}} para o serviço “{{gig_title}}”",

// ============================ Quando o pedido de disputa é recusado pelo vendedor para o comprador ============ \\
'seller_decline_dispute_order'                      => 'Pedido de reembolso recusado pelo vendedor',

'seller_decline_dispute_order_variables'            => '{{user_name}} — Para exibir o nome do usuário.<br>{{sender_name}} — Para exibir o nome do remetente.<br>{{gig_title}} — Para exibir o título do serviço. <br/> {{login_url}} — URL de login do usuário',
'seller_decline_dispute_order_subject'              => 'Reembolso recusado',
'seller_decline_dispute_order_greeting'             => 'Olá {{user_name}}',
'seller_decline_dispute_order_content'              => "Seu pedido de reembolso foi recusado por {{sender_name}} para o serviço “{{gig_title}}” <br> Se você acredita que este foi um pedido válido, você pode abrir uma disputa na página de atividades do pedido do serviço em andamento. <br> {{login_url}}",

// ============================ Disputa de pedido de serviço devolvido pelo administrador ao vencedor  ============ \\
'admin_refund_order_dispute_to_winner'              => 'Disputa de pedido de serviço resolvida a favor do vencedor',
    
'disp_order_fvr_in_seller_var'                      => '{{user_name}} — Para exibir o nome do vendedor.',
'disp_order_fvr_in_seller_sub'                      => 'Disputa resolvida',
'disp_order_fvr_in_seller_greeting'                 => 'Olá {{user_name}},',
'disp_order_fvr_in_seller_cont'                     => "Parabéns! <br> Analisamos o reembolso e a disputa e resolvemos a disputa a seu favor. Nós contestamos o pedido do serviço e o valor foi adicionado à sua conta.",

'disp_order_fvr_in_buyer_var'                       => '{{user_name}} — Para exibir o nome do comprador.',
'disp_order_fvr_in_buyer_sub'                       => 'Disputa resolvida',
'disp_order_fvr_in_buyer_greeting'                  => 'Olá {{user_name}},',
'disp_order_fvr_in_buyer_cont'                      => "Parabéns! <br> Analisamos o reembolso e a disputa e resolvemos a disputa a seu favor. Nós contestamos o pedido do serviço e o valor foi adicionado à sua conta.",

// ============================ Disputa de pedido de serviço devolvido pelo administrador não a favor  ============ \\
'admin_order_dispute_not_in_favour'                 => 'Disputa de pedido de serviço não a favor',

'disp_order_not_in_fvr_seller_var'                  => '{{user_name}} — Para exibir o nome do comprador. <br> {{dispute_link}} — Link URL da disputa',
'disp_order_not_in_fvr_seller_sub'                  => 'Disputa resolvida',
'disp_order_not_in_fvr_seller_greeting'             => 'Olá {{user_name}},',
'disp_order_not_in_fvr_seller_cont'                 => "Opa! Não aprovamos o pedido de reembolso da disputa a seu favor.<br> Clique no botão abaixo para visualizar os detalhes da disputa.<br>{{dispute_link}}",

'disp_order_not_in_fvr_buyer_var'                   => '{{user_name}} — Para exibir o nome do comprador. <br> {{dispute_link}} — Link URL da disputa',
'disp_order_not_in_fvr_buyer_sub'                   => 'Disputa resolvida',
'disp_order_not_in_fvr_buyer_greeting'              => 'Olá {{user_name}},',
'disp_order_not_in_fvr_buyer_cont'                  => "Opa! Não aprovamos o pedido de reembolso da disputa a seu favor.<br> Clique no botão abaixo para visualizar os detalhes da disputa.<br>{{dispute_link}}",

];
