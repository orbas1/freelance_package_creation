<?php

namespace Database\Seeders;
use File;
use DateTime;

use App\Models\Gig\Gig;
use App\Models\Gig\GigPlan;
use App\Models\Gig\GigFaq;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DefaultGigs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->defaultGigs();
    }

    /**
     * Create dummy gigs.
     */
    public function defaultGigs(){
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Gig::truncate();
        DB::table('gig_category_link')->truncate();
        GigPlan::truncate();
        GigFaq::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $gig_description = '<div class="tk-text-wrapper">
                            <p>Hello sagittis, sed ulputate consequat pharetra. Leo mollis amet, duis elite musta nibhae quisque uate phaslus necerat scelerse. Sed turpis ullamcorper sed sit a vel pharetra porttitor odio non elit diam cursues Siet non, est curatur odion netus idsit enim consectur hendret mi, eget purus odio pellentes suspende. Sit nunc arcu vestibuum etarcu. Cursus fringilla commodo id aliquam commodo nisle suspendisse aemetneta auctor nonate volutpat ante est tempus enim ipsam voluptatem quiaptas sit aspernatur aut odit aute fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porero quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam eiustam eidi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid extmishea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esseam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem antium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                            <ul>
                                <li>Cupiditate non provident, similique sunt in culpame magni dolores eos qui ratione</li>
                                <li>Quiofficia deserunt mollitia animi id est laborum etalorum voluptatem sequite</li>
                                <li>Et harum quidem rerum facilis expedita porero quisquam est, qui dolorem ipsum quia</li>
                                <li>Nam libero tempore cum soluta dolor sit amet consectetur adipisci velitem</li>
                            </ul>
                            <h3>What more can expect</h3>
                            <p>Nemo enim ipsam voluptatem quiaptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniores eos qui ratione voluptatem sequi nesciunt. Neque porero quisquam est, qui dolorem ipsum quia doluor sit amet consectetur, adipisci velit, sed quia non numquam eiustam modi tempora incidunt ut labore etolore magnam aliquam quaerat voluptatem.</p>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid extmishea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esseam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                            <p>Nemo enim ipsam voluptatem quiaptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniores eos qui ratione voluptatem sequi nesciunt. Neque porero quisquam est, qui dolorem ipsum quia doluor sit amet consectetur, adipisci velit, sed quia non numquam eiustam modi tempora incidunt ut labore etolore magnam aliquam quaerat voluptatem.</p>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid extmishea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esseam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                        </div>';


        $gig_faq_list = [
            [
                'question'	=> 'Apply these 6 secret techniques to improve WordPress development',
                'answer'    => 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt.',
            ],
            [
                'question'  => '6 enticing ways to improve your WordPress development skills',
                'answer'    => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.",
            ],
            [
                'question'  => 'Top 80 quotes on WordPress development',
                'answer'    => "Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt.",
            ],
            [
                'question'  => 'How to make your WordPress development look amazing in 6 days',
                'answer'    => "Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt.",
            ],
            [
                'question'  => 'How to something your software projects',
                'answer'    => "Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt.",
            ],
            [
                'question'  => 'Is software projects a scam?',
                'answer'    => "Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt.",
            ],
        ];

        $gig_plan_list = [
            [
                'title'         => 'Basic',
                'description'   => 'Adipisicing eliate adoems teme atpoir likuie norie acima amtetams.',
                'delivery_time' => rand(1,3),
                'is_featured'   => rand(0,1),
                'options'       => null,
            ],
            [
                'title'         => 'Papular',
                'description'   => 'Adipisicing eliate adoems teme atpoir likuie norie acima amtetams.',
                'delivery_time' => rand(4,5),
                'is_featured'   => rand(0,1),
                'options'       => null,
            ],
            [
                'title'         => 'Premium',
                'description'   => 'Adipisicing eliate adoems teme atpoir likuie norie acima amtetams.',
                'delivery_time' => rand(6,7),
                'is_featured'   => rand(0,1),
                'options'       => null,
            ],
        ];

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
        $gigs = [
            [ //1
                'author_id'         => 7,
                'title'             => 'I Will write REST APi in react for website',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>When it comes to building a dynamic and interactive website, integrating a RESTful API with React can greatly enhance its functionality and user experience. With my expertise in React development and API integration, I will write a robust REST API for your website, ensuring seamless communication between the front-end and back-end.</p>
                                        <p>Using industry best practices, I will design and implement RESTful endpoints that provide access to your websites data and functionality. Whether you need to retrieve user information, update content dynamically, or perform other CRUD operations, I will create APIs that meet your specific requirements.</p>
                                        <p>With React, I will then consume these APIs and leverage the data to create interactive UI components that respond in real-time to user actions. From authentication and authorization to data fetching and state management, I will handle all aspects of API integration to ensure your website delivers a smooth and efficient user experience.</p>
                                        <ul>
                                            <li>Design and implementation of RESTful endpoints</li>
                                            <li>Data fetching and manipulation using React</li>
                                            <li>Authentication and authorization for secure access</li>
                                            <li>Optimization for performance and scalability</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to writing the REST API and integrating it with React, I provide comprehensive testing and documentation to ensure the reliability and maintainability of your website. I also offer ongoing support and maintenance to address any issues and implement future enhancements.</p>
                                        <p>With my expertise in React and API development, I will empower your website with advanced features and functionality that enhance its value and usability. Lets work together to create a powerful and dynamic web presence that exceeds your expectations.</p>
                                        <p>Contact me today to discuss your project requirements and take the first step towards building a high-performing website with React and REST APIs.</p>
                                        </div>',
                'attachments'       => [ 1,2,3],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will write a simple REST API in React for your website, including basic CRUD operations for one resource.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will write a comprehensive REST API in React for your website, including advanced CRUD operations, authentication, and multiple resources.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will write a fully-featured REST API in React for your website, including advanced CRUD operations, authentication, multiple resources, and real-time updates with WebSockets.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I integrate a REST API in a React website?',
                        'answer'    => 'Integrating a REST API into your React website involves fetching data from the server-side using HTTP requests. You can achieve this using libraries like Axios or the built-in fetch API provided by JavaScript. By making asynchronous calls to the API endpoints, you can retrieve data and update your React components accordingly, ensuring a dynamic and responsive user experience.',
                    ],
                    [
                        'question'  => 'What are the key steps to develop a REST API in React for a website?',
                        'answer'    => "Developing a REST API in React for your website involves several key steps. Firstly, you need to design your API endpoints, specifying the resources and operations available. Then, you'll implement these endpoints using a server-side framework like Express.js or Django Rest Framework. Once your API is built, you'll integrate it into your React application, making HTTP requests to interact with the backend and fetch or manipulate data as needed.",
                    ],
                    [
                        'question'  => 'Why is it essential to use a REST API with React for website development?',
                        'answer'    => "Utilizing a REST API with React for website development offers several advantages. Firstly, it promotes a separation of concerns between the frontend and backend, allowing for more modular and maintainable code. Additionally, REST APIs facilitate communication between different parts of your application, enabling seamless data exchange and improving overall performance. By following RESTful principles, you ensure that your API is scalable, reliable, and easily accessible to other client applications beyond just your React frontend.",
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '1',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '2',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '2',	
                        'category_level'    => '2',	
                    ]
                ],
            ],
            [ // 2
                'author_id'         => 7,
                'title'             => 'I Will Manage Shopify E-commerce Store',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Running a successful e-commerce store on Shopify requires expert management to ensure smooth operations and maximum profitability. As your dedicated Shopify manager, I will handle all aspects of your online store, allowing you to focus on growing your business.</p>
                                        <p>From product uploads and inventory management to order fulfillment and customer support, I will take care of everything to ensure your store runs efficiently. With my attention to detail and experience in e-commerce management, you can trust that your Shopify store is in good hands.</p>
                                        <p>My services include:</p>
                                        <ul>
                                            <li>Product uploading and management</li>
                                            <li>Inventory monitoring and replenishment</li>
                                            <li>Order processing and fulfillment</li>
                                            <li>Customer support and query resolution</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>As your Shopify manager, I am committed to helping you achieve your e-commerce goals. In addition to day-to-day store management, I provide strategic guidance to optimize your stores performance and increase sales. From marketing campaigns to website optimization, I work tirelessly to ensure your Shopify store stands out in the competitive online marketplace.</p>
                                        <p>With my expertise and dedication, you can rest assured that your Shopify store is in capable hands. Let me handle the day-to-day operations so you can focus on scaling your business and reaching new heights of success.</p>
                                        </div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will manage your Shopify store, ensuring it runs smoothly and efficiently. This includes basic maintenance and support to keep your store operational.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'In addition to basic management, I will optimize your Shopify store for better performance and user experience. This includes product updates, SEO improvements, and customer support.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will provide comprehensive management of your Shopify store, including advanced SEO, marketing strategy, inventory management, and detailed performance analytics to drive growth and increase sales.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'What are some effective strategies to increase sales on my Shopify store?',
                        'answer'    => 'Utilize targeted email marketing campaigns to engage with potential customers. Optimize your product pages with high-quality images and compelling product descriptions. Implement upselling and cross-selling techniques to increase average order value.',
                    ],
                    [
                        'question'  => 'How can I ensure a seamless customer experience on my Shopify store?',
                        'answer'    => 'Regularly update your inventory and ensure accurate product information. Provide multiple payment options to accommodate different customer preferences. Offer responsive customer support through live chat and email to address any queries or concerns promptly.',
                    ],
                    [
                        'question'  => 'What are the best practices for optimizing my Shopify store for search engines?',
                        'answer'    => 'Conduct keyword research to identify relevant search terms for your products. Optimize product titles, descriptions, and meta tags with target keywords. Improve site speed and mobile responsiveness to enhance user experience and boost search engine rankings.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '8',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '9',	
                        'category_level'    => '2',	
                    ]
                ],
            ],
            [ // 3
                'author_id'         => 7,
                'title'             => 'I Will Setup 7 Figure Shopify Website Shopify Store',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Ready to launch your 7-figure Shopify store? Look no further! With my expertise in Shopify development, I will set up a high-converting e-commerce website that is optimized for success.</p>
                                        <p>From product listing to payment integration, I handle every aspect of your Shopify store setup. With a focus on user experience and conversion optimization, I ensure your store not only looks great but also drives sales.</p>
                                        <p>My services include:</p>
                                        <ul>
                                            <li>Custom Shopify store setup</li>
                                            <li>Product listing and categorization</li>
                                            <li>Payment gateway integration</li>
                                            <li>Theme customization to match your brand</li>
                                            <li>Mobile responsiveness for seamless shopping experience</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>With my Shopify expertise, you can expect a hassle-free setup process and ongoing support to grow your business. From store maintenance to marketing strategies, Im here to help you achieve your 7-figure goals.</p>
                                        <p>Lets turn your Shopify store into a profitable venture. Contact me today to get started on your journey to e-commerce success!</p>
                                        <p>Your satisfaction is guaranteed. I work tirelessly to ensure your Shopify store meets your expectations and exceeds them. Lets build a 7-figure business together!</p>
                                        </div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Get started with a professionally designed Shopify store. This package includes a basic setup with a customized theme, product upload, and essential plugins to get your store up and running',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'The popular package offers everything in the Basic package plus additional customization options, SEO optimization, and integration of advanced features to enhance user experience and boost sales.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'The Premium package is designed for those who want a fully optimized Shopify store with all the bells and whistles. This includes custom theme development, advanced SEO, marketing integrations, and ongoing support to ensure your store reaches its full potential.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'What are the key elements needed to set up a successful Shopify store?',
                        'answer'    => 'Building a successful Shopify store requires attention to detail. You need to focus on product selection, branding, website design, SEO optimization, marketing strategies, customer service, and analytics tracking. Each element plays a vital role in ensuring your Shopify store reaches its full potential.',
                    ],
                    [
                        'question'  => 'How long does it take to set up a Shopify store and start generating sales?',
                        'answer'    => 'The timeline for setting up a Shopify store can vary depending on factors such as the complexity of your products, the design requirements, and your familiarity with the platform. Typically, with proper planning and execution, you can have a basic store up and running within a few days to a week. However, generating significant sales may take some time as you refine your marketing strategies and build your customer base.',
                    ],
                    [
                        'question'  => 'Can you provide insights on choosing the right Shopify plan for my business?',
                        'answer'    => 'Selecting the appropriate Shopify plan depends on your business goals, budget, and expected level of sales. The platform offers various plans, each with different features and pricing. For small startups or businesses testing the waters, the Basic Shopify plan might suffice, offering essential features at an affordable price. As your business grows, you can consider upgrading to the Shopify or Advanced Shopify plans, which provide additional features such as advanced reporting and lower transaction fees. Assess your needs carefully before making a decision.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '15',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '16',	
                        'category_level'    => '1',	
                    ],
                ],
            ],
            [ // 4
                'author_id'         => 7,
                'title'             => 'I Will Do Automation To Drop Shipping For Website',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Automating drop shipping processes can streamline your e-commerce operations and save you time and effort. With my expertise in automation, I will optimize your website for drop shipping, ensuring seamless order fulfillment and customer satisfaction.</p>
                                        <p>From product sourcing to order processing, I will set up automated workflows that handle repetitive tasks efficiently. By integrating your website with drop shipping platforms and tools, I will enable automatic inventory updates, order tracking, and customer notifications.</p>
                                        <p>With drop shipping automation, you can focus on growing your business while I take care of the backend operations. Whether youre just starting out or looking to scale your operations, I have the skills and experience to help you succeed in the competitive e-commerce landscape.</p>
                                        <ul>
                                            <li>Integration with drop shipping platforms for seamless order processing</li>
                                            <li>Automatic inventory management and product updates</li>
                                            <li>Order tracking and customer notification automation</li>
                                            <li>Customized workflows to suit your business needs</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>With my drop shipping automation services, you can expect increased efficiency, reduced manual errors, and improved customer satisfaction. I will work closely with you to understand your business requirements and tailor the automation solution to meet your specific needs.</p>
                                        <p>Whether youre a small business or a large enterprise, I will provide personalized support and ongoing maintenance to ensure your drop shipping operations run smoothly. Lets automate your e-commerce business and take it to the next level together.</p>
                                        <p>Get in touch today to discuss your drop shipping automation needs and see how I can help you achieve your business goals.</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => ' I will set up basic automation for your dropshipping website, including essential tools to get your store running efficiently. This package covers the initial setup and configuration to streamline your operations and start selling',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'The popular package includes advanced automation features for your dropshipping website. I will integrate additional tools and optimize your store for better performance, ensuring smoother operations and higher efficiency to handle increased order volumes.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => ' With the premium package, you will receive comprehensive automation for your dropshipping website. This includes all advanced features plus customized solutions tailored to your specific needs. I will provide continuous support and ensure your store operates at its maximum potential with minimal manual intervention.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can automation enhance dropshipping efficiency on my website?',
                        'answer'    => 'Automation streamlines various processes in dropshipping, from order fulfillment to inventory management. By implementing automated systems, you can reduce manual errors, save time, and ensure a seamless experience for both you and your customers.',
                    ],
                    [
                        'question'  => 'What are the key benefits of integrating automation into my dropshipping website?',
                        'answer'    => 'Integrating automation into your dropshipping website brings numerous benefits, including increased scalability, improved order accuracy, faster order processing times, and enhanced customer satisfaction. By automating repetitive tasks, you can focus more on growing your business and providing exceptional service.',
                    ],
                    [
                        'question'  => 'How does automation revolutionize the dropshipping model for online businesses?',
                        'answer'    => 'Automation revolutionizes the dropshipping model by enabling businesses to operate more efficiently and effectively. Through automated order processing, inventory synchronization, and customer communication, you can run your dropshipping business with minimal manual intervention. This not only reduces overhead costs but also allows you to scale your operations seamlessly as your business grows.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '1',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '2',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '3',	
                        'category_level'    => '2',	
                    ],
                    [
                        'category_id'       => '4',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 5
                'author_id'         => 8,
                'title'             => 'I Will Redesign Shopify Dropshipping Store To Boost Sales',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you struggling to generate sales with your Shopify dropshipping store? Let me help you revamp your online store to increase conversions and boost sales.</p>
                                        <p>With my expertise in e-commerce and Shopify, I will redesign your store to create a professional and engaging shopping experience for your customers. From optimizing product pages to improving site navigation, Ill implement strategies that encourage visitors to make a purchase.</p>
                                        <p>By enhancing the design and functionality of your store, youll attract more customers and see a significant improvement in sales performance. Dont let a poorly designed website hold back your business - invest in a redesign today and watch your profits soar.</p>
                                        <ul>
                                            <li>Custom Shopify theme redesign</li>
                                            <li>Optimized product pages for higher conversions</li>
                                            <li>Improved site navigation for better user experience</li>
                                            <li>Conversion rate optimization strategies</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>Not only will I redesign your Shopify store, but Ill also provide ongoing support and optimization to ensure long-term success. From tracking performance metrics to implementing A/B testing, Ill continuously work to improve your stores performance and maximize your ROI.</p>
                                        <p>Ready to take your dropshipping business to the next level? Lets work together to redesign your Shopify store and unlock its full potential. Contact me today to get started!</p>
                                        <p>Your satisfaction is my priority, and Im committed to delivering results that exceed your expectations. Invest in your stores success today and see the difference a professional redesign can make.</p></div>',
                'attachments'       => [ 13,14,15 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'This package includes a basic redesign of your Shopify dropshipping store to improve its overall look and user experience. We will make necessary adjustments to your theme, layout, and navigation to ensure a smoother shopping experience for your customers.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'This package offers a comprehensive redesign of your Shopify dropshipping store, focusing on both aesthetics and functionality. In addition to theme and layout adjustments, we will optimize your product pages, implement best SEO practices, and enhance the overall user experience to boost sales.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Our premium package provides an extensive overhaul of your Shopify dropshipping store. This includes a complete redesign of your store’s theme, layout, and navigation, advanced SEO optimization, and custom features to enhance user engagement and drive sales. We will also provide detailed analytics and ongoing support to ensure your stores success.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can a redesigned Shopify dropshipping store enhance my sales performance?',
                        'answer'    => 'A revamped Shopify dropshipping store can significantly elevate your sales by optimizing user experience, implementing persuasive design elements, and streamlining the checkout process. Through strategic redesign, we aim to enhance your store appeal and functionality to capture more leads and convert them into paying customers seamlessly.',
                    ],
                    [
                        'question'  => 'What specific improvements can I expect from your Shopify dropshipping store redesign service?',
                        'answer'    => 'Our Shopify dropshipping store redesign service focuses on revitalizing your online presence with modern aesthetics, intuitive navigation, and conversion-oriented features. From enhancing product showcases to refining mobile responsiveness, we ensure every aspect of your store is optimized to maximize sales potential and foster customer engagement.',
                    ],
                    [
                        'question'  => 'How does a redesigned Shopify dropshipping store contribute to boosting sales conversion rates?',
                        'answer'    => 'By employing proven design principles and user-centric strategies, our Shopify dropshipping store redesign aims to eliminate friction points in the customer journey, increase trust, and encourage impulse purchases. Through persuasive visual cues, compelling copywriting, and strategic placement of call-to-action buttons, we create an immersive shopping experience that drives higher conversion rates and ultimately boosts your sales performance.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '1',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '2',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '3',	
                        'category_level'    => '2',	
                    ],
                    [
                        'category_id'       => '4',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 6
                'author_id'         => 8,
                'title'             => 'I Will Make Professional Excel And Google Sheets',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you in need of professional Excel or Google Sheets solutions to streamline your business processes or organize your data effectively? Look no further! I specialize in creating custom Excel and Google Sheets spreadsheets tailored to your specific requirements.</p>
                                        <p>Whether you need complex financial models, dynamic dashboards, or simple data entry templates, I can deliver solutions that meet your needs and exceed your expectations. With attention to detail and a focus on usability, I ensure that your spreadsheets are user-friendly and intuitive.</p>
                                        <p>My services include:</p>
                                        <ul>
                                            <li>Custom Excel and Google Sheets templates</li>
                                            <li>Financial modeling and analysis</li>
                                            <li>Data visualization and dashboard creation</li>
                                            <li>Automated reporting and data entry</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>Not only will I create professional Excel and Google Sheets solutions for you, but I will also provide comprehensive support to ensure that your spreadsheets continue to meet your needs over time. Whether you need updates, modifications, or troubleshooting assistance, I am here to help.</p>
                                        <p>Let me take the hassle out of managing your data and empower you to make informed decisions with well-designed and efficient Excel and Google Sheets solutions. Contact me today to discuss your project requirements and get started!</p>
                                        </div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will create a simple and clean Excel or Google Sheets document with up to 3 sheets and basic formatting.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will create an Excel or Google Sheets document with up to 5 sheets, advanced formatting, and basic formulas.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will create a comprehensive Excel or Google Sheets document with up to 10 sheets, advanced formatting, complex formulas, and automation (macros/scripts).',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I organize my data effectively using Excel or Google Sheets?',
                        'answer'    => 'Utilize Excel or Google Sheets to its fullest potential by structuring your data into logical categories and utilizing features like sorting, filtering, and conditional formatting. These tools can streamline your workflow and make data analysis a breeze.',
                    ],
                    [
                        'question'  => 'Can you assist with creating custom formulas or functions in Excel or Google Sheets?',
                        'answer'    => 'Absolutely! Whether you need a complex formula to calculate financial metrics or a customized function to automate repetitive tasks, I can help. Just provide your requirements, and I tailor a solution to suit your specific needs.',
                    ],
                    [
                        'question'  => 'How can Excel or Google Sheets enhance collaboration within my team?',
                        'answer'    => 'Excel and Google Sheets offer powerful collaboration features that allow multiple users to work on the same document simultaneously. With real-time editing, comments, and revision history tracking, your team can collaborate seamlessly, increasing productivity and ensuring everyone is on the same page.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '8',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '9',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 7
                'author_id'         => 8,
                'title'             => 'I Will Edit And Master Your Audiobook For Acx',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Producing a professional audiobook for platforms like ACX requires meticulous editing and mastering to ensure a seamless listening experience. With my expertise in audio production, I will edit and master your audiobook to meet the strict standards of ACX.</p>
                                        <p>From removing background noise to enhancing clarity and consistency, I use advanced editing techniques to polish your audio recordings. Each chapter will be carefully processed to achieve optimal sound quality, making sure every word is clear and easy to understand.</p>
                                        <p>As an experienced audiobook editor, I understand the importance of maintaining the narrators voice and style while improving overall audio quality. I work efficiently to deliver a professionally mastered audiobook that meets ACXs technical specifications and quality standards.</p>
                                        <ul>
                                            <li>Thorough editing to remove errors and distractions</li>
                                            <li>Audio mastering for consistent volume and clarity</li>
                                            <li>Quality control to ensure compliance with ACX requirements</li>
                                            <li>Final delivery in the specified format for upload to ACX</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to editing and mastering your audiobook, I provide personalized service and support to ensure your project meets your expectations. Whether you need revisions or have specific requests, I am committed to delivering a finished product that exceeds your standards.</p>
                                        <p>With my attention to detail and dedication to quality, you can trust that your audiobook will stand out on platforms like ACX. Let me help you bring your story to life with professional audio production that captivates listeners and enhances your brand.</p>
                                        <p>Contact me today to discuss your audiobook project and see how I can help you achieve success on ACX and other audiobook platforms.</p>
                                        </div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will edit and master your audiobook for ACX, ensuring it meets all required specifications and sounds professional. This package includes basic editing, noise reduction, and volume leveling for up to 30 minutes of audio.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will edit and master your audiobook for ACX, providing a polished and professional result. This package includes advanced editing, noise reduction, volume leveling, and EQ for up to 60 minutes of audio, ensuring your audiobook meets all ACX standards.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will provide a comprehensive editing and mastering service for your audiobook, ensuring it is of the highest quality and meets all ACX standards. This package includes detailed editing, noise reduction, volume leveling, EQ, and mastering for up to 120 minutes of audio. Additionally, I will provide feedback and minor revisions as needed to ensure complete satisfaction.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'What audio editing software do you use for mastering audiobooks?',
                        'answer'    => 'I utilize industry-standard audio editing software such as Adobe Audition and Pro Tools to meticulously edit and master your audiobook for ACX compliance. These tools ensure high-quality audio production, meeting the stringent requirements set by ACX.',
                    ],
                    [
                        'question'  => 'How do you ensure consistency in audio quality throughout the audiobook?',
                        'answer'    => 'Consistency is paramount in audiobook production. I meticulously apply noise reduction, equalization, and compression techniques across all chapters to maintain a uniform audio quality. Additionally, I conduct thorough quality checks to address any discrepancies and ensure seamless listening experience for your audience.',
                    ],
                    [
                        'question'  => 'Can you accommodate specific preferences for pacing and tone in narration?',
                        'answer'    => 'Absolutely! I understand the importance of capturing the author voice and intent in narration. Whether you prefer a brisk pace for an engaging thriller or a more relaxed tempo for a reflective memoir, I tailor the pacing and tone of narration according to your preferences. Your audiobook will resonate authentically with your target audience, enhancing the overall listening experience.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '1',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '2',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '3',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 8
                'author_id'         => 8,
                'title'             => 'I Will Provide Pro SEO Report, Competitor Website Audit And Analysis',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>When it comes to optimizing your website for search engines, having a comprehensive SEO report and understanding your competitors strategies is crucial. With my professional SEO services, I offer detailed audits and analysis to help you improve your online presence and outrank your competition.</p>
                                        <p>Using advanced tools and techniques, Ill thoroughly examine your websites performance, identify areas for improvement, and provide actionable recommendations to enhance your SEO strategy. Whether its optimizing on-page elements, improving site speed, or enhancing your backlink profile, Ill ensure your website is fully optimized for search engines.</p>
                                        <p>In addition to analyzing your own website, Ill also conduct a thorough audit of your competitors websites to uncover their strengths and weaknesses. By understanding what strategies are working for them, we can develop a plan to surpass them in search engine rankings and drive more traffic to your site.</p>
                                        <ul>
                                            <li>Comprehensive SEO report detailing areas for improvement</li>
                                            <li>In-depth analysis of competitor websites to identify opportunities</li>
                                            <li>Actionable recommendations to enhance your SEO strategy</li>
                                            <li>Customized solutions tailored to your specific business goals</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>With my professional SEO services, you can expect more than just a report. Ill work closely with you to implement the recommended changes and track your progress over time. Whether youre looking to increase your visibility in search results, attract more organic traffic, or improve your conversion rate, Ill help you achieve your goals.</p>
                                        <p>Dont let your competitors outshine you in search engine rankings. Invest in professional SEO services today and take your online presence to the next level. Contact me now to get started!</p>
                                        <p>Your satisfaction is guaranteed. Im committed to delivering results that exceed your expectations and drive real, measurable improvements to your websites performance. Lets work together to elevate your SEO strategy and achieve long-term success online.</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I Will Provide Pro SEO Report, Competitor Website Audit And Analysis for a single webpage, including a detailed SEO report, basic competitor analysis, and actionable recommendations.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I Will Provide Pro SEO Report, Competitor Website Audit And Analysis for up to 5 webpages, including a comprehensive SEO report, in-depth competitor analysis, keyword research, and detailed action plan.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I Will Provide Pro SEO Report, Competitor Website Audit And Analysis for up to 10 webpages, including an extensive SEO report, advanced competitor analysis, keyword strategy, backlink analysis, and a personalized SEO strategy session.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can an SEO report benefit my website performance?',
                        'answer'    => 'An SEO report provides a comprehensive analysis of your website current status, highlighting areas for improvement and opportunities for growth. It includes detailed insights into keyword rankings, backlink profile, technical issues, and competitor comparison, empowering you to make data-driven decisions to enhance your online presence.',
                    ],
                    [
                        'question'  => 'What does a competitor website audit entail, and why is it important?',
                        'answer'    => 'A competitor website audit involves a thorough examination of your competitors online strategies, including their SEO tactics, content quality, backlink profile, and overall site performance. By understanding your competitors strengths and weaknesses, you gain valuable insights into market trends and consumer behavior, enabling you to refine your own strategies for better competitive positioning and market penetration.',
                    ],
                    [
                        'question'  => 'How does an SEO analysis contribute to improving my websites search engine rankings?',
                        'answer'    => 'An SEO analysis identifies key factors influencing your website visibility on search engines, such as keyword relevance, content quality, site architecture, and user experience. By assessing these factors and implementing targeted optimization strategies, you can enhance your websites relevance and authority in the eyes of search engines, ultimately leading to higher rankings, increased organic traffic, and greater online visibility for your business.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '8',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '9',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 9
                'author_id'         => 9,
                'title'             => 'I Will Create, Fix, Customize, Your WordPress Website',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Whether you need a new website, fixes to an existing one, or customizations to make your WordPress site stand out, Ive got you covered. With expertise in WordPress development, I can create, fix, or customize your website to meet your specific requirements and exceed your expectations.</p>
                                        <p>From designing a visually appealing layout to optimizing performance and functionality, I ensure that your WordPress website reflects your brand identity and effectively engages your audience. Whether youre a small business, a blogger, or an e-commerce store owner, I can tailor solutions to suit your needs.</p>
                                        <p>With a focus on user experience and SEO best practices, I build websites that not only look great but also rank well in search engines and convert visitors into customers. Whether you need help setting up a new site, fixing bugs, or adding custom features, Im here to help you succeed online.</p>
                                        <ul>
                                            <li>Custom WordPress website design and development</li>
                                            <li>Fixes and troubleshooting for existing WordPress sites</li>
                                            <li>Theme customization and plugin integration</li>
                                            <li>Responsive design for mobile compatibility</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>When you choose me to create, fix, or customize your WordPress website, you can expect personalized service and attention to detail. I take the time to understand your goals and deliver solutions that meet your unique needs. Whether you need a simple blog or a complex e-commerce site, I have the skills and experience to bring your vision to life.</p>
                                        <p>With ongoing support and maintenance services, I ensure that your website remains secure, up-to-date, and performing at its best. Whether you need help with updates, backups, or security monitoring, Im here to support you every step of the way.</p>
                                        <p>Lets work together to create a professional, functional, and visually stunning WordPress website that helps you achieve your online goals. Contact me today to get started!</p>
                                        </div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will create a simple WordPress website with up to 5 pages, including a home page, about page, contact page, and two additional pages of your choice. This package includes a standard theme setup and basic customization to match your brand colors and logo. No custom coding or premium features included.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will create and customize a WordPress website with up to 10 pages, including all features from the Basic package plus additional functionality such as contact forms, social media integration, and SEO optimization. This package includes installing necessary plugins and ensuring your website is responsive and mobile-friendly.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will create a fully customized WordPress website with unlimited pages, including all features from the Popular package plus advanced functionality like e-commerce integration, custom coding, and premium plugin installation. This package also includes ongoing support and maintenance for one month to ensure your website runs smoothly and efficiently.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can you enhance the functionality of my WordPress website?',
                        'answer'    => 'With extensive experience and expertise in WordPress development, I employ a range of techniques to enhance your websites functionality. From custom plugin development to optimizing your sites performance, I ensure a seamless user experience tailored to your specific needs.',
                    ],
                    [
                        'question'  => 'Can you fix any issues or bugs on my WordPress website?',
                        'answer'    => 'Absolutely! As a seasoned WordPress developer, I specialize in identifying and resolving a wide array of issues and bugs that may be affecting your websites performance. From troubleshooting compatibility issues to debugging code, I am committed to delivering solutions that ensure your website runs smoothly.',
                    ],
                    [
                        'question'  => 'Do you offer customization services for WordPress websites?',
                        'answer'    => 'Yes, I provide comprehensive customization services to make your WordPress website stand out from the crowd. Whether you need to revamp your sites design, integrate new features, or tailor functionality to meet your unique requirements, I can customize your website to reflect your brand identity and achieve your goals.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '1',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '2',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '3',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 10
                'author_id'         => 9,
                'title'             => 'I Will Create Automated Shopify Dropshipping Store',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Looking to start your own online business with minimal hassle? Let me take care of everything for you by creating a fully automated Shopify dropshipping store. With years of experience in e-commerce and dropshipping, I can help you launch a successful online store that generates passive income.</p>
                                        <p>Forget about inventory management and shipping logistics – with dropshipping, you can sell products without ever handling them yourself. Ill set up your store with reliable suppliers and automate the order fulfillment process, so you can focus on growing your business.</p>
                                        <p>From choosing the right niche and products to designing a user-friendly website, Ill handle every aspect of building your Shopify store. With a professional and responsive design, your store will attract customers and drive sales from day one.</p>
                                        <ul>
                                            <li>Custom Shopify store setup</li>
                                            <li>Product research and selection</li>
                                            <li>Supplier integration and order automation</li>
                                            <li>SEO optimization for better visibility</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>Once your store is up and running, Ill provide ongoing support to ensure its success. From marketing strategies to performance optimization, Ill help you maximize your profits and scale your business to new heights.</p>
                                        <p>Dont let the complexities of e-commerce hold you back. With my expertise, you can launch a profitable dropshipping store without any hassle. Lets work together to turn your entrepreneurial dreams into reality.</p>
                                        <p>Get in touch today to discuss your project and take the first step towards financial freedom with a fully automated Shopify dropshipping store.</p></div>',
                'attachments'       => [ 13,14,15 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Get started with our Basic package, perfect for those who are just dipping their toes into the world of dropshipping. Well set up a fully automated Shopify store tailored to your niche, ensuring seamless integration with your chosen suppliers.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Our Popular package is designed for those ready to take their dropshipping venture to the next level. In addition to everything included in the Basic package, youll receive expert guidance on product selection, optimization of product listings, and implementation of proven marketing strategies to drive traffic and sales.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'For those seeking top-tier service and maximum profitability, our Premium package delivers unmatched value. Alongside all features of the Popular package, youll benefit from advanced customization options, personalized consultation sessions with our dropshipping experts, and ongoing support to ensure sustained growth and success for your Shopify store.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How will you ensure my Shopify dropshipping store stands out from the competition?',
                        'answer'    => 'We employ a blend of strategic product selection, captivating design elements, and advanced marketing techniques to set your Shopify dropshipping store apart. From niche selection to branding and customer engagement, every aspect is meticulously crafted to maximize your stores visibility and profitability.',
                    ],
                    [
                        'question'  => 'Can I customize the products in my Shopify dropshipping store, or are they pre-selected?',
                        'answer'    => 'Absolutely! We understand the importance of offering unique products tailored to your target audience. While we provide expert recommendations based on market research, you have full control over the products featured in your store. Whether you prefer specific niches or want to curate a bespoke collection, well work closely with you to realize your vision.',
                    ],
                    [
                        'question'  => ' How long does it take to see results from my Shopify dropshipping store?',
                        'answer'    => ' The timeline for seeing results can vary depending on factors such as niche competitiveness, marketing efforts, and audience engagement. However, our streamlined process ensures swift store setup and implementation of proven strategies for driving traffic and conversions. With dedication and ongoing optimization, you can start experiencing significant results in as little as a few weeks, with continued growth over time.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '8',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '9',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 11
                'author_id'         => 9,
                'title'             => 'I Will Test Your Applications Or Websites For Usability',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Testing the usability of your applications or websites is crucial for ensuring a positive user experience. With my expertise in usability testing, I can help you identify and address any usability issues that may arise, ultimately improving the overall user satisfaction.</p>
                                        <p>Using a combination of industry-standard methodologies and user-centric approaches, I conduct thorough tests to evaluate the effectiveness, efficiency, and satisfaction of your digital products. Whether its a mobile app, web application, or website, I provide valuable insights to enhance usability and optimize performance.</p>
                                        <p>My usability testing services include:</p>
                                        <ul>
                                            <li>Usability testing across various devices and platforms</li>
                                            <li>Identification of usability issues and areas for improvement</li>
                                            <li>Recommendations for enhancing user experience</li>
                                            <li>Testing with real users to gather authentic feedback</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>By investing in usability testing, youre investing in the success of your digital products. I not only identify usability issues but also provide actionable recommendations to address them effectively. With my comprehensive testing approach, you can be confident that your applications or websites will deliver an exceptional user experience.</p>
                                        <p>Dont let usability issues hinder the performance of your digital products. Let me help you ensure they meet the needs and expectations of your users. Contact me today to discuss your usability testing requirements and take the first step toward enhancing the usability of your applications or websites.</p>
                                        <p>Your satisfaction is my priority, and Im committed to helping you achieve your usability goals. Together, we can create digital experiences that delight users and drive success for your business.</p></div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => ' I will conduct usability tests on your applications or websites to identify potential issues and areas for improvement.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will thoroughly test your applications or websites for usability, providing valuable insights to enhance user experience and satisfaction.
                        ',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will perform comprehensive usability testing on your applications or websites, delivering detailed reports and actionable recommendations for optimizing user interactions and engagement.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can usability testing enhance my website  performance?',
                        'answer'    => 'Usability testing helps identify user experience issues, allowing you to streamline navigation, improve functionality, and enhance overall user satisfaction. By pinpointing pain points, you can make informed design decisions to optimize your websites performance.',
                    ],
                    [
                        'question'  => 'What are the key benefits of conducting usability testing for my application?',
                        'answer'    => 'Usability testing provides invaluable insights into user behavior, preferences, and pain points. It empowers you to refine your applications interface, enhance user engagement, boost conversion rates, and ultimately drive business growth by delivering a seamless and intuitive user experience.',
                    ],
                    [
                        'question'  => 'How does usability testing contribute to creating user-centric applications?',
                        'answer'    => 'Usability testing places the user at the center of the development process, ensuring that applications are designed with their needs and preferences in mind. By gathering feedback directly from users, you can iteratively improve your application usability, accessibility, and overall user satisfaction, resulting in a product that resonates with your target audience.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '8',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '9',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 12
                'author_id'         => 9,
                'title'             => 'I Will Write And Publish A Guest Post On doing 80 followers on Post',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Looking to boost your websites SEO and increase your online visibility? I offer a professional guest posting service that can help you achieve your goals. With my expertise in writing and publishing high-quality content, I will create a guest post that will be published on a website with a Domain Authority (DA) of 80, providing you with valuable backlinks and improving your search engine rankings.</p>
                                        <p>My guest posts are written to be informative, engaging, and relevant to your target audience. I conduct thorough research to ensure the content is accurate and valuable to readers. Whether youre looking to promote your business, build brand awareness, or establish yourself as an authority in your niche, my guest posting service can help you achieve your objectives.</p>
                                        <p>Benefits of my guest posting service:</p>
                                        <ul>
                                            <li>High-quality content written by experienced writers</li>
                                            <li>Publication on a website with a DA of 80</li>
                                            <li>Dofollow backlinks to boost your websites SEO</li>
                                            <li>Increased online visibility and brand exposure</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to writing and publishing your guest post, I provide a comprehensive service that includes content optimization, keyword research, and performance tracking. I am committed to delivering results and helping you achieve your SEO goals.</p>
                                        <p>Take advantage of my guest posting service today and elevate your online presence. Contact me to discuss your requirements and get started on improving your websites SEO with high-quality backlinks from authoritative websites.</p>
                                        <p>Your satisfaction is guaranteed. I take pride in delivering exceptional results and ensuring that your guest post meets your expectations. Lets work together to enhance your online visibility and drive more traffic to your website.</p></div>',
                'attachments'       => [ 1,2,3],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I Will Write And Publish A Guest Post On a platform with 80 followers.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I Will Write And Publish A Guest Post On a platform with 80 followers. This package is a popular choice among clients.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I Will Write And Publish A Guest Post On a platform with 80 followers. With our premium package, you get additional perks and benefits.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> ' How can I effectively increase my follower count on my guest post?',
                        'answer'    => 'Boosting your follower count on a guest post involves a blend of strategic content, engaging visuals, and proactive promotion. Focus on creating valuable content that resonates with your target audience, leverage social media platforms to amplify your reach, and engage with your audience consistently to foster a sense of community and loyalty.',
                    ],
                    [
                        'question'  => 'What are some key strategies for maximizing engagement on a guest post?',
                        'answer'    => 'To optimize engagement on your guest post, prioritize interactive elements such as polls, quizzes, and calls-to-action that encourage participation. Additionally, craft compelling headlines and introductions to captivate readers from the outset, and foster meaningful discussions by responding promptly to comments and feedback.',
                    ],
                    [
                        'question'  => 'How can I leverage my guest post to establish credibility and authority in my niche?',
                        'answer'    => 'Establishing credibility and authority through your guest post requires a multi-faceted approach. Demonstrate your expertise by providing well-researched insights and practical advice, cite reputable sources to support your arguments, and showcase your unique perspective or experiences to differentiate yourself from competitors. Additionally, seek opportunities to collaborate with influencers or industry leaders to further enhance your credibility and expand your reach.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '1',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '2',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '3',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 13
                'author_id'         => 10,
                'title'             => 'I Will Write Article And Do Content Writting',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Looking for high-quality content for your website or blog? Youve come to the right place. I specialize in article writing and content creation that engages readers and drives results.</p>
                                        <p>With years of experience in writing for various industries, I understand the importance of delivering well-researched, informative, and engaging content. Whether you need blog posts, articles, product descriptions, or website copy, I can help you communicate your message effectively.</p>
                                        <p>From brainstorming ideas to crafting compelling headlines and body content, I take care of every aspect of the writing process. I pay attention to detail, ensuring accuracy, coherence, and readability in every piece of content I create.</p>
                                        <ul>
                                            <li>Thorough research and analysis to understand your target audience</li>
                                            <li>Creative writing that captures attention and maintains interest</li>
                                            <li>SEO optimization for improved visibility and search engine rankings</li>
                                            <li>Timely delivery and adherence to project guidelines</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to writing articles and content, I offer content strategy consultation to help you plan your content calendar and achieve your business goals. Whether youre looking to increase website traffic, generate leads, or establish thought leadership, I can provide customized solutions to meet your needs.</p>
                                        <p>Let me help you elevate your online presence with engaging and compelling content. Contact me today to discuss your project requirements and see how I can assist you in reaching your content goals.</p>
                                        <p>Your satisfaction is my priority, and Im committed to delivering content that exceeds your expectations. With my expertise and dedication, you can trust that your content needs are in good hands.</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Get started with quality articles and content writing tailored to your needs.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your content game with engaging articles and professional writing services.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Unlock top-tier content creation and article writing expertise for maximum impact and effectiveness.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can quality content boost my websites visibility and engagement?',
                        'answer'    => 'Quality content serves as the cornerstone of your online presence, attracting and retaining visitors while also enhancing your sites search engine ranking. By providing valuable and relevant information to your audience, you establish authority in your niche and foster trust among your readers. Engaging content also encourages social sharing, expanding your reach organically',
                    ],
                    [
                        'question'  => 'What are the key elements of a compelling article?',
                        'answer'    => 'A compelling article should captivate readers from the outset with a catchy headline and introduction. It should offer valuable insights or solutions to the readers queries, supported by thorough research and credible sources. Additionally, incorporating visuals such as images, infographics, or videos can enhance the articles appeal and convey information more effectively. Finally, a clear call-to-action at the end encourages reader engagement and further interaction.',
                    ],
                    [
                        'question'  => '',
                        'answer'    => '',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '8',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '9',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 14
                'author_id'         => 10,
                'title'             => 'I Will Do Embedded C Coding For Tiva C And Other Microcontrollers',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>As an expert in embedded systems development, I specialize in writing efficient and reliable C code for microcontrollers like Tiva C and others. With years of experience in firmware development, I can tackle projects of any complexity and ensure optimal performance for your embedded systems.</p>
                                        <p>Whether you need custom drivers, communication protocols, or control algorithms, I have the skills to deliver high-quality code tailored to your specific requirements. From low-level hardware interactions to application-level logic, I ensure every aspect of your embedded software meets industry standards and best practices.</p>
                                        <p>My services include:</p>
                                        <ul>
                                            <li>Development of firmware for Tiva C and other microcontrollers</li>
                                            <li>Implementation of communication interfaces (UART, SPI, I2C, etc.)</li>
                                            <li>Optimization of code for performance and memory usage</li>
                                            <li>Integration of sensors, actuators, and other peripherals</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>When you choose me for your embedded C coding needs, you can expect timely delivery, clear communication, and ongoing support. I work closely with you to understand your project goals and provide solutions that exceed your expectations.</p>
                                        <p>Whether youre developing a prototype or a production-ready product, I am committed to delivering code that meets your specifications and scales with your projects requirements. Lets work together to bring your embedded systems to life.</p></div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Get started with essential features and functionalities. Perfect for those looking to kickstart their project with embedded C coding for Tiva C and other microcontrollers.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Our most sought-after package, offering comprehensive embedded C coding services for Tiva C and other microcontrollers. Ideal for projects requiring advanced functionalities and reliable performance.
                        ',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Unlock the full potential of embedded C coding with our premium package. Tailored for demanding projects, this package provides advanced features, optimization, and expert support for Tiva C and other microcontrollers.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can embedded C coding benefit my Tiva C microcontroller project?',
                        'answer'    => 'Embedded C coding provides a streamlined approach to programming microcontrollers like Tiva C, ensuring efficient resource utilization and optimal performance. With expertise in embedded systems, I can tailor the code to meet your project\'s specific requirements, whether it\'s for automation, IoT applications, or control systems.',
                    ],
                    [
                        'question'  => 'What sets your embedded C coding service apart for Tiva C and other microcontrollers?',
                        'answer'    => 'My embedded C coding service for Tiva C and other microcontrollers stands out due to its focus on reliability, efficiency, and scalability. I leverage industry best practices to develop clean, well-documented code that facilitates easy maintenance and future expansion of your projects. With a deep understanding of hardware constraints and software optimization techniques, I ensure that your embedded systems operate seamlessly.',
                    ],
                    [
                        'question'  => 'Can you explain your approach to debugging and troubleshooting embedded C code for Tiva C microcontrollers?',
                        'answer'    => 'Debugging and troubleshooting are critical aspects of embedded C coding, especially for complex microcontroller projects like Tiva C. I employ a systematic approach, utilizing debugging tools and techniques to identify and resolve issues efficiently. From analyzing code execution flow to debugging hardware interactions, I leave no stone unturned to ensure that your Tiva C-based applications run smoothly and reliably.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '15',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '16',	
                        'category_level'    => '1',	
                    ],
                ],
            ],
            [ // 15
                'author_id'         => 10,
                'title'             => 'I Will upgrade, Secure Your WordPress Website',
                'description'       => '<div class="tk-text-wrapper"><p>Keeping your WordPress website updated and secure is crucial to protect your data and maintain its performance. I specialize in upgrading and securing WordPress websites to ensure they remain resilient against security threats and function optimally.</p>
                                        <p>With my expertise, Ill implement the latest updates and security measures to safeguard your website from potential vulnerabilities. Whether its updating plugins, themes, or the WordPress core, Ill ensure your site stays current and protected.</p>
                                        <p>Dont let security risks compromise your websites integrity. Trust me to enhance its security posture and provide you with peace of mind. I offer comprehensive security solutions tailored to your specific needs, including malware scanning, firewall setup, and regular security audits.</p>
                                        <ul>
                                            <li>WordPress core updates to patch security vulnerabilities</li>
                                            <li>Plugin and theme updates for improved functionality and security</li>
                                            <li>Installation and configuration of security plugins</li>
                                            <li>Regular security audits and malware scanning</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to upgrading and securing your WordPress website, I provide ongoing support and maintenance to ensure its continued protection and performance. Whether you need troubleshooting assistance or proactive monitoring, Im here to help you keep your site running smoothly.</p>
                                        <p>Dont wait until its too late. Protect your investment and safeguard your online presence today. Contact me to discuss your website security needs and lets ensure your WordPress site remains safe and secure.</p>
                                        <p>Your websites security is my priority. Let me handle the upgrades and security enhancements so you can focus on running your business with confidence.</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Upgrade your WordPress website with essential security features to enhance protection against online threats.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Enhance the security of your WordPress website with popular security measures, ensuring robust protection against cyber threats.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Fortify your WordPress website with premium security solutions, offering advanced features for comprehensive protection against online vulnerabilities.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I upgrade my WordPress website to the latest version?',
                        'answer'    => 'Upgrading your WordPress website to the latest version involves several steps. Firstly, ensure you have a full backup of your website files and database. Then, log in to your WordPress admin dashboard and navigate to the Updates section. Here, you\'ll see if there\'s a new version available. Simply click on the update button, and WordPress will automatically handle the rest, including updating plugins and themes if necessary. After the update, it\'s crucial to test your website thoroughly to ensure everything is functioning correctly.',
                    ],
                    [
                        'question'  => 'What are the essential security measures to protect my WordPress website from cyber threats?',
                        'answer'    => 'Securing your WordPress website is paramount to safeguarding your data and users\' information. Start by using strong, unique passwords for all user accounts, including admin, and enable two-factor authentication for added security. Regularly update WordPress core, themes, and plugins to patch any vulnerabilities. Implement a web application firewall (WAF) to filter and monitor incoming traffic. Additionally, consider using security plugins like Wordfence or Sucuri for real-time threat detection and malware removal.',
                    ],
                    [
                        'question'  => 'How can I enhance the overall security posture of my WordPress website?',
                        'answer'    => 'Improving the security of your WordPress website involves a multi-layered approach. Begin by limiting login attempts to prevent brute-force attacks and enforcing HTTPS encryption to protect data transmission. Utilize a reputable hosting provider that offers security features like malware scanning, DDoS protection, and server hardening. Implement a content security policy (CSP) to mitigate risks associated with cross-site scripting (XSS) and other code injection attacks. Regularly audit user permissions and remove any unnecessary accounts or privileges to minimize potential attack vectors. Finally, stay informed about the latest security threats and best practices by joining WordPress security communities and forums.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '17',	
                        'category_level'    => '0',	
                    ],
                ],
            ],
            [ // 16
                'author_id'         => 10,
                'title'             => 'I will convert PSD to HTML for WordPress theme',
                'description'       => '<div class="tk-text-wrapper"><p>Converting PSD designs into HTML for WordPress themes requires attention to detail and a keen eye for design. With my expertise, I ensure pixel-perfect conversions that maintain the integrity of your original design while ensuring compatibility with WordPress.</p>
                                        <p>From complex layouts to intricate details, I meticulously translate your PSD files into clean, semantic HTML code that is ready for integration into a WordPress theme. My goal is to deliver a final product that not only meets but exceeds your expectations.</p>
                                        <p>Utilizing industry best practices and the latest web technologies, I guarantee responsive and optimized HTML code that is fully compatible with all modern browsers and devices. Your WordPress theme will be lightweight, fast-loading, and user-friendly.</p>
                                        <ul>
                                            <li>Pixel-perfect conversion of PSD designs to HTML</li>
                                            <li>Clean and semantic HTML code for easy integration</li>
                                            <li>Responsive design for optimal viewing on all devices</li>
                                            <li>Optimized code for improved performance and SEO</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to converting your PSD designs to HTML, I provide comprehensive support and assistance throughout the entire process. Whether you need help with customization, troubleshooting, or anything else related to your WordPress theme, Im here to help.</p>
                                        <p>With my expertise and dedication to quality, you can trust that your PSD designs will be transformed into a professional and functional WordPress theme that exceeds your expectations. Lets work together to bring your vision to life.</p>
                                        <p>Contact me today to discuss your project requirements and get started on converting your PSD designs into a stunning WordPress theme.</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will convert PSD to HTML for WordPress theme with basic features.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will convert PSD to HTML for WordPress theme with popular features.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will convert PSD to HTML for WordPress theme with premium features.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How long does it take to convert PSD to HTML for a WordPress theme?',
                        'answer'    => 'The time required to convert PSD to HTML for a WordPress theme can vary depending on the complexity and number of pages in the design. Typically, it takes between 3 to 7 days for a standard theme. For more intricate designs, it might take longer to ensure every detail is perfect.',
                    ],
                    [
                        'question'  => 'Do you provide responsive design in the conversion process?',
                        'answer'    => 'Yes, all the HTML conversions I provide are fully responsive. I ensure that your WordPress theme looks great on all devices, including desktops, tablets, and mobile phones, by using modern CSS techniques and frameworks.',
                    ],
                    [
                        'question'  => 'What do I need to provide for the PSD to HTML conversion?',
                        'answer'    => 'To get started, you will need to provide the complete PSD files, including any specific fonts, images, and other assets used in the design. Additionally, if you have any particular requirements or functionality that you want to be included in the WordPress theme, please let me know.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 17
                'author_id'         => 11,
                'title'             => 'I Will Develop Ios And Android Mobile App Using React Native',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you looking to bring your ideas to life with a mobile app that works seamlessly on both iOS and Android platforms? Look no further! With expertise in React Native, I specialize in developing high-quality mobile applications that offer a native user experience across multiple devices.</p>
                                        <p>Using React Native, I can efficiently build cross-platform apps that leverage the power of JavaScript and React. This means you get a single codebase that runs on both iOS and Android, saving time and resources without compromising on performance or functionality.</p>
                                        <p>From initial concept to final deployment, I work closely with you to understand your requirements and deliver a customized solution that meets your business objectives. Whether you need a simple utility app or a complex enterprise solution, I have the skills and experience to bring your vision to life.</p>
                                        <ul>
                                            <li>Custom mobile app development using React Native</li>
                                            <li>Native user experience on both iOS and Android</li>
                                            <li>Integration with backend systems and third-party APIs</li>
                                            <li>Testing, debugging, and deployment to app stores</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to developing your mobile app, I offer ongoing support and maintenance to ensure your app stays up-to-date and continues to perform optimally. Whether its adding new features, fixing bugs, or optimizing performance, Im here to help you every step of the way.</p>
                                        <p>Ready to turn your app idea into reality? Lets discuss your project requirements and take the first step towards building a successful mobile app that delights users and drives business growth. Contact me today to get started!</p>
                                        <p>Your satisfaction is my top priority. Im committed to delivering a mobile app that exceeds your expectations and helps you achieve your goals. Lets work together to create something amazing!</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'This package includes the development of a basic iOS and Android mobile application using React Native. It covers essential features and functionality.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'This package offers a more comprehensive solution for iOS and Android app development using React Native. It includes popular features and enhancements to meet broader requirements',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Get the ultimate package for iOS and Android app development using React Native. The premium package offers advanced features, customization options, and dedicated support to ensure your app stands out.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How do you ensure the performance and efficiency of the mobile apps developed using React Native?',
                        'answer'    => 'To ensure performance and efficiency, I utilize React Native’s performance optimization techniques such as optimizing component rendering, using efficient navigation libraries, and leveraging native modules when necessary. Additionally, I conduct thorough testing and profiling to identify and resolve any performance bottlenecks.',
                    ],
                    [
                        'question'  => 'Can you integrate third-party services and APIs into the mobile app?',
                        'answer'    => 'Yes, I can integrate various third-party services and APIs into your mobile app. Whether it\'s social media integration, payment gateways, or custom APIs, I have experience working with a wide range of services to enhance the functionality of your app.',
                    ],
                    [
                        'question'  => 'What is your process for developing a mobile app using React Native?',
                        'answer'    => 'My development process involves several key steps: gathering and analyzing requirements, designing the app’s user interface, coding the app using React Native, testing for bugs and performance issues, and finally deploying the app to the App Store and Google Play. I ensure clear communication and regular updates throughout the development cycle.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 18
                'author_id'         => 11,
                'title'             => 'I can create informative website with contents',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>When it comes to creating an informative website, content is key. I specialize in crafting engaging and valuable content that captivates your audience and delivers your message effectively. Whether you need a website for your business, blog, or personal brand, I can help you create a site that informs, educates, and inspires.</p>
                                        <p>From compelling articles and blog posts to informative guides and tutorials, I have the expertise to develop content that resonates with your target audience. By conducting thorough research and understanding your goals, I ensure that every piece of content aligns with your brand identity and objectives.</p>
                                        <p>With attention to detail and a focus on quality, I create informative websites that provide value to your visitors and help you achieve your business objectives. Whether youre looking to establish thought leadership, drive traffic, or generate leads, I can create a website that meets your needs and exceeds your expectations.</p>
                                        <ul>
                                            <li>Custom content creation tailored to your audience</li>
                                            <li>Engaging articles, blog posts, and tutorials</li>
                                            <li>Thorough research to ensure accuracy and relevance</li>
                                            <li>Optimization for search engines to improve visibility</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to creating informative content, I offer a range of services to enhance your websites performance and usability. This includes website design, SEO optimization, and ongoing maintenance to ensure your site remains relevant and up-to-date.</p>
                                        <p>If youre ready to take your online presence to the next level with an informative website that engages and inspires, lets work together to bring your vision to life. Contact me today to discuss your project and see how I can help you achieve your goals.</p>
                                        <p>Your satisfaction is my priority, and Im committed to delivering a website that exceeds your expectations. With my expertise and dedication, you can trust that your website will effectively communicate your message and drive results.</p></div>',
                'attachments'       => [ 13,14,15 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I can create an informative website with contents suitable for individuals and small businesses looking to establish their online presence.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I can create an informative website with contents tailored to attract a wider audience, suitable for growing businesses and organizations.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I can create an informative website with contents designed to captivate and engage visitors, ideal for established businesses and brands aiming for a professional online presence.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can you create an informative website with quality content?',
                        'answer'    => 'Creating an informative website with quality content involves researching your target audience, planning your site structure, and developing engaging and relevant content. It is essential to use clear, concise language, incorporate visuals, and regularly update the site to keep it current and valuable for visitors.',
                    ],
                    [
                        'question'  => 'What are the key elements of an informative website?',
                        'answer'    => 'An informative website should include a well-organized structure, high-quality content, user-friendly navigation, and a responsive design. Key elements also involve SEO-optimized content, fast load times, and reliable hosting to ensure the site is accessible and efficient.',
                    ],
                    [
                        'question'  => 'Why is content quality important for an informative website?',
                        'answer'    => 'Content quality is crucial because it determines the value and credibility of your website. High-quality content attracts and retains visitors, improves SEO rankings, and establishes your authority on the subject matter. It helps build trust with your audience and encourages them to engage with your site.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 19
                'author_id'         => 11,
                'title'             => 'Programming & TechVideo & Animation I Will Make A Hybrid Application With Android, Php',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you looking for a versatile hybrid application that seamlessly integrates Android and PHP functionalities? Look no further! I specialize in developing hybrid applications that leverage the power of both Android and PHP to deliver robust and scalable solutions.</p>
                                        <p>With extensive experience in programming and technology, I will create a custom hybrid application tailored to your specific needs. Whether you need a mobile app that communicates with a PHP backend or requires integration with third-party APIs, Ive got you covered.</p>
                                        <p>Utilizing the latest tools and frameworks, I ensure your hybrid application is not only feature-rich but also optimized for performance and user experience. From concept to deployment, I work closely with you to ensure your vision is translated into a high-quality product.</p>
                                        <ul>
                                            <li>Seamless integration of Android and PHP functionalities</li>
                                            <li>Custom hybrid application development tailored to your requirements</li>
                                            <li>Optimized performance and user experience</li>
                                            <li>Integration with third-party APIs and services</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to developing your hybrid application, I offer ongoing support and maintenance to ensure your app remains up-to-date and continues to meet your evolving needs. Whether you need bug fixes, feature enhancements, or performance optimizations, Im here to help.</p>
                                        <p>Take your project to the next level with a hybrid application that combines the power of Android and PHP. Contact me today to discuss your requirements and lets turn your idea into reality.</p>
                                        <p>Your satisfaction is my priority, and I am committed to delivering a hybrid application that exceeds your expectations. Lets work together to create a cutting-edge solution that helps you achieve your goals.</p></div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'       => 'Basic',
                        'description' => 'A simple package offering basic features for your project.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'       => 'Papular',
                        'description' => 'A popular package with enhanced features to meet common needs.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'       => 'Premium',
                        'description' => 'Our most advanced package, equipped with premium features for your project.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'  => 'What is a hybrid application and why should I choose it?',
                        'answer'    => 'A hybrid application is a software application that combines elements of both native apps and web applications. They are built using web technologies such as HTML, CSS, and JavaScript, and are wrapped in a native app shell, allowing them to be published in app stores. Choosing a hybrid application offers the benefit of cross-platform compatibility, faster development time, and cost efficiency as you don’t need to develop separate apps for iOS and Android.'
                    ],
                    [
                        'question'  => 'How does the integration of Android and PHP work in a hybrid application?',
                        'answer'    => 'In a hybrid application, Android serves as the client-side platform while PHP is used for the server-side logic. The Android part of the application interacts with the user and sends requests to the server. PHP handles these requests, processes data, and communicates with the database. The server then sends back the necessary responses to the Android client, creating a seamless user experience.'
                    ],
                    [
                        'question'   => 'What are the key advantages of using PHP for server-side development in a hybrid application?',
                        'answer'     => 'PHP is a powerful server-side scripting language that is well-suited for web development. It offers several advantages for hybrid applications, including ease of integration with various databases, flexibility, scalability, and a large community support. Additionally, PHP has a wealth of frameworks, such as Laravel and CodeIgniter, which can speed up development and improve code maintainability.'
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 20
                'author_id'         => 11,
                'title'             => 'Programming & TechVideo & Animation I Will Make A Hybrid Application With Android, Php',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you looking to develop a hybrid application that seamlessly integrates Android and PHP functionalities? Look no further! With my expertise in programming and technology, I specialize in creating powerful hybrid applications that combine the flexibility of Android with the robustness of PHP.</p>
                                        <p>Whether you need a simple app for your business or a complex solution for your enterprise, I have the skills and experience to deliver a high-quality product tailored to your specific requirements. From concept to deployment, I work closely with you to ensure your application meets your expectations and exceeds industry standards.</p>
                                        <p>Using the latest tools and frameworks, I develop hybrid applications that offer a native-like experience across different platforms. With seamless integration of Android and PHP functionalities, your application will be fast, secure, and scalable, providing users with a smooth and efficient experience.</p>
                                        <ul>
                                            <li>Custom hybrid application development</li>
                                            <li>Integration of Android and PHP functionalities</li>
                                            <li>Optimization for performance and user experience</li>
                                            <li>Testing and deployment on multiple platforms</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to developing your hybrid application, I provide ongoing support and maintenance to ensure your app remains up-to-date and secure. Whether you need bug fixes, feature enhancements, or technical assistance, I am here to help you every step of the way.</p>
                                        <p>If youre ready to bring your idea to life and create a powerful hybrid application with Android and PHP, lets get started. Contact me today to discuss your project and see how I can turn your vision into reality.</p>
                                        <p>Your satisfaction is my priority. I am committed to delivering a hybrid application that not only meets your expectations but also exceeds them. Together, we can build a successful application that drives results for your business.</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Get started with our Basic package, perfect for those looking to kickstart their project. This package includes essential features to get you up and running.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Our Popular package offers a comprehensive solution for those seeking a bit more. With additional features and functionalities, its ideal for projects aiming to stand out.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience the ultimate level of service with our Premium package. Tailored for demanding projects, this package offers top-tier features and personalized support.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'  => 'What are the benefits of using a hybrid application for Android?',
                        'answer'    => 'Hybrid applications combine the best of both web and native apps. They offer a consistent user experience across different platforms, faster development times, and reduced costs. Additionally, they can access device features through plugins and provide a seamless experience for users.',
                    ],
                    [
                        'question'  => 'How do you ensure the security of a hybrid application?',
                        'answer'    => "To ensure the security of a hybrid application, we implement best practices such as using HTTPS for secure communication, validating and sanitizing user input, regularly updating libraries and frameworks, and employing authentication and authorization mechanisms. Additionally, we conduct regular security audits and testing to identify and fix vulnerabilities.",
                    ],
                    [
                        'question'  => 'What technologies do you use to develop hybrid applications?',
                        'answer'    => "We use a combination of technologies to develop hybrid applications, including HTML5, CSS3, and JavaScript for the frontend. For the backend, we use PHP to handle server-side logic and database interactions. Additionally, we utilize frameworks like Apache Cordova or Ionic to bridge the gap between web technologies and native device capabilities.",
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 21
                'author_id'         => 12,
                'title'             => 'I Will Be Your Ios Developer And Update Old Apps',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you looking for an experienced iOS developer to update your old apps and bring them up to date with the latest technologies and design trends? Look no further! With my expertise in iOS development, I can help breathe new life into your existing apps and ensure they meet the standards of todays App Store.</p>
                                        <p>Whether your apps need bug fixes, performance improvements, or compatibility updates for the latest iOS versions, Ive got you covered. I specialize in working with Objective-C and Swift, ensuring seamless transitions and optimal performance across all devices.</p>
                                        <p>As your dedicated iOS developer, I am committed to delivering high-quality results that exceed your expectations. From analyzing your existing codebase to implementing new features and enhancements, I will work closely with you to ensure your apps remain competitive and user-friendly.</p>
                                        <ul>
                                            <li>Update old apps to support the latest iOS versions</li>
                                            <li>Implement new features and enhancements</li>
                                            <li>Fix bugs and optimize performance</li>
                                            <li>Ensure compatibility across all devices</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to updating your old apps, I offer ongoing support and maintenance to keep your apps running smoothly. Whether you need periodic updates or emergency fixes, I am here to help you every step of the way.</p>
                                        <p>With my dedication to excellence and passion for iOS development, I am confident that I can help take your apps to the next level. Lets work together to create exceptional user experiences and drive success on the App Store.</p>
                                        <p>Contact me today to discuss your project requirements and see how I can be your trusted iOS developer for updating old apps.</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'As your iOS developer, I will update your old apps with the latest features and enhancements. Whether its bug fixes, performance improvements, or compatibility updates, Ive got you covered.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Looking to give your old iOS apps a new lease of life? With this package, Ill be your dedicated iOS developer, ensuring your apps stay relevant and competitive in todays market. From UI/UX enhancements to backend optimizations, Ill make sure your apps shine.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Elevate your iOS apps to the next level with this premium package. As your dedicated iOS developer, I will not only update your old apps but also implement cutting-edge features and technologies to keep them ahead of the curve. From advanced AI integrations to seamless cloud synchronization, Ill make your apps stand out from the crowd.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'  => 'How can you help update my old iOS app?',
                        'answer'    => 'I specialize in updating old iOS apps to meet the latest standards and guidelines. This includes updating code to be compatible with the latest iOS versions, integrating new features, improving performance, and ensuring your app adheres to Apple\'s App Store guidelines.',
                    ],
                    [
                        'question'  => 'What are the benefits of updating my iOS app?',
                        'answer'    => 'Updating your iOS app ensures it remains functional and secure on the latest devices and iOS versions. It also improves user experience, can add new features, fix bugs, and enhance performance, which can lead to better user retention and higher ratings on the App Store.',
                    ],
                    [
                        'question'  => 'Can you add new features to my existing iOS app?',
                        'answer'    => 'Yes, I can add new features to your existing iOS app. Whether you need new functionalities, design updates, or performance improvements, I can help enhance your app to better meet your users\' needs and expectations.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 22
                'author_id'         => 12,
                'title'             => 'I will do professional cinematic travel or youtube video editing',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Creating captivating videos is essential for engaging your audience and conveying your message effectively. As a professional video editor, I specialize in crafting cinematic travel and YouTube videos that leave a lasting impression.</p>
                                        <p>With meticulous attention to detail and creative flair, I transform raw footage into polished masterpieces. Whether youre documenting your adventures around the world or sharing valuable content on YouTube, I have the skills and expertise to bring your vision to life.</p>
                                        <p>Using industry-standard software and cutting-edge techniques, I enhance your videos with stunning visuals, seamless transitions, and dynamic effects. From color grading to audio editing, I ensure every aspect of your video is of the highest quality.</p>
                                        <ul>
                                            <li>Professional editing for cinematic travel videos</li>
                                            <li>YouTube video editing for engaging content</li>
                                            <li>Enhancement of visuals, transitions, and effects</li>
                                            <li>Color grading and audio editing for polished results</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to editing your videos, I offer valuable insights and recommendations to help you optimize your content for maximum impact. Whether its advice on storytelling techniques or guidance on video promotion, Im here to support your success.</p>
                                        <p>If youre ready to take your videos to the next level, lets collaborate. Contact me today to discuss your project and see how I can elevate your content with professional editing services.</p>
                                        <p>Your satisfaction is my priority. I work tirelessly to deliver videos that exceed your expectations and resonate with your audience. Lets work together to create compelling and memorable videos that stand out in the crowded online landscape.</p></div>',
                'attachments'       => [ 1,2,3],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will provide professional cinematic travel or YouTube video editing services tailored to your needs. Whether its enhancing footage, adding transitions, or optimizing audio, Ill ensure your videos stand out.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your content with my professional cinematic travel or YouTube video editing services. With attention to detail and creative flair, Ill transform your footage into captivating videos that engage your audience and leave a lasting impression.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience the ultimate in cinematic travel or YouTube video editing with my premium package. From storyboard creation to final polish, Ill handle every aspect of your project with precision and creativity, delivering stunning videos that exceed your expectations.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'  => 'What do I need to provide for my travel or YouTube video editing?',
                        'answer'    => 'To ensure the best quality for your video, please provide the raw footage, any specific instructions or vision you have for the video, background music or audio files you wish to include, and any text or logos that need to be incorporated. If you have reference videos that you like, please share those as well.',
                    ],
                    [
                        'question'  => 'How long will it take to edit my travel or YouTube video?',
                        'answer'    => "The time required for editing depends on the length and complexity of the video. Generally, a standard video of 5-10 minutes can be edited within 3-5 days. However, if there are specific effects, transitions, or extensive revisions needed, it may take longer. I will provide an estimated timeline once I review the footage and requirements.",
                    ],
                    [
                        'question'  => 'What video formats do you deliver?',
                        'answer'    => "I deliver the final video in high-quality MP4 format, which is widely supported across various platforms, including YouTube. If you require a different format, please let me know in advance, and I can accommodate your needs. Additionally, I can provide different resolutions and aspect ratios to suit your preferences.",
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 23
                'author_id'         => 12,
                'title'             => 'I will do a warm, deep, mature, rich, smooth, american accent, english, male voiceover',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Looking for a professional voiceover artist to bring your project to life? Look no further! I specialize in providing warm, deep, mature, rich, smooth voiceovers with an authentic American accent.</p>
                                        <p>With years of experience in the industry, I deliver high-quality voice recordings that meet your specific requirements. Whether you need a voiceover for commercials, narrations, e-learning modules, audiobooks, or any other project, I can provide the perfect voice to suit your needs.</p>
                                        <p>My voice is versatile and can adapt to various tones and styles, from professional and authoritative to friendly and conversational. I take pride in delivering prompt and professional service, ensuring your project is completed to your satisfaction.</p>
                                        <ul>
                                            <li>Warm, deep, mature, rich, smooth voiceover</li>
                                            <li>Authentic American accent</li>
                                            <li>Professional and prompt service</li>
                                            <li>Versatile voice suitable for various projects</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>When you choose me for your voiceover needs, you can expect nothing but the best. I am committed to delivering exceptional quality and customer satisfaction. Your project is important to me, and I will work closely with you to ensure your vision is brought to life through my voice.</p>
                                        <p>Dont settle for anything less than the perfect voice for your project. Contact me today to discuss your voiceover needs, and lets create something amazing together.</p>
                                        <p>Your satisfaction is guaranteed. I look forward to working with you and providing the professional voiceover services you need to make your project stand out.</p></div>',
                'attachments'       => [ 13,14,15 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => ' I will deliver a warm, deep, mature, rich, smooth voiceover with an American accent in English.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will provide a warm, deep, mature, rich, smooth voiceover in English, with a captivating American accent.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will deliver a professional voiceover featuring a warm, deep, mature, rich, smooth American accent in English, ensuring high-quality results.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can a warm and deep voice enhance your voiceover project?',
                        'answer'    => 'A warm and deep voice brings a sense of comfort and authority to your project, making your message more engaging and trustworthy. This type of voiceover can create a rich auditory experience that resonates with your audience, ensuring that your content is both memorable and impactful.',
                    ],
                    [
                        'question'  => 'Why choose a mature, smooth American accent for your voiceover needs?',
                        'answer'    => 'A mature, smooth American accent conveys professionalism and credibility, perfect for a wide range of applications from corporate videos to narrations. This accent is easily understood by a global audience and adds a level of sophistication and clarity to your message, making it ideal for enhancing the listener’s experience.',
                    ],
                    [
                        'question'  => 'What are the benefits of a rich, smooth voice in a male English voiceover?',
                        'answer'    => 'A rich, smooth male voiceover provides a calm and authoritative tone that can captivate listeners and hold their attention. This type of voice adds depth and texture to your project, ensuring that your content is delivered with the right blend of emotion and clarity, making your message more compelling and effective.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 24
                'author_id'         => 12,
                'title'             => 'I will assess the SSL or tls used on your website or IP address',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Ensuring the security of your website or IP address is paramount in todays digital landscape. I specialize in assessing the SSL or TLS protocols used to safeguard your online presence.</p>
                                        <p>With a comprehensive evaluation, I identify any vulnerabilities or weaknesses in your current security setup. Whether youre using SSL (Secure Sockets Layer) or its successor TLS (Transport Layer Security), I conduct a thorough analysis to ensure your encryption methods meet industry standards and best practices.</p>
                                        <p>From certificate validation to protocol configuration, I assess every aspect of your security infrastructure to provide recommendations for improvement. Whether youre a small business or a large enterprise, I offer tailored solutions to enhance your security posture and protect your sensitive data.</p>
                                        <ul>
                                            <li>Complete assessment of SSL or TLS protocols</li>
                                            <li>Identification of security vulnerabilities and weaknesses</li>
                                            <li>Recommendations for improving encryption methods</li>
                                            <li>Customized solutions for businesses of all sizes</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to assessing your SSL or TLS protocols, I offer ongoing support and monitoring to ensure your security remains robust over time. Whether you need help with certificate management or protocol updates, Im here to assist you every step of the way.</p>
                                        <p>Dont leave your security to chance. Contact me today to schedule a comprehensive assessment of your SSL or TLS protocols and protect your website or IP address from potential threats.</p>
                                        <p>Your online security is my top priority. Trust me to deliver reliable solutions that keep your data safe and secure.</p></div>',
                'attachments'       => [ 1,2,3],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => ' I will assess the SSL or tls used on your website or IP address with a basic evaluation.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => ' I will assess the SSL or tls used on your website or IP address with a thorough evaluation, recommended for most users.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will assess the SSL or tls used on your website or IP address with an in-depth evaluation, including advanced analysis and recommendations.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'  => 'How can I assess the SSL or TLS used on my website or IP address?',
                        'answer'    => 'To assess the SSL or TLS used on your website or IP address, you can use various online tools and services that provide detailed reports on the security protocols in place. These tools typically check for certificate validity, encryption strength, and potential vulnerabilities. Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum.',
                    ],
                    [
                        'question'  => 'What are the benefits of assessing SSL or TLS on my website?',
                        'answer'    => 'Assessing the SSL or TLS on your website ensures that your data is securely encrypted during transmission, protecting it from potential eavesdroppers and man-in-the-middle attacks. It also helps maintain trust with your users, as a secure website is more likely to be trusted. Additionally, it can help you identify and rectify potential security vulnerabilities. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                    ],
                    [
                        'question'  => 'What tools can I use to check the SSL or TLS on my website?',
                        'answer'    => 'There are several tools available to check the SSL or TLS on your website, such as SSL Labs\' SSL Test, Qualys SSL Test, and other similar services. These tools provide comprehensive reports on your SSL/TLS configuration, including the certificate\'s validity, encryption strength, and potential issues. Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 25
                'author_id'         => 13,
                'title'             => 'I will professionally edit any video',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Editing videos professionally requires a keen eye for detail and a deep understanding of storytelling. With my expertise, I can transform raw footage into a polished masterpiece that captivates your audience.</p>
                                        <p>Whether you need a promotional video for your business, a wedding highlight reel, or a creative project, I have the skills and creativity to bring your vision to life. From basic cuts to complex visual effects, I can handle any editing task with precision and efficiency.</p>
                                        <p>Using industry-standard software and techniques, I ensure your video looks professional and engaging. I pay attention to every frame, ensuring seamless transitions, color correction, and audio enhancement for a flawless final product.</p>
                                        <ul>
                                            <li>Professional video editing for any purpose</li>
                                            <li>Customized editing to match your style and preferences</li>
                                            <li>High-quality output in various formats for online or offline use</li>
                                            <li>Fast turnaround times without compromising on quality</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to basic editing services, I offer advanced options such as motion graphics, 3D animation, and special effects to take your video to the next level. I am committed to delivering results that exceed your expectations and help you achieve your goals.</p>
                                        <p>If youre looking for professional video editing services that elevate your content, look no further. Contact me today to discuss your project and see how I can help you create a stunning video that leaves a lasting impression on your audience.</p>
                                        <p>Your satisfaction is my priority, and I strive to deliver edits that meet your needs and exceed your expectations. Lets collaborate to bring your vision to life and create a video that stands out from the crowd.</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Basic video editing service: Trim, cut, and merge clips to enhance your footage.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Popular video editing service: Add transitions, effects, and music to make your video stand out.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Premium video editing service: Advanced editing techniques, color correction, and professional touches for a polished final product.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'  => 'What are the top 9 benefits of professional video editing?',
                        'answer'    => 'Professional video editing ensures high-quality visuals, seamless transitions, and engaging content that captivates your audience. Our service guarantees enhanced audio clarity, creative effects, color correction, and optimized video length to keep viewers interested. Additionally, we offer customized editing to suit your brand, ensuring your message is clear and impactful.',
                    ],
                    [
                        'question'  => 'How can professional video editing improve my project?',
                        'answer'    => 'Professional video editing transforms raw footage into a polished, cohesive story. It enhances the visual appeal, maintains audience engagement, and ensures your project looks professional. By using advanced editing techniques, we can highlight important details, improve narrative flow, and add creative elements that make your video stand out.',
                    ],
                    [
                        'question'  => 'What is the process for getting my video professionally edited?',
                        'answer'    => 'The process begins with you providing the raw footage and your vision for the final product. We then review the footage and discuss your specific needs and preferences. Our team will edit the video, incorporating your feedback at each stage. Finally, we deliver a professionally edited video that meets your expectations and is ready for distribution.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 26
                'author_id'         => 13,
                'title'             => 'I will professionally edit your youtube video',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Editing your YouTube videos professionally can make a significant difference in their quality and appeal. With my expertise in video editing, I will transform your raw footage into polished and engaging content that captivates your audience.</p>
                                        <p>From trimming and cutting to adding effects and transitions, I use industry-standard editing software to enhance your videos and bring your vision to life. Whether youre a vlogger, content creator, or business owner, I ensure your videos are professionally edited to meet your specifications and exceed your expectations.</p>
                                        <p>With attention to detail and creativity, I enhance the visual and auditory aspects of your videos to create a seamless viewing experience. Whether you need basic editing or more complex post-production work, I have the skills and expertise to deliver results that elevate your content.</p>
                                        <ul>
                                            <li>Trimming, cutting, and arranging footage</li>
                                            <li>Adding effects, transitions, and titles</li>
                                            <li>Color correction and audio enhancement</li>
                                            <li>Optimizing videos for YouTube and other platforms</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to professional editing, I offer personalized service and support to ensure your satisfaction. Whether you have specific preferences or need guidance on improving your videos, I am here to help you achieve your goals and make your YouTube channel stand out.</p>
                                        <p>Dont settle for mediocre videos. Let me take your content to the next level with professional editing that enhances its quality and appeal. Contact me today to discuss your project and see how I can help you create captivating YouTube videos that leave a lasting impression.</p>
                                        <p>Your satisfaction is my priority. I strive to deliver high-quality editing that meets your needs and exceeds your expectations. Lets collaborate to create videos that showcase your talent and engage your audience on YouTube and beyond.</p></div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will professionally edit your YouTube video to enhance its quality and appeal.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will provide expert editing services to optimize your YouTube video for maximum engagement and impact.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will deliver top-tier editing solutions to elevate your YouTube video to a professional standard, ensuring it stands out among the rest.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can professional video editing enhance the quality of my YouTube content?',
                        'answer'    => 'Professional video editing elevates your YouTube content by ensuring seamless transitions, engaging visuals, and captivating storytelling. It transforms raw footage into polished videos that captivate your audience, enhancing viewer engagement and retention.',
                    ],
                    [
                        'question'  => 'What types of edits can I expect for my YouTube videos?',
                        'answer'    => 'Our professional editing service encompasses a wide range of techniques, including color correction, audio enhancement, dynamic transitions, motion graphics, and text overlays. We tailor each edit to suit your unique style and content goals, ensuring that your videos stand out on YouTube.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 27
                'author_id'         => 13,
                'title'             => 'I will migrate your website to google cloud service',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you looking to migrate your website to Google Cloud Service for enhanced performance, scalability, and security? Look no further! With my expertise in cloud migration, I can seamlessly transfer your website to Google Cloud, ensuring a smooth transition with minimal downtime.</p>
                                        <p>Google Cloud offers a range of benefits, including reliable infrastructure, global availability, and integrated solutions for website hosting. By migrating to Google Cloud, you can take advantage of cutting-edge technology and optimize your website for speed and efficiency.</p>
                                        <p>From planning and preparation to execution and testing, I handle every aspect of the migration process to ensure your website remains accessible and functional throughout. Whether youre running a small blog or a large e-commerce site, I tailor my approach to meet your specific needs and requirements.</p>
                                        <ul>
                                            <li>Assessment of your current website and infrastructure</li>
                                            <li>Customized migration plan tailored to your business goals</li>
                                            <li>Seamless transfer of website data and configurations</li>
                                            <li>Testing and optimization to ensure performance and reliability</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to migrating your website to Google Cloud, I provide ongoing support and maintenance to keep your site running smoothly. This includes monitoring, security updates, and performance optimization to ensure your website remains secure and responsive.</p>
                                        <p>With my comprehensive approach to cloud migration, you can trust that your website is in good hands. Let me help you leverage the power of Google Cloud to take your online presence to the next level.</p>
                                        <p>Contact me today to discuss your migration needs and see how I can help you achieve your goals with Google Cloud Service.</p>
                                        <p>I am committed to delivering a seamless migration experience and ensuring your satisfaction every step of the way. Lets work together to migrate your website to Google Cloud and unlock its full potential.</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'This package offers a smooth migration of your website to Google Cloud service, ensuring seamless transition and enhanced performance.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your websites performance with our Popular package, designed to migrate your website to Google Cloud service effortlessly, ensuring reliability and scalability.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience the ultimate in website migration with our Premium package. Migrate your website to Google Cloud service with advanced features and dedicated support for optimal performance and security.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can migrating my website to Google Cloud benefit me?',
                        'answer'    => 'Migrating your website to Google Cloud offers numerous benefits, including enhanced performance, scalability, and reliability. Google Cloud\'s infrastructure provides advanced features like load balancing, auto-scaling, and global content delivery networks, ensuring your website loads quickly and remains accessible to users worldwide.',
                    ],
                    [
                        'question'  => 'What steps are involved in migrating my website to Google Cloud?',
                        'answer'    => 'Migrating your website to Google Cloud involves several key steps, including assessing your current infrastructure, planning the migration strategy, setting up Google Cloud resources, transferring your website data, configuring DNS settings, and testing the migrated website thoroughly to ensure everything functions as expected. Our expert team will guide you through each step of the process, ensuring a seamless transition to Google Cloud.',
                    ],
                    [
                        'question'  => 'Will migrating my website to Google Cloud affect its performance or downtime?',
                        'answer'    => 'Migrating your website to Google Cloud is designed to minimize downtime and ensure optimal performance throughout the migration process. Our team employs advanced techniques like live migrations and traffic splitting to seamlessly transition your website to Google Cloud without interrupting its availability. Additionally, Google Cloud\'s robust infrastructure and global network ensure your website remains highly available and responsive to user requests, even during peak traffic periods.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 28
                'author_id'         => 13,
                'title'             => 'I will do vulnerability scanning for network or website',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Ensuring the security of your network or website is paramount in todays digital landscape. With my expertise in vulnerability scanning, I offer comprehensive assessments to identify and mitigate potential security risks.</p>
                                        <p>Utilizing advanced scanning tools and techniques, I thoroughly analyze your network or website for vulnerabilities, including but not limited to outdated software, misconfigurations, and potential entry points for malicious actors.</p>
                                        <p>My services encompass:</p>
                                        <ul>
                                            <li>Network vulnerability scanning</li>
                                            <li>Website vulnerability assessment</li>
                                            <li>Identification of security weaknesses</li>
                                            <li>Recommendations for remediation</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>Upon completion of the scanning process, I provide detailed reports outlining discovered vulnerabilities and actionable recommendations for addressing them. Additionally, I offer ongoing support to help you maintain a secure environment and prevent future security breaches.</p>
                                        <p>Protect your network or website from potential threats and safeguard sensitive information. Partner with me for reliable and thorough vulnerability scanning services.</p> </div> ',
                'attachments'       => [ 13,14,15 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Our Basic package includes thorough vulnerability scanning for your network or website, identifying potential security risks and weaknesses. With detailed reports and actionable insights, youll be equipped to enhance your digital defenses and protect your assets effectively.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Experience the ultimate in vulnerability scanning with our Premium package. Our expert team conducts extensive assessments, leveraging advanced techniques and tools to uncover even the most elusive security vulnerabilities. Benefit from personalized consultations and ongoing support to fortify your network or website against evolving threats.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Upgrade to our Popular package for comprehensive vulnerability scanning services. We go beyond the basics to provide in-depth analysis, prioritization of threats, and proactive recommendations for mitigation. Strengthen your cybersecurity posture and stay ahead of potential threats with confidence.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'What are the primary benefits of conducting vulnerability scanning for my website?',
                        'answer'    => 'Vulnerability scanning enhances your website\'s security posture by identifying potential weaknesses that could be exploited by attackers. By proactively detecting vulnerabilities, you can patch them before they are exploited, thus safeguarding sensitive data and maintaining the trust of your users.',
                    ],
                    [
                        'question'  => 'How frequently should I schedule vulnerability scans for my network infrastructure?',
                        'answer'    => ' The frequency of vulnerability scans depends on various factors such as the size and complexity of your network, the rate of software updates and changes, and your organization\'s risk tolerance. Generally, it\'s recommended to perform scans regularly, ideally on a weekly or monthly basis, to stay ahead of emerging threats and ensure continuous protection.',
                    ],
                    [
                        'question'  => 'Can vulnerability scanning help in compliance with regulatory requirements?',
                        'answer'    => 'Absolutely. Many regulatory standards, such as PCI DSS, HIPAA, and GDPR, mandate regular vulnerability assessments as part of their security requirements. Conducting vulnerability scans not only helps you meet compliance obligations but also demonstrates your commitment to protecting sensitive information and mitigating security risks.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 29
                'author_id'         => 14,
                'title'             => 'I will create opening and end credits sequence for movie',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Creating captivating opening and end credits sequences is essential for setting the tone and giving proper credit in a movie. With my expertise in visual storytelling and motion graphics, I will craft unique and memorable sequences that enhance the overall viewing experience.</p>
                                        <p>Using a combination of typography, animation, and sound design, I will bring your credits to life, ensuring they complement the style and theme of your film. Whether you prefer a sleek and modern design or a nostalgic and vintage aesthetic, I will tailor the sequences to meet your vision.</p>
                                        <p>From the initial concept to the final render, I will work closely with you to ensure the credits accurately reflect the cast, crew, and production team involved in your movie. Your satisfaction is my priority, and I am committed to delivering high-quality results that exceed your expectations.</p>
                                        <ul>
                                            <li>Custom opening and end credits sequences</li>
                                            <li>Professional typography and animation</li>
                                            <li>Sound design for enhanced impact</li>
                                            <li>Tailored to match the style and theme of your movie</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to creating the opening and end credits sequences, I offer revisions and adjustments to ensure the final product meets your exact specifications. I am dedicated to bringing your vision to life and providing you with a seamless and professional experience throughout the process.</p>
                                        <p>If youre ready to elevate your movie with captivating opening and end credits sequences, lets collaborate to make your vision a reality. Contact me today to discuss your project and take the first step towards creating a memorable viewing experience for your audience.</p>
                                        <p>Your movie deserves credits that leave a lasting impression. Trust me to create sequences that not only honor the contributions of your team but also engage and captivate your audience from the very beginning to the end.</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Create an opening and end credits sequence for your movie with a basic touch. Well craft a simple yet elegant sequence to introduce and conclude your film, setting the tone right from the start to the very end.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your movie experience with our popular package. Well design a captivating opening and end credits sequence that captures the essence of your film. Let us set the stage for your audience, leaving a lasting impression that enhances the overall viewing experience.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'For those seeking the utmost in sophistication and style, our premium package delivers. Our team will meticulously craft a stunning opening and end credits sequence that seamlessly integrates with the narrative of your movie. Elevate your film to cinematic excellence with our premium offering.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can opening credits enhance the viewer\'s experience in a movie?',
                        'answer'    => 'Opening credits serve as the first impression of a film, setting the tone and mood while introducing key players like actors, directors, and producers. Through creative design and animation, they can captivate the audience from the very beginning, heightening anticipation for the story that follows.',
                    ],
                    [
                        'question'  => 'What elements should be included in the end credits of a movie?',
                        'answer'    => 'End credits are essential for acknowledging the contributions of everyone involved in the film\'s production, from cast and crew to special thanks and copyright information. They provide closure for the audience while honoring the hard work and talent behind the scenes, ensuring no one\'s efforts go unnoticed.',
                    ],
                    [
                        'question'  => 'How can I make my movie\'s opening credits stand out and be memorable?',
                        'answer'    => 'To create memorable opening credits, consider incorporating unique visuals, typography, and music that reflect the movie\'s themes and style. Experiment with innovative techniques like animation, special effects, and storytelling to engage viewers from the start and leave a lasting impression long after the credits roll.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 30
                'author_id'         => 14,
                'title'             => 'I will convert figma to wordpress with elementor pro',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you looking to bring your Figma designs to life on the web? With my expertise in WordPress development and Elementor Pro, I can seamlessly convert your Figma designs into fully functional WordPress websites.</p>
                                        <p>Using Elementor Pro, I ensure pixel-perfect accuracy in translating your Figma mockups into responsive and dynamic WordPress pages. Whether you have a single-page design or a multi-page layout, Ill implement it with precision and attention to detail.</p>
                                        <p>My process involves meticulous attention to your design specifications, ensuring that every element is faithfully reproduced in the WordPress environment. From customizing headers and footers to integrating dynamic content and interactive elements, Ill bring your vision to life.</p>
                                        <ul>
                                            <li>Convert Figma designs to WordPress websites</li>
                                            <li>Utilize Elementor Pro for seamless integration</li>
                                            <li>Ensure pixel-perfect accuracy in design implementation</li>
                                            <li>Optimize for responsiveness and performance</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to converting your Figma designs to WordPress, I offer ongoing support and maintenance to ensure your website remains up-to-date and functional. Whether you need further customization, troubleshooting assistance, or updates to your content, Im here to help.</p>
                                        <p>Lets collaborate to transform your Figma designs into a stunning WordPress website that reflects your brand identity and engages your audience effectively. Contact me today to discuss your project requirements and get started on your WordPress journey.</p>
                                        <p>Your satisfaction is my priority, and Im committed to delivering results that exceed your expectations. Trust me to convert your Figma designs to WordPress with Elementor Pro and take your online presence to the next level.</p></div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will convert Figma to WordPress with Elementor Pro using industry-standard practices.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will convert Figma to WordPress with Elementor Pro and ensure seamless integration for optimal website performance.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will convert Figma to WordPress with Elementor Pro, offering advanced customization options and priority support for your projects success.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'Can you convert Figma designs to WordPress using Elementor Pro?',
                        'answer'    => 'Absolutely! Our team specializes in converting Figma designs seamlessly into WordPress websites using Elementor Pro. With our expertise, your designs will be brought to life with pixel-perfect precision and full functionality.',
                    ],
                    [
                        'question'  => 'Why choose your service for converting Figma to WordPress using Elementor Pro?',
                        'answer'    => 'By choosing our service, you\'re ensuring a smooth and efficient transition from Figma designs to a dynamic WordPress website powered by Elementor Pro. Our team of experts combines design finesse with technical prowess to deliver results that exceed your expectations, every time.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 31
                'author_id'         => 14,
                'title'             => 'I will create your responsive wix editor x website',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Looking to create a stunning and responsive website using Wix Editor X? Youve come to the right place! I specialize in designing and building custom websites on the Wix platform that are not only visually appealing but also fully responsive across all devices.</p>
                                        <p>With my expertise in Wix Editor X, I can bring your vision to life and create a website that perfectly represents your brand. Whether you need a simple portfolio site or a complex e-commerce platform, I have the skills and experience to deliver a high-quality solution tailored to your needs.</p>
                                        <p>Using the latest features and tools available in Wix Editor X, I ensure your website is not only beautiful but also functional and user-friendly. From custom layouts and animations to seamless integrations and optimized performance, your Wix website will stand out from the crowd.</p>
                                        <ul>
                                            <li>Custom Wix website design and development</li>
                                            <li>Responsive design for all devices, including mobile and tablet</li>
                                            <li>Integration of advanced features and functionality</li>
                                            <li>SEO optimization to improve visibility and rankings</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to creating your responsive Wix Editor X website, I provide ongoing support and maintenance to ensure your site remains up-to-date and performs optimally. Whether you need updates, troubleshooting, or further enhancements, Im here to help you every step of the way.</p>
                                        <p>Your satisfaction is my priority. I strive to exceed your expectations and deliver a website that not only meets your needs but also helps you achieve your goals. Lets work together to create a powerful online presence for your business with Wix Editor X.</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => ' I will create your responsive Wix Editor X website with essential features to get you started online.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => ' I will craft your responsive Wix Editor X website with additional customization options and enhanced functionalities to make your online presence stand out.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will design your bespoke responsive Wix Editor X website with advanced features, tailored to meet your specific business needs, ensuring a unique and professional online identity.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'What makes Wix Editor X stand out for website development?',
                        'answer'    => 'Wix Editor X offers unparalleled flexibility and control, empowering you to craft visually stunning websites with ease. Its intuitive interface, combined with advanced design features, allows for seamless customization, ensuring your website reflects your unique brand identity.',
                    ],
                    [
                        'question'  => 'Can you integrate custom functionalities into my Wix Editor X website?',
                        'answer'    => 'Absolutely! With Wix Editor X, the possibilities are virtually endless. Whether you need custom forms, interactive elements, or tailored e-commerce solutions, I can implement them seamlessly into your website, enhancing its functionality and user experience.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 32
                'author_id'         => 14,
                'title'             => 'I will do build and design your wordpress business website',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you looking for a professional and stunning WordPress website for your business? Look no further! I specialize in building and designing customized WordPress websites that cater to your specific needs and goals.</p>
                                        <p>With years of experience in web development and design, I understand the importance of having a strong online presence. Whether youre a small startup or a large corporation, I can create a website that not only looks great but also drives results.</p>
                                        <p>From custom theme development to responsive design and SEO optimization, I offer a comprehensive range of services to ensure your website stands out from the competition. With attention to detail and a focus on user experience, Ill work closely with you to bring your vision to life.</p>
                                        <ul>
                                            <li>Custom WordPress theme development</li>
                                            <li>Responsive design for all devices</li>
                                            <li>SEO optimization to improve search engine rankings</li>
                                            <li>Integration of essential plugins and tools</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>Not only will I build and design your WordPress website, but Ill also provide ongoing support and maintenance to ensure it continues to perform at its best. Your satisfaction is my priority, and Im committed to delivering a website that exceeds your expectations.</p>
                                        <p>Lets work together to create a powerful online presence for your business. Contact me today to get started!</p></div>',
                'attachments'       => [ 1,2,3],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Perfect for those starting out, this package includes a professionally designed WordPress business website tailored to your needs.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Our most sought-after package! Get a fully customized WordPress business website that sets you apart from the competition',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'For those who demand the best. Receive a premium WordPress business website with advanced features and unparalleled design.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can a professionally designed WordPress website benefit my business?',
                        'answer'    => 'A well-crafted WordPress website can elevate your business by enhancing credibility, improving user experience, and attracting more leads. With custom design elements tailored to your brand, your website becomes a powerful tool for engaging potential customers and driving conversions.',
                    ],
                    [
                        'question'  => 'What makes your WordPress website development service stand out from others?',
                        'answer'    => 'Our WordPress development service is distinguished by a blend of creativity, functionality, and strategic thinking. We prioritize understanding your business goals to deliver tailor-made solutions that not only look stunning but also perform seamlessly. With attention to detail and a focus on user experience, we ensure your website reflects the unique essence of your brand.',
                    ],
                    [
                        'question'  => 'Can you assist with ongoing maintenance and updates for my WordPress website?',
                        'answer'    => 'Absolutely! Our commitment to your success extends beyond the initial development phase. We offer comprehensive maintenance and support services to keep your WordPress website running smoothly. From software updates and security patches to content management and performance optimization, we handle everything so you can focus on growing your business.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 3,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 33
                'author_id'         => 15,
                'title'             => 'I will build a modern wordpress website with a unique web design',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>When it comes to your online presence, standing out is crucial. Thats why I specialize in building modern WordPress websites with unique web designs that capture your brands essence and leave a lasting impression on your visitors.</p>
                                        <p>From sleek and minimalist layouts to bold and vibrant designs, I work closely with you to understand your vision and translate it into a stunning website that reflects your style and values. With a focus on user experience and functionality, I ensure your site not only looks great but also performs seamlessly across all devices.</p>
                                        <p>With my expertise in WordPress development and design, I can create a website that not only meets your expectations but exceeds them. Whether youre a small business looking to establish your online presence or a large corporation in need of a website revamp, I have the skills and experience to bring your vision to life.</p>
                                        <ul>
                                            <li>Custom WordPress theme development</li>
                                            <li>Responsive design for optimal viewing on all devices</li>
                                            <li>Unique and eye-catching web design</li>
                                            <li>Integration of essential plugins and features</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to building a modern WordPress website with a unique web design, I offer ongoing support and maintenance to ensure your site remains up-to-date and secure. Whether you need updates, troubleshooting, or advice, Im here to help you every step of the way.</p>
                                        <p>Lets work together to create a website that not only looks amazing but also helps you achieve your business goals. Contact me today to get started on your journey to a modern, unique, and successful WordPress website.</p>
                                        <p>Your satisfaction is my priority, and Im committed to delivering a website that exceeds your expectations. With my expertise and dedication, you can trust that your website is in good hands.</p></div>',
                'attachments'       => [ 13,14,15 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will craft a sleek WordPress website with a distinctive web layout tailored to your needs.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will develop a cutting-edge WordPress site with a one-of-a-kind web design that sets you apart.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will create an exquisite WordPress website featuring a bespoke web design that reflects your brand identity impeccably.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can you ensure my WordPress website stands out with a unique design?',
                        'answer'    => 'Crafting a distinctive web design involves a blend of creativity and strategy. We\'ll begin with an in-depth consultation to understand your brand identity and target audience. Then, employing cutting-edge design principles and personalized elements, we\'ll fashion a visually captivating website that not only aligns with your brand but also leaves a lasting impression on your visitors.',
                    ],
                    [
                        'question'  => 'What steps do you take to ensure my WordPress website reflects the modern web design trends?',
                        'answer'    => 'Keeping pace with evolving design trends is pivotal in creating a contemporary website. We stay ahead of the curve by constantly researching emerging trends and integrating them seamlessly into our design process. From sleek UI/UX elements to responsive layouts, we\'ll infuse your website with the latest design innovations to ensure it exudes modernity and sophistication.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 34
                'author_id'         => 15,
                'title'             => 'I will create wix website design,redesign wix website',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you looking for a stunning and professional Wix website design? Whether you need a brand new site or want to redesign your existing Wix website, Ive got you covered. With years of experience in Wix website design and development, I can create a custom website that reflects your brand and meets your specific needs.</p>
                                        <p>From simple one-page designs to complex e-commerce sites, I can bring your vision to life on the Wix platform. I specialize in creating mobile-friendly, responsive websites that look great on any device. Whether youre a small business owner, freelancer, or blogger, I can help you establish a strong online presence with a beautiful Wix website.</p>
                                        <p>With my expertise in Wixs powerful design tools and features, I can customize your website to suit your unique style and preferences. Whether you need help choosing the right template, integrating custom graphics and content, or optimizing your site for search engines, Ill work closely with you to ensure your Wix website exceeds your expectations.</p>
                                        <ul>
                                            <li>Custom Wix website design and development</li>
                                            <li>Redesign of existing Wix websites</li>
                                            <li>Mobile-friendly, responsive designs</li>
                                            <li>Integration of custom graphics and content</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to creating or redesigning your Wix website, I offer ongoing support and maintenance to ensure your site remains up-to-date and optimized for performance. Whether you need help with updates, troubleshooting, or adding new features, Im here to help you every step of the way.</p>
                                        <p>If youre ready to elevate your online presence with a stunning Wix website, lets get started today. Contact me to discuss your project and see how I can help you achieve your goals with a professionally designed Wix website.</p>
                                        <p>Your satisfaction is my top priority, and Im committed to delivering a website that not only looks great but also helps you achieve your business objectives. Lets work together to create a Wix website that sets you apart from the competition.</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will create a stunning Wix website design tailored to your needs, ensuring a professional online presence. Whether youre starting from scratch or looking to refresh your current site, Ive got you covered with expert design and functionality.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Dive deeper into the world of Wix with my Popular package. Ill not only design your website but also optimize it for maximum impact. From eye-catching visuals to seamless navigation, your online platform will be primed for success.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Elevate your online presence with the Premium package. In addition to top-notch design and optimization, Ill provide ongoing support and maintenance to keep your Wix website running smoothly. With my expertise at your disposal, you can focus on your business while I take care of the rest.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> ' How can I enhance my Wix website design for better user engagement?',
                        'answer'    => 'Elevate your Wix website design with modern aesthetics and intuitive navigation. Capture your audience\'s attention with compelling visuals and streamline their journey through seamless user interfaces. Let your brand shine with customized elements and responsive layouts that adapt beautifully across devices.',
                    ],
                    [
                        'question'  => 'What strategies can I employ to revamp my existing Wix website for better performance?',
                        'answer'    => 'Transform your Wix website with a strategic redesign focused on boosting performance. Assess user feedback and analytics to pinpoint areas for improvement. Optimize loading times, enhance SEO, and integrate dynamic features to captivate visitors and drive conversions. With a refreshed design and enhanced functionality, propel your online presence to new heights.',
                    ],
                    [
                        'question'  => 'Why choose me for your Wix website design needs?',
                        'answer'    => 'Entrust your Wix website design to a seasoned professional dedicated to realizing your vision. With a keen eye for detail and a passion for creativity, I craft captivating designs tailored to your brand identity and audience preferences. From conceptualization to execution, rest assured that your Wix website will exude professionalism and captivate your target audience.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 35
                'author_id'         => 15,
                'title'             => 'I will develop responsive wordpress website design or modern wordpress website',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you looking for a professional WordPress website that is both responsive and modern in design? Look no further! I specialize in developing custom WordPress websites that are tailored to your specific needs.</p>
                                        <p>With years of experience in web development, I can create a responsive WordPress website that looks great on any device, from desktop computers to smartphones and tablets. Your website will be designed with the latest trends in mind, ensuring a modern and visually appealing look.</p>
                                        <p>Using WordPress as a platform allows for flexibility and scalability, so whether you need a simple blog or a complex e-commerce site, Ive got you covered. Ill work closely with you to understand your requirements and deliver a website that exceeds your expectations.</p>
                                        <ul>
                                            <li>Custom WordPress theme development</li>
                                            <li>Responsive design for all devices</li>
                                            <li>Integration of modern design elements</li>
                                            <li>Optimization for speed and performance</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to developing your WordPress website, I provide ongoing support and maintenance to ensure your site remains up-to-date and secure. Whether you need minor updates or major revisions, Im here to help.</p>
                                        <p>Lets work together to bring your vision to life and create a stunning WordPress website that sets you apart from the competition. Contact me today to get started!</p>
                                        <p>Your satisfaction is my priority, and Im committed to delivering a website that not only meets but exceeds your expectations. Lets make your online presence shine with a responsive and modern WordPress website!</p></div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will develop a responsive WordPress website design, ensuring it meets modern standards and is user-friendly.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will create a modern WordPress website, incorporating responsive design principles to ensure optimal viewing across various devices.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will craft a premium WordPress website with meticulous attention to detail, guaranteeing a contemporary design and seamless functionality for an exceptional user experience.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I ensure my WordPress website design is modern and responsive?',
                        'answer'    => 'Creating a modern and responsive WordPress website involves utilizing the latest design trends and technologies. From sleek layouts to fluid grids and flexible images, I\'ll craft your website to adapt seamlessly across all devices, ensuring an optimal user experience.',
                    ],
                    [
                        'question'  => 'What makes a WordPress website stand out in terms of design and responsiveness?',
                        'answer'    => 'A standout WordPress website combines visually appealing design elements with responsiveness to cater to diverse device screens. By employing cutting-edge techniques such as CSS media queries and mobile-first design principles, your website will not only look stunning but also function flawlessly on smartphones, tablets, and desktops.',
                    ],
                    [
                        'question'  => 'Can you guarantee that my WordPress website will be both visually captivating and fully responsive?',
                        'answer'    => 'Absolutely! With my expertise in modern WordPress development, I\'ll design a visually captivating website that seamlessly adjusts to various screen sizes and resolutions. By leveraging responsive design frameworks and optimizing for performance, your website will engage visitors across all devices, enhancing user satisfaction and driving conversions.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 36
                'author_id'         => 15,
                'title'             => 'I will manual web scraping, data mining, data collection for accuracy',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Accurate data is crucial for making informed decisions in todays business landscape. With my expertise in manual web scraping, data mining, and data collection, I ensure that you receive high-quality, reliable data that meets your specific needs.</p>
                                        <p>Using advanced techniques and meticulous attention to detail, I manually extract data from various online sources, ensuring accuracy and completeness. Whether you need market research, competitor analysis, or product information, I deliver precise data tailored to your requirements.</p>
                                        <p>My manual approach allows me to navigate complex websites and bypass anti-scraping measures, ensuring that no valuable data is missed. I adhere to ethical standards and respect website terms of service, guaranteeing that the data collection process is legal and ethical.</p>
                                        <ul>
                                            <li>Customized data extraction based on your specific requirements</li>
                                            <li>Thorough verification and validation to ensure data accuracy</li>
                                            <li>Comprehensive data cleaning and processing for usability</li>
                                            <li>Delivery of data in your preferred format for seamless integration</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to accurate data collection, I provide ongoing support to address any questions or concerns you may have. Whether you need assistance with data analysis, visualization, or interpretation, I am here to help you make the most of your data.</p>
                                        <p>By leveraging my expertise in manual web scraping and data mining, you can gain valuable insights that drive strategic decision-making and business growth. Lets work together to unlock the power of data and achieve your goals.</p>
                                        <p>Contact me today to discuss your project requirements and see how I can help you with manual web scraping, data mining, and data collection for accuracy.</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will manually conduct web scraping, data mining, and data collection to ensure accuracy.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will meticulously perform web scraping, data mining, and data collection tasks for precise results.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will expertly execute web scraping, data mining, and data collection operations with a focus on accuracy and efficiency.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I ensure accurate data collection through manual web scraping?',
                        'answer'    => 'Manual web scraping involves meticulously navigating through web pages, scrutinizing data, and extracting relevant information with precision. This hands-on approach guarantees accuracy as each data point is carefully selected and verified.',
                    ],
                    [
                        'question'  => 'What methods can I employ for effective data mining through manual techniques?',
                        'answer'    => 'Data mining through manual techniques requires a systematic approach. By carefully inspecting website structures, employing advanced search operators, and cross-referencing multiple sources, one can ensure comprehensive data extraction while maintaining accuracy and reliability.',
                    ],
                    [
                        'question'  => 'Why is manual data collection crucial for ensuring data accuracy in web scraping?',
                        'answer'    => 'Manual data collection allows for a thorough examination of each data point, ensuring its relevance and accuracy. By personally curating the extracted information, one can identify and rectify any discrepancies, thus enhancing the overall quality and reliability of the collected data.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 37
                'author_id'         => 16,
                'title'             => 'I will scrape a website and return the results in a excel file',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you in need of data from a website but dont have the time or resources to gather it manually? Look no further! I specialize in web scraping services, where I extract data from websites and deliver the results to you in an Excel file format.</p>
                                        <p>With my expertise in web scraping techniques, I can efficiently retrieve the information you require, whether its product details, pricing data, customer reviews, or any other type of content available on the web. By automating the data extraction process, I ensure accuracy and consistency in the results.</p>
                                        <p>My web scraping services are tailored to your specific needs, ensuring that you receive the data you need in a format that is easy to analyze and manipulate. Whether youre conducting market research, gathering business intelligence, or seeking competitive insights, I can help you obtain the information you need to make informed decisions.</p>
                                        <ul>
                                            <li>Custom web scraping solutions for your unique requirements</li>
                                            <li>Efficient extraction of data from multiple websites</li>
                                            <li>Delivery of results in Excel format for easy analysis</li>
                                            <li>Optional data cleaning and formatting services</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to delivering the scraped data in an Excel file, I provide ongoing support to ensure your satisfaction. Whether you need updates to the scraping process, assistance with data analysis, or troubleshooting support, I am here to help.</p>
                                        <p>Dont let valuable data slip through the cracks. Contact me today to discuss your web scraping needs and let me help you unlock the insights hidden within the vast expanse of the web.</p>
                                        <p>Your satisfaction is my priority, and I am committed to delivering accurate, timely, and reliable results for all your web scraping requirements.</p></div>',
                'attachments'       => [ 1,2,3],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => ' I will scrape a website and return the results in an Excel file. Enjoy hassle-free data extraction!',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Dive into the world of web scraping with ease! Let me scrape a website and provide you with the results neatly organized in an Excel file.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Unlock the full potential of web scraping with our premium package. Sit back and relax as I scrape a website and deliver comprehensive results in an Excel file, tailored to your needs.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I efficiently scrape a website for data?',
                        'answer'    => 'To scrape a website effectively, you can utilize Python\'s BeautifulSoup or Scrapy libraries. These tools offer robust functionalities for extracting data from web pages, allowing you to specify the elements you want to retrieve and navigate through the website\'s structure.',
                    ],
                    [
                        'question'  => 'What are some best practices for web scraping to ensure data integrity?',
                        'answer'    => 'Maintaining data integrity during web scraping is crucial. Always review the website\'s terms of service to ensure compliance, and implement rate limiting to prevent overwhelming the server. Additionally, validate extracted data to filter out anomalies and errors, and consider using proxies to avoid IP bans.',
                    ],
                    [
                        'question'  => 'How can I export scraped data to an Excel file?',
                        'answer'    => 'After extracting data using web scraping tools, you can easily export it to an Excel file using Python\'s pandas library. Simply create a DataFrame with the scraped data and then use the to_excel() function to save it as an Excel file. This approach provides a convenient way to organize and analyze the scraped data further.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 38
                'author_id'         => 16,
                'title'             => 'I will give professional power bi support, dax and power query',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Whether youre new to Power BI or looking to optimize your existing reports, I provide professional support and expertise in Power BI, DAX, and Power Query. With years of experience in data analysis and visualization, I can help you unlock the full potential of your data and transform it into actionable insights.</p>
                                        <p>From creating custom visualizations to optimizing DAX calculations, I offer comprehensive support tailored to your specific needs. Whether you need assistance with data modeling, report design, or troubleshooting, I have the skills and knowledge to guide you every step of the way.</p>
                                        <p>With Power BI, the possibilities are endless. Whether youre a small business or a large enterprise, I can help you harness the power of your data to make better decisions and drive business growth. Let me be your trusted partner in achieving your data analytics goals.</p>
                                        <ul>
                                            <li>Custom Power BI report development</li>
                                            <li>Optimization of DAX calculations</li>
                                            <li>Data modeling and transformation using Power Query</li>
                                            <li>Integration with other data sources and tools</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to professional support, I provide personalized training and resources to empower you and your team to become proficient in Power BI, DAX, and Power Query. Whether youre a beginner or an advanced user, I offer guidance and assistance to help you succeed.</p>
                                        <p>Dont let your data go to waste. With the right tools and expertise, you can turn raw data into valuable insights that drive business success. Let me help you unleash the power of Power BI and take your data analytics to the next level.</p>
                                        <p>Contact me today to discuss your specific needs and see how I can help you achieve your data analytics goals with professional Power BI support, DAX, and Power Query expertise.</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Receive professional support for Power BI, including assistance with DAX and Power Query',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Get expert guidance on Power BI, along with comprehensive support for DAX and Power Query.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Unlock top-tier support for Power BI, featuring specialized assistance with DAX and Power Query.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'What are some essential DAX functions for optimizing Power BI reports?',
                        'answer'    => 'To enhance your Power BI reports, mastering DAX functions is crucial. Functions like CALCULATE, SUMX, and RELATED can dramatically improve your data analysis capabilities, allowing for dynamic calculations, context modification, and efficient data relationships.',
                    ],
                    [
                        'question'  => 'How can Power Query streamline data preparation for Power BI dashboards?',
                        'answer'    => 'Power Query is a game-changer for data preparation in Power BI. With its intuitive interface and powerful transformations, you can effortlessly clean, transform, and merge datasets from various sources. Techniques like data type conversion, custom column creation, and merge queries empower you to create robust data models for insightful dashboards.',
                    ],
                    [
                        'question'  => 'What level of support do you provide for troubleshooting Power BI issues?',
                        'answer'    => 'Our professional Power BI support ensures that you never get stuck with technical challenges. Whether it\'s resolving formula errors in DAX measures, optimizing data loading performance in Power Query, or troubleshooting connection issues with data sources, our expertise covers a wide range of problems to keep your Power BI projects running smoothly.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 39
                'author_id'         => 16,
                'title'             => 'I will do everything in excel macro vba, formulas, database',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Excel is a powerful tool for data management and analysis, and I specialize in leveraging its capabilities to their fullest extent. Whether you need assistance with creating complex formulas, designing efficient macros using VBA, or setting up and managing databases within Excel, I have the expertise to handle all your requirements.</p>
                                        <p>From automating repetitive tasks to building interactive dashboards, I can help streamline your workflow and maximize your productivity. With extensive experience in Excel development, I can tailor solutions to meet your specific needs and ensure seamless integration with your existing processes.</p>
                                        <p>My services include:</p>
                                        <ul>
                                            <li>Creating advanced Excel formulas to perform complex calculations and data analysis</li>
                                            <li>Developing custom macros using VBA to automate repetitive tasks and improve efficiency</li>
                                            <li>Designing and optimizing databases within Excel for efficient data storage and retrieval</li>
                                            <li>Providing training and support to help you make the most of Excels features and functionality</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>With my expertise in Excel Macro VBA, formulas, and database management, you can expect tailored solutions that meet your unique requirements and deliver tangible results. Whether youre looking to streamline your workflow, improve data accuracy, or gain deeper insights from your data, Im here to help.</p>
                                        <p>Lets work together to unlock the full potential of Excel for your business. Whether youre a beginner or an advanced user, Ill provide the support and guidance you need to succeed.</p>
                                        <p>Contact me today to discuss your project and see how I can help you harness the power of Excel for your business needs.</p></div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will provide comprehensive solutions for your Excel needs, utilizing advanced techniques in VBA, formulas, and database integration.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will deliver widely sought-after Excel solutions, employing proficiency in VBA, formulas, and database management to meet your requirements.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will offer top-tier Excel services, leveraging expertise in VBA, formulas, and database operations to exceed your expectations and achieve optimal results.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I automate repetitive tasks in Excel using VBA?',
                        'answer'    => ' By leveraging VBA (Visual Basic for Applications), you can create macros to automate repetitive tasks in Excel. VBA allows you to write custom scripts to perform actions like data manipulation, formatting, and even interaction with external databases.',
                    ],
                    [
                        'question'  => 'What are some essential Excel formulas for data analysis and reporting?',
                        'answer'    => 'Excel offers a wide range of powerful formulas for data analysis and reporting. Functions like VLOOKUP, SUMIFS, and INDEX-MATCH can help you extract and summarize data efficiently. Additionally, formula auditing tools such as IFERROR and ISERROR are invaluable for error handling in complex spreadsheets.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 40
                'author_id'         => 16,
                'title'             => 'I will do web scraping with python scrapy or selenium',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you in need of valuable data from websites but dont have the time or resources to manually collect it? Look no further! I specialize in web scraping using Python with Scrapy or Selenium, two powerful tools for extracting data from the web efficiently and reliably.</p>
                                        <p>With Python Scrapy, I can create custom spiders to crawl websites and extract specific information according to your requirements. Whether you need data from e-commerce sites, news portals, or social media platforms, Scrapy allows for precise and targeted scraping.</p>
                                        <p>Alternatively, if your scraping needs require dynamic interactions with websites, Selenium is the perfect solution. Using Selenium WebDriver, I can automate web browsers to navigate through pages, interact with elements, and extract data from JavaScript-rendered content.</p>
                                        <ul>
                                            <li>Custom web scraping solutions tailored to your needs</li>
                                            <li>Efficient data extraction from various websites</li>
                                            <li>Scalable scraping solutions for large datasets</li>
                                            <li>Comprehensive error handling and data validation</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to providing high-quality web scraping services, I offer ongoing support and maintenance to ensure your scraping projects run smoothly. From troubleshooting issues to scaling up scraping operations, I am committed to delivering reliable and accurate results.</p>
                                        <p>Lets discuss your web scraping needs and how I can help you leverage the power of Python Scrapy or Selenium to extract valuable data for your business or research projects. Get in touch today to get started!</p>
                                        <p>Your satisfaction is guaranteed. I strive to exceed your expectations and deliver web scraping solutions that provide actionable insights and drive your success.</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will perform web scraping using Python with either Scrapy or Selenium.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'I will conduct web scraping using Python with either Scrapy or Selenium.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will execute web scraping using Python with either Scrapy or Selenium.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'What are the benefits of using Python Scrapy for web scraping?',
                        'answer'    => 'Python Scrapy offers a robust framework for web scraping, allowing developers to efficiently extract data from websites. Its asynchronous architecture enables faster scraping, while its built-in features like automatic request throttling and user-agent rotation enhance scraping efficiency.',
                    ],
                    [
                        'question'  => 'How does Selenium facilitate web scraping tasks?',
                        'answer'    => 'Selenium is a powerful tool for web scraping, particularly useful for scraping dynamic websites with JavaScript-generated content. By automating web browsers, Selenium enables interaction with web elements, making it possible to scrape data from pages that rely heavily on client-side rendering.',
                    ],
                    [
                        'question'  => 'Which factors should I consider when choosing between Python Scrapy and Selenium for web scraping?',
                        'answer'    => 'When deciding between Python Scrapy and Selenium, consider the complexity of the target website. Use Python Scrapy for simpler, static websites where asynchronous scraping suffices. For more complex sites with dynamic content, opt for Selenium to navigate through JavaScript-driven elements and interact with the page as a user would.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 41
                'author_id'         => 17,
                'title'             => 'I will organize, clean and merge data',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Organizing, cleaning, and merging data is crucial for making informed decisions and optimizing processes. Whether youre dealing with large datasets or complex information structures, I have the expertise to streamline your data management workflow.</p>
                                        <p>With meticulous attention to detail, I ensure that your data is organized in a logical manner, free from inconsistencies and errors. By implementing best practices and utilizing advanced tools, I help you unlock the full potential of your data.</p>
                                        <p>From data cleansing and standardization to merging disparate datasets, I offer comprehensive solutions tailored to your specific needs. Whether youre looking to improve data quality, enhance analysis capabilities, or streamline reporting processes, I have the skills and experience to deliver results.</p>
                                        <ul>
                                            <li>Data organization and structuring for easy access and retrieval</li>
                                            <li>Data cleaning to remove duplicates, errors, and inconsistencies</li>
                                            <li>Data merging to consolidate information from multiple sources</li>
                                            <li>Ensuring data integrity and accuracy through rigorous quality checks</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to organizing, cleaning, and merging your data, I provide ongoing support to ensure your data remains accurate, reliable, and up-to-date. Whether you need periodic maintenance or assistance with specific tasks, I am here to help you make the most of your data assets.</p>
                                        <p>With my expertise and dedication to excellence, you can trust that your data management needs are in good hands. Lets work together to optimize your data processes and drive better decision-making across your organization.</p>
                                        <p>Get in touch today to discuss your project requirements and see how I can help you achieve your data management goals.</p></div>',
                'attachments'       => [ 13,14,15 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will organize, clean, and merge data to streamline your information management.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => ' I will organize, clean, and merge data to optimize your data flow and enhance efficiency.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'I will organize, clean, and merge data with meticulous attention to detail, ensuring seamless integration and enhanced data quality.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I enhance my skills in WordPress development?',
                        'answer'    => 'Enhancing your skills in WordPress development involves consistent practice, staying updated with the latest trends and technologies, and actively seeking feedback from peers and mentors. Additionally, engaging in online communities, participating in workshops or webinars, and exploring advanced tutorials can also contribute significantly to your growth as a WordPress developer.',
                    ],
                    [
                        'question'  => 'What are some effective strategies to optimize WordPress development productivity?',
                        'answer'    => 'Optimizing productivity in WordPress development requires a combination of efficient workflow management, utilizing time-saving tools and plugins, and maintaining a clean and organized codebase. Moreover, adopting agile development methodologies, setting realistic goals, and prioritizing tasks based on their importance and urgency can help streamline your development process and enhance overall productivity.',
                    ],
                    [
                        'question'  => 'How can I overcome common challenges in WordPress development?',
                        'answer'    => 'Overcoming common challenges in WordPress development involves identifying the root causes of issues such as plugin conflicts, performance bottlenecks, or security vulnerabilities, and implementing appropriate solutions. This may include conducting thorough testing, adhering to coding best practices, and seeking assistance from the WordPress community or professional developers when encountering complex problems. Additionally, staying proactive in updating software dependencies and staying vigilant against emerging threats can help mitigate potential challenges in the development process.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 42
                'author_id'         => 17,
                'title'             => 'I will do web scraping, data mining any website up to 100k records in 1 day',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you in need of extensive web scraping and data mining services? Look no further! I specialize in extracting valuable data from any website, delivering up to 100k records in just 1 day.</p>
                                        <p>Using advanced scraping techniques, I can gather a wide range of information efficiently and accurately. Whether you require data for market research, competitor analysis, or any other purpose, I ensure timely delivery without compromising on quality.</p>
                                        <p>My services include:</p>
                                        <ul>
                                            <li>Customized web scraping solutions tailored to your specific requirements</li>
                                            <li>Extraction of data from multiple sources and formats</li>
                                            <li>Cleaning and formatting of scraped data for easy analysis</li>
                                            <li>Delivery of up to 100k records within a single day</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>Not only do I provide fast and reliable web scraping services, but I also offer ongoing support to ensure your data needs are met efficiently. Whether you need updates, modifications, or additional scraping tasks, I am here to help.</p>
                                        <p>Dont let valuable data slip through the cracks. Contact me today to discuss your web scraping requirements and lets get started on extracting the insights you need to drive your business forward.</p>
                                        <p>Your satisfaction is guaranteed. I take pride in delivering accurate and timely results that meet your expectations. Trust me to handle your web scraping needs with professionalism and efficiency.</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Extract data from any website, delivering up to 100k records within 24 hours.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Efficiently scrape and mine data from websites, offering up to 100k records in just one day.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Comprehensive web scraping and data mining service, capable of handling up to 100k records within a single day.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can web scraping enhance my business operations?',
                        'answer'    => 'Web scraping provides invaluable insights by extracting data from various online sources, empowering businesses to make data-driven decisions. It enables efficient market research, competitor analysis, and trend monitoring, thereby optimizing strategies for growth and success.',
                    ],
                    [
                        'question'  => 'What advantages does data mining offer for market analysis?',
                        'answer'    => 'Data mining equips businesses with the ability to uncover hidden patterns and trends within vast datasets, facilitating comprehensive market analysis. By leveraging this technique, companies gain deeper insights into consumer behavior, preferences, and market dynamics, enabling them to refine marketing strategies and stay ahead of the competition.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 43
                'author_id'         => 17,
                'title'             => 'I will optimize website SEO service on wordpress, shopify, wix for google top ranking',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Ensuring your website ranks high on Google is crucial for attracting organic traffic and reaching your target audience. With my SEO optimization service, I specialize in improving the search engine ranking of WordPress, Shopify, and Wix websites.</p>
                                        <p>By utilizing the latest SEO techniques and strategies, I optimize your website to meet Googles ranking criteria and increase its visibility in search results. From keyword research to on-page optimization, I cover all aspects of SEO to help your website achieve top rankings.</p>
                                        <p>My SEO service includes:</p>
                                        <ul>
                                            <li>Keyword research to identify relevant and high-traffic keywords</li>
                                            <li>On-page optimization, including meta tags, headings, and content optimization</li>
                                            <li>Technical SEO audit to identify and fix any issues that may affect your websites performance</li>
                                            <li>Off-page optimization, such as link building and social media integration, to improve your websites authority and credibility</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>With my SEO service, you can expect to see significant improvements in your websites search engine ranking and organic traffic. By targeting the right keywords and optimizing your website for Google, I help you attract more visitors and increase your online visibility.</p>
                                        <p>Whether youre running a WordPress blog, a Shopify e-commerce store, or a Wix website, my SEO service can help you achieve top rankings and drive more leads and sales. Get in touch today to learn more about how I can optimize your website for Googles top ranking.</p>
                                        <p>Dont let your website get lost in the vastness of the internet. With my SEO expertise, I ensure your website stands out and reaches the right audience. Lets work together to take your online presence to the next level.</p></div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Enhance your online visibility with our Basic SEO package. Our expert team will optimize your website SEO on platforms like WordPress, Shopify, or Wix, ensuring it climbs the ranks on Google. Let us help you reach the top of search engine results and attract more organic traffic to your site',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Boost your website performance with our Popular SEO package. We specialize in optimizing SEO for WordPress, Shopify, or Wix websites, propelling them towards the top of Google search results. With our tailored strategies, your site will gain increased visibility, attract more visitors, and ultimately grow your online presence.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Elevate your online presence with our Premium SEO package. Our seasoned professionals will meticulously optimize your websites SEO for platforms like WordPress, Shopify, or Wix, ensuring it secures top rankings on Google. Experience unparalleled growth as your site attracts a surge of organic traffic, leading to increased visibility, engagement, and conversions.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can optimizing my website improve its ranking on Google?',
                        'answer'    => 'Optimizing your website involves various techniques such as keyword research, on-page optimization, improving site speed, and creating quality content. These methods help search engines like Google better understand your website\'s relevance to users\' search queries, ultimately improving your chances of ranking higher in search results.',
                    ],
                    [
                        'question'  => 'What specific SEO techniques do you use for WordPress websites?',
                        'answer'    => 'For WordPress websites, I employ a combination of strategies including optimizing meta tags, improving website speed, ensuring mobile responsiveness, creating SEO-friendly URLs, optimizing images, and implementing schema markup. These techniques are essential for enhancing your WordPress site\'s visibility and ranking on search engine results pages.',
                    ],
                    [
                        'question'  => 'How does SEO optimization differ between WordPress, Shopify, and Wix platforms?',
                        'answer'    => 'While the fundamental principles of SEO remain the same across different platforms, the implementation may vary. For WordPress, I focus on utilizing plugins like Yoast SEO for comprehensive optimization. With Shopify, I optimize product pages, collections, and ensure proper use of meta tags. For Wix, I leverage its built-in SEO tools to optimize page titles, descriptions, and headings, while also paying attention to mobile optimization and site structure.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 44
                'author_id'         => 17,
                'title'             => 'I will optimize your website with SEO',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Optimizing your website for search engines is crucial to improve its visibility and attract more organic traffic. With my expertise in SEO, I can help your website climb the search engine rankings and reach a wider audience.</p>
                                        <p>From keyword research to on-page optimization, I employ proven strategies to ensure your website is easily discoverable by search engines. By optimizing your content, meta tags, and site structure, I can enhance your websites relevance and authority in the eyes of search engines.</p>
                                        <p>My SEO services include:</p>
                                        <ul>
                                            <li>Keyword research and analysis</li>
                                            <li>On-page optimization for targeted keywords</li>
                                            <li>Technical SEO audits and fixes</li>
                                            <li>Link building strategies to improve domain authority</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>With my comprehensive approach to SEO, you can expect long-term results that drive consistent organic traffic to your website. I stay updated with the latest algorithm changes and industry trends to ensure your website remains competitive in the ever-evolving landscape of search engine optimization.</p>
                                        <p>Ready to take your website to the next level? Lets optimize your website for SEO and unlock its full potential. Contact me today to discuss your project and see how I can help you achieve your goals.</p>
                                        <p>Your success is my priority. I am dedicated to providing personalized SEO solutions that align with your business objectives and drive measurable results. Together, we can elevate your online presence and grow your business through effective SEO strategies.</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Enhance your online visibility with our Basic SEO package. Our expert team will optimize your websites SEO on platforms like WordPress, Shopify, or Wix, ensuring it climbs the ranks on Google. Let us help you reach the top of search engine results and attract more organic traffic to your site.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Boost your websites performance with our Popular SEO package. We specialize in optimizing SEO for WordPress, Shopify, or Wix websites, propelling them towards the top of Google search results. With our tailored strategies, your site will gain increased visibility, attract more visitors, and ultimately grow your online presence',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Elevate your online presence with our Premium SEO package. Our seasoned professionals will meticulously optimize your website SEO for platforms like WordPress, Shopify, or Wix, ensuring it secures top rankings on Google. Experience unparalleled growth as your site attracts a surge of organic traffic, leading to increased visibility, engagement, and conversions.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can SEO optimization enhance my website\'s visibility?',
                        'answer'    => 'SEO optimization involves various strategies to improve your website\'s visibility on search engine results pages (SERPs). By implementing keyword research, content optimization, backlink building, and technical improvements, your website can rank higher for relevant search queries, attracting more organic traffic and potential customers.',
                    ],
                    [
                        'question'  => 'What specific SEO techniques do you use to boost website rankings?',
                        'answer'    => 'Our SEO optimization process includes comprehensive keyword analysis to target the most relevant terms for your business. We optimize on-page elements such as meta tags, headings, and content structure to improve search engine crawlability and relevance. Additionally, we focus on off-page tactics like link building and local SEO to strengthen your website\'s authority and visibility across the web.',
                    ],
                    [
                        'question'  => 'How long does it take to see results from SEO optimization?',
                        'answer'    => 'The timeline for seeing results from SEO optimization can vary based on factors like your website\'s current status, competition level, and the effectiveness of implemented strategies. Generally, significant improvements may start to appear within a few months, but achieving top rankings and sustaining them often requires ongoing optimization efforts and monitoring to adapt to changes in search engine algorithms and market trends.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 45
                'author_id'         => 18,
                'title'             => 'I will white hat seo link building service manual backlink strategy for google top rank',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>As an expert in white hat SEO strategies, I offer a comprehensive link building service aimed at improving your websites ranking on Google. With a manual backlink strategy, I ensure that your site gains high-quality links from reputable sources, helping you achieve top positions in search results.</p>
                                        <p>Using ethical and sustainable methods, I employ proven techniques to build a diverse and natural link profile for your website. This not only enhances your search engine visibility but also establishes your site as a trustworthy authority in your industry.</p>
                                        <p>With a focus on long-term success, I prioritize quality over quantity, ensuring that each backlink is relevant and beneficial to your site. By following Googles guidelines and best practices, I mitigate the risk of penalties and ensure sustainable growth for your online presence.</p>
                                        <ul>
                                            <li>Manual backlink strategy tailored to your websites needs</li>
                                            <li>White hat SEO techniques for ethical link building</li>
                                            <li>Focus on high-quality, relevant backlinks from authority sites</li>
                                            <li>Transparent reporting and ongoing support for optimal results</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to link building, I provide comprehensive SEO services to optimize your website for maximum visibility and performance. From keyword research to on-page optimization, I cover all aspects of SEO to help you achieve your goals and dominate the search results.</p>
                                        <p>With my proven track record of success, you can trust me to deliver results that drive traffic, increase conversions, and boost your bottom line. Lets work together to take your website to the next level and secure top rankings on Google.</p>
                                        <p>Contact me today to discuss your project and learn more about how my white hat SEO link building service can benefit your business.</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'A foundational approach to SEO link building, employing white hat strategies to enhance your website\'s visibility and credibility. Our manual backlink strategy ensures organic growth, paving the way for improved rankings on Google.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Our most sought-after SEO package, designed to propel your website to the top of search engine results. Utilizing manual backlinking techniques, we deploy a comprehensive strategy to boost your online presence and secure higher rankings on Google.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'The ultimate SEO solution for businesses aiming for unparalleled success online. With our premium package, we implement a meticulous manual backlink strategy, guaranteeing your website ascent to the pinnacle of Google search results.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How does white hat SEO contribute to improved Google rankings?',
                        'answer'    => 'White hat SEO practices adhere to search engine guidelines, focusing on quality content, proper keyword usage, and organic link building. By following ethical strategies, websites gain trust and authority, leading to higher rankings on Google over time.',
                    ],
                    [
                        'question'  => 'What manual backlink strategies are effective for sustainable SEO growth?',
                        'answer'    => 'Manual backlink strategies involve genuine outreach to relevant websites, fostering relationships for link placements. Tactics include guest blogging, resource page outreach, and building partnerships within the industry. These methods ensure high-quality backlinks that contribute to long-term SEO success.',
                    ],
                    [
                        'question'  => 'How can I ensure top Google rank through manual link building?',
                        'answer'    => 'Consistency and quality are key in manual link building for Google\'s top rank. Focus on acquiring backlinks from authoritative sites within your niche, diversifying anchor text, and avoiding link schemes. By prioritizing relevance and value, your website can steadily climb the ranks while maintaining Google\'s trust and compliance with SEO best practices.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 46
                'author_id'         => 18,
                'title'             => 'I will do ultimate SEO service for guaranteed ranking improvements',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you looking to improve your websites search engine rankings and drive more organic traffic? Look no further! With my ultimate SEO service, I guarantee significant improvements in your websites ranking on search engine results pages (SERPs).</p>
                                        <p>Using the latest SEO techniques and strategies, I will optimize your website to ensure it ranks higher for relevant keywords and attracts more potential customers. From keyword research to on-page optimization and link building, I will implement a comprehensive SEO strategy tailored to your specific needs and goals.</p>
                                        <p>With my proven track record of delivering results, you can trust that your website is in good hands. I take a data-driven approach to SEO, constantly monitoring performance and making adjustments to maximize your ROI.</p>
                                        <ul>
                                            <li>Keyword research and analysis to identify the most valuable opportunities</li>
                                            <li>On-page optimization including meta tags, headings, and content optimization</li>
                                            <li>Off-page optimization through high-quality link building and outreach</li>
                                            <li>Regular reporting and analysis to track progress and measure success</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to improving your websites search engine rankings, my ultimate SEO service includes ongoing support and consultation to ensure long-term success. I will keep you updated on the latest trends and best practices in SEO, helping you stay ahead of the competition.</p>
                                        <p>Dont settle for mediocre search engine rankings. Invest in my ultimate SEO service and experience guaranteed improvements in your websites visibility and traffic. Get started today and take your online presence to the next level!</p>
                                        <p>Your satisfaction is my priority. I am committed to delivering results that exceed your expectations and drive real business growth. Lets work together to achieve your SEO goals and unlock the full potential of your website.</p></div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Boost your online visibility with our Starter SEO package. Our expert team will implement essential SEO techniques to enhance your website\'s ranking and drive more organic traffic to your business.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Take your online presence to the next level with our Pro SEO package. We offer comprehensive SEO strategies tailored to your specific business needs, including keyword optimization, content enhancements, and technical SEO improvements.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience unparalleled growth with our Enterprise SEO package. Our dedicated team of SEO specialists will execute advanced optimization strategies to dominate search engine results and secure top rankings for your website.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How long does it take to see improvements in website rankings with your SEO service?',
                        'answer'    => 'With our ultimate SEO service, you can expect to see noticeable improvements in your website rankings within the first few weeks. However, sustained ranking improvements typically take a few months as search engines gradually index and recognize the optimizations we implement.',
                    ],
                    [
                        'question'  => 'What sets your ultimate SEO service apart from other providers?',
                        'answer'    => 'Our ultimate SEO service goes beyond conventional techniques, incorporating cutting-edge strategies tailored to your specific niche and target audience. We prioritize a holistic approach, combining on-page optimizations, technical enhancements, and authoritative link building to ensure comprehensive and lasting ranking improvements.',
                    ],
                    [
                        'question'  => 'Can you guarantee specific ranking positions for my website?',
                        'answer'    => 'While we can\'t guarantee specific ranking positions due to the dynamic nature of search engine algorithms, our ultimate SEO service is designed to maximize your website\'s visibility and organic traffic. We focus on delivering tangible results through ethical and sustainable optimization practices, ensuring your website achieves its full potential in search engine results pages (SERPs).',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 47
                'author_id'         => 18,
                'title'             => 'I will do monthly SEO backlinks service with white hat link building',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Enhancing your websites SEO performance is crucial for attracting more organic traffic and improving your online visibility. With my monthly SEO backlinks service, I employ white hat link building strategies to boost your websites search engine rankings.</p>
                                        <p>Through a meticulous process, I focus on acquiring high-quality backlinks from authoritative websites in your niche. These backlinks not only drive traffic directly to your site but also signal to search engines that your website is credible and valuable to users.</p>
                                        <p>My approach to link building prioritizes relevance, quality, and sustainability. I stay updated with the latest SEO trends and algorithm changes to ensure that your backlink profile remains strong and compliant with search engine guidelines.</p>
                                        <ul>
                                            <li>Customized link building strategy tailored to your websites needs</li>
                                            <li>Manual outreach to relevant websites for link acquisition</li>
                                            <li>Analysis of competitors backlink profiles to identify opportunities</li>
                                            <li>Regular monitoring and reporting of backlink performance</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to monthly backlink services, I provide comprehensive SEO audits and recommendations to optimize your websites on-page SEO factors. I believe in transparent communication and strive to deliver measurable results that contribute to your long-term success.</p>
                                        <p>If youre ready to take your SEO efforts to the next level and achieve sustainable growth, lets collaborate. Contact me today to discuss how my white hat link building services can benefit your website and improve your online presence.</p>
                                        <p>Your satisfaction is my priority. I am dedicated to helping your website reach its full potential and exceed your expectations. Lets work together to elevate your SEO strategy and drive meaningful results for your business.</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Get started with our Basic SEO package designed to boost your website\'s visibility. We\'ll implement strategic backlink building techniques to enhance your online presence and improve search engine rankings.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Maximize your SEO efforts with our Popular package, tailored for businesses seeking accelerated growth. Our white hat link building strategies will drive targeted traffic to your site, increasing leads and conversions.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience the ultimate SEO solution with our Premium package. Elevate your website\'s authority and dominate search engine results pages with our comprehensive backlink service, meticulously crafted for optimal performance.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'What is the importance of monthly SEO backlinks service?',
                        'answer'    => 'Monthly SEO backlinks service plays a crucial role in improving your website\'s search engine rankings. By consistently building quality backlinks through white hat techniques, you can enhance your site\'s authority and visibility, ultimately driving more organic traffic and potential customers to your business.',
                    ],
                    [
                        'question'  => ' How do white hat link building techniques benefit my website?',
                        'answer'    => 'White hat link building techniques focus on obtaining backlinks from reputable and relevant sources through ethical means. These techniques not only help improve your website\'s search engine rankings but also establish your site as a trustworthy and authoritative source in your industry. Additionally, white hat link building ensures long-term sustainability and protects your site from potential penalties imposed by search engines.',
                    ],
                    [
                        'question'  => 'Can you explain the process of monthly SEO backlinks service?',
                        'answer'    => ' Certainly! Our monthly SEO backlinks service involves a comprehensive approach to improving your website\'s search engine optimization. We begin by conducting a thorough analysis of your site\'s current backlink profile and keyword strategy. Then, we develop a customized monthly plan tailored to your specific goals and target audience. Throughout the month, we focus on acquiring high-quality backlinks from authoritative websites related to your niche, ensuring sustainable growth and improved organic rankings for your site.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 48
                'author_id'         => 18,
                'title'             => 'I will be your web3 project nft crypto senior advisor',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Embarking on a Web3 project involving NFTs and cryptocurrencies requires expert guidance to navigate the complexities of the blockchain space. As your senior advisor, I bring extensive experience and in-depth knowledge to help you successfully launch and manage your project.</p>
                                        <p>From conceptualization to execution, I provide strategic insights and practical advice tailored to your specific needs. Whether youre a startup venturing into the world of blockchain or an established company looking to integrate NFTs into your business model, I offer guidance every step of the way.</p>
                                        <p>As the crypto landscape evolves rapidly, staying informed and making informed decisions is crucial. With my expertise, you can confidently navigate the ever-changing terrain of Web3, leveraging the power of NFTs and cryptocurrencies to drive innovation and growth.</p>
                                        <ul>
                                            <li>Strategic planning and project conceptualization</li>
                                            <li>Blockchain technology integration and development</li>
                                            <li>NFT creation, distribution, and monetization strategies</li>
                                            <li>Risk management and regulatory compliance</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>As your dedicated advisor, I am committed to your projects success. I provide ongoing support and guidance, helping you overcome challenges and seize opportunities in the rapidly evolving world of Web3 and crypto. Together, we can unlock the full potential of blockchain technology and NFTs for your business.</p>
                                        <p>Ready to take your Web3 project to the next level? Lets collaborate and turn your vision into reality. Contact me today to discuss your project goals and see how I can help you achieve success in the exciting world of blockchain and cryptocurrencies.</p>
                                        <p>Your satisfaction is my priority. With my expertise and support, you can confidently navigate the complexities of the crypto landscape and make informed decisions that drive your project forward. Lets embark on this journey together and create something extraordinary in the world of Web3.</p></div>',
                'attachments'       => [ 13,14,15 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Get started with expert guidance on your web3 project NFT crypto journey. This package offers essential advice and insights to set your project on the right track. Whether youre new to the world of NFTs or looking for foundational support, I provide you with the knowledge and direction you need to navigate the complexities of the crypto space.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your web3 project NFT crypto venture with the Popular Package. Gain access to comprehensive consultation and strategic recommendations tailored to your specific needs. From refining your project concept to optimizing tokenomics, I work closely with you to maximize the potential of your NFT initiative. This package is ideal for those seeking a balance of expertise and affordability.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Unlock unparalleled expertise and personalized support with the Premium Package. As your senior advisor for web3 project NFT crypto endeavors, I offer dedicated attention and bespoke solutions crafted to propel your project to new heights. From in-depth market analysis to hands-on guidance in blockchain integration, this package delivers the highest level of strategic direction and mentorship for your NFT journey.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'What are the key factors to consider when launching an NFT project in the Web3 space?',
                        'answer'    => 'Launching an NFT project in Web3 demands a meticulous approach. Focus on community engagement, smart contract security, marketplace compatibility, legal compliance, and sustainable tokenomics. By prioritizing these elements, you pave the path for a successful venture.',
                    ],
                    [
                        'question'  => 'How can I ensure the long-term viability and relevance of my NFT project in the rapidly evolving crypto landscape?',
                        'answer'    => 'Sustaining relevance in the dynamic crypto realm necessitates continuous innovation and adaptability. Stay attuned to industry trends, embrace technological advancements, foster community involvement, and maintain transparent communication. Strive for a holistic approach that integrates both utility and creativity to carve a lasting presence.',
                    ],
                    [
                        'question'  => 'What strategies should I employ to navigate regulatory challenges associated with launching an NFT project in the Web3 ecosystem?',
                        'answer'    => 'Regulatory compliance is paramount for the longevity of any Web3 NFT endeavor. Collaborate with legal experts well-versed in blockchain and cryptocurrency regulations. Implement robust KYC/AML procedures, adhere to jurisdiction-specific guidelines, and prioritize transparency in all operations. By proactively addressing regulatory concerns, you fortify your project\'s credibility and mitigate potential risks.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 49
                'author_id'         => 19,
                'title'             => 'I will create over 1000 united kingdom UK backlinks',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Boost your websites search engine ranking with high-quality backlinks from the United Kingdom. With my service, youll receive over 1000 UK-based backlinks that will help improve your sites visibility and drive targeted traffic.</p>
                                        <p>Backlinks from UK websites are valuable for businesses targeting the UK market. They not only signal relevance to search engines but also enhance your sites authority within the UK-specific search results.</p>
                                        <p>My backlink creation process follows industry best practices to ensure the links are genuine, relevant, and from authoritative sources. I utilize a variety of strategies to acquire backlinks from UK domains, including guest posting, directory submissions, and outreach to UK-based websites.</p>
                                        <ul>
                                            <li>Over 1000 high-quality backlinks from United Kingdom websites</li>
                                            <li>Enhanced visibility in UK-specific search engine results</li>
                                            <li>Improved website authority and credibility</li>
                                            <li>Targeted traffic from UK-based audiences</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to the backlink creation service, I provide detailed reports outlining the links generated and their impact on your websites performance. I also offer ongoing support and advice to help you maximize the benefits of your UK backlink profile.</p>
                                        <p>Invest in your websites success with my comprehensive UK backlink service. Get in touch today to discuss your requirements and take the first step towards improving your search engine rankings and growing your online presence in the United Kingdom.</p>
                                        <p>Your satisfaction is my priority, and I am committed to delivering results that exceed your expectations. Lets work together to boost your websites visibility and drive more traffic from the UK market.</p></div>',
                'attachments'       => [ 1,2,3],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Enhance your online presence with our Basic Package. We will strategically create over 1000 United Kingdom (UK) backlinks, ensuring your website gains traction in the UK market. With our expertly crafted backlinks, you experience a significant boost in visibility and authority within the UK digital landscape.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your website ranking and credibility with our Popular Package. Our team specializes in crafting over 1000 high-quality United Kingdom (UK) backlinks tailored to your niche. By leveraging targeted UK backlinks, your website will attract relevant traffic, establish trust, and solidify its position in the competitive UK market.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Dominate the UK search engine results with our Premium Package. We go above and beyond to create over 1000 meticulously curated United Kingdom (UK) backlinks that align seamlessly with your brand and objectives. These premium backlinks will propel your website to the forefront of UK search results, driving organic traffic and fostering long-term success.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How will your UK backlink service benefit my website\'s SEO?',
                        'answer'    => 'Our UK backlink service boosts your website\'s SEO by providing high-quality links from reputable UK-based websites. These backlinks enhance your site\'s authority in the eyes of search engines, improving its ranking for UK-specific searches and driving targeted traffic to your pages.',
                    ],
                    [
                        'question'  => 'Are the backlinks you create from diverse sources across the United Kingdom?',
                        'answer'    => 'Absolutely. Our service ensures diversity in backlink sources, spanning various niches and locations within the UK. By tapping into a wide array of platforms, directories, and websites, we guarantee a comprehensive network of UK-based backlinks that enriches your website\'s online presence and visibility.',
                    ],
                    [
                        'question'  => 'Can you guarantee the quality and relevance of the backlinks you provide?',
                        'answer'    => ' Without a doubt. We meticulously curate backlinks from authoritative UK domains relevant to your niche, ensuring each link adds genuine value to your website. Our approach prioritizes quality over quantity, safeguarding your site from spammy or irrelevant links and fostering organic growth in your search engine rankings.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 50
                'author_id'         => 19,
                'title'             => 'I will do high quality dofollow SEO backlinks high da authority link building service',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you looking to boost your websites search engine ranking and increase organic traffic? Look no further! I specialize in providing high-quality, dofollow SEO backlinks from authoritative websites with high domain authority (DA).</p>
                                        <p>With my link building service, you can expect to see significant improvements in your websites visibility and ranking on search engine results pages (SERPs). I follow white-hat SEO practices to ensure that all backlinks are genuine, relevant, and compliant with search engine guidelines.</p>
                                        <p>My approach to link building focuses on quality over quantity. I carefully select websites with high DA and relevance to your niche, ensuring that each backlink provides maximum value to your websites SEO efforts. By targeting authoritative sources, we can help establish your website as a trusted and authoritative resource in your industry.</p>
                                        <ul>
                                            <li>High-quality, dofollow backlinks from authoritative websites</li>
                                            <li>Increased visibility and ranking on search engine results pages</li>
                                            <li>White-hat SEO practices for long-term sustainability</li>
                                            <li>Customized link building strategies tailored to your specific needs</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to providing high-quality backlinks, I offer comprehensive SEO analysis and reporting to track the performance of your website. I believe in transparency and communication, and Ill keep you informed every step of the way.</p>
                                        <p>My goal is to help your website achieve sustainable growth and success in the competitive online landscape. With my link building service, you can rest assured that your website is in good hands.</p>
                                        <p>Ready to take your SEO to the next level? Contact me today to discuss your project and lets get started on building high-quality backlinks for your website!</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Boost your online presence with our Basic package, offering strategic dofollow SEO backlinks. Increase your website authority and visibility with our high-quality link building service. Reach your target audience and climb the search engine rankings effectively.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your digital footprint with our Popular package, featuring premium dofollow SEO backlinks. Dominate your niche and surpass your competitors with our expert link building service. Enhance your website domain authority and attract organic traffic with ease.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => ' Experience unparalleled growth with our Premium package, delivering top-tier dofollow SEO backlinks. Drive significant traffic to your website and establish your brand as an industry leader. Our meticulous link building service ensures maximum visibility and sustained success in the online landscape.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'What are the benefits of high-quality dofollow SEO backlinks?',
                        'answer'    => ' High-quality dofollow SEO backlinks can significantly improve your website\'s search engine rankings. They signal to search engines that your site is trustworthy and relevant, leading to increased organic traffic. Additionally, these backlinks enhance your site\'s authority and credibility within your industry, ultimately driving more qualified leads and conversions.',
                    ],
                    [
                        'question'  => 'How does authority link building service contribute to website growth?',
                        'answer'    => 'Authority link building service plays a crucial role in enhancing your website\'s authority and domain rating. By acquiring backlinks from reputable and high-domain authority websites, your site gains credibility in the eyes of search engines. This not only boosts your search engine rankings but also attracts more organic traffic and potential customers to your site, fostering sustainable growth and visibility in your niche.',
                    ],
                    [
                        'question'  => 'What distinguishes high DA (Domain Authority) backlinks from other link building strategies?',
                        'answer'    => 'High DA backlinks are valued for their ability to pass authority and credibility to your website. Unlike other link building tactics that may focus solely on quantity, high DA backlinks prioritize quality and relevance. These links originate from websites with established authority and trustworthiness, making them more valuable in the eyes of search engines. Investing in high DA backlinks ensures that your website receives authoritative endorsements, leading to improved search rankings and greater online visibility.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 51
                'author_id'         => 19,
                'title'             => 'I will be your nft discord moderator, admin and manager',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Managing a Discord community focused on NFTs requires dedicated moderation and administration to ensure a safe and engaging environment for members. As your NFT Discord moderator, admin, and manager, I bring experience and expertise to oversee all aspects of your community.</p>
                                        <p>With a proactive approach to moderation, I enforce community guidelines to maintain a positive atmosphere and prevent any disruptive behavior. From handling member inquiries to resolving disputes, I ensure smooth operation and foster meaningful interactions among members.</p>
                                        <p>As an experienced Discord administrator, I handle server setup, configuration, and maintenance to optimize performance and security. I customize roles and permissions to streamline member access and implement effective moderation tools to enhance community management.</p>
                                        <ul>
                                            <li>Proactive moderation to enforce community guidelines</li>
                                            <li>Handling member inquiries and resolving disputes</li>
                                            <li>Server setup, configuration, and maintenance</li>
                                            <li>Customizing roles and permissions for streamlined access</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>With me as your NFT Discord moderator, admin, and manager, you can expect a dedicated partner committed to the success of your community. I provide regular updates, performance monitoring, and strategic guidance to help your community thrive and grow.</p>
                                        <p>Whether youre launching a new Discord server or seeking experienced management for an existing one, Im here to support your goals and ensure a vibrant and welcoming community for NFT enthusiasts.</p>
                                        <p>Lets work together to build and manage a thriving NFT Discord community that fosters collaboration, creativity, and engagement among its members. Contact me today to discuss your specific needs and how I can assist you in achieving your community goals.</p></div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Gain access to basic NFT Discord moderation services with this package. I will keep your Discord server organized, handle basic administrative tasks, and ensure smooth operation.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Upgrade your NFT Discord community with our popular package. In addition to basic moderation and administration, I will actively engage with your members, manage discussions, and foster a lively community environment.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience premium NFT Discord management with this package. From top-tier moderation to strategic community growth, I will serve as your dedicated Discord manager, ensuring the highest standards of engagement and professionalism.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'What are the benefits of high-quality dofollow SEO backlinks?',
                        'answer'    => 'High-quality dofollow SEO backlinks can significantly improve your website\'s search engine rankings. They signal to search engines that your site is trustworthy and relevant, leading to increased organic traffic. Additionally, these backlinks enhance your site\'s authority and credibility within your industry, ultimately driving more qualified leads and conversions.',
                    ],
                    [
                        'question'  => ' How does authority link building service contribute to website growth?',
                        'answer'    => 'Authority link building service plays a crucial role in enhancing your website\'s authority and domain rating. By acquiring backlinks from reputable and high-domain authority websites, your site gains credibility in the eyes of search engines. This not only boosts your search engine rankings but also attracts more organic traffic and potential customers to your site, fostering sustainable growth and visibility in your niche.',
                    ],
                    [
                        'question'  => 'What distinguishes high DA (Domain Authority) backlinks from other link building strategies?',
                        'answer'    => 'High DA backlinks are valued for their ability to pass authority and credibility to your website. Unlike other link building tactics that may focus solely on quantity, high DA backlinks prioritize quality and relevance. These links originate from websites with established authority and trustworthiness, making them more valuable in the eyes of search engines. Investing in high DA backlinks ensures that your website receives authoritative endorsements, leading to improved search rankings and greater online visibility.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 52
                'author_id'         => 19,
                'title'             => 'I will advertise and promote your discord server to over 100k users',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you looking to grow your Discord server and reach a wider audience? Look no further! I specialize in advertising and promoting Discord servers to over 100k active users, helping you expand your community and increase engagement.</p>
                                        <p>With targeted marketing strategies and a dedicated approach, I ensure your server gets the visibility it deserves. Whether youre running a gaming community, a hobbyist group, or a business network, I have the expertise to attract new members and keep them engaged.</p>
                                        <p>My promotion services include:</p>
                                        <ul>
                                            <li>Customized promotional campaigns tailored to your servers niche</li>
                                            <li>Engaging advertisements on relevant platforms and forums</li>
                                            <li>Social media outreach to reach potential members</li>
                                            <li>Collaborations with other Discord servers and communities</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to reaching over 100k users, I provide detailed analytics and reports to track the success of your promotion campaign. I work closely with you to understand your goals and adjust strategies accordingly, ensuring maximum impact and results.</p>
                                        <p>Lets take your Discord server to the next level and grow your community together. Contact me today to discuss your promotion needs and see how I can help you reach new heights!</p>
                                        <p>Your satisfaction is my priority, and I am committed to delivering exceptional results that exceed your expectations. Dont miss out on the opportunity to expand your Discord server and connect with a larger audience.</p></div>',
                'attachments'       => [ 13,14,15 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Enhance your Discord server visibility with our Basic package. Gain access to a targeted audience of over 100k users. Let us help you reach your server full potential.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your Discord server presence with our Popular package. Connect with a vast network of over 100k users, ensuring your server receives the attention it deserves. Watch your community grow and thrive with our strategic promotion techniques.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Maximize your Discord server exposure with our Premium package. Reach an extensive audience of over 100k users, tailored to fit your server niche. Our comprehensive promotional strategies will boost engagement and attract active members, taking your server to new heights.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can promoting my Discord server to over 100k users benefit me?',
                        'answer'    => 'Promoting your Discord server to such a large audience can significantly increase your server\'s visibility and attract new members who share your interests. With more members, you can foster a vibrant community, engage in lively discussions, and even explore opportunities for collaboration or networking.',
                    ],
                    [
                        'question'  => 'Will the promotion guarantee a specific number of new members joining my Discord server?',
                        'answer'    => 'While we can\'t guarantee an exact number of new members joining your server, our promotion strategies are designed to reach a broad audience likely to be interested in your server\'s content. The actual number of new members may vary based on factors such as audience engagement, server niche, and the appeal of your server\'s offerings.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 53
                'author_id'         => 20,
                'title'             => 'I will chat in your nft discord chat,discord manager,discord chatter, discord chat',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Engaging with your community is crucial for the success of any Discord server, especially in the NFT space. As a dedicated Discord manager and chatter, I will ensure lively conversations, provide valuable insights, and help foster a vibrant community atmosphere.</p>
                                        <p>From answering questions to initiating discussions and moderating conversations, I will actively participate in your NFT Discord chat to keep members engaged and informed. Whether its sharing updates, promoting events, or simply chatting with members, I am committed to enhancing the overall experience for everyone.</p>
                                        <p>As your Discord manager, I will also handle administrative tasks, such as creating and organizing channels, managing roles and permissions, and enforcing community guidelines. With attention to detail and a proactive approach, I will ensure your Discord server runs smoothly and efficiently.</p>
                                        <ul>
                                            <li>Active participation in NFT Discord chat</li>
                                            <li>Initiating and moderating discussions</li>
                                            <li>Sharing updates and promoting events</li>
                                            <li>Handling administrative tasks as Discord manager</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>By entrusting me as your Discord chatter and manager, you can focus on growing your NFT community while I take care of the day-to-day activities. Whether you need regular engagement, event management, or strategic planning, I am here to support your goals and ensure your Discord server thrives.</p>
                                        <p>Lets work together to create a dynamic and welcoming environment where members feel valued and engaged. Contact me today to discuss how I can help you manage and grow your NFT Discord chat effectively.</p>
                                        <p>Your satisfaction is my priority, and I am dedicated to delivering exceptional service that meets your needs and exceeds your expectations. With my expertise and commitment to excellence, your Discord community will flourish under my management.</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Get basic access to our Discord community. Participate in discussions, join events, and connect with fellow members. Perfect for those who want to dip their toes into the world of NFTs and Discord chats.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Unlock access to our popular Discord features. Engage in lively conversations, receive exclusive updates, and gain insights from experienced members. Ideal for individuals looking to expand their knowledge and network within the NFT community.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience the ultimate Discord package. Receive VIP treatment with priority support, exclusive events, and direct access to industry experts. Elevate your NFT journey with premium features tailored to meet your needs.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I engage my NFT community effectively on Discord?',
                        'answer'    => 'Engaging your NFT community on Discord involves fostering meaningful interactions, hosting events like AMAs or giveaways, and regularly updating them about project developments. Implementing moderation tools and creating dedicated channels for discussions can also enhance community engagement.',
                    ],
                    [
                        'question'  => 'What are some strategies to grow my NFT Discord server?',
                        'answer'    => 'Growing your NFT Discord server requires a multi-faceted approach. You can leverage social media platforms to promote your server, collaborate with other NFT projects for cross-promotion, offer incentives for referrals, and ensure your server provides unique value to members through exclusive content or access to NFT drops.',
                    ],
                    [
                        'question'  => 'How can I prevent scams and maintain security within my NFT Discord community?',
                        'answer'    => 'Safeguarding your NFT Discord community against scams involves educating members about common scam tactics, implementing verification systems for trusted users or moderators, and regularly monitoring channels for suspicious activity. Additionally, setting clear rules and guidelines, and fostering a culture of transparency and trust can contribute to maintaining security within your community.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 54
                'author_id'         => 20,
                'title'             => 'I will be your telegram admin, mod and nft discord community manager',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Looking for someone to manage your Telegram and Discord communities? Look no further! I specialize in providing top-notch administration and moderation services for Telegram and Discord channels, ensuring a smooth and engaging experience for your members.</p>
                                        <p>As your Telegram admin and moderator, Ill keep your channel organized, handle member inquiries, and enforce community rules to maintain a positive atmosphere. With my experience in community management, Ill help foster meaningful discussions and encourage member engagement.</p>
                                        <p>Additionally, I offer specialized services for NFT Discord communities. As your NFT Discord community manager, Ill work closely with you to create and implement strategies to grow your community, increase member participation, and promote your NFT projects effectively.</p>
                                        <ul>
                                            <li>Telegram channel administration and moderation</li>
                                            <li>Discord server management and moderation</li>
                                            <li>NFT community building and promotion</li>
                                            <li>Engagement strategies to foster a vibrant community</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>With my dedication and expertise, you can expect professional and reliable service tailored to your specific needs. Ill work closely with you to understand your goals and ensure your Telegram and Discord communities thrive.</p>
                                        <p>Whether youre launching a new project or seeking to enhance an existing community, Im here to help. Lets work together to build a strong and vibrant community around your brand or project.</p>
                                        <p>Get in touch today to discuss how I can support your community management needs and take your Telegram and Discord channels to the next level!</p></div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'As your Telegram admin, I keep your community engaged, manage moderation tasks efficiently, and ensure smooth communication. Additionally, I provide dedicated support to your NFT Discord community, fostering a welcoming environment for members to thrive.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your Telegram and Discord communities with my expertise as an admin, moderator, and NFT Discord community manager. I streamline communication channels, enforce community guidelines effectively, and implement strategies to boost engagement and participation.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience unparalleled community management with my comprehensive services as your Telegram admin, moderator, and NFT Discord community manager. From maintaining chat decorum to organizing engaging events, I ensure your communities flourish with activity and enthusiasm.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How do I become a Telegram admin?',
                        'answer'    => 'Becoming a Telegram admin involves understanding your community\'s needs, enforcing rules fairly, and fostering positive interactions. Regularly engage with members, address concerns promptly, and lead by example to maintain a healthy community atmosphere.',
                    ],
                    [
                        'question'  => 'What responsibilities does a Discord community manager have?',
                        'answer'    => 'As a Discord community manager, your responsibilities include organizing events, facilitating discussions, resolving conflicts, and ensuring the community\'s overall well-being. You\'ll also need to collaborate with moderators, enforce guidelines, and adapt strategies to meet evolving community needs.',
                    ],
                    [
                        'question'  => 'How can I effectively moderate an NFT Discord community?',
                        'answer'    => 'Effective moderation in an NFT Discord community involves setting clear guidelines, monitoring discussions, and swiftly addressing any violations or disputes. Foster a welcoming environment for creators and collectors, encourage constructive feedback, and stay updated on industry trends to facilitate meaningful conversations.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 55
                'author_id'         => 20,
                'title'             => 'I will be your discord moderator and community manager',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Managing a Discord community effectively is crucial for fostering a positive and engaging environment. As your dedicated Discord moderator and community manager, I ensure that your server remains welcoming, organized, and free from disruptions.</p>
                                        <p>With experience in community management and a deep understanding of Discords features, I handle moderation tasks such as enforcing rules, resolving conflicts, and maintaining order in the server. My goal is to create a space where members feel safe to interact and share their interests.</p>
                                        <p>Whether youre running a gaming community, a professional network, or a hobbyist group, I tailor my approach to meet your specific needs and goals. From setting up channels and roles to organizing events and managing user permissions, I take care of all aspects of community management so you can focus on growing your community.</p>
                                        <ul>
                                            <li>Enforcing server rules and guidelines</li>
                                            <li>Resolving conflicts and addressing member concerns</li>
                                            <li>Organizing events and community activities</li>
                                            <li>Creating a welcoming and inclusive atmosphere</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to moderating your Discord server, I offer strategic guidance and support to help you build and nurture a thriving community. From developing engagement strategies to implementing automation tools, I work with you to optimize your servers performance and foster meaningful connections among members.</p>
                                        <p>If youre ready to elevate your Discord community and create a space where members feel valued and engaged, lets collaborate. Contact me today to discuss your needs and objectives, and together, well make your Discord server a vibrant hub for communication and collaboration.</p>
                                        <p>Your satisfaction is my priority. I am committed to delivering exceptional service and ensuring that your Discord community thrives under my management. Lets work together to build a strong and supportive community that reflects your vision and values.</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'As your trusted Discord moderator and community manager, I ensure smooth interactions and a positive atmosphere within your server. From enforcing rules to engaging with members, I keep your community vibrant and welcoming.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your Discord server with my expert moderation and community management services. With a keen eye for detail and a knack for fostering engagement, I help your community thrive. Say goodbye to trolls and drama, and hello to a lively and harmonious space.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience top-tier moderation and community management tailored to your Discord servers needs. From crafting custom engagement strategies to providing round-the-clock support, I offer a premium service aimed at cultivating a tight-knit and flourishing community. Let take your Discord server to the next level together.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How do I report inappropriate behavior on the Discord server?',
                        'answer'    => 'If you encounter any behavior that violates our community guidelines or makes you uncomfortable, please don\'t hesitate to report it to our moderation team. You can do this by sending a direct message to any of our moderators or by using the report feature on Discord. We take all reports seriously and will investigate promptly.',
                    ],
                    [
                        'question'  => 'What actions will the moderation team take against rule-breakers?',
                        'answer'    => 'Our moderation team is committed to maintaining a safe and welcoming environment for all members. Depending on the severity of the infraction, we may issue warnings, temporary mutes, or even permanent bans. Our goal is to ensure that everyone can enjoy their time on the server without fear of harassment or disruption.',
                    ],
                    [
                        'question'  => 'How can I contribute positively to the Discord community?',
                        'answer'    => 'We\'re glad you want to help make our community a better place! You can contribute by being respectful to others, participating in discussions, and offering support to fellow members. Additionally, if you see someone in need of assistance or guidance, feel free to reach out and lend a helping hand. Together, we can create a vibrant and inclusive community where everyone feels valued.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 56
                'author_id'         => 20,
                'title'             => 'I will promote your discord project via mass dm advertising',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Looking to boost the visibility of your Discord project? Let me help you reach a wider audience through targeted mass DM advertising. With my expertise in Discord promotion, I can effectively promote your project to thousands of users, increasing engagement and driving traffic to your server.</p>
                                        <p>Using a strategic approach, I tailor the message to appeal to your target audience, ensuring maximum impact and response. Whether youre launching a new server, hosting an event, or promoting a product, mass DM advertising can significantly boost your visibility and attract more members.</p>
                                        <p>Benefits of mass DM advertising:</p>
                                        <ul>
                                            <li>Reach thousands of users quickly and efficiently</li>
                                            <li>Generate immediate engagement and interest</li>
                                            <li>Drive traffic to your Discord server or project</li>
                                            <li>Increase visibility and awareness</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to mass DM advertising, I offer comprehensive promotion services to help you achieve your goals. From creating eye-catching graphics to crafting compelling messages, I ensure your promotional campaign is a success.</p>
                                        <p>With my experience and dedication, you can trust that your Discord project will receive the attention it deserves. Lets work together to take your project to the next level and achieve success in the Discord community.</p>
                                        <p>Contact me today to discuss your project and learn more about how I can help you promote your Discord project through mass DM advertising.</p></div>',
                'attachments'       => [ 1,2,3],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Boost your Discord project visibility with our Popular package. Reach a wider audience and generate more leads through effective mass DM advertising. Our strategic approach ensures maximum exposure and engagement for your server, helping you stand out in the crowded Discord space.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Kickstart your Discord project with our Basic package. Get noticed and expand your reach through targeted mass DM advertising. Our experienced team will craft compelling messages to engage your audience and drive traffic to your Discord server.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Take your Discord project to the next level with our Premium package. Experience unparalleled growth and success as we implement advanced mass DM advertising techniques tailored to your serves needs. With personalized strategies and dedicated support, you dominate the Discord community and achieve your goals.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can mass DM advertising benefit my Discord project?',
                        'answer'    => 'Mass DM advertising is a powerful tool to reach a wide audience quickly. By sending direct messages to users who might be interested in your Discord project, you can effectively promote it and increase visibility. It\'s a direct and personal way to engage potential members and invite them to join your community.',
                    ],
                    [
                        'question'  => 'Is mass DM advertising considered spammy or intrusive?',
                        'answer'    => 'Mass DM advertising done right is not spammy or intrusive. It\'s important to target users who are likely to be interested in your Discord project and to craft personalized messages that provide value to them. By respecting users\' preferences and privacy, you can ensure that your mass DM advertising efforts are well-received and effective.

                        ',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 57
                'author_id'         => 21,
                'title'             => 'I will manage your facebook page and group professionally',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Managing your Facebook page and group professionally is crucial for building a strong online presence and engaging with your audience effectively. With my expertise in social media management, I ensure that your Facebook page and group are optimized for maximum visibility and engagement.</p>
                                        <p>From creating compelling content to interacting with your followers, I handle every aspect of managing your Facebook presence with care and attention to detail. Whether youre looking to increase brand awareness, drive traffic to your website, or generate leads, I have the skills and experience to help you achieve your goals.</p>
                                        <p>My services include:</p>
                                        <ul>
                                            <li>Creating and scheduling engaging posts</li>
                                            <li>Responding to comments and messages promptly</li>
                                            <li>Organizing contests, polls, and other interactive activities</li>
                                            <li>Monitoring analytics to track performance and make data-driven decisions</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to managing your Facebook page and group, I provide personalized recommendations and strategies to help you improve your social media presence and reach your target audience more effectively. With regular updates and reports, youll always be informed about the progress of your Facebook marketing efforts.</p>
                                        <p>Whether youre a small business owner, a nonprofit organization, or an individual looking to build your personal brand, Im here to help you succeed on Facebook. Lets work together to create a thriving community around your brand and achieve your social media goals.</p></div>',
                'attachments'       => [ 13,14,15 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Get started with essential Facebook page and group management. Engage your audience effectively and build a solid online presence with our professional touch.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your Facebook presence with our popular package. We handle your page and group management with finesse, ensuring increased visibility and interaction.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience top-tier Facebook management with our premium package. Let us take the reins of your page and group, guaranteeing exceptional engagement and growth strategies.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can you ensure my Facebook page reflects my brand\'s identity effectively?',
                        'answer'    => 'Crafting a cohesive brand identity is crucial for your Facebook page. I\'ll meticulously align the page\'s visuals, tone, and content with your brand guidelines. From captivating cover photos to engaging posts, every element will resonate with your brand\'s essence, ensuring a consistent and memorable experience for your audience.',
                    ],
                    [
                        'question'  => ' What strategies do you employ to boost engagement on my Facebook page and group?',
                        'answer'    => 'Elevating engagement is at the core of my Facebook management approach. I implement diverse content strategies, including thought-provoking questions, interactive polls, and captivating visuals, to spark meaningful conversations within your community. Additionally, I actively monitor comments, promptly respond to queries, and foster a supportive environment to cultivate stronger connections with your audience.',
                    ],
                    [
                        'question'  => 'How do you handle negative feedback or comments on my Facebook platforms?',
                        'answer'    => 'Addressing negative feedback with tact and transparency is paramount in maintaining your brand\'s reputation. I adopt a proactive approach by promptly acknowledging concerns, empathizing with the aggrieved party, and offering solutions or clarifications publicly or via direct messaging, depending on the nature of the issue. Through swift and sincere responses, I aim to mitigate any potential damage and demonstrate your commitment to customer satisfaction and community well-being.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 58
                'author_id'         => 21,
                'title'             => 'I will record a neutral, articulate, clear british rp voice for you',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Whether you need a professional voiceover for your project or presentation, I am here to help. With my neutral, articulate, clear British Received Pronunciation (RP) accent, I can bring your script to life and engage your audience effectively.</p>
                                        <p>From commercials to audiobooks, e-learning modules to phone systems, I offer a versatile voice that suits a wide range of applications. With attention to detail and a commitment to quality, I deliver recordings that meet your exact specifications and exceed your expectations.</p>
                                        <p>Why choose me for your voiceover needs? With years of experience in the industry, I understand the importance of delivering a polished, professional product. I take pride in my work and strive to provide exceptional service to every client, no matter the size or scope of the project.</p>
                                        <ul>
                                            <li>Neutral, articulate, clear British RP voice</li>
                                            <li>Flexible and versatile for various projects</li>
                                            <li>Attention to detail and commitment to quality</li>
                                            <li>Professionalism and exceptional service</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>When you choose me for your voiceover needs, you can expect prompt communication, quick turnaround times, and a collaborative approach to ensure your satisfaction. I am dedicated to helping you achieve your goals and look forward to working with you on your next project.</p>
                                        <p>Lets create something great together. Contact me today to discuss your voiceover needs and see how I can help bring your project to the next level with a neutral, articulate, clear British RP voice.</p>
                                        <p>Your satisfaction is my priority. I am committed to delivering recordings that not only meet but exceed your expectations, helping you captivate your audience and achieve your objectives. Lets work together to create something amazing.</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'I will provide a crisp, professional British RP voiceover, delivering your message with clarity and precision.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Upgrade to a polished British RP voiceover for your project, ensuring your message resonates clearly with your audience',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience the pinnacle of British RP voiceover quality with my premium package, delivering your message with unmatched professionalism and clarity.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I obtain a professional British RP voice recording for my project?',
                        'answer'    => 'If you\'re seeking a professional British RP voice recording for your project, you\'ve come to the right place. With meticulous attention to detail and a commitment to clarity, I ensure your message is delivered with utmost professionalism. Let\'s elevate your project with a voice that resonates.',
                    ],
                    [
                        'question'  => 'What distinguishes a British RP voice recording from others?',
                        'answer'    => 'A British RP voice recording exudes sophistication and clarity, lending an air of authority and elegance to your project. Whether it\'s for commercials, narration, or any other purpose, the precision and refinement of RP accentuate your message, captivating your audience with every word.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 59
                'author_id'         => 21,
                'title'             => 'I will voice act male video game, anime and cartoon characters',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you in need of a talented voice actor to bring your male video game, anime, or cartoon characters to life? Look no further! With years of experience and a passion for storytelling, I specialize in providing unique and captivating voices for a variety of characters.</p>
                                        <p>From brave heroes to sinister villains, I can deliver the perfect voice to match any characters personality and emotions. Whether youre creating a new video game, producing an animated series, or dubbing an anime, Im here to help you achieve your vision.</p>
                                        <p>My versatile voice can adapt to a wide range of styles and tones, ensuring that each character is memorable and engaging. I work closely with clients to understand their specific needs and preferences, ensuring that every voice I create is exactly what theyre looking for.</p>
                                        <ul>
                                            <li>Male video game character voices</li>
                                            <li>Anime character voice acting</li>
                                            <li>Cartoon character voiceovers</li>
                                            <li>Customized voice styles and accents</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>When you choose me as your voice actor, you can expect professionalism, creativity, and dedication to your project. I pride myself on delivering high-quality performances that exceed your expectations and bring your characters to life.</p>
                                        <p>Whether you need a single voice for a specific character or a range of voices for an entire cast, I have the skills and experience to deliver results that will impress your audience and elevate your project to the next level.</p>
                                        <p>Dont settle for mediocre voice acting. Contact me today to discuss your project and lets work together to create memorable characters that will leave a lasting impression on your audience.</p></div>',
                'attachments'       => [ 7,8,9 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Unleash the power of your characters with our Basic package! Whether it heroic knights, mischievous sidekicks, or sinister villains, I bring them to life with dynamic voice acting. Dive into the world of video games, anime, and cartoons with authentic character voices that will captivate your audience.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your projects to new heights with our Popular package! Immerse your audience in thrilling adventures and unforgettable stories as I breathe life into male video game, anime, and cartoon characters. From epic battles to heartwarming moments, my versatile voice acting will keep your viewers engaged and eager for more.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience the ultimate level of character immersion with our Premium package! Transform your narratives into immersive journeys with expertly crafted voice performances. Whether its commanding heroes, cunning villains, or quirky companions, I infuse each character with depth, emotion, and authenticity. With the Premium package, your projects will resonate with audiences long after the final scene fades away.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I master the voice of iconic video game characters?',
                        'answer'    => 'Channeling the essence of iconic video game characters requires dedication and practice. Explore their unique traits, mannerisms, and speech patterns. Immerse yourself in their world to truly understand their motivations and emotions. With diligent practice and a passion for the craft, you can breathe life into these beloved characters.',
                    ],
                    [
                        'question'  => 'What techniques can I employ to voice anime characters authentically?',
                        'answer'    => 'Voicing anime characters authentically demands versatility and emotional depth. Dive deep into the character\'s backstory, motivations, and personality traits. Pay close attention to nuances in tone, pitch, and cadence to capture the essence of the character. Experiment with different vocal styles and accents to bring out their distinctiveness. With dedication and creativity, you can resonate with fans and bring these anime characters to life.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 60
                'author_id'         => 21,
                'title'             => 'I will record professional french voice over',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you in need of a professional French voice-over for your project? Look no further! With years of experience in the industry, I specialize in delivering high-quality voice recordings that will elevate your content and captivate your audience.</p>
                                        <p>Whether youre producing a commercial, explainer video, audiobook, or any other type of multimedia project, I have the skills and expertise to provide you with the perfect voice-over in French. My voice is versatile, engaging, and suited to a wide range of styles and tones.</p>
                                        <p>With attention to detail and a commitment to excellence, I ensure that every recording meets your exact specifications and exceeds your expectations. I work efficiently to deliver your project on time and within budget, without compromising on quality.</p>
                                        <ul>
                                            <li>Professional French voice-over recordings</li>
                                            <li>Wide range of styles and tones available</li>
                                            <li>Fast turnaround times and competitive rates</li>
                                            <li>Customized recordings tailored to your project</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to providing top-notch voice-over services, I offer a collaborative and communicative approach to ensure your complete satisfaction. I welcome your input and feedback throughout the process to guarantee that the final product meets your vision and objectives.</p>
                                        <p>Ready to bring your project to life with a professional French voice-over? Get in touch today to discuss your needs and lets make your content stand out with a compelling and impactful voice recording.</p>
                                        <p>Your project deserves the best, and Im here to deliver. Trust me to provide you with the exceptional French voice-over services you need to succeed.</p></div>',
                'attachments'       => [ 4,5,6,],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Receive a professional French voice-over for your project\'s essentials. Perfect for smaller projects or those on a budget.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your project with a high-quality French voice-over that captivates your audience. This package offers the ideal balance of value and quality.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Unlock the full potential of your project with a premium French voice-over. Experience top-tier professionalism and unmatched excellence to leave a lasting impression.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> ' How can I enhance the impact of my business with professional voice-over services?',
                        'answer'    => 'Elevate your brand\'s presence and captivate your audience with professional voice-over services. Our skilled voice artists infuse each script with charisma and clarity, ensuring your message resonates profoundly with your audience, leaving a lasting impression.',
                    ],
                    [
                        'question'  => 'Why choose professional voice-over for my project?',
                        'answer'    => 'Entrusting your project to professional voice-over experts guarantees unparalleled quality and professionalism. With precise articulation, emotive delivery, and impeccable timing, our voice talents breathe life into your content, transforming it into an engaging auditory experience that captivates and inspires.',
                    ],
                    [
                        'question'  => 'How do I find the perfect voice for my project?',
                        'answer'    => 'Discover the perfect voice to embody the essence of your project from our diverse pool of talented voice artists. Whether you seek a voice that exudes authority, warmth, or excitement, our extensive roster ensures you\'ll find the ideal match to bring your vision to life with finesse and authenticity.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 61
                'author_id'         => 22,
                'title'             => 'I will record a professional female voice over',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you in need of a professional female voice over for your project? Look no further! With years of experience in the industry, I offer high-quality voice recordings that will bring your script to life.</p>
                                        <p>Whether you need a voice over for commercials, narrations, audiobooks, animations, or any other project, I can deliver the perfect tone and style to match your needs. My voice is versatile, warm, and engaging, capable of capturing the attention of your audience and delivering your message effectively.</p>
                                        <p>By choosing me for your voice over needs, you can expect prompt delivery, clear communication, and a commitment to excellence. I will work closely with you to ensure your complete satisfaction and provide revisions if needed to achieve the desired result.</p>
                                        <ul>
                                            <li>Professional recording studio quality</li>
                                            <li>Quick turnaround time</li>
                                            <li>Customized voice over to suit your project</li>
                                            <li>Flexible pricing options</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to recording the voice over, I can also assist with script writing and editing if needed. I understand the importance of delivering a polished final product, and I am dedicated to helping you achieve your goals with a professional female voice over.</p>
                                        <p>Dont settle for anything less than the best when it comes to your project. Contact me today to discuss your voice over needs, and lets work together to create something amazing!</p>
                                        <p>Your satisfaction is my priority, and I am committed to providing you with a voice over that exceeds your expectations. Lets collaborate and bring your project to life with a professional female voice over that resonates with your audience.</p></div>',
                'attachments'       => [ 10,11,12 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Get started with a professional female voiceover for your project. Perfect for short scripts or small projects needing a clear and engaging voice. Whether it a voice greeting, narration, or advertisement, this package provides quality recording that meets your basic needs.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your project with a captivating female voiceover. This package offers a balance of affordability and quality, making it a popular choice among clients. Ideal for medium-length scripts or projects requiring a polished and expressive voice to engage your audience effectively.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience the ultimate in professional voiceover services with our premium package. Tailored for projects that demand the highest level of quality and attention to detail, this package guarantees a flawless performance by a skilled female voice artist. Whether it a commercial, audiobook, or corporate presentation, your content will shine with this top-tier recording.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I enhance my WordPress development with professional guidance?',
                        'answer'    => 'Elevate your WordPress development with expert insights and guidance. Our professional female voice over will walk you through advanced techniques and strategies, empowering you to excel in your projects.',
                    ],
                    [
                        'question'  => 'Why choose professional female voice over for WordPress development tutorials?',
                        'answer'    => 'Opt for a professional female voice over to add a touch of sophistication and clarity to your WordPress development tutorials. Our expert voice artist ensures a smooth and engaging learning experience, making complex concepts easy to grasp.',
                    ],
                    [
                        'question'  => 'What benefits does a professional female voice over bring to WordPress development training?',
                        'answer'    => 'Experience the difference with a professional female voice over for your WordPress development training. Our seasoned voice artist delivers content with finesse, enhancing comprehension and retention for learners of all levels.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 0,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
            [ // 62
                'author_id'         => 22,
                'title'             => 'I will do a 200 word professional north american male voice over',
                'description'       => '<div class="tk-text-wrapper">
                                        <p>Are you in need of a professional North American male voice over for your project? Look no further! With my expertise and experience, I will deliver a top-quality voice over that meets your requirements and exceeds your expectations.</p>
                                        <p>With a clear and engaging voice, I can bring your script to life and captivate your audience. Whether its for a commercial, narration, animation, e-learning module, or any other project, I have the versatility and skill to deliver the perfect voice over for you.</p>
                                        <p>With attention to detail and a commitment to excellence, I ensure that every word is delivered with precision and emotion, leaving a lasting impact on your audience. From warm and friendly to authoritative and professional, I can adapt my voice to suit your needs.</p>
                                        <ul>
                                            <li>Professional voice over recording in a North American male voice</li>
                                            <li>Up to 200 words of script</li>
                                            <li>High-quality audio recording</li>
                                            <li>Fast turnaround time</li>
                                        </ul>
                                        <h3>What more can you expect?</h3>
                                        <p>In addition to delivering a high-quality voice over, I provide excellent customer service and strive to ensure your complete satisfaction. I am committed to delivering a product that meets your needs and helps you achieve your goals.</p>
                                        <p>Dont settle for anything less than the best. Contact me today to discuss your project and lets create something amazing together!</p></div>',
                'attachments'       => [ 13,14,15 ],
                'gig_plan_list'     => [
                    [
                        'title'         => 'Basic',
                        'description'   => 'Receive a crisp and professional North American male voice over for your project. With this package, you get up to 200 words expertly recorded to bring your script to life. Perfect for those looking to add a polished touch to their audio projects without breaking the bank.',
                        'delivery_time' => rand(1,3),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Papular',
                        'description'   => 'Elevate your project with a top-tier North American male voice over. This package offers up to 200 words of captivating narration delivered in a professional tone that resonates with your audience. Ideal for those seeking quality and reliability, this package ensures your message is conveyed with clarity and impact.',
                        'delivery_time' => rand(4,5),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                    [
                        'title'         => 'Premium',
                        'description'   => 'Experience the epitome of excellence with our Premium package. Get a flawless North American male voice over, covering up to 200 words of your script. This package is designed for those who demand nothing but the best, providing unmatched quality and attention to detail that sets your project apart from the rest.',
                        'delivery_time' => rand(6,7),
                        'is_featured'   => rand(0,1),
                        'options'       => null,
                    ],
                ],
                'gig_faq_list'      =>  [
                    [
                        'question'	=> 'How can I ensure a captivating voice-over for my project?',
                        'answer'    => 'When aiming for a captivating voice-over, it\'s vital to infuse your script with emotion and clarity. Engage your audience by modulating your tone and pace appropriately, drawing them into the narrative effortlessly. Remember, your voice is the conduit for your message; hence, enunciate each word with precision and passion. With meticulous attention to detail and a keen understanding of your audience, your voice-over will resonate profoundly, leaving a lasting impact.',
                    ],
                    [
                        'question'  => 'What sets a professional voice-over apart from the rest?',
                        'answer'    => 'A professional voice-over transcends mere narration; it embodies authenticity, authority, and charisma. It\'s not just about reading words; it\'s about conveying the essence of the message with sincerity and conviction. Whether it\'s a commercial, narration, or character portrayal, a professional voice-over artist invests in understanding the nuances of the script, delivering a performance that captivates and inspires. Elevate your project with a professional voice-over that commands attention and leaves a lasting impression on your audience.',
                    ],
                    [
                        'question'  => ' How do I select the perfect voice-over artist for my project?',
                        'answer'    => ' Selecting the perfect voice-over artist is pivotal to the success of your project. Begin by assessing the tone and style required to effectively convey your message. Consider factors such as vocal range, accent, and delivery speed. Review samples of the artist\'s previous work to ensure alignment with your project\'s vision. Additionally, prioritize professionalism and reliability when making your decision. By collaborating with a skilled voice-over artist who resonates with your project\'s objectives, you can elevate your content and captivate your audience with unparalleled excellence.',
                    ],
                ],
                'downloadable'      => null,
                'is_featured'       => 1,
                'featured_expiry'   => null,
                'status'            => 'publish',
                'gig_category_link' => [
                    [
                        'category_id'       => '7',	
                        'category_level'    => '0',	
                    ],
                    [
                        'category_id'       => '11',	
                        'category_level'    => '1',	
                    ],
                    [
                        'category_id'       => '13',	
                        'category_level'    => '2',	
                    ],
                ],
            ],
        ];

        foreach( $gigs as $key => $gig ){
            $files = $gig['attachments'];
            $attachments = [];
            $gig_id= $key+1;

            foreach($files as $file){

                $existFile      = public_path().'/demo-content/gigs/post-'.$file.'.webp';
                $directoryUrl   = storage_path('/app/public/gigs/'.$gig_id);

                if ( !is_dir( $directoryUrl ) ) {
                    File::makeDirectory($directoryUrl, 0777, true);
                }

                $newFileName = 'post-'.$file.'.jpg';
                $newFilePath = storage_path('/app/public/gigs/'.$gig_id.'/');
                $fileInfo    = pathinfo($newFilePath.$newFileName);

                $i = 0;
				while (file_exists($newFilePath.$newFileName)) {
					$i++;
					$newFileName = $fileInfo["filename"] . "-" . $i . "." . $fileInfo["extension"];
				}

                File::copy($existFile, $newFilePath.$newFileName);
                $uploadedFilePath = 'gigs/'.$gig_id.'/'.$newFileName;

                $attachments['files'][time().'_'.$gig_id.$file] = (object) array(
                    'file_name' => $newFileName,
                    'file_path' => $uploadedFilePath,
                    'mime_type' => 'image/jpg',
                );
            }

            $gig['attachments'] = !empty($attachments) ? serialize($attachments) : null;
            // dump($gig['attachments']);
            $addrass = $addresses[rand(0,6)];
            $gigInfo = Gig::create([
                'author_id'         => $gig['author_id'],
                'title'             => $gig['title'],
                'slug'              => $gig['title'],
                'country'           => $addrass['country'],
                'zipcode'           => $addrass['zipcode'],
                'address'           => $addrass['address'],
                // 'description'       => json_encode($gig_description),
                'description'       => json_encode($gig['description']),
                'attachments'       => $gig['attachments'],
                'downloadable'      => $gig['downloadable'],
                'is_featured'       => $gig['is_featured'],
                'featured_expiry'   => $gig['featured_expiry'],
                'status'            => $gig['status'],
            ]);

            $gig_plans = [];
            foreach($gig['gig_plan_list'] as $plan){

                $price = rand(450,650);
                if( $plan['title'] == 'Papular' ){
                    $price = rand(700,800);
                } elseif ( $plan['title'] == 'Premium') {
                    $price = rand(580,950);
                }

                $gig_plans[] = [
                    'gig_id'        => $gigInfo->id,
                    'title'         => $plan['title'],
                    'description'   => $plan['description'],
                    'price'         => $price,
                    'delivery_time' => $plan['delivery_time'],
                    'is_featured'   => $plan['is_featured'],
                    'options'       => $plan['options'],
                    'created_at'    => new DateTime(),
                    'updated_at'    => new DateTime(),
                ];
            }
            GigPlan::insert($gig_plans);

            // insert categories
            $gig_category_link = [];
            foreach($gig['gig_category_link'] as $plan){
                $gig_category_link[] = [
                    'gig_id'            => $gigInfo->id,	
                    'category_id'       => $plan['category_id'],	
                    'category_level'    => $plan['category_level'],
                    'created_at'        => new DateTime(),
                    'updated_at'        => new DateTime(),	
                ];
            }
            DB::table('gig_category_link')->insert($gig_category_link);

            // insert FAQs 
            $gig_faqs   =   [];
            foreach($gig['gig_faq_list'] as $faq){
                $gig_faqs[] = [
                    'gig_id'        => $gigInfo->id,
                    'question'      => $faq['question'],
                    'answer'        => json_encode($faq['answer']),
                    'created_at'    => new DateTime(),
                    'updated_at'    => new DateTime(),	
                ];
            }
            
            GigFaq::insert($gig_faqs);
        }
    }
}
