<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Email templating languages Lines
    |--------------------------------------------------------------------------
    |
    */

    'email_title'                   => 'عنوان البريد الإلكتروني',
    'role_type'                     => 'نوع الدور',
    'all_templates'                 => 'قوالب البريد الإلكتروني',
    'add_email_template'            => 'إضافة قالب جديد',
    'update_email_template'         => 'تحديث القالب',
    'select_template'               => 'اختر القالب',
    'registration_title'            => 'بريد تسجيل الدخول',
    'buyer'                         => 'المشتري',        
    'seller'                        => 'البائع',        
    'admin'                         => 'المسؤول',        
    'verfiy_email'                  => 'تحقق من عنوان البريد الإلكتروني',
    'login_url'                     => '“تسجيل الدخول”',
    'ridirect_login'                => 'إعادة توجيه إلى تسجيل الدخول',
    'set_email_status'              => 'تعيين حالة هذا البريد الإلكتروني على أنه',
    'reset_password_txt'            => 'إعادة تعيين كلمة المرور',

    // =========== Email general translation ==================== \\ 
    'email_setting_variable'    => 'متغيرات إعداد البريد الإلكتروني',
    'greeting'                  => 'نص التحية',
    'email_content'             => 'محتوى البريد الإلكتروني',
    'subject'                   => 'موضوع البريد الإلكتروني',

    // =========================== User Registration by admin notify user  =============== \\
    'user_created_title'            => 'تم إنشاء مستخدم جديد',

    'user_created_variables'        => '{{user_name}} — لعرض اسم المستخدم.<br> {{site_name}} — لعرض اسم الموقع. <br> {{user_email}} — لعرض بريد المستخدم. {{password}} لعرض كلمة مرور المستخدم.',
    'user_created_subject'          => 'تم إنشاء حساب جديد',
    'user_created_greeting'         => 'مرحباً {{user_name}}،',
    'user_created_content'          => 'أخبار رائعة! تم إنشاء حسابك الجديد من قبل المسؤول في {{site_name}} <br> يرجى تسجيل الدخول باستخدام التفاصيل المذكورة أدناه. <br>عنوان البريد الإلكتروني:<br>{{user_email}}<br>كلمة المرور:<br>{{password}}<br>شكراً,<br>{{admin_name}}',

    // ===========================User Registration Email =============== \\
    'buyer_registration_email_variable'     => '{{user_name}} — لعرض اسم المستخدم.<br>{{user_email}} — لعرض بريد المستخدم.<br>{{user_password}} — لعرض كلمة مرور المستخدم.<br>{{site_name}} — لعرض اسم الموقع.<br>{{verification_link}} — لعرض رابط التحقق',
    'buyer_registration_subject'            => 'شكرًا لتسجيلك في {{site_name}}',
    'buyer_registration_greeting'           => 'مرحبًا {{user_name}}',
    'buyer_registration_content'            => 'شكرًا لتسجيلك في {{site_name}}. يرجى النقر أدناه للتحقق من بريدك الإلكتروني <br> {{verification_link}}',

    'seller_registration_email_variable'    => '{{user_name}} — لعرض اسم المستخدم.<br>{{user_email}} — لعرض بريد المستخدم.<br>{{user_password}} — لعرض كلمة مرور المستخدم.<br>{{site_name}} — لعرض اسم الموقع.<br>{{verification_link}} — لعرض رابط التحقق',
    'seller_registration_subject'           => 'شكرًا لتسجيلك في {{site_name}}',
    'seller_registration_greeting'          => 'مرحبًا {{user_name}}',
    'seller_registration_content'           => 'شكرًا لتسجيلك في {{site_name}}. يرجى النقر أدناه للتحقق من بريدك الإلكتروني <br> {{verification_link}}',

    'user_registerd_to_admin_variable'      => '{{user_name}} — لعرض اسم المستخدم.<br>{{user_email}} — لعرض بريد المستخدم.',
    'user_registerd_to_admin_subject'       => 'شكرًا لتسجيلك في {{site_name}}',
    'user_registerd_to_admin_greeting'      => 'مرحبًا،',
    'user_registerd_to_admin_content'       => 'تم تسجيل مستخدم جديد على الموقع بالاسم <br> "{{user_name}}" وعنوان البريد الإلكتروني "{{user_email}}"',

    //========================= Account approval request =========================\\
    'account_approval_title'                        => 'طلب موافقة الحساب',

    'buyer_account_approval_variables'              => '{{user_name}} — لعرض اسم المستخدم.<br> {{user_email}} — لعرض البريد الإلكتروني للمستخدم.<br>{{user_password}} — لعرض كلمة المرور للمستخدم.<br>{{site_name}} — لعرض اسم الموقع.',
    'buyer_account_approval_subject'                => 'شكرًا لتسجيلك في {{site_name}}',
    'buyer_account_approval_greeting'               => 'مرحبًا {{user_name}}،',
    'buyer_account_approval_content'                => 'شكرًا لتسجيلك في {{site_name}}. سيتم الموافقة على حسابك بعد التحقق.',

    'seller_account_approval_variables'             => '{{user_name}} — لعرض اسم المستخدم.<br> {{user_email}} — لعرض البريد الإلكتروني للمستخدم.<br>{{user_password}} — لعرض كلمة المرور للمستخدم.<br>{{site_name}} — لعرض اسم الموقع.',
    'seller_account_approval_subject'               => 'شكرًا لتسجيلك في {{site_name}}',
    'seller_account_approval_greeting'              => 'مرحبًا {{user_name}}،',
    'seller_account_approval_content'               => 'شكرًا لتسجيلك في {{site_name}}. سيتم الموافقة على حسابك بعد التحقق.',

    'admin_account_approval_variables'              => '{{user_email}} — لعرض البريد الإلكتروني للمستخدم.<br>{{user_password}} — لعرض كلمة المرور للمستخدم.<br>{{site_name}} — لعرض اسم الموقع.<br>{{login_url}} — رابط تسجيل الدخول للمستخدم.',
    'admin_account_approval_subject'                => 'شكرًا لتسجيلك في {{site_name}}',
    'admin_account_approval_greeting'               => 'مرحبًا،',
    'admin_account_approval_content'                => 'تم تسجيل مستخدم جديد على الموقع بالاسم {{user_name}} وعنوان البريد الإلكتروني {{user_email}}. <br> التسجيل معلق بانتظار الموافقة، يمكنك تسجيل الدخول إلى لوحة التحكم {{login_url}} للموافقة على الحساب.',
    
    //========================= Account approved =========================\\ (done)
    'account_approved_title'                        => 'تمت الموافقة على الحساب',

    'buyer_account_approved_variables'              => '{{user_name}} — لعرض اسم المستخدم.<br>{{user_email}} — لعرض البريد الإلكتروني للمستخدم.<br>{{site_name}} — لعرض اسم الموقع.',
    'buyer_account_approved_subject'                => 'تمت الموافقة على الحساب.',
    'buyer_account_approved_greeting'               => 'مرحبًا {{user_name}}،',
    'buyer_account_approved_content'                => 'تهانينا! تمت الموافقة على حسابك من قبل المشرف.',

    'seller_account_approved_variables'             => '{{user_name}} — لعرض اسم المستخدم.<br>{{user_email}} — لعرض البريد الإلكتروني للمستخدم.<br>{{site_name}} — لعرض اسم الموقع.',
    'seller_account_approved_subject'               => 'تمت الموافقة على الحساب.',
    'seller_account_approved_greeting'              => 'مرحبًا {{user_name}}،',
    'seller_account_approved_content'               => 'تهانينا! تمت الموافقة على حسابك من قبل المشرف.',

    //=========================== Reset password ================================\\ (Done)
    'reset_password'                                => 'إعادة تعيين كلمة المرور',

    'buyer_reset_password_variables'                => '{{account_email}} — لعرض البريد الإلكتروني للمستخدم. <br> {{reset_link}} — لعرض رابط إعادة تعيين كلمة المرور.',
    'buyer_reset_password_subject'                  => 'إعادة تعيين كلمة المرور.',
    'buyer_reset_password_greeting'                 => 'مرحبًا،',
    'buyer_reset_password_content'                  => 'لقد طلب شخص إعادة تعيين كلمة المرور للحساب التالي: <br> عنوان البريد الإلكتروني: {{account_email}} <br>إذا كانت هذه خطأ، فقط تجاهل هذا البريد الإلكتروني ولن يحدث شيء.<br>لإعادة تعيين كلمة المرور، انقر على الرابط التالي:<br>{{reset_link}}',

    'seller_reset_password_variables'               => '{{account_email}} — لعرض البريد الإلكتروني للمستخدم. <br> {{reset_link}} — لعرض رابط إعادة تعيين كلمة المرور.',
    'seller_reset_password_subject'                 => 'إعادة تعيين كلمة المرور.',
    'seller_reset_password_greeting'                => 'مرحبًا،',
    'seller_reset_password_content'                 => 'لقد طلب شخص إعادة تعيين كلمة المرور للحساب التالي: <br> عنوان البريد الإلكتروني: {{account_email}} <br>إذا كانت هذه خطأ، فقط تجاهل هذا البريد الإلكتروني ولن يحدث شيء.<br>لإعادة تعيين كلمة المرور، انقر على الرابط التالي:<br>{{reset_link}}',

    //===================================== Account identity request to Admin - for admin ====================\\ (done)
    'accout_identity_verification'                  => 'التحقق من هوية الحساب',

    'identity_verification_variables'               => '{{user_name}} — لعرض اسم المستخدم.<br> {{login_url}} — رابط تسجيل الدخول للمستخدم',
    'identity_verification_subject'                 => 'طلب جديد للتحقق من الهوية تم استلامه',
    'identity_verification_greeting'                => 'مرحبًا،',
    'identity_verification_content'                 => '{{user_name}} قام برفع وثيقة للتحقق من الهوية. التحقق من الحساب معلق بانتظار الموافقة، يمكنك {{login_url}} للدخول إلى لوحة التحكم للموافقة على التحقق من الهوية.',
    //===================================== Account identity rejection ====================\\ (done)
   'accout_identity_rejection'                     => 'رفض التحقق من هوية الحساب',

    'buyer_identity_rejection_variables'            => '{{user_name}} — لعرض اسم المستخدم.<br>{{user_link}} — لعرض رابط المستخدم الذي قام بإرسال طلب التحقق من الهوية.<br>{{admin_message}} — لعرض رسالة المشرف للرفض.<br>{{user_email}} — لعرض عنوان البريد الإلكتروني للمستخدم الذي قام بإرسال طلب التحقق من الهوية.',
    'buyer_identity_rejection_subject'              => 'تم رفض طلبك للتحقق من الهوية',
    'buyer_identity_rejection_greeting'             => 'مرحبًا {{user_name}}،',
    'buyer_identity_rejection_content'              => 'تم رفض وثيقة التحقق من الهوية التي قمت برفعها.<br>{{admin_message}}',

    'seller_identity_rejection_variables'           => '{{user_name}} — لعرض اسم المستخدم.<br>{{user_link}} — لعرض رابط المستخدم الذي قام بإرسال طلب التحقق من الهوية.<br>{{admin_message}} — لعرض رسالة المشرف للرفض.<br>{{user_email}} — لعرض عنوان البريد الإلكتروني للمستخدم الذي قام بإرسال طلب التحقق من الهوية.',
    'seller_identity_rejection_subject'             => 'تم رفض طلبك للتحقق من الهوية',
    'seller_identity_rejection_greeting'            => 'مرحبًا {{user_name}}،',
    'seller_identity_rejection_content'             => 'تم رفض وثيقة التحقق من الهوية التي قمت برفعها.<br>{{admin_message}}',
    
    //====================================== Account identity approved ========================= \\ (Done)
    'account_identity_approved'                     => 'تمت الموافقة على هوية الحساب',

    'buyer_identity_approved_variables'             => '{{user_name}} — لعرض اسم المستخدم.<br>{{user_link}} — لعرض رابط المستخدم الذي قام بإرسال طلب التحقق من الهوية.<br>{{user_email}} — لعرض عنوان البريد الإلكتروني للمستخدم الذي قام بإرسال طلب التحقق من الهوية.',
    'buyer_identity_approved_subject'               => 'تمت الموافقة على طلبك للتحقق من الهوية',
    'buyer_identity_approved_greeting'              => 'مرحبًا {{user_name}}،',
    'buyer_identity_approved_content'               => 'تهانينا!<br>تمت الموافقة على الوثائق التي قدمتها للتحقق من الهوية.',

    'seller_identity_approved_variables'            => '{{user_name}} — لعرض اسم المستخدم.<br>{{user_link}} — لعرض رابط المستخدم الذي قام بإرسال طلب التحقق من الهوية.<br>{{user_email}} — لعرض عنوان البريد الإلكتروني للمستخدم الذي قام بإرسال طلب التحقق من الهوية.',
    'seller_identity_approved_subject'              => 'تمت الموافقة على طلبك للتحقق من الهوية',
    'seller_identity_approved_greeting'             => 'مرحبًا {{user_name}}،',
    'seller_identity_approved_content'              => 'تهانينا!<br>تمت الموافقة على الوثائق التي قدمتها للتحقق من الهوية.',

    // ============================ When new dispute is created by buyer to seller ============ \\ (Done)
    'seller_dispute_received'                       => 'تم إنشاء نزاع من قبل المشتري إلى البائع',

    'seller_dispute_received_variables'             => '{{user_name}} — لعرض اسم البائع.<br> {{buyer_name}} — لعرض اسم المشتري.<br> {{project_title}} — لعرض عنوان المشروع.<br> {{buyer_comments}} — لعرض تعليقات المشتري. <br/> {{login_url}} — رابط تسجيل الدخول للمستخدم',
    'seller_dispute_received_subject'               => 'تم استلام طلب جديد للإسترداد',
    'seller_dispute_received_greeting'              => 'مرحبًا {{user_name}}',
    'seller_dispute_received_content'               => 'لقد تم استلام طلب استرداد من {{buyer_name}} بخصوص المشروع "{{project_title}}".<br>{{buyer_comments}} </br> يمكنك الموافقة على الطلب أو رفضه. <br> {{login_url}}',

    // ============================ When dispute approved by seller to buyer ============ \\ (Done)
    'seller_approved_dispute_req'                   => 'تمت الموافقة على طلب الاسترداد من قبل البائع',

    'seller_approved_dispute_req_variables'         => '{{user_name}} — لعرض اسم المستخدم. <br> {{sender_name}} — لعرض اسم البائع.<br> {{project_title}} — لعرض عنوان المشروع.',
    'seller_approved_dispute_req_subject'           => 'تمت الموافقة على طلب الاسترداد',
    'seller_approved_dispute_req_greeting'          => 'مرحبًا {{user_name}}،',
    'seller_approved_dispute_req_content'           => 'تهانينا! <br> تمت الموافقة على طلب الاسترداد الخاص بك من قبل {{sender_name}} بخصوص المشروع "{{project_title}}"',

    // ============================ When dispute declined by seller to buyer ============ \\ (Done)
    'seller_decline_dispute'                        => 'تم رفض طلب الاسترداد من قبل البائع',

    'seller_decline_dispute_variables'              => '{{user_name}} — لعرض اسم المستخدم.<br> {{sender_name}} — لعرض اسم المرسل.<br> {{project_title}} — لعرض عنوان المشروع. <br/> {{login_url}} — رابط تسجيل الدخول للمستخدم',
    'seller_decline_dispute_subject'                => 'تم رفض طلب الاسترداد',
    'seller_decline_dispute_greeting'               => 'مرحبًا {{user_name}}',
    'seller_decline_dispute_content'                => 'تم رفض طلب الاسترداد الخاص بك من قبل {{sender_name}} بخصوص المشروع "{{project_title}}"<br>إذا كنت تعتقد أن هذا الطلب كان صحيحًا، يمكنك رفع نزاع من صفحة نشاط المشروع الجاري. <br> {{login_url}}',

    // ============================ comment on refund request ============ \\ (Done)
    'comment_on_dispute'                            => 'تعليقات على طلب الاسترداد',

    'seller_dispute_comment_variables'              => '{{user_name}} — لعرض اسم المستخدم.<br> {{sender_name}} — لعرض اسم المرسل.<br> {{project_title}} — لعرض عنوان المشروع. <br> {{sender_comments}} — لعرض التعليق. <br> {{login_url}} — رابط تسجيل الدخول للمستخدم.',
    'seller_dispute_comment_subject'                => 'تعليق جديد على طلب الاسترداد',
    'seller_dispute_comment_greeting'               => 'مرحبًا {{user_name}}',
    'seller_dispute_comment_content'                => 'المرسل "{{sender_name}}" قد ترك بعض التعليقات على طلب الاسترداد بخصوص المشروع "{{project_title}}"<br>{{sender_comments}} <br> {{login_url}}',

    'buyer_dispute_comment_variables'               => '{{user_name}} — لعرض اسم المستخدم.<br> {{sender_name}} — لعرض اسم المرسل.<br> {{project_title}} — لعرض عنوان المشروع. <br> {{sender_comments}} — لعرض التعليق. <br> {{login_url}} — رابط تسجيل الدخول للمستخدم.',
    'buyer_dispute_comment_subject'                 => 'تعليق جديد على طلب الاسترداد',
    'buyer_dispute_comment_greeting'                => 'مرحبًا {{user_name}}',
    'buyer_dispute_comment_content'                 => 'المرسل "{{sender_name}}" قد ترك بعض التعليقات على طلب الاسترداد بخصوص المشروع "{{project_title}}"<br>{{sender_comments}} <br> {{login_url}}',

