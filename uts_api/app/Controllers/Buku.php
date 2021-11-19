<?php

namespace App\Controllers;

use App\Models\Buku as ModelsBuku;
use CodeIgniter\RESTful\ResourceController;

class Buku extends ResourceController
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
        // $data['buku'] = $this->buku->findAll();
        // return view('buku/index',$data);
        // return view('buku/add');
        // dd($data);
        
        return $this->respond($this->buku->findAll());
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
       
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        try {
            $query = $this->buku->insert([
                'kd_buku' => $this->request->getVar('kd_buku'),
                'judul_buku' => $this->request->getVar('judul_buku'),
                'penulis' => $this->request->getVar('penulis'),
                'penerbit' => $this->request->getVar('penerbit'),
                'tahun_terbit' => $this->request->getVar('tahun_terbit'),
                'harga' => $this->request->getVar('harga'),
            ]);
            if($query){
                $this->respondCreated([
                    'status' => '200'
                ],'Data Berhasil di Masukan');
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
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
