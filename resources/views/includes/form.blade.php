<div class="form-group">
    <label for="title">Titolo</label>
    <input type="title" class="form-control" id="title" name="title" placeholder="Titolo" value="{{$post->title}}" >
</div>
<div class="form-group">
    <label for="image">Immagine</label>
    <input type="url" class="form-control" id="image" name="image" placeholder="Immagine" value="{{$post->image}}">
</div>
<div class="form-group">
    <label for="description">Example textarea</label>
    <textarea class="form-control" id="description" name="description" rows="3">{{$post->description}}</textarea>
</div>
<div class="d-flex justify-content-end align-items-center">
    <button type="submit" class="btn btn-sm btn-success">Pubblica</button>
</div>