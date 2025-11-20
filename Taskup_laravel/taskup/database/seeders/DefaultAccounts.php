<?php

namespace Database\Seeders;
use File;
use DateTime;
use App\Models\Role;
use App\Models\User;
use App\Models\Profile;
use App\Models\Education;
use Illuminate\Database\Seeder;
use App\Models\UserAccountSetting;
use Illuminate\Support\Facades\Hash;
use App\Models\Seller\SellerPortfolio;
use App\Models\Seller\SellerSocialLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DefaultAccounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createDefaultRole();
        $this->createDefaultAccount();
    }


    public function createDefaultRole() {
        $roles = ['admin', 'buyer', 'seller'];
        foreach($roles as $role){
            $exist = Role::where( 'name', $role )->exists();
            if(!$exist){
                Role::create([
                    'name'          => $role,
                    'guard_name'    => 'web',
                ]);
            }
        }
    }

    public function createDefaultAccount() {

        User::truncate();
        Profile::truncate();
        Education::truncate();
        UserAccountSetting::truncate();
        SellerPortfolio::truncate();
        SellerSocialLink::truncate();

        $addresses = [
            [
                'country'   => 'United Kingdom',
                'zipcode'   => 'N1',
                'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
            ],
            [
                'country'   => 'United Kingdom',
                'zipcode'   => 'N8',
                'address'   => 'a:5:{s:7:"address";s:13:"London N8, UK";s:3:"lng";d:-0.1236257;s:3:"lat";d:51.5833118;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
            ],
            [
                'country'   => 'United Kingdom',
                'zipcode'   => 'N16',
                'address'   => 'a:5:{s:7:"address";s:14:"London N16, UK";s:3:"lng";d:-0.0764353;s:3:"lat";d:51.5623078;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
            ],
            [
                'country'   => 'United Kingdom',
                'zipcode'   => 'NW5',
                'address'   => 'a:5:{s:7:"address";s:14:"London NW5, UK";s:3:"lng";d:-0.1441111;s:3:"lat";d:51.5543545;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
            ],
            [
                'country'   => 'United Kingdom',
                'zipcode'   => 'NW6',
                'address'   => 'a:5:{s:7:"address";s:14:"London NW6, UK";s:3:"lng";d:-0.1970833;s:3:"lat";d:51.5437594;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
            ],
            [
                'country'   => 'United Kingdom',
                'zipcode'   => 'W2',
                'address'   => 'a:5:{s:7:"address";s:13:"London W2, UK";s:3:"lng";d:-0.1703541;s:3:"lat";d:51.5096281;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
            ],
            [
                'country'   => 'United Kingdom',
                'zipcode'   => 'W10',
                'address'   => 'a:5:{s:7:"address";s:14:"London W10, UK";s:3:"lng";d:-0.2146099;s:3:"lat";d:51.52269709999999;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
            ],

        ];

        $users = [
            'admin' => [
                [//1
                    'email'         => 'admin@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Admin',
                    'last_name'     => 'Admin',
                ]
            ],
            'buyer' => [
                [//2 M
                    'email'         => 'adolfo@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Swinney',
                    'last_name'     => 'Swinney',
                    'tagline'       => 'Embrace the power of information technology',
                    'description'   => 'Embrace the power of information technology advocates for embracing digital solutions to enhance productivity, connectivity, and innovation. It emphasizes leveraging IT tools and strategies to adapt to an increasingly digital world, fostering growth and resilience. This mantra champions the transformative potential of technology to drive progress and empower individuals and organizations alike.',
                    'address'       => [
                            'country'   => 'United Kingdom',
                            'zipcode'   => 'N1',
                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                    ]
                ],
                [//3 M
                    'email'         => 'anthony@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Anthony',
                    'last_name'     => 'Shao',
                    'tagline'       => 'Empowering through information technology',
                    'description'   => 'Empowering through information technology signifies harnessing digital tools to democratize access to knowledge, opportunities, and resources. It champions leveraging IT to bridge gaps, foster inclusion, and empower individuals and communities worldwide. This ethos embodies the transformative potential of technology to uplift and enable individuals to thrive in the digital age.',
                    'address'       => [
                        'country'   => 'United Kingdom',
                        'zipcode'   => 'N1',
                        'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                    ]
                ],
                [//4 M
                    'email'         => 'antony@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Antony',
                    'last_name'     => 'Clara',
                    'tagline'       => 'Harness the potential of information technology',
                    'description'   => 'Harness the potential of information technology advocates for maximizing the capabilities of IT to drive innovation, efficiency, and growth. It underscores the importance of strategic utilization of digital tools and systems to unlock new possibilities and achieve organizational objectives. Embracing this mindset empowers businesses and individuals to stay ahead in a rapidly evolving technological landscape.',
                    'address'       => [
                        'country'   => 'United Kingdom',
                        'zipcode'   => 'N1',
                        'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                    ]
                ],
                [//5 F
                    'email'         => 'arianne@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Arianne',
                    'last_name'     => 'Kearns',
                    'tagline'       => 'Embrace the digital revolution with information technology',
                    'description'   => 'Embrace the digital revolution with information technology urges embracing IT to navigate and thrive in an era of rapid technological advancement. It emphasizes leveraging digital solutions to innovate, transform operations, and stay competitive in the digital landscape. This mindset fosters adaptability and empowers individuals and organizations to harness the full potential of technology for success.',
                    'address'       => [
                        'country'   => 'United Kingdom',
                        'zipcode'   => 'N1',
                        'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                    ]
                ],
                [//6 F
                    'email'         => 'ava@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Ava',
                    'last_name'     => 'Nguyen',
                    'tagline'       => 'Navigating the future with information technology',
                    'description'   => 'Navigating the future with information technology champions leveraging IT to adapt, innovate, and excel in an ever-evolving landscape. It emphasizes strategic utilization of digital tools and data-driven insights to anticipate trends and seize opportunities for growth. Embracing this approach empowers individuals and organizations to chart a course towards success in the digital age.',
                    'address'       => [
                        'country'   => 'United Kingdom',
                        'zipcode'   => 'N1',
                        'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                    ]
                ],
            ],
            'seller' => [
                [//7 F
                    'email'         => 'baker@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Georgia',
                    'last_name'     => 'Baker',
                    'tagline'       => 'I trust information techonology',
                    'description'   => 'I am Georgia with a Bachelor of Science in Computer Science, completion of a Web Development Bootcamp, and an Advanced PHP Certification, this professional is equipped to excel in web development roles. They possess a strong foundation in computer science principles, coupled with specialized expertise in PHP programming language and web development frameworks. In their job, they likely design, develop, and maintain dynamic web applications, leveraging their comprehensive skill set to create robust and efficient online solutions.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'Bachelor of Science in Computer Science',
                                                'deg_description'   => 'Completed a rigorous program encompassing computer science fundamentals, algorithms, and data structures.',
                                                'deg_institue_name' => 'University of California, Berkeley',
                                                'deg_start_date'    => '2006-09-15',
                                                'deg_end_date'      => '2008-12-20',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'Web Development Bootcamp',
                                                'deg_description'   => 'Intensive training in modern web development technologies, including HTML, CSS, JavaScript, and responsive design.',
                                                'deg_institue_name' => 'Codecademy',
                                                'deg_start_date'    => '2008-03-10',
                                                'deg_end_date'      => '2010-06-25',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'Advanced PHP Certification',
                                                'deg_description'   => 'Advanced training in PHP programming, focusing on object-oriented programming, database integration, and security best practices.',
                                                'deg_institue_name' => 'Online Course',
                                                'deg_start_date'    => '2011-07-05',
                                                'deg_end_date'      => '2013-10-15',
                                                'is_ongoing'        => '0',
                                            ],
                                            
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'Discover the world of sustainable living.',
                                                'url'           => 'https://example1.com',
                                                'description'   => 'Embark on a journey where every choice echoes a commitment to harmony with the planet. Sustainable living intertwines mindful consumption with eco-conscious practices, cultivating a lifestyle that nurtures both Earth and humanity. From renewable energy to zero-waste habits, it\'s a tapestry of small actions with monumental impact. Join the global movement towards a future where sustainability thrives, one mindful decision at a time'
                                            ],
                                            [
                                                'title'         => 'Explore the future of AI with these insights.',
                                                'url'           => 'https://example1.com',
                                                'description'   => 'The future of AI is a dynamic landscape shaped by ongoing advancements in technology and evolving societal needs. With a focus on sustainability, AI will play a crucial role in optimizing resource allocation, reducing environmental impact, and fostering sustainable development across various sectors. By leveraging AI-driven innovations, such as predictive analytics, autonomous systems, and smart infrastructure, society can achieve greater efficiency, resilience, and harmony with the natural world.',
                                            ],
                                            [
                                                'title'         => 'Top travel destinations for 2024.',
                                                'url'           => 'https://example2.com',
                                                'description'   => 'In 2024, sustainable travel destinations are in the spotlight, with travelers seeking eco-friendly and culturally immersive experiences. From the lush rainforests of Costa Rica, offering adventurous eco-tourism opportunities and wildlife conservation efforts, to the serene landscapes of Iceland, where visitors can explore geothermal wonders while supporting sustainable practices. Additionally, destinations like Bhutan are gaining popularity for their commitment to carbon neutrality and emphasis on Gross National Happiness, providing a unique cultural and environmental experience.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//8 Male
                    'email'         => 'beau@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Beau',
                    'last_name'     => 'Simard',
                    'tagline'       => 'Endless possibilities with information techonology',
                    'description' => 'I\'m Beau, Data Science Analyst, Cybersecurity Specialist, and Blockchain Developer is a versatile professional adept at extracting insights from vast datasets, fortifying digital defenses, and implementing decentralized ledger technology. In their role as a Data Science Analyst, they analyze data to uncover trends, patterns, and actionable insights, guiding strategic decision-making. As a Cybersecurity Specialist, they design and implement measures to protect sensitive information and thwart cyber threats, ensuring the integrity and confidentiality of digital assets. Additionally, as a Blockchain Developer, they leverage blockchain technology to create secure, transparent, and immutable systems for managing transactions and records, revolutionizing processes across industries.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'Data Science Analyst',
                                                'deg_description'   => 'Leveraging data-driven insights to solve complex business challenges.',
                                                'deg_institue_name' => 'DataForge Labs',
                                                'deg_start_date'    => '2014-02-28',
                                                'deg_end_date'      => '2016-05-02',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'Cybersecurity Specialist',
                                                'deg_description'   => 'Protecting digital assets through proactive security measures and risk mitigation strategies.',
                                                'deg_institue_name' => 'SecureGuard Solutions',
                                                'deg_start_date'    => '2017-11-18',
                                                'deg_end_date'      => '2019-02-22',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'Blockchain Developer',
                                                'deg_description'   => 'Building decentralized solutions for tomorrow’s digital economy.',
                                                'deg_institue_name' => 'ChainCode Innovations',
                                                'deg_start_date'    => '2020-06-09',
                                                'deg_end_date'      => '2022-09-13',
                                                'is_ongoing'        => '0',
                                            ],
                                                                                        
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'Healthy eating habits you should adopt.',
                                                'url'           => 'https://example3.com',
                                                'description'   => 'Healthy eating habits are essential for maintaining overall well-being and vitality. Incorporating a variety of fruits, vegetables, whole grains, lean proteins, and healthy fats into your diet provides essential nutrients and promotes optimal health. Additionally, practicing portion control, staying hydrated, and limiting processed foods and added sugars contribute to a balanced and nourishing eating pattern.',
                                            ],
                                            [
                                                'title'         => 'Mastering the art of public speaking.',
                                                'url'           => 'https://example4.com',
                                                'description'   => 'Mastering the art of public speaking is a transformative skill that empowers individuals to communicate with confidence, clarity, and conviction. Through effective delivery and engaging storytelling, speakers captivate audiences and convey their message with impact. With practice and refinement, public speaking becomes a dynamic tool for influencing, inspiring, and leading others toward positive change.',
                                            ],
                                            [
                                                'title'         => 'Investment strategies for beginners.',
                                                'url'           => 'https://example5.com',
                                                'description'   => 'For beginners entering the world of investment, it\'s essential to start with a solid foundation. Consider diversifying your portfolio across different asset classes, such as stocks, bonds, and mutual funds, to spread risk. Additionally, prioritize understanding your risk tolerance and investment goals before making any decisions. Finally, stay informed through reputable financial resources and consider seeking advice from a financial advisor to tailor strategies to your individual needs.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//9 F
                    'email'         => 'beverlee@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Beverlee',
                    'last_name'     => 'Bark',
                    'tagline'       => 'Geek Software Engineer, Product Manager.',
                    'description'   => 'I am Beverlee, Software Engineer, Digital Product Manager, and UX/UI Designer collaboratively craft digital experiences that seamlessly merge functionality with user-centric design. The Software Engineer builds robust, scalable solutions, while the Digital Product Manager orchestrates the development process, aligning it with strategic goals and market needs. Meanwhile, the UX/UI Designer crafts intuitive interfaces, ensuring a delightful user journey and optimal engagement with the product. Together, they drive innovation and deliver compelling digital solutions tailored to meet both user expectations and business objectives.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BS Software Engineer',
                                                'deg_description'   => 'Developing innovative software solutions to meet industry demands.',
                                                'deg_institue_name' => 'Oxford University',
                                                'deg_start_date'    => '2010-02-15',
                                                'deg_end_date'      => '2012-06-20',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS Digital Product Manager',
                                                'deg_description'   => 'Leading the creation of digital products that enhance user experiences.',
                                                'deg_institue_name' => 'University of DigitalXpert Technologies',
                                                'deg_start_date'    => '2013-08-10',
                                                'deg_end_date'      => '2015-12-25',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'UX/UI Designer',
                                                'deg_description'   => 'Crafting visually stunning and user-friendly interfaces for digital platforms.',
                                                'deg_institue_name' => 'DesignGenius Studios',
                                                'deg_start_date'    => '2016-03-05',
                                                'deg_end_date'      => '2018-07-15',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'The impact of climate change on wildlife.',
                                                'url'           => 'https://example6.com',
                                                'description'   => 'Climate change poses significant threats to wildlife around the world. Rising temperatures disrupt ecosystems, altering habitats and migration patterns. Species are facing increased risks of extinction as they struggle to adapt to changing conditions, impacting biodiversity and ecosystem stability. Urgent action is needed to mitigate these effects and protect vulnerable wildlife populations for future generations.',
                                            ],
                                            [
                                                'title'         => 'Building a successful startup.',
                                                'url'           => 'https://example7.com',
                                                'description'   => 'Building a successful startup requires a compelling vision, innovative solutions, and strategic execution. From identifying market opportunities to assembling a talented team and securing funding, navigating the complexities of entrepreneurship demands resilience, adaptability, and a relentless pursuit of excellence. Through creativity, perseverance, and a focus on delivering value, startups can disrupt industries, create meaningful impact, and achieve sustainable growth.',
                                            ],
                                            [
                                                'title'         => 'The benefits of mindfulness meditation.',
                                                'url'           => 'https://example8.com',
                                                'description'   => 'Mindfulness meditation offers a plethora of benefits for mental, emotional, and physical well-being. By cultivating present-moment awareness and non-judgmental acceptance, it helps reduce stress, anxiety, and depression. Additionally, regular practice enhances focus, concentration, and cognitive function, leading to improved decision-making and overall resilience in the face of life\'s challenges.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ], 
                [//10 F
                    'email'         => 'chan@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Brooklyn',
                     'last_name'     => 'Chan',
                    'tagline'       => 'Insights, security, innovation through tech.',
                    'description' => 'I\'m Brooklyn, A Data Analyst, Cybersecurity Consultant, and Blockchain Developer adeptly navigate the intersection of data, security, and emerging technologies. They analyze vast datasets to extract actionable insights, fortify systems against cyber threats, and innovate blockchain solutions for secure and transparent transactions. Their expertise lies in harmonizing data-driven decision-making with robust cybersecurity measures and leveraging blockchain technology to revolutionize digital trust and integrity.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BS Data Science',
                                                'deg_description'   => 'Analyzing data to uncover insights and drive informed decision-making.',
                                                'deg_institue_name' => 'Superior University, London',
                                                'deg_start_date'    => '2019-09-28',
                                                'deg_end_date'      => '2021-01-02',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS Cybersecurity',
                                                'deg_description'   => 'Implementing robust security measures to safeguard against cyber threats.',
                                                'deg_institue_name' => 'IDH Institute of Computer Sciences',
                                                'deg_start_date'    => '2022-04-18',
                                                'deg_end_date'      => '2024-08-22',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS Data Science',
                                                'deg_description'   => 'Creating decentralized applications to revolutionize various industries.',
                                                'deg_institue_name' => 'LMC College',
                                                'deg_start_date'    => '2025-10-09',
                                                'deg_end_date'      => '2027-12-13',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'Top 10 tech gadgets of the year.',
                                                'url'           => 'https://example9.com',
                                                'description'   => 'As we reflect on the technological advancements of the past year, it\'s evident that innovation has thrived in the realm of gadgets. From intuitive smart home devices to groundbreaking wearables, the market has seen an array of products designed to enhance convenience and functionality in our daily lives. This roundup celebrates the ingenuity and utility of these cutting-edge tech gadgets, offering a glimpse into the exciting possibilities shaping our digital future.',
                                            ],
                                            [
                                                'title'         => 'The history of ancient civilizations.',
                                                'url'           => 'https://example10.com',
                                                'description'   => 'Embark on a captivating journey through the annals of time as you delve into the rich histories and vibrant cultures of ancient civilizations from every corner of the globe. Uncover the architectural marvels of ancient Egypt, the philosophical wisdom of classical Greece, and the technological innovations of the Mayans. From the mystique of Mesopotamia to the grandeur of the Roman Empire, each civilization offers a window into humanity\'s past, shaping our understanding of the world today.',
                                            ],
                                            [
                                                'title'         => 'Effective time management techniques.',
                                                'url'           => 'https://example11.com',
                                                'description'   => 'Discover strategies to optimize time management and elevate productivity levels with effective techniques. By honing time management skills, individuals can prioritize tasks, streamline workflows, and achieve goals more efficiently. Unlock your full potential by mastering the art of allocating time wisely and maximizing productivity in every aspect of life.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//11 F
                    'email'         => 'chapman@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Sarah',
                    'last_name'     => 'Chapman',
                    'tagline'       => 'Creative Researcher, Cloud Solutions Architect and AI Researcher.',
                    'description'   => "I am Sarah, An AI Research Scientist, Cloud Solutions Architect, and Mobile App Developer is a dynamic professional at the forefront of technological innovation. They delve into AI research, exploring new algorithms and methodologies to push the boundaries of artificial intelligence. As a Cloud Solutions Architect, they design and implement scalable and secure cloud infrastructure to support diverse applications and services. Additionally, as a Mobile App Developer, they craft intuitive and engaging mobile applications, leveraging their expertise in user experience design and software development to deliver seamless experiences across various platforms.",
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BS AI',
                                                'deg_description'   => 'Conducting cutting-edge research to advance artificial intelligence technologies.',
                                                'deg_institue_name' => 'RealWorld University',
                                                'deg_start_date'    => '2011-03-20',
                                                'deg_end_date'      => '2013-07-30',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS Cloud Solutions Architect',
                                                'deg_description'   => 'Designing scalable cloud infrastructure for enterprise applications.',
                                                'deg_institue_name' => 'CloudWorks College London',
                                                'deg_start_date'    => '2014-06-10',
                                                'deg_end_date'      => '2016-09-25',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS Computer Sciences',
                                                'deg_description'   => 'Developing high-performance mobile applications for various platforms.',
                                                'deg_institue_name' => 'Igloo University',
                                                'deg_start_date'    => '2017-01-05',
                                                'deg_end_date'      => '2019-04-15',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'Understanding blockchain technology.',
                                                'url'           => 'https://example12.com',
                                                'description'   => 'Blockchain technology, originally developed as the backbone of cryptocurrencies like Bitcoin, has emerged as a transformative force across various industries. Its decentralized and immutable ledger system enables secure and transparent transactions, paving the way for applications beyond finance. From supply chain management to healthcare records and voting systems, blockchain holds the potential to revolutionize how data is stored, verified, and shared, fostering trust and efficiency in diverse sectors.',
                                            ],
                                            [
                                                'title'         => 'The best books to read this summer.',
                                                'url'           => 'https://example13.com',
                                                'description'   => 'Indulge in the perfect summer reading experience with our curated list of must-read books. From gripping thrillers to heartwarming romances and thought-provoking non-fiction, these selections promise to captivate your imagination and enrich your leisure hours under the sun. Whether lounging on the beach or relaxing in the shade, these literary companions are sure to make your summer unforgettable.',
                                            ],
                                            [
                                                'title'         => 'The evolution of space exploration.',
                                                'url'           => 'https://example14.com',
                                                'description'   => 'Over the decades, space exploration has marked significant milestones, beginning with the launch of Sputnik 1 by the Soviet Union in 1957, initiating the space age. Advancements include the Apollo program, which culminated in the first human moon landing in 1969, and the development of reusable spacecraft like the Space Shuttle in the 1980s. More recently, robotic missions to Mars, ambitious plans for lunar colonization, and collaborations between space agencies and private companies signal a new era of exploration and discovery beyond Earth\'s atmosphere.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//12 M
                    'email'         => 'dewayne@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Dewayne',
                    'last_name'     => 'Beaudreau',
                    'tagline'       => 'Data, security, and blockchain innovation.',
                    'description'   => 'I am Dewayne, An IT Project Coordinator, Network Engineer, and E-commerce Manager is a versatile professional responsible for orchestrating the successful execution of IT projects, overseeing network infrastructure, and optimizing e-commerce platforms. They coordinate project timelines, resources, and deliverables, ensuring seamless collaboration among team members. As a network engineer, they design, implement, and maintain secure and efficient network systems to support the organization\'s operations. Additionally, as an e-commerce manager, they strategize and implement initiatives to drive online sales, enhance user experience, and maximize revenue through digital channels.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BS IT',
                                                'deg_description'   => 'Coordinating IT projects to ensure timely and successful completion.',
                                                'deg_institue_name' => 'Waterlo University Canada.',
                                                'deg_start_date'    => '2009-08-28',
                                                'deg_end_date'      => '2011-12-02',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'BS Network Engineer',
                                                'deg_description'   => 'Designing and managing secure and efficient network systems.',
                                                'deg_institue_name' => 'Gilphard University',
                                                'deg_start_date'    => '2012-11-18',
                                                'deg_end_date'      => '2014-03-22',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'Diploma in E-commerce Manager',
                                                'deg_description'   => 'Overseeing online sales platforms and enhancing customer experience.',
                                                'deg_institue_name' => 'ShopMaster Institute',
                                                'deg_start_date'    => '2015-05-09',
                                                'deg_end_date'      => '2017-07-13',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'How to create a successful blog.',
                                                'url'           => 'https://example15.com',
                                                'description'   => 'Starting and maintaining a popular blog requires dedication, consistency, and strategic planning. Begin by identifying your niche and target audience, then create high-quality, engaging content that provides value and resonates with your readers. Utilize social media, SEO optimization, and networking to promote your blog and build a loyal audience over time. Regularly interact with your readers, respond to comments, and adapt your content based on feedback to ensure continued growth and success.',
                                            ],
                                            [
                                                'title'         => 'The importance of cybersecurity.',
                                                'url'           => 'https://example16.com',
                                                'description'   => 'Understanding the critical aspects of cybersecurity is paramount in today\'s digital age. By educating yourself on cyber threats, data protection, and safe online practices, you can safeguard your personal information and privacy. Implementing strong passwords, keeping software updated, and being cautious of phishing attempts are essential steps to mitigate risks and protect yourself from cyber attacks.',
                                            ],
                                            [
                                                'title'         => 'Exploring the world of virtual reality.',
                                                'url'           => 'https://example17.com',
                                                'description'   => 'Delve into the realm of virtual reality (VR) technology and explore its latest advancements, which are revolutionizing various industries and applications. From immersive gaming experiences that transport players to fantastical realms to innovative training simulations that enhance learning and skill development, VR is pushing the boundaries of what\'s possible in entertainment, education, healthcare, and beyond. With increasingly lifelike visuals, intuitive interfaces, and interactive capabilities, VR is reshaping how we engage with digital content and unlocking new realms of creativity and innovation.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//13 F
                    'email'         => 'dixon@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Judy',
                    'last_name'     => 'Dixon',
                    'tagline' => 'Innovating Minds, Transforming Tech',
                    'description' => 'Hi, I am Judy, A Business Intelligence Analyst, Full Stack Developer, and IT Support Specialist is a dynamic professional responsible for optimizing data-driven decision-making, developing comprehensive software solutions, and ensuring seamless technology operations. As a Business Intelligence Analyst, they analyze complex datasets to extract actionable insights that drive strategic business decisions. In their role as a Full Stack Developer, they design and implement end-to-end software solutions, combining front-end and back-end development expertise to create user-friendly applications. Additionally, as an IT Support Specialist, they provide technical assistance and troubleshooting to ensure the smooth functioning of hardware, software, and network infrastructure, thereby facilitating uninterrupted business operations.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BS Business Intelligence Analyst',
                                                'deg_description'   => 'Providing strategic insights through data analysis and visualization.',
                                                'deg_institue_name' => 'InsightAnalytics Institute Texas',
                                                'deg_start_date'    => '2018-09-05',
                                                'deg_end_date'      => '2020-12-20',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'BS Software Development',
                                                'deg_description'   => 'Building end-to-end web applications with seamless user experiences.',
                                                'deg_institue_name' => 'WebGenics University',
                                                'deg_start_date'    => '2021-02-28',
                                                'deg_end_date'      => '2023-06-02',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS IT',
                                                'deg_description'   => 'Providing technical support and troubleshooting for IT systems.',
                                                'deg_institue_name' => 'Grahns University',
                                                'deg_start_date'    => '2024-05-15',
                                                'deg_end_date'      => '2026-08-20',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'The rise of renewable energy.',
                                                'url'           => 'https://example18.com',
                                                'description'   => 'The growth of renewable energy sources, such as solar, wind, and hydro power, represents a significant shift towards sustainable energy production. By harnessing natural resources without depleting them, renewables reduce greenhouse gas emissions and mitigate climate change. This transition fosters a cleaner environment, promoting biodiversity, improving air quality, and safeguarding ecosystems for future generations.',
                                            ],
                                            [
                                                'title'         => 'Top fitness trends to try.',
                                                'url'           => 'https://example19.com',
                                                'description'   => 'Stay ahead of the curve by staying informed about the latest fitness trends, from high-intensity interval training (HIIT) to mindful movement practices like yoga and Pilates. Discover how to seamlessly integrate these trends into your routine, whether through specialized classes, at-home workouts, or outdoor activities. Embracing these trends can invigorate your fitness journey, keeping you motivated and engaged while achieving your health and wellness goals.',
                                            ],
                                            [
                                                'title'         => 'A guide to personal finance management.',
                                                'url'           => 'https://example20.com',
                                                'description'   => 'Managing personal finances and building wealth require careful planning and strategic decision-making. Start by creating a budget to track expenses and identify areas for saving. Invest in assets that generate passive income, such as stocks, real estate, or mutual funds, and prioritize debt repayment to reduce financial burdens and secure long-term financial stability. Regularly review and adjust your financial plan to adapt to changing circumstances and maximize wealth accumulation over time.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//14 F
                    'email'         => 'elizbeth@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Elizbeth',
                    'last_name'     => 'Quillen',
                    'tagline'       => "Empowering seamless web experiences through automation.",
                    'description' => 'Hi I am Elizbeth, A Web Developer, DevOps Engineer, and Quality Assurance Tester is a versatile professional responsible for the seamless development and quality assurance of web applications. As a web developer, they design and implement user-friendly interfaces and functionalities. In their role as a DevOps engineer, they streamline the software development process by automating deployment pipelines and ensuring continuous integration and delivery. Additionally, as a quality assurance tester, they meticulously test and debug code to guarantee optimal performance, functionality, and user experience across various platforms and devices.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BS CS',
                                                'deg_description'   => 'Creating and maintaining functional and attractive websites.',
                                                'deg_institue_name' => 'Pface Institute of Computer Sciences',
                                                'deg_start_date'    => '2013-01-10',
                                                'deg_end_date'      => '2015-04-25',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS DevOps',
                                                'deg_description'   => 'Streamlining development and operations for continuous integration and delivery.',
                                                'deg_institue_name' => 'Gigabite Institute of Computer Sciences',
                                                'deg_start_date'    => '2016-07-05',
                                                'deg_end_date'      => '2018-10-15',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS Product Quality Assurance',
                                                'deg_description'   => 'Ensuring the quality and functionality of software through rigorous testing.',
                                                'deg_institue_name' => 'Ripha University',
                                                'deg_start_date'    => '2019-03-28',
                                                'deg_end_date'      => '2021-07-02',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'The art of effective communication.',
                                                'url'           => 'https://example21.com',
                                                'description'   => 'Effective communication is essential for success in both personal and professional spheres. Learning to articulate thoughts clearly, listen actively, and adapt communication styles enhances relationships and fosters mutual understanding. By honing these skills, individuals can navigate various situations with confidence and build stronger connections with others.',
                                            ],
                                            [
                                                'title'         => 'The benefits of lifelong learning.',
                                                'url'           => 'https://example22.com',
                                                'description'   => 'Continuous learning is essential for personal and professional growth as it allows individuals to adapt to evolving circumstances and acquire new skills. By embracing a mindset of lifelong learning, individuals can stay relevant in their fields, pursue their passions, and unlock new opportunities for advancement. Ultimately, continuous learning fosters intellectual curiosity, boosts confidence, and enriches life experiences, leading to a more fulfilling and dynamic life journey.',
                                            ],
                                            [
                                                'title'         => 'How to plan a sustainable garden.',
                                                'url'           => 'https://example23.com',
                                                'description'   => 'Creating an eco-friendly garden that supports local wildlife involves thoughtful planning and sustainable practices. Start by selecting native plants that provide food, shelter, and habitat for local birds, insects, and pollinators. Avoid chemical pesticides and fertilizers, opting instead for organic and natural alternatives to maintain a healthy and balanced ecosystem in your garden.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//15 M
                    'email'         => 'coleman@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Ann',
                    'last_name'     => 'Coleman',
                    'tagline' => 'Professional Content Writer',
                    'description' => 'I am Ann, an accomplished content writer driven by a deep passion for crafting captivating and informative materials that strike a chord with specific target audiences. My expertise spans a diverse range of content types, including compelling blog posts, engaging website copy, and persuasive marketing materials. At the heart of my work is a commitment to producing content that not only meets but exceeds client expectations.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BA Arts',
                                                'deg_description'   => 'Creating clear and concise technical documentation for software and hardware.',
                                                'deg_institue_name' => 'Punjab University',
                                                'deg_start_date'    => '2008-11-18',
                                                'deg_end_date'      => '2010-03-22',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MA English',
                                                'deg_description'   => 'Analyzing and improving IT systems to meet organizational needs.',
                                                'deg_institue_name' => 'Oxford University',
                                                'deg_start_date'    => '2010-06-09',
                                                'deg_end_date'      => '2012-09-13',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'Content Writing Specialist',
                                                'deg_description'   => 'Optimizing websites to rank higher in search engine results and drive traffic.',
                                                'deg_institue_name' => 'Isdnk Institute',
                                                'deg_start_date'    => '2013-10-15',
                                                'deg_end_date'      => '2015-01-20',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'Understanding the stock market.',
                                                'url'           => 'https://example24.com',
                                                'description'   => 'The stock market is a dynamic platform where investors buy and sell shares of publicly traded companies. It operates as a marketplace where buyers and sellers come together to determine prices based on supply and demand. Through this exchange, companies can raise capital to fund operations and expansion, while investors have the opportunity to earn returns on their investments through dividends and capital appreciation.',
                                            ],
                                            [
                                                'title'         => 'The psychology of happiness.',
                                                'url'           => 'https://example25.com',
                                                'description'   => 'Happiness is influenced by various factors including relationships, health, purpose, and personal fulfillment. Cultivating meaningful connections, prioritizing self-care, setting and pursuing goals aligned with one\'s values, and practicing gratitude are key to achieving happiness and overall well-being. By nurturing these aspects of life and maintaining a positive mindset, individuals can experience greater joy and satisfaction in their daily lives.',
                                            ],
                                            [
                                                'title'         => 'How to start a successful podcast.',
                                                'url'           => 'https://example26.com',
                                                'description'   => 'Embarking on the journey of podcasting requires more than just recording and uploading episodes. This comprehensive guide equips aspiring podcasters with the knowledge and strategies needed to not only launch but also cultivate a successful and influential podcast. From content creation and branding to audience engagement and monetization, every aspect of the podcasting process is explored to help creators navigate the competitive landscape and establish a thriving platform.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//16 F
                    'email'         => 'filomena@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Filomena',
                    'last_name'     => 'Galicia',
                    'tagline'       => "Empowering businesses through seamless IT solutions.",
                    'description' => 'I am Filomena, an IT consultant, network administrator, and database administrator is a versatile expert who optimizes an organization\'s IT infrastructure. As an IT consultant, they provide strategic guidance on technology solutions to improve business processes. In their network administrator role, they manage and secure the network, ensuring seamless connectivity and performance. As a database administrator, they oversee database systems, ensuring data integrity, accessibility, and security. This diverse expertise ensures robust, efficient, and secure IT operations.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BS IT',
                                                'deg_description'   => 'Providing expert advice on IT infrastructure and strategy.',
                                                'deg_institue_name' => 'Kndah Universitu',
                                                'deg_start_date'    => '2016-03-05',
                                                'deg_end_date'      => '2018-06-15',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'BS CS',
                                                'deg_description'   => 'Managing and maintaining network systems to ensure optimal performance.',
                                                'deg_institue_name' => 'Tamheed University',
                                                'deg_start_date'    => '2019-07-28',
                                                'deg_end_date'      => '2021-10-02',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS Database Administrator',
                                                'deg_description'   => 'Administering and securing database systems for efficient data management.',
                                                'deg_institue_name' => 'Shaopl Institute',
                                                'deg_start_date'    => '2022-02-18',
                                                'deg_end_date'      => '2024-05-22',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'The benefits of a plant-based diet.',
                                                'url'           => 'https://example27.com',
                                                'description'   => 'Adopting a plant-based diet offers numerous health benefits, including lower risks of heart disease, obesity, and certain cancers due to the abundance of vitamins, minerals, and antioxidants found in fruits, vegetables, grains, and legumes. Moreover, plant-based diets are environmentally sustainable, requiring fewer natural resources like water and land while producing fewer greenhouse gas emissions compared to animal agriculture. Embracing this dietary choice not only promotes personal well-being but also contributes to a healthier planet for future generations.',
                                            ],
                                            [
                                                'title'         => 'The role of technology in education.',
                                                'url'           => 'https://example28.com',
                                                'description'   => 'Technology is revolutionizing the education sector by providing innovative tools and platforms that enhance learning experiences. From interactive online courses and virtual classrooms to personalized learning apps and educational games, technology is breaking down geographical barriers and making education more accessible to students worldwide. With the integration of AI, AR, and VR technologies, educators can tailor lessons to individual needs, engage students in immersive learning environments, and foster collaboration and creativity in the digital age.',
                                            ],
                                            [
                                                'title'         => 'Traveling on a budget.',
                                                'url'           => 'https://example29.com',
                                                'description'   => 'Explore the globe without emptying your wallet with these savvy tips and tricks for budget-friendly travel. Embrace flexibility by traveling during off-peak seasons or opting for alternative accommodations like hostels, homestays, or vacation rentals. Take advantage of budget airlines, public transportation, and local cuisine to experience the world\'s wonders without overspending.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//17 M
                    'email'         => 'ford@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Steven',
                    'last_name'     => 'Ford',
                    'tagline'       => 'The blend of Information Security Analyst and Web Developer.',
                    'description'   => 'Hi, I am Steven, An IT Operations Manager, Information Security Analyst, and Web Designer is a versatile professional overseeing the smooth functioning of IT systems, ensuring robust cybersecurity measures, and creating user-friendly web interfaces. They manage daily IT operations, protect data from cyber threats, and design engaging, secure websites that enhance user experience. This blend of roles guarantees efficient IT management, strong security protocols, and visually appealing, functional web design.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BS CS',
                                                'deg_description'   => 'Overseeing IT operations to ensure smooth and efficient workflows.',
                                                'deg_institue_name' => 'Lamhad Univesity',
                                                'deg_start_date'    => '2010-11-15',
                                                'deg_end_date'      => '2013-02-20',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS CS',
                                                'deg_description'   => 'Protecting sensitive information by implementing security protocols.',
                                                'deg_institue_name' => 'Janhs University London',
                                                'deg_start_date'    => '2014-05-10',
                                                'deg_end_date'      => '2016-08-25',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS App Development',
                                                'deg_description'   => 'Creating visually appealing and user-friendly websites.',
                                                'deg_institue_name' => 'CreativeWeb Institute',
                                                'deg_start_date'    => '2017-01-05',
                                                'deg_end_date'      => '2019-04-15',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'The future of work: Remote and hybrid models.',
                                                'url'           => 'https://example30.com',
                                                'description'   => 'The shift towards remote and hybrid work models reflects a fundamental change in how businesses operate, driven by advancements in technology and evolving workplace preferences. Remote work allows for flexibility, increased productivity, and access to a global talent pool, but also raises challenges such as maintaining team cohesion and work-life balance. Embracing hybrid models, which blend remote and in-office work, can offer the best of both worlds, fostering collaboration while accommodating individual needs and preferences.',
                                            ],
                                            [
                                                'title'         => 'The importance of mental health.',
                                                'url'           => 'https://example31.com',
                                                'description'   => 'Understanding the significance of mental health is crucial for overall well-being. It involves recognizing and addressing factors that influence mental well-being, such as stress, relationships, and self-care practices. By prioritizing activities like therapy, mindfulness, exercise, and fostering supportive relationships, individuals can maintain optimal mental health and resilience.',
                                            ],
                                            [
                                                'title'         => 'The best outdoor activities for families.',
                                                'url'           => 'https://example32.com',
                                                'description'   => 'Discover a plethora of fun and engaging outdoor activities tailored for families, promising unforgettable moments and bonding experiences. From hiking picturesque trails and picnicking in scenic parks to embarking on nature scavenger hunts and exploring local wildlife, there\'s something for everyone to enjoy amidst the great outdoors. These adventures foster connection, laughter, and cherished memories, making them ideal for quality family time away from screens and distractions.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//18 F
                    'email'         => 'gilberte@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Gilberte',
                    'last_name'     => 'Kreger',
                    'tagline'       => 'Your next IT Support Analyst or Cloud Engineer is here.',
                    'description' => 'I\'m Gilberte, A System Administrator, IT Support Analyst, and Cloud Engineer is a versatile IT professional responsible for maintaining and optimizing an organization\'s IT infrastructure. As a System Administrator, they ensure the smooth operation of servers and networks. In the IT Support Analyst role, they provide technical assistance to resolve user issues. As a Cloud Engineer, they design and manage cloud-based solutions to enhance scalability and efficiency. This blend of roles ensures reliable, responsive, and modern IT services.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BS System Administrator',
                                                'deg_description'   => 'Ensuring reliable operation of IT systems and network infrastructure.',
                                                'deg_institue_name' => 'Solutions Institute',
                                                'deg_start_date'    => '2020-05-15',
                                                'deg_end_date'      => '2022-08-20',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS IT Support Analyst',
                                                'deg_description'   => 'Providing technical support and resolving IT issues for end-users.',
                                                'deg_institue_name' => 'SupportTech University',
                                                'deg_start_date'    => '2011-10-10',
                                                'deg_end_date'      => '2013-12-25',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS Cloud Engineer',
                                                'deg_description'   => 'Developing and managing cloud-based solutions to enhance scalability.',
                                                'deg_institue_name' => 'CloudWorks Technologies & University',
                                                'deg_start_date'    => '2014-04-05',
                                                'deg_end_date'      => '2016-07-15',
                                                'is_ongoing'        => '0',
                                            ],
                                            
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'How to achieve work-life balance.',
                                                'url'           => 'https://example33.com',
                                                'description'   => 'Achieving work-life balance involves prioritizing personal well-being, setting boundaries, and managing time effectively. It requires fostering healthy habits, delegating tasks, and learning to disconnect from work when needed. Striking a balance between professional responsibilities and personal life promotes fulfillment, reduces stress, and enhances overall happiness and productivity.',
                                            ],
                                            [
                                                'title'         => 'The science behind sleep and health.',
                                                'url'           => 'https://example34.com',
                                                'description'   => 'Understanding the science behind sleep and health unveils the crucial role of quality rest in maintaining overall well-being. It delves into the intricate mechanisms of sleep cycles, neurotransmitters, and circadian rhythms that impact physical and mental health. Exploring this connection reveals the profound importance of prioritizing sleep for optimal health, cognitive function, and emotional resilience.',
                                            ],
                                            [
                                                'title'         => 'Top tips for effective networking.',
                                                'url'           => 'https://example35.com',
                                                'description'   => 'Top tips for effective networking involve building genuine connections, fostering mutual benefits, and maintaining a proactive approach. It includes active listening, asking insightful questions, and following up promptly to nurture relationships. Leveraging these strategies cultivates a strong network, opening doors to opportunities, collaborations, and professional growth.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//19 F
                    'email'         => 'hunter@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Cynthia',
                    'last_name'     => 'Hunter',
                    'tagline'       => "A full stack developer having vast development experience",
                    'description' => 'I\'m Cynthia, A Front-End Developer, Back-End Developer, and Machine Learning Engineer is a versatile tech professional. They create seamless user experiences through front-end development, build robust server-side functionalities as a back-end developer, and integrate intelligent systems by designing machine learning models. This combination ensures comprehensive, dynamic, and data-driven applications.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BS Front-End Developer',
                                                'deg_description'   => 'Building responsive and interactive web interfaces for users.',
                                                'deg_institue_name' => 'Interactive Institute',
                                                'deg_start_date'    => '2017-02-28',
                                                'deg_end_date'      => '2019-05-02',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS Back-End Developer',
                                                'deg_description'   => 'Creating and maintaining server-side application logic.',
                                                'deg_institue_name' => 'ServerSide Institute',
                                                'deg_start_date'    => '2020-11-18',
                                                'deg_end_date'      => '2022-02-22',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS Machine Learning Engineer',
                                                'deg_description'   => 'Developing algorithms and models to enable intelligent systems.',
                                                'deg_institue_name' => 'AI & ML Institute',
                                                'deg_start_date'    => '2013-05-03',
                                                'deg_end_date'      => '2015-08-07',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'The rise of e-commerce.',
                                                'url'           => 'https://example36.com',
                                                'description'   => 'The rise of e-commerce has revolutionized retail, providing unparalleled convenience and accessibility for consumers worldwide. Driven by technological advancements and changing shopping behaviors, it has expanded market reach and transformed business models. This digital shift continues to shape the future of commerce, emphasizing efficiency, personalization, and innovation.',
                                            ],
                                            [
                                                'title'         => 'The basics of digital marketing.',
                                                'url'           => 'https://example37.com',
                                                'description'   => 'The basics of digital marketing encompass strategies and techniques to promote products or services using digital channels such as social media, email, and search engines. It involves understanding target audiences, creating engaging content, and analyzing data to optimize campaigns for maximum impact. Embracing digital marketing fundamentals empowers businesses to reach their audience effectively in the digital age.',
                                            ],
                                            [
                                                'title'         => 'The importance of cultural diversity.',
                                                'url'           => 'https://example38.com',
                                                'description'   => 'The importance of cultural diversity lies in its capacity to enrich societies, foster understanding, and promote inclusivity. Embracing diverse perspectives, traditions, and values enhances creativity, innovation, and social cohesion. Recognizing and celebrating cultural diversity is essential for building harmonious communities and thriving in a globalized world.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//20 F
                    'email'         => 'Inocencia@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Inocencia',
                    'last_name'     => 'Langenfeld',
                    'tagline' => 'Tech Evolution Starts Here',
                    'description' => 'I\'m Inocencia, A Robotics Engineer, Technical Support Engineer, and IT Infrastructure Manager is a versatile expert responsible for designing and developing robotic systems, providing technical assistance, and managing the organization\'s IT infrastructure. They ensure seamless integration and functionality of robotics, address and resolve technical issues, and maintain robust, efficient IT operations to support the organization\'s technological needs. This combination of roles ensures innovative robotics solutions, effective technical support, and a resilient IT infrastructure.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BS Robotics Engineer',
                                                'deg_description'   => 'Designing and building robotic systems for various applications.',
                                                'deg_institue_name' => 'Institute of RoboTech',
                                                'deg_start_date'    => '2016-03-20',
                                                'deg_end_date'      => '2018-06-30',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS Technical Support Engineer',
                                                'deg_description'   => 'Providing technical assistance and troubleshooting for IT products.',
                                                'deg_institue_name' => 'TechAssist University',
                                                'deg_start_date'    => '2019-08-10',
                                                'deg_end_date'      => '2021-11-25',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS IT',
                                                'deg_description'   => 'Overseeing the design and implementation of IT infrastructure.',
                                                'deg_institue_name' => 'InfraTech Institute of Sciences',
                                                'deg_start_date'    => '2012-01-05',
                                                'deg_end_date'      => '2014-04-15',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'The benefits of regular exercise.',
                                                'url'           => 'https://example39.com',
                                                'description'   => 'Regular exercise offers extensive benefits, including improved cardiovascular health, enhanced muscular strength, and better mental well-being. It aids in weight management, reduces the risk of chronic diseases, and boosts energy levels. Engaging in consistent physical activity promotes overall health and contributes to a higher quality of life.',
                                            ],
                                            [
                                                'title'         => 'How to cultivate a growth mindset.',
                                                'url'           => 'https://example40.com',
                                                'description'   => 'Cultivating a growth mindset involves embracing challenges, persisting through setbacks, and viewing effort as a path to mastery. It requires recognizing the value of learning from criticism and finding inspiration in others successes. Adopting this mindset fosters resilience, continuous development, and a passion for lifelong learning.',
                                            ],
                                            [
                                                'title'         => 'The history of modern art.',
                                                'url'           => 'https://example41.com',
                                                'description'   => 'The history of modern art traces the evolution of artistic expression from the late 19th century to the present, characterized by innovative techniques and diverse movements. It encompasses groundbreaking styles such as Impressionism, Cubism, and Abstract Expressionism, reflecting societal changes and cultural shifts. This dynamic era redefined aesthetics and expanded the boundaries of creativity and interpretation.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//21 F
                    'email'         => 'Isobel@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Isobel',
                    'last_name'     => 'Jones',
                    'tagline'       => 'Everything is possible with AI colaboratively IT',
                    'description'   => 'I\'m Isobel. An IT auditor, risk manager, and AI developer combines expertise in evaluating the security and efficiency of information systems, managing potential risks, and creating innovative AI solutions. They ensure compliance with regulatory standards, develop strategies to mitigate data threats, and drive technological advancement within the organization. This blend of skills supports robust IT governance and cutting-edge development.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'BS IT',
                                                'deg_description'   => 'Conducting audits to ensure compliance with IT policies and regulations.',
                                                'deg_institue_name' => 'AuditTech Institute',
                                                'deg_start_date'    => '2015-09-28',
                                                'deg_end_date'      => '2018-01-02',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'BS IT Risk Manager',
                                                'deg_description'   => 'Identifying and mitigating risks within IT systems and processes.',
                                                'deg_institue_name' => 'Solutions Institute',
                                                'deg_start_date'    => '2018-04-18',
                                                'deg_end_date'      => '2020-07-22',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'MS AI',
                                                'deg_description'   => 'Creating AI-based applications to solve complex problems.',
                                                'deg_institue_name' => 'AIDevelopers Innstitute',
                                                'deg_start_date'    => '2021-10-09',
                                                'deg_end_date'      => '2023-12-13',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'The benefits of outdoor recreation.',
                                                'url'           => 'https://example42.com',
                                                'description'   => 'Outdoor recreation offers numerous benefits, including improved physical health, mental well-being, and stress reduction. Engaging in activities like hiking, biking, and camping fosters a deeper connection with nature and enhances social bonds. Additionally, spending time outdoors promotes a sense of adventure and boosts overall quality of life.',
                                            ],
                                            [
                                                'title'         => 'Understanding financial markets.',
                                                'url'           => 'https://example43.com',
                                                'description'   => 'Understanding financial markets is essential for making informed investment decisions and achieving financial goals. It involves analyzing market trends, economic indicators, and the performance of various financial instruments. Gaining this knowledge helps individuals and businesses navigate complexities, manage risks, and capitalize on opportunities for growth and profitability.',
                                            ],
                                            [
                                                'title'         => 'The role of innovation in business.',
                                                'url'           => 'https://example44.com',
                                                'description'   => 'Innovation drives business success by fostering creativity, enhancing efficiency, and opening new market opportunities. It enables companies to stay competitive, adapt to changing consumer needs, and improve products and services. Embracing innovation is crucial for sustainable growth and long-term profitability in a dynamic marketplace.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
                [//22 M
                    'email'         => 'James@amentotech.com',
                    'password'      => 'google',
                    'first_name'    => 'Louis',
                    'last_name'     => 'James',
                    'tagline'       => 'Unleashing Digital Potential',
                    'description'   => 'Hi I\'m Louis A Digital Transformation Specialist, Technical Account Manager, and IT Trainer is a versatile professional who drives technological change, manages client relationships, and educates teams. As a Digital Transformation Specialist, they lead initiatives to modernize business processes and integrate new technologies. In their role as a Technical Account Manager, they serve as the primary technical contact for clients, ensuring satisfaction and addressing technical needs. As an IT Trainer, they develop and deliver training programs to enhance employees technical skills and knowledge.',
                    'languages'     => [ 17, 33],
                    'skills'        => range(1, 14),
                    'education'     => [
                                            [
                                                'deg_title'         => 'Bacholers in Digital Transformation Specialist',
                                                'deg_description'   => 'Driving digital transformation initiatives to enhance business processes.',
                                                'deg_institue_name' => 'DigitalTransform Ltd.',
                                                'deg_start_date'    => '2011-03-15',
                                                'deg_end_date'      => '2013-06-20',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'Masters in Technical Account Manager',
                                                'deg_description'   => 'Managing technical aspects of client accounts to ensure satisfaction.',
                                                'deg_institue_name' => 'TechAccount Institute',
                                                'deg_start_date'    => '2014-08-10',
                                                'deg_end_date'      => '2016-11-25',
                                                'is_ongoing'        => '0',
                                            ],
                                            [
                                                'deg_title'         => 'IT Management',
                                                'deg_description'   => 'Providing training and development for IT professionals.',
                                                'deg_institue_name' => 'TechTrain Inst.',
                                                'deg_start_date'    => '2017-05-05',
                                                'deg_end_date'      => '2019-08-15',
                                                'is_ongoing'        => '0',
                                            ],
                                        ],
                    'portfolio'     => [
                                            [
                                                'title'         => 'How to improve your writing skills.',
                                                'url'           => 'https://example45.com',
                                                'description'   => 'Mastering effective writing requires consistent practice, a solid grasp of grammar and style, and keen attention to detail. Enhance your skills by reading extensively, seeking constructive feedback, and revising your work diligently. Engage in varied writing exercises, explore different genres, and stay committed to continuous learning and improvement.',
                                            ],
                                            [
                                                'title'         => 'The importance of community service.',
                                                'url'           => 'https://example46.com',
                                                'description'   => 'Community service plays a vital role in fostering social cohesion and addressing local needs, creating a positive impact on both individuals and communities. It cultivates empathy, enhances personal growth, and strengthens civic responsibility. Engaging in volunteer work enriches lives, builds connections, and promotes a sense of belonging and purpose.',
                                            ],
                                            [
                                                'title'         => 'The future of transportation.',
                                                'url'           => 'https://example47.com',
                                                'description'   => 'The future of transportation promises revolutionary advancements with the integration of autonomous vehicles, electric propulsion, and sustainable infrastructure. Innovations like hyperloop systems and urban air mobility are set to redefine travel efficiency and environmental impact. As technology evolves, the focus will shift towards smart, connected, and eco-friendly transportation solutions, transforming the way we move and interact.',
                                            ],
                                        ],
                    'address'       => [
                                        
                                            'country'   => 'United Kingdom',
                                            'zipcode'   => 'N1',
                                            'address'   => 'a:5:{s:7:"address";s:13:"London N1, UK";s:3:"lng";d:-0.08813879999999999;s:3:"lat";d:51.5412621;s:27:"administrative_area_level_1";a:2:{s:9:"long_name";s:7:"England";s:10:"short_name";s:7:"England";}s:7:"country";a:2:{s:9:"long_name";s:14:"United Kingdom";s:10:"short_name";s:2:"GB";}}',
                                        
                                        ]
                ],
            ],
        ];

        $image_seq      = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22];
        $seller_types   = setting('_seller.seller_business_types');
        $sellerTypes    = !empty($seller_types) ? array_column($seller_types, 'business_types') : [];

        // Seller portfolios
        $portfolio_iamge = [1,2,3];

        // seller social links
        $social_linsks = [
            [
                'name'  =>  'facebook',
                'url'   =>  'https://www.facebook.com',
            ],
            [
                'name'  =>  'linkedin',
                'url'   =>  'https://linkedin.com',
            ],
            [
                'name'  =>  'twitter',
                'url'   =>  'https://twitter.com'
            ],
            [
                'name'  =>  'dribbble',
                'url'   =>  'https://dribbble.com'
            ],
            [
                'name'  =>  'google',
                'url'   =>  'https://www.google.com',
            ],
            [
                'name'  =>  'twitch',
                'url'   =>  'https://www.twitch.tv'
            ],
            [
                'name'  =>  'instagram',
                'url'   =>  'https://www.instagram.com'
            ]
        ];
        $addrass = '';
        foreach($users as $role_name => $accounts){
            foreach($accounts as $seq_no => $account){
            $checkAccount = User::where('email', $account['email'])->exists();
                if(!$checkAccount){
                    $user = User::create([
                        'email'             => sanitizeTextField($account['email']),
                        'password'          => Hash::make($account['password']),
                        'email_verified_at' => date("Y-m-d H:i:s"),
                        'status'            => 'activated',
                    ]);
                
                    $role_id = getRoleByName($role_name);
                    // create new profile with role
                    $checkprofile = Profile::where('user_id',$user->id)->exists();
                    if ($role_name === 'buyer' || $role_name === 'seller') {
                        $addrass = $account['address'];
                    }
                    // $addrass = $addresses[rand(0, 6)];
                    if(!$checkprofile){
    
                        $file           = $image_seq[$seq_no];
                        $existFile      = public_path().'/demo-content/users/avatar-'.$file.'.webp';
                        $directoryUrl   = storage_path('/app/public/profiles');

                        if ( !is_dir( $directoryUrl ) ) {
                            File::makeDirectory($directoryUrl, 0777, true);
                        }

                        $newFileName = 'avatar-'.$file.'.webp';
                        $newFilePath = storage_path('/app/public/profiles/');
                        $fileInfo    = pathinfo($newFilePath.$newFileName);

                        $i = 0;
                        while (file_exists($newFilePath.$newFileName)) {
                            $i++;
                            $newFileName = $fileInfo["filename"] . "-" . $i . "." . $fileInfo["extension"];
                        }

                        File::copy($existFile, $newFilePath.$newFileName);

                        $profile = Profile::create([
                            'user_id'       => $user->id,
                            'first_name'    => $account['first_name'],
                            'last_name'     => $account['last_name'],
                            'slug'          => strtolower($account['first_name'].' '.$account['last_name']),
                            'image'         => 'profiles/'.$newFileName,
                            'role_id'       => $role_id,
                            'tagline'       => !empty($account['tagline']) ? $account['tagline'] : null,
                            'description'   => $role_name == 'buyer' ? $account['description'] : $account['description'] ?? '',
                            'country'       => $addrass['country'] ?? '',
                            'zipcode'       => $addrass['zipcode'] ?? '',
                            'address'       => $addrass['address'] ?? '',
                            'seller_type'   => $sellerTypes[rand(1,6)],
                        ]);

                        $profile->skills()->select('id')->sync($account['skills'] ?? '');
                        $profile->languages()->select('id')->sync($account['languages'] ?? '');

                    }

                    $user->assignRole( $role_id );

                    if( in_array($role_name, ['buyer','seller']) ){
                        // create user account settings
                        $checkAccountSetting = UserAccountSetting::where('user_id',$user->id)->exists();
                        if(!$checkAccountSetting){
                            $UserAccountSetting = new UserAccountSetting();
                            $UserAccountSetting->hourly_rate    = rand(50,80);
                            $UserAccountSetting->verification   = 'approved';
                            $UserAccountSetting->user()->associate($user->id);
                            $UserAccountSetting->save();
                        }

                        if($role_name == 'seller'){
                            $education = [];
                            
                            foreach( $account['education']  as $single ){
                                // dd($single['deg_description']);
                                $education[] = [
                                    'profile_id'        => $profile->id,
                                    'deg_title'         => $single['deg_title'],
                                    'deg_institue_name' => $single['deg_institue_name'],
                                    'deg_description'   => $single['deg_description'],
                                    'deg_start_date'    => $single['deg_start_date'],
                                    'deg_end_date'      => $single['deg_end_date'],
                                    'is_ongoing'        => $single['is_ongoing'],
                                    'created_at'        => new DateTime(),
                                    'updated_at'        => new DateTime(),
                                ];
                            }

                            Education::insert($education);

                            // insert seller portfolios
                            foreach($account['portfolio'] as $index => $single){
                                $attachments    = [];
                                $image_detail   = uploadDemoImage('portfolios','portfolios', 'item-'.( $index + 1 ).'.webp');
                                $attachments['files'][time().'_'.$index]  = (object) $image_detail; 
                                SellerPortfolio::create([
                                    'profile_id'    => $profile->id,
                                    'title'         => $single['title'],
                                    'url'           => $single['url'],
                                    'description'   => $single['description'],
                                    'attachments'   => serialize($attachments),
                                ]);
                            }

                            // insert social links
                            $records    = [];
                            foreach($social_linsks as $link){
                                $records[] = [
                                    'profile_id'    => $profile->id,
                                    'name'          => $link['name'],
                                    'url'           => $link['url'],
                                    'created_at'    => new DateTime(),
                                    'updated_at'    => new DateTime(),
                                ];
                            }
                            SellerSocialLink::insert($records);
                        }
                    }
                }
            }
        }
    }
}


