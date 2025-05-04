<?php
include('../app/config/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include ('../layout/head.php');?>
    <title>Sistema de Farmácia - Cadastro de Usuário</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include('../layout/menu.php');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                SISTEMA DE FARMÁCIA - CADASTRO DE USUÁRIOS
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Cadastro de Usuários
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="controller_create.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nome:</label>
                                            <input type="text" class="form-control" name="nome">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Apelido Paterno:</label>
                                            <input type="text" class="form-control" name="ap_paterno">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Apelido Materno:</label>
                                            <input type="text" class="form-control" name="ap_materno">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Rg:</label>
                                            <input type="text" class="form-control" name="rg">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cpf:</label>
                                            <input type="text" class="form-control" name="cpf">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Data Nascimento:</label>
                                            <input type="date" class="form-control" name="data_nasc">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cargo:</label>
                                            <select name="cargo" id="" class="form-control">
                                                <option value="Engenheiro de Sistemas">Engenheiro de Sistemas</option>
                                                <option value="Analista de Software">Analista de Software</option>
                                                <option value="Analista de Requisitos">Analista de Requisitos</option>
                                                <option value="Analista de Ti">Analista de Ti</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Diretor">Diretor</option>
                                                <option value="Supervisor">Supervisor</option>
                                                <option value="Programador">Programador</option>
                                                <option value="Funcionário">Funcionário</option>
                                                <option value="Digitador">Digitador</option>
                                                <option value="Vendedor">Vendedor</option>
                                                <option value="Operador">Operador</option>
                                                <option value="Enc. Armazens">Enc. Armazens</option>
                                                <option value="Enc. Estoque">Enc. Estoque</option>
                                                <option value="">Contador</option>
                                                <option value="Auxiliar Administrativo">Auxiliar Administrativo</option>
                                                <option value="Auxiliar">Auxiliar</option>
                                                <option value="Usuário Comum">Usuário Comum</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pais:</label>
                                            <select name="pais" id="" class="form-control">
                                                <option value="Brasil">Brasil</option>
                                                <option>select country</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia">Bosnia</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet">Bouvet</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British">British</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cabo Verde">Cabo Verde</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Caribbean">Caribbean</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="Central African">Central African</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos">Cocos</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaçao">Curaçao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Eswatini (Swaziland)">Eswatini (Swaziland)</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, North">Korea, North</option>
                                                <option value="Korea, South">Korea, South</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia North">Macedonia North</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Estado:</label>
                                            <input type="text" class="form-control" name="estado">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Cep:</label>
                                            <input type="text" class="form-control" name="cep">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Celular:</label>
                                            <input type="text" class="form-control" name="celular">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Email:</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>

                                        <!--/.form-Lado A -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Senha:</label>
                                            <input type="password" class="form-control" name="senha">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Confirmar Senha:</label>
                                            <input type="password" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Usuário Criador:</label>
                                            <input type="text" class="form-control" name="user_criador ">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Usuário Atualização:</label>
                                            <input type="text" class="form-control" name="user_atualizacao">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Usuário Exclusão:</label>
                                            <input type="text" class="form-control" name="user_exclusao">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Data Criação:</label>
                                            <input type="date" class="form-control" name="data_criacao">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Data Atualização:</label>
                                            <input type="date" class="form-control" name="data_atualizacao">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Data Exclusão:</label>
                                            <input type="date" class="form-control" name="data_exclusao">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto Perfil:</label>
                                            <input type="file" class="form-control" id="file" name="">
                                            <output id="list" style="margin-top: 0px"></output>
                                        </div>

                                        <!--/.form-Lado B -->
                                    </div>
                                </div>
                                <div class="row">
                                    <br><br>
                                    <div class="col-md-12">
                                        <center>
                                            <a href="" class="btn btn-default btn-lg">Cancelar Cadastro</a>
                                            <input type="submit" class="btn btn-primary btn-lg" value="Cadastrar Usuário">
                                        </center>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('../layout/footer.php');?>
</div>
<!-- ./wrapper -->
<?php include('../layout/footer_links.php');?>
</body>
</html>
<script>
    function archivo(evt) {
        var files = evt.target.files; // FileList object
        // Obtenemos la imagen del campo "file".
        for (var i = 0, f; f = files[i]; i++) {
            //Solo admitimos imágenes.
            if (!f.type.match('image.*')) {
                continue;
            }
            var reader = new FileReader();
            reader.onload = (function (theFile) {
                return function (e) {
                    // Insertamos la imagen
                    document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="200px" title="', escape(theFile.name), '"/>'].join('');
                };
            })(f);
            reader.readAsDataURL(f);
        }
    }
    document.getElementById('file').addEventListener('change', archivo, false);
</script>
