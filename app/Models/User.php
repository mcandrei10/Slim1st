<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; //extinde clasa Model a Eloquent

class User extends Model
{
      // defineste class-a User ca o extensie a clasei Model a Eloquent
      // astfel clasa User va putea accesa BD si va mosteni proprietatiile de accesare a BD

      protected $table = 'users'; // se creaza o variabila (table) care va referi unic tabelul din BD

      protected $fillable = [
        'email',
        'name',
        'password',
      ];

      public function setPassword($password)
      {
        $this->update([
          'password' => password_hash($password, PASSWORD_DEFAULT),
        ]);
      }
}
