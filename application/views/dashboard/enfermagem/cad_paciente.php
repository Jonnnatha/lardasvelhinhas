
<body>

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


<?php $this->load->view('Lista/coluna'); ?>

        <main class="content">

    <?php $this->load->view('Lista/lateralenf'); ?>

<div class="py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastro de idoso</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Formulario cadastro de idoso</h1>
            <p class="mb-0">Centro Feminino de Longa Permanência</p>
        </div>

    </div>
</div>
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card card-body shadow-sm mb-4">
                        <h2 class="h5 mb-4">1.DADOS DE IDENTIFICAÇÃO DO IDOSO</h2>
                        <form method="post" action="cadidoso">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div>
                                        <label for="first_name">Nome do idoso:</label>
                                        <input class="form-control" id="first_name" name ="nome" type="text" placeholder="" >
                                    </div>
                                </div>

                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-3">
                                    <label for="birthday">Data de Nascimento:</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                        <input data-datepicker="" class="form-control" name ="data" id="birthday" type="text" placeholder="Dia/Mês/Ano" >
                                     </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="gender">Genero:</label>
                                    <select  name ="genero" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                        <option selected>Genero</option>
                                        <option value="Feminino">Feminino</option>
                                        <option value="Masculino">Masculino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                  <label for="gender">Vista de documento:</label>
                                  <select name ="documento" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                      <option selected></option>
                                      <option value="Sim">Sim</option>
                                      <option value="Não">Não</option>
                                  </select>
                              </div>
                              <div class="col-md-6 mb-3">
                                  <div>
                                      <label for="first_name">Idade: "Sem documento (idade aparente)"</label>
                                      <input name ="idade" class="form-control" id="first_name" type="number" placeholder="" >
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Carteira de Identidade - RG:</label>
                                        <input name ="rg" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">CPF:</label>
                                        <input name ="cpf" class="form-control" id="first_name" type="text" onkeypress="$(this).mask('000.000.000-00')">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                  <div>
                                      <label for="first_name">Tipo de Benefício:</label>
                                      <select name ="beneficio" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Aposentadoria">Aposentadoria</option>
                                          <option value="Pensão">Pensão</option>
                                            <option value="Benefício de Prestação Continuada">Benefício de Prestação Continuada</option>
                                      </select>
                                  </div>
                              </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Município de nascimento:</label>
                                        <input name ="munnasc" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                            </div>
                              <h2 class="h5 my-4">1.1 Último endereço do idoso(a):</h2>
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <div>
                                        <label for="first_name">
                                            Rua:
                                        </label>
                                        <input name ="rua" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <div>
                                        <label for="first_name">N°:
                                        </label>
                                        <input name ="numrua" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <div>
                                        <label for="first_name">Comp.:
                                        </label>
                                        <input name ="comp" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <label for="first_name">
                                            Bairro:
                                        </label>
                                        <input name ="bairro" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <label for="first_name">Cidade:
                                        </label>
                                        <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <div>
                                      <label for="first_name">CEP:
                                      </label>
                                      <input name ="cep" class="form-control" id="first_name" type="text" onkeypress="$(this).mask('00.000-000')">
                                  </div>
                              </div>
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <label for="first_name">Telefone:
                                        </label>
                                        <input name ="telefone" class="form-control" id="first_name" type="text" onkeypress="$(this).mask('(00) 0000-00009')">
                                    </div>
                                </div>
                            </div>
                            <h2 class="h5 mb-4">2.DADOS DE IDENTIFICAÇÃO DO SEU RESPONSÁVEL</h2>

                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="address">Nome do Responsável:</label>
                                        <input name ="resp" class="form-control" id="address" type="text" placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="city">Carteira de Identidade - RG:</label>
                                        <input name ="rgresp" class="form-control" id="city" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="zip">CPF:</label>
                                        <input name ="cpfresp" class="form-control" id="first_name" type="text" onkeypress="$(this).mask('000.000.000-00')">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <div>
                                        <label for="first_name">
                                            Rua:
                                        </label>
                                        <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <div>
                                        <label for="first_name">N°:
                                        </label>
                                        <input name ="nruaresp"class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <div>
                                        <label for="first_name">Comp.:
                                        </label>
                                        <input name ="compresp" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <label for="first_name">
                                            Bairro:
                                        </label>
                                        <input name ="bairroresp" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <label for="first_name">Cidade:
                                        </label>
                                        <input name ="cidresp" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <div>
                                      <label for="first_name">CEP:
                                      </label>
                                      <input name ="cepresp" class="form-control" id="first_name" type="text" onkeypress="$(this).mask('00.000-000')">
                                  </div>
                              </div>
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <label for="first_name">Telefone:
                                        </label>
                                        <input name ="telresp" class="form-control" id="first_name" type="text" onkeypress="$(this).mask('(00) 0000-00009')">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6 mb-3">
                                  <div>
                                      <label for="first_name">Grau de parentesco com o idoso:</label>
                                      <select name ="grauresp" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Esposo (a)">Esposo (a)</option>
                                          <option value="Filho (a)">Filho (a)</option>
                                            <option value="Genro/nora">Genro/nora</option>
                                              <option value="Sobrinho(a)">Sobrinho(a)</option>
                                                <option value="Neto(a)">Neto(a)</option>
                                                  <option value="Parente">Parente</option>
                                                    <option value="Vizinho(a)">Vizinho(a)</option>
                                                      <option value="Outro<">Outro</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                  <div>
                                      <label for="first_name">Outro:
                                      </label>
                                      <input name ="ograuresp" class="form-control" id="first_name" type="text" placeholder="" >
                                  </div>
                              </div>
                            </div>
                              <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div>
                                        <label for="first_name">Anotação:
                                        </label>
                                      <textarea name ="pbsresp" class="form-control" placeholder="" id="textarea" rows="4"></textarea>
                                    </div>
                                </div>
                              </div>
                              <h2 class="h5 mb-4">3.DADOS SOCIAIS RELATIVOS AO IDOSO</h2>

                              <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Quantos filhos o Sr (a) teve? Nº:
                                        </label>
                                  <input name ="filhos" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Quantos filhos estão vivos? Nº:
                                        </label>
                                  <input name ="vifilhos" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6 mb-3">

                                      <div>
                                          <label for="first_name">Estado civil:</label>
                                          <select name ="estcivil" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                              <option selected></option>
                                              <option value="Casado (a)">Casado (a)</option>
                                              <option value="Mora com companheiro (a)">Mora com companheiro (a)</option>
                                                <option value="Separado (a) (s/ companheiro)">Separado (a) (s/ companheiro) </option>
                                                  <option value="Divorciado(a) (s/ companheiro)">Divorciado(a) (s/ companheiro)</option>
                                                    <option value="Viúvo (a) (s/ companheiro)">Viúvo (a) (s/ companheiro) </option>
                                                      <option value="Nunca casou (solteiro (a), s/ companheiro (a)">Nunca casou (solteiro (a), s/ companheiro (a)</option>
                                                        <option value="Não sabe">Não sabe</option>

                                          </select>
                                      </div>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Escolaridade:</label>
                                        <select name ="escol" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                            <option selected></option>
                                            <option value="Não alfabetizado (não sabe ler nem escrever mesmo que tenha estudado)">Não alfabetizado (não sabe ler nem escrever mesmo que tenha estudado)</option>
                                            <option value="Alfabetizado (mas não fez a 1ª série)">Alfabetizado (mas não fez a 1ª série)</option>
                                              <option value="Primário incompleto (1ª a 3ª série)">Primário incompleto (1ª a 3ª série)</option>
                                                <option value="Primário completo (4ª série)">Primário completo (4ª série)</option>
                                                  <option value="Ginasial incompleto (5ª a 7ª série)">Ginasial incompleto (5ª a 7ª série)</option>
                                                    <option value="Ginasial completo (8ª série)">Ginasial completo (8ª série)</option>
                                                      <option value="Secundário completo)">Secundário completo)</option>
                                                        <option value="Secundário incompleto">Secundário incompleto</option>
                                                        <option value="Superior (completo ou não)">Superior (completo ou não)</option>
                                                        <option value="Não sabe">Não sabe</option>
                                        </select>
                                    </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6 mb-3">
                                     <div>
                                         <label for="first_name">Possui Referências Familiares:</label>
                                         <select name ="famil" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                             <option selected></option>
                                             <option value="Não">Não</option>
                                             <option value="Sim, especificar">Sim, especificar</option>
                                          </select>
                                     </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                     <div>
                                         <label for="first_name">Especificar:
                                         </label>
                                         <input name ="familesp" class="form-control" id="first_name" type="text" placeholder="" >
                                     </div>
                                 </div>
                               </div>
                               <div class="row">
                              <div class="col-md-12 mb-3">

                                    <label for="first_name">Morava com quem anteriormente:</label>
                                    <select name ="quemmor" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                        <option selected></option>
                                        <option value="Morava sozinho (a)">Morava sozinho (a)</option>
                                        <option value="Com cônjuge">Com cônjuge</option>
                                          <option value="Com filho (a)">Com filho (a)</option>
                                            <option value="Sobrinho (a)">Sobrinho (a)</option>
                                              <option value="Neto (a)">Neto (a)</option>
                                                <option value="Com parentes">Com parentes</option>
                                                  <option value="Não parentes">Não parentes</option>
                                    </select>

                            </div>
                          </div>
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                   <div>
                                       <label for="first_name">Fonte de Renda:</label>
                                       <select name ="renda" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                           <option selected></option>
                                           <option value="Sem renda própria">Sem renda própria</option>
                                           <option value="Aposentadoria">Aposentadoria</option>
                                           <option value="Assalariado (a)">Assalariado (a)</option>
                                           <option value="Pensionista">Pensionista</option>
                                           <option value="Benefício de Prestação Continuada">Benefício de Prestação Continuada</option>
                                           <option value="Outro">Outro</option>
                                        </select>
                                   </div>
                               </div>
                               <div class="col-md-6 mb-3">
                                   <div>
                                       <label for="first_name">Outro, especificar:</label>
                                       <input name ="obsrenda" class="form-control" id="first_name" type="text" placeholder="" >
                                   </div>
                               </div>
                             </div>
                             <div class="row">
                              <div class="col-md-12 mb-3">

                                       <label for="first_name">última renda mensal em saláros mínimos (sm):</label>
                                       <select name ="ulrenda" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                           <option selected></option>
                                           <option value="Até 1 sm<">Até 1 sm</option>
                                           <option value="1 até 2 sm">1 até 2 sm</option>
                                           <option value="De 3 a 5 sm">De 3 a 5 sm</option>
                                           <option value="De 6 a 10 sm">De 6 a 10 sm</option>
                                           <option value="Acima de 10 sm">Acima de 10 sm</option>
                                        </select>
                                   </div>
                               </div>
                               <div class="row">
                                <div class="col-md-6 mb-3">

                                         <label for="first_name">O idoso possui bens ?:</label>
                                         <select name ="bens" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                             <option selected></option>
                                             <option value="Não">Não</option>
                                             <option value="Sim, espeificar">Sim, espeificar</option>
                                          </select>
                                     </div>

                                 <div class="col-md-6 mb-3">

                                      <label for="first_name">Especificar:</label>
                                      <input name ="obsbens" class="form-control" id="first_name" type="text" placeholder="" >
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12 mb-3">
                                     <div>
                                         <label for="first_name">Possui empréstimo consignado no seu Benefício?:</label>
                                         <select name ="cons" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                             <option selected></option>
                                             <option value="Não">Não</option>
                                             <option value="Sim">Sim</option>
                                          </select>
                                     </div>
                                 </div>

                            </div>
                            <div class="row">
                              <div class="col-md-6 mb-3">

                                       <label for="first_name">Seu benefício previdenciário?:</label>
                                       <select name ="previ" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                           <option selected></option>
                                           <option value="Sim prório idoso que recebe">Sim prório idoso que recebe</option>
                                           <option value="Não, especificar quem recebe">Não, especificar quem recebe</option>
                                        </select>

                               </div>
                               <div class="col-md-6 mb-3">

                                    <label for="first_name">Especificar quem recebe:</label>
                                    <input name ="obsprevi" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 mb-3">

                                       <label for="first_name">Essa pessoa especificada possui procuração outorgada pelo idoso para gerir seus interesses?</label>
                                       <select name ="ourto" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                           <option selected></option>
                                           <option value="Sim">Sim</option>
                                           <option value="Não">Não</option>
                                        </select>

                               </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-3">

                                    <label for="first_name">O idoso é interditado judicialmente?</label>
                                    <select name ="judi" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                         <option selected></option>
                                         <option value="Não">Não</option>
                                         <option value="Sim">Sim</option>
                                  </select>

                          </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <div class="mb-3">
                                    <label for="first_name">Quem solicitou vaga para o idoso:</br>
