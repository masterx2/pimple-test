<?php
/**
 * Created by PhpStorm.
 * User: masterx2
 * Date: 06.11.15
 * Time: 2:25
 */

namespace App\Controllers;

class dataController extends stdController {
    public function storeData($data) {
        $new_id = new \MongoId();
        $data['_id'] = $new_id;
        $this->db->data->insert($data);
        return $new_id;
    }
    public function getDataById($id) {
        return $this->db->data->findOne(["_id" => $id]);
    }
}