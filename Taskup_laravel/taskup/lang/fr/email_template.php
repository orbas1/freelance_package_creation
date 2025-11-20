<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Email templating languages Lines
    |--------------------------------------------------------------------------
    |
    */

    'email_title'                  => 'Titre de l\'email',
    'role_type'                    => 'Type de rôle',
    'all_templates'                => 'Modèles d\'email',
    'add_email_template'           => 'Ajouter un nouveau modèle',
    'update_email_template'        => 'Mettre à jour le modèle',
    'select_template'              => 'Sélectionner le modèle',
    'registration_title'           => 'Email d\'inscription',
    'buyer'                        => 'Acheteur',        
    'seller'                       => 'Vendeur',        
    'admin'                        => 'Administrateur',        
    'verfiy_email'                 => 'Vérifier l\'adresse email',
    'login_url'                    => '“Connexion”',
    'ridirect_login'               => 'Rediriger vers la connexion',
    'set_email_status'             => 'Définir le statut de cet email comme',
    'reset_password_txt'           => 'Réinitialiser le mot de passe',

    // =========== Email general translation ==================== \\ 
    'email_setting_variable'    => 'Variables de configuration d\'email',
    'greeting'                  => 'Texte de salutation',
    'email_content'             => 'Contenu de l\'email',
    'subject'                   => 'Objet de l\'email',

    // =========================== User Registration by admin notify user  =============== \\
    'user_created_title'            => 'Nouvel utilisateur créé',
    'user_created_variables'        => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{site_name}} — Pour afficher le nom du site.<br>{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur.<br>{{password}} — Pour afficher le mot de passe de l\'utilisateur.',
    'user_created_subject'          => 'Nouveau compte créé',
    'user_created_greeting'         => 'Bonjour {{user_name}},',
    'user_created_content'          => 'Bonne nouvelle ! Votre nouveau compte a été créé par l\'administrateur de {{site_name}}.<br>Veuillez vous connecter avec les détails mentionnés ci-dessous.<br>Adresse email :<br>{{user_email}}<br>Mot de passe :<br>{{password}}<br>Merci,<br>{{admin_name}}',

    // ===========================User Registration Email =============== \\
    'buyer_registration_email_variable' => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur.<br>{{user_password}} — Pour afficher le mot de passe de l\'utilisateur.<br>{{site_name}} — Pour afficher le nom du site.<br>{{verification_link}} — Pour afficher le lien URL de vérification',
    'buyer_registration_subject' => 'Merci pour votre inscription sur {{site_name}}',
    'buyer_registration_greeting' => 'Bonjour {{user_name}}',
    'buyer_registration_content' => 'Merci pour votre inscription sur {{site_name}}. Veuillez cliquer ci-dessous pour vérifier votre adresse email <br> {{verification_link}}',

    'seller_registration_email_variable' => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur.<br>{{user_password}} — Pour afficher le mot de passe de l\'utilisateur.<br>{{site_name}} — Pour afficher le nom du site.<br>{{verification_link}} — Pour afficher le lien URL de vérification',
    'seller_registration_subject' => 'Merci pour votre inscription sur {{site_name}}',
    'seller_registration_greeting' => 'Bonjour {{user_name}}',
    'seller_registration_content' => 'Merci pour votre inscription sur {{site_name}}. Veuillez cliquer ci-dessous pour vérifier votre adresse email <br> {{verification_link}}',

    'user_registerd_to_admin_variable' => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur.',
    'user_registerd_to_admin_subject' => 'Merci pour votre inscription sur {{site_name}}',
    'user_registerd_to_admin_greeting' => 'Bonjour,',
    'user_registerd_to_admin_content' => 'Un nouvel utilisateur s\'est inscrit sur le site avec le nom <br> "{{user_name}}" et l\'adresse email "{{user_email}}"',


    //========================= Account approval request =========================\\
    'account_approval_title' => 'Demande d\'approbation de compte',

    'buyer_account_approval_variables' => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur.<br>{{user_password}} — Pour afficher le mot de passe de l\'utilisateur.<br>{{site_name}} — Pour afficher le nom du site.',
    'buyer_account_approval_subject' => 'Merci pour votre inscription sur {{site_name}}',
    'buyer_account_approval_greeting' => 'Bonjour {{user_name}},',
    'buyer_account_approval_content' => 'Merci pour votre inscription sur {{site_name}}. Votre compte sera approuvé après vérification.',

    'seller_account_approval_variables' => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur.<br>{{user_password}} — Pour afficher le mot de passe de l\'utilisateur.<br>{{site_name}} — Pour afficher le nom du site.',
    'seller_account_approval_subject' => 'Merci pour votre inscription sur {{site_name}}',
    'seller_account_approval_greeting' => 'Bonjour {{user_name}},',
    'seller_account_approval_content' => 'Merci pour votre inscription sur {{site_name}}. Votre compte sera approuvé après vérification.',

    'admin_account_approval_variables' => '{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur.<br>{{user_password}} — Pour afficher le mot de passe de l\'utilisateur.<br>{{site_name}} — Pour afficher le nom du site.<br>{{login_url}} — URL de connexion de l\'utilisateur.',
    'admin_account_approval_subject' => 'Merci pour votre inscription sur {{site_name}}',
    'admin_account_approval_greeting' => 'Bonjour,',
    'admin_account_approval_content' => 'Un nouvel utilisateur s\'est inscrit sur le site avec le nom {{user_name}} et l\'adresse email {{user_email}}. <br> L\'inscription est en attente d\'approbation, vous pouvez vous connecter {{login_url}} à l\'interface administrateur pour approuver le compte.',

    
    //========================= Account approved =========================\\ (done)
    'account_approved_title'                      => 'Compte approuvé',

    'buyer_account_approved_variables'            => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur.<br>{{site_name}} — Pour afficher le nom du site.',
    'buyer_account_approved_subject'              => 'Compte approuvé',
    'buyer_account_approved_greeting'             => 'Bonjour {{user_name}},',
    'buyer_account_approved_content'              => 'Félicitations ! Votre compte a été approuvé par l\'administrateur.',

    'seller_account_approved_variables'           => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur.<br>{{site_name}} — Pour afficher le nom du site.',
    'seller_account_approved_subject'             => 'Compte approuvé',
    'seller_account_approved_greeting'            => 'Bonjour {{user_name}},',
    'seller_account_approved_content'             => 'Félicitations ! Votre compte a été approuvé par l\'administrateur.',

    //=========================== Reset password ================================\\ (Done)

    'reset_password'                            => 'Réinitialiser le mot de passe',

    'buyer_reset_password_variables'            => '{{account_email}} — Pour afficher l\'adresse email de l\'utilisateur.<br>{{reset_link}} — Pour afficher le lien URL de réinitialisation du mot de passe.',
    'buyer_reset_password_subject'              => 'Réinitialisation du mot de passe',
    'buyer_reset_password_greeting'             => 'Bonjour,',
    'buyer_reset_password_content'              => 'Quelqu\'un a demandé à réinitialiser le mot de passe du compte suivant : <br> Adresse email : {{account_email}} <br> Si cela était une erreur, ignorez simplement cet email et rien ne se passera.<br>Pour réinitialiser votre mot de passe, cliquez sur le lien de réinitialisation ci-dessous :<br>{{reset_link}}',

    'seller_reset_password_variables'           => '{{account_email}} — Pour afficher l\'adresse email de l\'utilisateur.<br>{{reset_link}} — Pour afficher le lien URL de réinitialisation du mot de passe.',
    'seller_reset_password_subject'             => 'Réinitialisation du mot de passe',
    'seller_reset_password_greeting'            => 'Bonjour,',
    'seller_reset_password_content'             => 'Quelqu\'un a demandé à réinitialiser le mot de passe du compte suivant : <br> Adresse email : {{account_email}} <br> Si cela était une erreur, ignorez simplement cet email et rien ne se passera.<br>Pour réinitialiser votre mot de passe, cliquez sur le lien de réinitialisation ci-dessous :<br>{{reset_link}}',

    //===================================== Account identity request to Admin - for admin ====================\\ (done)
    'accout_identity_verification'            => 'Vérification d\'identité du compte',

    'identity_verification_variables'         => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{login_url}} — URL de connexion de l\'utilisateur',
    'identity_verification_subject'           => 'Nouvelle demande de vérification d\'identité reçue',
    'identity_verification_greeting'          => 'Bonjour,',
    'identity_verification_content'           => '{{user_name}} a téléchargé un document pour la vérification d\'identité. La vérification du compte est en attente d\'approbation. Vous pouvez vous {{login_url}} en tant qu\'administrateur pour approuver la vérification d\'identité.',

    //===================================== Account identity rejection ====================\\ (done)
    'accout_identity_rejection'                => 'Rejet de l\'identité du compte',

    'buyer_identity_rejection_variables'       => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{user_link}} — Pour afficher le lien de l\'utilisateur qui a envoyé la vérification d\'identité.<br>{{admin_message}} — Pour afficher le message de l\'administrateur pour le rejet.<br>{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur qui a envoyé la demande de vérification d\'identité.',
    'buyer_identity_rejection_subject'         => 'Votre demande de vérification d\'identité a été rejetée',
    'buyer_identity_rejection_greeting'        => 'Bonjour {{user_name}},',
    'buyer_identity_rejection_content'         => 'Le document que vous avez téléchargé pour la vérification d\'identité a été rejeté.<br>{{admin_message}}',

    'seller_identity_rejection_variables'      => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{user_link}} — Pour afficher le lien de l\'utilisateur qui a envoyé la vérification d\'identité.<br>{{admin_message}} — Pour afficher le message de l\'administrateur pour le rejet.<br>{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur qui a envoyé la demande de vérification d\'identité.',
    'seller_identity_rejection_subject'        => 'Votre demande de vérification d\'identité a été rejetée',
    'seller_identity_rejection_greeting'       => 'Bonjour {{user_name}},',
    'seller_identity_rejection_content'        => 'Le document que vous avez téléchargé pour la vérification d\'identité a été rejeté.<br>{{admin_message}}',

    //====================================== Account identity approved ========================= \\ (Done)
    'account_identity_approved'                     => 'Identité du compte approuvée',

    'buyer_identity_approved_variables'             => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{user_link}} — Pour afficher le lien de l\'utilisateur qui a envoyé la vérification d\'identité.<br>{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur qui a envoyé la demande de vérification d\'identité.',
    'buyer_identity_approved_subject'               => 'Votre demande de vérification d\'identité a été approuvée',
    'buyer_identity_approved_greeting'              => 'Bonjour {{user_name}},',
    'buyer_identity_approved_content'               => 'Félicitations !<br>Les documents que vous avez soumis pour la vérification d\'identité ont été approuvés.',

    'seller_identity_approved_variables'            => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{user_link}} — Pour afficher le lien de l\'utilisateur qui a envoyé la vérification d\'identité.<br>{{user_email}} — Pour afficher l\'adresse email de l\'utilisateur qui a envoyé la demande de vérification d\'identité.',
    'seller_identity_approved_subject'              => 'Votre demande de vérification d\'identité a été approuvée',
    'seller_identity_approved_greeting'             => 'Bonjour {{user_name}},',
    'seller_identity_approved_content'              => 'Félicitations !<br>Les documents que vous avez soumis pour la vérification d\'identité ont été approuvés.',

    // ============================ When new dispute is created by buyer to seller ============ \\ (Done)
    'seller_dispute_received'                       => "Litige créé par l'acheteur à l'égard du vendeur",

    'seller_dispute_received_variables'             => "{{user_name}} — Pour afficher le nom du vendeur.<br> {{buyer_name}} — Pour afficher le nom de l'acheteur.<br> {{project_title}} — Pour afficher le titre du projet.<br> {{buyer_comments}} — Pour afficher les commentaires de l'acheteur. <br/> {{login_url}} — URL de connexion de l'utilisateur",
    'seller_dispute_received_subject'               => 'Nouvelle demande de remboursement reçue',
    'seller_dispute_received_greeting'              => 'Bonjour {{user_name}}',
    'seller_dispute_received_content'               => "Vous avez reçu une demande de remboursement de la part de {{buyer_name}} pour le projet “{{project_title}}”.<br>{{buyer_comments}} </br> Vous pouvez approuver ou refuser la demande de remboursement. <br> {{login_url}}",

    // ============================ When dispute approved by seller to buyer ============ \\ (Done)
    'seller_approved_dispute_req'                   => 'Remboursement approuvé par le vendeur',

    'seller_approved_dispute_req_variables'         => '{{user_name}} — Pour afficher le nom d\'utilisateur. <br> {{sender_name}} — Pour afficher le nom du vendeur.<br> {{project_title}} — Pour afficher le titre du projet.',
    'seller_approved_dispute_req_subject'           => 'Remboursement approuvé',
    'seller_approved_dispute_req_greeting'          => 'Bonjour {{user_name}},',
    'seller_approved_dispute_req_content'           => "Félicitations ! <br> Votre demande de remboursement a été approuvée par {{sender_name}} pour le projet “{{project_title}}”",

    // ============================ When dispute declined by seller to buyer ============ \\ (Done)
    'seller_decline_dispute'                        => 'Remboursement refusé par le vendeur',

    'seller_decline_dispute_variables'              => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{sender_name}} — Pour afficher le nom de l\'expéditeur.<br> {{project_title}} — Pour afficher le titre du projet. <br/> {{login_url}} — URL de connexion de l\'utilisateur',
    'seller_decline_dispute_subject'                => 'Remboursement refusé',
    'seller_decline_dispute_greeting'               => 'Bonjour {{user_name}}',
    'seller_decline_dispute_content'                => "Votre demande de remboursement a été refusée par {{sender_name}} pour le projet “{{project_title}}”<br>Si vous pensez que cette demande était valide, vous pouvez ouvrir un litige depuis la page d'activité du projet en cours. <br> {{login_url}}",
    // ============================ comment on refund request ============ \\ (Done)
    'comment_on_dispute'                            => 'Commentaires sur le remboursement',

    'seller_dispute_comment_variables'              => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{sender_name}} — Pour afficher le nom de l\'expéditeur.<br> {{project_title}} — Pour afficher le titre du projet. <br> {{sender_comments}} — Pour afficher le commentaire. <br> {{login_url}} — URL de connexion de l\'utilisateur.',
    'seller_dispute_comment_subject'                => 'Nouveau commentaire sur la demande de remboursement',
    'seller_dispute_comment_greeting'               => 'Bonjour {{user_name}}',
    'seller_dispute_comment_content'                => "Le “{{sender_name}}” a laissé des commentaires sur la demande de remboursement pour le projet “{{project_title}}”<br>{{sender_comments}} <br> {{login_url}}",

    'buyer_dispute_comment_variables'               => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{sender_name}} — Pour afficher le nom de l\'expéditeur.<br> {{project_title}} — Pour afficher le titre du projet. <br> {{sender_comments}} — Pour afficher le commentaire. <br> {{login_url}} — URL de connexion de l\'utilisateur.',
    'buyer_dispute_comment_subject'                 => 'Nouveau commentaire sur la demande de remboursement',
    'buyer_dispute_comment_greeting'                => 'Bonjour {{user_name}}',
    'buyer_dispute_comment_content'                 => "Le “{{sender_name}}” a laissé des commentaires sur la demande de remboursement pour le projet “{{project_title}}”<br>{{sender_comments}} <br> {{login_url}}",