// ============================ new dispute received to admin ============ \\ (Done)
    'admin_received_dispute'                        => 'تم استلام نزاع للمشرف',

    'admin_received_dispute_variables'              => "{{project_title}} — لعرض عنوان المشروع.<br> {{type}} — لعرض النوع مثل 'مشروع' أو 'خدمة'",
    'admin_received_dispute_subject'                => 'تم استلام نزاع جديد',
    'admin_received_dispute_greeting'               => 'مرحبًا',
    'admin_received_dispute_content'                => "تم إنشاء نزاع جديد ضد {{type}} “{{project_title}}”",

// ============================ dispute refunded in hourly project by admin to winner  ============ \\ (Done)
    'admin_refund_hourly_dispute_to_winner'         => 'نزاع مشروع بالساعة لصالح الفائز',

    'hourly_dispute_favour_in_seller_variables'     => '{{user_name}} — لعرض اسم البائع.',
    'hourly_dispute_favour_in_seller_subject'       => 'تم حل النزاع',
    'hourly_dispute_favour_in_seller_greeting'      => 'مرحبًا {{user_name}}،',
    'hourly_dispute_favour_in_seller_content'       => "تهانينا! <br> لقد تم مراجعة طلب الاسترداد والنزاع وتم حل النزاع لصالحك. لقد تم مناقشة المشروع وحل النزاع لصالحك.",

    'hourly_dispute_favour_in_buyer_variables'      => '{{user_name}} — لعرض اسم البائع.',
    'hourly_dispute_favour_in_buyer_subject'        => 'تم حل النزاع',
    'hourly_dispute_favour_in_buyer_greeting'       => 'مرحبًا {{user_name}}،',
    'hourly_dispute_favour_in_buyer_content'        => "تهانينا! <br> لقد تم مراجعة طلب الاسترداد والنزاع وتم حل النزاع لصالحك. لقد تم مناقشة المشروع وحل النزاع لصالحك.",


