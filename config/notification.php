<?php

return [
    'guard' => "api",

    /*
    |--------------------------------------------------------------------------
    | Response Class
    |--------------------------------------------------------------------------
    |
    | must be implement from \IICN\Subscription\SubscriptionResponse
    |
    | default is \IICN\Subscription\Services\Response\Responser::class
    |
    */

    'response_class' => \IICN\Notification\Services\Response\Responser::class,

    'default_send_to_test_topic' => !app()->isProduction(),

    'topic_names' => [
        "test" => \IICN\Notification\Constants\Topics::TEST,

        "android" => \IICN\Notification\Constants\Topics::ANDROID_PLATFORM,

        "ios" => \IICN\Notification\Constants\Topics::IOS_PLATFORM,
    ],

    'additional_resource_class' => \IICN\Notification\Http\Resources\CollectionAdditionalTrait::class,

    'user_model' => \App\Models\User::class,

    'timezone_model' => \Modules\Common\Entities\Timezone::class,


    "language_codes" => [
        1 => 'en',
        2 => 'ar',
        3 => 'fr',
        4 => 'ur',
        5 => 'fa',
        6 => 'id',
        7 => 'bn',
        8 => 'ms',
        9 => 'en_AU',
        10 => 'zh',
        11 => 'de',
        12 => 'tr',
        13 => 'az',
        14 => 'ru',
        15 => 'public',
    ],

    "middlewares" => [

    ],

    "admin_middlewares" => [

    ]
];
