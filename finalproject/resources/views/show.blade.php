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
        <h2 class="title">
            {{ $post->title }}
        </h2>
        <div class="col-xs-12">
            <div class="content__post">
                <p>{{ $post->body }}</p> 
                <p class='category'>{{$post->category['category']}}</p>
            </div>
            
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                 @csrf
                 @method('DELETE')
                 <button type="submit">削除</button> 
            </form>   
            
                
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <h3>コメント一覧</h3>
            @foreach($post->comments as $single_comment)
            <p>{{ $single_comment->comment }}</p><br />
          　@endforeach
          　
          　
          　
          　
          　
 
<!--枠　見た目用-->
    <div class="form-group">
     <label for="body">
     口コミを投稿してください
     </label>
 
        <textarea
            id="comment"
            name="comment"
            class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}"
            rows="4"
        >{{ old('comment') }}</textarea>
        @if ($errors->has('comment'))
         <div class="invalid-feedback">
         {{ $errors->first('comment') }}
         </div>
        @endif
    </div>
 
    <div class="mt-4">
     <button type="submit" class="btn btn-primary">
     コメントする
     </button>
    </div>
</form>
        <!--コメント欄-->
        </div>
        
        
        
        
        <div class="footer">
            
            <a href="/">戻る</a>
        </div>
        
        
        <!--削除警告-->
        <script>
            function deletePost(e){
                'use strict';
                if (confirm('削除すると復元できません。\n本当に削除しますか？'))
                {
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
        
        
        
        
        
    </body>
</html>