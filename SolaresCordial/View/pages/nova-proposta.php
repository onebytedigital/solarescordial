<section class="content">
    <div class="content-card">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h1>
                        <span><img src="<?php echo INCLUDE_PATH_FULL ?>icons/user.svg" alt=""></span>
                        <span>Nova Proposta<br><b>Preencha todos os campos para gerar uma nova proposta</b>
                        </span>
                    </h1>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--content-card-->

    <div class="content-card">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h1>
                        <span><img src="<?php echo INCLUDE_PATH_FULL ?>icons/user.svg" alt=""></span>
                        <span>Informações do Cliente<br><b>Insira os dados referentes ao consumo do cliente</b>
                        </span>
                    </h1>
                </div>
                <div class="col-12">
                    <form method="post" class="mt-5 form-container">
                        <div class="col-12 mx-1">
                            <label class="label" for="nome_cliente">Nome do cliente:</label>
                            <input type="text" name="nome_cliente" id="nome_cliente" placeholder="Nome do cliente..." class="form-input">
                        </div>
                        <div class="col-12 col-md-3 px-1">
                            <label class="label" for="tipo_rede">Tipo da Rede:</label>
                            <select type="text" name="tipo_rede" id="tipo_rede"  class="form-input">
                                <option value="" selected>--</option>
                                <option value="Monofásico">Monofásico</option>
                                <option value="Bifásico">Bifásico</option>
                                <option value="Trifásico">Trifásico</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3 px-1">
                            <label class="label" for="tipo_rede">Tensão:</label>
                            <select type="text" name="tipo_rede" id="tipo_rede"  class="form-input">
                                <option value="" selected>--</option>
                                <option value="127V">127V</option>
                                <option value="220V">220V</option>
                                <option value="127/220V">127/220V</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3 px-1">
                            <label class="label" for="irradiacao">Irradiação:</label>
                            <input onkeyup="getPotencia()" type="number" name="irradiacao" id="irradiacao" value="0" class="form-input">
                        </div>
                        <div class="col-12 col-md-3 px-1">
                            <label class="label" for="perda">Perda:</label>
                            <select onchange="getPotencia()" type="text" name="perda" id="perda"  class="form-input">
                                <option value="" selected>--</option>
                                <option value="10">10%</option>
                                <option value="20">15%</option>
                                <option value="30">20%</option>
                            </select>
                        </div>
                        <div class="col-12 my-2">
                            <h1>Consumo médio mensal (Kwh/mês</h1>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 px-1">
                            <label class="label" for="consumo_mes1">Janeiro</label>
                            <input onkeyup="somarConsumo()" type="number" name="consumo_mes1" id="consumo_mes1" value="0" class="form-input">
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 px-1">
                            <label class="label" for="consumo_mes2">Fevereiro</label>
                            <input onkeyup="somarConsumo()" type="number" name="consumo_mes2" id="consumo_mes2" value="0" class="form-input">
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 px-1">
                            <label class="label" for="consumo_mes3">Março</label>
                            <input onkeyup="somarConsumo()" type="number" name="consumo_mes3" id="consumo_mes3" value="0" class="form-input">
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 px-1">
                            <label class="label" for="consumo_mes4">Abril</label>
                            <input onkeyup="somarConsumo()" type="number" name="consumo_mes4" id="consumo_mes4" value="0" class="form-input">
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 px-1">
                            <label class="label" for="consumo_mes5">Maio</label>
                            <input onkeyup="somarConsumo()" type="number" name="consumo_mes5" id="consumo_mes5" value="0" class="form-input">
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 px-1">
                            <label class="label" for="consumo_mes6">Junho</label>
                            <input onkeyup="somarConsumo()" type="number" name="consumo_mes6" id="consumo_mes6" value="0" class="form-input">
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 px-1">
                            <label class="label" for="consumo_mes7">Julho</label>
                            <input onkeyup="somarConsumo()" type="number" name="consumo_mes7" id="consumo_mes7" value="0" class="form-input">
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 px-1">
                            <label class="label" for="consumo_mes8">Agosto</label>
                            <input onkeyup="somarConsumo()" type="number" name="consumo_mes8" id="consumo_mes8" value="0" class="form-input">
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 px-1">
                            <label class="label" for="consumo_mes9">Setembro</label>
                            <input onkeyup="somarConsumo()" type="number" name="consumo_mes9" id="consumo_mes9" value="0" class="form-input">
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 px-1">
                            <label class="label" for="consumo_mes10">Outubro</label>
                            <input onkeyup="somarConsumo()" type="number" name="consumo_mes10" id="consumo_mes10" value="0" class="form-input">
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 px-1">
                            <label class="label" for="consumo_mes11">Novembro</label>
                            <input onkeyup="somarConsumo()" type="number" name="consumo_mes11" id="consumo_mes11" value="0" class="form-input">
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 px-1">
                            <label class="label" for="consumo_mes12">Dezembro</label>
                            <input onkeyup="somarConsumo()" type="number" name="consumo_mes12" id="consumo_mes12" value="0" class="form-input">
                        </div>
                        <div class="col-12 my-2">
                            <h2 id="mensal" class="consumo">Consumo médio:<span class="px-1">0.00</span>Kwh/mês</h2>
                            <input id="consumo_medio" type="hidden" name="consumo_medio" class="form-input" value="0.00">
                        </div>
                        <div class="col-12 my-2">
                            <h2 id="diario" class="consumo">Consumo Diário:<span class="px-1">0.00</span>Kwh/mês</h2>
                            <input id="consumo_diario" type="hidden" name="consumo_diario" class="form-input" value="0.00">
                        </div>
                        <div class="col-12 my-2">
                            <h2 id="potencia" class="consumo">Potência calculada do Sistema:<span class="px-1">0.00</span>Kwp</h2>
                            <input id="potencia_sistema" type="hidden" name="potencia_sistema" class="form-input" value="0.00">
                        </div>
                    </form>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--content-card-->
</section>