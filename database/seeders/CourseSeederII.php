<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeederII extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Create more courses using foreach ...
        $courses2 = [
            [
                'code' => 'ICT20115',
                'national' => true,
                'title' => 'Certificate II in Information, Digital Media and Technology',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT30115',
                'national' => true,
                'title' => 'Certificate III in Information, Digital Media and Technology',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT40115',
                'national' => true,
                'title' => 'Certificate IV in Information Technology',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT40215',
                'national' => true,
                'title' => 'Certificate IV in Information Technology Support',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT40315',
                'national' => true,
                'title' => 'Certificate IV in Web-Based Technologies',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT40415',
                'national' => true,
                'title' => 'Certificate IV in Information Technology Networking',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT40515',
                'national' => true,
                'title' => 'Certificate IV in Programming',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT40615',
                'national' => true,
                'title' => 'Certificate IV in Information Technology Testing',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT40715',
                'national' => true,
                'title' => 'Certificate IV in Systems Analysis and Design',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT40815',
                'national' => true,
                'title' => 'Certificate IV in Digital Media Technologies',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT40915',
                'national' => true,
                'title' => 'Certificate IV in Digital and Interactive Games',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT41015',
                'national' => true,
                'title' => 'Certificate IV in Computer Systems Technology',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT50115',
                'national' => true,
                'title' => 'Diploma of Information Technology',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT50215',
                'national' => true,
                'title' => 'Diploma of Digital and Interactive Games',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT50315',
                'national' => true,
                'title' => 'Diploma of Information Technology Systems Administration',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT50415',
                'national' => true,
                'title' => 'Diploma of Information Technology Networking',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT50515',
                'national' => true,
                'title' => 'Diploma of Database Design and Development',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT50615',
                'national' => true,
                'title' => 'Diploma of Website Development',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT50715',
                'national' => true,
                'title' => 'Diploma of Software Development',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT50815',
                'national' => true,
                'title' => 'Diploma of Systems Analysis and Design',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT50915',
                'national' => true,
                'title' => 'Diploma of Digital Media Technologies',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT60115',
                'national' => true,
                'title' => 'Advanced Diploma of Information Technology',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT60215',
                'national' => true,
                'title' => 'Advanced Diploma of Network Security',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT60315',
                'national' => true,
                'title' => 'Advanced Diploma of Information Technology Business Analysis',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT60415',
                'national' => true,
                'title' => 'Advanced Diploma of Information Technology Project Management',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT60515',
                'national' => true,
                'title' => 'Advanced Diploma of Computer Systems Technology',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT80115',
                'national' => true,
                'title' => 'Graduate Certificate In Information Technology and Strategic Management',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT80215',
                'national' => true,
                'title' => 'Graduate Certificate In Information Technology Sustainability',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT80315',
                'national' => true,
                'title' => 'Graduate Certificate In Telecommunications',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT80415',
                'national' => true,
                'title' => 'Graduate Diploma of Telecommunications Network Engineering',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT80515',
                'national' => true,
                'title' => 'Graduate Diploma of Telecommunications and Strategic Management',
                'status' => 9, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'BSB10115',
                'national' => true,
                'title' => 'Certificate I in Business',
            ],
            [
                'code' => 'BSB20115',
                'national' => true,
                'title' => 'Certificate II in Business',
            ],
            [
                'code' => 'BSB20215',
                'national' => true,
                'title' => 'Certificate II in Customer Engagement',
            ],
            [
                'code' => 'BSB30115',
                'national' => true,
                'title' => 'Certificate III in Business',
            ],
            [
                'code' => 'BSB30215',
                'national' => true,
                'title' => 'Certificate III in Customer Engagement',
            ],
            [
                'code' => 'BSB30315',
                'national' => true,
                'title' => 'Certificate III in Micro Business Operations',
            ],
            [
                'code' => 'BSB30415',
                'national' => true,
                'title' => 'Certificate III in Business Administration',
            ],
            [
                'code' => 'BSB30515',
                'national' => true,
                'title' => 'Certificate III in Business Administration (International Education)',
            ],
            [
                'code' => 'BSB30615',
                'national' => true,
                'title' => 'Certificate III in International Trade',
            ],
            [
                'code' => 'BSB30715',
                'national' => true,
                'title' => 'Certificate III in Work Health and Safety',
            ],
            [
                'code' => 'BSB30815',
                'national' => true,
                'title' => 'Certificate III in Recordkeeping',
            ],
            [
                'code' => 'BSB30915',
                'national' => true,
                'title' => 'Certificate III in Business Administration (Education)',
            ],
            [
                'code' => 'BSB31015',
                'national' => true,
                'title' => 'Certificate III in Business Administration (Legal)',
            ],
            [
                'code' => 'BSB31115',
                'national' => true,
                'title' => 'Certificate III in Business Administration (Medical)',
            ],
            [
                'code' => 'BSB31215',
                'national' => true,
                'title' => 'Certificate III in Library and Information Services',
            ],
            [
                'code' => 'BSB40115',
                'national' => true,
                'title' => 'Certificate IV in Advertising',

            ],
            [
                'code' => 'BSB40215',
                'national' => true,
                'title' => 'Certificate IV in Business',
            ],
            [
                'code' => 'BSB40315',
                'national' => true,
                'title' => 'Certificate IV in Customer Engagement',
            ],
            [
                'code' => 'BSB40415',
                'national' => true,
                'title' => 'Certificate IV in Small Business Management',
            ],
            [
                'code' => 'BSB40515',
                'national' => true,
                'title' => 'Certificate IV in Business Administration',
            ],
            [
                'code' => 'BSB40615',
                'national' => true,
                'title' => 'Certificate IV in Business Sales',
            ],
            [
                'code' => 'BSB40715',
                'national' => true,
                'title' => 'Certificate IV in Franchising',
            ],
            [
                'code' => 'BSB40915',
                'national' => true,
                'title' => 'Certificate IV in Governance',
            ],
            [
                'code' => 'BSB41015',
                'national' => true,
                'title' => 'Certificate IV in Human Resources',
            ],
            [
                'code' => 'BSB41115',
                'national' => true,
                'title' => 'Certificate IV in International Trade',
            ],
            [
                'code' => 'BSB41315',
                'national' => true,
                'title' => 'Certificate IV in Marketing',


            ],
            [
                'code' => 'BSB41415',
                'national' => true,
                'title' => 'Certificate IV in Work Health and Safety',
            ],
            [
                'code' => 'BSB41515',
                'national' => true,
                'title' => 'Certificate IV in Project Management Practice',
            ],
            [
                'code' => 'BSB41615',
                'national' => true,
                'title' => 'Certificate IV in Purchasing',
            ],
            [
                'code' => 'BSB41715',
                'national' => true,
                'title' => 'Certificate IV in Recordkeeping',
            ],
            [
                'code' => 'BSB41915',
                'national' => true,
                'title' => 'Certificate IV in Business (Governance)',
            ],
            [
                'code' => 'BSB42015',
                'national' => true,
                'title' => 'Certificate IV in Leadership and Management',
            ],
            [
                'code' => 'BSB42115',
                'national' => true,
                'title' => 'Certificate IV in Library and Information Services',
            ],
            [
                'code' => 'BSB42215',
                'national' => true,
                'title' => 'Certificate IV in Legal Services',
            ],
            [
                'code' => 'BSB42315',
                'national' => true,
                'title' => 'Certificate IV in Environmental Management and Sustainability',
            ],
            [
                'code' => 'BSB42415',
                'national' => true,
                'title' => 'Certificate IV in Marketing and Communication',
            ],
            [
                'code' => 'BSB42515',
                'national' => true,
                'title' => 'Certificate IV in Small Business Management',
            ],
            [
                'code' => 'BSB42615',
                'national' => true,
                'title' => 'Certificate IV in New Small Business',
            ],
            [
                'code' => 'BSB50115',
                'national' => true,
                'title' => 'Diploma of Advertising',


            ],
            [
                'code' => 'BSB50215',
                'national' => true,
                'title' => 'Diploma of Business',
            ],
            [
                'code' => 'BSB50315',
                'national' => true,
                'title' => 'Diploma of Customer Engagement',
            ],
            [
                'code' => 'BSB50415',
                'national' => true,
                'title' => 'Diploma of Business Administration',
            ],
            [
                'code' => 'BSB50515',
                'national' => true,
                'title' => 'Diploma of Franchising',
            ],
            [
                'code' => 'BSB50615',
                'national' => true,
                'title' => 'Diploma of Human Resources Management',
            ],
            [
                'code' => 'BSB50715',
                'national' => true,
                'title' => 'Diploma of Business (Governance)',
            ],
            [
                'code' => 'BSB50815',
                'national' => true,
                'title' => 'Diploma of International Business',
            ],
            [
                'code' => 'BSB51215',
                'national' => true,
                'title' => 'Diploma of Marketing',


            ],
            [
                'code' => 'BSB51315',
                'national' => true,
                'title' => 'Diploma of Work Health and Safety',
            ],
            [
                'code' => 'BSB51415',
                'national' => true,
                'title' => 'Diploma of Project Management',
            ],
            [
                'code' => 'BSB51515',
                'national' => true,
                'title' => 'Diploma of Purchasing',
            ],
            [
                'code' => 'BSB51615',
                'national' => true,
                'title' => 'Diploma of Quality Auditing',
            ],
            [
                'code' => 'BSB51715',
                'national' => true,
                'title' => 'Diploma of Recordkeeping',
            ],
            [
                'code' => 'BSB51915',
                'national' => true,
                'title' => 'Diploma of Leadership and Management',
            ],
            [
                'code' => 'BSB52015',
                'national' => true,
                'title' => 'Diploma of Conveyancing',
            ],
            [
                'code' => 'BSB52115',
                'national' => true,
                'title' => 'Diploma of Library and Information Services',
            ],
            [
                'code' => 'BSB52215',
                'national' => true,
                'title' => 'Diploma of Legal Services',
            ],
            [
                'code' => 'BSB52315',
                'national' => true,
                'title' => 'Diploma of Governance',
            ],
            [
                'code' => 'BSB52415',
                'national' => true,
                'title' => 'Diploma of Marketing and Communication',
            ],
            [
                'code' => 'BSB60115',
                'national' => true,
                'title' => 'Advanced Diploma of Advertising',


            ],
            [
                'code' => 'BSB60215',
                'national' => true,
                'title' => 'Advanced Diploma of Business',
            ],
            [
                'code' => 'BSB60515',
                'national' => true,
                'title' => 'Advanced Diploma of Marketing',


            ],
            [
                'code' => 'BSB60615',
                'national' => true,
                'title' => 'Advanced Diploma of Work Health and Safety',
            ],
            [
                'code' => 'BSB60815',
                'national' => true,
                'title' => 'Advanced Diploma of Recordkeeping',
            ],
            [
                'code' => 'BSB60915',
                'national' => true,
                'title' => 'Advanced Diploma of Management (Human Resources)',
            ],
            [
                'code' => 'BSB61015',
                'national' => true,
                'title' => 'Advanced Diploma of Leadership and Management',
            ],
            [
                'code' => 'BSB61115',
                'national' => true,
                'title' => 'Advanced Diploma of Conveyancing',
            ],
            [
                'code' => 'BSB61215',
                'national' => true,
                'title' => 'Advanced Diploma of Program Management',
            ],
            [
                'code' => 'BSB61315',
                'national' => true,
                'title' => 'Advanced Diploma of Marketing and Communication',
            ],
            [
                'code' => 'BSB80215',
                'national' => true,
                'title' => 'Graduate Diploma of Strategic Leadership',
            ],
            [
                'code' => 'BSB80315',
                'national' => true,
                'title' => 'Graduate Certificate In Leadership Diversity',
            ],
            [
                'code' => 'BSB80415',
                'national' => true,
                'title' => 'Graduate Diploma of Portfolio Management',
            ],
            [
                'code' => 'BSB80515',
                'national' => true,
                'title' => 'Graduate Certificate In Management (Learning)',
            ],
            [
                'code' => 'BSB80615',
                'national' => true,
                'title' => 'Graduate Diploma of Management (Learning)',
            ],
            [
                'code' => 'CUA10113',
                'national' => true,
                'title' => 'Certificate I in Dance',
            ],
            [
                'code' => 'CUA10215',
                'national' => true,
                'title' => 'Certificate I in Aboriginal and Torres Strait Islander Cultural Arts',
            ],
            [
                'code' => 'CUA10315',
                'national' => true,
                'title' => 'Certificate I in Visual Arts',
            ],
            [
                'code' => 'CUA20113',
                'national' => true,
                'title' => 'Certificate II in Dance',
            ],
            [
                'code' => 'CUA20215',
                'national' => true,
                'title' => 'Certificate II in Creative Industries',
            ],
            [
                'code' => 'CUA20315',
                'national' => true,
                'title' => 'Certificate II in Aboriginal and Torres Strait Islander Visual Arts Industry Work',
            ],
            [
                'code' => 'CUA20415',
                'national' => true,
                'title' => 'Certificate II in Aboriginal and Torres Strait Islander Cultural Arts',
            ],
            [
                'code' => 'CUA20515',
                'national' => true,
                'title' => 'Certificate II in Information and Cultural Services',
            ],
            [
                'code' => 'CUA20615',
                'national' => true,
                'title' => 'Certificate II in Music Industry',
            ],
            [
                'code' => 'CUA20715',
                'national' => true,
                'title' => 'Certificate II in Visual Arts',
            ],
            [
                'code' => 'CUA30113',
                'national' => true,
                'title' => 'Certificate III in Dance',
            ],
            [
                'code' => 'CUA30213',
                'national' => true,
                'title' => 'Certificate III in Community Dance, Theatre and Events',
            ],
            [
                'code' => 'CUA30313',
                'national' => true,
                'title' => 'Certificate III in Assistant Dance Teaching',
            ],
            [
                'code' => 'CUA30415',
                'national' => true,
                'title' => 'Certificate III in Live Production and Services',
            ],
            [
                'code' => 'CUA30515',
                'national' => true,
                'title' => 'Certificate III in Aboriginal and Torres Strait Islander Cultural Arts',
            ],
            [
                'code' => 'CUA30615',
                'national' => true,
                'title' => 'Certificate III in Arts Administration',
            ],
            [
                'code' => 'CUA30715',
                'national' => true,
                'title' => 'Certificate III in Design Fundamentals',
            ],
            [
                'code' => 'CUA30815',
                'national' => true,
                'title' => 'Certificate III in Broadcast Technology',
            ],
            [
                'code' => 'CUA30915',
                'national' => true,
                'title' => 'Certificate III in Music Industry',
            ],
            [
                'code' => 'CUA31015',
                'national' => true,
                'title' => 'Certificate III in Screen and Media',
            ],
            [
                'code' => 'CUA31115',
                'national' => true,
                'title' => 'Certificate III in Visual Arts',
            ],
            [
                'code' => 'CUA40113',
                'national' => true,
                'title' => 'Certificate IV in Dance',
            ],
            [
                'code' => 'CUA40213',
                'national' => true,
                'title' => 'Certificate IV in Community Culture',
            ],
            [
                'code' => 'CUA40313',
                'national' => true,
                'title' => 'Certificate IV in Dance Teaching and Management',
            ],
            [
                'code' => 'CUA40415',
                'national' => true,
                'title' => 'Certificate IV in Live Production and Technical Services',
            ],
            [
                'code' => 'CUA40513',
                'national' => true,
                'title' => 'Certificate IV in Musical Theatre',
            ],
            [
                'code' => 'CUA40615',
                'national' => true,
                'title' => 'Certificate IV in Aboriginal and Torres Strait Islander Cultural Arts',
            ],
            [
                'code' => 'CUA40715',
                'national' => true,
                'title' => 'Certificate IV in Design',
            ],
            [
                'code' => 'CUA40815',
                'national' => true,
                'title' => 'Certificate IV in Arts Administration',
            ],
            [
                'code' => 'CUA40915',
                'national' => true,
                'title' => 'Certificate IV in Music Industry',
            ],
            [
                'code' => 'CUA41015',
                'national' => true,
                'title' => 'Certificate IV in Broadcast Technology',
            ],
            [
                'code' => 'CUA41115',
                'national' => true,
                'title' => 'Certificate IV in Photography and Photo Imaging',
            ],
            [
                'code' => 'CUA41215',
                'national' => true,
                'title' => 'Certificate IV in Screen and Media',
            ],
            [
                'code' => 'CUA41315',
                'national' => true,
                'title' => 'Certificate IV in Visual Arts',
            ],
            [
                'code' => 'CUA50113',
                'national' => true,
                'title' => 'Diploma of Dance (Elite Performance)',
            ],
            [
                'code' => 'CUA50213',
                'national' => true,
                'title' => 'Diploma of Musical Theatre',
            ],
            [
                'code' => 'CUA50313',
                'national' => true,
                'title' => 'Diploma of Dance Teaching and Management',
            ],
            [
                'code' => 'CUA50415',
                'national' => true,
                'title' => 'Diploma of Live Production and Technical Services',
            ],
            [
                'code' => 'CUA50513',
                'national' => true,
                'title' => 'Diploma of Live Production Design',
            ],
            [
                'code' => 'CUA50615',
                'national' => true,
                'title' => 'Diploma of Aboriginal and Torres Strait Islander Visual Arts Industry Work',
            ],
            [
                'code' => 'CUA50715',
                'national' => true,
                'title' => 'Diploma of Graphic Design',
            ],
            [
                'code' => 'CUA50815',
                'national' => true,
                'title' => 'Diploma of Music Industry',
            ],
            [
                'code' => 'CUA50915',
                'national' => true,
                'title' => 'Diploma of Photography and Photo Imaging',
            ],
            [
                'code' => 'CUA51015',
                'national' => true,
                'title' => 'Diploma of Screen and Media',
            ],
            [
                'code' => 'CUA51115',
                'national' => true,
                'title' => 'Diploma of Visual Arts',
            ],
            [
                'code' => 'CUA51215',
                'national' => true,
                'title' => 'Diploma of Ceramics',
            ],
            [
                'code' => 'CUA60113',
                'national' => true,
                'title' => 'Advanced Diploma of Dance (Elite Performance)',
            ],
            [
                'code' => 'CUA60213',
                'national' => true,
                'title' => 'Advanced Diploma of Live Production and Management Services',
            ],
            [
                'code' => 'CUA60315',
                'national' => true,
                'title' => 'Advanced Diploma of Graphic Design',
            ],
            [
                'code' => 'CUA60415',
                'national' => true,
                'title' => 'Advanced Diploma of Creative Product Development',
            ],
            [
                'code' => 'CUA60515',
                'national' => true,
                'title' => 'Advanced Diploma of Music Industry',
            ],
            [
                'code' => 'CUA60615',
                'national' => true,
                'title' => 'Advanced Diploma of Screen and Media',
            ],
            [
                'code' => 'CUA60715',
                'national' => true,
                'title' => 'Advanced Diploma of Visual Arts',
            ],
            [
                'code' => 'FNS10115',
                'national' => true,
                'title' => 'Certificate I in Financial Services',
            ],
            [
                'code' => 'FNS20115',
                'national' => true,
                'title' => 'Certificate II in Financial Services',
            ],
            [
                'code' => 'FNS30115',
                'national' => true,
                'title' => 'Certificate III in Financial Services',
            ],
            [
                'code' => 'FNS30215',
                'national' => true,
                'title' => 'Certificate III in Personal Injury Management',
            ],
            [
                'code' => 'FNS30315',
                'national' => true,
                'title' => 'Certificate III in Accounts Administration',
            ],
            [
                'code' => 'FNS30515',
                'national' => true,
                'title' => 'Certificate III in General Insurance',
            ],
            [
                'code' => 'FNS30615',
                'national' => true,
                'title' => 'Certificate III in Insurance Broking',
            ],
            [
                'code' => 'FNS40115',
                'national' => true,
                'title' => 'Certificate IV in Credit Management',
            ],
            [
                'code' => 'FNS40215',
                'national' => true,
                'title' => 'Certificate IV in Bookkeeping',
            ],
            [
                'code' => 'FNS40615',
                'national' => true,
                'title' => 'Certificate IV in Accounting',
            ],
            [
                'code' => 'FNS40715',
                'national' => true,
                'title' => 'Certificate IV in Financial Practice Support',
            ],
            [
                'code' => 'FNS40815',
                'national' => true,
                'title' => 'Certificate IV in Finance and Mortgage Broking',
            ],
            [
                'code' => 'FNS40915',
                'national' => true,
                'title' => 'Certificate IV in Superannuation',
            ],
            [
                'code' => 'FNS41115',
                'national' => true,
                'title' => 'Certificate IV in Financial Markets Operations',
            ],
            [
                'code' => 'FNS41415',
                'national' => true,
                'title' => 'Certificate IV in General Insurance',
            ],
            [
                'code' => 'FNS41515',
                'national' => true,
                'title' => 'Certificate IV in Life Insurance',
            ],
            [
                'code' => 'FNS41715',
                'national' => true,
                'title' => 'Certificate IV in Insurance Broking',
            ],
            [
                'code' => 'FNS41815',
                'national' => true,
                'title' => 'Certificate IV in Financial Services',
            ],
            [
                'code' => 'FNS42015',
                'national' => true,
                'title' => 'Certificate IV in Banking Services',
            ],
            [
                'code' => 'FNS50215',
                'national' => true,
                'title' => 'Diploma of Accounting',
            ],
            [
                'code' => 'FNS50315',
                'national' => true,
                'title' => 'Diploma of Finance and Mortgage Broking Management',
            ],
            [
                'code' => 'FNS50615',
                'national' => true,
                'title' => 'Diploma of Financial Planning',
            ],
            [
                'code' => 'FNS50715',
                'national' => true,
                'title' => 'Diploma of Superannuation',
            ],
            [
                'code' => 'FNS50815',
                'national' => true,
                'title' => 'Diploma of Integrated Risk Management',
            ],
            [
                'code' => 'FNS50915',
                'national' => true,
                'title' => 'Diploma of Banking Services Management',
            ],
            [
                'code' => 'FNS51015',
                'national' => true,
                'title' => 'Diploma of Financial Markets',
            ],
            [
                'code' => 'FNS51115',
                'national' => true,
                'title' => 'Diploma of General Insurance',
            ],
            [
                'code' => 'FNS51215',
                'national' => true,
                'title' => 'Diploma of Insurance Broking',
            ],
            [
                'code' => 'FNS51315',
                'national' => true,
                'title' => 'Diploma of Life Insurance',
            ],
            [
                'code' => 'FNS51415',
                'national' => true,
                'title' => 'Diploma of Loss Adjusting',
            ],
            [
                'code' => 'FNS51515',
                'national' => true,
                'title' => 'Diploma of Credit Management',
            ],
            [
                'code' => 'FNS51615',
                'national' => true,
                'title' => 'Diploma of Securitisation',
            ],
            [
                'code' => 'FNS51815',
                'national' => true,
                'title' => 'Diploma of Financial Services',
            ],
            [
                'code' => 'FNS60115',
                'national' => true,
                'title' => 'Advanced Diploma of Insurance Broking',
            ],
            [
                'code' => 'FNS60215',
                'national' => true,
                'title' => 'Advanced Diploma of Accounting',
            ],
            [
                'code' => 'FNS60415',
                'national' => true,
                'title' => 'Advanced Diploma of Financial Planning',
            ],
            [
                'code' => 'FNS60515',
                'national' => true,
                'title' => 'Advanced Diploma of Superannuation',
            ],
            [
                'code' => 'FNS60615',
                'national' => true,
                'title' => 'Advanced Diploma of Banking Services Management',
            ],
            [
                'code' => 'FNS60715',
                'national' => true,
                'title' => 'Advanced Diploma of Financial Licensing Management',
            ],
            [
                'code' => 'FNS60815',
                'national' => true,
                'title' => 'Advanced Diploma of Integrated Risk Management',
            ],
        ];


        foreach ($courses2 as $course) {
            Course::create($course);
        }
    }
}
