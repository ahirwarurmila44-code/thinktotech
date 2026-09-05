<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'name' => 'Website Development',

            'slug' => 'website-development',

            'short_description' =>
                'Modern, responsive and professional websites for businesses.',

            'description' =>
                'We build fast, responsive and professional business websites designed to establish your online presence, communicate your services and generate leads.',

            'icon' => 'website',

            'features' => [
                'Responsive Design',
                'Business Website',
                'Landing Pages',
                'Contact Forms',
                'SEO Friendly Structure',
                'Performance Optimization',
            ],

            'technologies' => [
                'Laravel',
                'PHP',
                'Blade',
                'Tailwind CSS',
                'JavaScript',
                'MySQL',
            ],

            'is_featured' => true,

            'status' => 'published',

            'sort_order' => 1,
        ]);


        Service::create([
            'name' => 'Custom Laravel Software',

            'slug' => 'custom-laravel-software',

            'short_description' =>
                'Custom business applications built around your workflow.',

            'description' =>
                'We develop custom Laravel applications that automate business processes, manage data and provide secure role-based access for your team.',

            'icon' => 'software',

            'features' => [
                'Custom Business Logic',
                'Authentication',
                'Role & Permission Management',
                'Admin Panels',
                'Reports',
                'Database Integration',
            ],

            'technologies' => [
                'Laravel',
                'PHP',
                'MySQL',
                'JavaScript',
                'Tailwind CSS',
            ],

            'is_featured' => true,

            'status' => 'published',

            'sort_order' => 2,
        ]);


        Service::create([
            'name' => 'Business Management Systems',

            'slug' => 'business-management-systems',

            'short_description' =>
                'Software systems that simplify daily business operations.',

            'description' =>
                'We create business management platforms for managing employees, customers, inventory, workflows, reports and other operational processes.',

            'icon' => 'business',

            'features' => [
                'Centralized Data',
                'Dashboard',
                'Workflow Management',
                'Reports',
                'User Management',
                'Access Control',
            ],

            'technologies' => [
                'Laravel',
                'PHP',
                'MySQL',
                'JavaScript',
            ],

            'is_featured' => true,

            'status' => 'published',

            'sort_order' => 3,
        ]);


        Service::create([
            'name' => 'API Development',

            'slug' => 'api-development',

            'short_description' =>
                'Secure and scalable REST APIs for modern applications.',

            'description' =>
                'We design and develop REST APIs that allow web applications, mobile applications and third-party systems to communicate securely.',

            'icon' => 'api',

            'features' => [
                'REST API',
                'Authentication',
                'CRUD APIs',
                'API Resources',
                'Validation',
                'Third-Party Integration',
            ],

            'technologies' => [
                'Laravel',
                'PHP',
                'MySQL',
                'REST',
                'JSON',
            ],

            'is_featured' => false,

            'status' => 'published',

            'sort_order' => 4,
        ]);


        Service::create([
            'name' => 'Database Development',

            'slug' => 'database-development',

            'short_description' =>
                'Reliable database design and development for business applications.',

            'description' =>
                'We design structured databases that keep business information organized, secure and accessible while supporting application growth.',

            'icon' => 'database',

            'features' => [
                'Database Design',
                'Table Design',
                'Relationships',
                'Indexes',
                'Query Optimization',
                'Backup Strategy',
            ],

            'technologies' => [
                'MySQL',
                'Laravel Eloquent',
                'SQL',
            ],

            'is_featured' => false,

            'status' => 'published',

            'sort_order' => 5,
        ]);


        Service::create([
            'name' => 'Maintenance & Support',

            'slug' => 'maintenance-support',

            'short_description' =>
                'Ongoing improvements, maintenance and technical support.',

            'description' =>
                'We help businesses keep their websites and software reliable through bug fixes, security updates, performance improvements and new features.',

            'icon' => 'support',

            'features' => [
                'Bug Fixing',
                'Security Updates',
                'Performance Improvements',
                'Feature Development',
                'Server Support',
                'Technical Assistance',
            ],

            'technologies' => [
                'Laravel',
                'PHP',
                'MySQL',
                'Linux',
                'Apache',
                'Git',
            ],

            'is_featured' => false,

            'status' => 'published',

            'sort_order' => 6,
        ]);
    }
}