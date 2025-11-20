<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DefaultProjects extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->projects();
    }

    public function projects(){
        Project::truncate();
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

        $description     = '<p>In this role, you will be responsible for bringing stories to life through engaging and expressive narration. The ideal candidate should have a strong voice and excellent storytelling skills. Responsibilities: Read and understand the content of audiobooks Use voice modulation and expression to convey emotions and character personalities Record audiobook narration…</p>';
        $description    .= '<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid extmishea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esseam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>';
        $description    .= '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem antium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>';
        $description    .= '<ul><li>Cupiditate non provident, similique sunt in culpame magni dolores eos qui ratione</li><li>Quiofficia deserunt mollitia animi id est laborum etalorum voluptatem sequite</li><li>Et harum quidem rerum facilis expedita porero quisquam est, qui dolorem ipsum quia</li><li>Nam libero tempore cum soluta dolor sit amet consectetur adipisci velitem</li></ul>';
        $description    .= '<p>Nemo enim ipsam voluptatem quiaptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniores eos qui ratione voluptatem sequi nesciunt. Neque porero quisquam est, qui dolorem ipsum quia doluor sit amet consectetur, adipisci velit, sed quia non numquam eiustam modi tempora incidunt ut labore etolore magnam aliquam quaerat voluptatem.</p>';
        $description    .= '<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid extmishea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esseam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>';
        $description    .= '<p>Nemo enim ipsam voluptatem quiaptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniores eos qui ratione voluptatem sequi nesciunt. Neque porero quisquam est, qui dolorem ipsum quia doluor sit amet consectetur, adipisci velit, sed quia non numquam eiustam modi tempora incidunt ut labore etolore magnam aliquam quaerat voluptatem.</p>';
        $description    .= '<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid extmishea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esseam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>';

        $project_list = [
            [ // fixed project 1
                'author_id'	            => '2',
                'project_category'	    => '1',
                'project_title'	        => 'Sports and e-sports marketing scripting',
                'slug'	                => 'Sports and e-sports marketing scripting',
                'project_type'	        => 'fixed',
                'project_payout_type'   => 'fixed',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => null,
                'project_max_hours'     => null,
                'project_min_price'     => '700',
                'project_max_price'     => '800',
                'project_duration'      => 3,
                'project_hiring_seller' => 3,
                'project_expert_level'  => 4,
                'project_location'      => 3,
                'is_featured'           => 1,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 32, 33, 132, 140, 141, 142 ],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will be responsible for bringing stories to life through engaging and expressive narration</p>
                                            <p>For example, you may need to narrate the excitement of a winning moment or the intensity of a competitive match.</p>
                                            <p>You will craft compelling scripts that capture the essence of sports and e-sports events, captivating audiences with your storytelling prowess.</p>
                                            <ul>
                                            <li>Deliver dynamic narratives that resonate with viewers, conveying the thrill of sports and e-sports.</li>
                                            <li>Collaborate with marketing teams to align scripts with branding strategies and campaign objectives.</li>
                                            <li>Adapt scripts for various platforms and mediums, ensuring consistency and effectiveness across channels.</li>
                                            <li>Stay updatedn industry trends and audience preferences to continuously enhance script quality and relevance.</li>
                                            </ul>
                                            <p>Join us in shaping the narrative of sports and e-sports marketing, engaging audiences worldwide with compelling storytelling.</p>
                                            <p>Apply now to be part of our dynamic team!</p>'
            ],
            [ // fixed project 2
                'author_id'	            => '3',
                'project_category'	    => '5',
                'project_title'	        => 'Test Applications Or Websites For Usability',
                'slug'	                => 'Test Applications Or Websites For Usability',
                'project_type'	        => 'fixed',
                'project_payout_type'   => 'fixed',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => null,
                'project_max_hours'     => null,
                'project_min_price'     => '600',
                'project_max_price'     => '800',
                'project_duration'      => 3,
                'project_hiring_seller' => 4,
                'project_expert_level'  => 3,
                'project_location'      => 3,
                'is_featured'           => 0,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 17, 20, 32, 41, 65, 136 ],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will be responsible for ensuring that applications and websites are user-friendly and intuitive.</p>
                                                <p>Your primary task will involve conducting comprehensive usability tests to identify areas for improvement.</p>
                                                <p>You will create test plans, scenarios, and scripts to evaluate the functionality and user experience of digital products.</p>
                                                <ul>
                                                <li>Collaborate with development teams to define test objectives and parameters.</li>
                                                <li>Recruit participants representative of target users and facilitate usability testing sessions.</li>
                                                <li>Collect and analyze feedback and data to generate actionable insights for enhancing usability.</li>
                                                <li>Document findings and recommendations in clear, concise reports for stakeholders.</li>
                                                </ul>
                                                <p>Join us in ensuring that our applications and websites meet the needs and expectations of our users, delivering seamless and enjoyable experiences.</p>
                                                <p>Apply now to be part of our usability testing team!</p>'
                
            ],
            [ // fixed project 3
                'author_id'	            => '4',
                'project_category'	    => '5',
                'project_title'	        => 'Convert PSD to HTML for WordPress theme',
                'slug'	                => 'Convert PSD to HTML for WordPress theme',
                'project_type'	        => 'fixed',
                'project_payout_type'   => 'fixed',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => null,
                'project_max_hours'     => null,
                'project_min_price'     => '700',
                'project_max_price'     => '900',
                'project_duration'      => 2,
                'project_hiring_seller' => 4,
                'project_expert_level'  => 2,
                'project_location'      => 1,
                'is_featured'           => 1,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will be responsible for converting PSD (Photoshop Document) designs into HTML code to create a WordPress theme.</p>
                                            <p>You will meticulously translate the visual elements of the PSD files into responsive HTML and CSS, ensuring pixel-perfect accuracy.</p>
                                            <p>Collaborating closely with our design and development teams, you will bring designs to life, maintaining consistency and fidelity throughout the conversion process.</p>
                                            <ul>
                                            <li>Use best practices in HTML5 and CSS3 to optimize code structure and maintainability.</li>
                                            <li>Implement responsive design techniques to ensure compatibility across various devices and screen sizes.</li>
                                            <li>Integrate HTML code seamlessly into WordPress, leveraging template hierarchy and custom post types for dynamic content.</li>
                                            <li>Test and debug code for cross-browser compatibility and performance optimization.</li>
                                            </ul>
                                            <p>Join us in transforming PSD designs into functional WordPress themes, delivering exceptional user experiences and driving engagement.</p>
                                            <p>Apply now to be part of our talented team!</p>'
            ],
            [ // fixed project 4
                'author_id'	            => '5',
                'project_category'	    => '5',
                'project_title'	        => 'Article And Do Content Writting',
                'slug'	                => 'Article And Do Content Writting',
                'project_type'	        => 'fixed',
                'project_payout_type'   => 'fixed',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => null,
                'project_max_hours'     => null,
                'project_min_price'     => '600',
                'project_max_price'     => '700',
                'project_duration'      => 1,
                'project_hiring_seller' => 2,
                'project_expert_level'  => 3,
                'project_location'      => 1,
                'is_featured'           => 0,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will play a pivotal role in creating engaging and informative content that resonates with our audience.</p>
                                            <p>Your writing will captivate readers, drawing them in with compelling narratives and insightful analysis.</p>
                                            <p>With your creativity and expertise, you will craft articles that inform, entertain, and inspire.</p>
                                            <ul>
                                            <li>Research and develop content ideas that align with our brand and target audience.</li>
                                            <li>Write clear, concise, and engaging articles on a variety of topics, showcasing your versatility as a writer.</li>
                                            <li>Collaborate with editors and other team members to refine content and ensure accuracy and coherence.</li>
                                            <li>Optimize content for SEO to improve visibility and reach.</li>
                                            </ul>
                                            <p>Join us in shaping the conversation with compelling content that informs, entertains, and inspires.</p>
                                            <p>Apply now to be part of our team and make a meaningful impact through your writing!</p>'
            ],
            [ // fixed project 5 
                'author_id'	            => '6',
                'project_category'	    => '7',
                'project_title'	        => 'Outbound long distance service',
                'slug'	                => 'Outbound long distance service',
                'project_type'	        => 'fixed',
                'project_payout_type'   => 'fixed',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => null,
                'project_max_hours'     => null,
                'project_min_price'     => '650',
                'project_max_price'     => '700',
                'project_duration'      => 2,
                'project_hiring_seller' => 2,
                'project_expert_level'  => 4,
                'project_location'      => 2,
                'is_featured'           => 0,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>Discover the power of seamless communication with our outbound long distance service.</p>
                                            <p>Our mission is to connect people and businesses across the globe, breaking down barriers with reliable and efficient long-distance communication solutions.</p>
                                            <p>With our outbound service, you can reach clients, partners, and loved ones anywhere in the world, ensuring clear and uninterrupted connections.</p>
                                            <ul>
                                            <li>Experience crystal-clear voice calls and high-quality video conferencing, facilitating productive discussions and collaboration.</li>
                                            <li>Benefit from competitive rates and flexible plans tailored to your specific communication needs, whether for personal or business use.</li>
                                            <li>Enjoy peace of mind with our secure and dependable network infrastructure, safeguarding your sensitive information and conversations.</li>
                                            <li>Access round-the-clock customer support from our dedicated team, ready to assist you with any inquiries or technical issues.</li>
                                            </ul>
                                            <p>Make every conversation count with our outbound long distance service, enhancing connectivity and fostering meaningful connections across borders.</p>
                                            <p>Contact us today to explore our services and start connecting with the world!</p>'
            ],
            [ // fixed both 6
                'author_id'	            => '5',
                'project_category'	    => '3',
                'project_title'	        => 'Managed network service',
                'slug'	                => 'Managed network service',
                'project_type'	        => 'fixed',
                'project_payout_type'   => 'both',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => null,
                'project_max_hours'     => null,
                'project_min_price'     => '800',
                'project_max_price'     => '950',
                'project_duration'      => 3,
                'project_hiring_seller' => 4,
                'project_expert_level'  => 3,
                'project_location'      => 3,
                'is_featured'           => 0,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will be responsible for bringing stories to life through engaging and expressive narration.</p>
                                            <p>For example, you may need to narrate the excitement of a winning moment or the intensity of a competitive match.</p>
                                            <p>You will craft compelling scripts that capture the essence of sports and e-sports events, captivating audiences with your storytelling prowess.</p>
                                            <ul>
                                            <li>Deliver dynamic narratives that resonate with viewers, conveying the thrill of sports and e-sports.</li>
                                            <li>Collaborate with marketing teams to align scripts with branding strategies and campaign objectives.</li>
                                            <li>Adapt scripts for various platforms and mediums, ensuring consistency and effectiveness across channels.</li>
                                            <li>Stay updated on industry trends and audience preferences to continuously enhance script quality and relevance.</li>
                                            </ul>
                                            <p>Join us in shaping the narrative of sports and e-sports marketing, engaging audiences worldwide with compelling storytelling.</p>
                                            <p>Apply now to be part of our dynamic team!</p>'
            ],
            [ // fixed both 7 
                'author_id'	            => '4',
                'project_category'	    => '3',
                'project_title'	        => 'Customer premises equipment',
                'slug'	                => 'Customer premises equipment',
                'project_type'	        => 'fixed',
                'project_payout_type'   => 'both',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => null,
                'project_max_hours'     => null,
                'project_min_price'     => '580',
                'project_max_price'     => '690',
                'project_duration'      => 1,
                'project_hiring_seller' => 3,
                'project_expert_level'  => 1,
                'project_location'      => 2,
                'is_featured'           => 0,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will be responsible for deploying and maintaining customer premises equipment (CPE).</p>
                                            <p>You will ensure the seamless integration of CPE into customers\' networks, providing reliable connectivity and functionality.</p>
                                            <p>Your duties will include configuring CPE according to customer requirements, troubleshooting issues, and performing regular maintenance.</p>
                                            <ul>
                                            <li>Install and set up CPE devices at customer locations, ensuring proper functionality and performance.</li>
                                            <li>Collaborate with customers to understand their networking needs and customize CPE configurations accordingly.</li>
                                            <li>Monitor CPE performance and address any performance or connectivity issues in a timely manner.</li>
                                            <li>Coordinate with internal teams to escalate complex issues and ensure timely resolution.</li>
                                            </ul>
                                            <p>Join our team to play a crucial role in delivering reliable and efficient connectivity solutions to our customers!</p>
                                            <p>Apply now to embark on a rewarding career in customer premises equipment deployment and maintenance.</p>'
            ],
            [ // fixed both 8
                'author_id'	            => '3',
                'project_category'	    => '5',
                'project_title'	        => 'Wavelength service',
                'slug'	                => 'Wavelength service',
                'project_type'	        => 'fixed',
                'project_payout_type'   => 'both',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => null,
                'project_max_hours'     => null,
                'project_min_price'     => '890',
                'project_max_price'     => '998',
                'project_duration'      => 4,
                'project_hiring_seller' => 3,
                'project_expert_level'  => 2,
                'project_location'      => 2,
                'is_featured'           => 0,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will be instrumental in delivering the Wavelength service to our clients.</p>
                                            <p>Utilize your expertise to provide tailored solutions that meet the unique needs of each client.</p>
                                            <p>You will play a key role in implementing and optimizing Wavelength service offerings, ensuring seamless integration and maximum value for our clients.</p>
                                            <ul>
                                            <li>Collaborate with cross-functional teams to design and deploy Wavelength solutions that drive business success.</li>
                                            <li>Engage directly with clients to understand their requirements and deliver personalized recommendations.</li>
                                            <li>Monitor and analyze performance metrics to identify areas for improvement and optimization.</li>
                                            <li>Stay abreast of industry developments and emerging technologies to continuously enhance the Wavelength service portfolio.</li>
                                            </ul>
                                            <p>Join us in revolutionizing the way businesses harness the power of wavelength technology to achieve their goals.</p>
                                            <p>Apply now to be part of our innovative team!</p>'
            ],
            [ // fixed milestone 9
                'author_id'	            => '2',
                'project_category'	    => '2',
                'project_title'	        => 'Generic services',
                'slug'	                => 'Generic services',
                'project_type'	        => 'fixed',
                'project_payout_type'   => 'milestone',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => null,
                'project_max_hours'     => null,
                'project_min_price'     => '700',
                'project_max_price'     => '990',
                'project_duration'      => 3,
                'project_hiring_seller' => 3,
                'project_expert_level'  => 2,
                'project_location'      => 2,
                'is_featured'           => 0,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will be responsible for providing a range of generic services to our diverse clientele.</p>
                                            <p>Your duties may include assisting customers with inquiries, resolving issues, and processing transactions.</p>
                                            <p>You will strive to deliver exceptional service experiences, ensuring customer satisfaction and loyalty.</p>
                                            <ul>
                                            <li>Respond promptly to customer inquiries via phone, email, or in-person interactions.</li>
                                            <li>Resolve customer issues efficiently and professionally, escalating complex cases as necessary.</li>
                                            <li>Process orders, payments, and returns accurately, maintaining detailed records of transactions.</li>
                                            <li>Collaborate with cross-functional teams to address customer needs and improve service delivery.</li>
                                            </ul>
                                            <p>Join us in providing reliable and efficient generic services, making a positive impact on our customers\' experiences.</p>
                                            <p>Apply now to become part of our dedicated team!</p>'
            ],
            [ // fixed milestone 10 
                'author_id'	            => '3',
                'project_category'	    => '7',
                'project_title'	        => 'Direct inward dialing',
                'slug'	                => 'Direct inward dialing',
                'project_type'	        => 'fixed',
                'project_payout_type'   => 'milestone',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => null,
                'project_max_hours'     => null,
                'project_min_price'     => '670',
                'project_max_price'     => '800',
                'project_duration'      => 3,
                'project_hiring_seller' => 2,
                'project_expert_level'  => 3,
                'project_location'      => 1,
                'is_featured'           => 1,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will be responsible for managing direct inward dialing (DID) services for our organization.</p>
                                            <p>Your primary task will be to allocate and maintain DID numbers for employees, departments, and specific functions.</p>
                                            <p>Additionally, you will oversee the configuration and routing of inbound calls to ensure seamless connectivity and efficient call handling.</p>
                                            <ul>
                                            <li>Assign DID numbers according to organizational requirements, ensuring availability and consistency.</li>
                                            <li>Manage DID number inventory, tracking usage and making adjustments as needed to optimize resources.</li>
                                            <li>Coordinate with telecommunication providers to provision and activate new DID numbers as necessary.</li>
                                            <li>Monitor call traffic and performance metrics to identify trends and opportunities for improvement.</li>
                                            </ul>
                                            <p>Join our team to play a key role in enhancing communication capabilities through effective management of direct inward dialing.</p>
                                            <p>Apply now to be part of our telecommunications team!</p>'
            ],
            [ // fixed milestone 11
                'author_id'	            => '4',
                'project_category'	    => '7',
                'project_title'	        => 'Automation To Drop Shipping For Website',
                'slug'	                => 'Automation To Drop Shipping For Website',
                'project_type'	        => 'fixed',
                'project_payout_type'   => 'milestone',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => null,
                'project_max_hours'     => null,
                'project_min_price'     => '670',
                'project_max_price'     => '800',
                'project_duration'      => 3,
                'project_hiring_seller' => 2,
                'project_expert_level'  => 3,
                'project_location'      => 3,
                'is_featured'           => 0,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will revolutionize the drop shipping process through cutting-edge automation techniques.</p>
                                            <p>Streamline the supply chain by implementing automated solutions that optimize inventory management, order fulfillment, and shipping logistics.</p>
                                            <p>Your expertise in automation will drive efficiency and scalability, enabling our website to handle high volumes of orders seamlessly.</p>
                                            <ul>
                                            <li>Develop scripts and algorithms to automate order processing, reducing manual intervention and minimizing errors.</li>
                                            <li>Integrate with drop shipping platforms and third-party vendors to facilitate seamless communication and data exchange.</li>
                                            <li>Implement machine learning algorithms to predict demand and optimize inventory levels, ensuring timely order fulfillment.</li>
                                            <li>Monitor and analyze performance metrics to identify areas for improvement and refine automation strategies accordingly.</li>
                                            </ul>
                                            <p>Join us in revolutionizing the drop shipping experience for our customers, leveraging automation to enhance efficiency, accuracy, and customer satisfaction.</p>
                                            <p>Apply now to be at the forefront of automation innovation!</p>'
            ],
            [ // fixed milestone 12
                'author_id'	            => '5',
                'project_category'	    => '17',
                'project_title'	        => 'Add and upgrade plugin, Secure WordPress Website',
                'slug'	                => 'Add and upgrade plugin, Secure WordPress Website',
                'project_type'	        => 'fixed',
                'project_payout_type'   => 'milestone',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => null,
                'project_max_hours'     => null,
                'project_min_price'     => '570',
                'project_max_price'     => '950',
                'project_duration'      => 3,
                'project_hiring_seller' => 2,
                'project_expert_level'  => 2,
                'project_location'      => 2,
                'is_featured'           => 0,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will play a crucial part in enhancing the security and functionality of our WordPress website.</p>
                                            <p>Your responsibilities will include installing, configuring, and updating plugins to ensure optimal performance and protection against vulnerabilities.</p>
                                            <p>With your expertise, you will implement security measures to safeguard our website from potential threats and cyber attacks.</p>
                                            <ul>
                                            <li>Identify and evaluate plugins to address specific security needs and enhance site functionality.</li>
                                            <li>Regularly review and upgrade plugins to the latest versions to mitigate security risks and maintain compatibility with WordPress updates.</li>
                                            <li>Implement best practices for WordPress security, such as strong passwords, user authentication, and secure file permissions.</li>
                                            <li>Monitor website activity and implement measures to detect and respond to security incidents promptly.</li>
                                            </ul>
                                            <p>Join our team to make a meaningful impact by fortifying the security of our WordPress website and ensuring a seamless user experience for our visitors.</p>
                                            <p>Apply now to contribute your expertise in plugin management and website security!</p>'
            ],
            [ // hourly 13
                'author_id'	            => '6',
                'project_category'	    => '6',
                'project_title'	        => 'Wireless internet service provider Internet connections',
                'slug'	                => 'Wireless internet service provider Internet connections',
                'project_type'	        => 'hourly',
                'project_payout_type'   => 'hourly',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => 'weekly',
                'project_max_hours'     => '39',
                'project_min_price'     => '40',
                'project_max_price'     => '59',
                'project_duration'      => 5,
                'project_hiring_seller' => 4,
                'project_expert_level'  => 1,
                'project_location'      => 1,
                'is_featured'           => 0,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will play a vital part in delivering reliable internet connections to our customers.</p>
                                            <p>Your responsibilities will include ensuring seamless connectivity for subscribers, regardless of their location or browsing needs.</p>
                                            <p>Utilizing advanced wireless technologies, you will optimize network performance and enhance user experience.</p>
                                            <ul>
                                            <li>Deploy and maintain wireless infrastructure to expand coverage and improve signal strength.</li>
                                            <li>Monitor network traffic and troubleshoot connectivity issues to minimize downtime.</li>
                                            <li>Collaborate with technical teams to implement innovative solutions for faster and more stable connections.</li>
                                            <li>Provide customer support, addressing inquiries and resolving service-related issues promptly.</li>
                                            </ul>
                                            <p>Join our team of dedicated professionals in revolutionizing internet access with cutting-edge wireless technology.</p>
                                            <p>Apply now to be part of our mission to connect communities and empower individuals through reliable internet connections!</p>'
            ],
            [ // hourly 14
                'author_id'	            => '4',
                'project_category'	    => '5',
                'project_title'	        => 'Migration coding facility',
                'slug'	                => 'Migration coding facility',
                'project_type'	        => 'hourly',
                'project_payout_type'   => 'hourly',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => 'daily',
                'project_max_hours'     => '5',
                'project_min_price'     => '40',
                'project_max_price'     => '70',
                'project_duration'      => 3,
                'project_hiring_seller' => 3,
                'project_expert_level'  => 3,
                'project_location'      => 3,
                'is_featured'           => 1,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will be at the forefront of developing coding solutions to facilitate migration processes.</p>
                                            <p>Your expertise will be crucial in ensuring seamless transitions between different systems and platforms.</p>
                                            <p>You will design and implement efficient coding solutions that automate migration tasks, minimizing downtime and optimizing performance.</p>
                                            <ul>
                                            <li>Develop robust scripts and tools to extract, transform, and load data from legacy systems to modern platforms.</li>
                                            <li>Collaborate with migration teams to understand requirements and address technical challenges.</li>
                                            <li>Implement error handling mechanisms and data validation techniques to ensure data integrity throughout the migration process.</li>
                                            <li>Optimize coding practices to enhance scalability, reliability, and maintainability of migration solutions.</li>
                                            </ul>
                                            <p>Join us in revolutionizing migration processes through innovative coding solutions!</p>
                                            <p>Apply now to be part of our dynamic team and make a meaningful impact!</p>'
            ],
            [ // hourly 15
                'author_id'	            => '3',
                'project_category'	    => '7',
                'project_title'	        => 'WordPress website pages with digital marketing',
                'slug'	                => 'WordPress website pages with digital marketing',
                'project_type'	        => 'hourly',
                'project_payout_type'   => 'hourly',
                'attachments'	        => 'a:1:{s:9:"video_url";s:43:"https://www.youtube.com/watch?v=XxxIEGzhIG8";}',
                'project_payment_mode'  => 'monthly',
                'project_max_hours'     => '80',
                'project_min_price'     => '20',
                'project_max_price'     => '49',
                'project_duration'      => 4,
                'project_hiring_seller' => 2,
                'project_expert_level'  => 4,
                'project_location'      => 1,
                'is_featured'           => 0,
                'featured_expiry'       => null,
                'status'                => 'publish',
                'project_languages'     => [ 4, 17, 33, 39, 65],
                'project_skills'        => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ],
                'description'           => '<p>In this role, you will be responsible for creating compelling WordPress website pages optimized for digital marketing.</p>
                                            <p>Your primary focus will be on designing and developing user-friendly pages that drive engagement and conversions.</p>
                                            <p>You\'ll collaborate closely with the digital marketing team to ensure alignment with campaign objectives and messaging.</p>
                                            <ul>
                                            <li>Design visually appealing and responsive website pages that reflect brand identity and messaging.</li>
                                            <li>Implement SEO best practices to enhance visibility and ranking on search engine results pages.</li>
                                            <li>Create clear and compelling calls-to-action (CTAs) to guide visitors through the conversion funnel.</li>
                                            <li>Optimize page load speed and performance for a seamless user experience across devices.</li>
                                            </ul>
                                            <p>By leveraging your expertise in WordPress development and digital marketing, you\'ll play a crucial role in driving online growth and success.</p>
                                            <p>Join our team and make an impact in the ever-evolving landscape of digital marketing!</p>'
            ],

        ];

        $addrass = [
            'country' => null,
            'zipcode' => null,
            'address' => null,
        ];

        foreach($project_list as $project){
            
            if($project['project_location'] == 3 ){
                $addrass = $addresses[rand(0,6)];
            }
            
            $createdProject = Project::create([
                'author_id'	            => $project['author_id'],
                'project_category'	    => $project['project_category'],
                'project_title'	        => $project['project_title'],
                'slug'	                => $project['slug'],
                'project_type'	        => $project['project_type'],
                'project_payout_type'   => $project['project_payout_type'],
                'attachments'	        => $project['attachments'],
                // 'project_description'   => json_encode($description),
                'project_description'   => json_encode($project['description']),
                'project_payment_mode'  => $project['project_payment_mode'],
                'project_max_hours'     => $project['project_max_hours'],
                'project_min_price'     => $project['project_min_price'],
                'project_max_price'     => $project['project_max_price'],
                'project_country'       => $addrass['country'],
                'country_zipcode'       => $addrass['zipcode'],
                'address'               => $addrass['address'],
                'project_duration'      => $project['project_duration'],
                'project_hiring_seller' => $project['project_hiring_seller'],
                'project_expert_level'  => $project['project_expert_level'],
                'project_location'      => $project['project_location'],
                'is_featured'           => $project['is_featured'],
                'featured_expiry'       => $project['featured_expiry'],
                'status'                => $project['status'],
            ]);

            $createdProject->languages()->select('id')->sync($project['project_languages']);
            $createdProject->skills()->select('id')->sync($project['project_skills']);
        }

    }
}
