<div class="row mb-3">
    <label for="title" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
        <input type="text" name="title" value="{{old('title') ?? $post->title}}" class="form-control" id="title">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <label for="body" class="col-sm-2 col-form-label">Body</label>
    <div class="col-sm-10">
        <textarea type="text" name="body" class="form-control" id="body" rows="5">
        {{nl2br(old('body') ?? $post->body)}}
        </textarea>
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>
<button type="submit" class="btn btn-primary">{{$submit ?? 'Create'}}</button>