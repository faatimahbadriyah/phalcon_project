<?php
class KelasController extends ControllerBase
{

    public function indexAction()
    {
  
    }

    public function createAction()
    {
	    $kelas = new Kelas();
	    $kelas->nama_kelas = $this->request->getPost("txt_nama_kelas");
	    if (!$kelas->save()) {
	 	   echo "Gagal Disimpan";
	    } else {
	    	echo "Data Berhasil Disimpan";
	    }
    }

    public function viewDataAction()
    {
	    $kelas = Kelas::find();
	    $this->view->data=$kelas;
    }

    public function editAction($id)
	{
	    $kelas = Kelas::findFirstByidKelas($id);
	    $this->view->id = $kelas->id_kelas;
	    $this->view->nama = $kelas->nama_kelas;
	}

	public function updateAction()
    {
	 	$id = $this->request->getPost("txt_id");
	  	$kelas = Kelas::findFirstByidKelas($id);
	    $kelas->nama_kelas = $this->request->getPost("txt_nama_kelas");
		if (!$kelas->save()) {
		   echo "Gagal Disimpan";
		} else {
		   echo "Data Berhasil Diupdate";
		}
    }
 	
 	public function hapusAction($id)
	{
		$kelas = Kelas::findFirstByidKelas($id);
		  
		if (!$kelas->delete()) {
			echo "Gagal Hapus Data";
		} else {
		   echo "Berhasil Hapus Data";
	    }
	}
}