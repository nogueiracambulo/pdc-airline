

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_turma" tabindex="-1" aria-labelledby="Modal_Registar_anoLectivo" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="Modal_Registar_turma">Nova Turma</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/turmas/registo" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-3">
                        <select name="descricao" class="form-control form-control-sm">
                            <option value=""> Selecione o nome da turma</option>
                            <option value="1º ANO"> 1º ANO</option>
                            <option value="2º ANO"> 2º ANO</option>
                            <option value="3º ANO"> 3º ANO</option>
                            <option value="4º ANO"> 4º ANO</option>
                            <option value="5º ANO"> 5º ANO</option>
                            <option value="6º ANO"> 6º ANO</option>
                        </select>
                        {{-- <input type="search" class="form-control form-control-sm @error('descricao') is-invalid @enderror" name="descricao" placeholder="Descrição da turma"><br> --}}
                    </div>
                    {{-- @error('descricao')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> --}}

                    <div class="input-group input-group-sm mb-0">  
                        @isset($ano_lectivo)                  
                            <input type="search" class="form-control form-control-sm @error('anoLectivo') is-invalid @enderror"  name="anoLectivo" value={{$ano_lectivo->id}} hidden>
                            <input type="search" class="form-control form-control-sm"   placeholder="{{ $ano_lectivo->descricao }}" disabled> <br><br>
                        @endisset
                    </div>

                    <div class="input-group input-group-sm mb-0">                    
                        <input type="search" class="form-control form-control-sm @error('criador') is-invalid @enderror"  name="criador" value={{Auth::user()->id}} hidden>
                        <input type="search" class="form-control form-control-sm"   placeholder={{Auth::user()->name}} disabled> <br><br>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light fecharX" data-dismiss="modal">Cancelar</button>
                    <button type="submit"  class="btn btn-light btn_continuar">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</div>
