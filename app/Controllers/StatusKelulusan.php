<?php
namespace App\Controllers;
class StatusKelulusan extends BaseController
{
    public function prosesKelulusan()
    {
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $status = $this->request->getPost('status');
        
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