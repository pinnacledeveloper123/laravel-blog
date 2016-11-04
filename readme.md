# My Notes
#### Some Useful Laravel Tips

---

Table of Contents

* [Artisan](#artisan)
* [Route](#route)
* [View](#view)
* [Form Helper](#form-helper)
* [Request](#request)
* [Validate](#validate)



## Artisan

```php

php artisan list

php artisan serve

php artisan make:model Post -m

php artisan make:migration create_posts_table

php artisan migrate

php artisan make:controller PostsController --resource

php artisan down

```


## Route

```php

route('posts.index')

route('posts.edit', $post->id)

Route::resource('posts','PostController');

Route::get('contact', 'PagesController@getContact');

```

## View

```php

return view('pages.index');

return view('posts.index')->withPosts($posts);

```

## Form Helper

[Visit this link](https://laravelcollective.com/) For more info

```php

{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
      
   {{ Form::label('title', 'Title:') }}
   {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
      
   {{ Form::label('body', 'Post Body:') }}
   {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
      
   {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}
    
 {!! Form::close() !!}
 
```

**Form Model Binding**

```php

{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'data-parsley-validate' => '']) !!}

```

**Add css & Js**

```php

{!! Html::style('css/parsley.css') !!}

{!! Html::script('js/parsley.min.js') !!}



```

## Request

```php

class="{{ Request::is('/') ? 'active' : '' }}"

$request->title;

```

## Validate

```php

// Validate form data
$this->validate($request, array(
    'title' => 'required|max:255',
    'body'  =>  'required'
 ));

```
