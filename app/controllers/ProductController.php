<?php
require_once 'models/ProductModel.php';

class ProductController {
    public function create() {
        // Lógica para crear un producto
    }

    public function store($data) {
        $product = new ProductModel();
        $product->nombre = $data['nombre'];
        $product->suplidor = $data['suplidor'];
        $product->cantidad = $data['cantidad'];
        $product->precio = $data['precio'];
        $product->save();
    }

    public function list() {
        $product = new ProductModel();
        return $product->getAll();
    }

    public function edit($id) {
        $product = new ProductModel();
        return $product->find($id);
    }

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
