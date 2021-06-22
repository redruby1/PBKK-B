<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MMhs;

class CMhs extends BaseController
{
	public function index()
    {
        $mhs = new MMhs();
        $data['mhs'] = $mhs->findAll();

		echo view('list_mhs', $data);

    }

    public function create()
    {
		$validation =  \Config\Services::validation();
        $validation->setRules([
            'nrp' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            $mhs = new MMhs();
            $mhs->insert([
                "nrp" => $this->request->getPost('nrp'),
                "nama" => $this->request->getPost('nama'),
                "jurusan" => $this->request->getPost('jurusan'),
                "alamat" => $this->request->getPost('alamat'),
                "no_telepon" => $this->request->getPost('no_telepon')
            ]);
            return redirect('list-mhs');
        }
        
        echo view('add_mhs');
    }

    public function delete($id)
    {
        $mhs = new MMhs();
        $mhs->delete($id);

        return redirect('list-mhs');
    }

    public function edit($id)
    {
        $mhs = new MMhs();
		$data['mhs'] = $mhs->where('id', $id)->first();

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nrp' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            $mhs->update($id, [
                "nrp" => $this->request->getPost('nrp'),
                "nama" => $this->request->getPost('nama'),
                "jurusan" => $this->request->getPost('jurusan'),
                "alamat" => $this->request->getPost('alamat'),
                "no_telepon" => $this->request->getPost('no_telepon')
            ]);
            return redirect('list-mhs');
        }

        echo view('edit_mhs', $data);
    }
}
