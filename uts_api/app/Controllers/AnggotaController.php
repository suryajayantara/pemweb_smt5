<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Anggota;

class AnggotaController extends BaseController
{
    protected $anggota;

    function __construct()
    {
        $this->anggota = new Anggota();
    }

    public function index()
    {
        $data['anggota'] = $this->anggota->findAll();
        return view('anggota/index',$data);
    }

    public function create(){
        return view('anggota/create');
    }

    public function store()
	{
        if (!$this->validate ([
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} Harus diisi']
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} Harus diisi']
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} Harus diisi']
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid' ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi']
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi']
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} Harus diisi']	
            ],
            
        ]))	{
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }	
            
        $this->anggota->insert([
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'email' => $this->request->getVar('email'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('message', 'Tambah Data anggota Berhasil');
        return redirect()->to('/anggota');
	}
	
	public function edit($id)
	{
        $dataAnggota = $this->anggota->find($id);
        if (empty($dataAnggota)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data anggota Tidak ditemukan !');
        }
        $data['anggota'] = $dataAnggota;
        return view('anggota/edit', $data);
	}
	
	public function update($id)
	{
        if (!$this->validate([
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => '{field} Harus diisi'
                ]
        ],
        'tempat_lahir' => [
            'rules' => 'required',
            'errors' => [
                'required' => '{field} Harus diisi'
                ]
        ],
        'tanggal_lahir' => [
            'rules' => 'required',
            'errors' => [
                'required' => '{field} Harus diisi'
                ]
        ],
        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => '{field} Harus diisi',
                'valid_email' => 'Email Harus Valid'
                ]
        ],
        'jenis_kelamin' => [
            'rules' => 'required',
            'errors' => [
                'required' => '{field} Harus diisi'
                ]
        ],
        'no_telp' => [
            'rules' => 'required',
            'errors' => [
                'required' => '{field} Harus diisi'
                ]
		],
		'alamat' => [
		    'rules' => 'required',
		    'errors' => [
		        'required' => '{field} Harus diisi'
		        ]
		],
		
		])) {
		session()->setFlashdata('error', $this->validator->listErrors());
		return redirect()->back();
		}
		
		$this->anggota->update($id, [
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'email' => $this->request->getVar('email'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat')
		]);

		session()->setFlashdata('message', 'Update Data Anggota Berhasil');
		return redirect()->to('/anggota');
	}	
		
	function delete($id)
	{
		$dataAnggota = $this->anggota->find($id);
		if (empty($dataAnggota)) {
		    throw new \CodeIgniter\Exceptions\PageNotFoundException('Data anggota Tidak ditemukan !');
        }
		$this->anggota->delete($id);
		session()->setFlashdata('message', 'Delete Data Anggota Berhasil');
		return redirect()->to('/anggota');
	}
}