// ============================ new dispute received to admin ============ \\ (Done)
    'admin_received_dispute'                        => 'Réclamation reçue par l\'administrateur',
    'admin_received_dispute_variables'              => "{{project_title}} — Pour afficher le titre du projet.<br> {{type}} — Pour afficher le type comme 'projet' ou 'prestation'",
    'admin_received_dispute_subject'                => 'Nouvelle réclamation reçue',
    'admin_received_dispute_greeting'               => 'Bonjour',
    'admin_received_dispute_content'                => "Une nouvelle réclamation a été créée pour le {{type}} “{{project_title}}”",

// ============================ dispute refunded in hourly project by admin to winner  ============ \\ (Done)
    'admin_refund_hourly_dispute_to_winner'         => 'Règlement de litige sur projet horaire en faveur du gagnant',

    'hourly_dispute_favour_in_seller_variables'     => '{{user_name}} — Pour afficher le nom du vendeur.',
    'hourly_dispute_favour_in_seller_subject'       => 'Litige résolu',
    'hourly_dispute_favour_in_seller_greeting'      => 'Bonjour {{user_name}},',
    'hourly_dispute_favour_in_seller_content'       => "Félicitations ! <br> Nous avons examiné le remboursement et le litige et avons résolu le litige en votre faveur. Nous avons contesté le projet.",

    'hourly_dispute_favour_in_buyer_variables'      => '{{user_name}} — Pour afficher le nom de l\'acheteur.',
    'hourly_dispute_favour_in_buyer_subject'        => 'Litige résolu',
    'hourly_dispute_favour_in_buyer_greeting'       => 'Bonjour {{user_name}},',
    'hourly_dispute_favour_in_buyer_content'        => "Félicitations ! <br> Nous avons examiné le remboursement et le litige et avons résolu le litige en votre faveur. Nous avons contesté le projet.",