</label>
<select name ="quemsol" class="form-select mb-0" id="gender" aria-label="Gender select example">
    <option selected></option>
    <option value="Cônjuge">Cônjuge</option>
    <option value="Filho(a)">Filho(a)</option>
    <option value="Genro/nora">Genro/nora</option>
    <option value="Irmão(ã)">Irmão(ã)</option>
    <option value="Cunhado(a)">Cunhado(a)</option>
    <option value="Sobrinho(a)">Sobrinho(a)</option>
    <option value="Neto(a)">Neto(a)</option>
    <option value="Não Parente">Não Parente</option>
    <option value="Outros">Outros</option>
 </select>
                              </div>


                          </div>
                             <div class="col-md-6 mb-3">

                                  <label for="first_name">Outro, especificar</label>
                                  <input name ="obsquemsol" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <div class="mb-3">
                                    <label for="first_name">Motivo da Institucionalização: (múltipla escolha):
                              </label>
                              </div>
                              <div class="form-check">
                                  <input name ="falt" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                  <label class="form-check-label" for="defaultCheck10">
                                  Falta de cuidador
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input name ="solifami" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                  <label class="form-check-label" for="defaultCheck10">
                                  Por solicitação da família
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input name ="sozin" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                  <label class="form-check-label" for="defaultCheck10">
                                  Sozinho por muito tempo
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input name ="doenca" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                  <label class="form-check-label" for="defaultCheck10">
                                Doença
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input name ="semor" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                  <label class="form-check-label" for="defaultCheck10">
                                  Sem moradia
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input name ="nenh" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                  <label class="form-check-label" for="defaultCheck10">
                                Nenhum motivo
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input name ="pro" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                  <label class="form-check-label" for="defaultCheck10">
                                Opção própria
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input name ="naosab" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                  <label class="form-check-label" for="defaultCheck10">
                                  Não sabe/Não lembra
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input name ="ours" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                  <label class="form-check-label" for="defaultCheck10">
                              Outros Motivos
                                  </label>
                              </div>

                            </div>
                            <div class="col-md-6 mb-3">

                                 <label for="first_name">Outro:</label>
                                 <input name ="obsours" class="form-control" id="first_name" type="text" placeholder="" >
                             </div>
                          </div>
                            <h2 class="h5 mb-4">4.DADOS REFERENTES À SAÚDE DO IDOSO</h2>
                            <div class="row">
                              <div class="col-md-6 mb-3">

                                      <label for="first_name">Necessita de tratamento específico de saúde?  </label>
                                      <select name ="trat" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                           <option selected></option>
                                           <option value="Não">Não</option>
                                           <option value="Sim">Sim</option>
                                    </select>

                            </div>
                            <div class="col-md-6 mb-3">

                                 <label for="first_name">Sim, especificar:</label>
                                 <input name ="obstrat" class="form-control" id="first_name" type="text" placeholder="" >
                             </div>
                           </div>

                           <div class="row">
                             <div class="col-md-12 mb-3">
                               <div class="mb-3">
                                     <label for="first_name">Algum médico ou outro profissional de saúde disse que o idoso tem alguma dessas doenças especificadas abaixo:
                               </label>
                               </div>
                               <div class="form-check">
                                   <input name ="procoraca" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                   <label class="form-check-label" for="defaultCheck10">
                              Problemas do coração(angina,infarto,arritmia)
                                   </label>
                               </div>
                               <div class="col-md-12 mb-3">

                                       <label for="first_name">Toma medicamento para isso </label>
                                       <select name ="obsprocoraca" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                            <option selected></option>
                                            <option value="Toma">Toma</option>
                                            <option value="Tomou">Tomou</option>
                                            <option value="Nunca Tomou">Nunca Tomou</option>
                                            <option value="NSR">NSR</option>
                                     </select>

                             </div>
                             <div class="form-check">
                                 <input name ="prohiper" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                 <label class="form-check-label" for="defaultCheck10">
                            Hipertensão ou pressão alta (inclui diurético)
                                 </label>
                             </div>
                             <div class="col-md-12 mb-3">

                                     <label for="first_name">Toma medicamento para isso </label>
                                     <select name ="obsprohiper"class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Toma">Toma</option>
                                          <option value="Tomou">Tomou</option>
                                        <option value="Nunca Tomou">Nunca Tomou</option>
                                          <option value="NSR">NSR</option>
                                   </select>

                           </div>

                           <div class="form-check">
                               <input name ="prodia" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                               <label class="form-check-label" for="defaultCheck10">
                          Diabetes (açúcar no sangue)
                               </label>
                           </div>
                           <div class="col-md-12 mb-3">

                                   <label for="first_name">Toma medicamento para isso </label>
                                   <select name ="obsprodia" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                        <option selected></option>
                                        <option value="Toma">Toma</option>
                                        <option value="Tomou">Tomou</option>
                                      <option value="Nunca Tomou">Nunca Tomou</option>
                                        <option value="NSR">NSR</option>
                                 </select>

                         </div>

                         <div class="form-check">
                             <input name ="proost" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                             <label class="form-check-label" for="defaultCheck10">
                    Osteoporose (enfraquecimento dos ossos)
                             </label>
                         </div>
                         <div class="col-md-12 mb-3">

                                 <label for="first_name">Toma medicamento para isso </label>
                                 <select name ="obsproost" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                      <option selected></option>
                                      <option value="Toma">Toma</option>
                                      <option value="Tomou">Tomou</option>
                                    <option value="Nunca Tomou">Nunca Tomou</option>
                                      <option value="NSR">NSR</option>
                               </select>

                       </div>

                       <div class="form-check">
                           <input name ="proinst" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                           <label class="form-check-label" for="defaultCheck10">
                  Prob. intestinais(gastrite,úlcera,refluxo)
                           </label>
                       </div>
                       <div class="col-md-12 mb-3">

                               <label for="first_name">Toma medicamento para isso </label>
                               <select name ="obsproinst" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                    <option selected></option>
                                    <option value="Toma">Toma</option>
                                    <option value="Tomou">Tomou</option>
                                  <option value="Nunca Tomou">Nunca Tomou</option>
                                    <option value="NSR">NSR</option>
                             </select>

                     </div>

                     <div class="form-check">
                         <input name ="proresp" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                         <label class="form-check-label" for="defaultCheck10">
                Infecções respiratórias
                         </label>
                     </div>
                     <div class="col-md-12 mb-3">

                             <label for="first_name">Toma medicamento para isso </label>
                             <select name ="obsproresp" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                  <option selected></option>
                                  <option value="Toma">Toma</option>
                                  <option value="Tomou">Tomou</option>
                                <option value="Nunca Tomou">Nunca Tomou</option>
                                  <option value="NSR">NSR</option>
                           </select>

                   </div>

                   <div class="form-check">
                       <input name ="projun" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                       <label class="form-check-label" for="defaultCheck10">
            Artrose, junta gasta ou reumatismo
                       </label>
                   </div>
                   <div class="col-md-12 mb-3">

                           <label for="first_name">Toma medicamento para isso </label>
                           <select name ="obsprojun" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                <option selected></option>
                                <option value="Toma">Toma</option>
                                <option value="Tomou">Tomou</option>
                              <option value="Nunca Tomou">Nunca Tomou</option>
                                <option value="NSR">NSR</option>
                         </select>

                 </div>
                 <div class="form-check">
                     <input name ="protire" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                     <label class="form-check-label" for="defaultCheck10">
          Doença da tireóide (hiper ou hipo)
                     </label>
                 </div>
                 <div class="col-md-12 mb-3">

                         <label for="first_name">Toma medicamento para isso </label>
                         <select name ="obsprotire" class="form-select mb-0" id="gender" aria-label="Gender select example">
                              <option selected></option>
                              <option value="Toma">Toma</option>
                              <option value="Tomou">Tomou</option>
                            <option value="Nunca Tomou">Nunca Tomou</option>
                              <option value="NSR">NSR</option>
                       </select>

               </div>

               <div class="form-check">
                   <input name ="proescle" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                   <label class="form-check-label" for="defaultCheck10">
        Esclerose múltipla (fraqueza progressiva)
                   </label>
               </div>
               <div class="col-md-12 mb-3">

                       <label for="first_name">Toma medicamento para isso </label>
                       <select name ="obsproescle" class="form-select mb-0" id="gender" aria-label="Gender select example">
                            <option selected></option>
                            <option value="Toma">Toma</option>
                            <option value="Tomou">Tomou</option>
                          <option value="Nunca Tomou">Nunca Tomou</option>
                            <option value="NSR">NSR</option>
                     </select>

             </div>

             <div class="form-check">
                 <input name ="proolho" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                 <label class="form-check-label" for="defaultCheck10">
    Prob. olhos (glaucoma, catarata, degeneração)
                 </label>
             </div>
             <div class="col-md-12 mb-3">

                     <label for="first_name">Toma medicamento para isso </label>
                     <select name ="obsproolho" class="form-select mb-0" id="gender" aria-label="Gender select example">
                          <option selected></option>
                          <option value="Toma">Toma</option>
                          <option value="Tomou">Tomou</option>
                        <option value="Nunca Tomou">Nunca Tomou</option>
                          <option value="NSR">NSR</option>
                   </select>

           </div>

           <div class="form-check">
               <input name ="propark" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
               <label class="form-check-label" for="defaultCheck10">
  Doença de Parkinson
               </label>
           </div>
           <div class="col-md-12 mb-3">

                   <label for="first_name">Toma medicamento para isso </label>
                   <select name ="obspropark" class="form-select mb-0" id="gender" aria-label="Gender select example">
                        <option selected></option>
                        <option value="Toma">Toma</option>
                        <option value="Tomou">Tomou</option>
                      <option value="Nunca Tomou">Nunca Tomou</option>
                        <option value="NSR">NSR</option>
                 </select>

         </div>

         <div class="form-check">
             <input name ="protre" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
             <label class="form-check-label" for="defaultCheck10">
