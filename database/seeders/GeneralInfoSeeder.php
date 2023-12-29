<?php

namespace Database\Seeders;

use App\Models\GeneralInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralInfo::create([
            'aboutUs_who_we_are'=> 'A team of passionate & creative staff members that focus on providing textbooks, workbooks & activity books for education while fulfilling all its publishing needs.',
            'aboutUs_establishment' => 'NEXTGEN Publications (Pvt) Ltd is incorporated under the Companies Act No. 7 of 2007 of Sri Lanka on 17th July 2021.',
            'aboutUs_why_choose_us' => 'We are dedicated to provide a quality product while it is cost effective to the end-users.',
            'aboutUs_mission' => 'To create a seamless and lucrative platform with dedicated assistance at all stages of publishing and printing.',
            'aboutUs_vission' => 'To attract, educate, entertain and inspire a worldwide audience of all ages.',
            'contact_addres' => 'No. 10, Raymond Road, Nugegoda',
            'contact_phone'=>'+94 76 045 1504',
            'contact_email' => 'rpmanager@nextgen.pub',
            'home_desc'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Get ➹ Started",
            'contact_facebook' => 'https://www.facebook.com/nextgenpublication',
            'contact_youtube' => 'https://www.youtube.com/channel/UCvmXotDXUhZwK-NoDrBTAFQ',
            'contact_insta' => 'https://instagram.com/nextgenpublications?igshid=YmMyMTA2M2Y',
        ]);        
    }
}

