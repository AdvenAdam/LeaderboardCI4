<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
	protected $table                = 'tbl_siswa';
	protected $allowedFields        = ['nim', 'nama', 'kelas', 'email', 'no_hp', 'alamat', 'nilai', 'foto'];
	protected $useTimestamps        = true;

	public function getSiswa($nim = false)
	{
		if ($nim == false) {
			return $this->findAll();
		}
		return $this->where(['nim' => $nim])->first();
	}

	public function getPeringkat()
	{
		return $this->orderBy('nilai', 'DESC')->findAll();
	}
}