// ============================ dispute refunded in fixed and milestone project by admin to winner  ============ \\ (Done)
    'admin_refund_dispute_to_winner'                => 'Litige sur projet en faveur du gagnant',

    'dispute_favour_in_seller_variables'            => '{{user_name}} — Pour afficher le nom du vendeur.',
    'dispute_favour_in_seller_subject'              => 'Litige résolu',
    'dispute_favour_in_seller_greeting'             => 'Bonjour {{user_name}},',
    'dispute_favour_in_seller_content'              => "Félicitations ! <br> Nous avons examiné le remboursement et le litige et avons résolu le litige en votre faveur. Nous avons contesté le projet et le montant a été ajouté à votre compte.",

    'dispute_favour_in_buyer_variables'             => '{{user_name}} — Pour afficher le nom de l\'acheteur.',
    'dispute_favour_in_buyer_subject'               => 'Litige résolu',
    'dispute_favour_in_buyer_greeting'              => 'Bonjour {{user_name}},',
    'dispute_favour_in_buyer_content'               => "Félicitations ! <br> Nous avons examiné le remboursement et le litige et avons résolu le litige en votre faveur. Nous avons contesté le projet et le montant a été ajouté à votre compte.",

    // ============================ dispute refunded by admin to not in favour  ============ \\ (Done)
    'admin_dispute_not_in_favour'                   => 'Litige sur projet non en faveur',

    'dispute_not_in_favour_seller_variables'        => '{{user_name}} — Pour afficher le nom de l\'acheteur. <br> {{dispute_link}} — Lien URL du litige',
    'dispute_not_in_favour_seller_subject'          => 'Litige résolu',
    'dispute_not_in_favour_seller_greeting'         => 'Bonjour {{user_name}},',
    'dispute_not_in_favour_seller_content'          => "Oups ! Nous n'avons pas approuvé la demande de remboursement du litige en votre faveur.<br>Veuillez cliquer sur le bouton ci-dessous pour voir les détails du litige.<br>{{dispute_link}}",

    'dispute_not_in_favour_buyer_variables'         => '{{user_name}} — Pour afficher le nom de l\'acheteur. <br> {{dispute_link}} — Lien URL du litige',
    'dispute_not_in_favour_buyer_subject'           => 'Litige résolu',
    'dispute_not_in_favour_buyer_greeting'          => 'Bonjour {{user_name}},',
    'dispute_not_in_favour_buyer_content'           => "Oups ! Nous n'avons pas approuvé la demande de remboursement du litige en votre faveur.<br>Veuillez cliquer sur le bouton ci-dessous pour voir les détails du litige.<br>{{dispute_link}}",

    // ============================ package purchase - for seller and buyer ============ \\ (Done)
    'package_purchase'                              => 'Achat de package',

    'package_purchase_by_seller_variables'          => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{package_name}} — Pour afficher le nom du package.',
    'package_purchase_by_seller_subject'            => 'Merci d\'avoir acheté le package',
    'package_purchase_by_seller_greeting'           => 'Bonjour {{user_name}},',
    'package_purchase_by_seller_content'            => 'Merci d\'avoir acheté le package "{{package_name}}"<br>Vous pouvez maintenant publier un service et obtenir des commandes.',

    'package_purchase_by_buyer_variables'           => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{package_name}} — Pour afficher le nom du package.',
    'package_purchase_by_buyer_subject'             => 'Merci d\'avoir acheté le package',
    'package_purchase_by_buyer_greeting'            => 'Bonjour {{user_name}},',
    'package_purchase_by_buyer_content'             => 'Merci d\'avoir acheté le package "{{package_name}}"<br>Vous pouvez maintenant créer des emplois.',

    'package_purchase_to_admin_variables'           => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{package_name}} — Pour afficher le nom du package.<br>{{purchaser_name}} — Pour afficher le nom de l\'acheteur.<br>{{current_date}} — Pour afficher la date d\'achat.',
    'package_purchase_to_admin_subject'             => 'Nouveau package acheté par "{{purchaser_name}}"',
    'package_purchase_to_admin_greeting'            => 'Bonjour,',
    'package_purchase_to_admin_content'             => 'Un nouvel achat de "{{package_name}}" a été effectué par "{{purchaser_name}}" le "{{current_date}}"',

    // ============================ send message on project conversation ============ \\ (Done)
    'project_conversation'                          => 'Conversation du projet',

    'seller_project_conv_var'                       => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{sender_name}} — Pour afficher le nom de l\'expéditeur.<br>{{project_title}} — Pour afficher le titre du projet. <br>{{login_url}} — URL de connexion de l\'utilisateur.',
    'seller_project_conv_subj'                      => 'Nouveau message reçu',
    'seller_project_conv_greeting'                  => 'Bonjour {{user_name}}',
    'seller_project_conv_cont'                      => "{{sender_name}} vous a envoyé un nouveau message sur le projet “{{project_title}}”.<br>Cliquez sur le lien ci-dessous pour lire le message.<br>{{login_url}}",

    'buyer_project_conv_var'                        => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{sender_name}} — Pour afficher le nom de l\'expéditeur.<br>{{project_title}} — Pour afficher le titre du projet. <br>{{login_url}} — URL de connexion de l\'utilisateur.',
    'buyer_project_conv_subj'                       => 'Nouveau message reçu',
    'buyer_project_conv_greeting'                   => 'Bonjour {{user_name}}',
    'buyer_project_conv_cont'                       => "{{sender_name}} vous a envoyé un nouveau message sur le projet “{{project_title}}”.<br>Cliquez sur le lien ci-dessous pour lire le message.<br>{{login_url}}",

    // ============================ Project submission when verification by admin and sent to buyer - for buyer and admin(Done) ============ \\ (Done)
    'project_posted'                                => 'Soumission de projet',

    'project_posted_by_buyer_variables'             => '{{user_name}} — Pour afficher le nom d\'utilisateur.',
    'project_posted_by_buyer_subject'               => 'Soumission de projet',
    'project_posted_by_buyer_greeting'              => 'Bonjour {{user_name}},',
    'project_posted_by_buyer_content'               => 'Merci d\'avoir soumis le projet, nous le passerons en revue et l\'approuverons après l\'examen.',

    'project_posted_to_admin_variables'             => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{project_link}} — URL de prévisualisation du projet.',
    'project_posted_to_admin_subject'               => 'Nouvelle soumission de projet',
    'project_posted_to_admin_greeting'              => 'Bonjour,',
    'project_posted_to_admin_content'               => 'Nouveau projet soumis par “{{user_name}}” en attente d\'approbation. Veuillez cliquer sur le lien ci-dessous pour plus de détails.<br> {{project_link}}',

    // ============================ Project invite request from buyer to seller - for seller ============ \\ (Done)
    'project_invite_request'                        => 'Invitation de projet envoyée',

    'project_invite_request_variables'              => '{{user_name}} — Pour afficher le nom d\'utilisateur. <br> {{project_title}} — Pour afficher le titre du projet.',
    'project_invite_request_subject'                => 'Vous avez reçu une invitation à un projet',
    'project_invite_request_greeting'               => 'Bonjour {{user_name}},',
    'project_invite_request_content'                => 'Félicitations ! Vous avez reçu une nouvelle invitation pour le projet “{{project_title}}”.',

    // ============================ Project approved acknowledgement to buyer - for buyer ============ \\ (Done)
    'project_approved'                              => 'Projet approuvé',

    'project_approved_to_buyer_variables'           => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{project_title}} — Pour afficher le titre du projet.<br>{{project_link}} — Pour afficher le lien vers le projet.',
    'project_approved_to_buyer_subject'             => 'Soumission de projet',
    'project_approved_to_buyer_greeting'            => 'Bonjour {{user_name}},',
    'project_approved_to_buyer_content'             => 'Hourra ! Votre projet “{{project_title}}” a été approuvé.<br>Cliquez sur le bouton ci-dessous pour afficher le projet.<br>{{project_link}}',

    // ============================ proposal submit request - for buyer ============ \\ (Doen)
    'proposal_approve_request'                      => 'Soumettre une proposition',

    'proposal_approve_request_variables'            => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{seller_name}} — Pour afficher le nom du vendeur <br> {{project_title}} — Pour afficher le titre du projet.<br>{{proposal_link}} — Pour afficher le lien de la proposition.',
    'proposal_approve_request_subject'              => 'Soumettre une proposition',
    'proposal_approve_request_greeting'             => 'Bonjour {{user_name}},',
    'proposal_approve_request_content'              => '{{seller_name}} a soumis une nouvelle proposition pour "{{project_title}}". <br> Veuillez cliquer sur le bouton ci-dessous pour voir la proposition. <br> {{proposal_link}}',

    // ============================ seller complete project contract request to buyer - for buyer ============ \\ (Doen)
    'project_complete_request'                  => 'Soumettre une demande de projet complet',

    'project_complete_request_variables'        => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{seller_name}} — Pour afficher le nom du vendeur <br> {{project_title}} — Pour afficher le titre du projet.<br>{{project_activity_link}} — Pour afficher l\'URL de l\'activité du projet.',
    'project_complete_request_subject'          => 'Soumettre une demande de projet complet',
    'project_complete_request_greeting'         => 'Bonjour {{user_name}},',
    'project_complete_request_content'          => '{{seller_name}} a soumis une demande de contrat complet pour le projet "{{project_title}}". <br> Veuillez cliquer sur le bouton ci-dessous pour voir l\'activité du projet. <br> {{project_activity_link}}',

    // ============================ seller complete project contract request declined from buyer - for seller ============ \\ (Doen)
    'project_complete_req_declined'                 => 'Demande de projet complet refusée',

    'proj_complete_req_declined_variables'          => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{project_title}} — Pour afficher le titre du projet.<br>{{declined_reason}} - Pour afficher la raison du refus.<br>{{project_activity_link}} — Pour afficher l\'URL de l\'activité du projet.',
    'proj_complete_req_declined_subject'            => 'Demande de projet complet refusée',
    'proj_complete_req_declined_greeting'           => 'Bonjour {{user_name}},',
    'proj_complete_req_declined_content'            => 'Votre demande de contrat complet pour le projet "{{project_title}}" a été refusée.<br>{{declined_reason}}<br> Veuillez cliquer sur le bouton ci-dessous pour voir l\'activité du projet.<br>{{project_activity_link}}',

    // ============================ Milestone project complete from buyer - for seller ============ \\ (Doen)
    'milestone_project_complete'                   => 'Contrat de projet de jalon terminé',

    'milestone_project_comp_var'                   => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{project_title}} — Pour afficher le titre du projet.<br>{{project_activity_link}} — Pour afficher l\'URL de l\'activité du projet.',
    'milestone_project_comp_subj'                  => 'Contrat de projet de jalon terminé',
    'milestone_project_comp_greeting'              => 'Bonjour {{user_name}},',
    'milestone_project_comp_cont'                  => 'Le projet {{project_title}} a été terminé.<br>{{project_activity_link}}',

    // ============================ seller complete project contract request accepter from buyer - for seller ============ \\ (Doen)
    'project_complete_request_accepted'             => 'Demande de projet complété approuvée',

    'proj_comp_req_accept_var'                      => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{project_title}} — Pour afficher le titre du projet.<br>{{project_activity_link}} — Pour afficher l\'URL de l\'activité du projet.',
    'proj_comp_req_accept_sub'                      => 'Demande de projet complété approuvée',
    'proj_comp_req_accept_greeting'                 => 'Bonjour {{user_name}},',
    'proj_comp_req_accept_cont'                     => 'Votre demande de contrat complet pour le projet "{{project_title}}" a été approuvée. <br> Veuillez cliquer sur le bouton ci-dessous pour voir l\'activité du projet. <br> {{project_activity_link}}',

    // ============================ proposal submit request declined from buyer  - for seller ============ \\ (Done)
    'proposal_request_declined'                     => 'Proposition soumise refusée',

    'proposal_request_declined_variables'           => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{project_title}} — Pour afficher le titre du projet.<br>{{decline_reason}} — Pour afficher la raison du refus.',
    'proposal_request_declined_subject'             => 'Proposition soumise refusée',
    'proposal_request_declined_greeting'            => 'Bonjour {{user_name}},',
    'proposal_request_declined_content'             => 'Oho! Votre proposition soumise a été refusée pour le projet "{{project_title}}"<br>{{decline_reason}}',

    // ============================ proposal submit accpeted from buyer  - for seller ============ \\ (done)
    'proposal_request_accepted'                     => 'Proposition soumise acceptée', 

    'proposal_request_accepted_variables'           => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{project_title}} — Pour afficher le titre du projet.<br>{{project_activity_link}} — Pour afficher l\'activité du projet.',
    'proposal_request_accepted_subject'             => 'Proposition soumise acceptée',
    'proposal_request_accepted_greeting'            => 'Bonjour {{user_name}},',
    'proposal_request_accepted_content'             => 'Hourra! Votre proposition soumise pour "{{project_title}}" a été acceptée.<br>Veuillez cliquer sur le bouton ci-dessous pour voir l\'activité du projet.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request from seller - for buyer ============ \\ (done)
    'milestone_approve_request'                     => 'Demande d\'approbation de jalon',
    'milestone_approve_request_variables'           => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{milestone_title}} — Pour afficher le titre du jalon. <br> {{project_title}} — Pour afficher le titre du projet.<br> {{seller_name}} — Pour afficher le nom du vendeur.<br> {{project_activity_link}} — Pour afficher l\'activité du projet.',
    'milestone_approve_request_subject'             => 'Demande d\'approbation de jalon',
    'milestone_approve_request_greeting'            => 'Bonjour {{user_name}},',
    'milestone_approve_request_content'             => 'Nouveau jalon "{{milestone_title}}" du projet "{{project_title}}" approuvé par "{{seller_name}}".<br>Veuillez cliquer sur le bouton ci-dessous pour voir le jalon.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request declined from buyer - for seller ============ \\ (Done)
    'milestone_declined'                            => 'Soumission du jalon rejetée',

    'milestone_declined_variables'                  => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{milestone_title}} — Pour afficher le titre du jalon.<br> {{project_title}} — Pour afficher le titre du projet.<br>{{project_activity_link}} — Pour afficher l\'activité du projet.',
    'milestone_declined_subject'                    => 'Soumission du jalon rejetée',
    'milestone_declined_greeting'                   => 'Bonjour {{user_name}},',
    'milestone_declined_content'                    => 'Oups ! Votre soumission du jalon "{{milestone_title}}" pour "{{project_title}}" a été rejetée.<br>Veuillez cliquer sur le bouton ci-dessous pour voir le jalon.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request accepted from buyer - for seller ============ \\
    'milestone_accepted'                            => 'Soumission du jalon acceptée',

    'milestone_accepted_variables'                  => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{milestone_title}} — Pour afficher le titre du jalon.<br> {{project_title}} — Pour afficher le titre du projet.<br>{{project_activity_link}} — Pour afficher l\'activité du projet.',
    'milestone_accepted_subject'                    => 'Soumission du jalon acceptée',
    'milestone_accepted_greeting'                   => 'Bonjour {{user_name}},',
    'milestone_accepted_content'                    => 'Hourra ! Votre soumission du jalon "{{milestone_title}}" pour "{{project_title}}" a été approuvée.<br>Veuillez cliquer sur le bouton ci-dessous pour voir le jalon.<br>{{project_activity_link}}',

     // ============================ proposal milestone escrow from buyer - for seller ============ \\
    'escrow_milestone'                            => 'Versement du jalon',

    'escrow_milestone_variables'                  => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br>{{milestone_title}} — Pour afficher le titre du jalon.<br>{{project_title}} — Pour afficher le titre du projet.<br>{{project_activity_link}} — Pour afficher l\'activité du projet.',
    'escrow_milestone_subject'                    => 'Soumission du jalon versée',
    'escrow_milestone_greeting'                   => 'Bonjour {{user_name}},',
    'escrow_milestone_content'                    => 'Le jalon "{{milestone_title}}" pour le projet "{{project_title}}" a été versé.<br>Veuillez cliquer sur le bouton ci-dessous pour voir le jalon.<br>{{project_activity_link}}',

    // ============================ proposal timecard submit request to buyer - for buyer ============ \\
    'timecard_approval_request'                     => 'Demande d\'approbation de feuille de temps',

    'timecard_approval_request_variables'           => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{timecard_title}} — Pour afficher le titre de la feuille de temps. <br> {{project_title}} — Pour afficher le titre du projet.<br> {{project_activity_link}} — Pour afficher l\'activité du projet.<br>{{seller_name}} — Pour afficher le nom du vendeur',
    'timecard_approval_request_subject'             => 'Nouvelle demande d\'approbation de feuille de temps',
    'timecard_approval_request_greeting'            => 'Bonjour {{user_name}},',
    'timecard_approval_request_content'             => 'Une nouvelle feuille de temps "{{timecard_title}}" du projet "{{project_title}}" a été soumise pour approbation par "{{seller_name}}". <br>Veuillez cliquer sur le bouton ci-dessous pour voir les détails de la feuille de temps.<br>{{project_activity_link}}',

    // ============================ proposal timecard approval request declined from buyer - for seller ============ \\ (Done)
    'timecard_declined'                           => 'Feuille de temps soumise refusée',

    'timecard_declined_variables'                 => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{timecard_title}} — Pour afficher le titre de la feuille de temps. <br> {{project_title}} — Pour afficher le titre du projet.<br>{{decline_reason}} — Pour afficher la raison du refus de la feuille de temps. <br> {{project_activity_link}} — Pour afficher l\'activité du projet.',
    'timecard_declined_subject'                   => 'Feuille de temps soumise refusée',
    'timecard_declined_greeting'                  => 'Bonjour {{user_name}},',
    'timecard_declined_content'                   => 'Oups ! Votre feuille de temps "{{timecard_title}}" du projet "{{project_title}}" a été refusée.<br>{{decline_reason}}<br>Veuillez cliquer sur le bouton ci-dessous pour voir les détails de la feuille de temps.<br>{{project_activity_link}}',

    // ============================ proposal timecard approval request accepted from buyer - for seller ============ \\
    'timecard_accepted'                             => 'Feuille de temps soumise acceptée',

    'timecard_accepted_variables'                   => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{timecard_title}} — Pour afficher le titre de la feuille de temps. <br> {{project_title}} — Pour afficher le titre du projet. {{project_activity_link}} Pour afficher l\'activité du projet.',
    'timecard_accepted_subject'                     => 'Feuille de temps soumise acceptée',
    'timecard_accepted_greeting'                    => 'Bonjour {{user_name}},',
    'timecard_accepted_content'                     => 'Hourra ! Votre feuille de temps "{{timecard_title}}" pour le projet "{{project_title}}" a été acceptée.<br>Veuillez cliquer sur le bouton ci-dessous pour voir les détails de la feuille de temps.<br>{{project_activity_link}}',

    // ============================ send question to admin - for admin ============ \\
    'send_qeustion'                                 => 'Envoyer une question',

    'send_qeustion_variables'                       => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{user_email}} — Pour afficher l\'adresse e-mail de l\'utilisateur. <br> {{question_title}} — Pour afficher le titre de la question.<br> {{description}} — Pour afficher la description de la question.<br>{{login_url}} — Pour afficher le bouton de connexion.',
    'send_qeustion_subject'                         => 'Vous avez reçu une question',
    'send_qeustion_greeting'                        => 'Bonjour,',
    'send_qeustion_content'                         => '{{user_name}} a posé une question ou a demandé du support avec les détails suivants : <br> Nom : {{user_name}} <br> Email : {{user_email}}<br>Sujet :<br>{{question_title}}<br>Description :<br>{{description}}<br>Veuillez vous connecter en utilisant le lien ci-dessous pour voir les détails.<br>{{login_url}}',

    // ============================ post gig order - for seller ============ \\ done
    'post_gig_order'                                => 'Publier une nouvelle commande',

    'post_gig_order_variables'                      => '{{user_name}} — Pour afficher le nom du vendeur.<br> {{gig_title}} — Pour afficher le titre du service.',
    'post_gig_order_subject'                        => 'Nouvelle commande de service',
    'post_gig_order_greeting'                       => 'Bonjour {{user_name}},',
    'post_gig_order_content'                        => 'Vous avez reçu une nouvelle commande pour le service "{{gig_title}}"',

    'buyer_publish_order_variables'                 => '{{user_name}} — Pour afficher le nom de l\'acheteur.',
    'buyer_publish_order_subject'                   => 'Nouvelle commande',
    'buyer_publish_order_greeting'                  => 'Bonjour {{user_name}},',
    'buyer_publish_order_content'                   => 'Merci beaucoup d\'avoir commandé mon service. Je vais vous contacter sous peu.',

    // ============================ Order Complete request - for buyer ============ \\ done
    'seller_order_complete'                         => 'Demande de complétion de commande',

    'seller_order_complete_variables'               => '{{user_name}} — Pour afficher le nom de l\'acheteur.<br>{{seller_name}} — Pour afficher le nom du vendeur.<br>{{order_id}} — Pour afficher le numéro de séquence de la commande.<br>{{login_url}} — Pour afficher l\'URL de connexion.<br>{{activity_link}} — Pour afficher le lien de l\'activité',
    'seller_order_complete_subject'                 => 'Demande de complétion de commande',
    'seller_order_complete_greeting'                => 'Bonjour {{user_name}},',
    'seller_order_complete_content'                 => 'Le vendeur “{{seller_name}}” vous a envoyé la livraison finale pour la commande #{{order_id}}<br>Vous pouvez l\'accepter ou la refuser. Veuillez vous connecter sur le site {{login_url}} et prendre une action rapide sur cette activité {{activity_link}}',

    // ============================ Order Complete delcined request - for seller ============ \\ done
    'order_declined'                                => 'Demande de complétion de commande refusée',
        
    'order_declined_variables'                      => '{{user_name}} — Pour afficher le nom du vendeur.<br>{{buyer_name}} — Pour afficher le nom de l\'acheteur.<br>{{order_id}} — Pour afficher le numéro de séquence de la commande.<br>{{buyer_comments}} — Pour afficher les commentaires de l\'acheteur.',
    'order_declined_subject'                        => 'Demande de complétion de commande refusée',
    'order_declined_greeting'                       => 'Bonjour {{user_name}},',
    'order_declined_content'                        => 'L\'acheteur “{{buyer_name}}” a refusé la révision finale et a laissé des commentaires contre la commande #{{order_id}}<br>{{buyer_comments}}<br>',

