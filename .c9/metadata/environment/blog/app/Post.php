{"filter":false,"title":"Post.php","tooltip":"/blog/app/Post.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"remove","lines":["}"],"id":113}],[{"start":{"row":16,"column":2},"end":{"row":16,"column":3},"action":"remove","lines":[";"],"id":114}],[{"start":{"row":16,"column":2},"end":{"row":16,"column":3},"action":"remove","lines":[" "],"id":115},{"start":{"row":16,"column":2},"end":{"row":17,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"insert","lines":["}"],"id":116}],[{"start":{"row":16,"column":2},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":117}],[{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"remove","lines":["",""],"id":118},{"start":{"row":18,"column":1},"end":{"row":19,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":12,"column":1},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":119},{"start":{"row":13,"column":0},"end":{"row":13,"column":1},"action":"insert","lines":[" "]},{"start":{"row":13,"column":1},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"remove","lines":[" "],"id":120}],[{"start":{"row":13,"column":0},"end":{"row":16,"column":1},"action":"insert","lines":["public function show(Post $post)","{","    return view('show')->with(['post' => $post]);","}"],"id":121}],[{"start":{"row":0,"column":0},"end":{"row":23,"column":1},"action":"remove","lines":["<?php","","namespace App;","","use Illuminate\\Database\\Eloquent\\Model;","","class Post extends Model","{","    protected $fillable = [","    'title',","    'body',","];"," ","public function show(Post $post)","{","    return view('show')->with(['post' => $post]);","} ","   ","public function index(Post $post)","{","    return view('index')->with(['posts' => $post->getPaginateByLimit()]);","} ","","}"],"id":122}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":2},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","    public function index(Post $post)","    {","        return view('index')->with(['posts' => $post->get()]);  ","    }","}","?>"],"id":123}],[{"start":{"row":9,"column":5},"end":{"row":12,"column":5},"action":"remove","lines":["ublic function index(Post $post)","    {","        return view('index')->with(['posts' => $post->get()]);  ","    }"],"id":124}],[{"start":{"row":9,"column":5},"end":{"row":12,"column":1},"action":"insert","lines":["public function index(Post $post)","{","    return view('index')->with(['posts' => $post->getByLimit()]);","}"],"id":125}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":[" "],"id":126},{"start":{"row":10,"column":1},"end":{"row":10,"column":2},"action":"insert","lines":[" "]},{"start":{"row":10,"column":2},"end":{"row":10,"column":3},"action":"insert","lines":[" "]},{"start":{"row":10,"column":3},"end":{"row":10,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":[" "],"id":127},{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"insert","lines":[" "]},{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"insert","lines":[" "]},{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":["ppublic function index(Post $post)","    {","    return view('index')->with(['posts' => $post->getByLimit()]);","    }"],"id":128}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":2},"action":"insert","lines":["public function index(Post $post)","{","    return view('index')->with(['posts' => $post->getPaginateByLimit()]);","} "],"id":129}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":[" "],"id":130},{"start":{"row":10,"column":1},"end":{"row":10,"column":2},"action":"insert","lines":[" "]},{"start":{"row":10,"column":2},"end":{"row":10,"column":3},"action":"insert","lines":[" "]},{"start":{"row":10,"column":3},"end":{"row":10,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":[" "],"id":131},{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"insert","lines":[" "]},{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"insert","lines":[" "]},{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":12,"column":6},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":132},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":4},"end":{"row":16,"column":1},"action":"insert","lines":["public function show(Post $post)","{","    return view('show')->with(['post' => $post]);","}"],"id":133}],[{"start":{"row":12,"column":6},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":134},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":[" "],"id":135},{"start":{"row":15,"column":1},"end":{"row":15,"column":2},"action":"insert","lines":[" "]},{"start":{"row":15,"column":2},"end":{"row":15,"column":3},"action":"insert","lines":[" "]},{"start":{"row":15,"column":3},"end":{"row":15,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"insert","lines":[" "],"id":136},{"start":{"row":17,"column":1},"end":{"row":17,"column":2},"action":"insert","lines":[" "]},{"start":{"row":17,"column":2},"end":{"row":17,"column":3},"action":"insert","lines":[" "]},{"start":{"row":17,"column":3},"end":{"row":17,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":9,"column":4},"end":{"row":17,"column":5},"action":"remove","lines":["public function index(Post $post)","    {","    return view('index')->with(['posts' => $post->getPaginateByLimit()]);","    } ","    ","    public function show(Post $post)","    {","    return view('show')->with(['post' => $post]);","    }"],"id":137}],[{"start":{"row":9,"column":4},"end":{"row":13,"column":1},"action":"insert","lines":["public function getByLimit(int $limit_count = 10)","{","    // updated_atで降順に並べたあと、limitで件数制限をかける","    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();","}"],"id":138}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":[" "],"id":139},{"start":{"row":10,"column":1},"end":{"row":10,"column":2},"action":"insert","lines":[" "]},{"start":{"row":10,"column":2},"end":{"row":10,"column":3},"action":"insert","lines":[" "]},{"start":{"row":10,"column":3},"end":{"row":10,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":1},"action":"insert","lines":[" "],"id":140},{"start":{"row":13,"column":1},"end":{"row":13,"column":2},"action":"insert","lines":[" "]},{"start":{"row":13,"column":2},"end":{"row":13,"column":3},"action":"insert","lines":[" "]},{"start":{"row":13,"column":3},"end":{"row":13,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":13,"column":5},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":141},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":4},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":142},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":4},"end":{"row":19,"column":1},"action":"insert","lines":["public function getPaginateByLimit(int $limit_count = 10)","{","    // updated_atで降順に並べたあと、limitで件数制限をかける","    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);","}"],"id":143}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"insert","lines":[" "],"id":144},{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"insert","lines":[" "]},{"start":{"row":16,"column":2},"end":{"row":16,"column":3},"action":"insert","lines":[" "]},{"start":{"row":16,"column":3},"end":{"row":16,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":19,"column":0},"end":{"row":19,"column":1},"action":"insert","lines":[" "],"id":145},{"start":{"row":19,"column":1},"end":{"row":19,"column":2},"action":"insert","lines":[" "]},{"start":{"row":19,"column":2},"end":{"row":19,"column":3},"action":"insert","lines":[" "]},{"start":{"row":19,"column":3},"end":{"row":19,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":19,"column":5},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":146},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":4},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":4},"end":{"row":22,"column":0},"action":"insert","lines":["",""]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":22,"column":4},"end":{"row":25,"column":2},"action":"insert","lines":["protected $fillable = [","    'title',","    'body',","];"],"id":147}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":[" "],"id":148},{"start":{"row":25,"column":1},"end":{"row":25,"column":2},"action":"insert","lines":[" "]},{"start":{"row":25,"column":2},"end":{"row":25,"column":3},"action":"insert","lines":[" "]},{"start":{"row":25,"column":3},"end":{"row":25,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":9,"column":3},"end":{"row":13,"column":5},"action":"remove","lines":[" public function getByLimit(int $limit_count = 10)","    {","    // updated_atで降順に並べたあと、limitで件数制限をかける","    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();","    }"],"id":149}],[{"start":{"row":10,"column":4},"end":{"row":13,"column":6},"action":"insert","lines":["protected $fillable = [","    'title',","    'body',","    ];"],"id":150}],[{"start":{"row":19,"column":4},"end":{"row":24,"column":6},"action":"remove","lines":["","    ","    protected $fillable = [","    'title',","    'body',","    ];"],"id":151}],[{"start":{"row":13,"column":6},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":152},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":2,"column":13},"end":{"row":2,"column":30},"action":"remove","lines":["\\Http\\Controllers"],"id":153},{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"remove","lines":["p"]},{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"remove","lines":["p"]},{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"remove","lines":["A"]},{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"remove","lines":[" "]}],[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"insert","lines":[" "],"id":154},{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"insert","lines":["A"]},{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":["p"]},{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"insert","lines":["p"]}],[{"start":{"row":22,"column":1},"end":{"row":22,"column":2},"action":"remove","lines":[">"],"id":155},{"start":{"row":22,"column":0},"end":{"row":22,"column":1},"action":"remove","lines":["?"]},{"start":{"row":21,"column":1},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":7,"column":11},"end":{"row":7,"column":20},"action":"remove","lines":["ontroller"],"id":156},{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"remove","lines":["C"]}],[{"start":{"row":7,"column":19},"end":{"row":7,"column":29},"action":"remove","lines":["Controller"],"id":157}],[{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"insert","lines":["M"],"id":158},{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"insert","lines":["o"]},{"start":{"row":7,"column":21},"end":{"row":7,"column":22},"action":"insert","lines":["d"]},{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"insert","lines":["e"]},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"insert","lines":["l"]}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":13},"action":"remove","lines":["App\\Post;"],"id":159}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":27},"action":"insert","lines":["lluminate\\Http\\Request;"],"id":160}],[{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["p"],"id":161},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["t"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["t"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["H"]}],[{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["D"],"id":162},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["a"]}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["t"],"id":163},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["a"]},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["b"]},{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"insert","lines":["a"]},{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"insert","lines":["s"]},{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"remove","lines":["t"],"id":164},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"remove","lines":["s"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"remove","lines":["e"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["u"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["q"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["e"]},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["R"]}],[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["E"],"id":165},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["q"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["u"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["i"]}],[{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["i"],"id":166},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["u"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["q"]}],[{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["l"],"id":167},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["o"]}],[{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["q"],"id":168},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"insert","lines":["u"]},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"insert","lines":["e"]},{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"insert","lines":["n"]}],[{"start":{"row":4,"column":30},"end":{"row":4,"column":31},"action":"insert","lines":["t"],"id":169}],[{"start":{"row":4,"column":31},"end":{"row":4,"column":32},"action":"insert","lines":["\\"],"id":170}],[{"start":{"row":4,"column":32},"end":{"row":4,"column":33},"action":"insert","lines":["M"],"id":171},{"start":{"row":4,"column":33},"end":{"row":4,"column":34},"action":"insert","lines":["o"]},{"start":{"row":4,"column":34},"end":{"row":4,"column":35},"action":"insert","lines":["d"]},{"start":{"row":4,"column":35},"end":{"row":4,"column":36},"action":"insert","lines":["e"]},{"start":{"row":4,"column":36},"end":{"row":4,"column":37},"action":"insert","lines":["l"]}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":28},"action":"remove","lines":["Http\\Request;"],"id":172}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":39},"action":"insert","lines":["Database\\Eloquent\\Model;"],"id":173}],[{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"remove","lines":["l"],"id":174},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"remove","lines":["e"]},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"remove","lines":["d"]},{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":["o"]},{"start":{"row":5,"column":33},"end":{"row":5,"column":34},"action":"remove","lines":["M"]}],[{"start":{"row":5,"column":33},"end":{"row":5,"column":34},"action":"insert","lines":["S"],"id":175},{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"insert","lines":["o"]},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"insert","lines":["d"]},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"insert","lines":["t"]}],[{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"remove","lines":["t"],"id":176},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"remove","lines":["d"]}],[{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"insert","lines":["f"],"id":177},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"insert","lines":["t"]}],[{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"insert","lines":["D"],"id":178},{"start":{"row":5,"column":38},"end":{"row":5,"column":39},"action":"insert","lines":["e"]}],[{"start":{"row":5,"column":39},"end":{"row":5,"column":40},"action":"insert","lines":["l"],"id":179},{"start":{"row":5,"column":40},"end":{"row":5,"column":41},"action":"insert","lines":["e"]},{"start":{"row":5,"column":41},"end":{"row":5,"column":42},"action":"insert","lines":["t"]},{"start":{"row":5,"column":42},"end":{"row":5,"column":43},"action":"insert","lines":["e"]}],[{"start":{"row":5,"column":43},"end":{"row":5,"column":44},"action":"insert","lines":["s"],"id":180}],[{"start":{"row":7,"column":24},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":181}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":16},"action":"insert","lines":["use SoftDeletes;"],"id":182}],[{"start":{"row":7,"column":24},"end":{"row":8,"column":16},"action":"remove","lines":["","use SoftDeletes;"],"id":183}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":38},"action":"remove","lines":["use lluminate\\Database\\Eloquent\\Model;"],"id":184},{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":185}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":45},"action":"insert","lines":["use Illuminate\\Database\\Eloquent\\SoftDeletes;"],"id":186}],[{"start":{"row":4,"column":33},"end":{"row":4,"column":44},"action":"remove","lines":["SoftDeletes"],"id":187}],[{"start":{"row":4,"column":33},"end":{"row":4,"column":34},"action":"insert","lines":["o"],"id":188},{"start":{"row":4,"column":34},"end":{"row":4,"column":35},"action":"insert","lines":["d"]},{"start":{"row":4,"column":35},"end":{"row":4,"column":36},"action":"insert","lines":["e"]},{"start":{"row":4,"column":36},"end":{"row":4,"column":37},"action":"insert","lines":["l"]}],[{"start":{"row":4,"column":33},"end":{"row":4,"column":34},"action":"insert","lines":["M"],"id":189}],[{"start":{"row":4,"column":33},"end":{"row":4,"column":38},"action":"remove","lines":["Model"],"id":190},{"start":{"row":4,"column":33},"end":{"row":4,"column":38},"action":"insert","lines":["Model"]}],[{"start":{"row":9,"column":3},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":191},{"start":{"row":10,"column":0},"end":{"row":10,"column":3},"action":"insert","lines":["   "]}],[{"start":{"row":9,"column":3},"end":{"row":9,"column":4},"action":"insert","lines":["u"],"id":192},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":["s"]},{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"insert","lines":["e"]}],[{"start":{"row":9,"column":3},"end":{"row":9,"column":6},"action":"remove","lines":["use"],"id":193},{"start":{"row":9,"column":3},"end":{"row":9,"column":6},"action":"insert","lines":["use"]}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"insert","lines":[" "],"id":194},{"start":{"row":9,"column":7},"end":{"row":9,"column":8},"action":"insert","lines":["S"]},{"start":{"row":9,"column":8},"end":{"row":9,"column":9},"action":"insert","lines":["o"]}],[{"start":{"row":9,"column":9},"end":{"row":9,"column":10},"action":"insert","lines":["f"],"id":195},{"start":{"row":9,"column":10},"end":{"row":9,"column":11},"action":"insert","lines":["t"]}],[{"start":{"row":9,"column":7},"end":{"row":9,"column":11},"action":"remove","lines":["Soft"],"id":196},{"start":{"row":9,"column":7},"end":{"row":9,"column":18},"action":"insert","lines":["SoftDeletes"]}],[{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"insert","lines":[":"],"id":197}],[{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"remove","lines":[":"],"id":198}],[{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"insert","lines":[";"],"id":199}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":39},"action":"remove","lines":["use Illuminate\\Database\\Eloquent\\Model;"],"id":200}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":36},"action":"insert","lines":["use App\\Http\\Controllers\\Controller;"],"id":201}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":24},"action":"remove","lines":["class Post extends Model"],"id":202}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":39},"action":"insert","lines":["class UserController extends Controller"],"id":203}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":204}],[{"start":{"row":4,"column":0},"end":{"row":5,"column":36},"action":"insert","lines":["use App\\User;","use App\\Http\\Controllers\\Controller;"],"id":205}],[{"start":{"row":4,"column":13},"end":{"row":5,"column":36},"action":"remove","lines":["","use App\\Http\\Controllers\\Controller;"],"id":206}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":13},"action":"remove","lines":["","use App\\User;"],"id":207}],[{"start":{"row":7,"column":29},"end":{"row":7,"column":39},"action":"remove","lines":["Controller"],"id":208}],[{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":["M"],"id":209},{"start":{"row":7,"column":30},"end":{"row":7,"column":31},"action":"insert","lines":["o"]},{"start":{"row":7,"column":31},"end":{"row":7,"column":32},"action":"insert","lines":["d"]},{"start":{"row":7,"column":32},"end":{"row":7,"column":33},"action":"insert","lines":["e"]},{"start":{"row":7,"column":33},"end":{"row":7,"column":34},"action":"insert","lines":["l"]}],[{"start":{"row":7,"column":6},"end":{"row":7,"column":20},"action":"remove","lines":["UserController"],"id":210}],[{"start":{"row":7,"column":6},"end":{"row":7,"column":7},"action":"insert","lines":["P"],"id":211},{"start":{"row":7,"column":7},"end":{"row":7,"column":8},"action":"insert","lines":["o"]},{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"insert","lines":["s"]},{"start":{"row":7,"column":9},"end":{"row":7,"column":10},"action":"insert","lines":["t"]}],[{"start":{"row":4,"column":5},"end":{"row":4,"column":36},"action":"remove","lines":["pp\\Http\\Controllers\\Controller;"],"id":212},{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"remove","lines":["A"]}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":39},"action":"insert","lines":["Illuminate\\Database\\Eloquent\\Model;"],"id":213}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":5,"column":45},"end":{"row":6,"column":0},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1623301572406,"hash":"dde0835469ac5ea21592782e264aa281d3d2d3d3"}