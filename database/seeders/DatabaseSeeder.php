<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ConferenceSetting;
use App\Models\Track;
use App\Models\TrackTopic;
use App\Models\Speaker;
use App\Models\Timeline;
use App\Models\RegistrationFee;
use App\Models\Committee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'admin@icset2027.unwahas.ac.id'],
            [
                'name' => 'Administrator ICSET 2027',
                'password' => Hash::make('admin12345'),
            ]
        );

        // 2. Conference Settings
        $settings = [
            'edition' => '1st',
            'name' => 'International Conference on Sustainable Economic Transformation',
            'short_name' => 'ICSET 2027',
            'theme' => 'Digital Intelligence, Responsible Business and Inclusive Development for a Sustainable Future',
            'sub_theme' => 'Fostering Resilient Economies through Artificial Intelligence, Sustainable Finance, and ESG Integration',
            'dates' => 'August 3 – 4, 2027',
            'days' => 'Tuesday – Wednesday',
            'city' => 'Semarang',
            'country' => 'Indonesia',
            'venue_main' => 'Kampus 2 Gedung CBT (Main Conference)',
            'venue_track' => 'Fakultas Kedokteran (Track Sessions)',
            'host' => 'Universitas Wahid Hasyim (UNWAHAS)',
            'faculty' => 'Faculty of Economics and Business (FEB)',
            'cfp_launch' => 'December 1, 2026',
            'email' => 'icset@unwahas.ac.id',
            'phone' => '+62 812-2500-1927',
            'address' => 'Jl. Menoreh Tengah X No. 22, Sampangan, Gajahmungkur, Kota Semarang, Jawa Tengah 50236',
            'ojs_url' => 'https://ejournal.unwahas.ac.id',
            'bank_name' => 'Bank Syariah Indonesia (BSI) / Bank Jateng Syariah',
            'bank_account' => '1234-5678-9012 (Panitia ICSET FEB UNWAHAS)',
        ];

        foreach ($settings as $key => $value) {
            ConferenceSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // 3. Tracks & Subtopics
        $tracksData = [
            [
                'code' => 'TRACK-01',
                'title' => 'Sustainable Economics and Economic Transformation',
                'icon' => 'trending-up',
                'color' => 'emerald',
                'order' => 1,
                'topics' => [
                    'Sustainable Economic Development',
                    'Green Economy',
                    'Circular Economy',
                    'Environmental Economics',
                    'Development Economics',
                    'Economic Resilience',
                    'Economic Policy',
                    'Sustainable Consumption and Production',
                ],
            ],
            [
                'code' => 'TRACK-02',
                'title' => 'Sustainable Management and Responsible Business',
                'icon' => 'briefcase',
                'color' => 'blue',
                'order' => 2,
                'topics' => [
                    'Sustainable Business Models',
                    'Strategic Management',
                    'Responsible Business',
                    'Corporate Sustainability',
                    'ESG Management',
                    'Sustainable Entrepreneurship',
                    'Organizational Resilience',
                    'Sustainable Supply Chain',
                ],
            ],
            [
                'code' => 'TRACK-03',
                'title' => 'Accounting, Finance and Sustainability',
                'icon' => 'calculator',
                'color' => 'amber',
                'order' => 3,
                'topics' => [
                    'Sustainability Accounting',
                    'ESG Reporting',
                    'Integrated Reporting',
                    'Sustainable Finance',
                    'Green Finance',
                    'Climate Finance',
                    'Corporate Governance',
                ],
            ],
            [
                'code' => 'TRACK-04',
                'title' => 'Islamic Economics, Finance and Halal Economy',
                'icon' => 'landmark',
                'color' => 'teal',
                'order' => 4,
                'topics' => [
                    'Islamic Economics',
                    'Islamic Finance',
                    'Islamic Social Finance',
                    'Halal Economy',
                    'Halal Supply Chain',
                    'Sharia Governance',
                    'Maqasid al-Shariah',
                    'Islamic Business Ethics',
                ],
            ],
            [
                'code' => 'TRACK-05',
                'title' => 'Digital Intelligence and Economic Transformation',
                'icon' => 'cpu',
                'color' => 'indigo',
                'order' => 5,
                'topics' => [
                    'Artificial Intelligence',
                    'Generative AI',
                    'Business Analytics',
                    'Big Data',
                    'Digital Economy',
                    'Digital Business',
                    'FinTech',
                    'Digital Platforms',
                    'Blockchain',
                    'Digital Entrepreneurship',
                ],
            ],
            [
                'code' => 'TRACK-06',
                'title' => 'Inclusive, Resilient and Sustainable Development',
                'icon' => 'globe',
                'color' => 'violet',
                'order' => 6,
                'topics' => [
                    'Inclusive Development',
                    'Financial Inclusion',
                    'Social Entrepreneurship',
                    'SMEs Development',
                    'Community Development',
                    'Poverty and Inequality',
                    'Social Innovation',
                    'Food Security',
                    'Sustainable Tourism',
                    'Socio-economic Resilience',
                ],
            ],
        ];

        foreach ($tracksData as $tData) {
            $topics = $tData['topics'];
            unset($tData['topics']);

            $track = Track::updateOrCreate(['code' => $tData['code']], $tData);

            $track->topics()->delete();
            foreach ($topics as $index => $topicName) {
                TrackTopic::create([
                    'track_id' => $track->id,
                    'name' => $topicName,
                    'order' => $index + 1,
                ]);
            }
        }

        // 4. Speakers
        $speakers = [
            [
                'role' => 'Invited Speaker',
                'name' => 'Dr. Syazwan AB Talib',
                'title' => 'Senior Lecturer & Researcher',
                'institution' => 'School of Business Economics',
                'university' => 'Universiti Brunei Darussalam',
                'country' => 'Brunei Darussalam',
                'flag' => '🇧🇳',
                'topic' => 'Halal Supply Chain & Islamic Economic Resilience',
                'status' => 'Confirmed',
                'order' => 1,
            ],
            [
                'role' => 'Invited Speaker',
                'name' => 'Prof. Mohamed M. Battour, Ph.D',
                'title' => 'Professor of Marketing & Editor-in-Chief',
                'institution' => 'Effat College of Business, Effat University, UAE',
                'university' => 'Editor-in-Chief, Journal of Islamic Marketing (Scopus Q1)',
                'country' => 'United Arab Emirates',
                'flag' => '🇦🇪',
                'topic' => 'Islamic Marketing, Halal Tourism & Global Markets',
                'status' => 'Confirmed',
                'order' => 2,
            ],
            [
                'role' => 'Invited Speaker',
                'name' => 'Assoc. Prof. Tarek Rana',
                'title' => 'CA, FCPA, ACMA, CGMA',
                'institution' => 'School of Accounting, Information Systems and Supply Chain (AISSC)',
                'university' => 'College of Business and Law (CoBL) - RMIT University',
                'country' => 'Australia',
                'flag' => '🇦🇺',
                'topic' => 'ESG Reporting & Corporate Sustainability Governance',
                'status' => 'Confirmed',
                'order' => 3,
            ],
            [
                'role' => 'Invited Speaker',
                'name' => 'Prof. Kana Miwa',
                'title' => 'Professor of Development Economics',
                'institution' => 'Department of Development Economics, Faculty of Economics',
                'university' => 'Nagasaki University',
                'country' => 'Japan',
                'flag' => '🇯🇵',
                'topic' => 'Economic Transformation & Sustainable Development in East Asia',
                'status' => 'Confirmed',
                'order' => 4,
            ],
            [
                'role' => 'Keynote Speaker (Honorary)',
                'name' => 'Kementerian / BRIN Official',
                'title' => 'Mendiktisaintek / Kepala BRIN / Dirjen',
                'institution' => 'Kementerian Pendidikan Tinggi, Sains, dan Teknologi / BRIN',
                'university' => 'Republic of Indonesia',
                'country' => 'Indonesia',
                'flag' => '🇮🇩',
                'topic' => 'National Policy on Digital Intelligence & Sustainable Innovation',
                'status' => 'In Process of Confirmation',
                'order' => 5,
            ],
        ];

        foreach ($speakers as $spk) {
            Speaker::updateOrCreate(['name' => $spk['name']], $spk);
        }

        // 5. Timelines
        $timelines = [
            [
                'date_string' => '01 December 2026',
                'title' => 'Call for Papers Opening',
                'description' => 'Announcement and initial submission window opens via OJS Unwahas conference system.',
                'badge' => 'Kickoff',
                'status' => 'upcoming',
                'order' => 1,
            ],
            [
                'date_string' => '15 May 2027',
                'title' => 'Full Paper Submission Deadline',
                'description' => 'Last day for prospective authors to submit manuscripts based on E3S Proceedings template.',
                'badge' => 'Deadline',
                'status' => 'future',
                'order' => 2,
            ],
            [
                'date_string' => '15 June 2027',
                'title' => 'Notification of Paper Acceptance',
                'description' => 'Double-blind peer review results announced to corresponding authors with revision notes.',
                'badge' => 'Review',
                'status' => 'future',
                'order' => 3,
            ],
            [
                'date_string' => '01 July 2027',
                'title' => 'Early Bird & Author Registration',
                'description' => 'Final payment verification and confirmation of presenter attendance.',
                'badge' => 'Payment',
                'status' => 'future',
                'order' => 4,
            ],
            [
                'date_string' => '15 July 2027',
                'title' => 'Camera-Ready Paper Due',
                'description' => 'Final revised manuscript submission formatted strictly according to publisher guidelines.',
                'badge' => 'Final Prep',
                'status' => 'future',
                'order' => 5,
            ],
            [
                'date_string' => '03 – 04 August 2027',
                'title' => 'Conference Days (ICSET 2027)',
                'description' => 'Main plenary keynote speeches at CBT Building & parallel breakout track sessions at Faculty of Medicine.',
                'badge' => 'Main Event',
                'status' => 'future',
                'order' => 6,
            ],
        ];

        foreach ($timelines as $tm) {
            Timeline::updateOrCreate(['title' => $tm['title']], $tm);
        }

        // 6. Registration Fees
        $fees = [
            [
                'category' => 'Presenter (Indonesian / Local Author)',
                'early_bird' => 'IDR 2.000.000',
                'regular' => 'IDR 2.500.000',
                'is_featured' => false,
                'features' => ['Scopus Proceedings Submission', 'Conference Kit & Certificate', 'Access to Plenary & Parallel Tracks', 'Lunch & Coffee Breaks (2 Days)'],
                'order' => 1,
            ],
            [
                'category' => 'Presenter (International Author)',
                'early_bird' => 'USD 175',
                'regular' => 'USD 225',
                'is_featured' => true,
                'features' => ['Scopus Proceedings Submission', 'International Certificate', 'Full Conference Access', 'Conference Banquet & Networking'],
                'order' => 2,
            ],
            [
                'category' => 'Student Presenter (S1 / S2 / S3)',
                'early_bird' => 'IDR 1.500.000 / USD 120',
                'regular' => 'IDR 1.850.000 / USD 150',
                'is_featured' => false,
                'features' => ['Scopus Proceedings Review', 'Student Certificate', 'All Session Access', 'Conference Material'],
                'order' => 3,
            ],
            [
                'category' => 'Non-Presenter / Participant Only',
                'early_bird' => 'IDR 350.000 / USD 35',
                'regular' => 'IDR 500.000 / USD 50',
                'is_featured' => false,
                'features' => ['Certificate of Participation', 'Plenary & Track Access', 'Seminar Kit', 'Networking Session'],
                'order' => 4,
            ],
        ];

        foreach ($fees as $fee) {
            RegistrationFee::updateOrCreate(['category' => $fee['category']], $fee);
        }

        // 7. Committees
        $committees = [
            ['name' => 'Prof. Dr. H. Hasan', 'role' => 'Dekan Fakultas Ekonomi dan Bisnis UNWAHAS', 'division' => 'patron', 'order' => 1],
            ['name' => 'Atieq Amjadallah Alfie, SE., M.Si', 'role' => 'General Chair (Wakil Dekan FEB UNWAHAS)', 'division' => 'leadership', 'order' => 2],
            ['name' => 'Rosida Dwi Ayuningtyas', 'role' => 'General Co-Chair', 'division' => 'leadership', 'order' => 3],
            ['name' => 'Dr. Fadjar Setiyo Anggraeni, SE., M.Si., Ak., CA.', 'role' => 'Conference Secretary (Sekretaris Prodi S1 Ekonomi Islam)', 'division' => 'leadership', 'order' => 4],
            ['name' => 'Muhammad Alfarizi', 'role' => 'Scientific Committee Chair (Ketua Lab Riset & Bisnis)', 'division' => 'leadership', 'order' => 5],
            ['name' => 'Mochammad Purnomo', 'role' => 'Ketua Program Studi Manajemen', 'division' => 'academic_head', 'order' => 6],
            ['name' => 'Takhim', 'role' => 'Ketua Program Studi Ekonomi Islam', 'division' => 'academic_head', 'order' => 7],
            ['name' => 'Susetyo Darmanto', 'role' => 'Ketua Program Studi S2 Magister Manajemen', 'division' => 'academic_head', 'order' => 8],
        ];

        foreach ($committees as $comm) {
            Committee::updateOrCreate(['name' => $comm['name']], $comm);
        }
    }
}
