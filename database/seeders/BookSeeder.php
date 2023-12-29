<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Business studies (National Ordinary Level) - Short Notes',
            'desc' => 'Business Studies short note book is designed to summarize National Ordinary Level Business Studies lessons to help students to understand and remember the key points.',
            'category_id' => '8',
            'grade' => '12',
            'image' => '/assets/images/book/main/1.jpg',
            'isbn' => '12345',
            'pdf' => '/assets/files/book/main/1/1',
            'link' => 'https://bookstudio.lk/product/business-studies-short-notes-nat-o-l-lyceum-publications/'
        ]);
        Book::create([
            'title' => 'Commerce - Grade 7',
            'desc' => 'This book has been written to introduce the young minds to the fascinating world of business. The book includes lot of vibrant visuals related to the lessons develops imagination and interest towards the subject. End of each chapter detailed set of questions are presented to enhance the student’s critical thinking skills.',
            'category_id' => '8',
            'grade' => '9',
            'image' => '/assets/images/book/main/2.jpg',
            'isbn' => 'ISBN 978-624-6232-11-5',
            'pdf' => '/assets/files/book/main/2/2',
            'link' => 'https://bookstudio.lk/product/commerce-gr-7-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Commerce Grade 8',
            'desc' => 'This book has captured the very essence of Business, Economics and Accounting. It has been written to build up the students’ foundation knowledge on the three subjects so the advancement will be smooth when they are transferred to grade 9. New Text book enhance the analytical skills, widen the knowledge and infuse enthusiasm and interest towards the subject and make it memorable, enjoyable for all level of students.',
            'category_id' => '8',
            'grade' => '10',
            'image' => '/assets/images/book/main/3.jpg',
            'isbn' => 'ISBN 978-624-6232-06-1',
            'pdf' => '/assets/files/book/main/3/3',
            'link' => 'https://bookstudio.lk/product/commerce-gr-8-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Computer Science Grade 6',
            'desc' => 'Each unit of the book is designed to improve the learning interests of students. The book explains how Computer science involved in day-to-day activities and it covers a vast area of basic computer science technologies.

            In addition to this, notes, practical screen shots with step-by-step explanations, exercises and questions have been used to support and strengthen the process of learning.

            The book will not only make learning interesting but also help the students to achieve a great level in the rapidly changing world of Computer Science',
            'category_id' => '7',
            'grade' => '8',
            'image' => '/assets/images/book/main/4.jpg',
            'isbn' => 'ISBN 978-624-6232-16-0',
            'pdf' => '/assets/files/book/main/4/4',
            'link' => 'https://bookstudio.lk/product/computer-science-new-edition-6-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Computer Science Grade 7',
            'desc' => 'This book has been designed with an intention of minimizing the time consumption of teachers to prepare lesson notes and for students to copy them.  This maximizes the time of actual classroom teaching/learning, that will elevate the quality of education. ',
            'category_id' => '7',
            'grade' => '9',
            'image' => '/assets/images/book/main/5.jpg',
            'isbn' => 'ISBN 978-624-6232-10-8',
            'pdf' => '/assets/files/book/main/5/5',
            'link' => 'https://bookstudio.lk/product/computer-science-new-edition-7-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Computer Science Grade 8',
            'desc' => 'This book has been designed with an intention of minimizing the time consumption of teachers to prepare lesson notes and for students to copy them.  This maximizes the time of actual classroom teaching/learning, that will elevate the quality of education. ',
            'category_id' => '7',
            'grade' => '10',
            'image' => '/assets/images/book/main/6.jpg',
            'isbn' => 'ISBN 978-624-6232-05-4',
            'pdf' => '/assets/files/book/main/6/6',
            'link' => 'https://bookstudio.lk/product/computer-science-new-edition-8-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Sinhala Workbook Grade 4',
            'desc' => 'This book is an activity based learning framework book for the students to develop their Sinhala language skills in reading, writing & listening. At this age students tend to dislike book work so that  colourful pictures were inserted with the intention of children to get attracted and to  learn the language  attentively. This book will be a useful tool for the Sinhala teachers as well.',
            'category_id' => '10',
            'grade' => '6',
            'image' => '/assets/images/book/main/7.jpg',
            'isbn' => 'ISBN 978-624-6232-19-1',
            'pdf' => '/assets/files/book/main/7/7',
            'link' => 'https://bookstudio.lk/product/sinhala-work-book-gr-4-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Social Studies Grade 1 (3 Parts)',
            'desc' => 'Book 1 of this series provides students the chance to think critically change assumptions, and understand own character, society, living environment, History and Culture.

            Book 2 of this series has been designed to understand own family, home, lifestyle and food habits with very attractive pictures and this curriculum would be helpful to create good citizens.

            Book 3 of this series has been designed with more attractive activities to create student action and inspire tomorrow‘s citizens with all domains.',
            'category_id' => '6',
            'grade' => '3',
            'image' => '/assets/images/book/main/8.jpg',
            'isbn' => 'No ISBN',
            'pdf' => '/assets/files/book/main/8/8',
            'link' => 'https://bookstudio.lk/product/social-studies-grade-1-3-books-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Social Studies Grade 2 (3 Parts)',
            'desc' => 'Book 1 of this series has been designed with primary goals to help students master the essential skills and knowledge about society and lifestyle.

            Book 2 of this series has been created with inquiry- based and help students develop critical thinking skills. And this text book will be a joyful one for students and teachers both.

            Book 3 of this series has been created with more attractive activities to make students happy with the subject. All the units are enriching with psychomotor, affective and cognitive. ',
            'category_id' => '6',
            'grade' => '4',
            'image' => '/assets/images/book/main/9.jpg',
            'isbn' => 'No ISBN',
            'pdf' => '/assets/files/book/main/9/9',
            'link' => 'https://bookstudio.lk/product/social-studies-book-set-grade-2/'

        ]);
        Book::create([
            'title' => 'Social Studies Grade 3 (3 Parts)',
            'desc' => 'Book 1 of this series has been designed to practice key skills about the living environment , enhancing the knowledge of geographical parts around the World and transportation modes in the World. All the Lessons are designed with main three domains as well.

            Book 2 of this series has been designed with unique learning abilities. Lessons are mixed with History and Civic and it would be a useful tool to develop intrapersonal skills.

            Book 3 of this series has been designed with more attractive activities and pictures focusing on Geography and Society to develop knowledge , attitudes and skills of future leaders.',
            'category_id' => '6',
            'grade' => '3',
            'image' => '/assets/images/book/main/10.jpg',
            'isbn' => 'No ISBN',
            'pdf' => '/assets/files/book/main/10/10',
            'link' => 'https://bookstudio.lk/product/social-studies-book-set-grade-3/'

        ]);
        Book::create([
            'title' => 'Tamil Textbook Grade 1',
            'desc' => 'Grade 1 Tamil Language Textbook is designed to develop the basic language skills of kids.  It is very elegantly designed with attractive color images that students will love and learn with passion.  We hope that this book will be very useful for teachers and students.',
            'category_id' => '12',
            'grade' => '3',
            'image' => '/assets/images/book/main/11.jpg',
            'isbn' => 'ISBN 978-624-6232-25-2',
            'pdf' => '/assets/files/book/main/11/11',
            'link' => 'https://bookstudio.lk/product/tamil-reading-book-gr-1-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Tamil Textbook Grade 2',
            'desc' => 'The Grade 2 Tamil language textbook is structured to develop childrens basic language skills. The students will come forward to read with interest, without any doubt, as the lessons are very well designed with attractive color pictures.  We hope it will be very useful for students.',
            'category_id' => '12',
            'grade' => '4',
            'image' => '/assets/images/book/main/12.jpg',
            'isbn' => 'ISBN 978-624-6232-26-9',
            'pdf' => '/assets/files/book/main/12/12',
            'link' => 'https://bookstudio.lk/product/tamil-reading-book-gr-2-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Tamil Workbook Grade 1',
            'desc' => 'Grade 1 Tamil Language Workbook is packed with short exercises designed to develop early writing and thinking skills of children.  Also provided are some textbook exercises and activities  with  attractive color pictures that students can complete on their own with enthusiasm.  This book is sure to be very useful for students.',
            'category_id' => '12',
            'grade' => '3',
            'image' => '/assets/images/book/main/13.jpg',
            'isbn' => 'ISBN 978-624-6232-23-8',
            'pdf' => '/assets/files/book/main/13/13',
            'link' => 'https://bookstudio.lk/product/tamil-work-book-gr-1-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Tamil Workbook Grade 2',
            'desc' => 'Grade 2 Tamil Language Workbook is packed with short exercises to develop childrens writing and thinking skills.  Also provided are some textbook exercises and activities with attractive colorful pictures that students can complete on their own with enthusiasm.  This workbook is designed to stimulate the students interest and involvement in the subject.',
            'category_id' => '12',
            'grade' => '4',
            'image' => '/assets/images/book/main/14.jpg',
            'isbn' => 'ISBN 978-624-6232-22-1',
            'pdf' => '/assets/files/book/main/14/14',
            'link' => 'https://bookstudio.lk/product/tamil-work-book-gr-2-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Technical Skills Grade 6',
            'desc' => 'This book provides a basic understanding of the technology.  The book introduces industrialisation in an interesting way.  Specially designed to make the subject interesting for the learners. ',
            'category_id' => '4',
            'grade' => '8',
            'image' => '/assets/images/book/main/15.jpg',
            'isbn' => 'ISBN 978-624-6232-12-2',
            'pdf' => '/assets/files/book/main/15/15',
            'link' => 'https://bookstudio.lk/product/technical-skills-gr-6-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Technical Skills Grade 7',
            'desc' => 'The purpose of this book is to provide the technical knowledge more widely.  In order to do that, attractive practical activities are included in every lesson.',
            'category_id' => '4',
            'grade' => '9',
            'image' => '/assets/images/book/main/16.jpg',
            'isbn' => 'ISBN 978-624-6232-07-8',
            'pdf' => '/assets/files/book/main/16/16',
            'link' => 'https://bookstudio.lk/product/technical-skills-gr-7-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Technical Skills Grade 8',
            'desc' => 'By completing this book, learners will gain extensive knowledge about the technical field.</br>The ultimate goal of this is to guide the learners to make use of their knowledge in day today life and inspire them for new inventions.',
            'category_id' => '4',
            'grade' => '10',
            'image' => '/assets/images/book/main/17.jpg',
            'isbn' => 'No ISBN',
            'pdf' => '/assets/files/book/main/17/17',
            'link' => 'https://bookstudio.lk/product/technical-skills-gr-8-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Speech and Drama Grade 1',
            'desc' => 'A fun filled book featuring a collection of poems that are lively, rhythmic and appealing to young children. The carefully curated selection ensures that children learn poems that stimulate the imagination, develop vocabulary and expose the young minds to a wide range of topics.
            Each poem is accompanied with a coordinating activity and/ or game.
            The book also contains activity pages that are designed to be used as a follow-up to story time. They give the children an opportunity to express their thoughts on the story.',
            'category_id' => '5',
            'grade' => '3',
            'image' => '/assets/images/book/main/18.jpg',
            'isbn' => 'No ISBN',
            'pdf' => '/assets/files/book/main/18/18',
            'link' => 'https://bookstudio.lk/product/speech-and-drama-grade-1-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Speech and Drama Grade 2',
            'desc' => 'A fun filled book featuring a collection of poems that are lively, rhythmic and appealing to young children. The carefully curated selection ensures that children learn poems that stimulate the imagination, develop vocabulary and expose the young minds to a wide range of topics. Each poem is accompanied with a coordinating activity and/ or game. Many of the activity pages lend to further strengthen the childs creative writing skills. The book also contains colourful and fun activity pages that are designed to be used as a follow-up to story time. They give the children an opportunity to display their creativity and ideas on the story artistically.',
            'category_id' => '5',
            'grade' => '4',
            'image' => '/assets/images/book/main/19.jpg',
            'isbn' => 'ISBN 978-624-6232-24-5',
            'pdf' => '/assets/files/book/main/19/19',
            'link' => 'https://bookstudio.lk/product/speech-and-drama-grade-2/'

        ]);
        Book::create([
            'title' => 'Speech and Drama Grade 3',
            'desc' => 'A fun filled book featuring a collection of poems that are fun and appealing to children between the ages of seven and eight.
            The carefully curated selection ensures that children learn poems that stimulate the imagination, develop their vocabulary and emotional intelligence.
            Each poem is accompanied with a coordinating activity that lends to further strengthen the childs creativity and helps with the understanding of the material.
            ',
            'category_id' => '5',
            'grade' => '5',
            'image' => '/assets/images/book/main/20.jpg',
            'isbn' => 'ISBN 978-624-6232-20-7',
            'pdf' => '/assets/files/book/main/20/20',
            'link' => 'https://bookstudio.lk/product/speech-and-drama-grade-3/'

        ]);
        Book::create([
            'title' => 'Speech and Drama Grade 4',
            'desc' => 'A colourful and fun book featuring a collection of poems and activities connected to the book  The Giraffe and the Pelly and Me  by Roald Dhal.<br/>The book has been designed to appeal to children between the ages of eight and nine.<br/>The carefully curated selection of poetry ensures that children learn poems that are not only great for performances but also stimulate the imagination, develop vocabulary and language skills,promote empathy and develop emotional intelligence. <br/>Each poem is accompanied with a coordinating activity that lends to further strengthen the childs creativity and helps with the understanding of the material. <br/>The book also features breathing exercises, tongue twisters, drama games and introduces the children to the basics of sight reading.',
            'category_id' => '5',
            'grade' => '6',
            'image' => '/assets/images/book/main/21.jpg',
            'isbn' => 'ISBN 978-624-6232-18-4',
            'pdf' => '/assets/files/book/main/21/21',
            'link' => 'https://bookstudio.lk/product/speech-drama-gr-4-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Speech and Drama Grade 5',
            'desc' => 'A colourful and fun book featuring a collection of poems and activities connected to the book  Charlie and the Chocolate Factory by Roald Dhal.<br/>

            The book has been designed to appeal to children between the ages of nine and ten.

            The carefully curated selection of poetry ensures that children learn poems that are not only great for performances but also stimulate the imagination, develop vocabulary and language skills, promote empathy and develop emotional intelligence.<br/>

            Each poem is accompanied with a coordinating activity that lends to further strengthen the childs creativity, introduces the child to poetic devices and helps with the understanding of the material.<br/>

            The book also features breathing exercises, tongue twisters, drama games, forms of poetry, pointers for reading aloud and introduces the children to the basics of stage make-up.',
            'category_id' => '5',
            'grade' => '7',
            'image' => '/assets/images/book/main/22.jpg',
            'isbn' => ' ISBN 978-624-6232-17-7',
            'pdf' => '/assets/files/book/main/22/22',
            'link' => 'https://bookstudio.lk/product/speech-drama-gr-5-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Speech and Drama Grade 6',
            'desc' => 'A colourful and fun book featuring a collection of poems and activities connected to the book  Matilda by Roald Dhal. <br/>

            The book has been designed to appeal to children between the ages of ten and eleven.

            The carefully curated selection of poetry ensures that children learn poems that are not only great for performances but also stimulate the imagination, develop vocabulary and language skills, promote empathy and develop emotional intelligence.<br/>

            Each poem is accompanied with a coordinating activity that lends to further strengthen the childs creativity, introduces the child to poetic devices,promotes public speaking skills and helps with the understanding of the material.<br/>

            The book also features warm-up exercises, spotlights on Ken Nesbitt and Endid Blyton,and an introduction to Sri Lankan theatre and its practioners.

            The book includes a section on theory that covers phrasing ,pause, pitch, pace and emphasis.',
            'category_id' => '5',
            'grade' => '8',
            'image' => '/assets/images/book/main/23.jpg',
            'isbn' => 'ISBN 978-624-6232-13-9',
            'pdf' => '/assets/files/book/main/23/23',
            'link' => 'https://bookstudio.lk/product/speech-drama-gr-6-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Speech and Drama Grade 7',
            'desc' => 'A colourful and fun book featuring a collection of poems and activities connected to the book  Boy Tales of Childhood "by Roald Dhal.

            The book has been designed to appeal to children between the ages of eleven and twelve.

            The carefully curated selection of poetry ensures that children are exposed to performing a variety of styles that include fractured fairytales , rap poetry and ballads amoungst others.

            Each poem is accompanied with a coordinating activity that lends to further strengthen the childs creativity, introduces the child to poetic devices, and helps with the understanding of the material.

            The book also features spotlights on Michael Morpurgo, William Shakespeare,  The Globe Threate, The Tempest and  Michael Rosen.

            The book includes a section on theory that covers breathing, characterization and acting skills.',
            'category_id' => '5',
            'grade' => '9',
            'image' => '/assets/images/book/main/24.jpg',
            'isbn' => 'ISBN 978-624-6232-08-5',
            'pdf' => '/assets/files/book/main/24/24',
            'link' => 'https://bookstudio.lk/product/speech-drama-gr-7-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Speech and Drama Grade 8',
            'desc' => 'A colourful and fun book featuring a collection of poems and activities connected to the book Boy Tales of Childhood "by Roald Dhal.

            The book has been designed to appeal to children between the ages of twelve and thirteen.

            The carefully curated selection of poetry ensures that children are exposed to a mix of poetry, some being fun, rhythmic and funny whilst  incorporating  others that are challenging and intellectually stimulating.

            Each poem is accompanied with a coordinating activity that lends to further strengthen the childs creativity, introduces the child to poetic devices, and helps with the understanding of the material.

            The book also features spotlights on Benjamin Zephaniah, Greek Threate  and Stage Makeup.

            The book includes a section on theory that covers resonance and articulation.',
            'category_id' => '5',
            'grade' => '10',
            'image' => '/assets/images/book/main/25.jpg',
            'isbn' => 'ISBN 978-624-6232-02-3',
            'pdf' => '/assets/files/book/main/25/25',
            'link' => 'https://bookstudio.lk/product/speech-drama-gr-8-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Speech and Drama Pre Grade',
            'desc' => 'A fun filled book featuring a collection of poems that are lively, rhythmic and appealing to young children. The carefully curated selection ensures that children learn poems that stimulate the imagination, develop vocabulary and expose the young minds to a wide range of topics.</br>Each poem is accompanied with a coordinating movement based/ acting/ colouring activity</br>The book also contains warm-up exercises and speech drills.</br> A special feature in this book is the sticker pages that are designed to be used within the activity pages.',
            'category_id' => '5',
            'grade' => '1',
            'image' => '/assets/images/book/main/26.jpg',
            'isbn' => 'No ISBN',
            'pdf' => '/assets/files/book/main/26/26',
            'link' => 'https://bookstudio.lk/product/pre-grade-speech-and-drama-book-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'The Passion of Cooking Grade 6',
            'desc' => 'This book is a collection of recipes, instructions and information about on preparation, serving and nutrition values presented in an easy step by step format to ensure easy understanding of everyone, even beginners.',
            'category_id' => '4',
            'grade' => '8',
            'image' => '/assets/images/book/main/27.jpg',
            'isbn' => 'ISBN 978-624-6232-15-3',
            'pdf' => '/assets/files/book/main/27/27',
            'link' => 'https://bookstudio.lk/product/passion-of-cooking-gr-6-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'The Passion of Cooking Grade 7',
            'desc' => 'Written with children in mind, this cookbook not only provides the basics but also points out safety issues, essential skills and needed equipment.</br>Those who are new to cooking will find this book useful as it explains many relevant areas, recipes and methods in greater detail. With several recipes, students are sure to find something that they will enjoy making while learning new skills. ',
            'category_id' => '4',
            'grade' => '9',
            'image' => '/assets/images/book/main/28.jpg',
            'isbn' => 'No ISBN',
            'pdf' => '/assets/files/book/main/28/28',
            'link' => 'https://bookstudio.lk/product/passion-of-cooking-gr-7-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'The Passion of Cooking Grade 8',
            'desc' => 'This book of cookery is a wonderful guide for novices who love to master the skills of cookery. This is a refreshing collection of recipes that combines lot of great concepts and techniques in one easy to read guide. </br> The Author’s/Editor’s passion and love of the subject shines through this book.  Ideal not just for students, but also for anyone who loves to try fresh cuisine.',
            'category_id' => '4',
            'grade' => '10',
            'image' => '/assets/images/book/main/29.jpg',
            'isbn' => 'ISBN 978-624-6232-04-7',
            'pdf' => '/assets/files/book/main/29/29',
            'link' => 'https://bookstudio.lk/product/passion-of-cooking-gr-8-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Little Friends Song Book',
            'desc' => 'Without music, life would be miserable.. Music is the language of happiness for all ages. This book is an attempt to provide a little happiness of music..
            ',
            'category_id' => '9',
            'grade' => '14',
            'image' => '/assets/images/book/main/30.jpg',
            'isbn' => 'ISBN 978-624-6232-01-6',
            'pdf' => '/assets/files/book/main/30/30',
            'link' => 'https://bookstudio.lk/product/little-friends-song-book-gr-4-7-lis/'

        ]);
        // Book::create([
        //     'title' => 'Speech and Drama Pre Grade',
        //     'desc' => 'A colourful and fun book featuring a collection of poems and activities connected to the book Charlie and the Chocolate Factory by Roald Dhal.

        //     The book has been designed to appeal to children between the ages of nine and ten.

        //     The carefully curated selection of poetry ensures that children learn poems that are not only great for performances but also stimulate the imagination, develop vocabulary and language skills, promote empathy and develop emotional intelligence.

        //     Each poem is accompanied with a coordinating activity that lends to further strengthen the childs creativity, introduces the child to poetic devices and helps with the understanding of the material.

        //     The book also features breathing exercises, tongue twisters, drama games, forms of poetry, pointers for reading aloud and introduces the children to the basics of stage make-up.',
        //     'category_id' => '5',
        //     'grade' => '7',
        //     'image' => '/assets/images/book/main/31.jpg',
        //     'isbn' => 'No ISBN',
        //     'pdf' => '/assets/files/book/main/31/31',
        //     'link' => 'https://bookstudio.lk/product/pre-grade-speech-and-drama-book-lyceum-publications/'

        // ]);
        Book::create([
            'title' => 'My Pre Grade Fun Pages',
            'desc' => 'Designed specifically for children, this book teaches early learning concepts through a creative process of activities which engage children in colouring, Pre-writing, Pre-reading, Mathematical skills, and basic skills for learning readiness. The exercises in this book are designed to develop these essential skills to facilitate a smooth transition from the Pre-Primary to the Primary level.',
            'category_id' => '1',
            'grade' => '1',
            'image' => '/assets/images/book/main/32.jpg',
            'isbn' => 'No ISBN',
            'pdf' => '/assets/files/book/main/32/32',
            'link' => 'https://bookstudio.lk/product/my-pre-grade-fun-pages/'

        ]);
        Book::create([
            'title' => 'Upper Nursery My Big Pad of Activities',
            'desc' => 'Designed specifically for early learners, this booklet  contains concepts which introduce basic skills and facts that help young children gain independence, understanding and knowledge of the world around them.  Compiled with activities to develop skills needed for colouring, Pre-writing, Pre-reading, Mathematical skills, and basic skills for learning readiness. These skills help them become successful in future learning.',
            'category_id' => '1',
            'grade' => '1',
            'image' => '/assets/images/book/main/33.jpg',
            'isbn' => 'No ISBN',
            'pdf' => '/assets/files/book/main/33/33',
            'link' => 'https://bookstudio.lk/product/my-big-pad-of-activity-lyceum-publications/'

        ]);
        Book::create([
            'title' => 'Saivaneri - Grade 1',
            'desc' => 'This Book has been compiled with a clear explanation of the customs, religious rituals and virtues to be followed in daily life etc.  Also, the Thevarams have been given in Tamil language as well so that it will be easy for the students to pronounce correctly. The stories have been beautifully depicted with fascinating pictures so that children will enjoy studying them.  This book is designed to be useful for both teachers and students.',
            'category_id' => '13',
            'grade' => '3',
            'image' => '/assets/images/book/main/34.jpg',
            'isbn' => 'ISBN 978-624-6232-27-6',
            'pdf' => '/assets/files/book/main/34/34',
            'link' => 'https://bookstudio.lk/product/hinduism-gr-1-lyceum-publications/'
        ]);
    }
}