// ============================ Order Completed - for seller ============ \\ dpne
'order_completed'                                   => 'Commande terminée',
    
'order_completed_variables'                         => '{{user_name}} — Pour afficher le nom du vendeur.<br>{{buyer_name}} — Pour afficher le nom de l\'acheteur.<br>{{order_id}} — Pour afficher le numéro de séquence de la commande.<br>{{buyer_comments}} — Pour afficher les commentaires de l\'acheteur.<br>{{buyer_rating}} — Pour afficher la note de l\'acheteur.',
'order_completed_subject'                           => 'Commande terminée',
'order_completed_greeting'                          => 'Bonjour {{user_name}},',
'order_completed_content'                           => 'Félicitations !<br>L\'acheteur “{{buyer_name}}” a clôturé le projet en cours avec la commande #{{order_id}} et a laissé quelques commentaires<br>{{buyer_comments}}<br>{{buyer_rating}}<br>',

// ============================ Order Activity - for seller & buyer ============ \\ done
'order_activity'                                    => 'Activité de commande',
    
'buyer_order_activity_variables'                    => '{{user_name}} — Pour afficher le nom du destinataire.<br>{{sender_name}} — Pour afficher le nom de l\'expéditeur.<br>{{gig_title}} — Pour afficher le titre du service.<br>{{order_id}} — Pour afficher le numéro de séquence de la commande.<br>{{sender_comments}} — Pour afficher les commentaires de l\'expéditeur.<br>{{login_url}} — Pour afficher l\'URL de connexion.',
'buyer_order_activity_subject'                      => 'Activité de commande',
'buyer_order_activity_greeting'                     => 'Bonjour {{user_name}},',
'buyer_order_activity_content'                      => 'Vous avez reçu une note de “{{sender_name}}” concernant le service en cours “{{gig_title}}” pour la commande #{{order_id}}<br>{{sender_comments}}<br>Vous pouvez vous connecter pour agir rapidement.<br>{{login_url}}',

