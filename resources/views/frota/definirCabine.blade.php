

 <!-- Modal Registar-->
 @isset($aviao->id)
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_cabine"  tabindex="-1" aria-labelledby="Modal_Registar_cabine">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="Modal_Registar_cabine">Definir Cabine</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>
                <form action="/cabine/registar" method="Post" enctype="multipart/form-data">
                    @csrf

                    
                    <div class="modal-body">
                        <span class="description"> informe a tarifa associada a esta cabine</span>
                        <div class="input-group input-group-sm mb-3">
                            @isset($tarifas)
                                <select name="tarifa"  class="form-control form-control-sm">
                                    @foreach ($tarifas as $tarifa)
                                        <option value={{$tarifa->id}}> {{$tarifa->codigo}}-{{$tarifa->nome}} </option>
                                    @endforeach
                                </select>
                            @endisset
                        </div>
                        <span class="description"> informe a capacidade da cabine</span>
                        <div class="input-group input-group-sm mb-3">
                            <input type="number" class="form-control form-control-sm @error('capacidade') is-invalid @enderror" name="capacidade" placeholder="Informe a capacidade desta cabine"><br>
                            @error('capacidade')
                                <span class="description" style="color:red">{{$message}} </span><br>
                            @enderror <br>
                        </div>
                        <span class="description"> Aeronave associada a cabine </span>
                        <div class="input-group input-group-sm mb-3">
                            <select name="aeronave"  class="form-control form-control-sm">
                                @foreach ($aeronaves as $aeronave)
                                    {{-- @if($aeronave->id==$aviao->id) --}}
                                        <option value={{$aeronave->id}}> {{$aeronave->matricula}}</option>
                                    {{-- @endif --}}
                                @endforeach
                            </select>
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
@endisset