
<div class="form-group">
    <label for="inputFullname">Nome do Aniaml</label>
    <input type="text" class="form-control" name="nome_animal" id="inputFullname" value="{{old('nome_animal',$animal->nome_animal)}}" />
</div>

<div class="form-group">
    <label for="inputEmail">Descrição do Animal</label>
    <input type="text" class="form-control" name="descricao_animal" id="inputEmail"
        value="{{old('descricao_animal',$animal->descricao_animal)}}" />
</div>


<div class="form-group">
    <label for="inputEmail">Data Acolhimento</label>
    <input type="text" class="form-control" name="data_acolhimento" id="inputdata_acolhimento"
        value="{{old('data_acolhimento',$animal->data_acolhimento)}}" />
</div>


<div class="form-group">
    <label for="inputidade_animal">Idade</label>
    <input type="text" class="form-control" name="idade_animal" id="inputidade_animal"
        value="{{old('idade_animal',$animal->idade_animal)}}" />
</div>


<select class="form-group" name="especie">
    <label for="inputEmail">Especie do Animal</label>
    <option {{(request()->get('role')=='G')?"selected":""}} value="G">Gatos</option>
    <option {{(request()->get('role')=='C')?"selected":""}} value="C">Cao</option>
        value="{{old('especie',$animal->especie)}}">
</select>

<select class="form-group" name="genero">
    <label for="inputEmail">Genero do Animal</label>
    <option {{(request()->get('role')=='F')?"selected":""}} value="F">Femenino</option>
    <option {{(request()->get('role')=='M')?"selected":""}} value="M">Masculino</option
        value="{{old('genero',$animal->genero)}}">
</select>

<select class="form-group" name="local_animal">
    <label for="inputEmail">Local</label>
    <option {{(request()->get('role')=='L')?"selected":""}} value="L">Leiria</option>
    <option {{(request()->get('role')=='P')?"selected":""}} value="P">Peniche</option
        value="{{old('local_animal',$animal->local_animal)}}">
</select>




<div class="form-group">
   <label for="exampleFormControlFile1">Foto</label>
	<input type="file" class="form-control-file" id="exampleFormControlFile1">
</div>


