

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_anuncio" tabindex="-1" aria-labelledby="Modal_Registar_anoLectivo" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="Modal_Registar_anuncio">Registar Anúncio</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/anuncio/registar" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-3">
                        <input type="search" class="form-control form-control-sm @error('titulo') is-invalid @enderror" name="titulo" placeholder="Informe um título para o anúncio"><br>
                    </div>
                    @error('titulo')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br> 

                    <div class="input-group input-group-sm mb-3">
                        <textarea cols="30" rows="5" class="form-control form-control-sm @error('descricao') is-invalid @enderror" name="descricao" placeholder="Informe a descrição"></textarea>
                        {{-- <input type="search" class="form-control form-control-sm @error('descricao') is-invalid @enderror" name="descricao" placeholder="Informe a descrição"><br> --}}
                    </div> 
                    @error('descricao')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>
                    <span class="description">Selecione o tipo de anúncio</span>
                    <div class="input-group input-group-sm mb-3">
                        <select name="tipo" class="form-control form-control-sm">
                            <option value="1"> Publicidade</option>
                            <option value="2"> Anúncio de destinos</option>
                            <option value="3"> Anúncio de estado das aeronaves</option>
                        </select>
                    </div><br> 

                    <div class="input-group-append">
                        <input type="file" id="imagem" name="imagem" style="display: none" class="@error('imagem') is-invalid @enderror" >
                        <label for="imagem" class="btn_file">Carregar uma imagem sobre o anúncio</label>
                    </div><br>
                    @error('imagem')
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
