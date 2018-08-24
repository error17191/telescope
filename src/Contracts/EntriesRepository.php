<?php

namespace Laravel\Telescope\Contracts;

interface EntriesRepository
{
    /**
     * Return all the entries of a given type.
     *
     * @param  int $type
     * @return \Illuminate\Support\Collection
     */
    public function all($type);

    /**
     * Return an entry with the given ID.
     *
     * @param  integer $id
     * @return mixed
     */
    public function find($id);

    /**
     * Store the given entries.
     *
     * @param  array $data
     * @return mixed
     */
    public function store($data);
}