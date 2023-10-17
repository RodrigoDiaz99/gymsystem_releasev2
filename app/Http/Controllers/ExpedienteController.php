<?php

namespace App\Http\Controllers;

use App\Models\Cirugias;
use App\Models\ControlPeso;
use App\Models\EnfermedadesCronicas;
use App\Models\EnfermedadesMentales;
use App\Models\Expediente;
use App\Models\ExpedienteFoto;
use App\Models\HabitosPsicobiologicos;
use App\Models\SintomasAdicionales;
use App\Models\Suplementos;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PDF;

class ExpedienteController extends Controller
{
    public function index()
    {
        return view('expediente.index');
    }

    public function create()
    {
        $user = User::orderBy('id', 'asc')
            ->distinct()
            ->where('expediente', 0)
            ->get();
        return view('expediente.create', compact('user'));
    }

    public function getUsuario(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        return $user;
    }
    public function getExpediente()
    {
        $getExpediente = Expediente::with(['usuario:id,nombre,usuario,codigo_usuario'])->orderByDesc('created_at')
            ->get();

        return $getExpediente;
    }

    public function getExpedienteUsuario(Request $request)
    {

        $expediente = Expediente::orderBy('id', 'asc')
            ->where('users_id', $request->user_id)
            ->select('id', 'numero_control')
            ->get();

        return $expediente;
    }
    public function store(Request $request)
    {

        DB::beginTransaction();
        try {

            $UserId = $request->users_id;
            $UserNombre = $request->nombre;
            $apellidoPaterno = $request->apellido_paterno;
            $apellidoMaterno = $request->apellido_materno;
            $edad = $request->edad;
            $telefono = $request->telefono;
            $fechaNacimiento = $request->fecha_nacimiento;
            $NombreContacto = $request->nombre_contacto;
            $ocupacion = $request->ocupacion;
            $user = User::findOrFail($UserId);

            $user->nombre = $UserNombre;
            $user->apellido_paterno = $apellidoPaterno;
            $user->apellido_materno = $apellidoMaterno;
            $user->telefono = $telefono;
            $user->edad = $edad;
            $user->fecha_nacimiento = $fechaNacimiento;
            $user->nombre_contacto = $NombreContacto;
            $user->ocupacion = $ocupacion;
            $user->expediente = true;
            $user->update();

            $fechaEntrevista = Carbon::now();
            $tipoDieta = $request->tipo_dieta;
            $servicioMedico = $request->servicio_medico;
            $usoLentes = $request->uso_lentes;

            if ($tipoDieta == 'hipocalorica') {
                $tipo_dieta = 'Hipocalorica (1,200 a 1,500 kcal)';
            } else if ($tipoDieta == 'hipercalorica') {
                $tipo_dieta = 'Hipercaloríca (2,800 a 3000 kcal)';
            }

            $expediente = new Expediente();
            $expediente->date_interview = $fechaEntrevista;
            $expediente->tipo_dieta = $tipo_dieta;
            $expediente->servicio_medico = $servicioMedico;
            $expediente->descanso = in_array('descanso', $usoLentes);
            $expediente->hipermetropia = in_array('hipermetropia', $usoLentes);
            $expediente->miopia = in_array('miopia', $usoLentes);
            $expediente->astigmatismo = in_array('astigmatismo', $usoLentes);
            $expediente->desmayos = in_array('desmayos', $usoLentes);
            $expediente->mareos = in_array('mareos', $usoLentes);
            $expediente->hospitalizaciones = in_array('hospitalizaciones', $usoLentes);
            $expediente->fracturas = in_array('fracturas', $usoLentes);
            $expediente->numero_control = 1;
            $expediente->users_id = $user->id;
            $expediente->save();
            $enfermedadesCronicas = $request->enfermedades_cronicas;
            $enfermedades_cronicas = new EnfermedadesCronicas();
            $enfermedades_cronicas->hipertension_arterial = in_array('hipertension_arterial', $enfermedadesCronicas);
            $enfermedades_cronicas->colesterol = in_array('colesterol', $enfermedadesCronicas);
            $enfermedades_cronicas->trigliceridos = in_array('trigliceridos', $enfermedadesCronicas);
            $enfermedades_cronicas->anemia = in_array('anemia', $enfermedadesCronicas);
            $enfermedades_cronicas->bronquitis = in_array('bronquitis', $enfermedadesCronicas);
            $enfermedades_cronicas->asma = in_array('asma', $enfermedadesCronicas);
            $enfermedades_cronicas->convulsiones = in_array('convulsiones', $enfermedadesCronicas);
            $enfermedades_cronicas->nervio_ciatico = in_array('nervio_ciatico', $enfermedadesCronicas);
            $enfermedades_cronicas->diabetes = in_array('diabetes', $enfermedadesCronicas);
            $enfermedades_cronicas->lumbagia = in_array('lumbagia', $enfermedadesCronicas);
            $enfermedades_cronicas->arritmia = in_array('arritmia', $enfermedadesCronicas);
            $enfermedades_cronicas->narcolepsia = in_array('narcolepsia', $enfermedadesCronicas);
            $enfermedades_cronicas->expedientes_id = $expediente->id;
            $enfermedades_cronicas->save();

            $enfermedadesMentales = $request->enfermedades_mentales;
            $enfermedades_mentales = new EnfermedadesMentales();
            $enfermedades_mentales->ansiedad = in_array('ansiedad', $enfermedadesMentales);
            $enfermedades_mentales->anorexia = in_array('anorexia', $enfermedadesMentales);
            $enfermedades_mentales->bulimia = in_array('bulimia', $enfermedadesMentales);
            $enfermedades_mentales->obesidad = in_array('obesidad', $enfermedadesMentales);
            $enfermedades_mentales->epilepsia = in_array('epilepsia', $enfermedadesMentales);
            $enfermedades_mentales->depresion = in_array('depresion', $enfermedadesMentales);
            $enfermedades_mentales->depresion_postparto = in_array('depresion_postparto', $enfermedadesMentales);
            $enfermedades_mentales->estres_cronico = in_array('estres_cronico', $enfermedadesMentales);
            $enfermedades_mentales->estres_postraumatico = in_array('estres_postraumatico', $enfermedadesMentales);
            $enfermedades_mentales->fobias = in_array('lumbagia', $enfermedadesCronicas);
            $enfermedades_mentales->expedientes_id = $expediente->id;
            $enfermedades_mentales->save();

            $cesarea = $request->cesarea == 1 ? $request->cesarea : 0;
            $extirpacion_matriz = $request->extirpacion_matriz == 1 ? $request->extirpacion_matriz : 0;
            $embarazo = $request->embarazo == 1 ? $request->embarazo : 0;

            $abortos = $request->abortos == 1 ? $request->abortos : 0;
            $extirpacion_apendice = $request->extirpacion_apendice == 1 ? $request->extirpacion_apendice : 0;
            $extirpacion_vesicula = $request->extirpacion_vesicula == 1 ? $request->extirpacion_vesicula : 0;
            $hernias = $request->hernias == 1 ? $request->hernias : 0;
            $extirpacion_senos = $request->extirpacion_senos == 1 ? $request->extirpacion_senos : 0;
            $piedras_riñon = $request->piedras_riñon == 1 ? $request->piedras_riñon : 0;
            $otro = $request->otro == 1 ? $request->otro : 0;
            $cirugias = new Cirugias();
            $cirugias->cesarea = $cesarea;
            $cirugias->fecha_cesarea = $request->fecha_cesarea;
            $cirugias->extirpacion_matriz = $extirpacion_matriz;
            $cirugias->fecha_extirpacion = $request->fecha_extirpacion;
            $cirugias->embarazo = $embarazo;
            $cirugias->fecha_embarazo = $request->fecha_embarazo;
            $cirugias->numero_embarazos = $request->numero_embarazos;
            $cirugias->abortos = $abortos;
            $cirugias->fecha_aborto = $request->fecha_aborto;
            $cirugias->extirpacion_apendice = $extirpacion_apendice;
            $cirugias->fecha_extirpacion_apendice = $request->fecha_extirpacion_apendice;
            $cirugias->extirpacion_vesicula = $extirpacion_vesicula;
            $cirugias->fecha_extirpacion_vesicula = $request->fecha_extirpacion_vesicula;
            $cirugias->hernias = $hernias;
            $cirugias->fecha_hernias = $request->fecha_hernias;
            $cirugias->extirpacion_senos = $extirpacion_senos;
            $cirugias->fecha_extirpacion_senos = $request->fecha_extirpacion_senos;
            $cirugias->piedras_riñon = $piedras_riñon;
            $cirugias->fecha_piedras_riñon = $request->fecha_piedras_riñon;
            $cirugias->otro = $otro;

            $cirugias->explicacion_otro = $request->explicacion_otro;
            $cirugias->expedientes_id = $expediente->id;

            $cirugias->save();

            $sintomasAdicionales = $request->sintomas_adicionales;
            $sintomas_adicionales = new SintomasAdicionales();
            $sintomas_adicionales->manchas_oscura_axilas = in_array('manchas_oscura_axilas', $sintomasAdicionales);
            $sintomas_adicionales->manchas_oscura_mejillas = in_array('manchas_oscura_mejillas', $sintomasAdicionales);
            $sintomas_adicionales->manchas_oscura_entrepierna = in_array('manchas_oscura_entrepierna', $sintomasAdicionales);
            $sintomas_adicionales->manchas_rosada_rostro = in_array('manchas_rosada_rostro', $sintomasAdicionales);
            $sintomas_adicionales->manchas_blanca_boca = in_array('manchas_blanca_boca', $sintomasAdicionales);
            $sintomas_adicionales->manchas_oscura_cuello = in_array('manchas_oscura_cuello', $sintomasAdicionales);
            $sintomas_adicionales->sintomas_cancer = in_array('sintomas_cancer', $sintomasAdicionales);
            $sintomas_adicionales->acne = in_array('acne', $sintomasAdicionales);
            $sintomas_adicionales->alergias = in_array('alergias', $sintomasAdicionales);
            $sintomas_adicionales->migraña = in_array('migraña', $sintomasAdicionales);
            $sintomas_adicionales->golpes_espalda = in_array('golpes_espalda', $sintomasAdicionales);
            $sintomas_adicionales->golpes_cabeza = in_array('golpes_cabeza', $sintomasAdicionales);
            $sintomas_adicionales->medicamentos = json_encode($request->medicamentos);

            $sintomas_adicionales->expedientes_id = $expediente->id;
            $sintomas_adicionales->save();

            $habitos_psicobiologicos = new HabitosPsicobiologicos();
            $habitos_psicobiologicos->numero_comidas = $request->numero_comidas;
            $habitos_psicobiologicos->ayunos = $request->ayunos;
            $habitos_psicobiologicos->horas_ayuno = $request->horas_ayuno;
            $habitos_psicobiologicos->sueño = $request->sueño;
            $habitos_psicobiologicos->micciones_dia = $request->micciones_dia;
            $habitos_psicobiologicos->micciones_noche = $request->micciones_noche;
            $habitos_psicobiologicos->evacuaciones = $request->evacuaciones;
            $habitos_psicobiologicos->tabaco = $request->tabaco;
            $habitos_psicobiologicos->alcohol = $request->alcohol;
            $habitos_psicobiologicos->expedientes_id = $expediente->id;
            $habitos_psicobiologicos->save();

            $control_peso = new ControlPeso();
            $control_peso->fecha_visita = $request->fecha_visita;
            $control_peso->talla_ropa = $request->talla_ropa;
            $control_peso->altura = $request->altura;
            $control_peso->peso = $request->peso;
            $control_peso->cuello = $request->cuello;
            $control_peso->busto = $request->busto;
            $control_peso->cintura = $request->cintura;
            $control_peso->cadera = $request->cadera;
            $control_peso->brazo_der = $request->brazo_der;
            $control_peso->brazo_izq = $request->brazo_izq;

            $control_peso->pierna_der = $request->pierna_der;
            $control_peso->pierna_izq = $request->pierna_izq;
            $control_peso->observaciones = $request->observaciones;
            $control_peso->alimentos_no_agradables = $request->alimentos_no_agradables;
            $control_peso->alergia_alimentos = $request->alergia_alimentos;
            $control_peso->expedientes_id = $expediente->id;
            $control_peso->save();

            $suplementos = new Suplementos();
            $suplementos->creatina = $request->creatina;
            $suplementos->proteina = $request->proteina;
            $suplementos->hmb = $request->hmb;
            $suplementos->testrol = $request->testrol;
            $suplementos->bnox = $request->bnox;
            $suplementos->betalanina = $request->betalanina;
            $suplementos->animal_pak = $request->animal_pak;
            $suplementos->lcarnitina = $request->lcarnitina;
            $suplementos->cla = $request->cla;
            $suplementos->taurina = $expediente->taurina;

            $suplementos->colageno = $expediente->colageno;
            $suplementos->aminoacidos = $expediente->aminoacidos;
            $suplementos->bca = $expediente->bca;
            $suplementos->glutamina = $expediente->glutamina;
            $suplementos->leucina = $expediente->leucina;

            $suplementos->itravil = $expediente->itravil;
            $suplementos->redotex = $expediente->redotex;
            $suplementos->acxion = $expediente->acxion;
            $suplementos->te_divina = $expediente->te_divina;
            $suplementos->piñalim = $expediente->piñalim;
            $suplementos->herbalife = $expediente->herbalife;
            $suplementos->omnilife = $expediente->omnilife;
            $suplementos->cromasol = $expediente->cromasol;
            $suplementos->farmasi = $expediente->farmasi;
            $suplementos->otros = $expediente->otros;

            $suplementos->expedientes_id = $expediente->id;
            $control_peso->save();

            if ($request->hasFile('path')) {
                $imagenes = $request->file('path');
                // dd($imagenes);
                $i = 1;

                foreach ($imagenes as $imagen) {
                    $nombre = time() . $i . '_' . $user->name . '_' . $expediente->numero_control . '_' . $expediente->id . '.' . $imagen->getClientOriginalExtension();
                    //$ruta = 'app/public/imagenes/' . $usuario->name . "/".$record->numero_control."/" . $nombre;
                    $ruta = storage_path('app/public/imagenes/' . $user->name . '/' . $expediente->numero_control . '/' . $nombre);
                    $photo = new ExpedienteFoto();
                    $photo->ruta = $ruta;
                    $photo->expedientes_id = $expediente->id;
                    //dd($photo,$ruta,storage_path('app/public/imagenes/' . $usuario->name . "/".$record->numero_control."/" . $nombre));
                    $photo->save();
                    $contenido_archivo = file_get_contents($imagen);
                    $route = 'imagenes/' . $user->name . '/' . $expediente->numero_control . '/' . $nombre;
                    $laravel_path = Storage::disk('public')->put($route, $contenido_archivo);
                    $i++;
                }
            }

            DB::commit();
            return redirect()
                ->route('expediente.index')
                ->with('success', '¡Se agrego el expediente del usuario de forma exitosa!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->with('error', 'Hubo un error al agregar los datos. Verifique los datos.');
        }

    }
    public function edit($id)
    {
        $record = Expediente::where('users_id', $id)
            ->latest('created_at')
            ->first();

        return view('expediente.edit', compact('record'))->render();
    }

    public function pdfExpediente($id)
    {
        $expediente = Expediente::find($id)

            ->orderByDesc('created_at')
            ->first();

        $getExpediente = Expediente::find($id)

            ->orderByDesc('created_at')
            ->get();

        $getExpedienteCount = Expediente::find($id)

            ->count();

        $pdf = PDF::loadView('expediente/pdf/expediente', compact('expediente', 'getExpediente','getExpedienteCount'))->setPaper('A4', 'portrait');
        $pdf->output();
        $filename = 'Expediente' . '_' . $expediente->numero_control . '.pdf';
        return $pdf->stream($filename);

    }

}
