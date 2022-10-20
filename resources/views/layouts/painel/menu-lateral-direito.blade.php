  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <!-- ÁREA DE APRESENTAÇÃO DA SÍNTESE DE CONTEÚDOS RECENTEMENTE REGISTADOS  -->
      <div class="container-fluid">
          <span class="badge badge-warning ">Conteúdos mais recentes</span> <br><br>
          <div class="recent-post-widget">
                {{-- BARRA DE PESQUISA DE CONTEÚDOS PELO TEMA(TÍTULO) --}}
                <div class="form-inline">
                    <div class="input-group" data-widget="">
                        <input class="form-control form-control-sidebar" name="proc_conteudo" type="search" placeholder="Pesquisar conteúdo"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @isset($conteudos)
                    @foreach ($conteudos as $conteudo)
                    <br><div class="rp-item">
                      <div class="rp-thumb ">
                          <iframe scrolling="no" width="100%" src="/conteudos/{{ $conteudo->conteudo }}"
                              frameborder="0">
                          </iframe>
                      </div>
                      <div class="rp-content">
                          <a href="{{ url('/conteudo/visualizar', $conteudo->id) }}">
                              <h6>{{ $conteudo->titulo }}-{{ $conteudo->descricao }}</h6>
                              <p><i class="fas fa-clock"></i> {{ $conteudo->created_at }}</p>
                          </a>
                          <hr>
                      </div>
                  </div>
              @endforeach
            @endisset
          </div>
      </div>
      <!-- Control sidebar content goes here -->
  </aside>
