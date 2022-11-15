

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_Garimpo_Chat" tabindex="-1" aria-labelledby="Modal_Registar_DisciplinaLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header " style="background-color: rgb(14, 166, 236);">
                <h5 class="modal-title" id="Modal_Registar_Garimpo_ChatLabel">Registar Garimpo</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/adicionar_garimpo" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-0">
                        <input type="search" class="form-control form-control-sm @error('nome') is-invalid @enderror" name="nome" placeholder="Informe o nome do Chat Garimpo"><br>
                    </div>
                    @error('nome')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <div class="input-group-append">
                        <input type="search" class="form-control form-control-sm @error('sigla') is-invalid @enderror"  name="descricao" placeholder="Informe a Descrição do Chat Garimpo">
                    </div><br>
                    <div class="input-group-append">
                        <input type="search" class="form-control form-control-sm @error('sigla') is-invalid @enderror"  name="preco" placeholder="Informe o preço">
                    </div>
                    @error('sigla')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    

                    

                    {{-- <div class="input-group-append">
                        <input type="file" id="capaDisciplina" name="foto_capa" hidden>
                        <label for="capaDisciplina" class="btn_file">Selecione uma foto de capa para a Disciplina</label>
                    </div><br>--}}
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
