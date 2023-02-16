<form id="formAddSerie" method="post">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome da Série</label>
        <input type="text" class="form-control" id="nome" name="nome">
    </div>
</form>
<button onclick="series.salvarSerie();" class="btn btn-success">Enviar</button>

