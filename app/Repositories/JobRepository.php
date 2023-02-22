<?php


namespace App\Repositories;


use App\Models\Job;
use App\Traits\UploadFiles;

class JobRepository
{
 use UploadFiles;
    public function all()
    {
       return Job::all();

    }

    public  function store( $data)
    {

        if($data->hasFile('file'))
        {
            $data['image']=$this->upload($data);
        }
//        dd($data->all());
          Job::create($data->all());
    }
}
