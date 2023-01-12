

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_regalia" tabindex="-1" aria-labelledby="Modal_Registar_anoLectivo" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="Modal_Registar_regalia">Registar Regalia</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/regalia/registar" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-3">
                        <input type="search" class="form-control form-control-sm @error('descricao') is-invalid @enderror" name="descricao" placeholder="Informe uma descrição para a regalia"><br>
                    </div>
                    @error('descricao')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light fecharX" data-dismiss="modal">Cancelar</button>
                    <button type="submit"  class="btn btn-light btn_continuar">Registar</button>
                </div>
            </form>
        </div>
    </div>
</div>
