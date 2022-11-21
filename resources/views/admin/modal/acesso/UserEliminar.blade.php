
    <!-- Modal -->
@isset($user)
    <div class="modal fade" data-backdrop="static" data-keyboard="false"  id="Modal_eliminar_user"  tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" >{{ __('Eliminar conta de utilizador')}}</h4>
                    <button type="button" class="close fecharX" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/user/eliminar/{{$user->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        Tem certeza que deseja eliminar?                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary fecharX" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger  btn_eliminar">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endisset