// ============================ dispute refunded in fixed and milestone project by admin to winner  ============ \\ (Done)
    'admin_refund_dispute_to_winner'                => 'نزاع المشروع لصالح الفائز',

    'dispute_favour_in_seller_variables'            => '{{user_name}} — لعرض اسم البائع.',
    'dispute_favour_in_seller_subject'              => 'تم حل النزاع',
    'dispute_favour_in_seller_greeting'             => 'مرحبًا {{user_name}}،',
    'dispute_favour_in_seller_content'              => "تهانينا! <br> لقد قمنا بمراجعة طلب الاسترداد والنزاع وتم حل النزاع لصالحك. لقد قمنا بمناقشة المشروع وتمت إضافة المبلغ إلى حسابك.",

    'dispute_favour_in_buyer_variables'             => '{{user_name}} — لعرض اسم البائع.',
    'dispute_favour_in_buyer_subject'               => 'تم حل النزاع',
    'dispute_favour_in_buyer_greeting'              => 'مرحبًا {{user_name}}،',
    'dispute_favour_in_buyer_content'               => "تهانينا! <br> لقد قمنا بمراجعة طلب الاسترداد والنزاع وتم حل النزاع لصالحك. لقد قمنا بمناقشة المشروع وتمت إضافة المبلغ إلى حسابك.",

    // ============================ dispute refunded by admin to not in favour  ============ \\ (Done)
    'admin_dispute_not_in_favour'                   => 'نزاع المشروع لم يكن لصالحك',

    'dispute_not_in_favour_seller_variables'        => '{{user_name}} — لعرض اسم المشتري. <br> {{dispute_link}} — رابط تفاصيل النزاع',
    'dispute_not_in_favour_seller_subject'          => 'تم حل النزاع',
    'dispute_not_in_favour_seller_greeting'         => 'مرحبًا {{user_name}}،',
    'dispute_not_in_favour_seller_content'          => "أوه! لم نوافق على طلب الاسترداد في النزاع لصالحك.<br>الرجاء الضغط على الزر أدناه لعرض تفاصيل النزاع.<br>{{dispute_link}}",

    'dispute_not_in_favour_buyer_variables'         => '{{user_name}} — لعرض اسم المشتري. <br> {{dispute_link}} — رابط تفاصيل النزاع',
    'dispute_not_in_favour_buyer_subject'           => 'تم حل النزاع',
    'dispute_not_in_favour_buyer_greeting'          => 'مرحبًا {{user_name}}،',
    'dispute_not_in_favour_buyer_content'           => "أوه! لم نوافق على طلب الاسترداد في النزاع لصالحك.<br>الرجاء الضغط على الزر أدناه لعرض تفاصيل النزاع.<br>{{dispute_link}}",

    // ============================ package purchase - for seller and buyer ============ \\ (Done)
    'package_purchase'                              => 'شراء باقة',

    'package_purchase_by_seller_variables'          => '{{user_name}} — لعرض اسم المستخدم.<br>{{package_name}} — لعرض اسم الباقة.',
    'package_purchase_by_seller_subject'            => 'شكرًا لك على شراء الباقة',
    'package_purchase_by_seller_greeting'           => 'مرحبًا {{user_name}}،',
    'package_purchase_by_seller_content'            => 'شكرًا لك على شراء الباقة "{{package_name}}"<br>يمكنك الآن نشر خدمة والحصول على طلبات',

    'package_purchase_by_buyer_variables'           => '{{user_name}} — لعرض اسم المستخدم.<br>{{package_name}} — لعرض اسم الباقة.',
    'package_purchase_by_buyer_subject'             => 'شكرًا لك على شراء الباقة',
    'package_purchase_by_buyer_greeting'            => 'مرحبًا {{user_name}}،',
    'package_purchase_by_buyer_content'             => 'شكرًا لك على شراء الباقة "{{package_name}}"<br>يمكنك الآن إنشاء وظائف.',

    'package_purchase_to_admin_variables'           => '{{user_name}} — لعرض اسم المستخدم.<br>{{package_name}} — لعرض اسم الباقة.<br> {{purchaser_name}} — لعرض اسم الشاري.<br>{{current_date}} — لعرض تاريخ الشراء.',
    'package_purchase_to_admin_subject'             => 'تم شراء باقة جديدة بواسطة "{{purchaser_name}}"',
    'package_purchase_to_admin_greeting'            => 'مرحبًا،',
    'package_purchase_to_admin_content'             => 'تم شراء باقة "{{package_name}}" جديدة من قبل "{{purchaser_name}}" في "{{current_date}}"',

    // ============================ send message on project conversation ============ \\ (Done)
    'project_conversation'                          => 'محادثة المشروع',

    'seller_project_conv_var'                       => '{{user_name}} — لعرض اسم المستخدم.<br>{{sender_name}} — لعرض اسم المرسل.<br> {{project_title}} — لعرض عنوان المشروع. <br> {{login_url}} — رابط تسجيل الدخول للمستخدم.',
    'seller_project_conv_subj'                      => 'تم استلام رسالة جديدة',
    'seller_project_conv_greeting'                  => 'مرحبًا {{user_name}}',
    'seller_project_conv_cont'                      => "{{sender_name}} أرسل لك رسالة جديدة على مشروع “{{project_title}}”.<br>انقر على الرابط أدناه لقراءة الرسالة.<br>{{login_url}}",

    'buyer_project_conv_var'                        => '{{user_name}} — لعرض اسم المستخدم.<br> {{sender_name}} — لعرض اسم المرسل.<br>{{project_title}} — لعرض عنوان المشروع. <br> {{login_url}} — رابط تسجيل الدخول للمستخدم.',
    'buyer_project_conv_subj'                       => 'تم استلام رسالة جديدة',
    'buyer_project_conv_greeting'                   => 'مرحبًا {{user_name}}',
    'buyer_project_conv_cont'                       => "{{sender_name}} أرسل لك رسالة جديدة على مشروع “{{project_title}}”.<br>انقر على الرابط أدناه لقراءة الرسالة.<br>{{login_url}}",

    // ============================ Project submission when verification by admin and sent to buyer - for buyer and admin(Done) ============ \\ (Done)
    'project_posted'                                => 'تقديم مشروع',

    'project_posted_by_buyer_variables'             => '{{user_name}} — لعرض اسم المستخدم.',
    'project_posted_by_buyer_subject'               => 'تقديم مشروع',
    'project_posted_by_buyer_greeting'              => 'مرحبًا {{user_name}}،',
    'project_posted_by_buyer_content'               => 'شكرًا لك على تقديم المشروع، سنقوم بمراجعته والموافقة عليه بعد الاطلاع عليه.',

    'project_posted_to_admin_variables'             => '{{user_name}} — لعرض اسم المستخدم.<br>{{project_link}} — رابط معاينة المشروع.',
    'project_posted_to_admin_subject'               => 'تقديم مشروع جديد',
    'project_posted_to_admin_greeting'              => 'مرحبًا،',
    'project_posted_to_admin_content'               => 'تم تقديم مشروع جديد من قبل "{{user_name}}" وفي انتظار الموافقة. يرجى الضغط على الرابط أدناه للحصول على مزيد من التفاصيل.<br> {{project_link}}',

    // ============================ Project invite request from buyer to seller - for seller ============ \\ (Done)
    'project_invite_request'                        => 'طلب دعوة للمشروع',

    'project_invite_request_variables'              => '{{user_name}} — لعرض اسم المستخدم. <br> {{project_title}} — لعرض عنوان المشروع.',
    'project_invite_request_subject'                => 'لقد تلقيت دعوة لمشروع',
    'project_invite_request_greeting'               => 'مرحبًا {{user_name}}،',
    'project_invite_request_content'                => 'تهانينا! لقد تلقيت دعوة جديدة للمشاركة في المشروع "{{project_title}}".',

    // ============================ Project approved acknowledgement to buyer - for buyer ============ \\ (Done)
    'project_approved'                              => 'المشروع موافق عليه',

    'project_approved_to_buyer_variables'           => '{{user_name}} — لعرض اسم المستخدم.<br> {{project_title}} — لعرض عنوان المشروع.<br>{{project_link}} — رابط عرض المشروع.',
    'project_approved_to_buyer_subject'             => 'تقديم مشروع',
    'project_approved_to_buyer_greeting'            => 'مرحبًا {{user_name}}،',
    'project_approved_to_buyer_content'             => 'يا هلا! تمت الموافقة على مشروعك “{{project_title}}”.<br>يرجى النقر على الزر أدناه لعرض التفاصيل.<br>{{project_link}}',

    // ============================ proposal submit request - for buyer ============ \\ (Doen)
    'proposal_approve_request'                      => 'تقديم مقترح',

    'proposal_approve_request_variables'            => '{{user_name}} — لعرض اسم المستخدم.<br> {{seller_name}} — لعرض اسم البائع.<br> {{project_title}} — لعرض عنوان المشروع.<br>{{proposal_link}} — لعرض رابط المقترح.',
    'proposal_approve_request_subject'              => 'تقديم مقترح',
    'proposal_approve_request_greeting'             => 'مرحبًا {{user_name}}،',
    'proposal_approve_request_content'              => '{{seller_name}} قدم مقترح جديد على "{{project_title}}". <br> الرجاء الضغط على الزر أدناه لعرض المقترح. <br> {{proposal_link}}',

    // ============================ seller complete project contract request to buyer - for buyer ============ \\ (Doen)
    'project_complete_request'                  => 'طلب استكمال المشروع',

    'project_complete_request_variables'        => '{{user_name}} — لعرض اسم المستخدم.<br> {{seller_name}} — لعرض اسم البائع.<br> {{project_title}} — لعرض عنوان المشروع.<br>{{project_activity_link}} — لعرض رابط نشاط المشروع.',
    'project_complete_request_subject'          => 'تقديم طلب استكمال المشروع',
    'project_complete_request_greeting'         => 'مرحبًا {{user_name}}،',
    'project_complete_request_content'          => '{{seller_name}} قدم طلب استكمال العقد ضد المشروع "{{project_title}}". <br> الرجاء الضغط على الزر أدناه لعرض نشاط المشروع. <br> {{project_activity_link}}',

    // ============================ seller complete project contract request declined from buyer - for seller ============ \\ (Doen)
    'project_complete_req_declined'                 => 'رفض طلب استكمال المشروع',

    'proj_complete_req_declined_variables'          => '{{user_name}} — لعرض اسم المستخدم.<br>{{project_title}} — لعرض عنوان المشروع.<br>{{declined_reason}} - لعرض سبب الرفض.<br>{{project_activity_link}} — لعرض رابط نشاط المشروع.',
    'proj_complete_req_declined_subject'            => 'رفض طلب استكمال المشروع',
    'proj_complete_req_declined_greeting'           => 'مرحبًا {{user_name}}،',
    'proj_complete_req_declined_content'            => 'تم رفض طلبك لاستكمال العقد ضد المشروع "{{project_title}}".<br>{{declined_reason}}<br> الرجاء الضغط على الزر أدناه لعرض نشاط المشروع.<br>{{project_activity_link}}',

    // ============================ Milestone project complete from buyer - for seller ============ \\ (Doen)
    'milestone_project_complete'                   => 'إنجاز مشروع البند',

    'milestone_project_comp_var'                   => '{{user_name}} — لعرض اسم المستخدم.<br>{{project_title}} — لعرض عنوان المشروع.<br>{{project_activity_link}} — لعرض رابط نشاط المشروع.',
    'milestone_project_comp_subj'                  => 'إنجاز مشروع البند',
    'milestone_project_comp_greeting'              => 'مرحبًا {{user_name}}،',
    'milestone_project_comp_cont'                  => 'تم إتمام المشروع "{{project_title}}".<br>{{project_activity_link}}',
    
    // ============================ seller complete project contract request accepter from buyer - for seller ============ \\ (Doen)
    'project_complete_request_accepted'             => 'تمت الموافقة على طلب استكمال المشروع',

    'proj_comp_req_accept_var'                      => '{{user_name}} — لعرض اسم المستخدم.<br>{{project_title}} — لعرض عنوان المشروع.<br>{{project_activity_link}} — لعرض رابط نشاط المشروع.',
    'proj_comp_req_accept_sub'                      => 'تمت الموافقة على طلب استكمال المشروع',
    'proj_comp_req_accept_greeting'                 => 'مرحبًا {{user_name}}،',
    'proj_comp_req_accept_cont'                     => 'تمت الموافقة على طلبك لاستكمال العقد ضد المشروع "{{project_title}}".<br> الرجاء الضغط على الزر أدناه لعرض نشاط المشروع.<br> {{project_activity_link}}',

    // ============================ proposal submit request declined from buyer  - for seller ============ \\ (Done)
    'proposal_request_declined'                     => 'تم رفض طلب تقديم العرض',

    'proposal_request_declined_variables'           => '{{user_name}} — لعرض اسم المستخدم.<br> {{project_title}} — لعرض عنوان المشروع.<br>{{decline_reason}} — لعرض سبب الرفض.',
    'proposal_request_declined_subject'             => 'تم رفض طلب تقديم العرض',
    'proposal_request_declined_greeting'            => 'مرحبًا {{user_name}}،',
    'proposal_request_declined_content'             => 'أوه! تم رفض طلبك لتقديم العرض ضد المشروع "{{project_title}}"<br>{{decline_reason}}',

    // ============================ proposal submit accpeted from buyer  - for seller ============ \\ (done)
    'proposal_request_accepted'                     => 'تم قبول طلب تقديم العرض',

    'proposal_request_accepted_variables'           => '{{user_name}} — لعرض اسم المستخدم.<br> {{project_title}} — لعرض عنوان المشروع.<br>{{project_activity_link}} — لعرض نشاط المشروع.',
    'proposal_request_accepted_subject'             => 'تم قبول طلب تقديم العرض',
    'proposal_request_accepted_greeting'            => 'مرحبًا {{user_name}}،',
    'proposal_request_accepted_content'             => 'يا هلّا! تم قبول طلبك لتقديم العرض ضد "{{project_title}}".<br>الرجاء الضغط على الزر أدناه لعرض نشاط المشروع.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request from seller - for buyer ============ \\ (done)
    'milestone_approve_request'                     => 'طلب موافقة على ميزانية المشروع',

    'milestone_approve_request_variables'           => '{{user_name}} — لعرض اسم المستخدم.<br> {{milestone_title}} — لعرض عنوان الميزانية.<br> {{project_title}} — لعرض عنوان المشروع.<br> {{seller_name}} — لعرض اسم البائع.<br> {{project_activity_link}} — لعرض نشاط المشروع.',
    'milestone_approve_request_subject'             => 'طلب موافقة على ميزانية المشروع',
    'milestone_approve_request_greeting'            => 'مرحبًا {{user_name}}،',
    'milestone_approve_request_content'             => 'تم استلام طلب موافقة جديد على ميزانية "{{milestone_title}}" للمشروع "{{project_title}}" من "{{seller_name}}"<br>الرجاء الضغط على الزر أدناه لعرض الميزانية.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request declined from buyer - for seller ============ \\ (Done)
    'milestone_declined'                            => 'تقديم الميزانية رُفض',

    'milestone_declined_variables'                  => '{{user_name}} — لعرض اسم المستخدم.<br> {{milestone_title}} — لعرض عنوان الميزانية.<br> {{project_title}} — لعرض عنوان المشروع.<br>{{project_activity_link}} — لعرض نشاط المشروع.',
    'milestone_declined_subject'                    => 'تقديم الميزانية رُفض',
    'milestone_declined_greeting'                   => 'مرحبًا {{user_name}}،',
    'milestone_declined_content'                    => 'أوه! تم رفض تقديمك للميزانية "{{milestone_title}}" للمشروع "{{project_title}}".<br>الرجاء الضغط على الزر أدناه لعرض الميزانية.<br>{{project_activity_link}}',

    // ============================ proposal milestone approval request accepted from buyer - for seller ============ \\
    'milestone_accepted'                            => 'تم قبول تقديم الميزانية',

    'milestone_accepted_variables'                  => '{{user_name}} — لعرض اسم المستخدم.<br> {{milestone_title}} — لعرض عنوان الميزانية.<br> {{project_title}} — لعرض عنوان المشروع.<br>{{project_activity_link}} — لعرض نشاط المشروع.',
    'milestone_accepted_subject'                    => 'تم قبول تقديم الميزانية',
    'milestone_accepted_greeting'                   => 'مرحبًا {{user_name}}،',
    'milestone_accepted_content'                    => 'يا هوو! تم قبول تقديمك للميزانية "{{milestone_title}}" للمشروع "{{project_title}}".<br>الرجاء الضغط على الزر أدناه لعرض الميزانية.<br>{{project_activity_link}}',

     // ============================ proposal milestone escrow from buyer - for seller ============ \\
    'escrow_milestone'                             => 'تأمين الميزانية',

    'escrow_milestone_variables'                  => '{{user_name}} — لعرض اسم المستخدم.<br>{{milestone_title}} — لعرض عنوان الميزانية.<br>{{project_title}} — لعرض عنوان المشروع.<br>{{project_activity_link}} — لعرض نشاط المشروع.',
    'escrow_milestone_subject'                    => 'تم تأمين الميزانية',
    'escrow_milestone_greeting'                   => 'مرحبًا {{user_name}}،',
    'escrow_milestone_content'                    => 'تم تأمين الميزانية "{{milestone_title}}" للمشروع "{{project_title}}".<br>الرجاء الضغط على الزر أدناه لعرض الميزانية.<br>{{project_activity_link}}',
     
    // ============================ proposal timecard submit request to buyer - for buyer ============ \\
    'timecard_approval_request'                     => 'تقديم طلب موافقة على بطاقة الوقت',

    'timecard_approval_request_variables'           => '{{user_name}} — لعرض اسم المستخدم.<br>{{timecard_title}} — لعرض عنوان بطاقة الوقت. <br>{{project_title}} — لعرض عنوان المشروع.<br>{{project_activity_link}} — لعرض نشاط المشروع.<br>{{seller_name}} — لعرض اسم البائع',
    'timecard_approval_request_subject'             => 'طلب جديد لموافقة بطاقة الوقت',
    'timecard_approval_request_greeting'            => 'مرحبًا {{user_name}}،',
    'timecard_approval_request_content'             => 'تم استلام طلب موافقة جديد لبطاقة الوقت "{{timecard_title}}" من مشروع "{{project_title}}" من "{{seller_name}}".<br>الرجاء الضغط على الزر أدناه لعرض تفاصيل بطاقة الوقت.<br>{{project_activity_link}}',

    // ============================ proposal timecard approval request declined from buyer - for seller ============ \\ (Done)
    'timecard_declined'                           => 'تقديم طلب رفض بطاقة الوقت',

    'timecard_declined_variables'                 => '{{user_name}} — لعرض اسم المستخدم.<br>{{timecard_title}} — لعرض عنوان بطاقة الوقت. <br>{{project_title}} — لعرض عنوان المشروع.<br>{{decline_reason}} — لعرض سبب رفض بطاقة الوقت. <br>{{project_activity_link}} — لعرض نشاط المشروع.',
    'timecard_declined_subject'                   => 'تقديم طلب رفض بطاقة الوقت',
    'timecard_declined_greeting'                  => 'مرحبًا {{user_name}}،',
    'timecard_declined_content'                   => 'أوه! تم رفض تقديم بطاقة الوقت "{{timecard_title}}" من مشروع "{{project_title}}".<br>{{decline_reason}}<br>الرجاء الضغط على الزر أدناه لعرض تفاصيل بطاقة الوقت.<br>{{project_activity_link}}',

    // ============================ proposal timecard approval request accepted from buyer - for seller ============ \\
    'timecard_accepted'                             => 'تم قبول تقديم بطاقة الوقت',

    'timecard_accepted_variables'                   => '{{user_name}} — لعرض اسم المستخدم.<br> {{timecard_title}} — لعرض عنوان بطاقة الوقت. <br> {{project_title}} — لعرض عنوان المشروع. {{project_activity_link}} لعرض نشاط المشروع.',
    'timecard_accepted_subject'                     => 'تم قبول تقديم بطاقة الوقت',
    'timecard_accepted_greeting'                    => 'مرحبًا {{user_name}}،',
    'timecard_accepted_content'                     => 'يا هوو! تم قبول تقديم بطاقة الوقت "{{timecard_title}}" ضد المشروع "{{project_title}}".<br>الرجاء الضغط على الزر أدناه لعرض تفاصيل بطاقة الوقت.<br>{{project_activity_link}}',

    // ============================ send question to admin - for admin ============ \\
    'send_qeustion'                                 => 'إرسال سؤال',

    'send_qeustion_variables'                       => '{{user_name}} — لعرض اسم المستخدم.<br> {{user_email}} — لعرض البريد الإلكتروني للمستخدم. <br> {{question_title}} — لعرض عنوان السؤال.<br> {{description}} لعرض وصف السؤال.<br>{{login_url}} لعرض زر تسجيل الدخول.',
    'send_qeustion_subject'                         => 'لقد استلمت سؤالًا',
    'send_qeustion_greeting'                        => 'مرحبًا،',
    'send_qeustion_content'                         => '{{user_name}} طرح سؤالًا/طلب دعم بالتفاصيل التالية:<br> الاسم: {{user_name}} <br> البريد الإلكتروني: {{user_email}}<br>عنوان الموضوع:<br>{{question_title}}<br>الوصف:<br>{{description}}<br>يرجى تسجيل الدخول من خلال الرابط أدناه لعرض التفاصيل.<br>{{login_url}}',

    // ============================ post gig order - for seller ============ \\ done
    'post_gig_order'                                => 'نشر طلب طلب جديد',

    'post_gig_order_variables'                      => '{{user_name}} — لعرض اسم البائع.<br> {{gig_title}} — لعرض عنوان الخدمة.',
    'post_gig_order_subject'                        => 'طلب خدمة جديد',
    'post_gig_order_greeting'                       => 'مرحبًا {{user_name}}،',
    'post_gig_order_content'                        => 'لقد استلمت طلبًا جديدًا لخدمة "{{gig_title}}"',

    'buyer_publish_order_variables'                 => '{{user_name}} — لعرض اسم الشاري.',
    'buyer_publish_order_subject'                   => 'طلب جديد',
    'buyer_publish_order_greeting'                  => 'مرحبًا {{user_name}}،',
    'buyer_publish_order_content'                   => 'شكرًا جزيلاً على طلب خدمتي. سأتواصل معك قريبًا',

    // ============================ Order Complete request - for buyer ============ \\ done
    'seller_order_complete'                         => 'طلب إكمال الطلب',

    'seller_order_complete_variables'               => '{{user_name}} — لعرض اسم الشاري.<br>{{seller_name}} — لعرض اسم البائع.<br>{{order_id}} — لعرض رقم تسلسل الطلب.<br>{{login_url}} — لعرض رابط تسجيل الدخول.<br>{{activity_link}} — لعرض رابط النشاط',
    'seller_order_complete_subject'                 => 'طلب إكمال الطلب',
    'seller_order_complete_greeting'                => 'مرحبًا {{user_name}}،',
    'seller_order_complete_content'                 => 'أرسل البائع "{{seller_name}}" تسليمه النهائي للطلب رقم #{{order_id}}<br>يمكنك قبول أو رفض هذا الطلب. يرجى تسجيل الدخول إلى الموقع {{login_url}} واتخاذ إجراء سريع على هذا النشاط {{activity_link}}',

    // ============================ Order Complete delcined request - for seller ============ \\ done
    'order_declined'                                => 'تم رفض طلب الانتهاء من الطلب',

    'order_declined_variables'                      => '{{user_name}} — لعرض اسم البائع.<br>{{buyer_name}} — لعرض اسم الشاري.<br>{{order_id}} — لعرض رقم تسلسل الطلب.<br>{{buyer_comments}} — لعرض تعليقات الشاري.',
    'order_declined_subject'                        => 'تم رفض طلب الانتهاء من الطلب',
    'order_declined_greeting'                       => 'مرحبًا {{user_name}}،',
    'order_declined_content'                        => 'قام الشاري "{{buyer_name}}" برفض التسليم النهائي وترك بعض التعليقات ضد الطلب #{{order_id}}<br>{{buyer_comments}}<br>',

    // ============================ Order Completed - for seller ============ \\ dpne
    'order_completed'                                   => 'تم الانتهاء من الطلب',

    'order_completed_variables'                         => '{{user_name}} — لعرض اسم البائع.<br>{{buyer_name}} — لعرض اسم الشاري.<br>{{order_id}} — لعرض رقم تسلسل الطلب.<br>{{buyer_comments}} — لعرض تعليقات الشاري.{{buyer_rating}} — لعرض تقييم الشاري.',
    'order_completed_subject'                           => 'تم الانتهاء من الطلب',
    'order_completed_greeting'                          => 'مرحبًا {{user_name}}،',
    'order_completed_content'                           => 'تهانينا!<br>قام الشاري "{{buyer_name}}" بإغلاق الخدمة الحالية مع الطلب #{{order_id}} وترك بعض التعليقات<br>{{buyer_comments}}<br>{{buyer_rating}}<br>',

    // ============================ Order Activity - for seller & buyer ============ \\ done
    'order_activity'                                    => 'نشاط الطلب',

    'buyer_order_activity_variables'                    => '{{user_name}} — لعرض اسم المستلم.<br>{{sender_name}} — لعرض اسم المرسل.<br>{{gig_title}} — لعرض عنوان الخدمة.<br>{{order_id}} — لعرض رقم تسلسل الطلب.<br>{{sender_comments}} — لعرض تعليقات المرسل.<br>{{login_url}} — لعرض رابط تسجيل الدخول.',
    'buyer_order_activity_subject'                      => 'نشاط الطلب',
    'buyer_order_activity_greeting'                     => 'مرحبًا {{user_name}}،',
    'buyer_order_activity_content'                      => 'لقد تلقيت مذكرة من "{{sender_name}}" بشأن الخدمة الجارية "{{gig_title}}" ضد الطلب #{{order_id}}<br>{{sender_comments}}<br>يمكنك تسجيل الدخول لاتخاذ إجراء سريع.<br>{{login_url}}',

    'seller_order_activity_variables'                   => '{{user_name}} — لعرض اسم المستلم.<br>{{sender_name}} — لعرض اسم المرسل.<br>{{gig_title}} — لعرض عنوان الخدمة.<br>{{order_id}} — لعرض رقم تسلسل الطلب.<br>{{sender_comments}} — لعرض تعليقات المرسل.<br>{{login_url}} — لعرض رابط تسجيل الدخول.',
    'seller_order_activity_subject'                     => 'نشاط الطلب',
    'seller_order_activity_greeting'                    => 'مرحبًا {{user_name}}،',
    'seller_order_activity_content'                     => 'لقد تلقيت مذكرة من "{{sender_name}}" بشأن الخدمة الجارية "{{gig_title}}" ضد الطلب #{{order_id}}<br>{{sender_comments}}<br>يمكنك تسجيل الدخول لاتخاذ إجراء سريع.<br>{{login_url}}',

    // ============================New order refund - for seller & admin ============ \\ done
    'order_refund_request'                              => 'طلب استرداد الطلب',

    'seller_received_order_dispute_variables'           => '{{user_name}} — لعرض اسم البائع.<br>{{buyer_name}} — لعرض اسم المشتري.<br>{{order_id}} — لعرض رقم تسلسل الطلب.<br>{{buyer_comments}} — لعرض تعليقات المشتري.,{{login_url}} — لعرض رابط تسجيل الدخول.',
    'seller_received_order_dispute_subject'             => 'تم استلام طلب استرداد جديد',
    'seller_received_order_dispute_greeting'            => 'مرحبًا {{user_name}}،',
    'seller_received_order_dispute_content'             => 'لقد تلقيت طلب استرداد من {{buyer_name}} ضد الطلب #{{order_id}}<br>{{buyer_comments}}<br>يمكنك الموافقة على الطلب أو رفضه.<br>{{login_url}}<br>',

    'admin_received_order_dispute_variables'            => '{{order_id}} — لعرض رقم تسلسل الطلب.',
    'admin_received_order_dispute_subject'              => 'تم استلام نزاع جديد',
    'admin_received_order_dispute_greeting'             => 'مرحبًا',
    'admin_received_order_dispute_content'              => 'تم إنشاء نزاع جديد ضد الطلب #{{order_id}}<br>',

    // ============================ Refund comment - for buyer & seller ============ \\ done
    'order_refund_reply'                                => 'تعليقات استرداد الطلب',

    'buyer_order_refund_reply_variables'                => '{{user_name}} — لعرض اسم المستلم.<br>{{sender_name}} — لعرض اسم المرسل.<br>{{order_id}} — لعرض رقم تسلسل الطلب.<br>{{sender_comments}} — لعرض تعليقات المرسل.<br>{{login_url}} — لعرض رابط تسجيل الدخول.',
    'buyer_order_refund_reply_subject'                  => 'تعليق جديد على طلب الاسترداد',
    'buyer_order_refund_reply_greeting'                 => 'مرحبًا {{user_name}}،',
    'buyer_order_refund_reply_content'                  => 'قام "{{sender_name}}" بترك بعض التعليقات على طلب الاسترداد ضد الطلب #{{order_id}}<br>{{sender_comments}}<br>{{login_url}}<br>',

    'seller_order_refund_reply_variables'               => '{{user_name}} — لعرض اسم المستلم.<br>{{sender_name}} — لعرض اسم المرسل.<br>{{order_id}} — لعرض رقم تسلسل الطلب.<br>{{sender_comments}} — لعرض تعليقات المرسل.<br>{{login_url}} — لعرض رابط تسجيل الدخول.',
    'seller_order_refund_reply_subject'                 => 'تعليق جديد على طلب الاسترداد',
    'seller_order_refund_reply_greeting'                => 'مرحبًا {{user_name}}،',
    'seller_order_refund_reply_content'                 => 'قام "{{sender_name}}" بترك بعض التعليقات على طلب الاسترداد ضد الطلب #{{order_id}}<br>{{sender_comments}}<br>{{login_url}}<br>',

    // ============================ Dispute order resolved from seller - for buyer ============ \\ done
    'seller_appr_order_dispute_req'                     => 'تمت الموافقة على استرداد الطلب بواسطة البائع',

    'seller_appr_order_dispute_req_variables'           => '{{user_name}} — لعرض اسم المستخدم. <br> {{sender_name}} — لعرض اسم البائع.<br> {{gig_title}} — لعرض عنوان الخدمة.',
    'seller_appr_order_dispute_req_subject'             => 'تمت الموافقة على الاسترداد',
    'seller_appr_order_dispute_req_greeting'            => 'مرحبًا {{user_name}}،',
    'seller_appr_order_dispute_req_content'             => "تهانينا! <br> تمت الموافقة على طلب الاسترداد الخاص بك من قبل {{sender_name}} ضد الخدمة “{{gig_title}}”",

    // ============================ When order dispute declined by seller to buyer - for buyer ============ \\ (Done)
    'seller_decline_dispute_order'                      => 'تم رفض استرداد الطلب من قبل البائع',

    'seller_decline_dispute_order_variables'            => '{{user_name}} — لعرض اسم المستخدم.<br> {{sender_name}} — لعرض اسم المرسل.<br> {{gig_title}} — لعرض عنوان الخدمة. <br/> {{login_url}} — رابط تسجيل الدخول',
    'seller_decline_dispute_order_subject'              => 'تم رفض الاسترداد',
    'seller_decline_dispute_order_greeting'             => 'مرحبًا {{user_name}}',
    'seller_decline_dispute_order_content'              => "تم رفض طلب الاسترداد الخاص بك من قبل {{sender_name}} ضد الخدمة “{{gig_title}}” <br> إذا كنت تعتقد أن هذا الطلب كان صحيحًا، يمكنك رفع نزاع من صفحة نشاط طلب الخدمة الجارية. <br> {{login_url}}",

    // ============================ Gig order dispute refunded by admin to winner  ============ \\ (Done)
    'admin_refund_order_dispute_to_winner'              => 'نزاع طلب الخدمة لصالح الفائز',

    'disp_order_fvr_in_seller_var'                      => '{{user_name}} — لعرض اسم البائع.',
    'disp_order_fvr_in_seller_sub'                      => 'تم حل النزاع',
    'disp_order_fvr_in_seller_greeting'                 => 'مرحبًا {{user_name}}،',
    'disp_order_fvr_in_seller_cont'                     => "تهانينا! <br> لقد تمت مراجعة الاسترداد والنزاع وتم حل النزاع لصالحكم. لقد قامنا بنزاع طلب الخدمة وتم إضافة المبلغ إلى حسابكم.",

    'disp_order_fvr_in_buyer_var'                       => '{{user_name}} — لعرض اسم البائع.',
    'disp_order_fvr_in_buyer_sub'                       => 'تم حل النزاع',
    'disp_order_fvr_in_buyer_greeting'                  => 'مرحبًا {{user_name}}،',
    'disp_order_fvr_in_buyer_cont'                      => "تهانينا! <br> لقد تمت مراجعة الاسترداد والنزاع وتم حل النزاع لصالحكم. لقد قامنا بنزاع طلب الخدمة وتم إضافة المبلغ إلى حسابكم.",

    // ============================ Gig order dispute refunded by admin to not in favour  ============ \\ (Done)
    'admin_order_dispute_not_in_favour'                 => 'نزاع طلب الخدمة لم يكن لصالح',

    'disp_order_not_in_fvr_seller_var'                  => '{{user_name}} — لعرض اسم البائع. <br> {{dispute_link}} — رابط URL للنزاع',
    'disp_order_not_in_fvr_seller_sub'                  => 'تم حل النزاع',
    'disp_order_not_in_fvr_seller_greeting'             => 'مرحبًا {{user_name}}،',
    'disp_order_not_in_fvr_seller_cont'                 => "أوه! لم نوافق على طلب استرداد النزاع لصالحك.<br> يرجى النقر على الزر أدناه لعرض تفاصيل النزاع.<br>{{dispute_link}}",

    'disp_order_not_in_fvr_buyer_var'                   => '{{user_name}} — لعرض اسم البائع. <br> {{dispute_link}} — رابط URL للنزاع',
    'disp_order_not_in_fvr_buyer_sub'                   => 'تم حل النزاع',
    'disp_order_not_in_fvr_buyer_greeting'              => 'مرحبًا {{user_name}}،',
    'disp_order_not_in_fvr_buyer_cont'                  => "أوه! لم نوافق على طلب استرداد النزاع لصالحك.<br> يرجى النقر على الزر أدناه لعرض تفاصيل النزاع.<br>{{dispute_link}}",

];
