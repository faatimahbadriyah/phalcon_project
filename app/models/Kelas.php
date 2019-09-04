<?php
class Kelas extends \Phalcon\Mvc\Model
{
	public $id_kelas; 
	public $nama_kelas; 

	public function initialize()
    {
        $this->hasMany(
            'id_kelas',
            'User',
            'id_kelas'
        );
    }
}