
<div class="form-group">
    <label for="inputFullname">Nome</label>
    <input type="text" class="form-control" name="nome_comentario" id="inputFullname" placeholder="Nome " value="{{old('nome_comentario',$contacto->nome_comentario)}}" />
</div>

<div class="form-group">
    <label for="inputFullname">Email</label>
    <input type="email" class="form-control" name="email_comentario" id="inputDescriApoio" placeholder="Email"
        value="{{old('email_comentario',$contacto->email_comentario)}}" />
</div>

<div class="form-group">
   <label for="exampleFormControlFile1">Comentario</label>
   <input type="text" class="form-control" name="mensagem" id="inputFullname" placeholder="Mensagem " value="{{old('mensagem',$contacto->mensagem)}}" />
</div>


