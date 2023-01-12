

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_aeroporto" tabindex="-1" aria-labelledby="Modal_Registar_anoLectivo" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="Modal_Registar_aeroporto">Registar Aeroporto</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/aeroporto/registar" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-3">
                        <input type="search" class="form-control form-control-sm @error('cidade') is-invalid @enderror" name="cidade" placeholder="Informe a cidade associada ao aeroporto"><br>
                    </div>
                    @error('cidade')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <div class="input-group input-group-sm mb-3">
                        <input type="search" class="form-control form-control-sm @error('codigoIATA') is-invalid @enderror" name="codigoIATA" placeholder="Informe o código IATA para esta cidade"><br>
                    </div>
                    @error('codigoIATA')
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
