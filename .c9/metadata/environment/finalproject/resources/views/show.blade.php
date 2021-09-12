{"filter":false,"title":"show.blade.php","tooltip":"/finalproject/resources/views/show.blade.php","undoManager":{"mark":77,"position":77,"stack":[[{"start":{"row":0,"column":0},"end":{"row":52,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <title>Dream</title>","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\">","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css\">","    </head>","    ","    <body>","        <!--上のメニュー画面-->","        <div class=\"container\">","        \t<nav class=\"navbar navbar-default\">","        \t\t<div class=\"container-fluid\">","        \t\t\t<div class=\"navbar-header\">","        \t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">","        \t\t\t\t<span class=\"sr-only\">Toggle navigation</span>","        \t\t\t\t<span class=\"icon-bar\"></span>","        \t\t\t\t<span class=\"icon-bar\"></span>","        \t\t\t\t<span class=\"icon-bar\"></span>","\t\t\t\t        </button>","\t\t\t\t        <a class=\"navbar-brand\" href=\"/\">Dream</a>","\t\t\t\t    </div>","\t\t\t\t    <div id=\"navbar\" class=\"navbar-collapse collapse\">","\t\t\t\t    \t<ul class=\"nav navbar-nav navbar-right\">","\t\t\t\t    \t\t<li><a href='/posts/flower'>検索</a></li>","\t\t\t\t\t        <li><a href='/posts/create'>投稿</a></li>","\t\t\t\t\t        <li><a href='/login'>ログイン</a></li>","\t\t\t\t            <li><a href='/register'>会員登録</a></li>","\t\t\t\t        </ul>","\t\t\t\t    </div><!--/.nav-collapse -->","\t\t        </div><!--/.container-fluid -->","\t        </nav><!--\"navbar navbar-default\"-->","        </div><!--\"container\"-->","        ","        <!--記事一覧-->","        <h1>保存小説一覧</h1>","        <div class='posts'>","            <div class=\"col-xs-12\">","            @foreach ($posts as $post)","                <div class='post'>","                    <h2><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","            </div><!--\"col-xs-12\"-->","        </div><!--post-->","        <div class='paginate'>","            {{ $posts->links() }}","        </div><!--paginate-->","    </body><!--11-->","</html>"],"id":85}],[{"start":{"row":0,"column":0},"end":{"row":24,"column":7},"action":"insert","lines":["<!doctype html>","<html lang=\"{{ str_replace(\"_\", \"-\", app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","        <title>Posts</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","        <link rel=\"stylesheet\" href=\"/css/app.css\">","    </head>","    <body>","        <h1 class=\"title\">","            {{ $post->title }}","        </h1>","        <div class=\"content\">","            <div class=\"content__post\">","                <h3>本文</h3>","                <p>{{ $post->body }}</p>    ","            </div>","        </div>","        <div class=\"footer\">","            <a href=\"/\">戻る</a>","        </div>","    </body>","</html>"],"id":86}],[{"start":{"row":1,"column":61},"end":{"row":1,"column":64},"action":"insert","lines":["-->"],"id":87},{"start":{"row":1,"column":0},"end":{"row":1,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":2,"column":10},"end":{"row":2,"column":13},"action":"insert","lines":["-->"]},{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":3,"column":30},"end":{"row":3,"column":33},"action":"insert","lines":["-->"]},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":4,"column":76},"end":{"row":4,"column":79},"action":"insert","lines":["-->"]},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":5,"column":28},"end":{"row":5,"column":31},"action":"insert","lines":["-->"]},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":7,"column":93},"end":{"row":7,"column":96},"action":"insert","lines":["-->"]},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":8,"column":51},"end":{"row":8,"column":54},"action":"insert","lines":["-->"]},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":9,"column":11},"end":{"row":9,"column":14},"action":"insert","lines":["-->"]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["<!--"]}],[{"start":{"row":9,"column":18},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":88}],[{"start":{"row":10,"column":0},"end":{"row":43,"column":32},"action":"insert","lines":["<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <title>Dream</title>","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\">","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css\">","    </head>","    ","    <body>","        <!--上のメニュー画面-->","        <div class=\"container\">","        \t<nav class=\"navbar navbar-default\">","        \t\t<div class=\"container-fluid\">","        \t\t\t<div class=\"navbar-header\">","        \t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">","        \t\t\t\t<span class=\"sr-only\">Toggle navigation</span>","        \t\t\t\t<span class=\"icon-bar\"></span>","        \t\t\t\t<span class=\"icon-bar\"></span>","        \t\t\t\t<span class=\"icon-bar\"></span>","\t\t\t\t        </button>","\t\t\t\t        <a class=\"navbar-brand\" href=\"/\">Dream</a>","\t\t\t\t    </div>","\t\t\t\t    <div id=\"navbar\" class=\"navbar-collapse collapse\">","\t\t\t\t    \t<ul class=\"nav navbar-nav navbar-right\">","\t\t\t\t    \t\t<li><a href='/posts/flower'>検索</a></li>","\t\t\t\t\t        <li><a href='/posts/create'>投稿</a></li>","\t\t\t\t\t        <li><a href='/login'>ログイン</a></li>","\t\t\t\t            <li><a href='/register'>会員登録</a></li>","\t\t\t\t        </ul>","\t\t\t\t    </div><!--/.nav-collapse -->","\t\t        </div><!--/.container-fluid -->","\t        </nav><!--\"navbar navbar-default\"-->","        </div><!--\"container\"-->"],"id":89}],[{"start":{"row":43,"column":32},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":90},{"start":{"row":44,"column":0},"end":{"row":44,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":50,"column":39},"end":{"row":51,"column":27},"action":"remove","lines":["","                <h3>本文</h3>"],"id":91}],[{"start":{"row":0,"column":15},"end":{"row":9,"column":18},"action":"remove","lines":["","<!--<html lang=\"{{ str_replace(\"_\", \"-\", app()->getLocale()) }}\">-->","<!--    <head>-->","<!--        <meta charset=\"utf-8\">-->","<!--        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">-->","<!--        <title>Posts</title>-->","        <!-- Fonts -->","<!--        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">-->","<!--        <link rel=\"stylesheet\" href=\"/css/app.css\">-->","<!--    </head>-->"],"id":92}],[{"start":{"row":37,"column":10},"end":{"row":37,"column":11},"action":"remove","lines":["1"],"id":93}],[{"start":{"row":37,"column":10},"end":{"row":37,"column":11},"action":"insert","lines":["2"],"id":94}],[{"start":{"row":39,"column":11},"end":{"row":39,"column":12},"action":"remove","lines":["1"],"id":95}],[{"start":{"row":39,"column":11},"end":{"row":39,"column":12},"action":"insert","lines":["2"],"id":96}],[{"start":{"row":45,"column":28},"end":{"row":46,"column":12},"action":"insert","lines":["","            "],"id":97}],[{"start":{"row":46,"column":12},"end":{"row":46,"column":80},"action":"insert","lines":["<p class=\"edit\">[<a href=\"/posts/{{ $post->id }}/edit\">edit</a>]</p>"],"id":98}],[{"start":{"row":44,"column":14},"end":{"row":45,"column":0},"action":"insert","lines":["",""],"id":99},{"start":{"row":45,"column":0},"end":{"row":45,"column":8},"action":"insert","lines":["        "]},{"start":{"row":45,"column":8},"end":{"row":46,"column":0},"action":"insert","lines":["",""]},{"start":{"row":46,"column":0},"end":{"row":46,"column":8},"action":"insert","lines":["        "]},{"start":{"row":46,"column":8},"end":{"row":46,"column":9},"action":"insert","lines":["k"]},{"start":{"row":46,"column":9},"end":{"row":46,"column":10},"action":"insert","lines":["o"]},{"start":{"row":46,"column":10},"end":{"row":46,"column":11},"action":"insert","lines":["m"]}],[{"start":{"row":46,"column":11},"end":{"row":46,"column":12},"action":"insert","lines":["e"],"id":100},{"start":{"row":46,"column":12},"end":{"row":46,"column":13},"action":"insert","lines":["\\"]}],[{"start":{"row":46,"column":12},"end":{"row":46,"column":13},"action":"remove","lines":["\\"],"id":101},{"start":{"row":46,"column":11},"end":{"row":46,"column":12},"action":"remove","lines":["e"]},{"start":{"row":46,"column":10},"end":{"row":46,"column":11},"action":"remove","lines":["m"]},{"start":{"row":46,"column":9},"end":{"row":46,"column":10},"action":"remove","lines":["o"]},{"start":{"row":46,"column":8},"end":{"row":46,"column":9},"action":"remove","lines":["k"]}],[{"start":{"row":46,"column":8},"end":{"row":46,"column":13},"action":"insert","lines":["コメント欄"],"id":102}],[{"start":{"row":46,"column":13},"end":{"row":46,"column":16},"action":"insert","lines":["-->"],"id":103},{"start":{"row":46,"column":8},"end":{"row":46,"column":12},"action":"insert","lines":["<!--"]}],[{"start":{"row":46,"column":20},"end":{"row":47,"column":0},"action":"insert","lines":["",""],"id":104},{"start":{"row":47,"column":0},"end":{"row":47,"column":8},"action":"insert","lines":["        "]},{"start":{"row":47,"column":8},"end":{"row":48,"column":0},"action":"insert","lines":["",""]},{"start":{"row":48,"column":0},"end":{"row":48,"column":8},"action":"insert","lines":["        "]},{"start":{"row":48,"column":8},"end":{"row":49,"column":0},"action":"insert","lines":["",""]},{"start":{"row":49,"column":0},"end":{"row":49,"column":8},"action":"insert","lines":["        "]},{"start":{"row":49,"column":8},"end":{"row":50,"column":0},"action":"insert","lines":["",""]},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"insert","lines":["        "]},{"start":{"row":50,"column":8},"end":{"row":51,"column":0},"action":"insert","lines":["",""]},{"start":{"row":51,"column":0},"end":{"row":51,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":51,"column":8},"end":{"row":52,"column":0},"action":"insert","lines":["",""],"id":105},{"start":{"row":52,"column":0},"end":{"row":52,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":42,"column":44},"end":{"row":43,"column":0},"action":"insert","lines":["",""],"id":106},{"start":{"row":43,"column":0},"end":{"row":43,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":42,"column":44},"end":{"row":43,"column":16},"action":"remove","lines":["","                "],"id":107}],[{"start":{"row":40,"column":27},"end":{"row":40,"column":28},"action":"remove","lines":["\""],"id":108},{"start":{"row":40,"column":26},"end":{"row":40,"column":27},"action":"remove","lines":["t"]},{"start":{"row":40,"column":25},"end":{"row":40,"column":26},"action":"remove","lines":["n"]},{"start":{"row":40,"column":24},"end":{"row":40,"column":25},"action":"remove","lines":["e"]},{"start":{"row":40,"column":23},"end":{"row":40,"column":24},"action":"remove","lines":["t"]},{"start":{"row":40,"column":22},"end":{"row":40,"column":23},"action":"remove","lines":["n"]},{"start":{"row":40,"column":21},"end":{"row":40,"column":22},"action":"remove","lines":["o"]},{"start":{"row":40,"column":20},"end":{"row":40,"column":21},"action":"remove","lines":["c"]},{"start":{"row":40,"column":19},"end":{"row":40,"column":20},"action":"remove","lines":["\""]}],[{"start":{"row":40,"column":19},"end":{"row":40,"column":30},"action":"insert","lines":["\"col-xs-12\""],"id":109}],[{"start":{"row":43,"column":18},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":110},{"start":{"row":44,"column":0},"end":{"row":44,"column":12},"action":"insert","lines":["            "]},{"start":{"row":44,"column":12},"end":{"row":45,"column":0},"action":"insert","lines":["",""]},{"start":{"row":45,"column":0},"end":{"row":45,"column":12},"action":"insert","lines":["            "]},{"start":{"row":45,"column":12},"end":{"row":46,"column":0},"action":"insert","lines":["",""]},{"start":{"row":46,"column":0},"end":{"row":46,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":44,"column":12},"end":{"row":45,"column":0},"action":"insert","lines":["",""],"id":111},{"start":{"row":45,"column":0},"end":{"row":45,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":45,"column":12},"end":{"row":48,"column":21},"action":"insert","lines":["<h3>コメント一覧</h3>","          @foreach($post->comments as $single_comment)","        \t<p>{{ $single_comment->comment }}</p><br />","          @endforeach"],"id":112}],[{"start":{"row":45,"column":27},"end":{"row":46,"column":0},"action":"insert","lines":["",""],"id":113},{"start":{"row":46,"column":0},"end":{"row":46,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":47,"column":9},"end":{"row":47,"column":10},"action":"remove","lines":[" "],"id":114},{"start":{"row":47,"column":8},"end":{"row":47,"column":9},"action":"remove","lines":[" "]},{"start":{"row":47,"column":4},"end":{"row":47,"column":8},"action":"remove","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"remove","lines":["    "]},{"start":{"row":46,"column":12},"end":{"row":47,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":46,"column":56},"end":{"row":47,"column":0},"action":"insert","lines":["",""],"id":115},{"start":{"row":47,"column":0},"end":{"row":47,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":48,"column":8},"end":{"row":48,"column":9},"action":"remove","lines":["\t"],"id":116},{"start":{"row":48,"column":4},"end":{"row":48,"column":8},"action":"remove","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"remove","lines":["    "]},{"start":{"row":47,"column":12},"end":{"row":48,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":48,"column":10},"end":{"row":48,"column":11},"action":"insert","lines":["　"],"id":117},{"start":{"row":48,"column":11},"end":{"row":48,"column":12},"action":"insert","lines":["　"]}],[{"start":{"row":48,"column":11},"end":{"row":48,"column":12},"action":"remove","lines":["　"],"id":118}],[{"start":{"row":48,"column":22},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":119},{"start":{"row":49,"column":0},"end":{"row":49,"column":11},"action":"insert","lines":["          　"]},{"start":{"row":49,"column":11},"end":{"row":50,"column":0},"action":"insert","lines":["",""]},{"start":{"row":50,"column":0},"end":{"row":50,"column":11},"action":"insert","lines":["          　"]}],[{"start":{"row":50,"column":10},"end":{"row":50,"column":11},"action":"remove","lines":["　"],"id":120},{"start":{"row":50,"column":9},"end":{"row":50,"column":10},"action":"remove","lines":[" "]},{"start":{"row":50,"column":8},"end":{"row":50,"column":9},"action":"remove","lines":[" "]},{"start":{"row":50,"column":4},"end":{"row":50,"column":8},"action":"remove","lines":["    "]}],[{"start":{"row":48,"column":22},"end":{"row":50,"column":4},"action":"remove","lines":["","          　","    "],"id":121}],[{"start":{"row":48,"column":22},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":122},{"start":{"row":49,"column":0},"end":{"row":49,"column":11},"action":"insert","lines":["          　"]},{"start":{"row":49,"column":11},"end":{"row":50,"column":0},"action":"insert","lines":["",""]},{"start":{"row":50,"column":0},"end":{"row":50,"column":11},"action":"insert","lines":["          　"]},{"start":{"row":50,"column":11},"end":{"row":51,"column":0},"action":"insert","lines":["",""]},{"start":{"row":51,"column":0},"end":{"row":51,"column":11},"action":"insert","lines":["          　"]},{"start":{"row":51,"column":11},"end":{"row":52,"column":0},"action":"insert","lines":["",""]},{"start":{"row":52,"column":0},"end":{"row":52,"column":11},"action":"insert","lines":["          　"]}],[{"start":{"row":52,"column":11},"end":{"row":94,"column":6},"action":"insert","lines":["<form class=\"mb-4\" method=\"POST\" action=\"{{ route('comment.store') }}\">","    @csrf"," ","    <input","        name=\"post_id\"","        type=\"hidden\"","        value=\"{{ $post->id }}\"","    >"," ","    <div class=\"form-group\">","        "," ","","    <div class=\"form-group\">","     <label for=\"body\">","     口コミを投稿してください","     </label>"," ","        <textarea","            id=\"comment\"","            name=\"comment\"","            class=\"form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}\"","            rows=\"4\"","        >{{ old('comment') }}</textarea>","        @if ($errors->has('comment'))","         <div class=\"invalid-feedback\">","         {{ $errors->first('comment') }}","         </div>","        @endif","    </div>"," ","    <div class=\"mt-4\">","     <button type=\"submit\" class=\"btn btn-primary\">","     コメントする","     </button>","    </div>","</form>"," ","@if (session('commentstatus'))","    <div class=\"alert alert-success mt-4 mb-4\">","     {{ session('commentstatus') }}","    </div>","@endif"],"id":123}],[{"start":{"row":88,"column":7},"end":{"row":94,"column":6},"action":"remove","lines":[""," ","@if (session('commentstatus'))","    <div class=\"alert alert-success mt-4 mb-4\">","     {{ session('commentstatus') }}","    </div>","@endif"],"id":124}],[{"start":{"row":51,"column":11},"end":{"row":61,"column":28},"action":"remove","lines":["","          　<form class=\"mb-4\" method=\"POST\" action=\"{{ route('comment.store') }}\">","    @csrf"," ","    <input","        name=\"post_id\"","        type=\"hidden\"","        value=\"{{ $post->id }}\"","    >"," ","    <div class=\"form-group\">"],"id":125}],[{"start":{"row":54,"column":0},"end":{"row":54,"column":1},"action":"insert","lines":["枠"],"id":126}],[{"start":{"row":54,"column":1},"end":{"row":54,"column":2},"action":"insert","lines":["　"],"id":127}],[{"start":{"row":54,"column":2},"end":{"row":54,"column":6},"action":"insert","lines":["見た目用"],"id":128}],[{"start":{"row":54,"column":6},"end":{"row":54,"column":9},"action":"insert","lines":["-->"],"id":129},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["<!--"]}],[{"start":{"row":80,"column":12},"end":{"row":81,"column":14},"action":"remove","lines":["","        </div>"],"id":130},{"start":{"row":80,"column":12},"end":{"row":81,"column":0},"action":"insert","lines":["",""]},{"start":{"row":81,"column":0},"end":{"row":81,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":49,"column":11},"end":{"row":49,"column":12},"action":"insert","lines":["<"],"id":131},{"start":{"row":49,"column":12},"end":{"row":49,"column":13},"action":"insert","lines":["/"]},{"start":{"row":49,"column":13},"end":{"row":49,"column":14},"action":"insert","lines":["d"]},{"start":{"row":49,"column":14},"end":{"row":49,"column":15},"action":"insert","lines":["i"]}],[{"start":{"row":49,"column":15},"end":{"row":49,"column":16},"action":"insert","lines":["c"],"id":132}],[{"start":{"row":49,"column":15},"end":{"row":49,"column":16},"action":"remove","lines":["c"],"id":133}],[{"start":{"row":49,"column":15},"end":{"row":49,"column":16},"action":"insert","lines":["v"],"id":134},{"start":{"row":49,"column":16},"end":{"row":49,"column":17},"action":"insert","lines":[">"]}],[{"start":{"row":48,"column":22},"end":{"row":49,"column":17},"action":"remove","lines":["","          　</div>"],"id":135}],[{"start":{"row":84,"column":8},"end":{"row":84,"column":9},"action":"insert","lines":["<"],"id":136},{"start":{"row":84,"column":9},"end":{"row":84,"column":10},"action":"insert","lines":["/"]},{"start":{"row":84,"column":10},"end":{"row":84,"column":11},"action":"insert","lines":["d"]}],[{"start":{"row":84,"column":11},"end":{"row":84,"column":12},"action":"insert","lines":["i"],"id":137},{"start":{"row":84,"column":12},"end":{"row":84,"column":13},"action":"insert","lines":["c"]}],[{"start":{"row":84,"column":12},"end":{"row":84,"column":13},"action":"remove","lines":["c"],"id":138}],[{"start":{"row":84,"column":12},"end":{"row":84,"column":13},"action":"insert","lines":["v"],"id":139},{"start":{"row":84,"column":13},"end":{"row":84,"column":14},"action":"insert","lines":[">"]}],[{"start":{"row":90,"column":12},"end":{"row":90,"column":80},"action":"remove","lines":["<p class=\"edit\">[<a href=\"/posts/{{ $post->id }}/edit\">edit</a>]</p>"],"id":140}],[{"start":{"row":49,"column":11},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":141},{"start":{"row":50,"column":0},"end":{"row":50,"column":11},"action":"insert","lines":["          　"]},{"start":{"row":50,"column":11},"end":{"row":51,"column":0},"action":"insert","lines":["",""]},{"start":{"row":51,"column":0},"end":{"row":51,"column":11},"action":"insert","lines":["          　"]},{"start":{"row":51,"column":11},"end":{"row":52,"column":0},"action":"insert","lines":["",""]},{"start":{"row":52,"column":0},"end":{"row":52,"column":11},"action":"insert","lines":["          　"]}],[{"start":{"row":52,"column":11},"end":{"row":52,"column":79},"action":"insert","lines":["<p class=\"edit\">[<a href=\"/posts/{{ $post->id }}/edit\">edit</a>]</p>"],"id":142}],[{"start":{"row":80,"column":7},"end":{"row":84,"column":8},"action":"remove","lines":["","            ","            ","            ","        "],"id":143}],[{"start":{"row":48,"column":22},"end":{"row":51,"column":11},"action":"remove","lines":["","          　","          　","          　"],"id":144}],[{"start":{"row":48,"column":22},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":145},{"start":{"row":49,"column":0},"end":{"row":49,"column":11},"action":"insert","lines":["          　"]}],[{"start":{"row":50,"column":69},"end":{"row":50,"column":70},"action":"remove","lines":["t"],"id":146},{"start":{"row":50,"column":68},"end":{"row":50,"column":69},"action":"remove","lines":["i"]},{"start":{"row":50,"column":67},"end":{"row":50,"column":68},"action":"remove","lines":["d"]},{"start":{"row":50,"column":66},"end":{"row":50,"column":67},"action":"remove","lines":["e"]}],[{"start":{"row":50,"column":66},"end":{"row":50,"column":68},"action":"insert","lines":["編集"],"id":147}],[{"start":{"row":49,"column":11},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":148},{"start":{"row":50,"column":0},"end":{"row":50,"column":11},"action":"insert","lines":["          　"]}],[{"start":{"row":50,"column":11},"end":{"row":50,"column":57},"action":"insert","lines":["<button type=\"submit\" class=\"btn btn-primary\">"],"id":149}],[{"start":{"row":52,"column":11},"end":{"row":52,"column":12},"action":"insert","lines":["<"],"id":150},{"start":{"row":52,"column":12},"end":{"row":52,"column":13},"action":"insert","lines":["/"]},{"start":{"row":52,"column":13},"end":{"row":52,"column":14},"action":"insert","lines":["b"]},{"start":{"row":52,"column":14},"end":{"row":52,"column":15},"action":"insert","lines":["u"]},{"start":{"row":52,"column":15},"end":{"row":52,"column":16},"action":"insert","lines":["t"]},{"start":{"row":52,"column":16},"end":{"row":52,"column":17},"action":"insert","lines":["t"]}],[{"start":{"row":52,"column":17},"end":{"row":52,"column":18},"action":"insert","lines":["o"],"id":151},{"start":{"row":52,"column":18},"end":{"row":52,"column":19},"action":"insert","lines":["n"]},{"start":{"row":52,"column":19},"end":{"row":52,"column":20},"action":"insert","lines":[">"]}],[{"start":{"row":50,"column":11},"end":{"row":50,"column":57},"action":"remove","lines":["<button type=\"submit\" class=\"btn btn-primary\">"],"id":152}],[{"start":{"row":52,"column":11},"end":{"row":53,"column":8},"action":"remove","lines":["</button>","        "],"id":153}],[{"start":{"row":52,"column":11},"end":{"row":53,"column":0},"action":"insert","lines":["",""],"id":154},{"start":{"row":53,"column":0},"end":{"row":53,"column":11},"action":"insert","lines":["          　"]}],[{"start":{"row":81,"column":8},"end":{"row":85,"column":6},"action":"insert","lines":["@if (session('commentstatus'))","    <div class=\"alert alert-success mt-4 mb-4\">","     {{ session('commentstatus') }}","    </div>","@endif"],"id":155}],[{"start":{"row":80,"column":20},"end":{"row":85,"column":6},"action":"remove","lines":["","        @if (session('commentstatus'))","    <div class=\"alert alert-success mt-4 mb-4\">","     {{ session('commentstatus') }}","    </div>","@endif"],"id":156}],[{"start":{"row":42,"column":41},"end":{"row":42,"column":44},"action":"remove","lines":["   "],"id":158},{"start":{"row":42,"column":41},"end":{"row":43,"column":0},"action":"insert","lines":["",""]},{"start":{"row":43,"column":0},"end":{"row":43,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":43,"column":16},"end":{"row":43,"column":71},"action":"insert","lines":["<p class='category'>{{$post->category['category']}}</p>"],"id":159}],[{"start":{"row":37,"column":10},"end":{"row":37,"column":11},"action":"remove","lines":["2"],"id":160}],[{"start":{"row":37,"column":10},"end":{"row":37,"column":11},"action":"insert","lines":["1"],"id":161}],[{"start":{"row":37,"column":10},"end":{"row":37,"column":11},"action":"remove","lines":["1"],"id":162}],[{"start":{"row":37,"column":10},"end":{"row":37,"column":11},"action":"insert","lines":["2"],"id":163}]]},"ace":{"folds":[],"scrolltop":466.5,"scrollleft":0,"selection":{"start":{"row":37,"column":11},"end":{"row":37,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1631433137033,"hash":"f2fc8c1e2472733a7a5a916ee6df6016e7cf637b"}