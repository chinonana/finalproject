{"filter":false,"title":"services.php","tooltip":"/finalproject/config/services.php","undoManager":{"mark":29,"position":29,"stack":[[{"start":{"row":30,"column":6},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":45},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":31,"column":4},"end":{"row":32,"column":0},"action":"insert","lines":["",""]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":32,"column":4},"end":{"row":36,"column":1},"action":"insert","lines":["'google' => [","    'client_id' => env('GOOGLE_CLIENT_ID'),","    'client_secret' => env('GOOGLE_CLIENT_SECRET'),","    'redirect' => env('APP_URL') . '/login/google/callback',","]"],"id":46}],[{"start":{"row":36,"column":0},"end":{"row":36,"column":1},"action":"insert","lines":[" "],"id":47},{"start":{"row":36,"column":1},"end":{"row":36,"column":2},"action":"insert","lines":[" "]},{"start":{"row":36,"column":2},"end":{"row":36,"column":3},"action":"insert","lines":[" "]},{"start":{"row":36,"column":3},"end":{"row":36,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":36,"column":5},"end":{"row":36,"column":6},"action":"insert","lines":[","],"id":48}],[{"start":{"row":33,"column":4},"end":{"row":33,"column":5},"action":"insert","lines":[" "],"id":49},{"start":{"row":33,"column":5},"end":{"row":33,"column":6},"action":"insert","lines":[" "]},{"start":{"row":33,"column":6},"end":{"row":33,"column":7},"action":"insert","lines":[" "]},{"start":{"row":33,"column":7},"end":{"row":33,"column":8},"action":"insert","lines":[" "]}],[{"start":{"row":34,"column":4},"end":{"row":34,"column":5},"action":"insert","lines":[" "],"id":50},{"start":{"row":34,"column":5},"end":{"row":34,"column":6},"action":"insert","lines":[" "]},{"start":{"row":34,"column":6},"end":{"row":34,"column":7},"action":"insert","lines":[" "]},{"start":{"row":34,"column":7},"end":{"row":34,"column":8},"action":"insert","lines":[" "]}],[{"start":{"row":35,"column":4},"end":{"row":35,"column":5},"action":"insert","lines":[" "],"id":51},{"start":{"row":35,"column":5},"end":{"row":35,"column":6},"action":"insert","lines":[" "]},{"start":{"row":35,"column":6},"end":{"row":35,"column":7},"action":"insert","lines":[" "]},{"start":{"row":35,"column":7},"end":{"row":35,"column":8},"action":"insert","lines":[" "]}],[{"start":{"row":32,"column":4},"end":{"row":36,"column":6},"action":"remove","lines":["'google' => [","        'client_id' => env('GOOGLE_CLIENT_ID'),","        'client_secret' => env('GOOGLE_CLIENT_SECRET'),","        'redirect' => env('APP_URL') . '/login/google/callback',","    ],"],"id":52}],[{"start":{"row":32,"column":4},"end":{"row":36,"column":2},"action":"insert","lines":["'google' => [","    'client_id' => env('GOOGLE_CLIENT_ID'),","    'client_secret' => env('GOOGLE_CLIENT_SECRET'),","    'redirect' => env('GOOGLE_CALLBACK_URL'),","],"],"id":53}],[{"start":{"row":36,"column":0},"end":{"row":36,"column":1},"action":"insert","lines":[" "],"id":54},{"start":{"row":36,"column":1},"end":{"row":36,"column":2},"action":"insert","lines":[" "]},{"start":{"row":36,"column":2},"end":{"row":36,"column":3},"action":"insert","lines":[" "]},{"start":{"row":36,"column":3},"end":{"row":36,"column":4},"action":"insert","lines":[" "]},{"start":{"row":36,"column":4},"end":{"row":36,"column":5},"action":"insert","lines":[" "]}],[{"start":{"row":36,"column":4},"end":{"row":36,"column":5},"action":"remove","lines":[" "],"id":55}],[{"start":{"row":32,"column":5},"end":{"row":36,"column":6},"action":"remove","lines":["google' => [","    'client_id' => env('GOOGLE_CLIENT_ID'),","    'client_secret' => env('GOOGLE_CLIENT_SECRET'),","    'redirect' => env('GOOGLE_CALLBACK_URL'),","    ],"],"id":56},{"start":{"row":32,"column":4},"end":{"row":32,"column":5},"action":"remove","lines":["'"]}],[{"start":{"row":32,"column":4},"end":{"row":36,"column":2},"action":"insert","lines":["'twitter' => [","       'client_id' => env('TWITTER_CLIENT_ID'),","       'client_secret' => env('TWITTER_CLIENT_SECRET'),","       'redirect' => env('CALLBACK_URL')","],"],"id":57}],[{"start":{"row":36,"column":0},"end":{"row":36,"column":1},"action":"insert","lines":[" "],"id":58},{"start":{"row":36,"column":1},"end":{"row":36,"column":2},"action":"insert","lines":[" "]},{"start":{"row":36,"column":2},"end":{"row":36,"column":3},"action":"insert","lines":[" "]},{"start":{"row":36,"column":3},"end":{"row":36,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":32,"column":4},"end":{"row":36,"column":6},"action":"remove","lines":["'twitter' => [","       'client_id' => env('TWITTER_CLIENT_ID'),","       'client_secret' => env('TWITTER_CLIENT_SECRET'),","       'redirect' => env('CALLBACK_URL')","    ],"],"id":60}],[{"start":{"row":32,"column":4},"end":{"row":36,"column":6},"action":"insert","lines":["'google' => [","        'client_id' => env('GOOGLE_CLIENT_ID'),","        'client_secret' => env('GOOGLE_CLIENT_SECRET'),","\t'redirect' => env('GOOGLE_CALLBACK_URL'),","    ],"],"id":61}],[{"start":{"row":35,"column":1},"end":{"row":35,"column":2},"action":"insert","lines":[" "],"id":62},{"start":{"row":35,"column":2},"end":{"row":35,"column":3},"action":"insert","lines":[" "]},{"start":{"row":35,"column":3},"end":{"row":35,"column":4},"action":"insert","lines":[" "]},{"start":{"row":35,"column":4},"end":{"row":35,"column":5},"action":"insert","lines":[" "]}],[{"start":{"row":33,"column":23},"end":{"row":33,"column":47},"action":"remove","lines":["env('GOOGLE_CLIENT_ID'),"],"id":63}],[{"start":{"row":34,"column":27},"end":{"row":34,"column":55},"action":"remove","lines":["env('GOOGLE_CLIENT_SECRET'),"],"id":64}],[{"start":{"row":35,"column":19},"end":{"row":35,"column":46},"action":"remove","lines":["env('GOOGLE_CALLBACK_URL'),"],"id":65}],[{"start":{"row":35,"column":19},"end":{"row":35,"column":57},"action":"insert","lines":["http://localhost/login/google/callback"],"id":66}],[{"start":{"row":34,"column":27},"end":{"row":34,"column":51},"action":"insert","lines":["O6koNjwf_lc5x2McelHCnXcG"],"id":67}],[{"start":{"row":33,"column":23},"end":{"row":33,"column":95},"action":"insert","lines":["526316415068-ek1srd150rqf1gbhspe3gns3rmk5vt8u.apps.googleusercontent.com"],"id":68}],[{"start":{"row":33,"column":23},"end":{"row":33,"column":24},"action":"insert","lines":["'"],"id":69}],[{"start":{"row":33,"column":96},"end":{"row":33,"column":97},"action":"insert","lines":["'"],"id":70}],[{"start":{"row":33,"column":97},"end":{"row":33,"column":98},"action":"insert","lines":[","],"id":71}],[{"start":{"row":34,"column":51},"end":{"row":34,"column":52},"action":"insert","lines":["'"],"id":72},{"start":{"row":34,"column":52},"end":{"row":34,"column":53},"action":"insert","lines":[","]}],[{"start":{"row":34,"column":27},"end":{"row":34,"column":28},"action":"insert","lines":["'"],"id":73}],[{"start":{"row":35,"column":19},"end":{"row":35,"column":20},"action":"insert","lines":["'"],"id":74}],[{"start":{"row":35,"column":58},"end":{"row":35,"column":59},"action":"insert","lines":["'"],"id":75},{"start":{"row":35,"column":59},"end":{"row":35,"column":60},"action":"insert","lines":[","]}]]},"ace":{"folds":[],"scrolltop":249.5,"scrollleft":0,"selection":{"start":{"row":35,"column":60},"end":{"row":35,"column":60},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":14,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1631111190178,"hash":"49a5d7e8a615b41da0f563ad991c1b12f0f8e218"}