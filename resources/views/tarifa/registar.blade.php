

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_tarifa" tabindex="-1" aria-labelledby="Modal_Registar_anoLectivo" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="Modal_Registar_tarifa">Registar Tarifa</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/tarifa/registar" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-3">
                        <input type="search" class="form-control form-control-sm @error('nome') is-invalid @enderror" name="nome" placeholder="Informe o nome da tarifa"><br>
                    </div>
                    @error('nome')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <div class="input-group input-group-sm mb-3">
                        <input type="search" class="form-control form-control-sm @error('codigo') is-invalid @enderror" name="codigo" placeholder="Informe o código"><br>
                    </div>
                    @error('codigo')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <span class="description"> Defina as regalias para esta tarifa</span>
                    <div class="input-group input-group-sm mb-3">
                        @isset($regalias)
                            <select name="regalias[]" id="colors"  class="form-control form-control-sm" multiple>
                                @foreach ($regalias as $regalia)
                                    <option value={{$regalia->id}}> {{$regalia->descricao}}</option>
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
