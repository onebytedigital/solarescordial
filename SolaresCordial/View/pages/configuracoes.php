<?php
$usuarios = \SolaresCordial\Service\UsuarioService::findAll();
?>
<section class="content">
    <div class="content-card">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h1>
                        <span><img src="<?php echo INCLUDE_PATH_FULL ?>icons/settings.svg" alt=""></span>
                        <span>Configurações<br><b>Configure o seu paínel, controle de usuários e informações básicas</b></span>
                    </h1>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--content-title-->
    <div class="content-card">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h1>
                        <span><img src="<?php echo INCLUDE_PATH_FULL ?>icons/user.svg" alt=""></span>
                        <span>Usuários<br><b>Controle os usuários que tem acesso ao sistema</b>
                        </span>
                    </h1>
                </div>
                <div class="col-12 col-md-4">
                    <p class="text-right">
                        <button onclick="modalUsuario()" id="novoUsuario" class="btn btn-medium btn-sucess">
                            <i class="fa fa-plus"></i> Nova Usuário
                        </button>
                    </p>
                    <div class="form-modal-container" id="modalNovoUsuario">
                        <div class="form-modal" id="formNovo">
                            <span class="btn-close">
                                <img onclick="btnClose()" src="<?php echo INCLUDE_PATH_FULL ?>icons/close.svg" alt="">
                            </span>
                            <h1>
                                <img src="<?php echo INCLUDE_PATH_FULL ?>icons/user.svg" alt="">
                                Novo usuário
                            </h1>
                            <form method="post" class="form">
                                <div class="col-12">
                                    <label for="nome">Nome:</label>
                                    <input type="text" name="nome" id="nome" class="form-input" placeholder="Seu nome..." required>
                                </div>
                                <div class="col-12">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" class="form-input" placeholder="Seu email..." required>
                                </div>
                                <div class="col-12">
                                    <label for="senha">Senha:</label>
                                    <input type="password" name="senha" id="senha" class="form-input" placeholder="Sua senha..." required>
                                </div>
                                <div class="col-12 text-right">
                                    <input type="submit" name="cadastrar-usuario" value="Salvar" class="btn btn-medium btn-sucess">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--row-->
            <div class="row">
                <div class="col-12">
                    <div class="table-container bg-dark">
                        <table class="table bg-dark">
                            <thead>
                                <tr>
                                    <th style="min-width: 50px;">Id</th>
                                    <th style="min-width: 350px;">Nome</th>
                                    <th style="min-width: 200px;">E-mail</th>
                                    <th style="min-width: 150px;">Opções</th>
                                </tr>
                            </thead>
                            <tbody id="rowsCount">
                                <?php
                                    foreach ($usuarios as $usuario) {
                                ?>
                                <tr class="tr-hover">
                                    <td style="min-width: 50px;"><?php echo $usuario['id'] ?></td>
                                    <td style="min-width: 350px;"><?php echo $usuario['nome'] ?></td>
                                    <td style="min-width: 200px;"><?php echo $usuario['email'] ?></td>
                                    <td style="min-width: 150px;" class="table-options">
                                    <span>
                                        <button class="btn-table btn-edit"
                                                onclick="
                                                    modal = $('#formModal<?php echo $usuario["id"] ?>')
                                                        modal.fadeIn(1000)
                                                        modal.css('display','flex')
                                                        $('#formModal<?php echo $usuario["id"] ?> .form-modal').animate({
                                                            margin: '0 50% 0 auto',
                                                            opacity: 1
                                                    }, 500)">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button onclick="
                                                    modal = $('#modalDeleteId<?php echo $usuario["id"] ?>')
                                                    modal.fadeIn(1000)
                                                    modal.css('display','flex')
                                                    $('#modalDeleteId<?php echo $usuario["id"] ?> .form-modal').animate({
                                                        marginTop: '0',
                                                        opacity: 1
                                                    }, 500)"
                                                class="btn-table btn-delete">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </span>
                                        <div class="form-modal-container"
                                             id="modalDeleteId<?php echo $usuario['id'] ?>">
                                            <div class="form-modal">
                                                <span class="btn-close">
                                                    <img onclick="btnClose()" src="<?php echo INCLUDE_PATH_FULL ?>icons/close.svg" alt="">
                                                </span>
                                                <h1>
                                                    <img src="<?php echo INCLUDE_PATH_FULL ?>icons/user.svg" alt="">
                                                    Excluir Usuário
                                                </h1>
                                                <p>Deseja realmente excluir o usuário?</p>
                                                <p class="text-right">
                                                    <a href="?deletar-usuario&id=<?php echo $usuario['id'] ?>" class="btn btn-sucess btn-small">Sim</a>
                                                    <button onclick="btnClose()" class="btn btn-alert btn-small">Não</button>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-modal-container" id="formModal<?php echo $usuario['id'] ?>">
                                            <div class="form-modal">
                                                <span class="btn-close">
                                                    <img onclick="btnClose()" src="<?php echo INCLUDE_PATH_FULL ?>icons/close.svg" alt="">
                                                </span>
                                                <h1>
                                                    <img src="<?php echo INCLUDE_PATH_FULL ?>icons/user.svg" alt="">
                                                    Editar usuário
                                                </h1>
                                                <form method="post" class="form">
                                                    <div class="col-12">
                                                        <input type="hidden" name="id" id="id" class="form-input" placeholder="Seu nome..." readonly value="<?php echo $usuario['id'] ?>">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="nome">Nome:</label>
                                                        <input type="text" name="nome" id="nome" class="form-input" placeholder="Seu nome..." required value="<?php echo $usuario['nome'] ?>">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="email">Email:</label>
                                                        <input type="email" name="email" id="email" class="form-input" placeholder="Seu email..." required value="<?php echo $usuario['email'] ?>">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="senha">Senha:</label>
                                                        <input type="password" name="senha" id="senha" class="form-input" placeholder="Sua senha..." required value="<?php echo $usuario['senha'] ?>">
                                                    </div>
                                                    <div class="col-12 text-right">
                                                        <input type="submit" name="salvar-usuario" value="Salvar" class="btn btn-medium btn-sucess">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--content-title-->
</section>