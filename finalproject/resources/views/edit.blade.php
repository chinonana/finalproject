<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dream</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    </head>
    
    <body>
        <!--上のメニュー画面-->
        <div class="container">
        	<nav class="navbar navbar-default">
        		<div class="container-fluid">
        			<div class="navbar-header">
        				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
				        </button>
				        <a class="navbar-brand" href="/">Dream</a>
				    </div>
				    <div id="navbar" class="navbar-collapse collapse">
				    	<ul class="nav navbar-nav navbar-right">
				    		<li><a href='/posts/flower'>検索</a></li>
					        <li><a href='/posts/create'>投稿</a></li>
					        <li><a href='/login'>ログイン</a></li>
				            <li><a href='/register'>会員登録</a></li>
				        </ul>
				    </div><!--/.nav-collapse -->
		        </div><!--/.container-fluid -->
	        </nav><!--"navbar navbar-default"-->
        </div><!--"container"-->
        
    <body>
                
            
            
        <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='post[body]' value="{{ $post->body }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
           
 
        
        <div class="footer">
            
            <a href="/">戻る</a>
        </div>
    </body>
</html>