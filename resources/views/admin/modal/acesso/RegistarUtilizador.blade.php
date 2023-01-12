

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
                    <span class="description">Informe o nome do utilizador</span>
                    <div class="input-group input-group-sm mb-0">
                        <input type="text" class="form-control form-control-sm @error('nome') is-invalid @enderror" name="nome" placeholder="Informe o nome do utilizador"><br>
                    </div>
                    @error('nome')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>
                    
                    <span class="description">Informe o sobrenome do utilizador</span>
                    <div class="input-group input-group-sm mb-0">
                        <input type="text" class="form-control form-control-sm @error('apelido') is-invalid @enderror" name="apelido" placeholder="Informe o sobrenome do utilizador"><br>
                    </div>
                    @error('apelido')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <span class="description"> Informe a data de nascimento</span>
                    <div class="input-group input-group-sm mb-0">
                        <input type="date" class="form-control form-control-sm @error('dataNascimento') is-invalid @enderror" name="dataNascimento" placeholder="Informe a data de nascimento"><br>
                    </div>
                    @error('dataNascimento')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <span class="description"> Informe o Género</span>
                    <div class="input-group input-group-sm mb-3">
                        <input type="checkbox" name="genero" value="masculino" active> Masculino  &nbsp;
                        <input type="checkbox" name="genero"value="femenino"> Femenino
                    </div>

                    <div class="input-group input-group-sm mb-0">
                        <input type="telefone" class="form-control form-control-sm @error('telefone') is-invalid @enderror" name="telefone" placeholder="Informe o telefone"><br>
                    </div>
                    @error('telefone')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <div class="input-group input-group-sm mb-0">
                        <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" placeholder="Informe o e-mail"><br>
                    </div>
                    @error('email')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>

                    <span class="description"> Escolha uma palavra-passe</span>
                    <div class="input-group input-group-sm mb-0">
                        <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" placeholder="Informe a palavra passe"><br>
                    </div>
                    @error('password')
                       <span class="description" style="color:red">{{$message}} </span><br>
                    @enderror <br>
                    
                    <span class="description"> Informe a morada do membro</span>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group input-group-sm mb-0">
                            <input type="text" class="form-control form-control-sm @error('cidade') is-invalid @enderror" name="cidade" placeholder="Informe a cidade"><br>
                       
                            <input type="text" class="form-control form-control-sm @error('pais') is-invalid @enderror" name="pais" placeholder="Informe o pais"><br>
                        </div>
                        @error('pais')
                           <span class="description" style="color:red">{{$message}} </span><br>
                        @enderror <br>
                        @error('cidade')
                            <span class="description" style="color:red">{{$message}} </span><br>
                         @enderror 
                    </div>
                                        
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
