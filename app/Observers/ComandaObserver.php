<?php

namespace App\Observers;

use App\Models\Comanda;

class ComandaObserver
{
    /**
     * Handle the Comanda "created" event.
     */
    public function created(Comanda $comanda): void
    {
         // Ao criar uma comanda, atualize o status da mesa para 'ocupado'
         $mesa = $comanda->mesa;
// dd($mesa);
         if ($mesa) {
            $mesa->status = 'ocupado';
            $mesa->save();
         }else{
            $mesa->status = 'disponivel';
            $mesa->save();
         }
    }

    /**
     * Handle the Comanda "updated" event.
     */
    public function updated(Comanda $comanda): void
    {
        //
    }

    /**
     * Handle the Comanda "deleted" event.
     */
    public function deleted(Comanda $comanda): void
    {
        //
    }

    /**
     * Handle the Comanda "restored" event.
     */
    public function restored(Comanda $comanda): void
    {
        //
    }

    /**
     * Handle the Comanda "force deleted" event.
     */
    public function forceDeleted(Comanda $comanda): void
    {
        //
    }
}
