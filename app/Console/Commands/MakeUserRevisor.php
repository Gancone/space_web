<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-user-revisor {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rende un utente revisore';

    /**
     * Execute the console command.
     */
    public function handle() //funzione vera e propria del comando che stiamo creando
    {
        //ricerca utente per email
        $user = User::where('email', $this->argument('email'))->first();
        // condizione di errore in caso non esistesse l'utente
        if (!$user) {
            $this->error('Utente non trovato');
            return;
        }
        // in caso di utente esistente impostalo come revisore
        $user->is_revisor = true;
        $user->save();
        $this->info("L'utente {$user->name} è ora revisore");
    }
}
