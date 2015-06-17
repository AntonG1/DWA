<?php


require_once 'bootstrap.php';

session_start();
/*
$authenticate = function ($app) {
    return function () use ($app) {
        if (!isset($_SESSION['user'])) {
            
            $app->redirect('login');
        }
    };
};*/

$authenticate = function ($app) {
    return function () use ($app) {
        if (!isset($_SESSION['myusername'])) {
            $_SESSION['urlRedirect'] = $app->request()->getPathInfo();
            $app->flash('error', 'Login required');
            $app->redirect($app->urlFor('login'));
        }
    };
};
/*
$app->get('/', $authenticate($app), function () use ($app) {
    
   
    require_once "logic/basePage.php";
    
    $app->render('basePage');
})->name('basePage');

*/
$app->hook('slim.before.dispatch', function () use ($app) {
    $user = null;
    if (isset($_SESSION['myusername'])) {
        $user = $_SESSION['myusername'];
    }
    $app->view()->setData('user', $user);
});

$app->get('/', function() use ($app) {
	if(isset($_SESSION['myusername'])){
    $app->view()->setData('uname', $_SESSION['myusername']);
	$app->render('basePage');
}
else {
$app->redirect('login');
}	
});

$app->get('/login', function () use ($app) {
    $app->render('login');
})->name('login');

$app->post('/view/ispisStranice/', function() use ($app) {
    $naziv = $app ->request() ->post('naziv');
    $tip = $app ->request() ->post('tip');
    $opis = $app ->request() ->post('opis');
	$vegetarijanski = $app ->request() ->post('vegetarijanski');
    $halal = $app ->request() ->post('halal');
    $koser = $app ->request() ->post('koser');
    $soja = $app ->request() ->post('soja');
    $jaja = $app ->request() ->post('jaja');
	$kikiriki = $app ->request() ->post('kikiriki');
    $mlijeko = $app ->request() ->post('mlijeko');
	$rakovi = $app ->request() ->post('rakovi');
    $skoljke = $app ->request() ->post('skoljke');
    $orasasti =  $app ->request() ->post('orasasti');
	$jagoda =  $app ->request() ->post('jagoda');
	$kivi =  $app ->request() ->post('kivi');
    $ananas =  $app ->request() ->post('ananas');
    $cijena =  $app ->request() ->post('cijena');
    
    $alergeni = $soja. '' .$jaja. '' .$kikiriki. '' .$mlijeko. '' .$rakovi. '' .$skoljke. '' .$orasasti. '' .$jagoda. '' .$kivi. '' .$ananas;
    
    $app->view()->setData(array('Naziv_proizvoda' =>$naziv, 'Tip_proizvoda' =>$tip, 'Opis_proizvoda' =>$opis, 'Vegetarijanski' => $vegetarijanski, 'Halal' => $halal, 'Košer'=>$koser,'Alergeni'=>$alergeni , 'Cijena' => $cijena));
    
    include_once('logic/idiormUse.php');
    
    $ubaci = ORM::for_table('proizvodi')->create();
    $ubaci -> Naziv_proizvoda = $naziv;
    $ubaci -> Tip_proizvoda = $tip;
    $ubaci -> Opis_proizvoda = $opis;
    $ubaci -> Vegetarijanski = $vegetarijanski;
    $ubaci -> Halal = $halal;
    $ubaci -> Košer = $koser;
	$ubaci -> Alergeni = $alergeni;
    $ubaci -> Cijena = $cijena;
    
    $ubaci -> save();
	
	if (isset($_SESSION['myusername'])) {
        $user = $_SESSION['myusername'];
    }
    $app->view()->setData('myusername', $user);
    
    $app->render('ispisStranice');	
});


$app->run();
