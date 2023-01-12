

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_voo" tabindex="-1" aria-labelledby="Modal_Registar_anoLectivo" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="Modal_Registar_voo">Registar Voo</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/voo/registar" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-3">
                        <input type="search" class="form-control form-control-sm @error('numero_voo') is-invalid @enderror" name="numero_voo" placeholder="Informe o número do voo"><br>
                    </div>
                    @error('numero_voo')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <span class="description"> Informe a data de partida</span>
                    <div class="input-group input-group-sm mb-3">
                        <input type="date" class="form-control form-control-sm @error('dataPartida') is-invalid @enderror" name="dataPartida" placeholder="Informe a data de partida"><br>
                    </div>
                    @error('dataPartida')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <span class="description"> Informe a hora de partida</span>
                    <div class="input-group input-group-sm mb-3">
                        <input type="time" class="form-control form-control-sm @error('horaPartida') is-invalid @enderror" name="horaPartida" placeholder="Informe a hora de partida"><br>
                    </div>
                    @error('horaPartida')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <span class="description"> Informe a hora do check-in</span>
                    <div class="input-group input-group-sm mb-3">
                        <input type="time" class="form-control form-control-sm @error('horaCheckin') is-invalid @enderror" name="horaCheckin" placeholder="Informe a hora checkin"><br>
                    </div>
                    @error('horaCheckin')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <span class="description"> Informe a hora do Embarque</span>
                    <div class="input-group input-group-sm mb-3">
                        <input type="time" class="form-control form-control-sm @error('horaEmbarque') is-invalid @enderror" name="horaEmbarque" placeholder="Informe a hora do Embarque"><br>
                    </div>
                    @error('horaEmbarque')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <span class="description"> Informe a data de chegada</span>
                    <div class="input-group input-group-sm mb-3">
                        <input type="date" class="form-control form-control-sm @error('dataChegada') is-invalid @enderror" name="dataChegada" placeholder="Informe a data de chegada"><br>
                    </div>
                    @error('dataChegada')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <span class="description"> Informe a hora de chegada</span>
                    <div class="input-group input-group-sm mb-3">
                        <input type="time" class="form-control form-control-sm @error('horaChegada') is-invalid @enderror" name="horaChegada" placeholder="Informe a hora de chegada"><br>
                    </div>
                    @error('horaChegada')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <span class="description"> Defina o percurso para o voo</span>
                    <div class="input-group input-group-sm mb-3">
                        @isset($percursos)
                            <select name="percurso_id" class="form-control form-control-sm">
                                @foreach ($percursos as $percurso)
                                    <option value={{$percurso->id}}> 
                                        @foreach($percurso->aeroportos as $aeroporto)
                                            {{$aeroporto->codigoIATA}} @if(!$loop->last)-@endif
                                        @endforeach
                                    </option>
                                @endforeach
                            </select>
                        @endisset
                    </div>

                    <span class="description"> Selecione a Aeronave que fará o voo</span>
                    <div class="input-group input-group-sm mb-3">
                        @isset($aeronaves)
                            <select name="aeronave_id" class="form-control form-control-sm">
                                @foreach ($aeronaves as $aeronave)
                                    <option value={{$aeronave->id}}> {{$aeronave->matricula}} </option>
                                @endforeach
                            </select>
                        @endisset
                    </div>

                    <span class="description"> Defina as tarifas disponíveis para este voo</span>
                    <div class="input-group input-group-sm mb-3">
                        @isset($tarifas)
                            <select name="tarifas[]" id="colors" class="form-control form-control-sm" multiple>
                                @foreach ($tarifas as $tarifa)
                                    <option value={{$tarifa->id}}> {{$tarifa->codigo}}-{{$tarifa->nome}} </option>
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
