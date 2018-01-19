<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call('NotificacoesTableSeeder');
    }
 }   

Class NotificacoesTableSeeder extends Seeder {
	public function run(){		
      DB::insert('insert into notificacoes (municipio,nome_soli,local,referencia,nome_paci,zona,telefone) values(?,?,?,?,?,?,?)', array('Teresina','Gabriel Coêlho de Lima','baixão','logo ali','poseidon','Urbana','(89)994175544'));

    }
}

