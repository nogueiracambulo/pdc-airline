

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Selecionar_anoLectivo" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Selecionar_anoLectivo">Selecionar ano Lectivo</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/ano_lectivo/selecionar" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    @if(isset($ano_lectivo))
                        <span class="description">Selecione o ano lectivo</span><br>
                        <div class="input-group-append">
                            <select class="custom-select mb-3 text-light border-0 bg-orange" name="ano_id" id="ano_id">
                                @foreach ($ano_lectivo as $ano )
                                    <option class="bg-light" value={{$ano->id}}> {{$ano->descricao}} </option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light fecharX" data-dismiss="modal">Cancelar</button>
                    <button type="submit"  class="btn btn-light btn_continuar">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</div>