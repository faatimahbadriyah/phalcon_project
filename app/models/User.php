<?php
class User extends \Phalcon\Mvc\Model
{
	public $id; 
	public $nama_user; 
	public $email_user;
	public $id_kelas; 

	public function initialize()
    {
        $this->belongsTo(
            'id_kelas',
            'Kelas',
            'id_kelas'
        );
    }
}