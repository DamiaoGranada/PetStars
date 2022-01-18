<div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="name" id="inputName" value="{{old('name',$category->name)}}" />
</div>
<div class="form-group">
 <label for="inputDescription">Description</label>
 <textarea class="form-control" name="description" id="inputDescription">{{old('description',$category->description)}}</textarea>
</div>
