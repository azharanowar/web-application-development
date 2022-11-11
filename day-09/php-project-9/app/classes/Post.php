<?php

namespace App\classes;

class Post
{
    public $post, $posts = [], $postsData = [];

    public function __construct() {
        $this->posts = [
            0   =>  [
                'id'                =>  1,
                'category_id'       =>  1,
                'title'             =>  'Meta cuts more than 11,000 jobs; biggest cull in its history',
                'short_description' =>  'Facebook’s parent company, whose shares have lost more than two-thirds of their value, said it also plans to cut discretionary spending and extend its hiring freeze through the first quarter.',
                'description'       =>  'Meta Platforms Inc said on Wednesday it will let go of 13 percent of its workforce, or more than 11,000 employees, in one of the biggest technology layoffs this year as the Facebook parent battles soaring costs and a weak advertising market. The broad job cuts, the first in Meta’s 18-year history, follow thousands of layoffs at other leading tech companies including Elon Musk-owned Twitter and Microsoft Corp. The pandemic boom that boosted tech companies and their valuations has turned into a bust this year in the face of decades-high inflation and rapidly rising interest rates. Meta, whose shares have lost more than two-thirds of their value, said it also plans to cut discretionary spending and extend its hiring freeze through the first quarter. “Today I’m sharing some of the most difficult changes we’ve made in Meta’s history,” the company’s founder Mark Zuckerberg said in a message to employees announcing the layoffs. “I want to take accountability for these decisions and for how we got here. I know this is tough for everyone, and I’m especially sorry to those impacted.” Potential recession An economic slowdown and a grim outlook for online advertising – by far Meta’s biggest revenue source – have contributed to the company’s woes. This summer, Meta posted its first quarterly revenue decline in history, followed by another, bigger decline in the fall. Some of the pain is company-specific, while some is tied to broader economic and technological forces. Last week, Twitter laid off about half of its 7,500 employees, part of a chaotic overhaul as Musk took the helm. He tweeted there was no choice but to cut the jobs “when the company is losing more than $4M/day”, though did not provide details about the losses. Meta has worried investors by pouring more than $10bn a year into the “metaverse” as it shifts its focus away from social media. Zuckerberg predicts the metaverse, an immersive digital universe, will eventually replace smartphones as the primary way people use technology. Meta and its advertisers are bracing for a potential recession. There is also the challenge of Apple’s privacy tools, which make it more difficult for social media platforms such as Facebook, Instagram and Snap to track people without their consent and show them specially tailored advertisements. Competition from TikTok is also an a growing threat as younger people flock to the video sharing app over Instagram, which Meta also owns. Meta’s profits fell to $4.4bn in the last quarter, a 52 percent decrease year-on-year. “Fundamentally, we’re making all these changes for two reasons: our revenue outlook is lower than we expected at the beginning of this year, and we want to make sure we’re operating efficiently,” wrote Zuckerberg.',
                'image'             =>  '1.webp',
            ],
            1   =>  [
                'id'                =>  2,
                'category_id'       =>  5,
                'title'             =>  'Elon Musk sells Tesla shares worth $3.95bn after Twitter takeover',
                'short_description' =>  'World’s richest person sold 19.5 million shares of the electric car company after he bought Twitter.',
                'description'       =>  'Tesla CEO Elon Musk has sold $3.95bn worth of Tesla shares, according to US regulatory filings, days after he bought Twitter for $44bn. Musk sold 19.5 million shares of the electric car company between Friday and Tuesday, US Securities and Exchange Commission data showed on Tuesday.',
                'image'             =>  '2.webp',
            ],
            2   =>  [
                'id'                =>  3,
                'category_id'       =>  5,
                'title'             =>  'Nationwide strike over inflation disrupts transport across Greece',
                'short_description' =>  'Ground transport, flights and ferry services are disrupted in Greece after a 24-hour nationwide strike begins over higher wages.',
                'description'       =>  'Greek workers have begun a 24-hour nationwide strike demanding higher wages to match surging inflation, disrupting ground transport, flights and ferry services. High energy prices and soaring living costs have triggered strikes and protests across Europe this month, including in Germany, France and Spain. Inflation peaks at 12 percent While the Greek economy is growing at nearly twice the eurozone rate this year thanks to a rebound in tourism, inflation is near a 30-year peak at 12 percent, among the highest in the 19 countries sharing the euro. “Workers … are battling against the inflation suffocating Greek households, the jungle-like conditions in the labour market, against the burdens they have been carrying on their backs for years,” said the General Confederation of Greek Workers (GSEE), the main private sector union. The GSEE said it was “imperative” for the government to take measures to tackle inflation as the high costs of energy and basic goods were eating into people’s disposable income. Together with the public sector Civil Servants’ Confederation (ADEDY), it is demanding an increase in the minimum wage, which currently stands at about 713 euros ($717) per month, and the restoration of collective labour law. The conservative government has spent more than 9 billion euros ($9bn) since September 2021 on power subsidies and other measures to alleviate the burden of rising energy and fuel costs for farmers, households and businesses.',
                'image'             =>  '3.webp',
            ],
            3   =>  [
                'id'                =>  4,
                'category_id'       =>  5,
                'title'             =>  'US, EU add more sanctions as Myanmar violence deepens',
                'short_description' =>  'Latest measures target officials and arms dealers as the military uses brutal force to respond to widespread armed resistance to its rule.',
                'description'       =>  'The United States and European Union have announced new sanctions against Myanmar’s military regime aimed at officials, companies and arms dealers, as campaigners urge quicker implementation of the measures given the deepening crisis in the country. The EU sanctions apply to 19 more individuals and entities, including a minister and chief justice, and are a result of “the continuing escalation of violence and grave human rights violations following the military takeover two years ago”, the European Council said on Tuesday.',
                'image'             =>  '4.webp',
            ],
            4   =>  [
                'id'                =>  5,
                'category_id'       =>  1,
                'title'             =>  'North Korea fires ballistic missile towards East Sea: S Korea',
                'short_description' =>  'Launch is the latest in a record year of missile tests by N Korea and comes as US mid-term election results announced.',
                'description'       =>  'North Korea has fired a ballistic missile towards the sea off the country’s east coast, the first firing since last week’s flurry of missile launches – and heavy artillery fire – which saw more than 30 missiles land in the seas off the Korean peninsula, South Korea’s military said. South Korea’s Joint Chiefs of Staff said it detected the launch of a short-range ballistic missile on Wednesday from an area in or around North Korea’s Sukchon in South Pyongan Province, at around 3:31 pm local time (06:30 GMT).',
                'image'             =>  '5.webp',
            ],
            5   =>  [
                'id'                =>  6,
                'category_id'       =>  3,
                'title'             =>  'Pakistan PM writes to top judge on Khan attack, journalist murder',
                'short_description' =>  'Shehbaz Sharif calls for the formation of judicial commissions to probe the assassination attempt on Imran Khan and TV journalist’s killing in Kenya.',
                'description'       =>  'Islamabad, Pakistan – Pakistan Prime Minister Shehbaz Sharif has asked the country’s top judge to form judicial commissions to investigate the assassination attempt on his predecessor Imran Khan and the killing of a Pakistani journalist in Kenya. In a tweet on Tuesday night, Sharif said he has written two letters to Umar Ata Bandial, the chief justice of Pakistan’s Supreme Court, requesting that he form a “judicial commission to investigate Arshad Sharif’s killing and attack on Imran [Khan]”.',
                'image'             =>  '6.webp',
            ],
            6   =>  [
                'id'                =>  7,
                'category_id'       =>  1,
                'title'             =>  'Palestinian teenager killed as Israeli MPs hold event in Nablus',
                'short_description' =>  'Mahdi Hashash, 15, was killed when a hand-made explosive blew up in his hand during an Israeli army raid on Nablus.',
                'description'       =>  'Ramallah, occupied West Bank – A Palestinian teenager has been killed during armed clashes and confrontations with the Israeli army after it raided the northern occupied West Bank city of Nablus. The Palestinian health ministry identified him as 15-year-old Mahdi Hashash from the Balata refugee camp in Nablus.',
                'image'             =>  '7.webp',
            ],
            7   =>  [
                'id'                =>  8,
                'category_id'       =>  3,
                'title'             =>  'Ukraine says talks with Russia hinge on ‘territorial integrity’',
                'short_description' =>  'Kyiv calls for the restoration of Ukraine’s borders as a precondition for negotiations while ruling out any talks with Putin.',
                'description'       =>  'Kyiv’s main precondition for entering negotiations with Russia on ending the war is the return of all captured Ukrainian land, according to a high-ranking security official. Oleksiy Danilov, the secretary of Ukraine’s National Security and Defence Council, said on Tuesday that the Ukrainian side also needed the “guarantee” of modern air defences, aircraft, tanks and long-range missiles.',
                'image'             =>  '8.webp',
            ],
            8   =>  [
                'id'                =>  9,
                'category_id'       =>  6,
                'title'             =>  'Senegal’s Sadio Mane in injury scare 11 days before the World Cup',
                'short_description' =>  'Forward will have scans on a leg injury and club officials say he should be fit for the World Cup.',
                'description'       =>  'Senegal’s Sadio Mane was substituted early in Bayern Munich’s home match against Werder Bremen with a leg injury just 11 days before the start of the World Cup in Qatar. The injury on Tuesday raised fears that the two-time African Footballer of the Year may not be fit for the start of Teranga Lions’ World Cup campaign.',
                'image'             =>  '9.webp',
            ],
            9   =>  [
                'id'                =>  10,
                'category_id'       =>  6,
                'title'             =>  'Pakistan thump New Zealand to reach T20 World Cup final',
                'short_description' =>  'Openers put on 105 as Pakistan chase down 153 to reach the final of the tournament they last won in 2009.',
                'description'       =>  'Openers Babar Azam and Muhammad Rizwan hit half-centuries as Pakistan beat New Zealand by seven wickets to reach the T20 World Cup final. Opting to bat first on Wednesday, New Zealand could only manage 152-4 thanks to a disciplined show by Pakistan in the field.',
                'image'             =>  '10.webp',
            ],
            10   =>  [
                'id'                =>  11,
                'category_id'       =>  2,
                'title'             =>  'Who is Alaa Abd el-Fattah and why is he imprisoned in Egypt?',
                'short_description' =>  'The Egyptian-British activist stopped drinking water on Sunday in an effort to bring attention to his plight as COP27 began.',
                'description'       =>  'Concern over the fate of jailed Egyptian-British activist Alaa Abd el-Fattah is growing as he continues to stage a hunger strike in protest against his years-long detention by Egyptian authorities on charges of spreading disinformation. On Sunday, as world leaders gathered in Egypt for the COP27 climate summit in Sharm el-Sheikh, Abd el-Fattah announced he had stopped drinking water.',
                'image'             =>  '11.webp',
            ],
            11   =>  [
                'id'                =>  12,
                'category_id'       =>  3,
                'title'             =>  'Turkey demands Sweden take concrete steps prior to NATO approval',
                'short_description' =>  'Ankara is demanding that Sweden and Finland extradite Kurdish rebels before lifting a veto on their membership bid.',
                'description'       =>  'Ankara has conveyed its request for Sweden to work towards countering “terrorism” threats before clearing the country’s application to join NATO, Turkish President Recep Tayyip Erdogan has said. “We understand their security concerns, and we want Sweden to respond to ours,” Erdogan said after meeting Sweden’s prime minister at the presidential palace in Ankara on Tuesday.',
                'image'             =>  '12.webp',
            ],
            12   =>  [
                'id'                =>  13,
                'category_id'       =>  2,
                'title'             =>  'Bangladesh disappearances ‘a matter of grave concern’',
                'short_description' =>  'Rights advocates accuse authorities of using ‘abductions’ to send message to people regarded as a threat to the state.',
                'description'       =>  'Dhaka, Bangladesh – An academic who went missing for over a month has returned home, saying “unidentified abductors” scooped him up in the middle of a busy road in Dhaka last month. Mubashar Hasan, an assistant professor of political science at North South University in Dhaka, was abducted on November 7.',
                'image'             =>  '13.webp',
            ],
            13   =>  [
                'id'                =>  14,
                'category_id'       =>  2,
                'title'             =>  'Two Rohingya camp leaders killed in Bangladesh',
                'short_description' =>  'Police spokesman Faruk Ahmed says the two Rohingya leaders were killed at Camp 13 in one of the worst attacks in recent months.',
                'description'       =>  'A mob of a dozen people hacked to death two Rohingya community leaders in Bangladesh as security worsens in camps housing almost one million refugees. Police spokesman Faruk Ahmed said the Rohingya leaders were killed late on Saturday at Camp 13, calling it one of the worst attacks in recent months.',
                'image'             =>  '14.webp',
            ],
        ];
    }

    public function getAllPosts() {
        return $this->posts;
    }

    public function getPostsByCategoryId($categoryId) {
        foreach ($this->posts as $post) {
            if ($post['category_id'] == $categoryId) {
                array_push($this->postsData, $post);
            }
        }

        return $this->postsData;
    }

    public function getPostDetailedInformationById($postId) {
        foreach ($this->posts as $post) {
            if ($post['id'] == $postId) {
                return $post;
            }
        }
    }

}