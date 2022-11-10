
    <!-- Modal -->
@isset($data)
    <form action="/conteudo/eliminarConteudo/{{$data->id}}" method="GET" enctype="multipart/form-data">
        @csrf
    
        <div class="modal fade" data-backdrop="static" data-keyboard="false"  id="ModalDelete{{$data->id}}"  tabindex="-1" role="dialog" aria-hidden="true">
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

                    <input type="text" value="{{$data->disciplina_id}}" name="disciplina" hidden>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fecharX" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger  btn_eliminar">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    
    </form>
@endisset