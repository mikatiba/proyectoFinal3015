<?php
require_once 'models/SupplierModel.php';

class SupplierController {
    public function create() {
        // Lógica para crear un suplidor
    }

    public function store($data) {
        $supplier = new SupplierModel();
        $supplier->nombre = $data['nombre'];
        $supplier->email = $data['email'];
        $supplier->telefono = $data['telefono'];
        $supplier->save();
    }

    public function list() {
        $supplier = new SupplierModel();
        return $supplier->getAll();
    }

    public function edit($id) {
        $supplier = new SupplierModel();
        return $supplier->find($id);
    }

    public function update($id, $data) {
        $supplier = new SupplierModel();
        $supplier->nombre = $data['nombre'];
        $supplier->email = $data['email'];
        $supplier->telefono = $data['telefono'];
        $supplier->update($id);
    }

    public function delete($id) {
        $supplier = new SupplierModel();
        $supplier->delete($id);
    }
}
