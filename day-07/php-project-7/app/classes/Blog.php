<?php

namespace App\classes;

class Blog
{
    public $blogs;
    public function __construct()
    {
        $this->blogs = [
            0   =>  [
                'id'     =>  1,
                'category_id'     =>  2,
                'title'           =>  "US confronts China, Russia at UN over N Korean missile launches",
                'description'     =>  "Beijing and Moscow had ‘bent over backwards’ to justify North Korea’s violations of UN sanctions, US ambassador says.",
                'image'           =>  '1.webp',
            ],
            1   =>  [
                'id'     =>  2,
                'category_id'     =>  2,
                'title'           =>  "‘Get ready’: Trump expected to announce run for US presidency",
                'description'     =>  "‘I will very, very, very probably do it again,’ former US president tells supporters in Iowa ahead of midterm elections.",
                'image'           =>  '2.webp',
            ],
            2   =>  [
                'id'     =>  3,
                'category_id'     =>  4,
                'title'           =>  "Qatar official slams ‘hypocrisy’ of World Cup criticism",
                'description'     =>  "The foreign minister says calls to boycott the 2022 World Cup are ‘unfortunate’.",
                'image'           =>  '3.webp',
            ],
            3   =>  [
                'id'     =>  4,
                'category_id'     =>  2,
                'title'           =>  "Protest calls in Pakistan after ex-PM Imran Khan shot in shin",
                'description'     =>  "Nationwide demonstrations have been called after Friday prayers, a day after former prime minister sustained minor gunshot wound.",
                'image'           =>  '4.webp',
            ],
            4   =>  [
                'id'     =>  5,
                'category_id'     =>  4,
                'title'           =>  "FIFA urges World Cup teams to ‘focus on the football’ in Qatar",
                'description'     =>  "FIFA asks participating nations to reserve judgement in the face of protests over LGBTQ issues and migrant worker rights.",
                'image'           =>  '5.webp',
            ],
            5   =>  [
                'id'     =>  6,
                'category_id'     =>  1,
                'title'           =>  "BNP rally begins in Barishal; crowd brims over 3km off venue",
                'description'     =>  "BNP's Barishal divisional rally began around 11am today (November 5, 2022) with the recitation from the Holy Quran.",
                'image'           =>  '6.jpg',
            ],
            6   =>  [
                'id'     =>  7,
                'category_id'     =>  1,
                'title'           =>  "Could ARSA be behind the recent violence in Rohingya camps?",
                'description'     =>  "Forty-year-old Ayatullah and 30-year-old Yasin had been asleep when, in the wee hours of October 27, 2022, they were dragged out of their shelter in Block C of Camp 17 by more than a dozen criminals and were fatally shot. According to the victims' families, both were vocal against criminal activities in the Rohingya refugee camps and had often cooperated with law enforcement agencies. ",
                'image'           =>  '7.jpg',
            ],
            7   =>  [
                'id'     =>  8,
                'category_id'     =>  3,
                'title'           =>  "Within a week of takeover, Musk announces layoffs across Twitter",
                'description'     =>  "It follows week of chaos, uncertainty about the company’s future under new owner Elon Musk, days ahead of US midterms.",
                'image'           =>  '8.webp',
            ],
            8   =>  [
                'id'     =>  9,
                'category_id'     =>  3,
                'title'           =>  "China’s stock markets jump on hopes for end to ‘zero COVID’",
                'description'     =>  "China’s stock markets have risen sharply after a state-run newspaper reported that local officials are being warned against excessively harsh measures to control COVID-19.",
                'image'           =>  '9.webp',
            ],
        ];
    }

    public function getAllBlogs() {
        return $this->blogs;
    }
}