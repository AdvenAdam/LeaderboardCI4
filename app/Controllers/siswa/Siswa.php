<?php

namespace App\Controllers\siswa;

use App\Controllers\BaseController;
use App\Models\SiswaModel;


class Siswa extends BaseController
{
	protected $siswaModel;
	public function __construct()
	{
		$this->siswaModel = new SiswaModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Halaman Siswa',
			'siswa' => $this->siswaModel->getSiswa(),
		];

		return view('siswa/index', $data);
	}
	public function input()
	{
		$data = [
			'title' => 'Halaman Input',
			'validation' =>  \Config\Services::validation(),
		];
		return view('siswa/input', $data);
	}
	public function save()
	{
		if (!$this->validate([
			'nim' => [
				'rules' => 'required|is_unique[tbl_siswa.nim]',
				'errors' => [
					'required' => '{field} Harus Diisi',
					'is_unique' => '{field} Sudah Ada'
				]
			],
			'nama' => [
				'rules' => 'required',
			],
			'kelas' => [
				'rules' => 'required',
			],
			'email' => [
				'rules' => 'required',
			],
			'no_hp' => [
				'rules' => 'required',
			],
			'alamat' => [
				'rules' => 'required',
			],
			'foto' => [
				'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,1024]',
				'errors' => [
					'is_image' => 'File yang diupload bukan file gambar',
					'max_size' => 'File yang anda pilih terlalu besar',
					'is_mime'  => 'File yang diupload bukan file gambar',
				]
			],
		])) {
			return redirect()->to('/siswa/input')->withInput();
		}
		// if ($fileFoto->hasFile())
		$fileFoto = $this->request->getFile('foto');
		if ($fileFoto->getError() == 4) {
			$namaFoto = 'default.jpg';
		} else {
			$namaFoto = $fileFoto->getRandomName();
			$fileFoto->move('foto', $namaFoto);
			\Config\Services::image()
				->withFile('foto/' . $namaFoto)
				->resize(500, 500)
				->save('foto/' . $namaFoto);
		}
		$this->siswaModel->save([
			'nim' => $this->request->getVar('nim'),
			'nama' => $this->request->getVar('nama'),
			'kelas' => $this->request->getVar('kelas'),
			'email' => $this->request->getVar('email'),
			'no_hp' => $this->request->getVar('no_hp'),
			'alamat' => $this->request->getVar('alamat'),
			'nilai' => $this->request->getVar('nilai'),
			'foto' => $namaFoto,
		]);
		session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
		return redirect()->to('/siswa');
	}

	public function detail($nim)
	{
		$data = [
			'siswa' => $this->siswaModel->getSiswa($nim),
			'title' => 'View Data'
		];
		return view('siswa/detail', $data);
	}
	public function delete($nim)
	{
		$siswa = $this->siswaModel->getSiswa($nim);
		if ($siswa['foto'] != 'default.jpg') {
			unlink('foto/' . $siswa['foto']);
		}

		$this->siswaModel->delete($siswa['id']);
		session()->setFlashdata('success', 'Data Berhasil Dihapus');
		return redirect()->to('/siswa');
	}

	public function edit($nim)
	{
		$data = [
			'siswa' => $this->siswaModel->getSiswa($nim),
			'title' => 'Halaman Edit',
			'validation' =>  \Config\Services::validation(),
		];
		return view('siswa/edit', $data);
	}
	public function update($nim)
	{
		$dataLama = $this->siswaModel->getSiswa($nim);
		if ($dataLama['nim'] == $this->request->getVar('nim')) {
			$rule_nim = 'required';
		} else {
			$rule_nim = 'is_unique[tbl_siswa.nim]|required';
		}
		if (!$this->validate([
			'nim' => [
				'rules' => $rule_nim,
				'errors' => [
					'required' => '{field} Harus Diisi',
					'is_unique' => '{field} Sudah Ada'
				]
			],
			'nama' => [
				'rules' => 'required',
			],
			'kelas' => [
				'rules' => 'required',
			],
			'email' => [
				'rules' => 'required',
			],
			'no_hp' => [
				'rules' => 'required',
			],
			'alamat' => [
				'rules' => 'required',
			],
			'foto' => [
				'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,1024]',
				'errors' => [
					'is_image' => 'File yang diupload bukan file gambar',
					'max_size' => 'File yang anda pilih terlalu besar',
					'is_mime'  => 'File yang diupload bukan file gambar',
				]
			],
		])) {
			return redirect()->to('/siswa/edit/' . $nim)->withInput();
		}
		// if ($fileFoto->hasFile())
		$fileFoto = $this->request->getFile('foto');
		if ($fileFoto->getError() == 4) {
			$namaFoto = $dataLama['foto'];
		} else {
			$namaFoto = $fileFoto->getRandomName();
			$fileFoto->move('foto', $namaFoto);
			\Config\Services::image()
				->withFile('foto/' . $namaFoto)
				->resize(500, 500)
				->save('foto/' . $namaFoto);
		}
		$this->siswaModel->save([
			'id' => $dataLama['id'],
			'nim' => $this->request->getVar('nim'),
			'nama' => $this->request->getVar('nama'),
			'kelas' => $this->request->getVar('kelas'),
			'email' => $this->request->getVar('email'),
			'no_hp' => $this->request->getVar('no_hp'),
			'alamat' => $this->request->getVar('alamat'),
			'nilai' => $this->request->getVar('nilai'),
			'foto' => $namaFoto,
		]);
		session()->setFlashdata('success', 'Data Berhasil Diubah');
		return redirect()->to('/siswa');
	}

	public function leaderboard()
	{
		$data = [
			'title' => 'Leaderboard',
			'siswa' => $this->siswaModel->getPeringkat(),
		];
		return view('siswa/leaderboard', $data);
	}
	public function tambahNilai($nim)
	{
		$dataLama = $this->siswaModel->getSiswa($nim);
		$nilaiLama = $dataLama['nilai'];
		$nilaiTambah = $this->request->getVar('nilaiTambah');
		$nilai = intval($nilaiLama) + intval($nilaiTambah);

		$this->siswaModel->save([
			'id' 	=> $dataLama['id'],
			'nilai' => $nilai
		]);
		return redirect()->to('/siswa/leaderboard');
	}
}
