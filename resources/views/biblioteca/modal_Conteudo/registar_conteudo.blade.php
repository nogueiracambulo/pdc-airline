

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_Conteudo" tabindex="-1" aria-labelledby="Modal_Registar_Conteudo" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="Modal_Registar_Conteudo">Registar Conteúdo</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/conteudos/registo" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-0">
                        <input type="search" class="form-control form-control-sm @error('titulo') is-invalid @enderror" name="titulo" placeholder="Título do conteúdo"><br>
                    </div>
                    @error('titulo')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <div class="input-group-append">
                        <input type="search" class="form-control form-control-sm @error('descricao') is-invalid @enderror"  name="descricao" placeholder="Informe uma descrição para o conteúdo">
                    </div>
                    @error('descricao')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    @isset($disciplina)
                        {{-- @foreach ($disciplina as $disciplina) --}}
                        <div class="input-group-append">
                            <input type="search" class="form-control form-control-sm @error('disciplina') is-invalid @enderror"  name="disciplina" value="{{$disciplina->id}}" hidden>
                            <input type="search" class="form-control form-control-sm"   placeholder="{{$disciplina->nome}}" disabled> <br><br>
                        </div>
                        @error('disciplina')
                        <span class="description" style="color:red">{{$message}} </span><br>
                        @enderror <br>
                        
                        <div class="input-group-append">
                            <input type="search" class="form-control form-control-sm @error('turma') is-invalid @enderror"  name="turma" value="{{$disciplina->turma_id}}" hidden>
                        </div>
                        {{-- @endforeach --}}
                    @endisset   
                    <div class="input-group-append">
                        <input type="file" id="ficheiro" name="ficheiro" style="display: none" >
                        <label for="ficheiro" class="btn_file">Carregar o conteúdo</label>
                    </div><br>
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
