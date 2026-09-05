<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'HRMS Platform',

            'slug' => 'hrms-platform',

            'category' => 'Business Software',

            'short_description' =>
                'Complete human resource management software for modern businesses.',

            'description' =>
                'A complete Human Resource Management System designed to manage employees, departments, roles, permissions, attendance, leave management and payroll from a centralized platform.',

            'technologies' => [
                'Laravel',
                'PHP',
                'MySQL',
                'React',
                'Tailwind CSS',
                'JavaScript',
            ],

            'features' => [
                'Employee Management',
                'Role & Permission Management',
                'Attendance Management',
                'Leave Management',
                'Payroll Management',
                'Dashboard & Reports',
            ],

            'project_url' => null,

            'github_url' => null,

            'is_featured' => true,

            'status' => 'published',
        ]);


        Project::create([
            'title' => 'Business Management System',

            'slug' => 'business-management-system',

            'category' => 'Custom Software',

            'short_description' =>
                'Custom software designed to simplify business operations.',

            'description' =>
                'A scalable business management application designed around real business workflows and operational requirements.',

            'technologies' => [
                'Laravel',
                'PHP',
                'MySQL',
                'JavaScript',
                'Tailwind CSS',
            ],

            'features' => [
                'Business Dashboard',
                'User Management',
                'Data Management',
                'Reports',
                'Role Based Access',
            ],

            'project_url' => null,

            'github_url' => null,

            'is_featured' => true,

            'status' => 'published',
        ]);


        Project::create([
            'title' => 'Corporate Website',

            'slug' => 'corporate-website',

            'category' => 'Web Development',

            'short_description' =>
                'Modern responsive website for a growing business.',

            'description' =>
                'A professional corporate website focused on brand presentation, performance, responsive design and lead generation.',

            'technologies' => [
                'Laravel',
                'Blade',
                'Tailwind CSS',
                'JavaScript',
                'MySQL',
            ],

            'features' => [
                'Responsive Design',
                'SEO Friendly Structure',
                'Contact Form',
                'Service Pages',
                'Project Portfolio',
            ],

            'project_url' => null,

            'github_url' => null,

            'is_featured' => true,

            'status' => 'published',
        ]);
    }
}