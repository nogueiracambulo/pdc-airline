
<form action="/conteudo/eliminarConteudo/{{$conteudo->id}}" method="GET" enctype="multipart/form-data">
    @csrf
    <!-- Modal -->
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="ModalDelete{{$conteudo->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" >{{ __('Eliminar Conteúdo')}}</h4>
                    <button type="button" class="close fecharX" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                   Tem certeza que deseja eliminar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fecharX" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger  btn_eliminar">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</form>
