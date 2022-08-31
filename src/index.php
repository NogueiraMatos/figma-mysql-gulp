<!DOCTYPE html>
<?php date_default_timezone_set('America/Sao_Paulo'); ?>
<html lang="pt-br">

<head>
    <title>Pernada Pet</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dogwalker">
    <meta name="keywords" content="dogwalker, passeio pet, cachorro">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="w-100 header">
        <div class="container">
            <div class="row gx-1 align-items-center">
                <div class="col-4 col-lg-9">
                    <img src="img/logo.png" alt="logo" class="header_logo mt-1">
                </div>
                <div class="col-8 col-lg-3">
                    <div class="row">
                        <a href="#passear" class="col text-decoration-none">
                            <h2><b class="header_link">Passear</b></h2>
                        </a>
                        <a href="#como-funciona" class="col text-decoration-none">
                            <h2><b class="header_link">Sobre</b></h2>
                        </a>
                        <a href="#contato" class="col text-decoration-none">
                            <h2><b class="header_link">Contato</b></h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="main_image">
                <div class="container">
                    <div class="row gx-1">
                        <div class="col-9"></div>
                        <div class="col-3 main_popup-bg mt-5 shadow rounded mobile_display_invisible">
                            <h3 class="m-3 font-weight-bold">Encontre o seu dog walker na Pernada Pet</h3>
                            <p class="m-3">Sem tempo para passear com seu pet? Ninguém merece ficar muito tempo trancado
                                em casa né?
                                Deixa que a gente te ajuda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 bg-secundary">
            <h2 class="text-center font-weight-bold" id="como-funciona">Como funciona</h2>
            <div class="container">
                <div class="row gx-1">
                    <div class="col-3 mobile_display_invisible"></div>
                    <div class="col-2 text-center mobile_display_invisible">
                        <img src="img/como-funciona-1.png" alt="cachorro" class="main_icon">
                        <h5 class="mt-2">1- Insira seus dados</h5>
                        <p>Adicione os dados sobre seu pet e onde você mora.</p>
                    </div>
                    <div class="display-invisible mobile_display_visible">
                        <div class="text-center">
                            <img src="img/como-funciona-1.png" alt="cachorro" class="main_icon">
                            <h5 class="mt-2">1- Insira seus dados</h5>
                            <p class="pb-4">Adicione os dados sobre seu pet e onde você mora.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 mobile_display_invisible"></div>
                    <div class="col-4 mobile_display_invisible">
                        <div class="row text-center">
                            <div class="col-6">
                                <img src="img/patas.png" alt="patas" class="main_paws">
                            </div>
                            <div class="col-6">
                                <img src="img/como-funciona-2.png" alt="moto" class="main_icon">
                                <h5 class="mt-2">2- Vamos até você</h5>
                                <p>Passeadores de segurança aprovados por nós.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="display-invisible mobile_display_visible">
                            <img src="img/como-funciona-2.png" alt="moto" class="main_icon">
                            <h5 class="mt-2">2- Vamos até você</h5>
                            <p class="pb-4">Passeadores de segurança aprovados por nós.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 mobile_display_invisible"></div>
                    <div class="col-4 mobile_display_invisible">
                        <div class="row text-center">
                            <div class="col-6">
                                <img src="img/como-funciona-3.png" alt="passeio" class="main_icon">
                                <h5 class="mt-2">3- Seu pet feliz</h5>
                                <p>Você acompanha por onde o passeador está caminhando com seu cãozinho por meio de GPS.
                                </p>
                            </div>
                            <div class="col-6">
                                <img src="img/patas.png" alt="patas" class="main_paws main_paws-rotate">
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="display-invisible mobile_display_visible">
                            <img src="img/como-funciona-3.png" alt="passeio" class="main_icon">
                            <h5 class="mt-2">3- Seu pet feliz</h5>
                            <p class="pb-4">Você acompanha por onde o passeador está caminhando com seu cãozinho por meio de GPS.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 mobile_display_invisible"></div>
                    <div class="col-4 mobile_display_invisible">
                        <div class="row text-center">
                            <div class="col-6">
                                <img src="img/patas.png" alt="patas" class="main_paws">
                            </div>
                            <div class="col-6">
                                <img src="img/como-funciona-4.png" alt="casa" class="main_icon">
                                <h5 class="mt-2">4- De volta ao lar</h5>
                                <p>Entregamos seu pet de volta desestressado e contente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="display-invisible mobile_display_visible">
                        <div class="row text-center">
                            <div class="">
                                <img src="img/como-funciona-4.png" alt="casa" class="main_icon">
                                <h5 class="mt-2">4- De volta ao lar</h5>
                                <p class="pb-4">Entregamos seu pet de volta desestressado e contente.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <form id="passear-form" action="index.php#passear" method="post">
            <section id="passear">
                <div class="pt-5 container form-height">
                    <h2 class="text-center font-weight-bold mb-5">Vamos começar?</h2>
                    <div class="d-flex align-items-center justify-content-center pb-5">
                        <div class="circle d-flex justify-content-center align-items-center">
                            <span class="circles-steps-numbers">1</span>
                        </div>
                        <h5 class="px-3">Suas informações</h5>
                        <hr class="hr mx-3 mobile_display_invisible">
                        <div class="circle-inactive circle-mobile d-flex justify-content-center align-items-center mobile_display_invisible">
                            <span class="circles-steps-numbers-inactive mobile_display_invisible">2</span>
                        </div>
                        <h5 class="px-3 mobile_display_invisible">Sua localização</h5>
                        <hr class="hr mx-3 mobile_display_invisible">
                        <div class="circle-inactive circle-mobile d-flex justify-content-center align-items-center mobile_display_invisible">
                            <span class="circles-steps-numbers-inactive mobile_display_invisible">3</span>
                        </div>
                        <h5 class="px-3 mobile_display_invisible">Data</h5>
                    </div>
                    <div class="display-invisible" id="form-alerta">
                        <div class="d-flex justify-content-center">
                            <div class="alert alert-warning text-center" role="alert">
                                <span>Primeiro, preencha corretamente os campos.</span>
                            </div>
                        </div>
                    </div>
                    <div class="
                    <?php
                    if (isset($_POST['date']) == false) {
                        echo 'display-invisible';
                    };
                    ?>
                        " id="form-alerta">
                        <div class="d-flex justify-content-center">
                            <div class="alert alert-warning text-center" role="alert">
                                <span>
                                    <?php

                                    function clean_input($input)
                                    {
                                        $input = trim($input);
                                        $input = stripslashes($input);
                                        $input = htmlspecialchars($input);
                                        return $input;
                                    }

                                    $server = 'localhost';
                                    $user = 'root';
                                    $password = '';
                                    $db_name = 'pernada_pet';
                                    $port = '3306';

                                    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                    $mysqli = new mysqli($server, $user, $password, $db_name, $port);
                                    $mysqli->set_charset("utf8");

                                    function try_insert($mysqli, $sql)
                                    {
                                        try {
                                            $mysqli->query($sql);
                                        } catch (mysqli_sql_exception $e) {
                                            $MYSQLI_CODE_DUPLICATE_KEY = 1062;
                                            if ($e->getCode() == $MYSQLI_CODE_DUPLICATE_KEY) {
                                                return true;
                                            } else {
                                                throw $e;
                                            }
                                        }
                                    }

                                    function id_search($mysqli, $sql)
                                    {
                                        $result = mysqli_query($mysqli, $sql);
                                        $result_array = mysqli_fetch_array($result);
                                        $id = $result_array[0];
                                        return $id;
                                    }

                                    if (isset($_POST['name'])) {
                                        $name = clean_input($_POST['name']);
                                        $surname = clean_input($_POST['surname']);
                                        $email = clean_input($_POST['email']);
                                        $tel = clean_input($_POST['tel']);
                                        $adress = clean_input($_POST['adress']);
                                        $date = clean_input($_POST['date']);
                                        $day = substr($date, 0, 10);
                                        $hour_with_colon = substr($date, -5);
                                        $hour = substr($hour_with_colon, 0, 2) . substr($hour_with_colon, -2);
                                        $city = clean_input($_POST['city']);
                                        $district = clean_input($_POST['district']);

                                        $sql = "INSERT INTO data (IDDATA, DATA) VALUES(NULL, '$day')";
                                        $already_exist = try_insert($mysqli, $sql);

                                        $sql = "SELECT IDDATA FROM data WHERE DATA = '$day'";
                                        $id_date = id_search($mysqli, $sql);

                                        $sql = "SELECT IDHORARIO FROM horario WHERE HORARIO = '$hour'";
                                        $id_hour = id_search($mysqli, $sql);

                                        $sql = "INSERT INTO data_horario (ID_DATA, ID_HORARIO) VALUES('$id_date', '$id_hour')";
                                        $already_exist = try_insert($mysqli, $sql);

                                        if ($already_exist) {
                                            echo 'Horário já reservado! Por favor, tente outro horário.';
                                        } else {
                                            $sql = "INSERT INTO bairro (IDBAIRRO, BAIRRO) VALUES(NULL, '$district')";
                                            $already_exist = try_insert($mysqli, $sql);

                                            $sql = "INSERT INTO cidade (IDCIDADE, CIDADE) VALUES(NULL, '$city')";
                                            $already_exist = try_insert($mysqli, $sql);

                                            $sql = "SELECT IDBAIRRO FROM bairro WHERE BAIRRO = '$district'";
                                            $id_district = id_search($mysqli, $sql);

                                            $sql = "SELECT IDCIDADE FROM cidade WHERE CIDADE = '$city'";
                                            $id_city = id_search($mysqli, $sql);

                                            $sql = "INSERT INTO cliente (IDCLIENTE, NOME, SOBRENOME, EMAIL, TELEFONE, ENDERECO, ID_BAIRRO, ID_CIDADE) VALUES(NULL, '$name', '$surname', '$email', '$tel', '$adress', '$id_district', '$id_city')";
                                            $already_exist = try_insert($mysqli, $sql);

                                            $sql = "SELECT IDCLIENTE FROM cliente WHERE EMAIL = '$email'";
                                            $id_client = id_search($mysqli, $sql);

                                            $sql = "INSERT INTO data_cliente (ID_DATA, ID_CLIENTE) VALUES('$id_date', '$id_client')";
                                            $already_exist = try_insert($mysqli, $sql);

                                            if ($already_exist) {
                                                $sql = "DELETE FROM data_horario WHERE ID_DATA = '$id_date' AND ID_HORARIO = '$id_hour'";
                                                $already_exist = try_insert($mysqli, $sql);
                                                echo 'Você já possui um horário reservado nesta data! Escolha outra data.';
                                            } else {
                                                echo 'Horário reservado com sucesso!';
                                            };
                                        };
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="mobile_display_invisible">
                        <div class="row py-4">
                            <div class="col-3"></div>
                            <div class="col-3">
                                <label for="form_name">Nome</label>
                                <input type="text" class="form-control form_input" id="form_name" name="name" required>
                            </div>
                            <div class="col-3">
                                <label for="form_surname">Sobrenome</label>
                                <input type="text" class="form-control form_input" id="form_surname" name="surname" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-3">
                                <label for="form_email">E-mail</label>
                                <input type="text" class="form-control form_input" id="form_email" name="email" required>
                            </div>
                            <div class="col-3">
                                <label for="form_tel">Telefone</label>
                                <input type="number" class="form-control form_input" id="form_tel" name="tel" min="1" max="14" required>
                            </div>
                            <button type="button" class="button col-1 align-self-end p-0" id="form-button-1"><b>Próxima</b></button>
                        </div>
                    </div>
                    <div class="display-invisible mobile_display_visible">
                        <div class="row py-4">
                            <div class="col">
                                <label for="form_name">Nome</label>
                                <input type="text" class="form-control form_input" id="mobile-form_name" name="name" required>
                            </div>
                            <div class="col">
                                <label for="form_surname">Sobrenome</label>
                                <input type="text" class="form-control form_input" id="mobile-form_surname" name="surname" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="form_email">E-mail</label>
                                <input type="text" class="form-control form_input" id="mobile-form_email" name="email" required>
                            </div>
                            <div class="col">
                                <label for="form_tel">Telefone</label>
                                <input type="number" class="form-control form_input" id="mobile-form_tel" name="tel" min="1" max="14" required>
                            </div>
                        </div>
                        <button type="button" class="button col-2 align-self-end p-0 mt-2" id="mobile-form-button-1"><b>Próxima</b></button>
                    </div>

                </div>
            </section>
            <section class="display-invisible" id="passear2">
                <div class="pt-5 container form-height">
                    <h2 class="text-center font-weight-bold mb-5">Quase lá...</h2>
                    <div class="d-flex align-items-center justify-content-center pb-5">
                        <div class="circle circle-mobile d-flex justify-content-center align-items-center mobile_display_invisible">
                            <span class="circles-steps-numbers mobile_display_invisible">1</span>
                        </div>
                        <h5 class="px-3 mobile_display_invisible">Suas informações</h5>
                        <hr class="hr mx-3 mobile_display_invisible">
                        <div class="circle d-flex justify-content-center align-items-center">
                            <span class="circles-steps-numbers">2</span>
                        </div>
                        <h5 class="px-3">Sua localização</h5>
                        <hr class="hr mx-3 mobile_display_invisible">
                        <div class="circle-inactive circle-mobile d-flex justify-content-center align-items-center mobile_display_invisible">
                            <span class="circles-steps-numbers-inactive mobile_display_invisible">3</span>
                        </div>
                        <h5 class="px-3 mobile_display_invisible">Data</h5>
                    </div>
                    <div class="display-invisible" id="form-alerta2">
                        <div class="d-flex justify-content-center">
                            <div class="alert alert-warning text-center" role="alert">
                                <span>Primeiro, preencha corretamente os campos.</span>
                            </div>
                        </div>
                    </div>

                    <div class="row py-4">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label for="form_adress">Endereço</label>
                            <input type="text" class="form-control form_input" id="form_adress" name="adress" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-3">
                            <label for="form_district">Bairro</label>
                            <input type="text" class="form-control form_input" id="form_district" name="district" required>
                        </div>
                        <div class="col-3">
                            <label for="form_city">Cidade</label>
                            <input type="text" class="form-control form_input" id="form_city" name="city" required>
                        </div>
                        <button type="button" class="button col-1 align-self-end mobile_display_invisible" id="form-button-2"><b>Próxima</b></button>
                    </div>
                    <div class="row mt-2 display-invisible mobile_display_visible">
                        <div class="col-3 display-invisible mobile_display_visible"></div>
                        <div class="col-3 display-invisible mobile_display_visible">
                            <button type="button" class="button align-self-end mobile_display_visible px-2" id="mobile-form-button-2"><b>Próxima</b></button>
                        </div>
                    </div>

                </div>
            </section>
            <section class="display-invisible" id="passear3">
                <div class="pt-5 container form-height">
                    <h2 class="text-center font-weight-bold mb-5">Quase lá...</h2>
                    <div class="d-flex align-items-center justify-content-center pb-5">
                        <div class="circle circle-mobile d-flex justify-content-center align-items-center mobile_display_invisible">
                            <span class="circles-steps-numbers mobile_display_invisible">1</span>
                        </div>
                        <h5 class="px-3 mobile_display_invisible">Suas informações</h5>
                        <hr class="hr mx-3 mobile_display_invisible">
                        <div class="circle circle-mobile d-flex justify-content-center align-items-center mobile_display_invisible">
                            <span class="circles-steps-numbers mobile_display_invisible">2</span>
                        </div>
                        <h5 class="px-3 mobile_display_invisible">Sua localização</h5>
                        <hr class="hr mx-3 mobile_display_invisible">
                        <div class="circle d-flex justify-content-center align-items-center">
                            <span class="circles-steps-numbers">3</span>
                        </div>
                        <h5 class="px-3">Data</h5>
                    </div>
                    <div class="display-invisible" id="form-alerta3">
                        <div class="d-flex justify-content-center">
                            <div class="alert alert-warning text-center" role="alert">
                                <span id="form-date-alert-msg">Primeiro, preencha corretamente os campos.</span>
                            </div>
                        </div>
                    </div>

                    <div class="row py-4 mobile_display_invisible">
                        <div class="col-5 mobile_display_invisible"></div>
                        <div class="col-2 mobile_display_invisible">
                            <label for="form_date">Data e hora</label>
                            <input type="datetime-local" min="2022-08-22 10:00" step="1800" class="form-control form_input" id="form_date" name="date" required>
                        </div>
                        <button type="submit" class="button col-1 align-self-end mobile_display_invisible" id="form-button-3"><b>Enviar</b></button>
                    </div>
                    <div class="row py-4 display-invisible mobile_display_visible">
                        <div class="col-2 display-invisible mobile_display_visible"></div>
                        <div class="col-8 display-invisible mobile_display_visible">
                            <label for="form_date">Data e hora</label>
                            <input type="datetime-local" min="2022-08-22 10:00" step="1800" class="form-control form_input" id="mobile-form_date" name="date" required>
                        </div>
                    </div>
                    <div class="row display-invisible mobile_display_visible">
                        <div class="col-2 display-invisible mobile_display_visible"></div>
                        <div class="col-3 display-invisible mobile_display_visible">
                            <button type="submit" class="button align-self-end px-2" id="mobile-form-button-3"><b>Enviar</b></button>
                        </div>
                    </div>

                </div>
            </section>
        </form>
        <section class="display-invisible" id="passear4">
            <div class="pt-5 container form-height">
                <h2 class="text-center font-weight-bold mb-5">Pronto!</h2>
                <div class="d-flex align-items-center justify-content-center pb-5">
                    <div class="circle circle-mobile d-flex justify-content-center align-items-center mobile_display_invisible">
                        <span class="circles-steps-numbers mobile_display_invisible">1</span>
                    </div>
                    <h5 class="px-3 mobile_display_invisible">Suas informações</h5>
                    <hr class="hr mx-3 mobile_display_invisible">
                    <div class="circle circle-mobile d-flex justify-content-center align-items-center mobile_display_invisible">
                        <span class="circles-steps-numbers mobile_display_invisible">2</span>
                    </div>
                    <h5 class="px-3 mobile_display_invisible">Sua localização</h5>
                    <hr class="hr mx-3 mobile_display_invisible">
                    <div class="circle d-flex justify-content-center align-items-center">
                        <span class="circles-steps-numbers">3</span>
                    </div>
                    <h5 class="px-3">Data</h5>
                </div>

                <div class="row py-4">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <img src="img/sucesso.png" alt="sucesso" class="sucess-icon mb-3">
                        <p><b>Entraremos em contato em breve!</b></p>
                    </div>
                </div>
            </div>
        </section>
        <footer id="contato" class="bg-secundary">
            <div class="container py-5">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <div class="position-fixed newsletter-alerta
                        
                        <?php
                        if (isset($_POST['newsletter']) == false) {
                            echo ' display-invisible';
                        };
                        ?>

                        " id="newsletter-alerta">
                            <div class="d-flex justify-content-center">
                                <div class="alert alert-warning text-center" role="alert">
                                    <span>
                                        <?php
                                        if (isset($_POST['newsletter'])) {
                                            $newsletter = clean_input($_POST['newsletter']);
                                            $sql = "INSERT INTO newsletter VALUES(NULL, '$newsletter')";
                                            try {
                                                $mysqli->query($sql);
                                                echo 'Você foi inscrito com sucesso!';
                                            } catch (mysqli_sql_exception $e) {
                                                $MYSQLI_CODE_DUPLICATE_KEY = 1062;
                                                if ($e->getCode() == $MYSQLI_CODE_DUPLICATE_KEY) {
                                                    echo 'E-mail já cadastrado!';
                                                } else {
                                                    throw $e;
                                                }
                                            }
                                        }
                                        $mysqli->close();
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <form action="index.php#contato" method="post">
                            <label for="newsletter">
                                <b">Não perca nossas novidades!</b>
                            </label>
                            <input type="email" class="form-control form_input mb-3 mt-1" id="newsletter" placeholder="E-mail" name="newsletter" required>
                            <button type="submit" class="button px-2 align-self-end" id="btn-newsletter"><b class="text-small">Inscrever-se</b></button>
                        </form>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2">
                        <h5 class="text-center">Siga-nos</h5>
                        <div class="text-center">
                            <a href="https://github.com/NogueiraMatos"><img src="img/facebook.png" alt="facebook" class="social-medias-icons mb-2"></a>
                            <a href="https://github.com/NogueiraMatos"><img src="img/instagram.png" alt="instagram" class="social-medias-icons mb-2"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
    </main>
</body>

</html>