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
				    		<!--<li><a href='/posts/flower'>検索</a></li>-->
					        <li><a href='/posts/create'>投稿</a></li>
					        <li><a href='/login'>ログイン</a></li>
				            <li><a href='/register'>会員登録</a></li>
				        </ul>
				    </div><!--/.nav-collapse -->
		        </div><!--/.container-fluid -->
	        </nav><!--"navbar navbar-default"-->
        </div><!--"container"-->
        
        <!--create-->
        <h1>記事製作画面</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>作品名</h2>
                <input type="text" name="post[title]" placeholder="作品名を入力してください" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>URL</h2>
                <textarea name="post[body]" placeholder="URLを入力してください">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="category_id">
            	<h2>カテゴリー</h2>
                <div class="col-md-6">
                <select class="form-control" name="post[category_id]">
                @foreach ($categories as $category)
                <option value={{$category->id}}>{{$category->category}}</option>
                @endforeach
                </select>
                </div>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>