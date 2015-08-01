<div class="form-group">
  <label for="title">Title</label>
  {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
  <label for="content">Content</label>
  {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
  <label for="category">Category</label>
  {!! Form::select('category_id', App\Category::lists('title', 'id'), null, ['class'=>'form-control']) !!}
</div>
