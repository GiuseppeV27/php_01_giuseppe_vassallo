<?php
// ESERCIZIO 1
// $primit = 3;
// $primit1 = 23.12;
// $primit2 = "Ciao Katia";
// $primit3 = true;
// var_dump($primit, $primit1, $primit2, $primit3);

// const PRIMIT = 3;
// const PRIMIT1 = 23.12;
// const PRIMIT2 = "Ciao Katia";
// const PRIMIT3 = true;
// var_dump("const PRIMIT const PRIMIT1 const PRIMIT2 const PRIMIT3");

// ESERCIZIO 2

// $1text = "Marco";
// $text2 = "hai";
// $text.3 = "sete";
// $text4 = "?";
// @text5 = "Perchè";
// $te-xt6 = '$text2';
// $text 7 = 'bevuto';
// $text8 = "tutto"

// $text1 = "Marco";
// $text2 = "hai";
// $text_3 = "sete";
// $text4 = "?";
// $text5 = "Perchè";
// $te_xt6 = $text2;
// $text_7 = "bevuto";
// $text8 = "tutto";
// var_dump("$text1 $text2 $text_3 $text4 $text5 $te_xt6 $text_7 $text8");

// ESERCIZIO 3


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
      'oscura',
      'era',
      89,
      [
        'mezzo',
        [
          'cammin',
          'Nel',
          [
            'selva',
            'la',
            [
              'via',
              'una',
              true,
            ]
          ],
        ]
      ],
      'ritrovai',
      'per'
    ],
    'diritta'
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
      'Virgilio',
      'smarrita',
      'ché'
    ]
    ];

  $results = $words1[6][3][1][1] . " " . $words1[6][3][0] . " del " . $words1[6][3][1][0] . " di " . $words2['elemento2'] . " " . $words1[2] . " " . $words1[4] . " " . $words1[6] [4] . " " . $words1[6] [5] . " " . $words1[6] [3] [1] [2] [2][1] . " " . $words1[6] [3] [1] [2] [0] . " " . $words1[6] [0] . " " . $words2["elemento3"] [2] . " " . $words1[6] [3] [1] [2] [1] . " " . $words1[7] . " " . $words1[6] [3] [1] [2] [2][0] . " " . $words1[6] [1] . " " . $words2["elemento3"] [1];
  var_dump($results);