Outro tipo de tremor
             </label>
         </div>
         <div class="col-md-12 mb-3">

                 <label for="first_name">Toma medicamento para isso </label>
                 <select name ="obsprotre" class="form-select mb-0" id="gender" aria-label="Gender select example">
                      <option selected></option>
                      <option value="Toma">Toma</option>
                      <option value="Tomou">Tomou</option>
                    <option value="Nunca Tomou">Nunca Tomou</option>
                      <option value="NSR">NSR</option>
               </select>

       </div>

       <div class="form-check">
           <input name ="proderr" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
           <label class="form-check-label" for="defaultCheck10">
Derrame ou isquemia cerebral
           </label>
       </div>
       <div class="col-md-12 mb-3">

               <label for="first_name">Toma medicamento para isso </label>
               <select name ="obsproderr" class="form-select mb-0" id="gender" aria-label="Gender select example">
                    <option selected></option>
                    <option value="Toma">Toma</option>
                    <option value="Tomou">Tomou</option>
                  <option value="Nunca Tomou">Nunca Tomou</option>
                    <option value="NSR">NSR</option>
             </select>

     </div>

     <div class="form-check">
         <input name ="proalz" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
         <label class="form-check-label" for="defaultCheck10">
Alzheimer ou outra demência
         </label>
     </div>
     <div class="col-md-12 mb-3">

             <label for="first_name">Toma medicamento para isso </label>
             <select name ="obsproalz" class="form-select mb-0" id="gender" aria-label="Gender select example">
                  <option selected></option>
                  <option value="Toma">Toma</option>
                  <option value="Tomou">Tomou</option>
                <option value="Nunca Tomou">Nunca Tomou</option>
                  <option value="NSR">NSR</option>
           </select>

   </div>

   <div class="form-check">
       <input name ="prodep" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
       <label class="form-check-label" for="defaultCheck10">
