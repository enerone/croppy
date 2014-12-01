<?php namespace Larabook\Users;

class TiposcultivoRepository {
    /**
    * Persist a Tipo de cultivo
    * @param  User   $user [description]
    * @return mixed
    */
    public function save(Tipocultivo $tipocultivo) {
    return $tipocultivo->save();
    }


    public function getPaginated($howMany=25){

    return User::orderBy('titulo','asc')->paginate($howMany);

    }

    /**
    * Find the tipo de cultivo by their id
    *
    * @param $id
    * @return mixed
    */
    public function findById($id)
    {
    return Tipocultivo::findOrFail($id);
    }

}