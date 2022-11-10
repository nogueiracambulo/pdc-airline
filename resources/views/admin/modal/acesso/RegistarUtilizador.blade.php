

 <!-- Modal Registar-->
 <div class=" modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Registar_utilizador" tabindex="-1" aria-labelledby="Modal_Registar_utilizador" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Registar_utilizador">Novo Utilizador</h5>
                <button type="button" class="close fecharX" data-dismiss="modal">
                    <span >&times;</span>
                </button>
            </div>

            <form action="/registar_utilizador" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-0">
                        <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" placeholder="Informe o nome do utilizador"><br>
                    </div>
                    @error('name')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <div class="input-group input-group-sm mb-0">
                        <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" placeholder="Informe o e-mail"><br>
                    </div>
                    @error('email')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <div class="input-group input-group-sm mb-0">
                        <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" placeholder="Informe a palavra passe"><br>
                    </div>
                    @error('password')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>
                    
                    <span class="description"> Selecione a Função deste Utilizador</span>
                    <div class="input-group input-group-sm mb-3">
                        <select name="funcao" class="form-control form-control-sm">
                        @isset($roles)
                            @foreach ($roles as $role)
                                <option value={{$role->id}}> {{$role->nome}} - {{$role->descricao}} </option>
                            @endforeach
                        @endisset
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light fecharX" data-dismiss="modal">Cancelar</button>
                    <button type="submit"  class="btn btn-light btn_continuar">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</div>
