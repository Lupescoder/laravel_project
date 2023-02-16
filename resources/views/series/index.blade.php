<button onclick="series.adicionarSerie();" class="mb-5 btn btn-dark">Adicionar</button>
<ul class="list-group">
    @foreach ($series as $serie)
    <li lass="list-group-item">
        {{$serie->nome}}
    </li>
    @endforeach
</ul>

