class Series {
    constructor() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }
    verSeries() {
        $.ajax({
            url: '/series',
            type: 'GET',
            success: function (response) {
                $('#content').html(response);
            }
        });
    }
    adicionarSerie() {
        $.ajax({
            url: '/series/criar',
            type: 'GET',
            success: function (response) {
                $('#content').html(response);
            }
        });
    }
    salvarSerie() {
        const dados = $('#formAddSerie').serialize();
        $.ajax({
            url: '/series/salvar',
            type: 'POST',
            data: dados,
            success: function (response) {
                $('#content').html(response);
            }
        });
    }
}

const series = new Series();
