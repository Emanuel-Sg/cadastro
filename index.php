<?php

if (isset($_POST['subimit'])) {
}

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Formulário</title>
    <!-- Link estilo Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/fontawesome/css/all.css" />

    <!-- Link de Estilo Customizado -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div id="content" class="container">
        <form>
            <div class="d-flex justify-content-center">
                <h1>Cadastro</h1>
            </div>

            <div id="personal-data" class="content-container">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="name">Nome</label>
                            <small class="text-muted"> - Obrigatório</small>
                            <input type="text" id="name" class="form-control need-validate " placeholder="Ex: Jose Roberto" required />
                            <div class="invalid-feedback">
                                Favor insira um nome valido
                            </div>
                        </div>
                    </div>
                </div>

                <div id="contact-data" class="content-container">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <small class="text-muted"> - Obrigatório</small>
                        <input type="text" id="email" class="form-control need-validate" placeholder="your_email@example.com" required />
                        <div class="invalid-feedback">
                            Favor insira um endereço de email válido!
                        </div>
                    </div>
                    <div id="contact-data" class="content-container">
                        <div class="form-group">
                            <label for="email">Data Nascimento</label>
                            <small class="text-muted"> - Obrigatório</small>
                            <input type="date" id="data_nasc_client" class="form-control need-validate" required />
                            <div class="invalid-feedback">
                                Favor insira uma data valida!
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label for="celPhone">Celular</label>
                                <small class="text-muted"> - Obrigatório</small>
                                <input type="text" id="celPhone" class="form-control onlyNumber need-validate" placeholder="(00)0000-0000" maxlength="14" required />
                                <div class="invalid-feedback">
                                    Favor insira um Celular valido
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="security" class="content-container">
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <small class="text-muted"> - Obrigatório, min 8 caracteres</small>
                        <div class="input-group">
                            <div class="input-group-append password-border">
                                <input type="password" id="password" class="form-control need-validate" placeholder="Digite sua senha aqui" required />
                                <button type="button" id="btn-password" class="btn see-pswd ">
                                    <i class="far fa-eye-slash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            Senha invalida! A senha necessita ter mais de 8 digitos!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirme sua senha</label>
                        <div class="input-group">
                            <div class="input-group-append password-border">
                                <input type="password" id="confirmPassword" class="form-control need-validate" placeholder="Digite sua senha novamente" required />
                                <button type="button" id="btn-confirm" class="btn see-pswd">
                                    <i class="far fa-eye-slash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            Senhas não coincidem!
                        </div>
                    </div>
                </div>

                <div id="privacy" class="content-container">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="newsletter" checked />
                            <label class="custom-control-label" for="newsletter">Quero receber ofertas e noticias por email</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="terms" required />
                            <label class="custom-control-label" for="terms">Aceito os <a href="#">termos de uso e privacidade</a></label>
                            <div class="invalid-feedback">
                                Necessário aceitar os termos para prosseguir!
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                <button type="reset">Cancelar</button>
        </form>
    </div>

    <!-- Script for Bootstrap - JQuery, Popper and Js  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Script Custom for Validation -->
    <script src="js/main.js"></script>
</body>

</html>