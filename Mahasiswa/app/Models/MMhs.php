<?php

namespace App\Models;

use CodeIgniter\Model;

class MMhs extends Model
{
	protected $table = 'mahasiswa';
	protected $primaryKey = 'id';

	protected $useAutoIncrement = true;
    protected $allowedFields = ['nrp', 'nama', 'jurusan', 'alamat', 'no_telepon'];
}