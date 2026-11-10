<?php

namespace Database\Seeders;

use App\Models\ProgrammeSession;
use App\Models\Faq;
use App\Models\Partner;
use Illuminate\Database\Seeder;

class DynamicSectionsSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Programme Sessions (Day 1: Tuesday, 03 August 2027)
        $day1Sessions = [
            [
                'day' => 1,
                'time_start' => '08:00',
                'time_end' => '08:45',
                'time_label' => '08:00 – 08:45 WIB',
                'badge' => 'Onsite Check-in',
                'title' => 'Delegate Registration, Kit Collection & Morning Coffee',
                'description' => 'Registration desk check-in, distribution of physical conference kits, ID badges, and welcoming morning coffee at CBT Grand Foyer.',
                'location' => 'CBT Main Foyer',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'day' => 1,
                'time_start' => '08:45',
                'time_end' => '09:30',
                'time_label' => '08:45 – 09:30 WIB',
                'badge' => 'Opening Ceremony',
                'title' => 'Grand Opening & Official Welcome Addresses',
                'description' => 'Indonesian National Anthem, traditional welcoming dance, remarks by General Chair, Dean of FEB UNWAHAS, and official opening by Rector of Universitas Wahid Hasyim.',
                'location' => 'Main Plenary Stage',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'day' => 1,
                'time_start' => '09:30',
                'time_end' => '10:30',
                'time_label' => '09:30 – 10:30 WIB',
                'badge' => 'National Keynote',
                'title' => 'National Keynote Address: Digital Intelligence & Sustainable Economic Transition',
                'description' => 'Presented by Ministry of Higher Education, Science, and Technology / BRIN Leadership on accelerating Indonesia’s sustainable economic leap towards Golden Indonesia 2045.',
                'location' => 'Plenary Auditorium',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'day' => 1,
                'time_start' => '10:30',
                'time_end' => '12:00',
                'time_label' => '10:30 – 12:00 WIB',
                'badge' => 'Global Keynote Panel',
                'title' => 'International Plenary Panel: Cross-Border Perspectives on AI, Halal Supply Chain & ESG Governance',
                'description' => 'Keynote presentations by Dr. Syazwan AB Talib (Universiti Brunei Darussalam), Prof. Mohamed M. Battour (Effat University, UAE), and Assoc. Prof. Tarek Rana (RMIT University, Australia).',
                'location' => 'Plenary Auditorium',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'day' => 1,
                'time_start' => '12:00',
                'time_end' => '13:15',
                'time_label' => '12:00 – 13:15 WIB',
                'badge' => 'Networking Lunch',
                'title' => 'Buffet Luncheon & Executive Networking Session',
                'description' => 'Delegates and keynote speakers enjoy an authentic Indonesian banquet, business card exchange, and informal academic collaboration discussion.',
                'location' => 'Dining & Exhibition Hall',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'day' => 1,
                'time_start' => '13:15',
                'time_end' => '15:30',
                'time_label' => '13:15 – 15:30 WIB',
                'badge' => 'Parallel Sessions',
                'title' => 'Parallel Technical Track Presentations (Session 1)',
                'description' => 'Track 1 (Sustainable Economics), Track 2 (Responsible Management), and Track 3 (Accounting & ESG) paper presentations across dedicated rooms.',
                'location' => 'FK Breakout Rooms 1–4',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'day' => 1,
                'time_start' => '15:30',
                'time_end' => '16:00',
                'time_label' => '15:30 – 16:00 WIB',
                'badge' => 'Afternoon Break',
                'title' => 'Afternoon Tea, Poster Viewing & Day 1 Wrap-up',
                'description' => 'Refreshments, visual academic poster sessions, and announcements for Day 2 parallel presentations.',
                'location' => 'Grand Foyer',
                'order' => 7,
                'is_active' => true,
            ],
        ];

        // Day 2: Wednesday, 04 August 2027
        $day2Sessions = [
            [
                'day' => 2,
                'time_start' => '08:30',
                'time_end' => '09:00',
                'time_label' => '08:30 – 09:00 WIB',
                'badge' => 'Morning Reception',
                'title' => 'Day 2 Welcome & Parallel Room Check-in',
                'description' => 'Morning coffee, technical briefing for parallel session chairs, and setup for virtual and in-person presenters.',
                'location' => 'Fakultas Kedokteran Hall',
                'order' => 8,
                'is_active' => true,
            ],
            [
                'day' => 2,
                'time_start' => '09:00',
                'time_end' => '10:15',
                'time_label' => '09:00 – 10:15 WIB',
                'badge' => 'East Asia Keynote',
                'title' => 'Keynote Address: Structural Economic Transformation & Circular Resilience in East Asia',
                'description' => 'Delivered by Prof. Kana Miwa (Nagasaki University, Japan) examining regional industrial transitions and sustainable regional innovation policies.',
                'location' => 'Auditorium CBT',
                'order' => 9,
                'is_active' => true,
            ],
            [
                'day' => 2,
                'time_start' => '10:15',
                'time_end' => '12:15',
                'time_label' => '10:15 – 12:15 WIB',
                'badge' => 'Parallel Sessions',
                'title' => 'Parallel Technical Track Presentations (Session 2)',
                'description' => 'Track 4 (Islamic Economics & Halal Industry), Track 5 (Digital Transformation & AI), and Track 6 (Public Policy & Regional Governance).',
                'location' => 'FK Breakout Rooms 1–6',
                'order' => 10,
                'is_active' => true,
            ],
            [
                'day' => 2,
                'time_start' => '12:15',
                'time_end' => '13:30',
                'time_label' => '12:15 – 13:30 WIB',
                'badge' => 'Lunch Break',
                'title' => 'Luncheon & University Partnership MoU Signing',
                'description' => 'Formal MoU and MoA signing between FEB UNWAHAS and visiting university co-hosts and international academic delegations.',
                'location' => 'Executive Meeting Room',
                'order' => 11,
                'is_active' => true,
            ],
            [
                'day' => 2,
                'time_start' => '13:30',
                'time_end' => '15:15',
                'time_label' => '13:30 – 15:15 WIB',
                'badge' => 'Virtual & Hybrid Track',
                'title' => 'Virtual Presentation Sessions & Overseas Hybrid Interactive Track',
                'description' => 'Live-streamed international breakout rooms for overseas presenters with peer Q&A and editorial review remarks.',
                'location' => 'Zoom Hybrid Studio & FK Hall',
                'order' => 12,
                'is_active' => true,
            ],
            [
                'day' => 2,
                'time_start' => '15:15',
                'time_end' => '16:30',
                'time_label' => '15:15 – 16:30 WIB',
                'badge' => 'Closing & Awards',
                'title' => 'Closing Ceremony, Best Paper Awards & Publication Announcements',
                'description' => 'Presentation of Best Paper Awards across all 6 tracks, certificates of appreciation, Scopus publication timeline briefings, and official congress adjournment.',
                'location' => 'Main Plenary Stage',
                'order' => 13,
                'is_active' => true,
            ],
        ];

        foreach (array_merge($day1Sessions, $day2Sessions) as $session) {
            ProgrammeSession::updateOrCreate(
                ['day' => $session['day'], 'order' => $session['order']],
                $session
            );
        }

        // 2. FAQs
        $faqs = [
            [
                'question' => 'What language must submitted manuscripts be written in?',
                'answer' => 'All manuscripts submitted for publication in Scopus-indexed proceedings (E3S / IOP / Atlantis Press) must be written strictly in clear, academic English. Oral presentation slides should also be in English, though bilingual facilitation (English and Indonesian) is available during parallel Q&A sessions.',
                'category' => 'Submission',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Can I present virtually if I am unable to travel to Semarang?',
                'answer' => 'Yes! ICSET 2027 provides a comprehensive Virtual Hybrid conference platform. Online presenters will deliver live oral presentations via Zoom with full audience interaction and receive the identical Scopus proceedings publication route and digital certificate as onsite presenters.',
                'category' => 'Presentation',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'When will the official Letter of Acceptance (LoA) be issued?',
                'answer' => 'Double-blind peer review is conducted expeditiously by our international scientific committee. Formal Letters of Acceptance (LoA) alongside detailed reviewer feedback and editorial notes will be sent to corresponding authors by 15 June 2027.',
                'category' => 'Review',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Does the presenter registration fee cover co-authors?',
                'answer' => 'One presenter fee covers the review, presentation slot, and publication submission for one manuscript, as well as attendance and kit for the primary registered presenter. Co-authors who wish to attend in person are warmly welcomed to register under the Participant / Non-Presenter tier.',
                'category' => 'Registration',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'What similarity index and ethics standards apply for submissions?',
                'answer' => 'Manuscripts must represent original, unpublished scholarly research. In accordance with COPE (Committee on Publication Ethics) and publisher guidelines, all submissions will be screened via Turnitin and must exhibit a similarity index below 20%.',
                'category' => 'Ethics',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'question' => 'How do I verify my registration code and payment status?',
                'answer' => 'Upon submitting the online registration form, you will receive a unique Registration Code (e.g. ICSET27-XXXX). You can check your verification status at any time on our Check Status page or by contacting the secretariat via WhatsApp.',
                'category' => 'Registration',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question']],
                $faq
            );
        }

        // 3. Partners & Sponsors
        $partners = [
            // Indexing
            [
                'name' => 'Scopus',
                'category' => 'indexing',
                'subtitle' => 'Elsevier Database',
                'logo_abbr' => 'Scopus',
                'color' => 'emerald',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'E3S Web of Conferences',
                'category' => 'indexing',
                'subtitle' => 'EDP Sciences',
                'logo_abbr' => 'E3S',
                'color' => 'sky',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'IOP Conference Series',
                'category' => 'indexing',
                'subtitle' => 'Earth & Environmental Sci.',
                'logo_abbr' => 'IOP',
                'color' => 'indigo',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Web of Science (CPCI)',
                'category' => 'indexing',
                'subtitle' => 'Clarivate Analytics',
                'logo_abbr' => 'WoS',
                'color' => 'amber',
                'order' => 4,
                'is_active' => true,
            ],
            // Universities
            [
                'name' => 'FEB UNWAHAS',
                'category' => 'university',
                'subtitle' => 'Indonesia (Host)',
                'logo_abbr' => 'UNW',
                'color' => 'emerald',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Univ. Brunei Darussalam',
                'category' => 'university',
                'subtitle' => 'Brunei',
                'logo_abbr' => 'UBD',
                'color' => 'sky',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Effat University',
                'category' => 'university',
                'subtitle' => 'United Arab Emirates',
                'logo_abbr' => 'EFF',
                'color' => 'indigo',
                'order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'RMIT University',
                'category' => 'university',
                'subtitle' => 'Melbourne, Australia',
                'logo_abbr' => 'RMIT',
                'color' => 'rose',
                'order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'Nagasaki University',
                'category' => 'university',
                'subtitle' => 'Nagasaki, Japan',
                'logo_abbr' => 'NU',
                'color' => 'amber',
                'order' => 9,
                'is_active' => true,
            ],
            // Sponsors
            [
                'name' => 'Bank Syariah Indonesia (BSI)',
                'category' => 'sponsor',
                'subtitle' => 'Official Banking Partner',
                'logo_abbr' => 'BSI',
                'color' => 'teal',
                'order' => 10,
                'is_active' => true,
            ],
            [
                'name' => 'Bank Jateng Syariah',
                'category' => 'sponsor',
                'subtitle' => 'Regional Banking Partner',
                'logo_abbr' => 'BJS',
                'color' => 'sky',
                'order' => 11,
                'is_active' => true,
            ],
            [
                'name' => 'Penerbit & Rumah Jurnal UNWAHAS',
                'category' => 'sponsor',
                'subtitle' => 'Academic Publishing Partner',
                'logo_abbr' => 'OJS',
                'color' => 'slate',
                'order' => 12,
                'is_active' => true,
            ],
        ];

        foreach ($partners as $partner) {
            Partner::updateOrCreate(
                ['name' => $partner['name']],
                $partner
            );
        }
    }
}
