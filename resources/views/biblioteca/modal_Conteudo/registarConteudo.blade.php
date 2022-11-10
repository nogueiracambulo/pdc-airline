

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_Conteudo" tabindex="-1" aria-labelledby="Modal_Registar_DisciplinaLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Registar_DisciplinaLabel">Registar Conteudo</h5>
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

                    {{-- @if(isset($disciplina)) --}}
                        @foreach ($disciplina as $disciplina)
                            <div class="input-group-append">
                                <input type="search" class="form-control form-control-sm @error('disciplina') is-invalid @enderror"  name="disciplina" value={{$disciplina->id}} hidden>
                                <input type="search" class="form-control form-control-sm"   placeholder="{{$disciplina->nome}}" disabled> <br><br>
                            </div>
                        @endforeach
                    {{-- @else --}}
                        <span class="description">Selecione a Disciplina associada ao Conteúdo</span><br>
                        <div class="input-group-append">
                            <select class="custom-select mb-3 text-light border-0 bg-orange" name="disciplina" id="disciplina">
                                @foreach ($disciplinas as $disc )
                                    <option class="bg-light" value={{$disc->id}}> {{$disc->nome}} </option>
                                @endforeach
                            </select>
                        </div>
                    {{-- @endif --}}

                    <div class="input-group-append">
                        <input type="file" id="ficheiro" name="ficheiro" >
                        <label for="conteudo" class="btn_file">Carregar o conteúdo</label>
                    </div><br>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light fecharX" data-dismiss="modal">Cancelar</button>
                    <button type="submit"  class="btn btn-light btn_continuar">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</div>
