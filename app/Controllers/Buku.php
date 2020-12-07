<?php namespace App\Controllers;
use \App\Models\Bukumodel;

class Buku extends BaseController
{
    protected $bukuModel;
    protected $buku;
    public function __construct(){
        $this->bukuModel = new Bukumodel();

    }
	public function index()
	{
        $buku =$this->bukuModel->findAll();
        $data=[
            'title'=>'Daftar buku',
            'buku'=>$buku
        ];
       
               


        echo view('layout/header',$data);
        echo view('layout/navbar');
        echo view('obat/index',$data);
        echo view('layout/footer');
    }
    
    public function create()
	{
        session();
        $data=[
            'title'=>'Daftar buku',
        ];
       
        echo view('layout/header',$data);
        echo view('obat/create',$data);
        echo view('layout/footer');
	}
    public function save()
	{   

    
        if(!$this->validate([
            'nomor'=>'required|is_unique[buku.nomor]',
            'nama'=>'required|is_unique[buku.nama]',
            'stok'=>'required',
            'penerbit'=>'required',
            'deskripsi'=>'required'
            

        ])){
            return redirect()->to('/buku/create')->withInput();

        }
       $this->bukuModel->save([
           'nomor'=>$this->request->getVar('nomor'),
           'nama'=>$this->request->getVar('nama'),
           'stok'=>$this->request->getVar('stok'),
           'penerbit'=>$this->request->getVar('penerbit'),
           'deskripsi'=>$this->request->getVar('deskripsi'),
       ]);
       
       return redirect()->to('/buku');
	}

    public function delete($id)
    {   $this->bukuModel->delete($id);
        return redirect()->to('/buku');
      

    }

    public function edit($id){
        session();
        $data=[
            'title'=>'Form Edit Buku',
             'id'=>'$id'
            
        ];
       
        echo view('layout/header',$data);
        echo view('obat/edit',$data);
        echo view('layout/footer');

    }
    public function update($id){
        $this->bukuModel->save([

            'id'=>$this->request->getVar('id'),
            'nomor'=>$this->request->getVar('nomor'),
            'nama'=>$this->request->getVar('nama'),
            'stok'=>$this->request->getVar('stok'),
            'penerbit'=>$this->request->getVar('penerbit'),
            'deskripsi'=>$this->request->getVar('deskripsi'),
        ]);
    }
}
