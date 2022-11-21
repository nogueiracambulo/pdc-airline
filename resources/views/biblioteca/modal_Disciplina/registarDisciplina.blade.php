

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_Disciplina" tabindex="-1" aria-labelledby="Modal_Registar_DisciplinaLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info" >
                <h5 class="modal-title" id="Modal_Registar_DisciplinaLabel">Registar Disciplina</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/disciplinas/registo" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-0">
                        <input type="search" class="form-control form-control-sm @error('nome') is-invalid @enderror" name="nome" placeholder="Informe o nome da Disciplina"><br>
                    </div>
                    @error('nome')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <div class="input-group-append">
                        <input type="search" class="form-control form-control-sm @error('sigla') is-invalid @enderror"  name="sigla" placeholder="Informe uma Sigla para a Disciplina">
                    </div>
                    @error('sigla')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <div class="input-group-append">
                        <input type="search" class="form-control form-control-sm @error('Professor') is-invalid @enderror"  name="professor" placeholder="Informe o nome do Professor da Disciplina">
                    </div>
                    @error('Professor')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>


                    <div class="input-group-append">
                        <span class="description"> Turma/Ano academico associado a Disciplina</span>   
                    </div>
                
                    <div class="input-group-append">
                        @isset($ano) 
                            <select class="custom-select mb-3 text-light border-0 bg-info" name="ano" id="ano">
                                <option class="bg-light" value="{{$ano}}">{{$ano}}º ANO</option>
                            </select>
                        @else
                            <select class="custom-select mb-3 text-light border-0 bg-orange" name="ano" id="ano">
                                <option class="bg-light" value="1">1º ANO</option>
                                <option class="bg-light" value="1">2º ANO</option>
                                <option class="bg-light" value="1">3º ANO</option>
                                <option class="bg-light" value="1">4º ANO</option>
                                <option class="bg-light" value="1">5º ANO</option>
                                <option class="bg-light" value="1">6º ANO</option>
                            </select>
                        @endisset
                    </div>
                    
                    <span> Semestre do ano </span>
                    <div class="input-group-append">

                        <label for="tipoConteudo">
                            <input type="radio" name="semestre" value="1" checked/> Primeiro
                            <input type="radio" name="semestre" value="2"/> Segundo
                        </label>
                    </div>

                    {{-- <div class="input-group-append">
                        <input type="file" id="capaDisciplina" name="foto_capa" hidden>
                        <label for="capaDisciplina" class="btn_file">Selecione uma foto de capa para a Disciplina</label>
                    </div><br> --}}
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light fecharX" data-dismiss="modal">Cancelar</button>
                    <button type="submit" data-toggle="modal" data-target="#ModalSucesso" class="btn btn-light btn_continuar">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</div>
