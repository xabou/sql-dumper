<?php

namespace Xabou\SqlDumper;

class SqlDumper
{
    /**
     * Display executed SQL for current page.
     *
     * @return void
     */
    public function render()
    {
        if ( ! config('sql-dumper.enabled')) {
            return;
        }

        \DB::listen(function ($query) {
            // Insert bindings into query
            $queryFormatted = str_replace(['%', '?'], ['%%', '%s'], $query->sql);
            $queryFormatted = vsprintf($queryFormatted, $query->bindings) . ' time: ' . $query->time;
            dump($queryFormatted);
        });
    }

}