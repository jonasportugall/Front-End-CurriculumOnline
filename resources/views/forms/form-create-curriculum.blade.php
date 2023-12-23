@extends('layouts.main');

@title('title','curricumum form');

@section('content');




<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Option 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Option 2</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid mt-5">
    <div class="row">
        <nav class="col-md-3 d-none d-md-block bg-dark">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light" href="#" onclick="toggleElement('Painel-de-controle')">Painel de controle</a>
                      
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleElement('submenu-curriculum')">Curriculum</a>
                        <div class="" id="submenu-curriculum">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="toggleElement('curriculum-form')">Novo curriculum</a>    
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="toggleElement('form-curriculum')">Listar Todos os Curriculos</a>    
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="toggleElement('form-curriculum')">Buscar um curriculum</a>    
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleElement('submenu-carta')">
                            Carta de Apresentacao
                        </a>
                        <div class="" id="submenu-carta">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="toggleElement('cartaApresentacao-form')">Nova Carta</a>    
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="toggleElement('submenu')">Listar Todos as cartas</a>    
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="toggleElement('submenu')">Buscar uma Carta</a>    
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleElement('Outro ')">Outro Docmento</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleElement('Vagas de emprego relacionados')">Vagas de emprego relacionados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleElement('Vagas de empregos nao relacionados')">Vagas de empregos nao relacionados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleElement('outras configuracoes')">outras configuracoes</a>
                    </li>
 
                </ul>
            </div>
        </nav>


        <div class="" id="contentOption"></div>

        <div class="main-content w-10">

            <div class="ml-5" id="curriculum-form">
                
                <form action="/storee" method="POST">
                    @csrf

                    <div class="section">
                        <h2>Dados pessoais<button type="button" onclick="toggleElement('dados-pessoais')">+</button></h2>
                        <div class="sub-form" id="dados-pessoais">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputName4">Nome</label>
                                  <input type="text" name="name" class="form-control" id="inputName4" placeholder="Nome completo">
                                   
                                    @error('name')
                                       <p>{{ $message }}</p>
                                    @enderror

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputState">Genero</label>
                                    <select id="inputState" name="gender" class="form-control">
                                      <option selected>Genero</option>
                                      <option>Masculino</option>
                                      <option>Femenino</option>
                                    </select>
                                  </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputName4">Data nascimento</label>
                                    <input type="date" name="date_of_birth"class="form-control" id="inputEmail4" placeholder="Data nascimento">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputName4">BI</label>
                                    <input type="inputName4" name ="bi"class="form-control" id="" placeholder="Bilhete de identidade">
                                </div>

                            </div>
                            
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputName4">Telefone</label>
                                    <input type="text" name="telephone" class="form-control" id="inputEmail4" placeholder="Telefone">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputName4">Endereco</label>
                                    <input type="inputName4" name="address" class="form-control" id="" placeholder="Endereco">
                                </div>

                            </div>

    
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputCity">Nacionalidade</label>
                                  <select id="inputCity" name="nacionality" class="form-control">
                                    <option selected>pais</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="inputState">Provincia</label>
                          
                                  <select id="provinceSelect" name="province" class="form-control">
                                        <option selected>provincia</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-2">
                                  <label for="inputZip">Municipio</label>
                                  <select id="countySelect" name="county" class="form-control">
                                        <option selected>municipio</option>
                                  </select>
                                </div>

                                    
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="section">
                        <h2>Linguas <button type="button" onclick="toggleElement('linguas')">+</button></h2>
                        <div class="sub-form" id="linguas">
                              <div class="form-group">
                                <label for="exampleFormControlSelect2" class="w-12">Selecione a(s) lingua(s).Pressione a tecla control para selecionar varias linguas</label>
                                <select multiple class="form-control" name="languages" id="exampleFormControlSelect2">
                                    <option>Portugues</option>
                                    <option>Ingles</option>
                                    <option>Espanhol</option>
                                    <option>Frances</option>
                                    <option>Lingala</option>
                                    <option>Portugues</option>
                                    <option>Ingles</option>
                                    <option>Espanhol</option>
                                    <option>Frances</option>
                                    <option>Lingala</option>
                                </select>
                              </div>
                        </div>
                    </div>

                    <div class="section">
                        <h2>Formações(Escolar)<button type="button" onclick="toggleElement('formacoes')">+</button></h2>
                        <div class="sub-form" name="formations" id="formacoes">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputName4">Course(Opcional)</label>
                                    <input type="text" name="course" class="form-control" id="inputEmail4" placeholder="Nome do curso">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputName4">Nome da Instituicao(Opcionl)</label>
                                    <input type="inputName4" name="instituition" class="form-control" id="" placeholder="Endereco">
                                </div>
                            </div>

                            <div class="form-row">
                                
                                <div class="form-group col-md-4">
                                    <label for="level">Nivel</label>
                                    <select id="level" name="level" class="form-control">
                                      <option selected>Nivel</option>
                                      <option>Nao tem</option>
                                      <option>Ensino primario</option>
                                      <option>Ensino secundario</option>
                                      <option>Ensino medio concluido</option>
                                      <option>Licenciado</option>
                                      <option>Bacharel</option>
                                      <option>10ª</option>
                                      <option>11ª</option>
                                      <option>12ª</option>
                                      <option>13ª</option>
                                     
                                    </select>
                                </div>
                                  
                                <div class="form-group col-md-4">
                                    <label for="date">Ano de Inicio</label>
                                    <input type="date" name="start-date" id="start-date">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputZip">Ano termino</label>
                                    <input type="date" name="end-date" id="start-date">
                                </div>
                            
                            </div>
                        </div>
                    </div>


                    <div class="section">
                        <h2>Cursos <button type="button" onclick="toggleElement('cursos')">+</button></h2>
                        <div class="sub-form" id="cursos">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputName4">Nome</label>
                                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Nome do curso">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputName4">Nome da Instituicao</label>
                                    <input type="inputName4" name="instituition" class="form-control" id="" placeholder="Instituicao">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputName4">Tempo de duracao</label>
                                    <input type="inputName4" name="duration" class="form-control" id="" placeholder="Tempo de duracao">
                                </div>
                            </div>
                        </div>
                    </div>
                                        
                    <div class="section">
                        <h2>Tecnologias <button type="button" onclick="toggleElement('tecnologias')">+</button></h2>
                        <div class="sub-form" id="tecnologias">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2" class="w-12">Selecione a(s) tecnologias(s).   Pressione a tecla control para selecionar varias linguas</label>
                                <select multiple class="form-control" name="tecnologies" id="exampleFormControlSelect2">
                                    <option>PHP</option>
                                    <option>Laravel</option>
                                    <option>JavaScript</option>
                                    <option>Node</option>
                                    <option>Angular</option>
                                    <option>Python</option>
                                    <option>Django</option>
                                    <option>React</option>
                                    <option>React Native</option>
                                    <option>Flutter</option>
                                </select>
                              </div>
                            
                        </div>
                    </div>

                    
                    <div class="section">
                        <h2>Experiencias<button type="button" onclick="toggleElement('experiencias')">+</button></h2>
                        <div class="sub-form" id="experiencias">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputName4">Cargo</label>
                                    <input type="text" name="office" class="form-control" id="inputEmail4" placeholder="cargo">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputName4">Nome da empresa</label>
                                    <input type="inputName4" name="company" class="form-control" id="" placeholder="Instituicao">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputName4">Data de inicio</label>
                                    <input type="date" name="start-date" class="form-control" id="" placeholder="Instituicao">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputName4">Data de fim</label>
                                    <input type="date" name="end-date" class="form-control" id="" placeholder="Instituicao">
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Example textarea</label>
                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                    
                            </div>
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                </form>

            </div>

            <div class="cartaApresentacao-form" id="cartaApresentacao-form">
                
                <form action="/seu-endpoint-de-validacao" method="POST">
                    @csrf

                    <div class="section">
                        <h2>Dados Pessoais <button type="button" onclick="toggleElement('dados-carta')">+</button></h2>
                        <div class="sub-form" id="dados-carta">
                            <!-- Campos para dados pessoais -->
                            Nome: <input type="text" name="nome"><br>
                            Email: <input type="email" name="email"><br>
                            <!-- Adicione mais campos conforme necessário -->
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                </form>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="js/script.js"></script>

@endsection