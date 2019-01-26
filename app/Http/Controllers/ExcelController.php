<?php
namespace laravel\Http\Controllers;
use Illuminate\Http\Request;
use laravel\Producto;
use \Excel;
use Validator;
use JavaScript;
use laravel\Http\Requests\ProductoFormRequest;
use DB;

class ExcelController extends Controller
{
    protected $request;
    protected $producto;
    protected $data = [];
    protected $i = 1;
    protected $errors;
    protected $input;
    protected $rules;

    public function __construct(Request $request, Producto $producto)
    {
        $this->request = $request;
        $this->producto = $producto;
        $this->errors = [];
        $this->data = [];
        $this->rules = [
            'nombre'         => 'required|regex:/^[A-z][A-z\s\.\']+$/|max:250',
            'descripcion'    => 'required|regex:/^[A-z][A-z\s\.\']+$/|max:250',
            'imagen'         => 'required|regex:/^[A-z][A-z\s\.\']+$/|max:250',
            'stock'          =>'required|numeric|max:9999999999',
            'costo_unitario' => 'required|numeric|max:9999999999',
            'unidad_de_medida'=> 'required|regex:/^[A-z][A-z\s\.\']+$/|max:250',
    
        ];
    }

    public function index()
    {
        return view('registro.index');
    }

    public function tabla()
    {
        return view('registro.tabla');
    }

    public function importFile(Request $request, Producto $producto)
    {
        $this->processData($request);

        return view('registro.export', [ 'data' => $this->data, 'errors' => $this->errors, 'input' => $this->input]);
    }

    /**
     * Validate cell against the rules.
     *
     * @param array $data
     * @param array $rules
     *
     * @return array
     */
    protected function validateCell(array $data, array $rules)
    {
        // Perform Validation
        $validator = \Validator::make($data, $rules);

        if ($validator->fails()) {
            $errorMessages = $validator->errors()->messages();

            // crete error message by using key and value
            foreach ($errorMessages as $key => $value) {
                $errorMessages = $value[0];
            }

            return $errorMessages;
        }

        return [];
    }

   
   public function store(Request $request)
    {
        $this->validateData($request);

        if (!empty($this->errors)) {
            return view('registro.export', [
                'data' => $this->data,
                'errors' => $this->errors,
                'input' => $this->input
            ]);
        }

        foreach ($this->data as $data) {

            $data = array_except($data, ['id']);

            $producto = new Producto;
            $producto->nombre = $data['nombre'];
            $producto->descripcion = $data['descripcion'];
            $producto->imagen = $data['imagen'];
            $producto->stock = $data['stock'];
            $producto->costo_unitario = $data['costo_unitario'];
            $producto->unidad_de_medida = $data['unidad_de_medida'];
            $producto->save();
        }

        return redirect()->route('home')->with('info', 'Datos Guardados');
    }
     protected function processData($request)
    {
        Excel::selectSheetsByIndex(0)->load($request->excel, function($reader) {
            
            //$reader->formatDates(true, 'd-m-Y');

            $excel = $reader->get();

            $this->errors = [];
            $this->rowNumber = 0;

            $excel->each(function($row) {

                $this->data[$this->rowNumber] = [
                    'nombre'        => $row->nombre,
                    'descripcion'   => $row->descripcion,
                    'imagen'        => $row->imagen,
                    'stock'         => $row->stock,
                    'costo_unitario'=> $row->costo_unitario,
                    'unidad_de_medida' => $row->unidad_de_medida,
                ];

                foreach ($this->data[$this->rowNumber] as $key => $value) {

                    $error = $this->validateCell([$key => $value], [$key => $this->rules[$key]]);

                    if (!empty($error)) {
                        $this->errors[$this->rowNumber][$key] = $error;
                    }
                    
                }

                $this->data[$this->rowNumber]['id'] = $this->rowNumber;

                $this->rowNumber++;
            });
        });
    }
    protected function validateData($request)
    {
        $data = $request->except('_token');

        $this->errors = [];
        $this->rowNumber = 0;

        foreach ($data as $dataKey => $value) {

            $i = 0;

            foreach ($value as $item) {

                $error = $this->validateCell([$dataKey => $item], [$dataKey => $this->rules[$dataKey]]);

                if (!empty($error)) {
                    $this->errors[$i][$dataKey] = $error;
                }

                $this->data[$i]['id'] = $i;

                $this->data[$i][$dataKey] = $item;

                $i++;
            }
        }
    }

}