Depressão
       </label>
   </div>
   <div class="col-md-12 mb-3">

           <label for="first_name">Toma medicamento para isso </label>
           <select name ="obsprodep" class="form-select mb-0" id="gender" aria-label="Gender select example">
                <option selected></option>
                <option value="Toma">Toma</option>
                <option value="Tomou">Tomou</option>
              <option value="Nunca Tomou">Nunca Tomou</option>
                <option value="NSR">NSR</option>
         </select>

 </div>

 <div class="form-check">
     <input name ="proans" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
     <label class="form-check-label" for="defaultCheck10">
Ansiedade
     </label>
 </div>
 <div class="col-md-12 mb-3">

         <label for="first_name">Toma medicamento para isso </label>
         <select name ="pbsproans" class="form-select mb-0" id="gender" aria-label="Gender select example">
              <option selected></option>
              <option value="Toma">Toma</option>
              <option value="Tomou">Tomou</option>
            <option value="Nunca Tomou">Nunca Tomou</option>
              <option value="NSR">NSR</option>
       </select>

</div>

<div class="form-check">
    <input name ="probip" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
    <label class="form-check-label" for="defaultCheck10">
Transtorno Bipolar
    </label>
</div>
<div class="col-md-12 mb-3">

        <label for="first_name">Toma medicamento para isso </label>
        <select name ="obsprobip" class="form-select mb-0" id="gender" aria-label="Gender select example">
             <option selected></option>
             <option value="Toma">Toma</option>
             <option value="Tomou">Tomou</option>
           <option value="Nunca Tomou">Nunca Tomou</option>
             <option value="NSR">NSR</option>
      </select>

