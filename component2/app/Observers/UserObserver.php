<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

class UserObserver
{
    private function clearCache()
    {
        // max. page = 100
        // for ($i=1; $i <= 100 ; $i++) {
            $key = 'users-page-';
            if(Cache::has($key)){
                Cache::forget($key);
            }
            // else{
            //     break;
            // }

        // }

    }


    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $this->clearCache();

    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        $this->clearCache();

    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        $this->clearCache();

    }


}
