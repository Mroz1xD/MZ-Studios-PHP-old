<div class="container">
<p>Nie masz konta? Możesz się zarejestrować-><a href="?a=rejestracja">Zarejestruj się</a></p>
<form class="row g-3 needs-validation" novalidate method="post">
<div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Login</label>
    <input type="text" class="form-control" id="validationCustomUsername" required name="login">
    <div class="valid-feedback">Okej</div>
    <div class="invalid-feedback">Proszę podać nick</div>
</div>

<div class="col-md-4">
    <label for="validationCustom01" class="form-label">Mail</label>
    <input type="text" class="form-control" id="validationCustom01" required name="mail">
    <div class="valid-feedback">Okej</div>
    <div class="invalid-feedback">Proszę podać mail</div>
</div>

<div class="col-md-4">
    <label for="validationCustom01" class="form-label">Hasło</label>
    <input type="password" class="form-control" id="validationCustom01" required name="haslo">
    <div class="valid-feedback">Okej</div>
    <div class="invalid-feedback">Proszę podać hasło</div>
</div>

<div class="col-12">
<button class="btn btn-primary" type="submit" name="zal">Zaloguj się</button>
</div>
</form> 
</div>
<?php

if( isset($_POST['zal']) && isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['haslo']) ){
    $sql = "SELECT login, haslo FROM uzytkownicy WHERE login = '{$_POST['login']}' AND haslo = '{$_POST['haslo']}'";
    $sts = $PDO->prepare($sql);
    $sts->execute();
    
}

?>