</div>

<div class="form-check">
    <input name ="proesq" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
    <label class="form-check-label" for="defaultCheck10">
Esquizofrenia
    </label>
</div>
<div class="col-md-12 mb-3">

        <label for="first_name">Toma medicamento para isso </label>
        <select name ="obsproesq" class="form-select mb-0" id="gender" aria-label="Gender select example">
             <option selected></option>
             <option value="Toma">Toma</option>
             <option value="Tomou">Tomou</option>
           <option value="Nunca Tomou">Nunca Tomou</option>
             <option value="NSR">NSR</option>
      </select>

</div>
<div class="form-check">
    <input name ="procan" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
    <label class="form-check-label" for="defaultCheck10">
Câncer
    </label>
</div>
<div class="col-md-12 mb-3">

        <label for="first_name">Toma medicamento para isso </label>
        <select name ="obsprocan" class="form-select mb-0" id="gender" aria-label="Gender select example">
             <option selected></option>
             <option value="Toma">Toma</option>
             <option value="Tomou">Tomou</option>
           <option value="Nunca Tomou">Nunca Tomou</option>
             <option value="NSR">NSR</option>
      </select>

</div>
<div class="col-md-12 mb-3">

     <label for="first_name">Outra doença:</label>
     <input name ="proout" class="form-control" id="first_name" type="text" placeholder="" >
 </div>
