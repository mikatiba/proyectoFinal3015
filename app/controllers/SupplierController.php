<?php
//requiere el suplidor
require_once 'models/SupplierModel.php';

class SupplierController {
    //método para mostrar el formulario de creación
    public function create() {
        // Lógica para crear un suplidor
    }
    //método para almacenar la data
    public function store($data) {
        $supplier = new SupplierModel();
        $supplier->nombre = $data['nombre'];
        $supplier->email = $data['email'];
        $supplier->telefono = $data['telefono'];
        $supplier->save();
    }
    //método para la lista de proveedores
    public function list() {
        $supplier = new SupplierModel();
        return $supplier->getAll();
    }
        //método para obtener los datos de un suplidor
    public function edit($id) {
        $supplier = new SupplierModel();
        return $supplier->find($id);
    }
    //método para actualizar datos de un suplidor
    public function update($id, $data) {
        $supplier = new SupplierModel();
        $supplier->nombre = $data['nombre'];
        $supplier->email = $data['email'];
        $supplier->telefono = $data['telefono'];
        $supplier->update($id);
    }
    //método para eliminar un suplidor
    public function delete($id) {
        $supplier = new SupplierModel();
        $supplier->delete($id);
    }
}
