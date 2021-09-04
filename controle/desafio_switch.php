<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > MILHA</option>
        <option value="milha-km">MILHA > KM</option>
        <option value="metro-km">METRO > KM</option>
        <option value="km-metro">KM > METRO</option>
        <option value="celsius-fh">ºCELSIUS > FAHRENHEIT</option>
        <option value="fh-celsius">FAHRENHEIT >ºCELSIUS</option>
        <input type="submit">
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php
$conversor = $_POST['conversao'] ?? 0;
$param = $_POST['param'] ?? 0;
$convertido = 0;
$unidadeEntrada='KM(s)';
$unidadeSaida='Milha(s)';
const FATOR_KM_MILHA = 1.609;
const FATOR_METRO_KM = 1000;
const FATOR_C_F=1.8;

switch($conversor){

    case'km-milha':
        $convertido = $param/ FATOR_KM_MILHA ;
        $unidadeEntrada='KM(s)';
        $unidadeSaida='Milha(s)';
        break;

    case'milha-km':
        $convertido = $param * FATOR_KM_MILHA ;
        $unidadeEntrada='Milha(s)';
        $unidadeSaida='KM(s)';
        break;

    case'metro-km':
        $convertido = $param/FATOR_METRO_KM;
        $unidadeEntrada='Metro(s)';
        $unidadeSaida='KM(s)';
        break;

    case'km-metro':
        $convertido = $param * FATOR_METRO_KM;
        $unidadeEntrada='KM(s)';
        $unidadeSaida='Metro(s)';
        break;
    case'celsius-fh':
        $convertido = ($param * FATOR_C_F) + 32;
        $unidadeEntrada='ºC';
        $unidadeSaida='ºF';
        break;
    case'fh-celsius':
        $convertido = ($param - 32) * (1/FATOR_C_F);
        $unidadeEntrada='ºF';
        $unidadeSaida='ºC';
        break;
    default:
        echo 'Nenhum valor calculado!';
        break;
}

if($convertido != 0)
echo "$param $unidadeEntrada equivale a $convertido $unidadeSaida";

?>