@extends('layouts.appPainel')

@section('breadcrumb')
    <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Edite seu anúncio!</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/servicos') }}">Serviços</a></li>
                    <li class="breadcrumb-item active">Editar Anúncio</li>
                </ol>
            </div>
    </div>

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-15">
            <div class="card">
                <div class="card-body">
                    <form class="form p-t-20" action="/servicos" method="post">
                        {{-- METODO PARA MANDAR AO SERVIDOR --}}
                        @csrf
                        @method('put')
                        <div class="form-group-row">
                            {{-- NOME SERVICO --}}
                            <div class="col-sm-6">
                                    <label for="nome">Nome do Serviço</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-home"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control @error('nome') is-invalid @enderror " id="nome" name="nome" value="{{ $servico->nome }}" placeholder="Av, Rua...">
                                        @error('nome')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                            </div>
                            {{-- DESCRICAO SERVICO  --}}
                            <div class="col-sm-6">
                                <label for="descricao">Descrição do Serviço</label>
                                <!-- Ícone do bonequinho. trocar por <i class="far fa-comment-alt"></i>     daqui:  https://fontawesome.com/icons/comment-alt?style=regular -->
                                <!-- <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="far fa-comment-alt"></i>                                
                                    </span>
                                </div> -->
                                <input type="text" class="form-control @error('descricao') is-invalid @enderror " id="descricao" name="descricao" value="{{ $servico->descricao }}" placeholder="Descrição">
                                @error('descricao')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            {{-- CEP --}}
                            <div class="col-sm-7">
                                <label for="CEP">CEP</label>
                                <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-search"></i></div>
                                </div>
                                <input type="text" class="form-control" id="CEP" maxlength="9" value="{{ $servico->CEP }}" />
                                </div>
                            </div>
                            {{-- ENDERECO SERVICO --}}
                            <div class="col-sm-6">
                                <label for="endereco">Endereço</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-home"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control @error('endereco') is-invalid @enderror " id="endereco" name="endereco" value="{{ $servico->endereco }}"  placeholder="Av, Rua..." readonly>
                                    @error('endereco')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- NUMERO --}}
                            <div class="col-sm-2">
                                <label for="numero">N°</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-home"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="numero" name="numero" value="{{ $servico->numero }}" placeholder="N°">
                                </div>
                            </div>
                            {{-- COMPLEMENTO --}}
                            <div class="col-sm-4">
                                <label for="complemento">Complemento</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-home"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="complemento" name="complemento" value="{{ $servico->complemento }}" placeholder="Ap, BL, Cj...">
                                </div>
                            </div>
                        </div>
                        {{-- BAIRRO --}}
                        <div class="col-4">
                            <label for="bairro">Bairro</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-home"></i></div>
                                </div>
                                <input type="text" class="form-control" name="bairro" id="bairro" value="{{ $servico->bairro }}" readonly />
                            </div>
                        </div>
                        {{-- CIDADE --}}
                        <div class="col-4">
                            <label for="cidade">Cidade</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-map-signs"></i></div>
                                </div>
                                <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $servico->cidade }}" readonly />
                            </div>
                        </div>
                        <div class="form-group row">
                            {{-- DATA --}}
                            <div class="col-sm-4">
                                    <label for="data">Data:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-email"></i>
                                            </span>
                                        </div>
                                        <input type="date" class="form-control @error('data') is-invalid @enderror " id="data" name="data" value="{{ $servico->horaInicial->format('Y-m-d') }}" placeholder="Horário de início:">
                                        @error('data')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            {{-- HORARIO INICIO --}}
                            <div class="col-sm-4">
                                <label for="horaInicial">Horário de início:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-email"></i>
                                        </span>
                                    </div>
                                    <input type="time"  class="form-control @error('horaInicial') is-invalid @enderror " id="horaInicial" name="horaInicial" value="{{ $servico->horaInicial->format('H:i') }}" placeholder="Horário de início:">
                                    @error('horaInicial')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                {{-- HORARIO FINAL --}}
                                <label for="horaFinal">Horário de término:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-email"></i>
                                        </span>
                                    </div>
                                    <input type="time"  class="form-control @error('horaFinal') is-invalid @enderror" id="horaFinal" name="horaFinal" value="{{ $servico->horaFinal->format('H:i') }}" placeholder="Horário de término:">
                                    @error('horaFinal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- INPUT ID_USUARIO --}}
                            <input type="hidden" name="id_dono" id="id_dono" value="{{ Auth::user()->id }}">
                    
                        <div class="form-group">
                            <button type="submit" name="anunciar" class="btn btn-success waves-effect waves-light m-r-10">Atualizar</button>
                            <button type="reset" name="cancelar" class="btn btn-inverse waves-effect waves-light m-r-10">Cancelar</button>
                        </div>
                    </form>
                    <form action="/servicos/{{ $servico->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger waves-effect waves-light">Remover</button>    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('js/cep.js')}}"></script>
@endsection






