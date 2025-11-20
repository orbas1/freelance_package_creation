<?php

return [

    /*
    |--------------------------------------------------------------------------
    | All translation Lines
    |--------------------------------------------------------------------------
    
    @disputes taskup
    @package taskup
    @author  Amento Tech <info@amentotech.com>
    @license https://amentotech.com/
    @link    https://amentotech.com/
    */


    'disputes_listing'              => 'Список споров',
    'refunded_dispute_alert'        => 'Спор успешно возмещен',
    'select_wining_party'           => 'Пожалуйста, выберите победившую сторону',
    'dispute_summary'               => 'Краткое описание спора',
    'dispute_listing'               => 'Список споров',
    'search_placeholder'            => 'Поиск в списке споров',
    'all_dispute_opt'               => 'Все споры',
    'new_dispute_opt'               => 'Новые споры',
    'resolved_dispute_opt'          => 'Разрешенные споры',
    'refund_dispute_opt'            => 'Запрошен возврат',
    'ref_label'                     => '№',
    'buyer_name_label'              => 'Имя покупателя',
    'saller_name_label'             => 'Имя продавца',
    'date_lable'                    => 'Дата',
    'amount_lable'                  => 'Сумма',
    'status_label'                  => 'Статус',
    'action_label'                  => 'Действие',
    'view_label'                    => 'Просмотр',
    'reply'                         => 'Ответить',
    'submit'                        => 'Отправить',
    'dispute_reply_text'            => 'Ответ на спор:',
    'dispute_reply_placeholder'     => 'Введите ответ на спор',
    'submit_desc'                   => 'Нажмите «Отправить», чтобы добавить ответ на спор',
    'project_budget_label'          => 'Общий бюджет заказа:',
    'dispute_conversation'          => 'Диалог по спору',
    'feedback_btn_desc'             => 'Нажмите «Отправить», чтобы добавить отзыв о споре',
    'select_dispute'                => 'Выберите спор для просмотра деталей',
    'add_feedback_label'            => 'Добавить отзыв о споре:',
    'refund_status'                 => 'Возврат одобрен',
    'feedback_placeholder'          => 'Введите детали',
    'resolved_dispute_label'        => 'Этот спор разрешен',
    'choose_winning_party'          => 'Выберите победившую сторону:',
    'dispute_resolution_label'      => 'Разрешение спора',
    'upload_photo'                  => 'Загрузить фото (опционально):',
    'dispute_reply'                 => 'Добавьте свой ответ на спор:',
    'dispute_created_by'            => 'Запрос на спор создан пользователем',
    'dispute_declined_by'           => 'Запрос отклонен пользователем',
    'dispute_req_sent_to'           => 'Запрос на спор отправлен администратору',
    'refund_approved_by'            => 'Возврат одобрен пользователем',
    'time_duration_limit_msg'       => 'Если нет ответа, спор может быть направлен администратору через <strong>:day_number дней</strong>',
    'reference_no'                  => '№: :number',
    'acknowledge_to_admin'          => 'Уведомить администратора',
    'acknowledge_to_admin_desc'     => 'Еще не получили ответ? Нажмите кнопку «Уведомить администратора», чтобы передать детали администратору',
    'refunded_to_created_to'        => 'Запрос на возврат одобрен :resolved_by, сумма зачислена на ваш счет.',
    'refunded_to_created_by'        => 'Этот заказ был возвращен, подробности можно посмотреть на странице возвратов и споров.',
    'download_file'                 => 'Скачать файл',
    'disputes_activities'           => 'Активности по спорам',
    'dispute_detail_heading'        => 'Подробности спора',
    'create_refund_req'             => 'Создать запрос на возврат',
    'choose_issue'                  => 'Выберите проблему, которую хотите выделить',
    'add_dispute_detail'            => 'Добавить детали спора',
    'accept_agreement'              => 'Нажимая, вы соглашаетесь с нашими',
    'terms_condition'               => 'условиями использования',
    'no_conversation'               => 'Нет диалога',
    'dispute_placeholder'           => 'Введите детали спора',
    'dispute_created_date'          => 'Спор создан: :date',
    'reply_heading'                 => 'Добавьте свой ответ',
    'reply_placeholder'             => 'Введите детали здесь',
    'post_reply'                    => 'Опубликовать ответ',
    'dispute_author'                => 'Автор спора',
    'reply_to_refund'               => 'Ответ на возврат',
    'allow_refund'                  => 'Разрешить возврат',
    'decline_refund'                => 'Отклонить возврат',
    'payment_processing_alert'      => 'Вы не можете создать спор, так как этап обработки',
    'no_milestone_processed_alert'  => 'Вы не можете создать спор, так как нет обработанных этапов',

// ================================ statuses ========================================
    'dispute_create_status'         => 'Спор поднят против этого проекта',
    'gig_dispute_create_status'     => 'Спор поднят против этого заказа',
    'dispute_create_desc'           => 'Нажмите кнопку «Просмотреть детали», чтобы просмотреть детали спора.',


    'dispute_reject_status'         => 'Ура, запрос на разрешение спора отклонен', // for buyer declined (OK)
    'dispute_reject_desc'           => 'Нажмите кнопку "Подтвердить администратору", чтобы уведомить администратора о деталях',
    'dispute_reject_seller_desc'    => 'Нажмите кнопку "Просмотреть детали", чтобы просмотреть детали спора.',  // for seller declined
    'acknowledge_admin'             => 'Подтвердить администратору',

    'dispute_no_resp_status'        => 'Пока нет ответа?',
    'dispute_no_resp_desc'          => 'Нажмите кнопку "Подтвердить администратору", чтобы уведомить администратора о деталях', // ok

    'dispute_wait_status'           => 'Запрос на разрешение спора отправлен администратору',
    'dispute_wait_desc'             => 'Пожалуйста, подождите, пока администратор рассмотрит детали спора для окончательного решения',

    'dispute_refunde_favor_status'  => 'Ура! Возврат одобрен',
    'dispute_refunde_favor_desc'    => 'Запрос на возврат по этому проекту одобрен. Нажмите, чтобы узнать больше деталей',
    'gig_dispute_refunde_favor_desc'=> 'Запрос на возврат по этому заказу одобрен. Нажмите, чтобы узнать больше деталей',

    'dispute_refund_reject_status'  => 'Ура, запрос на разрешение спора отклонен',
    'dispute_refund_reject_desc'    => 'Извините, запрос на разрешение спора не был удовлетворен',

    'disp_resolved_in_favor'        => 'Спор разрешен в пользу',
];
