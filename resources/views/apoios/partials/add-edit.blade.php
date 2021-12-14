
<div class="form-group">
    <label for="inputFullname">Nome do Apoio</label>
    <input type="text" class="form-control" name="nome_apoio" id="inputFullname" placeholder="Nome do Apoio" value="{{old('nome_apoio',$apoio->nome_apoio)}}" />
</div>

<div class="form-group">
    <label for="inputFullname">Descrição do Apoio</label>
    <input type="text" class="form-control" name="descri_apoio" id="inputDescriApoio" placeholder="Descrição do Apoio"
        value="{{old('descri_apoio',$apoio->descri_apoio)}}" />
</div>

<div class="form-group">
   <label for="exampleFormControlFile1">Foto do Apoio</label>
	<input type="file" class="form-control-file" name="caminho_apoio" id="exampleFormControlFile1" value="{{old('caminho_apoio',$apoio->caminho_apoio)}}">
</div>


