<?php
namespace App\Controllers;
class StatusKelulusan extends BaseController
{
    public function prosesKelulusan()
    {
        $nama = $this->request->getGet('nama');
        $nim = $this->request->getGet('nim');
        $status = $this->request->getGet('status');
        
        $data['nama'] = $nama;
        $data['nim'] = $nim;
        $data['status'] = $status;

    return view('kelulusan/output', $data);
    }
    public function inputKelulusan()
    {
    return view('kelulusan/index');
    }       
}