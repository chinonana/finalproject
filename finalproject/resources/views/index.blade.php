<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Perfumes</title>
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
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Dream</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<!--<li><a href='/posts/flower'>花</a></li>-->
					<!--<li><a href='/posts/plant'>植物</a></li>-->
					<!--<li><a href='/posts/animal'>動物</a></a></li>-->
					<!--<li><a href='/posts/human'>人工</a></li>-->
					<li><a href='/posts/create'>投稿</a></li>
					<li><a href='/login/google'>ログイン</a></li>
				    <li><a href='/register'>会員登録</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
</div> <!-- /project posts -->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!--記事一覧-->
        <h1>保存小説一覧</h1>
        <div class='posts'>
            <div class="col-xs-12">
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>