'seller_order_activity_variables'                   => '{{user_name}} — Pour afficher le nom du destinataire.<br>{{sender_name}} — Pour afficher le nom de l\'expéditeur.<br>{{gig_title}} — Pour afficher le titre du service.<br>{{order_id}} — Pour afficher le numéro de séquence de la commande.<br>{{sender_comments}} — Pour afficher les commentaires de l\'expéditeur.<br>{{login_url}} — Pour afficher l\'URL de connexion.',
'seller_order_activity_subject'                     => 'Activité de commande',
'seller_order_activity_greeting'                    => 'Bonjour {{user_name}},',
'seller_order_activity_content'                     => 'Vous avez reçu une note de “{{sender_name}}” concernant le service en cours “{{gig_title}}” pour la commande #{{order_id}}<br>{{sender_comments}}<br>Vous pouvez vous connecter pour agir rapidement.<br>{{login_url}}',

// ============================New order refund - for seller & admin ============ \\ done
'order_refund_request'                              => 'Demande de remboursement de commande',
    
'seller_received_order_dispute_variables'           => '{{user_name}} — Pour afficher le nom du vendeur.<br>{{buyer_name}} — Pour afficher le nom de l\'acheteur.<br>{{order_id}} — Pour afficher le numéro de séquence de la commande.<br>{{buyer_comments}} — Pour afficher les commentaires de l\'acheteur.<br>{{login_url}} — Pour afficher l\'URL de connexion.',
'seller_received_order_dispute_subject'             => 'Nouvelle demande de remboursement reçue',
'seller_received_order_dispute_greeting'            => 'Bonjour {{user_name}},',
'seller_received_order_dispute_content'             => "Vous avez reçu une demande de remboursement de {{buyer_name}} concernant la commande #{{order_id}}<br>{{buyer_comments}}<br>Vous pouvez approuver ou décliner la demande de remboursement.<br>{{login_url}}<br>",

