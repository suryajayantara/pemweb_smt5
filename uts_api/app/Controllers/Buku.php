<?php

namespace App\Controllers;

use App\Models\Buku as ModelsBuku;
use CodeIgniter\RESTful\ResourceController;

class Buku extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

     protected $modelName = 'App\Models\Buku';
     protected $format = 'json';

    function __construct()
    {
        $this->buku = new ModelsBuku();
    }

    public function index()
    {
        $data['buku'] = $this->buku->findAll();
        return view('buku/index',$data);
        // dd($data);
        
        // If Using API
        // return $this->respond($this->buku->findAll());
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('buku/add');
       
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function store()
    {
        try {

            if(!$this->validate([
                'kd_buku' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Harus di Isi !'
                    ]
                ],
                'judul_buku' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul Buku Harus di Isi !'
                    ]
                ],
                'penulis' =>[
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Penulis Harus di Isi !'
                    ]
                ],
                'penerbit' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Penerbit Harus di Isi !'
                    ]
                ],
                'tahun_terbit' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tahun Terbit Harus di Isi !'
                    ]
                ],
                'harga' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga Harus di Isi !'
                    ]
                ],
            ])){
                session()->setFlashdata('error',$this->validator->listErrors());
                return redirect()->back();
            }

            $query = $this->buku->insert([
                'kd_buku' => $this->request->getVar('kd_buku'),
                'judul_buku' => $this->request->getVar('judul_buku'),
                'penulis' => $this->request->getVar('penulis'),
                'penerbit' => $this->request->getVar('penerbit'),
                'tahun_terbit' => $this->request->getVar('tahun_terbit'),
                'harga' => $this->request->getVar('harga'),
            ]);
            if($query){
                
                // // Api Mode
                // $this->respondCreated([
                //     'status' => '200'
                // ],'Data Berhasil di Masukan');    
                return redirect()->to('/buku');
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id)
    {
        $data['buku'] = $this->buku->where('kd_buku', $id)->first();
        return view('buku/edit',$data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id)
    {
        try {
            $query = $this->buku->update($id,[
                'kd_buku' => $this->request->getVar('kd_buku'),
                'judul_buku' => $this->request->getVar('judul_buku'),
                'penulis' => $this->request->getVar('penulis'),
                'penerbit' => $this->request->getVar('penerbit'),
                'tahun_terbit' => $this->request->getVar('tahun_terbit'),
                'harga' => $this->request->getVar('harga'),
            ]);
            if($query){
                
                // // Api Mode
                // $this->respondCreated([
                //     'status' => '200'
                // ],'Data Berhasil di Masukan');    
                return redirect()->to('/buku');
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function delete($kd_buku)
    {
        // Check
        $check = $this->buku->where('kd_buku',$kd_buku);
        if(empty($check)){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak Ditemukan');
        };


        $this->buku->where('kd_buku', $kd_buku)->delete();
        return redirect()->to('/buku');
    }
}
