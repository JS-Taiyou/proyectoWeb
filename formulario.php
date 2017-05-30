<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 id="titulo">Datos Generales</h2>
        </div>
        <div class="panel-body">
            <form id="formulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" novalidate>


                <fieldset class="form-group pagina0">
                    <div class="input-group" id="r">
                            <label class="radio-inline"><input type="checkbox" name="registrado" id="reg" value="true">Ya estoy registrado</label>
                    </div>
                    <label for="nombre">Nombre Completo</label>
                    <div class="input-group">
                        <input pattern="[A-ZÁÉÍÓÚÑ\s]+" type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div id="curp">
                        <label for="curp">CURP</label>
                        <div class="input-group">
                            <input id="curp" name="curp" class="form-control" pattern="[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}" type="text">
                            <button class="btn btn-primary pull-right" id="buscar">Buscar</button>
                        </div>
                    </div>

                    <label>Sexo</label>
                    <div class="input-group">
                        <div class="radio">
                            <label class="radio-inline"><input type="radio" id="m" name="genero">Masculino</label>
                        </div>
                        <div class="radio">
                            <label class="radio-inline"><input type="radio" id="f" name="genero">Femenino</label>
                        </div>
                    </div>
                    <label for="nacionalidad">Nacionalidad</label>
                    <div class="input-group">
                        <input name="nacionalidad" type="text" class="form-control" id="nacionalidad" pattern="[A-ZÁÉÍÓÚ]">
                    </div>
                    <br><span class="h4">Domicilio Completo</span><br>
                    <label for="pais">País</label>
                    <div class="input-group">
                        <select class="form-control" id="pais" name="pais">
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia, Plurinational State of</option>
                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Côte d'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curaçao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and McDonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Réunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthélemy</option>
                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin (French part)</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten (Dutch part)</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.S.</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>
                    <label for="calle">Calle</label>
                    <div class="input-group">
                        <input id="calle" name="calle" type="text">
                    </div>
                    <label for="colonia">Colonia</label>
                    <div class="input-group">
                        <input type="text" id="colonia" name="colonia">
                    </div>
                    <label for="estado">EstadoL</label>
                    <div class="input-group">
                        <input type="text" id="estado" name="estado">
                    </div>
                    <label for="cp">Código postal</label>
                    <div class="input-group">
                        <input type="text" id="cp" name="cp">
                    </div>
                    <label for="delegacion">Delegación</label>
                    <div class="input-group">
                        <input type="text" id="delegacion" name="dlegacion">
                    </div>
                    <label for="estadoCivil">Estado Civil</label>
                    <div class="input-group">
                        <div class="radio" id="estadoCivil">
                            <label class="radio-inline"><input type="radio" name="estadocivil">Soltero</label>
                        </div>
                        <div class="radio">
                            <label class="radio-inline"><input type="radio" name="estadocivil">Casado</label>
                        </div>
                        <div class="radio">
                            <label class="radio-inline"><input type="radio" name="estadocivil">Otro</label>
                        </div>
                    </div>
                    <label for="edad">Edad</label>
                    <div class="input-group">

                        <select class="form-control" id="edad">
                            <?php

                            for ($i = 1; $i <= 100; $i++) {
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <label for="telefono">Teléfono</label>
                    <div class="input-group">
                        <input type="tel" id="telefono">
                    </div>
                    <label for="mail">Correo Electrónico</label>
                    <div class="input-group">
                        <input id="mail" type="email">
                    </div>
                </fieldset>



                <fieldset class="form-group pagina1 hidden">
                    <label for="enf">Alergia a Medicamentos:</label><br>
                    <div class="input-group">
                        <div class="radio">
                            <label class="radio-inline"><input type="radio" name="alerg" id="1">Sí</label>
                        </div>
                        <div class="radio">
                            <label class="radio-inline"><input type="radio" name="alerg" id="0">No</label>
                        </div>
                    </div>
                    <div id="alergia" style="display: none" class="input-group">
                        <input type="text" placeholder="Favor de indicar alergias" name="alerg"></div>

                    <label for="enf">Enfermedad:</label>
                    <div class="input-group">
                        <select class="form-control" id="enf" name="enfermedad">
                            <option value="" selected="selected">- seleccione -</option>
                            <option value="d">Diabetes</option>
                            <option value="h">Hipertensión</option>
                            <option value="a">Asma</option>
                        </select>
                    </div>
                    <div id="emblact">
                        <label for="emb">Embarazo/lactancia:</label>
                        <div class="input-group">
                            <select class="form-control" id="emb" name="embarazo">
                                <option value="n" selected >Ninguno</option>
                                <option value="e">Embarazo</option>
                                <option value="l">Lactancia</option>
                            </select>
                        </div>
                    </div>

                </fieldset>


                <fieldset class="form-group pagina2 hidden">

                    <label> Personas que dependen económicamente de usted:</label>
                    <div class="input-group">
                        <input type="radio" name="personas" value="1"> 1 a 2<br>
                        <input type="radio" name="personas" value="2"> 2 a 4<br>
                        <input type="radio" name="personas" value="3"> Más de 4<br>
                        <input type="radio" name="personas" value="4"> Ninguna<br>
                    </div>

                    <!-- opcion 1	 -->
                    <label for="medicamento">Medicamento solicitado</label>
                    <div class="input-group">
                        <select class="form-control" id="diabetes" name="diabMed">
                            <option value="1">Glucopha</option>
                            <option value="2">Insulina</option>
                        </select>
                    </div>

                    <!-- opcion 2	 -->
                    <div class="input-group">
                        <select class="form-control" id="hipert" name="hipertMed">
                            <option value="1">Clorotiacida</option>
                            <option value="2">Hidroclorotiacida</option>
                        </select>
                    </div>

                    <!-- opcion 3 -->
                    <div class="input-group">
                        <select class="form-control" id="asma" name="asmaMed">
                            <option value="1">Albutero</option>
                            <option value="2">Sambutamol</option>
                        </select>
                    </div>


                    <br>
                    <div class="input-group">
                        <label class="">Monto de ingresos:</label><br>
                        <input type="radio" name="ingresos" value="1"> 1 a $5,000<br>
                        <input type="radio" name="ingresos" value="2"> $5,000 a $10,000<br>
                        <input type="radio" name="ingresos" value="3"> $10,0000 a $20,000<br>
                        <input type="radio" name="ingresos" value="4"> Más de $20,000<br>
                    </div>
                </fieldset>

            </form>

            <button class="btn btn-primary pull-right" id="siguiente">Siguiente</button>
            <button class="pull-left btn btn-primary hidden" id="anterior">Anterior</button>
            <button form="formulario" class="btn btn-primary pull-right hidden" id="guardar">Guardar</button>
        </div>
    </div>
</div>
</body>

<script type="text/javascript" src="comportamiento_form.js"></script>

</html>


