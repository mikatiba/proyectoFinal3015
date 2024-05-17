<?php
require_once 'models/ProductModel.php';

class ProductController {
    //Método para crear un producto
    public function create() {
        // Lógica para crear un producto
    }
    //nos permite almacenar un producto en la base de datos
    public function store($data) {
        $product = new ProductModel();
        $product->nombre = $data['nombre'];
        $product->suplidor = $data['suplidor'];
        $product->cantidad = $data['cantidad'];
        $product->precio = $data['precio'];
        //se le hace llamada al método save() para guardar el producto
        $product->save();
    }

    public function list() {
        $product = new ProductModel();
        return $product->getAll();
    }
    //Método para obtneer los datos de un producto específico para editar
    public function edit($id) {
        $product = new ProductModel();
        return $product->find($id);
    }
    //método para actualizar los datos del producto
    public function update($id, $data) {
        $product = new ProductModel();
        $product->nombre = $data['nombre'];
        $product->suplidor = $data['suplidor'];
        $product->cantidad = $data['cantidad'];
        $product->precio = $data['precio'];
        $product->update($id);
    }

    public function delete($id) {
        $product = new ProductModel();
        $product->delete($id);
    }
}
