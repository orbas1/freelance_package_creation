<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Larabuild\Pagebuilder\Models\Page;

class DefaultPageSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::truncate();
        $pageData = [];
        $pages = [
            [
                'name' => 'Homepage 01',
                'slug' => '/',
                'title' => 'Homepage 01 | TaskUp',
                'description' => 'Homepage 01',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Homepage 02',
                'slug' => 'home-two',
                'title' => 'Homepage 02 | TaskUp',
                'description' => 'Homepage 02',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Homepage 03',
                'slug' => 'home-three',
                'title' => 'Homepage 03 | TaskUp',
                'description' => 'Homepage 03',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Homepage 04',
                'slug' => 'home-four',
                'title' => 'Homepage 04 | TaskUp',
                'description' => 'Homepage04',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Homepage 05',
                'slug' => 'home-five',
                'title' => 'Homepage 05 | TaskUp',
                'description' => 'Homepage 05',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Homepage 06',
                'slug' => 'home-six',
                'title' => 'Homepage 06 | TaskUp',
                'description' => 'Homepage 06',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Homepage 07',
                'slug' => 'home-seven',
                'title' => 'Homepage 07 | TaskUp',
                'description' => 'Homepage 07',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Homepage 08',
                'slug' => 'home-eight',
                'title' => 'Homepage 08 | TaskUp',
                'description' => 'Homepage 08',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Homepage 09',
                'slug' => 'home-nine',
                'title' => ' Homepage 09 | TaskUp',
                'description' => ' Homepage 09',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Homepage 10',
                'slug' => 'home-ten',
                'title' => 'Homepage 10 | TaskUp',
                'description' => 'Homepage 10',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Homepage 11',
                'slug' => 'home-eleven',
                'title' => 'Homepage 11 | TaskUp',
                'description' => 'Homepage 11',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Homepage 12',
                'slug' => 'home-twelve',
                'title' => 'Homepage 12 | TaskUp',
                'description' => 'Homepage 12',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Homepage 13',
                'slug' => 'home-thirteen',
                'title' => 'Homepage 13 | TaskUp',
                'description' => 'Homepage 13',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'About Us',
                'slug' => 'about-us',
                'title' => 'About Us | TaskUp',
                'description' => 'About Us | TaskUp',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Faq',
                'slug' => 'faq',
                'title' => 'Faqs | TaskUp',
                'description' => 'About Us | TaskUp',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Terms & condition',
                'slug' => 'terms-condition',
                'title' => 'Terms & condition | TaskUp',
                'description' => 'Terms & condition | TaskUp',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'title' => 'Privacy Policy | TaskUp',
                'description' => 'Privacy Policy | TaskUp',
                'settings' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];


        Page::insert($pages);

        $sitePages = Page::get();

        if( !empty($sitePages) ){
            foreach($sitePages as $page){
                $pageName = preg_replace("/[^A-zÀ-ú0-9]+/", "", str_replace(' ','',$page->name));
                $page->settings  = $this->{'get'.$pageName.'Settings'}($page);
                $page->save();
            }

        }
        clearCache();
    }

    private function getHomepage01Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width', 'boxed_slider_input' => '1920'], 'data' => [['banner']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['counter']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['projects']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['client-feedback']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['faqs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['packages']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['sellers']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['counter']]],
            ['grid' => '6x2' , 'styles' => ['content_width' => 'full_width'], 'data' => [['content-with-bullets'],['image']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['blog']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];
        $sectionPosition = 0;
        foreach ($sections as $gridData) {
            $gridPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                foreach ($colSection as $section) {
                    $sectionId = $section == 'counter' ? $section."_".$sectionPosition : $this->uniqueId();
                    $page->section_id = $sectionId;

                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                    unset($page->section_id);
                    $sectionPosition ++;
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }

        return $pageData;
    }

    private function getAboutUsSettings($page){
        $pageData = [];
        $sections = [
            ['grid' => '6x2', 'styles' => ['content_width' => 'boxed', 'classes' => 'tk-aboutfirst'], 'data' => [['image'],['content-with-bullets']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['counter']]],
            ['grid' => '6x2' , 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['content-with-bullets'],['image']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['spacer']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = 0;
            $sectionPosition = 0;

            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                foreach ($colSection as $section) {
                    $sectionId = $section == 'image' ? $section."_".$sectionPosition : $this->uniqueId();
                    $imageId = $section == 'image' ? $section."_".$sectionPosition : $this->uniqueId();
                    $bulletsId = $section == 'content-with-bullets' ? $section."_".$sectionPosition : $this->uniqueId();

                    if ($section == 'image') {
                        $page->section_id = $imageId;
                    } elseif ($section == 'content-with-bullets') {
                        $page->section_id = $bulletsId;
                    }
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                    unset($page->section_id);
                    $sectionPosition++;
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getFaqSettings($page){
        $pageData = [];
        $sections = [
            // ['grid' => '12x1', 'styles' => ['content_width' => '' ,'background-color' => 'rgba(247,247,248,1)'  ], 'data' => [['faqs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['faqs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                $sectionPosition = 0;
                foreach ($colSection as $section) {
                    $sectionId = $this->uniqueId();
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getTermsConditionSettings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['paragraph']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                $sectionPosition = 0;
                foreach ($colSection as $section) {
                    $sectionId = $this->uniqueId();
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getPrivacyPolicySettings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['paragraph']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                $sectionPosition = 0;
                foreach ($colSection as $section) {
                    $sectionId = $this->uniqueId();
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getHomepage02Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles' => ['content_width' => 'container'], 'data' => [['banner']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['sellers']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['counter']]],
            ['grid' => '6x2' , 'styles' => ['content_width' => 'full_width'], 'data' => [['content-with-bullets'],['image']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['faqs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['packages']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['blog']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                $sectionPosition = 0;
                foreach ($colSection as $section) {
                    $sectionId = $this->uniqueId();
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getHomepage03Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['banner']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['brand-slider']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['market-place']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['sellers']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['packages']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '','background-color' => 'rgba(255,255,255,1)'], 'data' => [['client-feedback']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '','background-color' => '#f7f7f7'], 'data' => [['faqs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['blog']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                $sectionPosition = 0;
                foreach ($colSection as $section) {
                    $sectionId = $this->uniqueId();
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getHomepage04Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles'  => ['content_width' => 'full_width', 'boxed_slider_input' => '1920'], 'data' => [['banner']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['brand-slider']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['top-categories']]],
            ['grid' => '6x2', 'styles' => ['content_width' => 'boxed'], 'data' => [['explore-project'], ['explore-project']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['infobox']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['faqs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '','background-color' => '#FBF3EE'], 'data' => [['packages']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['search-experience']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['spacer']]],
            // ['grid' => '6x2', 'styles' => ['content_width' => 'boxed'], 'data' => [['image'],['content-with-bullets']]],
            // ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['client-feedback']]],
            // ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['sellers']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['working-steps']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['blog']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = $sectionPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                foreach ($colSection as $section) {
                    $sectionId = $section == 'explore-project' ? $section."_".$sectionPosition : $this->uniqueId();
                    $page->section_id = $sectionId;

                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                    unset($page->section_id);
                    $sectionPosition++;
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getHomepage05Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles'  => ['content_width' => 'boxed', 'boxed_slider_input' => '1560'], 'data' => [['banner']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed','boxed_slider_input' => '1782'], 'data' => [['gigs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['counter']]],
            ['grid' => '6x2', 'styles' => ['content_width' => 'full_width'], 'data' => [['content-with-bullets'],['image']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['faqs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['packages']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['blog']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = $sectionPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                foreach ($colSection as $section) {
                    $sectionId = $section == 'image' ? $section."_".$sectionPosition : $this->uniqueId();
                    $page->section_id = $sectionId;
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                    unset($page->section_id);
                    $sectionPosition++;
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getHomepage06Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['banner-with-slider']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed' ,'boxed_slider_input' => '1506'], 'data' => [['brand-slider']]],
            ['grid' => '6x2', 'styles'  => ['content_width' => 'boxed'], 'data' => [['image'],['content-with-bullets']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1320' ,'background-color' => 'rgba(247,247,248,1)'], 'data' => [['gigs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['faqs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['working-steps']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['blog']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = $sectionPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                foreach ($colSection as $section) {
                    $sectionId = $section == 'image' ? $section."_".$sectionPosition : $this->uniqueId();
                    $page->section_id = $sectionId;
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                    unset($page->section_id);
                    $sectionPosition++;
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getHomepage07Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles'  => ['content_width' => 'full_width', 'boxed_slider_input' => '1920',], 'data' => [['search-banner']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['gigs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920','background-color' => '#f7f7f7'], 'data' => [['sellers']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['faqs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['packages']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '', 'background-color' => '#f7f7f7'], 'data' => [['blog']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = $sectionPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                foreach ($colSection as $section) {
                    $sectionId = $section == 'image' ? $section."_".$sectionPosition : $this->uniqueId();
                    $page->section_id = $sectionId;
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                    unset($page->section_id);
                    $sectionPosition++;
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getHomepage08Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles'  => ['content_width' => 'full_width', 'boxed_slider_input' => '1920'], 'data' => [['banner']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['brand-slider']]],
            ['grid' => '6x2', 'styles' => ['content_width' => 'boxed'], 'data' => [['image'],['content-with-bullets']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['infobox']]],
            // ['grid' => '12x1', 'styles' => ['content_width' => '' ,'background-color' => '#F7F7F8'], 'data' => [['client-feedback']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['faqs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['packages']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1320'], 'data' => [['projects']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed','boxed_slider_input' => '1920'], 'data' => [['working-steps']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['blog']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = $sectionPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                foreach ($colSection as $section) {
                    $sectionId = $section == 'image' ? $section."_".$sectionPosition : $this->uniqueId();
                    $page->section_id = $sectionId;
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                    unset($page->section_id);
                    $sectionPosition++;
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getHomepage09Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles'  => ['content_width' => 'full_width', 'boxed_slider_input' => '1920'], 'data' => [['banner']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '' ,'background-color' => 'rgba(247,247,248,1)'], 'data' => [['categories']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '' ,'background-color' => 'rgba(255,255,255,1)'], 'data' => [['client-feedback']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['packages']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['faqs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['counter']]],
            ['grid' => '6x2' , 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['content-with-bullets'],['image']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['blog']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = $sectionPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                foreach ($colSection as $section) {
                    $sectionId = $section == 'image' ? $section."_".$sectionPosition : $this->uniqueId();
                    $page->section_id = $sectionId;
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                    unset($page->section_id);
                    $sectionPosition++;
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getHomepage10Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles'  => ['content_width' => 'full_width', 'boxed_slider_input' => '1920'], 'data' => [['search-banner']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1780','background-color' => 'rgba(247,247,248,1)'], 'data' => [['projects']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['infobox']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '' ], 'data' => [['packages']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '','background-color' => 'rgba(255,255,255,1)'], 'data' => [['faqs']]],
            // ['grid' => '12x1', 'styles' => ['content_width' => '' ,'background-color' => 'rgba(255,255,255,1)'], 'data' => [['client-feedback']]],
            ['grid' => '6x2', 'styles' => ['content_width' => 'boxed'], 'data' => [['explore-project'], ['explore-project']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '','background-color' => 'rgba(255,255,255,1)'], 'data' => [['blog']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = $sectionPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                foreach ($colSection as $section) {
                    $sectionId = $section == 'explore-project' ? $section."_".$sectionPosition : $this->uniqueId();
                    $page->section_id = $sectionId;

                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                    unset($page->section_id);
                    $sectionPosition++;
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }

        return $pageData;
    }

    private function getHomepage11Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed','boxed_slider_input' => '1600'], 'data' => [['banner']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['brand-slider']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width' ,'background-color' => 'rgba(255,255,255,1)'], 'data' => [['market-place']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width', 'boxed_slider_input' => '1920'], 'data' => [['counter']]],
            ['grid' => '6x2' , 'styles' => ['content_width' => 'full_width', 'boxed_slider_input' => '1920'], 'data' => [['content-with-bullets'],['image']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed','boxed_slider_input' => '1920' ], 'data' => [['projects']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '','background-color' => 'rgba(247,247,248,1)'], 'data' => [['client-feedback']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['blog']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                $sectionPosition = 0;
                foreach ($colSection as $section) {
                    $sectionId = $this->uniqueId();
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getHomepage12Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles'  => ['content_width' => 'full_width'], 'data' => [['banner']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['brand-slider']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '' ,'background-color' => 'rgba(247,247,248,1)'], 'data' => [['categories']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '' ,'background-color' => 'rgba(255,255,255,1)'], 'data' => [['client-feedback']]],
            ['grid' => '12x1', 'styles' => ['content_width' => '' ,'background-color' => 'rgba(247,247,248,1)'], 'data' => [['packages']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['faqs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                $sectionPosition = 0;
                foreach ($colSection as $section) {
                    $sectionId = $this->uniqueId();
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }

    private function getHomepage13Settings($page){
        $pageData = [];
        $sections = [
            ['grid' => '12x1', 'styles'  => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['banner']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['brand-slider']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['categories']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['client-feedback']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'boxed', 'boxed_slider_input' => '1920'], 'data' => [['gigs']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['packages']]],
            ['grid' => '12x1', 'styles' => ['content_width' => ''], 'data' => [['blog']]],
            ['grid' => '12x1', 'styles' => ['content_width' => 'full_width'], 'data' => [['add-banner']]],
        ];

        foreach ($sections as $gridData) {
            $gridPosition = 0;
            $gridId       = $this->uniqueId();
            $data         = [];
            foreach ($gridData['data'] as $col => $colSection) {
                $sectionPosition = 0;
                foreach ($colSection as $section) {
                    $sectionId = $this->uniqueId();
                    $data[$col][] = ['id' => $sectionId, 'section_id' => $section, 'position' => $sectionPosition];
                    $parseFunction = (string)"get" . Str::ucfirst(Str::camel($section)) . "Data";
                    $pageData['section_data'][$sectionId]['settings'] = $this->$parseFunction($page);
                }
                $data;
                $pageData['section_data'][$gridId]['styles'] = array_merge($this->defaultStyles(), $gridData['styles']);
                $gridPosition++;

            }
            $pageData['grids'][] = ['grid' => $gridData['grid'], 'position' => $gridPosition, 'grid_id' => $gridId, 'data' => $data];
        }
        return $pageData;
    }


    private function getBannerData($page){
        if($page->slug == '/'){
           return $this->getHomePage1Banner();
        }elseif($page->slug == 'home-two'){
            return $this->getHomePage2Banner();
        }elseif($page->slug == 'home-three'){
            return $this->getHomePage3Banner();
        }elseif($page->slug == 'home-four'){
            return $this->getHomePage4Banner();
        }elseif($page->slug == 'home-five'){
            return $this->getHomePage5Banner();
        }elseif($page->slug == 'home-eight'){
            return $this->getHomePage8Banner();
        }elseif($page->slug == 'home-nine'){
            return $this->getHomePage9Banner();
        }elseif($page->slug == 'home-eleven'){
            return $this->getHomePage11Banner();
        }elseif($page->slug == 'home-twelve'){
            return $this->getHomePage12Banner();
        }elseif($page->slug == 'home-thirteen'){
            return $this->getHomePage13Banner();
        }

    }

    private function getHomePage1Banner(){
        $trustedbyImages = [];
        for ($i = 1; $i <= 4; $i++) {
            $trustedbyImages[]= json_encode(uploadDemoImage('trustedby', 'optionbuilder/uploads', 'img-0' . $i . '.webp', 'optionbuilder'));
        }
        return [
            'heading'                       => ['value' => 'Thrive in the World of Freelance Excellence Marketplace!', 'is_array' => 0],
            'heading_text_color'            => ['value' => '', 'is_array' => 0],
            'paragraph'                     => ['value' => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.', 'is_array' => 0],
            'paragraph_text_color'          => ['value' => '', 'is_array' => 0],
            'configs_checkbox'              => ['value' => ['search', 'trusted_by'], 'is_array' => 1],
            'select_verient'                => ['value' => 'tk-hero-banner-twelve', 'is_array' => 0],
            'search-btn-txt'                => ['value' => '', 'is_array' => 0],
            'search-placeholder'            => ['value' => 'Search by keyword', 'is_array' => 0],
            'media_type'                    => ['value' => 'image', 'is_array' => 0],
            'image'                         => ['value' => [uploadDemoImage('banner', 'optionbuilder/uploads', 'img01.webp', 'optionbuilder')], 'is_array' => '1'],
            'trusted_by_heading'            => ['value' => 'Trusted by', 'is_array' => 0],
            'trusted_by_heading_text_color' => ['value' => '', 'is_array' => 0],
            'trusted_by_image'              => ['value' => $trustedbyImages, 'is_array' => '1'],
        ];
    }

    private function getHomePage2Banner(){
        $trustedbyImages = [];
        for ($i = 1; $i <= 4; $i++) {
            $trustedbyImages[]= json_encode(uploadDemoImage('trustedby', 'optionbuilder/uploads', 'img-0' . $i . '.webp', 'optionbuilder'));
        }

        $sliderImages = [];
        for ($i = 1; $i <= 4; $i++) {
            $sliderImages[]= json_encode(uploadDemoImage('banner', 'optionbuilder/uploads', 'image0' . $i . '.webp', 'optionbuilder'));
        }
        return [
            'heading'                       => ['value' => 'Excel in the <span>Freelance</span> Marketplace!', 'is_array' => 0],
            'heading_text_color'            => ['value' => '', 'is_array' => 0],
            'paragraph'                     => ['value' => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.', 'is_array' => 0],
            'paragraph_text_color'          => ['value' => '', 'is_array' => 0],
            'configs_checkbox'              => ['value' => ['search', 'trusted_by'], 'is_array' => 1],
            'select_verient'                => ['value' => 'tk-hero-banner-two', 'is_array' => 0],
            'search-btn-txt'                => ['value' => '', 'is_array' => 0],
            'search-placeholder'            => ['value' => 'Search by keyword', 'is_array' => 0],
            'media_type'                    => ['value' => 'slider', 'is_array' => 0],
            'media_frame'                   => ['value' => 'no', 'is_array' => 0],
            'slider_image'                  => ['value' => $sliderImages, 'is_array' => '1'],
            'trusted_by_heading'            => ['value' => 'Trusted by', 'is_array' => 0],
            'trusted_by_heading_text_color' => ['value' => '', 'is_array' => 0],
            'trusted_by_image'              => ['value' => $trustedbyImages, 'is_array' => '1'],
            'banner_shape'                  => ['value' => [json_encode(uploadDemoImage('', 'optionbuilder/uploads', 'banner-shape-two.svg', 'optionbuilder'))], 'is_array' => '1'],
        ];
    }

    private function getHomePage3Banner(){
        $sliderImages = [];
        for ($i = 1; $i <= 2; $i++) {
            $sliderImages[]= json_encode(uploadDemoImage('banner', 'optionbuilder/uploads', 'img' . $i . '.webp', 'optionbuilder'));
        }
        return [
            'heading'                       => ['value' => 'Unlock the Potential of Your Team\'s Talent', 'is_array' => 0],
            'heading_text_color'            => ['value' => '', 'is_array' => 0],
            'paragraph'                     => ['value' => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.', 'is_array' => 0],
            'paragraph_text_color'          => ['value' => '', 'is_array' => 0],
            'configs_checkbox'              => ['value' => ['search', 'categories'], 'is_array' => 1],
            'select_verient'                => ['value' => 'tk-hero-banner-three', 'is_array' => 0],
            'search-btn-txt'                => ['value' => '', 'is_array' => 0],
            'search-placeholder'            => ['value' => 'Search by keyword', 'is_array' => 0],
            'media_type'                    => ['value' => 'slider', 'is_array' => 0],
            'slider_image'                  => ['value' => $sliderImages, 'is_array' => '1'],
            'category_heading'              => ['value' => 'Popular categories', 'is_array' => 0],
            'category_heading_text_color'   => ['value' => '', 'is_array' => 0],
        ];
    }

    private function getHomePage4Banner(){
        return [
            'heading'                       => ['value' => 'Transform <span> Your Team with </span> Top Talent Discovery', 'is_array' => 0],
            'heading_text_color'            => ['value' => '', 'is_array' => 0],
            'paragraph'                     => ['value' => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.', 'is_array' => 0],
            'paragraph_text_color'          => ['value' => '', 'is_array' => 0],
            'configs_checkbox'              => ['value' => ['search', 'categories'], 'is_array' => 1],
            'select_verient'                => ['value' => 'tk-hero-banner-four', 'is_array' => 0],
            'search-btn-txt'                => ['value' => 'Search', 'is_array' => 0],
            'search-placeholder'            => ['value' => 'Search by keyword', 'is_array' => 0],
            'media_type'                    => ['value' => 'video', 'is_array' => 0],
            'media_frame'                   => ['value' => 'yes', 'is_array' => 0],
            'video'                         => ['value' => [uploadDemoImage('banner', 'optionbuilder/uploads', 'final-recording.mp4', 'optionbuilder')], 'is_array' => 1],
            'category_heading'              => ['value' => 'Popular categories', 'is_array' => 0],
            'category_heading_text_color'   => ['value' => '', 'is_array' => 0],
        ];
    }

    private function getHomePage5Banner(){
        return [
            'heading'                       => ['value' => 'Thrive in a World of Creative Opportunity', 'is_array' => 0],
            'heading_text_color'            => ['value' => '', 'is_array' => 0],
            'paragraph'                     => ['value' => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.', 'is_array' => 0],
            'paragraph_text_color'          => ['value' => '', 'is_array' => 0],
            'configs_checkbox'              => ['value' => ['buttons', 'categories'], 'is_array' => 1],
            'select_verient'                => ['value' => 'tk-hero-banner-nine', 'is_array' => 0],
            'media_type'                    => ['value' => 'image', 'is_array' => 0],
            'image'                         => ['value' => [uploadDemoImage('banner', 'optionbuilder/uploads', 'img-08.webp', 'optionbuilder')], 'is_array' => '1'],
            'all_category_heading'          => ['value' => 'All categories', 'is_array' => 0],
            'buttons_repeater'              => ['value' =>  [
                                                        $this->uniqueId() => [
                                                            'btn_text'          => 'Find a Better Job',
                                                            'btn_text_color'    => '',
                                                            'btn_bg_color'      => '',
                                                            'btn_url'           => route('register'),
                                                            'btn_icon'          => ''
                                                        ],
                                                        $this->uniqueId() => [
                                                            'btn_text'          => 'Learn More',
                                                            'btn_text_color'    => '',
                                                            'btn_bg_color'      => '',
                                                            'btn_url'           => '#',
                                                            'btn_icon'          => '<i class="fa-solid fa-arrow-up-right-from-square"></i>'
                                                        ],
                                                    ], 'is_array' => '1'],
        ];
    }

    private function getBannerWithSliderData(){
        return [
            'banner6_repeator'  => ['value' =>  [
                                        $this->uniqueId() => [
                                            'heading'           => 'Thrive in the <span>World of Freelance</span> Excellence Marketplace!',
                                            'paragraph'         => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.',
                                            'btn_green_text'    => 'Try it Free',
                                            'first_btn_url'     => route('register'),
                                            'simple_btn_text'   => 'Learn More',
                                            'second_btn_url'    => '#',
                                            'image'             => [json_encode(uploadDemoImage('banner', 'optionbuilder/uploads', 'img-06.webp', 'optionbuilder'))],
                                        ],
                                        $this->uniqueId() => [
                                            'heading'           => 'Thrive in the <span>World of Freelance</span> Excellence Marketplace!',
                                            'paragraph'         => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.',
                                            'btn_green_text'    => 'Try it Free',
                                            'first_btn_url'     => route('register'),
                                            'simple_btn_text'   => 'Learn More',
                                            'second_btn_url'    => '#',
                                            'image'             => [json_encode(uploadDemoImage('banner', 'optionbuilder/uploads', 'img-06.webp', 'optionbuilder'))],
                                        ],
                                        $this->uniqueId() => [
                                            'heading'           => 'Thrive in the <span>World of Freelance</span> Excellence Marketplace!',
                                            'paragraph'         => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.',
                                            'btn_green_text'    => 'Try it Free',
                                            'first_btn_url'     => route('register'),
                                            'simple_btn_text'   => 'Learn More',
                                            'second_btn_url'    => '#',
                                            'image'             => [json_encode(uploadDemoImage('banner', 'optionbuilder/uploads', 'img-06.webp', 'optionbuilder'))],
                                        ],
                                    ], 'is_array' => '1'],
        ];
    }

    private function getSearchBannerData(){
            $trustedbyImages = [];
            for ($i = 1; $i <= 4; $i++) {
                $trustedbyImages[]= json_encode(uploadDemoImage('trustedby', 'optionbuilder/uploads', 'img-0' . $i . '.webp', 'optionbuilder'));
            }

            return [
                'search-placeholder'            => ['value' => 'Search by keyword', 'is_array' => 0],
                'trusted-by-heading'            => ['value' => 'Trusted by', 'is_array' => 0],
                'trusted-by-image'              => ['value' => $trustedbyImages, 'is_array' => '1'],
            ];
    }

    private function getHomePage8Banner(){
        return [
            'heading'                       => ['value' => 'Thrive in the <span>World of Freelance</span> Excellence Marketplace!', 'is_array' => 0],
            'heading_text_color'            => ['value' => '', 'is_array' => 0],
            'paragraph'                     => ['value' => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.', 'is_array' => 0],
            'paragraph_text_color'          => ['value' => '', 'is_array' => 0],
            'configs_checkbox'              => ['value' => ['buttons'], 'is_array' => 1],
            'select_verient'                => ['value' => 'tk-hero-banner-ten', 'is_array' => 0],
            'media_frame'                   => ['value' => 'no', 'is_array' => 0],
            'media_type'                    => ['value' => 'image', 'is_array' => 0],
            'image'                         => ['value' => [uploadDemoImage('banner', 'optionbuilder/uploads', 'img-10.webp', 'optionbuilder')], 'is_array' => 1],
            'banner_shape'                  => ['value' => [json_encode(uploadDemoImage('', 'optionbuilder/uploads', 'banner-shape.svg', 'optionbuilder'))], 'is_array' => '1'],
            'buttons_repeater'              => ['value' =>  [
                                                        $this->uniqueId() => [
                                                            'btn_text'          => 'Find a Better Job',
                                                            'btn_text_color'    => '',
                                                            'btn_bg_color'      => '',
                                                            'btn_url'           => route('register'),
                                                            'btn_icon'          => ''
                                                        ],
                                                        $this->uniqueId() => [
                                                            'btn_text'          => 'Learn More',
                                                            'btn_text_color'    => '',
                                                            'btn_bg_color'      => '',
                                                            'btn_url'           => '#',
                                                            'btn_icon'          => '<i class="fa-solid fa-arrow-up-right-from-square"></i>'
                                                        ],
                                                    ], 'is_array' => '1'],
        ];
    }

    private function getHomePage9Banner(){

        return [
            'heading'                       => ['value' => 'Thrive in the <span>World of Freelance</span> Excellence Marketplace!', 'is_array' => 0],
            'heading_text_color'            => ['value' => '', 'is_array' => 0],
            'paragraph'                     => ['value' => 'Top global experts lead online professional courses, delivering quality education accessible to learners worldwide.', 'is_array' => 0],
            'paragraph_text_color'          => ['value' => '', 'is_array' => 0],
            'configs_checkbox'              => ['value' => ['search'], 'is_array' => 1],
            'search-btn-txt'                => ['value' => 'Search', 'is_array' => 0],
            'search-placeholder'            => ['value' => 'Search by keyword', 'is_array' => 0],
            'select_verient'                => ['value' => 'tk-hero-banner-seven', 'is_array' => 0],
            'media_type'                    => ['value' => 'image', 'is_array' => 0],
            'image'                         => ['value' => [uploadDemoImage('banner', 'optionbuilder/uploads', 'image-01.webp', 'optionbuilder')], 'is_array' => '1'],
            'media_frame'                   => ['value' => 'no', 'is_array' => 0],
        ];
    }

    private function getHomePage11Banner(){
        $trustedbyImages = [];
        for ($i = 1; $i <= 4; $i++) {
            $trustedbyImages[]= json_encode(uploadDemoImage('trustedby', 'optionbuilder/uploads', 'img-0' . $i . '.webp', 'optionbuilder'));
        }
        return [
            'heading'                       => ['value' => 'Excel in the Freelance  <span>Marketplace!</span>', 'is_array' => 0],
            'heading_text_color'            => ['value' => '', 'is_array' => 0],
            'paragraph'                     => ['value' => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.', 'is_array' => 0],
            'paragraph_text_color'          => ['value' => '', 'is_array' => 0],
            'configs_checkbox'              => ['value' => ['search', 'trusted_by'], 'is_array' => 1],
            'select_verient'                => ['value' => 'tk-hero-banner-five', 'is_array' => 0],
            'search-btn-txt'                => ['value' => 'Search', 'is_array' => 0],
            'search-placeholder'            => ['value' => 'Search by keyword', 'is_array' => 0],
            'media_type'                    => ['value' => 'image', 'is_array' => 0],
            'image'                         => ['value' => [uploadDemoImage('banner', 'optionbuilder/uploads', 'img2.webp', 'optionbuilder')], 'is_array' => '1'],
            'trusted_by_heading'            => ['value' => 'Trusted by', 'is_array' => 0],
            'trusted_by_heading_text_color' => ['value' => '', 'is_array' => 0],
            'trusted_by_image'              => ['value' => $trustedbyImages, 'is_array' => '1'],
            'banner_shape'                  => ['value' => [json_encode(uploadDemoImage('', 'optionbuilder/uploads', 'banner-shape-three.svg', 'optionbuilder'))], 'is_array' => '1'],
        ];
    }

    private function getHomePage12Banner(){
        return [
            'heading'                       => ['value' => 'Thrive in the <span>World of Freelance</span> Excellence Marketplace!', 'is_array' => 0],
            'heading_text_color'            => ['value' => '', 'is_array' => 0],
            'paragraph'                     => ['value' => 'Top global experts lead online professional courses, delivering quality education accessible to learners worldwide.', 'is_array' => 0],
            'paragraph_text_color'          => ['value' => '', 'is_array' => 0],
            'configs_checkbox'              => ['value' => ['search'], 'is_array' => 1],
            'select_verient'                => ['value' => 'tk-hero-banner-eleven', 'is_array' => 0],
            'media_type'                    => ['value' => 'image', 'is_array' => 0],
            'image'                         => ['value' => [uploadDemoImage('banner', 'optionbuilder/uploads', 'bannerbg.webp', 'optionbuilder')], 'is_array' => '1'],
            'search-btn-txt'                => ['value' => 'Search', 'is_array' => 0],
            'search-placeholder'            => ['value' => 'Search by keyword', 'is_array' => 0],
        ];
    }

    private function getHomePage13Banner(){
        return [
            'heading'                       => ['value' => 'Thrive in the <span>World of Freelance</span> Excellence Marketplace!', 'is_array' => 0],
            'heading_text_color'            => ['value' => '', 'is_array' => 0],
            'paragraph'                     => ['value' => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.', 'is_array' => 0],
            'paragraph_text_color'          => ['value' => '', 'is_array' => 0],
            'configs_checkbox'              => ['value' => ['categories', 'buttons'], 'is_array' => 1],
            'select_verient'                => ['value' => 'tk-hero-banner', 'is_array' => 0],
            'media_type'                    => ['value' => 'video', 'is_array' => 0],
            'media_frame'                   => ['value' => 'yes', 'is_array' => 0],
            'video'                         => ['value' => [uploadDemoImage('banner', 'optionbuilder/uploads', 'final-recording.mp4', 'optionbuilder')], 'is_array' => 1],
            'category_heading'              => ['value' => 'Popular categories', 'is_array' => 0],
            'category_heading_text_color'   => ['value' => '', 'is_array' => 0],
            'buttons_repeater'              => ['value' =>  [
                                            $this->uniqueId() => [
                                                'btn_text'          => 'Find a Better Job',
                                                'btn_text_color'    => '',
                                                'btn_bg_color'      => '',
                                                'btn_url'           => route('register'),
                                                'btn_icon'          => ''
                                            ],
                                            $this->uniqueId() => [
                                                'btn_text'          => 'Learn more',
                                                'btn_text_color'    => '',
                                                'btn_bg_color'      => '',
                                                'btn_url'           => '#',
                                                'btn_icon'          => '<i class="fa-solid fa-arrow-up-right-from-square"></i>'
                                            ],
                                        ], 'is_array' => '1'],
        ];
    }

// start for BannerPage1

    private function getBannerVideoData($page){
        return [
            'video'                => ['value' => [uploadDemoImage('', 'optionbuilder/uploads', 'mockup-dummy-video.mp4', 'optionbuilder')], 'is_array' => 1],
        ];
    }

    private function getBrandSliderData($page){
        $brandImages = [];
        for ($i = 1; $i <= 10; $i++) {
            $brandImages[]= json_encode(uploadDemoImage('clients', 'optionbuilder/uploads', 'logo-' . $i . '.webp', 'optionbuilder'));
        }
        return [
            'heading'              => ['value' => 'Associate 36,000+ <span>Peak Performance Teams</span>', 'is_array' => 0],
            'images'                => ['value' => $brandImages, 'is_array' => '1'],
        ];
    }

    private function getCategoriesData($page){
        $heading = '';
        if($page->slug == 'home-nine'){
            $heading    = 'Exploring the Collection of Projects';
        }else{
            $heading    = 'Comprehensive Range of Talent Services to Meet Your Every Need';
        }
        return [
            'sub-heading'          => ['value' => 'Boost Your Working Flow', 'is_array' => 0],
            'heading'              => ['value' => $heading, 'is_array' => 0],
            'paragraph'            => ['value' => 'Explore a curated range of top categories, from tech gadgets to fashion trends, home essentials, and gourmet delights. Find your perfect match now.', 'is_array' => 0],
            'btn_text'             => ['value' => 'Explore More Categories', 'is_array' => 0],
        ];
    }

    private function getClientFeedbackData($page){
        return [
            'heading'     => ['value' => 'We Love Our Client Feedback', 'is_array' => 0],
            'feedback'    => ['value' =>  [
                                $this->uniqueId() => [
                                    'feedback_image' => [json_encode(uploadDemoImage('feedback', 'optionbuilder/uploads', 'imge-01.webp', 'optionbuilder'))],
                                    'paragraph'    => "I am truly impressed by the outstanding service I experienced! The team showed remarkable dedication to fulfilling my requirements, showcasing unmatched professionalism and expertise.<br><br>
                                                        The quality of their work exceeded my expectations, and I would highly recommend their services to anyone. Thank you for a job well done!",
                                    'name'         => 'John Doe',
                                    'role'         => 'Developer',
                                    'company'      => 'Google',
                                ],
                                $this->uniqueId() => [
                                    'feedback_image' => [json_encode(uploadDemoImage('feedback', 'optionbuilder/uploads', 'imge-04.webp', 'optionbuilder'))],
                                    'paragraph'    => "I am absolutely thrilled with the exceptional service I received! The team went above and beyond to meet my needs, demonstrating a high level of professionalism and expertise.<br><br>
                                                        The quality of their work exceeded my expectations, and I would highly recommend their services to anyone. Thank you for a job well done!",
                                    'name'         => 'Jasmin fradei',
                                    'role'         => 'Database developer',
                                    'company'      => 'Devo',
                                ],
                                $this->uniqueId() => [
                                    'feedback_image' => [json_encode(uploadDemoImage('feedback', 'optionbuilder/uploads', 'imge-02.webp', 'optionbuilder'))],
                                    'paragraph'    => "I couldn't be happier with the incredible service I received! The team went above and beyond to cater to my needs, displaying a level of professionalism and expertise that truly impressed me.<br><br>
                                                        Their attention to detail and dedication to delivering top-notch results exceeded my expectations. I would wholeheartedly...",
                                    'name'         => 'Litham smart',
                                    'role'         => 'Ai expert',
                                    'company'      => 'Saha',
                                ],
                                $this->uniqueId() => [
                                    'feedback_image' => [json_encode(uploadDemoImage('feedback', 'optionbuilder/uploads', 'imge-03.webp', 'optionbuilder'))],
                                    'paragraph'    => "I am absolutely thrilled with the exceptional service I received! The team went above and beyond to meet my needs, demonstrating a high level of professionalism and expertise.<br><br>
                                                        The quality of their work exceeded my expectations, and I would highly recommend their services to anyone. Thank you for a job well done!",
                                    'name'         => 'Jamiss kulay',
                                    'role'         => 'Manager',
                                    'company'      => 'Awo',
                                ],
                                $this->uniqueId() => [
                                    'feedback_image' => [json_encode(uploadDemoImage('feedback', 'optionbuilder/uploads', 'imge-02.webp', 'optionbuilder'))],
                                    'paragraph'    => "I am truly impressed by the outstanding service I experienced! The team showed remarkable dedication to fulfilling my requirements, showcasing unmatched professionalism and expertise.<br><br>
                                                        The quality of their work exceeded my expectations, and I would highly recommend their services to anyone. Thank you for a job well done!",
                                    'name'         => 'John davin',
                                    'role'         => 'Developer',
                                    'company'      => 'DEO',
                                ],

                            ], 'is_array' => '1'],
        ];
    }

    private function getGigsData($page){
        $heading = $subHeading = $paragraph = '';
        if($page->slug == 'home-seven'){
            $themeStyle = 'tk-work-boxed';
        }else{
            $themeStyle = 'tk-work-fullwidth';
        }

        if($page->slug == 'home-seven'){
            $heading            = '10,256 Services available in';
            $subHeading         = '';
            $paragraph          = 'Within the top 1%, discover elite talent meticulously vetted to uphold the highest standards, ensuring excellence and unparalleled expertise.';
        }else{
            $heading            = 'Your One-Stop Online Marketplace for Everything You Need';
            $subHeading         = 'Boost Your Working Flow';
            $paragraph          = 'Your premier online marketplace. Find quality products and services, connect with trusted sellers, and enjoy a seamless shopping experience today.';
        }

        return [
            'theme_style'          => ['value' => $themeStyle, 'is_array' => 0],
            'sub-heading'          => ['value' => $subHeading, 'is_array' => 0],
            'heading'              => ['value' => $heading, 'is_array' => 0],
            'paragraph'            => ['value' => $paragraph, 'is_array' => 0],
            'btn_text'             => ['value' => 'Explore More Gigs', 'is_array' => 0],
        ];
    }

// end BannerPage1

// start for BannerPage2
    private function getSellersData($page){
        $heading = $subHeading = $sellerVariant = '';
        if($page->slug == 'home-seven'){
            $heading            = '10,256 Talent available in';
            $subHeading         = '';
        }else{
            $heading    = 'Most Rigorously Screened Talent in the top 1%';
            $subHeading = 'Hand picked talent';
        }
        // if($page->slug == 'home-three'){
        //     $sellerVariant = 'tk-talent-uservtwo';
        // }
        return [
            'seller_verient'        => ['value' => $sellerVariant , 'is_array' => 0],
            'sub-heading'           => ['value' => $subHeading, 'is_array' => 0],
            'heading'               => ['value' => $heading, 'is_array' => 0],
            'no_of_sellers'         => ['value' => $page->slug == '/' ? 6 : 6, 'is_array' => 0],
            'paragraph'             => ['value' => 'Within the top 1%, discover elite talent meticulously vetted to uphold the highest standards, ensuring excellence and unparalleled expertise.', 'is_array' => 0],
            'btn_text'              => ['value' => 'Explore More Freelancers', 'is_array' => 0]
        ];
    }

    private function getCounterData($page){
        if($page->section_id == 'counter_1'){
            return [
                'conuter_description'   => ['value' => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.', 'is_array' => 0],
                'counter_repeator'      => ['value' =>  [
                                                $this->uniqueId() => [
                                                    'image'        => [json_encode(uploadDemoImage('counter', 'optionbuilder/uploads', 'img_1.svg', 'optionbuilder'))],
                                                    'conuter_record'    => '4.91/5',
                                                    'heading'           => 'Average rating for work with tech talent.',
                                                ],
                                                $this->uniqueId() => [
                                                    'image'        => [json_encode(uploadDemoImage('counter', 'optionbuilder/uploads', 'img_2.svg', 'optionbuilder'))],
                                                    'conuter_record'    => '211K+ contracts',
                                                    'heading'           => 'Engaged in development & IT work in the past year.',
                                                ],
                                                $this->uniqueId() => [
                                                    'image'        => [json_encode(uploadDemoImage('counter', 'optionbuilder/uploads', 'img_3.svg', 'optionbuilder'))],
                                                    'conuter_record'    => '1,665 skills',
                                                    'heading'           => 'Backed by talent on Workreap.',
                                                ],
                                            ], 'is_array' => '1'],
            ];
        }
        return [
            'counter_repeator'      => ['value' =>  [
                                            $this->uniqueId() => [
                                                'image'        => [json_encode(uploadDemoImage('counter', 'optionbuilder/uploads', 'image5.webp', 'optionbuilder'))],
                                                'conuter_record'    => '120+ million',
                                                'heading'           => 'Active Talent',
                                            ],
                                            $this->uniqueId() => [
                                                'image'        => [json_encode(uploadDemoImage('counter', 'optionbuilder/uploads', 'image5-1.webp', 'optionbuilder'))],
                                                'conuter_record'    => '64+ million',
                                                'heading'           => 'Registered Companies',
                                            ],
                                            $this->uniqueId() => [
                                                'image'        => [json_encode(uploadDemoImage('counter', 'optionbuilder/uploads', 'image5-2.webp', 'optionbuilder'))],
                                                'conuter_record'    => '217+ million',
                                                'heading'           => 'Project Posted till Date',
                                            ],
                                            $this->uniqueId() => [
                                                'image'             => [json_encode(uploadDemoImage('counter', 'optionbuilder/uploads', 'image5-3.webp', 'optionbuilder'))],
                                                'conuter_record'    => '98.76%',
                                                'heading'           => 'Total Customer Feedback Ratio',
                                            ],
                                        ], 'is_array' => '1'],
        ];
    }

    private function getContentWithBulletsData($page){
        $themeStyle = '';
        if($page->slug == 'home-four' || $page->slug == 'home-six' || $page->slug == 'home-eight'){
            $themeStyle = 'light';
        }elseif($page->slug == 'home-five' || $page->slug == 'home-two' || $page->slug == 'home-nine' || $page->slug == 'home-eleven' || $page->slug == '/'){
            $themeStyle = 'dark';
        }elseif($page->slug == 'about-us' && ($page->section_id ?? '') == 'content-with-bullets_0'){
            $themeStyle = 'dark';
        }

        if($page->slug == 'about-us' && ($page->section_id ?? '') == 'content-with-bullets_1'){
            return [
                'theme_style'          => ['value' => 'light', 'is_array' => 0],
                'sub-heading'          => ['value' => 'Why we’re different from other', 'is_array' => 0],
                'heading'              => ['value' => 'Making equal opportunities for everyone every time', 'is_array' => 0],
                'paragraph'            => ['value' => 'Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores molestias excepturi occaecation.', 'is_array' => 0],
                // 'get_started_btn'      => ['value' => 'Join Us Today', 'is_array' => 0],
                // 'get_started_url'      => ['value' => route('register'), 'is_array' => 0],
                'list-data'            => ['value' =>  [
                                            [
                                                'list_item'    => 'Accusantium doloremque laudantium totam rem aperiam.',
                                            ],
                                            [
                                                'list_item'    => 'Eaque ipsa quae ab illo inventore veritatis et quasi architecton',
                                            ],
                                            [
                                                'list_item'    => 'Eicta sunt explicaboemo enim ipsam voluptatemuia',
                                            ],
                                        ], 'is_array' => '1'],
            ];
        } elseif ($page->slug == 'home-six' || $page->slug == 'home-eight'){
            return [
                'theme_style'          => ['value' => $themeStyle, 'is_array' => 0],
                'sub-heading'          => ['value' => 'We’re expanding day by day', 'is_array' => 0],
                'heading'              => ['value' => 'Global Trust of <span>1 Million</span> Businesses and Counting', 'is_array' => 0],
                'paragraph'            => ['value' => 'Connect with skilled professionals, streamline collaboration, and unlock success. Join now and redefine your work experience!.', 'is_array' => 0],
                'list-data'            => ['value' =>  [
                                            [
                                                'list_item'   => 'Connect with pros collaborate better succeed faster',
                                            ],
                                            [
                                                'list_item'    => 'Redefine work Join now for a better experience',
                                            ],
                                            [
                                                'list_item'    => 'Streamline collaboration unlock success',
                                            ],
                                            [
                                                'list_item'    => 'Join us redefine your work experience',
                                            ],
                                        ], 'is_array' => '1'],
            ];
        }

        return [
            'theme_style'          => ['value' => $themeStyle, 'is_array' => 0],
            'sub-heading'          => ['value' => 'We’re expanding day by day', 'is_array' => 0],
            'heading'              => ['value' => 'Global Trust of <span>1 Million</span> Businesses and Counting', 'is_array' => 0],
            'paragraph'            => ['value' => 'Connect with skilled professionals, streamline collaboration, and unlock success. Join now and redefine your work experience!.', 'is_array' => 0],
            'get_started_btn'      => ['value' => 'Get Started', 'is_array' => 0],
            'get_started_url'      => ['value' => route('register'), 'is_array' => 0],
            'list-data'            => ['value' =>  [
                                        [
                                            'list_item'   => 'Connect with pros collaborate better succeed faster',
                                        ],
                                        [
                                            'list_item'    => 'Redefine work Join now for a better experience',
                                        ],
                                        [
                                            'list_item'    => 'Streamline collaboration unlock success',
                                        ],
                                        [
                                            'list_item'    => 'Join us redefine your work experience',
                                        ],
                                    ], 'is_array' => '1'],
        ];

    }

    private function getImageData($page){
        if($page->slug == 'home-two' || $page->slug == 'home-five' || $page->slug == 'home-nine' || $page->slug == 'home-eleven' || $page->slug == '/'){
            return [
                'image'             => ['value' => [uploadDemoImage('', 'optionbuilder/uploads', 'rectangle-image-15.webp', 'optionbuilder')], 'is_array' => '1'],
            ];
        }elseif($page->slug == 'home-four' || $page->slug == 'home-six'){
            return [
                'image'             => ['value' => [uploadDemoImage('banner', 'optionbuilder/uploads', 'img-09.webp', 'optionbuilder')], 'is_array' => '1'],
            ];
        }elseif($page->slug == 'home-eight'){
            return [
                'image'             => ['value' => [uploadDemoImage('banner', 'optionbuilder/uploads', 'content_image.webp', 'optionbuilder')], 'is_array' => '1'],
            ];
        }elseif($page->slug == 'about-us' && ($page->section_id ?? '') == 'image_0'){
            return [
                'image'             => ['value' => [uploadDemoImage('', 'optionbuilder/uploads', 'oportuninty.webp', 'optionbuilder')], 'is_array' => '1'],
            ];
        }elseif($page->slug == 'about-us' && ($page->section_id ?? '') == 'image_1'){
            return [
                'image'             => ['value' => [uploadDemoImage('', 'optionbuilder/uploads', 'rectangle-image-14.webp', 'optionbuilder')], 'is_array' => '1'],
            ];
        }
    }

    private function getFaqsData($page){
        return [
            'sub-heading'          => ['value' => 'Talk to support', 'is_array' => 0],
            'heading'              => ['value' => 'Frequently asked questions', 'is_array' => 0],
            'paragraph'            => ['value' => 'Find answers to your questions instantly. Need more guidance? Dive into our extensive documentation for all your queries.', 'is_array' => 0],
            'contact_us_btn'       => ['value' => 'Contact Our Team', 'is_array' => 0],
            'contact_us_url'       => ['value' => route('register'), 'is_array' => 0],
            'faqs_data'  => ['value' =>  [
                                        $this->uniqueId() => [
                                            'question'    => 'How do I get started as a freelancer?',
                                            'answer'      => 'Sign up, complete your profile, and start browsing projects. Submit proposals and communicate with clients to get hired.',
                                        ],
                                        $this->uniqueId() => [
                                            'question'    => 'What kind of projects can I find?',
                                            'answer'      => 'Our marketplace offers a variety of projects across industries like writing, design, programming, marketing, and more.',
                                        ],
                                        $this->uniqueId() => [
                                            'question'    => 'How do I ensure payment security?',
                                            'answer'      => 'Use our secure payment system. Funds are held in escrow until you complete the project and both parties are satisfied.',
                                        ],
                                        $this->uniqueId() => [
                                            'question'    => 'What fees are involved for freelancers?',
                                            'answer'      => "We charge a service fee on completed projects, typically a percentage of the project's total value. Check our fee structure for details.",
                                        ],
                                        $this->uniqueId() => [
                                            'question'    => 'How can I build trust with clients?',
                                            'answer'      => 'Maintain clear communication, deliver high-quality work on time, and ask for reviews. A strong portfolio also helps showcase your skills.',
                                        ],
                                    ], 'is_array' => '1'],
        ];
    }
// end BannerPage2

// start for BannerPage1, BannerPage2, BannerPage3, BannerPage4
    private function getPackagesData($page){
        return [
            'sub-heading'          => ['value' => 'Best Plans to Go With', 'is_array' => 0],
            'heading'              => ['value' => 'Tailored Packages for Every Business Stage and Size', 'is_array' => 0],
            'paragraph'            => ['value' => 'Enter a realm of limitless possibilities, where extraordinary talent thrives and beckons you to unfold your boundless potential.', 'is_array' => 0],
            'btn_heading'          => ['value' => 'Explore best packages for', 'is_array' => 0],
            'talent_btn_text'      => ['value' => 'Seller', 'is_array' => 0],
            'employer_btn_text'    => ['value' => 'Buyer', 'is_array' => 0],
            'note_heading'         => ['value' => '*Pros who post over 4 jobs per month get 10x more views on average than non-payers', 'is_array' => 0],
        ];
    }

    private function getBlogData($page){
        return [
            'heading'              => ['value' => 'Insights & Perspectives, Exploring the Boundless Horizons', 'is_array' => 0],
            'paragraph'            => ['value' => 'Explore diverse topics with captivating articles and expert opinions in our thought-provoking blog section. Uncover new perspectives today!', 'is_array' => 0],
            'explore_more_url'     => ['value' => route('register'),  'is_array' => 0],
            'btn_heading'          => ['value' => 'Explore best packages for', 'is_array' => 0],
            'btn_text'             => ['value' => 'Explore More', 'is_array' => 0],
            'blog_data'            => ['value' =>  [
                                            $this->uniqueId() => [
                                                'blog_image'   => [json_encode(uploadDemoImage('blog', 'optionbuilder/uploads', '01.webp', 'optionbuilder'))],
                                                'sub_heading'  => 'Technology & Innovation',
                                                'paragraph'    => 'Articles that teach programming languages, frameworks, libraries, and best practices.',
                                                'date'         => 'Jan 20, 2024',
                                                'blog_heading' => 'Why is this happening? Many reasons. Fear of being usurped.',
                                            ],
                                            $this->uniqueId() => [
                                                'blog_image'   => [json_encode(uploadDemoImage('blog', 'optionbuilder/uploads', '02.webp', 'optionbuilder'))],
                                                'sub_heading'  => 'Cybersecurity',
                                                'paragraph'    => 'Information about the latest cybersecurity threats, vulnerabilities, and trends, along.',
                                                'date'         => 'Feb 21, 2024',
                                                'blog_heading' => 'Automated email rejections, no feedback on interview performance.',
                                            ],
                                            $this->uniqueId() => [
                                                'blog_image'   => [json_encode(uploadDemoImage('blog', 'optionbuilder/uploads', '03.webp', 'optionbuilder'))],
                                                'sub_heading'  => 'News and Trends',
                                                'paragraph'    => 'Collaborations with industry experts, thought leaders, and professionals sharing.',
                                                'date'         => 'Mar 22, 2024',
                                                'blog_heading' => 'All that stuff you read about ageism being illegal and really it’s the hiring.',
                                            ],
                                        ], 'is_array' => '1'],
        ];
    }

    private function getAddBannerData($page){
        return [
            'pre_heading'               => ['value' => 'Talk to support', 'is_array' => 0],
            'heading'                   => ['value' => 'Join & Get a <span>Unique</span>Opportunity', 'is_array' => 0],
            'description'               => ['value' => 'Connect with skilled professionals, streamline collaboration, and unlock success. Join now and redefine your work experience!', 'is_array' => 0],
            'btn_text'                  => ['value' => 'Get Started Now', 'is_array' => 0],
            'btn_url'                   => ['value' => route('register'), 'is_array' => 0],
            'enable_footer_bg'          => ['value' => 'yes', 'is_array' => 0],
            'promo_text'                => ['value' => 'Try it risk free 14 days money-back guarantee', 'is_array' => 0],
        ];
    }
// end

// start for BannerPage3
    private function getMarketPlaceData($page){
        return [
            'sub-heading'               => ['value' => 'Boost Your Working Flow', 'is_array' => 0],
            'heading'                   => ['value' => 'Your One-Stop Online Marketplace for Everything You Need', 'is_array' => 0],
            'paragraph'                 => ['value' => 'Your premier online marketplace. Find quality products and services, connect with trusted sellers, and enjoy a seamless shopping experience today.', 'is_array' => 0],
            'market_place_repeator'     => ['value' =>  [
                                            $this->uniqueId() => [
                                                'image'             => [json_encode(uploadDemoImage('slider', 'optionbuilder/uploads', 'imgee-1.webp', 'optionbuilder'))],
                                                'image_sub_heading' => '256 Listings',
                                                'image_heading'     => 'Voice Over',
                                            ],
                                            $this->uniqueId() => [
                                                'image'             => [json_encode(uploadDemoImage('slider', 'optionbuilder/uploads', 'imgee-2.webp', 'optionbuilder'))],
                                                'image_sub_heading' => '316 Listings',
                                                'image_heading'     => 'Video Explainer',
                                            ],
                                            $this->uniqueId() => [
                                                'image'             => [json_encode(uploadDemoImage('slider', 'optionbuilder/uploads', 'imgee-3.webp', 'optionbuilder'))],
                                                'image_sub_heading' => '112 Listings',
                                                'image_heading'     => 'Logo Design',
                                            ],
                                            $this->uniqueId() => [
                                                'image'             => [json_encode(uploadDemoImage('slider', 'optionbuilder/uploads', 'imgee.webp', 'optionbuilder'))],
                                                'image_sub_heading' => '418 Listings',
                                                'image_heading'     => 'Ai Artist',
                                            ],
                                            $this->uniqueId() => [
                                                'image'             => [json_encode(uploadDemoImage('slider', 'optionbuilder/uploads', 'imgee-1.webp', 'optionbuilder'))],
                                                'image_sub_heading' => '256 Listings',
                                                'image_heading'     => 'Illustration',
                                            ],
                                            $this->uniqueId() => [
                                                'image'             => [json_encode(uploadDemoImage('slider', 'optionbuilder/uploads', 'imgee-2.webp', 'optionbuilder'))],
                                                'image_sub_heading' => '316 Listings',
                                                'image_heading'     => 'Video Explainer',
                                            ],
                                            $this->uniqueId() => [
                                                'image'             => [json_encode(uploadDemoImage('slider', 'optionbuilder/uploads', 'imgee-3.webp', 'optionbuilder'))],
                                                'image_sub_heading' => '112 Listings',
                                                'image_heading'     => 'Logo Design',
                                            ],
                                            $this->uniqueId() => [
                                                'image'             => [json_encode(uploadDemoImage('slider', 'optionbuilder/uploads', 'imgee.webp', 'optionbuilder'))],
                                                'image_sub_heading' => '418 Listings',
                                                'image_heading'     => 'Ai Artist',
                                            ],
                                        ], 'is_array' => '1'],
        ];
    }
// end BannerPage3

// start for BannerPage4
    private function getWorkingStepsData($page){
        $themeStyle = '';
        if($page->slug == 'home-four' || $page->slug == 'home-eight'){
            $themeStyle = 'dark';
        }elseif($page->slug == 'home-six'){
            $themeStyle = 'light';
        }
        return [
            'theme_style'              => ['value' => $themeStyle, 'is_array' => 0],
            'sub-heading'              => ['value' => 'Unveiling the Mechanics', 'is_array' => 0],
            'heading'                  => ['value' => 'A Comprehensive Guide on How It Works', 'is_array' => 0],
            'image'                    => ['value' => [uploadDemoImage('', 'optionbuilder/uploads', 'rectangle-image-14.webp', 'optionbuilder')], 'is_array' => '1'],
            'working-steps-repeater'   => ['value' =>  [
                                            $this->uniqueId() => [
                                                'icon'          => '<i class="fa-solid fa-chart-mixed"></i>',
                                                'icon_color'    => '',
                                                'heading'       => 'Search and Discover Talent',
                                                'paragraph'     => 'Find the perfect match for your project needs with our intuitive search tools, tailored to help you discover skilled professionals effortlessly.',
                                            ],
                                            $this->uniqueId() => [
                                                'icon'          => '<i class="fa-regular fa-user-shield"></i>',
                                                'icon_color'    => 'tk-bgblue',
                                                'heading'       => 'Shortlist and Hire with Confidence',
                                                'paragraph'     => 'Streamline your hiring process by evaluating candidates profiles, portfolios, and proposals, ensuring confident decisions for your project.',
                                            ],
                                            $this->uniqueId() => [
                                                'icon'          => '<i class="icon-thumbs-up"></i>',
                                                'icon_color'    => 'tk-bggreen',
                                                'heading'       => 'Leave Feedback and Enhance Collaboration',
                                                'paragraph'     => "Share your experience and contribute to a collaborative environment by leaving valuable feedback for the talent you've worked with.",
                                            ],
                                        ], 'is_array' => '1'],
        ];
    }
// end BannerPage4

// start for BannerPage10
    private function getProjectsData($page){
        return [
            'sub-heading'          => ['value' => 'Categories for Every Shopper', 'is_array' => 0],
            'no_of_projects'       => ['value' => $page->slug == 'home-ten' ? 8 : 6, 'is_array' => 0],
            'heading'              => ['value' => 'Find the optimal <span>employment opportunity</span> that aligns with your skillset', 'is_array' => 0],
            'paragraph'            => ['value' => 'Your premier online marketplace. Find quality products and services, connect with trusted sellers, and enjoy a seamless shopping experience today.', 'is_array' => 0],
            'btn_text'             => ['value' => 'Explore More Projects', 'is_array' => 0],
        ];
    }

    private function getExploreProjectData($page){
        $background = $border_color = $sub_heading = $heading = $paragraph = $image = '';

        if($page->section_id == 'explore-project_0'){
            $background     = '#F5FAFF';
            $border_color   = '#84CAFF';
            $sub_heading    = 'Explore the talent pool';
            $heading        = 'Post a New Project';
            $paragraph      = 'Give a boost to your project with the hand picked and verified talent.';
            $image          = [uploadDemoImage('landing-ten', 'optionbuilder/uploads', 'image-male.webp', 'optionbuilder')];
        }elseif($page->section_id == 'explore-project_1'){
            $background     = '#FFF9EC';
            $border_color   = '#E0C486';
            $sub_heading    = 'Meet the top brands';
            $heading        = 'Work on a Best Project';
            $paragraph      = 'Discover the top brand projects and boost your professional visibility.';
            $image          = [uploadDemoImage('landing-ten', 'optionbuilder/uploads', 'image-female.webp', 'optionbuilder')];
        }
        return [
            'explore_project_verient'   => ['value' => '', 'is_array' => 0],
            'sub-heading'               => ['value' => $sub_heading, 'is_array' => 0],
            'heading'                   => ['value' => $heading, 'is_array' => 0],
            'paragraph'                 => ['value' => $paragraph, 'is_array' => 0],
            'btn_text'                  => ['value' => '', 'is_array' => 0],
            'btn_url'                   => ['value' => 'javascript:void(0)', 'is_array' => 0],
            'bg_color'                  => ['value' => $background, 'is_array' => 0],
            'border_color'              => ['value' => $border_color, 'is_array' => 0],
            'image'                     => ['value' => $image, 'is_array' => '1'],
        ];
    }

    private function getParagraphData($page){
        if($page->slug == 'terms-condition'){
            return [
                'heading'   =>  ['value'=>'Standard terms and conditions', 'is_array' => 0],
                'paragraph' =>  ['value'=>'<h2>Why we need this page?</h2>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi eiccaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis estmiet expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnislor ndus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaquerum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                        <p>Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi occaecati cupiditate non provident, milique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobisat estndi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem ibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hetene asapiente delectusat uteit reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                        <h2>Is it effective to have this general content?</h2>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi eiccaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis estmiet expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnislor ndus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaquerum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat<br><br>
                                            <ul class="tk-jobdescription_list">
                                                <li>Et harum quidem rerum facilis est et expedita distinctio nam libero tempore cum soluta nobis est eligendi</li>
                                                <li>Eoptio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis voluptas</li>
                                                <li>Assumenda est omnis dolor ndus temporibus autem quibusdam et aut officiis debitis auterum necessitatibus</li><li>Saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae etaque earum rerum</li>
                                                <li>Tenetur a sapiente delectus ut aut reiciendis voluptatibus maiores alias consequature</li>
                                                <li>Perferendis doloribus asperiores repellat</li>
                                            </ul>
                                        </p>
                                        <p>Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi occaecati cupiditate non provident, milique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobisat estndi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem ibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hetene asapiente delectusat uteit reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat<br></p>'
                                ,  'is_array' => 0]
            ];
        }elseif($page->slug == 'privacy-policy'){
            return [
                'heading'   =>  ['value'=>'Privacy Policy', 'is_array' => 0],
                'paragraph' =>  ['value'=>
                                        '<h2>Introduction</h2>
                                            <p>Welcome to Taskup! Your privacy is critically important to us. This Privacy Policy explains how we collect, use, and protect your personal information when you visit our website and use our services. By accessing Taskup, you agree to this Privacy Policy.</p>
                                        <h2>Information We Collect</h2>
                                            <p><b>Personal Information:</b> When you register as a Buyer or Seller, we may collect personal information such as your name, email address, phone number, payment information, and profile details.<br>
                                                <b>Project and Transaction Information:</b> We collect details about the projects you post, the proposals you submit, and transactions you complete.<br>
                                                <b>Usage Data:</b> We may collect information about how you interact with our website, such as your IP address, browser type, pages visited, and the dates and times of your visits.<br>
                                                <b>Cookies:</b> We use cookies to enhance your experience on our site. Cookies help us understand your preferences based on previous or current site activity.<br>
                                            </p>
                                        <h2>How We Use Your Information</h2>
                                            <p><b>To Provide Services:</b> We use your personal information to provide and improve our services, facilitate transactions, and manage your account.<br>
                                                <b>To Communicate:</b> We may use your contact information to send you updates, newsletters, and other communications related to your use of Taskup.<br>
                                                <b>To Enhance Security:</b> Your information helps us maintain the safety and security of our platform, including fraud detection and prevention.<br>
                                                <b>To Analyze and Improve:</b> We analyze usage data to understand how our services are used and how we can improve them.<br>
                                            </p>
                                        <h2>Sharing Your Information</h2>
                                            <p><b>With Service Providers:</b> We may share your information with third-party service providers who assist us in operating our website and conducting our business.<br>
                                                <b>For Legal Reasons:</b> We may disclose your information if required to do so by law or in response to valid requests by public authorities.<br>
                                                <b>Business Transfers:</b> In the event of a merger, acquisition, or asset sale, your information may be transferred as part of the transaction.<br>
                                            </p>
                                        <h2>Your Rights</h2>
                                            <p><b>Access and Correction:</b> You have the right to access and update your personal information at any time through your account settings.<br>
                                                <b>Data Deletion:</b> You may request the deletion of your account and personal data. However, we may retain certain information as required by law or for legitimate business purposes.<br>
                                                <b>Opt-Out:</b> You can opt-out of receiving marketing communications from us by following the unsubscribe instructions in the emails or by contacting us directly.<br>
                                            </p>
                                        <h2>Security</h2>
                                            <p>We implement a variety of security measures to protect your personal information. However, no method of transmission over the Internet or electronic storage is completely secure, and we cannot guarantee its absolute security.</p>
                                        <h2>Changes to This Privacy Policy</h2>
                                            <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated effective date. Your continued use of Taskup after any changes signifies your acceptance of the updated Privacy Policy.</p>
                                         <h2>Contact Us</h2>
                                            <p>If you have any questions about this Privacy Policy, please contact us at <a href="mailto:'.setting('_contact.email').'">'.setting('_contact.email').'</a></p>

                                        <h2>Terms of Service</h2>
                                        <h2>Introduction</h2>
                                            <p>Welcome to Taskup! These Terms of Service govern your use of our website and services. By accessing Taskup, you agree to these terms. If you do not agree, please do not use our services.</p>
                                        <h2>Account Registration</h2>
                                            <p>To use Taskup, you must register for an account as a Buyer or Seller. You agree to provide accurate and complete information during registration and to keep your account information up-to-date.</p>
                                        <h2>User Roles and Responsibilities</h2>
                                            <p><b>Buyers:</b> Buyers can post projects (fixed, hourly, milestones) and hire Sellers according to their project needs. Buyers must ensure that their projects are clearly defined and accurately described.</p>
                                            <p><b>Sellers:</b> Sellers can send proposals to Buyer projects and post their gigs. Sellers are responsible for delivering the services as described in their proposals and gig listings.</p>
                                        <h2>Transactions</h2>
                                            <p>All transactions on Taskup must be conducted through our platform. Buyers agree to pay the agreed-upon price for the services, and Sellers agree to deliver the services as specified. Taskup may charge fees for transactions, which will be clearly disclosed to you.</p>
                                        <h2>Prohibited Activities</h2>
                                            <p>Users must not engage in any activity that violates any law, infringes on any third party\'s rights, or is otherwise harmful or fraudulent. This includes, but is not limited to:
                                                <ul class="tk-jobdescription_list">
                                                    <li>Posting false or misleading information</li>
                                                    <li>Engaging in unauthorized transactions outside of Taskup</li>
                                                    <li>Using Taskup to promote services or products that are not offered through our platform</li>
                                                    <li>Interfering with the operation of our website or services</li>
                                                </ul>
                                            </p>
                                        <h2>Dispute Resolution</h2>
                                            <p>We encourage Buyers and Sellers to resolve any disputes amicably. If a resolution cannot be reached, Taskup offers a dispute resolution process to help mediate conflicts.</p>
                                         <h2>Limitation of Liability</h2>
                                            <p>Taskup is not liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly, or any loss of data, use, goodwill, or other intangible losses, resulting from:
                                                <ul class="tk-jobdescription_list">
                                                    <li>Your use of or inability to use our services</li>
                                                    <li>Any unauthorized access to or use of our servers and/or any personal information stored therein</li>
                                                    <li>Any interruption or cessation of transmission to or from our services</li>
                                                    <li>Any bugs, viruses, trojan horses, or the like that may be transmitted to or through our services by any third party</li>
                                                </ul>
                                            </p>
                                        <h2>Changes to Terms</h2>
                                            <p>We may update these Terms of Service from time to time. Any changes will be posted on this page with an updated effective date. Your continued use of Taskup after any changes signifies your acceptance of the updated terms.</p>
                                        <h2>Governing Law</h2>
                                            <p>These Terms of Service are governed by and construed in accordance with the laws of [Your Country/State], without regard to its conflict of law principles.</p>
                                        <h2>Contact Us</h2>
                                            <p>If you have any questions about these Terms of Service, please contact us at <a href="mailto:'.setting('_contact.email').'">'.setting('_contact.email').'</a></p>'
                                ,  'is_array' => 0]
            ];
        }
    }
// end BannerPage10

    private function getTopCategoriesData(){
        return [
            'heading'               => ['value' => 'Trending Top Categories', 'is_array' => 0],
            'paragraph'             => ['value' => 'At our core, we are experts in connecting local business with top-notch talent. We are passionate about helping you find the perfect match in key areas of expertise.', 'is_array' => 0],
            'category_sub_heading'  => ['value' => 'Explore Categories', 'is_array' => 0],
            'category_description'  => ['value' => 'More categories with lots of talent available to explore here', 'is_array' => 0],
            'btn_url'               => ['value' => route('search-projects'),  'is_array' => 0],
            'btn_text'              => ['value' => 'Show All', 'is_array' => 0],
            'categories_data'       => ['value' =>  [
                                            $this->uniqueId() => [
                                                'image'         => [json_encode(uploadDemoImage('category-icons', 'optionbuilder/uploads', 'avatar.png', 'optionbuilder'))],
                                                'sub_heading'   => 'Programming & Tech',
                                                'description'   => 'Software Developer, Data Analyst, Network Engineer',
                                            ],
                                            $this->uniqueId() => [
                                                'image'         => [json_encode(uploadDemoImage('category-icons', 'optionbuilder/uploads', 'avatar-1.png', 'optionbuilder'))],
                                                'sub_heading'   => 'Admin + Project Management',
                                                'description'   => 'Administrative Assistant, Project Manager, and Process Analyst',
                                            ],
                                            $this->uniqueId() => [
                                                'image'         => [json_encode(uploadDemoImage('category-icons', 'optionbuilder/uploads', 'avatar-2.png', 'optionbuilder'))],
                                                'sub_heading'   => 'Digital Marketing + Sales',
                                                'description'   => 'Email Marketer, SEO Specialist, and a Web Developer.',
                                            ],
                                            $this->uniqueId() => [
                                                'image'         => [json_encode(uploadDemoImage('category-icons', 'optionbuilder/uploads', 'avatar-3.png', 'optionbuilder'))],
                                                'sub_heading'   => 'Writing & Translation',
                                                'description'   => 'Proofreader, Senior Editor, Creative Support',
                                            ],$this->uniqueId() => [
                                                'image'         => [json_encode(uploadDemoImage('category-icons', 'optionbuilder/uploads', 'avatar-4.png', 'optionbuilder'))],
                                                'sub_heading'   => 'AI Services',
                                                'description'   => 'Machine Learning Engineer, AI Consultant, Data Scientis',
                                            ],$this->uniqueId() => [
                                                'image'         => [json_encode(uploadDemoImage('category-icons', 'optionbuilder/uploads', 'avatar-5.png', 'optionbuilder'))],
                                                'sub_heading'   => 'Music & Audio',
                                                'description'   => 'Sound Engineer, Music Producer, Audio Editor',
                                            ],$this->uniqueId() => [
                                                'image'         => [json_encode(uploadDemoImage('category-icons', 'optionbuilder/uploads', 'avatar-6.png', 'optionbuilder'))],
                                                'sub_heading'   => 'Remote Work',
                                                'description'   => 'Customer Service Representative, Financial Analyst',
                                            ],
                                        ], 'is_array' => '1'],
        ];
    }   

    private function getSearchExperienceData(){
        return [
            'heading'               => ['value' => 'Streamlined Job Search Experience', 'is_array' => 0],
            'paragraph'             => ['value' => 'Discovering your dream job has never been simpler with our intuitive platform. Start your journey towards success now—don\'t delay!.', 'is_array' => 0],
            'experience_data'       => ['value' =>  [
                                            $this->uniqueId() => [
                                                'image'         => [json_encode(uploadDemoImage('search-experience', 'optionbuilder/uploads', 'search-experience-1.png', 'optionbuilder'))],
                                                'sub_heading'   => 'Freelancer',
                                                'description'   => 'Apply for positions as a freelancer and take control of your career',
                                            ],
                                            $this->uniqueId() => [
                                                'image'         => [json_encode(uploadDemoImage('search-experience', 'optionbuilder/uploads', 'search-experience-2.png', 'optionbuilder'))],
                                                'sub_heading'   => 'Employer',
                                                'description'   => 'Hire key staff as an employer and build your dream team',
                                            ],
                                            $this->uniqueId() => [
                                                'image'         => [json_encode(uploadDemoImage('search-experience', 'optionbuilder/uploads', 'search-experience-3.png', 'optionbuilder'))],
                                                'sub_heading'   => 'Community',
                                                'description'   => 'Collaborate as a community and achieve more together',
                                            ],
                                    ], 'is_array' => '1'],
        ];
    }

    private function getInfoboxData(){
        return [
            'pre_heading'           => ['value' => 'Best Plans to Go With', 'is_array' => 0],
            'heading'               => ['value' => 'Crafted With Attention and Close to Requirment', 'is_array' => 0],
            'paragraph'             => ['value' => 'Enter a realm of limitless possibilities, where extraordinary talent thrives and beckons you to unfold your boundless potential.', 'is_array' => 0],
            'note'                  => ['value' => '*Pros who post over 4 jobs per month get 10x more views on average than non-payers', 'is_array' => 0],
            'infobox_data'          => ['value' =>  [
                                            $this->uniqueId() => [
                                                'info_heading'   => 'Meet the top brands',
                                                'sub_heading'   => 'Work on a Database System',
                                                'description'   => 'Embark on the development journey of a robust and efficient database system.',
                                                'info_image'    => [json_encode(uploadDemoImage('infobox', 'optionbuilder/uploads', 'info-box-img-01.jpg', 'optionbuilder'))],
                                            ],
                                            $this->uniqueId() => [
                                                'info_heading'   => 'Meet the top brands',
                                                'sub_heading'   => 'Work on a Exploring Strategies',
                                                'description'   => 'Empower your workforce with the knowledge and tools needed to thrive in the modern.',
                                                'info_image'    => [json_encode(uploadDemoImage('infobox', 'optionbuilder/uploads', 'info-box-img-04.png', 'optionbuilder'))],
                                            ],
                                            $this->uniqueId() => [
                                                'info_heading'   => '',
                                                'sub_heading'   => 'Work on a  Employer Perspectives',
                                                'description'   => 'Gain valuable insights into talent acquisition, employee retention, workplace culture.',
                                                'info_image'    => [json_encode(uploadDemoImage('infobox', 'optionbuilder/uploads', 'info-box-img-02.jpg', 'optionbuilder'))],
                                            ],
                                            $this->uniqueId() => [
                                                'info_heading'   => '',
                                                'sub_heading'   => 'Work on a Perspectives and Trends',
                                                'description'   => 'Discover the top brand projects and boost your professional visibility.',
                                                'info_image'    => [json_encode(uploadDemoImage('infobox', 'optionbuilder/uploads', 'info-box-img-05.png', 'optionbuilder'))],
                                            ],
                                            $this->uniqueId() => [
                                                'info_heading'   => '',
                                                'sub_heading'   => 'Work on a Insights for Employers',
                                                'description'   => 'Empower your workforce with the knowledge and tools needed to thrive in the modern.',
                                                'info_image'    => [json_encode(uploadDemoImage('infobox', 'optionbuilder/uploads', 'info-box-img-06.jpg', 'optionbuilder'))],
                                            ],
                                            $this->uniqueId() => [
                                                'info_heading'   => 'Meet the top brands',
                                                'sub_heading'   => 'Work on a Employer Edition',
                                                'description'   => 'Explore expert perspectives, innovative HR solutions, and best practices aimed at optimizing.',
                                                'info_image'    => [json_encode(uploadDemoImage('infobox', 'optionbuilder/uploads', 'info-box-img-03.png', 'optionbuilder'))],
                                            ],
                                            $this->uniqueId() => [
                                                'info_heading'   => 'Meet the top brands',
                                                'sub_heading'   => 'Work on a Insights for Employers',
                                                'description'   => 'Explore expert perspectives, innovative HR solutions, and best practices aimed at optimizing recruitment, fostering employee engagement.',
                                                'info_image'         => [json_encode(uploadDemoImage('infobox', 'optionbuilder/uploads', 'info-box-img-07.jpg', 'optionbuilder'))],
                                            ],
                                        ], 'is_array' => '1'],
        ];
    }

    private function getSpacerData($page){
        return [
        ];
    }

    public function uniqueId() {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($str_result), 0, 10);
    }

    public function defaultStyles() {
        return [
            'content_width'     => '',
            'width-height-type' => 'px',
            'width'             => '',
            'height'            => '',
            'min-width'         => '',
            'max-width'         => '',
            'min-height'        => '',
            'max-height'        => '',
            'margin-type'       => 'px',
            'margin-top'        => '',
            'margin-right'      => '',
            'margin-bottom'     => '',
            'margin-left'       => '',
            'padding-type'      => 'px',
            'padding-top'       => '',
            'padding-right'     => '',
            'padding-bottom'    => '',
            'padding-left'      => '',
            'z-index'           => '',
            'classes'           => '',
            'background-size'   => '',
            'background-position' => '',
        ];
    }
}

