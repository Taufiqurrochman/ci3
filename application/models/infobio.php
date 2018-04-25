<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infobio extends CI_Model {
	public function getData(){
		$data = array(
			'kontak' => array('alamat' => "Kediri Jawa Timur", 'email' => "urrochman.t@gmail.com", 'telp' =>"+6285708970676"),
			'nama' => "Taufiqurrohman",
			'biodata' => "<p>Nama Saya adalah Taufiqurrochman, saya merupakan mahasiswa Teknik Software Enginering, saat ini saya sedang memulai studi di Politaknik Negeri Malang</p>
          <p>Selain belajar saya juga mempunyai hobi, hobi saya adalah bermain game</p>"
		);
		return $data;
	}
}

/* End of file infobio.php */
/* Location: ./application/models/infobio.php */
