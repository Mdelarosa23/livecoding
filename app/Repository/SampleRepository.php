<?php

namespace App\Repository;

use App\Models\Sample;

class SampleRepository implements SampleRepositoryInterface {
    public function all() {
        return Sample::all();
    }

    public function find($id) {
        return Sample::find($id);
    }

    public function create($data) {
        return Sample::create($data);
    }

    public function update($id, $data) {
        $sample = Sample::findOrFail($id);
        $sample->update($data);
        return $sample;
    }

    public function delete($id) {
        return Sample::destroy($id);
    }

}