@if($thumbnail)
    <img src="{{$thumbnail->temporaryUrl()}}"/>
@endif

<div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" wire:model="name">
    @error('name') <span>{{$message}}</span>@enderror
</div>
<div class="form-group">
    <label for="">Price</label>
    <input type="number" class="form-control" wire:model="price">
    @error('price') <span>{{$message}}</span>@enderror
</div>
<div class="form-group">
    <label for="">Description</label>
    <br>
    <textarea class="form-control" cols="20" rows="6" wire:model="description"></textarea>
    @error('description') <span>{{$message}}</span>@enderror
</div>
<div class="form-group">
    <label for="">Thumbnail</label>
    <input accept="images/*" type="file" class="form-control" wire:model="thumbnail">
    @error('thumbnail') <span>{{$message}}</span>@enderror
</div>
