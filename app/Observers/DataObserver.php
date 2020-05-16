<?php

namespace App\Observers;

use App\Data;
use App\Services\CoefficientValueService;

class DataObserver
{

    public function creating(Data $data)
    {
        $nilaiKoefisien = new CoefficientValueService();

        $data['jaccard'] = $nilaiKoefisien->jaccard($data->tt, $data->jd);
        $data['cosine_similarity'] = $nilaiKoefisien->cosine($data->tt, $data->jd);
        $data['euclidean_distance'] = $nilaiKoefisien->euclidean($data->tt, $data->jd);
        $data['manhattan'] = $nilaiKoefisien->manhattan($data->tt, $data->jd);
    }

    public function updating(Data $data)
    {
        $nilaiKoefisien = new CoefficientValueService();

        $data['jaccard'] = $nilaiKoefisien->jaccard($data->tt, $data->jd);
        $data['cosine_similarity'] = $nilaiKoefisien->cosine($data->tt, $data->jd);
        $data['euclidean_distance'] = $nilaiKoefisien->euclidean($data->tt, $data->jd);
        $data['manhattan'] = $nilaiKoefisien->manhattan($data->tt, $data->jd);
    }
}
