<?php
$resume = [
    'first_name' => 'John', //String
    'last_name'=> 'Doe', //String
    'photo'=> 'https://completeconcussions.com/drive/uploads/2017/10/detail-john-doe.jpg', //String
    'position'=> 'Bar manager', //String
    'description'=>'An experienced and professional bar manager with a strong interest to increase customer satisfaction and at the same time make sure all the operations are being done properly and the staff is happy', //String
    'contacts' => [ //Array
        'email' => 'johndoe@gmail.com', //String
        'phone' =>'0043 312 436', //String
        'skype' =>'johndoe', //String
    ],
    'address' => [ //Array
        'country'=> "Australia", //String
        'city'=>'Sydney', //String
        'coordx'=>'-33.807765', //float
        'coordy'=>'151.082128' //float
    ],
    'skills' => [ //Array
        ['name'=>'Project&Management','efficiency'=>5], //Array (String,int)
        ['name'=>'Working Under Pressure', 'efficiency'=>90],
        ['name'=>'Teamwork', 'efficiency'=>90],
        ['name'=>'Time Management', 'efficiency'=>100],
        ['name'=>'Emotional Intelligence', 'efficiency'=>95],
        ['name'=>'Public Speaking', 'efficiency'=>92],
        ['name'=>'Leadership', 'efficiency'=>100],
        ['name'=>'Critical Thinking', 'efficiency'=>89],
        ['name'=>'Story telling', 'efficiency'=>97],
    ],

    'experiences' => [ //Array
        [
            'position'=>'Bar manager',  //String
            'place'=>'El Presidente', //String
            'address' => [  //Array
                'country'=> 'Australia',  //String
                'city'=>'Sydney',  //String
                'coordx' =>'-33.807765', //float
                'coordy'=>'151.082128' //float
            ],
            'startwork'=>'2013-06-01 00:00',  //String
            'endwork'=>'2016-12-01 00:00',  //String
            'tasks' => [ //Array (String)
                'Upgraded the payment process by implementing a "pay cash in advance" system thereby ensuring that no payments remain pending.',
                'Proved to be a great team-player with the management team by providing original solutions, introducing new concepts, actively negotiating and resolving differences, and employing constructive criticism.',
                'Increased bar revenue with 20% through advertising featured cocktails from limited resources and word-of-mouth strategies.',
                'Decreased total costs by analyzing team members’ strengths, hiring skilled bartender and changing the schedule accordingly to their needs.'
            ],
            'contact' =>  [
                'firstname'=>'Vince',  //String
                'middlename'=>null,  //String
                'lastname'=>'Scarlett',  //String
                'email'=>null,  //String
                'phone'=>'0021 213 235',  //String
            ],
        ],
        [
            'position'=> 'Bartender',
            'place'=>'The NoMad Meeting Point',
            'address' =>  [
                'country'=> 'Australia',
                'city'=>'Sydney',
                'coordx'=>'-33.807765',
                'coordy'=>'151.082128'
            ],

            'startwork'=>'2009-06-01 00:00',
            'endwork'=>'2013-05-01 00:00',
            'tasks'=> [
                'Introduced a unique mix of new cocktails on the menu which gained immense popularity and increased the sales by 35% in the first 3 month.',
                'Improved customer base by engaging in friendly chat with customers which ensured a base of recurring persons. Served 145 customers in a busy hour with absolute accuracy and attention to details for which a bonus was offered.',
                'Reorganized the bar stations which resulted in 30% increase in overall efficiency.',
                'Promoted a new drink named Diamondblack which bought in profit of $1300 in one night.'
            ],
            'contact'=>   [
                'firstname'=>'Jackson',
                'middlename'=>null,
                'lastname'=>'Parish',
                'email'=>'jack@nomad.au',
                'phone'=> null,
            ]
        ],
        [
            'position'=> 'Brisbane',
            'place'=>'Brisbane Irish Rover',
            'address' =>  [
                'country'=> 'Australia',
                'city'=>'Brisbane',
                'coordx'=>' -27.469888',
                'coordy'=>' 153.003761',
            ],
            'startwork'=>'2007-08-01 00:00',
            'endwork'=>'2009-01-01 00:00',
            'tasks' => [
                'Successfully stoking the bar so we newer ran out of any drinks? increasing the customer satisfaction.',
                'Helped all the bartenders to the better organize the bar stations which increased the efficiency by 25%.',
                'Developed a new plan of opening and closing the bar which saved us 1 hour per day.',
            ],
            'contact' =>   [
                'firstname'=>'Fintan',
                'middlename'=>'O',
                'lastname'=>'Seaghdha',
                'email'=>'fintan@irishrover.au',
                'phone'=> null
            ],
        ]
    ],
    'certificates'=>  [
        [
            'name'=>'Foundation Leadership Program Certificate',  //String
            'trainingcentre'=>'CSE EMTW Education Institute',  //String
            'country'=>null,  //String
            'datastart'=>'2016-01-01 00:00',  //String
            'dataend'=>null,  //String
        ],
        [
            'name'=>'European Bartender School',
            'trainingcentre'=>null,
            'country'=>'London,UK',
            'datastart'=>'2009-02-01 00:00',
            'dataend'=>'2016-05-01 00:00',
        ],
        [
            'name'=>'SEO Training',
            'trainingcentre'=>'A&B',
            'country'=>null,
            'datastart'=>null,
            'dataend'=>'2015-09-01 00:00',
        ],
    ],
    'education'=> [
        'speciality'=>'Service management',  //String
        'nameuniver'=>'Brisbane Univercity',  //String
        'datastart'=>'2005-08-01 00:00',  //String
        'dataend'=>'2008-06-01 00:00',  //String
    ],
    'languages' =>    [
        ['name' =>'English', 'level'=>'Native'],  //String,String
        ['name' =>'Spanish', 'level'=>'Expert'],
        ['name' =>'Portuguese', 'level'=>'Upper-Intermediate'],
        ['name'=>'French', 'level'=>' Intermediate'],
    ],
    'interests'=> [
        'Economics','Psychology','Mixology','Chess','Surfing','Marketing'
    ],
];
