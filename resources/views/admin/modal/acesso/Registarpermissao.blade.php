

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_permissao" tabindex="-1" aria-labelledby="Modal_Registar_permissao" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Registar_permissao">Nova Permissão</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/registar_permissao" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-0">
                        <input type="search" class="form-control form-control-sm @error('descricao') is-invalid @enderror" name="descricao" placeholder="Descrição do Ano Lectivo"><br>
                    </div>
                    @error('descricao')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <div class="input-group-append">
                        <input type="date" class="form-control form-control-sm @error('data_inicio') is-invalid @enderror"  name="data_inicio" placeholder="Informe a data de início">
                    </div>
                    @error('data_inicio')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <div class="input-group-append">
                        <input type="date" class="form-control form-control-sm @error('data_termino') is-invalid @enderror"  name="data_termino" placeholder="Informe a data de término">
                    </div>
                    @error('data_termino')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light fecharX" data-dismiss="modal">Cancelar</button>
                    <button type="submit"  class="btn btn-light btn_continuar">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</div>
