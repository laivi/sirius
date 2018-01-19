<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class notificacoes extends Model
{
    use SyncsWithFirebase;

    protected $visible = ['municipio','nome_soli','local','referencia','nome_paci','zona','telefone','tipo'];

    
}
