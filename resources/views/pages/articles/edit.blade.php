@extends('theme.master')

@section('page-header')
    <link href="/css/pages/article-style.css" rel="stylesheet">
    <link href="/css/pages/article-large-style.css" rel="stylesheet">

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=zys0yf760xr9gjmcreu1cvsoko9mje67of20stvs3tk7bhau"></script>
@endsection

@section('content')
    <form id="edit" name="edit" method="POST" action="/articles/1">
        {{ csrf_field() }}
        <input type="hidden" id="_method" name="_method" value="PUT" hidden="hidden"/>
        <label class="switch isPublished">
            <input type="checkbox" id="is_published" name="is_published"/>
            <span class="slider round"></span>
        </label>
        <label class="featuredLabel" for="is_featured">Featured: </label>
        <label class="switch isFeatured">
            <input type="checkbox" id="is_featured" name="is_featured"/>
            <span class="slider round"></span>
        </label>
        <label for="slug" class="slugLabel">Slug:</label>
        <input type="text" id="slug" name="slug" placeholder="e.g. garage-build-episode-1"/>
        <label for="image" class="imageLabel">Image:</label>
        <input type="text" id="image" name="image"/>
        <label for="title" class="titleLabel">Title:</label>
        <input type="text" id="title" name="title" placeholder="e.g. My New Article"/>
        <textarea id="body" name="body" placeholder="Body"></textarea>
        <label for="tags" class="tagsLabel">Tags:</label>
        <input type="text" id="tags" name="tags" placeholder="e.g. caferacer, CB750" />
        <div class="buttons">
            <input type="submit" id="submit" name="submit" value="SAVE"/>
            <input type="button" id="cancel" name="cancel" value="CANCEL"/>
        </div>
    </form>
    <script type="text/javascript">
      tinymce.init(
        {
          selector: '#body',
          menubar: false,
          plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code help wordcount'
          ],
          toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
          content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
          ],
          height: 500
        }
      )
    </script>
@endsection