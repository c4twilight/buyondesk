<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class datas extends Model {
	public $table = "datas";

	public function users() {
		return $this->hasMany(User::class);
	}
}