'admin_received_order_dispute_variables'            => '{{order_id}} — Pour afficher le numéro de séquence de la commande.',
'admin_received_order_dispute_subject'              => 'Nouveau litige reçu',
'admin_received_order_dispute_greeting'             => 'Bonjour',
'admin_received_order_dispute_content'              => "Un nouveau litige a été créé concernant la commande #{{order_id}}<br>",

// ============================ Refund comment - for buyer & seller ============ \\ done
'order_refund_reply'                                => 'Commentaires sur le remboursement de commande',

'buyer_order_refund_reply_variables'                => '{{user_name}} — Pour afficher le nom du destinataire.<br>{{sender_name}} — Pour afficher le nom de l\'expéditeur.<br>{{order_id}} — Pour afficher le numéro de séquence de la commande.<br>{{sender_comments}} — Pour afficher les commentaires de l\'expéditeur.<br>{{login_url}} — Pour afficher l\'URL de connexion.',
'buyer_order_refund_reply_subject'                  => 'Nouveau commentaire sur la demande de remboursement',
'buyer_order_refund_reply_greeting'                 => 'Bonjour {{user_name}},',
'buyer_order_refund_reply_content'                  => "« {{sender_name}} » a laissé des commentaires sur la demande de remboursement concernant la commande #{{order_id}}<br>{{sender_comments}}<br>{{login_url}}<br>",

