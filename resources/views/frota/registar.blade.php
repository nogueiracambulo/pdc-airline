

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_aviao" tabindex="-1" aria-labelledby="Modal_Registar_anoLectivo" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="Modal_Registar_aviao">Registar Avião(Aeronave)</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/frota/registar" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-3">
                        <input type="search" class="form-control form-control-sm @error('nome') is-invalid @enderror" name="nome" placeholder="Informe o nome do Avião"><br>
                    </div>
                    @error('nome')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <div class="input-group input-group-sm mb-3">
                        <input type="search" class="form-control form-control-sm @error('matricula') is-invalid @enderror" name="matricula" placeholder="Informe a matrícula"><br>
                    </div>
                    @error('matricula')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <span class="description"> Defina a marca do avião</span>
                    <div class="input-group input-group-sm mb-3">
                        <select name="marca" class="form-control form-control-sm">
                            <option value="Boeng"> Boeng </option>
                            <option value="Airbus"> Airbus </option>
                            <option value="Dash"> Dash </option>
                        </select>
                    </div><br>

                    <div class="input-group input-group-sm mb-3">
                        <input type="search" class="form-control form-control-sm @error('modelo') is-invalid @enderror" name="modelo" placeholder="Informe o modelo"><br>
                    </div>
                    @error('modelo')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <span class="description"> Definição da cabine <hr></span>
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
                    </div>
                    @error('capacidade')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <div class="input-group-append">
                        <input type="file" id="foto" name="foto" style="display: none" class="@error('foto') is-invalid @enderror" >
                        <label for="foto" class="btn_file">Carregar imagem do avião</label>
                    </div><br>
                    @error('foto')
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
