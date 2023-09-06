<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\CategoriaProductos;
use App\Models\Productos;
use App\Models\Proveedores;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller
{
    public function index()
    {
        $proveedores = Proveedores::get();
        $categorias = CategoriaProductos::get();
        return view('productos.index', compact('proveedores', 'categorias'));
    }
    public function getProductos()
    {
        $getProducto = Productos::with(['usuario:id,nombre,usuario', 'proveedor:id,nombre_proveedor', 'categoria:id,nombre_categoria'])
            ->orderByDesc('created_at')
            ->get();

        return $getProducto;
    }
    public function create(ProductoRequest $request)
    {

        $nombre_producto = $request->nombre_producto;
        $codigo_barra = $request->codigo_barras;
        $inventario = $request->inventario;
        $alerta_minina = $request->alerta_minima;
        $alerta_maxima = $request->alert_maxima;
        $precio_venta = $request->precio_venta;
        $estatus = $request->estatus;
        $proveedores_id = $request->proveedores_id;
        $categoria_producto = $request->categorias_id;
        $cantidad_producto = !is_null($request->cantidad_producto) ? $request->cantidad_producto : 0;

        try {
            Productos::create([
                'nombre_producto' => $nombre_producto,
                'codigo_barras' => $codigo_barra,
                'inventario' => $inventario,
                'cantidad_producto' => $cantidad_producto,
                'alerta_minima' => $alerta_minina,
                'alerta_maxima' => $alerta_maxima,
                'precio_venta' => $precio_venta,
                'users_id' => auth()->id(),
                'estatus' => $estatus,
                'proveedores_id' => $proveedores_id,
                'categoria_productos_id' => $categoria_producto,

            ]);
            return redirect()->back()->with('success', 'Registro Éxitoso!');
        } catch (Exception $e) {

            return redirect()->back()->with('error', $e);
        }
    }
    public function edit(Request $request)
    {

        $iIDProducto = $request->iIDProducto;
        try {
            $getProducto = Productos::
                with(['usuario:id,nombre,usuario', 'proveedor:id,nombre_proveedor', 'categoria:id,nombre_categoria'])
                ->find($iIDProducto);

            return response()->json($getProducto);
        } catch (Exception $e) {
            $mensaje = array(
                'iError' => true,
                'cMensaje' => $e->getMessage(),
            );
            return response()->json($mensaje);
        }
    }
    public function update(ProductoRequest $request, $id)
    {

        $nombre_proveedor = $request->nombre_proveedor;
        $numero_telefono = !is_null($request->numero_telefono) ? $request->numero_telefono : 'S/N';
        $rfc = !is_null($request->rfc) ? $request->rfc : 'S/RFC';
        try {
            Productos::findOrFail($id)->update([
                'nombre_proveedor' => $nombre_proveedor,
                'numero_telefono' => $numero_telefono,
                'rfc' => $rfc,
            ]);
            return redirect()->back()->with('success', 'Modificacion Éxitosa!');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', $e);
        }
    }
}
