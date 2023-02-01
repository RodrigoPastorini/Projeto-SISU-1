
<style>
    @include('layouts.css.cards');
</style>

{{-- <div class="col-10 mb-3">
    <div class="card reprovado">
        <div class="card-body">
            <h5 class="card-title mb-3">Universidade Federal de Minas Gerais</h5>
           <h6 class="card-subtitle mb-2 text-muted">Nota de Corte 2022: 817.22</h6> 

            <div class="quadro_resultado">
                <div class="notas_corte col-6">
                    <h6 class="card-subtitle mb-2">Notas de Corte</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">2022: 817.22</li>
                        <li class="list-group-item">2023: 817.22</li>
                    </ul>
                </div>

                <div class="col-6">
                    <p class="text-muted chances">
                        <i class="fas fa-long-arrow-alt-down"></i>
                        Chances Baixas de Aprovação
                        <i class="fas fa-frown"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@if(isset($simulacoes_positivas , $simulacoes_negativas))
@foreach($simulacoes_negativas as $simulacao_negativa)
<div class="col-10 mb-3">
    <div class="card reprovado">
        <div class="card-body">
            <h5 class="card-title">{{$simulacao_negativa->sigla}}-{{$simulacao_negativa->nome}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Nota de Corte 2022: {{$simulacao_positiva->getsisu_anterior()}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">Nota de Corte 2023: {{$simulacao_positiva->nota}}</h6>
            <p class="text-muted chances">
                <i class="fas fa-long-arrow-alt-down"></i>
                Chances Baixas
                <i class="fas fa-frown"></i>
            </p>
        </div>
    </div>
</div>
@endforeach
@foreach($simulacoes_positivas as $simulacao_positiva)
<div class="col-10 mb-3">
    <div class="card aprovado">
        <div class="card-body">
            <h5 class="card-title">{{$simulacao_positiva->getfaculdadeEstado()}}-{{$simulacao_positiva->getfaculdadeNome()}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Nota de Corte 2022: {{$simulacao_positiva->getsisu_anterior()}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">Nota de Corte 2023: {{$simulacao_positiva->nota}}</h6>
            <p class="text-muted chances">
                <i class="fas fa-long-arrow-alt-up"></i>
                Chances Altas
                <i class="fas fa-laugh-beam"></i>
            </p>
        </div>
    </div>
</div>
@endforeach
@endif
{{-- fas fa-laugh-beam --}}