<div class="col-md-12 mb-3">

        <label for="first_name">Toma medicamento para isso </label>
        <select name ="obsproout" class="form-select mb-0" id="gender" aria-label="Gender select example">
             <option selected></option>
             <option value="Toma">Toma</option>
             <option value="Tomou">Tomou</option>
           <option value="Nunca Tomou">Nunca Tomou</option>
             <option value="NSR">NSR</option>
      </select>

</div>
<div class="form-check">
    <input name ="pronen" class="form-check-input" type="checkbox" value="" id="defaultCheck10">
    <label class="form-check-label" for="defaultCheck10">
Nenhuma doença (exclui as outras)
    </label>
</div>
                             </div>
                           </div>

                           <div class="row">
                             <div class="col-md-6 mb-3">

                                     <label for="first_name">São fornecidos pelo Sistema Único de Saúde? </label>
                                     <select name ="sus" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Sim">Sim</option>
                                          <option value="Não">Não</option>

                                   </select>

                             </div>
                             <div class="col-md-6 mb-3">

                                  <label for="first_name">Não, especificar: </label>
                                  <input name ="obssus" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>



                        </div>


                          <h2 class="h5 mb-4">4.1 Capacidade funcional do idoso:
</h2>
<div class=" mb-3">
<label for="first_name">O idoso é dependente?( para responder a este indicador, utilize a escala abaixo)
Se no quadro tiver uma ou mais respostas “SIM”, esta pessoa será considerada DEPENDENTE.
 </label>
