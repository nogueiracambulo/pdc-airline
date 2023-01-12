

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_percurso" tabindex="-1" aria-labelledby="Modal_Registar_anoLectivo" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="Modal_Registar_percurso">Registar Percurso</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/percurso/registar" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <span class="description"> Defina o percurso, selecionando os aeroportos em ordem crescente</span>
                    <div class="input-group input-group-sm mb-3">
                        @isset($aeroportos)
                            <select name="aeroportos[]" id="colors"  class="form-control form-control-sm" multiple>
                                @foreach ($aeroportos as $aeroporto)
                                    <option value={{$aeroporto->id}}> {{$aeroporto->cidade}} - {{$aeroporto->codigoIATA}} </option>
                                @endforeach
                            </select>
                        @endisset
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light fecharX" data-dismiss="modal">Cancelar</button>
                    <button type="submit"  class="btn btn-light btn_continuar">Registar</button>
                </div>
            </form>
        </div>
    </div>
</div>
