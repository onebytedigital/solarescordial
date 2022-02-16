<section class="content">
    <div class="content-card">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h1>
                        <span><img src="<?php echo INCLUDE_PATH_FULL ?>icons/home.svg" alt=""></span>
                        <span>Dashboard<br><b>As principais informações sobre sua empresa você encontra aqui</b></span>
                    </h1>
                </div>
                <div class="col-12 col-md-4">
                    <p class="text-right">
                        <a href="<?php echo INCLUDE_PATH ?>propostas?nova-proposta" class="btn btn-medium btn-sucess">
                            <i class="fa fa-plus"></i> Nova Proposta
                        </a>
                    </p>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--content-title-->

    <div class="cards">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card card-dark">
                        <div class="col-12 col-md-2">
                                <span class="card-icon">
                                    <img src="<?php echo INCLUDE_PATH_FULL ?>icons/money.svg" alt="">
                                </span>
                        </div>
                        <div class="col-12 col-md-10">
                            <h1>Faturamento Total</h1>
                            <h2 class="text-sucess">R$15.052,72</h2>
                            <p class="text-right w-100">
                                <a class="btn btn-small btn-transparent" href="#">Ver detalhes</a>
                            </p>
                        </div>
                    </div>
                    <div class="grafico">
                        <canvas id="graficoFaturamento"></canvas>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card card1">
                                <h1 class="card-icon2">
                                        <span>
                                            <img src="<?php echo INCLUDE_PATH_FULL ?>icons/open-list.svg" alt="">
                                        </span>
                                </h1>
                                <h2 class="card-info">0</h2>
                                <h3 class="titulo text-center">Propostas em<br>aberto</h3>
                                <p class="text-right w-100">
                                    <a class="btn btn-small btn-transparent" href="#">Ver detalhes</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card card2">
                                <h1 class="card-icon2">
                                        <span>
                                            <img src="<?php echo INCLUDE_PATH_FULL ?>icons/going-list.svg" alt="">
                                        </span>
                                </h1>
                                <h2 class="card-info">0</h2>
                                <h3 class="titulo text-center">Propostas em andamento</h3>
                                <p class="text-right w-100">
                                    <a class="btn btn-small btn-transparent" href="#">Ver detalhes</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card card3">
                                <h1 class="card-icon2">
                                        <span>
                                            <img src="<?php echo INCLUDE_PATH_FULL ?>icons/sucess-list.svg" alt="">
                                        </span>
                                </h1>
                                <h2 class="card-info">0</h2>
                                <h3 class="titulo text-center">Propostas<br>concluídas</h3>
                                <p class="text-right w-100">
                                    <a class="btn btn-small btn-transparent" href="#">Ver detalhes</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card card4">
                                <h1 class="card-icon2">
                                        <span>
                                            <img src="<?php echo INCLUDE_PATH_FULL ?>icons/cancel-list.svg" alt="">
                                        </span>
                                </h1>
                                <h2 class="card-info">0</h2>
                                <h3 class="titulo text-center">Propostas<br>canceladas</h3>
                                <p class="text-right w-100">
                                    <a class="btn btn-small btn-transparent" href="#">Ver detalhes</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--cards-->
</section><!--content-->