'seller_order_refund_reply_variables'               => '{{user_name}} — Pour afficher le nom du destinataire.<br>{{sender_name}} — Pour afficher le nom de l\'expéditeur.<br>{{order_id}} — Pour afficher le numéro de séquence de la commande.<br>{{sender_comments}} — Pour afficher les commentaires de l\'expéditeur.<br>{{login_url}} — Pour afficher l\'URL de connexion.',
'seller_order_refund_reply_subject'                 => 'Nouveau commentaire sur la demande de remboursement',
'seller_order_refund_reply_greeting'                => 'Bonjour {{user_name}},',
'seller_order_refund_reply_content'                 => "« {{sender_name}} » a laissé des commentaires sur la demande de remboursement concernant la commande #{{order_id}}<br>{{sender_comments}}<br>{{login_url}}<br>",

// ============================ Dispute order resolved from seller - for buyer ============ \\ done
'seller_appr_order_dispute_req'                     => 'Demande de remboursement approuvée par le vendeur',

'seller_appr_order_dispute_req_variables'           => '{{user_name}} — Pour afficher le nom d\'utilisateur. <br> {{sender_name}} — Pour afficher le nom du vendeur.<br> {{gig_title}} — Pour afficher le titre du service.',
'seller_appr_order_dispute_req_subject'             => 'Remboursement approuvé',
'seller_appr_order_dispute_req_greeting'            => 'Bonjour {{user_name}},',
'seller_appr_order_dispute_req_content'             => "Félicitations ! <br> Votre demande de remboursement a été approuvée par {{sender_name}} pour le service « {{gig_title}} »",

