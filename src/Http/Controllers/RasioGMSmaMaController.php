<?php namespace Bantenprov\RasioGMSmaMa\Http\Controllers;

/* require */
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\RasioGMSmaMa\Facades\RasioGMSmaMa;

/* Models */
use Bantenprov\RasioGMSmaMa\Models\Bantenprov\RasioGMSmaMa\RasioGMSmaMa as PdrbModel;
use Bantenprov\RasioGMSmaMa\Models\Bantenprov\RasioGMSmaMa\Province;
use Bantenprov\RasioGMSmaMa\Models\Bantenprov\RasioGMSmaMa\Regency;

/* etc */
use Validator;

/**
 * The RasioGMSmaMaController class.
 *
 * @package Bantenprov\RasioGMSmaMa
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioGMSmaMaController extends Controller
{

    protected $province;

    protected $regency;

    protected $rasio_guru_murid_sma_ma;

    public function __construct(Regency $regency, Province $province, PdrbModel $rasio_guru_murid_sma_ma)
    {
        $this->regency  = $regency;
        $this->province = $province;
        $this->rasio_guru_murid_sma_ma     = $rasio_guru_murid_sma_ma;
    }

    public function index(Request $request)
    {
        /* todo : return json */

        return 'index';

    }

    public function create()
    {

        return response()->json([
            'provinces' => $this->province->all(),
            'regencies' => $this->regency->all()
        ]);
    }

    public function show($id)
    {

        $rasio_guru_murid_sma_ma = $this->rasio_guru_murid_sma_ma->find($id);

        return response()->json([
            'negara'    => $rasio_guru_murid_sma_ma->negara,
            'province'  => $rasio_guru_murid_sma_ma->getProvince->name,
            'regencies' => $rasio_guru_murid_sma_ma->getRegency->name,
            'tahun'     => $rasio_guru_murid_sma_ma->tahun,
            'data'      => $rasio_guru_murid_sma_ma->data
        ]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'negara'        => 'required',
            'province_id'   => 'required',
            'regency_id'    => 'required',
            'kab_kota'      => 'required',
            'tahun'         => 'required|integer',
            'data'          => 'required|integer',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'title'     => 'error',
                'message'   => 'add failed',
                'type'      => 'failed',
                'errors'    => $validator->errors()
            ]);
        }

        $check = $this->rasio_guru_murid_sma_ma->where('regency_id',$request->regency_id)->where('tahun',$request->tahun)->count();

        if($check > 0)
        {
            return response()->json([
                'title'         => 'error',
                'message'       => 'Data allready exist',
                'type'          => 'failed',
            ]);

        }else{
            $data = $this->rasio_guru_murid_sma_ma->create($request->all());

            return response()->json([
                    'type'      => 'success',
                    'title'     => 'success',
                    'id'      => $data->id,
                    'message'   => 'PDRB '. $this->regency->find($request->regency_id)->name .' tahun '. $request->tahun .' successfully created',
                ]);
        }

    }

    public function update(Request $request, $id)
    {
        /* todo : return json */
        return '';

    }

    public function destroy($id)
    {
        /* todo : return json */
        return '';

    }
}