</div>

 <div class="row">
   <div class="col-md-6 mb-3">

           <label for="first_name">Precisa de ajuda para tomar banho? </label>
           <select name ="banho" class="form-select mb-0" id="gender" aria-label="Gender select example">
                <option selected></option>
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>

         </select>

       </div>
       <div class="col-md-6 mb-3">

               <label for="first_name">Precisa de ajuda para pegar as roupas e vestir-se? </label>
               <select name ="roupa" class="form-select mb-0" id="gender" aria-label="Gender select example">
                    <option selected></option>
                      <option value="Sim">Sim</option>
                  <option value="Não">Não</option>

             </select>

           </div>
           <div class="col-md-6 mb-3">

                   <label for="first_name">Ajuda para entrar e sair do banheiro,  arrumar suas próprias roupas e  limpar a área genital? </label>
                   <select name ="banheiro" class="form-select mb-0" id="gender" aria-label="Gender select example">
                        <option selected></option>
                          <option value="Sim">Sim</option>
                      <option value="Não">Não</option>

                 </select>

               </div>

               <div class="col-md-6 mb-3">

                       <label for="first_name">Precisa de ajuda para sentar-se/deitar-se e levantar-se da cama ou cadeira?</label>
                       <select name ="deitar" class="form-select mb-0" id="gender" aria-label="Gender select example">
                            <option selected></option>
                              <option value="Sim">Sim</option>
                          <option value="Não">Não</option>

                     </select>

                   </div>

                   <div class="col-md-6 mb-3">

                           <label for="first_name">Tem completo controle sobre suas eliminações (urinar e evacuar)?</label>
                           <select name ="urina" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                <option selected></option>
                                  <option value="Sim">Sim</option>
                              <option value="Não">Não</option>

                         </select>

                       </div>
                       <div class="col-md-6 mb-3">

                               <label for="first_name">Precisa de ajuda para levar a comida do prato à boca?</label>
                               <select name ="comida" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                    <option selected></option>
                                      <option value="Sim">Sim</option>
                                  <option value="Não">Não</option>

                             </select>

                           </div>

     </div>

     <div class="row">
       <div class="col-md-12 mb-3">

               <label for="first_name">Possui plano de Saúde ? </label>
               <select name ="saude" class="form-select mb-0" id="gender" aria-label="Gender select example">
                    <option selected></option>
                      <option value="Sim">Sim</option>
                  <option value="Não">Não</option>

             </select>

           </div>
              <div class="col-md-12 mb-3">

               <label for="textarea">Sim, especificar:</label>
               <textarea name ="obssaude" class="form-control" placeholder="" id="textarea" rows="4"></textarea>

</div>
     </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-dark">Salvar</button>
                            </div>
                        </form>
                    </div>



                    </div>
                </div>
            </div>




<footer class="footer section py-5">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <p class="mb-0 text-center text-xl-left">Copyright © 2021-<span class="current-year"></span> <a
                    class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Flavio e Jonnatha</a></p>
        </div>


    </div>
</footer>
        </main>
