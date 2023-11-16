<h3>Fornecedor</h3>

@php
    /*
    if() { //executa se o retorno for true 

    } elseif() {

    } else{
        
    }
    */
@endphp


{{-- @unless executa se o retorno for false--}}

{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) >10)
    <h3>Existem varios fornecedores cadastrados</h3>
@else 
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}


@isset($fornecedores)

   @forelse ($fornecedores as $indice => $fornecedor )
        Interação atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ:  {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if($loop->first)
            Primeira interação do Loop
        @endif
        @if($loop->last)
            Ultima interação do Loop

            <br>
            Total de registros: {{ $loop->count }}
        @endif
        
        <hr>
    @empty 
        Não existem fornecedores cadastrados!
   @endforelse
     
@endisset