// ============================ When order dispute declined by seller to buyer - for buyer ============ \\ (Done)
'seller_decline_dispute_order'                      => 'Demande de remboursement refusée par le vendeur',

'seller_decline_dispute_order_variables'            => '{{user_name}} — Pour afficher le nom d\'utilisateur.<br> {{sender_name}} — Pour afficher le nom de l\'expéditeur.<br> {{gig_title}} — Pour afficher le titre du service.<br>{{login_url}} — URL de connexion de l\'utilisateur.',
'seller_decline_dispute_order_subject'              => 'Remboursement refusé',
'seller_decline_dispute_order_greeting'             => 'Bonjour {{user_name}}',
'seller_decline_dispute_order_content'              => "Votre demande de remboursement pour le service « {{gig_title}} » a été refusée par {{sender_name}}.<br> Si vous estimez que cette demande était valide, vous pouvez soulever un litige depuis la page d'activité de commande de service en cours.<br>{{login_url}}",

// ============================ Gig order dispute refunded by admin to winner  ============ \\ (Done)
'admin_refund_order_dispute_to_winner'              => 'Litige de commande de service résolu en faveur du gagnant',
    
'disp_order_fvr_in_seller_var'                      => '{{user_name}} — Pour afficher le nom du vendeur.',
'disp_order_fvr_in_seller_sub'                      => 'Litige résolu',
'disp_order_fvr_in_seller_greeting'                 => 'Bonjour {{user_name}},',
'disp_order_fvr_in_seller_cont'                     => "Félicitations ! <br>Nous avons examiné le remboursement et le litige et avons résolu le litige en votre faveur. Nous avons tranché en votre faveur pour la commande de service et le montant a été ajouté à votre compte.",

'disp_order_fvr_in_buyer_var'                       => '{{user_name}} — Pour afficher le nom de l\'acheteur.',
'disp_order_fvr_in_buyer_sub'                       => 'Litige résolu',
'disp_order_fvr_in_buyer_greeting'                  => 'Bonjour {{user_name}},',
'disp_order_fvr_in_buyer_cont'                      => "Félicitations ! <br>Nous avons examiné le remboursement et le litige et avons résolu le litige en votre faveur. Nous avons tranché en votre faveur pour la commande de service et le montant a été ajouté à votre compte.",

// ============================ Gig order dispute refunded by admin to not in favour  ============ \\ (Done)
'admin_order_dispute_not_in_favour'                 => 'Litige de commande de service non résolu en faveur',

'disp_order_not_in_fvr_seller_var'                  => '{{user_name}} — Pour afficher le nom de l\'acheteur.<br>{{dispute_link}} — Lien URL du litige',
'disp_order_not_in_fvr_seller_sub'                  => 'Litige résolu',
'disp_order_not_in_fvr_seller_greeting'             => 'Bonjour {{user_name}},',
'disp_order_not_in_fvr_seller_cont'                 => "Oups ! Nous n'avons pas approuvé la demande de remboursement de litige en votre faveur.<br>Veuillez cliquer sur le bouton ci-dessous pour voir les détails du litige.<br>{{dispute_link}}",

'disp_order_not_in_fvr_buyer_var'                   => '{{user_name}} — Pour afficher le nom du vendeur.<br>{{dispute_link}} — Lien URL du litige',
'disp_order_not_in_fvr_buyer_sub'                   => 'Litige résolu',
'disp_order_not_in_fvr_buyer_greeting'              => 'Bonjour {{user_name}},',
'disp_order_not_in_fvr_buyer_cont'                  => "Oups ! Nous n'avons pas approuvé la demande de remboursement de litige en votre faveur.<br>Veuillez cliquer sur le bouton ci-dessous pour voir les détails du litige.<br>{{dispute_link}}",

];
