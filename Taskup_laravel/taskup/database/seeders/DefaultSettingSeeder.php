<?php

namespace Database\Seeders;

use File;
use DateTime;
use App\Models\{
    Menu,
    MenuItem,
};

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Setting\SiteSetting;
use Larabuild\Optionbuilder\Facades\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DefaultSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSetting::truncate();
        $this->defaultSetting();
        $this->paymentMethods();
        $this->defualtMenu();
    }

    public function defaultSetting(){
        $def_setting = [
            '_contact' => [
                'phone'                       => '+62 877 77263549',
                'email'                       => 'hello@youremailid.co.uk',
                'whatsapp'                    => '(+33) 775 55 9375',
                'fax'                         => '+62 811 09998263',
                'phone_call_availability'     => '(Mon to Sun 9am - 11pm)',
                'whatsapp_call_availability'  => '(Mon to Sun 9am - 11pm)',

            ],
            '_dispute' => [
                'buyer_dispute_issues'      => [
                    [
                        'buyer_issues'  => 'The seller is not responding'
                    ],
                    [
                        'buyer_issues'  => 'The seller sent me an unfinished product',
                    ],
                    [
                        'buyer_issues'  => 'Seller is abusive or using unprofessional language',
                    ],
                    [
                        'buyer_issues'  => 'Seller not sure with his/her skills set',
                    ],
                    [
                        'buyer_issues'  => 'Others',
                    ],
                ],
                'seller_dispute_issues'     => [
                    [
                        'seller_issues' => 'The buyer is not responding',
                    ],
                    [
                        'seller_issues' => 'I’m too busy to complete this job',
                    ],
                    [
                        'seller_issues' => 'Due to personal reasons, I can not complete this job',
                    ],
                    [
                        'seller_issues' => 'Buyer requesting unplanned additional work',
                    ],
                    [
                        'seller_issues' => 'Others',
                    ],
                ],
                'buyer_dispute_after_days'  => 3,
            ],
            '_email' => [
                'email_logo'          => [
                    'file_name' => 'logo.webp',
                ],
                'sender_name'         => 'TaskUp',
            ],
            '_general' => [
                'file_ext'                  => 'pdf,doc,docx,xls,xlsx,ppt,pptx,csv,jpg,jpeg,gif,png,mp4,mp3,3gp,flv,ogg,wmv,avi,txt',
                'image_file_ext'            => 'jpg,jpeg,gif,png',
                'image_file_size'           => 5, // in MB
                'file_size'                 => 20, // in MB
                'gig_listing_layout'        => 'grid',
                'date_format'               => 'F j, Y',
                'address_format'            => 'city_state_country',
                'per_page_record'           => '10',
                'currency'                  => 'USD',
                // 'footer_page'               => '1',
                // 'error_page_footer'         => '1',
                'deactive_account_reasons'  => [
                    [
                        'deactive_reason' => 'Not interested anymore'
                    ],
                ]
            ],
            '_project' => [
                'projet_search_min_price'       => 1,
                'project_price_search_range'    => [
                    "min" => 1,
                    "max" => 10000
                ],
                'projet_min_amount'         => 100,
                'maximum_freelancer'        => 5,
                'project_default_status'    => 'pending',
                'project_recomended_opt'    => ['languages','skills'],
                'step2_validation'          => ['duration','category','project_detail'],
                'step3_validation'          => ['expertlevel','skills','languages'],
            ],
            '_proposal' => [
                'default_status'     => 'pending',
                'seller_min_hr_rate' => 1,
                'seller_max_hr_rate' => 1000,
            ],
            '_seller' => [
                'seller_business_types' => [
                    [
                        'business_types'    => 'Agency',
                    ],
                    [
                        'business_types'    => 'Content manager',
                    ],
                    [
                        'business_types'    => 'Creative director',
                    ],
                    [
                        'business_types'    => 'Floor manager',
                    ],
                    [
                        'business_types'    => 'Independent',
                    ],
                    [
                        'business_types'    => 'Marketing specialist',
                    ],
                    [
                        'business_types'    => 'New Rising Talent',
                    ],
                ],
                'seller_price_search_range' => [
                    "min" => 1,
                    "max" => 300
                ],
                'min_withdrawal_amt'        => 100,
                'seller_banner_img'         => [
                    'file_name'             => 'banner_image.webp',
                ],
                'social_links'              => 'enable',
            ],
            '_site' => [
                'site_name'                 => 'TaskUp',
                'site_favicon'              => [
                                                'file_name' => 'fav_36x36.webp',
                                                ],
                'site_dark_logo'            => [
                    'file_name'             => 'logo.webp',
                ],
                'site_lite_logo'            => [
                                                'file_name'             => 'taskup-logo.webp',
                                            ],
                'auth_bg'                   => [
                                                    'file_name' => 'auth-background.webp',
                                            ],
                'popular-categories'       => [
                    1, 5, 7, 15, 18, 23, 19, 29, 17, 14
                ],
                'footer_categories_heading' => 'Top Rated Categories',
                'footer_text'               => 'Our platform offers the best features for freelancers and clients, making it easy to connect, collaborate, and get work done',
                'footer-contact-heading'    => 'Feel Free To Share Your Question',
                'footer_apps_heading'       => '',
                'android_app_logo'          => [
                                                    'file_name'  => 'ios.png',
                                                ],
                'android_app_url'           => '#',
                'ios_app_logo'              => [
                                                    'file_name'  => 'android.png',
                                            ],
                'ios_app_url'               => '#',
            ],
            '_social' => [
                'facebook'                  => '#',
                'twitter'                   => '#',
                'linkedin'                  => '#',
                'dribbble'                  => '#',
            ],
            '_adsense' => [
                'profile_adsense_code'      => '<img src="'.asset('demo-content/adsense_612x612.webp').'" alt="google adsense">',
                'project_adsense_code'      => '<img src="'.asset('demo-content/adsense_844x844.webp').'" alt="google adsense">',
                'add_gig_adsense'           => '<img src="'.asset('demo-content/adsense_844x844.webp').'" alt="google adsense">',
                'seller_dashboard_adsense'  => '<img src="'.asset('demo-content/adsense_612x612.webp').'" alt="google adsense">',

            ],
            '_front' => [
                'top_bar_for_pages'         => [13],
                'top_bar_content'           => 'Discover the top freelance platform on the market!<a href="#" target="_blank" class="tk-header-topbar-btn">Learn more</a>',
                'header_search_for_pages'   => [1,5,6,8,12,13],
                'top_bar_for_default_pages' => 'yes',
                'header_variation_for_pages' => [
                    [ 'page_id' => 1,  'header_variation'  => 'header-v13'],
                    [ 'page_id' => 2,  'header_variation'  => 'header-v2'],
                    [ 'page_id' => 3,  'header_variation'  => 'header-v3'],
                    [ 'page_id' => 4,  'header_variation'  => 'header-v4'],
                    [ 'page_id' => 5,  'header_variation'  => 'header-v5'],
                    [ 'page_id' => 6,  'header_variation'  => 'header-v6'],
                    [ 'page_id' => 7,  'header_variation'  => 'header-v7'],
                    [ 'page_id' => 8,  'header_variation'  => 'header-v8'],
                    [ 'page_id' => 9,  'header_variation'  => 'header-v9'],
                    [ 'page_id' => 10, 'header_variation'  => 'header-v10'],
                    [ 'page_id' => 11, 'header_variation'  => 'header-v11'],
                    [ 'page_id' => 12, 'header_variation'  => 'header-v12'],
                    [ 'page_id' => 13, 'header_variation'  => 'header-v1'],
                ]
            ]
        ];


        foreach($def_setting as $section_key => $setting ){
            foreach ($setting as $field => $value) {
                if (!empty($value['file_name'])) {
                    $value = uploadDemoImage('','optionbuilder/uploads', $value['file_name'], 'optionbuilder');
                    $value = [ json_encode($value) ];
                }

                if (isset($value) && !is_null($value)) {
                    Settings::set($section_key, $field, $value);
                }
            }
        }
    }

    public function paymentMethods(){

        $payment_methods    = [
            'method_type'   => 'others',
            'others'        => [
                'stripe'    => [
                    'status'            => 'on',
                    'stripe_key'        => '',
                    'stripe_secret'     => '',
                ]
            ]
        ];

        $record = SiteSetting::create([
            'setting_type'  => 'payment',
            'meta_key'      => 'payment_methods',
            'meta_value'    => serialize($payment_methods)
        ]);
    }


    /**
     * Add defualt menues.
     */
    public function defualtMenu(){
        Menu::truncate();
        MenuItem::truncate();
        $menus = [
            [
                'name'          => 'Top menu',
                'location'      => 'header',
                'menu_items'    => [
                    [ // 1
                        'menu_id'   => '',
                        'parent_id' => null,
                        'label'     => 'Home',
                        'route'     => url(''),
                        'type'      => 'custom',
                        'sort'      => '0',
                        'class'     => '',
                    ],
                    [ // 2
                        'menu_id'   => '',
                        'parent_id' => null,
                        'label'     => 'About us',
                        'route'     => url('about-us'),
                        'type'      => 'page',
                        'sort'      => '1',
                        'class'     => '',
                    ],
                    [ // 3
                        'menu_id'   => '',
                        'parent_id' => null,
                        'label'     => 'Terms & condition',
                        'route'     => url('terms-condition'),
                        'type'      => 'page',
                        'sort'      => '3',
                        'class'     => '',
                    ],
                    [ // 4
                        'menu_id'   => '',
                        'parent_id' => null,
                        'label'     => 'FAQ',
                        'route'     => url('faq'),
                        'type'      => 'page',
                        'sort'      => '2',
                        'class'     => '',
                    ],
                    [ // 5
                        'menu_id'   => '',
                        'parent_id' => null,
                        'label'     => 'Pages',
                        'route'     => '#',
                        'type'      => 'custom',
                        'sort'      => '4',
                        'class'     => null,
                    ],
                    [// 6
                        'menu_id'   => '',
                        'parent_id' => '5',
                        'label'     => 'Projects',
                        'route'     => '#',
                        'type'      => 'custom',
                        'sort'      => '0',
                        'class'     => null,
                    ],
                    [// 7
                        'menu_id'   => '',
                        'parent_id' => '6',
                        'label'     => 'Find projects',
                        'route'     => url('search-projects'),
                        'type'      => 'custom',
                        'sort'      => '0',
                        'class'     => null,
                    ],
                    [// 8
                        'menu_id'   => '',
                        'parent_id' => '6',
                        'label'     => 'Project detail',
                        'route'     => url('project/wordpress-website-pages-with-digital-marketing'),
                        'type'      => 'custom',
                        'sort'      => '1',
                        'class'     => null,
                    ],
                    [// 9
                        'menu_id'   => '',
                        'parent_id' => '5',
                        'label'     => 'Talent',
                        'route'     => '#',
                        'type'      => 'custom',
                        'sort'      => '1',
                        'class'     => null,
                    ],
                    [// 10
                        'menu_id'   => '',
                        'parent_id' => '9',
                        'label'     => 'Find talent',
                        'route'     => url('search-sellers'),
                        'type'      => 'custom',
                        'sort'      => '0',
                        'class'     => null,
                    ],
                    [// 11
                        'menu_id'   => '',
                        'parent_id' => '9',
                        'label'     => 'Talent detail',
                        'route'     => url('seller/georgia-baker'),
                        'type'      => 'custom',
                        'sort'      => '1',
                        'class'     => null,
                    ],
                    [ // 12
                        'menu_id'   => '',
                        'parent_id' => '5',
                        'label'     => 'Gigs',
                        'route'     => url('search-projects'),
                        'type'      => 'custom',
                        'sort'      => '2',
                        'class'     => null,
                    ],
                    [ // 13
                        'menu_id'   => '',
                        'parent_id' => '12',
                        'label'     => 'Find gigs',
                        'route'     => url('search-gigs'),
                        'type'      => 'custom',
                        'sort'      => '0',
                        'class'     => null,
                    ],
                    [ // 13
                        'menu_id'   => '',
                        'parent_id' => '12',
                        'label'     => 'Gig detail',
                        'route'     => url('gig-detail/i-will-do-ultimate-seo-service-for-guaranteed-ranking-improvements'),
                        'type'      => 'custom',
                        'sort'      => '1',
                        'class'     => null,
                    ],
                    [ // 14
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 01',
                        'route'     => url('/'),
                        'type'      => 'custom',
                        'sort'      => '1',
                        'class'     => null,
                    ],
                    [ // 15
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 02',
                        'route'     => url('home-two'),
                        'type'      => 'custom',
                        'sort'      => '2',
                        'class'     => null,
                    ],
                    [ // 16
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 03',
                        'route'     => url('home-three'),
                        'type'      => 'custom',
                        'sort'      => '3',
                        'class'     => null,
                    ],
                    [ // 17
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 04',
                        'route'     => url('home-four'),
                        'type'      => 'custom',
                        'sort'      => '4',
                        'class'     => null,
                    ],
                    [ // 18
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 05',
                        'route'     => url('home-five'),
                        'type'      => 'custom',
                        'sort'      => '5',
                        'class'     => null,
                    ],
                    [ // 19
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 06',
                        'route'     => url('home-six'),
                        'type'      => 'custom',
                        'sort'      => '6',
                        'class'     => null,
                    ],
                    [ // 20
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 07',
                        'route'     => url('home-seven'),
                        'type'      => 'custom',
                        'sort'      => '7',
                        'class'     => null,
                    ],
                    [ // 21
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 08',
                        'route'     => url('home-eight'),
                        'type'      => 'custom',
                        'sort'      => '8',
                        'class'     => null,
                    ],
                    [ // 22
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 09',
                        'route'     => url('home-nine'),
                        'type'      => 'custom',
                        'sort'      => '9',
                        'class'     => null,
                    ],
                    [ // 23
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 10',
                        'route'     => url('home-ten'),
                        'type'      => 'custom',
                        'sort'      => '10',
                        'class'     => null,
                    ],
                    [ // 24
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 11',
                        'route'     => url('home-eleven'),
                        'type'      => 'custom',
                        'sort'      => '11',
                        'class'     => null,
                    ],
                    [ // 25
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 12',
                        'route'     => url('home-twelve'),
                        'type'      => 'custom',
                        'sort'      => '12',
                        'class'     => null,
                    ],
                    [ // 26
                        'menu_id'   => '',
                        'parent_id' => '1',
                        'label'     => 'Homepage 13',
                        'route'     => url('home-thirteen'),
                        'type'      => 'custom',
                        'sort'      => '13',
                        'class'     => null,
                    ],
                ]
            ],
            [
                'name'          => 'Bottom menu',
                'location'      => 'footer',
                'menu_items'    => [
                    [
                        'menu_id'   => '',
                        'parent_id' => null,
                        'label'     => 'About us',
                        'route'     => url('about-us'),
                        'type'      => 'page',
                        'sort'      => '2',
                        'class'     => '',
                    ],
                    [
                        'menu_id'   => '',
                        'parent_id' => null,
                        'label'     => 'Terms & condition',
                        'route'     => url('terms-condition'),
                        'type'      => 'page',
                        'sort'      => '0',
                        'class'     => '',
                    ],
                    [
                        'menu_id'   => '',
                        'parent_id' => null,
                        'label'     => 'FAQ',
                        'route'     => url('faq'),
                        'type'      => 'page',
                        'sort'      => '1',
                        'class'     => '',
                    ],
                    [
                        'menu_id'   => '',
                        'parent_id' => null,
                        'label'     => 'Privacy Policy',
                        'route'     => url('privacy-policy'),
                        'type'      => 'page',
                        'sort'      => '4',
                        'class'     => '',
                    ],
                ]
            ]
        ];

        foreach($menus as $key => $menu){
            $check = Menu::where('name', $menu['name'])->exists();
            if(!$check){
                $menue = Menu::create([
                    'name'      => $menu['name'],
                    'location'  => $menu['location'],
                ]);

                foreach( $menu['menu_items'] as $items ){
                    MenuItem::create([
                        'menu_id'   => $menue->id,
                        'parent_id' => $items['parent_id'],
                        'label'     => $items['label'],
                        'route'     => $items['route'],
                        'type'      => $items['type'],
                        'sort'      => $items['sort'],
                        'class'     => '',
                    ]);
                }
            }
        }
    }
}
