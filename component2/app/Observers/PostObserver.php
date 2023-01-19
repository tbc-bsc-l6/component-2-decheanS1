<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostObserver
{

    private function clearCache()
    {
        // max. page = 100
        for ($i=1; $i <= 100 ; $i++) {
            $key = 'posts-page-'. $i;
            if(Cache::has($key)){
                Cache::forget($key);
            }
            else{
                break;
            }

        }

    }

    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        $this->clearCache();
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        $this->clearCache();
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        $this->clearCache();
    }


}
