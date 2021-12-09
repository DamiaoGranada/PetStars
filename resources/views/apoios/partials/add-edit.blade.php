
<div class="form-group">
    <label for="inputFullname">Nome do Apoio</label>
    <input type="text" class="form-control" name="name" id="inputFullname" value="{{old('name',$user->name)}}" />
</div>

<div class="form-group">
    <label for="inputEmail">Descrição do Apoio</label>
    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="exemplo@gmail.com"
        value="{{old('email',$user->email)}}" />
</div>

<div class="form-group">
   <label for="exampleFormControlFile1">Foto do Apoio</label>
	<input type="file" class="form-control-file" id="exampleFormControlFile1">
</div>


